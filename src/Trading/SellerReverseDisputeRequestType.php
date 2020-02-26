<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerReverseDisputeRequestType
 *
 * Enables a seller to "reverse" an Unpaid Item dispute that has been closed in case the buyer and seller are able to reach a mutual agreement. If this action is successful, the seller receives a Final Value Fee
 *  credit and the buyer's Unpaid Item strike are both reversed, if applicable.
 *  The dispute might have resulted
 *  in a strike to the buyer and a Final Value Fee credit to the seller. A buyer and
 *  seller sometimes come to agreement after a dispute has been closed. In particular,
 *  the seller might discover that the buyer actually paid, or the buyer might agree
 *  to pay the seller's fees in exchange for having the strike removed.
 *  <br><br>
 *  A dispute can only be reversed if it was closed with <b>DisputeActivity</b> set to
 *  <b>SellerEndCommunication</b>, <b>CameToAgreementNeedFVFCredit</b>, or
 *  <b>MutualAgreementOrNoBuyerResponse</b>.
 * XSD Type: SellerReverseDisputeRequestType
 */
class SellerReverseDisputeRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the dispute that was returned when the dispute was created.
     *  The dispute must be an Unpaid Item dispute that the seller opened.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * The reason the dispute is being reversed.
     *
     * @var string $disputeResolutionReason
     */
    private $disputeResolutionReason = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of the dispute that was returned when the dispute was created.
     *  The dispute must be an Unpaid Item dispute that the seller opened.
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
     * The unique identifier of the dispute that was returned when the dispute was created.
     *  The dispute must be an Unpaid Item dispute that the seller opened.
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
     * The reason the dispute is being reversed.
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
     * The reason the dispute is being reversed.
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeID');
        if (null !== $value) {
            $this->setDisputeID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason');
        if (null !== $value) {
            $this->setDisputeResolutionReason($value);
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
