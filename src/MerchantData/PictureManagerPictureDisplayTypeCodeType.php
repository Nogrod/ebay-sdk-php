<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PictureManagerPictureDisplayTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: PictureManagerPictureDisplayTypeCodeType
 */
class PictureManagerPictureDisplayTypeCodeType
{

    /**
     * Constant for 'Thumbnail' value.
     *
     * This value is not used.
     */
    public const VAL_THUMBNAIL = 'Thumbnail';

    /**
     * Constant for 'BIBO' value.
     *
     * This value is not used.
     */
    public const VAL_BIBO = 'BIBO';

    /**
     * Constant for 'Standard' value.
     *
     * This value is not used.
     */
    public const VAL_STANDARD = 'Standard';

    /**
     * Constant for 'Large' value.
     *
     * This value is not used.
     */
    public const VAL_LARGE = 'Large';

    /**
     * Constant for 'Supersize' value.
     *
     * This value is not used.
     */
    public const VAL_SUPERSIZE = 'Supersize';

    /**
     * Constant for 'Original' value.
     *
     * This value is not used.
     */
    public const VAL_ORIGINAL = 'Original';

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
