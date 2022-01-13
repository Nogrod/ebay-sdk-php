<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ModifyActionCodeType
 *
 * This enumerated type defines the values that can be used when adding, modiying, or
 *  deleting a shipping discount profile (through the <b>ModifyActionCode</b>
 *  field in <b>SetShippingDiscountProfiles</b>).
 * XSD Type: ModifyActionCodeType
 */
class ModifyActionCodeType
{
    /**
     * Constant for 'Add' value.
     *
     * This value is used in a <b>SetShippingDiscountProfiles</b> request
     *  to create a new shipping discount profile.
     */
    public const VAL_ADD = 'Add';

    /**
     * Constant for 'Delete' value.
     *
     * This value is used in a <b>SetShippingDiscountProfiles</b> request
     *  to delete an existing shipping discount profile.
     */
    public const VAL_DELETE = 'Delete';

    /**
     * Constant for 'Update' value.
     *
     * This value is used in a <b>SetShippingDiscountProfiles</b> request
     *  to modify an existing shipping discount profile.
     */
    public const VAL_UPDATE = 'Update';

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
