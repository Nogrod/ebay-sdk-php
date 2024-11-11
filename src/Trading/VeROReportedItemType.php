<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VeROReportedItemType
 *
 * Type defining the <b>ReportedItem</b> container which is returned in the
 *  <b>GetVeROReportStatus</b> response. The <b>ReportedItem</b>
 *  container consists of the <b>ItemID</b> of the item that has infringed
 *  upon the seller's copyright, trademark, or intellectual property rights, as well as the
 *  submission status of the VeRO Report.
 * XSD Type: VeROReportedItemType
 */
class VeROReportedItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier (<b>ItemID</b>) of the listing reported for
     *  copyright, trademark, or intellectual property right infringment.
     *  <br><br>
     *  This field is always returned with the <b>ReportedItem</b> container.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This value indicates the current submission status of the VeRO Report.
     *  <br><br>
     *  This field is always returned with the <b>ReportedItem</b> container.
     *
     * @var string $itemStatus
     */
    private $itemStatus = null;

    /**
     * This text explanation is submitted by eBay when the submission of an VeRO Report
     *  has failed or was blocked.
     *  <br><br>
     *  This field is only returned with the <b>ReportedItem</b> container if
     *  the <b>ItemStatus</b> value is <b>SubmissionFailed</b> or
     *  <b>ClarificationRequired</b>.
     *
     * @var string $itemReasonForFailure
     */
    private $itemReasonForFailure = null;

    /**
     * Gets as itemID
     *
     * The unique identifier (<b>ItemID</b>) of the listing reported for
     *  copyright, trademark, or intellectual property right infringment.
     *  <br><br>
     *  This field is always returned with the <b>ReportedItem</b> container.
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
     * The unique identifier (<b>ItemID</b>) of the listing reported for
     *  copyright, trademark, or intellectual property right infringment.
     *  <br><br>
     *  This field is always returned with the <b>ReportedItem</b> container.
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
     * Gets as itemStatus
     *
     * This value indicates the current submission status of the VeRO Report.
     *  <br><br>
     *  This field is always returned with the <b>ReportedItem</b> container.
     *
     * @return string
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }

    /**
     * Sets a new itemStatus
     *
     * This value indicates the current submission status of the VeRO Report.
     *  <br><br>
     *  This field is always returned with the <b>ReportedItem</b> container.
     *
     * @param string $itemStatus
     * @return self
     */
    public function setItemStatus($itemStatus)
    {
        $this->itemStatus = $itemStatus;
        return $this;
    }

    /**
     * Gets as itemReasonForFailure
     *
     * This text explanation is submitted by eBay when the submission of an VeRO Report
     *  has failed or was blocked.
     *  <br><br>
     *  This field is only returned with the <b>ReportedItem</b> container if
     *  the <b>ItemStatus</b> value is <b>SubmissionFailed</b> or
     *  <b>ClarificationRequired</b>.
     *
     * @return string
     */
    public function getItemReasonForFailure()
    {
        return $this->itemReasonForFailure;
    }

    /**
     * Sets a new itemReasonForFailure
     *
     * This text explanation is submitted by eBay when the submission of an VeRO Report
     *  has failed or was blocked.
     *  <br><br>
     *  This field is only returned with the <b>ReportedItem</b> container if
     *  the <b>ItemStatus</b> value is <b>SubmissionFailed</b> or
     *  <b>ClarificationRequired</b>.
     *
     * @param string $itemReasonForFailure
     * @return self
     */
    public function setItemReasonForFailure($itemReasonForFailure)
    {
        $this->itemReasonForFailure = $itemReasonForFailure;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getItemStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemStatus", $value);
        }
        $value = $this->getItemReasonForFailure();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemReasonForFailure", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemStatus');
        if (null !== $value) {
            $this->setItemStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemReasonForFailure');
        if (null !== $value) {
            $this->setItemReasonForFailure($value);
        }
    }
}
