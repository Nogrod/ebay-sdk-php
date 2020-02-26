<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PictureUploadPolicyCodeType
 *
 * Values to be used in choosing that an uploaded picture is added to the available pictures on the eBay site.
 * XSD Type: PictureUploadPolicyCodeType
 */
class PictureUploadPolicyCodeType
{

    /**
     * Constant for 'Add' value.
     *
     * Specifies that an uploaded picture is added to the pictures available to a
     *  seller on the eBay site.
     */
    public const VAL_ADD = 'Add';

    /**
     * Constant for 'ClearAndAdd' value.
     *
     * Specifies, first, that all pictures available to a seller on the eBay site are
     *  removed, and then second, that the currently uploaded picture is made
     *  available to the seller.
     */
    public const VAL_CLEAR_AND_ADD = 'ClearAndAdd';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal use ONLY.
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
