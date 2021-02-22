<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ListingEnhancementsCodeType
 *
 * Type defining all listing upgrades that may be available to the seller when listing an
 *  item. The listing upgrades that are available vary by site and by the seller's
 *  account status. To discover which listing upgrades are available,
 *  call <b>GeteBayDetails</b>, pass in the appropriate <b>SiteID</b> value and set the <b>DetailName</b> input
 *  filter to <code>ListingFeatureDetails</code>, and then look for the <b>ListingFeatureDetails</b> container
 *  in the response. Listing upgrades will either be listed as <code>Enabled</code> or <code>Disabled</code>.
 * XSD Type: ListingEnhancementsCodeType
 */
class ListingEnhancementsCodeType
{

    /**
     * Constant for 'Border' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Picture Border feature is no longer available on any eBay Marketplace
     * sites, so this value should not be used in Add/Revise/Relist calls, and will not
     * be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  If specified, the seller wants to add a border around the listing's pictures.
     * Applicable listing fees apply.
     *  <br>
     *  <br>
     */
    public const VAL_BORDER = 'Border';

    /**
     * Constant for 'BoldTitle' value.
     *
     * This value is used if the seller wants the listing title to
     *  be in boldface type. This feature will incur a listing fee.
     *  Note that this enhancement will not put the listing subtitle in boldface type
     * (if a subtitle is used).
     *  <br>
     *  <br>
     *  Currently, Bold Titles are only supported on eBay US, both Canada sites, eBay
     * Netherlands, and eBay Poland.
     */
    public const VAL_BOLD_TITLE = 'BoldTitle';

    /**
     * Constant for 'Featured' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Featured listing feature is no longer available on any eBay Marketplace
     * sites, so this value should not be used in Add/Revise/Relist calls, and will not
     * be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Listing is a "Featured Plus" item. The item will display
     *  prominently in the Featured Items section of its category list, and it will
     *  stand out on search results pages. It will also display in the regular, non-
     *  featured item list. Only available to users with a Feedback rating of 10 or
     *  greater.
     */
    public const VAL_FEATURED = 'Featured';

    /**
     * Constant for 'Highlight' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Highlighted listing feature is no longer available on any eBay Marketplace
     * sites, so this value should not be used in Add/Revise/Relist calls, and will not
     * be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Listing is highlighted in a different color in lists.
     */
    public const VAL_HIGHLIGHT = 'Highlight';

    /**
     * Constant for 'HomePageFeatured' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Featured Gallery listing feature is no longer available on any eBay sites,
     * so this value should not be used in Add/Revise/Relist calls, and will not be
     * returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Listing will have a chance to rotate into a special display
     *  on eBay's Home page. Your item is very likely to show up on the Home page,
     *  although eBay does not guarantee that your item will be highlighted
     *  in this way. This is the highest level of visibility on eBay.
     */
    public const VAL_HOME_PAGE_FEATURED = 'HomePageFeatured';

    /**
     * Constant for 'ProPackBundle' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Pro Pack Bundle is no longer available on any eBay Marketplace sites, so
     * this value should not be used in Add/Revise/Relist calls, and will not be
     * returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Listing is using ProPackBundle (a feature pack).
     *  Applies only to vehicle listings on eBay Motors (US and Canada), and
     *  to the Parts and Accessories category in the eBay Motors US site.
     *  Contains the BoldTitle, Border, Featured and Highlight features.
     */
    public const VAL_PRO_PACK_BUNDLE = 'ProPackBundle';

    /**
     * Constant for 'BasicUpgradePackBundle' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Basic Upgrade Pack Bundle is no longer available on any eBay Marketplace
     * sites, so this value should not be used in Add/Revise/Relist calls, and will not
     * be returned in 'Get' calls.
     *  </span>
     */
    public const VAL_BASIC_UPGRADE_PACK_BUNDLE = 'BasicUpgradePackBundle';

    /**
     * Constant for 'ValuePackBundle' value.
     *
     * If this value is specified in an Add/Revise/Relist call, a Value Pack bundle is
     * applied to the listing. The Value Pack bundle includes the Gallery Plus feature,
     * a listing subtitle, and use of a Listing Designer template for a discounted
     * price. Support for this feature varies by site and category.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer
     * able to use Listing Designer templates when they create or revise listings, so
     * use of a Listing Designer template will no longer be a part of this
     * bundle.</span>
     */
    public const VAL_VALUE_PACK_BUNDLE = 'ValuePackBundle';

    /**
     * Constant for 'ProPackPlusBundle' value.
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Pro Pack Plus Bundle is no longer available on any eBay Marketplace sites,
     * so this value should not be used in Add/Revise/Relist calls, and will not be
     * returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Support for this feature varies by site and category.
     *  A ProPackPlusBundle listing is using ProPackPlus bundle (a feature pack),
     *  which combines the features of BoldTitle, Border, Highlight, Featured (which
     *  is equivalent to a GalleryType value of Featured), and
     *  Gallery, for a discounted price.
     *  Note that if, for example, in AddItem, if you use ProPackPlusBundle and
     *  a GalleryType value of Gallery, then the resulting item will have a GalleryType
     *  value of Featured.
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
