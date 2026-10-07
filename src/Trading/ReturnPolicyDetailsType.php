<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyDetailsType
 *
 * <span class="tablenote"><b>Note: </b>
 *  This type is used by the deprecated <b>ReturnPolicyDetails</b> container that may still be returned in <b>GeteBayDetails</b>. For category-specific return-policy metadata, use the Sell <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method. This method returns category-level domestic and international return-policy metadata for the applicable leaf category, including <b>policyDescriptionEnabled</b>, <b>refundMethods</b>, <b>returnsAcceptanceEnabled</b>, <b>returnPeriods</b>, and <b>returnShippingCostPayers</b>.
 *  </span>
 * XSD Type: ReturnPolicyDetailsType
 */
class ReturnPolicyDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.Refund</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which refund methods are supported for a specific leaf category on a specific eBay marketplace, call the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method and inspect the <b>returnPolicies.domestic.refundMethods</b> and <b>returnPolicies.international.refundMethods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>RefundOption</b> and <b>InternationalRefundOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. If MONEY_BACK is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <b>RefundOption</b> and <b>InternationalRefundOption</b>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RefundDetailsType[] $refund
     */
    private $refund = [

    ];

    /**
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsWithin</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsWithinOption</b> and <b>InternationalReturnsWithinOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. For example, if <b>getReturnPolicies</b> returns a <b>returnPeriods.value</b> of <code>30</code>, use <code>Days_30</code> in <b>ReturnsWithinOption</b> or <b>InternationalReturnsWithinOption</b>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType[] $returnsWithin
     */
    private $returnsWithin = [

    ];

    /**
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container that may still be returned in <b>GeteBayDetails</b>. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsAcceptedOption</b> and <b>InternationalReturnsAcceptedOption</b> to indicate whether or not the seller accepts returns for categories where return policies are applicable. Note that not accepting returns is still a valid return policy.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType[] $returnsAccepted
     */
    private $returnsAccepted = [

    ];

    /**
     * <span class="tablenote"><b>Note: </b>
     *  This field is used by the deprecated <b>ReturnPolicyDetails</b> container returned in <b>GeteBayDetails</b>. For category-specific support, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.policyDescriptionEnabled</b> and <b>returnPolicies.international.policyDescriptionEnabled</b> fields for the target marketplace and category.
     *  &lt;/span&gt;
     *
     * @var bool $description
     */
    private $description = null;

    /**
     * This type defines the deprecated <b>ReturnPolicyDetails.ShippingCostPaidBy</b> container that may still be returned in <b>GeteBayDetails</b>. This value indicates whether the buyer or seller is responsible for return shipping cost. For category-specific support, call the <b>Sell Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnShippingCostPayers</b> and <b>returnPolicies.international.returnShippingCostPayers</b> fields for the target marketplace and category. When using legacy Trading API ReturnPolicy fields, use <b>ShippingCostPaidByOption</b> and <b>InternationalShippingCostPaidByOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. Note that for SNAD returns, the seller is always responsible for return shipping cost.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType[] $shippingCostPaidBy
     */
    private $shippingCostPaidBy = [

    ];

    /**
     * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     *
     * @var \Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType[] $restockingFeeValue
     */
    private $restockingFeeValue = [

    ];

    /**
     * Returns the latest version number for the Return Policy Details metadata set. The version can be used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * This timestamp in GMT indicate when the Return Policy Details metadata were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Adds as refund
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.Refund</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which refund methods are supported for a specific leaf category on a specific eBay marketplace, call the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method and inspect the <b>returnPolicies.domestic.refundMethods</b> and <b>returnPolicies.international.refundMethods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>RefundOption</b> and <b>InternationalRefundOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. If MONEY_BACK is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <b>RefundOption</b> and <b>InternationalRefundOption</b>.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundDetailsType $refund
     */
    public function addToRefund(\Nogrod\eBaySDK\Trading\RefundDetailsType $refund)
    {
        if (!is_array($this->refund)) {
            throw new \LogicException('refund is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->refund[] = $refund;
        return $this;
    }

    /**
     * isset refund
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.Refund</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which refund methods are supported for a specific leaf category on a specific eBay marketplace, call the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method and inspect the <b>returnPolicies.domestic.refundMethods</b> and <b>returnPolicies.international.refundMethods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>RefundOption</b> and <b>InternationalRefundOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. If MONEY_BACK is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <b>RefundOption</b> and <b>InternationalRefundOption</b>.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefund($index)
    {
        return isset($this->refund[$index]);
    }

    /**
     * unset refund
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.Refund</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which refund methods are supported for a specific leaf category on a specific eBay marketplace, call the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method and inspect the <b>returnPolicies.domestic.refundMethods</b> and <b>returnPolicies.international.refundMethods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>RefundOption</b> and <b>InternationalRefundOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. If MONEY_BACK is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <b>RefundOption</b> and <b>InternationalRefundOption</b>.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefund($index)
    {
        unset($this->refund[$index]);
    }

    /**
     * Gets as refund
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.Refund</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which refund methods are supported for a specific leaf category on a specific eBay marketplace, call the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method and inspect the <b>returnPolicies.domestic.refundMethods</b> and <b>returnPolicies.international.refundMethods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>RefundOption</b> and <b>InternationalRefundOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. If MONEY_BACK is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <b>RefundOption</b> and <b>InternationalRefundOption</b>.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\RefundDetailsType>
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets a new refund
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.Refund</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which refund methods are supported for a specific leaf category on a specific eBay marketplace, call the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method and inspect the <b>returnPolicies.domestic.refundMethods</b> and <b>returnPolicies.international.refundMethods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>RefundOption</b> and <b>InternationalRefundOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. If MONEY_BACK is returned by <b>getReturnPolicies</b>, use <b>MoneyBack</b> in <b>RefundOption</b> and <b>InternationalRefundOption</b>.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RefundDetailsType> $refund
     * @return self
     */
    public function setRefund(iterable $refund)
    {
        $this->refund = $refund;
        return $this;
    }

    /**
     * Adds as returnsWithin
     *
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsWithin</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsWithinOption</b> and <b>InternationalReturnsWithinOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. For example, if <b>getReturnPolicies</b> returns a <b>returnPeriods.value</b> of <code>30</code>, use <code>Days_30</code> in <b>ReturnsWithinOption</b> or <b>InternationalReturnsWithinOption</b>.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType $returnsWithin
     */
    public function addToReturnsWithin(\Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType $returnsWithin)
    {
        if (!is_array($this->returnsWithin)) {
            throw new \LogicException('returnsWithin is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->returnsWithin[] = $returnsWithin;
        return $this;
    }

    /**
     * isset returnsWithin
     *
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsWithin</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsWithinOption</b> and <b>InternationalReturnsWithinOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. For example, if <b>getReturnPolicies</b> returns a <b>returnPeriods.value</b> of <code>30</code>, use <code>Days_30</code> in <b>ReturnsWithinOption</b> or <b>InternationalReturnsWithinOption</b>.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReturnsWithin($index)
    {
        return isset($this->returnsWithin[$index]);
    }

    /**
     * unset returnsWithin
     *
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsWithin</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsWithinOption</b> and <b>InternationalReturnsWithinOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. For example, if <b>getReturnPolicies</b> returns a <b>returnPeriods.value</b> of <code>30</code>, use <code>Days_30</code> in <b>ReturnsWithinOption</b> or <b>InternationalReturnsWithinOption</b>.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReturnsWithin($index)
    {
        unset($this->returnsWithin[$index]);
    }

    /**
     * Gets as returnsWithin
     *
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsWithin</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsWithinOption</b> and <b>InternationalReturnsWithinOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. For example, if <b>getReturnPolicies</b> returns a <b>returnPeriods.value</b> of <code>30</code>, use <code>Days_30</code> in <b>ReturnsWithinOption</b> or <b>InternationalReturnsWithinOption</b>.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType>
     */
    public function getReturnsWithin()
    {
        return $this->returnsWithin;
    }

    /**
     * Sets a new returnsWithin
     *
     * <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsWithin</b> container that may still be returned in <b>GeteBayDetails</b>. To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsWithinOption</b> and <b>InternationalReturnsWithinOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. For example, if <b>getReturnPolicies</b> returns a <b>returnPeriods.value</b> of <code>30</code>, use <code>Days_30</code> in <b>ReturnsWithinOption</b> or <b>InternationalReturnsWithinOption</b>.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType> $returnsWithin
     * @return self
     */
    public function setReturnsWithin(iterable $returnsWithin)
    {
        $this->returnsWithin = $returnsWithin;
        return $this;
    }

    /**
     * Adds as returnsAccepted
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container that may still be returned in <b>GeteBayDetails</b>. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsAcceptedOption</b> and <b>InternationalReturnsAcceptedOption</b> to indicate whether or not the seller accepts returns for categories where return policies are applicable. Note that not accepting returns is still a valid return policy.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType $returnsAccepted
     */
    public function addToReturnsAccepted(\Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType $returnsAccepted)
    {
        if (!is_array($this->returnsAccepted)) {
            throw new \LogicException('returnsAccepted is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->returnsAccepted[] = $returnsAccepted;
        return $this;
    }

    /**
     * isset returnsAccepted
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container that may still be returned in <b>GeteBayDetails</b>. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsAcceptedOption</b> and <b>InternationalReturnsAcceptedOption</b> to indicate whether or not the seller accepts returns for categories where return policies are applicable. Note that not accepting returns is still a valid return policy.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReturnsAccepted($index)
    {
        return isset($this->returnsAccepted[$index]);
    }

    /**
     * unset returnsAccepted
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container that may still be returned in <b>GeteBayDetails</b>. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsAcceptedOption</b> and <b>InternationalReturnsAcceptedOption</b> to indicate whether or not the seller accepts returns for categories where return policies are applicable. Note that not accepting returns is still a valid return policy.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReturnsAccepted($index)
    {
        unset($this->returnsAccepted[$index]);
    }

    /**
     * Gets as returnsAccepted
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container that may still be returned in <b>GeteBayDetails</b>. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsAcceptedOption</b> and <b>InternationalReturnsAcceptedOption</b> to indicate whether or not the seller accepts returns for categories where return policies are applicable. Note that not accepting returns is still a valid return policy.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType>
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }

    /**
     * Sets a new returnsAccepted
     *
     * <span class="tablenote"><b>Note: </b>
     *  This type defines the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container that may still be returned in <b>GeteBayDetails</b>. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields. When using legacy Trading API ReturnPolicy fields, use <b>ReturnsAcceptedOption</b> and <b>InternationalReturnsAcceptedOption</b> to indicate whether or not the seller accepts returns for categories where return policies are applicable. Note that not accepting returns is still a valid return policy.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType> $returnsAccepted
     * @return self
     */
    public function setReturnsAccepted(iterable $returnsAccepted)
    {
        $this->returnsAccepted = $returnsAccepted;
        return $this;
    }

    /**
     * Gets as description
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is used by the deprecated <b>ReturnPolicyDetails</b> container returned in <b>GeteBayDetails</b>. For category-specific support, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.policyDescriptionEnabled</b> and <b>returnPolicies.international.policyDescriptionEnabled</b> fields for the target marketplace and category.
     *  &lt;/span&gt;
     *
     * @return bool
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is used by the deprecated <b>ReturnPolicyDetails</b> container returned in <b>GeteBayDetails</b>. For category-specific support, call <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.policyDescriptionEnabled</b> and <b>returnPolicies.international.policyDescriptionEnabled</b> fields for the target marketplace and category.
     *  &lt;/span&gt;
     *
     * @param bool $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as shippingCostPaidBy
     *
     * This type defines the deprecated <b>ReturnPolicyDetails.ShippingCostPaidBy</b> container that may still be returned in <b>GeteBayDetails</b>. This value indicates whether the buyer or seller is responsible for return shipping cost. For category-specific support, call the <b>Sell Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnShippingCostPayers</b> and <b>returnPolicies.international.returnShippingCostPayers</b> fields for the target marketplace and category. When using legacy Trading API ReturnPolicy fields, use <b>ShippingCostPaidByOption</b> and <b>InternationalShippingCostPaidByOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. Note that for SNAD returns, the seller is always responsible for return shipping cost.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType $shippingCostPaidBy
     */
    public function addToShippingCostPaidBy(\Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType $shippingCostPaidBy)
    {
        if (!is_array($this->shippingCostPaidBy)) {
            throw new \LogicException('shippingCostPaidBy is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->shippingCostPaidBy[] = $shippingCostPaidBy;
        return $this;
    }

    /**
     * isset shippingCostPaidBy
     *
     * This type defines the deprecated <b>ReturnPolicyDetails.ShippingCostPaidBy</b> container that may still be returned in <b>GeteBayDetails</b>. This value indicates whether the buyer or seller is responsible for return shipping cost. For category-specific support, call the <b>Sell Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnShippingCostPayers</b> and <b>returnPolicies.international.returnShippingCostPayers</b> fields for the target marketplace and category. When using legacy Trading API ReturnPolicy fields, use <b>ShippingCostPaidByOption</b> and <b>InternationalShippingCostPaidByOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. Note that for SNAD returns, the seller is always responsible for return shipping cost.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingCostPaidBy($index)
    {
        return isset($this->shippingCostPaidBy[$index]);
    }

    /**
     * unset shippingCostPaidBy
     *
     * This type defines the deprecated <b>ReturnPolicyDetails.ShippingCostPaidBy</b> container that may still be returned in <b>GeteBayDetails</b>. This value indicates whether the buyer or seller is responsible for return shipping cost. For category-specific support, call the <b>Sell Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnShippingCostPayers</b> and <b>returnPolicies.international.returnShippingCostPayers</b> fields for the target marketplace and category. When using legacy Trading API ReturnPolicy fields, use <b>ShippingCostPaidByOption</b> and <b>InternationalShippingCostPaidByOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. Note that for SNAD returns, the seller is always responsible for return shipping cost.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingCostPaidBy($index)
    {
        unset($this->shippingCostPaidBy[$index]);
    }

    /**
     * Gets as shippingCostPaidBy
     *
     * This type defines the deprecated <b>ReturnPolicyDetails.ShippingCostPaidBy</b> container that may still be returned in <b>GeteBayDetails</b>. This value indicates whether the buyer or seller is responsible for return shipping cost. For category-specific support, call the <b>Sell Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnShippingCostPayers</b> and <b>returnPolicies.international.returnShippingCostPayers</b> fields for the target marketplace and category. When using legacy Trading API ReturnPolicy fields, use <b>ShippingCostPaidByOption</b> and <b>InternationalShippingCostPaidByOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. Note that for SNAD returns, the seller is always responsible for return shipping cost.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType>
     */
    public function getShippingCostPaidBy()
    {
        return $this->shippingCostPaidBy;
    }

    /**
     * Sets a new shippingCostPaidBy
     *
     * This type defines the deprecated <b>ReturnPolicyDetails.ShippingCostPaidBy</b> container that may still be returned in <b>GeteBayDetails</b>. This value indicates whether the buyer or seller is responsible for return shipping cost. For category-specific support, call the <b>Sell Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> and inspect the <b>returnPolicies.domestic.returnShippingCostPayers</b> and <b>returnPolicies.international.returnShippingCostPayers</b> fields for the target marketplace and category. When using legacy Trading API ReturnPolicy fields, use <b>ShippingCostPaidByOption</b> and <b>InternationalShippingCostPaidByOption</b> to pass one of the supported values returned by <b>getReturnPolicies</b>. Note that for SNAD returns, the seller is always responsible for return shipping cost.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType> $shippingCostPaidBy
     * @return self
     */
    public function setShippingCostPaidBy(iterable $shippingCostPaidBy)
    {
        $this->shippingCostPaidBy = $shippingCostPaidBy;
        return $this;
    }

    /**
     * Adds as restockingFeeValue
     *
     * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType $restockingFeeValue
     */
    public function addToRestockingFeeValue(\Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType $restockingFeeValue)
    {
        if (!is_array($this->restockingFeeValue)) {
            throw new \LogicException('restockingFeeValue is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->restockingFeeValue[] = $restockingFeeValue;
        return $this;
    }

    /**
     * isset restockingFeeValue
     *
     * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestockingFeeValue($index)
    {
        return isset($this->restockingFeeValue[$index]);
    }

    /**
     * unset restockingFeeValue
     *
     * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestockingFeeValue($index)
    {
        unset($this->restockingFeeValue[$index]);
    }

    /**
     * Gets as restockingFeeValue
     *
     * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType>
     */
    public function getRestockingFeeValue()
    {
        return $this->restockingFeeValue;
    }

    /**
     * Sets a new restockingFeeValue
     *
     * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType> $restockingFeeValue
     * @return self
     */
    public function setRestockingFeeValue(iterable $restockingFeeValue)
    {
        $this->restockingFeeValue = $restockingFeeValue;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for the Return Policy Details metadata set. The version can be used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for the Return Policy Details metadata set. The version can be used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * This timestamp in GMT indicate when the Return Policy Details metadata were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * This timestamp in GMT indicate when the Return Policy Details metadata were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->refund;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Refund', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->returnsWithin;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReturnsWithin', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->returnsAccepted;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReturnsAccepted', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, ($value ? 'true' : 'false'));
        }
        $value = $this->shippingCostPaidBy;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ShippingCostPaidBy', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->restockingFeeValue;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'RestockingFeeValue', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->refund = [];
        $this->returnsWithin = [];
        $this->returnsAccepted = [];
        $this->shippingCostPaidBy = [];
        $this->restockingFeeValue = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Refund':
                    $this->refund[] = \Nogrod\eBaySDK\Trading\RefundDetailsType::xmlRead($reader);
                    return true;
                case 'ReturnsWithin':
                    $this->returnsWithin[] = \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType::xmlRead($reader);
                    return true;
                case 'ReturnsAccepted':
                    $this->returnsAccepted[] = \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType::xmlRead($reader);
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ShippingCostPaidBy':
                    $this->shippingCostPaidBy[] = \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType::xmlRead($reader);
                    return true;
                case 'RestockingFeeValue':
                    $this->restockingFeeValue[] = \Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType::xmlRead($reader);
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Refund'] = Func::jsonList($this->refund);
        $data['ReturnsWithin'] = Func::jsonList($this->returnsWithin);
        $data['ReturnsAccepted'] = Func::jsonList($this->returnsAccepted);
        $data['Description'] = $this->description;
        $data['ShippingCostPaidBy'] = Func::jsonList($this->shippingCostPaidBy);
        $data['RestockingFeeValue'] = Func::jsonList($this->restockingFeeValue);
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
