<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerInventoryPropertyTypeCodeType
 *
 * Indicates the filters for Selling Manager Inventory listings.
 * XSD Type: SellingManagerInventoryPropertyTypeCodeType
 */
class SellingManagerInventoryPropertyTypeCodeType
{

    /**
     * Constant for 'ProductsOutOfStock' value.
     *
     * Products which are out of stock.
     */
    public const VAL_PRODUCTS_OUT_OF_STOCK = 'ProductsOutOfStock';

    /**
     * Constant for 'Active' value.
     *
     * Products that are active.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'InActive' value.
     *
     * Products that are inactive.
     */
    public const VAL_IN_ACTIVE = 'InActive';

    /**
     * Constant for 'LowStock' value.
     *
     * Products low on inventory.
     */
    public const VAL_LOW_STOCK = 'LowStock';

    /**
     * Constant for 'WithListings' value.
     *
     * Products with listings.
     */
    public const VAL_WITH_LISTINGS = 'WithListings';

    /**
     * Constant for 'WithoutListings' value.
     *
     * Products without listings.
     */
    public const VAL_WITHOUT_LISTINGS = 'WithoutListings';

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
