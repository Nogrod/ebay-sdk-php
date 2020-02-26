<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing NotificationEventPropertyNameCodeType
 *
 * Defines all property names that can be used.
 * XSD Type: NotificationEventPropertyNameCodeType
 */
class NotificationEventPropertyNameCodeType
{

    /**
     * Constant for 'TimeLeft' value.
     *
     * Property name for WatchedItemEndingSoon events, enabling a user to specify a
     * time in minutes
     *  before the end of the listing. Acceptable values: 5, 10, 15, 30, 60, 75, and
     * 180. For example,
     *  to receive a WatchedItemEndingSoon notification 30 minutes before the item
     * listing ends,
     *  specify 30.
     */
    public const VAL_TIME_LEFT = 'TimeLeft';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
