<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeResolutionType
 *
 * Type used by the <strong>DisputeResolution</strong> container of <strong>GetUserDisputes</strong>, which provides details about the resolution of an Unpaid Item case. An Unpaid Item case can have a resolution even if the seller does not receive payment. A separate <strong>DisputeResolution</strong> container is returned for each different outcome. For example, if the resolution including the seller getting a Final Value Fee credit and the buyer getting an Unpaid Item strike, a separate <strong>DisputeResolution</strong> container is returned for each of these outcomes.
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
     * The reason for the resolution.
     *
     * @var string $disputeResolutionReason
     */
    private $disputeResolutionReason = null;

    /**
     * The date and time of the outcome that resulted from the resolution of the Unpaid Item case, in GMT.
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
     * The reason for the resolution.
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
     * The reason for the resolution.
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
     * The date and time of the outcome that resulted from the resolution of the Unpaid Item case, in GMT.
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
     * The date and time of the outcome that resulted from the resolution of the Unpaid Item case, in GMT.
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionRecordType');
        if (null !== $value) {
            $this->setDisputeResolutionRecordType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason');
        if (null !== $value) {
            $this->setDisputeResolutionReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResolutionTime');
        if (null !== $value) {
            $this->setResolutionTime(new \DateTime($value));
        }
    }
}
