<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GiftSummaryType
 *
 * This type is used by the <b>GiftSummary</b> container that is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift. The <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card.
 * XSD Type: GiftSummaryType
 */
class GiftSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This free-form text contains the message that the purchaser of the digital gift card left for the recipient of the gift card.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @var string $message
     */
    private $message = null;

    /**
     * Gets as message
     *
     * This free-form text contains the message that the purchaser of the digital gift card left for the recipient of the gift card.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * This free-form text contains the message that the purchaser of the digital gift card left for the recipient of the gift card.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Message", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message');
        if (null !== $value) {
            $this->setMessage($value);
        }
    }
}
