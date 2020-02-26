<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing PaginationInputType
 *
 * Controls the pagination of the result set. Child elements specify the maximum
 *  number of item listings to return per call and which page of data to return.
 *  Controls which listings are returned in the response, but does not control
 *  the details associated with the returned items.
 * XSD Type: PaginationInput
 */
class PaginationInputType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Specifies which subset of data (or "page") to return in the call
     *  response. The number of data pages is determined by the total number of
     *  items matching the request search criteria (returned in
     *  paginationOutput.totalEntries) divided by the number of entries to
     *  display in each response (entriesPerPage). You can return up to the first
     *  100 pages of the result set by issuing multiple requests and specifying,
     *  in sequence, the pages to return.
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Specifies the maximum number of entries to return in a single call. If
     *  the number of entries found on the specified pageNumber is less than the
     *  value specified here, the number of items returned will be less than the
     *  value of entriesPerPage. This indicates the end of the result set.
     *  <br><br>
     *  If entriesPerPage is set to a number greater than 100, the default value,
     *  100, will be used.
     *
     * @var int $entriesPerPage
     */
    private $entriesPerPage = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as pageNumber
     *
     * Specifies which subset of data (or "page") to return in the call
     *  response. The number of data pages is determined by the total number of
     *  items matching the request search criteria (returned in
     *  paginationOutput.totalEntries) divided by the number of entries to
     *  display in each response (entriesPerPage). You can return up to the first
     *  100 pages of the result set by issuing multiple requests and specifying,
     *  in sequence, the pages to return.
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
     * Specifies which subset of data (or "page") to return in the call
     *  response. The number of data pages is determined by the total number of
     *  items matching the request search criteria (returned in
     *  paginationOutput.totalEntries) divided by the number of entries to
     *  display in each response (entriesPerPage). You can return up to the first
     *  100 pages of the result set by issuing multiple requests and specifying,
     *  in sequence, the pages to return.
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
     * Specifies the maximum number of entries to return in a single call. If
     *  the number of entries found on the specified pageNumber is less than the
     *  value specified here, the number of items returned will be less than the
     *  value of entriesPerPage. This indicates the end of the result set.
     *  <br><br>
     *  If entriesPerPage is set to a number greater than 100, the default value,
     *  100, will be used.
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
     * Specifies the maximum number of entries to return in a single call. If
     *  the number of entries found on the specified pageNumber is less than the
     *  value specified here, the number of items returned will be less than the
     *  value of entriesPerPage. This indicates the end of the result set.
     *  <br><br>
     *  If entriesPerPage is set to a number greater than 100, the default value,
     *  100, will be used.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}pageNumber');
        if (null !== $value) {
            $this->setPageNumber($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}entriesPerPage');
        if (null !== $value) {
            $this->setEntriesPerPage($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
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
