<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing InternationalReturnPolicyInfoType
 *
 *
 * XSD Type: InternationalReturnPolicyInfo
 */
class InternationalReturnPolicyInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $returnsAcceptedOption
     */
    private $returnsAcceptedOption = null;

    /**
     * @var string $returnsWithinOption
     */
    private $returnsWithinOption = null;

    /**
     * @var string $shippingCostPaidByOption
     */
    private $shippingCostPaidByOption = null;

    /**
     * @var string $refundOption
     */
    private $refundOption = null;

    /**
     * Gets as returnsAcceptedOption
     *
     * @return string
     */
    public function getReturnsAcceptedOption()
    {
        return $this->returnsAcceptedOption;
    }

    /**
     * Sets a new returnsAcceptedOption
     *
     * @param string $returnsAcceptedOption
     * @return self
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption)
    {
        $this->returnsAcceptedOption = $returnsAcceptedOption;
        return $this;
    }

    /**
     * Gets as returnsWithinOption
     *
     * @return string
     */
    public function getReturnsWithinOption()
    {
        return $this->returnsWithinOption;
    }

    /**
     * Sets a new returnsWithinOption
     *
     * @param string $returnsWithinOption
     * @return self
     */
    public function setReturnsWithinOption($returnsWithinOption)
    {
        $this->returnsWithinOption = $returnsWithinOption;
        return $this;
    }

    /**
     * Gets as shippingCostPaidByOption
     *
     * @return string
     */
    public function getShippingCostPaidByOption()
    {
        return $this->shippingCostPaidByOption;
    }

    /**
     * Sets a new shippingCostPaidByOption
     *
     * @param string $shippingCostPaidByOption
     * @return self
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption)
    {
        $this->shippingCostPaidByOption = $shippingCostPaidByOption;
        return $this;
    }

    /**
     * Gets as refundOption
     *
     * @return string
     */
    public function getRefundOption()
    {
        return $this->refundOption;
    }

    /**
     * Sets a new refundOption
     *
     * @param string $refundOption
     * @return self
     */
    public function setRefundOption($refundOption)
    {
        $this->refundOption = $refundOption;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getReturnsAcceptedOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption", $value);
        }
        $value = $this->getReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption", $value);
        }
        $value = $this->getShippingCostPaidByOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption", $value);
        }
        $value = $this->getRefundOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}refundOption", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption');
        if (null !== $value) {
            $this->setReturnsAcceptedOption($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption');
        if (null !== $value) {
            $this->setReturnsWithinOption($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption');
        if (null !== $value) {
            $this->setShippingCostPaidByOption($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}refundOption');
        if (null !== $value) {
            $this->setRefundOption($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
