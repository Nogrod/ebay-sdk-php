<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreItemListLayoutCodeType
 *
 * Set of available layouts for items listed in an eBay Store.
 * XSD Type: StoreItemListLayoutCodeType
 */
class StoreItemListLayoutCodeType
{

    /**
     * Constant for 'ListView' value.
     *
     * Displays item list as a single column, with smaller item pictures.
     */
    public const VAL_LIST_VIEW = 'ListView';

    /**
     * Constant for 'GalleryView' value.
     *
     * Displays item list in two columns, with larger item pictures.
     */
    public const VAL_GALLERY_VIEW = 'GalleryView';

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
