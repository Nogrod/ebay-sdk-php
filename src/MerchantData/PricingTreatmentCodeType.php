<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PricingTreatmentCodeType
 *
 * This enumerated type defines the available discount price treatments that can be set up by eligible sellers.
 * XSD Type: PricingTreatmentCodeType
 */
class PricingTreatmentCodeType
{
    /**
     * Constant for 'STP' value.
     *
     * This enumeration value indicates that Strikethrough Pricing is enabled for the
     * order line item. If this value is returned, the price in the
     * <b>OriginalRetailPrice</b> field will be crossed out in the View Item page.
     */
    public const VAL_STP = 'STP';

    /**
     * Constant for 'MAP' value.
     *
     * This enumeration value indicates that Minimum Advertised Pricing is enabled for
     * the order line item. If this value is returned, the minimum advertised price is
     * found in the <b>MinimumAdvertisedPrice</b> field.
     */
    public const VAL_MAP = 'MAP';

    /**
     * Constant for 'None' value.
     *
     * This enumeration value indicates that neither Strikethrough Pricing or Minimum
     * Advertised Pricing is enabled for the order line item.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'MFO' value.
     *
     * This enumeration value indicates that Made For Outlet Comparison Pricing is
     * enabled for the order line item. If this value is returned, the Made For Outlet
     * Comparison price is found in the <b>MadeForOutletComparisonPrice</b> field.
     */
    public const VAL_MFO = 'MFO';

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
