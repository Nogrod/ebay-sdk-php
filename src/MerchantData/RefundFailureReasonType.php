<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundFailureReasonType
 *
 * This type is deprecated.
 * XSD Type: RefundFailureReasonType
 */
class RefundFailureReasonType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $refundFailureCode
     */
    private $refundFailureCode = null;

    /**
     * Gets as refundFailureCode
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getRefundFailureCode()
    {
        return $this->refundFailureCode;
    }

    /**
     * Sets a new refundFailureCode
     *
     * This field is deprecated.
     *
     * @param string $refundFailureCode
     * @return self
     */
    public function setRefundFailureCode($refundFailureCode)
    {
        $this->refundFailureCode = $refundFailureCode;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundFailureCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundFailureCode", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundFailureCode');
        if (null !== $value) {
            $this->setRefundFailureCode($value);
        }
    }
}
