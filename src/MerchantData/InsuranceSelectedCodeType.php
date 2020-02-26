<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing InsuranceSelectedCodeType
 *
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * XSD Type: InsuranceSelectedCodeType
 */
class InsuranceSelectedCodeType
{

    /**
     * Constant for 'NotOffered' value.
     *
     * Shipping insurance was not offered.
     */
    public const VAL_NOT_OFFERED = 'NotOffered';

    /**
     * Constant for 'OfferedNotSelected' value.
     *
     * Shipping insurance was offered but not selected.
     */
    public const VAL_OFFERED_NOT_SELECTED = 'OfferedNotSelected';

    /**
     * Constant for 'OfferedSelected' value.
     *
     * Shipping insurance was offered and selected.
     */
    public const VAL_OFFERED_SELECTED = 'OfferedSelected';

    /**
     * Constant for 'Required' value.
     *
     * Shipping insurance was required.
     */
    public const VAL_REQUIRED = 'Required';

    /**
     * Constant for 'IncludedInShippingHandling' value.
     *
     * Shipping insurance was included in Shipping and Handling fee.
     */
    public const VAL_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';

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
