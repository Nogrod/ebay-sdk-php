<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetDisputeResponseType
 *
 * This is the base response type for the <b>GetDispute</b> call.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>GetDispute</b> call is deprecated and is scheduled for decommission on January 31, 2023. The alternative API to retrieve a specific cancellation request is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation-cancelId__get.html" target="_blank">Get Cancellation</a> method of the <a href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>.
 *  </span>
 * XSD Type: GetDisputeResponseType
 */
class GetDisputeResponseType extends AbstractResponseType
{
    /**
     * If the Unpaid Item case that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the Unpaid Item case, the buyer and seller user IDs, and information on the listing that is associated with the dispute.
     *
     * @var \Nogrod\eBaySDK\Trading\DisputeType $dispute
     */
    private $dispute = null;

    /**
     * Gets as dispute
     *
     * If the Unpaid Item case that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the Unpaid Item case, the buyer and seller user IDs, and information on the listing that is associated with the dispute.
     *
     * @return \Nogrod\eBaySDK\Trading\DisputeType
     */
    public function getDispute()
    {
        return $this->dispute;
    }

    /**
     * Sets a new dispute
     *
     * If the Unpaid Item case that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the Unpaid Item case, the buyer and seller user IDs, and information on the listing that is associated with the dispute.
     *
     * @param \Nogrod\eBaySDK\Trading\DisputeType $dispute
     * @return self
     */
    public function setDispute(\Nogrod\eBaySDK\Trading\DisputeType $dispute)
    {
        $this->dispute = $dispute;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getDispute();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Dispute", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Dispute');
        if (null !== $value) {
            $this->setDispute(\Nogrod\eBaySDK\Trading\DisputeType::fromKeyValue($value));
        }
    }
}
