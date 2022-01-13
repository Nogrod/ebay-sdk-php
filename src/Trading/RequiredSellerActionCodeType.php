<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RequiredSellerActionCodeType
 *
 * Enumerated type that defines the list of possible actions that a seller can
 *  take to expedite the release of funds for an order into their account.
 * XSD Type: RequiredSellerActionCodeType
 */
class RequiredSellerActionCodeType
{
    /**
     * Constant for 'ResolveeBPCase' value.
     *
     * This value indicates that there is an open eBay Money Back Guarantee case
     *  involving the seller and the order. The seller must address and get
     *  the case resolved before the funds can be scheduled for release to the
     *  seller's account.
     */
    public const VAL_RESOLVEE_BPCASE = 'ResolveeBPCase';

    /**
     * Constant for 'MarkAsShipped' value.
     *
     * This value indicates that the seller must mark the order line item as shipped to
     * expedite
     *  the release of funds into their account. The seller can use the
     * <b>CompleteSale</b>
     *  call or My eBay to mark an item as shipped.
     */
    public const VAL_MARK_AS_SHIPPED = 'MarkAsShipped';

    /**
     * Constant for 'ContacteBayCS' value.
     *
     * This value indicates that the seller should contact eBay Customer Support to
     * discover
     *  the next required action to expedite the release of funds into their account.
     */
    public const VAL_CONTACTE_BAY_CS = 'ContacteBayCS';

    /**
     * Constant for 'ResolvePPPIcase' value.
     *
     * This value should no longer get returned as eBay buyers no longer have the
     * option of creating Item not Received (INR) or Significantly not as Described
     * (SNAD) disputes through PayPal's system.
     */
    public const VAL_RESOLVE_PPPICASE = 'ResolvePPPIcase';

    /**
     * Constant for 'SetupPayoutMethod' value.
     *
     * This value is no longer used.
     */
    public const VAL_SETUP_PAYOUT_METHOD = 'SetupPayoutMethod';

    /**
     * Constant for 'UpdatePayoutMethod' value.
     *
     * This value is no longer used.
     */
    public const VAL_UPDATE_PAYOUT_METHOD = 'UpdatePayoutMethod';

    /**
     * Constant for 'None' value.
     *
     * This value is no longer used.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'UploadTrackingInfo' value.
     *
     * This value indicates that the seller must provide shipment tracking information
     * for
     *  the order line item to expedite the release of funds into their account. The
     * seller can
     *  use the <b>CompleteSale</b> call to provide tracking information for an
     *  order line item.
     */
    public const VAL_UPLOAD_TRACKING_INFO = 'UploadTrackingInfo';

    /**
     * Constant for 'ResolveBuyerMessageInr' value.
     *
     * This value indicates that the buyer has not received the order, and the buyer
     * has contacted
     *  the seller through the eBay system in an effort to resolve the issue with the
     * seller. The
     *  seller must make it right with the buyer in order to expedite the release of
     * funds into
     *  their account.
     */
    public const VAL_RESOLVE_BUYER_MESSAGE_INR = 'ResolveBuyerMessageInr';

    /**
     * Constant for 'ResolveBuyerMessageSnad' value.
     *
     * This value indicates that the buyer has received the order, but the item is not
     * as
     *  described in the listing; hence, the buyer has contacted the seller through the
     * eBay
     *  system in an effort to resolve the issue with the seller. The seller must make
     * it right
     *  with the buyer in order to expedite the release of funds into their account.
     */
    public const VAL_RESOLVE_BUYER_MESSAGE_SNAD = 'ResolveBuyerMessageSnad';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'ResolveReturn' value.
     *
     * This value indicates that the buyer is returning the item through eBay's return
     * process. Upon receiving the returned item from the buyer, the seller must issue
     * a refund to the buyer within five business days, and shortly after this happens,
     * eBay will credit the seller's account with the Final Value Fee that was
     * originally assessed on the sale of the item.
     */
    public const VAL_RESOLVE_RETURN = 'ResolveReturn';

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
