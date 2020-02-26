<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing WarrantyOfferedCodeType
 *
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * XSD Type: WarrantyOfferedCodeType
 */
class WarrantyOfferedCodeType
{

    /**
     * Constant for 'WarrantyOffered' value.
     *
     * If this value is returned in the <b>ReturnPolicyDetails.WarrantyOffered</b>
     * container of the <b>GeteBayDetails</b> response, the seller may offer a warranty
     * to the buyer. This value that should be passed into the
     * <b>ReturnPolicy.WarrantyOfferedOption</b> field of an add/revise/relist API call
     * if the seller wishes to offer a warranty to the buyer.
     */
    public const VAL_WARRANTY_OFFERED = 'WarrantyOffered';

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
