<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing GetSellerProfilesRequestType
 *
 * Use this call to obtain all the business policies that a seller has created.
 * XSD Type: GetSellerProfilesRequest
 */
class GetSellerProfilesRequestType extends BaseRequestType
{

    /**
     * The types of business policies that a seller can create. Valid values are PAYMENT, RETURN_POLICY, and SHIPPING. A seller can have multiple policies for each type of business policy. Pass any one of the valid values into a getSellerProfiles request.
     *
     * @var string[] $profileType
     */
    private $profileType = [
        
    ];

    /**
     * Unique identifier for a seller's profile. Pass this value into a getSellerProfiles request for displaying a specific seller's profile. This field is optional if you have passed a profileName in a getSellerProfiles request.
     *
     * @var int[] $profileId
     */
    private $profileId = [
        
    ];

    /**
     * Unique name for a seller's profile. Pass this value into a getSellerProfiles request
     *  for displaying a specific seller's profile. This field is optional if you have passed profileId in a getSellerProfiles request.
     *  Max length: 50 characters.
     *
     * @var string[] $profileName
     */
    private $profileName = [
        
    ];

    /**
     * This optional flag determines whether to return more detailed information about a seller's profile. If set to true
     *  (which is the default), the call returns details from the paymentinfo, returnPolicyInfo, and
     *  shippingPolicyInfo containers. If set to false, the call does not return any details from the paymentinfo, returnPolicyInfo, and
     *  shippingPolicyInfo containers.
     *
     * @var bool $includeDetails
     */
    private $includeDetails = null;

    /**
     * Adds as profileType
     *
     * The types of business policies that a seller can create. Valid values are PAYMENT, RETURN_POLICY, and SHIPPING. A seller can have multiple policies for each type of business policy. Pass any one of the valid values into a getSellerProfiles request.
     *
     * @return self
     * @param string $profileType
     */
    public function addToProfileType($profileType)
    {
        $this->profileType[] = $profileType;
        return $this;
    }

    /**
     * isset profileType
     *
     * The types of business policies that a seller can create. Valid values are PAYMENT, RETURN_POLICY, and SHIPPING. A seller can have multiple policies for each type of business policy. Pass any one of the valid values into a getSellerProfiles request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileType($index)
    {
        return isset($this->profileType[$index]);
    }

    /**
     * unset profileType
     *
     * The types of business policies that a seller can create. Valid values are PAYMENT, RETURN_POLICY, and SHIPPING. A seller can have multiple policies for each type of business policy. Pass any one of the valid values into a getSellerProfiles request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileType($index)
    {
        unset($this->profileType[$index]);
    }

    /**
     * Gets as profileType
     *
     * The types of business policies that a seller can create. Valid values are PAYMENT, RETURN_POLICY, and SHIPPING. A seller can have multiple policies for each type of business policy. Pass any one of the valid values into a getSellerProfiles request.
     *
     * @return string[]
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * The types of business policies that a seller can create. Valid values are PAYMENT, RETURN_POLICY, and SHIPPING. A seller can have multiple policies for each type of business policy. Pass any one of the valid values into a getSellerProfiles request.
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType(array $profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }

    /**
     * Adds as profileId
     *
     * Unique identifier for a seller's profile. Pass this value into a getSellerProfiles request for displaying a specific seller's profile. This field is optional if you have passed a profileName in a getSellerProfiles request.
     *
     * @return self
     * @param int $profileId
     */
    public function addToProfileId($profileId)
    {
        $this->profileId[] = $profileId;
        return $this;
    }

    /**
     * isset profileId
     *
     * Unique identifier for a seller's profile. Pass this value into a getSellerProfiles request for displaying a specific seller's profile. This field is optional if you have passed a profileName in a getSellerProfiles request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileId($index)
    {
        return isset($this->profileId[$index]);
    }

    /**
     * unset profileId
     *
     * Unique identifier for a seller's profile. Pass this value into a getSellerProfiles request for displaying a specific seller's profile. This field is optional if you have passed a profileName in a getSellerProfiles request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileId($index)
    {
        unset($this->profileId[$index]);
    }

    /**
     * Gets as profileId
     *
     * Unique identifier for a seller's profile. Pass this value into a getSellerProfiles request for displaying a specific seller's profile. This field is optional if you have passed a profileName in a getSellerProfiles request.
     *
     * @return int[]
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * Unique identifier for a seller's profile. Pass this value into a getSellerProfiles request for displaying a specific seller's profile. This field is optional if you have passed a profileName in a getSellerProfiles request.
     *
     * @param int[] $profileId
     * @return self
     */
    public function setProfileId(array $profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * Adds as profileName
     *
     * Unique name for a seller's profile. Pass this value into a getSellerProfiles request
     *  for displaying a specific seller's profile. This field is optional if you have passed profileId in a getSellerProfiles request.
     *  Max length: 50 characters.
     *
     * @return self
     * @param string $profileName
     */
    public function addToProfileName($profileName)
    {
        $this->profileName[] = $profileName;
        return $this;
    }

    /**
     * isset profileName
     *
     * Unique name for a seller's profile. Pass this value into a getSellerProfiles request
     *  for displaying a specific seller's profile. This field is optional if you have passed profileId in a getSellerProfiles request.
     *  Max length: 50 characters.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileName($index)
    {
        return isset($this->profileName[$index]);
    }

    /**
     * unset profileName
     *
     * Unique name for a seller's profile. Pass this value into a getSellerProfiles request
     *  for displaying a specific seller's profile. This field is optional if you have passed profileId in a getSellerProfiles request.
     *  Max length: 50 characters.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileName($index)
    {
        unset($this->profileName[$index]);
    }

    /**
     * Gets as profileName
     *
     * Unique name for a seller's profile. Pass this value into a getSellerProfiles request
     *  for displaying a specific seller's profile. This field is optional if you have passed profileId in a getSellerProfiles request.
     *  Max length: 50 characters.
     *
     * @return string[]
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Sets a new profileName
     *
     * Unique name for a seller's profile. Pass this value into a getSellerProfiles request
     *  for displaying a specific seller's profile. This field is optional if you have passed profileId in a getSellerProfiles request.
     *  Max length: 50 characters.
     *
     * @param string[] $profileName
     * @return self
     */
    public function setProfileName(array $profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * Gets as includeDetails
     *
     * This optional flag determines whether to return more detailed information about a seller's profile. If set to true
     *  (which is the default), the call returns details from the paymentinfo, returnPolicyInfo, and
     *  shippingPolicyInfo containers. If set to false, the call does not return any details from the paymentinfo, returnPolicyInfo, and
     *  shippingPolicyInfo containers.
     *
     * @return bool
     */
    public function getIncludeDetails()
    {
        return $this->includeDetails;
    }

    /**
     * Sets a new includeDetails
     *
     * This optional flag determines whether to return more detailed information about a seller's profile. If set to true
     *  (which is the default), the call returns details from the paymentinfo, returnPolicyInfo, and
     *  shippingPolicyInfo containers. If set to false, the call does not return any details from the paymentinfo, returnPolicyInfo, and
     *  shippingPolicyInfo containers.
     *
     * @param bool $includeDetails
     * @return self
     */
    public function setIncludeDetails($includeDetails)
    {
        $this->includeDetails = $includeDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getProfileType();
        if (null !== $value && !empty($this->getProfileType())) {
            $writer->write(array_map(function ($v) {
                return ["profileType" => $v];
            }, $value));
        }
        $value = $this->getProfileId();
        if (null !== $value && !empty($this->getProfileId())) {
            $writer->write(array_map(function ($v) {
                return ["profileId" => $v];
            }, $value));
        }
        $value = $this->getProfileName();
        if (null !== $value && !empty($this->getProfileName())) {
            $writer->write(array_map(function ($v) {
                return ["profileName" => $v];
            }, $value));
        }
        $value = $this->getIncludeDetails();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}includeDetails", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileType', true);
        if (null !== $value && !empty($value)) {
            $this->setProfileType($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId', true);
        if (null !== $value && !empty($value)) {
            $this->setProfileId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileName', true);
        if (null !== $value && !empty($value)) {
            $this->setProfileName($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}includeDetails');
        if (null !== $value) {
            $this->setIncludeDetails($value);
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
