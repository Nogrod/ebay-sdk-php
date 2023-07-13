<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ListingEnhancementsCodeType
 *
 * Type defining the listing upgrades that may be available to the seller when listing or revising an item.
 *  <br>
 *  <span class="tablenote"><b>Note: </b> <code>BoldTitle</code> is the only enum value that can be used in the <b>ListingEnhancement</b> field.
 *  </span>
 * XSD Type: ListingEnhancementsCodeType
 */
class ListingEnhancementsCodeType
{
    /**
     * Constant for 'Border' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_BORDER = 'Border';

    /**
     * Constant for 'BoldTitle' value.
     *
     * This value is used if the seller wants the listing title to
     *  be in boldface type. This feature will incur a listing fee.
     *  Note that this enhancement will not put the listing subtitle in boldface type
     * (if a subtitle is used).
     */
    public const VAL_BOLD_TITLE = 'BoldTitle';

    /**
     * Constant for 'Featured' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_FEATURED = 'Featured';

    /**
     * Constant for 'Highlight' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_HIGHLIGHT = 'Highlight';

    /**
     * Constant for 'HomePageFeatured' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_HOME_PAGE_FEATURED = 'HomePageFeatured';

    /**
     * Constant for 'ProPackBundle' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_PRO_PACK_BUNDLE = 'ProPackBundle';

    /**
     * Constant for 'BasicUpgradePackBundle' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_BASIC_UPGRADE_PACK_BUNDLE = 'BasicUpgradePackBundle';

    /**
     * Constant for 'ValuePackBundle' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_VALUE_PACK_BUNDLE = 'ValuePackBundle';

    /**
     * Constant for 'ProPackPlusBundle' value.
     *
     * This enumeration value is deprecated.
     */
    public const VAL_PRO_PACK_PLUS_BUNDLE = 'ProPackPlusBundle';

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
