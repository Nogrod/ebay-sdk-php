<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyProfileListType
 *
 * Type defining the <b>shipingPolicyProfile</b> container, which consists of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request.
 * XSD Type: ShippingPolicyProfileList
 */
class ShippingPolicyProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     */
    private $shippingPolicyProfile = [

    ];

    /**
     * Adds as shippingPolicyProfile
     *
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
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
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(array $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getShippingPolicyProfile();
        if (null !== $value && [] !== $this->getShippingPolicyProfile()) {
            $writer->write(array_map(function ($v) {return ["ShippingPolicyProfile" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileListType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ShippingPolicyProfile');
        if (null !== $value) {
            $this->setShippingPolicyProfile(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::fromKeyValue($v);}, $value));
        }
    }
}
