<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddItemsResponseType
 *
 * The response of the <b>AddItems</b> call. The response includes the Item IDs of the newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
 * XSD Type: AddItemsResponseType
 */
class AddItemsResponseType extends AbstractResponseType
{
    /**
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @var \Nogrod\eBaySDK\Trading\AddItemResponseContainerType[] $addItemResponseContainer
     */
    private $addItemResponseContainer = [

    ];

    /**
     * Adds as addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemResponseContainerType $addItemResponseContainer
     */
    public function addToAddItemResponseContainer(\Nogrod\eBaySDK\Trading\AddItemResponseContainerType $addItemResponseContainer)
    {
        if (!is_array($this->addItemResponseContainer)) {
            throw new \LogicException('addItemResponseContainer is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->addItemResponseContainer[] = $addItemResponseContainer;
        return $this;
    }

    /**
     * isset addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddItemResponseContainer($index)
    {
        return isset($this->addItemResponseContainer[$index]);
    }

    /**
     * unset addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddItemResponseContainer($index)
    {
        unset($this->addItemResponseContainer[$index]);
    }

    /**
     * Gets as addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AddItemResponseContainerType>
     */
    public function getAddItemResponseContainer()
    {
        return $this->addItemResponseContainer;
    }

    /**
     * Sets a new addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddItemResponseContainerType> $addItemResponseContainer
     * @return self
     */
    public function setAddItemResponseContainer(iterable $addItemResponseContainer)
    {
        $this->addItemResponseContainer = $addItemResponseContainer;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->addItemResponseContainer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddItemResponseContainer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddItemsResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->addItemResponseContainer = [];
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
                case 'AddItemResponseContainer':
                    $this->addItemResponseContainer[] = \Nogrod\eBaySDK\Trading\AddItemResponseContainerType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['AddItemResponseContainer'] = Func::jsonList($this->addItemResponseContainer);
        return $data;
    }
}
