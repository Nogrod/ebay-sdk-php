<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingCostPaidByOptionsCodeType
 *
 * This enumerated type contains the values that specify the party (seller/buyer) who will be responsible for paying the return shipping cost if an item is returned. One of these values is set by the seller when establishing/setting a return policy for an item.
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what return shipping 'payee' values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsShipmentPayeeValues</code> and/or <code>InternationalReturnsShipmentPayeeValues</code> as <b>FeatureID</b> values to see the return shipping 'payee' values available for domestic and international returns, respectively.
 *  </span>
 * XSD Type: ShippingCostPaidByOptionsCodeType
 */
class ShippingCostPaidByOptionsCodeType
{

    /**
     * Constant for 'Buyer' value.
     *
     * This value indicates that the buyer is responsible for paying the return
     * shipping cost. Note that the buyer will not be responsible for return shipping
     * cost if the the buyer's reason for the return is related to the received item
     * not being as described in the listing, or if the item has arrived damaged or
     * with missing parts.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'Seller' value.
     *
     * This value indicates that the seller is responsible for paying the return
     * shipping cost.
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'EUSeller_ReturnRights' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_EUSELLER__RETURN_RIGHTS = 'EUSeller_ReturnRights';

    /**
     * Constant for 'EUSeller_CancelRights' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_EUSELLER__CANCEL_RIGHTS = 'EUSeller_CancelRights';

    /**
     * Constant for 'EUBuyer_CancelRightsUnder40' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_EUBUYER__CANCEL_RIGHTS_UNDER_40 = 'EUBuyer_CancelRightsUnder40';

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
