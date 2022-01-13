<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ShippingTypeCodeType
 *
 * Enumerated type that contains the different shipping cost models that can be offered by the seller for domestic and international shipping destinations.
 * XSD Type: ShippingTypeCodeType
 */
class ShippingTypeCodeType
{
    /**
     * Constant for 'Flat' value.
     *
     * This enumeration type indicates that the seller charges flat rates for both
     * domestic or international shipping locations (if selller ships internationally).
     * With flat-rate shipping, the seller specifies up front how much it will cost to
     * ship an item to domestic or international locations. Sellers usually use the
     * <b>Shipping rate tables</b> tool in My eBay to create/set domestic shipping
     * rates by region, and create/set international shipping rates by geographical
     * region/continent or individual countries.
     *  <br/><br/>
     *  Many shipping carriers offer flat-rate shipping services that charge sellers a
     * flat rate as long as the item fits in the flat-rate box or envelope. However,
     * even with these flat-rate shipping services, the shipping carrier may still have
     * some restrictions around weight and types of items that can be shipped in those
     * boxes or envelopes.
     */
    public const VAL_FLAT = 'Flat';

    /**
     * Constant for 'Calculated' value.
     *
     * This enumeration type indicates that the seller uses calculated shipping for
     * both domestic or international shipping locations (if selller ships
     * internationally). With calculated shipping, the seller is relying on the
     * shipping carrier and eBay to calculate the shipping cost based on the buyer's
     * location and the shipping carrier's typical cost to ship the item to that
     * location using that particular shipping service. specifies up front how much it
     * will cost to ship an item to domestic or international locations. Sellers
     * usually use the <b>Shipping rate tables</b> tool in My eBay to create/set
     * domestic shipping rates by region, and create/set international shipping rates
     * by geographical region/continent or individual countries.
     *  <br/><br/>
     *  If the seller uses calculated shipping, a prospective buyer can go to the View
     * Item page and use the shipping calculator tool to get the shipping cost based on
     * the selected shipping service and their mailing address.
     *  <br/><br/>
     *  With calculated shipping, the seller must also provide the package dimensions
     * and total weight (with the item in package) in order for the shipping carrier
     * and eBay to calculate accurate shipping costs.
     */
    public const VAL_CALCULATED = 'Calculated';

    /**
     * Constant for 'Freight' value.
     *
     * This enumeration type indicates that the seller uses freight shipping for both
     * domestic shipping locations. Freight shipping is usually required for large,
     * bulky items over 150 pounds. Freight shipping is not available for international
     * shipping.
     *  <br/><br/>
     *  With freight shipping, eBay (and eBay's freight shipping partner, FreightQuote)
     * calculate the freight shipping cost based on the buyer's location.
     *  <br/><br/>
     *  It is also possible that the seller can use their own third-party freight
     * shipping provider, and if this is the case, the seller is expected to provide
     * the price and details of the freight shipping in the listing description.
     */
    public const VAL_FREIGHT = 'Freight';

    /**
     * Constant for 'Free' value.
     *
     * This value is no longer applicable, as 'Free' is not a cost model. To see if a
     * particular shipping service is free, the user can look at the
     * <b>ShippingServiceCost</b> field for a shipping service.
     */
    public const VAL_FREE = 'Free';

    /**
     * Constant for 'NotSpecified' value.
     *
     * This enumeration type may be returned if the seller has not specified the
     * shipping cost model.
     */
    public const VAL_NOT_SPECIFIED = 'NotSpecified';

    /**
     * Constant for 'FlatDomesticCalculatedInternational' value.
     *
     * This enumeration type may be returned if the seller uses flat-rate shipping for
     * domestic shipping locations, but calculated shipping for international shipping
     * locations.
     */
    public const VAL_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL = 'FlatDomesticCalculatedInternational';

    /**
     * Constant for 'CalculatedDomesticFlatInternational' value.
     *
     * This enumeration type may be returned if the seller uses calculated shipping for
     * domestic shipping locations, but flat-rate shipping for international shipping
     * locations.
     */
    public const VAL_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL = 'CalculatedDomesticFlatInternational';

    /**
     * Constant for 'CustomCode' value.
     *
     * Placeholder value. See
     *  <a
     * href="https://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#token">token</a>.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
