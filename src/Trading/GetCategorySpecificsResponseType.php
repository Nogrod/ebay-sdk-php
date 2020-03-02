<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategorySpecificsResponseType
 *
 * This is the base response type for the <b>GetCategorySpecifics</b> call. This call retrieves recommended Item Specifics names and values for one or multiple eBay Categories.
 * XSD Type: GetCategorySpecificsResponseType
 */
class GetCategorySpecificsResponseType extends AbstractResponseType
{

    /**
     * This container provide details about relevant Item Specifics for the specified category. Required Item Specifics are generally returned at the top of the response payload, followed by the other most common/popular Item Specifics for the category. If an Item Specific is required, a <b>MinValues</b> field will be returned with a value of <code>1</code>, and the corresponding <b>UsageConstraint</b> field will show a value of <code>Required</code>. Optional Item Specifics are returned after required and recommended Item Specifics, but sellers should still provide any optional Item Specific name-value pairs if known and relevant for the product.
     *  <br>
     *  <br>
     *  As mentioned above, the most relevant Item Specifics are returned first, and similarly, if an Item Specific
     *  has multiple suggested values, these values are sorted according to popularity (most popular to less popular/common).<br>
     *  <br>
     *  This node returns empty (or it's not returned) for a category if
     *  there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet,
     *  or a duplicate category that was already returned).
     *  If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no
     *  matching values are found for the name, eBay returns the name
     *  with no values (even if the name is not recommended).<br>
     *  <br>
     *  If <b>GetCategoryFeatures</b> indicates that Item Specifics are
     *  enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't
     *  return any recommendations for that category, the seller can still
     *  specify their own Item Specifics in that category.
     *
     * @var \Nogrod\eBaySDK\Trading\RecommendationsType[] $recommendations
     */
    private $recommendations = [
        
    ];

    /**
     * A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call downloads a .zip file as an attachment.)
     *
     * @var string $taskReferenceID
     */
    private $taskReferenceID = null;

    /**
     * A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call downloads a .zip file as an attachment.)
     *
     * @var string $fileReferenceID
     */
    private $fileReferenceID = null;

    /**
     * Adds as recommendations
     *
     * This container provide details about relevant Item Specifics for the specified category. Required Item Specifics are generally returned at the top of the response payload, followed by the other most common/popular Item Specifics for the category. If an Item Specific is required, a <b>MinValues</b> field will be returned with a value of <code>1</code>, and the corresponding <b>UsageConstraint</b> field will show a value of <code>Required</code>. Optional Item Specifics are returned after required and recommended Item Specifics, but sellers should still provide any optional Item Specific name-value pairs if known and relevant for the product.
     *  <br>
     *  <br>
     *  As mentioned above, the most relevant Item Specifics are returned first, and similarly, if an Item Specific
     *  has multiple suggested values, these values are sorted according to popularity (most popular to less popular/common).<br>
     *  <br>
     *  This node returns empty (or it's not returned) for a category if
     *  there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet,
     *  or a duplicate category that was already returned).
     *  If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no
     *  matching values are found for the name, eBay returns the name
     *  with no values (even if the name is not recommended).<br>
     *  <br>
     *  If <b>GetCategoryFeatures</b> indicates that Item Specifics are
     *  enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't
     *  return any recommendations for that category, the seller can still
     *  specify their own Item Specifics in that category.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RecommendationsType $recommendations
     */
    public function addToRecommendations(\Nogrod\eBaySDK\Trading\RecommendationsType $recommendations)
    {
        $this->recommendations[] = $recommendations;
        return $this;
    }

    /**
     * isset recommendations
     *
     * This container provide details about relevant Item Specifics for the specified category. Required Item Specifics are generally returned at the top of the response payload, followed by the other most common/popular Item Specifics for the category. If an Item Specific is required, a <b>MinValues</b> field will be returned with a value of <code>1</code>, and the corresponding <b>UsageConstraint</b> field will show a value of <code>Required</code>. Optional Item Specifics are returned after required and recommended Item Specifics, but sellers should still provide any optional Item Specific name-value pairs if known and relevant for the product.
     *  <br>
     *  <br>
     *  As mentioned above, the most relevant Item Specifics are returned first, and similarly, if an Item Specific
     *  has multiple suggested values, these values are sorted according to popularity (most popular to less popular/common).<br>
     *  <br>
     *  This node returns empty (or it's not returned) for a category if
     *  there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet,
     *  or a duplicate category that was already returned).
     *  If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no
     *  matching values are found for the name, eBay returns the name
     *  with no values (even if the name is not recommended).<br>
     *  <br>
     *  If <b>GetCategoryFeatures</b> indicates that Item Specifics are
     *  enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't
     *  return any recommendations for that category, the seller can still
     *  specify their own Item Specifics in that category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecommendations($index)
    {
        return isset($this->recommendations[$index]);
    }

    /**
     * unset recommendations
     *
     * This container provide details about relevant Item Specifics for the specified category. Required Item Specifics are generally returned at the top of the response payload, followed by the other most common/popular Item Specifics for the category. If an Item Specific is required, a <b>MinValues</b> field will be returned with a value of <code>1</code>, and the corresponding <b>UsageConstraint</b> field will show a value of <code>Required</code>. Optional Item Specifics are returned after required and recommended Item Specifics, but sellers should still provide any optional Item Specific name-value pairs if known and relevant for the product.
     *  <br>
     *  <br>
     *  As mentioned above, the most relevant Item Specifics are returned first, and similarly, if an Item Specific
     *  has multiple suggested values, these values are sorted according to popularity (most popular to less popular/common).<br>
     *  <br>
     *  This node returns empty (or it's not returned) for a category if
     *  there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet,
     *  or a duplicate category that was already returned).
     *  If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no
     *  matching values are found for the name, eBay returns the name
     *  with no values (even if the name is not recommended).<br>
     *  <br>
     *  If <b>GetCategoryFeatures</b> indicates that Item Specifics are
     *  enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't
     *  return any recommendations for that category, the seller can still
     *  specify their own Item Specifics in that category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecommendations($index)
    {
        unset($this->recommendations[$index]);
    }

    /**
     * Gets as recommendations
     *
     * This container provide details about relevant Item Specifics for the specified category. Required Item Specifics are generally returned at the top of the response payload, followed by the other most common/popular Item Specifics for the category. If an Item Specific is required, a <b>MinValues</b> field will be returned with a value of <code>1</code>, and the corresponding <b>UsageConstraint</b> field will show a value of <code>Required</code>. Optional Item Specifics are returned after required and recommended Item Specifics, but sellers should still provide any optional Item Specific name-value pairs if known and relevant for the product.
     *  <br>
     *  <br>
     *  As mentioned above, the most relevant Item Specifics are returned first, and similarly, if an Item Specific
     *  has multiple suggested values, these values are sorted according to popularity (most popular to less popular/common).<br>
     *  <br>
     *  This node returns empty (or it's not returned) for a category if
     *  there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet,
     *  or a duplicate category that was already returned).
     *  If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no
     *  matching values are found for the name, eBay returns the name
     *  with no values (even if the name is not recommended).<br>
     *  <br>
     *  If <b>GetCategoryFeatures</b> indicates that Item Specifics are
     *  enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't
     *  return any recommendations for that category, the seller can still
     *  specify their own Item Specifics in that category.
     *
     * @return \Nogrod\eBaySDK\Trading\RecommendationsType[]
     */
    public function getRecommendations()
    {
        return $this->recommendations;
    }

    /**
     * Sets a new recommendations
     *
     * This container provide details about relevant Item Specifics for the specified category. Required Item Specifics are generally returned at the top of the response payload, followed by the other most common/popular Item Specifics for the category. If an Item Specific is required, a <b>MinValues</b> field will be returned with a value of <code>1</code>, and the corresponding <b>UsageConstraint</b> field will show a value of <code>Required</code>. Optional Item Specifics are returned after required and recommended Item Specifics, but sellers should still provide any optional Item Specific name-value pairs if known and relevant for the product.
     *  <br>
     *  <br>
     *  As mentioned above, the most relevant Item Specifics are returned first, and similarly, if an Item Specific
     *  has multiple suggested values, these values are sorted according to popularity (most popular to less popular/common).<br>
     *  <br>
     *  This node returns empty (or it's not returned) for a category if
     *  there is no applicable data (such as when you request a parent category, a category that has no popular Item Specifics yet,
     *  or a duplicate category that was already returned).
     *  If you pass in the <b>CategoryID</b> and <b>Name</b> fields together, but no
     *  matching values are found for the name, eBay returns the name
     *  with no values (even if the name is not recommended).<br>
     *  <br>
     *  If <b>GetCategoryFeatures</b> indicates that Item Specifics are
     *  enabled for a leaf category, but <b>GetCategorySpecifics</b> doesn't
     *  return any recommendations for that category, the seller can still
     *  specify their own Item Specifics in that category.
     *
     * @param \Nogrod\eBaySDK\Trading\RecommendationsType[] $recommendations
     * @return self
     */
    public function setRecommendations(array $recommendations)
    {
        $this->recommendations = $recommendations;
        return $this;
    }

    /**
     * Gets as taskReferenceID
     *
     * A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call downloads a .zip file as an attachment.)
     *
     * @return string
     */
    public function getTaskReferenceID()
    {
        return $this->taskReferenceID;
    }

    /**
     * Sets a new taskReferenceID
     *
     * A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call downloads a .zip file as an attachment.)
     *
     * @param string $taskReferenceID
     * @return self
     */
    public function setTaskReferenceID($taskReferenceID)
    {
        $this->taskReferenceID = $taskReferenceID;
        return $this;
    }

    /**
     * Gets as fileReferenceID
     *
     * A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call downloads a .zip file as an attachment.)
     *
     * @return string
     */
    public function getFileReferenceID()
    {
        return $this->fileReferenceID;
    }

    /**
     * Sets a new fileReferenceID
     *
     * A <b>TaskReferenceID</b> and a <b>FileReferenceID</b> value are returned if the <b>CategorySpecificsFileInfo</b> field is included in the call request and set to <code>true</code>. These values will be used as inputs in the <b>downloadFile</b> call of the File Transfer API. That API lets you retrieve a single (bulk) <b>GetCategorySpecifics</b> response with all the Item Specifics recommendations available for the requested site ID. (The <b>downloadFile</b> call downloads a .zip file as an attachment.)
     *
     * @param string $fileReferenceID
     * @return self
     */
    public function setFileReferenceID($fileReferenceID)
    {
        $this->fileReferenceID = $fileReferenceID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getRecommendations();
        if (null !== $value && !empty($this->getRecommendations())) {
            $writer->write(array_map(function ($v) {
                return ["Recommendations" => $v];
            }, $value));
        }
        $value = $this->getTaskReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TaskReferenceID", $value);
        }
        $value = $this->getFileReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FileReferenceID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Recommendations', true);
        if (null !== $value && !empty($value)) {
            $this->setRecommendations(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RecommendationsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TaskReferenceID');
        if (null !== $value) {
            $this->setTaskReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FileReferenceID');
        if (null !== $value) {
            $this->setFileReferenceID($value);
        }
    }
}
