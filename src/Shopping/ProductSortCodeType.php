<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ProductSortCodeType
 *
 * This enumerated type defines the sort values that can be used to control the order of eBay Catalog products that are returned with a <b>FindProducts</b> call.
 * XSD Type: ProductSortCodeType
 */
class ProductSortCodeType
{

    /**
     * Constant for 'Popularity' value.
     *
     * This enumeration value is input into the <b>ProductSort</b> field if the user
     * would like the eBay Catalog products to be sorted by product popularity (as
     * determined by eBay). This is also the default value, so if the
     * <b>ProductSort</b> field is omitted, eBay Catalog products will be sorted by
     * product popularity by default.
     */
    public const VAL_POPULARITY = 'Popularity';

    /**
     * Constant for 'Rating' value.
     *
     * This enumeration value is input into the <b>ProductSort</b> field if the user
     * would like the eBay Catalog products to be sorted by product rating.
     */
    public const VAL_RATING = 'Rating';

    /**
     * Constant for 'ReviewCount' value.
     *
     * This enumeration value is input into the <b>ProductSort</b> field if the user
     * would like the eBay Catalog products to be sorted according to the number of
     * reviews for that product on eBay.
     */
    public const VAL_REVIEW_COUNT = 'ReviewCount';

    /**
     * Constant for 'ItemCount' value.
     *
     * This enumeration value is input into the <b>ProductSort</b> field if the user
     * would like the eBay Catalog products to be sorted according to the number of of
     * active listings associated with each product.
     */
    public const VAL_ITEM_COUNT = 'ItemCount';

    /**
     * Constant for 'Title' value.
     *
     * This enumeration value is input into the <b>ProductSort</b> field if the user
     * would like the eBay Catalog products to be sorted according to the product
     * title.
     */
    public const VAL_TITLE = 'Title';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for values that are not available in the version of the schema
     *  you are using. This means if in a newer version of the API eBay adds a new
     * value to <b>ProductSortCodeList</b> type and the request was using a
     * <i>lower</i> version, 'CustomCode' is returned instead of the new value.
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
