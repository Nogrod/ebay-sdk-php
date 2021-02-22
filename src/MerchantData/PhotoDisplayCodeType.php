<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PhotoDisplayCodeType
 *
 * Specifies the type of image display used in a listing. Some options are
 *  only available if images are hosted through eBay Picture Services (EPS).
 * XSD Type: PhotoDisplayCodeType
 */
class PhotoDisplayCodeType
{

    /**
     * Constant for 'None' value.
     *
     * No special image display options. Valid for US Motors listings.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'SlideShow' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_SLIDE_SHOW = 'SlideShow';

    /**
     * Constant for 'SuperSize' value.
     *
     * Increase the size of each image and allow buyers to enlarge images
     *  further. Only available for site-hosted (EPS) images. Not valid for US Motors
     *  listings. For all sites that do not automatically upgrade SuperSize to
     *  PicturePack (see note below), specifying no SuperSize-qualified images is now
     *  accepted in the request.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  SuperSize is automatically upgraded to PicturePack for the same SuperSize
     *  fee on the US Motors Parts & Accessories Category and US (site ID 0)
     *  and CA (site ID 2) and CAFR (site ID 210). This upgrade applies
     *  only to EPS images.
     *  </span>
     */
    public const VAL_SUPER_SIZE = 'SuperSize';

    /**
     * Constant for 'PicturePack' value.
     *
     * Increase the number of images displayed. This is only available for
     *  images hosted with eBay. See GetCategoryFeatures and the
     *  online Help (on the eBay site) for additional information.
     *  <br><br>
     *  Picture Pack applies to all sites
     *  (including US Motors), except for NL (site ID 146). You can specify a minimum
     * of
     *  one EPS picture, or no SuperSize-qualified EPS pictures in the request. For
     *  the NL site, PicturePack is replaced with SuperSize.
     */
    public const VAL_PICTURE_PACK = 'PicturePack';

    /**
     * Constant for 'SiteHostedPictureShow' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_SITE_HOSTED_PICTURE_SHOW = 'SiteHostedPictureShow';

    /**
     * Constant for 'VendorHostedPictureShow' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_VENDOR_HOSTED_PICTURE_SHOW = 'VendorHostedPictureShow';

    /**
     * Constant for 'SuperSizePictureShow' value.
     *
     * This is valid for US Motors listing only. For other listings, use SuperSize.
     */
    public const VAL_SUPER_SIZE_PICTURE_SHOW = 'SuperSizePictureShow';

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
