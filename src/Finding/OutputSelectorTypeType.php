<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing OutputSelectorTypeType
 *
 * Values that can be used to retrieve additional information for in the search
 *  results.
 * XSD Type: OutputSelectorType
 */
class OutputSelectorTypeType
{
    /**
     * Constant for 'SellerInfo' value.
     *
     * Include information about the seller in the response.
     */
    public const VAL_SELLER_INFO = 'SellerInfo';

    /**
     * Constant for 'StoreInfo' value.
     *
     * Include information about the seller's eBay store in the response.
     */
    public const VAL_STORE_INFO = 'StoreInfo';

    /**
     * Constant for 'CategoryHistogram' value.
     *
     * Include a CategoryHistogram container with information about categories
     *  that match your search.
     */
    public const VAL_CATEGORY_HISTOGRAM = 'CategoryHistogram';

    /**
     * Constant for 'AspectHistogram' value.
     *
     * Include an AspectHistogram container with information about aspects from
     *  the domain that is most relevant to your search.
     */
    public const VAL_ASPECT_HISTOGRAM = 'AspectHistogram';

    /**
     * Constant for 'ConditionHistogram' value.
     *
     * Include a ConditionHistogram container with the number of
     *  items found per condition (e.g., how many items are new).
     *  This value has no effect when Condition is specified as
     *  an item filter. Supported for all eBay sites except US eBay Motors, India (IN),
     * Malaysia (MY) and Philippines (PH).
     */
    public const VAL_CONDITION_HISTOGRAM = 'ConditionHistogram';

    /**
     * Constant for 'GalleryInfo' value.
     *
     * Include the GalleryInfoContainer, which contains URLs for three thumbnail
     *  images of the item in different sizes: large, medium, and small.
     */
    public const VAL_GALLERY_INFO = 'GalleryInfo';

    /**
     * Constant for 'PictureURLSuperSize' value.
     *
     * Include item's picture url with size 800x800
     */
    public const VAL_PICTURE_URLSUPER_SIZE = 'PictureURLSuperSize';

    /**
     * Constant for 'PictureURLLarge' value.
     *
     * URL for item's picture url with size 400x400
     */
    public const VAL_PICTURE_URLLARGE = 'PictureURLLarge';

    /**
     * Constant for 'UnitPriceInfo' value.
     *
     * Unit price type and quantity
     */
    public const VAL_UNIT_PRICE_INFO = 'UnitPriceInfo';

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
