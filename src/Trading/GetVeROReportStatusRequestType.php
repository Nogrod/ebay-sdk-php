<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetVeROReportStatusRequestType
 *
 * Retrieves status information about VeRO reported items you have submitted. You
 *  can receive the status of individual items you have reported or, by specifying
 *  <strong>VeROReportPacketID</strong>, you can retrieve status for all items reported with a given
 *  <strong>VeROReportItems</strong> request. You can also retrieve items that were reported during a
 *  given time period. If no input parameters are specified, status is returned on all
 *  items you have reported in the last two years.
 *  You must be a member of the Verified Rights Owner (VeRO) Program to use this
 *  call.
 * XSD Type: GetVeROReportStatusRequestType
 */
class GetVeROReportStatusRequestType extends AbstractRequestType
{
    /**
     * Packet identifier associated with the reported items for which you want to
     *  retrieve status. By default, reported item details are not returned when
     *  you specify the packet ID in the request. Applies only to items reported
     *  with the <strong>VeROReportItems</strong> call.
     *
     * @var int $veROReportPacketID
     */
    private $veROReportPacketID = null;

    /**
     * Unique identifier for an eBay listing reported for alleged infringement. Applies to items reported with the <strong>VeROReportItems</strong> call or by other means (e.g., through the Web flow).
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Set to true to return reported item details when you specify <strong>VeROReportPacketID</strong> in the request.
     *
     * @var bool $includeReportedItemDetails
     */
    private $includeReportedItemDetails = null;

    /**
     * Limits returned items to only those that were submited on or after the
     *  date-time specified. If specified, TimeTo must also be specified.
     *  Express the date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT.
     *  (For information on how to convert between your local time zone
     *  and GMT, see Time Values Note.) Applies to items reported with
     *  VeROReportItems or by other means (e.g., through the web flow).
     *  Infringement reporting data is maintained for two years after the date of
     *  submission.
     *  This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     *
     * @var \DateTime $timeFrom
     */
    private $timeFrom = null;

    /**
     * Limits returned items to only those that were submited on or before the
     *  date-time specified. If specified, TimeFrom must also be specified.
     *  Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT.
     *  (For information on how to convert between your local time zone
     *  and GMT, see Time Values Note.) Applies to items reported with
     *  VeROReportItems or by other means (e.g., through the web flow).
     *  Infringement reporting data is maintained for two years after the date of
     *  submission.
     *  This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     *
     * @var \DateTime $timeTo
     */
    private $timeTo = null;

    /**
     * Contains the data controlling the pagination of the returned values: how
     *  many items are returned per page of data (per call) and the number of the
     *  page to return with the current call.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * Gets as veROReportPacketID
     *
     * Packet identifier associated with the reported items for which you want to
     *  retrieve status. By default, reported item details are not returned when
     *  you specify the packet ID in the request. Applies only to items reported
     *  with the <strong>VeROReportItems</strong> call.
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
     * Packet identifier associated with the reported items for which you want to
     *  retrieve status. By default, reported item details are not returned when
     *  you specify the packet ID in the request. Applies only to items reported
     *  with the <strong>VeROReportItems</strong> call.
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
     * Gets as itemID
     *
     * Unique identifier for an eBay listing reported for alleged infringement. Applies to items reported with the <strong>VeROReportItems</strong> call or by other means (e.g., through the Web flow).
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * Unique identifier for an eBay listing reported for alleged infringement. Applies to items reported with the <strong>VeROReportItems</strong> call or by other means (e.g., through the Web flow).
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as includeReportedItemDetails
     *
     * Set to true to return reported item details when you specify <strong>VeROReportPacketID</strong> in the request.
     *
     * @return bool
     */
    public function getIncludeReportedItemDetails()
    {
        return $this->includeReportedItemDetails;
    }

    /**
     * Sets a new includeReportedItemDetails
     *
     * Set to true to return reported item details when you specify <strong>VeROReportPacketID</strong> in the request.
     *
     * @param bool $includeReportedItemDetails
     * @return self
     */
    public function setIncludeReportedItemDetails($includeReportedItemDetails)
    {
        $this->includeReportedItemDetails = $includeReportedItemDetails;
        return $this;
    }

    /**
     * Gets as timeFrom
     *
     * Limits returned items to only those that were submited on or after the
     *  date-time specified. If specified, TimeTo must also be specified.
     *  Express the date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT.
     *  (For information on how to convert between your local time zone
     *  and GMT, see Time Values Note.) Applies to items reported with
     *  VeROReportItems or by other means (e.g., through the web flow).
     *  Infringement reporting data is maintained for two years after the date of
     *  submission.
     *  This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     *
     * @return \DateTime
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * Sets a new timeFrom
     *
     * Limits returned items to only those that were submited on or after the
     *  date-time specified. If specified, TimeTo must also be specified.
     *  Express the date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT.
     *  (For information on how to convert between your local time zone
     *  and GMT, see Time Values Note.) Applies to items reported with
     *  VeROReportItems or by other means (e.g., through the web flow).
     *  Infringement reporting data is maintained for two years after the date of
     *  submission.
     *  This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     *
     * @param \DateTime $timeFrom
     * @return self
     */
    public function setTimeFrom(\DateTime $timeFrom)
    {
        $this->timeFrom = $timeFrom;
        return $this;
    }

    /**
     * Gets as timeTo
     *
     * Limits returned items to only those that were submited on or before the
     *  date-time specified. If specified, TimeFrom must also be specified.
     *  Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT.
     *  (For information on how to convert between your local time zone
     *  and GMT, see Time Values Note.) Applies to items reported with
     *  VeROReportItems or by other means (e.g., through the web flow).
     *  Infringement reporting data is maintained for two years after the date of
     *  submission.
     *  This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     *
     * @return \DateTime
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Sets a new timeTo
     *
     * Limits returned items to only those that were submited on or before the
     *  date-time specified. If specified, TimeFrom must also be specified.
     *  Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT.
     *  (For information on how to convert between your local time zone
     *  and GMT, see Time Values Note.) Applies to items reported with
     *  VeROReportItems or by other means (e.g., through the web flow).
     *  Infringement reporting data is maintained for two years after the date of
     *  submission.
     *  This field is ignored if <strong>VeROReportPacketID</strong> or <strong>ItemID</strong> is specified.
     *
     * @param \DateTime $timeTo
     * @return self
     */
    public function setTimeTo(\DateTime $timeTo)
    {
        $this->timeTo = $timeTo;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * Contains the data controlling the pagination of the returned values: how
     *  many items are returned per page of data (per call) and the number of the
     *  page to return with the current call.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * Contains the data controlling the pagination of the returned values: how
     *  many items are returned per page of data (per call) and the number of the
     *  page to return with the current call.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getVeROReportPacketID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VeROReportPacketID", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getIncludeReportedItemDetails();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeReportedItemDetails", $value);
        }
        $value = $this->getTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeFrom", $value);
        }
        $value = $this->getTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeTo", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeReportedItemDetails');
        if (null !== $value) {
            $this->setIncludeReportedItemDetails($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeFrom');
        if (null !== $value) {
            $this->setTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeTo');
        if (null !== $value) {
            $this->setTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
    }
}
