<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->currencyID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CurrencyID', null, (string) $value);
        }
        $value = $this->combinedDuration;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CombinedDuration', null, (string) $value);
        }
        $value = $this->modifyActionCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ModifyActionCode', null, (string) $value);
        }
        $value = $this->flatShippingDiscount;
        if (null !== $value) {
            $writer->startElementNs(null, 'FlatShippingDiscount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->calculatedShippingDiscount;
        if (null !== $value) {
            $writer->startElementNs(null, 'CalculatedShippingDiscount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->calculatedHandlingDiscount;
        if (null !== $value) {
            $writer->startElementNs(null, 'CalculatedHandlingDiscount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->promotionalShippingDiscountDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'PromotionalShippingDiscountDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetShippingDiscountProfilesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'CurrencyID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->currencyID = $value;
                    }
                    return true;
                case 'CombinedDuration':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->combinedDuration = $value;
                    }
                    return true;
                case 'ModifyActionCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->modifyActionCode = $value;
                    }
                    return true;
                case 'FlatShippingDiscount':
                    $this->flatShippingDiscount = \Nogrod\eBaySDK\Trading\FlatShippingDiscountType::xmlRead($reader);
                    return true;
                case 'CalculatedShippingDiscount':
                    $this->calculatedShippingDiscount = \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType::xmlRead($reader);
                    return true;
                case 'CalculatedHandlingDiscount':
                    $this->calculatedHandlingDiscount = \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType::xmlRead($reader);
                    return true;
                case 'PromotionalShippingDiscountDetails':
                    $this->promotionalShippingDiscountDetails = \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
