<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveProfileRequestType
 *
 * This call is used to delete an existing business policy for a seller.
 * XSD Type: RemoveProfileRequest
 */
class RemoveProfileRequestType extends BaseRequestType
{
    /**
     * Unique identifier for a business policy. Each payment, shipping, and return business policy has its own unique <b>profileId</b> value. The seller passes in this <b>profileId</b> value to identify the business policy to delete. A <b>profileId</b> value can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * Gets as profileId
     *
     * Unique identifier for a business policy. Each payment, shipping, and return business policy has its own unique <b>profileId</b> value. The seller passes in this <b>profileId</b> value to identify the business policy to delete. A <b>profileId</b> value can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * Unique identifier for a business policy. Each payment, shipping, and return business policy has its own unique <b>profileId</b> value. The seller passes in this <b>profileId</b> value to identify the business policy to delete. A <b>profileId</b> value can be obtained through the site or by making a <b>getSellerProfiles</b> call.
     *
     * @param int $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->profileId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileId', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'profileId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileId = (int) $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
