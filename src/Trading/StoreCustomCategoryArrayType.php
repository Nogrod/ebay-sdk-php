<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomCategoryArrayType
 *
 * Set of custom categories for the Store.
 * XSD Type: StoreCustomCategoryArrayType
 */
class StoreCustomCategoryArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A custom category for your eBay Store.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategory
     */
    private $customCategory = [
        
    ];

    /**
     * Adds as customCategory
     *
     * A custom category for your eBay Store.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory
     */
    public function addToCustomCategory(\Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory)
    {
        $this->customCategory[] = $customCategory;
        return $this;
    }

    /**
     * isset customCategory
     *
     * A custom category for your eBay Store.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomCategory($index)
    {
        return isset($this->customCategory[$index]);
    }

    /**
     * unset customCategory
     *
     * A custom category for your eBay Store.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomCategory($index)
    {
        unset($this->customCategory[$index]);
    }

    /**
     * Gets as customCategory
     *
     * A custom category for your eBay Store.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[]
     */
    public function getCustomCategory()
    {
        return $this->customCategory;
    }

    /**
     * Sets a new customCategory
     *
     * A custom category for your eBay Store.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategory
     * @return self
     */
    public function setCustomCategory(array $customCategory)
    {
        $this->customCategory = $customCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCustomCategory();
        if (null !== $value && !empty($this->getCustomCategory())) {
            $writer->write(array_map(function ($v) {
                return ["CustomCategory" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomCategory', true);
        if (null !== $value && !empty($value)) {
            $this->setCustomCategory(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::fromKeyValue($v);
            }, $value));
        }
    }
}
