<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategorySpecificsRequestType
 *
 * This is the base request type for the <b>GetCategorySpecifics</b> call. This call is used to retrieve required, recommended, and optional Item Specifics names and values for one or multiple eBay Categories.
 * XSD Type: GetCategorySpecificsRequestType
 */
class GetCategorySpecificsRequestType extends AbstractRequestType
{

    /**
     * A unique identifer for an eBay category. Recommended Item Specifics names and values will be retrieved for each eBay category that is specified. Up to 100 <b>CategoryID</b> values may be specified in one call. Although Item Specifics metadata can be retrieved for any eBay category at any level in the hierarchy, it is recommended that users specify leaf category IDs, especially if they are using <b>GetCategorySpecifics</b> to retrieve the Item Specifics applicable to the listing categories they use.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @var string[] $categoryID
     */
    private $categoryID = [
        
    ];

    /**
     * This dateTime filter can be included and used if the user only wants to check for recently-added Item Specifics names and values for one or more categories. If this filter is used, the Item Specifics recommendation engine will only check for Item Specifics names and values that have been added/changed since the date that was passed in to this field. If this field is used, the call will not return any Item Specifics data; it will only return the <b>Recommendations.Updated</b> boolean field for each specified eBay category. A <code>true</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have changed since the timestamp passed in the <b>LastUpdateTime</b> field, and a <code>false</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have not changed since the timestamp passed in the <b>LastUpdateTime</b> field.
     *  <br><br>
     *  Typically, you will pass in the timestamp value that was returned the last time you refreshed the list of Item Specifics names and values for the same categories. If the <b>Recommendations.Updated</b> flag returns <code>true</code> for any eBay categories in the response, you will want to call <b>GetCategorySpecifics</b> again for those eBay categories to get the latest names and values. As downloading all the data may affect your application's performance, it may help to only download Item Specifics data for an eBay category if the data has changed since you last checked.
     *
     * @var \DateTime $lastUpdateTime
     */
    private $lastUpdateTime = null;

    /**
     * This field can be used if you want to control the number of Item Specifics that are returned for each specified eBay category. If you only wanted to retrieve the 10 most popular Item Specifics per category, you would include this field and set its value to <code>10</code>. Note that mandatory Item Specifics are always returned first in the response. If this field is omitted, all available Item Specifics names for each specified category are returned. If this field's value is set to a value that is higher than the number of Item Specific names available, all Item Specific names are still returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  In October 2019, eBay updated the <b>GetCategorySpecifics</b> call to retrieve all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b> filter wasn't used) and 25 corresponding Item Specifics values would be returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are returned, they can still use the <b>MaxNames</b> and/or <b>MaxValuesPerName</b> filters to do this.
     *  </span>
     *  <br>
     *
     * @var int $maxNames
     */
    private $maxNames = null;

    /**
     * This field can be used if you want to control the number of corresponding values that are returned for each returned Item Specific name in each specified eBay category. If you only wanted to retrieve the 10 most popular values/options for each returned Item Specific name in each category, you would include this field and set its value to <code>10</code>. If this field is omitted, all available values for the corresponding Item Specifics name for each category are returned. If this field's value is set to a value that is higher than the number of Item Specific values available for any Item Specific name, all Item Specific values are still returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  In October 2019, eBay has updated the <b>GetCategorySpecifics</b> call to retrieve all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b> filter wasn't used) and 25 corresponding Item Specifics values would be returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are returned, they can still use the <b>MaxNames</b> and/or <b>MaxValuesPerName</b> filters to do this.
     *  </span>
     *  <br>
     *
     * @var int $maxValuesPerName
     */
    private $maxValuesPerName = null;

    /**
     * This field can be used if you already have an Item Specific name in mind, and you only want the recommended values for this Item Specifics name.
     *  If you specify multiple eBay categories in the request, the recommendation engine may find a matching Item Specifics name for some categories, but not for others. For eBay categories where the Item Specifics name is not found, recommended Item Specifics names and values will be returned. The Item Specifics name passed in this field is case-sensitive, and wildcards are not supported.
     *  <br><br>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This container can be used instead of, or in conjunction with <b>CategoryID</b> values specified at the call request root level. The <b>CategorySpecific</b> container can actually be more powerful since you can pass in multiple Category ID and Item Specifics name combinations, and if you specify <b>CategoryID</b> values at the root level, only one (Item Specifics) <b>Name</b> value can be used.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategorySpecifics.CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @var \Nogrod\eBaySDK\Trading\CategoryItemSpecificsType[] $categorySpecific
     */
    private $categorySpecific = [
        
    ];

    /**
     * If this boolean field is included and set to <code>true</code>, the <b>Relationship</b> container will not be returned for any Item Specifics name or value recommendations. Relationship recommendations tell you whether an Item Specific has a logical dependency another Item Specific.
     *  <br> <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=Small would
     *  mean something different to buyers depending on whether
     *  Size Type=Petite or Size Type=Plus.<br>
     *  <br>
     *  In general, it is a good idea to retrieve and use relationship
     *  recommendations, as this data can help buyers find the items
     *  they want more easily.
     *
     * @var bool $excludeRelationships
     */
    private $excludeRelationships = null;

    /**
     * If this boolean field is included and set to <code>true</code>, eBay's level of confidence in the popularity of each Item Specific name and value for the specified category is returned in the response. Some sellers may find this useful when choosing whether to use eBay's recommendation or their own Item Specifics names or values.
     *  <br> <br>
     *  If this field is used, either one or more <b>CategoryID</b> values and/or one or more <b>CategorySpecific.CategoryID</b> values must be specified. If you try to use this field solely with the <b>CategorySpecificsFileInfo</b> field, the request fails and no <b>TaskReferenceID</b> or <b>FileReferenceID</b> values are returned.
     *
     * @var bool $includeConfidence
     */
    private $includeConfidence = null;

    /**
     * If this boolean field is included and set to <code>true</code>, the response includes a <b>FileReferenceID</b> and
     *  <b>TaskReferenceID</b> value. Use these identifiers as inputs to the <b>downloadFile</b>
     *  call in the eBay File Transfer API. That API lets you retrieve
     *  a single (bulk) <b>GetCategorySpecifics</b> response with all the Item
     *  Specifics recommendations available for the requested site ID.
     *  (The <b>downloadFile</b> call downloads a .zip file as an
     *  attachment.)<br>
     *  <br>
     *  Either the <b>CategorySpecificsFileInfo</b> field or one or more <b>CategoryID</b> and/or <b>CategorySpecific.CategoryID</b> values are required
     *  in a <b>GetCategorySpecifics</b> call. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  You can use the File Transfer API without using or learning
     *  about the Bulk Data Exchange API or other
     *  Large Merchant Services APIs.
     *  </span>
     *
     * @var bool $categorySpecificsFileInfo
     */
    private $categorySpecificsFileInfo = null;

    /**
     * Adds as categoryID
     *
     * A unique identifer for an eBay category. Recommended Item Specifics names and values will be retrieved for each eBay category that is specified. Up to 100 <b>CategoryID</b> values may be specified in one call. Although Item Specifics metadata can be retrieved for any eBay category at any level in the hierarchy, it is recommended that users specify leaf category IDs, especially if they are using <b>GetCategorySpecifics</b> to retrieve the Item Specifics applicable to the listing categories they use.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @return self
     * @param string $categoryID
     */
    public function addToCategoryID($categoryID)
    {
        $this->categoryID[] = $categoryID;
        return $this;
    }

    /**
     * isset categoryID
     *
     * A unique identifer for an eBay category. Recommended Item Specifics names and values will be retrieved for each eBay category that is specified. Up to 100 <b>CategoryID</b> values may be specified in one call. Although Item Specifics metadata can be retrieved for any eBay category at any level in the hierarchy, it is recommended that users specify leaf category IDs, especially if they are using <b>GetCategorySpecifics</b> to retrieve the Item Specifics applicable to the listing categories they use.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryID($index)
    {
        return isset($this->categoryID[$index]);
    }

    /**
     * unset categoryID
     *
     * A unique identifer for an eBay category. Recommended Item Specifics names and values will be retrieved for each eBay category that is specified. Up to 100 <b>CategoryID</b> values may be specified in one call. Although Item Specifics metadata can be retrieved for any eBay category at any level in the hierarchy, it is recommended that users specify leaf category IDs, especially if they are using <b>GetCategorySpecifics</b> to retrieve the Item Specifics applicable to the listing categories they use.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryID($index)
    {
        unset($this->categoryID[$index]);
    }

    /**
     * Gets as categoryID
     *
     * A unique identifer for an eBay category. Recommended Item Specifics names and values will be retrieved for each eBay category that is specified. Up to 100 <b>CategoryID</b> values may be specified in one call. Although Item Specifics metadata can be retrieved for any eBay category at any level in the hierarchy, it is recommended that users specify leaf category IDs, especially if they are using <b>GetCategorySpecifics</b> to retrieve the Item Specifics applicable to the listing categories they use.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @return string[]
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * A unique identifer for an eBay category. Recommended Item Specifics names and values will be retrieved for each eBay category that is specified. Up to 100 <b>CategoryID</b> values may be specified in one call. Although Item Specifics metadata can be retrieved for any eBay category at any level in the hierarchy, it is recommended that users specify leaf category IDs, especially if they are using <b>GetCategorySpecifics</b> to retrieve the Item Specifics applicable to the listing categories they use.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @param string[] $categoryID
     * @return self
     */
    public function setCategoryID(array $categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as lastUpdateTime
     *
     * This dateTime filter can be included and used if the user only wants to check for recently-added Item Specifics names and values for one or more categories. If this filter is used, the Item Specifics recommendation engine will only check for Item Specifics names and values that have been added/changed since the date that was passed in to this field. If this field is used, the call will not return any Item Specifics data; it will only return the <b>Recommendations.Updated</b> boolean field for each specified eBay category. A <code>true</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have changed since the timestamp passed in the <b>LastUpdateTime</b> field, and a <code>false</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have not changed since the timestamp passed in the <b>LastUpdateTime</b> field.
     *  <br><br>
     *  Typically, you will pass in the timestamp value that was returned the last time you refreshed the list of Item Specifics names and values for the same categories. If the <b>Recommendations.Updated</b> flag returns <code>true</code> for any eBay categories in the response, you will want to call <b>GetCategorySpecifics</b> again for those eBay categories to get the latest names and values. As downloading all the data may affect your application's performance, it may help to only download Item Specifics data for an eBay category if the data has changed since you last checked.
     *
     * @return \DateTime
     */
    public function getLastUpdateTime()
    {
        return $this->lastUpdateTime;
    }

    /**
     * Sets a new lastUpdateTime
     *
     * This dateTime filter can be included and used if the user only wants to check for recently-added Item Specifics names and values for one or more categories. If this filter is used, the Item Specifics recommendation engine will only check for Item Specifics names and values that have been added/changed since the date that was passed in to this field. If this field is used, the call will not return any Item Specifics data; it will only return the <b>Recommendations.Updated</b> boolean field for each specified eBay category. A <code>true</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have changed since the timestamp passed in the <b>LastUpdateTime</b> field, and a <code>false</code> value in this field will indicate that the recommended Item Specifics names/values for the eBay category have not changed since the timestamp passed in the <b>LastUpdateTime</b> field.
     *  <br><br>
     *  Typically, you will pass in the timestamp value that was returned the last time you refreshed the list of Item Specifics names and values for the same categories. If the <b>Recommendations.Updated</b> flag returns <code>true</code> for any eBay categories in the response, you will want to call <b>GetCategorySpecifics</b> again for those eBay categories to get the latest names and values. As downloading all the data may affect your application's performance, it may help to only download Item Specifics data for an eBay category if the data has changed since you last checked.
     *
     * @param \DateTime $lastUpdateTime
     * @return self
     */
    public function setLastUpdateTime(\DateTime $lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;
        return $this;
    }

    /**
     * Gets as maxNames
     *
     * This field can be used if you want to control the number of Item Specifics that are returned for each specified eBay category. If you only wanted to retrieve the 10 most popular Item Specifics per category, you would include this field and set its value to <code>10</code>. Note that mandatory Item Specifics are always returned first in the response. If this field is omitted, all available Item Specifics names for each specified category are returned. If this field's value is set to a value that is higher than the number of Item Specific names available, all Item Specific names are still returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  In October 2019, eBay updated the <b>GetCategorySpecifics</b> call to retrieve all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b> filter wasn't used) and 25 corresponding Item Specifics values would be returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are returned, they can still use the <b>MaxNames</b> and/or <b>MaxValuesPerName</b> filters to do this.
     *  </span>
     *  <br>
     *
     * @return int
     */
    public function getMaxNames()
    {
        return $this->maxNames;
    }

    /**
     * Sets a new maxNames
     *
     * This field can be used if you want to control the number of Item Specifics that are returned for each specified eBay category. If you only wanted to retrieve the 10 most popular Item Specifics per category, you would include this field and set its value to <code>10</code>. Note that mandatory Item Specifics are always returned first in the response. If this field is omitted, all available Item Specifics names for each specified category are returned. If this field's value is set to a value that is higher than the number of Item Specific names available, all Item Specific names are still returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  In October 2019, eBay updated the <b>GetCategorySpecifics</b> call to retrieve all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b> filter wasn't used) and 25 corresponding Item Specifics values would be returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are returned, they can still use the <b>MaxNames</b> and/or <b>MaxValuesPerName</b> filters to do this.
     *  </span>
     *  <br>
     *
     * @param int $maxNames
     * @return self
     */
    public function setMaxNames($maxNames)
    {
        $this->maxNames = $maxNames;
        return $this;
    }

    /**
     * Gets as maxValuesPerName
     *
     * This field can be used if you want to control the number of corresponding values that are returned for each returned Item Specific name in each specified eBay category. If you only wanted to retrieve the 10 most popular values/options for each returned Item Specific name in each category, you would include this field and set its value to <code>10</code>. If this field is omitted, all available values for the corresponding Item Specifics name for each category are returned. If this field's value is set to a value that is higher than the number of Item Specific values available for any Item Specific name, all Item Specific values are still returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  In October 2019, eBay has updated the <b>GetCategorySpecifics</b> call to retrieve all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b> filter wasn't used) and 25 corresponding Item Specifics values would be returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are returned, they can still use the <b>MaxNames</b> and/or <b>MaxValuesPerName</b> filters to do this.
     *  </span>
     *  <br>
     *
     * @return int
     */
    public function getMaxValuesPerName()
    {
        return $this->maxValuesPerName;
    }

    /**
     * Sets a new maxValuesPerName
     *
     * This field can be used if you want to control the number of corresponding values that are returned for each returned Item Specific name in each specified eBay category. If you only wanted to retrieve the 10 most popular values/options for each returned Item Specific name in each category, you would include this field and set its value to <code>10</code>. If this field is omitted, all available values for the corresponding Item Specifics name for each category are returned. If this field's value is set to a value that is higher than the number of Item Specific values available for any Item Specific name, all Item Specific values are still returned.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  In October 2019, eBay has updated the <b>GetCategorySpecifics</b> call to retrieve all available Item Specifics name-value pairs for each specified category by default. Previously, 30 Item Specifics names would be returned by default (if the <b>MaxNames</b> filter wasn't used) and 25 corresponding Item Specifics values would be returned by default (if the <b>MaxValuesPerName</b> filter wasn't used). However, if a user wants to limit the number of Item Specifics names and corresponding values that are returned, they can still use the <b>MaxNames</b> and/or <b>MaxValuesPerName</b> filters to do this.
     *  </span>
     *  <br>
     *
     * @param int $maxValuesPerName
     * @return self
     */
    public function setMaxValuesPerName($maxValuesPerName)
    {
        $this->maxValuesPerName = $maxValuesPerName;
        return $this;
    }

    /**
     * Gets as name
     *
     * This field can be used if you already have an Item Specific name in mind, and you only want the recommended values for this Item Specifics name.
     *  If you specify multiple eBay categories in the request, the recommendation engine may find a matching Item Specifics name for some categories, but not for others. For eBay categories where the Item Specifics name is not found, recommended Item Specifics names and values will be returned. The Item Specifics name passed in this field is case-sensitive, and wildcards are not supported.
     *  <br><br>
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This field can be used if you already have an Item Specific name in mind, and you only want the recommended values for this Item Specifics name.
     *  If you specify multiple eBay categories in the request, the recommendation engine may find a matching Item Specifics name for some categories, but not for others. For eBay categories where the Item Specifics name is not found, recommended Item Specifics names and values will be returned. The Item Specifics name passed in this field is case-sensitive, and wildcards are not supported.
     *  <br><br>
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as categorySpecific
     *
     * This container can be used instead of, or in conjunction with <b>CategoryID</b> values specified at the call request root level. The <b>CategorySpecific</b> container can actually be more powerful since you can pass in multiple Category ID and Item Specifics name combinations, and if you specify <b>CategoryID</b> values at the root level, only one (Item Specifics) <b>Name</b> value can be used.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategorySpecifics.CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CategoryItemSpecificsType $categorySpecific
     */
    public function addToCategorySpecific(\Nogrod\eBaySDK\Trading\CategoryItemSpecificsType $categorySpecific)
    {
        $this->categorySpecific[] = $categorySpecific;
        return $this;
    }

    /**
     * isset categorySpecific
     *
     * This container can be used instead of, or in conjunction with <b>CategoryID</b> values specified at the call request root level. The <b>CategorySpecific</b> container can actually be more powerful since you can pass in multiple Category ID and Item Specifics name combinations, and if you specify <b>CategoryID</b> values at the root level, only one (Item Specifics) <b>Name</b> value can be used.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategorySpecifics.CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategorySpecific($index)
    {
        return isset($this->categorySpecific[$index]);
    }

    /**
     * unset categorySpecific
     *
     * This container can be used instead of, or in conjunction with <b>CategoryID</b> values specified at the call request root level. The <b>CategorySpecific</b> container can actually be more powerful since you can pass in multiple Category ID and Item Specifics name combinations, and if you specify <b>CategoryID</b> values at the root level, only one (Item Specifics) <b>Name</b> value can be used.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategorySpecifics.CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategorySpecific($index)
    {
        unset($this->categorySpecific[$index]);
    }

    /**
     * Gets as categorySpecific
     *
     * This container can be used instead of, or in conjunction with <b>CategoryID</b> values specified at the call request root level. The <b>CategorySpecific</b> container can actually be more powerful since you can pass in multiple Category ID and Item Specifics name combinations, and if you specify <b>CategoryID</b> values at the root level, only one (Item Specifics) <b>Name</b> value can be used.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategorySpecifics.CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @return \Nogrod\eBaySDK\Trading\CategoryItemSpecificsType[]
     */
    public function getCategorySpecific()
    {
        return $this->categorySpecific;
    }

    /**
     * Sets a new categorySpecific
     *
     * This container can be used instead of, or in conjunction with <b>CategoryID</b> values specified at the call request root level. The <b>CategorySpecific</b> container can actually be more powerful since you can pass in multiple Category ID and Item Specifics name combinations, and if you specify <b>CategoryID</b> values at the root level, only one (Item Specifics) <b>Name</b> value can be used.
     *  <br><br>
     *  A <b>GetCategorySpecifics</b> call request requires at least one of the following: a <b>CategoryID</b> value, a <b>CategorySpecifics.CategoryID</b> value, or the
     *  <b>CategorySpecificsFileInfo</b> field with its value set to <code>true</code>. <b>CategoryID</b> values and
     *  <b>CategorySpecific.CategoryID</b> values can both be used in the same request.
     *  <br><br>
     *  Keep in mind that a high number of specified categories can result in
     *  longer response times and larger result sets. If your call request happens to time out, you might want specify fewer categories. If any
     *  <b>CategorySpecifics.CategoryID</b> values are specified more than once, only the first instance will be used.
     *
     * @param \Nogrod\eBaySDK\Trading\CategoryItemSpecificsType[] $categorySpecific
     * @return self
     */
    public function setCategorySpecific(array $categorySpecific)
    {
        $this->categorySpecific = $categorySpecific;
        return $this;
    }

    /**
     * Gets as excludeRelationships
     *
     * If this boolean field is included and set to <code>true</code>, the <b>Relationship</b> container will not be returned for any Item Specifics name or value recommendations. Relationship recommendations tell you whether an Item Specific has a logical dependency another Item Specific.
     *  <br> <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=Small would
     *  mean something different to buyers depending on whether
     *  Size Type=Petite or Size Type=Plus.<br>
     *  <br>
     *  In general, it is a good idea to retrieve and use relationship
     *  recommendations, as this data can help buyers find the items
     *  they want more easily.
     *
     * @return bool
     */
    public function getExcludeRelationships()
    {
        return $this->excludeRelationships;
    }

    /**
     * Sets a new excludeRelationships
     *
     * If this boolean field is included and set to <code>true</code>, the <b>Relationship</b> container will not be returned for any Item Specifics name or value recommendations. Relationship recommendations tell you whether an Item Specific has a logical dependency another Item Specific.
     *  <br> <br>
     *  For example, in a clothing category, Size Type could be
     *  recommended as a parent of Size, because Size=Small would
     *  mean something different to buyers depending on whether
     *  Size Type=Petite or Size Type=Plus.<br>
     *  <br>
     *  In general, it is a good idea to retrieve and use relationship
     *  recommendations, as this data can help buyers find the items
     *  they want more easily.
     *
     * @param bool $excludeRelationships
     * @return self
     */
    public function setExcludeRelationships($excludeRelationships)
    {
        $this->excludeRelationships = $excludeRelationships;
        return $this;
    }

    /**
     * Gets as includeConfidence
     *
     * If this boolean field is included and set to <code>true</code>, eBay's level of confidence in the popularity of each Item Specific name and value for the specified category is returned in the response. Some sellers may find this useful when choosing whether to use eBay's recommendation or their own Item Specifics names or values.
     *  <br> <br>
     *  If this field is used, either one or more <b>CategoryID</b> values and/or one or more <b>CategorySpecific.CategoryID</b> values must be specified. If you try to use this field solely with the <b>CategorySpecificsFileInfo</b> field, the request fails and no <b>TaskReferenceID</b> or <b>FileReferenceID</b> values are returned.
     *
     * @return bool
     */
    public function getIncludeConfidence()
    {
        return $this->includeConfidence;
    }

    /**
     * Sets a new includeConfidence
     *
     * If this boolean field is included and set to <code>true</code>, eBay's level of confidence in the popularity of each Item Specific name and value for the specified category is returned in the response. Some sellers may find this useful when choosing whether to use eBay's recommendation or their own Item Specifics names or values.
     *  <br> <br>
     *  If this field is used, either one or more <b>CategoryID</b> values and/or one or more <b>CategorySpecific.CategoryID</b> values must be specified. If you try to use this field solely with the <b>CategorySpecificsFileInfo</b> field, the request fails and no <b>TaskReferenceID</b> or <b>FileReferenceID</b> values are returned.
     *
     * @param bool $includeConfidence
     * @return self
     */
    public function setIncludeConfidence($includeConfidence)
    {
        $this->includeConfidence = $includeConfidence;
        return $this;
    }

    /**
     * Gets as categorySpecificsFileInfo
     *
     * If this boolean field is included and set to <code>true</code>, the response includes a <b>FileReferenceID</b> and
     *  <b>TaskReferenceID</b> value. Use these identifiers as inputs to the <b>downloadFile</b>
     *  call in the eBay File Transfer API. That API lets you retrieve
     *  a single (bulk) <b>GetCategorySpecifics</b> response with all the Item
     *  Specifics recommendations available for the requested site ID.
     *  (The <b>downloadFile</b> call downloads a .zip file as an
     *  attachment.)<br>
     *  <br>
     *  Either the <b>CategorySpecificsFileInfo</b> field or one or more <b>CategoryID</b> and/or <b>CategorySpecific.CategoryID</b> values are required
     *  in a <b>GetCategorySpecifics</b> call. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  You can use the File Transfer API without using or learning
     *  about the Bulk Data Exchange API or other
     *  Large Merchant Services APIs.
     *  </span>
     *
     * @return bool
     */
    public function getCategorySpecificsFileInfo()
    {
        return $this->categorySpecificsFileInfo;
    }

    /**
     * Sets a new categorySpecificsFileInfo
     *
     * If this boolean field is included and set to <code>true</code>, the response includes a <b>FileReferenceID</b> and
     *  <b>TaskReferenceID</b> value. Use these identifiers as inputs to the <b>downloadFile</b>
     *  call in the eBay File Transfer API. That API lets you retrieve
     *  a single (bulk) <b>GetCategorySpecifics</b> response with all the Item
     *  Specifics recommendations available for the requested site ID.
     *  (The <b>downloadFile</b> call downloads a .zip file as an
     *  attachment.)<br>
     *  <br>
     *  Either the <b>CategorySpecificsFileInfo</b> field or one or more <b>CategoryID</b> and/or <b>CategorySpecific.CategoryID</b> values are required
     *  in a <b>GetCategorySpecifics</b> call. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  You can use the File Transfer API without using or learning
     *  about the Bulk Data Exchange API or other
     *  Large Merchant Services APIs.
     *  </span>
     *
     * @param bool $categorySpecificsFileInfo
     * @return self
     */
    public function setCategorySpecificsFileInfo($categorySpecificsFileInfo)
    {
        $this->categorySpecificsFileInfo = $categorySpecificsFileInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryID();
        if (null !== $value && !empty($this->getCategoryID())) {
            $writer->write(array_map(function ($v) {
                return ["CategoryID" => $v];
            }, $value));
        }
        $value = $this->getLastUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastUpdateTime", $value);
        }
        $value = $this->getMaxNames();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxNames", $value);
        }
        $value = $this->getMaxValuesPerName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxValuesPerName", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getCategorySpecific();
        if (null !== $value && !empty($this->getCategorySpecific())) {
            $writer->write(array_map(function ($v) {
                return ["CategorySpecific" => $v];
            }, $value));
        }
        $value = $this->getExcludeRelationships();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExcludeRelationships", $value);
        }
        $value = $this->getIncludeConfidence();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeConfidence", $value);
        }
        $value = $this->getCategorySpecificsFileInfo();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategorySpecificsFileInfo", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastUpdateTime');
        if (null !== $value) {
            $this->setLastUpdateTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxNames');
        if (null !== $value) {
            $this->setMaxNames($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxValuesPerName');
        if (null !== $value) {
            $this->setMaxValuesPerName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategorySpecific', true);
        if (null !== $value && !empty($value)) {
            $this->setCategorySpecific(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CategoryItemSpecificsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeRelationships');
        if (null !== $value) {
            $this->setExcludeRelationships($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeConfidence');
        if (null !== $value) {
            $this->setIncludeConfidence($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategorySpecificsFileInfo');
        if (null !== $value) {
            $this->setCategorySpecificsFileInfo($value);
        }
    }
}
