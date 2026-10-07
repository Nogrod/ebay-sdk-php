<?php

namespace Nogrod\eBaySDK\Tests;

use Nogrod\eBaySDK\Trading as T;
use Nogrod\eBaySDK\Trading\Client\TradingClassMap;
use Nogrod\eBaySDK\Trading\Client\TradingClient;
use PHPUnit\Framework\TestCase;

/**
 * Serialization of Trading API documents as the bulk data exchange (BDE) jobs
 * write and read them.
 */
final class TradingXmlTest extends TestCase
{
    private const NS = 'urn:ebay:apis:eBLBaseComponents';

    private static function client(): TradingClient
    {
        return new TradingClient([], null, new FakeHttpClient(''));
    }

    private static function item(int $i): T\ItemType
    {
        $item = new T\ItemType();
        $item->setSKU('SKU-'.$i);
        $item->setTitle('Bremsscheibe & Beläge '.$i);
        $item->setDescription('<p>Beschreibung mit <b>HTML</b> &amp; äöü</p>');
        $price = new T\AmountType(49.95);
        $price->setCurrencyID(T\CurrencyCodeType::VAL_EUR);
        $item->setStartPrice($price);
        $item->setQuantity(5);
        $category = new T\CategoryType();
        $category->setCategoryID('33564');
        $item->setPrimaryCategory($category);
        $pictures = new T\PictureDetailsType();
        $pictures->setPictureURL(['https://img.example.com/'.$i.'/1.jpg', 'https://img.example.com/'.$i.'/2.jpg']);
        $item->setPictureDetails($pictures);
        $specific = new T\NameValueListType();
        $specific->setName('Einbauposition');
        $specific->setValue(['Vorne', 'Links']);
        $item->setItemSpecifics([$specific]);

        return $item;
    }

    /**
     * A BDE upload file as supreme-parts builds it: requests from the *Type classes.
     */
    private static function bdeRequests(): T\BulkDataExchangeRequests
    {
        $add = new T\AddFixedPriceItemRequestType();
        $add->setItem(self::item(1));

        $status = new T\InventoryStatusType();
        $status->setSKU('SKU-2');
        $status->setQuantity(3);
        $revise = new T\ReviseInventoryStatusRequestType();
        $revise->setInventoryStatus([$status]);

        $tracking = new T\SetShipmentTrackingInfoRequestType();
        $tracking->setOrderID('01-11111-11111');

        $bde = new T\BulkDataExchangeRequests();
        $bde->setAddFixedPriceItemRequest([$add]);
        $bde->setReviseInventoryStatusRequest([$revise]);
        $bde->setSetShipmentTrackingInfoRequest([$tracking]);

        return $bde;
    }

    private static function writeFile(object $payload): string
    {
        $file = tempnam(sys_get_temp_dir(), 'ebay-sdk-test');
        try {
            self::client()->serializeSabreFile($payload, $file);

            return file_get_contents($file);
        } finally {
            unlink($file);
        }
    }

    /**
     * eBay rejected BDE files whose requests relied on the namespace of the root element.
     */
    public function testEveryBdeRequestDeclaresItsOwnNamespace(): void
    {
        $xml = self::writeFile(self::bdeRequests());

        $this->assertStringStartsWith('<?xml version="1.0" encoding="UTF-8"?>'."\n".'<BulkDataExchangeRequests xmlns="'.self::NS.'">', $xml);
        foreach (['AddFixedPriceItemRequest', 'ReviseInventoryStatusRequest', 'SetShipmentTrackingInfoRequest'] as $request) {
            $this->assertStringContainsString('<'.$request.' xmlns="'.self::NS.'">', $xml);
        }
        $this->assertSame(4, substr_count($xml, 'xmlns='), 'only the root and the requests declare the namespace');

        $doc = new \DOMDocument();
        $doc->loadXML($xml);
        $xpath = new \DOMXPath($doc);
        $xpath->registerNamespace('e', self::NS);
        $this->assertSame('3', $xpath->evaluate('string(/e:BulkDataExchangeRequests/e:ReviseInventoryStatusRequest/e:InventoryStatus/e:Quantity)'));
        foreach ($xpath->query('/e:BulkDataExchangeRequests/*') as $node) {
            $single = new \DOMDocument();
            $single->loadXML($doc->saveXML($node));
            $this->assertSame(self::NS, $single->documentElement->namespaceURI, $node->localName.' taken out of the file');
        }
    }

    public function testRequestsOfGlobalElementClassesDeclareTheirNamespace(): void
    {
        $requests = [];
        foreach (range(1, 3) as $i) {
            $request = new T\AddFixedPriceItemRequest();
            $request->setItem(self::item($i));
            $requests[] = $request;
        }
        $bde = new T\BulkDataExchangeRequests();
        $bde->setAddFixedPriceItemRequest($requests);

        $xml = self::writeFile($bde);

        $this->assertSame(3, substr_count($xml, '<AddFixedPriceItemRequest xmlns="'.self::NS.'">'));
        $this->assertSame(4, substr_count($xml, 'xmlns='));
    }

    public function testRequestIsWrittenAndReadBackUnchanged(): void
    {
        $client = self::client();
        $xml = $client->serializeSabre(self::bdeRequests());

        $this->assertStringContainsString('<StartPrice currencyID="EUR">49.95</StartPrice>', $xml);
        $this->assertStringContainsString('<Title>Bremsscheibe &amp; Beläge 1</Title>', $xml);
        $this->assertStringContainsString('<Description>&lt;p&gt;Beschreibung mit &lt;b&gt;HTML&lt;/b&gt; &amp;amp; äöü&lt;/p&gt;</Description>', $xml);

        $parsed = $client->deserializeSabre($xml);
        $this->assertInstanceOf(T\BulkDataExchangeRequests::class, $parsed);
        $item = $parsed->getAddFixedPriceItemRequest()[0]->getItem();
        $this->assertSame('EUR', $item->getStartPrice()->getCurrencyID());
        $this->assertSame(49.95, $item->getStartPrice()->value());
        $this->assertSame(['Vorne', 'Links'], $item->getItemSpecifics()[0]->getValue());
        $this->assertSame($xml, $client->serializeSabre($parsed));
    }

    public function testDateTimeIsWrittenInUtc(): void
    {
        $item = new T\ItemType();
        $item->setScheduleTime(new \DateTime('2026-10-07 12:00:00', new \DateTimeZone('Europe/Berlin')));
        $request = new T\AddFixedPriceItemRequest();
        $request->setItem($item);

        $this->assertStringContainsString('<ScheduleTime>2026-10-07T10:00:00.000Z</ScheduleTime>', self::client()->serializeSabre($request));
    }

    /**
     * Reads the result file one response at a time, as supreme-parts does.
     */
    public function testBdeResponsesAreReadOneByOne(): void
    {
        $reader = new \Sabre\Xml\Reader();
        $reader->elementMap = TradingClassMap::GetElements();
        $reader->open(__DIR__.'/fixtures/bde-responses.xml');
        $reader->read();
        $reader->read();
        $responses = [];
        while (\XMLReader::END_ELEMENT !== $reader->nodeType) {
            if (\XMLReader::ELEMENT === $reader->nodeType) {
                $responses[] = $reader->parseCurrentElement()['value'];
            } elseif (!$reader->read()) {
                break;
            }
        }
        $reader->close();

        $this->assertCount(3, $responses);
        [$add, $revise, $ack] = $responses;

        $this->assertInstanceOf(T\AddFixedPriceItemResponse::class, $add);
        $this->assertSame('123456789012', $add->getItemID());
        $this->assertSame('Warning', $add->getAck());
        $this->assertSame('2026-10-07T10:15:29+00:00', $add->getStartTime()->format(\DATE_ATOM));
        $this->assertCount(2, $add->getErrors());
        $error = $add->getErrors()[0];
        $this->assertSame('Text mit <b>CDATA</b> & Sonderzeichen äöü', $error->getLongMessage());
        $this->assertSame(['0', '1'], array_map(fn ($p) => $p->getParamID(), $error->getErrorParameters()));
        $this->assertSame([], $add->getErrors()[1]->getErrorParameters());
        $fees = $add->getFees();
        $this->assertCount(3, $fees);
        $this->assertSame('InsertionFee', $fees[1]->getName());
        $this->assertSame(0.35, $fees[1]->getFee()->value());
        $this->assertSame('EUR', $fees[1]->getFee()->getCurrencyID());

        $this->assertInstanceOf(T\ReviseInventoryStatusResponse::class, $revise);
        $this->assertSame(['SKU-2', 'SKU-3'], array_map(fn ($s) => $s->getSKU(), $revise->getInventoryStatus()));
        $this->assertSame(0, $revise->getInventoryStatus()[0]->getQuantity());

        $this->assertInstanceOf(T\OrderAckResponse::class, $ack);
        $this->assertSame('Success', $ack->getAck());
    }

    public function testResponseIsReadCompletely(): void
    {
        $client = self::client();
        $response = $client->deserialize(file_get_contents(__DIR__.'/fixtures/get-item-transactions.xml'), T\GetItemTransactionsResponse::class);

        $item = $response->getItem();
        $this->assertSame('Bremsscheibe & Beläge', $item->getTitle());
        $this->assertSame(['https://i.ebayimg.com/1.jpg', 'https://i.ebayimg.com/2.jpg'], $item->getPictureDetails()->getPictureURL());
        $this->assertSame(['Vorne', 'Links'], $item->getItemSpecifics()[1]->getValue());
        $this->assertSame(49.95, $item->getSellingStatus()->getCurrentPrice()->value());
        $this->assertSame([], $item->getShippingDetails()->getShippingServiceOptions(), 'absent lists read as []');

        $transactions = $response->getTransactionArray();
        $this->assertCount(3, $transactions);
        $this->assertSame('Größe', $transactions[0]->getVariation()->getVariationSpecifics()[1]->getName());
        $this->assertSame(2, $transactions[0]->getQuantityPurchased());
        $this->assertNull($transactions[1]->getVariation());

        $again = $client->deserializeSabre($client->serializeSabre($response));
        $this->assertEquals($response, $again, 'written and read again gives the same objects');
    }

    public function testWrongRootElementIsRejected(): void
    {
        $this->expectException(\UnexpectedValueException::class);
        self::client()->deserialize(file_get_contents(__DIR__.'/fixtures/get-item-transactions.xml'), T\GetItemResponse::class);
    }
}
