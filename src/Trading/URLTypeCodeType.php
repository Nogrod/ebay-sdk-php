<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing URLTypeCodeType
 *
 * This enumerated type consists of the different eBay URLs that can be returned under the <b>URLDetails</b> containers of a <b>GeteBayDetails</b> response.
 * XSD Type: URLTypeCodeType
 */
class URLTypeCodeType
{

    /**
     * Constant for 'ViewItemURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * base URL for the View Item page. The user will just input the Item ID for a
     * listing at the end of the URL to retrieve the View Item page for that listing.
     */
    public const VAL_VIEW_ITEM_URL = 'ViewItemURL';

    /**
     * Constant for 'ViewUserURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * base URL for the eBay User page. The user will just input the user ID for an
     * eBay user at the end of the URL to retrieve the eBay User page.
     */
    public const VAL_VIEW_USER_URL = 'ViewUserURL';

    /**
     * Constant for 'MyeBayURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * URL for the My eBay home page.
     */
    public const VAL_MYE_BAY_URL = 'MyeBayURL';

    /**
     * Constant for 'MyeBayBiddingURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * URL for the user's My eBay Bids/Offer page.
     */
    public const VAL_MYE_BAY_BIDDING_URL = 'MyeBayBiddingURL';

    /**
     * Constant for 'MyeBayNotWonURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * URL to the 'Didn't Win' section on the user's My eBay Bids/Offer page.
     */
    public const VAL_MYE_BAY_NOT_WON_URL = 'MyeBayNotWonURL';

    /**
     * Constant for 'MyeBayWonURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * URL to the 'Bidding' section on the user's My eBay Bids/Offer page.
     */
    public const VAL_MYE_BAY_WON_URL = 'MyeBayWonURL';

    /**
     * Constant for 'MyeBayWatchingURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * URL to the user's My eBay Watch List page.
     */
    public const VAL_MYE_BAY_WATCHING_URL = 'MyeBayWatchingURL';

    /**
     * Constant for 'eBayStoreURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * base URL to the user's eBay Store page. The seller will just add a forward slash
     * (/) and their eBay Store name to get to their eBay Store home page.
     */
    public const VAL_E_BAY_STORE_URL = 'eBayStoreURL';

    /**
     * Constant for 'SmallLogoURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * full URL to the small version of the eBay Marketplace logo.
     */
    public const VAL_SMALL_LOGO_URL = 'SmallLogoURL';

    /**
     * Constant for 'MediumLogoURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * full URL to the medium version of the eBay Marketplace logo.
     */
    public const VAL_MEDIUM_LOGO_URL = 'MediumLogoURL';

    /**
     * Constant for 'LargeLogoURL' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * full URL to the large version of the eBay Marketplace logo.
     */
    public const VAL_LARGE_LOGO_URL = 'LargeLogoURL';

    /**
     * Constant for 'CreateProductUrl' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * base URL that a seller needs to enter the UI flow to make a request that a
     * missing product be added to the eBay Catalog.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Catalog change requests through the UI flow are currently not available, so
     * this URL will not be returned in <b>GeteBayDetails</b>.
     *  </span>
     */
    public const VAL_CREATE_PRODUCT_URL = 'CreateProductUrl';

    /**
     * Constant for 'AppealProductUrl' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * base URL that a seller needs to enter the UI flow to make a request that an
     * existing eBay Catalog product be revised. The seller will have to append the
     * ePID value of the catalog product to the end of the URL.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Catalog change requests through the UI flow are currently not available, so
     * this URL will not be returned in <b>GeteBayDetails</b>.
     *  </span>
     */
    public const VAL_APPEAL_PRODUCT_URL = 'AppealProductUrl';

    /**
     * Constant for 'ManageProductUrl' value.
     *
     * This value indicates that the URL in the corresponding <b>URL</b> field is the
     * base URL that a seller needs to enter the UI flow to get the status of a catalog
     * change request (request for a new catalog product or request to revise an
     * existing product). The seller will have to append the identifier of the catalog
     * change request to the end of the URL.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Catalog change requests through the UI flow are currently not available, so
     * this URL will not be returned in <b>GeteBayDetails</b>.
     *  </span>
     */
    public const VAL_MANAGE_PRODUCT_URL = 'ManageProductUrl';

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
