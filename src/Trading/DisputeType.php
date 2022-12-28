<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeType
 *
 * Contains all information describing an Unpaid Item case.
 * XSD Type: DisputeType
 */
class DisputeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of an Unpaid Item case.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * A value to indicate the type of dispute.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, so the enumeration value returned here should always be <code>UnpaidItem</code>.
     *  </span>
     *
     * @var string $disputeRecordType
     */
    private $disputeRecordType = null;

    /**
     * The state of the dispute. The value determines
     *  which values of <b>DisputeActivity</b> are valid when responding
     *  to an Unpaid Item case with an <b>AddDisputeResponse</b>.
     *
     * @var string $disputeState
     */
    private $disputeState = null;

    /**
     * The status of the dispute, which provides additional information about the dispute state.
     *
     * @var string $disputeStatus
     */
    private $disputeStatus = null;

    /**
     * The role of the person involved in the Unpaid Item case who is not taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     *
     * @var string $otherPartyRole
     */
    private $otherPartyRole = null;

    /**
     * The user name of the person involved in the Unpaid Item case who is not taking action or requesting information.
     *
     * @var string $otherPartyName
     */
    private $otherPartyName = null;

    /**
     * The role of the person involved in the Unpaid Item case who is taking action or
     *  requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     *
     * @var string $userRole
     */
    private $userRole = null;

    /**
     * The eBay user ID of the buyer involved in the Unpaid Item case.
     *
     * @var string $buyerUserID
     */
    private $buyerUserID = null;

    /**
     * The eBay user ID of the seller involved in the Unpaid Item case.
     *
     * @var string $sellerUserID
     */
    private $sellerUserID = null;

    /**
     * The unique identifier of the sales transaction with an Unpaid Item case filed against it.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * Container consisting of high-level details about the item involved in the
     *  Unpaid Item case.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * The reason for the Unpaid Item case. Since <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, this value should always be <code>BuyerHasNotPaid</code>.
     *
     * @var string $disputeReason
     */
    private $disputeReason = null;

    /**
     * This enumeration value provides more details about why the Unpaid Item case was created. See <b>DisputeExplanationCodeList</b> type for explanation of values.
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
     * The date and time the Unpaid Item case was created, in GMT.
     *
     * @var \DateTime $disputeCreatedTime
     */
    private $disputeCreatedTime = null;

    /**
     * The date and time the Unpaid Item case was last modified, in GMT.
     *
     * @var \DateTime $disputeModifiedTime
     */
    private $disputeModifiedTime = null;

    /**
     * This container provides more details about the results of an Unpaid Item case once it is resolved. Results could possibly include a Final Value Fee credit to the seller and an Unpaid Item strike to the buyer. This container will only be returned after the Unpaid Item case is resolved.
     *
     * @var \Nogrod\eBaySDK\Trading\DisputeResolutionType[] $disputeResolution
     */
    private $disputeResolution = [

    ];

    /**
     * This field will contain a response or message related to the Unpaid Item case, posted by either the
     *  buyer or the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\DisputeMessageType[] $disputeMessage
     */
    private $disputeMessage = [

    ];

    /**
     * This field is returned as <code>true</code> if the buyer is eligible to appeal a closed Unpaid Item case.
     *
     * @var bool $escalation
     */
    private $escalation = null;

    /**
     * This field is no longer applicable, and if it is returned, it can be ignored.
     *
     * @var bool $purchaseProtection
     */
    private $purchaseProtection = null;

    /**
     * The unique identifier of the order line item with an Unpaid Item case filed against it.
     *  <br>
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of an Unpaid Item case.
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
     * The unique identifier of an Unpaid Item case.
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, so the enumeration value returned here should always be <code>UnpaidItem</code>.
     *  </span>
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
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, so the enumeration value returned here should always be <code>UnpaidItem</code>.
     *  </span>
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
     * The state of the dispute. The value determines
     *  which values of <b>DisputeActivity</b> are valid when responding
     *  to an Unpaid Item case with an <b>AddDisputeResponse</b>.
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
     * The state of the dispute. The value determines
     *  which values of <b>DisputeActivity</b> are valid when responding
     *  to an Unpaid Item case with an <b>AddDisputeResponse</b>.
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
     * The status of the dispute, which provides additional information about the dispute state.
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
     * The status of the dispute, which provides additional information about the dispute state.
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
     * The role of the person involved in the Unpaid Item case who is not taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
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
     * The role of the person involved in the Unpaid Item case who is not taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
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
     * The user name of the person involved in the Unpaid Item case who is not taking action or requesting information.
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
     * The user name of the person involved in the Unpaid Item case who is not taking action or requesting information.
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
     * The role of the person involved in the Unpaid Item case who is taking action or
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
     * The role of the person involved in the Unpaid Item case who is taking action or
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
     * The eBay user ID of the buyer involved in the Unpaid Item case.
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
     * The eBay user ID of the buyer involved in the Unpaid Item case.
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
     * The eBay user ID of the seller involved in the Unpaid Item case.
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
     * The eBay user ID of the seller involved in the Unpaid Item case.
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
     * The unique identifier of the sales transaction with an Unpaid Item case filed against it.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     * The unique identifier of the sales transaction with an Unpaid Item case filed against it.
     *  <br>
     *  <br>
     *  The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
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
     *  Unpaid Item case.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Container consisting of high-level details about the item involved in the
     *  Unpaid Item case.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as disputeReason
     *
     * The reason for the Unpaid Item case. Since <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, this value should always be <code>BuyerHasNotPaid</code>.
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
     * The reason for the Unpaid Item case. Since <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, this value should always be <code>BuyerHasNotPaid</code>.
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
     * This enumeration value provides more details about why the Unpaid Item case was created. See <b>DisputeExplanationCodeList</b> type for explanation of values.
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
     * This enumeration value provides more details about why the Unpaid Item case was created. See <b>DisputeExplanationCodeList</b> type for explanation of values.
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
     * The date and time the Unpaid Item case was created, in GMT.
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
     * The date and time the Unpaid Item case was created, in GMT.
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
     * The date and time the Unpaid Item case was last modified, in GMT.
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
     * The date and time the Unpaid Item case was last modified, in GMT.
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
     * This container provides more details about the results of an Unpaid Item case once it is resolved. Results could possibly include a Final Value Fee credit to the seller and an Unpaid Item strike to the buyer. This container will only be returned after the Unpaid Item case is resolved.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DisputeResolutionType $disputeResolution
     */
    public function addToDisputeResolution(\Nogrod\eBaySDK\Trading\DisputeResolutionType $disputeResolution)
    {
        $this->disputeResolution[] = $disputeResolution;
        return $this;
    }

    /**
     * isset disputeResolution
     *
     * This container provides more details about the results of an Unpaid Item case once it is resolved. Results could possibly include a Final Value Fee credit to the seller and an Unpaid Item strike to the buyer. This container will only be returned after the Unpaid Item case is resolved.
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
     * This container provides more details about the results of an Unpaid Item case once it is resolved. Results could possibly include a Final Value Fee credit to the seller and an Unpaid Item strike to the buyer. This container will only be returned after the Unpaid Item case is resolved.
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
     * This container provides more details about the results of an Unpaid Item case once it is resolved. Results could possibly include a Final Value Fee credit to the seller and an Unpaid Item strike to the buyer. This container will only be returned after the Unpaid Item case is resolved.
     *
     * @return \Nogrod\eBaySDK\Trading\DisputeResolutionType[]
     */
    public function getDisputeResolution()
    {
        return $this->disputeResolution;
    }

    /**
     * Sets a new disputeResolution
     *
     * This container provides more details about the results of an Unpaid Item case once it is resolved. Results could possibly include a Final Value Fee credit to the seller and an Unpaid Item strike to the buyer. This container will only be returned after the Unpaid Item case is resolved.
     *
     * @param \Nogrod\eBaySDK\Trading\DisputeResolutionType[] $disputeResolution
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
     * This field will contain a response or message related to the Unpaid Item case, posted by either the
     *  buyer or the seller.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DisputeMessageType $disputeMessage
     */
    public function addToDisputeMessage(\Nogrod\eBaySDK\Trading\DisputeMessageType $disputeMessage)
    {
        $this->disputeMessage[] = $disputeMessage;
        return $this;
    }

    /**
     * isset disputeMessage
     *
     * This field will contain a response or message related to the Unpaid Item case, posted by either the
     *  buyer or the seller.
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
     * This field will contain a response or message related to the Unpaid Item case, posted by either the
     *  buyer or the seller.
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
     * This field will contain a response or message related to the Unpaid Item case, posted by either the
     *  buyer or the seller.
     *
     * @return \Nogrod\eBaySDK\Trading\DisputeMessageType[]
     */
    public function getDisputeMessage()
    {
        return $this->disputeMessage;
    }

    /**
     * Sets a new disputeMessage
     *
     * This field will contain a response or message related to the Unpaid Item case, posted by either the
     *  buyer or the seller.
     *
     * @param \Nogrod\eBaySDK\Trading\DisputeMessageType[] $disputeMessage
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
     * This field is returned as <code>true</code> if the buyer is eligible to appeal a closed Unpaid Item case.
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
     * This field is returned as <code>true</code> if the buyer is eligible to appeal a closed Unpaid Item case.
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
     * This field is no longer applicable, and if it is returned, it can be ignored.
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
     * This field is no longer applicable, and if it is returned, it can be ignored.
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
     * The unique identifier of the order line item with an Unpaid Item case filed against it.
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
     * The unique identifier of the order line item with an Unpaid Item case filed against it.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeID');
        if (null !== $value) {
            $this->setDisputeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeRecordType');
        if (null !== $value) {
            $this->setDisputeRecordType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeState');
        if (null !== $value) {
            $this->setDisputeState($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeStatus');
        if (null !== $value) {
            $this->setDisputeStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OtherPartyRole');
        if (null !== $value) {
            $this->setOtherPartyRole($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OtherPartyName');
        if (null !== $value) {
            $this->setOtherPartyName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserRole');
        if (null !== $value) {
            $this->setUserRole($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerUserID');
        if (null !== $value) {
            $this->setBuyerUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerUserID');
        if (null !== $value) {
            $this->setSellerUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeReason');
        if (null !== $value) {
            $this->setDisputeReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeExplanation');
        if (null !== $value) {
            $this->setDisputeExplanation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeCreditEligibility');
        if (null !== $value) {
            $this->setDisputeCreditEligibility($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeCreatedTime');
        if (null !== $value) {
            $this->setDisputeCreatedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeModifiedTime');
        if (null !== $value) {
            $this->setDisputeModifiedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolution', true);
        if (null !== $value && !empty($value)) {
            $this->setDisputeResolution(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DisputeResolutionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setDisputeMessage(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DisputeMessageType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Escalation');
        if (null !== $value) {
            $this->setEscalation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PurchaseProtection');
        if (null !== $value) {
            $this->setPurchaseProtection($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
