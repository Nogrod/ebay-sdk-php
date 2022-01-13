<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetDisputeResponseType
 *
 * This is the base response type for the <b>GetDispute</b> call. This call retrieves the details of an Unpaid Item case.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>GetDispute</b> call now only retrieves Unpaid Item cases, and is no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and this call also does not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
