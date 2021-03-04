<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing InsuranceOptionCodeType
 *
 * Shipping insurance is no longer applicable or supported in eBay APIs, but the <b>InsuranceOption</b> field is still getting returned with the <code>NotOfferedOnSite</code> value.
 * XSD Type: InsuranceOptionCodeType
 */
class InsuranceOptionCodeType
{
    /**
     * Constant for 'Optional' value.
     *
     * This value is no longer applicable, and should not be returned.
     */
    public const VAL_OPTIONAL = 'Optional';

    /**
     * Constant for 'Required' value.
     *
     * This value is no longer applicable, and should not be returned.
     */
    public const VAL_REQUIRED = 'Required';

    /**
     * Constant for 'NotOffered' value.
     *
     * A seller can no longer offer shipping insurance to the buyer, but the
     *  <b>InsuranceOption</b> or <b>InternationalInsuranceOption</b> fields may still
     * be returned with this value.
     */
    public const VAL_NOT_OFFERED = 'NotOffered';

    /**
     * Constant for 'IncludedInShippingHandling' value.
     *
     * This value is no longer applicable, and should not be returned.
     */
    public const VAL_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';

    /**
     * Constant for 'NotOfferedOnSite' value.
     *
     * A seller can no longer offer shipping insurance to the buyer, but the
     *  <b>InsuranceOption</b> field is still returned with this value.
     */
    public const VAL_NOT_OFFERED_ON_SITE = 'NotOfferedOnSite';

    /**
     * Constant for 'CustomCode' value.
     *
     * Placeholder value.
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
