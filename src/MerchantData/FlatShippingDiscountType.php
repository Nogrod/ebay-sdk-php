<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FlatShippingDiscountType
 *
 * Details of an individual discount profile defined by the
 *  user for flat-rate shipping.
 * XSD Type: FlatShippingDiscountType
 */
class FlatShippingDiscountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The type of discount or rule that is being used by the profile.
     *  The value corresponding to the selected rule is set in the same-named field
     *  of <b>FlatShippingDiscount.DiscountProfile</b>.
     *
     * @var string $discountName
     */
    private $discountName = null;

    /**
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DiscountProfileType[] $discountProfile
     */
    private $discountProfile = [

    ];

    /**
     * Gets as discountName
     *
     * The type of discount or rule that is being used by the profile.
     *  The value corresponding to the selected rule is set in the same-named field
     *  of <b>FlatShippingDiscount.DiscountProfile</b>.
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
     * The type of discount or rule that is being used by the profile.
     *  The value corresponding to the selected rule is set in the same-named field
     *  of <b>FlatShippingDiscount.DiscountProfile</b>.
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
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\DiscountProfileType $discountProfile
     */
    public function addToDiscountProfile(\Nogrod\eBaySDK\MerchantData\DiscountProfileType $discountProfile)
    {
        $this->discountProfile[] = $discountProfile;
        return $this;
    }

    /**
     * isset discountProfile
     *
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
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
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
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
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DiscountProfileType[]
     */
    public function getDiscountProfile()
    {
        return $this->discountProfile;
    }

    /**
     * Sets a new discountProfile
     *
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DiscountProfileType[] $discountProfile
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
        if (null !== $value && !empty($this->getDiscountProfile())) {
            $writer->write(array_map(function ($v) {
                return ["DiscountProfile" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountName');
        if (null !== $value) {
            $this->setDiscountName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountProfile', true);
        if (null !== $value && !empty($value)) {
            $this->setDiscountProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\DiscountProfileType::fromKeyValue($v);
            }, $value));
        }
    }
}
