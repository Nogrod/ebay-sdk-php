<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeeSettlementReportFilterType
 *
 * Type defining the <b>feeSettlementReportFilter</b> container, which is used to control the date range on the fee data that is returned in a <b>FeeSettlementReport</b> response.
 * XSD Type: FeeSettlementReportFilter
 */
class FeeSettlementReportFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The date-time specified in this field will control which fee data is returned in a <b>FeeSettlementReport</b> response. Only fee data on eBay invoices sent to the seller after this specified date-time are returned in the <b>FeeSettlementReport</b> response.
     *  <br><br>
     *  This field is required if the <b>feeSettlementReportFilter</b> container is used in the call request.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Gets as startTime
     *
     * The date-time specified in this field will control which fee data is returned in a <b>FeeSettlementReport</b> response. Only fee data on eBay invoices sent to the seller after this specified date-time are returned in the <b>FeeSettlementReport</b> response.
     *  <br><br>
     *  This field is required if the <b>feeSettlementReportFilter</b> container is used in the call request.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The date-time specified in this field will control which fee data is returned in a <b>FeeSettlementReport</b> response. Only fee data on eBay invoices sent to the seller after this specified date-time are returned in the <b>FeeSettlementReport</b> response.
     *  <br><br>
     *  This field is required if the <b>feeSettlementReportFilter</b> container is used in the call request.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}startTime", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}startTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
    }
}
