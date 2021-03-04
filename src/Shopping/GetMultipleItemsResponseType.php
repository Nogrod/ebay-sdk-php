<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMultipleItemsResponseType
 *
 * The base response type of the <b>GetMultipleItems</b> call, which includes an array of eBay items.
 * XSD Type: GetMultipleItemsResponseType
 */
class GetMultipleItemsResponseType extends AbstractResponseType
{
    /**
     * Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleItemType[] $item
     */
    private $item = [
        
    ];

    /**
     * Adds as item
     *
     * Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
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
     * Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
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
     * Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
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
     * Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
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
     * Contains details for a listing (or multiple) listings that correspond to the item ID(s) specified in the request.
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItem();
        if (null !== $value && !empty($this->getItem())) {
            $writer->write(array_map(function ($v) {
                return ["Item" => $v];
            }, $value));
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
            $this->setItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\SimpleItemType::fromKeyValue($v);
            }, $value));
        }
    }
}
