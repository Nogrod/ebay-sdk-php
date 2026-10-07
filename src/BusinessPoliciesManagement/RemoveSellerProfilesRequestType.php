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
        if (!is_array($this->profileIds)) {
            throw new \LogicException('profileIds is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<int>
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
     * @param iterable<int> $profileIds
     * @return self
     */
    public function setProfileIds(iterable $profileIds)
    {
        $this->profileIds = $profileIds;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->profileIds;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'profileIds', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->profileIds = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'profileIds':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileIds[] = (int) $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
