<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategoryInfoResponseType
 *
 * The base response type of the <b>GetCategoryInfo</b> call. As long as the specified eBay category is found, the <b>GetCategoryInfo</b> response includes at least one <b>Category</b> node with details about the specified category. If the <b>IncludeSelector</b> field is included and set to <code>ChildCategories</code>, a <b>Category</b> node is returned for each of the specified category's child categories.
 *  <br>
 *  <br>
 *  The response also includes the timestamp and version number of the last category hierarchy update for the eBay site, as well as the total number of eBay categories returned in the response.
 * XSD Type: GetCategoryInfoResponseType
 */
class GetCategoryInfoResponseType extends AbstractResponseType
{
    /**
     * This container consists of an array of one or more <b>Category</b> nodes. The first <b>Category</b> node in the response is always the category that was specified in the <b>CategoryID</b> field in the request, and additional <b>Category</b> nodes are returned if the <b>IncludeSelector</b> field is included in the request and set to <code>ChildCategories</code>.
     *
     * @var \Nogrod\eBaySDK\Shopping\CategoryType[] $categoryArray
     */
    private $categoryArray = null;

    /**
     * This value indicates the number of categories returned in the response. If child categories were not included in the request, this value should be '1', but if child categories were included in the request, this value is the cumulative amount of the specified category and all of its child categories.
     *
     * @var int $categoryCount
     */
    private $categoryCount = null;

    /**
     * This timestamp indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * This string indicates the version number of the current category hierarchy on the specified eBay site.
     *
     * @var string $categoryVersion
     */
    private $categoryVersion = null;

    /**
     * Adds as category
     *
     * This container consists of an array of one or more <b>Category</b> nodes. The first <b>Category</b> node in the response is always the category that was specified in the <b>CategoryID</b> field in the request, and additional <b>Category</b> nodes are returned if the <b>IncludeSelector</b> field is included in the request and set to <code>ChildCategories</code>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\CategoryType $category
     */
    public function addToCategoryArray(\Nogrod\eBaySDK\Shopping\CategoryType $category)
    {
        $this->categoryArray[] = $category;
        return $this;
    }

    /**
     * isset categoryArray
     *
     * This container consists of an array of one or more <b>Category</b> nodes. The first <b>Category</b> node in the response is always the category that was specified in the <b>CategoryID</b> field in the request, and additional <b>Category</b> nodes are returned if the <b>IncludeSelector</b> field is included in the request and set to <code>ChildCategories</code>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryArray($index)
    {
        return isset($this->categoryArray[$index]);
    }

    /**
     * unset categoryArray
     *
     * This container consists of an array of one or more <b>Category</b> nodes. The first <b>Category</b> node in the response is always the category that was specified in the <b>CategoryID</b> field in the request, and additional <b>Category</b> nodes are returned if the <b>IncludeSelector</b> field is included in the request and set to <code>ChildCategories</code>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryArray($index)
    {
        unset($this->categoryArray[$index]);
    }

    /**
     * Gets as categoryArray
     *
     * This container consists of an array of one or more <b>Category</b> nodes. The first <b>Category</b> node in the response is always the category that was specified in the <b>CategoryID</b> field in the request, and additional <b>Category</b> nodes are returned if the <b>IncludeSelector</b> field is included in the request and set to <code>ChildCategories</code>.
     *
     * @return \Nogrod\eBaySDK\Shopping\CategoryType[]
     */
    public function getCategoryArray()
    {
        return $this->categoryArray;
    }

    /**
     * Sets a new categoryArray
     *
     * This container consists of an array of one or more <b>Category</b> nodes. The first <b>Category</b> node in the response is always the category that was specified in the <b>CategoryID</b> field in the request, and additional <b>Category</b> nodes are returned if the <b>IncludeSelector</b> field is included in the request and set to <code>ChildCategories</code>.
     *
     * @param \Nogrod\eBaySDK\Shopping\CategoryType[] $categoryArray
     * @return self
     */
    public function setCategoryArray(array $categoryArray)
    {
        $this->categoryArray = $categoryArray;
        return $this;
    }

    /**
     * Gets as categoryCount
     *
     * This value indicates the number of categories returned in the response. If child categories were not included in the request, this value should be '1', but if child categories were included in the request, this value is the cumulative amount of the specified category and all of its child categories.
     *
     * @return int
     */
    public function getCategoryCount()
    {
        return $this->categoryCount;
    }

    /**
     * Sets a new categoryCount
     *
     * This value indicates the number of categories returned in the response. If child categories were not included in the request, this value should be '1', but if child categories were included in the request, this value is the cumulative amount of the specified category and all of its child categories.
     *
     * @param int $categoryCount
     * @return self
     */
    public function setCategoryCount($categoryCount)
    {
        $this->categoryCount = $categoryCount;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * This timestamp indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * This timestamp indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * Gets as categoryVersion
     *
     * This string indicates the version number of the current category hierarchy on the specified eBay site.
     *
     * @return string
     */
    public function getCategoryVersion()
    {
        return $this->categoryVersion;
    }

    /**
     * Sets a new categoryVersion
     *
     * This string indicates the version number of the current category hierarchy on the specified eBay site.
     *
     * @param string $categoryVersion
     * @return self
     */
    public function setCategoryVersion($categoryVersion)
    {
        $this->categoryVersion = $categoryVersion;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryArray();
        if (null !== $value && !empty($this->getCategoryArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryArray", array_map(function ($v) {
                return ["Category" => $v];
            }, $value));
        }
        $value = $this->getCategoryCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryCount", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
        }
        $value = $this->getCategoryVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryVersion", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryArray', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\CategoryType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryCount');
        if (null !== $value) {
            $this->setCategoryCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryVersion');
        if (null !== $value) {
            $this->setCategoryVersion($value);
        }
    }
}
