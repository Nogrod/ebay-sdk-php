<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing WarningLevelCodeType
 *
 * This enumerated type contains the list of values that can be passed in through the <b>WarningLevel</b> field of a call request.
 * XSD Type: WarningLevelCodeType
 */
class WarningLevelCodeType
{
    /**
     * Constant for 'Low' value.
     *
     * The <b>WarningLevel</b> value is set to <code>Low</code> if the user does not
     * wish to receive warnings when the application passes
     *  unrecognized or deprecated elements in an API call request.
     *  This is the default value if <b>WarningLevel</b> is not specified in the call
     * request.
     */
    public const VAL_LOW = 'Low';

    /**
     * Constant for 'High' value.
     *
     * The <b>WarningLevel</b> value is set to <code>High</code> if the user wishes to
     * receive warnings when the application passes unrecognized or deprecated elements
     * in an API call request. Setting the <b>WarningLevel</b> value to
     * <code>High</code> is not recommended in a production environment. Instead, it
     * should only be used during the development/debugging stage.
     */
    public const VAL_HIGH = 'High';

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
