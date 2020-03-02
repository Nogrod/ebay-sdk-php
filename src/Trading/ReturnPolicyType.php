<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyType
 *
 * Type used to express the details of the return policy for an item.
 *  <br><br>
 *  To get the metadata on the values you can use for specific marketplaces, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, and then review the <b>ReturnPolicyDetails</b> fields in the response.
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> Historically, the <b>GeteBayDetails</b> call has been used to retrieve return policy metadata. However, the <b>GetCategoryFeatures</b> call now returns category-level metadata for both domestic and international return policies, and developers should make plans to use that call for this metadata.</span>
 * XSD Type: ReturnPolicyType
 */
class ReturnPolicyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, set this value to <code>MoneyBack</code>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @var string $refundOption
     */
    private $refundOption = null;

    /**
     * Display string that buyer applications can use to present <b>RefundOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the <b>Refund.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  This field is applicable to only the US marketplace and is not applicable as input to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> family of calls. (Use <b>RefundOption</b> instead.)
     *
     * @var string $refund
     */
    private $refund = null;

    /**
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
     *  <br/><br/>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> In version 1061, the options for this field were reduced. An error will be thrown if you attempt to list an item with this field set to a value that is not accepted by the target marketplace. See the <a href="/devzone/xml/docs/releasenotes.html#1061">Release Notes</a> for details.</span>
     *  <br>
     *
     * @var string $returnsWithinOption
     */
    private $returnsWithinOption = null;

    /**
     * Display string that buyer applications can use to present <b>ReturnsWithinOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ReturnsWithin.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ReturnsWithinOption</b> instead.)
     *
     * @var string $returnsWithin
     */
    private $returnsWithin = null;

    /**
     * This required field indicates whether or not the seller accepts returns.
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for an item if the seller does not accept returns.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling time (in days) using the <b>Item.DispatchTimeMax</b> field.</span>
     *  <br>
     *  Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.</p>
     *  <br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @var string $returnsAcceptedOption
     */
    private $returnsAcceptedOption = null;

    /**
     * Display string that buyer applications can use to present <b>ReturnsAcceptedOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ReturnsAccepted.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ReturnsAcceptedOption</b> instead.)
     *
     * @var string $returnsAccepted
     */
    private $returnsAccepted = null;

    /**
     * This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise ignored):
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Austria (AT)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  <li>Spain (ES)</li>
     *  </ul>
     *  Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the additional details section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &#163;).
     *
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not specify this field when listing the item, <b>GetItem</b> returns this as an empty node.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br>
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyOfferedOption
     */
    private $warrantyOfferedOption = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyOffered
     */
    private $warrantyOffered = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyTypeOption
     */
    private $warrantyTypeOption = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyType
     */
    private $warrantyType = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyDurationOption
     */
    private $warrantyDurationOption = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyDuration
     */
    private $warrantyDuration = null;

    /**
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.
     *  <br><br>
     *  Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @var string $shippingCostPaidByOption
     */
    private $shippingCostPaidByOption = null;

    /**
     * This is a display string that buyer applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ShippingCostPaidBy.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ShippingCostPaidByOption</b> instead.)
     *
     * @var string $shippingCostPaidBy
     */
    private $shippingCostPaidBy = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     *
     * @var string $restockingFeeValue
     */
    private $restockingFeeValue = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     *
     * @var string $restockingFeeValueOption
     */
    private $restockingFeeValueOption = null;

    /**
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports extended holiday returns.
     *
     * @var bool $extendedHolidayReturns
     */
    private $extendedHolidayReturns = null;

    /**
     * This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, set this value to <code>MoneyBack</code>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @var string $internationalRefundOption
     */
    private $internationalRefundOption = null;

    /**
     * This optional field indicates whether or not the seller accepts international returns (returns that need to be shipped via an international shipping service).
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international returns. If the seller does not accept international returns, they can specify <b>ReturnsNotAccepted</b>.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @var string $internationalReturnsAcceptedOption
     */
    private $internationalReturnsAcceptedOption = null;

    /**
     * A buyer can return an item that was shipped via an international shipping service to the seller within the period of time specified by this field. The time period begins the day the buyer receives the item.
     *  <br><br>
     *  <b>Applicable values:</b> To get the applicable <b>ReturnsWithinOption</b> values for your site, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>.
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts international returns (InternationalReturnsAcceptedOption is set to ReturnsAccepted) but does not specify this field for a listing, eBay sets a default value (often Days_30) and the seller is obligated to honor this setting.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> The <b>GetCategoryFeatures</b> call now returns category-level metadata for both domestic and international return policies, and developers should make plans to use that call for this metadata.</span>
     *
     * @var string $internationalReturnsWithinOption
     */
    private $internationalReturnsWithinOption = null;

    /**
     * This option specifies either the buyer or the seller as the party who pays for international return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>InternationalReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not set this field when listing an item, some eBay sites may set a default value (like Buyer). Because sellers are obligated to honor the policies specified on their View Item pages, be sure this is set to the value desired by the seller.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @var string $internationalShippingCostPaidByOption
     */
    private $internationalShippingCostPaidByOption = null;

    /**
     * Gets as refundOption
     *
     * This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, set this value to <code>MoneyBack</code>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @return string
     */
    public function getRefundOption()
    {
        return $this->refundOption;
    }

    /**
     * Sets a new refundOption
     *
     * This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, set this value to <code>MoneyBack</code>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @param string $refundOption
     * @return self
     */
    public function setRefundOption($refundOption)
    {
        $this->refundOption = $refundOption;
        return $this;
    }

    /**
     * Gets as refund
     *
     * Display string that buyer applications can use to present <b>RefundOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the <b>Refund.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  This field is applicable to only the US marketplace and is not applicable as input to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> family of calls. (Use <b>RefundOption</b> instead.)
     *
     * @return string
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets a new refund
     *
     * Display string that buyer applications can use to present <b>RefundOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces. If necessary, you can predict the choice of values based on the <b>Refund.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  This field is applicable to only the US marketplace and is not applicable as input to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> family of calls. (Use <b>RefundOption</b> instead.)
     *
     * @param string $refund
     * @return self
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;
        return $this;
    }

    /**
     * Gets as returnsWithinOption
     *
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
     *  <br/><br/>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> In version 1061, the options for this field were reduced. An error will be thrown if you attempt to list an item with this field set to a value that is not accepted by the target marketplace. See the <a href="/devzone/xml/docs/releasenotes.html#1061">Release Notes</a> for details.</span>
     *  <br>
     *
     * @return string
     */
    public function getReturnsWithinOption()
    {
        return $this->returnsWithinOption;
    }

    /**
     * Sets a new returnsWithinOption
     *
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
     *  <br/><br/>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> In version 1061, the options for this field were reduced. An error will be thrown if you attempt to list an item with this field set to a value that is not accepted by the target marketplace. See the <a href="/devzone/xml/docs/releasenotes.html#1061">Release Notes</a> for details.</span>
     *  <br>
     *
     * @param string $returnsWithinOption
     * @return self
     */
    public function setReturnsWithinOption($returnsWithinOption)
    {
        $this->returnsWithinOption = $returnsWithinOption;
        return $this;
    }

    /**
     * Gets as returnsWithin
     *
     * Display string that buyer applications can use to present <b>ReturnsWithinOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ReturnsWithin.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ReturnsWithinOption</b> instead.)
     *
     * @return string
     */
    public function getReturnsWithin()
    {
        return $this->returnsWithin;
    }

    /**
     * Sets a new returnsWithin
     *
     * Display string that buyer applications can use to present <b>ReturnsWithinOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ReturnsWithin.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ReturnsWithinOption</b> instead.)
     *
     * @param string $returnsWithin
     * @return self
     */
    public function setReturnsWithin($returnsWithin)
    {
        $this->returnsWithin = $returnsWithin;
        return $this;
    }

    /**
     * Gets as returnsAcceptedOption
     *
     * This required field indicates whether or not the seller accepts returns.
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for an item if the seller does not accept returns.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling time (in days) using the <b>Item.DispatchTimeMax</b> field.</span>
     *  <br>
     *  Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.</p>
     *  <br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @return string
     */
    public function getReturnsAcceptedOption()
    {
        return $this->returnsAcceptedOption;
    }

    /**
     * Sets a new returnsAcceptedOption
     *
     * This required field indicates whether or not the seller accepts returns.
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for an item if the seller does not accept returns.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling time (in days) using the <b>Item.DispatchTimeMax</b> field.</span>
     *  <br>
     *  Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.</p>
     *  <br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @param string $returnsAcceptedOption
     * @return self
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption)
    {
        $this->returnsAcceptedOption = $returnsAcceptedOption;
        return $this;
    }

    /**
     * Gets as returnsAccepted
     *
     * Display string that buyer applications can use to present <b>ReturnsAcceptedOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ReturnsAccepted.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ReturnsAcceptedOption</b> instead.)
     *
     * @return string
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }

    /**
     * Sets a new returnsAccepted
     *
     * Display string that buyer applications can use to present <b>ReturnsAcceptedOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ReturnsAccepted.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ReturnsAcceptedOption</b> instead.)
     *
     * @param string $returnsAccepted
     * @return self
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->returnsAccepted = $returnsAccepted;
        return $this;
    }

    /**
     * Gets as description
     *
     * This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise ignored):
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Austria (AT)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  <li>Spain (ES)</li>
     *  </ul>
     *  Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the additional details section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &#163;).
     *
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not specify this field when listing the item, <b>GetItem</b> returns this as an empty node.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br>
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
     * This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise ignored):
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Austria (AT)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  <li>Spain (ES)</li>
     *  </ul>
     *  Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the additional details section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &#163;).
     *
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not specify this field when listing the item, <b>GetItem</b> returns this as an empty node.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br>
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
     * Gets as warrantyOfferedOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @return string
     */
    public function getWarrantyOfferedOption()
    {
        return $this->warrantyOfferedOption;
    }

    /**
     * Sets a new warrantyOfferedOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @param string $warrantyOfferedOption
     * @return self
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption)
    {
        $this->warrantyOfferedOption = $warrantyOfferedOption;
        return $this;
    }

    /**
     * Gets as warrantyOffered
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @return string
     */
    public function getWarrantyOffered()
    {
        return $this->warrantyOffered;
    }

    /**
     * Sets a new warrantyOffered
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @param string $warrantyOffered
     * @return self
     */
    public function setWarrantyOffered($warrantyOffered)
    {
        $this->warrantyOffered = $warrantyOffered;
        return $this;
    }

    /**
     * Gets as warrantyTypeOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @return string
     */
    public function getWarrantyTypeOption()
    {
        return $this->warrantyTypeOption;
    }

    /**
     * Sets a new warrantyTypeOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @param string $warrantyTypeOption
     * @return self
     */
    public function setWarrantyTypeOption($warrantyTypeOption)
    {
        $this->warrantyTypeOption = $warrantyTypeOption;
        return $this;
    }

    /**
     * Gets as warrantyType
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @return string
     */
    public function getWarrantyType()
    {
        return $this->warrantyType;
    }

    /**
     * Sets a new warrantyType
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @param string $warrantyType
     * @return self
     */
    public function setWarrantyType($warrantyType)
    {
        $this->warrantyType = $warrantyType;
        return $this;
    }

    /**
     * Gets as warrantyDurationOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @return string
     */
    public function getWarrantyDurationOption()
    {
        return $this->warrantyDurationOption;
    }

    /**
     * Sets a new warrantyDurationOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @param string $warrantyDurationOption
     * @return self
     */
    public function setWarrantyDurationOption($warrantyDurationOption)
    {
        $this->warrantyDurationOption = $warrantyDurationOption;
        return $this;
    }

    /**
     * Gets as warrantyDuration
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @return string
     */
    public function getWarrantyDuration()
    {
        return $this->warrantyDuration;
    }

    /**
     * Sets a new warrantyDuration
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @param string $warrantyDuration
     * @return self
     */
    public function setWarrantyDuration($warrantyDuration)
    {
        $this->warrantyDuration = $warrantyDuration;
        return $this;
    }

    /**
     * Gets as shippingCostPaidByOption
     *
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.
     *  <br><br>
     *  Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @return string
     */
    public function getShippingCostPaidByOption()
    {
        return $this->shippingCostPaidByOption;
    }

    /**
     * Sets a new shippingCostPaidByOption
     *
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.
     *  <br><br>
     *  Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @param string $shippingCostPaidByOption
     * @return self
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption)
    {
        $this->shippingCostPaidByOption = $shippingCostPaidByOption;
        return $this;
    }

    /**
     * Gets as shippingCostPaidBy
     *
     * This is a display string that buyer applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ShippingCostPaidBy.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ShippingCostPaidByOption</b> instead.)
     *
     * @return string
     */
    public function getShippingCostPaidBy()
    {
        return $this->shippingCostPaidBy;
    }

    /**
     * Sets a new shippingCostPaidBy
     *
     * This is a display string that buyer applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     *  <br/><br/>
     *  If necessary, you can predict the choice of values based on the <b>ShippingCostPaidBy.Description</b> options returned by <b>GeteBayDetails</b>.
     *  <br><br>
     *  Not applicable as input to the <b>AddItem</b> family of calls. (Use <b>ShippingCostPaidByOption</b> instead.)
     *
     * @param string $shippingCostPaidBy
     * @return self
     */
    public function setShippingCostPaidBy($shippingCostPaidBy)
    {
        $this->shippingCostPaidBy = $shippingCostPaidBy;
        return $this;
    }

    /**
     * Gets as restockingFeeValue
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     *
     * @return string
     */
    public function getRestockingFeeValue()
    {
        return $this->restockingFeeValue;
    }

    /**
     * Sets a new restockingFeeValue
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     *
     * @param string $restockingFeeValue
     * @return self
     */
    public function setRestockingFeeValue($restockingFeeValue)
    {
        $this->restockingFeeValue = $restockingFeeValue;
        return $this;
    }

    /**
     * Gets as restockingFeeValueOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     *
     * @return string
     */
    public function getRestockingFeeValueOption()
    {
        return $this->restockingFeeValueOption;
    }

    /**
     * Sets a new restockingFeeValueOption
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     *
     * @param string $restockingFeeValueOption
     * @return self
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption)
    {
        $this->restockingFeeValueOption = $restockingFeeValueOption;
        return $this;
    }

    /**
     * Gets as extendedHolidayReturns
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports extended holiday returns.
     *
     * @return bool
     */
    public function getExtendedHolidayReturns()
    {
        return $this->extendedHolidayReturns;
    }

    /**
     * Sets a new extendedHolidayReturns
     *
     * This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports extended holiday returns.
     *
     * @param bool $extendedHolidayReturns
     * @return self
     */
    public function setExtendedHolidayReturns($extendedHolidayReturns)
    {
        $this->extendedHolidayReturns = $extendedHolidayReturns;
        return $this;
    }

    /**
     * Gets as internationalRefundOption
     *
     * This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, set this value to <code>MoneyBack</code>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @return string
     */
    public function getInternationalRefundOption()
    {
        return $this->internationalRefundOption;
    }

    /**
     * Sets a new internationalRefundOption
     *
     * This field indicates how the seller compensates buyers for <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Post-Order-Returns.html#return-reasons" target="_blank">returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, set this value to <code>MoneyBack</code>.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @param string $internationalRefundOption
     * @return self
     */
    public function setInternationalRefundOption($internationalRefundOption)
    {
        $this->internationalRefundOption = $internationalRefundOption;
        return $this;
    }

    /**
     * Gets as internationalReturnsAcceptedOption
     *
     * This optional field indicates whether or not the seller accepts international returns (returns that need to be shipped via an international shipping service).
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international returns. If the seller does not accept international returns, they can specify <b>ReturnsNotAccepted</b>.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @return string
     */
    public function getInternationalReturnsAcceptedOption()
    {
        return $this->internationalReturnsAcceptedOption;
    }

    /**
     * Sets a new internationalReturnsAcceptedOption
     *
     * This optional field indicates whether or not the seller accepts international returns (returns that need to be shipped via an international shipping service).
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international returns. If the seller does not accept international returns, they can specify <b>ReturnsNotAccepted</b>.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @param string $internationalReturnsAcceptedOption
     * @return self
     */
    public function setInternationalReturnsAcceptedOption($internationalReturnsAcceptedOption)
    {
        $this->internationalReturnsAcceptedOption = $internationalReturnsAcceptedOption;
        return $this;
    }

    /**
     * Gets as internationalReturnsWithinOption
     *
     * A buyer can return an item that was shipped via an international shipping service to the seller within the period of time specified by this field. The time period begins the day the buyer receives the item.
     *  <br><br>
     *  <b>Applicable values:</b> To get the applicable <b>ReturnsWithinOption</b> values for your site, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>.
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts international returns (InternationalReturnsAcceptedOption is set to ReturnsAccepted) but does not specify this field for a listing, eBay sets a default value (often Days_30) and the seller is obligated to honor this setting.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> The <b>GetCategoryFeatures</b> call now returns category-level metadata for both domestic and international return policies, and developers should make plans to use that call for this metadata.</span>
     *
     * @return string
     */
    public function getInternationalReturnsWithinOption()
    {
        return $this->internationalReturnsWithinOption;
    }

    /**
     * Sets a new internationalReturnsWithinOption
     *
     * A buyer can return an item that was shipped via an international shipping service to the seller within the period of time specified by this field. The time period begins the day the buyer receives the item.
     *  <br><br>
     *  <b>Applicable values:</b> To get the applicable <b>ReturnsWithinOption</b> values for your site, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>.
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts international returns (InternationalReturnsAcceptedOption is set to ReturnsAccepted) but does not specify this field for a listing, eBay sets a default value (often Days_30) and the seller is obligated to honor this setting.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> The <b>GetCategoryFeatures</b> call now returns category-level metadata for both domestic and international return policies, and developers should make plans to use that call for this metadata.</span>
     *
     * @param string $internationalReturnsWithinOption
     * @return self
     */
    public function setInternationalReturnsWithinOption($internationalReturnsWithinOption)
    {
        $this->internationalReturnsWithinOption = $internationalReturnsWithinOption;
        return $this;
    }

    /**
     * Gets as internationalShippingCostPaidByOption
     *
     * This option specifies either the buyer or the seller as the party who pays for international return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>InternationalReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not set this field when listing an item, some eBay sites may set a default value (like Buyer). Because sellers are obligated to honor the policies specified on their View Item pages, be sure this is set to the value desired by the seller.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @return string
     */
    public function getInternationalShippingCostPaidByOption()
    {
        return $this->internationalShippingCostPaidByOption;
    }

    /**
     * Sets a new internationalShippingCostPaidByOption
     *
     * This option specifies either the buyer or the seller as the party who pays for international return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues.
     *  <br><br>
     *  <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>InternationalReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not set this field when listing an item, some eBay sites may set a default value (like Buyer). Because sellers are obligated to honor the policies specified on their View Item pages, be sure this is set to the value desired by the seller.
     *  <br><br>
     *  <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description.
     *
     * @param string $internationalShippingCostPaidByOption
     * @return self
     */
    public function setInternationalShippingCostPaidByOption($internationalShippingCostPaidByOption)
    {
        $this->internationalShippingCostPaidByOption = $internationalShippingCostPaidByOption;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundOption", $value);
        }
        $value = $this->getRefund();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Refund", $value);
        }
        $value = $this->getReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsWithinOption", $value);
        }
        $value = $this->getReturnsWithin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsWithin", $value);
        }
        $value = $this->getReturnsAcceptedOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsAcceptedOption", $value);
        }
        $value = $this->getReturnsAccepted();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsAccepted", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getWarrantyOfferedOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyOfferedOption", $value);
        }
        $value = $this->getWarrantyOffered();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyOffered", $value);
        }
        $value = $this->getWarrantyTypeOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyTypeOption", $value);
        }
        $value = $this->getWarrantyType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyType", $value);
        }
        $value = $this->getWarrantyDurationOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyDurationOption", $value);
        }
        $value = $this->getWarrantyDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyDuration", $value);
        }
        $value = $this->getShippingCostPaidByOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidByOption", $value);
        }
        $value = $this->getShippingCostPaidBy();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidBy", $value);
        }
        $value = $this->getRestockingFeeValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RestockingFeeValue", $value);
        }
        $value = $this->getRestockingFeeValueOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RestockingFeeValueOption", $value);
        }
        $value = $this->getExtendedHolidayReturns();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtendedHolidayReturns", $value);
        }
        $value = $this->getInternationalRefundOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRefundOption", $value);
        }
        $value = $this->getInternationalReturnsAcceptedOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedOption", $value);
        }
        $value = $this->getInternationalReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsWithinOption", $value);
        }
        $value = $this->getInternationalShippingCostPaidByOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalShippingCostPaidByOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundOption');
        if (null !== $value) {
            $this->setRefundOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refund');
        if (null !== $value) {
            $this->setRefund($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsWithinOption');
        if (null !== $value) {
            $this->setReturnsWithinOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsWithin');
        if (null !== $value) {
            $this->setReturnsWithin($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsAcceptedOption');
        if (null !== $value) {
            $this->setReturnsAcceptedOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsAccepted');
        if (null !== $value) {
            $this->setReturnsAccepted($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyOfferedOption');
        if (null !== $value) {
            $this->setWarrantyOfferedOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyOffered');
        if (null !== $value) {
            $this->setWarrantyOffered($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyTypeOption');
        if (null !== $value) {
            $this->setWarrantyTypeOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyType');
        if (null !== $value) {
            $this->setWarrantyType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyDurationOption');
        if (null !== $value) {
            $this->setWarrantyDurationOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyDuration');
        if (null !== $value) {
            $this->setWarrantyDuration($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidByOption');
        if (null !== $value) {
            $this->setShippingCostPaidByOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidBy');
        if (null !== $value) {
            $this->setShippingCostPaidBy($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockingFeeValue');
        if (null !== $value) {
            $this->setRestockingFeeValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockingFeeValueOption');
        if (null !== $value) {
            $this->setRestockingFeeValueOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtendedHolidayReturns');
        if (null !== $value) {
            $this->setExtendedHolidayReturns($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRefundOption');
        if (null !== $value) {
            $this->setInternationalRefundOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAcceptedOption');
        if (null !== $value) {
            $this->setInternationalReturnsAcceptedOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsWithinOption');
        if (null !== $value) {
            $this->setInternationalReturnsWithinOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingCostPaidByOption');
        if (null !== $value) {
            $this->setInternationalShippingCostPaidByOption($value);
        }
    }
}
