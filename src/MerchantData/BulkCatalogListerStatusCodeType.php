<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BulkCatalogListerStatusCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: BulkCatalogListerStatusCodeType
 */
class BulkCatalogListerStatusCodeType
{

    /**
     * Constant for 'Preapproved' value.
     *
     * This value is not used.
     */
    public const VAL_PREAPPROVED = 'Preapproved';

    /**
     * Constant for 'Active' value.
     *
     * This value is not used.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'OnWatch' value.
     *
     * This value is not used.
     */
    public const VAL_ON_WATCH = 'OnWatch';

    /**
     * Constant for 'OnHold' value.
     *
     * This value is not used.
     */
    public const VAL_ON_HOLD = 'OnHold';

    /**
     * Constant for 'Suspended' value.
     *
     * This value is not used.
     */
    public const VAL_SUSPENDED = 'Suspended';

    /**
     * Constant for 'WatchWarn' value.
     *
     * This value is not used.
     */
    public const VAL_WATCH_WARN = 'WatchWarn';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
