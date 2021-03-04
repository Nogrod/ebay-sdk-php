<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing RecipientRelationCodeType
 *
 * A seller can make a Transaction Confirmation Request (TCR) for an item. This code
 *  list contains values to specify the current relationship between the seller and
 *  the potential buyer. For a seller to make a Transaction Confirmation Request (TCR)
 *  for an item, the potential buyer must meet one of the criteria in this code list.
 * XSD Type: RecipientRelationCodeType
 */
class RecipientRelationCodeType
{
    /**
     * Constant for '1' value.
     *
     * Indicates that the recipient has one or more bids on the item; the relationship
     * is "bidder."
     */
    public const VAL_1 = '1';

    /**
     * Constant for '2' value.
     *
     * Indicates that the recipient has one or more Best Offers on the item; the
     *  relationship is "Best Offer buyer."
     */
    public const VAL_2 = '2';

    /**
     * Constant for '3' value.
     *
     * Indicates that the recipient has asked the seller a question about the item;
     *  the relationship is "a member with an ASQ question."
     */
    public const VAL_3 = '3';

    /**
     * Constant for '4' value.
     *
     * Indicates that the recipient has a postal code; the relationship is "a member
     *  with a postal code."
     */
    public const VAL_4 = '4';

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
