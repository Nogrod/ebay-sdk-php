<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddDisputeResponseType
 *
 * Type defining the response of the <b>AddDispute</b> call. Upon a successful call, the response contains a newly created <b>DisputeID</b> value, which confirms that an Unpaid Item case was created, or that a single line item order was successfully cancelled.
 * XSD Type: AddDisputeResponseType
 */
class AddDisputeResponseType extends AbstractResponseType
{

    /**
     * This field will show the unique identifier of an Unpaid Item case that was created, or the unique identifier of the order cancellation.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * Gets as disputeID
     *
     * This field will show the unique identifier of an Unpaid Item case that was created, or the unique identifier of the order cancellation.
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
     * This field will show the unique identifier of an Unpaid Item case that was created, or the unique identifier of the order cancellation.
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
