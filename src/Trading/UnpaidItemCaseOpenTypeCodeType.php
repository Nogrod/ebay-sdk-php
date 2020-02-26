<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing UnpaidItemCaseOpenTypeCodeType
 *
 * Enumeration type that indicates the method used to open an Unpaid Item case.
 * XSD Type: UnpaidItemCaseOpenTypeCodeType
 */
class UnpaidItemCaseOpenTypeCodeType
{

    /**
     * Constant for 'Auto' value.
     *
     * This value indicates that the Unpaid Item case was opened automatically
     *  through eBay's Unpaid Item Assistant feature.
     */
    public const VAL_AUTO = 'Auto';

    /**
     * Constant for 'Manual' value.
     *
     * This value indicates that the seller opened an Unpaid Item case manually
     *  through the Resolution Center or by using the Trading API's
     *  <strong>AddDispute</strong> call.
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
