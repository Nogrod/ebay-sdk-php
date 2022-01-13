<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerReverseDisputeRequestType
 *
 * This call allows a seller to reverse the results of an Unpaid Item case in a situation where the buyer and seller are able to reach a mutual agreement. If this action is successful, the buyer might have an Unpaid Item strike removed (if applicable).
 *  <br><br>
 *  An Unpaid Item case can only be reversed if it was closed with <b>DisputeActivity</b> set to <b>SellerEndCommunication</b>, <b>CameToAgreementNeedFVFCredit</b>, or <b>MutualAgreementOrNoBuyerResponse</b>.
 * XSD Type: SellerReverseDisputeRequestType
 */
class SellerReverseDisputeRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the Unpaid Item case that the seller is attempting to reverse the results of.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * The reason why the seller is attempting to reverse the results of the Unpaid Item case.
     *
     * @var string $disputeResolutionReason
     */
    private $disputeResolutionReason = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of the Unpaid Item case that the seller is attempting to reverse the results of.
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
     * The unique identifier of the Unpaid Item case that the seller is attempting to reverse the results of.
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
     * Gets as disputeResolutionReason
     *
     * The reason why the seller is attempting to reverse the results of the Unpaid Item case.
     *
     * @return string
     */
    public function getDisputeResolutionReason()
    {
        return $this->disputeResolutionReason;
    }

    /**
     * Sets a new disputeResolutionReason
     *
     * The reason why the seller is attempting to reverse the results of the Unpaid Item case.
     *
     * @param string $disputeResolutionReason
     * @return self
     */
    public function setDisputeResolutionReason($disputeResolutionReason)
    {
        $this->disputeResolutionReason = $disputeResolutionReason;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDisputeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeID", $value);
        }
        $value = $this->getDisputeResolutionReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeID');
        if (null !== $value) {
            $this->setDisputeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason');
        if (null !== $value) {
            $this->setDisputeResolutionReason($value);
        }
    }
}
