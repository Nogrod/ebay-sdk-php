<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddItemsRequestType
 *
 * Base request type for the <b>AddItems</b> call, which is used to create one to five fixed-price, auction, or classified ad listings. The <b>AddItems</b> call does not support multiple-variation listings, so multiple-variation listings cannot be created with this call.
 * XSD Type: AddItemsRequestType
 */
class AddItemsRequestType extends AbstractRequestType
{
    /**
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @var \Nogrod\eBaySDK\Trading\AddItemRequestContainerType[] $addItemRequestContainer
     */
    private $addItemRequestContainer = [

    ];

    /**
     * Adds as addItemRequestContainer
     *
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemRequestContainerType $addItemRequestContainer
     */
    public function addToAddItemRequestContainer(\Nogrod\eBaySDK\Trading\AddItemRequestContainerType $addItemRequestContainer)
    {
        if (!is_array($this->addItemRequestContainer)) {
            throw new \LogicException('addItemRequestContainer is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->addItemRequestContainer[] = $addItemRequestContainer;
        return $this;
    }

    /**
     * isset addItemRequestContainer
     *
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddItemRequestContainer($index)
    {
        return isset($this->addItemRequestContainer[$index]);
    }

    /**
     * unset addItemRequestContainer
     *
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddItemRequestContainer($index)
    {
        unset($this->addItemRequestContainer[$index]);
    }

    /**
     * Gets as addItemRequestContainer
     *
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AddItemRequestContainerType>
     */
    public function getAddItemRequestContainer()
    {
        return $this->addItemRequestContainer;
    }

    /**
     * Sets a new addItemRequestContainer
     *
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddItemRequestContainerType> $addItemRequestContainer
     * @return self
     */
    public function setAddItemRequestContainer(iterable $addItemRequestContainer)
    {
        $this->addItemRequestContainer = $addItemRequestContainer;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->addItemRequestContainer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddItemRequestContainer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddItemsRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->addItemRequestContainer = [];
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
                case 'AddItemRequestContainer':
                    $this->addItemRequestContainer[] = \Nogrod\eBaySDK\Trading\AddItemRequestContainerType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['AddItemRequestContainer'] = Func::jsonList($this->addItemRequestContainer);
        return $data;
    }
}
