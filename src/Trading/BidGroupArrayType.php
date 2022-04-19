<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidGroupArrayType
 *
 * This type is deprecated.
 * XSD Type: BidGroupArrayType
 */
class BidGroupArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\BidGroupType[] $bidGroup
     */
    private $bidGroup = [

    ];

    /**
     * Adds as bidGroup
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BidGroupType $bidGroup
     */
    public function addToBidGroup(\Nogrod\eBaySDK\Trading\BidGroupType $bidGroup)
    {
        $this->bidGroup[] = $bidGroup;
        return $this;
    }

    /**
     * isset bidGroup
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidGroup($index)
    {
        return isset($this->bidGroup[$index]);
    }

    /**
     * unset bidGroup
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidGroup($index)
    {
        unset($this->bidGroup[$index]);
    }

    /**
     * Gets as bidGroup
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\BidGroupType[]
     */
    public function getBidGroup()
    {
        return $this->bidGroup;
    }

    /**
     * Sets a new bidGroup
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\BidGroupType[] $bidGroup
     * @return self
     */
    public function setBidGroup(array $bidGroup)
    {
        $this->bidGroup = $bidGroup;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidGroup();
        if (null !== $value && !empty($this->getBidGroup())) {
            $writer->write(array_map(function ($v) {
                return ["BidGroup" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroup', true);
        if (null !== $value && !empty($value)) {
            $this->setBidGroup(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\BidGroupType::fromKeyValue($v);
            }, $value));
        }
    }
}
