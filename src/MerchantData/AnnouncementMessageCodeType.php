<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AnnouncementMessageCodeType
 *
 * Part of the mechanism for eBay to control which announcement messages are
 *  to be made available to the user.
 * XSD Type: AnnouncementMessageCodeType
 */
class AnnouncementMessageCodeType
{

    /**
     * Constant for 'None' value.
     *
     * No message is to be made available.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'Deprecation' value.
     *
     * A deprecation message is to be made available,
     *  but only if today's date is between
     * <b>AnnouncementMessageType.AnnouncementStartTime</b>
     *  and <b>AnnouncementMessageType.EventTime</b>.
     */
    public const VAL_DEPRECATION = 'Deprecation';

    /**
     * Constant for 'Mapping' value.
     *
     * A mapping message is to be made available,
     *  but only if today's date is after <b>AnnouncementMessageType.EventTime</b>.
     */
    public const VAL_MAPPING = 'Mapping';

    /**
     * Constant for 'DeprecationAndMapping' value.
     *
     * Both "Deprecation" and "Mapping" enumerations are to apply.
     */
    public const VAL_DEPRECATION_AND_MAPPING = 'DeprecationAndMapping';

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
