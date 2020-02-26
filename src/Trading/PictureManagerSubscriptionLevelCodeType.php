<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PictureManagerSubscriptionLevelCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: PictureManagerSubscriptionLevelCodeType
 */
class PictureManagerSubscriptionLevelCodeType
{

    /**
     * Constant for 'Free' value.
     *
     * This value is not used.
     */
    public const VAL_FREE = 'Free';

    /**
     * Constant for 'Level1' value.
     *
     * This value is not used.
     */
    public const VAL_LEVEL_1 = 'Level1';

    /**
     * Constant for 'Level2' value.
     *
     * This value is not used.
     */
    public const VAL_LEVEL_2 = 'Level2';

    /**
     * Constant for 'Level3' value.
     *
     * This value is not used.
     */
    public const VAL_LEVEL_3 = 'Level3';

    /**
     * Constant for 'Level4' value.
     *
     * This value is not used.
     */
    public const VAL_LEVEL_4 = 'Level4';

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
