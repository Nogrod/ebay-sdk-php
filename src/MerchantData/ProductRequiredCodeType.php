<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ProductRequiredCodeType
 *
 * This enumerated type contains the values that indicate whether or not a product brand within an eBay category requires association with an eBay catalog product.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b>
 *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories (and brands within those categories), the <b>ValidationRules.ProductRequired</b> field will not get returned for any brands within any eBay category. Due to this fact, the <b>ProductRequiredCodeType</b> is currently not applicable.
 *  </span>
 * XSD Type: ProductRequiredCodeType
 */
class ProductRequiredCodeType
{
    /**
     * Constant for 'Disabled' value.
     *
     * If this enumeration value is returned for a product brand within a category, the
     * eBay seller is not expected to use an eBay catalog product when creating or
     * revising their listing in this category for this product brand.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Enabled' value.
     *
     * If this enumeration value is returned for a product brand within a category, the
     * eBay seller should use an eBay catalog product when creating or revising their
     * listing in this category for this product brand. Using an eBay catalog product
     * for the specific category/brand to create/revise the listing is not a hard
     * mandate, but it is necessary if the seller would like the listing to appear in
     * product-based listing search results.
     */
    public const VAL_ENABLED = 'Enabled';

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
