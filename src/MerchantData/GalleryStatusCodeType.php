<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing GalleryStatusCodeType
 *
 * Enumeration type that returns the status of the gallery image generation. That status returns either a value of 'Success' or a value that indicates why the gallery image has not been generated.
 * XSD Type: GalleryStatusCodeType
 */
class GalleryStatusCodeType
{

    /**
     * Constant for 'Success' value.
     *
     * The Gallery image was successfully generated.
     */
    public const VAL_SUCCESS = 'Success';

    /**
     * Constant for 'Pending' value.
     *
     * The Gallery image has not yet been generated.
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'InvalidUrl' value.
     *
     * The URL for the image file is not valid.
     */
    public const VAL_INVALID_URL = 'InvalidUrl';

    /**
     * Constant for 'InvalidProtocol' value.
     *
     * The URL does not start with <code>http:// </code> or <code>https:// </code>.
     */
    public const VAL_INVALID_PROTOCOL = 'InvalidProtocol';

    /**
     * Constant for 'InvalidFile' value.
     *
     * There is a problem with the image file.
     */
    public const VAL_INVALID_FILE = 'InvalidFile';

    /**
     * Constant for 'ServerDown' value.
     *
     * The server containing the image file was unavailable.
     */
    public const VAL_SERVER_DOWN = 'ServerDown';

    /**
     * Constant for 'ImageNonExistent' value.
     *
     * The image file could not be found.
     */
    public const VAL_IMAGE_NON_EXISTENT = 'ImageNonExistent';

    /**
     * Constant for 'ImageReadTimeOut' value.
     *
     * The image file failed to transfer.
     */
    public const VAL_IMAGE_READ_TIME_OUT = 'ImageReadTimeOut';

    /**
     * Constant for 'InvalidFileFormat' value.
     *
     * The image file is not in JPG, BMP, GIF, TIF, or PNG format.
     */
    public const VAL_INVALID_FILE_FORMAT = 'InvalidFileFormat';

    /**
     * Constant for 'ImageProcessingError' value.
     *
     * We were not able to process the image file.
     */
    public const VAL_IMAGE_PROCESSING_ERROR = 'ImageProcessingError';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal <b>only</b>.
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
