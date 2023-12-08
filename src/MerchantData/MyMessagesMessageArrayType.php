<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesMessageArrayType
 *
 * Type used by the <b>Messages</b> container that is returned in <b>GetMyMessages</b>. The <b>Messages</b> container consists of an array of one or more messages.
 * XSD Type: MyMessagesMessageArrayType
 */
class MyMessagesMessageArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MyMessagesMessageType[] $message
     */
    private $message = [

    ];

    /**
     * Adds as message
     *
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesMessageType $message
     */
    public function addToMessage(\Nogrod\eBaySDK\MerchantData\MyMessagesMessageType $message)
    {
        $this->message[] = $message;
        return $this;
    }

    /**
     * isset message
     *
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessage($index)
    {
        return isset($this->message[$index]);
    }

    /**
     * unset message
     *
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessage($index)
    {
        unset($this->message[$index]);
    }

    /**
     * Gets as message
     *
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MyMessagesMessageType[]
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesMessageType[] $message
     * @return self
     */
    public function setMessage(array $message)
    {
        $this->message = $message;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMessage();
        if (null !== $value && !empty($this->getMessage())) {
            $writer->write(array_map(function ($v) {return ["Message" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message', true);
        if (null !== $value && !empty($value)) {
            $this->setMessage(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\MyMessagesMessageType::fromKeyValue($v);}, $value));
        }
    }
}
