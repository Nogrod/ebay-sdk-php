<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveOverridesRequestType
 *
 *
 * XSD Type: RemoveOverridesRequest
 */
class RemoveOverridesRequestType extends BaseRequestType
{
    /**
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * Gets as profileId
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
     * @param int $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId');
        if (null !== $value) {
            $this->setProfileId($value);
        }
    }
}
