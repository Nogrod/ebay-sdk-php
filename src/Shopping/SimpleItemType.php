<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SimpleItemType
 *
 * Complex type that is used to express the details of an eBay listing.
 * XSD Type: SimpleItemType
 */
class SimpleItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This boolean field indicates whether the seller will accept a Best Offer for the item. The Best Offer feature allows a buyer to propose a price that is lower than the fixed price or lower than the current bid price on an auction listing. A buyer should consider their Best Offer as a binding offer, and if the seller accepts the offer, that buyer is expected to purchase the item (and is actually charged immediately if the listing is set up for immediate payment.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no longer be applicable once the listing receives its first qualifying bid.
     *  </span>
     *
     * @var bool $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the eBay site's country. If an interested international buyer wants to view the Buy It Now price in their country's currency, that buyer should view the <b>ConvertedBuyItNowPrice</b> field instead.
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note that it is possible that the <b>BuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when <code>true</code>.
     *  <br>
     *  <br />
     *  To see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>CurrentPrice</b> or <b>ConvertedCurrentPrice</b> fields instead.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $buyItNowPrice
     */
    private $buyItNowPrice = null;

    /**
     * The seller's description of the listing. This field is only returned if the <b>IncludeSelector</b> field is included in the call request, and its value is set to either <code>TextDescription</code> or <code>Description</code>. If the <code>Description</code> value is used, the full description is returned, with all HTML, XML, or CSS markup used in the listing (if any) by the seller. To only view the actual text of the listing description (no markup tags), the <code>TextDescription</code> value shall be used instead.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The unique identifier of the eBay listing. This will be the same <b>ItemID</b> value that is passed into the call request.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is only returned if the Buy It Now feature is enabled and available on an active auction listing. This field is only returned if <code>true</code>. With the Buy It Now feature, interested buyers have the option of bypassing the auction procedure, and purchasing the item immediately at the price shown in the <b>BuyItNowPrice</b> field (or in the <b>ConvertedBuyItNowPrice</b> field for international buyers.
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers, and the <b>BuyItNowAvailable</b> field will no longer be returned for the active auction listing.
     *
     * @var bool $buyItNowAvailable
     */
    private $buyItNowAvailable = null;

    /**
     * This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the buyer's country. This value and the <b>BuyItNowPrice</b> will be the same for domestic buyers (for example, a US buyer purchasing an item on the US site).
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note that it is possible that the <b>ConvertedBuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when <code>true</code>.
     *  <br />
     *  <br />
     *  To see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>ConvertedCurrentPrice</b> or <b>CurrentPrice</b> fields instead.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $convertedBuyItNowPrice
     */
    private $convertedBuyItNowPrice = null;

    /**
     * For active listings, this timestamp indicates the date and time when the listing is scheduled to end, and for recently ended listings, this timestamp indicates the date and time when the listing actually ended.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * This timestamp indicates the date and time when the listing started.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * This field shows the URL to the listing's View Item page on the eBay marketplace.
     *
     * @var string $viewItemURLForNaturalSearch
     */
    private $viewItemURLForNaturalSearch = null;

    /**
     * The enumeration value in this field indicates the format of the listing, such as auction, fixed-price, or classified ad format. See the <a href="types/ListingTypeCodeType.html">ListingTypeCodeType</a> definition to view the supported enumeration values.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * The text string in this field provides the physical location of the item. Generally, this text will show the city and state/province of the item's location, but it may vary, and sometimes only a city will appear, or sometimes acronymns will be used, and other times the full city and state will be spelled out. This gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping charges may be higher the further away that the buyer resides from the shipping location.
     *
     * @var string $location
     */
    private $location = null;

    /**
     * Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the order line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  At this time, if the seller is opted in to eBay managed payments, the available payment methods (which are controlled by eBay and not the seller) may not be returned, but those payment methods will be exposed on the listing's View Item page.
     *  </span>
     *
     * @var string[] $paymentMethods
     */
    private $paymentMethods = [
        
    ];

    /**
     * This field shows the URL to the thumbnail-size image of the listing's Gallery picture. The 'Gallery Picture' is the picture that displays by default when a user first visits a listing's View Item page.
     *  <br>
     *  <br>
     *  eBay listing images must be one of the following image formats: JPEG, BMP, TIF, or GIF.
     *  <br>
     *  <br>
     *  This field is generally always returned as long as the seller is using eBay's picture server (also known as EPS) to host the listing's images.
     *
     * @var string $galleryURL
     */
    private $galleryURL = null;

    /**
     * This field shows the URL to a full-size version of one image associated with the eBay listing. A <b>PictureURL</b> field is returned for each image in the eBay listing. At least one <b>PictureURL</b> field is always returned since every eBay listing must have at least one picture.
     *  <br>
     *  <br>
     *  Many eBay categories support up to 12 pictures, and motor vehicle categories support up to 24 pictures.
     *
     * @var string[] $pictureURL
     */
    private $pictureURL = [
        
    ];

    /**
     * This string value is the postal code (or zip code) of the item's physical location. Knowing the location gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping charges may be higher the further away that the buyer resides from the shipping location.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> As of late January 2020, the displayed postal code returned in <b>GetSingleItem</b> and <b>GetMultipleItems</b> is now masked to all users except for the seller of the item. Different countries will mask postal/zip codes in slightly different ways, but an example would be <code>951**</code>.
     *  </span>
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * The unique identifier of the eBay listing's primary category. This field is always returned. Some listings are shown in an additional secondary category, and if this is the case, the unique identifier of the secondary category is shown in the <b>SecondaryCategoryID</b> field.
     *
     * @var string $primaryCategoryID
     */
    private $primaryCategoryID = null;

    /**
     * This string field shows the full category path (using category names) to the primary listing category, starting with the L1 category and ending with the name of the primary listing category. This is a fully qualified category breadcrumb (e.g., Cell Phones & Accessories:Cell Phones & Smartphones).
     *
     * @var string $primaryCategoryName
     */
    private $primaryCategoryName = null;

    /**
     * The quantity of the item available for purchase when the seller created, revised, or relisted the item. An auction listing always has a <strong>Quantity</strong> value of <code>1</code>, but a fixed-price listing can have multiple quantity of an item.
     *  <br>
     *  <br>
     *  In a multiple-quantity, fixed-price listing, the user must also look at the <strong>QuantitySold</strong> field, and if the value of this field is an integer value greater than '0', that integer value should be subtracted from the value in the <strong>Quantity</strong> field. So, if the <strong>Quantity</strong> field shows a value of '7', and the <strong>QuantitySold</strong> field shows a value of '3', the quantity available is actually '4' (7 - 3 = 4).
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>Quantity</strong> field is always returned except in the case of a multiple-variation listing, and the user sets the <strong>IncludeSelector</strong> filter to <code>Variations</code>. In this particular case, the (listing-level) <strong>Quantity</strong> field is not returned, and instead, the user will look at the <strong>Variation.Quantity</strong> and <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item variation in the listing. If the user retrieves a multiple-variation listing, but does not set the <strong>IncludeSelector</strong> filter to <code>Variations</code>, the listing-level <strong>Quantity</strong> and <strong>QuantitySold</strong> fields are returned, and these fields' values will be the cumulative values of all item variations in the listing.
     *  </span>
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  As mentioned earlier, an auction listing can only have a quantity of '1', but a lot-based auction listing can have multiple identical/similar items sold as one unit for one price. For example, instead of listing 10 light bulbs for US 2.00 each, they might list 10 light bulbs for USD 20.00 (where you have to buy all 10). For lot-based listings (which are also supported by the fixed-price format), the number of identical/similar items in the 'lot' is shown in the <strong>LotSize</strong> field. The seller is also expected to summarize all items in the lot in the <strong>Description</strong> field.
     *  </span>
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * This container provides a few details about the listing's seller, including the seller's eBay user ID, Feedback Score, and Positive Feedback Percentage. This container is only returned if <strong>IncludeSelector</strong> is included in the request and set to <code>Details</code>.
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleUserType $seller
     */
    private $seller = null;

    /**
     * This integer value indicates the number of bids that have been placed on an auction item. This field is only applicable to auction listings, but it is always returned for all listings, and its value will be '0' if bids are not applicable to the listing.
     *
     * @var int $bidCount
     */
    private $bidCount = null;

    /**
     * In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the user's country. In an active auction listing, this field's value reflects the current bid price for the auction item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> field instead if that user is interested in skipping the auction process and buying that item immediately.
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to <code>Variations</code>, the <strong>ConvertedCurrentPrice</strong> field is still returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the <strong>ConvertedCurrentPrice</strong> field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to individual <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $convertedCurrentPrice
     */
    private $convertedCurrentPrice = null;

    /**
     * In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the listing site's country. In an active auction listing, this field's value reflects the current bid price for the auction item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> (or <b>ConvertedBuyItNowPrice</b>) field instead if that user is interested in skipping the auction process and buying that item immediately.
     *  <br />
     *  <br />
     *  This field is only returned if the <b>IncludeSelector</b> field is included and set to <code>Details</code>. Alternatively, the user can view the <b>ConvertedCurrentPrice</b> field, as this field shows the price in the currency of the user's country, and it is always returned.
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to <code>Variations</code>, the <b>CurrentPrice</b> is not returned, but the <strong>ConvertedCurrentPrice</strong> field is returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the <strong>ConvertedCurrentPrice</strong> field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to individual <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $currentPrice
     */
    private $currentPrice = null;

    /**
     * This container provides a few details about the current high bidder for an active auction listing, or the winning bidder for a completed auction listing. This container is only returned for auction listings with at least one bid, and only if the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>. The high bidder details include the bidder's eBay user ID and Feedback Score. For the <strong>GetItemStatus</strong> call, only the eBay user ID is returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The eBay user ID and the Feedback data will actually be obfuscated to all users except for the owner (seller) of the listing, so essentially, the <strong>HighBidder</strong> container only has value to the seller of the listing.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleUserType $highBidder
     */
    private $highBidder = null;

    /**
     * This enumeration value indicates the current status of the listing. The three different listing states are discussed below.
     *
     * @var string $listingStatus
     */
    private $listingStatus = null;

    /**
     * This integer value indicates the quantity of items sold for the listing. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is always returned even if its value is '0'.
     *  <br>
     *  <br>
     *  If the <strong>QuantitySold</strong> value is greater than '0', this value should be subtracted from the value in the <strong>Quantity</strong> field to get the accurate quantity that is available for purchase.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong> and <strong>QuantitySold</strong> field values will reflect the quantity and quantity sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the user will look at the <strong>Variation.Quantity</strong> and <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item variation in the listing.
     *  </span>
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * This boolean field indicates if the current/highest bid price has matched or exceeded the price set as the Reserve Price by the seller. A Reserve Price is the lowest price at which the seller is willing to sell
     *  the item through an auction. If the highest bid does not meet or exceed the Reserve Price, the auction listing will end without a sale (winning bidder) when the scheduled end time is reached.
     *  <br>
     *  <br>
     *  The Reserve Price must be higher than the starting bid price, but lower than the Buy It Now price (if one is set). This field is only applicable to auction listings, and only returned for auction listings if the seller has set a Reserve Price.
     *
     * @var bool $reserveMet
     */
    private $reserveMet = null;

    /**
     * A <strong>ShipToLocations</strong> field is returned for each domestic or international region that the seller is willing to ship the item. At least one <strong>ShipToLocations</strong> field should be returned for every listing. 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocations</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *  <br>
     *  <br>
     *  'Ship-to' locations range from continents and other large geographical regions, such as <code>Africa</code>, <code>Asia</code>, <code>Caribbean</code>, or <code>MiddleEast</code>, all the way down to the state/province level and even cities within those state/provinces. A user will be able to see the international and domestic shipping regions that can be set by looking at the <strong>Shipping rate tables</strong> UI in My eBay. The Trading API's <strong>GeteBayDetails</strong> can also be used to view available shipping locations.
     *  <br>
     *  <br>
     *  If a US seller only ships to domestic locations, the only <strong>ShipToLocations</strong> value that should be returned is <code>US</code>. If a US seller is willing to ship to any location in the world, the only <strong>ShipToLocations</strong> value that should be returned is <code>Worldwide</code>
     *  <br>
     *  <br>
     *  Countries are represented by the two-digit codes defined in the ISO 3166 standard, or these codes can also be found in the <a href="types/CountryCodeType.html">CountryCodeType</a> definition.
     *
     * @var string[] $shipToLocations
     */
    private $shipToLocations = [
        
    ];

    /**
     * This enumeration value indicates the eBay marketplace on which the item was originally listed. For example, if the item is listed on the eBay US site, the value would be <code>US</code>. If it's listed on the eBay Germany site, the value would be <code>Germany</code>.
     *
     * @var string $site
     */
    private $site = null;

    /**
     * The value in this field indicates the precise time left before the listing is scheduled to end. The format used in this field is the format defined in the ISO 8601 duration format standard. See the <a href="types/simpletypes.html#duration">duration</a> simple type definition for more information on syntax/notation used for this type.
     *  <br>
     *  <br>
     *  This field is always returned, even if the listing is in the <code>Completed</code> state. A completed/ended listing will essentially have 0 seconds left, so the <b>Completed</b> value will be <code>PT0S</code>, which indicates '0 seconds' left.
     *
     * @var \DateInterval $timeLeft
     */
    private $timeLeft = null;

    /**
     * The listing title, as it appears in search results or on the View Item page.
     *  <br />
     *
     * @var string $title
     */
    private $title = null;

    /**
     * This container returns a few details of the lowest-priced shipping service option that is available to the eBay user making the call. For Calculated shipping, the item's location and the destination location are considered when calculating the shipping cost.
     *  <br>
     *  <br>
     *  <span class="tablenote">
     *  <strong>Important:</strong> To retrieve detailed information on every shipping service option available that the seller has set for the listing, the <b>GetShippingCosts</b> call is the better call to use, as the <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls only return the <b>ShippingCostSummary</b> container.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary
     */
    private $shippingCostSummary = null;

    /**
     * This container is a list of Item Specific name-value pairs used by the seller to provide desciptive details of an item in a structured manner. Depending on the eBay category, some Item Specifics are mandatory (including some GTIN values), some are recommended by eBay, and some are fully optional to the seller. A full set of helpful, accurate Item Specifics are always helpful to prospective buyers in assisting them to find and purchase the right product.
     *  <br>
     *  <br>
     *  A book's Item Specifics name-value pairs might include
     *  <code>Publication Year=2017</code> and <code>Format=Hardcover</code>. A motor vehicle's
     *  Item Specifics name-value pairs might include <code>Make=
     *  Toyota</code>, <code>Model=Prius</code>, and <code>Year=2017</code>. An event listing's Item Specifics name-value pairs might include <code>Event Type=Concert</code> and <code>Venue Name=The Fillmore</code>.
     *  <br>
     *  <br>
     *  In order for Item Specifics to be returned, the <b>IncludeSelector</b> must be included in the call request and set to <code>ItemSpecifics</code>. Most eBay listings will include at least a few Item Specifics.
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $itemSpecifics
     */
    private $itemSpecifics = null;

    /**
     * The number of times the listing's View Item page has been viewed (as determined by
     *  eBay). Only returned if the seller has chosen to include a hit counter in the
     *  listing, and if the seller has also chosen to make the listing's hit count publicly
     *  visible. This field is retrieved asynchronously. If you believe the item has a
     *  publicly visible hit count, but this field is not returned, retry the call.
     *
     * @var int $hitCount
     */
    private $hitCount = null;

    /**
     * The subtitle of the listing. This field is only returned if the seller included a subtitle for the listing and the <b>IncludeSelector</b> is included in the call request and set to <code>Details</code>.
     *
     * @var string $subtitle
     */
    private $subtitle = null;

    /**
     * This field shows the full path to the primary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to primary listing category (also referred to as the leaf category). So, if the primary listing category is a Level 4 (L4) category, the Category ID path in this field might look like the following, where '6000' is the L1 category ID, and '6444' is the primary listing category ID:
     *  <br>
     *  <br>
     *  <code><PrimaryCategoryIDPath>6000:6001:6016:6444</PrimaryCategoryIDPath></code>
     *
     * @var string $primaryCategoryIDPath
     */
    private $primaryCategoryIDPath = null;

    /**
     * The unique identifier of the eBay listing's secondary category. This field is only returned if the listing is surfacing in a secondary category. The listing's primary category is found in the <b>PrimaryCategoryID</b> field.
     *
     * @var string $secondaryCategoryID
     */
    private $secondaryCategoryID = null;

    /**
     * This string field shows the full category path (using category names) to the secondary listing category, starting with the L1 category and ending with the name of the secondary listing category. This field is only returned if the listing is surfacing in a secondary category.
     *
     * @var string $secondaryCategoryName
     */
    private $secondaryCategoryName = null;

    /**
     * This field shows the full path to the secondary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to secondary listing category. This field is only returned if the listing is surfacing in a secondary category.
     *
     * @var string $secondaryCategoryIDPath
     */
    private $secondaryCategoryIDPath = null;

    /**
     * This container is returned if any percentage of the sales proceeds is going to a nonprofit organization that is registered with eBay for Charity. This container consists of details related to the nonprofit charity organization, including the name, mission, and unique identifier of the charity, as well as the percentage rate of the sale proceeds that will go to the charity for each sale.
     *  <br>
     *  <br>
     *  This container is not returned for non-charitable listings.
     *
     * @var \Nogrod\eBaySDK\Shopping\CharityType $charity
     */
    private $charity = null;

    /**
     * This field is returned (as <code>true</code>) if an eBay Germany motor vehicle listing has an upgrade that allows the motor vehicle listing to appear on the <b>mobile.de</b> partner site. This field is only applicable to eBay Germany motor vehicle listings.
     *
     * @var bool $germanMotorsSearchable
     */
    private $germanMotorsSearchable = null;

    /**
     * The Get It Fast feature and icon are no longer supported in eBay listings.
     *
     * @var bool $getItFast
     */
    private $getItFast = null;

    /**
     * <span class="tablenote"><b>Note: </b> This field is deprecated, as the gift icon and gift services are no longer available on any eBay Marketplace site.
     *  </span>
     *
     * @var bool $gift
     */
    private $gift = null;

    /**
     * This field is deprecated.
     *
     * @var bool $pictureExists
     */
    private $pictureExists = null;

    /**
     * This field is deprecated.
     *
     * @var bool $recentListing
     */
    private $recentListing = null;

    /**
     * This container consists of the eBay seller's store name and the URL to the eBay store. This container is returned if the seller has an eBay Store subscription and the <b>IncludeSelector</b> field is included in the call request and set to <code>Details</code>.
     *
     * @var \Nogrod\eBaySDK\Shopping\StorefrontType $storefront
     */
    private $storefront = null;

    /**
     * The distance of the item from the buyer. The DistanceFromBuyer unit (miles
     *  or kilometers) varies by site. If the country whose site you are
     *  searching, e.g. India, uses kilometers, then the DistanceFromBuyer unit is
     *  kilometers. Otherwise, e.g. if the country is US or UK, then the
     *  DistanceFromBuyer unit is miles. DistanceFromBuyer is returned if a
     *  value for PostalCode is supplied in the request.
     *
     * @var \Nogrod\eBaySDK\Shopping\DistanceType $distanceFromBuyer
     */
    private $distanceFromBuyer = null;

    /**
     * A two-letter code that represents the country in which the item is located.
     *  <br><br>
     *  To see the list of currently supported country
     *  codes, and the English names associated with each code (e.g., KY="Cayman Islands"),
     *  call the Trading API's <b>GeteBayDetails</b>, with <b>DetailName</b> set to <b>CountryDetails</b>,
     *  and then look for <b>CountryDetails.Country</b> fields in the response.
     *  <br><br>
     *  Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO codes in the eBay list.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <a href="types/CountryCodeType.html">CountryCodeType</a> list is only a subset of all supported country codes, so to ensure that you are seeing the latest list, you should make a <b>GeteBayDetails</b> call as explained above.
     *  </span>
     *
     * @var string $country
     */
    private $country = null;

    /**
     * This field is deprecated.
     *
     * @var int $watchCount
     */
    private $watchCount = null;

    /**
     * This field is deprecated.
     *
     * @var string $halfItemCondition
     */
    private $halfItemCondition = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellerComments
     */
    private $sellerComments = null;

    /**
     * This container consists of details related to the seller's Return Policy, both for domestic and international buyers (if the seller ships internationally). If the seller does not accept returns, only the <b>ReturnsAccepted</b> field (or <b>InternationalReturnsAccepted</b> field for international buyers) is returned with a value of <code>ReturnsNotAccepted</code>. If a seller does accept returns, more details are returned, including the return period, the refund method, and the order partner (buyer or seller) who is responsible for return shipping costs. This container is only returned if the <b>IncludeSelector</b> field is included in the call request and set to <code>Details</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the settings in the domestic return policy fields will be used instead for international returns. </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ReturnPolicyType $returnPolicy
     */
    private $returnPolicy = null;

    /**
     * This field is only returned for auction listings. The value in this field is the minimum value that the next bid on the item must be to be accepted. If no bids have been placed on the item, the value in this field will be the same value that is returned in the <b>Item.ConvertedCurrentPrice</b> field.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $minimumToBid
     */
    private $minimumToBid = null;

    /**
     * This field is no longer returned in the <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls. To view the eBay Product ID (also known as an ePID) or Global Trade Item Number (UPC, EAN, ISBN, or MPN) for a product in a listing (or product variation within a multiple-variation listing), use the Trading API's <b>GetItem</b> call instead.
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    private $productID = null;

    /**
     * This field indicates if the seller requests immediate payment for the item. If <code>true</code>, immediate payment is required before the checkout process can begin. If <code>false</code>, immediate payment is not requested.
     *  <br/><br/>
     *  The immediate payment feature is only applicable to fixed-price listings, or for auction listings where the buyer chooses to purchase the item through the 'Buy It Now' option. The immediate payment feature is not applicable (even if the <b>AutoPay</b> field has a <code>true</code> value) in the following types of listings/transactions:
     *  <ul>
     *  <li>Classified ad listings where payment/checkout happens between buyer and seller off of eBay's platform</li>
     *  <li>Auction listings that end with a winning bidder</li>
     *  <li>A buyer's Best Offer (on Fixed-Price or Auction items) that is accepted by the seller</li>
     *  </ul>
     *  The immediate payment feature is only applicable to listings on PayPal-enabled sites in categories that support immediate payment, or if the seller is opted into the new eBay Managed Payments program. For the former, the only returned <b>PaymentMethods</b> value should be <code>PayPal</code>. For sellers, opted into the new eBay Managed Payments program, the supported payment methods are managed by eBay, so no payment methods may get returned.
     *
     * @var bool $autoPay
     */
    private $autoPay = null;

    /**
     * This container is returned if the seller of the item is registered on the eBay listing site as a Business Seller. This container consists of information related to the Business Seller's account. Not all eBay sites support Business Sellers.
     *
     * @var \Nogrod\eBaySDK\Shopping\BusinessSellerDetailsType $businessSellerDetails
     */
    private $businessSellerDetails = null;

    /**
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @var string[] $paymentAllowedSite
     */
    private $paymentAllowedSite = [
        
    ];

    /**
     * Indicates whether the item can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, an AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @var bool $integratedMerchantCreditCardEnabled
     */
    private $integratedMerchantCreditCardEnabled = null;

    /**
     * This container is only returned for multiple-variation listings, and it is required that the user include the <b>IncludeSelector</b> field in the call request, and set its value to <code>Variations</code>. Multiple-variation listings are fixed-price listings that feature similar, but not identicial items. For example, a T-shirt listing could contain multiple items of the same brand and style that vary by color and size (like <code>Blue, Large</code> and <code>Black, Medium</code>). Each variation in the listing specifies a unique combination of one of the available colors and sizes. Each variation can have a different quantity and price.
     *
     * @var \Nogrod\eBaySDK\Shopping\VariationsType $variations
     */
    private $variations = null;

    /**
     * Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. Typically, the seller's stated handling time ranges from zero to three business days. This time does not include the expected transit time of the shipping service option selected by the buyer.
     *  <br/><br/>
     *  <strong>GetSingleItem</strong> or <strong>GetMultipleItems</strong> returns <strong>HandlingTime</strong> in most cases, but there may be instances where the seller has not specified any shipping service options, or the the type of listing or eBay category does not require a handling time. For example, handling time is not relevant for 'local pickup' only, for freight shipping, or for classified ad listings where the transaction and delivery/shipping happens off of eBay's platform.
     *  <br/><br/>
     *  A <strong>HandlingTime</strong> value of <code>0</code> indicates <em>same business day handling</em> for an item. In this case, the seller's shipping commitment depends on the <em>order cut off time</em> set in the seller's My eBay Shipping preferences. The buyer must purchase and pay for the order line item before this <em>order cut off time</em> in order for the seller to be obligated to ship out the order on that same business day. A different cutoff time can be specified for each business day of the week. By default, the <em>order cut off time</em> is set to 2:00 PM local time on most sites, but the seller can change the times for any of the business days. For orders completed after the order cut off time, the item must be shipped by the end of the following business day (weekends and local holidays excluded).
     *
     * @var int $handlingTime
     */
    private $handlingTime = null;

    /**
     * A lot is a collection or set of two or more similar or identical items that must be purchased together in a single transaction, through an auction or a fixed-price listing. Examples of lot-based listings may include a collection of baby clothes, a collection of books or magazines, or a set of identical items such as batteries or light bulbs. The <b>LotSize</b> is the number of items in the lot.
     *  <br/><br/>
     *  A fixed-price listing can have multiple lots available for purchase, but if this is the case, each lot available in that listing should be identical (instead of a mixed collection of items). So, if a fixed-price listing has multiple lots available for purchase, the number of lots available for purchase is shown in the <b>Item.Quantity</b> field.
     *  <br/><br/>
     *  Not all eBay listing categories support lot-based listings. To see which eBay listing categories do not support lot-based listing, a user can use the Trading API's <b>GetCategories</b> call and then look for any <b>Category.LSD</b> tags (with value of <code>true</code>) that are returned in the response.
     *
     * @var int $lotSize
     */
    private $lotSize = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') is no longer a valid item condition in the Cell Phones & Smartphones category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include 'Excellent - Refurbished' (condition ID 2010), 'Very Good - Refurbished' (condition ID 2020), and 'Good - Refurbished' (condition ID 2030).
     *  </span>
     *  A numeric identifier that represents the condition of an item. These numeric IDs can vary by eBay category, but many are the same across categories. For example, <code>1000</code> indicates an item in <em>New</em> condition, <code>3000</code> indicates an item in <em>Used</em> condition, and <code>5000</code> indicates an item in <em>Good</em> condition.
     *  <br/><br/>
     *  This field will get returned for most listings since most eBay listing categories require an item condition, but this field may not get returned for listings in eBay categories that don't require an item condition. A <b>ConditionID</b> value always maps to a text-based description of the condition, and this display text is shown in the <b>ConditionDisplayName</b> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @var int $conditionID
     */
    private $conditionID = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') is no longer a valid item condition in the Cell Phones & Smartphones category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include 'Excellent - Refurbished' (condition ID 2010), 'Very Good - Refurbished' (condition ID 2020), and 'Good - Refurbished' (condition ID 2030).
     *  </span>
     *  The user-friendly display name for the item condition, such as <em>New</em>, <em>Like New</em> <em>Used</em>, or <em>Good</em>. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).
     *  <br>
     *  <br>
     *  <b>ConditionDisplayName</b> values all map to <b>ConditionID</b> values, but keep in mind that based on the eBay category, some item conditions can have the same <b>ConditionID</b>, but a slightly different <b>ConditionDisplayName</b>. For example, a <b>ConditionID</b> value of <code>1000</code> typically indicates an item in new condtion, but the text displayed in the <b>ConditionDisplayName</b> can be just <em>New</em>, or some categories will show <em>Brand New</em>, <em>New with tags</em>, or <em>New with box</em>.
     *  <br/><br/>
     *  This field will get returned for most listings since most eBay listing categories require an item condition, but this field may not get returned for listings in eBay categories that don't require an item condition. A <b>ConditionDisplayName</b> value always maps to a text-based description of the condition, and this Condition ID is shown in the <b>ConditionID</b> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @var string $conditionDisplayName
     */
    private $conditionDisplayName = null;

    /**
     * The enumeration returned in this field indicates if the listing displays a 'quantity available' hint on the View Item page. For example, the View Item page may say 'Limited quantity available', or it may say 'More than 10 available'. It is up to the seller of the listing whether or not to included a 'quantity available' hint in the listing. The 'quantity available' feature is used by the seller that prefers not to show the actual quantity available for purchase.
     *  <br/><br/>
     *  This field is only applicable to multiple-quantity, fixed-price listings, and will only be returned if the seller set this feature on the listing.
     *
     * @var string $quantityAvailableHint
     */
    private $quantityAvailableHint = null;

    /**
     * This field works together with the 'quantity available' feature. This integer value in this field controls whether the 'quantity available' hint on the View Item page will say 'Limited quantity available' or 'More than <em>N</em> available'. If this threshold value is '10', and the quantity available is any number more than 10, the 'quantity available' hint will read 'More than 10 available'. If the quantity available is '10' or less, the 'quantity available' hint will read 'Limited quantity available'.
     *
     * @var int $quantityThreshold
     */
    private $quantityThreshold = null;

    /**
     * This container provides information for an item that has a Strikethrough Price
     *  (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br > <br >
     *  Discount pricing is available to qualified sellers (and their associated developers) who
     *  participate in the Discount Pricing Program. Once qualified, sellers receive a
     *  "special account flag" (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation listings.
     *
     * @var \Nogrod\eBaySDK\Shopping\DiscountPriceInfoType $discountPriceInfo
     */
    private $discountPriceInfo = null;

    /**
     * An <b>ExcludeShipToLocation</b> field is returned for each geographical region, country, state/province, city, or other special domestic location that the seller has added to their 'Excluded shipping locations' list. Sellers can exclude shipping locations through the Shipping preferences in My eBay, through a Shipping Business Policy that is associated with the listing, or through an Add/Revise/Relist call in the Trading API. Buyers in excluded shipping locations will be blocked from buying the item. If a seller has not created an 'Exclusion list' through any of the three means discussion below, no <b>ExcludeShipToLocation</b> fields are returned.
     *  <br><br>
     *  Geographical regions include the continents, as well as other geographical regions like the 'Middle East' or 'Southeast Asia'. Individual countries are represented by the two-digit ISO 3166-1 values. Special domestic regions will vary by country, but for the US, these value include 'Alaska/Hawaii', 'US Protectorates', and 'PO Boxes'.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocations</b> to create a set of international countries and regions to where the seler will, and will not, ship. These values should not contradict one another.
     *
     * @var string[] $excludeShipToLocation
     */
    private $excludeShipToLocation = [
        
    ];

    /**
     * This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only available on the US, UK, and Germany sites. See the
     *  <a href="http://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a href="http://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on the overall program can be found on the <a href="http://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center.
     *  <br><br>
     *  This field is not returned if <code>false</code>.
     *
     * @var bool $topRatedListing
     */
    private $topRatedListing = null;

    /**
     * This field is returned with the URL to the Vehicle History Report if the seller has made one available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable.
     *
     * @var string $vhrUrl
     */
    private $vhrUrl = null;

    /**
     * This field is returned as <code>true</code> if a Vehicle History Report is available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable. The URL to the Vehicle History Report can be found in the <b>VhrUrl</b> field.
     *
     * @var bool $vhrAvailable
     */
    private $vhrAvailable = null;

    /**
     * This container consists of the <b>MinimumRemnantSet</b>
     *  field, which indicates the minimum amount of event tickets that can
     *  remain in the fixed-price listing's inventory after a buyer
     *  purchases one or more tickets (but not all) from the listing.
     *  <br/><br/>
     *  This field is currently only applicable for event ticket listings in
     *  US and CA, but may apply to other categories in the future. It is
     *  only returned if set by the seller in the listing.
     *
     * @var \Nogrod\eBaySDK\Shopping\QuantityInfoType $quantityInfo
     */
    private $quantityInfo = null;

    /**
     * Contains information about the weight, volume or other quantity measurement of a listed item so buyers can compare per-unit prices. The European Union requires listings for certain types of products to include the price per unit. eBay uses this information and the item's listed price to calculate and display the unit price on eBay EU sites.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This information is currently required only for business sellers, and only for listings with a 'Buy It Now' option.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\UnitInfoType $unitInfo
     */
    private $unitInfo = null;

    /**
     * This boolean field is returned as <code>true</code> if eBay's Global Shipping Program is an option for international shipping. With eBay's Global Shipping Program, the seller ships the item to that country's eBay shipping partner, and then eBay's shipping partner handles all aspects of the international leg of the shipment, including any export or import charges.
     *  <br/><br/>
     *  In addition to making the Global Shipping Program available for international shipment, the seller can also specify up to four other international shipping service options. This may be necessay if the shipment is going to a country where the Global Shipping Program is not available.
     *  <br/><br/>
     *  If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying one or more international shipping service options to serve those countries that the seller is willing to ship items.
     *
     * @var bool $globalShipping
     */
    private $globalShipping = null;

    /**
     * This string field is used by the seller to more clearly describe the condition of items that are not brand new.
     *  <br><br>
     *  The <b>ConditionDescription</b> field is available for all
     *  categories, including categories where the condition type is not applicable
     *  (e.g., Antiques). This field is applicable for all item conditions except
     *  "New", "Brand New", "New with tags", and "New in box". If
     *  <b>ConditionDescription</b> is used with these conditions (Condition
     *  IDs 1000-1499), eBay will simply ignore this field if included, and eBay will
     *  return a warning message to the user.
     *  <br><br>
     *  This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another.
     *  <br><br>
     *  The <b>ConditionDescription</b> field is only returned if a condition description is specified in the listing.
     *
     * @var string $conditionDescription
     */
    private $conditionDescription = null;

    /**
     * This integer value indicates the number of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. The compatible vehicle list is shown in the <strong>ItemCompatibilityList</strong> container.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @var int $itemCompatibilityCount
     */
    private $itemCompatibilityCount = null;

    /**
     * A list of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. Compatible vehicles are expressed through a set of name-value pairs with aspects such as 'Year, 'Make', 'Model', 'Trim', and 'Engine'. Each set of values describe the specific vehicle, such as a '2016 Honda Accord'.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @var \Nogrod\eBaySDK\Shopping\ItemCompatibilityType[] $itemCompatibilityList
     */
    private $itemCompatibilityList = null;

    /**
     * This integer value indicates the quantity of items sold for the listing through the In-Store Pickup or Click and Collect option. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is always returned even if its value is '0'.
     *  <br>
     *  <br>
     *  If the <strong>QuantitySoldByPickupInStore</strong> value is greater than '0', this value (along with the value in <strong>QuantitySold</strong>) should be subtracted from the value in the <strong>Quantity</strong> field to get the accurate quantity that is available for purchase.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong>, the <strong>QuantitySoldByPickupInStore</strong>, and <strong>QuantitySold</strong> field values will reflect the quantity and quantity sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the user will look at the <strong>Variation.SellingStatus.QuantitySoldByPickupInStore</strong> fields to get the quantity sold for each item variation in the listing through the In-Store Pickup option.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *
     * @var int $quantitySoldByPickupInStore
     */
    private $quantitySoldByPickupInStore = null;

    /**
     * A SKU (stock keeping unit) value is a seller-defined identifier of a product within their inventory. Some sellers use product SKUs to track complex flows of products and information on the client side. A seller can specify a SKU value for a product (or for all variations within a multiple-variation listing) when creating a listing. eBay preserves the SKU values, and the SKU value becomes another way to identify the product/listing, and another way to track orders associated with the SKU value.
     *  <br>
     *  <br>
     *  A SKU is not required to be unique across an eBay marketplace, but a seller cannot have any active listings or variations within a multiple-variation listing that have the same SKU value. The seller will be blocked from listing, revising, or relisting with a SKU value that is already associated with an active listing.
     *  <br>
     *  <br>
     *  The <b>SKU</b> field, if defined for a single-variation listing, will be returned if the <b>IncludeSelector</b> field is set to <code>Details</code>. For multi-variation listings, the SKU value for each variation (if defined) will actually be returned in the <b>Variation.SKU</b> field, and to return variations data, the user must include the <b>IncludeSelector</b> field and set it to <code>Variations</code>.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @var bool $newBestOffer
     */
    private $newBestOffer = null;

    /**
     * The eBay Now delivery option is no longer available, so this field is no longer applicable.
     *
     * @var bool $eBayNowEligible
     */
    private $eBayNowEligible = null;

    /**
     * The eBay Now delivery option is no longer available, so this field is no longer applicable.
     *
     * @var bool $eBayNowAvailable
     */
    private $eBayNowAvailable = null;

    /**
     * This field is only be returned (as <code>true</code>) in the case where an order line item in a listing is only available to buyers through a local fulfillment method such as In-Store Pickup or Click and Collect. And if a listing is truly a <em>local fulfillment only</em> listing, the value in the <b>Item.Quantity</b> field (for single-variation listings) or the <b>Variation.Quantity</b> field (for multi-variation listings) defaults to <code>0</code> even though the quantity available is technically not zero, since the order line item in the listing is still available through one or more local fulfillment methods.
     *
     * @var bool $ignoreQuantity
     */
    private $ignoreQuantity = null;

    /**
     * If this field is returned as <code>true</code>, the order line item is enabled with the 'Click and Collect' feature. With Click and Collect, buyers are able to purchase an order line item on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK.
     *  <br/><br/>
     *  The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *  <br>
     *  <br>
     *  Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a specific category on these eBay sites support Click and Collect listings, use the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b> values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field.
     *  <br/><br/>
     *  Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var bool $availableForPickupDropOff
     */
    private $availableForPickupDropOff = null;

    /**
     * This boolean field is returned as <code>true</code> if the listing category supports 'Click and Collect' listings. A <code>true</code> value does not necessarily mean that the seller has enabled the item with the Click and Collect feature. A listing is enabled with the Click and Collect feature if the <b>AvailableForPickupDropOff</b> field is returned as <code>true</code>.
     *  <br>
     *  <br>
     *  With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *
     * @var bool $eligibleForPickupDropOff
     */
    private $eligibleForPickupDropOff = null;

    /**
     * Gets as bestOfferEnabled
     *
     * This boolean field indicates whether the seller will accept a Best Offer for the item. The Best Offer feature allows a buyer to propose a price that is lower than the fixed price or lower than the current bid price on an auction listing. A buyer should consider their Best Offer as a binding offer, and if the seller accepts the offer, that buyer is expected to purchase the item (and is actually charged immediately if the listing is set up for immediate payment.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no longer be applicable once the listing receives its first qualifying bid.
     *  </span>
     *
     * @return bool
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * This boolean field indicates whether the seller will accept a Best Offer for the item. The Best Offer feature allows a buyer to propose a price that is lower than the fixed price or lower than the current bid price on an auction listing. A buyer should consider their Best Offer as a binding offer, and if the seller accepts the offer, that buyer is expected to purchase the item (and is actually charged immediately if the listing is set up for immediate payment.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no longer be applicable once the listing receives its first qualifying bid.
     *  </span>
     *
     * @param bool $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as buyItNowPrice
     *
     * This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the eBay site's country. If an interested international buyer wants to view the Buy It Now price in their country's currency, that buyer should view the <b>ConvertedBuyItNowPrice</b> field instead.
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note that it is possible that the <b>BuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when <code>true</code>.
     *  <br>
     *  <br />
     *  To see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>CurrentPrice</b> or <b>ConvertedCurrentPrice</b> fields instead.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getBuyItNowPrice()
    {
        return $this->buyItNowPrice;
    }

    /**
     * Sets a new buyItNowPrice
     *
     * This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the eBay site's country. If an interested international buyer wants to view the Buy It Now price in their country's currency, that buyer should view the <b>ConvertedBuyItNowPrice</b> field instead.
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note that it is possible that the <b>BuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when <code>true</code>.
     *  <br>
     *  <br />
     *  To see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>CurrentPrice</b> or <b>ConvertedCurrentPrice</b> fields instead.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $buyItNowPrice
     * @return self
     */
    public function setBuyItNowPrice(\Nogrod\eBaySDK\Shopping\AmountType $buyItNowPrice)
    {
        $this->buyItNowPrice = $buyItNowPrice;
        return $this;
    }

    /**
     * Gets as description
     *
     * The seller's description of the listing. This field is only returned if the <b>IncludeSelector</b> field is included in the call request, and its value is set to either <code>TextDescription</code> or <code>Description</code>. If the <code>Description</code> value is used, the full description is returned, with all HTML, XML, or CSS markup used in the listing (if any) by the seller. To only view the actual text of the listing description (no markup tags), the <code>TextDescription</code> value shall be used instead.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The seller's description of the listing. This field is only returned if the <b>IncludeSelector</b> field is included in the call request, and its value is set to either <code>TextDescription</code> or <code>Description</code>. If the <code>Description</code> value is used, the full description is returned, with all HTML, XML, or CSS markup used in the listing (if any) by the seller. To only view the actual text of the listing description (no markup tags), the <code>TextDescription</code> value shall be used instead.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing. This will be the same <b>ItemID</b> value that is passed into the call request.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of the eBay listing. This will be the same <b>ItemID</b> value that is passed into the call request.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as buyItNowAvailable
     *
     * This field is only returned if the Buy It Now feature is enabled and available on an active auction listing. This field is only returned if <code>true</code>. With the Buy It Now feature, interested buyers have the option of bypassing the auction procedure, and purchasing the item immediately at the price shown in the <b>BuyItNowPrice</b> field (or in the <b>ConvertedBuyItNowPrice</b> field for international buyers.
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers, and the <b>BuyItNowAvailable</b> field will no longer be returned for the active auction listing.
     *
     * @return bool
     */
    public function getBuyItNowAvailable()
    {
        return $this->buyItNowAvailable;
    }

    /**
     * Sets a new buyItNowAvailable
     *
     * This field is only returned if the Buy It Now feature is enabled and available on an active auction listing. This field is only returned if <code>true</code>. With the Buy It Now feature, interested buyers have the option of bypassing the auction procedure, and purchasing the item immediately at the price shown in the <b>BuyItNowPrice</b> field (or in the <b>ConvertedBuyItNowPrice</b> field for international buyers.
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers, and the <b>BuyItNowAvailable</b> field will no longer be returned for the active auction listing.
     *
     * @param bool $buyItNowAvailable
     * @return self
     */
    public function setBuyItNowAvailable($buyItNowAvailable)
    {
        $this->buyItNowAvailable = $buyItNowAvailable;
        return $this;
    }

    /**
     * Gets as convertedBuyItNowPrice
     *
     * This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the buyer's country. This value and the <b>BuyItNowPrice</b> will be the same for domestic buyers (for example, a US buyer purchasing an item on the US site).
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note that it is possible that the <b>ConvertedBuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when <code>true</code>.
     *  <br />
     *  <br />
     *  To see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>ConvertedCurrentPrice</b> or <b>CurrentPrice</b> fields instead.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getConvertedBuyItNowPrice()
    {
        return $this->convertedBuyItNowPrice;
    }

    /**
     * Sets a new convertedBuyItNowPrice
     *
     * This field is only returned if a seller enabled an auction listing with the Buy It Now feature. Sellers have the option of enabling the Buy It Now feature on auction listings. The price in this field is the price that an interested buyer has to pay if that buyer wishes to bypass the auction procedure, and purchase the item immediately. The price in the field reflects the currency used in the buyer's country. This value and the <b>BuyItNowPrice</b> will be the same for domestic buyers (for example, a US buyer purchasing an item on the US site).
     *  <br />
     *  <br />
     *  Once a qualifying bid is made on an auction listing, the Buy It Now feature ceases being an option to interested buyers. Note that it is possible that the <b>ConvertedBuyItNowPrice</b> field may still get returned even after the Buy It Now feature is disabled, but the <b>BuyItNowAvailable</b> field should stop getting returned, since that field is only returned when <code>true</code>.
     *  <br />
     *  <br />
     *  To see the fixed price for a fixed-price or classified ad listing, or the starting/current bid price for an auction listing, see the <b>ConvertedCurrentPrice</b> or <b>CurrentPrice</b> fields instead.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $convertedBuyItNowPrice
     * @return self
     */
    public function setConvertedBuyItNowPrice(\Nogrod\eBaySDK\Shopping\AmountType $convertedBuyItNowPrice)
    {
        $this->convertedBuyItNowPrice = $convertedBuyItNowPrice;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * For active listings, this timestamp indicates the date and time when the listing is scheduled to end, and for recently ended listings, this timestamp indicates the date and time when the listing actually ended.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * For active listings, this timestamp indicates the date and time when the listing is scheduled to end, and for recently ended listings, this timestamp indicates the date and time when the listing actually ended.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * This timestamp indicates the date and time when the listing started.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * This timestamp indicates the date and time when the listing started.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as viewItemURLForNaturalSearch
     *
     * This field shows the URL to the listing's View Item page on the eBay marketplace.
     *
     * @return string
     */
    public function getViewItemURLForNaturalSearch()
    {
        return $this->viewItemURLForNaturalSearch;
    }

    /**
     * Sets a new viewItemURLForNaturalSearch
     *
     * This field shows the URL to the listing's View Item page on the eBay marketplace.
     *
     * @param string $viewItemURLForNaturalSearch
     * @return self
     */
    public function setViewItemURLForNaturalSearch($viewItemURLForNaturalSearch)
    {
        $this->viewItemURLForNaturalSearch = $viewItemURLForNaturalSearch;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * The enumeration value in this field indicates the format of the listing, such as auction, fixed-price, or classified ad format. See the <a href="types/ListingTypeCodeType.html">ListingTypeCodeType</a> definition to view the supported enumeration values.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * The enumeration value in this field indicates the format of the listing, such as auction, fixed-price, or classified ad format. See the <a href="types/ListingTypeCodeType.html">ListingTypeCodeType</a> definition to view the supported enumeration values.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as location
     *
     * The text string in this field provides the physical location of the item. Generally, this text will show the city and state/province of the item's location, but it may vary, and sometimes only a city will appear, or sometimes acronymns will be used, and other times the full city and state will be spelled out. This gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping charges may be higher the further away that the buyer resides from the shipping location.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The text string in this field provides the physical location of the item. Generally, this text will show the city and state/province of the item's location, but it may vary, and sometimes only a city will appear, or sometimes acronymns will be used, and other times the full city and state will be spelled out. This gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping charges may be higher the further away that the buyer resides from the shipping location.
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the order line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  At this time, if the seller is opted in to eBay managed payments, the available payment methods (which are controlled by eBay and not the seller) may not be returned, but those payment methods will be exposed on the listing's View Item page.
     *  </span>
     *
     * @return self
     * @param string $paymentMethods
     */
    public function addToPaymentMethods($paymentMethods)
    {
        $this->paymentMethods[] = $paymentMethods;
        return $this;
    }

    /**
     * isset paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the order line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  At this time, if the seller is opted in to eBay managed payments, the available payment methods (which are controlled by eBay and not the seller) may not be returned, but those payment methods will be exposed on the listing's View Item page.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMethods($index)
    {
        return isset($this->paymentMethods[$index]);
    }

    /**
     * unset paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the order line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  At this time, if the seller is opted in to eBay managed payments, the available payment methods (which are controlled by eBay and not the seller) may not be returned, but those payment methods will be exposed on the listing's View Item page.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMethods($index)
    {
        unset($this->paymentMethods[$index]);
    }

    /**
     * Gets as paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the order line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  At this time, if the seller is opted in to eBay managed payments, the available payment methods (which are controlled by eBay and not the seller) may not be returned, but those payment methods will be exposed on the listing's View Item page.
     *  </span>
     *
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * Sets a new paymentMethods
     *
     * Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the order line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  At this time, if the seller is opted in to eBay managed payments, the available payment methods (which are controlled by eBay and not the seller) may not be returned, but those payment methods will be exposed on the listing's View Item page.
     *  </span>
     *
     * @param string $paymentMethods
     * @return self
     */
    public function setPaymentMethods(array $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    /**
     * Gets as galleryURL
     *
     * This field shows the URL to the thumbnail-size image of the listing's Gallery picture. The 'Gallery Picture' is the picture that displays by default when a user first visits a listing's View Item page.
     *  <br>
     *  <br>
     *  eBay listing images must be one of the following image formats: JPEG, BMP, TIF, or GIF.
     *  <br>
     *  <br>
     *  This field is generally always returned as long as the seller is using eBay's picture server (also known as EPS) to host the listing's images.
     *
     * @return string
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }

    /**
     * Sets a new galleryURL
     *
     * This field shows the URL to the thumbnail-size image of the listing's Gallery picture. The 'Gallery Picture' is the picture that displays by default when a user first visits a listing's View Item page.
     *  <br>
     *  <br>
     *  eBay listing images must be one of the following image formats: JPEG, BMP, TIF, or GIF.
     *  <br>
     *  <br>
     *  This field is generally always returned as long as the seller is using eBay's picture server (also known as EPS) to host the listing's images.
     *
     * @param string $galleryURL
     * @return self
     */
    public function setGalleryURL($galleryURL)
    {
        $this->galleryURL = $galleryURL;
        return $this;
    }

    /**
     * Adds as pictureURL
     *
     * This field shows the URL to a full-size version of one image associated with the eBay listing. A <b>PictureURL</b> field is returned for each image in the eBay listing. At least one <b>PictureURL</b> field is always returned since every eBay listing must have at least one picture.
     *  <br>
     *  <br>
     *  Many eBay categories support up to 12 pictures, and motor vehicle categories support up to 24 pictures.
     *
     * @return self
     * @param string $pictureURL
     */
    public function addToPictureURL($pictureURL)
    {
        $this->pictureURL[] = $pictureURL;
        return $this;
    }

    /**
     * isset pictureURL
     *
     * This field shows the URL to a full-size version of one image associated with the eBay listing. A <b>PictureURL</b> field is returned for each image in the eBay listing. At least one <b>PictureURL</b> field is always returned since every eBay listing must have at least one picture.
     *  <br>
     *  <br>
     *  Many eBay categories support up to 12 pictures, and motor vehicle categories support up to 24 pictures.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureURL($index)
    {
        return isset($this->pictureURL[$index]);
    }

    /**
     * unset pictureURL
     *
     * This field shows the URL to a full-size version of one image associated with the eBay listing. A <b>PictureURL</b> field is returned for each image in the eBay listing. At least one <b>PictureURL</b> field is always returned since every eBay listing must have at least one picture.
     *  <br>
     *  <br>
     *  Many eBay categories support up to 12 pictures, and motor vehicle categories support up to 24 pictures.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureURL($index)
    {
        unset($this->pictureURL[$index]);
    }

    /**
     * Gets as pictureURL
     *
     * This field shows the URL to a full-size version of one image associated with the eBay listing. A <b>PictureURL</b> field is returned for each image in the eBay listing. At least one <b>PictureURL</b> field is always returned since every eBay listing must have at least one picture.
     *  <br>
     *  <br>
     *  Many eBay categories support up to 12 pictures, and motor vehicle categories support up to 24 pictures.
     *
     * @return string[]
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * This field shows the URL to a full-size version of one image associated with the eBay listing. A <b>PictureURL</b> field is returned for each image in the eBay listing. At least one <b>PictureURL</b> field is always returned since every eBay listing must have at least one picture.
     *  <br>
     *  <br>
     *  Many eBay categories support up to 12 pictures, and motor vehicle categories support up to 24 pictures.
     *
     * @param string[] $pictureURL
     * @return self
     */
    public function setPictureURL(array $pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * This string value is the postal code (or zip code) of the item's physical location. Knowing the location gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping charges may be higher the further away that the buyer resides from the shipping location.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> As of late January 2020, the displayed postal code returned in <b>GetSingleItem</b> and <b>GetMultipleItems</b> is now masked to all users except for the seller of the item. Different countries will mask postal/zip codes in slightly different ways, but an example would be <code>951**</code>.
     *  </span>
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * This string value is the postal code (or zip code) of the item's physical location. Knowing the location gives the buyer a general indication of where the item will be shipped from, and if calculated shipping is used, shipping charges may be higher the further away that the buyer resides from the shipping location.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> As of late January 2020, the displayed postal code returned in <b>GetSingleItem</b> and <b>GetMultipleItems</b> is now masked to all users except for the seller of the item. Different countries will mask postal/zip codes in slightly different ways, but an example would be <code>951**</code>.
     *  </span>
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as primaryCategoryID
     *
     * The unique identifier of the eBay listing's primary category. This field is always returned. Some listings are shown in an additional secondary category, and if this is the case, the unique identifier of the secondary category is shown in the <b>SecondaryCategoryID</b> field.
     *
     * @return string
     */
    public function getPrimaryCategoryID()
    {
        return $this->primaryCategoryID;
    }

    /**
     * Sets a new primaryCategoryID
     *
     * The unique identifier of the eBay listing's primary category. This field is always returned. Some listings are shown in an additional secondary category, and if this is the case, the unique identifier of the secondary category is shown in the <b>SecondaryCategoryID</b> field.
     *
     * @param string $primaryCategoryID
     * @return self
     */
    public function setPrimaryCategoryID($primaryCategoryID)
    {
        $this->primaryCategoryID = $primaryCategoryID;
        return $this;
    }

    /**
     * Gets as primaryCategoryName
     *
     * This string field shows the full category path (using category names) to the primary listing category, starting with the L1 category and ending with the name of the primary listing category. This is a fully qualified category breadcrumb (e.g., Cell Phones & Accessories:Cell Phones & Smartphones).
     *
     * @return string
     */
    public function getPrimaryCategoryName()
    {
        return $this->primaryCategoryName;
    }

    /**
     * Sets a new primaryCategoryName
     *
     * This string field shows the full category path (using category names) to the primary listing category, starting with the L1 category and ending with the name of the primary listing category. This is a fully qualified category breadcrumb (e.g., Cell Phones & Accessories:Cell Phones & Smartphones).
     *
     * @param string $primaryCategoryName
     * @return self
     */
    public function setPrimaryCategoryName($primaryCategoryName)
    {
        $this->primaryCategoryName = $primaryCategoryName;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of the item available for purchase when the seller created, revised, or relisted the item. An auction listing always has a <strong>Quantity</strong> value of <code>1</code>, but a fixed-price listing can have multiple quantity of an item.
     *  <br>
     *  <br>
     *  In a multiple-quantity, fixed-price listing, the user must also look at the <strong>QuantitySold</strong> field, and if the value of this field is an integer value greater than '0', that integer value should be subtracted from the value in the <strong>Quantity</strong> field. So, if the <strong>Quantity</strong> field shows a value of '7', and the <strong>QuantitySold</strong> field shows a value of '3', the quantity available is actually '4' (7 - 3 = 4).
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>Quantity</strong> field is always returned except in the case of a multiple-variation listing, and the user sets the <strong>IncludeSelector</strong> filter to <code>Variations</code>. In this particular case, the (listing-level) <strong>Quantity</strong> field is not returned, and instead, the user will look at the <strong>Variation.Quantity</strong> and <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item variation in the listing. If the user retrieves a multiple-variation listing, but does not set the <strong>IncludeSelector</strong> filter to <code>Variations</code>, the listing-level <strong>Quantity</strong> and <strong>QuantitySold</strong> fields are returned, and these fields' values will be the cumulative values of all item variations in the listing.
     *  </span>
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  As mentioned earlier, an auction listing can only have a quantity of '1', but a lot-based auction listing can have multiple identical/similar items sold as one unit for one price. For example, instead of listing 10 light bulbs for US 2.00 each, they might list 10 light bulbs for USD 20.00 (where you have to buy all 10). For lot-based listings (which are also supported by the fixed-price format), the number of identical/similar items in the 'lot' is shown in the <strong>LotSize</strong> field. The seller is also expected to summarize all items in the lot in the <strong>Description</strong> field.
     *  </span>
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of the item available for purchase when the seller created, revised, or relisted the item. An auction listing always has a <strong>Quantity</strong> value of <code>1</code>, but a fixed-price listing can have multiple quantity of an item.
     *  <br>
     *  <br>
     *  In a multiple-quantity, fixed-price listing, the user must also look at the <strong>QuantitySold</strong> field, and if the value of this field is an integer value greater than '0', that integer value should be subtracted from the value in the <strong>Quantity</strong> field. So, if the <strong>Quantity</strong> field shows a value of '7', and the <strong>QuantitySold</strong> field shows a value of '3', the quantity available is actually '4' (7 - 3 = 4).
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>Quantity</strong> field is always returned except in the case of a multiple-variation listing, and the user sets the <strong>IncludeSelector</strong> filter to <code>Variations</code>. In this particular case, the (listing-level) <strong>Quantity</strong> field is not returned, and instead, the user will look at the <strong>Variation.Quantity</strong> and <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item variation in the listing. If the user retrieves a multiple-variation listing, but does not set the <strong>IncludeSelector</strong> filter to <code>Variations</code>, the listing-level <strong>Quantity</strong> and <strong>QuantitySold</strong> fields are returned, and these fields' values will be the cumulative values of all item variations in the listing.
     *  </span>
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  As mentioned earlier, an auction listing can only have a quantity of '1', but a lot-based auction listing can have multiple identical/similar items sold as one unit for one price. For example, instead of listing 10 light bulbs for US 2.00 each, they might list 10 light bulbs for USD 20.00 (where you have to buy all 10). For lot-based listings (which are also supported by the fixed-price format), the number of identical/similar items in the 'lot' is shown in the <strong>LotSize</strong> field. The seller is also expected to summarize all items in the lot in the <strong>Description</strong> field.
     *  </span>
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as seller
     *
     * This container provides a few details about the listing's seller, including the seller's eBay user ID, Feedback Score, and Positive Feedback Percentage. This container is only returned if <strong>IncludeSelector</strong> is included in the request and set to <code>Details</code>.
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleUserType
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Sets a new seller
     *
     * This container provides a few details about the listing's seller, including the seller's eBay user ID, Feedback Score, and Positive Feedback Percentage. This container is only returned if <strong>IncludeSelector</strong> is included in the request and set to <code>Details</code>.
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleUserType $seller
     * @return self
     */
    public function setSeller(\Nogrod\eBaySDK\Shopping\SimpleUserType $seller)
    {
        $this->seller = $seller;
        return $this;
    }

    /**
     * Gets as bidCount
     *
     * This integer value indicates the number of bids that have been placed on an auction item. This field is only applicable to auction listings, but it is always returned for all listings, and its value will be '0' if bids are not applicable to the listing.
     *
     * @return int
     */
    public function getBidCount()
    {
        return $this->bidCount;
    }

    /**
     * Sets a new bidCount
     *
     * This integer value indicates the number of bids that have been placed on an auction item. This field is only applicable to auction listings, but it is always returned for all listings, and its value will be '0' if bids are not applicable to the listing.
     *
     * @param int $bidCount
     * @return self
     */
    public function setBidCount($bidCount)
    {
        $this->bidCount = $bidCount;
        return $this;
    }

    /**
     * Gets as convertedCurrentPrice
     *
     * In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the user's country. In an active auction listing, this field's value reflects the current bid price for the auction item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> field instead if that user is interested in skipping the auction process and buying that item immediately.
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to <code>Variations</code>, the <strong>ConvertedCurrentPrice</strong> field is still returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the <strong>ConvertedCurrentPrice</strong> field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to individual <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getConvertedCurrentPrice()
    {
        return $this->convertedCurrentPrice;
    }

    /**
     * Sets a new convertedCurrentPrice
     *
     * In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the user's country. In an active auction listing, this field's value reflects the current bid price for the auction item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> field instead if that user is interested in skipping the auction process and buying that item immediately.
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to <code>Variations</code>, the <strong>ConvertedCurrentPrice</strong> field is still returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the <strong>ConvertedCurrentPrice</strong> field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to individual <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $convertedCurrentPrice
     * @return self
     */
    public function setConvertedCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType $convertedCurrentPrice)
    {
        $this->convertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }

    /**
     * Gets as currentPrice
     *
     * In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the listing site's country. In an active auction listing, this field's value reflects the current bid price for the auction item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> (or <b>ConvertedBuyItNowPrice</b>) field instead if that user is interested in skipping the auction process and buying that item immediately.
     *  <br />
     *  <br />
     *  This field is only returned if the <b>IncludeSelector</b> field is included and set to <code>Details</code>. Alternatively, the user can view the <b>ConvertedCurrentPrice</b> field, as this field shows the price in the currency of the user's country, and it is always returned.
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to <code>Variations</code>, the <b>CurrentPrice</b> is not returned, but the <strong>ConvertedCurrentPrice</strong> field is returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the <strong>ConvertedCurrentPrice</strong> field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to individual <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * Sets a new currentPrice
     *
     * In a fixed-price or classified ad listing, this price is the current price of the item, shown in the currency of the listing site's country. In an active auction listing, this field's value reflects the current bid price for the auction item, so any submitted bids must be above this value. If the Buy It Now feature is available for an auction item (look for <b>BuyItNowAvailable</b> field), the user will want to look at the <b>ConvertedBuyItNowPrice</b> (or <b>ConvertedBuyItNowPrice</b>) field instead if that user is interested in skipping the auction process and buying that item immediately.
     *  <br />
     *  <br />
     *  This field is only returned if the <b>IncludeSelector</b> field is included and set to <code>Details</code>. Alternatively, the user can view the <b>ConvertedCurrentPrice</b> field, as this field shows the price in the currency of the user's country, and it is always returned.
     *  <br />
     *  <br />
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the user retrieves a multiple-variation listing, and the <strong>IncludeSelector</strong> filter is set to <code>Variations</code>, the <b>CurrentPrice</b> is not returned, but the <strong>ConvertedCurrentPrice</strong> field is returned, but its value will reflect the lowest-priced item variation. So, if the multiple-variation listing has item variations priced from 7.99 to 12.99, the <strong>ConvertedCurrentPrice</strong> field's value will show '7.99'. If the price of all item variations are the same, the <strong>ConvertedCurrentPrice</strong> field value will be accurate, but it is recommended that the user scan down to individual <strong>Variation.StartPrice</strong> fields to get the accurate price for all item variations.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $currentPrice
     * @return self
     */
    public function setCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType $currentPrice)
    {
        $this->currentPrice = $currentPrice;
        return $this;
    }

    /**
     * Gets as highBidder
     *
     * This container provides a few details about the current high bidder for an active auction listing, or the winning bidder for a completed auction listing. This container is only returned for auction listings with at least one bid, and only if the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>. The high bidder details include the bidder's eBay user ID and Feedback Score. For the <strong>GetItemStatus</strong> call, only the eBay user ID is returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The eBay user ID and the Feedback data will actually be obfuscated to all users except for the owner (seller) of the listing, so essentially, the <strong>HighBidder</strong> container only has value to the seller of the listing.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleUserType
     */
    public function getHighBidder()
    {
        return $this->highBidder;
    }

    /**
     * Sets a new highBidder
     *
     * This container provides a few details about the current high bidder for an active auction listing, or the winning bidder for a completed auction listing. This container is only returned for auction listings with at least one bid, and only if the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>. The high bidder details include the bidder's eBay user ID and Feedback Score. For the <strong>GetItemStatus</strong> call, only the eBay user ID is returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The eBay user ID and the Feedback data will actually be obfuscated to all users except for the owner (seller) of the listing, so essentially, the <strong>HighBidder</strong> container only has value to the seller of the listing.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleUserType $highBidder
     * @return self
     */
    public function setHighBidder(\Nogrod\eBaySDK\Shopping\SimpleUserType $highBidder)
    {
        $this->highBidder = $highBidder;
        return $this;
    }

    /**
     * Gets as listingStatus
     *
     * This enumeration value indicates the current status of the listing. The three different listing states are discussed below.
     *
     * @return string
     */
    public function getListingStatus()
    {
        return $this->listingStatus;
    }

    /**
     * Sets a new listingStatus
     *
     * This enumeration value indicates the current status of the listing. The three different listing states are discussed below.
     *
     * @param string $listingStatus
     * @return self
     */
    public function setListingStatus($listingStatus)
    {
        $this->listingStatus = $listingStatus;
        return $this;
    }

    /**
     * Gets as quantitySold
     *
     * This integer value indicates the quantity of items sold for the listing. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is always returned even if its value is '0'.
     *  <br>
     *  <br>
     *  If the <strong>QuantitySold</strong> value is greater than '0', this value should be subtracted from the value in the <strong>Quantity</strong> field to get the accurate quantity that is available for purchase.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong> and <strong>QuantitySold</strong> field values will reflect the quantity and quantity sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the user will look at the <strong>Variation.Quantity</strong> and <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item variation in the listing.
     *  </span>
     *
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * Sets a new quantitySold
     *
     * This integer value indicates the quantity of items sold for the listing. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is always returned even if its value is '0'.
     *  <br>
     *  <br>
     *  If the <strong>QuantitySold</strong> value is greater than '0', this value should be subtracted from the value in the <strong>Quantity</strong> field to get the accurate quantity that is available for purchase.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong> and <strong>QuantitySold</strong> field values will reflect the quantity and quantity sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the user will look at the <strong>Variation.Quantity</strong> and <strong>Variation.SellingStatus.QuantitySold</strong> fields to get the quantity available for each item variation in the listing.
     *  </span>
     *
     * @param int $quantitySold
     * @return self
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
        return $this;
    }

    /**
     * Gets as reserveMet
     *
     * This boolean field indicates if the current/highest bid price has matched or exceeded the price set as the Reserve Price by the seller. A Reserve Price is the lowest price at which the seller is willing to sell
     *  the item through an auction. If the highest bid does not meet or exceed the Reserve Price, the auction listing will end without a sale (winning bidder) when the scheduled end time is reached.
     *  <br>
     *  <br>
     *  The Reserve Price must be higher than the starting bid price, but lower than the Buy It Now price (if one is set). This field is only applicable to auction listings, and only returned for auction listings if the seller has set a Reserve Price.
     *
     * @return bool
     */
    public function getReserveMet()
    {
        return $this->reserveMet;
    }

    /**
     * Sets a new reserveMet
     *
     * This boolean field indicates if the current/highest bid price has matched or exceeded the price set as the Reserve Price by the seller. A Reserve Price is the lowest price at which the seller is willing to sell
     *  the item through an auction. If the highest bid does not meet or exceed the Reserve Price, the auction listing will end without a sale (winning bidder) when the scheduled end time is reached.
     *  <br>
     *  <br>
     *  The Reserve Price must be higher than the starting bid price, but lower than the Buy It Now price (if one is set). This field is only applicable to auction listings, and only returned for auction listings if the seller has set a Reserve Price.
     *
     * @param bool $reserveMet
     * @return self
     */
    public function setReserveMet($reserveMet)
    {
        $this->reserveMet = $reserveMet;
        return $this;
    }

    /**
     * Adds as shipToLocations
     *
     * A <strong>ShipToLocations</strong> field is returned for each domestic or international region that the seller is willing to ship the item. At least one <strong>ShipToLocations</strong> field should be returned for every listing. 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocations</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *  <br>
     *  <br>
     *  'Ship-to' locations range from continents and other large geographical regions, such as <code>Africa</code>, <code>Asia</code>, <code>Caribbean</code>, or <code>MiddleEast</code>, all the way down to the state/province level and even cities within those state/provinces. A user will be able to see the international and domestic shipping regions that can be set by looking at the <strong>Shipping rate tables</strong> UI in My eBay. The Trading API's <strong>GeteBayDetails</strong> can also be used to view available shipping locations.
     *  <br>
     *  <br>
     *  If a US seller only ships to domestic locations, the only <strong>ShipToLocations</strong> value that should be returned is <code>US</code>. If a US seller is willing to ship to any location in the world, the only <strong>ShipToLocations</strong> value that should be returned is <code>Worldwide</code>
     *  <br>
     *  <br>
     *  Countries are represented by the two-digit codes defined in the ISO 3166 standard, or these codes can also be found in the <a href="types/CountryCodeType.html">CountryCodeType</a> definition.
     *
     * @return self
     * @param string $shipToLocations
     */
    public function addToShipToLocations($shipToLocations)
    {
        $this->shipToLocations[] = $shipToLocations;
        return $this;
    }

    /**
     * isset shipToLocations
     *
     * A <strong>ShipToLocations</strong> field is returned for each domestic or international region that the seller is willing to ship the item. At least one <strong>ShipToLocations</strong> field should be returned for every listing. 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocations</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *  <br>
     *  <br>
     *  'Ship-to' locations range from continents and other large geographical regions, such as <code>Africa</code>, <code>Asia</code>, <code>Caribbean</code>, or <code>MiddleEast</code>, all the way down to the state/province level and even cities within those state/provinces. A user will be able to see the international and domestic shipping regions that can be set by looking at the <strong>Shipping rate tables</strong> UI in My eBay. The Trading API's <strong>GeteBayDetails</strong> can also be used to view available shipping locations.
     *  <br>
     *  <br>
     *  If a US seller only ships to domestic locations, the only <strong>ShipToLocations</strong> value that should be returned is <code>US</code>. If a US seller is willing to ship to any location in the world, the only <strong>ShipToLocations</strong> value that should be returned is <code>Worldwide</code>
     *  <br>
     *  <br>
     *  Countries are represented by the two-digit codes defined in the ISO 3166 standard, or these codes can also be found in the <a href="types/CountryCodeType.html">CountryCodeType</a> definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToLocations($index)
    {
        return isset($this->shipToLocations[$index]);
    }

    /**
     * unset shipToLocations
     *
     * A <strong>ShipToLocations</strong> field is returned for each domestic or international region that the seller is willing to ship the item. At least one <strong>ShipToLocations</strong> field should be returned for every listing. 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocations</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *  <br>
     *  <br>
     *  'Ship-to' locations range from continents and other large geographical regions, such as <code>Africa</code>, <code>Asia</code>, <code>Caribbean</code>, or <code>MiddleEast</code>, all the way down to the state/province level and even cities within those state/provinces. A user will be able to see the international and domestic shipping regions that can be set by looking at the <strong>Shipping rate tables</strong> UI in My eBay. The Trading API's <strong>GeteBayDetails</strong> can also be used to view available shipping locations.
     *  <br>
     *  <br>
     *  If a US seller only ships to domestic locations, the only <strong>ShipToLocations</strong> value that should be returned is <code>US</code>. If a US seller is willing to ship to any location in the world, the only <strong>ShipToLocations</strong> value that should be returned is <code>Worldwide</code>
     *  <br>
     *  <br>
     *  Countries are represented by the two-digit codes defined in the ISO 3166 standard, or these codes can also be found in the <a href="types/CountryCodeType.html">CountryCodeType</a> definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToLocations($index)
    {
        unset($this->shipToLocations[$index]);
    }

    /**
     * Gets as shipToLocations
     *
     * A <strong>ShipToLocations</strong> field is returned for each domestic or international region that the seller is willing to ship the item. At least one <strong>ShipToLocations</strong> field should be returned for every listing. 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocations</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *  <br>
     *  <br>
     *  'Ship-to' locations range from continents and other large geographical regions, such as <code>Africa</code>, <code>Asia</code>, <code>Caribbean</code>, or <code>MiddleEast</code>, all the way down to the state/province level and even cities within those state/provinces. A user will be able to see the international and domestic shipping regions that can be set by looking at the <strong>Shipping rate tables</strong> UI in My eBay. The Trading API's <strong>GeteBayDetails</strong> can also be used to view available shipping locations.
     *  <br>
     *  <br>
     *  If a US seller only ships to domestic locations, the only <strong>ShipToLocations</strong> value that should be returned is <code>US</code>. If a US seller is willing to ship to any location in the world, the only <strong>ShipToLocations</strong> value that should be returned is <code>Worldwide</code>
     *  <br>
     *  <br>
     *  Countries are represented by the two-digit codes defined in the ISO 3166 standard, or these codes can also be found in the <a href="types/CountryCodeType.html">CountryCodeType</a> definition.
     *
     * @return string[]
     */
    public function getShipToLocations()
    {
        return $this->shipToLocations;
    }

    /**
     * Sets a new shipToLocations
     *
     * A <strong>ShipToLocations</strong> field is returned for each domestic or international region that the seller is willing to ship the item. At least one <strong>ShipToLocations</strong> field should be returned for every listing. 'Ship-to' locations and excluded shipping locations are set by the seller through Shipping Rate Tables in My eBay, through a Shipping/Fulfillment Business Policy associated with a listing, or through the <strong>ShipToLocations</strong> and <strong>ExcludeShipToLocation</strong> fields in an Add/Revise/Relist call in the Trading API.
     *  <br>
     *  <br>
     *  'Ship-to' locations range from continents and other large geographical regions, such as <code>Africa</code>, <code>Asia</code>, <code>Caribbean</code>, or <code>MiddleEast</code>, all the way down to the state/province level and even cities within those state/provinces. A user will be able to see the international and domestic shipping regions that can be set by looking at the <strong>Shipping rate tables</strong> UI in My eBay. The Trading API's <strong>GeteBayDetails</strong> can also be used to view available shipping locations.
     *  <br>
     *  <br>
     *  If a US seller only ships to domestic locations, the only <strong>ShipToLocations</strong> value that should be returned is <code>US</code>. If a US seller is willing to ship to any location in the world, the only <strong>ShipToLocations</strong> value that should be returned is <code>Worldwide</code>
     *  <br>
     *  <br>
     *  Countries are represented by the two-digit codes defined in the ISO 3166 standard, or these codes can also be found in the <a href="types/CountryCodeType.html">CountryCodeType</a> definition.
     *
     * @param string[] $shipToLocations
     * @return self
     */
    public function setShipToLocations(array $shipToLocations)
    {
        $this->shipToLocations = $shipToLocations;
        return $this;
    }

    /**
     * Gets as site
     *
     * This enumeration value indicates the eBay marketplace on which the item was originally listed. For example, if the item is listed on the eBay US site, the value would be <code>US</code>. If it's listed on the eBay Germany site, the value would be <code>Germany</code>.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * This enumeration value indicates the eBay marketplace on which the item was originally listed. For example, if the item is listed on the eBay US site, the value would be <code>US</code>. If it's listed on the eBay Germany site, the value would be <code>Germany</code>.
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as timeLeft
     *
     * The value in this field indicates the precise time left before the listing is scheduled to end. The format used in this field is the format defined in the ISO 8601 duration format standard. See the <a href="types/simpletypes.html#duration">duration</a> simple type definition for more information on syntax/notation used for this type.
     *  <br>
     *  <br>
     *  This field is always returned, even if the listing is in the <code>Completed</code> state. A completed/ended listing will essentially have 0 seconds left, so the <b>Completed</b> value will be <code>PT0S</code>, which indicates '0 seconds' left.
     *
     * @return \DateInterval
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }

    /**
     * Sets a new timeLeft
     *
     * The value in this field indicates the precise time left before the listing is scheduled to end. The format used in this field is the format defined in the ISO 8601 duration format standard. See the <a href="types/simpletypes.html#duration">duration</a> simple type definition for more information on syntax/notation used for this type.
     *  <br>
     *  <br>
     *  This field is always returned, even if the listing is in the <code>Completed</code> state. A completed/ended listing will essentially have 0 seconds left, so the <b>Completed</b> value will be <code>PT0S</code>, which indicates '0 seconds' left.
     *
     * @param \DateInterval $timeLeft
     * @return self
     */
    public function setTimeLeft(\DateInterval $timeLeft)
    {
        $this->timeLeft = $timeLeft;
        return $this;
    }

    /**
     * Gets as title
     *
     * The listing title, as it appears in search results or on the View Item page.
     *  <br />
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The listing title, as it appears in search results or on the View Item page.
     *  <br />
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as shippingCostSummary
     *
     * This container returns a few details of the lowest-priced shipping service option that is available to the eBay user making the call. For Calculated shipping, the item's location and the destination location are considered when calculating the shipping cost.
     *  <br>
     *  <br>
     *  <span class="tablenote">
     *  <strong>Important:</strong> To retrieve detailed information on every shipping service option available that the seller has set for the listing, the <b>GetShippingCosts</b> call is the better call to use, as the <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls only return the <b>ShippingCostSummary</b> container.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType
     */
    public function getShippingCostSummary()
    {
        return $this->shippingCostSummary;
    }

    /**
     * Sets a new shippingCostSummary
     *
     * This container returns a few details of the lowest-priced shipping service option that is available to the eBay user making the call. For Calculated shipping, the item's location and the destination location are considered when calculating the shipping cost.
     *  <br>
     *  <br>
     *  <span class="tablenote">
     *  <strong>Important:</strong> To retrieve detailed information on every shipping service option available that the seller has set for the listing, the <b>GetShippingCosts</b> call is the better call to use, as the <b>GetSingleItem</b> and <b>GetMultipleItems</b> calls only return the <b>ShippingCostSummary</b> container.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary
     * @return self
     */
    public function setShippingCostSummary(\Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary)
    {
        $this->shippingCostSummary = $shippingCostSummary;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This container is a list of Item Specific name-value pairs used by the seller to provide desciptive details of an item in a structured manner. Depending on the eBay category, some Item Specifics are mandatory (including some GTIN values), some are recommended by eBay, and some are fully optional to the seller. A full set of helpful, accurate Item Specifics are always helpful to prospective buyers in assisting them to find and purchase the right product.
     *  <br>
     *  <br>
     *  A book's Item Specifics name-value pairs might include
     *  <code>Publication Year=2017</code> and <code>Format=Hardcover</code>. A motor vehicle's
     *  Item Specifics name-value pairs might include <code>Make=
     *  Toyota</code>, <code>Model=Prius</code>, and <code>Year=2017</code>. An event listing's Item Specifics name-value pairs might include <code>Event Type=Concert</code> and <code>Venue Name=The Fillmore</code>.
     *  <br>
     *  <br>
     *  In order for Item Specifics to be returned, the <b>IncludeSelector</b> must be included in the call request and set to <code>ItemSpecifics</code>. Most eBay listings will include at least a few Item Specifics.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToItemSpecifics(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->itemSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset itemSpecifics
     *
     * This container is a list of Item Specific name-value pairs used by the seller to provide desciptive details of an item in a structured manner. Depending on the eBay category, some Item Specifics are mandatory (including some GTIN values), some are recommended by eBay, and some are fully optional to the seller. A full set of helpful, accurate Item Specifics are always helpful to prospective buyers in assisting them to find and purchase the right product.
     *  <br>
     *  <br>
     *  A book's Item Specifics name-value pairs might include
     *  <code>Publication Year=2017</code> and <code>Format=Hardcover</code>. A motor vehicle's
     *  Item Specifics name-value pairs might include <code>Make=
     *  Toyota</code>, <code>Model=Prius</code>, and <code>Year=2017</code>. An event listing's Item Specifics name-value pairs might include <code>Event Type=Concert</code> and <code>Venue Name=The Fillmore</code>.
     *  <br>
     *  <br>
     *  In order for Item Specifics to be returned, the <b>IncludeSelector</b> must be included in the call request and set to <code>ItemSpecifics</code>. Most eBay listings will include at least a few Item Specifics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecifics($index)
    {
        return isset($this->itemSpecifics[$index]);
    }

    /**
     * unset itemSpecifics
     *
     * This container is a list of Item Specific name-value pairs used by the seller to provide desciptive details of an item in a structured manner. Depending on the eBay category, some Item Specifics are mandatory (including some GTIN values), some are recommended by eBay, and some are fully optional to the seller. A full set of helpful, accurate Item Specifics are always helpful to prospective buyers in assisting them to find and purchase the right product.
     *  <br>
     *  <br>
     *  A book's Item Specifics name-value pairs might include
     *  <code>Publication Year=2017</code> and <code>Format=Hardcover</code>. A motor vehicle's
     *  Item Specifics name-value pairs might include <code>Make=
     *  Toyota</code>, <code>Model=Prius</code>, and <code>Year=2017</code>. An event listing's Item Specifics name-value pairs might include <code>Event Type=Concert</code> and <code>Venue Name=The Fillmore</code>.
     *  <br>
     *  <br>
     *  In order for Item Specifics to be returned, the <b>IncludeSelector</b> must be included in the call request and set to <code>ItemSpecifics</code>. Most eBay listings will include at least a few Item Specifics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecifics($index)
    {
        unset($this->itemSpecifics[$index]);
    }

    /**
     * Gets as itemSpecifics
     *
     * This container is a list of Item Specific name-value pairs used by the seller to provide desciptive details of an item in a structured manner. Depending on the eBay category, some Item Specifics are mandatory (including some GTIN values), some are recommended by eBay, and some are fully optional to the seller. A full set of helpful, accurate Item Specifics are always helpful to prospective buyers in assisting them to find and purchase the right product.
     *  <br>
     *  <br>
     *  A book's Item Specifics name-value pairs might include
     *  <code>Publication Year=2017</code> and <code>Format=Hardcover</code>. A motor vehicle's
     *  Item Specifics name-value pairs might include <code>Make=
     *  Toyota</code>, <code>Model=Prius</code>, and <code>Year=2017</code>. An event listing's Item Specifics name-value pairs might include <code>Event Type=Concert</code> and <code>Venue Name=The Fillmore</code>.
     *  <br>
     *  <br>
     *  In order for Item Specifics to be returned, the <b>IncludeSelector</b> must be included in the call request and set to <code>ItemSpecifics</code>. Most eBay listings will include at least a few Item Specifics.
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * Sets a new itemSpecifics
     *
     * This container is a list of Item Specific name-value pairs used by the seller to provide desciptive details of an item in a structured manner. Depending on the eBay category, some Item Specifics are mandatory (including some GTIN values), some are recommended by eBay, and some are fully optional to the seller. A full set of helpful, accurate Item Specifics are always helpful to prospective buyers in assisting them to find and purchase the right product.
     *  <br>
     *  <br>
     *  A book's Item Specifics name-value pairs might include
     *  <code>Publication Year=2017</code> and <code>Format=Hardcover</code>. A motor vehicle's
     *  Item Specifics name-value pairs might include <code>Make=
     *  Toyota</code>, <code>Model=Prius</code>, and <code>Year=2017</code>. An event listing's Item Specifics name-value pairs might include <code>Event Type=Concert</code> and <code>Venue Name=The Fillmore</code>.
     *  <br>
     *  <br>
     *  In order for Item Specifics to be returned, the <b>IncludeSelector</b> must be included in the call request and set to <code>ItemSpecifics</code>. Most eBay listings will include at least a few Item Specifics.
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $itemSpecifics
     * @return self
     */
    public function setItemSpecifics(array $itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
        return $this;
    }

    /**
     * Gets as hitCount
     *
     * The number of times the listing's View Item page has been viewed (as determined by
     *  eBay). Only returned if the seller has chosen to include a hit counter in the
     *  listing, and if the seller has also chosen to make the listing's hit count publicly
     *  visible. This field is retrieved asynchronously. If you believe the item has a
     *  publicly visible hit count, but this field is not returned, retry the call.
     *
     * @return int
     */
    public function getHitCount()
    {
        return $this->hitCount;
    }

    /**
     * Sets a new hitCount
     *
     * The number of times the listing's View Item page has been viewed (as determined by
     *  eBay). Only returned if the seller has chosen to include a hit counter in the
     *  listing, and if the seller has also chosen to make the listing's hit count publicly
     *  visible. This field is retrieved asynchronously. If you believe the item has a
     *  publicly visible hit count, but this field is not returned, retry the call.
     *
     * @param int $hitCount
     * @return self
     */
    public function setHitCount($hitCount)
    {
        $this->hitCount = $hitCount;
        return $this;
    }

    /**
     * Gets as subtitle
     *
     * The subtitle of the listing. This field is only returned if the seller included a subtitle for the listing and the <b>IncludeSelector</b> is included in the call request and set to <code>Details</code>.
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * The subtitle of the listing. This field is only returned if the seller included a subtitle for the listing and the <b>IncludeSelector</b> is included in the call request and set to <code>Details</code>.
     *
     * @param string $subtitle
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as primaryCategoryIDPath
     *
     * This field shows the full path to the primary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to primary listing category (also referred to as the leaf category). So, if the primary listing category is a Level 4 (L4) category, the Category ID path in this field might look like the following, where '6000' is the L1 category ID, and '6444' is the primary listing category ID:
     *  <br>
     *  <br>
     *  <code><PrimaryCategoryIDPath>6000:6001:6016:6444</PrimaryCategoryIDPath></code>
     *
     * @return string
     */
    public function getPrimaryCategoryIDPath()
    {
        return $this->primaryCategoryIDPath;
    }

    /**
     * Sets a new primaryCategoryIDPath
     *
     * This field shows the full path to the primary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to primary listing category (also referred to as the leaf category). So, if the primary listing category is a Level 4 (L4) category, the Category ID path in this field might look like the following, where '6000' is the L1 category ID, and '6444' is the primary listing category ID:
     *  <br>
     *  <br>
     *  <code><PrimaryCategoryIDPath>6000:6001:6016:6444</PrimaryCategoryIDPath></code>
     *
     * @param string $primaryCategoryIDPath
     * @return self
     */
    public function setPrimaryCategoryIDPath($primaryCategoryIDPath)
    {
        $this->primaryCategoryIDPath = $primaryCategoryIDPath;
        return $this;
    }

    /**
     * Gets as secondaryCategoryID
     *
     * The unique identifier of the eBay listing's secondary category. This field is only returned if the listing is surfacing in a secondary category. The listing's primary category is found in the <b>PrimaryCategoryID</b> field.
     *
     * @return string
     */
    public function getSecondaryCategoryID()
    {
        return $this->secondaryCategoryID;
    }

    /**
     * Sets a new secondaryCategoryID
     *
     * The unique identifier of the eBay listing's secondary category. This field is only returned if the listing is surfacing in a secondary category. The listing's primary category is found in the <b>PrimaryCategoryID</b> field.
     *
     * @param string $secondaryCategoryID
     * @return self
     */
    public function setSecondaryCategoryID($secondaryCategoryID)
    {
        $this->secondaryCategoryID = $secondaryCategoryID;
        return $this;
    }

    /**
     * Gets as secondaryCategoryName
     *
     * This string field shows the full category path (using category names) to the secondary listing category, starting with the L1 category and ending with the name of the secondary listing category. This field is only returned if the listing is surfacing in a secondary category.
     *
     * @return string
     */
    public function getSecondaryCategoryName()
    {
        return $this->secondaryCategoryName;
    }

    /**
     * Sets a new secondaryCategoryName
     *
     * This string field shows the full category path (using category names) to the secondary listing category, starting with the L1 category and ending with the name of the secondary listing category. This field is only returned if the listing is surfacing in a secondary category.
     *
     * @param string $secondaryCategoryName
     * @return self
     */
    public function setSecondaryCategoryName($secondaryCategoryName)
    {
        $this->secondaryCategoryName = $secondaryCategoryName;
        return $this;
    }

    /**
     * Gets as secondaryCategoryIDPath
     *
     * This field shows the full path to the secondary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to secondary listing category. This field is only returned if the listing is surfacing in a secondary category.
     *
     * @return string
     */
    public function getSecondaryCategoryIDPath()
    {
        return $this->secondaryCategoryIDPath;
    }

    /**
     * Sets a new secondaryCategoryIDPath
     *
     * This field shows the full path to the secondary listing category, starting with the Category ID of the Level 1 (L1) category, and all the way to secondary listing category. This field is only returned if the listing is surfacing in a secondary category.
     *
     * @param string $secondaryCategoryIDPath
     * @return self
     */
    public function setSecondaryCategoryIDPath($secondaryCategoryIDPath)
    {
        $this->secondaryCategoryIDPath = $secondaryCategoryIDPath;
        return $this;
    }

    /**
     * Gets as charity
     *
     * This container is returned if any percentage of the sales proceeds is going to a nonprofit organization that is registered with eBay for Charity. This container consists of details related to the nonprofit charity organization, including the name, mission, and unique identifier of the charity, as well as the percentage rate of the sale proceeds that will go to the charity for each sale.
     *  <br>
     *  <br>
     *  This container is not returned for non-charitable listings.
     *
     * @return \Nogrod\eBaySDK\Shopping\CharityType
     */
    public function getCharity()
    {
        return $this->charity;
    }

    /**
     * Sets a new charity
     *
     * This container is returned if any percentage of the sales proceeds is going to a nonprofit organization that is registered with eBay for Charity. This container consists of details related to the nonprofit charity organization, including the name, mission, and unique identifier of the charity, as well as the percentage rate of the sale proceeds that will go to the charity for each sale.
     *  <br>
     *  <br>
     *  This container is not returned for non-charitable listings.
     *
     * @param \Nogrod\eBaySDK\Shopping\CharityType $charity
     * @return self
     */
    public function setCharity(\Nogrod\eBaySDK\Shopping\CharityType $charity)
    {
        $this->charity = $charity;
        return $this;
    }

    /**
     * Gets as germanMotorsSearchable
     *
     * This field is returned (as <code>true</code>) if an eBay Germany motor vehicle listing has an upgrade that allows the motor vehicle listing to appear on the <b>mobile.de</b> partner site. This field is only applicable to eBay Germany motor vehicle listings.
     *
     * @return bool
     */
    public function getGermanMotorsSearchable()
    {
        return $this->germanMotorsSearchable;
    }

    /**
     * Sets a new germanMotorsSearchable
     *
     * This field is returned (as <code>true</code>) if an eBay Germany motor vehicle listing has an upgrade that allows the motor vehicle listing to appear on the <b>mobile.de</b> partner site. This field is only applicable to eBay Germany motor vehicle listings.
     *
     * @param bool $germanMotorsSearchable
     * @return self
     */
    public function setGermanMotorsSearchable($germanMotorsSearchable)
    {
        $this->germanMotorsSearchable = $germanMotorsSearchable;
        return $this;
    }

    /**
     * Gets as getItFast
     *
     * The Get It Fast feature and icon are no longer supported in eBay listings.
     *
     * @return bool
     */
    public function getGetItFast()
    {
        return $this->getItFast;
    }

    /**
     * Sets a new getItFast
     *
     * The Get It Fast feature and icon are no longer supported in eBay listings.
     *
     * @param bool $getItFast
     * @return self
     */
    public function setGetItFast($getItFast)
    {
        $this->getItFast = $getItFast;
        return $this;
    }

    /**
     * Gets as gift
     *
     * <span class="tablenote"><b>Note: </b> This field is deprecated, as the gift icon and gift services are no longer available on any eBay Marketplace site.
     *  </span>
     *
     * @return bool
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Sets a new gift
     *
     * <span class="tablenote"><b>Note: </b> This field is deprecated, as the gift icon and gift services are no longer available on any eBay Marketplace site.
     *  </span>
     *
     * @param bool $gift
     * @return self
     */
    public function setGift($gift)
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * Gets as pictureExists
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPictureExists()
    {
        return $this->pictureExists;
    }

    /**
     * Sets a new pictureExists
     *
     * This field is deprecated.
     *
     * @param bool $pictureExists
     * @return self
     */
    public function setPictureExists($pictureExists)
    {
        $this->pictureExists = $pictureExists;
        return $this;
    }

    /**
     * Gets as recentListing
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getRecentListing()
    {
        return $this->recentListing;
    }

    /**
     * Sets a new recentListing
     *
     * This field is deprecated.
     *
     * @param bool $recentListing
     * @return self
     */
    public function setRecentListing($recentListing)
    {
        $this->recentListing = $recentListing;
        return $this;
    }

    /**
     * Gets as storefront
     *
     * This container consists of the eBay seller's store name and the URL to the eBay store. This container is returned if the seller has an eBay Store subscription and the <b>IncludeSelector</b> field is included in the call request and set to <code>Details</code>.
     *
     * @return \Nogrod\eBaySDK\Shopping\StorefrontType
     */
    public function getStorefront()
    {
        return $this->storefront;
    }

    /**
     * Sets a new storefront
     *
     * This container consists of the eBay seller's store name and the URL to the eBay store. This container is returned if the seller has an eBay Store subscription and the <b>IncludeSelector</b> field is included in the call request and set to <code>Details</code>.
     *
     * @param \Nogrod\eBaySDK\Shopping\StorefrontType $storefront
     * @return self
     */
    public function setStorefront(\Nogrod\eBaySDK\Shopping\StorefrontType $storefront)
    {
        $this->storefront = $storefront;
        return $this;
    }

    /**
     * Gets as distanceFromBuyer
     *
     * The distance of the item from the buyer. The DistanceFromBuyer unit (miles
     *  or kilometers) varies by site. If the country whose site you are
     *  searching, e.g. India, uses kilometers, then the DistanceFromBuyer unit is
     *  kilometers. Otherwise, e.g. if the country is US or UK, then the
     *  DistanceFromBuyer unit is miles. DistanceFromBuyer is returned if a
     *  value for PostalCode is supplied in the request.
     *
     * @return \Nogrod\eBaySDK\Shopping\DistanceType
     */
    public function getDistanceFromBuyer()
    {
        return $this->distanceFromBuyer;
    }

    /**
     * Sets a new distanceFromBuyer
     *
     * The distance of the item from the buyer. The DistanceFromBuyer unit (miles
     *  or kilometers) varies by site. If the country whose site you are
     *  searching, e.g. India, uses kilometers, then the DistanceFromBuyer unit is
     *  kilometers. Otherwise, e.g. if the country is US or UK, then the
     *  DistanceFromBuyer unit is miles. DistanceFromBuyer is returned if a
     *  value for PostalCode is supplied in the request.
     *
     * @param \Nogrod\eBaySDK\Shopping\DistanceType $distanceFromBuyer
     * @return self
     */
    public function setDistanceFromBuyer(\Nogrod\eBaySDK\Shopping\DistanceType $distanceFromBuyer)
    {
        $this->distanceFromBuyer = $distanceFromBuyer;
        return $this;
    }

    /**
     * Gets as country
     *
     * A two-letter code that represents the country in which the item is located.
     *  <br><br>
     *  To see the list of currently supported country
     *  codes, and the English names associated with each code (e.g., KY="Cayman Islands"),
     *  call the Trading API's <b>GeteBayDetails</b>, with <b>DetailName</b> set to <b>CountryDetails</b>,
     *  and then look for <b>CountryDetails.Country</b> fields in the response.
     *  <br><br>
     *  Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO codes in the eBay list.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <a href="types/CountryCodeType.html">CountryCodeType</a> list is only a subset of all supported country codes, so to ensure that you are seeing the latest list, you should make a <b>GeteBayDetails</b> call as explained above.
     *  </span>
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * A two-letter code that represents the country in which the item is located.
     *  <br><br>
     *  To see the list of currently supported country
     *  codes, and the English names associated with each code (e.g., KY="Cayman Islands"),
     *  call the Trading API's <b>GeteBayDetails</b>, with <b>DetailName</b> set to <b>CountryDetails</b>,
     *  and then look for <b>CountryDetails.Country</b> fields in the response.
     *  <br><br>
     *  Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO codes in the eBay list.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The <a href="types/CountryCodeType.html">CountryCodeType</a> list is only a subset of all supported country codes, so to ensure that you are seeing the latest list, you should make a <b>GeteBayDetails</b> call as explained above.
     *  </span>
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as watchCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getWatchCount()
    {
        return $this->watchCount;
    }

    /**
     * Sets a new watchCount
     *
     * This field is deprecated.
     *
     * @param int $watchCount
     * @return self
     */
    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
        return $this;
    }

    /**
     * Gets as halfItemCondition
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getHalfItemCondition()
    {
        return $this->halfItemCondition;
    }

    /**
     * Sets a new halfItemCondition
     *
     * This field is deprecated.
     *
     * @param string $halfItemCondition
     * @return self
     */
    public function setHalfItemCondition($halfItemCondition)
    {
        $this->halfItemCondition = $halfItemCondition;
        return $this;
    }

    /**
     * Gets as sellerComments
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellerComments()
    {
        return $this->sellerComments;
    }

    /**
     * Sets a new sellerComments
     *
     * This field is deprecated.
     *
     * @param string $sellerComments
     * @return self
     */
    public function setSellerComments($sellerComments)
    {
        $this->sellerComments = $sellerComments;
        return $this;
    }

    /**
     * Gets as returnPolicy
     *
     * This container consists of details related to the seller's Return Policy, both for domestic and international buyers (if the seller ships internationally). If the seller does not accept returns, only the <b>ReturnsAccepted</b> field (or <b>InternationalReturnsAccepted</b> field for international buyers) is returned with a value of <code>ReturnsNotAccepted</code>. If a seller does accept returns, more details are returned, including the return period, the refund method, and the order partner (buyer or seller) who is responsible for return shipping costs. This container is only returned if the <b>IncludeSelector</b> field is included in the call request and set to <code>Details</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the settings in the domestic return policy fields will be used instead for international returns. </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ReturnPolicyType
     */
    public function getReturnPolicy()
    {
        return $this->returnPolicy;
    }

    /**
     * Sets a new returnPolicy
     *
     * This container consists of details related to the seller's Return Policy, both for domestic and international buyers (if the seller ships internationally). If the seller does not accept returns, only the <b>ReturnsAccepted</b> field (or <b>InternationalReturnsAccepted</b> field for international buyers) is returned with a value of <code>ReturnsNotAccepted</code>. If a seller does accept returns, more details are returned, including the return period, the refund method, and the order partner (buyer or seller) who is responsible for return shipping costs. This container is only returned if the <b>IncludeSelector</b> field is included in the call request and set to <code>Details</code>.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the settings in the domestic return policy fields will be used instead for international returns. </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ReturnPolicyType $returnPolicy
     * @return self
     */
    public function setReturnPolicy(\Nogrod\eBaySDK\Shopping\ReturnPolicyType $returnPolicy)
    {
        $this->returnPolicy = $returnPolicy;
        return $this;
    }

    /**
     * Gets as minimumToBid
     *
     * This field is only returned for auction listings. The value in this field is the minimum value that the next bid on the item must be to be accepted. If no bids have been placed on the item, the value in this field will be the same value that is returned in the <b>Item.ConvertedCurrentPrice</b> field.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getMinimumToBid()
    {
        return $this->minimumToBid;
    }

    /**
     * Sets a new minimumToBid
     *
     * This field is only returned for auction listings. The value in this field is the minimum value that the next bid on the item must be to be accepted. If no bids have been placed on the item, the value in this field will be the same value that is returned in the <b>Item.ConvertedCurrentPrice</b> field.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $minimumToBid
     * @return self
     */
    public function setMinimumToBid(\Nogrod\eBaySDK\Shopping\AmountType $minimumToBid)
    {
        $this->minimumToBid = $minimumToBid;
        return $this;
    }

    /**
     * Gets as productID
     *
     * This field is no longer returned in the <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls. To view the eBay Product ID (also known as an ePID) or Global Trade Item Number (UPC, EAN, ISBN, or MPN) for a product in a listing (or product variation within a multiple-variation listing), use the Trading API's <b>GetItem</b> call instead.
     *
     * @return \Nogrod\eBaySDK\Shopping\ProductIDType
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * This field is no longer returned in the <b>GetSingleItem</b> or <b>GetMultipleItems</b> calls. To view the eBay Product ID (also known as an ePID) or Global Trade Item Number (UPC, EAN, ISBN, or MPN) for a product in a listing (or product variation within a multiple-variation listing), use the Trading API's <b>GetItem</b> call instead.
     *
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     * @return self
     */
    public function setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType $productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as autoPay
     *
     * This field indicates if the seller requests immediate payment for the item. If <code>true</code>, immediate payment is required before the checkout process can begin. If <code>false</code>, immediate payment is not requested.
     *  <br/><br/>
     *  The immediate payment feature is only applicable to fixed-price listings, or for auction listings where the buyer chooses to purchase the item through the 'Buy It Now' option. The immediate payment feature is not applicable (even if the <b>AutoPay</b> field has a <code>true</code> value) in the following types of listings/transactions:
     *  <ul>
     *  <li>Classified ad listings where payment/checkout happens between buyer and seller off of eBay's platform</li>
     *  <li>Auction listings that end with a winning bidder</li>
     *  <li>A buyer's Best Offer (on Fixed-Price or Auction items) that is accepted by the seller</li>
     *  </ul>
     *  The immediate payment feature is only applicable to listings on PayPal-enabled sites in categories that support immediate payment, or if the seller is opted into the new eBay Managed Payments program. For the former, the only returned <b>PaymentMethods</b> value should be <code>PayPal</code>. For sellers, opted into the new eBay Managed Payments program, the supported payment methods are managed by eBay, so no payment methods may get returned.
     *
     * @return bool
     */
    public function getAutoPay()
    {
        return $this->autoPay;
    }

    /**
     * Sets a new autoPay
     *
     * This field indicates if the seller requests immediate payment for the item. If <code>true</code>, immediate payment is required before the checkout process can begin. If <code>false</code>, immediate payment is not requested.
     *  <br/><br/>
     *  The immediate payment feature is only applicable to fixed-price listings, or for auction listings where the buyer chooses to purchase the item through the 'Buy It Now' option. The immediate payment feature is not applicable (even if the <b>AutoPay</b> field has a <code>true</code> value) in the following types of listings/transactions:
     *  <ul>
     *  <li>Classified ad listings where payment/checkout happens between buyer and seller off of eBay's platform</li>
     *  <li>Auction listings that end with a winning bidder</li>
     *  <li>A buyer's Best Offer (on Fixed-Price or Auction items) that is accepted by the seller</li>
     *  </ul>
     *  The immediate payment feature is only applicable to listings on PayPal-enabled sites in categories that support immediate payment, or if the seller is opted into the new eBay Managed Payments program. For the former, the only returned <b>PaymentMethods</b> value should be <code>PayPal</code>. For sellers, opted into the new eBay Managed Payments program, the supported payment methods are managed by eBay, so no payment methods may get returned.
     *
     * @param bool $autoPay
     * @return self
     */
    public function setAutoPay($autoPay)
    {
        $this->autoPay = $autoPay;
        return $this;
    }

    /**
     * Gets as businessSellerDetails
     *
     * This container is returned if the seller of the item is registered on the eBay listing site as a Business Seller. This container consists of information related to the Business Seller's account. Not all eBay sites support Business Sellers.
     *
     * @return \Nogrod\eBaySDK\Shopping\BusinessSellerDetailsType
     */
    public function getBusinessSellerDetails()
    {
        return $this->businessSellerDetails;
    }

    /**
     * Sets a new businessSellerDetails
     *
     * This container is returned if the seller of the item is registered on the eBay listing site as a Business Seller. This container consists of information related to the Business Seller's account. Not all eBay sites support Business Sellers.
     *
     * @param \Nogrod\eBaySDK\Shopping\BusinessSellerDetailsType $businessSellerDetails
     * @return self
     */
    public function setBusinessSellerDetails(\Nogrod\eBaySDK\Shopping\BusinessSellerDetailsType $businessSellerDetails)
    {
        $this->businessSellerDetails = $businessSellerDetails;
        return $this;
    }

    /**
     * Adds as paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @return self
     * @param string $paymentAllowedSite
     */
    public function addToPaymentAllowedSite($paymentAllowedSite)
    {
        $this->paymentAllowedSite[] = $paymentAllowedSite;
        return $this;
    }

    /**
     * isset paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentAllowedSite($index)
    {
        return isset($this->paymentAllowedSite[$index]);
    }

    /**
     * unset paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentAllowedSite($index)
    {
        unset($this->paymentAllowedSite[$index]);
    }

    /**
     * Gets as paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @return string[]
     */
    public function getPaymentAllowedSite()
    {
        return $this->paymentAllowedSite;
    }

    /**
     * Sets a new paymentAllowedSite
     *
     * Enables you to view the sites on which an item can be purchased,
     *  based on the payment methods offered for the item.
     *
     * @param string $paymentAllowedSite
     * @return self
     */
    public function setPaymentAllowedSite(array $paymentAllowedSite)
    {
        $this->paymentAllowedSite = $paymentAllowedSite;
        return $this;
    }

    /**
     * Gets as integratedMerchantCreditCardEnabled
     *
     * Indicates whether the item can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, an AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @return bool
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->integratedMerchantCreditCardEnabled;
    }

    /**
     * Sets a new integratedMerchantCreditCardEnabled
     *
     * Indicates whether the item can be paid for through a payment gateway
     *  (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, then
     *  integrated merchant credit card (IMCC) is enabled for credit cards because
     *  the seller has a payment gateway account. Therefore, if
     *  <b>IntegratedMerchantCreditCardEnabled</b> is <code>true</code>, an AmEx, Discover, or VisaMC
     *  is returned for an item, then on checkout, an online credit-card payment is
     *  processed through a payment gateway account. A payment gateway account is
     *  used by sellers to accept online credit cards (Visa, MasterCard, American
     *  Express, and Discover).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer supports electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must specify PayPal as an accepted payment method, or opt in to eBay Managed Payments program (if the program is available to that seller).
     *  </span>
     *
     * @param bool $integratedMerchantCreditCardEnabled
     * @return self
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
    {
        $this->integratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }

    /**
     * Gets as variations
     *
     * This container is only returned for multiple-variation listings, and it is required that the user include the <b>IncludeSelector</b> field in the call request, and set its value to <code>Variations</code>. Multiple-variation listings are fixed-price listings that feature similar, but not identicial items. For example, a T-shirt listing could contain multiple items of the same brand and style that vary by color and size (like <code>Blue, Large</code> and <code>Black, Medium</code>). Each variation in the listing specifies a unique combination of one of the available colors and sizes. Each variation can have a different quantity and price.
     *
     * @return \Nogrod\eBaySDK\Shopping\VariationsType
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * Sets a new variations
     *
     * This container is only returned for multiple-variation listings, and it is required that the user include the <b>IncludeSelector</b> field in the call request, and set its value to <code>Variations</code>. Multiple-variation listings are fixed-price listings that feature similar, but not identicial items. For example, a T-shirt listing could contain multiple items of the same brand and style that vary by color and size (like <code>Blue, Large</code> and <code>Black, Medium</code>). Each variation in the listing specifies a unique combination of one of the available colors and sizes. Each variation can have a different quantity and price.
     *
     * @param \Nogrod\eBaySDK\Shopping\VariationsType $variations
     * @return self
     */
    public function setVariations(\Nogrod\eBaySDK\Shopping\VariationsType $variations)
    {
        $this->variations = $variations;
        return $this;
    }

    /**
     * Gets as handlingTime
     *
     * Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. Typically, the seller's stated handling time ranges from zero to three business days. This time does not include the expected transit time of the shipping service option selected by the buyer.
     *  <br/><br/>
     *  <strong>GetSingleItem</strong> or <strong>GetMultipleItems</strong> returns <strong>HandlingTime</strong> in most cases, but there may be instances where the seller has not specified any shipping service options, or the the type of listing or eBay category does not require a handling time. For example, handling time is not relevant for 'local pickup' only, for freight shipping, or for classified ad listings where the transaction and delivery/shipping happens off of eBay's platform.
     *  <br/><br/>
     *  A <strong>HandlingTime</strong> value of <code>0</code> indicates <em>same business day handling</em> for an item. In this case, the seller's shipping commitment depends on the <em>order cut off time</em> set in the seller's My eBay Shipping preferences. The buyer must purchase and pay for the order line item before this <em>order cut off time</em> in order for the seller to be obligated to ship out the order on that same business day. A different cutoff time can be specified for each business day of the week. By default, the <em>order cut off time</em> is set to 2:00 PM local time on most sites, but the seller can change the times for any of the business days. For orders completed after the order cut off time, the item must be shipped by the end of the following business day (weekends and local holidays excluded).
     *
     * @return int
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    /**
     * Sets a new handlingTime
     *
     * Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. Typically, the seller's stated handling time ranges from zero to three business days. This time does not include the expected transit time of the shipping service option selected by the buyer.
     *  <br/><br/>
     *  <strong>GetSingleItem</strong> or <strong>GetMultipleItems</strong> returns <strong>HandlingTime</strong> in most cases, but there may be instances where the seller has not specified any shipping service options, or the the type of listing or eBay category does not require a handling time. For example, handling time is not relevant for 'local pickup' only, for freight shipping, or for classified ad listings where the transaction and delivery/shipping happens off of eBay's platform.
     *  <br/><br/>
     *  A <strong>HandlingTime</strong> value of <code>0</code> indicates <em>same business day handling</em> for an item. In this case, the seller's shipping commitment depends on the <em>order cut off time</em> set in the seller's My eBay Shipping preferences. The buyer must purchase and pay for the order line item before this <em>order cut off time</em> in order for the seller to be obligated to ship out the order on that same business day. A different cutoff time can be specified for each business day of the week. By default, the <em>order cut off time</em> is set to 2:00 PM local time on most sites, but the seller can change the times for any of the business days. For orders completed after the order cut off time, the item must be shipped by the end of the following business day (weekends and local holidays excluded).
     *
     * @param int $handlingTime
     * @return self
     */
    public function setHandlingTime($handlingTime)
    {
        $this->handlingTime = $handlingTime;
        return $this;
    }

    /**
     * Gets as lotSize
     *
     * A lot is a collection or set of two or more similar or identical items that must be purchased together in a single transaction, through an auction or a fixed-price listing. Examples of lot-based listings may include a collection of baby clothes, a collection of books or magazines, or a set of identical items such as batteries or light bulbs. The <b>LotSize</b> is the number of items in the lot.
     *  <br/><br/>
     *  A fixed-price listing can have multiple lots available for purchase, but if this is the case, each lot available in that listing should be identical (instead of a mixed collection of items). So, if a fixed-price listing has multiple lots available for purchase, the number of lots available for purchase is shown in the <b>Item.Quantity</b> field.
     *  <br/><br/>
     *  Not all eBay listing categories support lot-based listings. To see which eBay listing categories do not support lot-based listing, a user can use the Trading API's <b>GetCategories</b> call and then look for any <b>Category.LSD</b> tags (with value of <code>true</code>) that are returned in the response.
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->lotSize;
    }

    /**
     * Sets a new lotSize
     *
     * A lot is a collection or set of two or more similar or identical items that must be purchased together in a single transaction, through an auction or a fixed-price listing. Examples of lot-based listings may include a collection of baby clothes, a collection of books or magazines, or a set of identical items such as batteries or light bulbs. The <b>LotSize</b> is the number of items in the lot.
     *  <br/><br/>
     *  A fixed-price listing can have multiple lots available for purchase, but if this is the case, each lot available in that listing should be identical (instead of a mixed collection of items). So, if a fixed-price listing has multiple lots available for purchase, the number of lots available for purchase is shown in the <b>Item.Quantity</b> field.
     *  <br/><br/>
     *  Not all eBay listing categories support lot-based listings. To see which eBay listing categories do not support lot-based listing, a user can use the Trading API's <b>GetCategories</b> call and then look for any <b>Category.LSD</b> tags (with value of <code>true</code>) that are returned in the response.
     *
     * @param int $lotSize
     * @return self
     */
    public function setLotSize($lotSize)
    {
        $this->lotSize = $lotSize;
        return $this;
    }

    /**
     * Gets as conditionID
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') is no longer a valid item condition in the Cell Phones & Smartphones category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include 'Excellent - Refurbished' (condition ID 2010), 'Very Good - Refurbished' (condition ID 2020), and 'Good - Refurbished' (condition ID 2030).
     *  </span>
     *  A numeric identifier that represents the condition of an item. These numeric IDs can vary by eBay category, but many are the same across categories. For example, <code>1000</code> indicates an item in <em>New</em> condition, <code>3000</code> indicates an item in <em>Used</em> condition, and <code>5000</code> indicates an item in <em>Good</em> condition.
     *  <br/><br/>
     *  This field will get returned for most listings since most eBay listing categories require an item condition, but this field may not get returned for listings in eBay categories that don't require an item condition. A <b>ConditionID</b> value always maps to a text-based description of the condition, and this display text is shown in the <b>ConditionDisplayName</b> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @return int
     */
    public function getConditionID()
    {
        return $this->conditionID;
    }

    /**
     * Sets a new conditionID
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') is no longer a valid item condition in the Cell Phones & Smartphones category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include 'Excellent - Refurbished' (condition ID 2010), 'Very Good - Refurbished' (condition ID 2020), and 'Good - Refurbished' (condition ID 2030).
     *  </span>
     *  A numeric identifier that represents the condition of an item. These numeric IDs can vary by eBay category, but many are the same across categories. For example, <code>1000</code> indicates an item in <em>New</em> condition, <code>3000</code> indicates an item in <em>Used</em> condition, and <code>5000</code> indicates an item in <em>Good</em> condition.
     *  <br/><br/>
     *  This field will get returned for most listings since most eBay listing categories require an item condition, but this field may not get returned for listings in eBay categories that don't require an item condition. A <b>ConditionID</b> value always maps to a text-based description of the condition, and this display text is shown in the <b>ConditionDisplayName</b> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @param int $conditionID
     * @return self
     */
    public function setConditionID($conditionID)
    {
        $this->conditionID = $conditionID;
        return $this;
    }

    /**
     * Gets as conditionDisplayName
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') is no longer a valid item condition in the Cell Phones & Smartphones category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include 'Excellent - Refurbished' (condition ID 2010), 'Very Good - Refurbished' (condition ID 2020), and 'Good - Refurbished' (condition ID 2030).
     *  </span>
     *  The user-friendly display name for the item condition, such as <em>New</em>, <em>Like New</em> <em>Used</em>, or <em>Good</em>. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).
     *  <br>
     *  <br>
     *  <b>ConditionDisplayName</b> values all map to <b>ConditionID</b> values, but keep in mind that based on the eBay category, some item conditions can have the same <b>ConditionID</b>, but a slightly different <b>ConditionDisplayName</b>. For example, a <b>ConditionID</b> value of <code>1000</code> typically indicates an item in new condtion, but the text displayed in the <b>ConditionDisplayName</b> can be just <em>New</em>, or some categories will show <em>Brand New</em>, <em>New with tags</em>, or <em>New with box</em>.
     *  <br/><br/>
     *  This field will get returned for most listings since most eBay listing categories require an item condition, but this field may not get returned for listings in eBay categories that don't require an item condition. A <b>ConditionDisplayName</b> value always maps to a text-based description of the condition, and this Condition ID is shown in the <b>ConditionID</b> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @return string
     */
    public function getConditionDisplayName()
    {
        return $this->conditionDisplayName;
    }

    /**
     * Sets a new conditionDisplayName
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') is no longer a valid item condition in the Cell Phones & Smartphones category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. This refurbished item condition has been replaced by three new refurbished values, which include 'Excellent - Refurbished' (condition ID 2010), 'Very Good - Refurbished' (condition ID 2020), and 'Good - Refurbished' (condition ID 2030).
     *  </span>
     *  The user-friendly display name for the item condition, such as <em>New</em>, <em>Like New</em> <em>Used</em>, or <em>Good</em>. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).
     *  <br>
     *  <br>
     *  <b>ConditionDisplayName</b> values all map to <b>ConditionID</b> values, but keep in mind that based on the eBay category, some item conditions can have the same <b>ConditionID</b>, but a slightly different <b>ConditionDisplayName</b>. For example, a <b>ConditionID</b> value of <code>1000</code> typically indicates an item in new condtion, but the text displayed in the <b>ConditionDisplayName</b> can be just <em>New</em>, or some categories will show <em>Brand New</em>, <em>New with tags</em>, or <em>New with box</em>.
     *  <br/><br/>
     *  This field will get returned for most listings since most eBay listing categories require an item condition, but this field may not get returned for listings in eBay categories that don't require an item condition. A <b>ConditionDisplayName</b> value always maps to a text-based description of the condition, and this Condition ID is shown in the <b>ConditionID</b> field.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @param string $conditionDisplayName
     * @return self
     */
    public function setConditionDisplayName($conditionDisplayName)
    {
        $this->conditionDisplayName = $conditionDisplayName;
        return $this;
    }

    /**
     * Gets as quantityAvailableHint
     *
     * The enumeration returned in this field indicates if the listing displays a 'quantity available' hint on the View Item page. For example, the View Item page may say 'Limited quantity available', or it may say 'More than 10 available'. It is up to the seller of the listing whether or not to included a 'quantity available' hint in the listing. The 'quantity available' feature is used by the seller that prefers not to show the actual quantity available for purchase.
     *  <br/><br/>
     *  This field is only applicable to multiple-quantity, fixed-price listings, and will only be returned if the seller set this feature on the listing.
     *
     * @return string
     */
    public function getQuantityAvailableHint()
    {
        return $this->quantityAvailableHint;
    }

    /**
     * Sets a new quantityAvailableHint
     *
     * The enumeration returned in this field indicates if the listing displays a 'quantity available' hint on the View Item page. For example, the View Item page may say 'Limited quantity available', or it may say 'More than 10 available'. It is up to the seller of the listing whether or not to included a 'quantity available' hint in the listing. The 'quantity available' feature is used by the seller that prefers not to show the actual quantity available for purchase.
     *  <br/><br/>
     *  This field is only applicable to multiple-quantity, fixed-price listings, and will only be returned if the seller set this feature on the listing.
     *
     * @param string $quantityAvailableHint
     * @return self
     */
    public function setQuantityAvailableHint($quantityAvailableHint)
    {
        $this->quantityAvailableHint = $quantityAvailableHint;
        return $this;
    }

    /**
     * Gets as quantityThreshold
     *
     * This field works together with the 'quantity available' feature. This integer value in this field controls whether the 'quantity available' hint on the View Item page will say 'Limited quantity available' or 'More than <em>N</em> available'. If this threshold value is '10', and the quantity available is any number more than 10, the 'quantity available' hint will read 'More than 10 available'. If the quantity available is '10' or less, the 'quantity available' hint will read 'Limited quantity available'.
     *
     * @return int
     */
    public function getQuantityThreshold()
    {
        return $this->quantityThreshold;
    }

    /**
     * Sets a new quantityThreshold
     *
     * This field works together with the 'quantity available' feature. This integer value in this field controls whether the 'quantity available' hint on the View Item page will say 'Limited quantity available' or 'More than <em>N</em> available'. If this threshold value is '10', and the quantity available is any number more than 10, the 'quantity available' hint will read 'More than 10 available'. If the quantity available is '10' or less, the 'quantity available' hint will read 'Limited quantity available'.
     *
     * @param int $quantityThreshold
     * @return self
     */
    public function setQuantityThreshold($quantityThreshold)
    {
        $this->quantityThreshold = $quantityThreshold;
        return $this;
    }

    /**
     * Gets as discountPriceInfo
     *
     * This container provides information for an item that has a Strikethrough Price
     *  (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br > <br >
     *  Discount pricing is available to qualified sellers (and their associated developers) who
     *  participate in the Discount Pricing Program. Once qualified, sellers receive a
     *  "special account flag" (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation listings.
     *
     * @return \Nogrod\eBaySDK\Shopping\DiscountPriceInfoType
     */
    public function getDiscountPriceInfo()
    {
        return $this->discountPriceInfo;
    }

    /**
     * Sets a new discountPriceInfo
     *
     * This container provides information for an item that has a Strikethrough Price
     *  (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP apply only to fixed-price listings. STP is available on the US, eBay Motors, UK, Germany, Canada (English and French), France, Italy, and Spain sites, while MAP is available only on the US site.
     *  <br > <br >
     *  Discount pricing is available to qualified sellers (and their associated developers) who
     *  participate in the Discount Pricing Program. Once qualified, sellers receive a
     *  "special account flag" (SAF) that allows them to apply Discount Pricing to both single-variation and multi-variation listings.
     *
     * @param \Nogrod\eBaySDK\Shopping\DiscountPriceInfoType $discountPriceInfo
     * @return self
     */
    public function setDiscountPriceInfo(\Nogrod\eBaySDK\Shopping\DiscountPriceInfoType $discountPriceInfo)
    {
        $this->discountPriceInfo = $discountPriceInfo;
        return $this;
    }

    /**
     * Adds as excludeShipToLocation
     *
     * An <b>ExcludeShipToLocation</b> field is returned for each geographical region, country, state/province, city, or other special domestic location that the seller has added to their 'Excluded shipping locations' list. Sellers can exclude shipping locations through the Shipping preferences in My eBay, through a Shipping Business Policy that is associated with the listing, or through an Add/Revise/Relist call in the Trading API. Buyers in excluded shipping locations will be blocked from buying the item. If a seller has not created an 'Exclusion list' through any of the three means discussion below, no <b>ExcludeShipToLocation</b> fields are returned.
     *  <br><br>
     *  Geographical regions include the continents, as well as other geographical regions like the 'Middle East' or 'Southeast Asia'. Individual countries are represented by the two-digit ISO 3166-1 values. Special domestic regions will vary by country, but for the US, these value include 'Alaska/Hawaii', 'US Protectorates', and 'PO Boxes'.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocations</b> to create a set of international countries and regions to where the seler will, and will not, ship. These values should not contradict one another.
     *
     * @return self
     * @param string $excludeShipToLocation
     */
    public function addToExcludeShipToLocation($excludeShipToLocation)
    {
        $this->excludeShipToLocation[] = $excludeShipToLocation;
        return $this;
    }

    /**
     * isset excludeShipToLocation
     *
     * An <b>ExcludeShipToLocation</b> field is returned for each geographical region, country, state/province, city, or other special domestic location that the seller has added to their 'Excluded shipping locations' list. Sellers can exclude shipping locations through the Shipping preferences in My eBay, through a Shipping Business Policy that is associated with the listing, or through an Add/Revise/Relist call in the Trading API. Buyers in excluded shipping locations will be blocked from buying the item. If a seller has not created an 'Exclusion list' through any of the three means discussion below, no <b>ExcludeShipToLocation</b> fields are returned.
     *  <br><br>
     *  Geographical regions include the continents, as well as other geographical regions like the 'Middle East' or 'Southeast Asia'. Individual countries are represented by the two-digit ISO 3166-1 values. Special domestic regions will vary by country, but for the US, these value include 'Alaska/Hawaii', 'US Protectorates', and 'PO Boxes'.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocations</b> to create a set of international countries and regions to where the seler will, and will not, ship. These values should not contradict one another.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludeShipToLocation($index)
    {
        return isset($this->excludeShipToLocation[$index]);
    }

    /**
     * unset excludeShipToLocation
     *
     * An <b>ExcludeShipToLocation</b> field is returned for each geographical region, country, state/province, city, or other special domestic location that the seller has added to their 'Excluded shipping locations' list. Sellers can exclude shipping locations through the Shipping preferences in My eBay, through a Shipping Business Policy that is associated with the listing, or through an Add/Revise/Relist call in the Trading API. Buyers in excluded shipping locations will be blocked from buying the item. If a seller has not created an 'Exclusion list' through any of the three means discussion below, no <b>ExcludeShipToLocation</b> fields are returned.
     *  <br><br>
     *  Geographical regions include the continents, as well as other geographical regions like the 'Middle East' or 'Southeast Asia'. Individual countries are represented by the two-digit ISO 3166-1 values. Special domestic regions will vary by country, but for the US, these value include 'Alaska/Hawaii', 'US Protectorates', and 'PO Boxes'.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocations</b> to create a set of international countries and regions to where the seler will, and will not, ship. These values should not contradict one another.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludeShipToLocation($index)
    {
        unset($this->excludeShipToLocation[$index]);
    }

    /**
     * Gets as excludeShipToLocation
     *
     * An <b>ExcludeShipToLocation</b> field is returned for each geographical region, country, state/province, city, or other special domestic location that the seller has added to their 'Excluded shipping locations' list. Sellers can exclude shipping locations through the Shipping preferences in My eBay, through a Shipping Business Policy that is associated with the listing, or through an Add/Revise/Relist call in the Trading API. Buyers in excluded shipping locations will be blocked from buying the item. If a seller has not created an 'Exclusion list' through any of the three means discussion below, no <b>ExcludeShipToLocation</b> fields are returned.
     *  <br><br>
     *  Geographical regions include the continents, as well as other geographical regions like the 'Middle East' or 'Southeast Asia'. Individual countries are represented by the two-digit ISO 3166-1 values. Special domestic regions will vary by country, but for the US, these value include 'Alaska/Hawaii', 'US Protectorates', and 'PO Boxes'.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocations</b> to create a set of international countries and regions to where the seler will, and will not, ship. These values should not contradict one another.
     *
     * @return string[]
     */
    public function getExcludeShipToLocation()
    {
        return $this->excludeShipToLocation;
    }

    /**
     * Sets a new excludeShipToLocation
     *
     * An <b>ExcludeShipToLocation</b> field is returned for each geographical region, country, state/province, city, or other special domestic location that the seller has added to their 'Excluded shipping locations' list. Sellers can exclude shipping locations through the Shipping preferences in My eBay, through a Shipping Business Policy that is associated with the listing, or through an Add/Revise/Relist call in the Trading API. Buyers in excluded shipping locations will be blocked from buying the item. If a seller has not created an 'Exclusion list' through any of the three means discussion below, no <b>ExcludeShipToLocation</b> fields are returned.
     *  <br><br>
     *  Geographical regions include the continents, as well as other geographical regions like the 'Middle East' or 'Southeast Asia'. Individual countries are represented by the two-digit ISO 3166-1 values. Special domestic regions will vary by country, but for the US, these value include 'Alaska/Hawaii', 'US Protectorates', and 'PO Boxes'.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocations</b> to create a set of international countries and regions to where the seler will, and will not, ship. These values should not contradict one another.
     *
     * @param string[] $excludeShipToLocation
     * @return self
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation)
    {
        $this->excludeShipToLocation = $excludeShipToLocation;
        return $this;
    }

    /**
     * Gets as topRatedListing
     *
     * This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only available on the US, UK, and Germany sites. See the
     *  <a href="http://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a href="http://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on the overall program can be found on the <a href="http://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center.
     *  <br><br>
     *  This field is not returned if <code>false</code>.
     *
     * @return bool
     */
    public function getTopRatedListing()
    {
        return $this->topRatedListing;
    }

    /**
     * Sets a new topRatedListing
     *
     * This boolean field is returned as <code>true</code> if the listing was created by a Top-Rated Seller and the listing has all of the requirements that qualifies it as a Top-Rated Plus listing. The Top-Rated Seller program is only available on the US, UK, and Germany sites. See the
     *  <a href="http://pages.ebay.com/help/sell/top-rated.html#what">Top-Rated Seller requirements</a> help topic for more information on qualifying as a Top-Rated Seller and the <a href="http://pages.ebay.com/help/sell/top-rated.html#plus">Top-Rated Plus listing requirements</a> help topic for more information on what a listing must offer to qualify as a Top-Rated Plus listing and get the Top-Rated Plus badge. Information on the overall program can be found on the <a href="http://pages.ebay.com/sellerinformation/build-your-business-online/status-standards/top-rated-seller.html">Top-Rated Seller home page</a> in the Seller Center.
     *  <br><br>
     *  This field is not returned if <code>false</code>.
     *
     * @param bool $topRatedListing
     * @return self
     */
    public function setTopRatedListing($topRatedListing)
    {
        $this->topRatedListing = $topRatedListing;
        return $this;
    }

    /**
     * Gets as vhrUrl
     *
     * This field is returned with the URL to the Vehicle History Report if the seller has made one available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable.
     *
     * @return string
     */
    public function getVhrUrl()
    {
        return $this->vhrUrl;
    }

    /**
     * Sets a new vhrUrl
     *
     * This field is returned with the URL to the Vehicle History Report if the seller has made one available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable.
     *
     * @param string $vhrUrl
     * @return self
     */
    public function setVhrUrl($vhrUrl)
    {
        $this->vhrUrl = $vhrUrl;
        return $this;
    }

    /**
     * Gets as vhrAvailable
     *
     * This field is returned as <code>true</code> if a Vehicle History Report is available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable. The URL to the Vehicle History Report can be found in the <b>VhrUrl</b> field.
     *
     * @return bool
     */
    public function getVhrAvailable()
    {
        return $this->vhrAvailable;
    }

    /**
     * Sets a new vhrAvailable
     *
     * This field is returned as <code>true</code> if a Vehicle History Report is available for a motor vehicle listing. This field is only applicable to motor vehicle listings with a Vehicle History Report avaialable. The URL to the Vehicle History Report can be found in the <b>VhrUrl</b> field.
     *
     * @param bool $vhrAvailable
     * @return self
     */
    public function setVhrAvailable($vhrAvailable)
    {
        $this->vhrAvailable = $vhrAvailable;
        return $this;
    }

    /**
     * Gets as quantityInfo
     *
     * This container consists of the <b>MinimumRemnantSet</b>
     *  field, which indicates the minimum amount of event tickets that can
     *  remain in the fixed-price listing's inventory after a buyer
     *  purchases one or more tickets (but not all) from the listing.
     *  <br/><br/>
     *  This field is currently only applicable for event ticket listings in
     *  US and CA, but may apply to other categories in the future. It is
     *  only returned if set by the seller in the listing.
     *
     * @return \Nogrod\eBaySDK\Shopping\QuantityInfoType
     */
    public function getQuantityInfo()
    {
        return $this->quantityInfo;
    }

    /**
     * Sets a new quantityInfo
     *
     * This container consists of the <b>MinimumRemnantSet</b>
     *  field, which indicates the minimum amount of event tickets that can
     *  remain in the fixed-price listing's inventory after a buyer
     *  purchases one or more tickets (but not all) from the listing.
     *  <br/><br/>
     *  This field is currently only applicable for event ticket listings in
     *  US and CA, but may apply to other categories in the future. It is
     *  only returned if set by the seller in the listing.
     *
     * @param \Nogrod\eBaySDK\Shopping\QuantityInfoType $quantityInfo
     * @return self
     */
    public function setQuantityInfo(\Nogrod\eBaySDK\Shopping\QuantityInfoType $quantityInfo)
    {
        $this->quantityInfo = $quantityInfo;
        return $this;
    }

    /**
     * Gets as unitInfo
     *
     * Contains information about the weight, volume or other quantity measurement of a listed item so buyers can compare per-unit prices. The European Union requires listings for certain types of products to include the price per unit. eBay uses this information and the item's listed price to calculate and display the unit price on eBay EU sites.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This information is currently required only for business sellers, and only for listings with a 'Buy It Now' option.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\UnitInfoType
     */
    public function getUnitInfo()
    {
        return $this->unitInfo;
    }

    /**
     * Sets a new unitInfo
     *
     * Contains information about the weight, volume or other quantity measurement of a listed item so buyers can compare per-unit prices. The European Union requires listings for certain types of products to include the price per unit. eBay uses this information and the item's listed price to calculate and display the unit price on eBay EU sites.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This information is currently required only for business sellers, and only for listings with a 'Buy It Now' option.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\UnitInfoType $unitInfo
     * @return self
     */
    public function setUnitInfo(\Nogrod\eBaySDK\Shopping\UnitInfoType $unitInfo)
    {
        $this->unitInfo = $unitInfo;
        return $this;
    }

    /**
     * Gets as globalShipping
     *
     * This boolean field is returned as <code>true</code> if eBay's Global Shipping Program is an option for international shipping. With eBay's Global Shipping Program, the seller ships the item to that country's eBay shipping partner, and then eBay's shipping partner handles all aspects of the international leg of the shipment, including any export or import charges.
     *  <br/><br/>
     *  In addition to making the Global Shipping Program available for international shipment, the seller can also specify up to four other international shipping service options. This may be necessay if the shipment is going to a country where the Global Shipping Program is not available.
     *  <br/><br/>
     *  If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying one or more international shipping service options to serve those countries that the seller is willing to ship items.
     *
     * @return bool
     */
    public function getGlobalShipping()
    {
        return $this->globalShipping;
    }

    /**
     * Sets a new globalShipping
     *
     * This boolean field is returned as <code>true</code> if eBay's Global Shipping Program is an option for international shipping. With eBay's Global Shipping Program, the seller ships the item to that country's eBay shipping partner, and then eBay's shipping partner handles all aspects of the international leg of the shipment, including any export or import charges.
     *  <br/><br/>
     *  In addition to making the Global Shipping Program available for international shipment, the seller can also specify up to four other international shipping service options. This may be necessay if the shipment is going to a country where the Global Shipping Program is not available.
     *  <br/><br/>
     *  If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying one or more international shipping service options to serve those countries that the seller is willing to ship items.
     *
     * @param bool $globalShipping
     * @return self
     */
    public function setGlobalShipping($globalShipping)
    {
        $this->globalShipping = $globalShipping;
        return $this;
    }

    /**
     * Gets as conditionDescription
     *
     * This string field is used by the seller to more clearly describe the condition of items that are not brand new.
     *  <br><br>
     *  The <b>ConditionDescription</b> field is available for all
     *  categories, including categories where the condition type is not applicable
     *  (e.g., Antiques). This field is applicable for all item conditions except
     *  "New", "Brand New", "New with tags", and "New in box". If
     *  <b>ConditionDescription</b> is used with these conditions (Condition
     *  IDs 1000-1499), eBay will simply ignore this field if included, and eBay will
     *  return a warning message to the user.
     *  <br><br>
     *  This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another.
     *  <br><br>
     *  The <b>ConditionDescription</b> field is only returned if a condition description is specified in the listing.
     *
     * @return string
     */
    public function getConditionDescription()
    {
        return $this->conditionDescription;
    }

    /**
     * Sets a new conditionDescription
     *
     * This string field is used by the seller to more clearly describe the condition of items that are not brand new.
     *  <br><br>
     *  The <b>ConditionDescription</b> field is available for all
     *  categories, including categories where the condition type is not applicable
     *  (e.g., Antiques). This field is applicable for all item conditions except
     *  "New", "Brand New", "New with tags", and "New in box". If
     *  <b>ConditionDescription</b> is used with these conditions (Condition
     *  IDs 1000-1499), eBay will simply ignore this field if included, and eBay will
     *  return a warning message to the user.
     *  <br><br>
     *  This field should only be used to further clarify the condition of the used item. For example, "The right leg of the chair has a small scratch, and on the seat back there is a light blue stain about the shape and size of a coin." It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition type (<b>Item.ConditionID</b>), condition description, item description (<b>Item.Description</b>), and the listing's pictures do not contradict one another.
     *  <br><br>
     *  The <b>ConditionDescription</b> field is only returned if a condition description is specified in the listing.
     *
     * @param string $conditionDescription
     * @return self
     */
    public function setConditionDescription($conditionDescription)
    {
        $this->conditionDescription = $conditionDescription;
        return $this;
    }

    /**
     * Gets as itemCompatibilityCount
     *
     * This integer value indicates the number of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. The compatible vehicle list is shown in the <strong>ItemCompatibilityList</strong> container.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @return int
     */
    public function getItemCompatibilityCount()
    {
        return $this->itemCompatibilityCount;
    }

    /**
     * Sets a new itemCompatibilityCount
     *
     * This integer value indicates the number of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. The compatible vehicle list is shown in the <strong>ItemCompatibilityList</strong> container.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @param int $itemCompatibilityCount
     * @return self
     */
    public function setItemCompatibilityCount($itemCompatibilityCount)
    {
        $this->itemCompatibilityCount = $itemCompatibilityCount;
        return $this;
    }

    /**
     * Adds as compatibility
     *
     * A list of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. Compatible vehicles are expressed through a set of name-value pairs with aspects such as 'Year, 'Make', 'Model', 'Trim', and 'Engine'. Each set of values describe the specific vehicle, such as a '2016 Honda Accord'.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ItemCompatibilityType $compatibility
     */
    public function addToItemCompatibilityList(\Nogrod\eBaySDK\Shopping\ItemCompatibilityType $compatibility)
    {
        $this->itemCompatibilityList[] = $compatibility;
        return $this;
    }

    /**
     * isset itemCompatibilityList
     *
     * A list of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. Compatible vehicles are expressed through a set of name-value pairs with aspects such as 'Year, 'Make', 'Model', 'Trim', and 'Engine'. Each set of values describe the specific vehicle, such as a '2016 Honda Accord'.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemCompatibilityList($index)
    {
        return isset($this->itemCompatibilityList[$index]);
    }

    /**
     * unset itemCompatibilityList
     *
     * A list of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. Compatible vehicles are expressed through a set of name-value pairs with aspects such as 'Year, 'Make', 'Model', 'Trim', and 'Engine'. Each set of values describe the specific vehicle, such as a '2016 Honda Accord'.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemCompatibilityList($index)
    {
        unset($this->itemCompatibilityList[$index]);
    }

    /**
     * Gets as itemCompatibilityList
     *
     * A list of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. Compatible vehicles are expressed through a set of name-value pairs with aspects such as 'Year, 'Make', 'Model', 'Trim', and 'Engine'. Each set of values describe the specific vehicle, such as a '2016 Honda Accord'.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @return \Nogrod\eBaySDK\Shopping\ItemCompatibilityType[]
     */
    public function getItemCompatibilityList()
    {
        return $this->itemCompatibilityList;
    }

    /**
     * Sets a new itemCompatibilityList
     *
     * A list of distinct motor vehicles that are compatible with the part or accessory being offered in the listing. Compatible vehicles are expressed through a set of name-value pairs with aspects such as 'Year, 'Make', 'Model', 'Trim', and 'Engine'. Each set of values describe the specific vehicle, such as a '2016 Honda Accord'.
     *  <br><br>
     *  This field only applies to motor vehicle parts and accessory listings with an associated vehicle compatibility list. Seller can manually create their own vehicle compatibility list when listing the item, or a vehicle compatibility list may be added to the listing automatically if the seller uses an eBay catalog product record to create the listing.
     *  <br><br>
     *  To retrieve the compatibility count and the compatible vehicle list, include the <strong>IncludeSelector</strong> field in the request with a value of <code>Compatibility</code>. Parts Compatibility is only supported in Parts & Accessories categories.
     *
     * @param \Nogrod\eBaySDK\Shopping\ItemCompatibilityType[] $itemCompatibilityList
     * @return self
     */
    public function setItemCompatibilityList(array $itemCompatibilityList)
    {
        $this->itemCompatibilityList = $itemCompatibilityList;
        return $this;
    }

    /**
     * Gets as quantitySoldByPickupInStore
     *
     * This integer value indicates the quantity of items sold for the listing through the In-Store Pickup or Click and Collect option. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is always returned even if its value is '0'.
     *  <br>
     *  <br>
     *  If the <strong>QuantitySoldByPickupInStore</strong> value is greater than '0', this value (along with the value in <strong>QuantitySold</strong>) should be subtracted from the value in the <strong>Quantity</strong> field to get the accurate quantity that is available for purchase.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong>, the <strong>QuantitySoldByPickupInStore</strong>, and <strong>QuantitySold</strong> field values will reflect the quantity and quantity sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the user will look at the <strong>Variation.SellingStatus.QuantitySoldByPickupInStore</strong> fields to get the quantity sold for each item variation in the listing through the In-Store Pickup option.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *
     * @return int
     */
    public function getQuantitySoldByPickupInStore()
    {
        return $this->quantitySoldByPickupInStore;
    }

    /**
     * Sets a new quantitySoldByPickupInStore
     *
     * This integer value indicates the quantity of items sold for the listing through the In-Store Pickup or Click and Collect option. If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, this field is always returned even if its value is '0'.
     *  <br>
     *  <br>
     *  If the <strong>QuantitySoldByPickupInStore</strong> value is greater than '0', this value (along with the value in <strong>QuantitySold</strong>) should be subtracted from the value in the <strong>Quantity</strong> field to get the accurate quantity that is available for purchase.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the <strong>IncludeSelector</strong> filter is included in the request and set to <code>Details</code>, but the retrieved listing is a multiple-variation listing, the <strong>Quantity</strong>, the <strong>QuantitySoldByPickupInStore</strong>, and <strong>QuantitySold</strong> field values will reflect the quantity and quantity sold of all item variations in the listing. If a user wanted quantity available and quantity sold information on individual item variations, that user would set the <strong>IncludeSelector</strong> filter to <code>Variations</code> instead, and the user will look at the <strong>Variation.SellingStatus.QuantitySoldByPickupInStore</strong> fields to get the quantity sold for each item variation in the listing through the In-Store Pickup option.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
     *
     * @param int $quantitySoldByPickupInStore
     * @return self
     */
    public function setQuantitySoldByPickupInStore($quantitySoldByPickupInStore)
    {
        $this->quantitySoldByPickupInStore = $quantitySoldByPickupInStore;
        return $this;
    }

    /**
     * Gets as sKU
     *
     * A SKU (stock keeping unit) value is a seller-defined identifier of a product within their inventory. Some sellers use product SKUs to track complex flows of products and information on the client side. A seller can specify a SKU value for a product (or for all variations within a multiple-variation listing) when creating a listing. eBay preserves the SKU values, and the SKU value becomes another way to identify the product/listing, and another way to track orders associated with the SKU value.
     *  <br>
     *  <br>
     *  A SKU is not required to be unique across an eBay marketplace, but a seller cannot have any active listings or variations within a multiple-variation listing that have the same SKU value. The seller will be blocked from listing, revising, or relisting with a SKU value that is already associated with an active listing.
     *  <br>
     *  <br>
     *  The <b>SKU</b> field, if defined for a single-variation listing, will be returned if the <b>IncludeSelector</b> field is set to <code>Details</code>. For multi-variation listings, the SKU value for each variation (if defined) will actually be returned in the <b>Variation.SKU</b> field, and to return variations data, the user must include the <b>IncludeSelector</b> field and set it to <code>Variations</code>.
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * A SKU (stock keeping unit) value is a seller-defined identifier of a product within their inventory. Some sellers use product SKUs to track complex flows of products and information on the client side. A seller can specify a SKU value for a product (or for all variations within a multiple-variation listing) when creating a listing. eBay preserves the SKU values, and the SKU value becomes another way to identify the product/listing, and another way to track orders associated with the SKU value.
     *  <br>
     *  <br>
     *  A SKU is not required to be unique across an eBay marketplace, but a seller cannot have any active listings or variations within a multiple-variation listing that have the same SKU value. The seller will be blocked from listing, revising, or relisting with a SKU value that is already associated with an active listing.
     *  <br>
     *  <br>
     *  The <b>SKU</b> field, if defined for a single-variation listing, will be returned if the <b>IncludeSelector</b> field is set to <code>Details</code>. For multi-variation listings, the SKU value for each variation (if defined) will actually be returned in the <b>Variation.SKU</b> field, and to return variations data, the user must include the <b>IncludeSelector</b> field and set it to <code>Variations</code>.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    /**
     * Gets as newBestOffer
     *
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @return bool
     */
    public function getNewBestOffer()
    {
        return $this->newBestOffer;
    }

    /**
     * Sets a new newBestOffer
     *
     * This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     *
     * @param bool $newBestOffer
     * @return self
     */
    public function setNewBestOffer($newBestOffer)
    {
        $this->newBestOffer = $newBestOffer;
        return $this;
    }

    /**
     * Gets as eBayNowEligible
     *
     * The eBay Now delivery option is no longer available, so this field is no longer applicable.
     *
     * @return bool
     */
    public function getEBayNowEligible()
    {
        return $this->eBayNowEligible;
    }

    /**
     * Sets a new eBayNowEligible
     *
     * The eBay Now delivery option is no longer available, so this field is no longer applicable.
     *
     * @param bool $eBayNowEligible
     * @return self
     */
    public function setEBayNowEligible($eBayNowEligible)
    {
        $this->eBayNowEligible = $eBayNowEligible;
        return $this;
    }

    /**
     * Gets as eBayNowAvailable
     *
     * The eBay Now delivery option is no longer available, so this field is no longer applicable.
     *
     * @return bool
     */
    public function getEBayNowAvailable()
    {
        return $this->eBayNowAvailable;
    }

    /**
     * Sets a new eBayNowAvailable
     *
     * The eBay Now delivery option is no longer available, so this field is no longer applicable.
     *
     * @param bool $eBayNowAvailable
     * @return self
     */
    public function setEBayNowAvailable($eBayNowAvailable)
    {
        $this->eBayNowAvailable = $eBayNowAvailable;
        return $this;
    }

    /**
     * Gets as ignoreQuantity
     *
     * This field is only be returned (as <code>true</code>) in the case where an order line item in a listing is only available to buyers through a local fulfillment method such as In-Store Pickup or Click and Collect. And if a listing is truly a <em>local fulfillment only</em> listing, the value in the <b>Item.Quantity</b> field (for single-variation listings) or the <b>Variation.Quantity</b> field (for multi-variation listings) defaults to <code>0</code> even though the quantity available is technically not zero, since the order line item in the listing is still available through one or more local fulfillment methods.
     *
     * @return bool
     */
    public function getIgnoreQuantity()
    {
        return $this->ignoreQuantity;
    }

    /**
     * Sets a new ignoreQuantity
     *
     * This field is only be returned (as <code>true</code>) in the case where an order line item in a listing is only available to buyers through a local fulfillment method such as In-Store Pickup or Click and Collect. And if a listing is truly a <em>local fulfillment only</em> listing, the value in the <b>Item.Quantity</b> field (for single-variation listings) or the <b>Variation.Quantity</b> field (for multi-variation listings) defaults to <code>0</code> even though the quantity available is technically not zero, since the order line item in the listing is still available through one or more local fulfillment methods.
     *
     * @param bool $ignoreQuantity
     * @return self
     */
    public function setIgnoreQuantity($ignoreQuantity)
    {
        $this->ignoreQuantity = $ignoreQuantity;
        return $this;
    }

    /**
     * Gets as availableForPickupDropOff
     *
     * If this field is returned as <code>true</code>, the order line item is enabled with the 'Click and Collect' feature. With Click and Collect, buyers are able to purchase an order line item on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK.
     *  <br/><br/>
     *  The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *  <br>
     *  <br>
     *  Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a specific category on these eBay sites support Click and Collect listings, use the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b> values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field.
     *  <br/><br/>
     *  Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return bool
     */
    public function getAvailableForPickupDropOff()
    {
        return $this->availableForPickupDropOff;
    }

    /**
     * Sets a new availableForPickupDropOff
     *
     * If this field is returned as <code>true</code>, the order line item is enabled with the 'Click and Collect' feature. With Click and Collect, buyers are able to purchase an order line item on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK.
     *  <br/><br/>
     *  The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *  <br>
     *  <br>
     *  Not all categories on the UK, Australia, and Germany sites support Click and Collect listings. To verify if a specific category on these eBay sites support Click and Collect listings, use the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in one or more <b>CategoryID</b> values and a <b>PickupDropOffEnabled</b> value in the <b>FeatureID</b> field.
     *  <br/><br/>
     *  Look for a <code>true</code> value in the <b>PickupDropOffEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param bool $availableForPickupDropOff
     * @return self
     */
    public function setAvailableForPickupDropOff($availableForPickupDropOff)
    {
        $this->availableForPickupDropOff = $availableForPickupDropOff;
        return $this;
    }

    /**
     * Gets as eligibleForPickupDropOff
     *
     * This boolean field is returned as <code>true</code> if the listing category supports 'Click and Collect' listings. A <code>true</code> value does not necessarily mean that the seller has enabled the item with the Click and Collect feature. A listing is enabled with the Click and Collect feature if the <b>AvailableForPickupDropOff</b> field is returned as <code>true</code>.
     *  <br>
     *  <br>
     *  With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *
     * @return bool
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->eligibleForPickupDropOff;
    }

    /**
     * Sets a new eligibleForPickupDropOff
     *
     * This boolean field is returned as <code>true</code> if the listing category supports 'Click and Collect' listings. A <code>true</code> value does not necessarily mean that the seller has enabled the item with the Click and Collect feature. A listing is enabled with the Click and Collect feature if the <b>AvailableForPickupDropOff</b> field is returned as <code>true</code>.
     *  <br>
     *  <br>
     *  With Click and Collect, buyers are able to purchase from thousands of sellers on the eBay UK, Australia, and Germany sites, and then pick up their order from the nearest 'eBay Collection Point', including over 750 Argos stores in the UK. The Click and Collect feature is only available on the eBay UK, Australia, and Germany sites. For more information about Click and Collect, see the
     *  <a href="http://ebay.co.uk/clickandcollect/">Click and Collect</a> home page on the eBay UK site, the <a href="http://sellercentre.ebay.com.au/click-and-collect">Click and Collect</a> home page on the eBay Australia site, or the <a href="https://pages.ebay.de/einkaufen/click-and-collect.html">Click and Collect</a> home page on the eBay Germany site.
     *
     * @param bool $eligibleForPickupDropOff
     * @return self
     */
    public function setEligibleForPickupDropOff($eligibleForPickupDropOff)
    {
        $this->eligibleForPickupDropOff = $eligibleForPickupDropOff;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBestOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled", $value);
        }
        $value = $this->getBuyItNowPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowPrice", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getBuyItNowAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowAvailable", $value);
        }
        $value = $this->getConvertedBuyItNowPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedBuyItNowPrice", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getViewItemURLForNaturalSearch();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ViewItemURLForNaturalSearch", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getLocation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Location", $value);
        }
        $value = $this->getPaymentMethods();
        if (null !== $value && !empty($this->getPaymentMethods())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentMethods" => $v];
            }, $value));
        }
        $value = $this->getGalleryURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryURL", $value);
        }
        $value = $this->getPictureURL();
        if (null !== $value && !empty($this->getPictureURL())) {
            $writer->write(array_map(function ($v) {
                return ["PictureURL" => $v];
            }, $value));
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
        }
        $value = $this->getPrimaryCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryID", $value);
        }
        $value = $this->getPrimaryCategoryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryName", $value);
        }
        $value = $this->getQuantity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Quantity", $value);
        }
        $value = $this->getSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Seller", $value);
        }
        $value = $this->getBidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidCount", $value);
        }
        $value = $this->getConvertedCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedCurrentPrice", $value);
        }
        $value = $this->getCurrentPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrentPrice", $value);
        }
        $value = $this->getHighBidder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HighBidder", $value);
        }
        $value = $this->getListingStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingStatus", $value);
        }
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
        }
        $value = $this->getReserveMet();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReserveMet", $value);
        }
        $value = $this->getShipToLocations();
        if (null !== $value && !empty($this->getShipToLocations())) {
            $writer->write(array_map(function ($v) {
                return ["ShipToLocations" => $v];
            }, $value));
        }
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getTimeLeft();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeLeft", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getShippingCostSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCostSummary", $value);
        }
        $value = $this->getItemSpecifics();
        if (null !== $value && !empty($this->getItemSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecifics", array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getHitCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HitCount", $value);
        }
        $value = $this->getSubtitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Subtitle", $value);
        }
        $value = $this->getPrimaryCategoryIDPath();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryIDPath", $value);
        }
        $value = $this->getSecondaryCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondaryCategoryID", $value);
        }
        $value = $this->getSecondaryCategoryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondaryCategoryName", $value);
        }
        $value = $this->getSecondaryCategoryIDPath();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondaryCategoryIDPath", $value);
        }
        $value = $this->getCharity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Charity", $value);
        }
        $value = $this->getGermanMotorsSearchable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GermanMotorsSearchable", $value);
        }
        $value = $this->getGetItFast();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GetItFast", $value);
        }
        $value = $this->getGift();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Gift", $value);
        }
        $value = $this->getPictureExists();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureExists", $value);
        }
        $value = $this->getRecentListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecentListing", $value);
        }
        $value = $this->getStorefront();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Storefront", $value);
        }
        $value = $this->getDistanceFromBuyer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DistanceFromBuyer", $value);
        }
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Country", $value);
        }
        $value = $this->getWatchCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchCount", $value);
        }
        $value = $this->getHalfItemCondition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HalfItemCondition", $value);
        }
        $value = $this->getSellerComments();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerComments", $value);
        }
        $value = $this->getReturnPolicy();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnPolicy", $value);
        }
        $value = $this->getMinimumToBid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumToBid", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getAutoPay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutoPay", $value);
        }
        $value = $this->getBusinessSellerDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BusinessSellerDetails", $value);
        }
        $value = $this->getPaymentAllowedSite();
        if (null !== $value && !empty($this->getPaymentAllowedSite())) {
            $writer->write(array_map(function ($v) {
                return ["PaymentAllowedSite" => $v];
            }, $value));
        }
        $value = $this->getIntegratedMerchantCreditCardEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled", $value);
        }
        $value = $this->getVariations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Variations", $value);
        }
        $value = $this->getHandlingTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HandlingTime", $value);
        }
        $value = $this->getLotSize();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LotSize", $value);
        }
        $value = $this->getConditionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionID", $value);
        }
        $value = $this->getConditionDisplayName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionDisplayName", $value);
        }
        $value = $this->getQuantityAvailableHint();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityAvailableHint", $value);
        }
        $value = $this->getQuantityThreshold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityThreshold", $value);
        }
        $value = $this->getDiscountPriceInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo", $value);
        }
        $value = $this->getExcludeShipToLocation();
        if (null !== $value && !empty($this->getExcludeShipToLocation())) {
            $writer->write(array_map(function ($v) {
                return ["ExcludeShipToLocation" => $v];
            }, $value));
        }
        $value = $this->getTopRatedListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TopRatedListing", $value);
        }
        $value = $this->getVhrUrl();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VhrUrl", $value);
        }
        $value = $this->getVhrAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VhrAvailable", $value);
        }
        $value = $this->getQuantityInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityInfo", $value);
        }
        $value = $this->getUnitInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnitInfo", $value);
        }
        $value = $this->getGlobalShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalShipping", $value);
        }
        $value = $this->getConditionDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionDescription", $value);
        }
        $value = $this->getItemCompatibilityCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityCount", $value);
        }
        $value = $this->getItemCompatibilityList();
        if (null !== $value && !empty($this->getItemCompatibilityList())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityList", array_map(function ($v) {
                return ["Compatibility" => $v];
            }, $value));
        }
        $value = $this->getQuantitySoldByPickupInStore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySoldByPickupInStore", $value);
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
        }
        $value = $this->getNewBestOffer();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewBestOffer", $value);
        }
        $value = $this->getEBayNowEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayNowEligible", $value);
        }
        $value = $this->getEBayNowAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayNowAvailable", $value);
        }
        $value = $this->getIgnoreQuantity();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IgnoreQuantity", $value);
        }
        $value = $this->getAvailableForPickupDropOff();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AvailableForPickupDropOff", $value);
        }
        $value = $this->getEligibleForPickupDropOff();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleForPickupDropOff", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowPrice');
        if (null !== $value) {
            $this->setBuyItNowPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowAvailable');
        if (null !== $value) {
            $this->setBuyItNowAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedBuyItNowPrice');
        if (null !== $value) {
            $this->setConvertedBuyItNowPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ViewItemURLForNaturalSearch');
        if (null !== $value) {
            $this->setViewItemURLForNaturalSearch($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Location');
        if (null !== $value) {
            $this->setLocation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethods', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentMethods($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryURL');
        if (null !== $value) {
            $this->setGalleryURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryID');
        if (null !== $value) {
            $this->setPrimaryCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryName');
        if (null !== $value) {
            $this->setPrimaryCategoryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Quantity');
        if (null !== $value) {
            $this->setQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Seller');
        if (null !== $value) {
            $this->setSeller(\Nogrod\eBaySDK\Shopping\SimpleUserType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidCount');
        if (null !== $value) {
            $this->setBidCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedCurrentPrice');
        if (null !== $value) {
            $this->setConvertedCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrentPrice');
        if (null !== $value) {
            $this->setCurrentPrice(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HighBidder');
        if (null !== $value) {
            $this->setHighBidder(\Nogrod\eBaySDK\Shopping\SimpleUserType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingStatus');
        if (null !== $value) {
            $this->setListingStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReserveMet');
        if (null !== $value) {
            $this->setReserveMet($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipToLocations', true);
        if (null !== $value && !empty($value)) {
            $this->setShipToLocations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeLeft');
        if (null !== $value) {
            $this->setTimeLeft(new \DateInterval($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostSummary');
        if (null !== $value) {
            $this->setShippingCostSummary(\Nogrod\eBaySDK\Shopping\ShippingCostSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HitCount');
        if (null !== $value) {
            $this->setHitCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Subtitle');
        if (null !== $value) {
            $this->setSubtitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrimaryCategoryIDPath');
        if (null !== $value) {
            $this->setPrimaryCategoryIDPath($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondaryCategoryID');
        if (null !== $value) {
            $this->setSecondaryCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondaryCategoryName');
        if (null !== $value) {
            $this->setSecondaryCategoryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondaryCategoryIDPath');
        if (null !== $value) {
            $this->setSecondaryCategoryIDPath($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Charity');
        if (null !== $value) {
            $this->setCharity(\Nogrod\eBaySDK\Shopping\CharityType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GermanMotorsSearchable');
        if (null !== $value) {
            $this->setGermanMotorsSearchable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GetItFast');
        if (null !== $value) {
            $this->setGetItFast($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Gift');
        if (null !== $value) {
            $this->setGift($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureExists');
        if (null !== $value) {
            $this->setPictureExists($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecentListing');
        if (null !== $value) {
            $this->setRecentListing($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Storefront');
        if (null !== $value) {
            $this->setStorefront(\Nogrod\eBaySDK\Shopping\StorefrontType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DistanceFromBuyer');
        if (null !== $value) {
            $this->setDistanceFromBuyer(\Nogrod\eBaySDK\Shopping\DistanceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchCount');
        if (null !== $value) {
            $this->setWatchCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HalfItemCondition');
        if (null !== $value) {
            $this->setHalfItemCondition($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerComments');
        if (null !== $value) {
            $this->setSellerComments($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnPolicy');
        if (null !== $value) {
            $this->setReturnPolicy(\Nogrod\eBaySDK\Shopping\ReturnPolicyType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumToBid');
        if (null !== $value) {
            $this->setMinimumToBid(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutoPay');
        if (null !== $value) {
            $this->setAutoPay($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BusinessSellerDetails');
        if (null !== $value) {
            $this->setBusinessSellerDetails(\Nogrod\eBaySDK\Shopping\BusinessSellerDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentAllowedSite', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentAllowedSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IntegratedMerchantCreditCardEnabled');
        if (null !== $value) {
            $this->setIntegratedMerchantCreditCardEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Variations');
        if (null !== $value) {
            $this->setVariations(\Nogrod\eBaySDK\Shopping\VariationsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HandlingTime');
        if (null !== $value) {
            $this->setHandlingTime($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LotSize');
        if (null !== $value) {
            $this->setLotSize($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionID');
        if (null !== $value) {
            $this->setConditionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionDisplayName');
        if (null !== $value) {
            $this->setConditionDisplayName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityAvailableHint');
        if (null !== $value) {
            $this->setQuantityAvailableHint($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityThreshold');
        if (null !== $value) {
            $this->setQuantityThreshold($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountPriceInfo');
        if (null !== $value) {
            $this->setDiscountPriceInfo(\Nogrod\eBaySDK\Shopping\DiscountPriceInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeShipToLocation', true);
        if (null !== $value && !empty($value)) {
            $this->setExcludeShipToLocation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedListing');
        if (null !== $value) {
            $this->setTopRatedListing($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VhrUrl');
        if (null !== $value) {
            $this->setVhrUrl($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VhrAvailable');
        if (null !== $value) {
            $this->setVhrAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityInfo');
        if (null !== $value) {
            $this->setQuantityInfo(\Nogrod\eBaySDK\Shopping\QuantityInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitInfo');
        if (null !== $value) {
            $this->setUnitInfo(\Nogrod\eBaySDK\Shopping\UnitInfoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShipping');
        if (null !== $value) {
            $this->setGlobalShipping($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionDescription');
        if (null !== $value) {
            $this->setConditionDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityCount');
        if (null !== $value) {
            $this->setItemCompatibilityCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCompatibilityList', true);
        if (null !== $value && !empty($value)) {
            $this->setItemCompatibilityList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\ItemCompatibilityType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySoldByPickupInStore');
        if (null !== $value) {
            $this->setQuantitySoldByPickupInStore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewBestOffer');
        if (null !== $value) {
            $this->setNewBestOffer($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayNowEligible');
        if (null !== $value) {
            $this->setEBayNowEligible($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayNowAvailable');
        if (null !== $value) {
            $this->setEBayNowAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IgnoreQuantity');
        if (null !== $value) {
            $this->setIgnoreQuantity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AvailableForPickupDropOff');
        if (null !== $value) {
            $this->setAvailableForPickupDropOff($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForPickupDropOff');
        if (null !== $value) {
            $this->setEligibleForPickupDropOff($value);
        }
    }
}
