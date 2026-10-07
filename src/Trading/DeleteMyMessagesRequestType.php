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
        if (!is_array($this->messageIDs)) {
            throw new \LogicException('messageIDs is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setMessageIDs(iterable $messageIDs)
    {
        $this->messageIDs = $messageIDs;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->getMessageIDs();
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElement("{urn:ebay:apis:eBLBaseComponents}MessageIDs");
                    $open = true;
                }
                $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DeleteMyMessagesRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageIDs');
        if (null !== $value) {
            $value = Func::mapArray($value, '{urn:ebay:apis:eBLBaseComponents}MessageID', true);
            $this->setMessageIDs($value);
        }
    }
}
