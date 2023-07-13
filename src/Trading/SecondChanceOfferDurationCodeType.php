<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SecondChanceOfferDurationCodeType
 *
 * This enumerated type contains the list of values that can be used by the seller to set the length of time that a Second Chance Offer will be available to a specific recipient to whom the Second Chance Offer was presented. The recipient must purchase the Second Chance item within this time or the offer will expire. Second Chance Offers are only applicable for closed auction listings.
 * XSD Type: SecondChanceOfferDurationCodeType
 */
class SecondChanceOfferDurationCodeType
{
    /**
     * Constant for 'Days_1' value.
     *
     * The seller specifies this value to make the Second Chance offer available to the
     * bidder for one day. This value will affect the <b>EndTime</b> value returned in
     * the <b>AddSecondChanceItem</b> response.
     */
    public const VAL_DAYS__1 = 'Days_1';

    /**
     * Constant for 'Days_3' value.
     *
     * The seller specifies this value to make the Second Chance offer available to the
     * bidder for three days. This value will affect the <b>EndTime</b> value returned
     * in the <b>AddSecondChanceItem</b> response.
     */
    public const VAL_DAYS__3 = 'Days_3';

    /**
     * Constant for 'Days_5' value.
     *
     * The seller specifies this value to make the Second Chance offer available to the
     * bidder for five days. This value will affect the <b>AddSecondChanceItem</b>
     * response.
     */
    public const VAL_DAYS__5 = 'Days_5';

    /**
     * Constant for 'Days_7' value.
     *
     * The seller specifies this value to make the Second Chance offer available to the
     * bidder for seven days. This value will affect the <b>EndTime</b> value returned
     * in the <b>AddSecondChanceItem</b> response.
     */
    public const VAL_DAYS__7 = 'Days_7';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
