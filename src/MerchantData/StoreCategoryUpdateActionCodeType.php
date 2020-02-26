<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing StoreCategoryUpdateActionCodeType
 *
 * Specifies the type of action to carry out with SetStoreCategories.
 * XSD Type: StoreCategoryUpdateActionCodeType
 */
class StoreCategoryUpdateActionCodeType
{

    /**
     * Constant for 'Add' value.
     *
     * (in) Add the listed categories to the store.
     */
    public const VAL_ADD = 'Add';

    /**
     * Constant for 'Delete' value.
     *
     * (in) Delete the listed categories from the store.
     */
    public const VAL_DELETE = 'Delete';

    /**
     * Constant for 'Move' value.
     *
     * (in) Move the listed categories from one place in the store category
     *  structure to another.
     */
    public const VAL_MOVE = 'Move';

    /**
     * Constant for 'Rename' value.
     *
     * (in) Rename the listed store categories to the names provided.
     */
    public const VAL_RENAME = 'Rename';

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
