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
     * @return string[]
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
    public function setItemID(array $itemID)
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
     * @return \Nogrod\eBaySDK\Trading\VariationKeyType[]
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
     * @param \Nogrod\eBaySDK\Trading\VariationKeyType[] $variationKey
     * @return self
     */
    public function setVariationKey(array $variationKey)
    {
        $this->variationKey = $variationKey;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value && [] !== $this->getItemID()) {
            $writer->write(array_map(function ($v) {return ["ItemID" => $v];}, $value));
        }
        $value = $this->getRemoveAllItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RemoveAllItems", $value);
        }
        $value = $this->getVariationKey();
        if (null !== $value && [] !== $this->getVariationKey()) {
            $writer->write(array_map(function ($v) {return ["VariationKey" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RemoveAllItems');
        if (null !== $value) {
            $this->setRemoveAllItems(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationKey');
        if (null !== $value) {
            $this->setVariationKey(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\VariationKeyType::fromKeyValue($v);}, $value));
        }
    }
}
