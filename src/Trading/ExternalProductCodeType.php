<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ExternalProductCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: ExternalProductCodeType
 */
class ExternalProductCodeType
{

    /**
     * Constant for 'ISBN' value.
     *
     * This value is not used.
     */
    public const VAL_ISBN = 'ISBN';

    /**
     * Constant for 'UPC' value.
     *
     * This value is not used.
     */
    public const VAL_UPC = 'UPC';

    /**
     * Constant for 'ProductID' value.
     *
     * This value is not used.
     */
    public const VAL_PRODUCT_ID = 'ProductID';

    /**
     * Constant for 'EAN' value.
     *
     * This value is not used.
     */
    public const VAL_EAN = 'EAN';

    /**
     * Constant for 'Keywords' value.
     *
     * This value is not used.
     */
    public const VAL_KEYWORDS = 'Keywords';

    /**
     * Constant for 'MPN' value.
     *
     * This value is not used.
     */
    public const VAL_MPN = 'MPN';

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
