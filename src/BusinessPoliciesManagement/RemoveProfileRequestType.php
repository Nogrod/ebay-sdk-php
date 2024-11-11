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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getProfileId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}profileId", $value);
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
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId');
        if (null !== $value) {
            $this->setProfileId($value);
        }
    }
}
