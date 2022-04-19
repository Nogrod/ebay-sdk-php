<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidGroupType
 *
 * This type is deprecated.
 * XSD Type: BidGroupType
 */
class BidGroupType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\BidGroupItemType[] $bidGroupItem
     */
    private $bidGroupItem = [

    ];

    /**
     * This field is deprecated.
     *
     * @var int $bidGroupID
     */
    private $bidGroupID = null;

    /**
     * This field is deprecated.
     *
     * @var string $bidGroupName
     */
    private $bidGroupName = null;

    /**
     * This field is deprecated.
     *
     * @var string $bidGroupStatus
     */
    private $bidGroupStatus = null;

    /**
     * Adds as bidGroupItem
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BidGroupItemType $bidGroupItem
     */
    public function addToBidGroupItem(\Nogrod\eBaySDK\Trading\BidGroupItemType $bidGroupItem)
    {
        $this->bidGroupItem[] = $bidGroupItem;
        return $this;
    }

    /**
     * isset bidGroupItem
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidGroupItem($index)
    {
        return isset($this->bidGroupItem[$index]);
    }

    /**
     * unset bidGroupItem
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidGroupItem($index)
    {
        unset($this->bidGroupItem[$index]);
    }

    /**
     * Gets as bidGroupItem
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\BidGroupItemType[]
     */
    public function getBidGroupItem()
    {
        return $this->bidGroupItem;
    }

    /**
     * Sets a new bidGroupItem
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\BidGroupItemType[] $bidGroupItem
     * @return self
     */
    public function setBidGroupItem(array $bidGroupItem)
    {
        $this->bidGroupItem = $bidGroupItem;
        return $this;
    }

    /**
     * Gets as bidGroupID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getBidGroupID()
    {
        return $this->bidGroupID;
    }

    /**
     * Sets a new bidGroupID
     *
     * This field is deprecated.
     *
     * @param int $bidGroupID
     * @return self
     */
    public function setBidGroupID($bidGroupID)
    {
        $this->bidGroupID = $bidGroupID;
        return $this;
    }

    /**
     * Gets as bidGroupName
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getBidGroupName()
    {
        return $this->bidGroupName;
    }

    /**
     * Sets a new bidGroupName
     *
     * This field is deprecated.
     *
     * @param string $bidGroupName
     * @return self
     */
    public function setBidGroupName($bidGroupName)
    {
        $this->bidGroupName = $bidGroupName;
        return $this;
    }

    /**
     * Gets as bidGroupStatus
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getBidGroupStatus()
    {
        return $this->bidGroupStatus;
    }

    /**
     * Sets a new bidGroupStatus
     *
     * This field is deprecated.
     *
     * @param string $bidGroupStatus
     * @return self
     */
    public function setBidGroupStatus($bidGroupStatus)
    {
        $this->bidGroupStatus = $bidGroupStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidGroupItem();
        if (null !== $value && !empty($this->getBidGroupItem())) {
            $writer->write(array_map(function ($v) {
                return ["BidGroupItem" => $v];
            }, $value));
        }
        $value = $this->getBidGroupID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidGroupID", $value);
        }
        $value = $this->getBidGroupName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidGroupName", $value);
        }
        $value = $this->getBidGroupStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidGroupStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroupItem', true);
        if (null !== $value && !empty($value)) {
            $this->setBidGroupItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\BidGroupItemType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroupID');
        if (null !== $value) {
            $this->setBidGroupID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroupName');
        if (null !== $value) {
            $this->setBidGroupName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroupStatus');
        if (null !== $value) {
            $this->setBidGroupStatus($value);
        }
    }
}
