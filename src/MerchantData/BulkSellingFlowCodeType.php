<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BulkSellingFlowCodeType
 *
 * Specifies the SIF item flows.
 * XSD Type: BulkSellingFlowCodeType
 */
class BulkSellingFlowCodeType
{

    /**
     * Constant for 'BulkSIFToCore' value.
     *
     * Specifies the SIF to core flow for Bulk Items
     */
    public const VAL_BULK_SIFTO_CORE = 'BulkSIFToCore';

    /**
     * Constant for 'BulkRelistAsSIF' value.
     *
     * Specifies the Relist flow for Single Items
     */
    public const VAL_BULK_RELIST_AS_SIF = 'BulkRelistAsSIF';

    /**
     * Constant for 'BulkEndItems' value.
     *
     * Specifies the end items flow.
     */
    public const VAL_BULK_END_ITEMS = 'BulkEndItems';

    /**
     * Constant for 'BulkEditSIF' value.
     *
     * Specifies the Bulk Edit SIF flow.
     */
    public const VAL_BULK_EDIT_SIF = 'BulkEditSIF';

    /**
     * Constant for 'BulkRelist' value.
     *
     * Specifies the Bulk Relist Flow..
     */
    public const VAL_BULK_RELIST = 'BulkRelist';

    /**
     * Constant for 'BulkEdit' value.
     *
     * Specifies the Bulk Edit Flow..
     */
    public const VAL_BULK_EDIT = 'BulkEdit';

    /**
     * Constant for 'EditTemplate' value.
     *
     * Specifies the Edit Template Flow..
     */
    public const VAL_EDIT_TEMPLATE = 'EditTemplate';

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
