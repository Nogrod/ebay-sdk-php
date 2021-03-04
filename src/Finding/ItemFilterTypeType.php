<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing ItemFilterTypeType
 *
 * Values that can be used for the itemFilter.name field.
 * XSD Type: ItemFilterType
 */
class ItemFilterTypeType
{
    /**
     * Constant for 'Condition' value.
     *
     * This item condition filter allows a user to filter items based on item
     * condition. Multiple item condition filters may be used. The
     * <code>Condition</code> enum value is specified in the <b>itemfilter.name</b>
     * field, and either the condition ID or the condition name can be specified in the
     * <b>itemfilter.value</b> field. The condition ID is actually recommended, because
     * these identifiers are consistent across eBay categories, whereas condition names
     * can vary slightly between eBay categories, such as 'New', 'New in Box', or 'New
     * with Tags'.
     *  <br><br>
     *  See the <a
     * href="https://developer.ebay.com/Devzone/finding/CallRef/Enums/conditionIdList.html">Item
     * Condition IDs and Names</a> page to view a table that maps condition IDs to
     * condition names.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of
     * 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as
     * 'Certified Refurbished', a seller must be pre-qualified by eBay for this
     * feature.
     *  </span>
     */
    public const VAL_CONDITION = 'Condition';

    /**
     * Constant for 'Currency' value.
     *
     * <a name="Currency"></a>
     *  Limits results to items listed with the specified currency only.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  For a list of allowed currency values, see <a
     *  href="../Enums/currencyIdList.html">currencyId Values</a>.
     *  <br><br>
     */
    public const VAL_CURRENCY = 'Currency';

    /**
     * Constant for 'EndTimeFrom' value.
     *
     * <a name="EndTimeFrom"></a>
     *  Limits the results to items ending on or after the specified time.
     *  Specify a time in the future.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#dateTime">dateTime</a>):</b>
     *  <br>
     *  Specify the time in GMT.
     *  <br><br>
     */
    public const VAL_END_TIME_FROM = 'EndTimeFrom';

    /**
     * Constant for 'ModTimeFrom' value.
     *
     * <a name="ModTimeFrom"></a>
     *  Limits the results to active items whose status has changed since the
     *  specified time. Specify a time in the past. Time must be in GMT.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#dateTime">dateTime</a>):</b>
     *  <br>
     *  Specify the time in GMT.
     *  <br><br>
     */
    public const VAL_MOD_TIME_FROM = 'ModTimeFrom';

    /**
     * Constant for 'EndTimeTo' value.
     *
     * <a name="EndTimeTo"></a>
     *  Limits the results to items ending on or before the specified time.
     *  Specify a time in the future.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#dateTime">dateTime</a>):</b>
     *  <br>
     *  Specify the time in GMT.
     *  <br><br>
     */
    public const VAL_END_TIME_TO = 'EndTimeTo';

    /**
     * Constant for 'ExcludeAutoPay' value.
     *
     * <a name="ExcludeAutoPay"></a>
     *  If true, excludes all items requiring immediate payment. Default is
     *  false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_EXCLUDE_AUTO_PAY = 'ExcludeAutoPay';

    /**
     * Constant for 'BestOfferOnly' value.
     *
     * <a name="BestOfferOnly"></a>
     *  If true, the search results are limited to only items that
     *  have Best Offer enabled. Default is false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_BEST_OFFER_ONLY = 'BestOfferOnly';

    /**
     * Constant for 'FeaturedOnly' value.
     *
     * <a name="FeaturedOnly"></a>
     *  If true, the search results are limited to featured item listings only.
     *  Default is false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_FEATURED_ONLY = 'FeaturedOnly';

    /**
     * Constant for 'FeedbackScoreMax' value.
     *
     * <a name="FeedbackScoreMax"></a>
     *  Specifies the maximum feedback score of a seller whose items can be
     *  included in the response. If FeedbackScoreMin is also specified, the
     *  FeedbackScoreMax value must be greater than or equal to the
     *  FeedbackScoreMin value.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 0.
     *  <br><br>
     */
    public const VAL_FEEDBACK_SCORE_MAX = 'FeedbackScoreMax';

    /**
     * Constant for 'FeedbackScoreMin' value.
     *
     * <a name="FeedbackScoreMin"></a>
     *  Specifies the mininum feedback score of a seller whose items can be
     *  included in the response. If FeedbackScoreMax is also specified, the
     *  FeedbackScoreMax value must be greater than or equal to the
     *  FeedbackScoreMin value.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 0.
     *  <br><br>
     */
    public const VAL_FEEDBACK_SCORE_MIN = 'FeedbackScoreMin';

    /**
     * Constant for 'FreeShippingOnly' value.
     *
     * <a name="FreeShippingOnly"></a>
     *  If true, the search results are limited to only items with free shipping
     *  to the site specified in the request (see <a
     *  href="../Enums/GlobalIdList.html">Global ID Values</a>). Default is
     *  false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_FREE_SHIPPING_ONLY = 'FreeShippingOnly';

    /**
     * Constant for 'GetItFastOnly' value.
     *
     * <a name="GetItFastOnly"></a>
     *  If true, the search results are limited to only Get It Fast listings.
     *  Default is false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_GET_IT_FAST_ONLY = 'GetItFastOnly';

    /**
     * Constant for 'HideDuplicateItems' value.
     *
     * <a name="HideDuplicateItems"></a>
     *  If true, and there are duplicate items for an item in the search results,
     *  the subsequent duplicates will not appear in the results. Default is
     *  false.<br>
     *  Item listings are considered duplicates when all of the ollowing
     *  conditions are met:<br>
     *  1. Items are listed by the same seller<br>
     *  2. Items have exactly the same item title<br>
     *  3. Items have similar listing formats: <br>
     *  &nbsp;&nbsp;&nbsp;
     *  - Auctions (Auction Items and Auction BIN items)<br>
     *  &nbsp;&nbsp;&nbsp;
     *  - Fixed Price (Fixed Price, Multi-quantity Fixed Price, Fixed
     *  Price with Best Offer, and Store Inventory Format items)<br>
     *  &nbsp;&nbsp;&nbsp;
     *  - Classified Ads<br>
     *  <br>
     *  For Auctions, items must also have the same price and number of bids to
     *  be considered duplicates.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_HIDE_DUPLICATE_ITEMS = 'HideDuplicateItems';

    /**
     * Constant for 'AvailableTo' value.
     *
     * <a name="AvailableTo"></a>
     *  Limits items to those available to the specified country only. Item
     *  filter LocatedIn cannot be used together with item filter AvailableTo.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  Expects the two-letter ISO 3166 country code to indicate the country
     *  where the item is located. For English names that correspond to each code
     *  (e.g., KY="Cayman Islands"), see the ISO site:
     *  <br> <a href="https://www.iso.org/iso-3166-country-codes.html"> ISO 3166
     * COUNTRY CODES</a>.
     *  <br><br>
     */
    public const VAL_AVAILABLE_TO = 'AvailableTo';

    /**
     * Constant for 'LocatedIn' value.
     *
     * <a name="LocatedIn"></a>
     *  Limits the result set to just those items located in the specified
     *  country. Item filter AvailableTo cannot be used together with item filter
     *  LocatedIn.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  Expects the two-letter ISO 3166 country code to indicate the country
     *  where the item is located. For English names that correspond to each code
     *  (e.g., KY="Cayman Islands"), see the ISO site:
     *  <br>
     *  <a href="https://www.iso.org/iso-3166-country-codes.html"> ISO 3166 COUNTRY
     * CODES</a>.
     *  <br><br>
     *  <b>Note: </b>Multiple values are allowed. Up to 25 countries
     *  can be specified.
     *  <br><br>
     */
    public const VAL_LOCATED_IN = 'LocatedIn';

    /**
     * Constant for 'LocalPickupOnly' value.
     *
     * <a name="LocalPickupOnly"></a>
     *  If true, the search results are limited to only items which have local
     *  pickup available. Default is false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_LOCAL_PICKUP_ONLY = 'LocalPickupOnly';

    /**
     * Constant for 'LocalSearchOnly' value.
     *
     * <a name="LocalSearchOnly"></a>
     *  If true, the search results are limited to only matching items with the
     *  Local Inventory Listing Options (LILO). Must be used together with the
     *  <b class="con"> MaxDistance</b> item filter, and the request
     *  must also specify <b class="con">buyerPostalCode</b>.
     *  Currently, this is only available for the Motors site (global ID EBAY-
     *  MOTOR).
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_LOCAL_SEARCH_ONLY = 'LocalSearchOnly';

    /**
     * Constant for 'ListingType' value.
     *
     * <a name="ListingType"></a>
     *  Filters items based listing type information. Default behavior is to
     *  return all matching items, except Store Inventory format listings.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  <blockquote>
     *  <dl>
     *  <dt>Auction</dt>
     *  <dd>Retrieve matching auction listings (i.e., listings eligible for
     *  competitive bidding at auction) only. Excludes auction items with Buy It
     *  Now.</dd>
     *  <dt>AuctionWithBIN</dt>
     *  <dd>Retrieve all matching auction listings with Buy It Now
     *  available. Excludes auction listings without Buy It Now. An auction
     *  listed with Buy It Now will not be returned if a valid bid has been
     *  placed on the auction.
     *  </dd>
     *  <dt>Classified</dt>
     *  <dd>Retrieves Classified Ad format (i.e., Classified and AdFormat
     *  listing type) listings only.</dd>
     *  <dt>FixedPrice</dt>
     *  <dd>Retrieve matching fixed price items only. Excludes Store
     *  Inventory format items. </dd>
     *  <dt>StoreInventory</dt>
     *  <dd>Retrieve Store Inventory format items only.</dd>
     *  <dt>All</dt>
     *  <dd>Retrieve matching items for any listing type.</dd>
     *  </blockquote>
     *  <br>
     *  <b>Note: </b>Multiple listing type values can be specified
     *  for this filter.
     *  <br><br>
     *  <b>Example:</b>
     *  <br>
     *  <pre>
     *  ...<br>
     *  &itemFilter(0).name=ListingType<br>
     *  &itemFilter(0).value(0)=AuctionWithBIN<br>
     *  &itemFilter(0).value(1)=FixedPrice<br>
     *  &itemFilter(0).value(2)=StoreInventory<br>
     *  ...
     *  </pre>
     *  <br>
     */
    public const VAL_LISTING_TYPE = 'ListingType';

    /**
     * Constant for 'LotsOnly' value.
     *
     * <a name="LotsOnly"></a>
     *  If true, the search results are limited to only matching listings for
     *  which the lot size is 2 or more. Default is false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_LOTS_ONLY = 'LotsOnly';

    /**
     * Constant for 'MaxBids' value.
     *
     * <a name="MaxBids"></a>
     *  Limits the results to items with bid counts less than or equal to the
     *  specified value. If MinBids is also specified, the MaxBids value must be
     *  greater than or equal to the MinBids value.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 0.
     *  <br><br>
     */
    public const VAL_MAX_BIDS = 'MaxBids';

    /**
     * Constant for 'MinBids' value.
     *
     * <a name="MinBids"></a>
     *  Limits the results to items with bid counts greater than or equal to the
     *  specified value. If MaxBids is also specified, the MaxBids value must be
     *  greater than or equal to the MinBids value.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 0.
     *  <br><br>
     */
    public const VAL_MIN_BIDS = 'MinBids';

    /**
     * Constant for 'MaxPrice' value.
     *
     * <a name="MaxPrice"></a>
     *  Specifies the maximum current price an item can have to be included in
     *  the response. Optionally, you can also specify a currency ID, using the
     *  <b class="con">paramName</b> and <b class="con">
     *  paramValue</b> fields (e.g.,
     *  <code>&paramName=Currency&paramValue=EUR</code>). If
     *  using with MinPrice to specify a price range, the MaxPrice value must be
     *  greater than or equal to MinPrice.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#decimal">decimal</a>):</b>
     *  <br>
     *  Decimal values greater than or equal to 0.0.
     *  <br><br>
     */
    public const VAL_MAX_PRICE = 'MaxPrice';

    /**
     * Constant for 'MinPrice' value.
     *
     * <a name="MinPrice"></a>
     *  Specifies the minimum current price an item can have to be included in
     *  the response. Optionally, you can also specify a currency ID, using the
     *  <b class="con">paramName</b> and <b class="con">
     *  paramValue</b> fields (e.g.,
     *  <code>&paramName=Currency&paramValue=EUR</code>). If
     *  using with MaxPrice to specify a price range, the MaxPrice value must be
     *  greater than or equal to MinPrice.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#decimal">decimal</a>):</b>
     *  <br>
     *  Decimal values greater than or equal to 0.0.
     *  <br><br>
     */
    public const VAL_MIN_PRICE = 'MinPrice';

    /**
     * Constant for 'PaymentMethod' value.
     *
     * <a name="PaymentMethod"></a>
     *  Limits results to items that accept the specified payment method.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):
     *  </b><br>
     *  <blockquote>
     *  <dl>
     *  <dt>PayPal</dt>
     *  <dd>PayPal payment method.</dd>
     *  <dt>PaisaPay</dt>
     *  <dd>PaisaPay payment method. The PaisaPay payment method is only
     *  for the India site (global ID EBAY-IN).</dd>
     *  <dt>PaisaPayEMI</dt>
     *  <dd>PaisaPayEscrow EMI (Equal Monthly Installment) payment method.
     *  The PaisaPayEscrowEMI payment method is only for the India site (global
     *  ID EBAY-IN).</dd>
     *  </blockquote>
     *  <br>
     */
    public const VAL_PAYMENT_METHOD = 'PaymentMethod';

    /**
     * Constant for 'MaxQuantity' value.
     *
     * <a name="MaxQuantity"></a>
     *  Limits the results to listings with a quantity less than or equal to the
     *  specified value. If MinQuantity is also specified, the MaxQuantity value
     *  must be greater than or equal to the MinQuantity value.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 1.
     *  <br><br>
     */
    public const VAL_MAX_QUANTITY = 'MaxQuantity';

    /**
     * Constant for 'MinQuantity' value.
     *
     * <a name="MinQuantity"></a>
     *  Limits the results to listings with a quantity greater than or equal to
     *  the specified value. If MaxQuantity is also specified, the MaxQuantity
     *  value must be greater than or equal to the MinQuantity value.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 1.
     *  <br><br>
     */
    public const VAL_MIN_QUANTITY = 'MinQuantity';

    /**
     * Constant for 'Seller' value.
     *
     * <a name="Seller"></a>
     *  Specify one or more seller names. Search results will include items from
     *  the specified sellers only. The Seller item filter cannot be used
     *  together with either the ExcludeSeller or TopRatedSellerOnly item
     *  filters.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  Valid seller names.
     *  <br><br>
     *  <b>Note: </b>Multiple values are allowed. Up to 100 sellers
     *  can be specified.
     *  <br><br>
     *  <b>Example:</b>
     *  <br>
     *  <pre>
     *  ...<br>
     *  &itemFilter(0).name=Seller<br>
     *  &itemFilter(0).value(0)=seller01<br>
     *  &itemFilter(0).value(1)=seller02<br>
     *  &itemFilter(0).value(2)=seller03<br>
     *  ...
     *  </pre>
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'ExcludeSeller' value.
     *
     * <a name="ExcludeSeller"></a>
     *  Specify one or more seller names. Search results will not include items
     *  from the specified sellers. The ExcludeSeller item filter cannot be used
     *  together with either the Seller or TopRatedSellerOnly item filters.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  Valid seller names.
     *  <br><br>
     *  <b>Note: </b>Multiple values are allowed. Up to 100 sellers
     *  can be specified.
     *  <br><br>
     *  <b>Example:</b>
     *  <br>
     *  <pre>
     *  ...<br>
     *  &itemFilter(0).name=ExcludeSeller<br>
     *  &itemFilter(0).value(0)=seller01<br>
     *  &itemFilter(0).value(1)=seller02<br>
     *  &itemFilter(0).value(2)=seller03<br>
     *  ...
     *  </pre>
     */
    public const VAL_EXCLUDE_SELLER = 'ExcludeSeller';

    /**
     * Constant for 'ExcludeCategory' value.
     *
     * <a name="ExcludeCategory"></a>
     *  Specify one or more category IDs. Search results will not include items
     *  from the specified categories or their child categories.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  Valid category IDs.
     *  <br><br>
     *  <b>Note: </b>Multiple values are allowed. Up to 25 categories
     *  can be specified.
     *  <br><br>
     *  <b>Example:</b>
     *  <br>
     *  <pre>
     *  ...<br>
     *  &itemFilter(0).name=ExcludeCategory<br>
     *  &itemFilter(0).value(0)=168093<br>
     *  &itemFilter(0).value(1)=56170<br>
     *  &itemFilter(0).value(2)=73834<br>
     *  ...
     *  </pre>
     */
    public const VAL_EXCLUDE_CATEGORY = 'ExcludeCategory';

    /**
     * Constant for 'WorldOfGoodOnly' value.
     *
     * <a name="WorldOfGoodOnly"></a>
     *  If true, the search results are limited to only items listed in the World
     *  of Good marketplace. Defaults to false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_WORLD_OF_GOOD_ONLY = 'WorldOfGoodOnly';

    /**
     * Constant for 'MaxDistance' value.
     *
     * <a name="MaxDistance"></a>
     *  Specifies the maximum distance from the specified postal code (<b
     *  class="con">buyerPostalCode</b>) to search for items. The
     *  request must also specify <b class="con">buyerPostalCode</b>.
     *  <br><br>
     *  The minimum distance supported is 5 miles or 10 kilometers, depending
     *  upon whether the distance unit supported for the site to which the
     *  request is submitted is miles (mi) or kilometers (km). For example, the
     *  smallest MaxDistance for searches submitted to the US eBay site (global
     *  ID EBAY-US) is 5 (miles). The smallest MaxDistance for searches submitted
     *  to the Germany eBay site (global ID EBAY-DE) is 10 (kilometers).
     *  <br><br>
     *  Values are rounded up to the nearest 5 (mi) or 10 (km) increment. For
     *  example, a value of 21 will be rounded up to 25 (mi) on the eBay US site
     *  and to 30 (km) on the eBay Germany site.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 5.
     *  <br><br>
     */
    public const VAL_MAX_DISTANCE = 'MaxDistance';

    /**
     * Constant for 'SellerBusinessType' value.
     *
     * <a name="SellerBusinessType"></a>
     *  Restricts the items to those that are from sellers whose business type is
     *  the specified value. Only one value can be specified.
     *  <br><br>
     *  Not supported on all sites. Applies only to the following sites, which
     *  support seller business features:
     *  <ul>
     *  <li>Austria (EBAY-AT)</li>
     *  <li>Belgium - Dutch (EBAY-NLBE)</li>
     *  <li>Belgium - French (EBAY-FRBE)</li>
     *  <li>France (EBAY-FR)</li>
     *  <li>Germany (EBAY-DE)</li>
     *  <li>Ireland (EBAY-IE)</li>
     *  <li>Italy (EBAY-IT)</li>
     *  <li>Poland (EBAY-PL)</li>
     *  <li>Spain (EBAY-ES)</li>
     *  <li>Switzerland (EBAY-CH)</li>
     *  <li>UK (EBAY-GB)</li>
     *  </ul>
     *  <br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):
     *  </b><br>
     *  <blockquote>
     *  <dl>
     *  <dt>
     *  Business
     *  </dt>
     *  <dd>
     *  The seller is registered as a business on eBay.
     *  </dd>
     *  <dt>
     *  Private
     *  </dt>
     *  <dd>
     *  The seller is registered as an individual on eBay.
     *  </dd>
     *  </dl>
     *  </blockquote>
     *  <br>
     */
    public const VAL_SELLER_BUSINESS_TYPE = 'SellerBusinessType';

    /**
     * Constant for 'TopRatedSellerOnly' value.
     *
     * <a name="TopRatedSellerOnly"></a>
     *  If true, the search results are limited to only matching items where the
     *  seller qualifies as a top-rated seller on the specified site. Site is
     *  specified with the <a
     *  href="../../Concepts/MakingACall.html#StandardURLParameters">global ID
     *  header or URL parameter</a>. The default <a
     *  href="../Enums/GlobalIdList.html ">global ID value</a> is EBAY-
     *  US (the eBay US site). Default for this filter is false.
     *  <br><br>
     *  The TopRatedSellerOnly item filter cannot be used together with either
     *  the Seller or ExcludeSeller item filters.
     *  <br><br>
     *  The TopRatedSellerOnly item filter is supported for the following sites
     *  only: US (EBAY-US), Motors (EBAY-MOTOR), UK (EBAY-GB), IE (EBAY-IE), DE
     *  (EBAY-DE), AT (EBAY-AT), and CH (EBAY-CH).
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_TOP_RATED_SELLER_ONLY = 'TopRatedSellerOnly';

    /**
     * Constant for 'SoldItemsOnly' value.
     *
     * <a name="SoldItemsOnly"></a>
     *  Reserved for future use.
     *  If true, excludes all completed items which are not ended by being sold.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_SOLD_ITEMS_ONLY = 'SoldItemsOnly';

    /**
     * Constant for 'CharityOnly' value.
     *
     * <a name="CharityOnly"></a>
     *  If true, the search results are limited to items for which all or part of
     *  the proceeds are given to a charity. Each item in the search results will
     *  include the ID of the given charity. Default is false.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_CHARITY_ONLY = 'CharityOnly';

    /**
     * Constant for 'ListedIn' value.
     *
     * <a name="ListedIn"></a>
     *  The site on which the items were originally listed. This can be useful
     *  for buyers who wish to
     *  see only items on their domestic site either for delivery cost reasons or
     *  time reasons, such as for gifting
     *  occasions like birthdays or holidays.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../Enums/GlobalIdList.html">Global ID
     *  Values</a>):</b>
     *  <br><br>
     *  GlobalID Value
     *  <br><br>
     */
    public const VAL_LISTED_IN = 'ListedIn';

    /**
     * Constant for 'ExpeditedShippingType' value.
     *
     * <a name="ExpeditedShippingType"></a>
     *  Specifies the type of expedited shipping. You can specify
     *  either Expedited or OneDayShipping. Only items that can be shipped
     *  by the specified type are returned.
     *  <br><br>
     *  ExpeditedShippingType is used together with the MaxHandlingTime and
     *  ReturnsAcceptedOnly filters to filter items
     *  for certain kinds of gifting events such as birthdays or holidays where
     *  the items must be delivered by a certain date.
     *  If you wish to mimic the behavior of the eBay holiday filters, you would
     *  use ExpeditedShippingType set
     *  to either Expedited or OneDayShipping, MaxHandlingTime to 1,
     *  ReturnsAcceptedOnly set to true, and for the
     *  Germany site, set PaymentMethod to PayPal. (The holiday filters may not
     *  always be available in the
     *  eBay UI, depending on the season; however, the equivalent filter behavior
     *  continues to be available in the API.)
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#string">string</a>):</b>
     *  <br>
     *  Expedited, OneDayShipping
     *  <br><br>
     */
    public const VAL_EXPEDITED_SHIPPING_TYPE = 'ExpeditedShippingType';

    /**
     * Constant for 'MaxHandlingTime' value.
     *
     * <a name="MaxHandlingTime"></a>
     *  Specifies the maximum number of handling days the seller requires to ship
     *  the item. Only items with a handling time less than or equal to this
     *  number will be returned. (The handling time is the amount of time, in
     *  days, required by the seller to get the item ready to ship and handed off
     *  to the actual carrier who does the delivery. It does not include the time
     *  required by the carrier to deliver the item. <br><br>
     *  ExpeditedShippingType is used together with the MaxHandlingTime and
     *  ReturnsAcceptedOnly filters to filter items for certain kinds of gifting
     *  events such as birthdays or holidays where the items must be delivered by
     *  a certain date. If you wish to mimic the behavior of the eBay holiday
     *  filters, you would use ExpeditedShippingType set to either Expedited or
     *  OneDayShipping, MaxHandlingTime to 1, ReturnsAcceptedOnly set to true,
     *  and for the Germany site, set PaymentMethod to PayPal. (The holiday
     *  filters may not always be available in the eBay UI, depending on the
     *  season; however, the equivalent filter behavior continues to be available
     *  in the API.)
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#int">int</a>):</b>
     *  <br>
     *  Integer greater than or equal to 1.
     *  <br><br>
     */
    public const VAL_MAX_HANDLING_TIME = 'MaxHandlingTime';

    /**
     * Constant for 'ReturnsAcceptedOnly' value.
     *
     * <a name="ReturnsAcceptedOnly"></a>
     *  If set to true, returns only items where the seller accepts returns.
     *  <br><br>
     *  ExpeditedShippingType is used together with the MaxHandlingTime and
     *  ReturnsAcceptedOnly filters to filter items for certain kinds of gifting
     *  events such as birthdays or holidays where the items must be delivered by
     *  a certain date. If you wish to mimic the behavior of the eBay holiday
     *  filters, you would use ExpeditedShippingType set to either Expedited or
     *  OneDayShipping, MaxHandlingTime to 1, ReturnsAcceptedOnly set to true,
     *  and for the Germany site, set PaymentMethod to PayPal. (The holiday
     *  filters may not always be available in the eBay UI, depending on the
     *  season; however, the equivalent filter behavior continues to be available
     *  in the API.)
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  true, false
     *  <br><br>
     */
    public const VAL_RETURNS_ACCEPTED_ONLY = 'ReturnsAcceptedOnly';

    /**
     * Constant for 'ValueBoxInventory' value.
     *
     * <a name="ValueBoxInventory"></a>
     *  <b>Coming Soon: </b>
     *  This filter can be used in conjunction with the sortOrder
     *  PricePlusShippingLowest to return competitively priced items from eBay
     *  top-rated sellers that have a BuyItNow price, with the lowest priced item
     *  at the top of the list. This filter returns items from categories that
     *  are catalog-enabled; items from non catalog-enabled categories are not
     *  returned. Sellers can use this item filter to determine competitive
     *  pricing; buying applications can use it to obtain competitive items from
     *  top rated sellers that are likely to sell quickly.
     *  <br><br>
     *  If set to 1, the item filter constraints are applied and the items are
     *  returned accordingly. If set to 0 (zero) the item filter is not applied.
     *  Defaults to 0.
     *  <br><br>
     *  <b>Allowed values (<a
     *  class="defn_type"
     *  href="../types/simpleTypes.html#boolean">boolean</a>):</b>
     *  <br>
     *  1, 0
     *  <br><br>
     */
    public const VAL_VALUE_BOX_INVENTORY = 'ValueBoxInventory';

    /**
     * Constant for 'OutletSellerOnly' value.
     *
     * <a name="OutletSellerOnly"></a>
     *  If set to true, returns only items listed by outlet sellers.
     */
    public const VAL_OUTLET_SELLER_ONLY = 'OutletSellerOnly';

    /**
     * Constant for 'AuthorizedSellerOnly' value.
     *
     * If set to true, returns only items listed by authorized sellers
     */
    public const VAL_AUTHORIZED_SELLER_ONLY = 'AuthorizedSellerOnly';

    /**
     * Constant for 'StartTimeFrom' value.
     *
     * <a name="StartTimeFrom"></a>
     *  Limits the results to items started on or after the specified time.
     *  Specify a time in the future.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#dateTime">dateTime</a>):</b>
     *  <br>
     *  Specify the time in GMT.
     *  <br><br>
     */
    public const VAL_START_TIME_FROM = 'StartTimeFrom';

    /**
     * Constant for 'StartTimeTo' value.
     *
     * <a name="StartTimeTo"></a>
     *  Limits the results to items started on or before the specified time.
     *  Specify a time in the future.
     *  <br><br>
     *  <b>Allowed values (<a class="defn_type"
     *  href="../types/simpleTypes.html#dateTime">dateTime</a>):</b>
     *  <br>
     *  Specify the time in GMT.
     *  <br><br>
     */
    public const VAL_START_TIME_TO = 'StartTimeTo';

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
