<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidderDetailArrayType
 *
 * This type is deprecated.
 * XSD Type: BidderDetailArrayType
 */
class BidderDetailArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BidderDetailType[] $bidderDetail
     */
    private $bidderDetail = [
        
    ];

    /**
     * Adds as bidderDetail
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\BidderDetailType $bidderDetail
     */
    public function addToBidderDetail(\Nogrod\eBaySDK\MerchantData\BidderDetailType $bidderDetail)
    {
        $this->bidderDetail[] = $bidderDetail;
        return $this;
    }

    /**
     * isset bidderDetail
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidderDetail($index)
    {
        return isset($this->bidderDetail[$index]);
    }

    /**
     * unset bidderDetail
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidderDetail($index)
    {
        unset($this->bidderDetail[$index]);
    }

    /**
     * Gets as bidderDetail
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BidderDetailType[]
     */
    public function getBidderDetail()
    {
        return $this->bidderDetail;
    }

    /**
     * Sets a new bidderDetail
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BidderDetailType[] $bidderDetail
     * @return self
     */
    public function setBidderDetail(array $bidderDetail)
    {
        $this->bidderDetail = $bidderDetail;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidderDetail();
        if (null !== $value && !empty($this->getBidderDetail())) {
            $writer->write(array_map(function ($v) {
                return ["BidderDetail" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidderDetail', true);
        if (null !== $value && !empty($value)) {
            $this->setBidderDetail(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\BidderDetailType::fromKeyValue($v);
            }, $value));
        }
    }
}
