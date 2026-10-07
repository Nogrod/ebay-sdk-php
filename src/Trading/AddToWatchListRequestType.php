<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddToWatchListRequestType
 *
 * Adds one or more order line items to the eBay user's Watch List. An auction item or a single-variation, fixed-price listing is identified with an <b>ItemID</b> value. To add a specific item variation to the Watch List from within a multi-variation, fixed-price listing, the user will use the <b>VariationKey</b> container instead.
 * XSD Type: AddToWatchListRequestType
 */
class AddToWatchListRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the single-variation listing that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request have been added) cannot exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @var string[] $itemID
     */
    private $itemID = [

    ];

    /**
     * This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List.
     *  The listing is identified through the <b>ItemID</b> value and each item variation existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container.
     *  <br>
     *  <br>
     *  The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationKeyType[] $variationKey
     */
    private $variationKey = [

    ];

    /**
     * Adds as itemID
     *
     * The unique identifier of the single-variation listing that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request have been added) cannot exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @return self
     * @param string $itemID
     */
    public function addToItemID($itemID)
    {
        if (!is_array($this->itemID)) {
            throw new \LogicException('itemID is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->itemID[] = $itemID;
        return $this;
    }

    /**
     * isset itemID
     *
     * The unique identifier of the single-variation listing that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request have been added) cannot exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemID($index)
    {
        return isset($this->itemID[$index]);
    }

    /**
     * unset itemID
     *
     * The unique identifier of the single-variation listing that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request have been added) cannot exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemID($index)
    {
        unset($this->itemID[$index]);
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the single-variation listing that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request have been added) cannot exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @return iterable<string>
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of the single-variation listing that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request have been added) cannot exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID(iterable $itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Adds as variationKey
     *
     * This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List.
     *  The listing is identified through the <b>ItemID</b> value and each item variation existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container.
     *  <br>
     *  <br>
     *  The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VariationKeyType $variationKey
     */
    public function addToVariationKey(\Nogrod\eBaySDK\Trading\VariationKeyType $variationKey)
    {
        if (!is_array($this->variationKey)) {
            throw new \LogicException('variationKey is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->variationKey[] = $variationKey;
        return $this;
    }

    /**
     * isset variationKey
     *
     * This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List.
     *  The listing is identified through the <b>ItemID</b> value and each item variation existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container.
     *  <br>
     *  <br>
     *  The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationKey($index)
    {
        return isset($this->variationKey[$index]);
    }

    /**
     * unset variationKey
     *
     * This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List.
     *  The listing is identified through the <b>ItemID</b> value and each item variation existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container.
     *  <br>
     *  <br>
     *  The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationKey($index)
    {
        unset($this->variationKey[$index]);
    }

    /**
     * Gets as variationKey
     *
     * This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List.
     *  The listing is identified through the <b>ItemID</b> value and each item variation existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container.
     *  <br>
     *  <br>
     *  The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\VariationKeyType>
     */
    public function getVariationKey()
    {
        return $this->variationKey;
    }

    /**
     * Sets a new variationKey
     *
     * This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List.
     *  The listing is identified through the <b>ItemID</b> value and each item variation existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container.
     *  <br>
     *  <br>
     *  The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VariationKeyType> $variationKey
     * @return self
     */
    public function setVariationKey(iterable $variationKey)
    {
        $this->variationKey = $variationKey;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ItemID', null, (string) $v);
            }
        }
        $value = $this->variationKey;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'VariationKey', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddToWatchListRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->itemID = [];
        $this->variationKey = [];
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
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID[] = $value;
                    }
                    return true;
                case 'VariationKey':
                    $this->variationKey[] = \Nogrod\eBaySDK\Trading\VariationKeyType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
