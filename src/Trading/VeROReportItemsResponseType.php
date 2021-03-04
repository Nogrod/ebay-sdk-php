<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VeROReportItemsResponseType
 *
 * Contains a packet ID and status for the items reported by the VeRO Program member.
 * XSD Type: VeROReportItemsResponseType
 */
class VeROReportItemsResponseType extends AbstractResponseType
{
    /**
     * A unique packet identifier for the items reported.
     *
     * @var int $veROReportPacketID
     */
    private $veROReportPacketID = null;

    /**
     * The processing status of the packet.
     *
     * @var string $veROReportPacketStatus
     */
    private $veROReportPacketStatus = null;

    /**
     * Gets as veROReportPacketID
     *
     * A unique packet identifier for the items reported.
     *
     * @return int
     */
    public function getVeROReportPacketID()
    {
        return $this->veROReportPacketID;
    }

    /**
     * Sets a new veROReportPacketID
     *
     * A unique packet identifier for the items reported.
     *
     * @param int $veROReportPacketID
     * @return self
     */
    public function setVeROReportPacketID($veROReportPacketID)
    {
        $this->veROReportPacketID = $veROReportPacketID;
        return $this;
    }

    /**
     * Gets as veROReportPacketStatus
     *
     * The processing status of the packet.
     *
     * @return string
     */
    public function getVeROReportPacketStatus()
    {
        return $this->veROReportPacketStatus;
    }

    /**
     * Sets a new veROReportPacketStatus
     *
     * The processing status of the packet.
     *
     * @param string $veROReportPacketStatus
     * @return self
     */
    public function setVeROReportPacketStatus($veROReportPacketStatus)
    {
        $this->veROReportPacketStatus = $veROReportPacketStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getVeROReportPacketID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VeROReportPacketID", $value);
        }
        $value = $this->getVeROReportPacketStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VeROReportPacketStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROReportPacketID');
        if (null !== $value) {
            $this->setVeROReportPacketID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROReportPacketStatus');
        if (null !== $value) {
            $this->setVeROReportPacketStatus($value);
        }
    }
}
