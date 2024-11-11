<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveSellerProfilesRequestType
 *
 * Sellers use this call to delete one or more existing business policies.
 * XSD Type: RemoveSellerProfilesRequest
 */
class RemoveSellerProfilesRequestType extends BaseRequestType
{
    /**
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. The seller passes in one or more <b>profileIds</b> values to identify the business policies to delete. The <b>profileId</b> values can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @var int[] $profileIds
     */
    private $profileIds = [

    ];

    /**
     * Adds as profileIds
     *
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. The seller passes in one or more <b>profileIds</b> values to identify the business policies to delete. The <b>profileId</b> values can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @return self
     * @param int $profileIds
     */
    public function addToProfileIds($profileIds)
    {
        $this->profileIds[] = $profileIds;
        return $this;
    }

    /**
     * isset profileIds
     *
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. The seller passes in one or more <b>profileIds</b> values to identify the business policies to delete. The <b>profileId</b> values can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileIds($index)
    {
        return isset($this->profileIds[$index]);
    }

    /**
     * unset profileIds
     *
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. The seller passes in one or more <b>profileIds</b> values to identify the business policies to delete. The <b>profileId</b> values can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileIds($index)
    {
        unset($this->profileIds[$index]);
    }

    /**
     * Gets as profileIds
     *
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. The seller passes in one or more <b>profileIds</b> values to identify the business policies to delete. The <b>profileId</b> values can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @return int[]
     */
    public function getProfileIds()
    {
        return $this->profileIds;
    }

    /**
     * Sets a new profileIds
     *
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. The seller passes in one or more <b>profileIds</b> values to identify the business policies to delete. The <b>profileId</b> values can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @param int[] $profileIds
     * @return self
     */
    public function setProfileIds(array $profileIds)
    {
        $this->profileIds = $profileIds;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getProfileIds();
        if (null !== $value && !empty($this->getProfileIds())) {
            $writer->write(array_map(function ($v) {return ["profileIds" => $v];}, $value));
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
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileIds');
        if (null !== $value) {
            $this->setProfileIds($value);
        }
    }
}
