<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CombinedPaymentPreferencesType
 *
 * Type used to indicate if the seller supports <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Listing-AnItem.html#CombinedInvoice">Combined Invoice</a>
 *  orders, and if so, defines whether the seller specifies any shipping discount before or after purchase.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note:</b> In the past, this type was also used to indicate more settings related to Combined Invoice discounts, including the number of days that buyers have to combine line items into a Combined Invoice, and detailed information on Calculated and Flat-Rate shipping discount profiles. However, these settings are now set through the <b>SetShippingDiscountProfiles</b> call (or through Shipping Preferences in My eBay), and retrieved with the <b>GetShippingDiscountProfiles</b> call.
 *  </span>
 * XSD Type: CombinedPaymentPreferencesType
 */
class CombinedPaymentPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Calculated Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedShippingPreferencesType $calculatedShippingPreferences
     */
    private $calculatedShippingPreferences = null;

    /**
     * Specifies whether or not a seller wants to allow buyers to combine single
     *  order line items into a Combined Invoice order. A Combined Invoice order can
     *  be created by the buyer or seller if multiple unpaid order line items exist
     *  between the same buyer and seller. Often, a Combined Invoice order can
     *  reduce shipping and handling expenses for the buyer and seller.
     *
     * @var string $combinedPaymentOption
     */
    private $combinedPaymentOption = null;

    /**
     * DO NOT USE THIS FIELD. As an alternative, use the <b>CombinedDuration</b> field in
     *  <b>SetShippingDiscountProfiles</b> to specify the time period in which to allow
     *  buyers to combine order line items into a Combined Invoice order, and use
     *  <b>GetShippingDiscountProfiles</b> to retrieve the <b>CombinedDuration</b> value.
     *
     * @var string $combinedPaymentPeriod
     */
    private $combinedPaymentPeriod = null;

    /**
     * DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Flat Rate Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     *
     * @var \Nogrod\eBaySDK\Trading\FlatShippingPreferencesType $flatShippingPreferences
     */
    private $flatShippingPreferences = null;

    /**
     * Gets as calculatedShippingPreferences
     *
     * DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Calculated Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedShippingPreferencesType
     */
    public function getCalculatedShippingPreferences()
    {
        return $this->calculatedShippingPreferences;
    }

    /**
     * Sets a new calculatedShippingPreferences
     *
     * DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Calculated Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedShippingPreferencesType $calculatedShippingPreferences
     * @return self
     */
    public function setCalculatedShippingPreferences(\Nogrod\eBaySDK\Trading\CalculatedShippingPreferencesType $calculatedShippingPreferences)
    {
        $this->calculatedShippingPreferences = $calculatedShippingPreferences;
        return $this;
    }

    /**
     * Gets as combinedPaymentOption
     *
     * Specifies whether or not a seller wants to allow buyers to combine single
     *  order line items into a Combined Invoice order. A Combined Invoice order can
     *  be created by the buyer or seller if multiple unpaid order line items exist
     *  between the same buyer and seller. Often, a Combined Invoice order can
     *  reduce shipping and handling expenses for the buyer and seller.
     *
     * @return string
     */
    public function getCombinedPaymentOption()
    {
        return $this->combinedPaymentOption;
    }

    /**
     * Sets a new combinedPaymentOption
     *
     * Specifies whether or not a seller wants to allow buyers to combine single
     *  order line items into a Combined Invoice order. A Combined Invoice order can
     *  be created by the buyer or seller if multiple unpaid order line items exist
     *  between the same buyer and seller. Often, a Combined Invoice order can
     *  reduce shipping and handling expenses for the buyer and seller.
     *
     * @param string $combinedPaymentOption
     * @return self
     */
    public function setCombinedPaymentOption($combinedPaymentOption)
    {
        $this->combinedPaymentOption = $combinedPaymentOption;
        return $this;
    }

    /**
     * Gets as combinedPaymentPeriod
     *
     * DO NOT USE THIS FIELD. As an alternative, use the <b>CombinedDuration</b> field in
     *  <b>SetShippingDiscountProfiles</b> to specify the time period in which to allow
     *  buyers to combine order line items into a Combined Invoice order, and use
     *  <b>GetShippingDiscountProfiles</b> to retrieve the <b>CombinedDuration</b> value.
     *
     * @return string
     */
    public function getCombinedPaymentPeriod()
    {
        return $this->combinedPaymentPeriod;
    }

    /**
     * Sets a new combinedPaymentPeriod
     *
     * DO NOT USE THIS FIELD. As an alternative, use the <b>CombinedDuration</b> field in
     *  <b>SetShippingDiscountProfiles</b> to specify the time period in which to allow
     *  buyers to combine order line items into a Combined Invoice order, and use
     *  <b>GetShippingDiscountProfiles</b> to retrieve the <b>CombinedDuration</b> value.
     *
     * @param string $combinedPaymentPeriod
     * @return self
     */
    public function setCombinedPaymentPeriod($combinedPaymentPeriod)
    {
        $this->combinedPaymentPeriod = $combinedPaymentPeriod;
        return $this;
    }

    /**
     * Gets as flatShippingPreferences
     *
     * DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Flat Rate Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     *
     * @return \Nogrod\eBaySDK\Trading\FlatShippingPreferencesType
     */
    public function getFlatShippingPreferences()
    {
        return $this->flatShippingPreferences;
    }

    /**
     * Sets a new flatShippingPreferences
     *
     * DO NOT USE THIS CONTAINER. As an alternative, use <b>SetShippingDiscountProfiles</b> to set all Flat Rate Shipping rules and preferences, and use <b>GetShippingDiscountProfiles</b> to retrieve the same information.
     *
     * @param \Nogrod\eBaySDK\Trading\FlatShippingPreferencesType $flatShippingPreferences
     * @return self
     */
    public function setFlatShippingPreferences(\Nogrod\eBaySDK\Trading\FlatShippingPreferencesType $flatShippingPreferences)
    {
        $this->flatShippingPreferences = $flatShippingPreferences;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCalculatedShippingPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingPreferences", $value);
        }
        $value = $this->getCombinedPaymentOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedPaymentOption", $value);
        }
        $value = $this->getCombinedPaymentPeriod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedPaymentPeriod", $value);
        }
        $value = $this->getFlatShippingPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FlatShippingPreferences", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingPreferences');
        if (null !== $value) {
            $this->setCalculatedShippingPreferences(\Nogrod\eBaySDK\Trading\CalculatedShippingPreferencesType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedPaymentOption');
        if (null !== $value) {
            $this->setCombinedPaymentOption($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedPaymentPeriod');
        if (null !== $value) {
            $this->setCombinedPaymentPeriod($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatShippingPreferences');
        if (null !== $value) {
            $this->setFlatShippingPreferences(\Nogrod\eBaySDK\Trading\FlatShippingPreferencesType::fromKeyValue($value));
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
