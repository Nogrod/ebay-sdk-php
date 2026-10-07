<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemBestOffersArrayType
 *
 * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if
 *  the <code>ReturnAll</code> detail level is used.
 * XSD Type: ItemBestOffersArrayType
 */
class ItemBestOffersArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemBestOffersType[] $itemBestOffers
     */
    private $itemBestOffers = [

    ];

    /**
     * Adds as itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemBestOffersType $itemBestOffers
     */
    public function addToItemBestOffers(\Nogrod\eBaySDK\Trading\ItemBestOffersType $itemBestOffers)
    {
        if (!is_array($this->itemBestOffers)) {
            throw new \LogicException('itemBestOffers is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->itemBestOffers[] = $itemBestOffers;
        return $this;
    }

    /**
     * isset itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemBestOffers($index)
    {
        return isset($this->itemBestOffers[$index]);
    }

    /**
     * unset itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemBestOffers($index)
    {
        unset($this->itemBestOffers[$index]);
    }

    /**
     * Gets as itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ItemBestOffersType>
     */
    public function getItemBestOffers()
    {
        return $this->itemBestOffers;
    }

    /**
     * Sets a new itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ItemBestOffersType> $itemBestOffers
     * @return self
     */
    public function setItemBestOffers(iterable $itemBestOffers)
    {
        $this->itemBestOffers = $itemBestOffers;
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
        $value = $this->itemBestOffers;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ItemBestOffers', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemBestOffersArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->itemBestOffers = [];
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
                case 'ItemBestOffers':
                    $this->itemBestOffers[] = \Nogrod\eBaySDK\Trading\ItemBestOffersType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ItemBestOffers'] = Func::jsonList($this->itemBestOffers);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
