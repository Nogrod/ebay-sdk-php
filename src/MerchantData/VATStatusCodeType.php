<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing VATStatusCodeType
 *
 * Indicates whether or not the user is subject to VAT.
 *  Users who have registered with eBay as VAT-exempt are not
 *  subject to VAT. See documentation on Value-Added Tax (VAT).
 * XSD Type: VATStatusCodeType
 */
class VATStatusCodeType
{
    /**
     * Constant for 'NoVATTax' value.
     *
     * (out) VAT is not applicable
     */
    public const VAL_NO_VATTAX = 'NoVATTax';

    /**
     * Constant for 'VATTax' value.
     *
     * (out) Residence in a country with VAT and user is not registered as VAT-exempt
     */
    public const VAL_VATTAX = 'VATTax';

    /**
     * Constant for 'VATExempt' value.
     *
     * (out) Residence in a country with VAT and user is registered as VAT-exempt
     */
    public const VAL_VATEXEMPT = 'VATExempt';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use
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
