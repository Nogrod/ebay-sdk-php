<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomCategoryArrayType
 *
 * This type holds an array of custom categories set up by a seller for their eBay Store.
 * XSD Type: StoreCustomCategoryArrayType
 */
class StoreCustomCategoryArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container is used to express details about a customized eBay Store category.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategory
     */
    private $customCategory = [

    ];

    /**
     * Adds as customCategory
     *
     * This container is used to express details about a customized eBay Store category.
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
     * This container is used to express details about a customized eBay Store category.
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
     * This container is used to express details about a customized eBay Store category.
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
     * This container is used to express details about a customized eBay Store category.
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
     * This container is used to express details about a customized eBay Store category.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategory
     * @return self
     */
    public function setCustomCategory(array $customCategory)
    {
        $this->customCategory = $customCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCustomCategory();
        if (null !== $value && [] !== $this->getCustomCategory()) {
            $writer->write(array_map(function ($v) {return ["CustomCategory" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\StoreCustomCategoryArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomCategory');
        if (null !== $value) {
            $this->setCustomCategory(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::fromKeyValue($v);}, $value));
        }
    }
}
