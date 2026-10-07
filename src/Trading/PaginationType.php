<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginationType
 *
 * Contains data for controlling pagination in API requests.
 *  Pagination of returned data is required for some calls and not
 *  needed in or not supported for some calls. See the documentation
 *  for individual calls to determine whether pagination is supported,
 *  required, or desirable.
 * XSD Type: PaginationType
 */
class PaginationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This integer value is used to specify the maximum number of entries to return
     *  in a single "page" of data. This value, along with the number of entries that
     *  match the input criteria, will determine the total pages (see
     *  <b>PaginationResult.TotalNumberOfPages</b>) in the result set.
     *  <br/><br/>
     *  The maximum and default values are not the same for all calls. For most <b>Trading API</b> calls, the maximum value is 200 and the default value is 25 entries per page.
     *  <br>
     *
     * @var int $entriesPerPage
     */
    private $entriesPerPage = null;

    /**
     * Specifies the number of the page of data to return in the current call.
     *  Default is 1 for most calls. For some calls, the default is 0. Specify a
     *  positive value equal to or lower than the number of pages available (which you
     *  determine by examining the results of your initial request).
     *  See the documentation for the individual calls to determine the correct
     *  default value.<br>
     *
     * @var int $pageNumber
     */
    private $pageNumber = null;

    /**
     * Gets as entriesPerPage
     *
     * This integer value is used to specify the maximum number of entries to return
     *  in a single "page" of data. This value, along with the number of entries that
     *  match the input criteria, will determine the total pages (see
     *  <b>PaginationResult.TotalNumberOfPages</b>) in the result set.
     *  <br/><br/>
     *  The maximum and default values are not the same for all calls. For most <b>Trading API</b> calls, the maximum value is 200 and the default value is 25 entries per page.
     *  <br>
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
     * This integer value is used to specify the maximum number of entries to return
     *  in a single "page" of data. This value, along with the number of entries that
     *  match the input criteria, will determine the total pages (see
     *  <b>PaginationResult.TotalNumberOfPages</b>) in the result set.
     *  <br/><br/>
     *  The maximum and default values are not the same for all calls. For most <b>Trading API</b> calls, the maximum value is 200 and the default value is 25 entries per page.
     *  <br>
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
     * Gets as pageNumber
     *
     * Specifies the number of the page of data to return in the current call.
     *  Default is 1 for most calls. For some calls, the default is 0. Specify a
     *  positive value equal to or lower than the number of pages available (which you
     *  determine by examining the results of your initial request).
     *  See the documentation for the individual calls to determine the correct
     *  default value.<br>
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
     * Specifies the number of the page of data to return in the current call.
     *  Default is 1 for most calls. For some calls, the default is 0. Specify a
     *  positive value equal to or lower than the number of pages available (which you
     *  determine by examining the results of your initial request).
     *  See the documentation for the individual calls to determine the correct
     *  default value.<br>
     *
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->entriesPerPage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EntriesPerPage', null, (string) $value);
        }
        $value = $this->pageNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PageNumber', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaginationType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'EntriesPerPage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->entriesPerPage = (int) $value;
                    }
                    return true;
                case 'PageNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pageNumber = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
