<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing RemoveSellerProfilesRequestType
 *
 *
 * XSD Type: RemoveSellerProfilesRequest
 */
class RemoveSellerProfilesRequestType extends BaseRequestType
{

    /**
     * @var int[] $profileIds
     */
    private $profileIds = [
        
    ];

    /**
     * Adds as profileIds
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
     * @return int[]
     */
    public function getProfileIds()
    {
        return $this->profileIds;
    }

    /**
     * Sets a new profileIds
     *
     * @param int[] $profileIds
     * @return self
     */
    public function setProfileIds(array $profileIds)
    {
        $this->profileIds = $profileIds;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getProfileIds();
        if (null !== $value && !empty($this->getProfileIds())) {
            $writer->write(array_map(function ($v) {
                return ["profileIds" => $v];
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileIds', true);
        if (null !== $value && !empty($value)) {
            $this->setProfileIds($value);
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
