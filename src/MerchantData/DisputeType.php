<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeType
 *
 * Contains all information describing a dispute.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeType
 */
class DisputeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique identifier of an eBay dispute.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * A value to indicate the type of dispute.
     *
     * @var string $disputeRecordType
     */
    private $disputeRecordType = null;

    /**
     * The internal state of the dispute. The value determines
     *  which values of <b>DisputeActivity</b> are valid when responding
     *  to a dispute.
     *
     * @var string $disputeState
     */
    private $disputeState = null;

    /**
     * The status of the dispute, which provides additional
     *  information about the dispute state.
     *
     * @var string $disputeStatus
     */
    private $disputeStatus = null;

    /**
     * The role of the person involved in the dispute who is
     *  not taking action or requesting information. The role is
     *  either <b>Buyer</b> or <b>Seller</b>.
     *
     * @var string $otherPartyRole
     */
    private $otherPartyRole = null;

    /**
     * The user name of the person involved in the dispute who
     *  is not taking action or requesting information.
     *
     * @var string $otherPartyName
     */
    private $otherPartyName = null;

    /**
     * The role of the person involved in the dispute who is taking action or
     *  requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     *
     * @var string $userRole
     */
    private $userRole = null;

    /**
     * The eBay user ID of the buyer involved in the dispute.
     *
     * @var string $buyerUserID
     */
    private $buyerUserID = null;

    /**
     * The eBay user ID of the seller involved in the dispute.
     *
     * @var string $sellerUserID
     */
    private $sellerUserID = null;

    /**
     * The unique identifier of the order line item (transaction) under dispute. An
     *  order line item is created once there is a commitment from a
     *  buyer to purchase an item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b>
     *  responses, this value identifies the order line item involved in the
     *  dispute.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * Container consisting of high-level details about the item involved in the
     *  dispute.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemType $item
     */
    private $item = null;

    /**
     * The top-level reason for the dispute. The value of <b>DisputeReason</b>
     *  determines which values of <b>DisputeExplanation</b> are valid.
     *  See <b>DisputeExplanationCodeList</b> for details.
     *
     * @var string $disputeReason
     */
    private $disputeReason = null;

    /**
     * The detailed explanation for the dispute. Valid values
     *  depend on the value of <b>DisputeReason</b>. See <b>DisputeExplanationCodeList</b>
     *  for details.
     *
     * @var string $disputeExplanation
     */
    private $disputeExplanation = null;

    /**
     * A value to indicate whether or not the seller is currently eligible for a
     *  Final Value Fee credit. The seller becomes eligible for a Final Value Fee
     *  credit after filing and winning an Unpaid Item case. This tag only
     *  indicates credit eligibility and does not mean that the case can be closed.
     *  The seller can open an Unpaid Item case as soon as two days after the listing ends.
     *  <br>
     *
     * @var string $disputeCreditEligibility
     */
    private $disputeCreditEligibility = null;

    /**
     * The date and time the dispute was created, in GMT.
     *
     * @var \DateTime $disputeCreatedTime
     */
    private $disputeCreatedTime = null;

    /**
     * The date and time the dispute was modified, in GMT.
     *
     * @var \DateTime $disputeModifiedTime
     */
    private $disputeModifiedTime = null;

    /**
     * The action resulting from the dispute resolution. The
     *  action might include a Final Value Fee credit to the seller, a strike
     *  to the buyer, a reversal, or an appeal.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DisputeResolutionType[] $disputeResolution
     */
    private $disputeResolution = [
        
    ];

    /**
     * A response or message posted to a dispute, either by
     *  an application or by a user on the eBay site.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DisputeMessageType[] $disputeMessage
     */
    private $disputeMessage = [
        
    ];

    /**
     * This field is returned as <code>true</code> if the buyer is eligible to appeal a closed Item Not Received dispute.
     *
     * @var bool $escalation
     */
    private $escalation = null;

    /**
     * This field is returned as <code>true</code> if the buyer used PayPal to pay for the item, and is eligible for PayPal's Standard Purchase Protection.
     *
     * @var bool $purchaseProtection
     */
    private $purchaseProtection = null;

    /**
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b> responses, this value identifies the order line item involved in the dispute.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of an eBay dispute.
     *
     * @return string
     */
    public function getDisputeID()
    {
        return $this->disputeID;
    }

    /**
     * Sets a new disputeID
     *
     * The unique identifier of an eBay dispute.
     *
     * @param string $disputeID
     * @return self
     */
    public function setDisputeID($disputeID)
    {
        $this->disputeID = $disputeID;
        return $this;
    }

    /**
     * Gets as disputeRecordType
     *
     * A value to indicate the type of dispute.
     *
     * @return string
     */
    public function getDisputeRecordType()
    {
        return $this->disputeRecordType;
    }

    /**
     * Sets a new disputeRecordType
     *
     * A value to indicate the type of dispute.
     *
     * @param string $disputeRecordType
     * @return self
     */
    public function setDisputeRecordType($disputeRecordType)
    {
        $this->disputeRecordType = $disputeRecordType;
        return $this;
    }

    /**
     * Gets as disputeState
     *
     * The internal state of the dispute. The value determines
     *  which values of <b>DisputeActivity</b> are valid when responding
     *  to a dispute.
     *
     * @return string
     */
    public function getDisputeState()
    {
        return $this->disputeState;
    }

    /**
     * Sets a new disputeState
     *
     * The internal state of the dispute. The value determines
     *  which values of <b>DisputeActivity</b> are valid when responding
     *  to a dispute.
     *
     * @param string $disputeState
     * @return self
     */
    public function setDisputeState($disputeState)
    {
        $this->disputeState = $disputeState;
        return $this;
    }

    /**
     * Gets as disputeStatus
     *
     * The status of the dispute, which provides additional
     *  information about the dispute state.
     *
     * @return string
     */
    public function getDisputeStatus()
    {
        return $this->disputeStatus;
    }

    /**
     * Sets a new disputeStatus
     *
     * The status of the dispute, which provides additional
     *  information about the dispute state.
     *
     * @param string $disputeStatus
     * @return self
     */
    public function setDisputeStatus($disputeStatus)
    {
        $this->disputeStatus = $disputeStatus;
        return $this;
    }

    /**
     * Gets as otherPartyRole
     *
     * The role of the person involved in the dispute who is
     *  not taking action or requesting information. The role is
     *  either <b>Buyer</b> or <b>Seller</b>.
     *
     * @return string
     */
    public function getOtherPartyRole()
    {
        return $this->otherPartyRole;
    }

    /**
     * Sets a new otherPartyRole
     *
     * The role of the person involved in the dispute who is
     *  not taking action or requesting information. The role is
     *  either <b>Buyer</b> or <b>Seller</b>.
     *
     * @param string $otherPartyRole
     * @return self
     */
    public function setOtherPartyRole($otherPartyRole)
    {
        $this->otherPartyRole = $otherPartyRole;
        return $this;
    }

    /**
     * Gets as otherPartyName
     *
     * The user name of the person involved in the dispute who
     *  is not taking action or requesting information.
     *
     * @return string
     */
    public function getOtherPartyName()
    {
        return $this->otherPartyName;
    }

    /**
     * Sets a new otherPartyName
     *
     * The user name of the person involved in the dispute who
     *  is not taking action or requesting information.
     *
     * @param string $otherPartyName
     * @return self
     */
    public function setOtherPartyName($otherPartyName)
    {
        $this->otherPartyName = $otherPartyName;
        return $this;
    }

    /**
     * Gets as userRole
     *
     * The role of the person involved in the dispute who is taking action or
     *  requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     *
     * @return string
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Sets a new userRole
     *
     * The role of the person involved in the dispute who is taking action or
     *  requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     *
     * @param string $userRole
     * @return self
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    /**
     * Gets as buyerUserID
     *
     * The eBay user ID of the buyer involved in the dispute.
     *
     * @return string
     */
    public function getBuyerUserID()
    {
        return $this->buyerUserID;
    }

    /**
     * Sets a new buyerUserID
     *
     * The eBay user ID of the buyer involved in the dispute.
     *
     * @param string $buyerUserID
     * @return self
     */
    public function setBuyerUserID($buyerUserID)
    {
        $this->buyerUserID = $buyerUserID;
        return $this;
    }

    /**
     * Gets as sellerUserID
     *
     * The eBay user ID of the seller involved in the dispute.
     *
     * @return string
     */
    public function getSellerUserID()
    {
        return $this->sellerUserID;
    }

    /**
     * Sets a new sellerUserID
     *
     * The eBay user ID of the seller involved in the dispute.
     *
     * @param string $sellerUserID
     * @return self
     */
    public function setSellerUserID($sellerUserID)
    {
        $this->sellerUserID = $sellerUserID;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * The unique identifier of the order line item (transaction) under dispute. An
     *  order line item is created once there is a commitment from a
     *  buyer to purchase an item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b>
     *  responses, this value identifies the order line item involved in the
     *  dispute.
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * The unique identifier of the order line item (transaction) under dispute. An
     *  order line item is created once there is a commitment from a
     *  buyer to purchase an item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b>
     *  responses, this value identifies the order line item involved in the
     *  dispute.
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as item
     *
     * Container consisting of high-level details about the item involved in the
     *  dispute.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Container consisting of high-level details about the item involved in the
     *  dispute.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\MerchantData\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as disputeReason
     *
     * The top-level reason for the dispute. The value of <b>DisputeReason</b>
     *  determines which values of <b>DisputeExplanation</b> are valid.
     *  See <b>DisputeExplanationCodeList</b> for details.
     *
     * @return string
     */
    public function getDisputeReason()
    {
        return $this->disputeReason;
    }

    /**
     * Sets a new disputeReason
     *
     * The top-level reason for the dispute. The value of <b>DisputeReason</b>
     *  determines which values of <b>DisputeExplanation</b> are valid.
     *  See <b>DisputeExplanationCodeList</b> for details.
     *
     * @param string $disputeReason
     * @return self
     */
    public function setDisputeReason($disputeReason)
    {
        $this->disputeReason = $disputeReason;
        return $this;
    }

    /**
     * Gets as disputeExplanation
     *
     * The detailed explanation for the dispute. Valid values
     *  depend on the value of <b>DisputeReason</b>. See <b>DisputeExplanationCodeList</b>
     *  for details.
     *
     * @return string
     */
    public function getDisputeExplanation()
    {
        return $this->disputeExplanation;
    }

    /**
     * Sets a new disputeExplanation
     *
     * The detailed explanation for the dispute. Valid values
     *  depend on the value of <b>DisputeReason</b>. See <b>DisputeExplanationCodeList</b>
     *  for details.
     *
     * @param string $disputeExplanation
     * @return self
     */
    public function setDisputeExplanation($disputeExplanation)
    {
        $this->disputeExplanation = $disputeExplanation;
        return $this;
    }

    /**
     * Gets as disputeCreditEligibility
     *
     * A value to indicate whether or not the seller is currently eligible for a
     *  Final Value Fee credit. The seller becomes eligible for a Final Value Fee
     *  credit after filing and winning an Unpaid Item case. This tag only
     *  indicates credit eligibility and does not mean that the case can be closed.
     *  The seller can open an Unpaid Item case as soon as two days after the listing ends.
     *  <br>
     *
     * @return string
     */
    public function getDisputeCreditEligibility()
    {
        return $this->disputeCreditEligibility;
    }

    /**
     * Sets a new disputeCreditEligibility
     *
     * A value to indicate whether or not the seller is currently eligible for a
     *  Final Value Fee credit. The seller becomes eligible for a Final Value Fee
     *  credit after filing and winning an Unpaid Item case. This tag only
     *  indicates credit eligibility and does not mean that the case can be closed.
     *  The seller can open an Unpaid Item case as soon as two days after the listing ends.
     *  <br>
     *
     * @param string $disputeCreditEligibility
     * @return self
     */
    public function setDisputeCreditEligibility($disputeCreditEligibility)
    {
        $this->disputeCreditEligibility = $disputeCreditEligibility;
        return $this;
    }

    /**
     * Gets as disputeCreatedTime
     *
     * The date and time the dispute was created, in GMT.
     *
     * @return \DateTime
     */
    public function getDisputeCreatedTime()
    {
        return $this->disputeCreatedTime;
    }

    /**
     * Sets a new disputeCreatedTime
     *
     * The date and time the dispute was created, in GMT.
     *
     * @param \DateTime $disputeCreatedTime
     * @return self
     */
    public function setDisputeCreatedTime(\DateTime $disputeCreatedTime)
    {
        $this->disputeCreatedTime = $disputeCreatedTime;
        return $this;
    }

    /**
     * Gets as disputeModifiedTime
     *
     * The date and time the dispute was modified, in GMT.
     *
     * @return \DateTime
     */
    public function getDisputeModifiedTime()
    {
        return $this->disputeModifiedTime;
    }

    /**
     * Sets a new disputeModifiedTime
     *
     * The date and time the dispute was modified, in GMT.
     *
     * @param \DateTime $disputeModifiedTime
     * @return self
     */
    public function setDisputeModifiedTime(\DateTime $disputeModifiedTime)
    {
        $this->disputeModifiedTime = $disputeModifiedTime;
        return $this;
    }

    /**
     * Adds as disputeResolution
     *
     * The action resulting from the dispute resolution. The
     *  action might include a Final Value Fee credit to the seller, a strike
     *  to the buyer, a reversal, or an appeal.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\DisputeResolutionType $disputeResolution
     */
    public function addToDisputeResolution(\Nogrod\eBaySDK\MerchantData\DisputeResolutionType $disputeResolution)
    {
        $this->disputeResolution[] = $disputeResolution;
        return $this;
    }

    /**
     * isset disputeResolution
     *
     * The action resulting from the dispute resolution. The
     *  action might include a Final Value Fee credit to the seller, a strike
     *  to the buyer, a reversal, or an appeal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisputeResolution($index)
    {
        return isset($this->disputeResolution[$index]);
    }

    /**
     * unset disputeResolution
     *
     * The action resulting from the dispute resolution. The
     *  action might include a Final Value Fee credit to the seller, a strike
     *  to the buyer, a reversal, or an appeal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisputeResolution($index)
    {
        unset($this->disputeResolution[$index]);
    }

    /**
     * Gets as disputeResolution
     *
     * The action resulting from the dispute resolution. The
     *  action might include a Final Value Fee credit to the seller, a strike
     *  to the buyer, a reversal, or an appeal.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DisputeResolutionType[]
     */
    public function getDisputeResolution()
    {
        return $this->disputeResolution;
    }

    /**
     * Sets a new disputeResolution
     *
     * The action resulting from the dispute resolution. The
     *  action might include a Final Value Fee credit to the seller, a strike
     *  to the buyer, a reversal, or an appeal.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DisputeResolutionType[] $disputeResolution
     * @return self
     */
    public function setDisputeResolution(array $disputeResolution)
    {
        $this->disputeResolution = $disputeResolution;
        return $this;
    }

    /**
     * Adds as disputeMessage
     *
     * A response or message posted to a dispute, either by
     *  an application or by a user on the eBay site.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\DisputeMessageType $disputeMessage
     */
    public function addToDisputeMessage(\Nogrod\eBaySDK\MerchantData\DisputeMessageType $disputeMessage)
    {
        $this->disputeMessage[] = $disputeMessage;
        return $this;
    }

    /**
     * isset disputeMessage
     *
     * A response or message posted to a dispute, either by
     *  an application or by a user on the eBay site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisputeMessage($index)
    {
        return isset($this->disputeMessage[$index]);
    }

    /**
     * unset disputeMessage
     *
     * A response or message posted to a dispute, either by
     *  an application or by a user on the eBay site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisputeMessage($index)
    {
        unset($this->disputeMessage[$index]);
    }

    /**
     * Gets as disputeMessage
     *
     * A response or message posted to a dispute, either by
     *  an application or by a user on the eBay site.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DisputeMessageType[]
     */
    public function getDisputeMessage()
    {
        return $this->disputeMessage;
    }

    /**
     * Sets a new disputeMessage
     *
     * A response or message posted to a dispute, either by
     *  an application or by a user on the eBay site.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DisputeMessageType[] $disputeMessage
     * @return self
     */
    public function setDisputeMessage(array $disputeMessage)
    {
        $this->disputeMessage = $disputeMessage;
        return $this;
    }

    /**
     * Gets as escalation
     *
     * This field is returned as <code>true</code> if the buyer is eligible to appeal a closed Item Not Received dispute.
     *
     * @return bool
     */
    public function getEscalation()
    {
        return $this->escalation;
    }

    /**
     * Sets a new escalation
     *
     * This field is returned as <code>true</code> if the buyer is eligible to appeal a closed Item Not Received dispute.
     *
     * @param bool $escalation
     * @return self
     */
    public function setEscalation($escalation)
    {
        $this->escalation = $escalation;
        return $this;
    }

    /**
     * Gets as purchaseProtection
     *
     * This field is returned as <code>true</code> if the buyer used PayPal to pay for the item, and is eligible for PayPal's Standard Purchase Protection.
     *
     * @return bool
     */
    public function getPurchaseProtection()
    {
        return $this->purchaseProtection;
    }

    /**
     * Sets a new purchaseProtection
     *
     * This field is returned as <code>true</code> if the buyer used PayPal to pay for the item, and is eligible for PayPal's Standard Purchase Protection.
     *
     * @param bool $purchaseProtection
     * @return self
     */
    public function setPurchaseProtection($purchaseProtection)
    {
        $this->purchaseProtection = $purchaseProtection;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b> responses, this value identifies the order line item involved in the dispute.
     *  <br>
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b> responses, this value identifies the order line item involved in the dispute.
     *  <br>
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisputeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeID", $value);
        }
        $value = $this->getDisputeRecordType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeRecordType", $value);
        }
        $value = $this->getDisputeState();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeState", $value);
        }
        $value = $this->getDisputeStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeStatus", $value);
        }
        $value = $this->getOtherPartyRole();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OtherPartyRole", $value);
        }
        $value = $this->getOtherPartyName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OtherPartyName", $value);
        }
        $value = $this->getUserRole();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserRole", $value);
        }
        $value = $this->getBuyerUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerUserID", $value);
        }
        $value = $this->getSellerUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerUserID", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getDisputeReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeReason", $value);
        }
        $value = $this->getDisputeExplanation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeExplanation", $value);
        }
        $value = $this->getDisputeCreditEligibility();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeCreditEligibility", $value);
        }
        $value = $this->getDisputeCreatedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeCreatedTime", $value);
        }
        $value = $this->getDisputeModifiedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeModifiedTime", $value);
        }
        $value = $this->getDisputeResolution();
        if (null !== $value && !empty($this->getDisputeResolution())) {
            $writer->write(array_map(function ($v) {
                return ["DisputeResolution" => $v];
            }, $value));
        }
        $value = $this->getDisputeMessage();
        if (null !== $value && !empty($this->getDisputeMessage())) {
            $writer->write(array_map(function ($v) {
                return ["DisputeMessage" => $v];
            }, $value));
        }
        $value = $this->getEscalation();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Escalation", $value);
        }
        $value = $this->getPurchaseProtection();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PurchaseProtection", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeID');
        if (null !== $value) {
            $this->setDisputeID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeRecordType');
        if (null !== $value) {
            $this->setDisputeRecordType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeState');
        if (null !== $value) {
            $this->setDisputeState($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeStatus');
        if (null !== $value) {
            $this->setDisputeStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OtherPartyRole');
        if (null !== $value) {
            $this->setOtherPartyRole($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OtherPartyName');
        if (null !== $value) {
            $this->setOtherPartyName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserRole');
        if (null !== $value) {
            $this->setUserRole($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerUserID');
        if (null !== $value) {
            $this->setBuyerUserID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerUserID');
        if (null !== $value) {
            $this->setSellerUserID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\MerchantData\ItemType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeReason');
        if (null !== $value) {
            $this->setDisputeReason($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeExplanation');
        if (null !== $value) {
            $this->setDisputeExplanation($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeCreditEligibility');
        if (null !== $value) {
            $this->setDisputeCreditEligibility($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeCreatedTime');
        if (null !== $value) {
            $this->setDisputeCreatedTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeModifiedTime');
        if (null !== $value) {
            $this->setDisputeModifiedTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolution', true);
        if (null !== $value && !empty($value)) {
            $this->setDisputeResolution(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\DisputeResolutionType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setDisputeMessage(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\DisputeMessageType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Escalation');
        if (null !== $value) {
            $this->setEscalation($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PurchaseProtection');
        if (null !== $value) {
            $this->setPurchaseProtection($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
