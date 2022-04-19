<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryArrayType
 *
 * This type is used by the <b>CategoryArray</b> container that is returned in the <b>GetCategoryInfo</b> call. The <b>CategoryArray</b> container consists of high-level information about the category specified in the call request, as well as information on that category's child category.
 * XSD Type: CategoryArrayType
 */
class CategoryArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of high-level details of a category, including its category ID value, full category path (by name and by category ID), its level in the eBay site's category hierarchy, category ID of its parent category, and a boolean value to indicate if it is a listing (leaf) category.
     *  <br/><br/>
     *  At least one <b>Category</b> container is returned (as long as the category is found based on the <b>CategoryID</b> value that is passed in to the request), and multiple <b>Category</b> containers are returned if the <b>IncludeSelector</b> field is included in the request, set to <code>ChildCategories</code>, and the category has child categories.
     *
     * @var \Nogrod\eBaySDK\Shopping\CategoryType[] $category
     */
    private $category = [

    ];

    /**
     * Adds as category
     *
     * This container consists of high-level details of a category, including its category ID value, full category path (by name and by category ID), its level in the eBay site's category hierarchy, category ID of its parent category, and a boolean value to indicate if it is a listing (leaf) category.
     *  <br/><br/>
     *  At least one <b>Category</b> container is returned (as long as the category is found based on the <b>CategoryID</b> value that is passed in to the request), and multiple <b>Category</b> containers are returned if the <b>IncludeSelector</b> field is included in the request, set to <code>ChildCategories</code>, and the category has child categories.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\CategoryType $category
     */
    public function addToCategory(\Nogrod\eBaySDK\Shopping\CategoryType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * This container consists of high-level details of a category, including its category ID value, full category path (by name and by category ID), its level in the eBay site's category hierarchy, category ID of its parent category, and a boolean value to indicate if it is a listing (leaf) category.
     *  <br/><br/>
     *  At least one <b>Category</b> container is returned (as long as the category is found based on the <b>CategoryID</b> value that is passed in to the request), and multiple <b>Category</b> containers are returned if the <b>IncludeSelector</b> field is included in the request, set to <code>ChildCategories</code>, and the category has child categories.
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
     * This container consists of high-level details of a category, including its category ID value, full category path (by name and by category ID), its level in the eBay site's category hierarchy, category ID of its parent category, and a boolean value to indicate if it is a listing (leaf) category.
     *  <br/><br/>
     *  At least one <b>Category</b> container is returned (as long as the category is found based on the <b>CategoryID</b> value that is passed in to the request), and multiple <b>Category</b> containers are returned if the <b>IncludeSelector</b> field is included in the request, set to <code>ChildCategories</code>, and the category has child categories.
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
     * This container consists of high-level details of a category, including its category ID value, full category path (by name and by category ID), its level in the eBay site's category hierarchy, category ID of its parent category, and a boolean value to indicate if it is a listing (leaf) category.
     *  <br/><br/>
     *  At least one <b>Category</b> container is returned (as long as the category is found based on the <b>CategoryID</b> value that is passed in to the request), and multiple <b>Category</b> containers are returned if the <b>IncludeSelector</b> field is included in the request, set to <code>ChildCategories</code>, and the category has child categories.
     *
     * @return \Nogrod\eBaySDK\Shopping\CategoryType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * This container consists of high-level details of a category, including its category ID value, full category path (by name and by category ID), its level in the eBay site's category hierarchy, category ID of its parent category, and a boolean value to indicate if it is a listing (leaf) category.
     *  <br/><br/>
     *  At least one <b>Category</b> container is returned (as long as the category is found based on the <b>CategoryID</b> value that is passed in to the request), and multiple <b>Category</b> containers are returned if the <b>IncludeSelector</b> field is included in the request, set to <code>ChildCategories</code>, and the category has child categories.
     *
     * @param \Nogrod\eBaySDK\Shopping\CategoryType[] $category
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
                return \Nogrod\eBaySDK\Shopping\CategoryType::fromKeyValue($v);
            }, $value));
        }
    }
}
