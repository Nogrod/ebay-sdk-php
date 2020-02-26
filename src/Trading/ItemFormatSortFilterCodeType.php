<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemFormatSortFilterCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: ItemFormatSortFilterCodeType
 */
class ItemFormatSortFilterCodeType
{

    /**
     * Constant for 'ShowAnyItems' value.
     *
     * This value is not used.
     */
    public const VAL_SHOW_ANY_ITEMS = 'ShowAnyItems';

    /**
     * Constant for 'ShowItemsWithBINFirst' value.
     *
     * This value is not used.
     */
    public const VAL_SHOW_ITEMS_WITH_BINFIRST = 'ShowItemsWithBINFirst';

    /**
     * Constant for 'ShowOnlyItemsWithBIN' value.
     *
     * This value is not used.
     */
    public const VAL_SHOW_ONLY_ITEMS_WITH_BIN = 'ShowOnlyItemsWithBIN';

    /**
     * Constant for 'ShowOnlyStoreItems' value.
     *
     * This value is not used.
     */
    public const VAL_SHOW_ONLY_STORE_ITEMS = 'ShowOnlyStoreItems';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
