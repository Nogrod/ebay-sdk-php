<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PictureFormatCodeType
 *
 * Indicates the format of the picture returned. Sometimes this is different than the format of the uploaded picture.
 * XSD Type: PictureFormatCodeType
 */
class PictureFormatCodeType
{

    /**
     * Constant for 'JPG' value.
     *
     * Indicates the picture was returned in JPG format. Uploaded pictures in JPG, TIF,
     * or BMP will be returned as JPG.
     */
    public const VAL_JPG = 'JPG';

    /**
     * Constant for 'GIF' value.
     *
     * Indicates the picture was returned in GIF format.
     */
    public const VAL_GIF = 'GIF';

    /**
     * Constant for 'PNG' value.
     *
     * Indicates the picture was returned in PNG format.
     */
    public const VAL_PNG = 'PNG';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal use <b>only</b>.
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
