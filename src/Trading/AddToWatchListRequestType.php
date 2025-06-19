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
     * @return string[]
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
    public function setItemID(array $itemID)
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
     * @return \Nogrod\eBaySDK\Trading\VariationKeyType[]
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
        $value = $this->getVariationKey();
        if (null !== $value && [] !== $this->getVariationKey()) {
            $writer->write(array_map(function ($v) {return ["VariationKey" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AddToWatchListRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID', true);
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationKey');
        if (null !== $value) {
            $this->setVariationKey(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\VariationKeyType::fromKeyValue($v);}, $value));
        }
    }
}
