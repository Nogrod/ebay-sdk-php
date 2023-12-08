<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemStatusResponseType
 *
 * This is the base response type for the <b>GetItemStatus</b> call, which is a call that is used to retrieve the current status of up to 20 eBay listings.
 * XSD Type: GetItemStatusResponseType
 */
class GetItemStatusResponseType extends AbstractResponseType
{
    /**
     * An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleItemType[] $item
     */
    private $item = [

    ];

    /**
     * Adds as item
     *
     * An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType $item
     */
    public function addToItem(\Nogrod\eBaySDK\Shopping\SimpleItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * An <b>Item</b> container is returned for each <b>ItemID</b> value that was specified in the call request. One <b>GetItemStatus</b> call can retrieve up to 20 eBay listings.
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItem();
        if (null !== $value && !empty($this->getItem())) {
            $writer->write(array_map(function ($v) {return ["Item" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item', true);
        if (null !== $value && !empty($value)) {
            $this->setItem(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\SimpleItemType::fromKeyValue($v);}, $value));
        }
    }
}
