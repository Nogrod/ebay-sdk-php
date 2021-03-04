<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemArrivedWithinEDDCodeType
 *
 * This enumerated type list the possible status values regarding whether or not a buyer received an order line item within the estimated delivery date timeframe.
 * XSD Type: ItemArrivedWithinEDDCodeType
 */
class ItemArrivedWithinEDDCodeType
{
    /**
     * Constant for 'EddQuestionWasNotAsked' value.
     *
     * <b>This value is for internal use only.<b>
     */
    public const VAL_EDD_QUESTION_WAS_NOT_ASKED = 'EddQuestionWasNotAsked';

    /**
     * Constant for 'BuyerDidntProvideAnswer' value.
     *
     * <b>This value is for internal use only.<b>
     */
    public const VAL_BUYER_DIDNT_PROVIDE_ANSWER = 'BuyerDidntProvideAnswer';

    /**
     * Constant for 'BuyerIndicatedItemArrivedWithinEDDRange' value.
     *
     * This value indicates that the buyer indicated that the order line item did
     * arrive within the estimated delivery date when they left feedback for the
     * transaction.
     */
    public const VAL_BUYER_INDICATED_ITEM_ARRIVED_WITHIN_EDDRANGE = 'BuyerIndicatedItemArrivedWithinEDDRange';

    /**
     * Constant for 'BuyerIndicatedItemNotArrivedWithinEDDRange' value.
     *
     * This value indicates that the buyer indicated that the order line item did not
     * arrive within the estimated delivery date when they left feedback for the
     * transaction.
     */
    public const VAL_BUYER_INDICATED_ITEM_NOT_ARRIVED_WITHIN_EDDRANGE = 'BuyerIndicatedItemNotArrivedWithinEDDRange';

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
