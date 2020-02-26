<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DiscountReasonCodeType
 *
 * This enumerated type is used in the response of Add/Revise/Relist item calls to indicate if eBay has applied a Special offer or Promotional discount to the order line item.
 * XSD Type: DiscountReasonCodeType
 */
class DiscountReasonCodeType
{

    /**
     * Constant for 'SpecialOffer' value.
     *
     * An offer that applies to a limited number of listings during the offering
     *  period. Example: "There is no insertion fee for up to 5 auctions when
     *  listing between 12/1 and 12/10."
     */
    public const VAL_SPECIAL_OFFER = 'SpecialOffer';

    /**
     * Constant for 'Promotion' value.
     *
     * An offer that applies to an unlimited number of listings during the offering
     *  period. Example: "Get subtitle for $0.10 in Tech category when listing between
     *  12/25 and 12/28. No limit to the number of items listed during this period."
     */
    public const VAL_PROMOTION = 'Promotion';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use
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
