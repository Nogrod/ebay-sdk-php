<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetDisputeRequestType
 *
 * This is the base request type for the <b>GetDispute</b> call. This call retrieves the details of a case.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This call is deprecated and is scheduled for decommission on January 31, 2023. The alternative API to retrieve a specific cancellation request is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation-cancelId__get.html" target="_blank">Get Cancellation</a> method of the <a href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>.
 *  </span>
 * XSD Type: GetDisputeRequestType
 */
class GetDisputeRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of an Unpaid Item case. This value is passed in to retrieve detailed information on a specific case.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of an Unpaid Item case. This value is passed in to retrieve detailed information on a specific case.
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
     * The unique identifier of an Unpaid Item case. This value is passed in to retrieve detailed information on a specific case.
     *
     * @param string $disputeID
     * @return self
     */
    public function setDisputeID($disputeID)
    {
        $this->disputeID = $disputeID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDisputeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeID", $value);
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
    }
}
