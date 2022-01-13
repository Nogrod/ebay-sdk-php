<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingTypeCodeType
 *
 * The shipping cost model offered by the seller.
 * XSD Type: ShippingTypeCodeType
 */
class ShippingTypeCodeType
{
    /**
     * Constant for 'Flat' value.
     *
     * Flat shipping model: the seller establishes the cost of shipping and cost of
     * shipping insurance, regardless of what any buyer-selected shipping service might
     * charge the seller.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This shipping type includes an option for a <em>Flat
     * Rate Freight</em> shipping service. For details about freight shipping, see <a
     * href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying
     * Freight Shipping</a> in the eBay Features Guide.
     *  </span>
     */
    public const VAL_FLAT = 'Flat';

    /**
     * Constant for 'Calculated' value.
     *
     * Calculated shipping model: the cost of shipping is
     *  determined in large part by the seller-offered and
     *  buyer-selected shipping service. The seller might assess an
     *  additional fee via PackagingHandlingCosts.
     */
    public const VAL_CALCULATED = 'Calculated';

    /**
     * Constant for 'Freight' value.
     *
     * Freight shipping model. Available only for US domestic shipping. The cost of
     * shipping is automatically determined by an affiliated third party,
     * FreightQuote.com, based on the item location (postal code).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This shipping type cannot be set via API, but it is
     * automatically set by eBay when a buyer selects the FreightQuote.com option on
     * the US eBay website.
     *  <br/><br/>
     *  For details about types of freight shipping that you can specify via API, see
     * <a
     * href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying
     * Freight Shipping</a> in the eBay Features Guide.
     *  </span>
     */
    public const VAL_FREIGHT = 'Freight';

    /**
     * Constant for 'Free' value.
     *
     * Free shipping.
     *  This field is output-only so if you want to use AddItem to specify a free
     *  Shipping Cost, specify 0 in
     *  Item.ShippingDetails.ShippingServiceOptions.ShippingServiceCost.
     */
    public const VAL_FREE = 'Free';

    /**
     * Constant for 'NotSpecified' value.
     *
     * The seller did not specify the shipping type.
     */
    public const VAL_NOT_SPECIFIED = 'NotSpecified';

    /**
     * Constant for 'FlatDomesticCalculatedInternational' value.
     *
     * The seller specified one or more flat domestic shipping services
     *  and one or more calculated international shipping services.
     */
    public const VAL_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL = 'FlatDomesticCalculatedInternational';

    /**
     * Constant for 'CalculatedDomesticFlatInternational' value.
     *
     * The seller specified one or more calculated domestic shipping services
     *  and one or more flat international shipping services.
     */
    public const VAL_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL = 'CalculatedDomesticFlatInternational';

    /**
     * Constant for 'FreightFlat' value.
     *
     * Freight shipping model. Available only for the US, UK, AU, CA and CAFR sites,
     * and only for domestic shipping. <code>FreightFlat</code> applies to shipping
     * with carriers that are not affiliated with eBay. It is negotiated freight, not a
     * flat rate. Sellers negotiate the shipping cost with their chosen carrier and the
     * buyer before completing the sale. FreightFlat shipping may be used when
     * calculated shipping cannot be used due to the greater weight of the item.
     *  <br/><br/>
     *  For details about freight shipping, see <a
     * href="https://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying
     * Freight Shipping</a> in the eBay Features Guide.
     */
    public const VAL_FREIGHT_FLAT = 'FreightFlat';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
