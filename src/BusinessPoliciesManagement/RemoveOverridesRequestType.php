<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId');
        if (null !== $value) {
            $this->setProfileId($value);
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
