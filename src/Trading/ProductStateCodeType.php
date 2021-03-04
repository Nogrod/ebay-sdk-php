<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProductStateCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: ProductStateCodeType
 */
class ProductStateCodeType
{
    /**
     * Constant for 'Update' value.
     *
     * This value is not used.
     */
    public const VAL_UPDATE = 'Update';

    /**
     * Constant for 'UpdateMajor' value.
     *
     * This value is not used.
     */
    public const VAL_UPDATE_MAJOR = 'UpdateMajor';

    /**
     * Constant for 'UpdateNoDetails' value.
     *
     * This value is not used.
     */
    public const VAL_UPDATE_NO_DETAILS = 'UpdateNoDetails';

    /**
     * Constant for 'Merge' value.
     *
     * This value is not used.
     */
    public const VAL_MERGE = 'Merge';

    /**
     * Constant for 'Delete' value.
     *
     * This value is not used.
     */
    public const VAL_DELETE = 'Delete';

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
