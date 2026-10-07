<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreResponseType
 *
 * The base response type of the <b>GetStore</b> call. This response consists of the data describing a seller's eBay store, and includes the eBay Store name, the description of the store, the URL to the eBay Store, and eBay Store Category hierarchy.
 * XSD Type: GetStoreResponseType
 */
class GetStoreResponseType extends AbstractResponseType
{
    /**
     * This container consists of detailed information on the seller's eBay Store.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreType $store
     */
    private $store = null;

    /**
     * Gets as store
     *
     * This container consists of detailed information on the seller's eBay Store.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * This container consists of detailed information on the seller's eBay Store.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreType $store
     * @return self
     */
    public function setStore(\Nogrod\eBaySDK\Trading\StoreType $store)
    {
        $this->store = $store;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->store;
        if (null !== $value) {
            $writer->startElementNs(null, 'Store', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetStoreResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'Store':
                    $this->store = \Nogrod\eBaySDK\Trading\StoreType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['Store'] = $this->store;
        return $data;
    }
}
