<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesMessageArrayType
 *
 * Type used by the <b>Messages</b> container that is returned in <b>GetMyMessages</b>. The <b>Messages</b> container consists of an array of one or more messages.
 * XSD Type: MyMessagesMessageArrayType
 */
class MyMessagesMessageArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @var \Nogrod\eBaySDK\Trading\MyMessagesMessageType[] $message
     */
    private $message = [

    ];

    /**
     * Adds as message
     *
     * A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MyMessagesMessageType $message
     */
    public function addToMessage(\Nogrod\eBaySDK\Trading\MyMessagesMessageType $message)
    {
        if (!is_array($this->message)) {
            throw new \LogicException('message is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MyMessagesMessageType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\MyMessagesMessageType> $message
     * @return self
     */
    public function setMessage(iterable $message)
    {
        $this->message = $message;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->message;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Message', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyMessagesMessageArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->message = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Message':
                    $this->message[] = \Nogrod\eBaySDK\Trading\MyMessagesMessageType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Message'] = Func::jsonList($this->message);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
