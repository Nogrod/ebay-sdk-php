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
class DiscountPriceInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->originalRetailPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'OriginalRetailPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->minimumAdvertisedPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'MinimumAdvertisedPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->minimumAdvertisedPriceExposure;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MinimumAdvertisedPriceExposure', null, (string) $value);
        }
        $value = $this->pricingTreatment;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PricingTreatment', null, (string) $value);
        }
        $value = $this->soldOneBay;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SoldOneBay', null, ($value ? 'true' : 'false'));
        }
        $value = $this->soldOffeBay;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SoldOffeBay', null, ($value ? 'true' : 'false'));
        }
        $value = $this->madeForOutletComparisonPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'MadeForOutletComparisonPrice', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DiscountPriceInfoType
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
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'OriginalRetailPrice':
                    $this->originalRetailPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'MinimumAdvertisedPrice':
                    $this->minimumAdvertisedPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'MinimumAdvertisedPriceExposure':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minimumAdvertisedPriceExposure = $value;
                    }
                    return true;
                case 'PricingTreatment':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pricingTreatment = $value;
                    }
                    return true;
                case 'SoldOneBay':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->soldOneBay = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SoldOffeBay':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->soldOffeBay = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'MadeForOutletComparisonPrice':
                    $this->madeForOutletComparisonPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['OriginalRetailPrice'] = $this->originalRetailPrice;
        $data['MinimumAdvertisedPrice'] = $this->minimumAdvertisedPrice;
        $data['MinimumAdvertisedPriceExposure'] = $this->minimumAdvertisedPriceExposure;
        $data['PricingTreatment'] = $this->pricingTreatment;
        $data['SoldOneBay'] = $this->soldOneBay;
        $data['SoldOffeBay'] = $this->soldOffeBay;
        $data['MadeForOutletComparisonPrice'] = $this->madeForOutletComparisonPrice;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
