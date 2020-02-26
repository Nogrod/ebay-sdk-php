<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing EBaySubscriptionTypeCodeType
 *
 * This enumerated type contains a list of eBay subscriptions that an eBay user may be subscribed to.
 * XSD Type: EBaySubscriptionTypeCodeType
 */
class EBaySubscriptionTypeCodeType
{

    /**
     * Constant for 'SellerAssistant' value.
     *
     * This eBay subscription is no longer available.
     */
    public const VAL_SELLER_ASSISTANT = 'SellerAssistant';

    /**
     * Constant for 'SellerAssistantPro' value.
     *
     * This eBay subscription is no longer available.
     */
    public const VAL_SELLER_ASSISTANT_PRO = 'SellerAssistantPro';

    /**
     * Constant for 'EBayStoreBasic' value.
     *
     * This value indicates that the user has a Basic eBay Store membership. See the <a
     * href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html
     * target="_blank">Welcome to eBay Stores</a> help page for more information on
     * eBay Store subscriptions.
     */
    public const VAL_EBAY_STORE_BASIC = 'EBayStoreBasic';

    /**
     * Constant for 'EBayStoreFeatured' value.
     *
     * This value indicates that the user has a Premium eBay Store membership. See the
     * <a href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html
     * target="_blank">Welcome to eBay Stores</a> help page for more information on
     * eBay Store subscriptions.
     */
    public const VAL_EBAY_STORE_FEATURED = 'EBayStoreFeatured';

    /**
     * Constant for 'EBayStoreAnchor' value.
     *
     * This value indicates that the user has a Anchor eBay Store membership. See the
     * <a href="http://pages.ebay.com/sellerinformation/stores/Subscriptions.html
     * target="_blank">Welcome to eBay Stores</a> help page for more information on
     * eBay Store subscriptions.
     */
    public const VAL_EBAY_STORE_ANCHOR = 'EBayStoreAnchor';

    /**
     * Constant for 'SellingManager' value.
     *
     * This value indicates that the user has a Selling Manager subscription. Selling
     * Manager is free to all sellers and can be subscribed to through the
     * <b>Subscriptions</b> section of My eBay. See the <a
     * href="http://pages.ebay.com/help/sell/selling-manager-subscription.html
     * target="_blank">Selling Manager and Selling Manager Pro</a> help page for more
     * information on Selling Manager.
     */
    public const VAL_SELLING_MANAGER = 'SellingManager';

    /**
     * Constant for 'SellingManagerPro' value.
     *
     * This value indicates that the user has a Selling Manager Pro subscription.
     * Selling Manager Pro is free to all sellers for the first 30 days, and a Selling
     * Manager Pro subscription is included at no charge for eBay Store Premium and
     * Anchor subscriptions. Selling Manager Pro can be subscribed to through the
     * <b>Subscriptions</b> section of My eBay. See the <a
     * href="http://pages.ebay.com/help/sell/selling-manager-subscription.html
     * target="_blank">Selling Manager and Selling Manager Pro</a> help page for more
     * information on Selling Manager Pro.
     */
    public const VAL_SELLING_MANAGER_PRO = 'SellingManagerPro';

    /**
     * Constant for 'PictureManagerLevel1' value.
     *
     * This value is no longer applicable because Picture Manager has been EOLed.
     */
    public const VAL_PICTURE_MANAGER_LEVEL_1 = 'PictureManagerLevel1';

    /**
     * Constant for 'PictureManagerLevel2' value.
     *
     * This value is no longer applicable because Picture Manager has been EOLed.
     */
    public const VAL_PICTURE_MANAGER_LEVEL_2 = 'PictureManagerLevel2';

    /**
     * Constant for 'PictureManagerLevel3' value.
     *
     * This value is no longer applicable because Picture Manager has been EOLed.
     */
    public const VAL_PICTURE_MANAGER_LEVEL_3 = 'PictureManagerLevel3';

    /**
     * Constant for 'PictureManagerLevel4' value.
     *
     * This value is no longer applicable because Picture Manager has been EOLed.
     */
    public const VAL_PICTURE_MANAGER_LEVEL_4 = 'PictureManagerLevel4';

    /**
     * Constant for 'PictureManagerLevel5' value.
     *
     * This value is no longer applicable because Picture Manager has been EOLed.
     */
    public const VAL_PICTURE_MANAGER_LEVEL_5 = 'PictureManagerLevel5';

    /**
     * Constant for 'PictureManagerLevel6' value.
     *
     * This value is no longer applicable because Picture Manager has been EOLed.
     */
    public const VAL_PICTURE_MANAGER_LEVEL_6 = 'PictureManagerLevel6';

    /**
     * Constant for 'PictureManagerLevel7' value.
     *
     * This value is no longer applicable because Picture Manager has been EOLed.
     */
    public const VAL_PICTURE_MANAGER_LEVEL_7 = 'PictureManagerLevel7';

    /**
     * Constant for 'SellerReportsBasic' value.
     *
     * Basic Sales Reports are no longer available. Sellers should subsribe to Sales
     * Reports Plus instead.
     */
    public const VAL_SELLER_REPORTS_BASIC = 'SellerReportsBasic';

    /**
     * Constant for 'SellerReportsPlus' value.
     *
     * This value indicates that the user has a Sales Reports Plus subscription. A user
     * can subscribe to Sales Report Plus through the <b>Subscriptions</b> section of
     * My eBay. See the <a
     * href="http://pages.ebay.com/help/sell/viewing-sales-reports.html
     * target="_blank">Sales Report Plus</a> help page for more information.
     */
    public const VAL_SELLER_REPORTS_PLUS = 'SellerReportsPlus';

    /**
     * Constant for 'FileExchange' value.
     *
     * This value indicates that the user has a File Exchange subscription. A user can
     * subscribe to File Exchange through the <b>Subscriptions</b> section of My eBay.
     * See the <a
     * href="http://pages.ebay.com/sellerinformation/sellingresources/fileexchange.html
     * target="_blank">File Exchange</a> help page for more information.
     */
    public const VAL_FILE_EXCHANGE = 'FileExchange';

    /**
     * Constant for 'LocalMarketSpecialty' value.
     *
     * This value indicates that the Motors Dealer has a Local Market Specialty
     * subscription. This type of account is used to sell in the Motorcycles,
     * Powersports, and Other Vehicles and Trailers categories. Not Cars and Trucks.
     */
    public const VAL_LOCAL_MARKET_SPECIALTY = 'LocalMarketSpecialty';

    /**
     * Constant for 'LocalMarketRegular' value.
     *
     * This value indicates that the Motors Dealer has a Local Market Regular
     * subscription. This type of account is used to sell in all eBay Motors
     * categories.
     */
    public const VAL_LOCAL_MARKET_REGULAR = 'LocalMarketRegular';

    /**
     * Constant for 'LocalMarketPremium' value.
     *
     * This value indicates that the Motors Dealer has a Local Market Premium
     * subscription. This type of account is used to sell in all eBay Motors
     * categories.
     */
    public const VAL_LOCAL_MARKET_PREMIUM = 'LocalMarketPremium';

    /**
     * Constant for 'CustomCode' value.
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
