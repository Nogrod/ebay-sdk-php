<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InternationalReturnPolicyInfoType
 *
 * Populate this complex object if your international return policy differs from your domestic return policy (by default, international return policies inherit their settings from the settings in the domestic return policy).
 *  <br><br>
 *  For example, you might want to offer free returns for domestic shipments, but have a return policy where the buyer pays for returns from non-domestic regions.
 * XSD Type: InternationalReturnPolicyInfo
 */
class InternationalReturnPolicyInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This optional field indicates whether or not the seller accepts international returns (returns that need to be shipped via an international shipping service).
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international returns. If the seller does not accept international returns, they can specify <b>ReturnsNotAccepted</b>.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
     *
     * @var string $returnsAcceptedOption
     */
    private $returnsAcceptedOption = null;

    /**
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
     *
     * @var string $returnsWithinOption
     */
    private $returnsWithinOption = null;

    /**
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges for international returns. Accepted values are <code>Buyer</code> or <code>Seller</code>. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
     *
     * @var string $shippingCostPaidByOption
     */
    private $shippingCostPaidByOption = null;

    /**
     * This field indicates how the seller compensates buyers for <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/post-order-returns.html#return-reasons" target="_blank">remorse returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>.
     *
     * @var string $refundOption
     */
    private $refundOption = null;

    /**
     * Gets as returnsAcceptedOption
     *
     * This optional field indicates whether or not the seller accepts international returns (returns that need to be shipped via an international shipping service).
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international returns. If the seller does not accept international returns, they can specify <b>ReturnsNotAccepted</b>.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
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
     * This optional field indicates whether or not the seller accepts international returns (returns that need to be shipped via an international shipping service).
     *  <br><br>
     *  Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international returns. If the seller does not accept international returns, they can specify <b>ReturnsNotAccepted</b>.
     *  <br><br>
     *  On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response.
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
     * Gets as returnsWithinOption
     *
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
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
     * Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  <b>Applicable values:</b> Retrieve the values supported by a marketplace by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ReturnPolicyDetails</code>, then review <b>ReturnPolicyDetails.ReturnsWithin.ReturnsWithinOption</b> in the response.
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
     * Gets as shippingCostPaidByOption
     *
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges for international returns. Accepted values are <code>Buyer</code> or <code>Seller</code>. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
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
     * This option specifies either the buyer or the seller as the party who pays for return shipping charges for international returns. Accepted values are <code>Buyer</code> or <code>Seller</code>. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues. <br><br> Use <b>GeteBayDetails</b> (with <b>DetailName=ReturnPolicyDetails</b>) and review the returned <b>ReturnPolicyDetails.ShippingCostPaidBy</b> values to see the values supported by a marketplace.
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
     * Gets as refundOption
     *
     * This field indicates how the seller compensates buyers for <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/post-order-returns.html#return-reasons" target="_blank">remorse returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>.
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
     * This field indicates how the seller compensates buyers for <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/post-order-returns.html#return-reasons" target="_blank">remorse returns</a>. You must set this value to <code>MoneyBack</code> for all eBay marketplaces except for the US marketplace. This value is required for international returns when <b>ReturnsAcceptedOption=ReturnsAccepted</b>.
     *  <br><br>
     *  Depending on the Seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs.
     *  <br><br>
     *  On <code>EBAY_US</code>: You can set this value to either <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. If a seller has the depth of inventory to support an exchange for an identical item, you can set <code>MoneyBackOrReplacement</code>. Otherwise, eBay recommends you set this value to its default value, <code>MoneyBack</code>.
     *
     * @param string $refundOption
     * @return self
     */
    public function setRefundOption($refundOption)
    {
        $this->refundOption = $refundOption;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getReturnsAcceptedOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption", $value);
        }
        $value = $this->getReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption", $value);
        }
        $value = $this->getShippingCostPaidByOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption", $value);
        }
        $value = $this->getRefundOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}refundOption", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption');
        if (null !== $value) {
            $this->setReturnsAcceptedOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption');
        if (null !== $value) {
            $this->setReturnsWithinOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption');
        if (null !== $value) {
            $this->setShippingCostPaidByOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}refundOption');
        if (null !== $value) {
            $this->setRefundOption($value);
        }
    }
}
