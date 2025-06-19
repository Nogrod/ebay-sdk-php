<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingProfileDiscountInfoType
 *
 * Type defining the <b>shippingProfileDiscountInfo</b> container, which consists of details related to flat-rate, calculated, and promotional shipping discounts that are offered to domestic and/or international buyers.
 * XSD Type: ShippingProfileDiscountInfo
 */
class ShippingProfileDiscountInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier for a flat-rate or calculated shipping rule defined by the seller. If the seller specifies a valid shipping discount profile ID for either of these shipping rules, a domestic buyer may receive a shipping discount from the seller when purchasing multiple items. The seller can create and manage shipping discount profiles on My eBay, or by using the <b>SetShippingDiscountProfiles</b> and <b>GetShippingDiscountProfiles</b> calls of the Trading API.
     *  <br><br>
     *  The type of shipping discount profile specified in this field (flat-rate or calculated) should correspond to the <b>domesticShippingType</b> ('Flat' or 'Calculated') value in the shipping policy.
     *  <br><br>
     *  Shipping discount profiles are not applicable when Freight shipping is used.
     *
     * @var int $domesticFlatCalcDiscountProfileId
     */
    private $domesticFlatCalcDiscountProfileId = null;

    /**
     * Unique identifier for a flat-rate or calculated shipping rule defined by the seller. If the seller specifies a valid shipping discount profile ID for either of these shipping rules, an international buyer may receive a shipping discount from the seller when purchasing multiple items. The seller can create and manage shipping discount profiles on My eBay, or by using the <b>SetShippingDiscountProfiles</b> and <b>GetShippingDiscountProfiles</b> calls of the Trading API.
     *  <br><br>
     *  The type of shipping discount profile specified in this field (flat-rate or calculated) should correspond to the <b>intlShippingType</b> ('Flat' or 'Calculated') value in the shipping policy.
     *  <br><br>
     *  Shipping discount profiles are not applicable when Freight shipping is used.
     *
     * @var int $intlFlatCalcDiscountProfileId
     */
    private $intlFlatCalcDiscountProfileId = null;

    /**
     * If this field is included and set to 'true', a domestic buyer will be the recipient of the seller's promotional shipping discount (if that buyer satisfies the buying requirements). The seller can create a promotional shipping rule on My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *
     * @var bool $applyDomesticPromoShippingProfile
     */
    private $applyDomesticPromoShippingProfile = null;

    /**
     * If this field is included and set to 'true', an international buyer will be the recipient of the seller's promotional shipping discount (if that buyer satisfies the buying requirements). The seller can create a promotional shipping rule on My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *
     * @var bool $applyIntlPromoShippingProfile
     */
    private $applyIntlPromoShippingProfile = null;

    /**
     * Gets as domesticFlatCalcDiscountProfileId
     *
     * Unique identifier for a flat-rate or calculated shipping rule defined by the seller. If the seller specifies a valid shipping discount profile ID for either of these shipping rules, a domestic buyer may receive a shipping discount from the seller when purchasing multiple items. The seller can create and manage shipping discount profiles on My eBay, or by using the <b>SetShippingDiscountProfiles</b> and <b>GetShippingDiscountProfiles</b> calls of the Trading API.
     *  <br><br>
     *  The type of shipping discount profile specified in this field (flat-rate or calculated) should correspond to the <b>domesticShippingType</b> ('Flat' or 'Calculated') value in the shipping policy.
     *  <br><br>
     *  Shipping discount profiles are not applicable when Freight shipping is used.
     *
     * @return int
     */
    public function getDomesticFlatCalcDiscountProfileId()
    {
        return $this->domesticFlatCalcDiscountProfileId;
    }

    /**
     * Sets a new domesticFlatCalcDiscountProfileId
     *
     * Unique identifier for a flat-rate or calculated shipping rule defined by the seller. If the seller specifies a valid shipping discount profile ID for either of these shipping rules, a domestic buyer may receive a shipping discount from the seller when purchasing multiple items. The seller can create and manage shipping discount profiles on My eBay, or by using the <b>SetShippingDiscountProfiles</b> and <b>GetShippingDiscountProfiles</b> calls of the Trading API.
     *  <br><br>
     *  The type of shipping discount profile specified in this field (flat-rate or calculated) should correspond to the <b>domesticShippingType</b> ('Flat' or 'Calculated') value in the shipping policy.
     *  <br><br>
     *  Shipping discount profiles are not applicable when Freight shipping is used.
     *
     * @param int $domesticFlatCalcDiscountProfileId
     * @return self
     */
    public function setDomesticFlatCalcDiscountProfileId($domesticFlatCalcDiscountProfileId)
    {
        $this->domesticFlatCalcDiscountProfileId = $domesticFlatCalcDiscountProfileId;
        return $this;
    }

    /**
     * Gets as intlFlatCalcDiscountProfileId
     *
     * Unique identifier for a flat-rate or calculated shipping rule defined by the seller. If the seller specifies a valid shipping discount profile ID for either of these shipping rules, an international buyer may receive a shipping discount from the seller when purchasing multiple items. The seller can create and manage shipping discount profiles on My eBay, or by using the <b>SetShippingDiscountProfiles</b> and <b>GetShippingDiscountProfiles</b> calls of the Trading API.
     *  <br><br>
     *  The type of shipping discount profile specified in this field (flat-rate or calculated) should correspond to the <b>intlShippingType</b> ('Flat' or 'Calculated') value in the shipping policy.
     *  <br><br>
     *  Shipping discount profiles are not applicable when Freight shipping is used.
     *
     * @return int
     */
    public function getIntlFlatCalcDiscountProfileId()
    {
        return $this->intlFlatCalcDiscountProfileId;
    }

    /**
     * Sets a new intlFlatCalcDiscountProfileId
     *
     * Unique identifier for a flat-rate or calculated shipping rule defined by the seller. If the seller specifies a valid shipping discount profile ID for either of these shipping rules, an international buyer may receive a shipping discount from the seller when purchasing multiple items. The seller can create and manage shipping discount profiles on My eBay, or by using the <b>SetShippingDiscountProfiles</b> and <b>GetShippingDiscountProfiles</b> calls of the Trading API.
     *  <br><br>
     *  The type of shipping discount profile specified in this field (flat-rate or calculated) should correspond to the <b>intlShippingType</b> ('Flat' or 'Calculated') value in the shipping policy.
     *  <br><br>
     *  Shipping discount profiles are not applicable when Freight shipping is used.
     *
     * @param int $intlFlatCalcDiscountProfileId
     * @return self
     */
    public function setIntlFlatCalcDiscountProfileId($intlFlatCalcDiscountProfileId)
    {
        $this->intlFlatCalcDiscountProfileId = $intlFlatCalcDiscountProfileId;
        return $this;
    }

    /**
     * Gets as applyDomesticPromoShippingProfile
     *
     * If this field is included and set to 'true', a domestic buyer will be the recipient of the seller's promotional shipping discount (if that buyer satisfies the buying requirements). The seller can create a promotional shipping rule on My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *
     * @return bool
     */
    public function getApplyDomesticPromoShippingProfile()
    {
        return $this->applyDomesticPromoShippingProfile;
    }

    /**
     * Sets a new applyDomesticPromoShippingProfile
     *
     * If this field is included and set to 'true', a domestic buyer will be the recipient of the seller's promotional shipping discount (if that buyer satisfies the buying requirements). The seller can create a promotional shipping rule on My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *
     * @param bool $applyDomesticPromoShippingProfile
     * @return self
     */
    public function setApplyDomesticPromoShippingProfile($applyDomesticPromoShippingProfile)
    {
        $this->applyDomesticPromoShippingProfile = $applyDomesticPromoShippingProfile;
        return $this;
    }

    /**
     * Gets as applyIntlPromoShippingProfile
     *
     * If this field is included and set to 'true', an international buyer will be the recipient of the seller's promotional shipping discount (if that buyer satisfies the buying requirements). The seller can create a promotional shipping rule on My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *
     * @return bool
     */
    public function getApplyIntlPromoShippingProfile()
    {
        return $this->applyIntlPromoShippingProfile;
    }

    /**
     * Sets a new applyIntlPromoShippingProfile
     *
     * If this field is included and set to 'true', an international buyer will be the recipient of the seller's promotional shipping discount (if that buyer satisfies the buying requirements). The seller can create a promotional shipping rule on My eBay, or by using the <b>SetShippingDiscountProfiles</b> call of the Trading API.
     *
     * @param bool $applyIntlPromoShippingProfile
     * @return self
     */
    public function setApplyIntlPromoShippingProfile($applyIntlPromoShippingProfile)
    {
        $this->applyIntlPromoShippingProfile = $applyIntlPromoShippingProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDomesticFlatCalcDiscountProfileId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticFlatCalcDiscountProfileId", $value);
        }
        $value = $this->getIntlFlatCalcDiscountProfileId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlFlatCalcDiscountProfileId", $value);
        }
        $value = $this->getApplyDomesticPromoShippingProfile();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}applyDomesticPromoShippingProfile", $value);
        }
        $value = $this->getApplyIntlPromoShippingProfile();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}applyIntlPromoShippingProfile", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticFlatCalcDiscountProfileId');
        if (null !== $value) {
            $this->setDomesticFlatCalcDiscountProfileId($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlFlatCalcDiscountProfileId');
        if (null !== $value) {
            $this->setIntlFlatCalcDiscountProfileId($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}applyDomesticPromoShippingProfile');
        if (null !== $value) {
            $this->setApplyDomesticPromoShippingProfile(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}applyIntlPromoShippingProfile');
        if (null !== $value) {
            $this->setApplyIntlPromoShippingProfile(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
