<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing UnpaidItemCaseOpenTypeCodeType
 *
 * <span class="tablenote"> <strong>Note:</strong> This type is deprecated since Unpaid Item cases are no longer supported. </span>
 * XSD Type: UnpaidItemCaseOpenTypeCodeType
 */
class UnpaidItemCaseOpenTypeCodeType
{
    /**
     * Constant for 'Auto' value.
     *
     * <span class="tablenote"><strong>Note:</strong> This field is deprecated (Unpaid
     * Item cases are no longer supported). </span>
     */
    public const VAL_AUTO = 'Auto';

    /**
     * Constant for 'Manual' value.
     *
     * <span class="tablenote"><strong>Note:</strong> This field is deprecated (Unpaid
     * Item cases are no longer supported). </span>
     */
    public const VAL_MANUAL = 'Manual';

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
