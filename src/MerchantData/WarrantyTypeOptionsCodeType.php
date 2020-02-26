<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing WarrantyTypeOptionsCodeType
 *
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * XSD Type: WarrantyTypeOptionsCodeType
 */
class WarrantyTypeOptionsCodeType
{

    /**
     * Constant for 'ReplacementWarranty' value.
     *
     * If this value is returned in the <b>ReturnPolicyDetails.WarrantyType</b>
     * container of the <b>GeteBayDetails</b> response, the seller may offer a
     * replacement warranty to the buyer. The seller can offer a replacement warranty
     * through the <b>ReturnPolicy.WarrantyTypeOption</b> field in an add/revise/relist
     * API call.
     */
    public const VAL_REPLACEMENT_WARRANTY = 'ReplacementWarranty';

    /**
     * Constant for 'DealerWarranty' value.
     *
     * If this value is returned in the <b>ReturnPolicyDetails.WarrantyType</b>
     * container of the <b>GeteBayDetails</b> response, the seller may offer a dealer
     * warranty to the buyer. The seller can offer a dealer warranty through the
     * <b>ReturnPolicy.WarrantyTypeOption</b> field in an add/revise/relist API call.
     */
    public const VAL_DEALER_WARRANTY = 'DealerWarranty';

    /**
     * Constant for 'ManufacturerWarranty' value.
     *
     * If this value is returned in the <b>ReturnPolicyDetails.WarrantyType</b>
     * container of the <b>GeteBayDetails</b> response, the seller may offer a
     * manufacturer warranty to the buyer. The seller can offer a manufacturer warranty
     * through the <b>ReturnPolicy.WarrantyTypeOption</b> field in an add/revise/relist
     * API call.
     */
    public const VAL_MANUFACTURER_WARRANTY = 'ManufacturerWarranty';

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
