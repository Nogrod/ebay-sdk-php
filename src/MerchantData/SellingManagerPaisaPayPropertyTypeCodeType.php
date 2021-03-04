<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerPaisaPayPropertyTypeCodeType
 *
 * Container for the PaisaPay alert types.
 * XSD Type: SellingManagerPaisaPayPropertyTypeCodeType
 */
class SellingManagerPaisaPayPropertyTypeCodeType
{
    /**
     * Constant for 'PaisaPayAwaitingShipment' value.
     *
     * PaisaPay items awaiting shipment.
     */
    public const VAL_PAISA_PAY_AWAITING_SHIPMENT = 'PaisaPayAwaitingShipment';

    /**
     * Constant for 'PaisaPayTimeExtensionRequestDeclined' value.
     *
     * PaisaPay items for which time extension requests are rejected by the buyers.
     */
    public const VAL_PAISA_PAY_TIME_EXTENSION_REQUEST_DECLINED = 'PaisaPayTimeExtensionRequestDeclined';

    /**
     * Constant for 'PaisaPayPendingReceived' value.
     *
     * PaisaPay items for which the item receipt has not yet been confirmed by the
     * buyer or not
     *  yet been auto-confirmed by the system.
     */
    public const VAL_PAISA_PAY_PENDING_RECEIVED = 'PaisaPayPendingReceived';

    /**
     * Constant for 'PaisaPayRefundInitiated' value.
     *
     * PaisaPay items for which buyers have filed "Item not received".
     */
    public const VAL_PAISA_PAY_REFUND_INITIATED = 'PaisaPayRefundInitiated';

    /**
     * Constant for 'PaisaPayTimeExtensionRequested' value.
     *
     * PaisaPay items for which the seller has requested a time extension to enter the
     *  shipping information.
     */
    public const VAL_PAISA_PAY_TIME_EXTENSION_REQUESTED = 'PaisaPayTimeExtensionRequested';

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
