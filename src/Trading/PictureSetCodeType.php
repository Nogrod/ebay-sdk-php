<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PictureSetCodeType
 *
 * Specifies whether to generate the 'standard' set of images for each picture or to also generate a super-sized image.
 *  <br/><br/>
 *  <b>Note:</b> This type is used only for images that will be used in a listing.
 * XSD Type: PictureSetCodeType
 */
class PictureSetCodeType
{

    /**
     * Constant for 'Standard' value.
     *
     * Indicates to generate the "Standard" set of images, which is a set of 7 images
     * of various sizes, for each <b>ExternalPictureURL</b> submitted in the request.
     *  This is the default. <b>Note:</b> This field is used only for images that will
     * be used in a listing.
     */
    public const VAL_STANDARD = 'Standard';

    /**
     * Constant for 'Supersize' value.
     *
     * Indicates to generate the "Standard" set <i>plus</i> a super-sized image for
     * each <b>ExternalPictureURL</b> submitted in the request.
     *  In order to include the super-sized image in the Add Item calls, you must also
     * specify <b>Item.PictureDetails.PhotoDisplay.Supersize</b> or
     * <b>Item.PictureDetails.PhotoDisplay.PicturePack</b>.
     *  <b>Note:</b> This field is used only for images that will be used in a listing.
     */
    public const VAL_SUPERSIZE = 'Supersize';

    /**
     * Constant for 'Large' value.
     *
     * This field is no longer returned.
     */
    public const VAL_LARGE = 'Large';

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
