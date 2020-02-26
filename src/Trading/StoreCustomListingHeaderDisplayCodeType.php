<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreCustomListingHeaderDisplayCodeType
 *
 * Specifies how the custom listing header will be displayed.
 * XSD Type: StoreCustomListingHeaderDisplayCodeType
 */
class StoreCustomListingHeaderDisplayCodeType
{

    /**
     * Constant for 'None' value.
     *
     * No custom listing header is displayed.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'Full' value.
     *
     * The full custom listing header is displayed.
     */
    public const VAL_FULL = 'Full';

    /**
     * Constant for 'FullAndLeftNavigationBar' value.
     *
     * The full custom listing header and the left navigation bar is displayed.
     */
    public const VAL_FULL_AND_LEFT_NAVIGATION_BAR = 'FullAndLeftNavigationBar';

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
