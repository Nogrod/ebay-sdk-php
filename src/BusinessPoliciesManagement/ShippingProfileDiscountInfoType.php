<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingProfileDiscountInfoType
 *
 * Type defining the <b>shippingProfileDiscountInfo</b> container, which consists of details related to flat-rate, calculated, and promotional shipping discounts that are offered to domestic and/or international buyers.
 * XSD Type: ShippingProfileDiscountInfo
 */
class ShippingProfileDiscountInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->domesticFlatCalcDiscountProfileId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'domesticFlatCalcDiscountProfileId', null, (string) $value);
        }
        $value = $this->intlFlatCalcDiscountProfileId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'intlFlatCalcDiscountProfileId', null, (string) $value);
        }
        $value = $this->applyDomesticPromoShippingProfile;
        if (null !== $value) {
            $writer->writeElementNs(null, 'applyDomesticPromoShippingProfile', null, ($value ? 'true' : 'false'));
        }
        $value = $this->applyIntlPromoShippingProfile;
        if (null !== $value) {
            $writer->writeElementNs(null, 'applyIntlPromoShippingProfile', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingProfileDiscountInfoType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'domesticFlatCalcDiscountProfileId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->domesticFlatCalcDiscountProfileId = (int) $value;
                    }
                    return true;
                case 'intlFlatCalcDiscountProfileId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->intlFlatCalcDiscountProfileId = (int) $value;
                    }
                    return true;
                case 'applyDomesticPromoShippingProfile':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->applyDomesticPromoShippingProfile = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'applyIntlPromoShippingProfile':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->applyIntlPromoShippingProfile = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['domesticFlatCalcDiscountProfileId'] = $this->domesticFlatCalcDiscountProfileId;
        $data['intlFlatCalcDiscountProfileId'] = $this->intlFlatCalcDiscountProfileId;
        $data['applyDomesticPromoShippingProfile'] = $this->applyDomesticPromoShippingProfile;
        $data['applyIntlPromoShippingProfile'] = $this->applyIntlPromoShippingProfile;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
