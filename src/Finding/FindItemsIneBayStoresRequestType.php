<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindItemsIneBayStoresRequestType
 *
 * Use findItemsIneBayStores to find items listed in eBay stores. Specify
 *  storeName in the request to retrieve all listings within a single store. You
 *  can combine storeName with keywords to find specific items, or use keywords
 *  without storeName to search for items in all eBay stores.
 *  <br><br>
 *  Search results can be filtered by item details or aspects and sorted by a
 *  variety of criteria.
 * XSD Type: FindItemsIneBayStoresRequest
 */
class FindItemsIneBayStoresRequestType extends BaseFindingServiceRequestType
{
    /**
     * Specify one or more words to use in a search query for finding items
     *  on eBay. By default, queries search item titles only. When running
     *  queries, it is best to include complete keywords values--eBay checks
     *  words in context with each other. If you are using a URL request and
     *  your keyword query consists of multiple words, use "%20" to separate
     *  the words. For example, use "Harry%20Potter" to search for items
     *  containing those words in any order. Queries aren't case-sensitive,
     *  so it doesn't matter whether you use uppercase or lowercase letters.
     *  <br><br>
     *  You can incorporate wildcards in a multi-word search. For example,
     *  "ap*%20ip*" returns results for "apple ipod" among other matches. The
     *  words "and" and "or" are treated like any other word (and not their
     *  logical connotation). Only use "and", "or", or "the" if you are
     *  searching for listings containing those specific words.
     *  <br><br>
     *  You must specify keywords when you are searching across all eBay
     *  stores. That is, <b class="con">keywords</b> is required
     *  if <b class="con">storeName</b> is not specified in the
     *  request.
     *
     * @var string $keywords
     */
    private $keywords = null;

    /**
     * The name of the eBay store to search. Returns all items in the store,
     *  or can be used with keywords to search for specific items in an eBay
     *  store. If you do not specify keywords, you must specify storeName.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Store names are case sensitive. Also, if the store name contains an
     *  ampersand (&), you must use the & character entity (&
     *  amp;) in its place.
     *  </span>
     *  If you do not specify <b class="con">storeName</b> in the
     *  request, the search is across all eBay stores. When searching across
     *  all stores, you must specify keywords.
     *  <br><br>
     *  The results can be filtered by item listing details or aspects.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * Reduce the number of items returned by a find request using item
     *  filters. Use <b class="con">itemFilter</b> to specify
     *  name/value pairs. You can include multiple item filters in a single
     *  request.
     *
     * @var \Nogrod\eBaySDK\Finding\ItemFilterType[] $itemFilter
     */
    private $itemFilter = [

    ];

    /**
     * Defines what data to return, in addition to the default set of data,
     *  in a response.
     *  <br><br>
     *  If you don't specify this field, eBay returns a default set of item
     *  fields. Use outputSelector to include more information in the
     *  response. The additional data is grouped into discrete nodes. You can
     *  specify multiple nodes by including this field multiple times, as
     *  needed, in the request.
     *  <br><br>
     *  If you specify this field, the additional fields returned can affect
     *  the call's response time (performance), including in the case with
     *  feedback data.
     *
     * @var string[] $outputSelector
     */
    private $outputSelector = [

    ];

    /**
     * Aspect filters refine (limit) the number of items returned by a find
     *  request. Obtain input values for aspectFilter fields from an
     *  aspectHistogramContainer returned in the response of a previous
     *  query.
     *  <br><br>
     *  By issuing a series of find queries, you can continually refine the
     *  items returned in your responses. Do this by repeating a query using
     *  the aspect values returned in one response as the input values to
     *  your next query.
     *  <br><br/>
     *  For example, the aspectHistogramContainer in a response on
     *  Men's Shoes could contain an aspect of Size, along with "aspect
     *  values" for the different sizes currently available in Men's Shoes.
     *  By populating aspectFilter fields with the values returned in an
     *  aspectHistogramContainer, you can refine the item results returned by
     *  your new query.
     *
     * @var \Nogrod\eBaySDK\Finding\AspectFilterType[] $aspectFilter
     */
    private $aspectFilter = [

    ];

    /**
     * Restricts results to items listed within the specified domain.
     *  Domains are a buy-side grouping of items. such as shoes or digital
     *  cameras. A domain can span multiple eBay categories.
     *
     * @var \Nogrod\eBaySDK\Finding\DomainFilterType[] $domainFilter
     */
    private $domainFilter = [

    ];

    /**
     * Specifies the category from which you want to retrieve item listings.
     *  This field can be repeated to include multiple categories.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Up to three (3) categories can be specified.
     *  <br><br>
     *  Category searches are not supported on the eBay Italy site (global ID
     *  EBAY-IT) at this time.
     *
     * @var string[] $categoryId
     */
    private $categoryId = [

    ];

    /**
     * Gets as keywords
     *
     * Specify one or more words to use in a search query for finding items
     *  on eBay. By default, queries search item titles only. When running
     *  queries, it is best to include complete keywords values--eBay checks
     *  words in context with each other. If you are using a URL request and
     *  your keyword query consists of multiple words, use "%20" to separate
     *  the words. For example, use "Harry%20Potter" to search for items
     *  containing those words in any order. Queries aren't case-sensitive,
     *  so it doesn't matter whether you use uppercase or lowercase letters.
     *  <br><br>
     *  You can incorporate wildcards in a multi-word search. For example,
     *  "ap*%20ip*" returns results for "apple ipod" among other matches. The
     *  words "and" and "or" are treated like any other word (and not their
     *  logical connotation). Only use "and", "or", or "the" if you are
     *  searching for listings containing those specific words.
     *  <br><br>
     *  You must specify keywords when you are searching across all eBay
     *  stores. That is, <b class="con">keywords</b> is required
     *  if <b class="con">storeName</b> is not specified in the
     *  request.
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * Specify one or more words to use in a search query for finding items
     *  on eBay. By default, queries search item titles only. When running
     *  queries, it is best to include complete keywords values--eBay checks
     *  words in context with each other. If you are using a URL request and
     *  your keyword query consists of multiple words, use "%20" to separate
     *  the words. For example, use "Harry%20Potter" to search for items
     *  containing those words in any order. Queries aren't case-sensitive,
     *  so it doesn't matter whether you use uppercase or lowercase letters.
     *  <br><br>
     *  You can incorporate wildcards in a multi-word search. For example,
     *  "ap*%20ip*" returns results for "apple ipod" among other matches. The
     *  words "and" and "or" are treated like any other word (and not their
     *  logical connotation). Only use "and", "or", or "the" if you are
     *  searching for listings containing those specific words.
     *  <br><br>
     *  You must specify keywords when you are searching across all eBay
     *  stores. That is, <b class="con">keywords</b> is required
     *  if <b class="con">storeName</b> is not specified in the
     *  request.
     *
     * @param string $keywords
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as storeName
     *
     * The name of the eBay store to search. Returns all items in the store,
     *  or can be used with keywords to search for specific items in an eBay
     *  store. If you do not specify keywords, you must specify storeName.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Store names are case sensitive. Also, if the store name contains an
     *  ampersand (&), you must use the & character entity (&
     *  amp;) in its place.
     *  </span>
     *  If you do not specify <b class="con">storeName</b> in the
     *  request, the search is across all eBay stores. When searching across
     *  all stores, you must specify keywords.
     *  <br><br>
     *  The results can be filtered by item listing details or aspects.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Sets a new storeName
     *
     * The name of the eBay store to search. Returns all items in the store,
     *  or can be used with keywords to search for specific items in an eBay
     *  store. If you do not specify keywords, you must specify storeName.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Store names are case sensitive. Also, if the store name contains an
     *  ampersand (&), you must use the & character entity (&
     *  amp;) in its place.
     *  </span>
     *  If you do not specify <b class="con">storeName</b> in the
     *  request, the search is across all eBay stores. When searching across
     *  all stores, you must specify keywords.
     *  <br><br>
     *  The results can be filtered by item listing details or aspects.
     *
     * @param string $storeName
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }

    /**
     * Adds as itemFilter
     *
     * Reduce the number of items returned by a find request using item
     *  filters. Use <b class="con">itemFilter</b> to specify
     *  name/value pairs. You can include multiple item filters in a single
     *  request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ItemFilterType $itemFilter
     */
    public function addToItemFilter(\Nogrod\eBaySDK\Finding\ItemFilterType $itemFilter)
    {
        $this->itemFilter[] = $itemFilter;
        return $this;
    }

    /**
     * isset itemFilter
     *
     * Reduce the number of items returned by a find request using item
     *  filters. Use <b class="con">itemFilter</b> to specify
     *  name/value pairs. You can include multiple item filters in a single
     *  request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemFilter($index)
    {
        return isset($this->itemFilter[$index]);
    }

    /**
     * unset itemFilter
     *
     * Reduce the number of items returned by a find request using item
     *  filters. Use <b class="con">itemFilter</b> to specify
     *  name/value pairs. You can include multiple item filters in a single
     *  request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemFilter($index)
    {
        unset($this->itemFilter[$index]);
    }

    /**
     * Gets as itemFilter
     *
     * Reduce the number of items returned by a find request using item
     *  filters. Use <b class="con">itemFilter</b> to specify
     *  name/value pairs. You can include multiple item filters in a single
     *  request.
     *
     * @return \Nogrod\eBaySDK\Finding\ItemFilterType[]
     */
    public function getItemFilter()
    {
        return $this->itemFilter;
    }

    /**
     * Sets a new itemFilter
     *
     * Reduce the number of items returned by a find request using item
     *  filters. Use <b class="con">itemFilter</b> to specify
     *  name/value pairs. You can include multiple item filters in a single
     *  request.
     *
     * @param \Nogrod\eBaySDK\Finding\ItemFilterType[] $itemFilter
     * @return self
     */
    public function setItemFilter(array $itemFilter)
    {
        $this->itemFilter = $itemFilter;
        return $this;
    }

    /**
     * Adds as outputSelector
     *
     * Defines what data to return, in addition to the default set of data,
     *  in a response.
     *  <br><br>
     *  If you don't specify this field, eBay returns a default set of item
     *  fields. Use outputSelector to include more information in the
     *  response. The additional data is grouped into discrete nodes. You can
     *  specify multiple nodes by including this field multiple times, as
     *  needed, in the request.
     *  <br><br>
     *  If you specify this field, the additional fields returned can affect
     *  the call's response time (performance), including in the case with
     *  feedback data.
     *
     * @return self
     * @param string $outputSelector
     */
    public function addToOutputSelector($outputSelector)
    {
        $this->outputSelector[] = $outputSelector;
        return $this;
    }

    /**
     * isset outputSelector
     *
     * Defines what data to return, in addition to the default set of data,
     *  in a response.
     *  <br><br>
     *  If you don't specify this field, eBay returns a default set of item
     *  fields. Use outputSelector to include more information in the
     *  response. The additional data is grouped into discrete nodes. You can
     *  specify multiple nodes by including this field multiple times, as
     *  needed, in the request.
     *  <br><br>
     *  If you specify this field, the additional fields returned can affect
     *  the call's response time (performance), including in the case with
     *  feedback data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutputSelector($index)
    {
        return isset($this->outputSelector[$index]);
    }

    /**
     * unset outputSelector
     *
     * Defines what data to return, in addition to the default set of data,
     *  in a response.
     *  <br><br>
     *  If you don't specify this field, eBay returns a default set of item
     *  fields. Use outputSelector to include more information in the
     *  response. The additional data is grouped into discrete nodes. You can
     *  specify multiple nodes by including this field multiple times, as
     *  needed, in the request.
     *  <br><br>
     *  If you specify this field, the additional fields returned can affect
     *  the call's response time (performance), including in the case with
     *  feedback data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutputSelector($index)
    {
        unset($this->outputSelector[$index]);
    }

    /**
     * Gets as outputSelector
     *
     * Defines what data to return, in addition to the default set of data,
     *  in a response.
     *  <br><br>
     *  If you don't specify this field, eBay returns a default set of item
     *  fields. Use outputSelector to include more information in the
     *  response. The additional data is grouped into discrete nodes. You can
     *  specify multiple nodes by including this field multiple times, as
     *  needed, in the request.
     *  <br><br>
     *  If you specify this field, the additional fields returned can affect
     *  the call's response time (performance), including in the case with
     *  feedback data.
     *
     * @return string[]
     */
    public function getOutputSelector()
    {
        return $this->outputSelector;
    }

    /**
     * Sets a new outputSelector
     *
     * Defines what data to return, in addition to the default set of data,
     *  in a response.
     *  <br><br>
     *  If you don't specify this field, eBay returns a default set of item
     *  fields. Use outputSelector to include more information in the
     *  response. The additional data is grouped into discrete nodes. You can
     *  specify multiple nodes by including this field multiple times, as
     *  needed, in the request.
     *  <br><br>
     *  If you specify this field, the additional fields returned can affect
     *  the call's response time (performance), including in the case with
     *  feedback data.
     *
     * @param string $outputSelector
     * @return self
     */
    public function setOutputSelector(array $outputSelector)
    {
        $this->outputSelector = $outputSelector;
        return $this;
    }

    /**
     * Adds as aspectFilter
     *
     * Aspect filters refine (limit) the number of items returned by a find
     *  request. Obtain input values for aspectFilter fields from an
     *  aspectHistogramContainer returned in the response of a previous
     *  query.
     *  <br><br>
     *  By issuing a series of find queries, you can continually refine the
     *  items returned in your responses. Do this by repeating a query using
     *  the aspect values returned in one response as the input values to
     *  your next query.
     *  <br><br/>
     *  For example, the aspectHistogramContainer in a response on
     *  Men's Shoes could contain an aspect of Size, along with "aspect
     *  values" for the different sizes currently available in Men's Shoes.
     *  By populating aspectFilter fields with the values returned in an
     *  aspectHistogramContainer, you can refine the item results returned by
     *  your new query.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\AspectFilterType $aspectFilter
     */
    public function addToAspectFilter(\Nogrod\eBaySDK\Finding\AspectFilterType $aspectFilter)
    {
        $this->aspectFilter[] = $aspectFilter;
        return $this;
    }

    /**
     * isset aspectFilter
     *
     * Aspect filters refine (limit) the number of items returned by a find
     *  request. Obtain input values for aspectFilter fields from an
     *  aspectHistogramContainer returned in the response of a previous
     *  query.
     *  <br><br>
     *  By issuing a series of find queries, you can continually refine the
     *  items returned in your responses. Do this by repeating a query using
     *  the aspect values returned in one response as the input values to
     *  your next query.
     *  <br><br/>
     *  For example, the aspectHistogramContainer in a response on
     *  Men's Shoes could contain an aspect of Size, along with "aspect
     *  values" for the different sizes currently available in Men's Shoes.
     *  By populating aspectFilter fields with the values returned in an
     *  aspectHistogramContainer, you can refine the item results returned by
     *  your new query.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAspectFilter($index)
    {
        return isset($this->aspectFilter[$index]);
    }

    /**
     * unset aspectFilter
     *
     * Aspect filters refine (limit) the number of items returned by a find
     *  request. Obtain input values for aspectFilter fields from an
     *  aspectHistogramContainer returned in the response of a previous
     *  query.
     *  <br><br>
     *  By issuing a series of find queries, you can continually refine the
     *  items returned in your responses. Do this by repeating a query using
     *  the aspect values returned in one response as the input values to
     *  your next query.
     *  <br><br/>
     *  For example, the aspectHistogramContainer in a response on
     *  Men's Shoes could contain an aspect of Size, along with "aspect
     *  values" for the different sizes currently available in Men's Shoes.
     *  By populating aspectFilter fields with the values returned in an
     *  aspectHistogramContainer, you can refine the item results returned by
     *  your new query.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAspectFilter($index)
    {
        unset($this->aspectFilter[$index]);
    }

    /**
     * Gets as aspectFilter
     *
     * Aspect filters refine (limit) the number of items returned by a find
     *  request. Obtain input values for aspectFilter fields from an
     *  aspectHistogramContainer returned in the response of a previous
     *  query.
     *  <br><br>
     *  By issuing a series of find queries, you can continually refine the
     *  items returned in your responses. Do this by repeating a query using
     *  the aspect values returned in one response as the input values to
     *  your next query.
     *  <br><br/>
     *  For example, the aspectHistogramContainer in a response on
     *  Men's Shoes could contain an aspect of Size, along with "aspect
     *  values" for the different sizes currently available in Men's Shoes.
     *  By populating aspectFilter fields with the values returned in an
     *  aspectHistogramContainer, you can refine the item results returned by
     *  your new query.
     *
     * @return \Nogrod\eBaySDK\Finding\AspectFilterType[]
     */
    public function getAspectFilter()
    {
        return $this->aspectFilter;
    }

    /**
     * Sets a new aspectFilter
     *
     * Aspect filters refine (limit) the number of items returned by a find
     *  request. Obtain input values for aspectFilter fields from an
     *  aspectHistogramContainer returned in the response of a previous
     *  query.
     *  <br><br>
     *  By issuing a series of find queries, you can continually refine the
     *  items returned in your responses. Do this by repeating a query using
     *  the aspect values returned in one response as the input values to
     *  your next query.
     *  <br><br/>
     *  For example, the aspectHistogramContainer in a response on
     *  Men's Shoes could contain an aspect of Size, along with "aspect
     *  values" for the different sizes currently available in Men's Shoes.
     *  By populating aspectFilter fields with the values returned in an
     *  aspectHistogramContainer, you can refine the item results returned by
     *  your new query.
     *
     * @param \Nogrod\eBaySDK\Finding\AspectFilterType[] $aspectFilter
     * @return self
     */
    public function setAspectFilter(array $aspectFilter)
    {
        $this->aspectFilter = $aspectFilter;
        return $this;
    }

    /**
     * Adds as domainFilter
     *
     * Restricts results to items listed within the specified domain.
     *  Domains are a buy-side grouping of items. such as shoes or digital
     *  cameras. A domain can span multiple eBay categories.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\DomainFilterType $domainFilter
     */
    public function addToDomainFilter(\Nogrod\eBaySDK\Finding\DomainFilterType $domainFilter)
    {
        $this->domainFilter[] = $domainFilter;
        return $this;
    }

    /**
     * isset domainFilter
     *
     * Restricts results to items listed within the specified domain.
     *  Domains are a buy-side grouping of items. such as shoes or digital
     *  cameras. A domain can span multiple eBay categories.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomainFilter($index)
    {
        return isset($this->domainFilter[$index]);
    }

    /**
     * unset domainFilter
     *
     * Restricts results to items listed within the specified domain.
     *  Domains are a buy-side grouping of items. such as shoes or digital
     *  cameras. A domain can span multiple eBay categories.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomainFilter($index)
    {
        unset($this->domainFilter[$index]);
    }

    /**
     * Gets as domainFilter
     *
     * Restricts results to items listed within the specified domain.
     *  Domains are a buy-side grouping of items. such as shoes or digital
     *  cameras. A domain can span multiple eBay categories.
     *
     * @return \Nogrod\eBaySDK\Finding\DomainFilterType[]
     */
    public function getDomainFilter()
    {
        return $this->domainFilter;
    }

    /**
     * Sets a new domainFilter
     *
     * Restricts results to items listed within the specified domain.
     *  Domains are a buy-side grouping of items. such as shoes or digital
     *  cameras. A domain can span multiple eBay categories.
     *
     * @param \Nogrod\eBaySDK\Finding\DomainFilterType[] $domainFilter
     * @return self
     */
    public function setDomainFilter(array $domainFilter)
    {
        $this->domainFilter = $domainFilter;
        return $this;
    }

    /**
     * Adds as categoryId
     *
     * Specifies the category from which you want to retrieve item listings.
     *  This field can be repeated to include multiple categories.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Up to three (3) categories can be specified.
     *  <br><br>
     *  Category searches are not supported on the eBay Italy site (global ID
     *  EBAY-IT) at this time.
     *
     * @return self
     * @param string $categoryId
     */
    public function addToCategoryId($categoryId)
    {
        $this->categoryId[] = $categoryId;
        return $this;
    }

    /**
     * isset categoryId
     *
     * Specifies the category from which you want to retrieve item listings.
     *  This field can be repeated to include multiple categories.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Up to three (3) categories can be specified.
     *  <br><br>
     *  Category searches are not supported on the eBay Italy site (global ID
     *  EBAY-IT) at this time.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryId($index)
    {
        return isset($this->categoryId[$index]);
    }

    /**
     * unset categoryId
     *
     * Specifies the category from which you want to retrieve item listings.
     *  This field can be repeated to include multiple categories.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Up to three (3) categories can be specified.
     *  <br><br>
     *  Category searches are not supported on the eBay Italy site (global ID
     *  EBAY-IT) at this time.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryId($index)
    {
        unset($this->categoryId[$index]);
    }

    /**
     * Gets as categoryId
     *
     * Specifies the category from which you want to retrieve item listings.
     *  This field can be repeated to include multiple categories.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Up to three (3) categories can be specified.
     *  <br><br>
     *  Category searches are not supported on the eBay Italy site (global ID
     *  EBAY-IT) at this time.
     *
     * @return string[]
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * Specifies the category from which you want to retrieve item listings.
     *  This field can be repeated to include multiple categories.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Up to three (3) categories can be specified.
     *  <br><br>
     *  Category searches are not supported on the eBay Italy site (global ID
     *  EBAY-IT) at this time.
     *
     * @param string[] $categoryId
     * @return self
     */
    public function setCategoryId(array $categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getKeywords();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}keywords", $value);
        }
        $value = $this->getStoreName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}storeName", $value);
        }
        $value = $this->getItemFilter();
        if (null !== $value && !empty($this->getItemFilter())) {
            $writer->write(array_map(function ($v) {return ["itemFilter" => $v];}, $value));
        }
        $value = $this->getOutputSelector();
        if (null !== $value && !empty($this->getOutputSelector())) {
            $writer->write(array_map(function ($v) {return ["outputSelector" => $v];}, $value));
        }
        $value = $this->getAspectFilter();
        if (null !== $value && !empty($this->getAspectFilter())) {
            $writer->write(array_map(function ($v) {return ["aspectFilter" => $v];}, $value));
        }
        $value = $this->getDomainFilter();
        if (null !== $value && !empty($this->getDomainFilter())) {
            $writer->write(array_map(function ($v) {return ["domainFilter" => $v];}, $value));
        }
        $value = $this->getCategoryId();
        if (null !== $value && !empty($this->getCategoryId())) {
            $writer->write(array_map(function ($v) {return ["categoryId" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}keywords');
        if (null !== $value) {
            $this->setKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}storeName');
        if (null !== $value) {
            $this->setStoreName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}itemFilter', true);
        if (null !== $value && !empty($value)) {
            $this->setItemFilter(array_map(function ($v) {return \Nogrod\eBaySDK\Finding\ItemFilterType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}outputSelector', true);
        if (null !== $value && !empty($value)) {
            $this->setOutputSelector($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}aspectFilter', true);
        if (null !== $value && !empty($value)) {
            $this->setAspectFilter(array_map(function ($v) {return \Nogrod\eBaySDK\Finding\AspectFilterType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}domainFilter', true);
        if (null !== $value && !empty($value)) {
            $this->setDomainFilter(array_map(function ($v) {return \Nogrod\eBaySDK\Finding\DomainFilterType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}categoryId', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryId($value);
        }
    }
}
