<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeFilterCountType
 *
 * The number of disputes that match a given filter.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeFilterCountType
 */
class DisputeFilterCountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A filter used to reduce the number of disputes returned. The filter uses criteria
     *  such as whether the dispute is awaiting a response, is closed, or is eligible for
     *  credit. Both <i>Unpaid Item</i> and <i>Item Not Received</i> disputes can be returned for the
     *  same filter value.
     *
     * @var string $disputeFilterType
     */
    private $disputeFilterType = null;

    /**
     * The number of disputes that match the filter.
     *  In the <b>GetUserDisputes</b> response, not returned for the filter type
     *  that was used in the request.
     *
     * @var int $totalAvailable
     */
    private $totalAvailable = null;

    /**
     * Gets as disputeFilterType
     *
     * A filter used to reduce the number of disputes returned. The filter uses criteria
     *  such as whether the dispute is awaiting a response, is closed, or is eligible for
     *  credit. Both <i>Unpaid Item</i> and <i>Item Not Received</i> disputes can be returned for the
     *  same filter value.
     *
     * @return string
     */
    public function getDisputeFilterType()
    {
        return $this->disputeFilterType;
    }

    /**
     * Sets a new disputeFilterType
     *
     * A filter used to reduce the number of disputes returned. The filter uses criteria
     *  such as whether the dispute is awaiting a response, is closed, or is eligible for
     *  credit. Both <i>Unpaid Item</i> and <i>Item Not Received</i> disputes can be returned for the
     *  same filter value.
     *
     * @param string $disputeFilterType
     * @return self
     */
    public function setDisputeFilterType($disputeFilterType)
    {
        $this->disputeFilterType = $disputeFilterType;
        return $this;
    }

    /**
     * Gets as totalAvailable
     *
     * The number of disputes that match the filter.
     *  In the <b>GetUserDisputes</b> response, not returned for the filter type
     *  that was used in the request.
     *
     * @return int
     */
    public function getTotalAvailable()
    {
        return $this->totalAvailable;
    }

    /**
     * Sets a new totalAvailable
     *
     * The number of disputes that match the filter.
     *  In the <b>GetUserDisputes</b> response, not returned for the filter type
     *  that was used in the request.
     *
     * @param int $totalAvailable
     * @return self
     */
    public function setTotalAvailable($totalAvailable)
    {
        $this->totalAvailable = $totalAvailable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisputeFilterType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeFilterType", $value);
        }
        $value = $this->getTotalAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAvailable", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeFilterType');
        if (null !== $value) {
            $this->setDisputeFilterType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAvailable');
        if (null !== $value) {
            $this->setTotalAvailable($value);
        }
    }
}
