<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SelectionModeCodeType
 *
 * This enumerated type contains the values that will be returned in a <b>GetCategorySpecifics</b> call. The value that is returned will determine how a seller uses/sets mandatory and recommended Item Specifics.
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
     * Indicates that mandatory and recommended Item Specifics will be pre-filled after
     * a successful <b>Add</b>/<b>Revise</b>/<b>Relist</b> call if eBay is able to
     * match a provided eBay Product ID (ePID), Global Trade Identification Number
     * (UPC, EAN, ISBN), or Brand/MPN pair to an eBay catalog product.
     */
    public const VAL_PREFILLED = 'Prefilled';

    /**
     * Constant for 'SelectionOnly' value.
     *
     * Indicates that the seller must use the exact string provided in the
     * corresponding <b>NameRecommendation.Name</b> field when creating, revising, or
     * relisting an item and using that particular Item Specific.
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
