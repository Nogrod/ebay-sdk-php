<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerReverseDisputeRequestType
 *
 * This call allows a seller to reverse the results of an Unpaid Item case in a situation where the buyer and seller are able to reach a mutual agreement.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This call is deprecated and is scheduled for decommission on January 31, 2023. There is no alternative to this call since eBay no longer supports Unpaid Item cases.
 *  </span>
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
