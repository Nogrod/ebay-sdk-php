<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ReturnPolicyProfileListType
 *
 * The container for all returns policies that a seller provides.
 * XSD Type: ReturnPolicyProfileList
 */
class ReturnPolicyProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Container for a specific returns policy that a seller provides.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[] $returnPolicyProfile
     */
    private $returnPolicyProfile = [
        
    ];

    /**
     * Adds as returnPolicyProfile
     *
     * Container for a specific returns policy that a seller provides.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     */
    public function addToReturnPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile)
    {
        $this->returnPolicyProfile[] = $returnPolicyProfile;
        return $this;
    }

    /**
     * isset returnPolicyProfile
     *
     * Container for a specific returns policy that a seller provides.
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
     * Container for a specific returns policy that a seller provides.
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
     * Container for a specific returns policy that a seller provides.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[]
     */
    public function getReturnPolicyProfile()
    {
        return $this->returnPolicyProfile;
    }

    /**
     * Sets a new returnPolicyProfile
     *
     * Container for a specific returns policy that a seller provides.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[] $returnPolicyProfile
     * @return self
     */
    public function setReturnPolicyProfile(array $returnPolicyProfile)
    {
        $this->returnPolicyProfile = $returnPolicyProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getReturnPolicyProfile();
        if (null !== $value && !empty($this->getReturnPolicyProfile())) {
            $writer->write(array_map(function ($v) {
                return ["ReturnPolicyProfile" => $v];
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ReturnPolicyProfile', true);
        if (null !== $value && !empty($value)) {
            $this->setReturnPolicyProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::fromKeyValue($v);
            }, $value));
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
