<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetBidderListResponseType
 *
 * Response to a <b>GetBidderList</b> call, which retrieves all items the
 *  user is currently bidding on, or has won or purchased.
 * XSD Type: GetBidderListResponseType
 */
class GetBidderListResponseType extends AbstractResponseType
{
    /**
     * Data for one eBay bidder.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $bidder
     */
    private $bidder = null;

    /**
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $bidItemArray
     */
    private $bidItemArray = null;

    /**
     * Gets as bidder
     *
     * Data for one eBay bidder.
     *
     * @return \Nogrod\eBaySDK\Trading\UserType
     */
    public function getBidder()
    {
        return $this->bidder;
    }

    /**
     * Sets a new bidder
     *
     * Data for one eBay bidder.
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $bidder
     * @return self
     */
    public function setBidder(\Nogrod\eBaySDK\Trading\UserType $bidder)
    {
        $this->bidder = $bidder;
        return $this;
    }

    /**
     * Adds as item
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     */
    public function addToBidItemArray(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        if (!is_array($this->bidItemArray)) {
            throw new \LogicException('bidItemArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->bidItemArray[] = $item;
        return $this;
    }

    /**
     * isset bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidItemArray($index)
    {
        return isset($this->bidItemArray[$index]);
    }

    /**
     * unset bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidItemArray($index)
    {
        unset($this->bidItemArray[$index]);
    }

    /**
     * Gets as bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ItemType>
     */
    public function getBidItemArray()
    {
        return $this->bidItemArray;
    }

    /**
     * Sets a new bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ItemType> $bidItemArray
     * @return self
     */
    public function setBidItemArray(iterable $bidItemArray)
    {
        $this->bidItemArray = $bidItemArray;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->bidder;
        if (null !== $value) {
            $writer->startElementNs(null, 'Bidder', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->bidItemArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'BidItemArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Item', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetBidderListResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->bidItemArray = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Bidder':
                    $this->bidder = \Nogrod\eBaySDK\Trading\UserType::xmlRead($reader);
                    return true;
                case 'BidItemArray':
                    $this->bidItemArray = Func::readList($reader, 'Item', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
