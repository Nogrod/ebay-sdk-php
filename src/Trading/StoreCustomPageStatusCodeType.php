<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreCustomPageStatusCodeType
 *
 * List of possible statuses for Store custom pages.
 * XSD Type: StoreCustomPageStatusCodeType
 */
class StoreCustomPageStatusCodeType
{
    /**
     * Constant for 'Active' value.
     *
     * The page is visible.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Delete' value.
     *
     * The page is to be deleted.
     */
    public const VAL_DELETE = 'Delete';

    /**
     * Constant for 'Inactive' value.
     *
     * The page is not visible.
     */
    public const VAL_INACTIVE = 'Inactive';

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
