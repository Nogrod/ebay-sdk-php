<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemSpecificSourceCodeType
 *
 * This enumerated type is used by <b>GetItem</b>, and indicates the source for an Item Specific.
 * XSD Type: ItemSpecificSourceCodeType
 */
class ItemSpecificSourceCodeType
{

    /**
     * Constant for 'ItemSpecific' value.
     *
     * This enumeration value indicates that the corresponding Item Specific was
     * specified by the seller in Add/Revise/Relist call or flow. In an
     * Add/Revise/Relist API call, Item Specifics for a listing are specified through
     * the <b>ItemSpecifics.NameValueList</b> or
     * <b>VariationSpecifics.NameValueList</b> (for a variation in a multiple-variation
     * listing) containers.
     */
    public const VAL_ITEM_SPECIFIC = 'ItemSpecific';

    /**
     * Constant for 'Attribute' value.
     *
     * This value is no longer applicable and should not be returned.
     */
    public const VAL_ATTRIBUTE = 'Attribute';

    /**
     * Constant for 'Product' value.
     *
     * This enumeration value indicates that the corresponding Item Specific was
     * derived from a product in the eBay Catalog, and was automatically picked up by
     * the listing when the seller created, revised, or relisted an item referencing
     * and matching an eBay catalog product through the use of an ePID or GTIN value in
     * the <b>ProductListingDetails</b> container.
     */
    public const VAL_PRODUCT = 'Product';

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
