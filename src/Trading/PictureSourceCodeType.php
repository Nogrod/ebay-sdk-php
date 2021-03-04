<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PictureSourceCodeType
 *
 * Enumerated type used to specify where a listing's image(s) are hosted.
 * XSD Type: PictureSourceCodeType
 */
class PictureSourceCodeType
{
    /**
     * Constant for 'EPS' value.
     *
     * This value indicates that the image(s) specified in the <b>PictureURL</b>
     * field(s) are hosted by eBay Picture Services.
     */
    public const VAL_EPS = 'EPS';

    /**
     * Constant for 'PictureManager' value.
     *
     * This value is deprecated.
     */
    public const VAL_PICTURE_MANAGER = 'PictureManager';

    /**
     * Constant for 'Vendor' value.
     *
     * This value indicates that the image(s) specified in the <b>PictureURL</b>
     * field(s) are hosted by a third-party vendor. Note that if pictures are
     * externally-hosted, they must be hosted on a site that is using the 'https'
     * protocol.
     */
    public const VAL_VENDOR = 'Vendor';

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
