<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyMessagesResponseType
 *
 * Conains information about the messages sent to a user. Depending on the detail
 *  level, this information can include message counts, resolution and flagged status,
 *  message headers, and message text.
 * XSD Type: GetMyMessagesResponseType
 */
class GetMyMessagesResponseType extends AbstractResponseType
{
    /**
     * Summary data for a given user's messages. This includes the numbers of new
     *  messages, flagged messages, and total messages. The amount and type of
     *  data returned is the same whether or not the request includes specific
     *  Message IDs. Always/Conditionally returned logic assumes a detail level of
     *  ReturnMessages.
     *
     * @var \Nogrod\eBaySDK\Trading\MyMessagesSummaryType $summary
     */
    private $summary = null;

    /**
     * This container consists of an array of one or more messages that match the search criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\MyMessagesMessageType[] $messages
     */
    private $messages = null;

    /**
     * Gets as summary
     *
     * Summary data for a given user's messages. This includes the numbers of new
     *  messages, flagged messages, and total messages. The amount and type of
     *  data returned is the same whether or not the request includes specific
     *  Message IDs. Always/Conditionally returned logic assumes a detail level of
     *  ReturnMessages.
     *
     * @return \Nogrod\eBaySDK\Trading\MyMessagesSummaryType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary data for a given user's messages. This includes the numbers of new
     *  messages, flagged messages, and total messages. The amount and type of
     *  data returned is the same whether or not the request includes specific
     *  Message IDs. Always/Conditionally returned logic assumes a detail level of
     *  ReturnMessages.
     *
     * @param \Nogrod\eBaySDK\Trading\MyMessagesSummaryType $summary
     * @return self
     */
    public function setSummary(\Nogrod\eBaySDK\Trading\MyMessagesSummaryType $summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Adds as message
     *
     * This container consists of an array of one or more messages that match the search criteria in the call request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MyMessagesMessageType $message
     */
    public function addToMessages(\Nogrod\eBaySDK\Trading\MyMessagesMessageType $message)
    {
        if (!is_array($this->messages)) {
            throw new \LogicException('messages is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->messages[] = $message;
        return $this;
    }

    /**
     * isset messages
     *
     * This container consists of an array of one or more messages that match the search criteria in the call request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessages($index)
    {
        return isset($this->messages[$index]);
    }

    /**
     * unset messages
     *
     * This container consists of an array of one or more messages that match the search criteria in the call request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessages($index)
    {
        unset($this->messages[$index]);
    }

    /**
     * Gets as messages
     *
     * This container consists of an array of one or more messages that match the search criteria in the call request.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\MyMessagesMessageType>
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Sets a new messages
     *
     * This container consists of an array of one or more messages that match the search criteria in the call request.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\MyMessagesMessageType> $messages
     * @return self
     */
    public function setMessages(iterable $messages)
    {
        $this->messages = $messages;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->summary;
        if (null !== $value) {
            $writer->startElementNs(null, 'Summary', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->messages;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'Messages', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Message', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMyMessagesResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->messages = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Summary':
                    $this->summary = \Nogrod\eBaySDK\Trading\MyMessagesSummaryType::xmlRead($reader);
                    return true;
                case 'Messages':
                    $this->messages = Func::readList($reader, 'Message', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\MyMessagesMessageType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
