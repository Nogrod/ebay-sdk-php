<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing SearchResultType
 *
 * Contains the returned item listings, if any. The data for each listing is
 *  returned in individual item containers.
 * XSD Type: SearchResult
 */
class SearchResultType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The total number of items returned in the search response. This is often
     *  equal to the <b class="con">entriesPerPage</b> value. If the
     *  count is less than the specified <b
     *  class="con">entriesPerPage</b>, it indicates the end of
     *  the result set.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Container for the data of a single item that matches the search criteria.
     *
     * @var \Nogrod\eBaySDK\Finding\SearchItemType[] $item
     */
    private $item = [
        
    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as count
     *
     * The total number of items returned in the search response. This is often
     *  equal to the <b class="con">entriesPerPage</b> value. If the
     *  count is less than the specified <b
     *  class="con">entriesPerPage</b>, it indicates the end of
     *  the result set.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The total number of items returned in the search response. This is often
     *  equal to the <b class="con">entriesPerPage</b> value. If the
     *  count is less than the specified <b
     *  class="con">entriesPerPage</b>, it indicates the end of
     *  the result set.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Adds as item
     *
     * Container for the data of a single item that matches the search criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\SearchItemType $item
     */
    public function addToItem(\Nogrod\eBaySDK\Finding\SearchItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * Container for the data of a single item that matches the search criteria.
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
     * Container for the data of a single item that matches the search criteria.
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
     * Container for the data of a single item that matches the search criteria.
     *
     * @return \Nogrod\eBaySDK\Finding\SearchItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Container for the data of a single item that matches the search criteria.
     *
     * @param \Nogrod\eBaySDK\Finding\SearchItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeAttribute("count", $value);
        }
        $value = $this->getItem();
        if (null !== $value && !empty($this->getItem())) {
            $writer->write(array_map(function ($v) {
                return ["item" => $v];
            }, $value));
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}item', true);
        if (null !== $value && !empty($value)) {
            $this->setItem(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\SearchItemType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
