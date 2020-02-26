<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing TransactionPlatformCodeType
 *
 * <span class="tablenote"><b>Note: </b> Currently, the only supported value for this enumeration type is <code>eBay</code>. Half.com listings will no longer be supported in APIs.
 *  </span>
 *  Specifies the site on which the purchase was made.
 * XSD Type: TransactionPlatformCodeType
 */
class TransactionPlatformCodeType
{

    /**
     * Constant for 'eBay' value.
     *
     * This value indicates the purchase occurred on an eBay marketplace site.
     */
    public const VAL_E_BAY = 'eBay';

    /**
     * Constant for 'Express' value.
     *
     * <span class="tablenote"><b>Note: </b> eBay Express no longer exists.
     *  </span>
     *  The order line item was created on the eBay Express site.
     */
    public const VAL_EXPRESS = 'Express';

    /**
     * Constant for 'Half' value.
     *
     * <span class="tablenote"><b>Note: </b> Half.com listings will no longer be
     * supported in APIs.
     *  </span>
     *  The order line item was created on Half.com site.
     */
    public const VAL_HALF = 'Half';

    /**
     * Constant for 'Shopping' value.
     *
     * <span class="tablenote"><b>Note: </b> Shopping.com listings are no longer
     * supported in APIs.
     *  </span>
     *  The order line item was created on the Shopping.com site.
     */
    public const VAL_SHOPPING = 'Shopping';

    /**
     * Constant for 'WorldOfGood' value.
     *
     * <span class="tablenote"><b>Note: </b> World Of Good is no longer associated with
     * eBay.
     *  </span>
     *  The order line item was created on the WorldOfGood site.
     */
    public const VAL_WORLD_OF_GOOD = 'WorldOfGood';

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
