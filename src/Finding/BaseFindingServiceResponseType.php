<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BaseFindingServiceResponseType
 *
 * Base response container for all Finding Service operations.
 * XSD Type: BaseFindingServiceResponse
 */
class BaseFindingServiceResponseType extends BaseServiceResponseType
{
    /**
     * Container for the item listings that matched the search criteria.
     *  The data for each item is returned in individual containers, if
     *  any matches were found.
     *
     * @var \Nogrod\eBaySDK\Finding\SearchResultType $searchResult
     */
    private $searchResult = null;

    /**
     * Indicates the pagination of the result set. Child elements indicate
     *  the page number that is returned, the maximum number of item listings
     *  to return per page, total number of pages that can be returned, and
     *  the total number of listings that match the search criteria.
     *
     * @var \Nogrod\eBaySDK\Finding\PaginationOutputType $paginationOutput
     */
    private $paginationOutput = null;

    /**
     * A URL to view the search results on the eBay web site. The search
     *  results on the web site will use the same pagination as the API
     *  search results.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  eBay URLs returned in fields, such as <b
     *  class="con">viewItemURL</b>, are subject to syntax and other
     *  changes without notice. To avoid problems in your application when
     *  eBay alters the URL format, we advise you to avoid parsing eBay URLs
     *  programmatically. We strive to ensure that other fields in the
     *  response contain all the information that is encoded in the URL, and
     *  more.
     *  </span>
     *
     * @var string $itemSearchURL
     */
    private $itemSearchURL = null;

    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\Finding\ExtensionTypeType[] $extension
     */
    private $extension = [
        
    ];

    /**
     * Gets as searchResult
     *
     * Container for the item listings that matched the search criteria.
     *  The data for each item is returned in individual containers, if
     *  any matches were found.
     *
     * @return \Nogrod\eBaySDK\Finding\SearchResultType
     */
    public function getSearchResult()
    {
        return $this->searchResult;
    }

    /**
     * Sets a new searchResult
     *
     * Container for the item listings that matched the search criteria.
     *  The data for each item is returned in individual containers, if
     *  any matches were found.
     *
     * @param \Nogrod\eBaySDK\Finding\SearchResultType $searchResult
     * @return self
     */
    public function setSearchResult(\Nogrod\eBaySDK\Finding\SearchResultType $searchResult)
    {
        $this->searchResult = $searchResult;
        return $this;
    }

    /**
     * Gets as paginationOutput
     *
     * Indicates the pagination of the result set. Child elements indicate
     *  the page number that is returned, the maximum number of item listings
     *  to return per page, total number of pages that can be returned, and
     *  the total number of listings that match the search criteria.
     *
     * @return \Nogrod\eBaySDK\Finding\PaginationOutputType
     */
    public function getPaginationOutput()
    {
        return $this->paginationOutput;
    }

    /**
     * Sets a new paginationOutput
     *
     * Indicates the pagination of the result set. Child elements indicate
     *  the page number that is returned, the maximum number of item listings
     *  to return per page, total number of pages that can be returned, and
     *  the total number of listings that match the search criteria.
     *
     * @param \Nogrod\eBaySDK\Finding\PaginationOutputType $paginationOutput
     * @return self
     */
    public function setPaginationOutput(\Nogrod\eBaySDK\Finding\PaginationOutputType $paginationOutput)
    {
        $this->paginationOutput = $paginationOutput;
        return $this;
    }

    /**
     * Gets as itemSearchURL
     *
     * A URL to view the search results on the eBay web site. The search
     *  results on the web site will use the same pagination as the API
     *  search results.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  eBay URLs returned in fields, such as <b
     *  class="con">viewItemURL</b>, are subject to syntax and other
     *  changes without notice. To avoid problems in your application when
     *  eBay alters the URL format, we advise you to avoid parsing eBay URLs
     *  programmatically. We strive to ensure that other fields in the
     *  response contain all the information that is encoded in the URL, and
     *  more.
     *  </span>
     *
     * @return string
     */
    public function getItemSearchURL()
    {
        return $this->itemSearchURL;
    }

    /**
     * Sets a new itemSearchURL
     *
     * A URL to view the search results on the eBay web site. The search
     *  results on the web site will use the same pagination as the API
     *  search results.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  eBay URLs returned in fields, such as <b
     *  class="con">viewItemURL</b>, are subject to syntax and other
     *  changes without notice. To avoid problems in your application when
     *  eBay alters the URL format, we advise you to avoid parsing eBay URLs
     *  programmatically. We strive to ensure that other fields in the
     *  response contain all the information that is encoded in the URL, and
     *  more.
     *  </span>
     *
     * @param string $itemSearchURL
     * @return self
     */
    public function setItemSearchURL($itemSearchURL)
    {
        $this->itemSearchURL = $itemSearchURL;
        return $this;
    }

    /**
     * Adds as extension
     *
     * Reserved for future use.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ExtensionTypeType $extension
     */
    public function addToExtension(\Nogrod\eBaySDK\Finding\ExtensionTypeType $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * Reserved for future use.
     *
     * @return \Nogrod\eBaySDK\Finding\ExtensionTypeType[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Reserved for future use.
     *
     * @param \Nogrod\eBaySDK\Finding\ExtensionTypeType[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSearchResult();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}searchResult", $value);
        }
        $value = $this->getPaginationOutput();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}paginationOutput", $value);
        }
        $value = $this->getItemSearchURL();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}itemSearchURL", $value);
        }
        $value = $this->getExtension();
        if (null !== $value && !empty($this->getExtension())) {
            $writer->write(array_map(function ($v) {
                return ["extension" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}searchResult');
        if (null !== $value) {
            $this->setSearchResult(\Nogrod\eBaySDK\Finding\SearchResultType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}paginationOutput');
        if (null !== $value) {
            $this->setPaginationOutput(\Nogrod\eBaySDK\Finding\PaginationOutputType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}itemSearchURL');
        if (null !== $value) {
            $this->setItemSearchURL($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}extension', true);
        if (null !== $value && !empty($value)) {
            $this->setExtension(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\ExtensionTypeType::fromKeyValue($v);
            }, $value));
        }
    }
}
