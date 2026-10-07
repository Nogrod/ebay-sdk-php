<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddMemberMessagesAAQToBidderRequestType
 *
 * The base request of the <b>AddMemberMessagesAAQToBidder</b> call, which allows a seller to send up to 10 messages to bidders/potential buyers regarding an active listing. These potential buyers may include those who have made a Best Offer on a listing.
 * XSD Type: AddMemberMessagesAAQToBidderRequestType
 */
class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
    /**
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @var \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType[] $addMemberMessagesAAQToBidderRequestContainer
     */
    private $addMemberMessagesAAQToBidderRequestContainer = [

    ];

    /**
     * Adds as addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType $addMemberMessagesAAQToBidderRequestContainer
     */
    public function addToAddMemberMessagesAAQToBidderRequestContainer(\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType $addMemberMessagesAAQToBidderRequestContainer)
    {
        if (!is_array($this->addMemberMessagesAAQToBidderRequestContainer)) {
            throw new \LogicException('addMemberMessagesAAQToBidderRequestContainer is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->addMemberMessagesAAQToBidderRequestContainer[] = $addMemberMessagesAAQToBidderRequestContainer;
        return $this;
    }

    /**
     * isset addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddMemberMessagesAAQToBidderRequestContainer($index)
    {
        return isset($this->addMemberMessagesAAQToBidderRequestContainer[$index]);
    }

    /**
     * unset addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddMemberMessagesAAQToBidderRequestContainer($index)
    {
        unset($this->addMemberMessagesAAQToBidderRequestContainer[$index]);
    }

    /**
     * Gets as addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType>
     */
    public function getAddMemberMessagesAAQToBidderRequestContainer()
    {
        return $this->addMemberMessagesAAQToBidderRequestContainer;
    }

    /**
     * Sets a new addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType> $addMemberMessagesAAQToBidderRequestContainer
     * @return self
     */
    public function setAddMemberMessagesAAQToBidderRequestContainer(iterable $addMemberMessagesAAQToBidderRequestContainer)
    {
        $this->addMemberMessagesAAQToBidderRequestContainer = $addMemberMessagesAAQToBidderRequestContainer;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->addMemberMessagesAAQToBidderRequestContainer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddMemberMessagesAAQToBidderRequestContainer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->addMemberMessagesAAQToBidderRequestContainer = [];
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
                case 'AddMemberMessagesAAQToBidderRequestContainer':
                    $this->addMemberMessagesAAQToBidderRequestContainer[] = \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['AddMemberMessagesAAQToBidderRequestContainer'] = Func::jsonList($this->addMemberMessagesAAQToBidderRequestContainer);
        return $data;
    }
}
