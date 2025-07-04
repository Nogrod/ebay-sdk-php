<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CalculatedShippingDiscountType
 *
 * Type used by the <b>CalculatedShippingDiscount</b> container, which is used in the <b>SetShippingDiscountProfiles</b> call to create one or more discounted calculated shipping rules. The <b>CalculatedShippingDiscount</b> container is returned in the response of all other calls that use this type.
 * XSD Type: CalculatedShippingDiscountType
 */
class CalculatedShippingDiscountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
     *
     * @var string $discountName
     */
    private $discountName = null;

    /**
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     *
     * @var \Nogrod\eBaySDK\Trading\DiscountProfileType[] $discountProfile
     */
    private $discountProfile = [

    ];

    /**
     * Gets as discountName
     *
     * This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
     *
     * @return string
     */
    public function getDiscountName()
    {
        return $this->discountName;
    }

    /**
     * Sets a new discountName
     *
     * This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
     *
     * @param string $discountName
     * @return self
     */
    public function setDiscountName($discountName)
    {
        $this->discountName = $discountName;
        return $this;
    }

    /**
     * Adds as discountProfile
     *
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DiscountProfileType $discountProfile
     */
    public function addToDiscountProfile(\Nogrod\eBaySDK\Trading\DiscountProfileType $discountProfile)
    {
        $this->discountProfile[] = $discountProfile;
        return $this;
    }

    /**
     * isset discountProfile
     *
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountProfile($index)
    {
        return isset($this->discountProfile[$index]);
    }

    /**
     * unset discountProfile
     *
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountProfile($index)
    {
        unset($this->discountProfile[$index]);
    }

    /**
     * Gets as discountProfile
     *
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     *
     * @return \Nogrod\eBaySDK\Trading\DiscountProfileType[]
     */
    public function getDiscountProfile()
    {
        return $this->discountProfile;
    }

    /**
     * Sets a new discountProfile
     *
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     *
     * @param \Nogrod\eBaySDK\Trading\DiscountProfileType[] $discountProfile
     * @return self
     */
    public function setDiscountProfile(array $discountProfile)
    {
        $this->discountProfile = $discountProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDiscountName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountName", $value);
        }
        $value = $this->getDiscountProfile();
        if (null !== $value && [] !== $this->getDiscountProfile()) {
            $writer->write(array_map(function ($v) {return ["DiscountProfile" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountName');
        if (null !== $value) {
            $this->setDiscountName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountProfile');
        if (null !== $value) {
            $this->setDiscountProfile(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\DiscountProfileType::fromKeyValue($v);}, $value));
        }
    }
}
