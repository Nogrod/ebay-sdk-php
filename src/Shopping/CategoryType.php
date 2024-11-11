<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryType
 *
 * This type is used by each eBay category that is returned in the response of the <b>GetCategoryInfo</b> call. This type is used by the <b>Category</b> container, and consists of high-level details of a category, including its category ID value and information on its parent category, child categories, and its level in the eBay site's category hierarchy.
 * XSD Type: CategoryType
 */
class CategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The numeric identifier of a category on an eBay marketplace. For the root category of an eBay marketplace, the value will be <code>-1</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * The level where the category fits in the eBay marketplace's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category. For the root category of an eBay marketplace, the value will be <code>0</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @var int $categoryLevel
     */
    private $categoryLevel = null;

    /**
     * The display name of the category as it would appear on
     *  the eBay marketplace. For the root category of an eBay marketplace, the value will be <code>Root</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @var string $categoryName
     */
    private $categoryName = null;

    /**
     * The unique identifier of the category's parent category. Note that <code>-1</code> is returned for Level 1 categories, and <code>0</code> is returned for the root category of an eBay marketplace.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @var string $categoryParentID
     */
    private $categoryParentID = null;

    /**
     * This field is deprecated. Instead, the name of the category's parent category can be derived from the <b>CategoryNamePath</b> field
     *
     * @var string $categoryParentName
     */
    private $categoryParentName = null;

    /**
     * This field is deprecated.
     *
     * @var int $itemCount
     */
    private $itemCount = null;

    /**
     * The fully-qualified category name path for the eBay category, including the display name for the category and the display name for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay category name is separated with a colon (:). An example is shown below:
     *  <br>
     *  <br>
     *  <code>
     *  &lt;CategoryNamePath&gt;Clothing, Shoes & Accessories:Men's Clothing:Shirts:T-Shirts&lt;/CategoryNamePath&gt;
     *  </code>
     *  <br>
     *  <br>
     *  This field is always returned for any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     *
     * @var string $categoryNamePath
     */
    private $categoryNamePath = null;

    /**
     * The eBay category ID path for the eBay category, including the category ID for the corresponding category and the category IDs for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay category ID is separated with a colon (:). An example is shown below:
     *  <br>
     *  <br>
     *  <code>
     *  &lt;CategoryIDPath&gt;11450:1059:185100:15687&lt;/CategoryIDPath&gt;
     *  </code>
     *  <br>
     *  <br>
     *  This field is always returned for any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     *
     * @var string $categoryIDPath
     */
    private $categoryIDPath = null;

    /**
     * This boolean field indicates if the corresponding category is a leaf category. eBay listings can only be created in leaf categories. If the value is <code>true</code>, the eBay category is a leaf category.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @var bool $leafCategory
     */
    private $leafCategory = null;

    /**
     * Gets as categoryID
     *
     * The numeric identifier of a category on an eBay marketplace. For the root category of an eBay marketplace, the value will be <code>-1</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * The numeric identifier of a category on an eBay marketplace. For the root category of an eBay marketplace, the value will be <code>-1</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as categoryLevel
     *
     * The level where the category fits in the eBay marketplace's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category. For the root category of an eBay marketplace, the value will be <code>0</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @return int
     */
    public function getCategoryLevel()
    {
        return $this->categoryLevel;
    }

    /**
     * Sets a new categoryLevel
     *
     * The level where the category fits in the eBay marketplace's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category. For the root category of an eBay marketplace, the value will be <code>0</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @param int $categoryLevel
     * @return self
     */
    public function setCategoryLevel($categoryLevel)
    {
        $this->categoryLevel = $categoryLevel;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * The display name of the category as it would appear on
     *  the eBay marketplace. For the root category of an eBay marketplace, the value will be <code>Root</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * The display name of the category as it would appear on
     *  the eBay marketplace. For the root category of an eBay marketplace, the value will be <code>Root</code>.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Gets as categoryParentID
     *
     * The unique identifier of the category's parent category. Note that <code>-1</code> is returned for Level 1 categories, and <code>0</code> is returned for the root category of an eBay marketplace.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @return string
     */
    public function getCategoryParentID()
    {
        return $this->categoryParentID;
    }

    /**
     * Sets a new categoryParentID
     *
     * The unique identifier of the category's parent category. Note that <code>-1</code> is returned for Level 1 categories, and <code>0</code> is returned for the root category of an eBay marketplace.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @param string $categoryParentID
     * @return self
     */
    public function setCategoryParentID($categoryParentID)
    {
        $this->categoryParentID = $categoryParentID;
        return $this;
    }

    /**
     * Gets as categoryParentName
     *
     * This field is deprecated. Instead, the name of the category's parent category can be derived from the <b>CategoryNamePath</b> field
     *
     * @return string
     */
    public function getCategoryParentName()
    {
        return $this->categoryParentName;
    }

    /**
     * Sets a new categoryParentName
     *
     * This field is deprecated. Instead, the name of the category's parent category can be derived from the <b>CategoryNamePath</b> field
     *
     * @param string $categoryParentName
     * @return self
     */
    public function setCategoryParentName($categoryParentName)
    {
        $this->categoryParentName = $categoryParentName;
        return $this;
    }

    /**
     * Gets as itemCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * Sets a new itemCount
     *
     * This field is deprecated.
     *
     * @param int $itemCount
     * @return self
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    /**
     * Gets as categoryNamePath
     *
     * The fully-qualified category name path for the eBay category, including the display name for the category and the display name for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay category name is separated with a colon (:). An example is shown below:
     *  <br>
     *  <br>
     *  <code>
     *  &lt;CategoryNamePath&gt;Clothing, Shoes & Accessories:Men's Clothing:Shirts:T-Shirts&lt;/CategoryNamePath&gt;
     *  </code>
     *  <br>
     *  <br>
     *  This field is always returned for any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     *
     * @return string
     */
    public function getCategoryNamePath()
    {
        return $this->categoryNamePath;
    }

    /**
     * Sets a new categoryNamePath
     *
     * The fully-qualified category name path for the eBay category, including the display name for the category and the display name for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay category name is separated with a colon (:). An example is shown below:
     *  <br>
     *  <br>
     *  <code>
     *  &lt;CategoryNamePath&gt;Clothing, Shoes & Accessories:Men's Clothing:Shirts:T-Shirts&lt;/CategoryNamePath&gt;
     *  </code>
     *  <br>
     *  <br>
     *  This field is always returned for any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     *
     * @param string $categoryNamePath
     * @return self
     */
    public function setCategoryNamePath($categoryNamePath)
    {
        $this->categoryNamePath = $categoryNamePath;
        return $this;
    }

    /**
     * Gets as categoryIDPath
     *
     * The eBay category ID path for the eBay category, including the category ID for the corresponding category and the category IDs for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay category ID is separated with a colon (:). An example is shown below:
     *  <br>
     *  <br>
     *  <code>
     *  &lt;CategoryIDPath&gt;11450:1059:185100:15687&lt;/CategoryIDPath&gt;
     *  </code>
     *  <br>
     *  <br>
     *  This field is always returned for any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     *
     * @return string
     */
    public function getCategoryIDPath()
    {
        return $this->categoryIDPath;
    }

    /**
     * Sets a new categoryIDPath
     *
     * The eBay category ID path for the eBay category, including the category ID for the corresponding category and the category IDs for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay category ID is separated with a colon (:). An example is shown below:
     *  <br>
     *  <br>
     *  <code>
     *  &lt;CategoryIDPath&gt;11450:1059:185100:15687&lt;/CategoryIDPath&gt;
     *  </code>
     *  <br>
     *  <br>
     *  This field is always returned for any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     *
     * @param string $categoryIDPath
     * @return self
     */
    public function setCategoryIDPath($categoryIDPath)
    {
        $this->categoryIDPath = $categoryIDPath;
        return $this;
    }

    /**
     * Gets as leafCategory
     *
     * This boolean field indicates if the corresponding category is a leaf category. eBay listings can only be created in leaf categories. If the value is <code>true</code>, the eBay category is a leaf category.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @return bool
     */
    public function getLeafCategory()
    {
        return $this->leafCategory;
    }

    /**
     * Sets a new leafCategory
     *
     * This boolean field indicates if the corresponding category is a leaf category. eBay listings can only be created in leaf categories. If the value is <code>true</code>, the eBay category is a leaf category.
     *  <br>
     *  <br>
     *  This field is always returned with each <b>Category</b> container.
     *
     * @param bool $leafCategory
     * @return self
     */
    public function setLeafCategory($leafCategory)
    {
        $this->leafCategory = $leafCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getCategoryLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryLevel", $value);
        }
        $value = $this->getCategoryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryName", $value);
        }
        $value = $this->getCategoryParentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryParentID", $value);
        }
        $value = $this->getCategoryParentName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryParentName", $value);
        }
        $value = $this->getItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCount", $value);
        }
        $value = $this->getCategoryNamePath();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryNamePath", $value);
        }
        $value = $this->getCategoryIDPath();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryIDPath", $value);
        }
        $value = $this->getLeafCategory();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LeafCategory", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryLevel');
        if (null !== $value) {
            $this->setCategoryLevel($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryName');
        if (null !== $value) {
            $this->setCategoryName($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryParentID');
        if (null !== $value) {
            $this->setCategoryParentID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryParentName');
        if (null !== $value) {
            $this->setCategoryParentName($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCount');
        if (null !== $value) {
            $this->setItemCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryNamePath');
        if (null !== $value) {
            $this->setCategoryNamePath($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryIDPath');
        if (null !== $value) {
            $this->setCategoryIDPath($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LeafCategory');
        if (null !== $value) {
            $this->setLeafCategory(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
