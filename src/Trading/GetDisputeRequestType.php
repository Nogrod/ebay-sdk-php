<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetDisputeRequestType
 *
 * This is the base request type for the <b>GetDispute</b> call. This call retrieves the details of a seller-initiated dispute. Seller-initiated disputes include mutually-cancelled transactions and unpaid items.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This call does not support buyer-initiated cases created through eBay's Resolution Center. Buyer-initiated cases include Item Not Received (INR) and escalated Return cases. To retrieve and manage eBay Money Back Guarantee cases, the Case Management calls of the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead.
 *  </span>
 * XSD Type: GetDisputeRequestType
 */
class GetDisputeRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of an seller-initiated dispute. The caller passes in this value to retrieve detailed information on a specific dispute.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Buyer-initiated Money Back Guarantee cases are not supported with this call. To retrieve and manage eBay Money Back Guarantee cases, the Case Management calls of the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead.
     *  </span>
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of an seller-initiated dispute. The caller passes in this value to retrieve detailed information on a specific dispute.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Buyer-initiated Money Back Guarantee cases are not supported with this call. To retrieve and manage eBay Money Back Guarantee cases, the Case Management calls of the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead.
     *  </span>
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
     * The unique identifier of an seller-initiated dispute. The caller passes in this value to retrieve detailed information on a specific dispute.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Buyer-initiated Money Back Guarantee cases are not supported with this call. To retrieve and manage eBay Money Back Guarantee cases, the Case Management calls of the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Post-Order API</a> can be used instead.
     *  </span>
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeID');
        if (null !== $value) {
            $this->setDisputeID($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
