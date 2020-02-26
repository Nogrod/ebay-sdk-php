<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing FindProductsResponseType
 *
 * The base response of the <b>FindProducts </b> call. Based on the search criteria, an array of one or more eBay catalog products are returned in the response, along with pagination data.
 * XSD Type: FindProductsResponseType
 */
class FindProductsResponseType extends AbstractResponseType
{

    /**
     * The total number of pages in the results set based on the current search criteria. The number of pages in the results set will be determined by how many catalog products are found based on the search criteria (<b>QueryKeywords</b> string, <b>DomainName</b> filter(s), and <b>CategoryID</b> restriction), and the number of catalog products to return on each page of results (set in the <b>MaxEntries</b> field). If 200 catalog products were found (as shown in the <b>TotalProducts</b> field), and the <b>MaxEntries</b> value is <code>25</code> (25 catalog products per page), the <b>ApproximatePages</b> value will be <code>8</code> (200 (records)/25 (records per page) = 8 (pages).
     *
     * @var int $approximatePages
     */
    private $approximatePages = null;

    /**
     * This boolean value is returned as <code>true</code> if more pages of catalog product records exist for the current search criteria, and <code>false</code> if the current page or results is the only or last page in the results set based on the current search criteria.
     *  <br /> <br />
     *  If more pages of results are available (value is <code>true</code>), it is advised that the user look at the <b>PageNumber</b> value and at the <b>ApproximatePages</b> value, as this will give the user an idea of how many more pages of results exist based on the current search criteria. After having this knowledge, it is up to the user whether to refine the search a little more to retrieve less results, or perhaps increase the <b>MaxEntries</b> integer value in the call request to retrieve more catalog products per page, or just go ahead and make multiple <b>FindProducts</b> calls to view all pages of results, iterating the <b>PageNumber</b> integer value in the call request by '1' with each subsequent call.
     *
     * @var bool $moreResults
     */
    private $moreResults = null;

    /**
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  This container consist of an array of eBay category domains, and the number of catalog products that belong to each eBay category domain. This array is only returned if the <b>IncludeSelector</b> field is included in the call request and set to a value of <code>DomainHistogram</code>.
     *  <br>
     *  <br>
     *  To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalog product based on an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @var \Nogrod\eBaySDK\Shopping\HistogramEntryType[] $domainHistogram
     */
    private $domainHistogram = null;

    /**
     * This container has been deprecated from the <b>FindProducts</b> call. To retrieve active items associated with a product, you can use the <b>findItemsByProduct</b> call of the Finding API instead.
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleItemType[] $itemArray
     */
    private $itemArray = null;

    /**
     * This integer value shows the current page number of the results set that is being displayed. The number of pages in the results set depends on how many catalog products exist based on the search criteria, and how many catalog products are being returned per page (set in the <b>MaxEntries</b> field in the call request). The total number of pages in the results set is shown in the <b>ApproximatePages</b> field.
     *  <br/><br/>
     *  The <b>PageNumber</b> value in the response always reflects the <b>PageNumber</b> value that is set in the call request, or, if the <b>PageNumber</b> field is not used in the call request, the first (and perhaps only) page is returned by default.
     *  <br/><br/>
     *  If there are multiple pages in the results set, and the user wants to review multiple pages, multiple <b>FindProducts</b> calls are required, iterating the <b>PageNumber</b> integer value in the call request by '1' with each subsequent call.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * A <b>Product</b> container is returned for each eBay catalog product that matches the search criteria. The <b>Product</b> container consists of specific data about the catalog product, including the product title, product identifiers (ePID and any GTIN value(s)), product aspects, a link to eBay product page, and links to stock photos (if any).
     *  <br/><br/>
     *  The number of catalog products returned is dependent on the search criteria in the request. Searches based on a <b>QueryKeywords</b> string will generally return multiple catalog products, but a search based on an eBay Product ID (set in the <b>ProductID</b> field) should only return one catalog product. The number of catalog products returned per page will also depend on the <b>MaxEntries</b> value set in the call request.
     *
     * @var \Nogrod\eBaySDK\Shopping\CatalogProductType[] $product
     */
    private $product = [
        
    ];

    /**
     * This integer value is the total number of catalog products that match the current search criteria. This value can be quite larger than the total number of catalog products returned per page, which is controlled by the <b>MaxEntries</b> value set in the call request. The user can also look at the <b>ApproximatePages</b> field to see how many pages of results exist for the current search criteria.
     *  <br/>
     *
     * @var int $totalProducts
     */
    private $totalProducts = null;

    /**
     * This boolean field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     *
     * @var bool $duplicateItems
     */
    private $duplicateItems = null;

    /**
     * Gets as approximatePages
     *
     * The total number of pages in the results set based on the current search criteria. The number of pages in the results set will be determined by how many catalog products are found based on the search criteria (<b>QueryKeywords</b> string, <b>DomainName</b> filter(s), and <b>CategoryID</b> restriction), and the number of catalog products to return on each page of results (set in the <b>MaxEntries</b> field). If 200 catalog products were found (as shown in the <b>TotalProducts</b> field), and the <b>MaxEntries</b> value is <code>25</code> (25 catalog products per page), the <b>ApproximatePages</b> value will be <code>8</code> (200 (records)/25 (records per page) = 8 (pages).
     *
     * @return int
     */
    public function getApproximatePages()
    {
        return $this->approximatePages;
    }

    /**
     * Sets a new approximatePages
     *
     * The total number of pages in the results set based on the current search criteria. The number of pages in the results set will be determined by how many catalog products are found based on the search criteria (<b>QueryKeywords</b> string, <b>DomainName</b> filter(s), and <b>CategoryID</b> restriction), and the number of catalog products to return on each page of results (set in the <b>MaxEntries</b> field). If 200 catalog products were found (as shown in the <b>TotalProducts</b> field), and the <b>MaxEntries</b> value is <code>25</code> (25 catalog products per page), the <b>ApproximatePages</b> value will be <code>8</code> (200 (records)/25 (records per page) = 8 (pages).
     *
     * @param int $approximatePages
     * @return self
     */
    public function setApproximatePages($approximatePages)
    {
        $this->approximatePages = $approximatePages;
        return $this;
    }

    /**
     * Gets as moreResults
     *
     * This boolean value is returned as <code>true</code> if more pages of catalog product records exist for the current search criteria, and <code>false</code> if the current page or results is the only or last page in the results set based on the current search criteria.
     *  <br /> <br />
     *  If more pages of results are available (value is <code>true</code>), it is advised that the user look at the <b>PageNumber</b> value and at the <b>ApproximatePages</b> value, as this will give the user an idea of how many more pages of results exist based on the current search criteria. After having this knowledge, it is up to the user whether to refine the search a little more to retrieve less results, or perhaps increase the <b>MaxEntries</b> integer value in the call request to retrieve more catalog products per page, or just go ahead and make multiple <b>FindProducts</b> calls to view all pages of results, iterating the <b>PageNumber</b> integer value in the call request by '1' with each subsequent call.
     *
     * @return bool
     */
    public function getMoreResults()
    {
        return $this->moreResults;
    }

    /**
     * Sets a new moreResults
     *
     * This boolean value is returned as <code>true</code> if more pages of catalog product records exist for the current search criteria, and <code>false</code> if the current page or results is the only or last page in the results set based on the current search criteria.
     *  <br /> <br />
     *  If more pages of results are available (value is <code>true</code>), it is advised that the user look at the <b>PageNumber</b> value and at the <b>ApproximatePages</b> value, as this will give the user an idea of how many more pages of results exist based on the current search criteria. After having this knowledge, it is up to the user whether to refine the search a little more to retrieve less results, or perhaps increase the <b>MaxEntries</b> integer value in the call request to retrieve more catalog products per page, or just go ahead and make multiple <b>FindProducts</b> calls to view all pages of results, iterating the <b>PageNumber</b> integer value in the call request by '1' with each subsequent call.
     *
     * @param bool $moreResults
     * @return self
     */
    public function setMoreResults($moreResults)
    {
        $this->moreResults = $moreResults;
        return $this;
    }

    /**
     * Adds as domain
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  This container consist of an array of eBay category domains, and the number of catalog products that belong to each eBay category domain. This array is only returned if the <b>IncludeSelector</b> field is included in the call request and set to a value of <code>DomainHistogram</code>.
     *  <br>
     *  <br>
     *  To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalog product based on an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\HistogramEntryType $domain
     */
    public function addToDomainHistogram(\Nogrod\eBaySDK\Shopping\HistogramEntryType $domain)
    {
        $this->domainHistogram[] = $domain;
        return $this;
    }

    /**
     * isset domainHistogram
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  This container consist of an array of eBay category domains, and the number of catalog products that belong to each eBay category domain. This array is only returned if the <b>IncludeSelector</b> field is included in the call request and set to a value of <code>DomainHistogram</code>.
     *  <br>
     *  <br>
     *  To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalog product based on an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomainHistogram($index)
    {
        return isset($this->domainHistogram[$index]);
    }

    /**
     * unset domainHistogram
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  This container consist of an array of eBay category domains, and the number of catalog products that belong to each eBay category domain. This array is only returned if the <b>IncludeSelector</b> field is included in the call request and set to a value of <code>DomainHistogram</code>.
     *  <br>
     *  <br>
     *  To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalog product based on an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomainHistogram($index)
    {
        unset($this->domainHistogram[$index]);
    }

    /**
     * Gets as domainHistogram
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  This container consist of an array of eBay category domains, and the number of catalog products that belong to each eBay category domain. This array is only returned if the <b>IncludeSelector</b> field is included in the call request and set to a value of <code>DomainHistogram</code>.
     *  <br>
     *  <br>
     *  To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalog product based on an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @return \Nogrod\eBaySDK\Shopping\HistogramEntryType[]
     */
    public function getDomainHistogram()
    {
        return $this->domainHistogram;
    }

    /**
     * Sets a new domainHistogram
     *
     * <span class="tablenote"><b>Important:</b>
     *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer reliable.
     *  </span>
     *  <br>
     *  This container consist of an array of eBay category domains, and the number of catalog products that belong to each eBay category domain. This array is only returned if the <b>IncludeSelector</b> field is included in the call request and set to a value of <code>DomainHistogram</code>.
     *  <br>
     *  <br>
     *  To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do another <b>FindProducts</b> call with one or more <b>DomainName</b> filters.
     *  <br>
     *  <br>
     *  Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalog product based on an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     *
     * @param \Nogrod\eBaySDK\Shopping\HistogramEntryType[] $domainHistogram
     * @return self
     */
    public function setDomainHistogram(array $domainHistogram)
    {
        $this->domainHistogram = $domainHistogram;
        return $this;
    }

    /**
     * Adds as item
     *
     * This container has been deprecated from the <b>FindProducts</b> call. To retrieve active items associated with a product, you can use the <b>findItemsByProduct</b> call of the Finding API instead.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType $item
     */
    public function addToItemArray(\Nogrod\eBaySDK\Shopping\SimpleItemType $item)
    {
        $this->itemArray[] = $item;
        return $this;
    }

    /**
     * isset itemArray
     *
     * This container has been deprecated from the <b>FindProducts</b> call. To retrieve active items associated with a product, you can use the <b>findItemsByProduct</b> call of the Finding API instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemArray($index)
    {
        return isset($this->itemArray[$index]);
    }

    /**
     * unset itemArray
     *
     * This container has been deprecated from the <b>FindProducts</b> call. To retrieve active items associated with a product, you can use the <b>findItemsByProduct</b> call of the Finding API instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemArray($index)
    {
        unset($this->itemArray[$index]);
    }

    /**
     * Gets as itemArray
     *
     * This container has been deprecated from the <b>FindProducts</b> call. To retrieve active items associated with a product, you can use the <b>findItemsByProduct</b> call of the Finding API instead.
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleItemType[]
     */
    public function getItemArray()
    {
        return $this->itemArray;
    }

    /**
     * Sets a new itemArray
     *
     * This container has been deprecated from the <b>FindProducts</b> call. To retrieve active items associated with a product, you can use the <b>findItemsByProduct</b> call of the Finding API instead.
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType[] $itemArray
     * @return self
     */
    public function setItemArray(array $itemArray)
    {
        $this->itemArray = $itemArray;
        return $this;
    }

    /**
     * Gets as pageNumber
     *
     * This integer value shows the current page number of the results set that is being displayed. The number of pages in the results set depends on how many catalog products exist based on the search criteria, and how many catalog products are being returned per page (set in the <b>MaxEntries</b> field in the call request). The total number of pages in the results set is shown in the <b>ApproximatePages</b> field.
     *  <br/><br/>
     *  The <b>PageNumber</b> value in the response always reflects the <b>PageNumber</b> value that is set in the call request, or, if the <b>PageNumber</b> field is not used in the call request, the first (and perhaps only) page is returned by default.
     *  <br/><br/>
     *  If there are multiple pages in the results set, and the user wants to review multiple pages, multiple <b>FindProducts</b> calls are required, iterating the <b>PageNumber</b> integer value in the call request by '1' with each subsequent call.
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
     * This integer value shows the current page number of the results set that is being displayed. The number of pages in the results set depends on how many catalog products exist based on the search criteria, and how many catalog products are being returned per page (set in the <b>MaxEntries</b> field in the call request). The total number of pages in the results set is shown in the <b>ApproximatePages</b> field.
     *  <br/><br/>
     *  The <b>PageNumber</b> value in the response always reflects the <b>PageNumber</b> value that is set in the call request, or, if the <b>PageNumber</b> field is not used in the call request, the first (and perhaps only) page is returned by default.
     *  <br/><br/>
     *  If there are multiple pages in the results set, and the user wants to review multiple pages, multiple <b>FindProducts</b> calls are required, iterating the <b>PageNumber</b> integer value in the call request by '1' with each subsequent call.
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
     * Adds as product
     *
     * A <b>Product</b> container is returned for each eBay catalog product that matches the search criteria. The <b>Product</b> container consists of specific data about the catalog product, including the product title, product identifiers (ePID and any GTIN value(s)), product aspects, a link to eBay product page, and links to stock photos (if any).
     *  <br/><br/>
     *  The number of catalog products returned is dependent on the search criteria in the request. Searches based on a <b>QueryKeywords</b> string will generally return multiple catalog products, but a search based on an eBay Product ID (set in the <b>ProductID</b> field) should only return one catalog product. The number of catalog products returned per page will also depend on the <b>MaxEntries</b> value set in the call request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\CatalogProductType $product
     */
    public function addToProduct(\Nogrod\eBaySDK\Shopping\CatalogProductType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * A <b>Product</b> container is returned for each eBay catalog product that matches the search criteria. The <b>Product</b> container consists of specific data about the catalog product, including the product title, product identifiers (ePID and any GTIN value(s)), product aspects, a link to eBay product page, and links to stock photos (if any).
     *  <br/><br/>
     *  The number of catalog products returned is dependent on the search criteria in the request. Searches based on a <b>QueryKeywords</b> string will generally return multiple catalog products, but a search based on an eBay Product ID (set in the <b>ProductID</b> field) should only return one catalog product. The number of catalog products returned per page will also depend on the <b>MaxEntries</b> value set in the call request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * A <b>Product</b> container is returned for each eBay catalog product that matches the search criteria. The <b>Product</b> container consists of specific data about the catalog product, including the product title, product identifiers (ePID and any GTIN value(s)), product aspects, a link to eBay product page, and links to stock photos (if any).
     *  <br/><br/>
     *  The number of catalog products returned is dependent on the search criteria in the request. Searches based on a <b>QueryKeywords</b> string will generally return multiple catalog products, but a search based on an eBay Product ID (set in the <b>ProductID</b> field) should only return one catalog product. The number of catalog products returned per page will also depend on the <b>MaxEntries</b> value set in the call request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * A <b>Product</b> container is returned for each eBay catalog product that matches the search criteria. The <b>Product</b> container consists of specific data about the catalog product, including the product title, product identifiers (ePID and any GTIN value(s)), product aspects, a link to eBay product page, and links to stock photos (if any).
     *  <br/><br/>
     *  The number of catalog products returned is dependent on the search criteria in the request. Searches based on a <b>QueryKeywords</b> string will generally return multiple catalog products, but a search based on an eBay Product ID (set in the <b>ProductID</b> field) should only return one catalog product. The number of catalog products returned per page will also depend on the <b>MaxEntries</b> value set in the call request.
     *
     * @return \Nogrod\eBaySDK\Shopping\CatalogProductType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * A <b>Product</b> container is returned for each eBay catalog product that matches the search criteria. The <b>Product</b> container consists of specific data about the catalog product, including the product title, product identifiers (ePID and any GTIN value(s)), product aspects, a link to eBay product page, and links to stock photos (if any).
     *  <br/><br/>
     *  The number of catalog products returned is dependent on the search criteria in the request. Searches based on a <b>QueryKeywords</b> string will generally return multiple catalog products, but a search based on an eBay Product ID (set in the <b>ProductID</b> field) should only return one catalog product. The number of catalog products returned per page will also depend on the <b>MaxEntries</b> value set in the call request.
     *
     * @param \Nogrod\eBaySDK\Shopping\CatalogProductType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as totalProducts
     *
     * This integer value is the total number of catalog products that match the current search criteria. This value can be quite larger than the total number of catalog products returned per page, which is controlled by the <b>MaxEntries</b> value set in the call request. The user can also look at the <b>ApproximatePages</b> field to see how many pages of results exist for the current search criteria.
     *  <br/>
     *
     * @return int
     */
    public function getTotalProducts()
    {
        return $this->totalProducts;
    }

    /**
     * Sets a new totalProducts
     *
     * This integer value is the total number of catalog products that match the current search criteria. This value can be quite larger than the total number of catalog products returned per page, which is controlled by the <b>MaxEntries</b> value set in the call request. The user can also look at the <b>ApproximatePages</b> field to see how many pages of results exist for the current search criteria.
     *  <br/>
     *
     * @param int $totalProducts
     * @return self
     */
    public function setTotalProducts($totalProducts)
    {
        $this->totalProducts = $totalProducts;
        return $this;
    }

    /**
     * Gets as duplicateItems
     *
     * This boolean field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     *
     * @return bool
     */
    public function getDuplicateItems()
    {
        return $this->duplicateItems;
    }

    /**
     * Sets a new duplicateItems
     *
     * This boolean field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     *
     * @param bool $duplicateItems
     * @return self
     */
    public function setDuplicateItems($duplicateItems)
    {
        $this->duplicateItems = $duplicateItems;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getApproximatePages();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApproximatePages", $value);
        }
        $value = $this->getMoreResults();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MoreResults", $value);
        }
        $value = $this->getDomainHistogram();
        if (null !== $value && !empty($this->getDomainHistogram())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomainHistogram", array_map(function ($v) {
                return ["Domain" => $v];
            }, $value));
        }
        $value = $this->getItemArray();
        if (null !== $value && !empty($this->getItemArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArray", array_map(function ($v) {
                return ["Item" => $v];
            }, $value));
        }
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageNumber", $value);
        }
        $value = $this->getProduct();
        if (null !== $value && !empty($this->getProduct())) {
            $writer->write(array_map(function ($v) {
                return ["Product" => $v];
            }, $value));
        }
        $value = $this->getTotalProducts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalProducts", $value);
        }
        $value = $this->getDuplicateItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DuplicateItems", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApproximatePages');
        if (null !== $value) {
            $this->setApproximatePages($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MoreResults');
        if (null !== $value) {
            $this->setMoreResults($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomainHistogram', true);
        if (null !== $value && !empty($value)) {
            $this->setDomainHistogram(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\HistogramEntryType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\SimpleItemType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Product', true);
        if (null !== $value && !empty($value)) {
            $this->setProduct(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\CatalogProductType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalProducts');
        if (null !== $value) {
            $this->setTotalProducts($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DuplicateItems');
        if (null !== $value) {
            $this->setDuplicateItems($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
