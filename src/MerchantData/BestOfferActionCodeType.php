<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BestOfferActionCodeType
 *
 * Enumerated type that defines the possible values that can be passed in to the <b>Action</b> field in a <b>RespondToBestOffer</b> request.
 * XSD Type: BestOfferActionCodeType
 */
class BestOfferActionCodeType
{
    /**
     * Constant for 'Accept' value.
     *
     * This value should be passed in to the <b>Action</b> field to accept the Best
     * Offer identified in the <b>BestOfferID</b> field. Note that only one Best Offer
     * may be accepted in a single <b>RespondToBestOffer</b> call.
     */
    public const VAL_ACCEPT = 'Accept';

    /**
     * Constant for 'Decline' value.
     *
     * This value should be passed in to the <b>Action</b> field to decline one or more
     * Best Offers identified by one or more <b>BestOfferID</b> fields. Note that
     * multiple Best Offers may be declined in a single <b>RespondToBestOffer</b> call.
     */
    public const VAL_DECLINE = 'Decline';

    /**
     * Constant for 'Counter' value.
     *
     * This value should be passed in to the <b>Action</b> field to counter a buyer's
     * Best Offer or Counter Offer. Note that a seller may only counter one Best Offer
     * in a single <b>RespondToBestOffer</b> call. If a seller is using the
     * <b>RespondToBestOffer</b> call to counter a Best Offer, the counter offer price
     * must be specified in the <b>CounterOfferPrice</b> field, and the quantity of
     * items in the Best Offer must be specified in the <b>CounterOfferQuantity</b>
     * field.
     */
    public const VAL_COUNTER = 'Counter';

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
