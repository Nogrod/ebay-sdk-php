<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SearchStandingStatusCodeType
 *
 * The Search standing that you have earned.
 * XSD Type: SearchStandingStatusCodeType
 */
class SearchStandingStatusCodeType
{

    /**
     * Constant for 'Raised' value.
     *
     * Your listings may receive higher placement in search results
     *  that are sorted by Best Match.
     *  You earn this standing when you provide excellent customer service to eBay
     * buyers
     *  (such as good BuyerSatisfaction.Status and high detailed seller ratings).
     *  If you already have a raised search standing, you can still boost your
     *  ratings and increase the visibility of your items by maintaining or
     *  improving your customer service.
     */
    public const VAL_RAISED = 'Raised';

    /**
     * Constant for 'Standard' value.
     *
     * Listings recieve standard placement in search results that are sorted by Best
     * Match.
     */
    public const VAL_STANDARD = 'Standard';

    /**
     * Constant for 'Lowered' value.
     *
     * Your listings may receive lower placement in search results that
     *  are sorted by Best Match.
     *  You earn this standing when you have not been successful in providing
     *  eBay buyers with the customer service they expect.
     *  You can still take positive steps to improve your customer service
     *  and increase your ratings.
     */
    public const VAL_LOWERED = 'Lowered';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
