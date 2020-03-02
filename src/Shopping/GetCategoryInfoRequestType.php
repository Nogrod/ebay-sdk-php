<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategoryInfoRequestType
 *
 * This call is used to retrieve high-level data for a specified eBay category, including category name, Category ID value, and full category path (category names and category IDs). There is also an option to retrieve all of the specified category's children categories (one category level down in eBay categorical hierarchy).
 *  <br>
 *  <br>
 *  If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of <code>-1</code> would be passed into the <b>CategoryID</b> field in the request, and the user would also include the <b>IncludeSelector</b> field and set its value to <code>ChildCategories</code>
 * XSD Type: GetCategoryInfoRequestType
 */
class GetCategoryInfoRequestType extends AbstractRequestType
{

    /**
     * In this required field, the user specifies the unique identifier of an eBay category. Detailed information is returned for this category.
     *  <br>
     *  <br>
     *  If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of <code>-1</code> is passed into this field, and the user also includes the <b>IncludeSelector</b> field and sets its value to <code>ChildCategories</code>.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This field is included and its value is set to <code>ChildCategories</code> if the user wishes to retrieve all of the specified category's children categories (one category level down in eBay categorical hierarchy).
     *  <br>
     *  <br>
     *  If the specified category is a leaf category (and has no children), this filter has no effect on the output.
     *
     * @var string $includeSelector
     */
    private $includeSelector = null;

    /**
     * Gets as categoryID
     *
     * In this required field, the user specifies the unique identifier of an eBay category. Detailed information is returned for this category.
     *  <br>
     *  <br>
     *  If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of <code>-1</code> is passed into this field, and the user also includes the <b>IncludeSelector</b> field and sets its value to <code>ChildCategories</code>.
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
     * In this required field, the user specifies the unique identifier of an eBay category. Detailed information is returned for this category.
     *  <br>
     *  <br>
     *  If a user wanted to see all Level 1 (L1) categories for an eBay site, a value of <code>-1</code> is passed into this field, and the user also includes the <b>IncludeSelector</b> field and sets its value to <code>ChildCategories</code>.
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
     * Gets as includeSelector
     *
     * This field is included and its value is set to <code>ChildCategories</code> if the user wishes to retrieve all of the specified category's children categories (one category level down in eBay categorical hierarchy).
     *  <br>
     *  <br>
     *  If the specified category is a leaf category (and has no children), this filter has no effect on the output.
     *
     * @return string
     */
    public function getIncludeSelector()
    {
        return $this->includeSelector;
    }

    /**
     * Sets a new includeSelector
     *
     * This field is included and its value is set to <code>ChildCategories</code> if the user wishes to retrieve all of the specified category's children categories (one category level down in eBay categorical hierarchy).
     *  <br>
     *  <br>
     *  If the specified category is a leaf category (and has no children), this filter has no effect on the output.
     *
     * @param string $includeSelector
     * @return self
     */
    public function setIncludeSelector($includeSelector)
    {
        $this->includeSelector = $includeSelector;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getIncludeSelector();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeSelector", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeSelector');
        if (null !== $value) {
            $this->setIncludeSelector($value);
        }
    }
}
