<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundArrayType
 *
 * <span class="tablenote"><b>Note: </b> This type was only used for Half.com order refunds, and since the Half.com site has been shut down, this type is no longer applicable.
 *  </span>
 *  Type used by the <strong>RefundArray</strong> container, which consists of an array of Half.com refunds.
 * XSD Type: RefundArrayType
 */
class RefundArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  This container consists of information about a Half.com refund. It is only returned if a Half.com order is going through (or has completed) the refund process.
     *
     * @var \Nogrod\eBaySDK\Trading\RefundType[] $refund
     */
    private $refund = [
        
    ];

    /**
     * Adds as refund
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  This container consists of information about a Half.com refund. It is only returned if a Half.com order is going through (or has completed) the refund process.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundType $refund
     */
    public function addToRefund(\Nogrod\eBaySDK\Trading\RefundType $refund)
    {
        $this->refund[] = $refund;
        return $this;
    }

    /**
     * isset refund
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  This container consists of information about a Half.com refund. It is only returned if a Half.com order is going through (or has completed) the refund process.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefund($index)
    {
        return isset($this->refund[$index]);
    }

    /**
     * unset refund
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  This container consists of information about a Half.com refund. It is only returned if a Half.com order is going through (or has completed) the refund process.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefund($index)
    {
        unset($this->refund[$index]);
    }

    /**
     * Gets as refund
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  This container consists of information about a Half.com refund. It is only returned if a Half.com order is going through (or has completed) the refund process.
     *
     * @return \Nogrod\eBaySDK\Trading\RefundType[]
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets a new refund
     *
     * <span class="tablenote"><b>Note: </b> <b>RefundArrayType</b> and the <b>Refund</b> field are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  This container consists of information about a Half.com refund. It is only returned if a Half.com order is going through (or has completed) the refund process.
     *
     * @param \Nogrod\eBaySDK\Trading\RefundType[] $refund
     * @return self
     */
    public function setRefund(array $refund)
    {
        $this->refund = $refund;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefund();
        if (null !== $value && !empty($this->getRefund())) {
            $writer->write(array_map(function ($v) {
                return ["Refund" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refund', true);
        if (null !== $value && !empty($value)) {
            $this->setRefund(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RefundType::fromKeyValue($v);
            }, $value));
        }
    }
}
