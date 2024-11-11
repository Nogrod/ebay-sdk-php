<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiscountPriceInfoType
 *
 * Using this container, a seller can supply original retail price and
 *  discount price for an item to clarify the discount treatment (also known
 *  as strike-through pricing). This only applies to fixed-price listings and auction listings with the Buy It Now
 *  option. This feature is available for large enterprise sellers via
 *  white list. A seller can provide discount treatment regardless of
 *  whether the listing includes a SKU.
 * XSD Type: DiscountPriceInfoType
 */
class DiscountPriceInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The actual retail price set by the manufacturer (OEM).
     *  eBay does not maintain or validate the <b>OriginalRetailPrice</b> supplied
     *  by the seller. <b>OriginalRetailPrice</b> should always be more than
     *  <b>StartPrice</b>. Compare the <b>StartPrice</b>/<b>BuyItNowPrice</b> to
     *  <b>OriginalRetailPrice</b> to determine the amount of savings to the buyer.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $originalRetailPrice
     */
    private $originalRetailPrice = null;

    /**
     * Minimum Advertised Price (MAP) is an agreement between suppliers (or
     *  manufacturers (OEM)) and the retailers (sellers) stipulating
     *  the lowest price an item is allowed to be advertised at.
     *  Sellers can offer prices below MAP by means of other discounts.
     *  This only applies to fixed-price listings and auction listings with the Buy It Now option.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $minimumAdvertisedPrice
     */
    private $minimumAdvertisedPrice = null;

    /**
     * For MinimumAdvertisedPrice (MAP) listings only.
     *  A seller cannot show the actual discounted price on eBay's View Item
     *  page. Instead, the buyer can either click on a pop-up on eBay's
     *  View Item page, or the discount price will be shown during checkout.
     *
     * @var string $minimumAdvertisedPriceExposure
     */
    private $minimumAdvertisedPriceExposure = null;

    /**
     * Based on <b>OriginalRetailPrice</b>,
     *  <b>MinimumAdvertisedPrice</b>, and <b>StartPrice</b> values, eBay identifies
     *  whether the listing falls under MAP or STP (aka
     *  <b>OriginalRetailPrice</b>). <b>GetItem</b> returns this for items listed with one
     *  of these discount pricing treatments. <b>GetSellerList</b> returns the
     *  <b>DiscountPriceInfo</b> container. This field is not applicable for Add/Revise/Relist calls.
     *
     * @var string $pricingTreatment
     */
    private $pricingTreatment = null;

    /**
     * Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount
     *  price (specified as <b>StartPrice</b>) is the price for which the seller offered the same (or
     *  similar) item for sale on eBay within the previous 30 days. The discount price is always
     *  in reference to the seller's own price for the item.
     *  <br><br>
     *  If this field is set to <code>true</code>, eBay displays 'Was' in the UK and 'Ursprunglich' in Germany, next
     *  to the discounted price of the item. In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields
     *  are set to <code>true</code>, <b>SoldOneBay</b> takes precedence.
     *  <br>
     *
     * @var bool $soldOneBay
     */
    private $soldOneBay = null;

    /**
     * Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount
     *  price (specified as StartPrice) is the price for which the seller offered the same (or
     *  similar) item for sale on a Web site or offline store other than eBay in the previous 30
     *  days. The discount price is always in reference to the seller's own price for the item.
     *  <br><br>
     *  If this field is set to <code>true</code>, eBay displays 'Was*' in the UK and 'Ursprunglich*' in Germany,
     *  next to the discounted price of the item. In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields
     *  are set to <code>true</code>, <b>SoldOneBay</b> takes precedence.
     *  <br>
     *
     * @var bool $soldOffeBay
     */
    private $soldOffeBay = null;

    /**
     * Applicable only if the item was specifically made for sale through dedicated eBay outlet pages (e.g., eBay Fashion Outlet).<br>
     *  <br>
     *  The comparison price is the price of a comparable product sold
     *  through non-outlet channels on eBay (or elsewhere), or not
     *  specifically made for the outlet.<br>
     *  <br>
     *  In fashion, a "comparable" product shares the same design, but is
     *  not considered an identical product. Some products are specifically
     *  made for outlets, and may have a different SKU than the "comparable"
     *  product. These made-for-outlet products may be manufactured in a
     *  different place, with different materials, or according to different
     *  specifications (i.e. different stitch pattern, seam reinforcement,
     *  button quality, etc.)
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $madeForOutletComparisonPrice
     */
    private $madeForOutletComparisonPrice = null;

    /**
     * Gets as originalRetailPrice
     *
     * The actual retail price set by the manufacturer (OEM).
     *  eBay does not maintain or validate the <b>OriginalRetailPrice</b> supplied
     *  by the seller. <b>OriginalRetailPrice</b> should always be more than
     *  <b>StartPrice</b>. Compare the <b>StartPrice</b>/<b>BuyItNowPrice</b> to
     *  <b>OriginalRetailPrice</b> to determine the amount of savings to the buyer.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getOriginalRetailPrice()
    {
        return $this->originalRetailPrice;
    }

    /**
     * Sets a new originalRetailPrice
     *
     * The actual retail price set by the manufacturer (OEM).
     *  eBay does not maintain or validate the <b>OriginalRetailPrice</b> supplied
     *  by the seller. <b>OriginalRetailPrice</b> should always be more than
     *  <b>StartPrice</b>. Compare the <b>StartPrice</b>/<b>BuyItNowPrice</b> to
     *  <b>OriginalRetailPrice</b> to determine the amount of savings to the buyer.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $originalRetailPrice
     * @return self
     */
    public function setOriginalRetailPrice(\Nogrod\eBaySDK\Trading\AmountType $originalRetailPrice)
    {
        $this->originalRetailPrice = $originalRetailPrice;
        return $this;
    }

    /**
     * Gets as minimumAdvertisedPrice
     *
     * Minimum Advertised Price (MAP) is an agreement between suppliers (or
     *  manufacturers (OEM)) and the retailers (sellers) stipulating
     *  the lowest price an item is allowed to be advertised at.
     *  Sellers can offer prices below MAP by means of other discounts.
     *  This only applies to fixed-price listings and auction listings with the Buy It Now option.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->minimumAdvertisedPrice;
    }

    /**
     * Sets a new minimumAdvertisedPrice
     *
     * Minimum Advertised Price (MAP) is an agreement between suppliers (or
     *  manufacturers (OEM)) and the retailers (sellers) stipulating
     *  the lowest price an item is allowed to be advertised at.
     *  Sellers can offer prices below MAP by means of other discounts.
     *  This only applies to fixed-price listings and auction listings with the Buy It Now option.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $minimumAdvertisedPrice
     * @return self
     */
    public function setMinimumAdvertisedPrice(\Nogrod\eBaySDK\Trading\AmountType $minimumAdvertisedPrice)
    {
        $this->minimumAdvertisedPrice = $minimumAdvertisedPrice;
        return $this;
    }

    /**
     * Gets as minimumAdvertisedPriceExposure
     *
     * For MinimumAdvertisedPrice (MAP) listings only.
     *  A seller cannot show the actual discounted price on eBay's View Item
     *  page. Instead, the buyer can either click on a pop-up on eBay's
     *  View Item page, or the discount price will be shown during checkout.
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
     * For MinimumAdvertisedPrice (MAP) listings only.
     *  A seller cannot show the actual discounted price on eBay's View Item
     *  page. Instead, the buyer can either click on a pop-up on eBay's
     *  View Item page, or the discount price will be shown during checkout.
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
     * Based on <b>OriginalRetailPrice</b>,
     *  <b>MinimumAdvertisedPrice</b>, and <b>StartPrice</b> values, eBay identifies
     *  whether the listing falls under MAP or STP (aka
     *  <b>OriginalRetailPrice</b>). <b>GetItem</b> returns this for items listed with one
     *  of these discount pricing treatments. <b>GetSellerList</b> returns the
     *  <b>DiscountPriceInfo</b> container. This field is not applicable for Add/Revise/Relist calls.
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
     * Based on <b>OriginalRetailPrice</b>,
     *  <b>MinimumAdvertisedPrice</b>, and <b>StartPrice</b> values, eBay identifies
     *  whether the listing falls under MAP or STP (aka
     *  <b>OriginalRetailPrice</b>). <b>GetItem</b> returns this for items listed with one
     *  of these discount pricing treatments. <b>GetSellerList</b> returns the
     *  <b>DiscountPriceInfo</b> container. This field is not applicable for Add/Revise/Relist calls.
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
     * Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount
     *  price (specified as <b>StartPrice</b>) is the price for which the seller offered the same (or
     *  similar) item for sale on eBay within the previous 30 days. The discount price is always
     *  in reference to the seller's own price for the item.
     *  <br><br>
     *  If this field is set to <code>true</code>, eBay displays 'Was' in the UK and 'Ursprunglich' in Germany, next
     *  to the discounted price of the item. In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields
     *  are set to <code>true</code>, <b>SoldOneBay</b> takes precedence.
     *  <br>
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
     * Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount
     *  price (specified as <b>StartPrice</b>) is the price for which the seller offered the same (or
     *  similar) item for sale on eBay within the previous 30 days. The discount price is always
     *  in reference to the seller's own price for the item.
     *  <br><br>
     *  If this field is set to <code>true</code>, eBay displays 'Was' in the UK and 'Ursprunglich' in Germany, next
     *  to the discounted price of the item. In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields
     *  are set to <code>true</code>, <b>SoldOneBay</b> takes precedence.
     *  <br>
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
     * Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount
     *  price (specified as StartPrice) is the price for which the seller offered the same (or
     *  similar) item for sale on a Web site or offline store other than eBay in the previous 30
     *  days. The discount price is always in reference to the seller's own price for the item.
     *  <br><br>
     *  If this field is set to <code>true</code>, eBay displays 'Was*' in the UK and 'Ursprunglich*' in Germany,
     *  next to the discounted price of the item. In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields
     *  are set to <code>true</code>, <b>SoldOneBay</b> takes precedence.
     *  <br>
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
     * Used by the eBay UK and eBay Germany (DE) sites, this flag indicates that the discount
     *  price (specified as StartPrice) is the price for which the seller offered the same (or
     *  similar) item for sale on a Web site or offline store other than eBay in the previous 30
     *  days. The discount price is always in reference to the seller's own price for the item.
     *  <br><br>
     *  If this field is set to <code>true</code>, eBay displays 'Was*' in the UK and 'Ursprunglich*' in Germany,
     *  next to the discounted price of the item. In the event both <b>SoldOffeBay</b> and <b>SoldOneBay</b> fields
     *  are set to <code>true</code>, <b>SoldOneBay</b> takes precedence.
     *  <br>
     *
     * @param bool $soldOffeBay
     * @return self
     */
    public function setSoldOffeBay($soldOffeBay)
    {
        $this->soldOffeBay = $soldOffeBay;
        return $this;
    }

    /**
     * Gets as madeForOutletComparisonPrice
     *
     * Applicable only if the item was specifically made for sale through dedicated eBay outlet pages (e.g., eBay Fashion Outlet).<br>
     *  <br>
     *  The comparison price is the price of a comparable product sold
     *  through non-outlet channels on eBay (or elsewhere), or not
     *  specifically made for the outlet.<br>
     *  <br>
     *  In fashion, a "comparable" product shares the same design, but is
     *  not considered an identical product. Some products are specifically
     *  made for outlets, and may have a different SKU than the "comparable"
     *  product. These made-for-outlet products may be manufactured in a
     *  different place, with different materials, or according to different
     *  specifications (i.e. different stitch pattern, seam reinforcement,
     *  button quality, etc.)
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMadeForOutletComparisonPrice()
    {
        return $this->madeForOutletComparisonPrice;
    }

    /**
     * Sets a new madeForOutletComparisonPrice
     *
     * Applicable only if the item was specifically made for sale through dedicated eBay outlet pages (e.g., eBay Fashion Outlet).<br>
     *  <br>
     *  The comparison price is the price of a comparable product sold
     *  through non-outlet channels on eBay (or elsewhere), or not
     *  specifically made for the outlet.<br>
     *  <br>
     *  In fashion, a "comparable" product shares the same design, but is
     *  not considered an identical product. Some products are specifically
     *  made for outlets, and may have a different SKU than the "comparable"
     *  product. These made-for-outlet products may be manufactured in a
     *  different place, with different materials, or according to different
     *  specifications (i.e. different stitch pattern, seam reinforcement,
     *  button quality, etc.)
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $madeForOutletComparisonPrice
     * @return self
     */
    public function setMadeForOutletComparisonPrice(\Nogrod\eBaySDK\Trading\AmountType $madeForOutletComparisonPrice)
    {
        $this->madeForOutletComparisonPrice = $madeForOutletComparisonPrice;
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
        $value = $this->getMadeForOutletComparisonPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MadeForOutletComparisonPrice", $value);
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
            $this->setOriginalRetailPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumAdvertisedPrice');
        if (null !== $value) {
            $this->setMinimumAdvertisedPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MadeForOutletComparisonPrice');
        if (null !== $value) {
            $this->setMadeForOutletComparisonPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
