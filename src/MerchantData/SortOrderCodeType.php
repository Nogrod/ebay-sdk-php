<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SortOrderCodeType
 *
 * This type specifies the sort order of a returned array of elements. The array or list to be sorted, the sort key, and the default sort order depend on the call.
 * XSD Type: SortOrderCodeType
 */
class SortOrderCodeType
{

    /**
     * Constant for 'Ascending' value.
     *
     * The results will be sorted by the specified key in ascending (low to high)
     * order.
     */
    public const VAL_ASCENDING = 'Ascending';

    /**
     * Constant for 'Descending' value.
     *
     * The results will be sorted by the specified key in descending (high to low)
     * order.
     */
    public const VAL_DESCENDING = 'Descending';

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
