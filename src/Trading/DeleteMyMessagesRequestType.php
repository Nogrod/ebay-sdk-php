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
        $value = $this->messageIDs;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'MessageIDs', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'MessageID', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DeleteMyMessagesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->messageIDs = [];
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
                case 'MessageIDs':
                    $this->messageIDs = Func::readList($reader, 'MessageID', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? $value : null;
                    });
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['MessageIDs'] = Func::jsonList($this->messageIDs);
        return $data;
    }
}
