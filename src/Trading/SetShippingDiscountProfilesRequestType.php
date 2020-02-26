<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SetShippingDiscountProfilesRequestType
 *
 * This call enables a seller to create and manage shipping discounts rules. These are the same shipping discount rules that can be created or managed in My eBay Shipping Preferences.
 *  <br/><br/>
 *  The types of shipping discount rules that can be created and managed with this call include flat-rate shipping rules, calculated shipping rules, and promotional shipping rules. This call can also be used by sellers to set whether or not they allow buyers to combine separate line items into one Combined Invoice order, and how many days they allow buyers to perform that action.
 *  <br/><br/>
 *  A seller can only create, update, or delete one discount rule type with each call. The action to take (either <code>Add</code>, <code>Update</code>, or <code>Delete</code>) is set and controlled with the <b>ModifyActionCode</b> field.
 * XSD Type: SetShippingDiscountProfilesRequestType
 */
class SetShippingDiscountProfilesRequestType extends AbstractRequestType
{

    /**
     * The three-digit code of the currency to be used for shipping discounts on Combined Invoice orders. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a listing. This field is required if the user is adding or updating one or more shipping discount profiles.
     *  <br><br>
     *  Note that There is a <b>currencyID</b> attribute on all <b>SetShippingDiscountProfiles</b> elements involving money. To avoid a call error, be sure to use the same currency type in these attributes as what is set for the <b>CurrencyID</b> field.
     *
     * @var string $currencyID
     */
    private $currencyID = null;

    /**
     * This field is used to specify the number of days after the purchase of an
     *  item that the buyer or seller can combine multiple and mutual order
     *  line items into one Combined Invoice order. In a Combined Invoice order,
     *  the buyer makes one payment for all order line items, hence only unpaid
     *  order line items can be combined into a Combined Invoice order.
     *
     * @var string $combinedDuration
     */
    private $combinedDuration = null;

    /**
     * This field is used to set which action is being taken (<code>Add</code>, <code>Update</code>, or <code>Delete</code>) in the call. If you are adding a shipping discount rule, you will have to supply a name for that shipping discount profile. If you want to update or delete a shipping discount profile, you'll have to provide the unique identifier of this rule through the corresponding containers. The unique identifiers of these rules can be retrieved with the <b>GetShippingDiscountRules</b> call, or the seller can view these identifiers in My eBay Shipping Preferences.
     *
     * @var string $modifyActionCode
     */
    private $modifyActionCode = null;

    /**
     * This container allows you to create, update, or delete a flat-rate shipping discount profile.
     *
     * @var \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount
     */
    private $flatShippingDiscount = null;

    /**
     * This container allows you to create, update, or delete a calculated shipping discount profile.
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount
     */
    private $calculatedShippingDiscount = null;

    /**
     * This container allows you to create, update, or delete a calculated handling discount profile.
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     */
    private $calculatedHandlingDiscount = null;

    /**
     * This container allows you to create, update, or delete a promotional shipping discount profile.
     *
     * @var \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     */
    private $promotionalShippingDiscountDetails = null;

    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingInsuranceType $shippingInsurance
     */
    private $shippingInsurance = null;

    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingInsuranceType $internationalShippingInsurance
     */
    private $internationalShippingInsurance = null;

    /**
     * Gets as currencyID
     *
     * The three-digit code of the currency to be used for shipping discounts on Combined Invoice orders. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a listing. This field is required if the user is adding or updating one or more shipping discount profiles.
     *  <br><br>
     *  Note that There is a <b>currencyID</b> attribute on all <b>SetShippingDiscountProfiles</b> elements involving money. To avoid a call error, be sure to use the same currency type in these attributes as what is set for the <b>CurrencyID</b> field.
     *
     * @return string
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }

    /**
     * Sets a new currencyID
     *
     * The three-digit code of the currency to be used for shipping discounts on Combined Invoice orders. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a listing. This field is required if the user is adding or updating one or more shipping discount profiles.
     *  <br><br>
     *  Note that There is a <b>currencyID</b> attribute on all <b>SetShippingDiscountProfiles</b> elements involving money. To avoid a call error, be sure to use the same currency type in these attributes as what is set for the <b>CurrencyID</b> field.
     *
     * @param string $currencyID
     * @return self
     */
    public function setCurrencyID($currencyID)
    {
        $this->currencyID = $currencyID;
        return $this;
    }

    /**
     * Gets as combinedDuration
     *
     * This field is used to specify the number of days after the purchase of an
     *  item that the buyer or seller can combine multiple and mutual order
     *  line items into one Combined Invoice order. In a Combined Invoice order,
     *  the buyer makes one payment for all order line items, hence only unpaid
     *  order line items can be combined into a Combined Invoice order.
     *
     * @return string
     */
    public function getCombinedDuration()
    {
        return $this->combinedDuration;
    }

    /**
     * Sets a new combinedDuration
     *
     * This field is used to specify the number of days after the purchase of an
     *  item that the buyer or seller can combine multiple and mutual order
     *  line items into one Combined Invoice order. In a Combined Invoice order,
     *  the buyer makes one payment for all order line items, hence only unpaid
     *  order line items can be combined into a Combined Invoice order.
     *
     * @param string $combinedDuration
     * @return self
     */
    public function setCombinedDuration($combinedDuration)
    {
        $this->combinedDuration = $combinedDuration;
        return $this;
    }

    /**
     * Gets as modifyActionCode
     *
     * This field is used to set which action is being taken (<code>Add</code>, <code>Update</code>, or <code>Delete</code>) in the call. If you are adding a shipping discount rule, you will have to supply a name for that shipping discount profile. If you want to update or delete a shipping discount profile, you'll have to provide the unique identifier of this rule through the corresponding containers. The unique identifiers of these rules can be retrieved with the <b>GetShippingDiscountRules</b> call, or the seller can view these identifiers in My eBay Shipping Preferences.
     *
     * @return string
     */
    public function getModifyActionCode()
    {
        return $this->modifyActionCode;
    }

    /**
     * Sets a new modifyActionCode
     *
     * This field is used to set which action is being taken (<code>Add</code>, <code>Update</code>, or <code>Delete</code>) in the call. If you are adding a shipping discount rule, you will have to supply a name for that shipping discount profile. If you want to update or delete a shipping discount profile, you'll have to provide the unique identifier of this rule through the corresponding containers. The unique identifiers of these rules can be retrieved with the <b>GetShippingDiscountRules</b> call, or the seller can view these identifiers in My eBay Shipping Preferences.
     *
     * @param string $modifyActionCode
     * @return self
     */
    public function setModifyActionCode($modifyActionCode)
    {
        $this->modifyActionCode = $modifyActionCode;
        return $this;
    }

    /**
     * Gets as flatShippingDiscount
     *
     * This container allows you to create, update, or delete a flat-rate shipping discount profile.
     *
     * @return \Nogrod\eBaySDK\Trading\FlatShippingDiscountType
     */
    public function getFlatShippingDiscount()
    {
        return $this->flatShippingDiscount;
    }

    /**
     * Sets a new flatShippingDiscount
     *
     * This container allows you to create, update, or delete a flat-rate shipping discount profile.
     *
     * @param \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount
     * @return self
     */
    public function setFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount)
    {
        $this->flatShippingDiscount = $flatShippingDiscount;
        return $this;
    }

    /**
     * Gets as calculatedShippingDiscount
     *
     * This container allows you to create, update, or delete a calculated shipping discount profile.
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->calculatedShippingDiscount;
    }

    /**
     * Sets a new calculatedShippingDiscount
     *
     * This container allows you to create, update, or delete a calculated shipping discount profile.
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @return self
     */
    public function setCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount)
    {
        $this->calculatedShippingDiscount = $calculatedShippingDiscount;
        return $this;
    }

    /**
     * Gets as calculatedHandlingDiscount
     *
     * This container allows you to create, update, or delete a calculated handling discount profile.
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType
     */
    public function getCalculatedHandlingDiscount()
    {
        return $this->calculatedHandlingDiscount;
    }

    /**
     * Sets a new calculatedHandlingDiscount
     *
     * This container allows you to create, update, or delete a calculated handling discount profile.
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @return self
     */
    public function setCalculatedHandlingDiscount(\Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType $calculatedHandlingDiscount)
    {
        $this->calculatedHandlingDiscount = $calculatedHandlingDiscount;
        return $this;
    }

    /**
     * Gets as promotionalShippingDiscountDetails
     *
     * This container allows you to create, update, or delete a promotional shipping discount profile.
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->promotionalShippingDiscountDetails;
    }

    /**
     * Sets a new promotionalShippingDiscountDetails
     *
     * This container allows you to create, update, or delete a promotional shipping discount profile.
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @return self
     */
    public function setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails)
    {
        $this->promotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        return $this;
    }

    /**
     * Gets as shippingInsurance
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingInsuranceType
     */
    public function getShippingInsurance()
    {
        return $this->shippingInsurance;
    }

    /**
     * Sets a new shippingInsurance
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingInsuranceType $shippingInsurance
     * @return self
     */
    public function setShippingInsurance(\Nogrod\eBaySDK\Trading\ShippingInsuranceType $shippingInsurance)
    {
        $this->shippingInsurance = $shippingInsurance;
        return $this;
    }

    /**
     * Gets as internationalShippingInsurance
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingInsuranceType
     */
    public function getInternationalShippingInsurance()
    {
        return $this->internationalShippingInsurance;
    }

    /**
     * Sets a new internationalShippingInsurance
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingInsuranceType $internationalShippingInsurance
     * @return self
     */
    public function setInternationalShippingInsurance(\Nogrod\eBaySDK\Trading\ShippingInsuranceType $internationalShippingInsurance)
    {
        $this->internationalShippingInsurance = $internationalShippingInsurance;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCurrencyID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrencyID", $value);
        }
        $value = $this->getCombinedDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedDuration", $value);
        }
        $value = $this->getModifyActionCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModifyActionCode", $value);
        }
        $value = $this->getFlatShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FlatShippingDiscount", $value);
        }
        $value = $this->getCalculatedShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingDiscount", $value);
        }
        $value = $this->getCalculatedHandlingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedHandlingDiscount", $value);
        }
        $value = $this->getPromotionalShippingDiscountDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscountDetails", $value);
        }
        $value = $this->getShippingInsurance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingInsurance", $value);
        }
        $value = $this->getInternationalShippingInsurance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalShippingInsurance", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrencyID');
        if (null !== $value) {
            $this->setCurrencyID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedDuration');
        if (null !== $value) {
            $this->setCombinedDuration($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModifyActionCode');
        if (null !== $value) {
            $this->setModifyActionCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatShippingDiscount');
        if (null !== $value) {
            $this->setFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingDiscount');
        if (null !== $value) {
            $this->setCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedHandlingDiscount');
        if (null !== $value) {
            $this->setCalculatedHandlingDiscount(\Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscountDetails');
        if (null !== $value) {
            $this->setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingInsurance');
        if (null !== $value) {
            $this->setShippingInsurance(\Nogrod\eBaySDK\Trading\ShippingInsuranceType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingInsurance');
        if (null !== $value) {
            $this->setInternationalShippingInsurance(\Nogrod\eBaySDK\Trading\ShippingInsuranceType::fromKeyValue($value));
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
