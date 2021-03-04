<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing BusinessRoleType
 *
 * Enumerated type that defines the eBay user's account type.
 * XSD Type: BusinessRoleType
 */
class BusinessRoleType
{
    /**
     * Constant for 'Shopper' value.
     *
     * This value indicates that the eBay user's account is a Partially Provisioned
     * Account
     *  without buying and selling privileges on eBay.
     */
    public const VAL_SHOPPER = 'Shopper';

    /**
     * Constant for 'FullMarketPlaceParticipant' value.
     *
     * This value indicates that the eBay user's account is a fully provisioned account
     * with buying
     *  and selling privileges on eBay.
     */
    public const VAL_FULL_MARKET_PLACE_PARTICIPANT = 'FullMarketPlaceParticipant';

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
