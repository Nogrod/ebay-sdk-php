<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumUnpaidItemStrikesInfoType
 *
 * Type defining the <b>MaximumUnpaidItemStrikesInfo</b> container, which is
 *  used by the seller as a mechanism to block prospective buyers who have unpaid item
 *  strikes on their account exceeding the value set in the <b>Count</b>
 *  field during a specified time period (set in the <b>Period</b> field).
 * XSD Type: MaximumUnpaidItemStrikesInfoType
 */
class MaximumUnpaidItemStrikesInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This integer value sets the maximum number of unpaid item strikes that a prospective buyer
     *  is allowed to have during a specified time period
     *  (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from
     *  buying/bidding on the item.
     *  <br><br>
     *  To retrieve a list of allowed values for this field, the seller should call
     *  <b>GeteBayDetails</b>, including <b>BuyerRequirementDetails</b> in
     *  the <b>DetailName</b> field of the request, and then look for the
     *  <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.MaximumUnpaidItemStrikesCount.Count</b>
     *  fields in the response.
     *  <br>
     *
     * @var int $count
     */
    private $count = null;

    /**
     * This enumerated value defines the length of time over which a prospective buyer's
     *  unpaid item strikes will be counted. If the prospective buyer's number of unpaid item
     *  strikes during this defined period exceeds the value set in the <b>Count</b>
     *  field, that prospective buyer is blocked from buying/bidding on the item.
     *  <br/><br/>
     *  If the <b>Count</b> value is 2, and the specified <b>Period</b>
     *  is 'Days_30' (counting back 30 days from the present day), any prospective buyer that has
     *  had three or more unpaid item strikes is blocked from buying/bidding on the item.
     *  <br>
     *
     * @var string $period
     */
    private $period = null;

    /**
     * Gets as count
     *
     * This integer value sets the maximum number of unpaid item strikes that a prospective buyer
     *  is allowed to have during a specified time period
     *  (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from
     *  buying/bidding on the item.
     *  <br><br>
     *  To retrieve a list of allowed values for this field, the seller should call
     *  <b>GeteBayDetails</b>, including <b>BuyerRequirementDetails</b> in
     *  the <b>DetailName</b> field of the request, and then look for the
     *  <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.MaximumUnpaidItemStrikesCount.Count</b>
     *  fields in the response.
     *  <br>
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * This integer value sets the maximum number of unpaid item strikes that a prospective buyer
     *  is allowed to have during a specified time period
     *  (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from
     *  buying/bidding on the item.
     *  <br><br>
     *  To retrieve a list of allowed values for this field, the seller should call
     *  <b>GeteBayDetails</b>, including <b>BuyerRequirementDetails</b> in
     *  the <b>DetailName</b> field of the request, and then look for the
     *  <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.MaximumUnpaidItemStrikesCount.Count</b>
     *  fields in the response.
     *  <br>
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as period
     *
     * This enumerated value defines the length of time over which a prospective buyer's
     *  unpaid item strikes will be counted. If the prospective buyer's number of unpaid item
     *  strikes during this defined period exceeds the value set in the <b>Count</b>
     *  field, that prospective buyer is blocked from buying/bidding on the item.
     *  <br/><br/>
     *  If the <b>Count</b> value is 2, and the specified <b>Period</b>
     *  is 'Days_30' (counting back 30 days from the present day), any prospective buyer that has
     *  had three or more unpaid item strikes is blocked from buying/bidding on the item.
     *  <br>
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * This enumerated value defines the length of time over which a prospective buyer's
     *  unpaid item strikes will be counted. If the prospective buyer's number of unpaid item
     *  strikes during this defined period exceeds the value set in the <b>Count</b>
     *  field, that prospective buyer is blocked from buying/bidding on the item.
     *  <br/><br/>
     *  If the <b>Count</b> value is 2, and the specified <b>Period</b>
     *  is 'Days_30' (counting back 30 days from the present day), any prospective buyer that has
     *  had three or more unpaid item strikes is blocked from buying/bidding on the item.
     *  <br>
     *
     * @param string $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Count", $value);
        }
        $value = $this->getPeriod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Period", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Count');
        if (null !== $value) {
            $this->setCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Period');
        if (null !== $value) {
            $this->setPeriod($value);
        }
    }
}
