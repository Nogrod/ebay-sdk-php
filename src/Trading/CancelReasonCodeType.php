<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CancelReasonCodeType
 *
 * Enumerated type that defines all possible reasons why an eBay order can be cancelled.
 * XSD Type: CancelReasonCodeType
 */
class CancelReasonCodeType
{
    /**
     * Constant for 'OutOfStock' value.
     *
     * This value indicates that the eBay order was cancelled by the seller due to the
     * fact that one or more order line items were out-of-stock. This reason given by
     * the seller will result in a seller defect.
     */
    public const VAL_OUT_OF_STOCK = 'OutOfStock';

    /**
     * Constant for 'BuyerNoShow' value.
     *
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to
     * the fact that the buyer was not at the expected delivery location to receive the
     * order. This value is only applicable to eBay Scheduled Delivery orders, a
     * service that is currently only available in the London area (UK).
     */
    public const VAL_BUYER_NO_SHOW = 'BuyerNoShow';

    /**
     * Constant for 'BuyerRefused' value.
     *
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to
     * the fact that the buyer refused to accept the order. This value is only
     * applicable to eBay Scheduled Delivery orders, a service that is currently only
     * available in the London area (UK).
     */
    public const VAL_BUYER_REFUSED = 'BuyerRefused';

    /**
     * Constant for 'BuyerNotSchedule' value.
     *
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to
     * the fact that the buyer did not successfully schedule the delivery of the order.
     * This value is only applicable to eBay Scheduled Delivery orders, a service that
     * is currently only available in the London area (UK).
     */
    public const VAL_BUYER_NOT_SCHEDULE = 'BuyerNotSchedule';

    /**
     * Constant for 'BuyerCancelOrder' value.
     *
     * This value indicates that the seller initiated the cancellation of the order but
     * at the request of the buyer. This is a cancel reason that the seller gives to
     * avoid a seller defect for the cancellation.
     */
    public const VAL_BUYER_CANCEL_ORDER = 'BuyerCancelOrder';

    /**
     * Constant for 'ValetDeliveryIssues' value.
     *
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to
     * the fact that the delivery person had an issue delivering the order to the
     * buyer. This value is only applicable to eBay Scheduled Delivery orders, a
     * service that is currently only available in the London area (UK).
     */
    public const VAL_VALET_DELIVERY_ISSUES = 'ValetDeliveryIssues';

    /**
     * Constant for 'ValetUnavailable' value.
     *
     * This value indicates that the eBay Scheduled Delivery order was cancelled due to
     * the fact that no delivery person was available to deliver the order to the
     * buyer. This value is only applicable to eBay Scheduled Delivery orders, a
     * service that is currently only available in the London area (UK).
     */
    public const VAL_VALET_UNAVAILABLE = 'ValetUnavailable';

    /**
     * Constant for 'OrderPlacedByMistake' value.
     *
     * This value indicates that the cancellation of the eBay order was initiated by
     * the buyer because the order was placed by mistake.
     */
    public const VAL_ORDER_PLACED_BY_MISTAKE = 'OrderPlacedByMistake';

    /**
     * Constant for 'PriceTooHigh' value.
     *
     * This value indicates that the cancellation of the eBay order was initiated by
     * the buyer because the buyer decided that the price for the item was too high.
     */
    public const VAL_PRICE_TOO_HIGH = 'PriceTooHigh';

    /**
     * Constant for 'FoundCheaperPrice' value.
     *
     * This value indicates that the cancellation of the eBay order was initiated by
     * the buyer because the buyer found the same item somewhere else at a cheaper
     * price.
     */
    public const VAL_FOUND_CHEAPER_PRICE = 'FoundCheaperPrice';

    /**
     * Constant for 'WontArriveInTime' value.
     *
     * This value indicates that the cancellation of the eBay order was initiated by
     * the buyer because the buyer realized that the order will not arrive soon enough.
     */
    public const VAL_WONT_ARRIVE_IN_TIME = 'WontArriveInTime';

    /**
     * Constant for 'BuyerCancelOrAddressIssue' value.
     *
     * This value indicates that the seller initiated the cancellation of the order but
     * at the request of the buyer, or if the buyer supplied a bad/incorrect address at
     * purchase time. This is a cancel reason that the seller can give to avoid a
     * seller defect for the cancellation.
     */
    public const VAL_BUYER_CANCEL_OR_ADDRESS_ISSUE = 'BuyerCancelOrAddressIssue';

    /**
     * Constant for 'OutOfStockOrCannotFulfill' value.
     *
     * This value indicates that the eBay order was cancelled by the seller due to the
     * fact that one or more order line items were out-of-stock, or due to another
     * reason why the seller was unable to fulfill the order. This reason given by the
     * seller will result in a seller defect.
     */
    public const VAL_OUT_OF_STOCK_OR_CANNOT_FULFILL = 'OutOfStockOrCannotFulfill';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
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
