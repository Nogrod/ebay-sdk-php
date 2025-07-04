<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingDetailsType
 *
 * Type defining the <b>ShippingDetails</b> container, which contains the shipping-related
 *  details for an order line item (pre-checkout) or order (post-checkout).
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>IMPORTANT:</strong> To avoid loss of shipping details when revising a listing, you must include all <strong>ShippingDetails</strong> fields that were originally provided. Do not omit any tag, even if its value does not change. Omitting a shipping field when revising an item will remove that detail from the listing.
 *  </span>
 * XSD Type: ShippingDetailsType
 */
class ShippingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated and has been replaced by the <b>ShippingDetails.PaymentEdited</b> field.
     *
     * @var bool $allowPaymentEdit
     */
    private $allowPaymentEdit = null;

    /**
     * This field is deprecated.
     *
     * @var bool $applyShippingDiscount
     */
    private $applyShippingDiscount = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>Global Shipping Program</b> (GSP) is only available on the UK marketplace. On the US marketplace, the <b>Global Shipping Program</b> was replaced by the intermediated international shipping program called <b>eBay International Shipping</b>.
     *  <br><br>
     *  <b>eBay International Shipping</b> is an account level setting, and no field will need to be set in a add/revise call to enable this setting. As long as the US seller's account is opted in to <b>eBay International Shipping</b>, this shipping option will be automatically enabled for all listings where international shipping is available. Even if the US seller is opted into <b>eBay International Shipping</b>, that same seller can still also specify individual international shipping service options through the ShippingDetails.InternationalShippingServiceOption container.
     *  </span>
     *  In an Add/Revise/Relist call, this boolean field can be included and set to <code>True</code> if the seller would like to use eBay's Global Shipping Program for orders that are shipped internationally.
     *  <br/><br/>
     *  In 'Get' calls, if this field is returned as <code>True</code>, it indicates that international shipping through the Global Shipping Program is available for the listing. If this field is returned as <code>False</code>, the seller is responsible for shipping the item internationally using one of the specified international shipping service options set for the listing.
     *  <br/><br/>
     *  When calling <strong>RelistFixedPriceItem</strong>, <strong>RelistItem</strong>, <strong>ReviseFixedPriceItem</strong> or <strong>ReviseItem</strong>, you can omit this field if its value doesn't need to change.
     *  <br/><br/>
     *
     * @var bool $globalShipping
     */
    private $globalShipping = null;

    /**
     * Details pertinent to one or more items for which calculated shipping has been
     *  offered by the seller, such as package dimension and weight and
     *  packaging/handling costs. If your call specifies a large-dimension item listed
     *  with UPS, see <a href=
     *  "https://developer.ebay.com/support/kb-article?KBid=1159"
     *  >Dimensional Weight limit on UPS shipping services results in failure of
     *  shipping calculator</a>.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong> and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedShippingRateType $calculatedShippingRate
     */
    private $calculatedShippingRate = null;

    /**
     * Indicates whether the seller specified payment and shipping instructions during checkout.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $changePaymentInstructions
     */
    private $changePaymentInstructions = null;

    /**
     * Whether the seller allows the buyer to edit the payment amount for the order.
     *  (Sellers enable this property in their My eBay user preferences on the eBay site.)
     *
     * @var bool $paymentEdited
     */
    private $paymentEdited = null;

    /**
     * This container shows sales tax information for an item in a specific tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
     *  <br><br>
     *  This container can be used in an Add/Revise/Relist/Verify call to set sales tax settings for a specific tax jurisdiction, but it is actually a better practice if a user sets up sales tax rates through the Sales Tax Table tool in My eBay (or by using the <b>SetTaxTable</b> call). A seller's Sales Tax Table is applied to the listing by including the <b>UseTaxTable</b> field in the request and setting its value to <code>true</code>. The <b>GetTaxTable</b> call can be used to retrieve the current sales tax rates for different tax jurisdictions.
     *  <br><br>
     *  This container is only returned in order management 'Get' calls if sales tax is applicable to the order line item. For eBay Collect and Remit states, the sales tax information is displayed in the <b>Transaction.Taxes</b> container instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\SalesTaxType $salesTax
     */
    private $salesTax = null;

    /**
     * For most applicable calls, returns the words No Error or returns an error message
     *  related to an attempt to calculate shipping rates. For calculated shipping only.
     *  <br><br>
     *  The message text explains that a postal code is needed to calculate
     *  shipping. Only returned when <b>ItemDetails</b> is set to <code>Fine</code>.
     *
     * @var string $shippingRateErrorMessage
     */
    private $shippingRateErrorMessage = null;

    /**
     * A shipping rate scale for shipping through USPS that affects the shipping cost calculated for USPS (lower if <strong>ShippingRateType</strong> is <code>DailyPickup</code>). <strong>ShippingRateType</strong> is returned only if the value of <strong>ShippingService</strong> is one of the USPS shipping services. For calculated shipping only.
     *
     * @var string $shippingRateType
     */
    private $shippingRateType = null;

    /**
     * This container is used to provide details on a specific domestic shipping service option, including the unique identifier of the shipping service option and the costs related to domestic shipping service. A separate <b>ShippingServiceOptions</b> container is needed for each domestic shipping service option that is available to ship the item. Unless a fulfillment business policy is being used, generally at least one <b>ShippingServiceOptions</b> container will be required.
     *  <br><br>
     *  If you specify multiple <b>ShippingServiceOptions</b> nodes, the repeating nodes must be
     *  contiguous. For example, you can insert <b>InternationalShippingServiceOption</b> nodes
     *  after a list of repeating <b>ShippingServiceOptions</b> nodes, but not between them:
     *  <br><br>
     *  <code>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;
     *  </code>
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit
     *  <b>ShippingServiceOptions</b>, eBay will drop the domestic shipping services from the
     *  listing. This may also have unintended side effects, as other fields that depend
     *  on this data may be dropped as well.
     *  <br/><br/>
     *  To retain the shipping services and
     *  dependent fields when you modify other shipping details, it may be simplest to
     *  specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping shipment or eBay International Shipping is offered for the listing). All specified domestic and international
     *  shipping services must be the same shipping type (for example, Flat versus
     *  Calculated).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller has set the shipping cost model to 'Flat' or 'Calculated' (<b>ShippingDetails.ShippingType</b> field), at least one actual shipping service option must be specified through a <b>ShippingServiceOptions</b> container. In the past, eBay allowed users to set the shipping cost model to 'Flat' or 'Calculated', and then just pass in one <b>ShippingServiceOptions</b> container with the <b>ShippingServiceOptions.ShipppingService</b> value set to a 'Local Pickup' option. Now, sellers must pass in at least one actual domestic shipping service option in addition to any 'Local Pickup' option, or the listing will be blocked with the following error: <em>17510 - You must specify at least one domestic shipping service, other than or in addition to Local Pickup.</em>
     *  </span>
     *  <br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available
     *  in the buyer's region, it is removed. If no services remain after this
     *  filtering, a warning is returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType[] $shippingServiceOptions
     */
    private $shippingServiceOptions = [

    ];

    /**
     * Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in <b>ShippingServiceOptions</b>.
     *  <br><br>
     *  If you specify multiple <b>InternationalShippingServiceOption</b> nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between <b>InternationalShippingServiceOption</b> nodes.
     *  <br><br>
     *  All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated).
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping or eBay International Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program or eBay International Shipping) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @var \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType[] $internationalShippingServiceOption
     */
    private $internationalShippingServiceOption = [

    ];

    /**
     * The shipping cost model offered by the seller. This is not returned for
     *  various calls since shipping type can be deduced: if a <b>CalculatedShippingRate</b>
     *  structure is returned by the call, the shipping type is Calculated. Otherwise,
     *  it is one of the other non-Calculated shipping types.
     *  <br><br>
     *  <b>GetItemShipping and GetItemTransactions</b>:
     *  If the type was a mix of flat and calculated services, this is
     *  set simply to Flat or Calculated because it is the buyer's
     *  selection that results in one of these.
     *  <br><br>
     *  <b>GetMyeBayBuying</b>:
     *  If the seller has set the <b>ShipToLocation</b> to <code>Worldwide</code> for an item, but has not specified any international shipping service options, <code>NotSpecified</code> is returned as the <b>ShippingType</b> value.
     *
     * @var string $shippingType
     */
    private $shippingType = null;

    /**
     * The sale record ID. Applicable to Selling Manager users.
     *  When an item is sold, Selling Manager generates a sale record.
     *  A sale record contains buyer information, shipping, and other information.
     *  A sale record is displayed in the Sold view in Selling Manager.
     *  Each sale record has a sale record ID.
     *  <br/><br/>
     *  In the following calls,
     *  the value for the sale record ID is in the <b>SellingManagerSalesRecordNumber</b> field:
     *  <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetOrders</b>.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real record number is only returned to the buyer or seller, and a dummy value of <code>0</code> will be returned to all third parties.
     *  <br/><br/>
     *  The sale record ID can be for a single or a multiple line item order.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> and <strong>GetOrders</strong>calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @var int $sellingManagerSalesRecordNumber
     */
    private $sellingManagerSalesRecordNumber = null;

    /**
     * <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @var bool $thirdPartyCheckout
     */
    private $thirdPartyCheckout = null;

    /**
     * Tax details for a jurisdiction, such as a state or province. If no tax table
     *  is associated with the item, a tax table is not returned.
     *  <br><br>
     *  For <b>GetItem</b>, a tax table is returned if it exists when:
     *  <ul>
     *  <li><b>DetailLevel</b> is set to <code>ReturnAll</code> or <b>ItemReturnDescription</b> (in this case,
     *  the value of <b>IncludeTaxTable</b> does not matter)</li>
     *  <li><b>IncludeTaxTable</b> is set to <code>true</code> and <b>DetailLevel</b> is not set or it is set
     *  to <code>ItemReturnAttributes</code></li>
     *  </ul>
     *
     * @var \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxTable
     */
    private $taxTable = null;

    /**
     * <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in order management calls on January 31, 2024.
     *  </span>
     *
     * @var bool $getItFast
     */
    private $getItFast = null;

    /**
     * The shipping service actually used by the seller to ship the item(s) to the
     *  buyer.
     *
     * @var string $shippingServiceUsed
     */
    private $shippingServiceUsed = null;

    /**
     * The field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $defaultShippingCost
     */
    private $defaultShippingCost = null;

    /**
     * On input, this is the ID of the shipping discount to offer for the domestic
     *  shipping services (where the shipping discount is either of type
     *  <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>).
     *  <br/><br/>
     *  On output, this is the ID
     *  of the shipping discount offered and corresponds to whichever is returned:
     *  <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>. Only returned if the calling user is the seller.
     *  <br/><br/>
     *  If the user created a shipping discount profile,
     *  use the <b>ShippingDiscountProfileID</b>.
     *  <br><br>
     *  In the <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing
     *  <b>ShippingDiscountProfileID</b> associated with the item by supplying a value of 0 (zero).
     *  <br><br>
     *  Only returned if the calling user is the seller.
     *
     * @var string $shippingDiscountProfileID
     */
    private $shippingDiscountProfileID = null;

    /**
     * If a flat rate shipping discount was offered for the domestic shipping
     *  services, this contains the details of the flat rate shipping discount.
     *  Otherwise, it is not returned. Only returned if the calling user is the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount
     */
    private $flatShippingDiscount = null;

    /**
     * If a calculated shipping discount was offered for the domestic shipping
     *  services, this contains the details of the calculated shipping discount.
     *  Otherwise, it is not returned. Only returned if the calling user is the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount
     */
    private $calculatedShippingDiscount = null;

    /**
     * On input, this specifies whether to offer the promotional shipping discount for
     *  the domestic shipping services of this listing (only applicable if the seller
     *  has a promotional shipping discount in effect at the moment).
     *  <br><br>
     *  Returned on output only if the seller is making the call. This indicates
     *  whether the promotional shipping discount is being offered for the domestic
     *  shipping services of this listing (if the listing is still active&#8212;this is only
     *  possible if the seller has a promotional shipping discount in effect at the
     *  moment) or whether the discount was offered at the time the listing ended.
     *
     * @var bool $promotionalShippingDiscount
     */
    private $promotionalShippingDiscount = null;

    /**
     * On input, this is the ID of the shipping discount to offer for the
     *  international shipping services (where the shipping discount is either
     *  of type <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>).
     *  <br><br>
     *  In the <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing
     *  <b>InternationalShippingDiscountProfileID</b> associated with the item by supplying a
     *  value of 0 (zero).
     *  <br><br>
     *  Returned on output only if the seller is making the call. The value is
     *  the ID of the shipping discount offered and corresponds to whichever
     *  is returned: <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>.
     *  <br><br>
     *  If the user created a shipping discount profile, use
     *  <b>InternationalShippingDiscountProfileID</b>.
     *
     * @var string $internationalShippingDiscountProfileID
     */
    private $internationalShippingDiscountProfileID = null;

    /**
     * This value is returned only if the seller is making the call. If a flat
     *  rate shipping discount was offered for the international shipping
     *  services, this contains the details of the flat rate shipping discount.
     *  Otherwise, it is not returned.
     *
     * @var \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $internationalFlatShippingDiscount
     */
    private $internationalFlatShippingDiscount = null;

    /**
     * This value is returned only if the seller is making the call. If a
     *  calculated shipping discount was offered for the international shipping
     *  services, this contains the details of the calculated shipping
     *  discount. Otherwise, it is not returned.
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount
     */
    private $internationalCalculatedShippingDiscount = null;

    /**
     * On input, this specifies whether to offer the promotional shipping
     *  discount for the listing's international shipping services (only
     *  applicable if the seller has a promotional shipping discount in effect
     *  at the moment).
     *  <br><br>
     *  Returned on output only if the seller is making the call. This value
     *  indicates whether the promotional shipping discount is being offered
     *  for the international shipping services of this listing (if the listing
     *  is still active&#8212;this is only possible if the seller has a promotional
     *  shipping discount in effect at the moment) or whether the discount was
     *  offered at the time the listing ended.
     *
     * @var bool $internationalPromotionalShippingDiscount
     */
    private $internationalPromotionalShippingDiscount = null;

    /**
     * This value is returned only if the seller is making the call. Contains details of the promotional shipping discount, if such is being offered while the listing is active or if it was offered at the time the listing ended.
     *
     * @var \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     */
    private $promotionalShippingDiscountDetails = null;

    /**
     * Use this field in an Add/Revise/Relist call to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request for each location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  The exclude ship-to location values are eBay regions and countries. To see
     *  the valid exclude ship-to locations for a specified site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ExcludeShippingLocationDetails</b>,
     *  and then look for the <b>ExcludeShippingLocationDetails.Location</b> fields in the response.
     *  Repeat <b>GeteBayDetails</b> for each site on which you list.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocation</b>s to create a set of
     *  international countries and regions to where you will, and will not, ship.
     *  You can list a region in the <b>ShipToLocations</b> field, then exclude specific
     *  countries within that region with this field (for example, you can specify
     *  Africa in <b>ShipToLocations</b>, yet exclude Chad with a <b>ExcludeShipToLocation</b>
     *  setting). In addition, if your <b>ShipToLocations</b> is <code>Worldwide</code>, you can use
     *  this field to specify both regions and countries that you want to exclude
     *  from your shipping destinations.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ShipToLocations</b> and <b>ShippingDetails.ExcludeShipToLocation</b> containers are not applicable for motor vehicle listings on the US, CA, or UK marketplaces. If these containers are sent in the request, they are ignored and a warning is returned.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Any shipping exclusions specified by this field can be overridden by the eBay International Shipping exclusions toggle located under <b>Shipping Preferences</b> in <b>My eBay</b>. For more information on eBay International Shipping, see <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/ebay-international-shipping-program?id=5348">eBay International Shipping program</a>.
     *  </span>
     *  <br>
     *  You can specify a default set of locations to where you will not ship in My
     *  eBay. If you create an Exclude Ship-To List, it is, by default, in effect
     *  when you list items. However, if you specify any value in this field on
     *  input, it nullifies the default settings in your Exclude Ship-To List. (If
     *  you use <b>ExcludeShipToLocation</b> when you list an item, you will need to list
     *  all the locations to where you will not ship the associated item, regardless
     *  of the default settings in your Exclude Ship-To List.)
     *  <br><br>
     *  Specify <code>none</code> in this field to override the default Exclude Ship-To List you
     *  might have set up in My eBay and indicate that you do not want to exclude any
     *  shipping locations from the respective item listing.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> responses on January 31, 2024.
     *  </span>
     *
     * @var string[] $excludeShipToLocation
     */
    private $excludeShipToLocation = [

    ];

    /**
     * This dollar value indicates the cost to buy the shipping label from eBay. Presently, this field is only returned for orders that will go through eBay shipping and its value will be <code>0.0</code>. With eBay shipping, a free shipping label by eBay is downloadable by the seller via the eBay website.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $eBayEstimatedLabelCost
     */
    private $eBayEstimatedLabelCost = null;

    /**
     * Sellers can set up a global Exclude Ship-To List through their My eBay account.
     *  The Exclude Ship-To List defines the countries to where the seller does not
     *  ship, by default.
     *  <br><br>
     *  This flag returns true if the Exclude Ship-To List is enabled by the seller for
     *  the associated item. If <code>false</code>, the seller's Exclude Ship-To List is either not
     *  set up, or it has been overridden by the seller when they listed the item with
     *  ExcludeShipToLocation fields.
     *  <br><br>
     *  In the response, <b>ExcludeShipToLocation</b> fields detail the locations to where the
     *  seller will not ship the item, regardless of the value returned in this field.
     *
     * @var bool $sellerExcludeShipToLocationsPreference
     */
    private $sellerExcludeShipToLocationsPreference = null;

    /**
     * Container for the shipping carrier and tracking information associated with the
     *  shipment of an order.
     *  <br><br>
     *  As each package has a unique tracking number, this container should be
     *  repeated for each package in the order.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Top-rated sellers must have a record of uploading shipment tracking
     *  information (through site or through API) for at least 90 percent of their order line
     *  items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more
     *  information on eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     */
    private $shipmentTrackingDetails = [

    ];

    /**
     * This container is used to reference and apply a seller's domestic and/or international shipping rate tables to a listing. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service (e.g. economy, standard, expedited, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others.
     *  <br><br>
     *  Sellers configure domestic and international shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables to a listing, the shipping cost type must be flat-rate.
     *  <br><br>
     *  For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. To determine if a domestic shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.DomesticRateTable</b> field. Although the <b>GetUser</b> call can be used to see if a domestic shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br><br>
     *  For international shipping rate tables, specific rates may be set up for any and all of the nine geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. To determine if a international shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.InternationalRateTable</b> field. Although the <b>GetUser</b> call can be used to see if an international shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions/countries, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br/><br/>
     *  If you are applying a domestic or international shipping rate table that specifies a surcharge by weight, you must specify the item weight in the <b>ShippingPackageDetails</b> container's <b>WeightMajor</b> and <b>WeightMinor</b> fields, even though the listing is using flat-rate shipping. Do not use any other fields in the <b>ShippingPackageDetails</b> container because none of those fields are applicable in this use case.
     *  <br><br>
     *  This container is only returned in the 'Get' calls if one or more shipping rate tables have been applied to the listing, and if the call is being made by the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Whether a seller is using the old default domestic and international shipping rate tables or the new shipping rate tables, these shipping rate tables are set up in My eBay Shipping Preferences or as part of a Shipping Business Policy. If using the Trading API to create a listing that will use the new shipping rate tables, the <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> fields are used to reference and apply these new shipping rate tables to the listing. If desired, sellers can still use the old default shipping rate tables, but they are not allowed to mix and match old and new shipping rate tables, meaning that they will get an error if they pass in both the old fields (<b>DomesticRateTable</b> and <b>InternationalRateTable</b>) and the new fields (<b>DomesticRateTableId</b> and <b>InternationalRateTableId</b>). The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @var \Nogrod\eBaySDK\Trading\RateTableDetailsType $rateTableDetails
     */
    private $rateTableDetails = null;

    /**
     * Gets as allowPaymentEdit
     *
     * This field is deprecated and has been replaced by the <b>ShippingDetails.PaymentEdited</b> field.
     *
     * @return bool
     */
    public function getAllowPaymentEdit()
    {
        return $this->allowPaymentEdit;
    }

    /**
     * Sets a new allowPaymentEdit
     *
     * This field is deprecated and has been replaced by the <b>ShippingDetails.PaymentEdited</b> field.
     *
     * @param bool $allowPaymentEdit
     * @return self
     */
    public function setAllowPaymentEdit($allowPaymentEdit)
    {
        $this->allowPaymentEdit = $allowPaymentEdit;
        return $this;
    }

    /**
     * Gets as applyShippingDiscount
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getApplyShippingDiscount()
    {
        return $this->applyShippingDiscount;
    }

    /**
     * Sets a new applyShippingDiscount
     *
     * This field is deprecated.
     *
     * @param bool $applyShippingDiscount
     * @return self
     */
    public function setApplyShippingDiscount($applyShippingDiscount)
    {
        $this->applyShippingDiscount = $applyShippingDiscount;
        return $this;
    }

    /**
     * Gets as globalShipping
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>Global Shipping Program</b> (GSP) is only available on the UK marketplace. On the US marketplace, the <b>Global Shipping Program</b> was replaced by the intermediated international shipping program called <b>eBay International Shipping</b>.
     *  <br><br>
     *  <b>eBay International Shipping</b> is an account level setting, and no field will need to be set in a add/revise call to enable this setting. As long as the US seller's account is opted in to <b>eBay International Shipping</b>, this shipping option will be automatically enabled for all listings where international shipping is available. Even if the US seller is opted into <b>eBay International Shipping</b>, that same seller can still also specify individual international shipping service options through the ShippingDetails.InternationalShippingServiceOption container.
     *  </span>
     *  In an Add/Revise/Relist call, this boolean field can be included and set to <code>True</code> if the seller would like to use eBay's Global Shipping Program for orders that are shipped internationally.
     *  <br/><br/>
     *  In 'Get' calls, if this field is returned as <code>True</code>, it indicates that international shipping through the Global Shipping Program is available for the listing. If this field is returned as <code>False</code>, the seller is responsible for shipping the item internationally using one of the specified international shipping service options set for the listing.
     *  <br/><br/>
     *  When calling <strong>RelistFixedPriceItem</strong>, <strong>RelistItem</strong>, <strong>ReviseFixedPriceItem</strong> or <strong>ReviseItem</strong>, you can omit this field if its value doesn't need to change.
     *  <br/><br/>
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
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>Global Shipping Program</b> (GSP) is only available on the UK marketplace. On the US marketplace, the <b>Global Shipping Program</b> was replaced by the intermediated international shipping program called <b>eBay International Shipping</b>.
     *  <br><br>
     *  <b>eBay International Shipping</b> is an account level setting, and no field will need to be set in a add/revise call to enable this setting. As long as the US seller's account is opted in to <b>eBay International Shipping</b>, this shipping option will be automatically enabled for all listings where international shipping is available. Even if the US seller is opted into <b>eBay International Shipping</b>, that same seller can still also specify individual international shipping service options through the ShippingDetails.InternationalShippingServiceOption container.
     *  </span>
     *  In an Add/Revise/Relist call, this boolean field can be included and set to <code>True</code> if the seller would like to use eBay's Global Shipping Program for orders that are shipped internationally.
     *  <br/><br/>
     *  In 'Get' calls, if this field is returned as <code>True</code>, it indicates that international shipping through the Global Shipping Program is available for the listing. If this field is returned as <code>False</code>, the seller is responsible for shipping the item internationally using one of the specified international shipping service options set for the listing.
     *  <br/><br/>
     *  When calling <strong>RelistFixedPriceItem</strong>, <strong>RelistItem</strong>, <strong>ReviseFixedPriceItem</strong> or <strong>ReviseItem</strong>, you can omit this field if its value doesn't need to change.
     *  <br/><br/>
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
     * Gets as calculatedShippingRate
     *
     * Details pertinent to one or more items for which calculated shipping has been
     *  offered by the seller, such as package dimension and weight and
     *  packaging/handling costs. If your call specifies a large-dimension item listed
     *  with UPS, see <a href=
     *  "https://developer.ebay.com/support/kb-article?KBid=1159"
     *  >Dimensional Weight limit on UPS shipping services results in failure of
     *  shipping calculator</a>.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong> and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedShippingRateType
     */
    public function getCalculatedShippingRate()
    {
        return $this->calculatedShippingRate;
    }

    /**
     * Sets a new calculatedShippingRate
     *
     * Details pertinent to one or more items for which calculated shipping has been
     *  offered by the seller, such as package dimension and weight and
     *  packaging/handling costs. If your call specifies a large-dimension item listed
     *  with UPS, see <a href=
     *  "https://developer.ebay.com/support/kb-article?KBid=1159"
     *  >Dimensional Weight limit on UPS shipping services results in failure of
     *  shipping calculator</a>.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong> and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedShippingRateType $calculatedShippingRate
     * @return self
     */
    public function setCalculatedShippingRate(\Nogrod\eBaySDK\Trading\CalculatedShippingRateType $calculatedShippingRate)
    {
        $this->calculatedShippingRate = $calculatedShippingRate;
        return $this;
    }

    /**
     * Gets as changePaymentInstructions
     *
     * Indicates whether the seller specified payment and shipping instructions during checkout.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return bool
     */
    public function getChangePaymentInstructions()
    {
        return $this->changePaymentInstructions;
    }

    /**
     * Sets a new changePaymentInstructions
     *
     * Indicates whether the seller specified payment and shipping instructions during checkout.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param bool $changePaymentInstructions
     * @return self
     */
    public function setChangePaymentInstructions($changePaymentInstructions)
    {
        $this->changePaymentInstructions = $changePaymentInstructions;
        return $this;
    }

    /**
     * Gets as paymentEdited
     *
     * Whether the seller allows the buyer to edit the payment amount for the order.
     *  (Sellers enable this property in their My eBay user preferences on the eBay site.)
     *
     * @return bool
     */
    public function getPaymentEdited()
    {
        return $this->paymentEdited;
    }

    /**
     * Sets a new paymentEdited
     *
     * Whether the seller allows the buyer to edit the payment amount for the order.
     *  (Sellers enable this property in their My eBay user preferences on the eBay site.)
     *
     * @param bool $paymentEdited
     * @return self
     */
    public function setPaymentEdited($paymentEdited)
    {
        $this->paymentEdited = $paymentEdited;
        return $this;
    }

    /**
     * Gets as salesTax
     *
     * This container shows sales tax information for an item in a specific tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
     *  <br><br>
     *  This container can be used in an Add/Revise/Relist/Verify call to set sales tax settings for a specific tax jurisdiction, but it is actually a better practice if a user sets up sales tax rates through the Sales Tax Table tool in My eBay (or by using the <b>SetTaxTable</b> call). A seller's Sales Tax Table is applied to the listing by including the <b>UseTaxTable</b> field in the request and setting its value to <code>true</code>. The <b>GetTaxTable</b> call can be used to retrieve the current sales tax rates for different tax jurisdictions.
     *  <br><br>
     *  This container is only returned in order management 'Get' calls if sales tax is applicable to the order line item. For eBay Collect and Remit states, the sales tax information is displayed in the <b>Transaction.Taxes</b> container instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\SalesTaxType
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * Sets a new salesTax
     *
     * This container shows sales tax information for an item in a specific tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
     *  <br><br>
     *  This container can be used in an Add/Revise/Relist/Verify call to set sales tax settings for a specific tax jurisdiction, but it is actually a better practice if a user sets up sales tax rates through the Sales Tax Table tool in My eBay (or by using the <b>SetTaxTable</b> call). A seller's Sales Tax Table is applied to the listing by including the <b>UseTaxTable</b> field in the request and setting its value to <code>true</code>. The <b>GetTaxTable</b> call can be used to retrieve the current sales tax rates for different tax jurisdictions.
     *  <br><br>
     *  This container is only returned in order management 'Get' calls if sales tax is applicable to the order line item. For eBay Collect and Remit states, the sales tax information is displayed in the <b>Transaction.Taxes</b> container instead.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process.
     *  <br><br>
     *  Currently, sales tax percentage rates can only be specified by sellers in Canada and 5 US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI).
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\SalesTaxType $salesTax
     * @return self
     */
    public function setSalesTax(\Nogrod\eBaySDK\Trading\SalesTaxType $salesTax)
    {
        $this->salesTax = $salesTax;
        return $this;
    }

    /**
     * Gets as shippingRateErrorMessage
     *
     * For most applicable calls, returns the words No Error or returns an error message
     *  related to an attempt to calculate shipping rates. For calculated shipping only.
     *  <br><br>
     *  The message text explains that a postal code is needed to calculate
     *  shipping. Only returned when <b>ItemDetails</b> is set to <code>Fine</code>.
     *
     * @return string
     */
    public function getShippingRateErrorMessage()
    {
        return $this->shippingRateErrorMessage;
    }

    /**
     * Sets a new shippingRateErrorMessage
     *
     * For most applicable calls, returns the words No Error or returns an error message
     *  related to an attempt to calculate shipping rates. For calculated shipping only.
     *  <br><br>
     *  The message text explains that a postal code is needed to calculate
     *  shipping. Only returned when <b>ItemDetails</b> is set to <code>Fine</code>.
     *
     * @param string $shippingRateErrorMessage
     * @return self
     */
    public function setShippingRateErrorMessage($shippingRateErrorMessage)
    {
        $this->shippingRateErrorMessage = $shippingRateErrorMessage;
        return $this;
    }

    /**
     * Gets as shippingRateType
     *
     * A shipping rate scale for shipping through USPS that affects the shipping cost calculated for USPS (lower if <strong>ShippingRateType</strong> is <code>DailyPickup</code>). <strong>ShippingRateType</strong> is returned only if the value of <strong>ShippingService</strong> is one of the USPS shipping services. For calculated shipping only.
     *
     * @return string
     */
    public function getShippingRateType()
    {
        return $this->shippingRateType;
    }

    /**
     * Sets a new shippingRateType
     *
     * A shipping rate scale for shipping through USPS that affects the shipping cost calculated for USPS (lower if <strong>ShippingRateType</strong> is <code>DailyPickup</code>). <strong>ShippingRateType</strong> is returned only if the value of <strong>ShippingService</strong> is one of the USPS shipping services. For calculated shipping only.
     *
     * @param string $shippingRateType
     * @return self
     */
    public function setShippingRateType($shippingRateType)
    {
        $this->shippingRateType = $shippingRateType;
        return $this;
    }

    /**
     * Adds as shippingServiceOptions
     *
     * This container is used to provide details on a specific domestic shipping service option, including the unique identifier of the shipping service option and the costs related to domestic shipping service. A separate <b>ShippingServiceOptions</b> container is needed for each domestic shipping service option that is available to ship the item. Unless a fulfillment business policy is being used, generally at least one <b>ShippingServiceOptions</b> container will be required.
     *  <br><br>
     *  If you specify multiple <b>ShippingServiceOptions</b> nodes, the repeating nodes must be
     *  contiguous. For example, you can insert <b>InternationalShippingServiceOption</b> nodes
     *  after a list of repeating <b>ShippingServiceOptions</b> nodes, but not between them:
     *  <br><br>
     *  <code>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;
     *  </code>
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit
     *  <b>ShippingServiceOptions</b>, eBay will drop the domestic shipping services from the
     *  listing. This may also have unintended side effects, as other fields that depend
     *  on this data may be dropped as well.
     *  <br/><br/>
     *  To retain the shipping services and
     *  dependent fields when you modify other shipping details, it may be simplest to
     *  specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping shipment or eBay International Shipping is offered for the listing). All specified domestic and international
     *  shipping services must be the same shipping type (for example, Flat versus
     *  Calculated).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller has set the shipping cost model to 'Flat' or 'Calculated' (<b>ShippingDetails.ShippingType</b> field), at least one actual shipping service option must be specified through a <b>ShippingServiceOptions</b> container. In the past, eBay allowed users to set the shipping cost model to 'Flat' or 'Calculated', and then just pass in one <b>ShippingServiceOptions</b> container with the <b>ShippingServiceOptions.ShipppingService</b> value set to a 'Local Pickup' option. Now, sellers must pass in at least one actual domestic shipping service option in addition to any 'Local Pickup' option, or the listing will be blocked with the following error: <em>17510 - You must specify at least one domestic shipping service, other than or in addition to Local Pickup.</em>
     *  </span>
     *  <br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available
     *  in the buyer's region, it is removed. If no services remain after this
     *  filtering, a warning is returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceOptions
     */
    public function addToShippingServiceOptions(\Nogrod\eBaySDK\Trading\ShippingServiceOptionsType $shippingServiceOptions)
    {
        $this->shippingServiceOptions[] = $shippingServiceOptions;
        return $this;
    }

    /**
     * isset shippingServiceOptions
     *
     * This container is used to provide details on a specific domestic shipping service option, including the unique identifier of the shipping service option and the costs related to domestic shipping service. A separate <b>ShippingServiceOptions</b> container is needed for each domestic shipping service option that is available to ship the item. Unless a fulfillment business policy is being used, generally at least one <b>ShippingServiceOptions</b> container will be required.
     *  <br><br>
     *  If you specify multiple <b>ShippingServiceOptions</b> nodes, the repeating nodes must be
     *  contiguous. For example, you can insert <b>InternationalShippingServiceOption</b> nodes
     *  after a list of repeating <b>ShippingServiceOptions</b> nodes, but not between them:
     *  <br><br>
     *  <code>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;
     *  </code>
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit
     *  <b>ShippingServiceOptions</b>, eBay will drop the domestic shipping services from the
     *  listing. This may also have unintended side effects, as other fields that depend
     *  on this data may be dropped as well.
     *  <br/><br/>
     *  To retain the shipping services and
     *  dependent fields when you modify other shipping details, it may be simplest to
     *  specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping shipment or eBay International Shipping is offered for the listing). All specified domestic and international
     *  shipping services must be the same shipping type (for example, Flat versus
     *  Calculated).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller has set the shipping cost model to 'Flat' or 'Calculated' (<b>ShippingDetails.ShippingType</b> field), at least one actual shipping service option must be specified through a <b>ShippingServiceOptions</b> container. In the past, eBay allowed users to set the shipping cost model to 'Flat' or 'Calculated', and then just pass in one <b>ShippingServiceOptions</b> container with the <b>ShippingServiceOptions.ShipppingService</b> value set to a 'Local Pickup' option. Now, sellers must pass in at least one actual domestic shipping service option in addition to any 'Local Pickup' option, or the listing will be blocked with the following error: <em>17510 - You must specify at least one domestic shipping service, other than or in addition to Local Pickup.</em>
     *  </span>
     *  <br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available
     *  in the buyer's region, it is removed. If no services remain after this
     *  filtering, a warning is returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServiceOptions($index)
    {
        return isset($this->shippingServiceOptions[$index]);
    }

    /**
     * unset shippingServiceOptions
     *
     * This container is used to provide details on a specific domestic shipping service option, including the unique identifier of the shipping service option and the costs related to domestic shipping service. A separate <b>ShippingServiceOptions</b> container is needed for each domestic shipping service option that is available to ship the item. Unless a fulfillment business policy is being used, generally at least one <b>ShippingServiceOptions</b> container will be required.
     *  <br><br>
     *  If you specify multiple <b>ShippingServiceOptions</b> nodes, the repeating nodes must be
     *  contiguous. For example, you can insert <b>InternationalShippingServiceOption</b> nodes
     *  after a list of repeating <b>ShippingServiceOptions</b> nodes, but not between them:
     *  <br><br>
     *  <code>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;
     *  </code>
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit
     *  <b>ShippingServiceOptions</b>, eBay will drop the domestic shipping services from the
     *  listing. This may also have unintended side effects, as other fields that depend
     *  on this data may be dropped as well.
     *  <br/><br/>
     *  To retain the shipping services and
     *  dependent fields when you modify other shipping details, it may be simplest to
     *  specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping shipment or eBay International Shipping is offered for the listing). All specified domestic and international
     *  shipping services must be the same shipping type (for example, Flat versus
     *  Calculated).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller has set the shipping cost model to 'Flat' or 'Calculated' (<b>ShippingDetails.ShippingType</b> field), at least one actual shipping service option must be specified through a <b>ShippingServiceOptions</b> container. In the past, eBay allowed users to set the shipping cost model to 'Flat' or 'Calculated', and then just pass in one <b>ShippingServiceOptions</b> container with the <b>ShippingServiceOptions.ShipppingService</b> value set to a 'Local Pickup' option. Now, sellers must pass in at least one actual domestic shipping service option in addition to any 'Local Pickup' option, or the listing will be blocked with the following error: <em>17510 - You must specify at least one domestic shipping service, other than or in addition to Local Pickup.</em>
     *  </span>
     *  <br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available
     *  in the buyer's region, it is removed. If no services remain after this
     *  filtering, a warning is returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServiceOptions($index)
    {
        unset($this->shippingServiceOptions[$index]);
    }

    /**
     * Gets as shippingServiceOptions
     *
     * This container is used to provide details on a specific domestic shipping service option, including the unique identifier of the shipping service option and the costs related to domestic shipping service. A separate <b>ShippingServiceOptions</b> container is needed for each domestic shipping service option that is available to ship the item. Unless a fulfillment business policy is being used, generally at least one <b>ShippingServiceOptions</b> container will be required.
     *  <br><br>
     *  If you specify multiple <b>ShippingServiceOptions</b> nodes, the repeating nodes must be
     *  contiguous. For example, you can insert <b>InternationalShippingServiceOption</b> nodes
     *  after a list of repeating <b>ShippingServiceOptions</b> nodes, but not between them:
     *  <br><br>
     *  <code>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;
     *  </code>
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit
     *  <b>ShippingServiceOptions</b>, eBay will drop the domestic shipping services from the
     *  listing. This may also have unintended side effects, as other fields that depend
     *  on this data may be dropped as well.
     *  <br/><br/>
     *  To retain the shipping services and
     *  dependent fields when you modify other shipping details, it may be simplest to
     *  specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping shipment or eBay International Shipping is offered for the listing). All specified domestic and international
     *  shipping services must be the same shipping type (for example, Flat versus
     *  Calculated).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller has set the shipping cost model to 'Flat' or 'Calculated' (<b>ShippingDetails.ShippingType</b> field), at least one actual shipping service option must be specified through a <b>ShippingServiceOptions</b> container. In the past, eBay allowed users to set the shipping cost model to 'Flat' or 'Calculated', and then just pass in one <b>ShippingServiceOptions</b> container with the <b>ShippingServiceOptions.ShipppingService</b> value set to a 'Local Pickup' option. Now, sellers must pass in at least one actual domestic shipping service option in addition to any 'Local Pickup' option, or the listing will be blocked with the following error: <em>17510 - You must specify at least one domestic shipping service, other than or in addition to Local Pickup.</em>
     *  </span>
     *  <br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available
     *  in the buyer's region, it is removed. If no services remain after this
     *  filtering, a warning is returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType[]
     */
    public function getShippingServiceOptions()
    {
        return $this->shippingServiceOptions;
    }

    /**
     * Sets a new shippingServiceOptions
     *
     * This container is used to provide details on a specific domestic shipping service option, including the unique identifier of the shipping service option and the costs related to domestic shipping service. A separate <b>ShippingServiceOptions</b> container is needed for each domestic shipping service option that is available to ship the item. Unless a fulfillment business policy is being used, generally at least one <b>ShippingServiceOptions</b> container will be required.
     *  <br><br>
     *  If you specify multiple <b>ShippingServiceOptions</b> nodes, the repeating nodes must be
     *  contiguous. For example, you can insert <b>InternationalShippingServiceOption</b> nodes
     *  after a list of repeating <b>ShippingServiceOptions</b> nodes, but not between them:
     *  <br><br>
     *  <code>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br>
     *  &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;
     *  </code>
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit
     *  <b>ShippingServiceOptions</b>, eBay will drop the domestic shipping services from the
     *  listing. This may also have unintended side effects, as other fields that depend
     *  on this data may be dropped as well.
     *  <br/><br/>
     *  To retain the shipping services and
     *  dependent fields when you modify other shipping details, it may be simplest to
     *  specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping shipment or eBay International Shipping is offered for the listing). All specified domestic and international
     *  shipping services must be the same shipping type (for example, Flat versus
     *  Calculated).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller has set the shipping cost model to 'Flat' or 'Calculated' (<b>ShippingDetails.ShippingType</b> field), at least one actual shipping service option must be specified through a <b>ShippingServiceOptions</b> container. In the past, eBay allowed users to set the shipping cost model to 'Flat' or 'Calculated', and then just pass in one <b>ShippingServiceOptions</b> container with the <b>ShippingServiceOptions.ShipppingService</b> value set to a 'Local Pickup' option. Now, sellers must pass in at least one actual domestic shipping service option in addition to any 'Local Pickup' option, or the listing will be blocked with the following error: <em>17510 - You must specify at least one domestic shipping service, other than or in addition to Local Pickup.</em>
     *  </span>
     *  <br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available
     *  in the buyer's region, it is removed. If no services remain after this
     *  filtering, a warning is returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType[] $shippingServiceOptions
     * @return self
     */
    public function setShippingServiceOptions(array $shippingServiceOptions)
    {
        $this->shippingServiceOptions = $shippingServiceOptions;
        return $this;
    }

    /**
     * Adds as internationalShippingServiceOption
     *
     * Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in <b>ShippingServiceOptions</b>.
     *  <br><br>
     *  If you specify multiple <b>InternationalShippingServiceOption</b> nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between <b>InternationalShippingServiceOption</b> nodes.
     *  <br><br>
     *  All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated).
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping or eBay International Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program or eBay International Shipping) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType $internationalShippingServiceOption
     */
    public function addToInternationalShippingServiceOption(\Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType $internationalShippingServiceOption)
    {
        $this->internationalShippingServiceOption[] = $internationalShippingServiceOption;
        return $this;
    }

    /**
     * isset internationalShippingServiceOption
     *
     * Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in <b>ShippingServiceOptions</b>.
     *  <br><br>
     *  If you specify multiple <b>InternationalShippingServiceOption</b> nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between <b>InternationalShippingServiceOption</b> nodes.
     *  <br><br>
     *  All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated).
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping or eBay International Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program or eBay International Shipping) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalShippingServiceOption($index)
    {
        return isset($this->internationalShippingServiceOption[$index]);
    }

    /**
     * unset internationalShippingServiceOption
     *
     * Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in <b>ShippingServiceOptions</b>.
     *  <br><br>
     *  If you specify multiple <b>InternationalShippingServiceOption</b> nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between <b>InternationalShippingServiceOption</b> nodes.
     *  <br><br>
     *  All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated).
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping or eBay International Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program or eBay International Shipping) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalShippingServiceOption($index)
    {
        unset($this->internationalShippingServiceOption[$index]);
    }

    /**
     * Gets as internationalShippingServiceOption
     *
     * Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in <b>ShippingServiceOptions</b>.
     *  <br><br>
     *  If you specify multiple <b>InternationalShippingServiceOption</b> nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between <b>InternationalShippingServiceOption</b> nodes.
     *  <br><br>
     *  All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated).
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping or eBay International Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program or eBay International Shipping) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @return \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType[]
     */
    public function getInternationalShippingServiceOption()
    {
        return $this->internationalShippingServiceOption;
    }

    /**
     * Sets a new internationalShippingServiceOption
     *
     * Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in <b>ShippingServiceOptions</b>.
     *  <br><br>
     *  If you specify multiple <b>InternationalShippingServiceOption</b> nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between <b>InternationalShippingServiceOption</b> nodes.
     *  <br><br>
     *  All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated).
     *  <br><br>
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program or eBay International Shipping, only four other international shipping services may be offered (regardless of whether or not Global Shipping or eBay International Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program or eBay International Shipping) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @param \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType[] $internationalShippingServiceOption
     * @return self
     */
    public function setInternationalShippingServiceOption(array $internationalShippingServiceOption)
    {
        $this->internationalShippingServiceOption = $internationalShippingServiceOption;
        return $this;
    }

    /**
     * Gets as shippingType
     *
     * The shipping cost model offered by the seller. This is not returned for
     *  various calls since shipping type can be deduced: if a <b>CalculatedShippingRate</b>
     *  structure is returned by the call, the shipping type is Calculated. Otherwise,
     *  it is one of the other non-Calculated shipping types.
     *  <br><br>
     *  <b>GetItemShipping and GetItemTransactions</b>:
     *  If the type was a mix of flat and calculated services, this is
     *  set simply to Flat or Calculated because it is the buyer's
     *  selection that results in one of these.
     *  <br><br>
     *  <b>GetMyeBayBuying</b>:
     *  If the seller has set the <b>ShipToLocation</b> to <code>Worldwide</code> for an item, but has not specified any international shipping service options, <code>NotSpecified</code> is returned as the <b>ShippingType</b> value.
     *
     * @return string
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }

    /**
     * Sets a new shippingType
     *
     * The shipping cost model offered by the seller. This is not returned for
     *  various calls since shipping type can be deduced: if a <b>CalculatedShippingRate</b>
     *  structure is returned by the call, the shipping type is Calculated. Otherwise,
     *  it is one of the other non-Calculated shipping types.
     *  <br><br>
     *  <b>GetItemShipping and GetItemTransactions</b>:
     *  If the type was a mix of flat and calculated services, this is
     *  set simply to Flat or Calculated because it is the buyer's
     *  selection that results in one of these.
     *  <br><br>
     *  <b>GetMyeBayBuying</b>:
     *  If the seller has set the <b>ShipToLocation</b> to <code>Worldwide</code> for an item, but has not specified any international shipping service options, <code>NotSpecified</code> is returned as the <b>ShippingType</b> value.
     *
     * @param string $shippingType
     * @return self
     */
    public function setShippingType($shippingType)
    {
        $this->shippingType = $shippingType;
        return $this;
    }

    /**
     * Gets as sellingManagerSalesRecordNumber
     *
     * The sale record ID. Applicable to Selling Manager users.
     *  When an item is sold, Selling Manager generates a sale record.
     *  A sale record contains buyer information, shipping, and other information.
     *  A sale record is displayed in the Sold view in Selling Manager.
     *  Each sale record has a sale record ID.
     *  <br/><br/>
     *  In the following calls,
     *  the value for the sale record ID is in the <b>SellingManagerSalesRecordNumber</b> field:
     *  <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetOrders</b>.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real record number is only returned to the buyer or seller, and a dummy value of <code>0</code> will be returned to all third parties.
     *  <br/><br/>
     *  The sale record ID can be for a single or a multiple line item order.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> and <strong>GetOrders</strong>calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @return int
     */
    public function getSellingManagerSalesRecordNumber()
    {
        return $this->sellingManagerSalesRecordNumber;
    }

    /**
     * Sets a new sellingManagerSalesRecordNumber
     *
     * The sale record ID. Applicable to Selling Manager users.
     *  When an item is sold, Selling Manager generates a sale record.
     *  A sale record contains buyer information, shipping, and other information.
     *  A sale record is displayed in the Sold view in Selling Manager.
     *  Each sale record has a sale record ID.
     *  <br/><br/>
     *  In the following calls,
     *  the value for the sale record ID is in the <b>SellingManagerSalesRecordNumber</b> field:
     *  <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, and <b>GetOrders</b>.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real record number is only returned to the buyer or seller, and a dummy value of <code>0</code> will be returned to all third parties.
     *  <br/><br/>
     *  The sale record ID can be for a single or a multiple line item order.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> and <strong>GetOrders</strong>calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @param int $sellingManagerSalesRecordNumber
     * @return self
     */
    public function setSellingManagerSalesRecordNumber($sellingManagerSalesRecordNumber)
    {
        $this->sellingManagerSalesRecordNumber = $sellingManagerSalesRecordNumber;
        return $this;
    }

    /**
     * Gets as thirdPartyCheckout
     *
     * <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @return bool
     */
    public function getThirdPartyCheckout()
    {
        return $this->thirdPartyCheckout;
    }

    /**
     * Sets a new thirdPartyCheckout
     *
     * <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> on January 31, 2024.
     *  </span>
     *
     * @param bool $thirdPartyCheckout
     * @return self
     */
    public function setThirdPartyCheckout($thirdPartyCheckout)
    {
        $this->thirdPartyCheckout = $thirdPartyCheckout;
        return $this;
    }

    /**
     * Adds as taxJurisdiction
     *
     * Tax details for a jurisdiction, such as a state or province. If no tax table
     *  is associated with the item, a tax table is not returned.
     *  <br><br>
     *  For <b>GetItem</b>, a tax table is returned if it exists when:
     *  <ul>
     *  <li><b>DetailLevel</b> is set to <code>ReturnAll</code> or <b>ItemReturnDescription</b> (in this case,
     *  the value of <b>IncludeTaxTable</b> does not matter)</li>
     *  <li><b>IncludeTaxTable</b> is set to <code>true</code> and <b>DetailLevel</b> is not set or it is set
     *  to <code>ItemReturnAttributes</code></li>
     *  </ul>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction
     */
    public function addToTaxTable(\Nogrod\eBaySDK\Trading\TaxJurisdictionType $taxJurisdiction)
    {
        $this->taxTable[] = $taxJurisdiction;
        return $this;
    }

    /**
     * isset taxTable
     *
     * Tax details for a jurisdiction, such as a state or province. If no tax table
     *  is associated with the item, a tax table is not returned.
     *  <br><br>
     *  For <b>GetItem</b>, a tax table is returned if it exists when:
     *  <ul>
     *  <li><b>DetailLevel</b> is set to <code>ReturnAll</code> or <b>ItemReturnDescription</b> (in this case,
     *  the value of <b>IncludeTaxTable</b> does not matter)</li>
     *  <li><b>IncludeTaxTable</b> is set to <code>true</code> and <b>DetailLevel</b> is not set or it is set
     *  to <code>ItemReturnAttributes</code></li>
     *  </ul>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTable($index)
    {
        return isset($this->taxTable[$index]);
    }

    /**
     * unset taxTable
     *
     * Tax details for a jurisdiction, such as a state or province. If no tax table
     *  is associated with the item, a tax table is not returned.
     *  <br><br>
     *  For <b>GetItem</b>, a tax table is returned if it exists when:
     *  <ul>
     *  <li><b>DetailLevel</b> is set to <code>ReturnAll</code> or <b>ItemReturnDescription</b> (in this case,
     *  the value of <b>IncludeTaxTable</b> does not matter)</li>
     *  <li><b>IncludeTaxTable</b> is set to <code>true</code> and <b>DetailLevel</b> is not set or it is set
     *  to <code>ItemReturnAttributes</code></li>
     *  </ul>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTable($index)
    {
        unset($this->taxTable[$index]);
    }

    /**
     * Gets as taxTable
     *
     * Tax details for a jurisdiction, such as a state or province. If no tax table
     *  is associated with the item, a tax table is not returned.
     *  <br><br>
     *  For <b>GetItem</b>, a tax table is returned if it exists when:
     *  <ul>
     *  <li><b>DetailLevel</b> is set to <code>ReturnAll</code> or <b>ItemReturnDescription</b> (in this case,
     *  the value of <b>IncludeTaxTable</b> does not matter)</li>
     *  <li><b>IncludeTaxTable</b> is set to <code>true</code> and <b>DetailLevel</b> is not set or it is set
     *  to <code>ItemReturnAttributes</code></li>
     *  </ul>
     *
     * @return \Nogrod\eBaySDK\Trading\TaxJurisdictionType[]
     */
    public function getTaxTable()
    {
        return $this->taxTable;
    }

    /**
     * Sets a new taxTable
     *
     * Tax details for a jurisdiction, such as a state or province. If no tax table
     *  is associated with the item, a tax table is not returned.
     *  <br><br>
     *  For <b>GetItem</b>, a tax table is returned if it exists when:
     *  <ul>
     *  <li><b>DetailLevel</b> is set to <code>ReturnAll</code> or <b>ItemReturnDescription</b> (in this case,
     *  the value of <b>IncludeTaxTable</b> does not matter)</li>
     *  <li><b>IncludeTaxTable</b> is set to <code>true</code> and <b>DetailLevel</b> is not set or it is set
     *  to <code>ItemReturnAttributes</code></li>
     *  </ul>
     *
     * @param \Nogrod\eBaySDK\Trading\TaxJurisdictionType[] $taxTable
     * @return self
     */
    public function setTaxTable(array $taxTable)
    {
        $this->taxTable = $taxTable;
        return $this;
    }

    /**
     * Gets as getItFast
     *
     * <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in order management calls on January 31, 2024.
     *  </span>
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
     * <br>
     *  <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in order management calls on January 31, 2024.
     *  </span>
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
     * Gets as shippingServiceUsed
     *
     * The shipping service actually used by the seller to ship the item(s) to the
     *  buyer.
     *
     * @return string
     */
    public function getShippingServiceUsed()
    {
        return $this->shippingServiceUsed;
    }

    /**
     * Sets a new shippingServiceUsed
     *
     * The shipping service actually used by the seller to ship the item(s) to the
     *  buyer.
     *
     * @param string $shippingServiceUsed
     * @return self
     */
    public function setShippingServiceUsed($shippingServiceUsed)
    {
        $this->shippingServiceUsed = $shippingServiceUsed;
        return $this;
    }

    /**
     * Gets as defaultShippingCost
     *
     * The field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getDefaultShippingCost()
    {
        return $this->defaultShippingCost;
    }

    /**
     * Sets a new defaultShippingCost
     *
     * The field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $defaultShippingCost
     * @return self
     */
    public function setDefaultShippingCost(\Nogrod\eBaySDK\Trading\AmountType $defaultShippingCost)
    {
        $this->defaultShippingCost = $defaultShippingCost;
        return $this;
    }

    /**
     * Gets as shippingDiscountProfileID
     *
     * On input, this is the ID of the shipping discount to offer for the domestic
     *  shipping services (where the shipping discount is either of type
     *  <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>).
     *  <br/><br/>
     *  On output, this is the ID
     *  of the shipping discount offered and corresponds to whichever is returned:
     *  <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>. Only returned if the calling user is the seller.
     *  <br/><br/>
     *  If the user created a shipping discount profile,
     *  use the <b>ShippingDiscountProfileID</b>.
     *  <br><br>
     *  In the <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing
     *  <b>ShippingDiscountProfileID</b> associated with the item by supplying a value of 0 (zero).
     *  <br><br>
     *  Only returned if the calling user is the seller.
     *
     * @return string
     */
    public function getShippingDiscountProfileID()
    {
        return $this->shippingDiscountProfileID;
    }

    /**
     * Sets a new shippingDiscountProfileID
     *
     * On input, this is the ID of the shipping discount to offer for the domestic
     *  shipping services (where the shipping discount is either of type
     *  <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>).
     *  <br/><br/>
     *  On output, this is the ID
     *  of the shipping discount offered and corresponds to whichever is returned:
     *  <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>. Only returned if the calling user is the seller.
     *  <br/><br/>
     *  If the user created a shipping discount profile,
     *  use the <b>ShippingDiscountProfileID</b>.
     *  <br><br>
     *  In the <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing
     *  <b>ShippingDiscountProfileID</b> associated with the item by supplying a value of 0 (zero).
     *  <br><br>
     *  Only returned if the calling user is the seller.
     *
     * @param string $shippingDiscountProfileID
     * @return self
     */
    public function setShippingDiscountProfileID($shippingDiscountProfileID)
    {
        $this->shippingDiscountProfileID = $shippingDiscountProfileID;
        return $this;
    }

    /**
     * Gets as flatShippingDiscount
     *
     * If a flat rate shipping discount was offered for the domestic shipping
     *  services, this contains the details of the flat rate shipping discount.
     *  Otherwise, it is not returned. Only returned if the calling user is the seller.
     *
     * @return \Nogrod\eBaySDK\Trading\FlatShippingDiscountType
     */
    public function getFlatShippingDiscount()
    {
        return $this->flatShippingDiscount;
    }

    /**
     * Sets a new flatShippingDiscount
     *
     * If a flat rate shipping discount was offered for the domestic shipping
     *  services, this contains the details of the flat rate shipping discount.
     *  Otherwise, it is not returned. Only returned if the calling user is the seller.
     *
     * @param \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount
     * @return self
     */
    public function setFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount)
    {
        $this->flatShippingDiscount = $flatShippingDiscount;
        return $this;
    }

    /**
     * Gets as calculatedShippingDiscount
     *
     * If a calculated shipping discount was offered for the domestic shipping
     *  services, this contains the details of the calculated shipping discount.
     *  Otherwise, it is not returned. Only returned if the calling user is the seller.
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->calculatedShippingDiscount;
    }

    /**
     * Sets a new calculatedShippingDiscount
     *
     * If a calculated shipping discount was offered for the domestic shipping
     *  services, this contains the details of the calculated shipping discount.
     *  Otherwise, it is not returned. Only returned if the calling user is the seller.
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @return self
     */
    public function setCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount)
    {
        $this->calculatedShippingDiscount = $calculatedShippingDiscount;
        return $this;
    }

    /**
     * Gets as promotionalShippingDiscount
     *
     * On input, this specifies whether to offer the promotional shipping discount for
     *  the domestic shipping services of this listing (only applicable if the seller
     *  has a promotional shipping discount in effect at the moment).
     *  <br><br>
     *  Returned on output only if the seller is making the call. This indicates
     *  whether the promotional shipping discount is being offered for the domestic
     *  shipping services of this listing (if the listing is still active&#8212;this is only
     *  possible if the seller has a promotional shipping discount in effect at the
     *  moment) or whether the discount was offered at the time the listing ended.
     *
     * @return bool
     */
    public function getPromotionalShippingDiscount()
    {
        return $this->promotionalShippingDiscount;
    }

    /**
     * Sets a new promotionalShippingDiscount
     *
     * On input, this specifies whether to offer the promotional shipping discount for
     *  the domestic shipping services of this listing (only applicable if the seller
     *  has a promotional shipping discount in effect at the moment).
     *  <br><br>
     *  Returned on output only if the seller is making the call. This indicates
     *  whether the promotional shipping discount is being offered for the domestic
     *  shipping services of this listing (if the listing is still active&#8212;this is only
     *  possible if the seller has a promotional shipping discount in effect at the
     *  moment) or whether the discount was offered at the time the listing ended.
     *
     * @param bool $promotionalShippingDiscount
     * @return self
     */
    public function setPromotionalShippingDiscount($promotionalShippingDiscount)
    {
        $this->promotionalShippingDiscount = $promotionalShippingDiscount;
        return $this;
    }

    /**
     * Gets as internationalShippingDiscountProfileID
     *
     * On input, this is the ID of the shipping discount to offer for the
     *  international shipping services (where the shipping discount is either
     *  of type <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>).
     *  <br><br>
     *  In the <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing
     *  <b>InternationalShippingDiscountProfileID</b> associated with the item by supplying a
     *  value of 0 (zero).
     *  <br><br>
     *  Returned on output only if the seller is making the call. The value is
     *  the ID of the shipping discount offered and corresponds to whichever
     *  is returned: <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>.
     *  <br><br>
     *  If the user created a shipping discount profile, use
     *  <b>InternationalShippingDiscountProfileID</b>.
     *
     * @return string
     */
    public function getInternationalShippingDiscountProfileID()
    {
        return $this->internationalShippingDiscountProfileID;
    }

    /**
     * Sets a new internationalShippingDiscountProfileID
     *
     * On input, this is the ID of the shipping discount to offer for the
     *  international shipping services (where the shipping discount is either
     *  of type <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>).
     *  <br><br>
     *  In the <b>RelistItem</b> and <b>ReviseItem</b> family of calls, you can remove the existing
     *  <b>InternationalShippingDiscountProfileID</b> associated with the item by supplying a
     *  value of 0 (zero).
     *  <br><br>
     *  Returned on output only if the seller is making the call. The value is
     *  the ID of the shipping discount offered and corresponds to whichever
     *  is returned: <b>FlatShippingDiscount</b> or <b>CalculatedShippingDiscount</b>.
     *  <br><br>
     *  If the user created a shipping discount profile, use
     *  <b>InternationalShippingDiscountProfileID</b>.
     *
     * @param string $internationalShippingDiscountProfileID
     * @return self
     */
    public function setInternationalShippingDiscountProfileID($internationalShippingDiscountProfileID)
    {
        $this->internationalShippingDiscountProfileID = $internationalShippingDiscountProfileID;
        return $this;
    }

    /**
     * Gets as internationalFlatShippingDiscount
     *
     * This value is returned only if the seller is making the call. If a flat
     *  rate shipping discount was offered for the international shipping
     *  services, this contains the details of the flat rate shipping discount.
     *  Otherwise, it is not returned.
     *
     * @return \Nogrod\eBaySDK\Trading\FlatShippingDiscountType
     */
    public function getInternationalFlatShippingDiscount()
    {
        return $this->internationalFlatShippingDiscount;
    }

    /**
     * Sets a new internationalFlatShippingDiscount
     *
     * This value is returned only if the seller is making the call. If a flat
     *  rate shipping discount was offered for the international shipping
     *  services, this contains the details of the flat rate shipping discount.
     *  Otherwise, it is not returned.
     *
     * @param \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $internationalFlatShippingDiscount
     * @return self
     */
    public function setInternationalFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType $internationalFlatShippingDiscount)
    {
        $this->internationalFlatShippingDiscount = $internationalFlatShippingDiscount;
        return $this;
    }

    /**
     * Gets as internationalCalculatedShippingDiscount
     *
     * This value is returned only if the seller is making the call. If a
     *  calculated shipping discount was offered for the international shipping
     *  services, this contains the details of the calculated shipping
     *  discount. Otherwise, it is not returned.
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType
     */
    public function getInternationalCalculatedShippingDiscount()
    {
        return $this->internationalCalculatedShippingDiscount;
    }

    /**
     * Sets a new internationalCalculatedShippingDiscount
     *
     * This value is returned only if the seller is making the call. If a
     *  calculated shipping discount was offered for the international shipping
     *  services, this contains the details of the calculated shipping
     *  discount. Otherwise, it is not returned.
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount
     * @return self
     */
    public function setInternationalCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount)
    {
        $this->internationalCalculatedShippingDiscount = $internationalCalculatedShippingDiscount;
        return $this;
    }

    /**
     * Gets as internationalPromotionalShippingDiscount
     *
     * On input, this specifies whether to offer the promotional shipping
     *  discount for the listing's international shipping services (only
     *  applicable if the seller has a promotional shipping discount in effect
     *  at the moment).
     *  <br><br>
     *  Returned on output only if the seller is making the call. This value
     *  indicates whether the promotional shipping discount is being offered
     *  for the international shipping services of this listing (if the listing
     *  is still active&#8212;this is only possible if the seller has a promotional
     *  shipping discount in effect at the moment) or whether the discount was
     *  offered at the time the listing ended.
     *
     * @return bool
     */
    public function getInternationalPromotionalShippingDiscount()
    {
        return $this->internationalPromotionalShippingDiscount;
    }

    /**
     * Sets a new internationalPromotionalShippingDiscount
     *
     * On input, this specifies whether to offer the promotional shipping
     *  discount for the listing's international shipping services (only
     *  applicable if the seller has a promotional shipping discount in effect
     *  at the moment).
     *  <br><br>
     *  Returned on output only if the seller is making the call. This value
     *  indicates whether the promotional shipping discount is being offered
     *  for the international shipping services of this listing (if the listing
     *  is still active&#8212;this is only possible if the seller has a promotional
     *  shipping discount in effect at the moment) or whether the discount was
     *  offered at the time the listing ended.
     *
     * @param bool $internationalPromotionalShippingDiscount
     * @return self
     */
    public function setInternationalPromotionalShippingDiscount($internationalPromotionalShippingDiscount)
    {
        $this->internationalPromotionalShippingDiscount = $internationalPromotionalShippingDiscount;
        return $this;
    }

    /**
     * Gets as promotionalShippingDiscountDetails
     *
     * This value is returned only if the seller is making the call. Contains details of the promotional shipping discount, if such is being offered while the listing is active or if it was offered at the time the listing ended.
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->promotionalShippingDiscountDetails;
    }

    /**
     * Sets a new promotionalShippingDiscountDetails
     *
     * This value is returned only if the seller is making the call. Contains details of the promotional shipping discount, if such is being offered while the listing is active or if it was offered at the time the listing ended.
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @return self
     */
    public function setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails)
    {
        $this->promotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        return $this;
    }

    /**
     * Adds as excludeShipToLocation
     *
     * Use this field in an Add/Revise/Relist call to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request for each location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  The exclude ship-to location values are eBay regions and countries. To see
     *  the valid exclude ship-to locations for a specified site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ExcludeShippingLocationDetails</b>,
     *  and then look for the <b>ExcludeShippingLocationDetails.Location</b> fields in the response.
     *  Repeat <b>GeteBayDetails</b> for each site on which you list.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocation</b>s to create a set of
     *  international countries and regions to where you will, and will not, ship.
     *  You can list a region in the <b>ShipToLocations</b> field, then exclude specific
     *  countries within that region with this field (for example, you can specify
     *  Africa in <b>ShipToLocations</b>, yet exclude Chad with a <b>ExcludeShipToLocation</b>
     *  setting). In addition, if your <b>ShipToLocations</b> is <code>Worldwide</code>, you can use
     *  this field to specify both regions and countries that you want to exclude
     *  from your shipping destinations.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ShipToLocations</b> and <b>ShippingDetails.ExcludeShipToLocation</b> containers are not applicable for motor vehicle listings on the US, CA, or UK marketplaces. If these containers are sent in the request, they are ignored and a warning is returned.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Any shipping exclusions specified by this field can be overridden by the eBay International Shipping exclusions toggle located under <b>Shipping Preferences</b> in <b>My eBay</b>. For more information on eBay International Shipping, see <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/ebay-international-shipping-program?id=5348">eBay International Shipping program</a>.
     *  </span>
     *  <br>
     *  You can specify a default set of locations to where you will not ship in My
     *  eBay. If you create an Exclude Ship-To List, it is, by default, in effect
     *  when you list items. However, if you specify any value in this field on
     *  input, it nullifies the default settings in your Exclude Ship-To List. (If
     *  you use <b>ExcludeShipToLocation</b> when you list an item, you will need to list
     *  all the locations to where you will not ship the associated item, regardless
     *  of the default settings in your Exclude Ship-To List.)
     *  <br><br>
     *  Specify <code>none</code> in this field to override the default Exclude Ship-To List you
     *  might have set up in My eBay and indicate that you do not want to exclude any
     *  shipping locations from the respective item listing.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> responses on January 31, 2024.
     *  </span>
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
     * Use this field in an Add/Revise/Relist call to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request for each location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  The exclude ship-to location values are eBay regions and countries. To see
     *  the valid exclude ship-to locations for a specified site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ExcludeShippingLocationDetails</b>,
     *  and then look for the <b>ExcludeShippingLocationDetails.Location</b> fields in the response.
     *  Repeat <b>GeteBayDetails</b> for each site on which you list.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocation</b>s to create a set of
     *  international countries and regions to where you will, and will not, ship.
     *  You can list a region in the <b>ShipToLocations</b> field, then exclude specific
     *  countries within that region with this field (for example, you can specify
     *  Africa in <b>ShipToLocations</b>, yet exclude Chad with a <b>ExcludeShipToLocation</b>
     *  setting). In addition, if your <b>ShipToLocations</b> is <code>Worldwide</code>, you can use
     *  this field to specify both regions and countries that you want to exclude
     *  from your shipping destinations.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ShipToLocations</b> and <b>ShippingDetails.ExcludeShipToLocation</b> containers are not applicable for motor vehicle listings on the US, CA, or UK marketplaces. If these containers are sent in the request, they are ignored and a warning is returned.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Any shipping exclusions specified by this field can be overridden by the eBay International Shipping exclusions toggle located under <b>Shipping Preferences</b> in <b>My eBay</b>. For more information on eBay International Shipping, see <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/ebay-international-shipping-program?id=5348">eBay International Shipping program</a>.
     *  </span>
     *  <br>
     *  You can specify a default set of locations to where you will not ship in My
     *  eBay. If you create an Exclude Ship-To List, it is, by default, in effect
     *  when you list items. However, if you specify any value in this field on
     *  input, it nullifies the default settings in your Exclude Ship-To List. (If
     *  you use <b>ExcludeShipToLocation</b> when you list an item, you will need to list
     *  all the locations to where you will not ship the associated item, regardless
     *  of the default settings in your Exclude Ship-To List.)
     *  <br><br>
     *  Specify <code>none</code> in this field to override the default Exclude Ship-To List you
     *  might have set up in My eBay and indicate that you do not want to exclude any
     *  shipping locations from the respective item listing.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> responses on January 31, 2024.
     *  </span>
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
     * Use this field in an Add/Revise/Relist call to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request for each location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  The exclude ship-to location values are eBay regions and countries. To see
     *  the valid exclude ship-to locations for a specified site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ExcludeShippingLocationDetails</b>,
     *  and then look for the <b>ExcludeShippingLocationDetails.Location</b> fields in the response.
     *  Repeat <b>GeteBayDetails</b> for each site on which you list.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocation</b>s to create a set of
     *  international countries and regions to where you will, and will not, ship.
     *  You can list a region in the <b>ShipToLocations</b> field, then exclude specific
     *  countries within that region with this field (for example, you can specify
     *  Africa in <b>ShipToLocations</b>, yet exclude Chad with a <b>ExcludeShipToLocation</b>
     *  setting). In addition, if your <b>ShipToLocations</b> is <code>Worldwide</code>, you can use
     *  this field to specify both regions and countries that you want to exclude
     *  from your shipping destinations.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ShipToLocations</b> and <b>ShippingDetails.ExcludeShipToLocation</b> containers are not applicable for motor vehicle listings on the US, CA, or UK marketplaces. If these containers are sent in the request, they are ignored and a warning is returned.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Any shipping exclusions specified by this field can be overridden by the eBay International Shipping exclusions toggle located under <b>Shipping Preferences</b> in <b>My eBay</b>. For more information on eBay International Shipping, see <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/ebay-international-shipping-program?id=5348">eBay International Shipping program</a>.
     *  </span>
     *  <br>
     *  You can specify a default set of locations to where you will not ship in My
     *  eBay. If you create an Exclude Ship-To List, it is, by default, in effect
     *  when you list items. However, if you specify any value in this field on
     *  input, it nullifies the default settings in your Exclude Ship-To List. (If
     *  you use <b>ExcludeShipToLocation</b> when you list an item, you will need to list
     *  all the locations to where you will not ship the associated item, regardless
     *  of the default settings in your Exclude Ship-To List.)
     *  <br><br>
     *  Specify <code>none</code> in this field to override the default Exclude Ship-To List you
     *  might have set up in My eBay and indicate that you do not want to exclude any
     *  shipping locations from the respective item listing.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> responses on January 31, 2024.
     *  </span>
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
     * Use this field in an Add/Revise/Relist call to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request for each location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  The exclude ship-to location values are eBay regions and countries. To see
     *  the valid exclude ship-to locations for a specified site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ExcludeShippingLocationDetails</b>,
     *  and then look for the <b>ExcludeShippingLocationDetails.Location</b> fields in the response.
     *  Repeat <b>GeteBayDetails</b> for each site on which you list.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocation</b>s to create a set of
     *  international countries and regions to where you will, and will not, ship.
     *  You can list a region in the <b>ShipToLocations</b> field, then exclude specific
     *  countries within that region with this field (for example, you can specify
     *  Africa in <b>ShipToLocations</b>, yet exclude Chad with a <b>ExcludeShipToLocation</b>
     *  setting). In addition, if your <b>ShipToLocations</b> is <code>Worldwide</code>, you can use
     *  this field to specify both regions and countries that you want to exclude
     *  from your shipping destinations.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ShipToLocations</b> and <b>ShippingDetails.ExcludeShipToLocation</b> containers are not applicable for motor vehicle listings on the US, CA, or UK marketplaces. If these containers are sent in the request, they are ignored and a warning is returned.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Any shipping exclusions specified by this field can be overridden by the eBay International Shipping exclusions toggle located under <b>Shipping Preferences</b> in <b>My eBay</b>. For more information on eBay International Shipping, see <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/ebay-international-shipping-program?id=5348">eBay International Shipping program</a>.
     *  </span>
     *  <br>
     *  You can specify a default set of locations to where you will not ship in My
     *  eBay. If you create an Exclude Ship-To List, it is, by default, in effect
     *  when you list items. However, if you specify any value in this field on
     *  input, it nullifies the default settings in your Exclude Ship-To List. (If
     *  you use <b>ExcludeShipToLocation</b> when you list an item, you will need to list
     *  all the locations to where you will not ship the associated item, regardless
     *  of the default settings in your Exclude Ship-To List.)
     *  <br><br>
     *  Specify <code>none</code> in this field to override the default Exclude Ship-To List you
     *  might have set up in My eBay and indicate that you do not want to exclude any
     *  shipping locations from the respective item listing.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> responses on January 31, 2024.
     *  </span>
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
     * Use this field in an Add/Revise/Relist call to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request for each location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  The exclude ship-to location values are eBay regions and countries. To see
     *  the valid exclude ship-to locations for a specified site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>ExcludeShippingLocationDetails</b>,
     *  and then look for the <b>ExcludeShippingLocationDetails.Location</b> fields in the response.
     *  Repeat <b>GeteBayDetails</b> for each site on which you list.
     *  <br><br>
     *  This field works in conjunction with <b>Item.ShipToLocation</b>s to create a set of
     *  international countries and regions to where you will, and will not, ship.
     *  You can list a region in the <b>ShipToLocations</b> field, then exclude specific
     *  countries within that region with this field (for example, you can specify
     *  Africa in <b>ShipToLocations</b>, yet exclude Chad with a <b>ExcludeShipToLocation</b>
     *  setting). In addition, if your <b>ShipToLocations</b> is <code>Worldwide</code>, you can use
     *  this field to specify both regions and countries that you want to exclude
     *  from your shipping destinations.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>ShipToLocations</b> and <b>ShippingDetails.ExcludeShipToLocation</b> containers are not applicable for motor vehicle listings on the US, CA, or UK marketplaces. If these containers are sent in the request, they are ignored and a warning is returned.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Any shipping exclusions specified by this field can be overridden by the eBay International Shipping exclusions toggle located under <b>Shipping Preferences</b> in <b>My eBay</b>. For more information on eBay International Shipping, see <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/ebay-international-shipping-program?id=5348">eBay International Shipping program</a>.
     *  </span>
     *  <br>
     *  You can specify a default set of locations to where you will not ship in My
     *  eBay. If you create an Exclude Ship-To List, it is, by default, in effect
     *  when you list items. However, if you specify any value in this field on
     *  input, it nullifies the default settings in your Exclude Ship-To List. (If
     *  you use <b>ExcludeShipToLocation</b> when you list an item, you will need to list
     *  all the locations to where you will not ship the associated item, regardless
     *  of the default settings in your Exclude Ship-To List.)
     *  <br><br>
     *  Specify <code>none</code> in this field to override the default Exclude Ship-To List you
     *  might have set up in My eBay and indicate that you do not want to exclude any
     *  shipping locations from the respective item listing.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> This field will stop being returned in <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> responses on January 31, 2024.
     *  </span>
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
     * Gets as eBayEstimatedLabelCost
     *
     * This dollar value indicates the cost to buy the shipping label from eBay. Presently, this field is only returned for orders that will go through eBay shipping and its value will be <code>0.0</code>. With eBay shipping, a free shipping label by eBay is downloadable by the seller via the eBay website.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getEBayEstimatedLabelCost()
    {
        return $this->eBayEstimatedLabelCost;
    }

    /**
     * Sets a new eBayEstimatedLabelCost
     *
     * This dollar value indicates the cost to buy the shipping label from eBay. Presently, this field is only returned for orders that will go through eBay shipping and its value will be <code>0.0</code>. With eBay shipping, a free shipping label by eBay is downloadable by the seller via the eBay website.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $eBayEstimatedLabelCost
     * @return self
     */
    public function setEBayEstimatedLabelCost(\Nogrod\eBaySDK\Trading\AmountType $eBayEstimatedLabelCost)
    {
        $this->eBayEstimatedLabelCost = $eBayEstimatedLabelCost;
        return $this;
    }

    /**
     * Gets as sellerExcludeShipToLocationsPreference
     *
     * Sellers can set up a global Exclude Ship-To List through their My eBay account.
     *  The Exclude Ship-To List defines the countries to where the seller does not
     *  ship, by default.
     *  <br><br>
     *  This flag returns true if the Exclude Ship-To List is enabled by the seller for
     *  the associated item. If <code>false</code>, the seller's Exclude Ship-To List is either not
     *  set up, or it has been overridden by the seller when they listed the item with
     *  ExcludeShipToLocation fields.
     *  <br><br>
     *  In the response, <b>ExcludeShipToLocation</b> fields detail the locations to where the
     *  seller will not ship the item, regardless of the value returned in this field.
     *
     * @return bool
     */
    public function getSellerExcludeShipToLocationsPreference()
    {
        return $this->sellerExcludeShipToLocationsPreference;
    }

    /**
     * Sets a new sellerExcludeShipToLocationsPreference
     *
     * Sellers can set up a global Exclude Ship-To List through their My eBay account.
     *  The Exclude Ship-To List defines the countries to where the seller does not
     *  ship, by default.
     *  <br><br>
     *  This flag returns true if the Exclude Ship-To List is enabled by the seller for
     *  the associated item. If <code>false</code>, the seller's Exclude Ship-To List is either not
     *  set up, or it has been overridden by the seller when they listed the item with
     *  ExcludeShipToLocation fields.
     *  <br><br>
     *  In the response, <b>ExcludeShipToLocation</b> fields detail the locations to where the
     *  seller will not ship the item, regardless of the value returned in this field.
     *
     * @param bool $sellerExcludeShipToLocationsPreference
     * @return self
     */
    public function setSellerExcludeShipToLocationsPreference($sellerExcludeShipToLocationsPreference)
    {
        $this->sellerExcludeShipToLocationsPreference = $sellerExcludeShipToLocationsPreference;
        return $this;
    }

    /**
     * Adds as shipmentTrackingDetails
     *
     * Container for the shipping carrier and tracking information associated with the
     *  shipment of an order.
     *  <br><br>
     *  As each package has a unique tracking number, this container should be
     *  repeated for each package in the order.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Top-rated sellers must have a record of uploading shipment tracking
     *  information (through site or through API) for at least 90 percent of their order line
     *  items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more
     *  information on eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType $shipmentTrackingDetails
     */
    public function addToShipmentTrackingDetails(\Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType $shipmentTrackingDetails)
    {
        $this->shipmentTrackingDetails[] = $shipmentTrackingDetails;
        return $this;
    }

    /**
     * isset shipmentTrackingDetails
     *
     * Container for the shipping carrier and tracking information associated with the
     *  shipment of an order.
     *  <br><br>
     *  As each package has a unique tracking number, this container should be
     *  repeated for each package in the order.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Top-rated sellers must have a record of uploading shipment tracking
     *  information (through site or through API) for at least 90 percent of their order line
     *  items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more
     *  information on eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentTrackingDetails($index)
    {
        return isset($this->shipmentTrackingDetails[$index]);
    }

    /**
     * unset shipmentTrackingDetails
     *
     * Container for the shipping carrier and tracking information associated with the
     *  shipment of an order.
     *  <br><br>
     *  As each package has a unique tracking number, this container should be
     *  repeated for each package in the order.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Top-rated sellers must have a record of uploading shipment tracking
     *  information (through site or through API) for at least 90 percent of their order line
     *  items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more
     *  information on eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentTrackingDetails($index)
    {
        unset($this->shipmentTrackingDetails[$index]);
    }

    /**
     * Gets as shipmentTrackingDetails
     *
     * Container for the shipping carrier and tracking information associated with the
     *  shipment of an order.
     *  <br><br>
     *  As each package has a unique tracking number, this container should be
     *  repeated for each package in the order.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Top-rated sellers must have a record of uploading shipment tracking
     *  information (through site or through API) for at least 90 percent of their order line
     *  items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more
     *  information on eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType[]
     */
    public function getShipmentTrackingDetails()
    {
        return $this->shipmentTrackingDetails;
    }

    /**
     * Sets a new shipmentTrackingDetails
     *
     * Container for the shipping carrier and tracking information associated with the
     *  shipment of an order.
     *  <br><br>
     *  As each package has a unique tracking number, this container should be
     *  repeated for each package in the order.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Top-rated sellers must have a record of uploading shipment tracking
     *  information (through site or through API) for at least 90 percent of their order line
     *  items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more
     *  information on eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> responses.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @return self
     */
    public function setShipmentTrackingDetails(array $shipmentTrackingDetails)
    {
        $this->shipmentTrackingDetails = $shipmentTrackingDetails;
        return $this;
    }

    /**
     * Gets as rateTableDetails
     *
     * This container is used to reference and apply a seller's domestic and/or international shipping rate tables to a listing. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service (e.g. economy, standard, expedited, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others.
     *  <br><br>
     *  Sellers configure domestic and international shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables to a listing, the shipping cost type must be flat-rate.
     *  <br><br>
     *  For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. To determine if a domestic shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.DomesticRateTable</b> field. Although the <b>GetUser</b> call can be used to see if a domestic shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br><br>
     *  For international shipping rate tables, specific rates may be set up for any and all of the nine geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. To determine if a international shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.InternationalRateTable</b> field. Although the <b>GetUser</b> call can be used to see if an international shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions/countries, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br/><br/>
     *  If you are applying a domestic or international shipping rate table that specifies a surcharge by weight, you must specify the item weight in the <b>ShippingPackageDetails</b> container's <b>WeightMajor</b> and <b>WeightMinor</b> fields, even though the listing is using flat-rate shipping. Do not use any other fields in the <b>ShippingPackageDetails</b> container because none of those fields are applicable in this use case.
     *  <br><br>
     *  This container is only returned in the 'Get' calls if one or more shipping rate tables have been applied to the listing, and if the call is being made by the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Whether a seller is using the old default domestic and international shipping rate tables or the new shipping rate tables, these shipping rate tables are set up in My eBay Shipping Preferences or as part of a Shipping Business Policy. If using the Trading API to create a listing that will use the new shipping rate tables, the <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> fields are used to reference and apply these new shipping rate tables to the listing. If desired, sellers can still use the old default shipping rate tables, but they are not allowed to mix and match old and new shipping rate tables, meaning that they will get an error if they pass in both the old fields (<b>DomesticRateTable</b> and <b>InternationalRateTable</b>) and the new fields (<b>DomesticRateTableId</b> and <b>InternationalRateTableId</b>). The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @return \Nogrod\eBaySDK\Trading\RateTableDetailsType
     */
    public function getRateTableDetails()
    {
        return $this->rateTableDetails;
    }

    /**
     * Sets a new rateTableDetails
     *
     * This container is used to reference and apply a seller's domestic and/or international shipping rate tables to a listing. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service (e.g. economy, standard, expedited, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others.
     *  <br><br>
     *  Sellers configure domestic and international shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables to a listing, the shipping cost type must be flat-rate.
     *  <br><br>
     *  For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. To determine if a domestic shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.DomesticRateTable</b> field. Although the <b>GetUser</b> call can be used to see if a domestic shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br><br>
     *  For international shipping rate tables, specific rates may be set up for any and all of the nine geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. To determine if a international shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.InternationalRateTable</b> field. Although the <b>GetUser</b> call can be used to see if an international shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions/countries, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br/><br/>
     *  If you are applying a domestic or international shipping rate table that specifies a surcharge by weight, you must specify the item weight in the <b>ShippingPackageDetails</b> container's <b>WeightMajor</b> and <b>WeightMinor</b> fields, even though the listing is using flat-rate shipping. Do not use any other fields in the <b>ShippingPackageDetails</b> container because none of those fields are applicable in this use case.
     *  <br><br>
     *  This container is only returned in the 'Get' calls if one or more shipping rate tables have been applied to the listing, and if the call is being made by the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Whether a seller is using the old default domestic and international shipping rate tables or the new shipping rate tables, these shipping rate tables are set up in My eBay Shipping Preferences or as part of a Shipping Business Policy. If using the Trading API to create a listing that will use the new shipping rate tables, the <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> fields are used to reference and apply these new shipping rate tables to the listing. If desired, sellers can still use the old default shipping rate tables, but they are not allowed to mix and match old and new shipping rate tables, meaning that they will get an error if they pass in both the old fields (<b>DomesticRateTable</b> and <b>InternationalRateTable</b>) and the new fields (<b>DomesticRateTableId</b> and <b>InternationalRateTableId</b>). The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @param \Nogrod\eBaySDK\Trading\RateTableDetailsType $rateTableDetails
     * @return self
     */
    public function setRateTableDetails(\Nogrod\eBaySDK\Trading\RateTableDetailsType $rateTableDetails)
    {
        $this->rateTableDetails = $rateTableDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAllowPaymentEdit();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AllowPaymentEdit", $value);
        }
        $value = $this->getApplyShippingDiscount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplyShippingDiscount", $value);
        }
        $value = $this->getGlobalShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalShipping", $value);
        }
        $value = $this->getCalculatedShippingRate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingRate", $value);
        }
        $value = $this->getChangePaymentInstructions();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ChangePaymentInstructions", $value);
        }
        $value = $this->getPaymentEdited();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentEdited", $value);
        }
        $value = $this->getSalesTax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SalesTax", $value);
        }
        $value = $this->getShippingRateErrorMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingRateErrorMessage", $value);
        }
        $value = $this->getShippingRateType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingRateType", $value);
        }
        $value = $this->getShippingServiceOptions();
        if (null !== $value && [] !== $this->getShippingServiceOptions()) {
            $writer->write(array_map(function ($v) {return ["ShippingServiceOptions" => $v];}, $value));
        }
        $value = $this->getInternationalShippingServiceOption();
        if (null !== $value && [] !== $this->getInternationalShippingServiceOption()) {
            $writer->write(array_map(function ($v) {return ["InternationalShippingServiceOption" => $v];}, $value));
        }
        $value = $this->getShippingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingType", $value);
        }
        $value = $this->getSellingManagerSalesRecordNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerSalesRecordNumber", $value);
        }
        $value = $this->getThirdPartyCheckout();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ThirdPartyCheckout", $value);
        }
        $value = $this->getTaxTable();
        if (null !== $value && [] !== $this->getTaxTable()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxTable", array_map(function ($v) {return ["TaxJurisdiction" => $v];}, $value));
        }
        $value = $this->getGetItFast();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GetItFast", $value);
        }
        $value = $this->getShippingServiceUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceUsed", $value);
        }
        $value = $this->getDefaultShippingCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DefaultShippingCost", $value);
        }
        $value = $this->getShippingDiscountProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDiscountProfileID", $value);
        }
        $value = $this->getFlatShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FlatShippingDiscount", $value);
        }
        $value = $this->getCalculatedShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingDiscount", $value);
        }
        $value = $this->getPromotionalShippingDiscount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscount", $value);
        }
        $value = $this->getInternationalShippingDiscountProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalShippingDiscountProfileID", $value);
        }
        $value = $this->getInternationalFlatShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalFlatShippingDiscount", $value);
        }
        $value = $this->getInternationalCalculatedShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalCalculatedShippingDiscount", $value);
        }
        $value = $this->getInternationalPromotionalShippingDiscount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalPromotionalShippingDiscount", $value);
        }
        $value = $this->getPromotionalShippingDiscountDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscountDetails", $value);
        }
        $value = $this->getExcludeShipToLocation();
        if (null !== $value && [] !== $this->getExcludeShipToLocation()) {
            $writer->write(array_map(function ($v) {return ["ExcludeShipToLocation" => $v];}, $value));
        }
        $value = $this->getEBayEstimatedLabelCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayEstimatedLabelCost", $value);
        }
        $value = $this->getSellerExcludeShipToLocationsPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerExcludeShipToLocationsPreference", $value);
        }
        $value = $this->getShipmentTrackingDetails();
        if (null !== $value && [] !== $this->getShipmentTrackingDetails()) {
            $writer->write(array_map(function ($v) {return ["ShipmentTrackingDetails" => $v];}, $value));
        }
        $value = $this->getRateTableDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RateTableDetails", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ShippingDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllowPaymentEdit');
        if (null !== $value) {
            $this->setAllowPaymentEdit(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplyShippingDiscount');
        if (null !== $value) {
            $this->setApplyShippingDiscount(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShipping');
        if (null !== $value) {
            $this->setGlobalShipping(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingRate');
        if (null !== $value) {
            $this->setCalculatedShippingRate(\Nogrod\eBaySDK\Trading\CalculatedShippingRateType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ChangePaymentInstructions');
        if (null !== $value) {
            $this->setChangePaymentInstructions(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentEdited');
        if (null !== $value) {
            $this->setPaymentEdited(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTax');
        if (null !== $value) {
            $this->setSalesTax(\Nogrod\eBaySDK\Trading\SalesTaxType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingRateErrorMessage');
        if (null !== $value) {
            $this->setShippingRateErrorMessage($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingRateType');
        if (null !== $value) {
            $this->setShippingRateType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceOptions');
        if (null !== $value) {
            $this->setShippingServiceOptions(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ShippingServiceOptionsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingServiceOption');
        if (null !== $value) {
            $this->setInternationalShippingServiceOption(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\InternationalShippingServiceOptionsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingType');
        if (null !== $value) {
            $this->setShippingType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerSalesRecordNumber');
        if (null !== $value) {
            $this->setSellingManagerSalesRecordNumber($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThirdPartyCheckout');
        if (null !== $value) {
            $this->setThirdPartyCheckout(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxTable');
        if (null !== $value) {
            $this->setTaxTable(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TaxJurisdictionType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}TaxJurisdiction'));}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GetItFast');
        if (null !== $value) {
            $this->setGetItFast(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceUsed');
        if (null !== $value) {
            $this->setShippingServiceUsed($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}DefaultShippingCost');
        if (null !== $value) {
            $this->setDefaultShippingCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDiscountProfileID');
        if (null !== $value) {
            $this->setShippingDiscountProfileID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatShippingDiscount');
        if (null !== $value) {
            $this->setFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingDiscount');
        if (null !== $value) {
            $this->setCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscount');
        if (null !== $value) {
            $this->setPromotionalShippingDiscount(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingDiscountProfileID');
        if (null !== $value) {
            $this->setInternationalShippingDiscountProfileID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalFlatShippingDiscount');
        if (null !== $value) {
            $this->setInternationalFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalCalculatedShippingDiscount');
        if (null !== $value) {
            $this->setInternationalCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalPromotionalShippingDiscount');
        if (null !== $value) {
            $this->setInternationalPromotionalShippingDiscount(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscountDetails');
        if (null !== $value) {
            $this->setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeShipToLocation', true);
        if (null !== $value) {
            $this->setExcludeShipToLocation($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayEstimatedLabelCost');
        if (null !== $value) {
            $this->setEBayEstimatedLabelCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerExcludeShipToLocationsPreference');
        if (null !== $value) {
            $this->setSellerExcludeShipToLocationsPreference(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingDetails');
        if (null !== $value) {
            $this->setShipmentTrackingDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ShipmentTrackingDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}RateTableDetails');
        if (null !== $value) {
            $this->setRateTableDetails(\Nogrod\eBaySDK\Trading\RateTableDetailsType::fromKeyValue($value));
        }
    }
}
