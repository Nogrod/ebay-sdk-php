<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TradingRoleCodeType
 *
 * Enumerated type listing the possible roles an eBay user may have in regards to an
 *  eBay order.
 * XSD Type: TradingRoleCodeType
 */
class TradingRoleCodeType
{

    /**
     * Constant for 'Buyer' value.
     *
     * The eBay user is acting as the buyer for the order(s). In <b>GetOrders</b>,
     *  this value should be passed into the <b>OrderRole</b> field in the
     *  request to retrieve orders in which the calling eBay user is the buyer in the
     * order.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'Seller' value.
     *
     * The eBay user is acting as the seller for the order(s). In <b>GetOrders</b>,
     *  this value should be passed into the <b>OrderRole</b> field in the
     *  request to retrieve orders in which the calling eBay user is the seller in the
     * order.
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future or internal use.
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
