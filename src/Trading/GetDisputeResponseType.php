<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetDisputeResponseType
 *
 * This is the base response type for the <b>GetDispute</b> call. This call retrieves the details of a seller-initiated dispute. Seller-initiated disputes include mutually-cancelled transactions and unpaid items.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This call does not support buyer-initiated cases created through eBay's Resolution Center. Buyer-initiated cases include Item Not Received (INR) and escalated Return cases. To retrieve and manage eBay Money Back Guarantee cases, the Case Management calls of the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead.
 *  </span>
 * XSD Type: GetDisputeResponseType
 */
class GetDisputeResponseType extends AbstractResponseType
{
    /**
     * If the dispute that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the dispute, the buyer and seller user IDs, and information on the listing that is associated with the dispute.
     *
     * @var \Nogrod\eBaySDK\Trading\DisputeType $dispute
     */
    private $dispute = null;

    /**
     * Gets as dispute
     *
     * If the dispute that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the dispute, the buyer and seller user IDs, and information on the listing that is associated with the dispute.
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
     * If the dispute that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the dispute, the buyer and seller user IDs, and information on the listing that is associated with the dispute.
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
