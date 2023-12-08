<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundLineArrayType
 *
 * This type is deprecated.
 * XSD Type: RefundLineArrayType
 */
class RefundLineArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\RefundLineType[] $refundLine
     */
    private $refundLine = [

    ];

    /**
     * Adds as refundLine
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundLineType $refundLine
     */
    public function addToRefundLine(\Nogrod\eBaySDK\Trading\RefundLineType $refundLine)
    {
        $this->refundLine[] = $refundLine;
        return $this;
    }

    /**
     * isset refundLine
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefundLine($index)
    {
        return isset($this->refundLine[$index]);
    }

    /**
     * unset refundLine
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefundLine($index)
    {
        unset($this->refundLine[$index]);
    }

    /**
     * Gets as refundLine
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\RefundLineType[]
     */
    public function getRefundLine()
    {
        return $this->refundLine;
    }

    /**
     * Sets a new refundLine
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\RefundLineType[] $refundLine
     * @return self
     */
    public function setRefundLine(array $refundLine)
    {
        $this->refundLine = $refundLine;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundLine();
        if (null !== $value && !empty($this->getRefundLine())) {
            $writer->write(array_map(function ($v) {return ["RefundLine" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundLine', true);
        if (null !== $value && !empty($value)) {
            $this->setRefundLine(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\RefundLineType::fromKeyValue($v);}, $value));
        }
    }
}
