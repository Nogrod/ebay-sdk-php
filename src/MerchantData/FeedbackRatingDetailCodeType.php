<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeedbackRatingDetailCodeType
 *
 * Applicable to sites that support the Detailed Seller Ratings feature.
 *  The FeedbackRatingDetailCodeType is the list of areas for detailed seller ratings. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * XSD Type: FeedbackRatingDetailCodeType
 */
class FeedbackRatingDetailCodeType
{

    /**
     * Constant for 'ItemAsDescribed' value.
     *
     * Detailed seller rating in the area of "item as described."
     */
    public const VAL_ITEM_AS_DESCRIBED = 'ItemAsDescribed';

    /**
     * Constant for 'Communication' value.
     *
     * Detailed seller rating in the area of "communication."
     */
    public const VAL_COMMUNICATION = 'Communication';

    /**
     * Constant for 'ShippingTime' value.
     *
     * Detailed seller rating in the area of "shipping time." Inapplicable to
     *  motor vehicle items.
     */
    public const VAL_SHIPPING_TIME = 'ShippingTime';

    /**
     * Constant for 'ShippingAndHandlingCharges' value.
     *
     * Detailed seller rating in the area of "charges for shipping and handling."
     *  Inapplicable to motor vehicle items.
     */
    public const VAL_SHIPPING_AND_HANDLING_CHARGES = 'ShippingAndHandlingCharges';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
