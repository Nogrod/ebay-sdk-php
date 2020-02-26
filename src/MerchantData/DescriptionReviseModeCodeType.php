<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DescriptionReviseModeCodeType
 *
 * Enumerated type containing the list of values that can be used when revising the
 *  item description of an active listing through the Revise API calls.
 * XSD Type: DescriptionReviseModeCodeType
 */
class DescriptionReviseModeCodeType
{

    /**
     * Constant for 'Replace' value.
     *
     * Use this value in the <b>Item.DescriptionReviseMode</b> field if you want
     *  to completely replace (overwrite) the item description of the active listing.
     */
    public const VAL_REPLACE = 'Replace';

    /**
     * Constant for 'Prepend' value.
     *
     * Use this value in the <b>Item.DescriptionReviseMode</b> field if you want
     *  to prepend text to the item description of the active listing.
     */
    public const VAL_PREPEND = 'Prepend';

    /**
     * Constant for 'Append' value.
     *
     * Use this value in the <b>Item.DescriptionReviseMode</b> field if you want
     *  to append text to the item description of the active listing.
     */
    public const VAL_APPEND = 'Append';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
