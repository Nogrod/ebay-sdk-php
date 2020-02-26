<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing MinimumAdvertisedPriceExposureCodeType
 *
 * This enumerated type defines the special price treatments that can be set up for listings enabled with the Minimum Advertised Price feature. The Minimum Advertised Price (MAP) feature is only supported on the eBay US site.
 * XSD Type: MinimumAdvertisedPriceExposureCodeType
 */
class MinimumAdvertisedPriceExposureCodeType
{

    /**
     * Constant for 'PreCheckout' value.
     *
     * This enumeration value indicates that the buyer must add the item to his/her
     * cart before the discounted price can be displayed.
     */
    public const VAL_PRE_CHECKOUT = 'PreCheckout';

    /**
     * Constant for 'DuringCheckout' value.
     *
     * This enumeration value indicates that the discounted price will only be shown to
     * the buyer once the buyer reaches the eBay Checkout page.
     */
    public const VAL_DURING_CHECKOUT = 'DuringCheckout';

    /**
     * Constant for 'None' value.
     *
     * This enumeration value indicates that the discounted price is shown on the View
     * Item page, and the buyer is not required to add the item to his/her cart or
     * click Buy button to view the discounted price.
     */
    public const VAL_NONE = 'None';

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
