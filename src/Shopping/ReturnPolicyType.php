<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyType
 *
 * Type used to express the details of the Return Policy that the seller has defined for the listing. Sellers have the ability to create separate return policies for domestic and international returns, but if a seller (who ships internationally) does not set up a separate international return policy, the settings in the domestic return policy fields will also apply to international returns.
 * XSD Type: ReturnPolicyType
 */
class ReturnPolicyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field indicates how the seller compensates domestic buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the refund method in this field will also apply for international returns. </span>
     *
     * @var string $refund
     */
    private $refund = null;

    /**
     * The value in this field indicates the number of days that a domestic buyer has to return an item. The return period begins when the item is marked 'delivered' at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts returns (<b>ReturnsAcceptedOption=ReturnsAccepted</b>).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the return period in this field will also apply for international returns. </span>
     *
     * @var string $returnsWithin
     */
    private $returnsWithin = null;

    /**
     * This field is always returned with the <b>ReturnPolicy</b> container, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept domestic returns (except in the case of a defective item or 'significantly not as described' item), and this field may be the only field returned under the <b>ReturnPolicy</b> container. If the value of this field is <code>ReturnsAccepted</code>, the seller does accept domestic returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the return period, the refund method, and order partner that is responsible for return shipping costs.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the 'returns accepted' value in this field will also apply for international returns. </span>
     *
     * @var string $returnsAccepted
     */
    private $returnsAccepted = null;

    /**
     * This field contains the seller's detailed explanation for their Return Policy. This same description is displayed in the Return Policy section of the View Item page. A Return Policy description (and this field) is only supported in the following marketplaces:
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Spain (ES)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  </ul>
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     *
     * @var string $warrantyOffered
     */
    private $warrantyOffered = null;

    /**
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     *
     * @var string $warrantyType
     */
    private $warrantyType = null;

    /**
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
     *
     * @var string $warrantyDuration
     */
    private $warrantyDuration = null;

    /**
     * The EAN (European Article Number) value is no longer a part of the Return Policy, so this field is deprecated. Instead, any EAN for a listing is returned in Item Specifics (if <b>IncludeSelector</b> value is set to <code>ItemSpecifics</code>).
     *
     * @var string $eAN
     */
    private $eAN = null;

    /**
     * This field specifies either the 'Buyer' or the 'Seller' as the party who pays for domestic return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs.
     *  <br><br>
     *  Note that the seller is always responsible for return shipping costs for SNAD-related issues, including defective items.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the return shipping cost payee in this field will also apply for international returns. </span>
     *
     * @var string $shippingCostPaidBy
     */
    private $shippingCostPaidBy = null;

    /**
     * This field is deprecated as of release 1061, and sellers are no longer allowed to charge buyers a restocking fee when returning items.
     *
     * @var string $restockingFeeValue
     */
    private $restockingFeeValue = null;

    /**
     * This field is deprecated as of release 1061 and sellers are no longer allowed to charge buyers a restocking fee when returning items.
     *
     * @var string $restockingFeeValueOption
     */
    private $restockingFeeValueOption = null;

    /**
     * This field indicates how the seller compensates international buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the refund method in the <b>Refund</b> field will also apply for international returns. </span>
     *
     * @var string $internationalRefund
     */
    private $internationalRefund = null;

    /**
     * The value in this field indicates the number of days that an international buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts international returns from countries they ship to (<b>InternationalReturnsAcceptedOption=ReturnsAccepted</b>).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the return period in the <b>ReturnsWithin</b> field will also apply for international returns. </span>
     *
     * @var string $internationalReturnsWithin
     */
    private $internationalReturnsWithin = null;

    /**
     * This field is always returned with the <b>ReturnPolicy</b> container if the seller ships items to other countries, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept international returns (except in the case of a defective item or 'significantly not as described' item). If the value of this field is <code>ReturnsAccepted</code>, the seller does accept international returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the international return period, the refund method, and order partner that is responsible for return shipping costs.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the 'returns accepted' value in the <b>ReturnsAccepted</b> field will also apply for international returns. </span>
     *
     * @var string $internationalReturnsAccepted
     */
    private $internationalReturnsAccepted = null;

    /**
     * This field specifies either the 'Buyer' or the 'Seller' as the party who pays for international return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs.
     *  <br><br>
     *  Note that the seller is always responsible for return shipping costs for SNAD-related issues, including defective items.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the return shipping cost payee in the <b>ShippingCostPaidBy</b> field will also apply for international returns. </span>
     *
     * @var string $internationalShippingCostPaidBy
     */
    private $internationalShippingCostPaidBy = null;

    /**
     * Gets as refund
     *
     * This field indicates how the seller compensates domestic buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the refund method in this field will also apply for international returns. </span>
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
     * This field indicates how the seller compensates domestic buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the refund method in this field will also apply for international returns. </span>
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
     * Gets as returnsWithin
     *
     * The value in this field indicates the number of days that a domestic buyer has to return an item. The return period begins when the item is marked 'delivered' at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts returns (<b>ReturnsAcceptedOption=ReturnsAccepted</b>).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the return period in this field will also apply for international returns. </span>
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
     * The value in this field indicates the number of days that a domestic buyer has to return an item. The return period begins when the item is marked 'delivered' at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts returns (<b>ReturnsAcceptedOption=ReturnsAccepted</b>).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the return period in this field will also apply for international returns. </span>
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
     * Gets as returnsAccepted
     *
     * This field is always returned with the <b>ReturnPolicy</b> container, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept domestic returns (except in the case of a defective item or 'significantly not as described' item), and this field may be the only field returned under the <b>ReturnPolicy</b> container. If the value of this field is <code>ReturnsAccepted</code>, the seller does accept domestic returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the return period, the refund method, and order partner that is responsible for return shipping costs.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the 'returns accepted' value in this field will also apply for international returns. </span>
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
     * This field is always returned with the <b>ReturnPolicy</b> container, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept domestic returns (except in the case of a defective item or 'significantly not as described' item), and this field may be the only field returned under the <b>ReturnPolicy</b> container. If the value of this field is <code>ReturnsAccepted</code>, the seller does accept domestic returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the return period, the refund method, and order partner that is responsible for return shipping costs.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the 'returns accepted' value in this field will also apply for international returns. </span>
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
     * This field contains the seller's detailed explanation for their Return Policy. This same description is displayed in the Return Policy section of the View Item page. A Return Policy description (and this field) is only supported in the following marketplaces:
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Spain (ES)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  </ul>
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
     * This field contains the seller's detailed explanation for their Return Policy. This same description is displayed in the Return Policy section of the View Item page. A Return Policy description (and this field) is only supported in the following marketplaces:
     *  <ul>
     *  <li>Germany (DE)</li>
     *  <li>Spain (ES)</li>
     *  <li>France (FR)</li>
     *  <li>Italy (IT)</li>
     *  </ul>
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
     * Gets as warrantyOffered
     *
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
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
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
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
     * Gets as warrantyType
     *
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
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
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
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
     * Gets as warrantyDuration
     *
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
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
     * This field is deprecated as of release 1061, as sellers are no longer allowed to offer product warranties through the Return Policy.
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
     * Gets as eAN
     *
     * The EAN (European Article Number) value is no longer a part of the Return Policy, so this field is deprecated. Instead, any EAN for a listing is returned in Item Specifics (if <b>IncludeSelector</b> value is set to <code>ItemSpecifics</code>).
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->eAN;
    }

    /**
     * Sets a new eAN
     *
     * The EAN (European Article Number) value is no longer a part of the Return Policy, so this field is deprecated. Instead, any EAN for a listing is returned in Item Specifics (if <b>IncludeSelector</b> value is set to <code>ItemSpecifics</code>).
     *
     * @param string $eAN
     * @return self
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;
        return $this;
    }

    /**
     * Gets as shippingCostPaidBy
     *
     * This field specifies either the 'Buyer' or the 'Seller' as the party who pays for domestic return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs.
     *  <br><br>
     *  Note that the seller is always responsible for return shipping costs for SNAD-related issues, including defective items.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the return shipping cost payee in this field will also apply for international returns. </span>
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
     * This field specifies either the 'Buyer' or the 'Seller' as the party who pays for domestic return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs.
     *  <br><br>
     *  Note that the seller is always responsible for return shipping costs for SNAD-related issues, including defective items.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, the return shipping cost payee in this field will also apply for international returns. </span>
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
     * This field is deprecated as of release 1061, and sellers are no longer allowed to charge buyers a restocking fee when returning items.
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
     * This field is deprecated as of release 1061, and sellers are no longer allowed to charge buyers a restocking fee when returning items.
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
     * This field is deprecated as of release 1061 and sellers are no longer allowed to charge buyers a restocking fee when returning items.
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
     * This field is deprecated as of release 1061 and sellers are no longer allowed to charge buyers a restocking fee when returning items.
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
     * Gets as internationalRefund
     *
     * This field indicates how the seller compensates international buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the refund method in the <b>Refund</b> field will also apply for international returns. </span>
     *
     * @return string
     */
    public function getInternationalRefund()
    {
        return $this->internationalRefund;
    }

    /**
     * Sets a new internationalRefund
     *
     * This field indicates how the seller compensates international buyers for <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Post-Order-Returns.html#return-reasons" target="_blank">remorse returns</a>. On many eBay marketplaces, 'Money Back' is the only option for domestic and international returns. The eBay US marketplace also allows sellers to offer buyers a 'Money Back Or Replacement' option, where the seller still wants the item they purchased, and prefers that the seller send an identical replacement item instead of a refund. This will typically happen if the originally purchased item arrived damaged or was missing parts.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the refund method in the <b>Refund</b> field will also apply for international returns. </span>
     *
     * @param string $internationalRefund
     * @return self
     */
    public function setInternationalRefund($internationalRefund)
    {
        $this->internationalRefund = $internationalRefund;
        return $this;
    }

    /**
     * Gets as internationalReturnsWithin
     *
     * The value in this field indicates the number of days that an international buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts international returns from countries they ship to (<b>InternationalReturnsAcceptedOption=ReturnsAccepted</b>).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the return period in the <b>ReturnsWithin</b> field will also apply for international returns. </span>
     *
     * @return string
     */
    public function getInternationalReturnsWithin()
    {
        return $this->internationalReturnsWithin;
    }

    /**
     * Sets a new internationalReturnsWithin
     *
     * The value in this field indicates the number of days that an international buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return periods. The return period must be specified by the seller if that seller accepts international returns from countries they ship to (<b>InternationalReturnsAcceptedOption=ReturnsAccepted</b>).
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the return period in the <b>ReturnsWithin</b> field will also apply for international returns. </span>
     *
     * @param string $internationalReturnsWithin
     * @return self
     */
    public function setInternationalReturnsWithin($internationalReturnsWithin)
    {
        $this->internationalReturnsWithin = $internationalReturnsWithin;
        return $this;
    }

    /**
     * Gets as internationalReturnsAccepted
     *
     * This field is always returned with the <b>ReturnPolicy</b> container if the seller ships items to other countries, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept international returns (except in the case of a defective item or 'significantly not as described' item). If the value of this field is <code>ReturnsAccepted</code>, the seller does accept international returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the international return period, the refund method, and order partner that is responsible for return shipping costs.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the 'returns accepted' value in the <b>ReturnsAccepted</b> field will also apply for international returns. </span>
     *
     * @return string
     */
    public function getInternationalReturnsAccepted()
    {
        return $this->internationalReturnsAccepted;
    }

    /**
     * Sets a new internationalReturnsAccepted
     *
     * This field is always returned with the <b>ReturnPolicy</b> container if the seller ships items to other countries, even if the seller does not accept returns for the item. If the value of this field is <code>ReturnsNotAccepted</code>, the seller does not accept international returns (except in the case of a defective item or 'significantly not as described' item). If the value of this field is <code>ReturnsAccepted</code>, the seller does accept international returns, and other fields under the <b>ReturnPolicy</b> container will state the length of the international return period, the refund method, and order partner that is responsible for return shipping costs.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the 'returns accepted' value in the <b>ReturnsAccepted</b> field will also apply for international returns. </span>
     *
     * @param string $internationalReturnsAccepted
     * @return self
     */
    public function setInternationalReturnsAccepted($internationalReturnsAccepted)
    {
        $this->internationalReturnsAccepted = $internationalReturnsAccepted;
        return $this;
    }

    /**
     * Gets as internationalShippingCostPaidBy
     *
     * This field specifies either the 'Buyer' or the 'Seller' as the party who pays for international return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs.
     *  <br><br>
     *  Note that the seller is always responsible for return shipping costs for SNAD-related issues, including defective items.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the return shipping cost payee in the <b>ShippingCostPaidBy</b> field will also apply for international returns. </span>
     *
     * @return string
     */
    public function getInternationalShippingCostPaidBy()
    {
        return $this->internationalShippingCostPaidBy;
    }

    /**
     * Sets a new internationalShippingCostPaidBy
     *
     * This field specifies either the 'Buyer' or the 'Seller' as the party who pays for international return shipping costs. It is up to the seller to decide whether the buyer or seller pays for return shipping costs, but the seller does have an incentive to pay return shipping costs, as the listing will be marked in search results as having '<b>Free Returns</b>' if the seller pays return shipping costs.
     *  <br><br>
     *  Note that the seller is always responsible for return shipping costs for SNAD-related issues, including defective items.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> If the seller ships internationally, but did not specify a separate international return policy for the listing, this field is not returned, and the return shipping cost payee in the <b>ShippingCostPaidBy</b> field will also apply for international returns. </span>
     *
     * @param string $internationalShippingCostPaidBy
     * @return self
     */
    public function setInternationalShippingCostPaidBy($internationalShippingCostPaidBy)
    {
        $this->internationalShippingCostPaidBy = $internationalShippingCostPaidBy;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefund();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Refund", $value);
        }
        $value = $this->getReturnsWithin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsWithin", $value);
        }
        $value = $this->getReturnsAccepted();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsAccepted", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getWarrantyOffered();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyOffered", $value);
        }
        $value = $this->getWarrantyType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyType", $value);
        }
        $value = $this->getWarrantyDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyDuration", $value);
        }
        $value = $this->getEAN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EAN", $value);
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
        $value = $this->getInternationalRefund();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRefund", $value);
        }
        $value = $this->getInternationalReturnsWithin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsWithin", $value);
        }
        $value = $this->getInternationalReturnsAccepted();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAccepted", $value);
        }
        $value = $this->getInternationalShippingCostPaidBy();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalShippingCostPaidBy", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refund');
        if (null !== $value) {
            $this->setRefund($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsWithin');
        if (null !== $value) {
            $this->setReturnsWithin($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsAccepted');
        if (null !== $value) {
            $this->setReturnsAccepted($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyOffered');
        if (null !== $value) {
            $this->setWarrantyOffered($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyType');
        if (null !== $value) {
            $this->setWarrantyType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyDuration');
        if (null !== $value) {
            $this->setWarrantyDuration($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EAN');
        if (null !== $value) {
            $this->setEAN($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidBy');
        if (null !== $value) {
            $this->setShippingCostPaidBy($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockingFeeValue');
        if (null !== $value) {
            $this->setRestockingFeeValue($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockingFeeValueOption');
        if (null !== $value) {
            $this->setRestockingFeeValueOption($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRefund');
        if (null !== $value) {
            $this->setInternationalRefund($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsWithin');
        if (null !== $value) {
            $this->setInternationalReturnsWithin($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAccepted');
        if (null !== $value) {
            $this->setInternationalReturnsAccepted($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalShippingCostPaidBy');
        if (null !== $value) {
            $this->setInternationalShippingCostPaidBy($value);
        }
    }
}
