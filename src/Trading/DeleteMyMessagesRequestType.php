<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteMyMessagesRequestType
 *
 * Removes selected messages for a given user.
 * XSD Type: DeleteMyMessagesRequestType
 */
class DeleteMyMessagesRequestType extends AbstractRequestType
{
    /**
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @var string[] $messageIDs
     */
    private $messageIDs = null;

    /**
     * Adds as messageID
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @return self
     * @param string $messageID
     */
    public function addToMessageIDs($messageID)
    {
        $this->messageIDs[] = $messageID;
        return $this;
    }

    /**
     * isset messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageIDs($index)
    {
        return isset($this->messageIDs[$index]);
    }

    /**
     * unset messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageIDs($index)
    {
        unset($this->messageIDs[$index]);
    }

    /**
     * Gets as messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @return string[]
     */
    public function getMessageIDs()
    {
        return $this->messageIDs;
    }

    /**
     * Sets a new messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @param string $messageIDs
     * @return self
     */
    public function setMessageIDs(array $messageIDs)
    {
        $this->messageIDs = $messageIDs;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getMessageIDs();
        if (null !== $value && !empty($this->getMessageIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageIDs", array_map(function ($v) {return ["MessageID" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setMessageIDs($value);
        }
    }
}
