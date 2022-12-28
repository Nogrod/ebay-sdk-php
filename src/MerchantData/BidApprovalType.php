<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidApprovalType
 *
 * This type is deprecated.
 * XSD Type: BidApprovalType
 */
class BidApprovalType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $userID
     */
    private $userID = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $approvedBiddingLimit
     */
    private $approvedBiddingLimit = null;

    /**
     * @var string $declinedComment
     */
    private $declinedComment = null;

    /**
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as userID
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as approvedBiddingLimit
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getApprovedBiddingLimit()
    {
        return $this->approvedBiddingLimit;
    }

    /**
     * Sets a new approvedBiddingLimit
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $approvedBiddingLimit
     * @return self
     */
    public function setApprovedBiddingLimit(\Nogrod\eBaySDK\MerchantData\AmountType $approvedBiddingLimit)
    {
        $this->approvedBiddingLimit = $approvedBiddingLimit;
        return $this;
    }

    /**
     * Gets as declinedComment
     *
     * @return string
     */
    public function getDeclinedComment()
    {
        return $this->declinedComment;
    }

    /**
     * Sets a new declinedComment
     *
     * @param string $declinedComment
     * @return self
     */
    public function setDeclinedComment($declinedComment)
    {
        $this->declinedComment = $declinedComment;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getApprovedBiddingLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApprovedBiddingLimit", $value);
        }
        $value = $this->getDeclinedComment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeclinedComment", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApprovedBiddingLimit');
        if (null !== $value) {
            $this->setApprovedBiddingLimit(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeclinedComment');
        if (null !== $value) {
            $this->setDeclinedComment($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
    }
}
