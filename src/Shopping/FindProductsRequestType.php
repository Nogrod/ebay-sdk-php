<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindProductsRequestType
 *
 * This type is the base request type of the <b>FindProducts</b> call. The <b>FindProducts</b> call returns one or more eBay catalog products based upon the query string or product ID value that is passed in the call request
 *  <br /> <br />
 *  <span class="tablenote"><b>Important:</b>
 *  Historically, through an <b>ItemArray</b> container, this call returned detailed information on active listings that are associated with the retrieved eBay catalog product(s). However, active listing data is no longer retrieved in the <b>FindProducts</b> response, so some of the fields/filters in the <b>FindProducts</b> request payload are no longer applicable.
 *  </span>
 * XSD Type: FindProductsRequestType
 */
class FindProductsRequestType extends AbstractRequestType
{
    /**
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable. <code>DomainHistogram</code> is the only value that can be used for <b>IncludeSelector</b>, so this filter has no practical use, and may be deprecated in the near future.
     *  </span>
     *  <br>
     *  This filter is included and set to <code>DomainHistogram</code> if the user would like to view domain histogram data in the response. The <b>DomainHistogram</b> container that is returned displays all eBay category domains associated with all eBay catalog products that are retrieved. The count of eBay catalog products associated with each domain is also shown under each <b>Domain</b> container. If this field is omitted, only the catalog product records and pagination data is returned.
     *  <br /> <br />
     *  <span class="tablenote"><b>Important:</b>
     *  Historically, the <b>IncludeSelector</b> field supported two other values - <code>Items</code> and <code>Details</code>. However, both of these enumeration values controlled the data that was returned through the <b>ItemArray</b> container, and this container is no longer returned at all. The <b>FindProducts</b> call now only retrieves one or more eBay catalog products, and no longer retrieves active listing data related to these catalog products. The <code>Items</code> or <code>Details</code> values will have no effect is used.
     *  </span>
     *
     * @var string $includeSelector
     */
    private $includeSelector = null;

    /**
     * This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products. If this field is used, it will have no effect on the response.
     *
     * @var bool $availableItemsOnly
     */
    private $availableItemsOnly = null;

    /**
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  An eBay domain to search in. This is like searching a section of the eBay catalog. If this field is not included, the catalog product search is conducted across all defined eBay domains. The user can use multiple <b>DomainName</b> filters to search multiple defined eBay domains. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalgo product based on eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @var string[] $domainName
     */
    private $domainName = [

    ];

    /**
     * Use this field to find a catalog product (or products) associated with an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN. The product identifier is expressed as a string value, and the type of product identifier is expressed in the <b>type</b> attribute.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the supported enumeration values for the <b>type</b> attribute. Note that it is possible that there may be multiple eBay catalog products associated with the same GTIN value, but there can only be one eBay catalog product associated with a specific ePID value.
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    private $productID = null;

    /**
     * This string field is used to defined a query string using one or more keywords. When you use a keyword search,
     *  eBay searches the product catalog for matching words in the
     *  product title, description, and/or Item Specifics, and it returns
     *  a list of matching catalog products. If used, the response will also be affected by any eBay domains that are specified through one or more <b>DomainName</b> filters.<br>
     *  <br>
     *  The query string must contain at least three alphanumeric characters.<br>
     *  <br>
     *  The words "and" and "or" are treated like any other word.
     *  Only use "and", "or", or "the" if you are searching for products
     *  containing these words.
     *  To use AND or OR logic, use eBay's standard search string
     *  modifiers. Wildcards (+, -, or *) are also supported.
     *  Be careful when using spaces before or after modifiers and
     *  wildcards.<br>
     *  <br>
     *  Some keyword queries can result in response times of 30 seconds or
     *  longer. If too many results are returned, you may want to refine the search by
     *  passing in more keywords and/or by using one or more <b>DomainName</b> filters. Using a <b>CategoryID</b> value is also an option, as this will return only catalog products associated with that eBay category.
     *  <br>
     *  <br>
     *  If you know your product's UPC, EAN, or ISBN, you may want to use the <b>ProductID</b> field instead of the <b>QueryKeywords</b> field. <br>
     *  <br>
     *
     * @var string $queryKeywords
     */
    private $queryKeywords = null;

    /**
     * This field allows the user to control the order in which the retrieved catalog products are displayed in the response. If this field is not included, the results are sorted by the catalog product's popularity.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductSortCodeType.html">ProductSortCodeType</a> definition to view the available sort values.
     *  <br>
     *  <br>
     *  This field can be used in conjunction with the <b>SortOrder</b> field. The <b>SortOrder</b> field controls whether catalog products are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products are sorted by popularity in descending order.
     *
     * @var string $productSort
     */
    private $productSort = null;

    /**
     * This field is used to control whether catalog products are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products are sorted by popularity in descending order.
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * This field is used to limit/control the maximum number of catalog products that are returned per page of data in a single call. This is generally used with string query searches using the <b>QueryKeywords</b> field.
     *  <br>
     *  <br>
     *  If this field is not used, its value defaults to '1', and only one catalog product is returned. The user may want to look at the <b>TotalProducts</b> field's value to see how many eBay catalog products matched the search criteria, and then the user may want to do another call, possibly refining/narrowing the search with a more precise query string in the <b>QueryKeywords</b> field, or perhaps with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  If the <b>MoreResults</b> field is returned as <code>true</code>, this indicates that more than one page of results are available based on the current search criteria, so the user will have to make additional calls to view additional pages of results, changing the <b>PageNumber</b> value as needed.
     *
     * @var int $maxEntries
     */
    private $maxEntries = null;

    /**
     * This field is used to control the page number of results to retrieve in the call. If this field is omitted, the first page of results is returned by default. You know that you have additional pages or results if the <b>MoreResults</b> field is returned as <code>true</code>.
     *  <br>
     *  <br>
     *  This field takes a positive integer value equal to or lower than the number of pages available. The total number of pages in the results set is shown in the <b>ApproximatePages</b> field of the response.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * This field is included to restrict the catalog products that are returned. Only the catalog products associated with this category ID are returned.
     *  <br><br>
     *  This field is generally used with the <b>QueryKeywords</b> field.
     *  <br><br>
     *  The <b>GetCategories</b> or <b>GetSuggestedCategories</b> calls of the Trading API can be used to retrieve <b>CategoryID</b> values.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     *
     * @var bool $hideDuplicateItems
     */
    private $hideDuplicateItems = null;

    /**
     * Gets as includeSelector
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable. <code>DomainHistogram</code> is the only value that can be used for <b>IncludeSelector</b>, so this filter has no practical use, and may be deprecated in the near future.
     *  </span>
     *  <br>
     *  This filter is included and set to <code>DomainHistogram</code> if the user would like to view domain histogram data in the response. The <b>DomainHistogram</b> container that is returned displays all eBay category domains associated with all eBay catalog products that are retrieved. The count of eBay catalog products associated with each domain is also shown under each <b>Domain</b> container. If this field is omitted, only the catalog product records and pagination data is returned.
     *  <br /> <br />
     *  <span class="tablenote"><b>Important:</b>
     *  Historically, the <b>IncludeSelector</b> field supported two other values - <code>Items</code> and <code>Details</code>. However, both of these enumeration values controlled the data that was returned through the <b>ItemArray</b> container, and this container is no longer returned at all. The <b>FindProducts</b> call now only retrieves one or more eBay catalog products, and no longer retrieves active listing data related to these catalog products. The <code>Items</code> or <code>Details</code> values will have no effect is used.
     *  </span>
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
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable. <code>DomainHistogram</code> is the only value that can be used for <b>IncludeSelector</b>, so this filter has no practical use, and may be deprecated in the near future.
     *  </span>
     *  <br>
     *  This filter is included and set to <code>DomainHistogram</code> if the user would like to view domain histogram data in the response. The <b>DomainHistogram</b> container that is returned displays all eBay category domains associated with all eBay catalog products that are retrieved. The count of eBay catalog products associated with each domain is also shown under each <b>Domain</b> container. If this field is omitted, only the catalog product records and pagination data is returned.
     *  <br /> <br />
     *  <span class="tablenote"><b>Important:</b>
     *  Historically, the <b>IncludeSelector</b> field supported two other values - <code>Items</code> and <code>Details</code>. However, both of these enumeration values controlled the data that was returned through the <b>ItemArray</b> container, and this container is no longer returned at all. The <b>FindProducts</b> call now only retrieves one or more eBay catalog products, and no longer retrieves active listing data related to these catalog products. The <code>Items</code> or <code>Details</code> values will have no effect is used.
     *  </span>
     *
     * @param string $includeSelector
     * @return self
     */
    public function setIncludeSelector($includeSelector)
    {
        $this->includeSelector = $includeSelector;
        return $this;
    }

    /**
     * Gets as availableItemsOnly
     *
     * This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products. If this field is used, it will have no effect on the response.
     *
     * @return bool
     */
    public function getAvailableItemsOnly()
    {
        return $this->availableItemsOnly;
    }

    /**
     * Sets a new availableItemsOnly
     *
     * This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products. If this field is used, it will have no effect on the response.
     *
     * @param bool $availableItemsOnly
     * @return self
     */
    public function setAvailableItemsOnly($availableItemsOnly)
    {
        $this->availableItemsOnly = $availableItemsOnly;
        return $this;
    }

    /**
     * Adds as domainName
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  An eBay domain to search in. This is like searching a section of the eBay catalog. If this field is not included, the catalog product search is conducted across all defined eBay domains. The user can use multiple <b>DomainName</b> filters to search multiple defined eBay domains. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalgo product based on eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @return self
     * @param string $domainName
     */
    public function addToDomainName($domainName)
    {
        $this->domainName[] = $domainName;
        return $this;
    }

    /**
     * isset domainName
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  An eBay domain to search in. This is like searching a section of the eBay catalog. If this field is not included, the catalog product search is conducted across all defined eBay domains. The user can use multiple <b>DomainName</b> filters to search multiple defined eBay domains. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalgo product based on eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomainName($index)
    {
        return isset($this->domainName[$index]);
    }

    /**
     * unset domainName
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  An eBay domain to search in. This is like searching a section of the eBay catalog. If this field is not included, the catalog product search is conducted across all defined eBay domains. The user can use multiple <b>DomainName</b> filters to search multiple defined eBay domains. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalgo product based on eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomainName($index)
    {
        unset($this->domainName[$index]);
    }

    /**
     * Gets as domainName
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  An eBay domain to search in. This is like searching a section of the eBay catalog. If this field is not included, the catalog product search is conducted across all defined eBay domains. The user can use multiple <b>DomainName</b> filters to search multiple defined eBay domains. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalgo product based on eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @return string[]
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  An eBay domain to search in. This is like searching a section of the eBay catalog. If this field is not included, the catalog product search is conducted across all defined eBay domains. The user can use multiple <b>DomainName</b> filters to search multiple defined eBay domains. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalgo product based on eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @param string[] $domainName
     * @return self
     */
    public function setDomainName(array $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Gets as productID
     *
     * Use this field to find a catalog product (or products) associated with an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN. The product identifier is expressed as a string value, and the type of product identifier is expressed in the <b>type</b> attribute.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the supported enumeration values for the <b>type</b> attribute. Note that it is possible that there may be multiple eBay catalog products associated with the same GTIN value, but there can only be one eBay catalog product associated with a specific ePID value.
     *
     * @return \Nogrod\eBaySDK\Shopping\ProductIDType
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * Use this field to find a catalog product (or products) associated with an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN. The product identifier is expressed as a string value, and the type of product identifier is expressed in the <b>type</b> attribute.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the supported enumeration values for the <b>type</b> attribute. Note that it is possible that there may be multiple eBay catalog products associated with the same GTIN value, but there can only be one eBay catalog product associated with a specific ePID value.
     *
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     * @return self
     */
    public function setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType $productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as queryKeywords
     *
     * This string field is used to defined a query string using one or more keywords. When you use a keyword search,
     *  eBay searches the product catalog for matching words in the
     *  product title, description, and/or Item Specifics, and it returns
     *  a list of matching catalog products. If used, the response will also be affected by any eBay domains that are specified through one or more <b>DomainName</b> filters.<br>
     *  <br>
     *  The query string must contain at least three alphanumeric characters.<br>
     *  <br>
     *  The words "and" and "or" are treated like any other word.
     *  Only use "and", "or", or "the" if you are searching for products
     *  containing these words.
     *  To use AND or OR logic, use eBay's standard search string
     *  modifiers. Wildcards (+, -, or *) are also supported.
     *  Be careful when using spaces before or after modifiers and
     *  wildcards.<br>
     *  <br>
     *  Some keyword queries can result in response times of 30 seconds or
     *  longer. If too many results are returned, you may want to refine the search by
     *  passing in more keywords and/or by using one or more <b>DomainName</b> filters. Using a <b>CategoryID</b> value is also an option, as this will return only catalog products associated with that eBay category.
     *  <br>
     *  <br>
     *  If you know your product's UPC, EAN, or ISBN, you may want to use the <b>ProductID</b> field instead of the <b>QueryKeywords</b> field. <br>
     *  <br>
     *
     * @return string
     */
    public function getQueryKeywords()
    {
        return $this->queryKeywords;
    }

    /**
     * Sets a new queryKeywords
     *
     * This string field is used to defined a query string using one or more keywords. When you use a keyword search,
     *  eBay searches the product catalog for matching words in the
     *  product title, description, and/or Item Specifics, and it returns
     *  a list of matching catalog products. If used, the response will also be affected by any eBay domains that are specified through one or more <b>DomainName</b> filters.<br>
     *  <br>
     *  The query string must contain at least three alphanumeric characters.<br>
     *  <br>
     *  The words "and" and "or" are treated like any other word.
     *  Only use "and", "or", or "the" if you are searching for products
     *  containing these words.
     *  To use AND or OR logic, use eBay's standard search string
     *  modifiers. Wildcards (+, -, or *) are also supported.
     *  Be careful when using spaces before or after modifiers and
     *  wildcards.<br>
     *  <br>
     *  Some keyword queries can result in response times of 30 seconds or
     *  longer. If too many results are returned, you may want to refine the search by
     *  passing in more keywords and/or by using one or more <b>DomainName</b> filters. Using a <b>CategoryID</b> value is also an option, as this will return only catalog products associated with that eBay category.
     *  <br>
     *  <br>
     *  If you know your product's UPC, EAN, or ISBN, you may want to use the <b>ProductID</b> field instead of the <b>QueryKeywords</b> field. <br>
     *  <br>
     *
     * @param string $queryKeywords
     * @return self
     */
    public function setQueryKeywords($queryKeywords)
    {
        $this->queryKeywords = $queryKeywords;
        return $this;
    }

    /**
     * Gets as productSort
     *
     * This field allows the user to control the order in which the retrieved catalog products are displayed in the response. If this field is not included, the results are sorted by the catalog product's popularity.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductSortCodeType.html">ProductSortCodeType</a> definition to view the available sort values.
     *  <br>
     *  <br>
     *  This field can be used in conjunction with the <b>SortOrder</b> field. The <b>SortOrder</b> field controls whether catalog products are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products are sorted by popularity in descending order.
     *
     * @return string
     */
    public function getProductSort()
    {
        return $this->productSort;
    }

    /**
     * Sets a new productSort
     *
     * This field allows the user to control the order in which the retrieved catalog products are displayed in the response. If this field is not included, the results are sorted by the catalog product's popularity.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductSortCodeType.html">ProductSortCodeType</a> definition to view the available sort values.
     *  <br>
     *  <br>
     *  This field can be used in conjunction with the <b>SortOrder</b> field. The <b>SortOrder</b> field controls whether catalog products are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products are sorted by popularity in descending order.
     *
     * @param string $productSort
     * @return self
     */
    public function setProductSort($productSort)
    {
        $this->productSort = $productSort;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * This field is used to control whether catalog products are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products are sorted by popularity in descending order.
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * This field is used to control whether catalog products are returned in ascending or descending order (according to the <b>ProductSort</b> value). If neither <b>ProductSort</b> nor <b>SortOrder</b> fields are used, catalog products are sorted by popularity in descending order.
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as maxEntries
     *
     * This field is used to limit/control the maximum number of catalog products that are returned per page of data in a single call. This is generally used with string query searches using the <b>QueryKeywords</b> field.
     *  <br>
     *  <br>
     *  If this field is not used, its value defaults to '1', and only one catalog product is returned. The user may want to look at the <b>TotalProducts</b> field's value to see how many eBay catalog products matched the search criteria, and then the user may want to do another call, possibly refining/narrowing the search with a more precise query string in the <b>QueryKeywords</b> field, or perhaps with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  If the <b>MoreResults</b> field is returned as <code>true</code>, this indicates that more than one page of results are available based on the current search criteria, so the user will have to make additional calls to view additional pages of results, changing the <b>PageNumber</b> value as needed.
     *
     * @return int
     */
    public function getMaxEntries()
    {
        return $this->maxEntries;
    }

    /**
     * Sets a new maxEntries
     *
     * This field is used to limit/control the maximum number of catalog products that are returned per page of data in a single call. This is generally used with string query searches using the <b>QueryKeywords</b> field.
     *  <br>
     *  <br>
     *  If this field is not used, its value defaults to '1', and only one catalog product is returned. The user may want to look at the <b>TotalProducts</b> field's value to see how many eBay catalog products matched the search criteria, and then the user may want to do another call, possibly refining/narrowing the search with a more precise query string in the <b>QueryKeywords</b> field, or perhaps with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  If the <b>MoreResults</b> field is returned as <code>true</code>, this indicates that more than one page of results are available based on the current search criteria, so the user will have to make additional calls to view additional pages of results, changing the <b>PageNumber</b> value as needed.
     *
     * @param int $maxEntries
     * @return self
     */
    public function setMaxEntries($maxEntries)
    {
        $this->maxEntries = $maxEntries;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * This field is used to control the page number of results to retrieve in the call. If this field is omitted, the first page of results is returned by default. You know that you have additional pages or results if the <b>MoreResults</b> field is returned as <code>true</code>.
     *  <br>
     *  <br>
     *  This field takes a positive integer value equal to or lower than the number of pages available. The total number of pages in the results set is shown in the <b>ApproximatePages</b> field of the response.
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * Sets a new pageNumber
     *
     * This field is used to control the page number of results to retrieve in the call. If this field is omitted, the first page of results is returned by default. You know that you have additional pages or results if the <b>MoreResults</b> field is returned as <code>true</code>.
     *  <br>
     *  <br>
     *  This field takes a positive integer value equal to or lower than the number of pages available. The total number of pages in the results set is shown in the <b>ApproximatePages</b> field of the response.
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * This field is included to restrict the catalog products that are returned. Only the catalog products associated with this category ID are returned.
     *  <br><br>
     *  This field is generally used with the <b>QueryKeywords</b> field.
     *  <br><br>
     *  The <b>GetCategories</b> or <b>GetSuggestedCategories</b> calls of the Trading API can be used to retrieve <b>CategoryID</b> values.
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
     * This field is included to restrict the catalog products that are returned. Only the catalog products associated with this category ID are returned.
     *  <br><br>
     *  This field is generally used with the <b>QueryKeywords</b> field.
     *  <br><br>
     *  The <b>GetCategories</b> or <b>GetSuggestedCategories</b> calls of the Trading API can be used to retrieve <b>CategoryID</b> values.
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
     * Gets as hideDuplicateItems
     *
     * This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     *
     * @return bool
     */
    public function getHideDuplicateItems()
    {
        return $this->hideDuplicateItems;
    }

    /**
     * Sets a new hideDuplicateItems
     *
     * This filter is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     *
     * @param bool $hideDuplicateItems
     * @return self
     */
    public function setHideDuplicateItems($hideDuplicateItems)
    {
        $this->hideDuplicateItems = $hideDuplicateItems;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getIncludeSelector();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeSelector", $value);
        }
        $value = $this->getAvailableItemsOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AvailableItemsOnly", $value);
        }
        $value = $this->getDomainName();
        if (null !== $value && !empty($this->getDomainName())) {
            $writer->write(array_map(function ($v) {return ["DomainName" => $v];}, $value));
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getQueryKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QueryKeywords", $value);
        }
        $value = $this->getProductSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSort", $value);
        }
        $value = $this->getSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SortOrder", $value);
        }
        $value = $this->getMaxEntries();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxEntries", $value);
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getHideDuplicateItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HideDuplicateItems", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeSelector');
        if (null !== $value) {
            $this->setIncludeSelector($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AvailableItemsOnly');
        if (null !== $value) {
            $this->setAvailableItemsOnly($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomainName', true);
        if (null !== $value && !empty($value)) {
            $this->setDomainName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID(\Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QueryKeywords');
        if (null !== $value) {
            $this->setQueryKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSort');
        if (null !== $value) {
            $this->setProductSort($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SortOrder');
        if (null !== $value) {
            $this->setSortOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxEntries');
        if (null !== $value) {
            $this->setMaxEntries($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HideDuplicateItems');
        if (null !== $value) {
            $this->setHideDuplicateItems($value);
        }
    }
}
