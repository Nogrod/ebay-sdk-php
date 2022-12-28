<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AbstractRequestType
 *
 * Base type definition of the request payload, which can carry any type
 *  of payload content plus optional versioning information and detail level requirements.
 *  All concrete request types are derived from the abstract request type.
 *  The naming convention we use for the concrete type names is the name of the service
 *  (the verb or call name) followed by "RequestType": VerbNameRequestType
 * XSD Type: AbstractRequestType
 */
class AbstractRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * If you pass a value into the <b>MessageID</b> field in a request,
     *  the same value is returned in <b>CorrelationID</b> field in the response.
     *  If you're making a lot of calls, you can use this for tracking that a
     *  response is returned for every request and to match
     *  particular responses to particular requests. (In this case, specify
     *  a different value for each request.) You can specify any value
     *  that is useful to you.
     *
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * Gets as messageID
     *
     * If you pass a value into the <b>MessageID</b> field in a request,
     *  the same value is returned in <b>CorrelationID</b> field in the response.
     *  If you're making a lot of calls, you can use this for tracking that a
     *  response is returned for every request and to match
     *  particular responses to particular requests. (In this case, specify
     *  a different value for each request.) You can specify any value
     *  that is useful to you.
     *
     * @return string
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * If you pass a value into the <b>MessageID</b> field in a request,
     *  the same value is returned in <b>CorrelationID</b> field in the response.
     *  If you're making a lot of calls, you can use this for tracking that a
     *  response is returned for every request and to match
     *  particular responses to particular requests. (In this case, specify
     *  a different value for each request.) You can specify any value
     *  that is useful to you.
     *
     * @param string $messageID
     * @return self
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID');
        if (null !== $value) {
            $this->setMessageID($value);
        }
    }
}
