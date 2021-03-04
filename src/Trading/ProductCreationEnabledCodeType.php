<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProductCreationEnabledCodeType
 *
 * Values indicate whether product creation is enabled, disabled or required for a category.
 * XSD Type: ProductCreationEnabledCodeType
 */
class ProductCreationEnabledCodeType
{
    /**
     * Constant for 'Disabled' value.
     *
     * Product creation is not supported for the category.
     *  AddItem family calls can still list with product.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Enabled' value.
     *
     * Product Creation is supported for the category.
     *  AddItem family calls can still list with product but can go through new product
     * creation flow.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Required' value.
     *
     * Product Creation is required for the category.
     *  AddItem family calls have to list with a product. If no product exists can go
     * through new product creation flow.
     */
    public const VAL_REQUIRED = 'Required';

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
