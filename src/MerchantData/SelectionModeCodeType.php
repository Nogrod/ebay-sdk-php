<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SelectionModeCodeType
 *
 * This enumerated type contains the values that will indicate whether a seller can specify their own custom values for an Item Specific, or if they need to use a value (or values) that eBay has defined.
 * XSD Type: SelectionModeCodeType
 */
class SelectionModeCodeType
{
    /**
     * Constant for 'Automatic' value.
     *
     * Automatic criteria. Reserved for future use.
     */
    public const VAL_AUTOMATIC = 'Automatic';

    /**
     * Constant for 'Manual' value.
     *
     * Manual criteria. Reserved for future use.
     */
    public const VAL_MANUAL = 'Manual';

    /**
     * Constant for 'Prefilled' value.
     *
     * Indicates that the Item Specifics defined for an eBay catalog product will get
     * pre-filled for a listing if the seller successfully matches their item to a
     * product in eBay's catalog. To match an item to an eBay catalog product when
     * adding or revising a listing, the seller provides either an
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b> eBay Product ID (ePID), or a Global Trade
     * Identification Number such as a UPC, an EAN, anISBN), or a Brand/MPN pair.
     */
    public const VAL_PREFILLED = 'Prefilled';

    /**
     * Constant for 'SelectionOnly' value.
     *
     * If this value is returned, it is recommended that the seller only use one of the
     * recommended values for the corresponding Item Specific. In other words, the
     * seller should use the exact string provided in one of the corresponding
     * <b>ValueRecommendation.Value</b> fields when creating, revising, or relisting an
     * item and using that particular Item Specific.
     */
    public const VAL_SELECTION_ONLY = 'SelectionOnly';

    /**
     * Constant for 'FreeText' value.
     *
     * Indicates that the seller is allowed to specify their own value(s) for the
     * corresponding Item Specific when creating, revising, or relisting an item and
     * using that particular Item Specific.
     */
    public const VAL_FREE_TEXT = 'FreeText';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
