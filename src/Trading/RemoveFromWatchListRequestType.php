<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveFromWatchListRequestType
 *
 * The call enables a user to remove one or more items from their Watch List. A user can view the items that they are currently watching by calling <b>GetMyeBayBuying</b>.
 *  <br/><br/>
 *  The user has the option of removing one or more single-variation listings, one or more product variations within a multiple-variation listing, or removing all items from the Watch List.
 * XSD Type: RemoveFromWatchListRequestType
 */
class RemoveFromWatchListRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the item to be removed from the
     *  user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be specified if one or more <b>ItemID</b> fields are used.
     *  <br/><br/>
     *
     * @var string[] $itemID
     */
    private $itemID = [

    ];

    /**
     * If this field is included and set to <code>true</code>, then all the items in the user's
     *  Watch List are removed. Note that if the <b>RemoveAllItems</b> field is specified, one or more <b>ItemID</b> fields or the <b>VariationKey</b> cannot be used.
     *
     * @var bool $removeAllItems
     */
    private $removeAllItems = null;

    /**
     * This container is used if the user want to remove one or more product variations (within a multiple-variation listing) from the Watch List. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or the <b>RemoveAllItems</b> field cannot be used.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationKeyType[] $variationKey
     */
    private $variationKey = [

    ];

    /**
     * Adds as itemID
     *
     * The unique identifier of the item to be removed from the
     *  user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be specified if one or more <b>ItemID</b> fields are used.
     *  <br/><br/>
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
     * The unique identifier of the item to be removed from the
     *  user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be specified if one or more <b>ItemID</b> fields are used.
     *  <br/><br/>
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
     * The unique identifier of the item to be removed from the
     *  user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be specified if one or more <b>ItemID</b> fields are used.
     *  <br/><br/>
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
     * The unique identifier of the item to be removed from the
     *  user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be specified if one or more <b>ItemID</b> fields are used.
     *  <br/><br/>
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
     * The unique identifier of the item to be removed from the
     *  user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be specified if one or more <b>ItemID</b> fields are used.
     *  <br/><br/>
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
     * Gets as removeAllItems
     *
     * If this field is included and set to <code>true</code>, then all the items in the user's
     *  Watch List are removed. Note that if the <b>RemoveAllItems</b> field is specified, one or more <b>ItemID</b> fields or the <b>VariationKey</b> cannot be used.
     *
     * @return bool
     */
    public function getRemoveAllItems()
    {
        return $this->removeAllItems;
    }

    /**
     * Sets a new removeAllItems
     *
     * If this field is included and set to <code>true</code>, then all the items in the user's
     *  Watch List are removed. Note that if the <b>RemoveAllItems</b> field is specified, one or more <b>ItemID</b> fields or the <b>VariationKey</b> cannot be used.
     *
     * @param bool $removeAllItems
     * @return self
     */
    public function setRemoveAllItems($removeAllItems)
    {
        $this->removeAllItems = $removeAllItems;
        return $this;
    }

    /**
     * Adds as variationKey
     *
     * This container is used if the user want to remove one or more product variations (within a multiple-variation listing) from the Watch List. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or the <b>RemoveAllItems</b> field cannot be used.
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
     * This container is used if the user want to remove one or more product variations (within a multiple-variation listing) from the Watch List. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or the <b>RemoveAllItems</b> field cannot be used.
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
     * This container is used if the user want to remove one or more product variations (within a multiple-variation listing) from the Watch List. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or the <b>RemoveAllItems</b> field cannot be used.
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
     * This container is used if the user want to remove one or more product variations (within a multiple-variation listing) from the Watch List. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or the <b>RemoveAllItems</b> field cannot be used.
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
     * This container is used if the user want to remove one or more product variations (within a multiple-variation listing) from the Watch List. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or the <b>RemoveAllItems</b> field cannot be used.
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
        $value = $this->removeAllItems;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RemoveAllItems', null, ($value ? 'true' : 'false'));
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RemoveFromWatchListRequestType
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
                case 'RemoveAllItems':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->removeAllItems = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'VariationKey':
                    $this->variationKey[] = \Nogrod\eBaySDK\Trading\VariationKeyType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ItemID'] = Func::jsonList($this->itemID);
        $data['RemoveAllItems'] = $this->removeAllItems;
        $data['VariationKey'] = Func::jsonList($this->variationKey);
        return $data;
    }
}
