<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyDetailsType
 *
 * Type defining the <b>ReturnPolicyDetails</b> container, which is returned in <b>GeteBayDetails</b>, and provides the seller with the Return Policy features (and applicable values) that are supported by the listing site. This container is only returned if <b>ReturnPolicyDetails</b> is included as a <b>DetailName</b>
 *  filter in the call request, or if no <b>DetailName</b> filters are used in the request.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b>
 *  The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what Return Policy features/settings that a particular category supports, call <b>GetCategoryFeatures</b> and include any or all of the domestic and or international Return Policy-related <b>FeatureID</b> values to see the Return Policy features/settings available for domestic and international returns, respectively.
 *  </span>
 * XSD Type: ReturnPolicyDetailsType
 */
class ReturnPolicyDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RefundDetailsType[] $refund
     */
    private $refund = [

    ];

    /**
     * This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType[] $returnsWithin
     */
    private $returnsWithin = [

    ];

    /**
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the buyer to return the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns, respectively.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType[] $returnsAccepted
     */
    private $returnsAccepted = [

    ];

    /**
     * This field is returned with a value of <code>true</code> if the site supports a text description of the seller's Return Policy in listings. If the site does support a text description of the seller's Return Policy, it is set through the <b>ReturnPolicy.Description</b> field in an Add/Revise/Relist API call. Currently, the only eBay sites that support Return Policy descriptions are Germany, Austria, France, Italy, and Spain.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover if a Return Policy desciption is supported by a particular category, call <b>GetCategoryFeatures</b> and include <code>ReturnPolicyDescriptionEnabled</code> as a <b>FeatureID</b> value to see if the category supports the use of a Return Policy description.
     *  </span>
     *
     * @var bool $description
     */
    private $description = null;

    /**
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
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
     * This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RefundDetailsType $refund
     */
    public function addToRefund(\Nogrod\eBaySDK\Trading\RefundDetailsType $refund)
    {
        $this->refund[] = $refund;
        return $this;
    }

    /**
     * isset refund
     *
     * This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
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
     * This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
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
     * This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RefundDetailsType[]
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets a new refund
     *
     * This container consists of the supported refund/exchange/replacement item options that the seller may make available to the buyer in case the buyer wants to return the original item. Enumeration value(s) returned in <b>RefundOption</b> field(s) can be used in the <b>ReturnPolicy.RefundOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RefundDetailsType[] $refund
     * @return self
     */
    public function setRefund(array $refund)
    {
        $this->refund = $refund;
        return $this;
    }

    /**
     * Adds as returnsWithin
     *
     * This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType $returnsWithin
     */
    public function addToReturnsWithin(\Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType $returnsWithin)
    {
        $this->returnsWithin[] = $returnsWithin;
        return $this;
    }

    /**
     * isset returnsWithin
     *
     * This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively.
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
     * This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively.
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
     * This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType[]
     */
    public function getReturnsWithin()
    {
        return $this->returnsWithin;
    }

    /**
     * Sets a new returnsWithin
     *
     * This container consists of the supported time periods within which the buyer can return the item, starting from the day they receive the item. Enumeration value(s) returned in <b>ReturnsWithinOption</b> field(s) can be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field in an Add/Revise/Relist API call.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType[] $returnsWithin
     * @return self
     */
    public function setReturnsWithin(array $returnsWithin)
    {
        $this->returnsWithin = $returnsWithin;
        return $this;
    }

    /**
     * Adds as returnsAccepted
     *
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the buyer to return the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns, respectively.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType $returnsAccepted
     */
    public function addToReturnsAccepted(\Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType $returnsAccepted)
    {
        $this->returnsAccepted[] = $returnsAccepted;
        return $this;
    }

    /**
     * isset returnsAccepted
     *
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the buyer to return the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns, respectively.
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
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the buyer to return the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns, respectively.
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
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the buyer to return the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns, respectively.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType[]
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }

    /**
     * Sets a new returnsAccepted
     *
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ReturnsAcceptedOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether or not the seller allows the buyer to return the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover the enumeration values that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the <b>ReturnPolicy.ReturnsAcceptedOption</b> and <b>ReturnPolicy.InternationalReturnsAcceptedOption</b> values supported for domestic and international returns, respectively.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType[] $returnsAccepted
     * @return self
     */
    public function setReturnsAccepted(array $returnsAccepted)
    {
        $this->returnsAccepted = $returnsAccepted;
        return $this;
    }

    /**
     * Gets as description
     *
     * This field is returned with a value of <code>true</code> if the site supports a text description of the seller's Return Policy in listings. If the site does support a text description of the seller's Return Policy, it is set through the <b>ReturnPolicy.Description</b> field in an Add/Revise/Relist API call. Currently, the only eBay sites that support Return Policy descriptions are Germany, Austria, France, Italy, and Spain.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover if a Return Policy desciption is supported by a particular category, call <b>GetCategoryFeatures</b> and include <code>ReturnPolicyDescriptionEnabled</code> as a <b>FeatureID</b> value to see if the category supports the use of a Return Policy description.
     *  </span>
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
     * This field is returned with a value of <code>true</code> if the site supports a text description of the seller's Return Policy in listings. If the site does support a text description of the seller's Return Policy, it is set through the <b>ReturnPolicy.Description</b> field in an Add/Revise/Relist API call. Currently, the only eBay sites that support Return Policy descriptions are Germany, Austria, France, Italy, and Spain.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  To discover if a Return Policy desciption is supported by a particular category, call <b>GetCategoryFeatures</b> and include <code>ReturnPolicyDescriptionEnabled</code> as a <b>FeatureID</b> value to see if the category supports the use of a Return Policy description.
     *  </span>
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
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType $shippingCostPaidBy
     */
    public function addToShippingCostPaidBy(\Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType $shippingCostPaidBy)
    {
        $this->shippingCostPaidBy[] = $shippingCostPaidBy;
        return $this;
    }

    /**
     * isset shippingCostPaidBy
     *
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
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
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
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
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType[]
     */
    public function getShippingCostPaidBy()
    {
        return $this->shippingCostPaidBy;
    }

    /**
     * Sets a new shippingCostPaidBy
     *
     * This container consists of the enumeration values that can be passed into the <b>ReturnPolicy.ShippingCostPaidByOption</b> or <b>ReturnPolicy.InternationalShippingCostPaidByOption</b> field when using an Add/Revise/Relist API call. This value will indicate whether the buyer or seller is responsible for return shipping cost. The enumeration value(s) returned in <b>ShippingCostPaidByOption</b> field(s) can be used in the <b>ReturnPolicy.ShippingCostPaidByOption</b> field in an
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType[] $shippingCostPaidBy
     * @return self
     */
    public function setShippingCostPaidBy(array $shippingCostPaidBy)
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
     * @return \Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType[]
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
     * @param \Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType[] $restockingFeeValue
     * @return self
     */
    public function setRestockingFeeValue(array $restockingFeeValue)
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefund();
        if (null !== $value && [] !== $this->getRefund()) {
            $writer->write(array_map(function ($v) {return ["Refund" => $v];}, $value));
        }
        $value = $this->getReturnsWithin();
        if (null !== $value && [] !== $this->getReturnsWithin()) {
            $writer->write(array_map(function ($v) {return ["ReturnsWithin" => $v];}, $value));
        }
        $value = $this->getReturnsAccepted();
        if (null !== $value && [] !== $this->getReturnsAccepted()) {
            $writer->write(array_map(function ($v) {return ["ReturnsAccepted" => $v];}, $value));
        }
        $value = $this->getDescription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getShippingCostPaidBy();
        if (null !== $value && [] !== $this->getShippingCostPaidBy()) {
            $writer->write(array_map(function ($v) {return ["ShippingCostPaidBy" => $v];}, $value));
        }
        $value = $this->getRestockingFeeValue();
        if (null !== $value && [] !== $this->getRestockingFeeValue()) {
            $writer->write(array_map(function ($v) {return ["RestockingFeeValue" => $v];}, $value));
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ReturnPolicyDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refund');
        if (null !== $value) {
            $this->setRefund(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\RefundDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsWithin');
        if (null !== $value) {
            $this->setReturnsWithin(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsAccepted');
        if (null !== $value) {
            $this->setReturnsAccepted(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidBy');
        if (null !== $value) {
            $this->setShippingCostPaidBy(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockingFeeValue');
        if (null !== $value) {
            $this->setRestockingFeeValue(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
