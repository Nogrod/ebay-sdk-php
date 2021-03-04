<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing PromotionalSaleStatusCodeType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  Values indicate the status of a sale. Used for the Promotional Price Display
 *  feature, which enables sellers to apply discounts across many listings.
 * XSD Type: PromotionalSaleStatusCodeType
 */
class PromotionalSaleStatusCodeType
{
    /**
     * Constant for 'Active' value.
     *
     * The promotional sale is active.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Scheduled' value.
     *
     * The promotional sale is scheduled. That is, the start time is in the future.
     */
    public const VAL_SCHEDULED = 'Scheduled';

    /**
     * Constant for 'Processing' value.
     *
     * The status of the promotional sale is pending. When first scheduling a Sale,
     *  if you select over 200 listings to be in any given Sale, it will take some
     *  time for eBay to process the request.
     */
    public const VAL_PROCESSING = 'Processing';

    /**
     * Constant for 'Inactive' value.
     *
     * The promotional sale is inactive, the sale has ended. You can reschedule a
     *  sale once it has ended, but you will need to wait at least 24 hours before it
     *  can become active.
     */
    public const VAL_INACTIVE = 'Inactive';

    /**
     * Constant for 'Deleted' value.
     *
     * The promotional sale has been deleted. Deleted promotional sales cannot be
     *  updated or reactivated.
     */
    public const VAL_DELETED = 'Deleted';

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
