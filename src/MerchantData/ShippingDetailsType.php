<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * Indicates whether eBay's Global Shipping Program is offered for the listing. If the value of <strong>GlobalShipping</strong> is <code>True</code>, international shipping through the Global Shipping Program is available for the listing, and eBay automatically sets one of the available shipping service options to <code>International Priority Shipping</code>. If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying one or more international shipping service options if the seller is willing to ship internationally.
     *  <br/><br/>
     *  When calling <strong>RelistFixedPriceItem</strong>, <strong>RelistItem</strong>, <strong>ReviseFixedPriceItem</strong> or <strong>ReviseItem</strong>, you can omit this field if its value doesn't need to change.
     *  <br/><br/>
     *  Before using this field for a listing, ensure that the seller and the item being listed are eligible for the Global Shipping Program.
     *
     * @var bool $globalShipping
     */
    private $globalShipping = null;

    /**
     * Details pertinent to one or more items for which calculated shipping has been
     *  offered by the seller, such as package dimension and weight and
     *  packaging/handling costs. If your call specifies a large-dimension item listed
     *  with UPS, see <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1159"
     *  >Dimensional Weight limit on UPS shipping services results in failure of
     *  shipping calculator</a>.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\CalculatedShippingRateType $calculatedShippingRate
     */
    private $calculatedShippingRate = null;

    /**
     * Whether the seller specified payment and shipping instructions during checkout
     *  (for example, to update the details of an order). Valid for flat and calculated
     *  shipping.
     *
     * @var bool $changePaymentInstructions
     */
    private $changePaymentInstructions = null;

    /**
     * Whether or not the buyer selected to pay for insurance as an option offered by
     *  the seller. This only has a value after the buyer has gone through checkout and
     *  selected the insurance preference.
     *  <br><br>
     *  Valid only on the following sites: FR and IT
     *
     * @var bool $insuranceWanted
     */
    private $insuranceWanted = null;

    /**
     * Whether the seller allows the buyer to edit the payment amount for the order.
     *  (Sellers enable this property in their My eBay user preferences on the eBay site.)
     *
     * @var bool $paymentEdited
     */
    private $paymentEdited = null;

    /**
     * This free-form string field gives sellers the ability add detailed payment instructions to their listings.
     *  The payment instructions appear on eBay's View Item and Checkout pages.
     *  <br><br>
     *  Sellers can use this field to specify payment instructions, how soon the item will shipped, feedback
     *  instructions, and other items that the buyer should be aware of when they bid on or buy an item.
     *  eBay recommends sellers use this field to clarify payment policies for motor vehicle listings on eBay Motors.
     *  For example, sellers can include the specifics on the deposit (if required), pickup/delivery arrangements,
     *  and full payment details on the vehicle.
     *  <br><br>
     *  The field allows only 500 characters as input, but due to the way the eBay web site UI treats characters,
     *  this field can return more than 500 characters in the response. For example, characters like & and '
     *  (ampersand and single quote) count as 5 characters each.
     *  <br><br>
     *  This field can be specified regardless of the shipping type. Use <b>DeletedField</b> to remove
     *  this value when revising or relisting an item.
     *  <br><br>
     *  Applicable to eBay Motors (usually used to elaborate on the return policy).
     *  <br>
     *
     * @var string $paymentInstructions
     */
    private $paymentInstructions = null;

    /**
     * This container shows the sales tax rate percentage for a specific tax jurisdiction. Additionally, it indicates whether or not the seller applies sales tax to shipping charges in addition to the item cost. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
     *  <br><br>
     *  This container can be used in an Add/Revise/Relist/Verify call to set sales tax settings for a specific tax jurisdiction, but it is actually a better practice if a user sets up sales tax rates through the Sales Tax Table tool in My eBay (or by using the <b>SetTaxTable</b> call). A seller's Sales Tax Table is applied to the listing by including the <b>UseTaxTable</b> field in the request and setting its value to <code>true</code>. The <b>GetTaxTable</b> call can be used to retrieve the current sales tax rates for different tax jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied by the seller for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay during checkout process. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For eBay managed payment orders that are subject to 'Collect and Remit' taxes, these taxes will only be shown in the <b>eBayCollectAndRemitTaxes</b> container for line items, and the <b>SalesTax</b> will not be returned at all. For non-eBay managed payment orders, the 'Collect and Remit' taxes will be shown in both the <b>eBayCollectAndRemitTaxes</b> and <b>SalesTax</b> containers.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\SalesTaxType $salesTax
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
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing). All specified domestic and international
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
     * @var \Nogrod\eBaySDK\MerchantData\ShippingServiceOptionsType[] $shippingServiceOptions
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
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @var \Nogrod\eBaySDK\MerchantData\InternationalShippingServiceOptionsType[] $internationalShippingServiceOption
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
     *  <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>, <b>GetOrderTransactions</b>.
     *  In the Selling Manager calls, the value for the sale record ID is in the
     *  <b>SaleRecordID</b> field.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real record number is only returned to the buyer or seller, and a dummy value of <code>0</code> will be returned to all third parties.
     *  <br/><br/>
     *  The sale record ID can be for a single or a multiple line item order.
     *
     * @var int $sellingManagerSalesRecordNumber
     */
    private $sellingManagerSalesRecordNumber = null;

    /**
     * This field is deprecated.
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
     * @var \Nogrod\eBaySDK\MerchantData\TaxJurisdictionType[] $taxTable
     */
    private $taxTable = null;

    /**
     * This field is deprecated.
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
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $defaultShippingCost
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
     * @var \Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType $flatShippingDiscount
     */
    private $flatShippingDiscount = null;

    /**
     * If a calculated shipping discount was offered for the domestic shipping
     *  services, this contains the details of the calculated shipping discount.
     *  Otherwise, it is not returned. Only returned if the calling user is the seller.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType $calculatedShippingDiscount
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
     * @var \Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType $internationalFlatShippingDiscount
     */
    private $internationalFlatShippingDiscount = null;

    /**
     * This value is returned only if the seller is making the call. If a
     *  calculated shipping discount was offered for the international shipping
     *  services, this contains the details of the calculated shipping
     *  discount. Otherwise, it is not returned.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount
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
     * @var \Nogrod\eBaySDK\MerchantData\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     */
    private $promotionalShippingDiscountDetails = null;

    /**
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the request if 'COD' (cash-on-delivery) is a
     *  valid payment method for the site and it is included as a <b>PaymentMethods</b>
     *  value in the same request.
     *  <br><br>
     *  This field is only returned if set for the listing.
     *  <br><br>
     *  To see if 'COD' is a supported payment method for a site, call <b>GetCategoryFeatures</b>, specifying the listing category ID, and including the <b>FeatureID</b> field set to <b>PaymentMethods</b>. Look for
     *  a value of 'CashOnPickup' in one of the <b>Category.PaymentMethod</b>
     *  fields in the response.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $cODCost
     */
    private $cODCost = null;

    /**
     * Use this field to specify an international country or region, or a special domestic
     *  location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you
     *  will not ship the associated item. Repeat this element in the call request for each
     *  location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  Set <b>ShipToRegistrationCountry</b> to <code>true</code> to have your <b>ExcludeShipToLocation</b>
     *  settings applied to your listing. The locations you have excluded display in
     *  the Shipping and Handling section of your item listing.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
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
     *  <br><br>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  To enable your default Exclude Ship-To List, you must enable Exclude
     *  Shipping Locations and Buyer Requirements in your My eBay Site Preferences.
     *  For details, see the KnowledgeBase Article <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1495"
     *  >HowTo: ExcludeShipToLocation</a>.
     *  </span>
     *
     * @var string[] $excludeShipToLocation
     */
    private $excludeShipToLocation = [
        
    ];

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
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     */
    private $shipmentTrackingDetails = [
        
    ];

    /**
     * This container is used to reference and apply a seller's specific domestic and/or international shipping rate tables to a listing. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service (e.g. economy, standard, expedited, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others.
     *  <br><br>
     *  Sellers configure domestic and international shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables, the shipping cost type must be flat-rate.
     *  <br><br>
     *  For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. To determine if a domestic shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.DomesticRateTable</b> field. Although the <b>GetUser</b> call can be used to see if a domestic shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br><br>
     *  For international shipping rate tables, specific rates may be set up for any and all of the nine geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. To determine if a international shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.InternationalRateTable</b> field. Although the <b>GetUser</b> call can be used to see if an international shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions/countries, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br/><br/>
     *  If you are applying a domestic or international shipping rate table that specifies a surcharge by weight, you must specify the item weight in the <b>ShippingPackageDetails</b> container's <b>WeightMajor</b> and <b>WeightMinor</b> fields, even though the listing is using flat-rate shipping. Do not use any other fields in the <b>ShippingPackageDetails</b> container because none of those fields are applicable in this use case.
     *  <br><br>
     *  This container is only returned in the 'Get' calls if one or more shipping rate tables have been applied to the listing, and if the call is being made by the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, UK, Germany, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Whether a seller is using the old default domestic and international shipping rate tables or the new shipping rate tables, these shipping rate tables are set up in My eBay Shipping Preferences or as part of a Shipping Business Policy. If using the Trading API to create a listing that will use the new shipping rate tables, the <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> fields are used to reference and apply these new shipping rate tables to the listing. If desired, sellers can still use the old default shipping rate tables, but they are not allowed to mix and match old and new shipping rate tables, meaning that they will get an error if they pass in both the old fields (<b>DomesticRateTable</b> and <b>InternationalRateTable</b>) and the new fields (<b>DomesticRateTableId</b> and <b>InternationalRateTableId</b>). The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\RateTableDetailsType $rateTableDetails
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
     * Indicates whether eBay's Global Shipping Program is offered for the listing. If the value of <strong>GlobalShipping</strong> is <code>True</code>, international shipping through the Global Shipping Program is available for the listing, and eBay automatically sets one of the available shipping service options to <code>International Priority Shipping</code>. If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying one or more international shipping service options if the seller is willing to ship internationally.
     *  <br/><br/>
     *  When calling <strong>RelistFixedPriceItem</strong>, <strong>RelistItem</strong>, <strong>ReviseFixedPriceItem</strong> or <strong>ReviseItem</strong>, you can omit this field if its value doesn't need to change.
     *  <br/><br/>
     *  Before using this field for a listing, ensure that the seller and the item being listed are eligible for the Global Shipping Program.
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
     * Indicates whether eBay's Global Shipping Program is offered for the listing. If the value of <strong>GlobalShipping</strong> is <code>True</code>, international shipping through the Global Shipping Program is available for the listing, and eBay automatically sets one of the available shipping service options to <code>International Priority Shipping</code>. If the value of <strong>GlobalShipping</strong> is <code>false</code>, the seller is responsible for specifying one or more international shipping service options if the seller is willing to ship internationally.
     *  <br/><br/>
     *  When calling <strong>RelistFixedPriceItem</strong>, <strong>RelistItem</strong>, <strong>ReviseFixedPriceItem</strong> or <strong>ReviseItem</strong>, you can omit this field if its value doesn't need to change.
     *  <br/><br/>
     *  Before using this field for a listing, ensure that the seller and the item being listed are eligible for the Global Shipping Program.
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
     *  "https://ebaydts.com/eBayKBDetails?KBid=1159"
     *  >Dimensional Weight limit on UPS shipping services results in failure of
     *  shipping calculator</a>.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\CalculatedShippingRateType
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
     *  "https://ebaydts.com/eBayKBDetails?KBid=1159"
     *  >Dimensional Weight limit on UPS shipping services results in failure of
     *  shipping calculator</a>.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container are used to specify package dimensions and package weight, and these values should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\CalculatedShippingRateType $calculatedShippingRate
     * @return self
     */
    public function setCalculatedShippingRate(\Nogrod\eBaySDK\MerchantData\CalculatedShippingRateType $calculatedShippingRate)
    {
        $this->calculatedShippingRate = $calculatedShippingRate;
        return $this;
    }

    /**
     * Gets as changePaymentInstructions
     *
     * Whether the seller specified payment and shipping instructions during checkout
     *  (for example, to update the details of an order). Valid for flat and calculated
     *  shipping.
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
     * Whether the seller specified payment and shipping instructions during checkout
     *  (for example, to update the details of an order). Valid for flat and calculated
     *  shipping.
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
     * Gets as insuranceWanted
     *
     * Whether or not the buyer selected to pay for insurance as an option offered by
     *  the seller. This only has a value after the buyer has gone through checkout and
     *  selected the insurance preference.
     *  <br><br>
     *  Valid only on the following sites: FR and IT
     *
     * @return bool
     */
    public function getInsuranceWanted()
    {
        return $this->insuranceWanted;
    }

    /**
     * Sets a new insuranceWanted
     *
     * Whether or not the buyer selected to pay for insurance as an option offered by
     *  the seller. This only has a value after the buyer has gone through checkout and
     *  selected the insurance preference.
     *  <br><br>
     *  Valid only on the following sites: FR and IT
     *
     * @param bool $insuranceWanted
     * @return self
     */
    public function setInsuranceWanted($insuranceWanted)
    {
        $this->insuranceWanted = $insuranceWanted;
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
     * Gets as paymentInstructions
     *
     * This free-form string field gives sellers the ability add detailed payment instructions to their listings.
     *  The payment instructions appear on eBay's View Item and Checkout pages.
     *  <br><br>
     *  Sellers can use this field to specify payment instructions, how soon the item will shipped, feedback
     *  instructions, and other items that the buyer should be aware of when they bid on or buy an item.
     *  eBay recommends sellers use this field to clarify payment policies for motor vehicle listings on eBay Motors.
     *  For example, sellers can include the specifics on the deposit (if required), pickup/delivery arrangements,
     *  and full payment details on the vehicle.
     *  <br><br>
     *  The field allows only 500 characters as input, but due to the way the eBay web site UI treats characters,
     *  this field can return more than 500 characters in the response. For example, characters like & and '
     *  (ampersand and single quote) count as 5 characters each.
     *  <br><br>
     *  This field can be specified regardless of the shipping type. Use <b>DeletedField</b> to remove
     *  this value when revising or relisting an item.
     *  <br><br>
     *  Applicable to eBay Motors (usually used to elaborate on the return policy).
     *  <br>
     *
     * @return string
     */
    public function getPaymentInstructions()
    {
        return $this->paymentInstructions;
    }

    /**
     * Sets a new paymentInstructions
     *
     * This free-form string field gives sellers the ability add detailed payment instructions to their listings.
     *  The payment instructions appear on eBay's View Item and Checkout pages.
     *  <br><br>
     *  Sellers can use this field to specify payment instructions, how soon the item will shipped, feedback
     *  instructions, and other items that the buyer should be aware of when they bid on or buy an item.
     *  eBay recommends sellers use this field to clarify payment policies for motor vehicle listings on eBay Motors.
     *  For example, sellers can include the specifics on the deposit (if required), pickup/delivery arrangements,
     *  and full payment details on the vehicle.
     *  <br><br>
     *  The field allows only 500 characters as input, but due to the way the eBay web site UI treats characters,
     *  this field can return more than 500 characters in the response. For example, characters like & and '
     *  (ampersand and single quote) count as 5 characters each.
     *  <br><br>
     *  This field can be specified regardless of the shipping type. Use <b>DeletedField</b> to remove
     *  this value when revising or relisting an item.
     *  <br><br>
     *  Applicable to eBay Motors (usually used to elaborate on the return policy).
     *  <br>
     *
     * @param string $paymentInstructions
     * @return self
     */
    public function setPaymentInstructions($paymentInstructions)
    {
        $this->paymentInstructions = $paymentInstructions;
        return $this;
    }

    /**
     * Gets as salesTax
     *
     * This container shows the sales tax rate percentage for a specific tax jurisdiction. Additionally, it indicates whether or not the seller applies sales tax to shipping charges in addition to the item cost. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
     *  <br><br>
     *  This container can be used in an Add/Revise/Relist/Verify call to set sales tax settings for a specific tax jurisdiction, but it is actually a better practice if a user sets up sales tax rates through the Sales Tax Table tool in My eBay (or by using the <b>SetTaxTable</b> call). A seller's Sales Tax Table is applied to the listing by including the <b>UseTaxTable</b> field in the request and setting its value to <code>true</code>. The <b>GetTaxTable</b> call can be used to retrieve the current sales tax rates for different tax jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied by the seller for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay during checkout process. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For eBay managed payment orders that are subject to 'Collect and Remit' taxes, these taxes will only be shown in the <b>eBayCollectAndRemitTaxes</b> container for line items, and the <b>SalesTax</b> will not be returned at all. For non-eBay managed payment orders, the 'Collect and Remit' taxes will be shown in both the <b>eBayCollectAndRemitTaxes</b> and <b>SalesTax</b> containers.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\SalesTaxType
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * Sets a new salesTax
     *
     * This container shows the sales tax rate percentage for a specific tax jurisdiction. Additionally, it indicates whether or not the seller applies sales tax to shipping charges in addition to the item cost. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
     *  <br><br>
     *  This container can be used in an Add/Revise/Relist/Verify call to set sales tax settings for a specific tax jurisdiction, but it is actually a better practice if a user sets up sales tax rates through the Sales Tax Table tool in My eBay (or by using the <b>SetTaxTable</b> call). A seller's Sales Tax Table is applied to the listing by including the <b>UseTaxTable</b> field in the request and setting its value to <code>true</code>. The <b>GetTaxTable</b> call can be used to retrieve the current sales tax rates for different tax jurisdictions.
     *  <br><br>
     *  This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied by the seller for a state that is subject to 'eBay Collect and Remit', this sales tax rate will be ignored by eBay during checkout process. For a list of the US states that will become subject to 'eBay Collect and Remit' (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b> For eBay managed payment orders that are subject to 'Collect and Remit' taxes, these taxes will only be shown in the <b>eBayCollectAndRemitTaxes</b> container for line items, and the <b>SalesTax</b> will not be returned at all. For non-eBay managed payment orders, the 'Collect and Remit' taxes will be shown in both the <b>eBayCollectAndRemitTaxes</b> and <b>SalesTax</b> containers.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\SalesTaxType $salesTax
     * @return self
     */
    public function setSalesTax(\Nogrod\eBaySDK\MerchantData\SalesTaxType $salesTax)
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
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing). All specified domestic and international
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
     * @param \Nogrod\eBaySDK\MerchantData\ShippingServiceOptionsType $shippingServiceOptions
     */
    public function addToShippingServiceOptions(\Nogrod\eBaySDK\MerchantData\ShippingServiceOptionsType $shippingServiceOptions)
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
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing). All specified domestic and international
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
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing). All specified domestic and international
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
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing). All specified domestic and international
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
     * @return \Nogrod\eBaySDK\MerchantData\ShippingServiceOptionsType[]
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
     *  international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing). All specified domestic and international
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
     * @param \Nogrod\eBaySDK\MerchantData\ShippingServiceOptionsType[] $shippingServiceOptions
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
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\InternationalShippingServiceOptionsType $internationalShippingServiceOption
     */
    public function addToInternationalShippingServiceOption(\Nogrod\eBaySDK\MerchantData\InternationalShippingServiceOptionsType $internationalShippingServiceOption)
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
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
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
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
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
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @return \Nogrod\eBaySDK\MerchantData\InternationalShippingServiceOptionsType[]
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
     *  A seller can offer up to four domestic shipping services and up to five international shipping services. However, if the seller is opted in to the Global Shipping Program, only four other international shipping services may be offered (regardless of whether or not Global Shipping is offered for the listing).
     *  <br><br>
     *  If you specify <b>ShippingDetails</b> when you revise or relist an item but you omit <b>InternationalShippingServiceOption</b>, eBay will drop the international shipping services (except the Global Shipping Program) from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all <b>ShippingDetails</b> that you still want to include in the listing.
     *  <br><br>
     *  For <b>GetItemShipping</b>, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned.
     *
     * @param \Nogrod\eBaySDK\MerchantData\InternationalShippingServiceOptionsType[] $internationalShippingServiceOption
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
     *  <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>, <b>GetOrderTransactions</b>.
     *  In the Selling Manager calls, the value for the sale record ID is in the
     *  <b>SaleRecordID</b> field.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real record number is only returned to the buyer or seller, and a dummy value of <code>0</code> will be returned to all third parties.
     *  <br/><br/>
     *  The sale record ID can be for a single or a multiple line item order.
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
     *  <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>, <b>GetOrderTransactions</b>.
     *  In the Selling Manager calls, the value for the sale record ID is in the
     *  <b>SaleRecordID</b> field.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real record number is only returned to the buyer or seller, and a dummy value of <code>0</code> will be returned to all third parties.
     *  <br/><br/>
     *  The sale record ID can be for a single or a multiple line item order.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * @param \Nogrod\eBaySDK\MerchantData\TaxJurisdictionType $taxJurisdiction
     */
    public function addToTaxTable(\Nogrod\eBaySDK\MerchantData\TaxJurisdictionType $taxJurisdiction)
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
     * @return \Nogrod\eBaySDK\MerchantData\TaxJurisdictionType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\TaxJurisdictionType[] $taxTable
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $defaultShippingCost
     * @return self
     */
    public function setDefaultShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType $defaultShippingCost)
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
     * @return \Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType
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
     * @param \Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType $flatShippingDiscount
     * @return self
     */
    public function setFlatShippingDiscount(\Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType $flatShippingDiscount)
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
     * @return \Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType
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
     * @param \Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @return self
     */
    public function setCalculatedShippingDiscount(\Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType $calculatedShippingDiscount)
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
     * @return \Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType
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
     * @param \Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType $internationalFlatShippingDiscount
     * @return self
     */
    public function setInternationalFlatShippingDiscount(\Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType $internationalFlatShippingDiscount)
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
     * @return \Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType
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
     * @param \Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount
     * @return self
     */
    public function setInternationalCalculatedShippingDiscount(\Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType $internationalCalculatedShippingDiscount)
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
     * @return \Nogrod\eBaySDK\MerchantData\PromotionalShippingDiscountDetailsType
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
     * @param \Nogrod\eBaySDK\MerchantData\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @return self
     */
    public function setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\MerchantData\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails)
    {
        $this->promotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        return $this;
    }

    /**
     * Gets as cODCost
     *
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the request if 'COD' (cash-on-delivery) is a
     *  valid payment method for the site and it is included as a <b>PaymentMethods</b>
     *  value in the same request.
     *  <br><br>
     *  This field is only returned if set for the listing.
     *  <br><br>
     *  To see if 'COD' is a supported payment method for a site, call <b>GetCategoryFeatures</b>, specifying the listing category ID, and including the <b>FeatureID</b> field set to <b>PaymentMethods</b>. Look for
     *  a value of 'CashOnPickup' in one of the <b>Category.PaymentMethod</b>
     *  fields in the response.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getCODCost()
    {
        return $this->cODCost;
    }

    /**
     * Sets a new cODCost
     *
     * This dollar value indicates the money due from the buyer upon delivery of the item.
     *  <br><br>
     *  This field should only be specified in the request if 'COD' (cash-on-delivery) is a
     *  valid payment method for the site and it is included as a <b>PaymentMethods</b>
     *  value in the same request.
     *  <br><br>
     *  This field is only returned if set for the listing.
     *  <br><br>
     *  To see if 'COD' is a supported payment method for a site, call <b>GetCategoryFeatures</b>, specifying the listing category ID, and including the <b>FeatureID</b> field set to <b>PaymentMethods</b>. Look for
     *  a value of 'CashOnPickup' in one of the <b>Category.PaymentMethod</b>
     *  fields in the response.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $cODCost
     * @return self
     */
    public function setCODCost(\Nogrod\eBaySDK\MerchantData\AmountType $cODCost)
    {
        $this->cODCost = $cODCost;
        return $this;
    }

    /**
     * Adds as excludeShipToLocation
     *
     * Use this field to specify an international country or region, or a special domestic
     *  location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you
     *  will not ship the associated item. Repeat this element in the call request for each
     *  location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  Set <b>ShipToRegistrationCountry</b> to <code>true</code> to have your <b>ExcludeShipToLocation</b>
     *  settings applied to your listing. The locations you have excluded display in
     *  the Shipping and Handling section of your item listing.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
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
     *  <br><br>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  To enable your default Exclude Ship-To List, you must enable Exclude
     *  Shipping Locations and Buyer Requirements in your My eBay Site Preferences.
     *  For details, see the KnowledgeBase Article <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1495"
     *  >HowTo: ExcludeShipToLocation</a>.
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
     * Use this field to specify an international country or region, or a special domestic
     *  location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you
     *  will not ship the associated item. Repeat this element in the call request for each
     *  location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  Set <b>ShipToRegistrationCountry</b> to <code>true</code> to have your <b>ExcludeShipToLocation</b>
     *  settings applied to your listing. The locations you have excluded display in
     *  the Shipping and Handling section of your item listing.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
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
     *  <br><br>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  To enable your default Exclude Ship-To List, you must enable Exclude
     *  Shipping Locations and Buyer Requirements in your My eBay Site Preferences.
     *  For details, see the KnowledgeBase Article <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1495"
     *  >HowTo: ExcludeShipToLocation</a>.
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
     * Use this field to specify an international country or region, or a special domestic
     *  location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you
     *  will not ship the associated item. Repeat this element in the call request for each
     *  location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  Set <b>ShipToRegistrationCountry</b> to <code>true</code> to have your <b>ExcludeShipToLocation</b>
     *  settings applied to your listing. The locations you have excluded display in
     *  the Shipping and Handling section of your item listing.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
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
     *  <br><br>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  To enable your default Exclude Ship-To List, you must enable Exclude
     *  Shipping Locations and Buyer Requirements in your My eBay Site Preferences.
     *  For details, see the KnowledgeBase Article <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1495"
     *  >HowTo: ExcludeShipToLocation</a>.
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
     * Use this field to specify an international country or region, or a special domestic
     *  location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you
     *  will not ship the associated item. Repeat this element in the call request for each
     *  location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  Set <b>ShipToRegistrationCountry</b> to <code>true</code> to have your <b>ExcludeShipToLocation</b>
     *  settings applied to your listing. The locations you have excluded display in
     *  the Shipping and Handling section of your item listing.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
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
     *  <br><br>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  To enable your default Exclude Ship-To List, you must enable Exclude
     *  Shipping Locations and Buyer Requirements in your My eBay Site Preferences.
     *  For details, see the KnowledgeBase Article <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1495"
     *  >HowTo: ExcludeShipToLocation</a>.
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
     * Use this field to specify an international country or region, or a special domestic
     *  location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you
     *  will not ship the associated item. Repeat this element in the call request for each
     *  location that you want to exclude as a shipping destination for your item.
     *  <br><br>
     *  Set <b>ShipToRegistrationCountry</b> to <code>true</code> to have your <b>ExcludeShipToLocation</b>
     *  settings applied to your listing. The locations you have excluded display in
     *  the Shipping and Handling section of your item listing.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
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
     *  <br><br>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  To enable your default Exclude Ship-To List, you must enable Exclude
     *  Shipping Locations and Buyer Requirements in your My eBay Site Preferences.
     *  For details, see the KnowledgeBase Article <a href=
     *  "https://ebaydts.com/eBayKBDetails?KBid=1495"
     *  >HowTo: ExcludeShipToLocation</a>.
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
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType $shipmentTrackingDetails
     */
    public function addToShipmentTrackingDetails(\Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType $shipmentTrackingDetails)
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
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
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
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
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
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType[]
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
     *  Shipment tracking information does not appear in Merchant Data API's <b>OrderReport</b> or <b>SoldReport</b> responses, because once shipment tracking information is provided to the buyer, the order/order line item is considered acknowledged, and acknowledged orders do not show up in <b>OrderReport</b> or <b>SoldReport</b> responses.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
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
     * This container is used to reference and apply a seller's specific domestic and/or international shipping rate tables to a listing. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service (e.g. economy, standard, expedited, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others.
     *  <br><br>
     *  Sellers configure domestic and international shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables, the shipping cost type must be flat-rate.
     *  <br><br>
     *  For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. To determine if a domestic shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.DomesticRateTable</b> field. Although the <b>GetUser</b> call can be used to see if a domestic shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br><br>
     *  For international shipping rate tables, specific rates may be set up for any and all of the nine geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. To determine if a international shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.InternationalRateTable</b> field. Although the <b>GetUser</b> call can be used to see if an international shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions/countries, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br/><br/>
     *  If you are applying a domestic or international shipping rate table that specifies a surcharge by weight, you must specify the item weight in the <b>ShippingPackageDetails</b> container's <b>WeightMajor</b> and <b>WeightMinor</b> fields, even though the listing is using flat-rate shipping. Do not use any other fields in the <b>ShippingPackageDetails</b> container because none of those fields are applicable in this use case.
     *  <br><br>
     *  This container is only returned in the 'Get' calls if one or more shipping rate tables have been applied to the listing, and if the call is being made by the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, UK, Germany, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Whether a seller is using the old default domestic and international shipping rate tables or the new shipping rate tables, these shipping rate tables are set up in My eBay Shipping Preferences or as part of a Shipping Business Policy. If using the Trading API to create a listing that will use the new shipping rate tables, the <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> fields are used to reference and apply these new shipping rate tables to the listing. If desired, sellers can still use the old default shipping rate tables, but they are not allowed to mix and match old and new shipping rate tables, meaning that they will get an error if they pass in both the old fields (<b>DomesticRateTable</b> and <b>InternationalRateTable</b>) and the new fields (<b>DomesticRateTableId</b> and <b>InternationalRateTableId</b>). The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\RateTableDetailsType
     */
    public function getRateTableDetails()
    {
        return $this->rateTableDetails;
    }

    /**
     * Sets a new rateTableDetails
     *
     * This container is used to reference and apply a seller's specific domestic and/or international shipping rate tables to a listing. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service (e.g. economy, standard, expedited, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others.
     *  <br><br>
     *  Sellers configure domestic and international shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables, the shipping cost type must be flat-rate.
     *  <br><br>
     *  For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. To determine if a domestic shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.DomesticRateTable</b> field. Although the <b>GetUser</b> call can be used to see if a domestic shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br><br>
     *  For international shipping rate tables, specific rates may be set up for any and all of the nine geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. To determine if a international shipping rate table is set up for the seller's account, the <b>GetUser</b> call can be used, and then the seller will look for a value of <code>true</code> in the <b>User.SellerInfo.InternationalRateTable</b> field. Although the <b>GetUser</b> call can be used to see if an international shipping rate table exists for the seller's account, details of the shipping rate table, including all specified costs for the different regions/countries, can only be viewed and modified in My eBay Shipping Preferences. This functionality is not yet available in any public APIs.
     *  <br/><br/>
     *  If you are applying a domestic or international shipping rate table that specifies a surcharge by weight, you must specify the item weight in the <b>ShippingPackageDetails</b> container's <b>WeightMajor</b> and <b>WeightMinor</b> fields, even though the listing is using flat-rate shipping. Do not use any other fields in the <b>ShippingPackageDetails</b> container because none of those fields are applicable in this use case.
     *  <br><br>
     *  This container is only returned in the 'Get' calls if one or more shipping rate tables have been applied to the listing, and if the call is being made by the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, UK, Germany, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Whether a seller is using the old default domestic and international shipping rate tables or the new shipping rate tables, these shipping rate tables are set up in My eBay Shipping Preferences or as part of a Shipping Business Policy. If using the Trading API to create a listing that will use the new shipping rate tables, the <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> fields are used to reference and apply these new shipping rate tables to the listing. If desired, sellers can still use the old default shipping rate tables, but they are not allowed to mix and match old and new shipping rate tables, meaning that they will get an error if they pass in both the old fields (<b>DomesticRateTable</b> and <b>InternationalRateTable</b>) and the new fields (<b>DomesticRateTableId</b> and <b>InternationalRateTableId</b>). The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\RateTableDetailsType $rateTableDetails
     * @return self
     */
    public function setRateTableDetails(\Nogrod\eBaySDK\MerchantData\RateTableDetailsType $rateTableDetails)
    {
        $this->rateTableDetails = $rateTableDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = $this->getInsuranceWanted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InsuranceWanted", $value);
        }
        $value = $this->getPaymentEdited();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentEdited", $value);
        }
        $value = $this->getPaymentInstructions();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentInstructions", $value);
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
        if (null !== $value && !empty($this->getShippingServiceOptions())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingServiceOptions" => $v];
            }, $value));
        }
        $value = $this->getInternationalShippingServiceOption();
        if (null !== $value && !empty($this->getInternationalShippingServiceOption())) {
            $writer->write(array_map(function ($v) {
                return ["InternationalShippingServiceOption" => $v];
            }, $value));
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
        if (null !== $value && !empty($this->getTaxTable())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaxTable", array_map(function ($v) {
                return ["TaxJurisdiction" => $v];
            }, $value));
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
        $value = $this->getCODCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CODCost", $value);
        }
        $value = $this->getExcludeShipToLocation();
        if (null !== $value && !empty($this->getExcludeShipToLocation())) {
            $writer->write(array_map(function ($v) {
                return ["ExcludeShipToLocation" => $v];
            }, $value));
        }
        $value = $this->getSellerExcludeShipToLocationsPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerExcludeShipToLocationsPreference", $value);
        }
        $value = $this->getShipmentTrackingDetails();
        if (null !== $value && !empty($this->getShipmentTrackingDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ShipmentTrackingDetails" => $v];
            }, $value));
        }
        $value = $this->getRateTableDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RateTableDetails", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllowPaymentEdit');
        if (null !== $value) {
            $this->setAllowPaymentEdit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplyShippingDiscount');
        if (null !== $value) {
            $this->setApplyShippingDiscount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalShipping');
        if (null !== $value) {
            $this->setGlobalShipping($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingRate');
        if (null !== $value) {
            $this->setCalculatedShippingRate(\Nogrod\eBaySDK\MerchantData\CalculatedShippingRateType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ChangePaymentInstructions');
        if (null !== $value) {
            $this->setChangePaymentInstructions($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InsuranceWanted');
        if (null !== $value) {
            $this->setInsuranceWanted($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentEdited');
        if (null !== $value) {
            $this->setPaymentEdited($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentInstructions');
        if (null !== $value) {
            $this->setPaymentInstructions($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SalesTax');
        if (null !== $value) {
            $this->setSalesTax(\Nogrod\eBaySDK\MerchantData\SalesTaxType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingRateErrorMessage');
        if (null !== $value) {
            $this->setShippingRateErrorMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingRateType');
        if (null !== $value) {
            $this->setShippingRateType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceOptions', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServiceOptions(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ShippingServiceOptionsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingServiceOption', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalShippingServiceOption(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\InternationalShippingServiceOptionsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingType');
        if (null !== $value) {
            $this->setShippingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerSalesRecordNumber');
        if (null !== $value) {
            $this->setSellingManagerSalesRecordNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThirdPartyCheckout');
        if (null !== $value) {
            $this->setThirdPartyCheckout($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaxTable', true);
        if (null !== $value && !empty($value)) {
            $this->setTaxTable(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\TaxJurisdictionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GetItFast');
        if (null !== $value) {
            $this->setGetItFast($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceUsed');
        if (null !== $value) {
            $this->setShippingServiceUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DefaultShippingCost');
        if (null !== $value) {
            $this->setDefaultShippingCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDiscountProfileID');
        if (null !== $value) {
            $this->setShippingDiscountProfileID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatShippingDiscount');
        if (null !== $value) {
            $this->setFlatShippingDiscount(\Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingDiscount');
        if (null !== $value) {
            $this->setCalculatedShippingDiscount(\Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscount');
        if (null !== $value) {
            $this->setPromotionalShippingDiscount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingDiscountProfileID');
        if (null !== $value) {
            $this->setInternationalShippingDiscountProfileID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalFlatShippingDiscount');
        if (null !== $value) {
            $this->setInternationalFlatShippingDiscount(\Nogrod\eBaySDK\MerchantData\FlatShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalCalculatedShippingDiscount');
        if (null !== $value) {
            $this->setInternationalCalculatedShippingDiscount(\Nogrod\eBaySDK\MerchantData\CalculatedShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalPromotionalShippingDiscount');
        if (null !== $value) {
            $this->setInternationalPromotionalShippingDiscount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscountDetails');
        if (null !== $value) {
            $this->setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\MerchantData\PromotionalShippingDiscountDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CODCost');
        if (null !== $value) {
            $this->setCODCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeShipToLocation', true);
        if (null !== $value && !empty($value)) {
            $this->setExcludeShipToLocation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerExcludeShipToLocationsPreference');
        if (null !== $value) {
            $this->setSellerExcludeShipToLocationsPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackingDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setShipmentTrackingDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ShipmentTrackingDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RateTableDetails');
        if (null !== $value) {
            $this->setRateTableDetails(\Nogrod\eBaySDK\MerchantData\RateTableDetailsType::fromKeyValue($value));
        }
    }
}
