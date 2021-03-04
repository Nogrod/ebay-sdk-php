<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerAlertTypeCodeType
 *
 * This enumerated type defines the types of alerts that may me returned in the <b>GetSellingManagerAlerts</b> response
 * XSD Type: SellingManagerAlertTypeCodeType
 */
class SellingManagerAlertTypeCodeType
{
    /**
     * Constant for 'Sold' value.
     *
     * This enumeration value indicates that the alert is related to a sales
     * transaction. See the corresponding <b>Alert.SoldAlert</b> value for more
     * information on the alert.
     */
    public const VAL_SOLD = 'Sold';

    /**
     * Constant for 'Inventory' value.
     *
     * This enumeration value indicates that the alert is related to the seller's
     * inventory. See the corresponding <b>Alert.InventoryAlert</b> value for more
     * information on the alert.
     */
    public const VAL_INVENTORY = 'Inventory';

    /**
     * Constant for 'Automation' value.
     *
     * This enumeration value indicates that the alert is related to an Selling Manager
     * automation alert. See the corresponding <b>Alert.AutomationAlert</b> value for
     * more information on the alert.
     */
    public const VAL_AUTOMATION = 'Automation';

    /**
     * Constant for 'PaisaPay' value.
     *
     * This enumeration value is no longer applicable, so should not get returned.
     */
    public const VAL_PAISA_PAY = 'PaisaPay';

    /**
     * Constant for 'General' value.
     *
     * This enumeration value indicates that the alert is related to either one of the
     * following: negative feedback received; a bad email template, or an unpaid item
     * dispute requires attention. See the corresponding <b>Alert.GeneralAlert</b>
     * value for more information on the alert.
     */
    public const VAL_GENERAL = 'General';

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
