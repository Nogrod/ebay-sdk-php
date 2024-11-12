<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategoriesRequestType
 *
 * Retrieves the latest eBay category hierarchy for a given eBay site.
 *  Information returned for each category includes the category name
 *  and the unique ID for the category (unique within the eBay site for which
 *  categories are retrieved). A category ID is a required input when you list most items.
 * XSD Type: GetCategoriesRequestType
 */
class GetCategoriesRequestType extends AbstractRequestType
{
    /**
     * This field is used if the user wants to retrieve category data for another eBay site (other than the one specified in the <code>X-EBAY-API-SITEID</code> request header).
     *  <br>
     *  <br>
     *  If this field is omitted, the categories from the site specified in the required <code>X-EBAY-API-SITEID</code> request header are returned. If this field is included, the site specified in this field overrides the site ID in the request header.
     *
     * @var string $categorySiteID
     */
    private $categorySiteID = null;

    /**
     * This field is used if the user wishes to retrieve category hierarchy information on one or more specific eBay categories, and optionally, one or more levels of each category's children (if a category has one or more levels of children). For example, if you wanted to view the entire category hierarchy under the <em>Home & Garden</em> L1 category, you would include this field and set its value to <code>11700</code>. As long as the <b>LevelLimit</b> field is omitted, all of <em>Home & Garden</em>'s child categories are returned. If you only wanted to see the next level (L2s) of <em>Home & Garden</em> categories, you would include the <b>LevelLimit</b> field and set its value to <code>2</code>, allowing the L1 category (<em>Home & Garden</em>) and all of its L2 categories to appear in the response.
     *  <br>
     *  <br>
     *  If you wanted to see all of the Category IDs for the eBay site's L1 categories, you could omit the <b>CategoryParent</b> field but include the <b>LevelLimit</b> field and set its value to <code>1</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Numerous Category IDs may be specified under multiple <b>CategoryParent</b> fields in a <b>GetCategories</b> request, but if multiple <b>CategoryParent</b> fields are used, the specified Category IDs should all be at the same level (L1, L2, L3, etc.).
     *  </span>
     *
     * @var string[] $categoryParent
     */
    private $categoryParent = [

    ];

    /**
     * This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, every eBay category from the root on down will be returned, or, if a <b>CategoryParent</b> category is specified, the specified category and all of its children (down to the leaf categories) are returned.
     *  <br>
     *  <br>
     *  If the <b>CategoryParent</b> is not used, but the <b>LevelLimit</b> field is used and set to <code>1</code>, only the top-level categories (also known as L1 categories) are returned in the response.
     *
     * @var int $levelLimit
     */
    private $levelLimit = null;

    /**
     * This flag controls whether all eBay categories (that satisfy input filters) are returned, or only leaf categories (you can only list items in leaf categories) are returned. The default value is 'true', so if this field is omitted, all eBay categories will be returned. If you only want to retrieve leaf categories, include this flag and set it to <code>false</code>.
     *  <br>
     *
     * @var bool $viewAllNodes
     */
    private $viewAllNodes = null;

    /**
     * Gets as categorySiteID
     *
     * This field is used if the user wants to retrieve category data for another eBay site (other than the one specified in the <code>X-EBAY-API-SITEID</code> request header).
     *  <br>
     *  <br>
     *  If this field is omitted, the categories from the site specified in the required <code>X-EBAY-API-SITEID</code> request header are returned. If this field is included, the site specified in this field overrides the site ID in the request header.
     *
     * @return string
     */
    public function getCategorySiteID()
    {
        return $this->categorySiteID;
    }

    /**
     * Sets a new categorySiteID
     *
     * This field is used if the user wants to retrieve category data for another eBay site (other than the one specified in the <code>X-EBAY-API-SITEID</code> request header).
     *  <br>
     *  <br>
     *  If this field is omitted, the categories from the site specified in the required <code>X-EBAY-API-SITEID</code> request header are returned. If this field is included, the site specified in this field overrides the site ID in the request header.
     *
     * @param string $categorySiteID
     * @return self
     */
    public function setCategorySiteID($categorySiteID)
    {
        $this->categorySiteID = $categorySiteID;
        return $this;
    }

    /**
     * Adds as categoryParent
     *
     * This field is used if the user wishes to retrieve category hierarchy information on one or more specific eBay categories, and optionally, one or more levels of each category's children (if a category has one or more levels of children). For example, if you wanted to view the entire category hierarchy under the <em>Home & Garden</em> L1 category, you would include this field and set its value to <code>11700</code>. As long as the <b>LevelLimit</b> field is omitted, all of <em>Home & Garden</em>'s child categories are returned. If you only wanted to see the next level (L2s) of <em>Home & Garden</em> categories, you would include the <b>LevelLimit</b> field and set its value to <code>2</code>, allowing the L1 category (<em>Home & Garden</em>) and all of its L2 categories to appear in the response.
     *  <br>
     *  <br>
     *  If you wanted to see all of the Category IDs for the eBay site's L1 categories, you could omit the <b>CategoryParent</b> field but include the <b>LevelLimit</b> field and set its value to <code>1</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Numerous Category IDs may be specified under multiple <b>CategoryParent</b> fields in a <b>GetCategories</b> request, but if multiple <b>CategoryParent</b> fields are used, the specified Category IDs should all be at the same level (L1, L2, L3, etc.).
     *  </span>
     *
     * @return self
     * @param string $categoryParent
     */
    public function addToCategoryParent($categoryParent)
    {
        $this->categoryParent[] = $categoryParent;
        return $this;
    }

    /**
     * isset categoryParent
     *
     * This field is used if the user wishes to retrieve category hierarchy information on one or more specific eBay categories, and optionally, one or more levels of each category's children (if a category has one or more levels of children). For example, if you wanted to view the entire category hierarchy under the <em>Home & Garden</em> L1 category, you would include this field and set its value to <code>11700</code>. As long as the <b>LevelLimit</b> field is omitted, all of <em>Home & Garden</em>'s child categories are returned. If you only wanted to see the next level (L2s) of <em>Home & Garden</em> categories, you would include the <b>LevelLimit</b> field and set its value to <code>2</code>, allowing the L1 category (<em>Home & Garden</em>) and all of its L2 categories to appear in the response.
     *  <br>
     *  <br>
     *  If you wanted to see all of the Category IDs for the eBay site's L1 categories, you could omit the <b>CategoryParent</b> field but include the <b>LevelLimit</b> field and set its value to <code>1</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Numerous Category IDs may be specified under multiple <b>CategoryParent</b> fields in a <b>GetCategories</b> request, but if multiple <b>CategoryParent</b> fields are used, the specified Category IDs should all be at the same level (L1, L2, L3, etc.).
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryParent($index)
    {
        return isset($this->categoryParent[$index]);
    }

    /**
     * unset categoryParent
     *
     * This field is used if the user wishes to retrieve category hierarchy information on one or more specific eBay categories, and optionally, one or more levels of each category's children (if a category has one or more levels of children). For example, if you wanted to view the entire category hierarchy under the <em>Home & Garden</em> L1 category, you would include this field and set its value to <code>11700</code>. As long as the <b>LevelLimit</b> field is omitted, all of <em>Home & Garden</em>'s child categories are returned. If you only wanted to see the next level (L2s) of <em>Home & Garden</em> categories, you would include the <b>LevelLimit</b> field and set its value to <code>2</code>, allowing the L1 category (<em>Home & Garden</em>) and all of its L2 categories to appear in the response.
     *  <br>
     *  <br>
     *  If you wanted to see all of the Category IDs for the eBay site's L1 categories, you could omit the <b>CategoryParent</b> field but include the <b>LevelLimit</b> field and set its value to <code>1</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Numerous Category IDs may be specified under multiple <b>CategoryParent</b> fields in a <b>GetCategories</b> request, but if multiple <b>CategoryParent</b> fields are used, the specified Category IDs should all be at the same level (L1, L2, L3, etc.).
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryParent($index)
    {
        unset($this->categoryParent[$index]);
    }

    /**
     * Gets as categoryParent
     *
     * This field is used if the user wishes to retrieve category hierarchy information on one or more specific eBay categories, and optionally, one or more levels of each category's children (if a category has one or more levels of children). For example, if you wanted to view the entire category hierarchy under the <em>Home & Garden</em> L1 category, you would include this field and set its value to <code>11700</code>. As long as the <b>LevelLimit</b> field is omitted, all of <em>Home & Garden</em>'s child categories are returned. If you only wanted to see the next level (L2s) of <em>Home & Garden</em> categories, you would include the <b>LevelLimit</b> field and set its value to <code>2</code>, allowing the L1 category (<em>Home & Garden</em>) and all of its L2 categories to appear in the response.
     *  <br>
     *  <br>
     *  If you wanted to see all of the Category IDs for the eBay site's L1 categories, you could omit the <b>CategoryParent</b> field but include the <b>LevelLimit</b> field and set its value to <code>1</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Numerous Category IDs may be specified under multiple <b>CategoryParent</b> fields in a <b>GetCategories</b> request, but if multiple <b>CategoryParent</b> fields are used, the specified Category IDs should all be at the same level (L1, L2, L3, etc.).
     *  </span>
     *
     * @return string[]
     */
    public function getCategoryParent()
    {
        return $this->categoryParent;
    }

    /**
     * Sets a new categoryParent
     *
     * This field is used if the user wishes to retrieve category hierarchy information on one or more specific eBay categories, and optionally, one or more levels of each category's children (if a category has one or more levels of children). For example, if you wanted to view the entire category hierarchy under the <em>Home & Garden</em> L1 category, you would include this field and set its value to <code>11700</code>. As long as the <b>LevelLimit</b> field is omitted, all of <em>Home & Garden</em>'s child categories are returned. If you only wanted to see the next level (L2s) of <em>Home & Garden</em> categories, you would include the <b>LevelLimit</b> field and set its value to <code>2</code>, allowing the L1 category (<em>Home & Garden</em>) and all of its L2 categories to appear in the response.
     *  <br>
     *  <br>
     *  If you wanted to see all of the Category IDs for the eBay site's L1 categories, you could omit the <b>CategoryParent</b> field but include the <b>LevelLimit</b> field and set its value to <code>1</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Numerous Category IDs may be specified under multiple <b>CategoryParent</b> fields in a <b>GetCategories</b> request, but if multiple <b>CategoryParent</b> fields are used, the specified Category IDs should all be at the same level (L1, L2, L3, etc.).
     *  </span>
     *
     * @param string[] $categoryParent
     * @return self
     */
    public function setCategoryParent(array $categoryParent)
    {
        $this->categoryParent = $categoryParent;
        return $this;
    }

    /**
     * Gets as levelLimit
     *
     * This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, every eBay category from the root on down will be returned, or, if a <b>CategoryParent</b> category is specified, the specified category and all of its children (down to the leaf categories) are returned.
     *  <br>
     *  <br>
     *  If the <b>CategoryParent</b> is not used, but the <b>LevelLimit</b> field is used and set to <code>1</code>, only the top-level categories (also known as L1 categories) are returned in the response.
     *
     * @return int
     */
    public function getLevelLimit()
    {
        return $this->levelLimit;
    }

    /**
     * Sets a new levelLimit
     *
     * This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, every eBay category from the root on down will be returned, or, if a <b>CategoryParent</b> category is specified, the specified category and all of its children (down to the leaf categories) are returned.
     *  <br>
     *  <br>
     *  If the <b>CategoryParent</b> is not used, but the <b>LevelLimit</b> field is used and set to <code>1</code>, only the top-level categories (also known as L1 categories) are returned in the response.
     *
     * @param int $levelLimit
     * @return self
     */
    public function setLevelLimit($levelLimit)
    {
        $this->levelLimit = $levelLimit;
        return $this;
    }

    /**
     * Gets as viewAllNodes
     *
     * This flag controls whether all eBay categories (that satisfy input filters) are returned, or only leaf categories (you can only list items in leaf categories) are returned. The default value is 'true', so if this field is omitted, all eBay categories will be returned. If you only want to retrieve leaf categories, include this flag and set it to <code>false</code>.
     *  <br>
     *
     * @return bool
     */
    public function getViewAllNodes()
    {
        return $this->viewAllNodes;
    }

    /**
     * Sets a new viewAllNodes
     *
     * This flag controls whether all eBay categories (that satisfy input filters) are returned, or only leaf categories (you can only list items in leaf categories) are returned. The default value is 'true', so if this field is omitted, all eBay categories will be returned. If you only want to retrieve leaf categories, include this flag and set it to <code>false</code>.
     *  <br>
     *
     * @param bool $viewAllNodes
     * @return self
     */
    public function setViewAllNodes($viewAllNodes)
    {
        $this->viewAllNodes = $viewAllNodes;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategorySiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategorySiteID", $value);
        }
        $value = $this->getCategoryParent();
        if (null !== $value && [] !== $this->getCategoryParent()) {
            $writer->write(array_map(function ($v) {return ["CategoryParent" => $v];}, $value));
        }
        $value = $this->getLevelLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LevelLimit", $value);
        }
        $value = $this->getViewAllNodes();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ViewAllNodes", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategorySiteID');
        if (null !== $value) {
            $this->setCategorySiteID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryParent', true);
        if (null !== $value) {
            $this->setCategoryParent($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LevelLimit');
        if (null !== $value) {
            $this->setLevelLimit($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ViewAllNodes');
        if (null !== $value) {
            $this->setViewAllNodes(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
