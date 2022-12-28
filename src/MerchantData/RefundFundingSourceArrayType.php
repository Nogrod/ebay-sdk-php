<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundFundingSourceArrayType
 *
 * This type is deprecated.
 * XSD Type: RefundFundingSourceArrayType
 */
class RefundFundingSourceArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\RefundFundingSourceType[] $refundFundingSource
     */
    private $refundFundingSource = [

    ];

    /**
     * Adds as refundFundingSource
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\RefundFundingSourceType $refundFundingSource
     */
    public function addToRefundFundingSource(\Nogrod\eBaySDK\MerchantData\RefundFundingSourceType $refundFundingSource)
    {
        $this->refundFundingSource[] = $refundFundingSource;
        return $this;
    }

    /**
     * isset refundFundingSource
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefundFundingSource($index)
    {
        return isset($this->refundFundingSource[$index]);
    }

    /**
     * unset refundFundingSource
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefundFundingSource($index)
    {
        unset($this->refundFundingSource[$index]);
    }

    /**
     * Gets as refundFundingSource
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\RefundFundingSourceType[]
     */
    public function getRefundFundingSource()
    {
        return $this->refundFundingSource;
    }

    /**
     * Sets a new refundFundingSource
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\RefundFundingSourceType[] $refundFundingSource
     * @return self
     */
    public function setRefundFundingSource(array $refundFundingSource)
    {
        $this->refundFundingSource = $refundFundingSource;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundFundingSource();
        if (null !== $value && !empty($this->getRefundFundingSource())) {
            $writer->write(array_map(function ($v) {
                return ["RefundFundingSource" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundFundingSource', true);
        if (null !== $value && !empty($value)) {
            $this->setRefundFundingSource(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\RefundFundingSourceType::fromKeyValue($v);
            }, $value));
        }
    }
}
