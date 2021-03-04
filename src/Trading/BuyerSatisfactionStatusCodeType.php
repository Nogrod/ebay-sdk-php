<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BuyerSatisfactionStatusCodeType
 *
 * This enumerated type contains the list of possible Buyer Satisfaction ratings for a seller.
 * XSD Type: BuyerSatisfactionStatusCodeType
 */
class BuyerSatisfactionStatusCodeType
{
    /**
     * Constant for 'Excellent' value.
     *
     * You are doing an excellent job as an eBay seller.
     *  Be sure to continue providing members with a positive buying experience.
     *  A buyer satisfaction rating of Excellent ensures that you are eligible
     *  for eBay incentives.
     */
    public const VAL_EXCELLENT = 'Excellent';

    /**
     * Constant for 'Good' value.
     *
     * You are doing a good job as an eBay seller.
     *  Buyers have been satisfied with your customer service. Be sure to continue
     *  providing members with a positive buying experience. A buyer satisfaction
     *  rating of Good ensures that you are eligible for eBay incentives.
     */
    public const VAL_GOOD = 'Good';

    /**
     * Constant for 'NeedsWork' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_NEEDS_WORK = 'NeedsWork';

    /**
     * Constant for 'Poor' value.
     *
     * You are not doing a good job as an eBay seller.
     *  Some of your buyers have not been satisfied with your service.
     *  Improve your customer service to earn a higher buyer satisfaction rating.
     *  If your customer service continues to receive poor responses from customers,
     *  your buyer satisfaction rating can drop and could put your eBay seller's
     *  account at risk.
     */
    public const VAL_POOR = 'Poor';

    /**
     * Constant for 'VeryPoor' value.
     *
     * You are doing a very poor job as an eBay seller.
     *  You need to improve your selling practices immediately. Too many of your
     *  customers have not been satisfied with your customer service and you are
     *  at risk of losing your eBay account.
     */
    public const VAL_VERY_POOR = 'VeryPoor';

    /**
     * Constant for 'Unacceptable' value.
     *
     * You are doing an unacceptable job as an eBay seller.
     *  Improve your selling practices immediately. Your account may be suspended
     *  because of your unacceptable customer service.
     */
    public const VAL_UNACCEPTABLE = 'Unacceptable';

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
