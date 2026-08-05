<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyProfileListType
 *
 * Type defining the <b>returnPolicyProfileList</b> container, which consists of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request.
 * XSD Type: ReturnPolicyProfileList
 */
class ReturnPolicyProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[] $returnPolicyProfile
     */
    private $returnPolicyProfile = [

    ];

    /**
     * Adds as returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     */
    public function addToReturnPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile)
    {
        if (!is_array($this->returnPolicyProfile)) {
            throw new \LogicException('returnPolicyProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->returnPolicyProfile[] = $returnPolicyProfile;
        return $this;
    }

    /**
     * isset returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReturnPolicyProfile($index)
    {
        return isset($this->returnPolicyProfile[$index]);
    }

    /**
     * unset returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReturnPolicyProfile($index)
    {
        unset($this->returnPolicyProfile[$index]);
    }

    /**
     * Gets as returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType>
     */
    public function getReturnPolicyProfile()
    {
        return $this->returnPolicyProfile;
    }

    /**
     * Sets a new returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType> $returnPolicyProfile
     * @return self
     */
    public function setReturnPolicyProfile(iterable $returnPolicyProfile)
    {
        $this->returnPolicyProfile = $returnPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getReturnPolicyProfile();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["ReturnPolicyProfile" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileListType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ReturnPolicyProfile');
        if (null !== $value) {
            $this->setReturnPolicyProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::fromKeyValue($v);
            }, $value));
        }
    }
}
