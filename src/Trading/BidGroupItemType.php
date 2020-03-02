<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidGroupItemType
 *
 * This type is deprecated.
 * XSD Type: BidGroupItemType
 */
class BidGroupItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * This field is deprecated.
     *
     * @var string $bidGroupItemStatus
     */
    private $bidGroupItemStatus = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $maxBidAmount
     */
    private $maxBidAmount = null;

    /**
     * Gets as item
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as bidGroupItemStatus
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getBidGroupItemStatus()
    {
        return $this->bidGroupItemStatus;
    }

    /**
     * Sets a new bidGroupItemStatus
     *
     * This field is deprecated.
     *
     * @param string $bidGroupItemStatus
     * @return self
     */
    public function setBidGroupItemStatus($bidGroupItemStatus)
    {
        $this->bidGroupItemStatus = $bidGroupItemStatus;
        return $this;
    }

    /**
     * Gets as maxBidAmount
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMaxBidAmount()
    {
        return $this->maxBidAmount;
    }

    /**
     * Sets a new maxBidAmount
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $maxBidAmount
     * @return self
     */
    public function setMaxBidAmount(\Nogrod\eBaySDK\Trading\AmountType $maxBidAmount)
    {
        $this->maxBidAmount = $maxBidAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getBidGroupItemStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidGroupItemStatus", $value);
        }
        $value = $this->getMaxBidAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxBidAmount", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroupItemStatus');
        if (null !== $value) {
            $this->setBidGroupItemStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxBidAmount');
        if (null !== $value) {
            $this->setMaxBidAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
