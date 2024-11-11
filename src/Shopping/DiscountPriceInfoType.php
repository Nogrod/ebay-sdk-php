<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiscountPriceInfoType
 *
 * Contains the discount pricing details for an item, including the original
 *  retail price and the display treatment to be used for the item. The pricing
 *  treatment displayed for a discounted item depends on the values specified
 *  in this container when the item is listed. Discount pricing treatments
 *  (Strikethrough Pricing and Minimum Advertised Price) apply to only fixed-price listings. Sellers can apply Discount Pricing to both MSKU and
 *  Non-MSKU items.
 *  <br><br>
 *  The Strikethrough Pricing feature is only available on the US (including Motors), Canada (including Motors, and both English and French versions of site), UK, Germany, France, Italy, and Spain sites. The Minimum Advertised Price feature is only available on the US site.
 * XSD Type: DiscountPriceInfoType
 */
class DiscountPriceInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field specifies the price to which the discounted-price display
     *  treatment will be applied (for example, a strikethrough price). The
     *  discounted price of an item is shown in the <b>CurrentPrice</b> field, and is always less than the value in this field.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $originalRetailPrice
     */
    private $originalRetailPrice = null;

    /**
     * A value equal to the agreed upon minimum advertised price.
     *  <br><br>
     *  The minimum advertised price is an agreed upon price that is set by the
     *  suppliers/OEMs and the retailers/sellers. The minimum advertised price
     *  is the lowest price for which an item can be advertised. Large volume
     *  sellers can negotiate with the suppliers/OEMs to offer certain items
     *  below the set minimum advertised price. eBay does not maintain or
     *  validate the agreed upon minimum advertised price; the seller is
     *  responsible for setting this value in accordance with their agreement
     *  with the supplier/OEMs. MAP pricing treatments apply to only fixed-price,
     *  listings on the eBay US site.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $minimumAdvertisedPrice
     */
    private $minimumAdvertisedPrice = null;

    /**
     * This field is only returned for US-based listings eligible for, and using the MAP feature. The enumeration value returned in this field indicates how/when the Minimum Advertised Price will be displayed to the buyer. See the descriptions for each enumeration value for more information.
     *
     * @var string $minimumAdvertisedPriceExposure
     */
    private $minimumAdvertisedPriceExposure = null;

    /**
     * This field denotes whether or not an item qualifies for a discount
     *  pricing treatment display, such as STP or MAP. If this field is set to <code>MAP</code>, you must abide
     *  by the rules for displaying MAP items, as described in the
     *  <b>MinimumAdvertisedPriceExposure</b> field.
     *  <br /> <br />
     *  <span class="tablenote"><b>Important:</b>
     *  For listings that return PricingTreatment set to MAP, you are
     *  legally required to follow the rules for displaying the price of
     *  the item to potential buyers. You are bound by the terms of the
     *  API License Agreement to follow these rules. Refer to the
     *  API License Agreement for consequences of non-compliance.
     *  </span>
     *
     * @var string $pricingTreatment
     */
    private $pricingTreatment = null;

    /**
     * Used by the eBay UK and eBay Germany (DE) sites, this field indicates
     *  that the discount price (shown in <b>CurrentPrice</b> field) is the price for
     *  which the seller offered the same (or similar) item for sale on eBay
     *  within the previous 30 days. The discount price is always in reference
     *  to the seller's own price for the item.
     *  <br /><br />
     *  In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b>
     *  takes precedence.
     *
     * @var bool $soldOneBay
     */
    private $soldOneBay = null;

    /**
     * Used by the eBay UK and eBay Germany (DE) sites, this field indicates
     *  that the discount price (shown in <b>CurrentPrice</b> field) is the price for
     *  which the seller offered the same item for sale on a web site or offline
     *  store other than eBay in the previous 30 days. The discount price is
     *  always in reference to the seller's own price for the item.
     *  <br /><br />
     *  In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b>
     *  takes precedence.
     *
     * @var bool $soldOffeBay
     */
    private $soldOffeBay = null;

    /**
     * Gets as originalRetailPrice
     *
     * This field specifies the price to which the discounted-price display
     *  treatment will be applied (for example, a strikethrough price). The
     *  discounted price of an item is shown in the <b>CurrentPrice</b> field, and is always less than the value in this field.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getOriginalRetailPrice()
    {
        return $this->originalRetailPrice;
    }

    /**
     * Sets a new originalRetailPrice
     *
     * This field specifies the price to which the discounted-price display
     *  treatment will be applied (for example, a strikethrough price). The
     *  discounted price of an item is shown in the <b>CurrentPrice</b> field, and is always less than the value in this field.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $originalRetailPrice
     * @return self
     */
    public function setOriginalRetailPrice(\Nogrod\eBaySDK\Shopping\AmountType $originalRetailPrice)
    {
        $this->originalRetailPrice = $originalRetailPrice;
        return $this;
    }

    /**
     * Gets as minimumAdvertisedPrice
     *
     * A value equal to the agreed upon minimum advertised price.
     *  <br><br>
     *  The minimum advertised price is an agreed upon price that is set by the
     *  suppliers/OEMs and the retailers/sellers. The minimum advertised price
     *  is the lowest price for which an item can be advertised. Large volume
     *  sellers can negotiate with the suppliers/OEMs to offer certain items
     *  below the set minimum advertised price. eBay does not maintain or
     *  validate the agreed upon minimum advertised price; the seller is
     *  responsible for setting this value in accordance with their agreement
     *  with the supplier/OEMs. MAP pricing treatments apply to only fixed-price,
     *  listings on the eBay US site.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->minimumAdvertisedPrice;
    }

    /**
     * Sets a new minimumAdvertisedPrice
     *
     * A value equal to the agreed upon minimum advertised price.
     *  <br><br>
     *  The minimum advertised price is an agreed upon price that is set by the
     *  suppliers/OEMs and the retailers/sellers. The minimum advertised price
     *  is the lowest price for which an item can be advertised. Large volume
     *  sellers can negotiate with the suppliers/OEMs to offer certain items
     *  below the set minimum advertised price. eBay does not maintain or
     *  validate the agreed upon minimum advertised price; the seller is
     *  responsible for setting this value in accordance with their agreement
     *  with the supplier/OEMs. MAP pricing treatments apply to only fixed-price,
     *  listings on the eBay US site.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $minimumAdvertisedPrice
     * @return self
     */
    public function setMinimumAdvertisedPrice(\Nogrod\eBaySDK\Shopping\AmountType $minimumAdvertisedPrice)
    {
        $this->minimumAdvertisedPrice = $minimumAdvertisedPrice;
        return $this;
    }

    /**
     * Gets as minimumAdvertisedPriceExposure
     *
     * This field is only returned for US-based listings eligible for, and using the MAP feature. The enumeration value returned in this field indicates how/when the Minimum Advertised Price will be displayed to the buyer. See the descriptions for each enumeration value for more information.
     *
     * @return string
     */
    public function getMinimumAdvertisedPriceExposure()
    {
        return $this->minimumAdvertisedPriceExposure;
    }

    /**
     * Sets a new minimumAdvertisedPriceExposure
     *
     * This field is only returned for US-based listings eligible for, and using the MAP feature. The enumeration value returned in this field indicates how/when the Minimum Advertised Price will be displayed to the buyer. See the descriptions for each enumeration value for more information.
     *
     * @param string $minimumAdvertisedPriceExposure
     * @return self
     */
    public function setMinimumAdvertisedPriceExposure($minimumAdvertisedPriceExposure)
    {
        $this->minimumAdvertisedPriceExposure = $minimumAdvertisedPriceExposure;
        return $this;
    }

    /**
     * Gets as pricingTreatment
     *
     * This field denotes whether or not an item qualifies for a discount
     *  pricing treatment display, such as STP or MAP. If this field is set to <code>MAP</code>, you must abide
     *  by the rules for displaying MAP items, as described in the
     *  <b>MinimumAdvertisedPriceExposure</b> field.
     *  <br /> <br />
     *  <span class="tablenote"><b>Important:</b>
     *  For listings that return PricingTreatment set to MAP, you are
     *  legally required to follow the rules for displaying the price of
     *  the item to potential buyers. You are bound by the terms of the
     *  API License Agreement to follow these rules. Refer to the
     *  API License Agreement for consequences of non-compliance.
     *  </span>
     *
     * @return string
     */
    public function getPricingTreatment()
    {
        return $this->pricingTreatment;
    }

    /**
     * Sets a new pricingTreatment
     *
     * This field denotes whether or not an item qualifies for a discount
     *  pricing treatment display, such as STP or MAP. If this field is set to <code>MAP</code>, you must abide
     *  by the rules for displaying MAP items, as described in the
     *  <b>MinimumAdvertisedPriceExposure</b> field.
     *  <br /> <br />
     *  <span class="tablenote"><b>Important:</b>
     *  For listings that return PricingTreatment set to MAP, you are
     *  legally required to follow the rules for displaying the price of
     *  the item to potential buyers. You are bound by the terms of the
     *  API License Agreement to follow these rules. Refer to the
     *  API License Agreement for consequences of non-compliance.
     *  </span>
     *
     * @param string $pricingTreatment
     * @return self
     */
    public function setPricingTreatment($pricingTreatment)
    {
        $this->pricingTreatment = $pricingTreatment;
        return $this;
    }

    /**
     * Gets as soldOneBay
     *
     * Used by the eBay UK and eBay Germany (DE) sites, this field indicates
     *  that the discount price (shown in <b>CurrentPrice</b> field) is the price for
     *  which the seller offered the same (or similar) item for sale on eBay
     *  within the previous 30 days. The discount price is always in reference
     *  to the seller's own price for the item.
     *  <br /><br />
     *  In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b>
     *  takes precedence.
     *
     * @return bool
     */
    public function getSoldOneBay()
    {
        return $this->soldOneBay;
    }

    /**
     * Sets a new soldOneBay
     *
     * Used by the eBay UK and eBay Germany (DE) sites, this field indicates
     *  that the discount price (shown in <b>CurrentPrice</b> field) is the price for
     *  which the seller offered the same (or similar) item for sale on eBay
     *  within the previous 30 days. The discount price is always in reference
     *  to the seller's own price for the item.
     *  <br /><br />
     *  In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b>
     *  takes precedence.
     *
     * @param bool $soldOneBay
     * @return self
     */
    public function setSoldOneBay($soldOneBay)
    {
        $this->soldOneBay = $soldOneBay;
        return $this;
    }

    /**
     * Gets as soldOffeBay
     *
     * Used by the eBay UK and eBay Germany (DE) sites, this field indicates
     *  that the discount price (shown in <b>CurrentPrice</b> field) is the price for
     *  which the seller offered the same item for sale on a web site or offline
     *  store other than eBay in the previous 30 days. The discount price is
     *  always in reference to the seller's own price for the item.
     *  <br /><br />
     *  In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b>
     *  takes precedence.
     *
     * @return bool
     */
    public function getSoldOffeBay()
    {
        return $this->soldOffeBay;
    }

    /**
     * Sets a new soldOffeBay
     *
     * Used by the eBay UK and eBay Germany (DE) sites, this field indicates
     *  that the discount price (shown in <b>CurrentPrice</b> field) is the price for
     *  which the seller offered the same item for sale on a web site or offline
     *  store other than eBay in the previous 30 days. The discount price is
     *  always in reference to the seller's own price for the item.
     *  <br /><br />
     *  In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields are set, <b>SoldOneBay</b>
     *  takes precedence.
     *
     * @param bool $soldOffeBay
     * @return self
     */
    public function setSoldOffeBay($soldOffeBay)
    {
        $this->soldOffeBay = $soldOffeBay;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOriginalRetailPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalRetailPrice", $value);
        }
        $value = $this->getMinimumAdvertisedPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumAdvertisedPrice", $value);
        }
        $value = $this->getMinimumAdvertisedPriceExposure();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumAdvertisedPriceExposure", $value);
        }
        $value = $this->getPricingTreatment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PricingTreatment", $value);
        }
        $value = $this->getSoldOneBay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldOneBay", $value);
        }
        $value = $this->getSoldOffeBay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldOffeBay", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalRetailPrice');
        if (null !== $value) {
            $this->setOriginalRetailPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumAdvertisedPrice');
        if (null !== $value) {
            $this->setMinimumAdvertisedPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumAdvertisedPriceExposure');
        if (null !== $value) {
            $this->setMinimumAdvertisedPriceExposure($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PricingTreatment');
        if (null !== $value) {
            $this->setPricingTreatment($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldOneBay');
        if (null !== $value) {
            $this->setSoldOneBay(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldOffeBay');
        if (null !== $value) {
            $this->setSoldOffeBay(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
