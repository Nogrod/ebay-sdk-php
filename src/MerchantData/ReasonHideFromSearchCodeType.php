<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ReasonHideFromSearchCodeType
 *
 * Enumerated type that defines the possible reasons why a listing
 *  is being hidden from search on the eBay site.
 * XSD Type: ReasonHideFromSearchCodeType
 */
class ReasonHideFromSearchCodeType
{

    /**
     * Constant for 'DuplicateListing' value.
     *
     * This value indicates that the listing is being hidden from search on the eBay
     * site because the listing has been determined by eBay to be a duplicate listing.
     *  <br/><br/>
     *  This enumeration value is associated with eBay Duplicate Listings Policy, which
     * is applicable on the US, CA, CA-FR, and eBay Motors (Parts and Accessories only)
     * sites. Event Tickets, Real Estate, and Motor Vehicle categories are excluded
     * from this policy. For more information, read <a
     * href="http://pages.ebay.com/help/policies/listing-multi.html">eBay's Duplicate
     * Listings Policy</a> help page.
     */
    public const VAL_DUPLICATE_LISTING = 'DuplicateListing';

    /**
     * Constant for 'OutOfStock' value.
     *
     * This value indicates that the listing is currently hidden from search because
     * the quantity in the listing is zero. However, the listing is still alive and
     * will reappear in the search results when the quantity is set to something
     * greater than zero. The 'Out-of-stock' option is set by the seller at the account
     * level. This option can be enabled in My eBay Site Preferences, or the seller can
     * use the <a
     * href="http://developer.ebay.com/DevZone/XML/docs/Reference/ebay/SetUserPreferences.html#Request.OutOfStockControlPreference">OutOfStockControlPreference</a>
     * field in the <b>SetUserPreferences</b> call.
     */
    public const VAL_OUT_OF_STOCK = 'OutOfStock';

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
