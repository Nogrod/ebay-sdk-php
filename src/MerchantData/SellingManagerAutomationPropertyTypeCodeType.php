<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerAutomationPropertyTypeCodeType
 *
 * Indicates the filters for Selling Manager automation listings.
 * XSD Type: SellingManagerAutomationPropertyTypeCodeType
 */
class SellingManagerAutomationPropertyTypeCodeType
{
    /**
     * Constant for 'ItemListFailedAutomationRules' value.
     *
     * Item failed to be listed using automation rules.
     */
    public const VAL_ITEM_LIST_FAILED_AUTOMATION_RULES = 'ItemListFailedAutomationRules';

    /**
     * Constant for 'ItemRelistFailedAutomationRules' value.
     *
     * Relist item automation rule failed.
     */
    public const VAL_ITEM_RELIST_FAILED_AUTOMATION_RULES = 'ItemRelistFailedAutomationRules';

    /**
     * Constant for 'ItemListFailedSecondChanceOfferAutoRules' value.
     *
     * Item failed to be listed with Second Chance offer automation rule.
     */
    public const VAL_ITEM_LIST_FAILED_SECOND_CHANCE_OFFER_AUTO_RULES = 'ItemListFailedSecondChanceOfferAutoRules';

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
