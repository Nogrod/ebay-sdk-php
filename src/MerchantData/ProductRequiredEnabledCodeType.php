<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ProductRequiredEnabledCodeType
 *
 * This enumerated type is used by the <b>ProductRequiredEnabled</b> field that can be returned under the <b>SiteDefaults</b> and/or <b>Category</b> containers of a <b>GetCategoryFeatures</b> response.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b>
 *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the <b>ProductRequiredEnabled</b> field no longer has any practical use since it will show as Disabled for <b>SiteDefaults</b> and all <b>Category</b> nodes. Due to this fact, the <b>ProductRequiredEnabledCodeType</b> is currently not applicable.
 *  </span>
 * XSD Type: ProductRequiredEnabledCodeType
 */
class ProductRequiredEnabledCodeType
{
    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that the category does not require product-based listings
     * (associated with an eBay catalog product).
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all
     * eBay categories, this value should get returned for <b>SiteDefaults</b> and all
     * <b>Category</b> nodes.
     *  </span>
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that the category requires listings within the category to
     * be associated with an eBay catalog product.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Due to the rollback of the Product-Based Shopping Experience mandate for all
     * eBay categories, this value should never get returned for <b>SiteDefaults</b> or
     * for any <b>Category</b> nodes.
     *  </span>
     */
    public const VAL_ENABLED = 'Enabled';

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
