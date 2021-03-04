<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing GallerySizeEnumType
 *
 * Values that can be used to describe relative sizes of item thumbnail images.
 * XSD Type: GallerySizeEnum
 */
class GallerySizeEnumType
{
    /**
     * Constant for 'Small' value.
     *
     * Small sized thumbnail image. Small images are up to 80 pixels on the longest
     * side.
     */
    public const VAL_SMALL = 'Small';

    /**
     * Constant for 'Medium' value.
     *
     * Medium sized thumbnail image Medium images are up to 96 pixels on the longest
     * side.
     */
    public const VAL_MEDIUM = 'Medium';

    /**
     * Constant for 'Large' value.
     *
     * Large sized thumbnail image. Large images are up to 140 pixels on the longest
     * side.
     */
    public const VAL_LARGE = 'Large';

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
