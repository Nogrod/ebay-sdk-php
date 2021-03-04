<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CompatibilitySpecificationCodeType
 *
 * The kind of info being used to specify the compatible
 *  Applications.
 * XSD Type: CompatibilitySpecificationCodeType
 */
class CompatibilitySpecificationCodeType
{
    /**
     * Constant for 'NameValue' value.
     *
     * Item.ItemCompatibilities.ItemCompatibility
     *  contains a list of name-value pairs that are
     *  specific to the category under which the item
     *  is being listed. This is the default value for
     *  this field.
     */
    public const VAL_NAME_VALUE = 'NameValue';

    /**
     * Constant for 'AAIA' value.
     *
     * Item.ItemCompatibilities.ItemCompatibility
     *  contains a AAIA format XML snippet specified as
     *  a tag value.
     *  Required when you pass a AAIA XML
     *  as tag value.
     */
    public const VAL_AAIA = 'AAIA';

    /**
     * Constant for 'HSN' value.
     *
     * Item.ItemCompatibilities.ItemCompatibility
     *  contains a HSN Id specified as
     *  a tag value.
     *  Required when you pass a HSN Id tag value.
     */
    public const VAL_HSN = 'HSN';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
