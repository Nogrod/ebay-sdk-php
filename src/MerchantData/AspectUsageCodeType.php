<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AspectUsageCodeType
 *
 * This enumerated type is used by the <b>AspectUsage</b> field that is returned in <b>GetCategorySpecifics</b> to indicate if an Item Specific is defined/derived from an eBay catalog product, or if the Item Specific is typically unique to a particular instance of a product in that category.
 * XSD Type: AspectUsageCodeType
 */
class AspectUsageCodeType
{

    /**
     * Constant for 'Product' value.
     *
     * This enumeration value indicates that the Item Specific in the corresponding
     * <b>NameRecommendation.Name</b> field is defined/derived from an eBay catalog
     * product. 'Product' Item Specifics are also referred to as Product Aspects in Web
     * flows and other APIs. Generally, catalog product-based Item Specifics should not
     * be modified if the seller created/revise/relisted the item based on an eBay
     * catalog product.
     */
    public const VAL_PRODUCT = 'Product';

    /**
     * Constant for 'Instance' value.
     *
     * This enumeration value indicates that the Item Specific in the corresponding
     * <b>NameRecommendation.Name</b> field is an 'instance aspect', which is an Item
     * Specific whose value will vary based on a particular instance of the product.
     * When creating a listing, the seller should pass in the name-value pair for this
     * Item Specific through the <b>Item.ItemSpecifics.NameValueList</b> container of
     * an <b>AddItem</b> call.
     */
    public const VAL_INSTANCE = 'Instance';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
