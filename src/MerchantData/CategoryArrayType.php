<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryArrayType
 *
 * Type used by the <b>CategoryArray</b> container that is returned in <b>GetCategories</b>. All categories that match the input criteria of the <b>GetCategories</b> request payload are returned under the <b>CategoryArray</b> container
 * XSD Type: CategoryArrayType
 */
class CategoryArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container provides details about the eBay category identified in the <b>CategoryID</b> field. The <b>DetailLevel</b> field must be included and set to <code>ReturnAll</code> for <b>Category</b>, nodes to appear.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CategoryType[] $category
     */
    private $category = [
        
    ];

    /**
     * Adds as category
     *
     * This container provides details about the eBay category identified in the <b>CategoryID</b> field. The <b>DetailLevel</b> field must be included and set to <code>ReturnAll</code> for <b>Category</b>, nodes to appear.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\CategoryType $category
     */
    public function addToCategory(\Nogrod\eBaySDK\MerchantData\CategoryType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * This container provides details about the eBay category identified in the <b>CategoryID</b> field. The <b>DetailLevel</b> field must be included and set to <code>ReturnAll</code> for <b>Category</b>, nodes to appear.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * This container provides details about the eBay category identified in the <b>CategoryID</b> field. The <b>DetailLevel</b> field must be included and set to <code>ReturnAll</code> for <b>Category</b>, nodes to appear.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * This container provides details about the eBay category identified in the <b>CategoryID</b> field. The <b>DetailLevel</b> field must be included and set to <code>ReturnAll</code> for <b>Category</b>, nodes to appear.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CategoryType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * This container provides details about the eBay category identified in the <b>CategoryID</b> field. The <b>DetailLevel</b> field must be included and set to <code>ReturnAll</code> for <b>Category</b>, nodes to appear.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CategoryType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategory();
        if (null !== $value && !empty($this->getCategory())) {
            $writer->write(array_map(function ($v) {
                return ["Category" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category', true);
        if (null !== $value && !empty($value)) {
            $this->setCategory(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\CategoryType::fromKeyValue($v);
            }, $value));
        }
    }
}
