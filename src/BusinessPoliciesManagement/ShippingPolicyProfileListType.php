<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ShippingPolicyProfileListType
 *
 *
 * XSD Type: ShippingPolicyProfileList
 */
class ShippingPolicyProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     */
    private $shippingPolicyProfile = [
        
    ];

    /**
     * Adds as shippingPolicyProfile
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     */
    public function addToShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile[] = $shippingPolicyProfile;
        return $this;
    }

    /**
     * isset shippingPolicyProfile
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingPolicyProfile($index)
    {
        return isset($this->shippingPolicyProfile[$index]);
    }

    /**
     * unset shippingPolicyProfile
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingPolicyProfile($index)
    {
        unset($this->shippingPolicyProfile[$index]);
    }

    /**
     * Gets as shippingPolicyProfile
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[]
     */
    public function getShippingPolicyProfile()
    {
        return $this->shippingPolicyProfile;
    }

    /**
     * Sets a new shippingPolicyProfile
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(array $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getShippingPolicyProfile();
        if (null !== $value && !empty($this->getShippingPolicyProfile())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingPolicyProfile" => $v];
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ShippingPolicyProfile', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingPolicyProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::fromKeyValue($v);
            }, $value));
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
