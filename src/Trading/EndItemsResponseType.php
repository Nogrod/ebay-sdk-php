<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemsResponseType
 *
 * Contains a response of the resulting status of ending each item.
 * XSD Type: EndItemsResponseType
 */
class EndItemsResponseType extends AbstractResponseType
{
    /**
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @var \Nogrod\eBaySDK\Trading\EndItemResponseContainerType[] $endItemResponseContainer
     */
    private $endItemResponseContainer = [

    ];

    /**
     * Adds as endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndItemResponseContainerType $endItemResponseContainer
     */
    public function addToEndItemResponseContainer(\Nogrod\eBaySDK\Trading\EndItemResponseContainerType $endItemResponseContainer)
    {
        if (!is_array($this->endItemResponseContainer)) {
            throw new \LogicException('endItemResponseContainer is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->endItemResponseContainer[] = $endItemResponseContainer;
        return $this;
    }

    /**
     * isset endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndItemResponseContainer($index)
    {
        return isset($this->endItemResponseContainer[$index]);
    }

    /**
     * unset endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndItemResponseContainer($index)
    {
        unset($this->endItemResponseContainer[$index]);
    }

    /**
     * Gets as endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\EndItemResponseContainerType>
     */
    public function getEndItemResponseContainer()
    {
        return $this->endItemResponseContainer;
    }

    /**
     * Sets a new endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndItemResponseContainerType> $endItemResponseContainer
     * @return self
     */
    public function setEndItemResponseContainer(iterable $endItemResponseContainer)
    {
        $this->endItemResponseContainer = $endItemResponseContainer;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->endItemResponseContainer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'EndItemResponseContainer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\EndItemsResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->endItemResponseContainer = [];
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
                case 'EndItemResponseContainer':
                    $this->endItemResponseContainer[] = \Nogrod\eBaySDK\Trading\EndItemResponseContainerType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['EndItemResponseContainer'] = Func::jsonList($this->endItemResponseContainer);
        return $data;
    }
}
