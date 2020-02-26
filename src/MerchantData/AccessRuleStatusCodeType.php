<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing AccessRuleStatusCodeType
 *
 * This enumerated type contains values that describe an application's current status
 *  with respect to an API access rule.
 * XSD Type: AccessRuleStatusCodeType
 */
class AccessRuleStatusCodeType
{

    /**
     * Constant for 'RuleOff' value.
     *
     * This value indicates that the rule is turned off, and no rule validation
     *  was performed.
     */
    public const VAL_RULE_OFF = 'RuleOff';

    /**
     * Constant for 'RuleOn' value.
     *
     * This value indicates that the rule is turned on, and rule validation was
     *  performed.
     */
    public const VAL_RULE_ON = 'RuleOn';

    /**
     * Constant for 'ApplicationBlocked' value.
     *
     * This value indicates that the application is blocked from making
     *  requests to the call named in this rule.
     */
    public const VAL_APPLICATION_BLOCKED = 'ApplicationBlocked';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
