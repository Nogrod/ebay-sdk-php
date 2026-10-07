<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerRatingSummaryArrayType
 *
 * Type defining the <b>SellerRatingSummaryArray</b> container that is returned
 *  in the <b>GetFeedback</b> response. The <b>SellerRatingSummaryArray</b>
 *  container consists of an array of <b>AverageRatingSummary</b> containers,
 *  which provide details on Detailed Seller Ratings (DSRs), including the type of rating
 *  (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the
 *  seller's average rating for that DSR type, the total number of DSR ratings, and the
 *  period in which those ratings were received (the last year or the last 30 days).
 * XSD Type: SellerRatingSummaryArrayType
 */
class SellerRatingSummaryArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @var \Nogrod\eBaySDK\Trading\AverageRatingSummaryType[] $averageRatingSummary
     */
    private $averageRatingSummary = [

    ];

    /**
     * Adds as averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AverageRatingSummaryType $averageRatingSummary
     */
    public function addToAverageRatingSummary(\Nogrod\eBaySDK\Trading\AverageRatingSummaryType $averageRatingSummary)
    {
        if (!is_array($this->averageRatingSummary)) {
            throw new \LogicException('averageRatingSummary is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->averageRatingSummary[] = $averageRatingSummary;
        return $this;
    }

    /**
     * isset averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAverageRatingSummary($index)
    {
        return isset($this->averageRatingSummary[$index]);
    }

    /**
     * unset averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAverageRatingSummary($index)
    {
        unset($this->averageRatingSummary[$index]);
    }

    /**
     * Gets as averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AverageRatingSummaryType>
     */
    public function getAverageRatingSummary()
    {
        return $this->averageRatingSummary;
    }

    /**
     * Sets a new averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AverageRatingSummaryType> $averageRatingSummary
     * @return self
     */
    public function setAverageRatingSummary(iterable $averageRatingSummary)
    {
        $this->averageRatingSummary = $averageRatingSummary;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->averageRatingSummary;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AverageRatingSummary', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerRatingSummaryArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->averageRatingSummary = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'AverageRatingSummary':
                    $this->averageRatingSummary[] = \Nogrod\eBaySDK\Trading\AverageRatingSummaryType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['AverageRatingSummary'] = Func::jsonList($this->averageRatingSummary);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
