<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PictureManagerActionCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: PictureManagerActionCodeType
 */
class PictureManagerActionCodeType
{

    /**
     * Constant for 'Add' value.
     *
     * This value is not used.
     */
    public const VAL_ADD = 'Add';

    /**
     * Constant for 'Delete' value.
     *
     * This value is not used.
     */
    public const VAL_DELETE = 'Delete';

    /**
     * Constant for 'Rename' value.
     *
     * This value is not used.
     */
    public const VAL_RENAME = 'Rename';

    /**
     * Constant for 'Move' value.
     *
     * This value is not used.
     */
    public const VAL_MOVE = 'Move';

    /**
     * Constant for 'Change' value.
     *
     * This value is not used.
     */
    public const VAL_CHANGE = 'Change';

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
