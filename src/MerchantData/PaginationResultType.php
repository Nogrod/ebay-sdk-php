<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginationResultType
 *
 * Shows the pagination of data returned by call requests.
 *  Pagination of returned data is not needed nor
 *  supported for every Trading API call. See the documentation for
 *  individual calls to determine whether pagination is
 *  supported, required, or desirable.
 * XSD Type: PaginationResultType
 */
class PaginationResultType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the total number of pages of data that could be returned by repeated
     *  requests. Returned with a value of 0 if no pages are available.
     *
     * @var int $totalNumberOfPages
     */
    private $totalNumberOfPages = null;

    /**
     * Indicates the total number of entries that could be returned by repeated
     *  call requests. Returned with a value of 0 if no entries are available.
     *
     * @var int $totalNumberOfEntries
     */
    private $totalNumberOfEntries = null;

    /**
     * Gets as totalNumberOfPages
     *
     * Indicates the total number of pages of data that could be returned by repeated
     *  requests. Returned with a value of 0 if no pages are available.
     *
     * @return int
     */
    public function getTotalNumberOfPages()
    {
        return $this->totalNumberOfPages;
    }

    /**
     * Sets a new totalNumberOfPages
     *
     * Indicates the total number of pages of data that could be returned by repeated
     *  requests. Returned with a value of 0 if no pages are available.
     *
     * @param int $totalNumberOfPages
     * @return self
     */
    public function setTotalNumberOfPages($totalNumberOfPages)
    {
        $this->totalNumberOfPages = $totalNumberOfPages;
        return $this;
    }

    /**
     * Gets as totalNumberOfEntries
     *
     * Indicates the total number of entries that could be returned by repeated
     *  call requests. Returned with a value of 0 if no entries are available.
     *
     * @return int
     */
    public function getTotalNumberOfEntries()
    {
        return $this->totalNumberOfEntries;
    }

    /**
     * Sets a new totalNumberOfEntries
     *
     * Indicates the total number of entries that could be returned by repeated
     *  call requests. Returned with a value of 0 if no entries are available.
     *
     * @param int $totalNumberOfEntries
     * @return self
     */
    public function setTotalNumberOfEntries($totalNumberOfEntries)
    {
        $this->totalNumberOfEntries = $totalNumberOfEntries;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalNumberOfPages();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalNumberOfPages", $value);
        }
        $value = $this->getTotalNumberOfEntries();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalNumberOfEntries", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalNumberOfPages');
        if (null !== $value) {
            $this->setTotalNumberOfPages($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalNumberOfEntries');
        if (null !== $value) {
            $this->setTotalNumberOfEntries($value);
        }
    }
}
