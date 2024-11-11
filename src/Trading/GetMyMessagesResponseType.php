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
     * @return \Nogrod\eBaySDK\Trading\MyMessagesMessageType[]
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
     * @param \Nogrod\eBaySDK\Trading\MyMessagesMessageType[] $messages
     * @return self
     */
    public function setMessages(array $messages)
    {
        $this->messages = $messages;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Summary", $value);
        }
        $value = $this->getMessages();
        if (null !== $value && !empty($this->getMessages())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Messages", array_map(function ($v) {return ["Message" => $v];}, $value));
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Summary');
        if (null !== $value) {
            $this->setSummary(\Nogrod\eBaySDK\Trading\MyMessagesSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Messages');
        if (null !== $value) {
            $this->setMessages(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MyMessagesMessageType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Message'));}, $value));
        }
    }
}
