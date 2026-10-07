<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddMemberMessagesAAQToBidderResponseType
 *
 * Type defining the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container, which consists of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
 * XSD Type: AddMemberMessagesAAQToBidderResponseType
 */
class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{
    /**
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @var \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType[] $addMemberMessagesAAQToBidderResponseContainer
     */
    private $addMemberMessagesAAQToBidderResponseContainer = [

    ];

    /**
     * Adds as addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType $addMemberMessagesAAQToBidderResponseContainer
     */
    public function addToAddMemberMessagesAAQToBidderResponseContainer(\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType $addMemberMessagesAAQToBidderResponseContainer)
    {
        if (!is_array($this->addMemberMessagesAAQToBidderResponseContainer)) {
            throw new \LogicException('addMemberMessagesAAQToBidderResponseContainer is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->addMemberMessagesAAQToBidderResponseContainer[] = $addMemberMessagesAAQToBidderResponseContainer;
        return $this;
    }

    /**
     * isset addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddMemberMessagesAAQToBidderResponseContainer($index)
    {
        return isset($this->addMemberMessagesAAQToBidderResponseContainer[$index]);
    }

    /**
     * unset addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddMemberMessagesAAQToBidderResponseContainer($index)
    {
        unset($this->addMemberMessagesAAQToBidderResponseContainer[$index]);
    }

    /**
     * Gets as addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType>
     */
    public function getAddMemberMessagesAAQToBidderResponseContainer()
    {
        return $this->addMemberMessagesAAQToBidderResponseContainer;
    }

    /**
     * Sets a new addMemberMessagesAAQToBidderResponseContainer
     *
     * Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType> $addMemberMessagesAAQToBidderResponseContainer
     * @return self
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer(iterable $addMemberMessagesAAQToBidderResponseContainer)
    {
        $this->addMemberMessagesAAQToBidderResponseContainer = $addMemberMessagesAAQToBidderResponseContainer;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->addMemberMessagesAAQToBidderResponseContainer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddMemberMessagesAAQToBidderResponseContainer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->addMemberMessagesAAQToBidderResponseContainer = [];
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
                case 'AddMemberMessagesAAQToBidderResponseContainer':
                    $this->addMemberMessagesAAQToBidderResponseContainer[] = \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderResponseContainerType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
