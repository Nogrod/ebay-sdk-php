<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerProfilesRequestType
 *
 * This call is used to retrieve one or more business policies for a seller. Specific business policies can be retrieved by passing in <b>profileId</b> or <b>profileName</b> values, or all policies of a certain type (payment, return, or shipping) can be retrieved.
 * XSD Type: GetSellerProfilesRequest
 */
class GetSellerProfilesRequestType extends BaseRequestType
{
    /**
     * The seller passes in one or more <b>profileType</b> enumeration values to retrieve all business policies of that type. Valid values for this field are PAYMENT, RETURN_POLICY, and SHIPPING.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all policies that match any of the supplied filters are retrieved in the response.
     *
     * @var string[] $profileType
     */
    private $profileType = [

    ];

    /**
     * Unique identifier for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
     *
     * @var int[] $profileId
     */
    private $profileId = [

    ];

    /**
     * Unique name for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
     *
     * @var string[] $profileName
     */
    private $profileName = [

    ];

    /**
     * This optional flag determines whether or not detailed information is retrieved for each business policy in the response. If included and set to 'true' or not included (since 'true' is the default), all applicable containers and fields for each business policy are returned in the response. If included and set to 'false', the following containers are not returned in the response:
     *  <ul>
     *  <li><b>paymentInfo</b> (for all retrieved payment policies)</li>
     *  <li><b>returnPolicyInfo</b> (for all retrieved return policies)</li>
     *  <li><b>shippingPolicyInfo</b> (for all retrieved shipping policies)</li>
     *  lt;/ul>
     *
     * @var bool $includeDetails
     */
    private $includeDetails = null;

    /**
     * Adds as profileType
     *
     * The seller passes in one or more <b>profileType</b> enumeration values to retrieve all business policies of that type. Valid values for this field are PAYMENT, RETURN_POLICY, and SHIPPING.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all policies that match any of the supplied filters are retrieved in the response.
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
     * The seller passes in one or more <b>profileType</b> enumeration values to retrieve all business policies of that type. Valid values for this field are PAYMENT, RETURN_POLICY, and SHIPPING.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all policies that match any of the supplied filters are retrieved in the response.
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
     * The seller passes in one or more <b>profileType</b> enumeration values to retrieve all business policies of that type. Valid values for this field are PAYMENT, RETURN_POLICY, and SHIPPING.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all policies that match any of the supplied filters are retrieved in the response.
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
     * The seller passes in one or more <b>profileType</b> enumeration values to retrieve all business policies of that type. Valid values for this field are PAYMENT, RETURN_POLICY, and SHIPPING.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all policies that match any of the supplied filters are retrieved in the response.
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
     * The seller passes in one or more <b>profileType</b> enumeration values to retrieve all business policies of that type. Valid values for this field are PAYMENT, RETURN_POLICY, and SHIPPING.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all policies that match any of the supplied filters are retrieved in the response.
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
     * Unique identifier for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique identifier for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique identifier for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique identifier for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique identifier for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique name for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique name for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique name for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique name for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * Unique name for a seller's business policy. Pass a valid value into this field to retrieve a specific business policy. This field can be repeated multiple times to retrieve multiple policies.
     *  <br><br>
     *  Boolean OR logic is applied when using any combination of the <b>profileType</b>, <b>profileID</b>, and <b>profileName</b> filters in a <b>getSellerProfiles</b> request, so all business policies that match any of the supplied filters are retrieved in the response.
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
     * This optional flag determines whether or not detailed information is retrieved for each business policy in the response. If included and set to 'true' or not included (since 'true' is the default), all applicable containers and fields for each business policy are returned in the response. If included and set to 'false', the following containers are not returned in the response:
     *  <ul>
     *  <li><b>paymentInfo</b> (for all retrieved payment policies)</li>
     *  <li><b>returnPolicyInfo</b> (for all retrieved return policies)</li>
     *  <li><b>shippingPolicyInfo</b> (for all retrieved shipping policies)</li>
     *  lt;/ul>
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
     * This optional flag determines whether or not detailed information is retrieved for each business policy in the response. If included and set to 'true' or not included (since 'true' is the default), all applicable containers and fields for each business policy are returned in the response. If included and set to 'false', the following containers are not returned in the response:
     *  <ul>
     *  <li><b>paymentInfo</b> (for all retrieved payment policies)</li>
     *  <li><b>returnPolicyInfo</b> (for all retrieved return policies)</li>
     *  <li><b>shippingPolicyInfo</b> (for all retrieved shipping policies)</li>
     *  lt;/ul>
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileType', true);
        if (null !== $value && !empty($value)) {
            $this->setProfileType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId', true);
        if (null !== $value && !empty($value)) {
            $this->setProfileId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileName', true);
        if (null !== $value && !empty($value)) {
            $this->setProfileName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}includeDetails');
        if (null !== $value) {
            $this->setIncludeDetails($value);
        }
    }
}
