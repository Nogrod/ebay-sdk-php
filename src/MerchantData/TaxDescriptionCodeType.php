<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TaxDescriptionCodeType
 *
 * Enumerated type that lists the types of taxes that may be charged to the buyer for each order line item purchased.
 * XSD Type: TaxDescriptionCodeType
 */
class TaxDescriptionCodeType
{

    /**
     * Constant for 'SalesTax' value.
     *
     * This enumeration value indicates that standard sales tax was charged to the
     * buyer against the order line item.
     */
    public const VAL_SALES_TAX = 'SalesTax';

    /**
     * Constant for 'ElectronicWasteRecyclingFee' value.
     *
     * This enumeration value indicates that an electronic waste recycling fee was
     * charged to the buyer against the order line item.
     */
    public const VAL_ELECTRONIC_WASTE_RECYCLING_FEE = 'ElectronicWasteRecyclingFee';

    /**
     * Constant for 'TireRecyclingFee' value.
     *
     * This enumeration value indicates that a tire recycling fee was charged to the
     * buyer against the order line item.
     */
    public const VAL_TIRE_RECYCLING_FEE = 'TireRecyclingFee';

    /**
     * Constant for 'GST' value.
     *
     * This enumeration value indicates that a Goods and Services import tax was
     * charged to the buyer against the order line item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> At this time, this tax type is only
     * applicable to the Australia site.
     *  </span>
     */
    public const VAL_GST = 'GST';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
