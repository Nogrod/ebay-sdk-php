<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddDisputeResponseType
 *
 * Type defining the response of the <b>AddDispute</b> call.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>AddDispute</b> call is deprecated and is scheduled for decommission on January 31, 2023. The alternative API to create cancellation requests is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation__post.html" target="_blank">Create Cancellation Request</a> method of the <a href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>.
 *  </span>
 * XSD Type: AddDisputeResponseType
 */
class AddDisputeResponseType extends AbstractResponseType
{
    /**
     * This field will show the unique identifier of an Unpaid Item case that was created.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * Gets as disputeID
     *
     * This field will show the unique identifier of an Unpaid Item case that was created.
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
     * This field will show the unique identifier of an Unpaid Item case that was created.
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
