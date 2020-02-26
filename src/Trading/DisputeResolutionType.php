<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DisputeResolutionType
 *
 * Contains all information about a dispute resolution. A dispute
 *  can have a resolution even if the seller does not receive payment.
 *  The resolution can have various results, including a Final Value Fee credit to
 *  the seller or a strike to the buyer.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeResolutionType
 */
class DisputeResolutionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The action resulting from the resolution, affecting either
     *  the buyer or the seller.
     *
     * @var string $disputeResolutionRecordType
     */
    private $disputeResolutionRecordType = null;

    /**
     * The reason for the resolution. The DisputeResolutionReason
     *  results in the action described by the DisputeResolutionRecordType.
     *
     * @var string $disputeResolutionReason
     */
    private $disputeResolutionReason = null;

    /**
     * The date and time the dispute was resolved, in GMT.
     *
     * @var \DateTime $resolutionTime
     */
    private $resolutionTime = null;

    /**
     * Gets as disputeResolutionRecordType
     *
     * The action resulting from the resolution, affecting either
     *  the buyer or the seller.
     *
     * @return string
     */
    public function getDisputeResolutionRecordType()
    {
        return $this->disputeResolutionRecordType;
    }

    /**
     * Sets a new disputeResolutionRecordType
     *
     * The action resulting from the resolution, affecting either
     *  the buyer or the seller.
     *
     * @param string $disputeResolutionRecordType
     * @return self
     */
    public function setDisputeResolutionRecordType($disputeResolutionRecordType)
    {
        $this->disputeResolutionRecordType = $disputeResolutionRecordType;
        return $this;
    }

    /**
     * Gets as disputeResolutionReason
     *
     * The reason for the resolution. The DisputeResolutionReason
     *  results in the action described by the DisputeResolutionRecordType.
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
     * The reason for the resolution. The DisputeResolutionReason
     *  results in the action described by the DisputeResolutionRecordType.
     *
     * @param string $disputeResolutionReason
     * @return self
     */
    public function setDisputeResolutionReason($disputeResolutionReason)
    {
        $this->disputeResolutionReason = $disputeResolutionReason;
        return $this;
    }

    /**
     * Gets as resolutionTime
     *
     * The date and time the dispute was resolved, in GMT.
     *
     * @return \DateTime
     */
    public function getResolutionTime()
    {
        return $this->resolutionTime;
    }

    /**
     * Sets a new resolutionTime
     *
     * The date and time the dispute was resolved, in GMT.
     *
     * @param \DateTime $resolutionTime
     * @return self
     */
    public function setResolutionTime(\DateTime $resolutionTime)
    {
        $this->resolutionTime = $resolutionTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisputeResolutionRecordType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeResolutionRecordType", $value);
        }
        $value = $this->getDisputeResolutionReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason", $value);
        }
        $value = $this->getResolutionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResolutionTime", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionRecordType');
        if (null !== $value) {
            $this->setDisputeResolutionRecordType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason');
        if (null !== $value) {
            $this->setDisputeResolutionReason($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResolutionTime');
        if (null !== $value) {
            $this->setResolutionTime(new \DateTime($value));
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
