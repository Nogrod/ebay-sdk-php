<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MemberMessageExchangeArrayType
 *
 * Type is used by the <b>MemberMessage</b> container that is returned in the <b>GetMemberMessages</b> calls. The <b>MemberMessage</b> container will consists of one or more member messages that meet the input criteria in the call request.
 * XSD Type: MemberMessageExchangeArrayType
 */
class MemberMessageExchangeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @var \Nogrod\eBaySDK\Trading\MemberMessageExchangeType[] $memberMessageExchange
     */
    private $memberMessageExchange = [

    ];

    /**
     * Adds as memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MemberMessageExchangeType $memberMessageExchange
     */
    public function addToMemberMessageExchange(\Nogrod\eBaySDK\Trading\MemberMessageExchangeType $memberMessageExchange)
    {
        if (!is_array($this->memberMessageExchange)) {
            throw new \LogicException('memberMessageExchange is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->memberMessageExchange[] = $memberMessageExchange;
        return $this;
    }

    /**
     * isset memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMemberMessageExchange($index)
    {
        return isset($this->memberMessageExchange[$index]);
    }

    /**
     * unset memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMemberMessageExchange($index)
    {
        unset($this->memberMessageExchange[$index]);
    }

    /**
     * Gets as memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\MemberMessageExchangeType>
     */
    public function getMemberMessageExchange()
    {
        return $this->memberMessageExchange;
    }

    /**
     * Sets a new memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\MemberMessageExchangeType> $memberMessageExchange
     * @return self
     */
    public function setMemberMessageExchange(iterable $memberMessageExchange)
    {
        $this->memberMessageExchange = $memberMessageExchange;
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
        $value = $this->memberMessageExchange;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'MemberMessageExchange', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MemberMessageExchangeArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->memberMessageExchange = [];
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
                case 'MemberMessageExchange':
                    $this->memberMessageExchange[] = \Nogrod\eBaySDK\Trading\MemberMessageExchangeType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['MemberMessageExchange'] = Func::jsonList($this->memberMessageExchange);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
