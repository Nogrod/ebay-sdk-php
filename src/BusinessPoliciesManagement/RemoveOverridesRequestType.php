<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveOverridesRequestType
 *
 * This call is used to remove shipping cost overrides for a specific shipping policy. The only input parameter for this call is the unique identifier of the shipping policy, and the response contains only the standard output fields.
 * XSD Type: RemoveOverridesRequest
 */
class RemoveOverridesRequestType extends BaseRequestType
{
    /**
     * The unique identifier of the shipping policy. The seller provides the <b>profileId</b> of the shipping policy for which he/she would like to remove shipping cost overrides.
     *
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * Gets as profileId
     *
     * The unique identifier of the shipping policy. The seller provides the <b>profileId</b> of the shipping policy for which he/she would like to remove shipping cost overrides.
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
     * The unique identifier of the shipping policy. The seller provides the <b>profileId</b> of the shipping policy for which he/she would like to remove shipping cost overrides.
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
