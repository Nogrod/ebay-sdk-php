<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing InventoryTrackingMethodCodeType
 *
 * Defines options to track a listing by the eBay item ID or the seller's SKU.
 *  In some calls, elements of this type are only returned in the response when
 *  the value is set to SKU on the item.
 * XSD Type: InventoryTrackingMethodCodeType
 */
class InventoryTrackingMethodCodeType
{
    /**
     * Constant for 'ItemID' value.
     *
     * Indicates the seller prefers to track the listing by its eBay item ID.
     *  This is the default for all listings.
     */
    public const VAL_ITEM_ID = 'ItemID';

    /**
     * Constant for 'SKU' value.
     *
     * Indicates the seller prefers to track the listing by their own SKU.
     *  <br/><br/>
     *  When you track by SKU, it means you can pass in your SKU instead of
     *  the eBay item ID in other calls that support SKU as an input field.
     *  If you choose SKU as your tracking preference for a listing,
     *  the value in <b>Item.SKU</b> must be unique across your active listings.
     *  You cannot create new listings with the same <b>Item.SKU</b> value while
     *  the listing is active (that is, until the existing listing with that
     *  SKU has ended).
     *  <br/><br/>
     *  However, you can use <b>ReviseInventoryStatus</b> to update the quantity
     *  and/or price for the existing SKU as needed. When revising a listing
     *  where the <b>InventoryTrackingMethod</b> was set to SKU, you must pass in both
     *  the <b>InventoryTrackingMethod</b> tag (with the value set to SKU) and the SKU
     *  tag with the SKU value from your original listing.
     */
    public const VAL_SKU = 'SKU';

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
