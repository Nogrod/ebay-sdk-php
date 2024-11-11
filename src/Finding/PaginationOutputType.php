<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginationOutputType
 *
 * Shows the pagination data for the item search. Child elements include the
 *  page number returned, the maximum entries returned per page, the total number
 *  of pages that can be returned, and the total number of items that match the
 *  search criteria.
 * XSD Type: PaginationOutput
 */
class PaginationOutputType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The subset of item data returned in the current response. Search results
     *  are divided into sets, or "pages," of item data. The number of pages is
     *  equal to the total number of items matching the search criteria divided
     *  by the value specified for entriesPerPage in the request. The response
     *  for a request contains one "page" of item data.
     *  <br> <br>
     *  This returned value indicates the page number of item data returned (a
     *  subset of the complete result set). If this field contains 1, the
     *  response contains the first page of item data (the default). If the value
     *  returned in totalEntries is less than the value for entriesPerPage,
     *  pageNumber returns 1 and the response contains the entire result set.
     *  <br> <br>
     *  The value of pageNumber is normally equal to the value input for
     *  paginationInput.pageNumber. However, if the number input for pageNumber
     *  is greater than the total possible pages of output, eBay returns the last
     *  page of item data in the result set, and the value for pageNumber is set
     *  to the respective (last) page number.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * The maximum number of items that can be returned in the response. This
     *  number is always equal to the value input for
     *  paginationInput.entriesPerPage.
     *  <br> <br>
     *  The end of the result set has been reached if the number specified for
     *  entriesPerPage is greater than the number of items found on the specified
     *  pageNumber. In this case, there will be fewer items returned than the
     *  number specified in entriesPerPage. This can be determined by comparing
     *  the entriesPerPage value with the value returned in the count attribute
     *  for the searchResult field.
     *
     * @var int $entriesPerPage
     */
    private $entriesPerPage = null;

    /**
     * The total number of pages of data that could be returned by repeated
     *  search requests. Note that if you modify the value of
     *  inputPagination.entriesPerPage in a request, the value output for
     *  totalPages will change. A value of "0" is returned if eBay does not find
     *  any items that match the search criteria.
     *
     * @var int $totalPages
     */
    private $totalPages = null;

    /**
     * The total number of items found that match the search criteria in your
     *  request. Depending on the input value for entriesPerPage, the response
     *  might include only a portion (a page) of the entire result set. A value
     *  of "0" is returned if eBay does not find any items that match the search
     *  criteria.
     *
     * @var int $totalEntries
     */
    private $totalEntries = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as pageNumber
     *
     * The subset of item data returned in the current response. Search results
     *  are divided into sets, or "pages," of item data. The number of pages is
     *  equal to the total number of items matching the search criteria divided
     *  by the value specified for entriesPerPage in the request. The response
     *  for a request contains one "page" of item data.
     *  <br> <br>
     *  This returned value indicates the page number of item data returned (a
     *  subset of the complete result set). If this field contains 1, the
     *  response contains the first page of item data (the default). If the value
     *  returned in totalEntries is less than the value for entriesPerPage,
     *  pageNumber returns 1 and the response contains the entire result set.
     *  <br> <br>
     *  The value of pageNumber is normally equal to the value input for
     *  paginationInput.pageNumber. However, if the number input for pageNumber
     *  is greater than the total possible pages of output, eBay returns the last
     *  page of item data in the result set, and the value for pageNumber is set
     *  to the respective (last) page number.
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
     * The subset of item data returned in the current response. Search results
     *  are divided into sets, or "pages," of item data. The number of pages is
     *  equal to the total number of items matching the search criteria divided
     *  by the value specified for entriesPerPage in the request. The response
     *  for a request contains one "page" of item data.
     *  <br> <br>
     *  This returned value indicates the page number of item data returned (a
     *  subset of the complete result set). If this field contains 1, the
     *  response contains the first page of item data (the default). If the value
     *  returned in totalEntries is less than the value for entriesPerPage,
     *  pageNumber returns 1 and the response contains the entire result set.
     *  <br> <br>
     *  The value of pageNumber is normally equal to the value input for
     *  paginationInput.pageNumber. However, if the number input for pageNumber
     *  is greater than the total possible pages of output, eBay returns the last
     *  page of item data in the result set, and the value for pageNumber is set
     *  to the respective (last) page number.
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
     * Gets as entriesPerPage
     *
     * The maximum number of items that can be returned in the response. This
     *  number is always equal to the value input for
     *  paginationInput.entriesPerPage.
     *  <br> <br>
     *  The end of the result set has been reached if the number specified for
     *  entriesPerPage is greater than the number of items found on the specified
     *  pageNumber. In this case, there will be fewer items returned than the
     *  number specified in entriesPerPage. This can be determined by comparing
     *  the entriesPerPage value with the value returned in the count attribute
     *  for the searchResult field.
     *
     * @return int
     */
    public function getEntriesPerPage()
    {
        return $this->entriesPerPage;
    }

    /**
     * Sets a new entriesPerPage
     *
     * The maximum number of items that can be returned in the response. This
     *  number is always equal to the value input for
     *  paginationInput.entriesPerPage.
     *  <br> <br>
     *  The end of the result set has been reached if the number specified for
     *  entriesPerPage is greater than the number of items found on the specified
     *  pageNumber. In this case, there will be fewer items returned than the
     *  number specified in entriesPerPage. This can be determined by comparing
     *  the entriesPerPage value with the value returned in the count attribute
     *  for the searchResult field.
     *
     * @param int $entriesPerPage
     * @return self
     */
    public function setEntriesPerPage($entriesPerPage)
    {
        $this->entriesPerPage = $entriesPerPage;
        return $this;
    }

    /**
     * Gets as totalPages
     *
     * The total number of pages of data that could be returned by repeated
     *  search requests. Note that if you modify the value of
     *  inputPagination.entriesPerPage in a request, the value output for
     *  totalPages will change. A value of "0" is returned if eBay does not find
     *  any items that match the search criteria.
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * Sets a new totalPages
     *
     * The total number of pages of data that could be returned by repeated
     *  search requests. Note that if you modify the value of
     *  inputPagination.entriesPerPage in a request, the value output for
     *  totalPages will change. A value of "0" is returned if eBay does not find
     *  any items that match the search criteria.
     *
     * @param int $totalPages
     * @return self
     */
    public function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * Gets as totalEntries
     *
     * The total number of items found that match the search criteria in your
     *  request. Depending on the input value for entriesPerPage, the response
     *  might include only a portion (a page) of the entire result set. A value
     *  of "0" is returned if eBay does not find any items that match the search
     *  criteria.
     *
     * @return int
     */
    public function getTotalEntries()
    {
        return $this->totalEntries;
    }

    /**
     * Sets a new totalEntries
     *
     * The total number of items found that match the search criteria in your
     *  request. Depending on the input value for entriesPerPage, the response
     *  might include only a portion (a page) of the entire result set. A value
     *  of "0" is returned if eBay does not find any items that match the search
     *  criteria.
     *
     * @param int $totalEntries
     * @return self
     */
    public function setTotalEntries($totalEntries)
    {
        $this->totalEntries = $totalEntries;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getPageNumber();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}pageNumber", $value);
        }
        $value = $this->getEntriesPerPage();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}entriesPerPage", $value);
        }
        $value = $this->getTotalPages();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}totalPages", $value);
        }
        $value = $this->getTotalEntries();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}totalEntries", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}pageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}entriesPerPage');
        if (null !== $value) {
            $this->setEntriesPerPage($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}totalPages');
        if (null !== $value) {
            $this->setTotalPages($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}totalEntries');
        if (null !== $value) {
            $this->setTotalEntries($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
