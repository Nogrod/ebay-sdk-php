<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ShippingPolicyProfileType
 *
 *
 * XSD Type: ShippingPolicyProfile
 */
class ShippingPolicyProfileType extends SellerProfileType
{

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo
     */
    private $shippingPolicyInfo = null;

    /**
     * Gets as shippingPolicyInfo
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType
     */
    public function getShippingPolicyInfo()
    {
        return $this->shippingPolicyInfo;
    }

    /**
     * Sets a new shippingPolicyInfo
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo
     * @return self
     */
    public function setShippingPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo)
    {
        $this->shippingPolicyInfo = $shippingPolicyInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getShippingPolicyInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyInfo", $value);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyInfo');
        if (null !== $value) {
            $this->setShippingPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType::fromKeyValue($value));
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
