<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyInfoType
 *
 * Type defining the <b>returnPolicyInfo</b> container, which consists of detailed information on a seller's return policy.
 * XSD Type: ReturnPolicyInfo
 */
class ReturnPolicyInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise ignored):
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Spain (ES)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  </ul>
     *  Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the Return Policy section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &#163;).
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This field indicates how the seller compensates buyers for <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/post-order-returns.html#return-reasons" target="_blank">remorse returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. <br><br> On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>.
     *
     * @var string $refundOption
     */
    private $refundOption = null;

    /**
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
     *
     * @var string $shippingCostPaidByOption
     */
    private $shippingCostPaidByOption = null;

    /**
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In version 1.1.0, the options for this field were reduced. An error will be thrown if you attempt to list an item with invalid business policy settings. See the <a href="/devzone/business-policies/releasenotes.html#v1.1.0">Release Notes</a> for details.</span>
     *
     * @var string $returnsWithinOption
     */
    private $returnsWithinOption = null;

    /**
     * This required field indicates whether or not the seller accepts returns.
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for an item if the seller does not accept returns.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>returnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling time (in days) using the <b>Item.DispatchTimeMax</b> field.</span>
     *  <br>
     *  Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.</p>
     *  <br><br>
     *  <span class="tablenote"><b>For setSellerProfile:</b> Updating the values in a business profile can effect the profiles in currently-listed items. In most cases, the updates made to a business policy can be streamlined into existing listings. However, if you update a business policy and the policy is invalid in the category where an item is listed, no error will be thrown and the policy will carry through the regular life of the listing. Sellers will be unable to re-list an item if it refers an invalid policy. Also note eBay will not update the policy's of a description if the listing has bids or sales, or if the listing ends within 12 hours.</span>
     *
     * @var string $returnsAcceptedOption
     */
    private $returnsAcceptedOption = null;

    /**
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyOfferedOption
     */
    private $warrantyOfferedOption = null;

    /**
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyTypeOption
     */
    private $warrantyTypeOption = null;

    /**
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     *
     * @var string $warrantyDurationOption
     */
    private $warrantyDurationOption = null;

    /**
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports restocking fees for returned items.
     *
     * @var string $restockingFeeValue
     */
    private $restockingFeeValue = null;

    /**
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports holiday returns.
     *
     * @var string $holidayReturns
     */
    private $holidayReturns = null;

    /**
     * Gets as description
     *
     * This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise ignored):
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Spain (ES)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  </ul>
     *  Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the Return Policy section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &#163;).
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
     *  <li>Spain (ES)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  </ul>
     *  Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the Return Policy section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character (e.g. &#163;).
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
     * Gets as refundOption
     *
     * This field indicates how the seller compensates buyers for <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/post-order-returns.html#return-reasons" target="_blank">remorse returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. <br><br> On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>.
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
     * This field indicates how the seller compensates buyers for <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/post-order-returns.html#return-reasons" target="_blank">remorse returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. <br><br> On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>.
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
     * Gets as shippingCostPaidByOption
     *
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
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
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
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
     * Gets as returnsWithinOption
     *
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In version 1.1.0, the options for this field were reduced. An error will be thrown if you attempt to list an item with invalid business policy settings. See the <a href="/devzone/business-policies/releasenotes.html#v1.1.0">Release Notes</a> for details.</span>
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
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In version 1.1.0, the options for this field were reduced. An error will be thrown if you attempt to list an item with invalid business policy settings. See the <a href="/devzone/business-policies/releasenotes.html#v1.1.0">Release Notes</a> for details.</span>
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
     * Gets as returnsAcceptedOption
     *
     * This required field indicates whether or not the seller accepts returns.
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for an item if the seller does not accept returns.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>returnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling time (in days) using the <b>Item.DispatchTimeMax</b> field.</span>
     *  <br>
     *  Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.</p>
     *  <br><br>
     *  <span class="tablenote"><b>For setSellerProfile:</b> Updating the values in a business profile can effect the profiles in currently-listed items. In most cases, the updates made to a business policy can be streamlined into existing listings. However, if you update a business policy and the policy is invalid in the category where an item is listed, no error will be thrown and the policy will carry through the regular life of the listing. Sellers will be unable to re-list an item if it refers an invalid policy. Also note eBay will not update the policy's of a description if the listing has bids or sales, or if the listing ends within 12 hours.</span>
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
     *  <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>returnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling time (in days) using the <b>Item.DispatchTimeMax</b> field.</span>
     *  <br>
     *  Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program, see the <a href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> page.</p>
     *  <br><br>
     *  <span class="tablenote"><b>For setSellerProfile:</b> Updating the values in a business profile can effect the profiles in currently-listed items. In most cases, the updates made to a business policy can be streamlined into existing listings. However, if you update a business policy and the policy is invalid in the category where an item is listed, no error will be thrown and the policy will carry through the regular life of the listing. Sellers will be unable to re-list an item if it refers an invalid policy. Also note eBay will not update the policy's of a description if the listing has bids or sales, or if the listing ends within 12 hours.</span>
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
     * Gets as warrantyOfferedOption
     *
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
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
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
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
     * Gets as warrantyTypeOption
     *
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
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
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
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
     * Gets as warrantyDurationOption
     *
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
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
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
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
     * Gets as restockingFeeValue
     *
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports restocking fees for returned items.
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
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports restocking fees for returned items.
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
     * Gets as holidayReturns
     *
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports holiday returns.
     *
     * @return string
     */
    public function getHolidayReturns()
    {
        return $this->holidayReturns;
    }

    /**
     * Sets a new holidayReturns
     *
     * This field is deprecated as of v1.1.0 and any values supplied in this field are ignored. eBay no longer supports holiday returns.
     *
     * @param string $holidayReturns
     * @return self
     */
    public function setHolidayReturns($holidayReturns)
    {
        $this->holidayReturns = $holidayReturns;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}description", $value);
        }
        $value = $this->getRefundOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}refundOption", $value);
        }
        $value = $this->getShippingCostPaidByOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption", $value);
        }
        $value = $this->getReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption", $value);
        }
        $value = $this->getReturnsAcceptedOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption", $value);
        }
        $value = $this->getWarrantyOfferedOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}warrantyOfferedOption", $value);
        }
        $value = $this->getWarrantyTypeOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}warrantyTypeOption", $value);
        }
        $value = $this->getWarrantyDurationOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}warrantyDurationOption", $value);
        }
        $value = $this->getRestockingFeeValue();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}restockingFeeValue", $value);
        }
        $value = $this->getHolidayReturns();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}holidayReturns", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}refundOption');
        if (null !== $value) {
            $this->setRefundOption($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption');
        if (null !== $value) {
            $this->setShippingCostPaidByOption($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption');
        if (null !== $value) {
            $this->setReturnsWithinOption($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption');
        if (null !== $value) {
            $this->setReturnsAcceptedOption($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}warrantyOfferedOption');
        if (null !== $value) {
            $this->setWarrantyOfferedOption($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}warrantyTypeOption');
        if (null !== $value) {
            $this->setWarrantyTypeOption($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}warrantyDurationOption');
        if (null !== $value) {
            $this->setWarrantyDurationOption($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}restockingFeeValue');
        if (null !== $value) {
            $this->setRestockingFeeValue($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}holidayReturns');
        if (null !== $value) {
            $this->setHolidayReturns($value);
        }
    }
}
