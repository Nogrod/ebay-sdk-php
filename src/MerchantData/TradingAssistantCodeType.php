<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TradingAssistantCodeType
 *
 * These codes indicate the Trading Assistant status of a an eBay
 *  user account.
 * XSD Type: TradingAssistantCodeType
 */
class TradingAssistantCodeType
{
    /**
     * Constant for 'NotATradingAssistant' value.
     *
     * (out) Not a Trading Assistant
     */
    public const VAL_NOT_ATRADING_ASSISTANT = 'NotATradingAssistant';

    /**
     * Constant for 'InactiveTradingAssistant' value.
     *
     * (out) Inactive Trading Assistant
     */
    public const VAL_INACTIVE_TRADING_ASSISTANT = 'InactiveTradingAssistant';

    /**
     * Constant for 'BlockedTradingAssistant' value.
     *
     * (out) Blocked Trading Assistant
     */
    public const VAL_BLOCKED_TRADING_ASSISTANT = 'BlockedTradingAssistant';

    /**
     * Constant for 'ActiveTradingAssistant' value.
     *
     * (out) Active Trading Assistant
     */
    public const VAL_ACTIVE_TRADING_ASSISTANT = 'ActiveTradingAssistant';

    /**
     * Constant for 'ActiveTradingPost' value.
     *
     * (out) Active Trading Post
     */
    public const VAL_ACTIVE_TRADING_POST = 'ActiveTradingPost';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use
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
