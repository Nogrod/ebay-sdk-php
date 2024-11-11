<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddMemberMessagesAAQToBidderResponseContainerType
 *
 * This type is used by the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container. A <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is returned for each message that was sent from the seller to the bidders/potential buyers through a separate <b>AddMemberMessagesAAQToBidderRequestContainer</b>. The <b>Ack</b> value in each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container indicates whether or not each message sent through the call was successful or not, and an <b>AddMemberMessagesAAQToBidderResponseContainer</b> is matched up to the corresponding <b>AddMemberMessagesAAQToBidderRequestContainer</b> through the <b>CorrelationID</b> value.
 * XSD Type: AddMemberMessagesAAQToBidderResponseContainerType
 */
class AddMemberMessagesAAQToBidderResponseContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This is a unique identifier for a message that was sent through the <b>AddMemberMessagesAAQToBidder</b> call. The seller must provide a <b>CorrelationID</b> value for each message that is sent through an <b>AddMemberMessagesAAQToBidderRequestContainer</b> container in the request. The <b>CorrelationID</b> value returned under each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each member message container in the request with its corresponding member message container in the response.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * This enumerated value indicates whether or not the corresponding message was successfully sent to the bidder(s)/potential buyer(s). If the value returned in this field is not <code>Success</code>, the message may have to be resent with another <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * Gets as correlationID
     *
     * This is a unique identifier for a message that was sent through the <b>AddMemberMessagesAAQToBidder</b> call. The seller must provide a <b>CorrelationID</b> value for each message that is sent through an <b>AddMemberMessagesAAQToBidderRequestContainer</b> container in the request. The <b>CorrelationID</b> value returned under each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each member message container in the request with its corresponding member message container in the response.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * This is a unique identifier for a message that was sent through the <b>AddMemberMessagesAAQToBidder</b> call. The seller must provide a <b>CorrelationID</b> value for each message that is sent through an <b>AddMemberMessagesAAQToBidderRequestContainer</b> container in the request. The <b>CorrelationID</b> value returned under each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each member message container in the request with its corresponding member message container in the response.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Gets as ack
     *
     * This enumerated value indicates whether or not the corresponding message was successfully sent to the bidder(s)/potential buyer(s). If the value returned in this field is not <code>Success</code>, the message may have to be resent with another <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @return string
     */
    public function getAck()
    {
        return $this->ack;
    }

    /**
     * Sets a new ack
     *
     * This enumerated value indicates whether or not the corresponding message was successfully sent to the bidder(s)/potential buyer(s). If the value returned in this field is not <code>Success</code>, the message may have to be resent with another <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @param string $ack
     * @return self
     */
    public function setAck($ack)
    {
        $this->ack = $ack;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
        }
        $value = $this->getAck();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Ack", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Ack');
        if (null !== $value) {
            $this->setAck($value);
        }
    }
}
