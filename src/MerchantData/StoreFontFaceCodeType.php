<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing StoreFontFaceCodeType
 *
 * Font selection for Store configuration.
 * XSD Type: StoreFontFaceCodeType
 */
class StoreFontFaceCodeType
{

    /**
     * Constant for 'Arial' value.
     *
     * Arial font.
     */
    public const VAL_ARIAL = 'Arial';

    /**
     * Constant for 'Courier' value.
     *
     * Courier font.
     */
    public const VAL_COURIER = 'Courier';

    /**
     * Constant for 'Times' value.
     *
     * Times New Roman font.
     */
    public const VAL_TIMES = 'Times';

    /**
     * Constant for 'Verdana' value.
     *
     * Verdana font.
     */
    public const VAL_VERDANA = 'Verdana';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
