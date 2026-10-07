<?php

namespace Nogrod\eBaySDK\Trading;

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
class PaginationResultType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->totalNumberOfPages;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalNumberOfPages', null, (string) $value);
        }
        $value = $this->totalNumberOfEntries;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalNumberOfEntries', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaginationResultType
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
                case 'TotalNumberOfPages':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalNumberOfPages = (int) $value;
                    }
                    return true;
                case 'TotalNumberOfEntries':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalNumberOfEntries = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['TotalNumberOfPages'] = $this->totalNumberOfPages;
        $data['TotalNumberOfEntries'] = $this->totalNumberOfEntries;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
