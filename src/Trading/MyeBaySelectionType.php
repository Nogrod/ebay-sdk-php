<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBaySelectionType
 *
 * Specifies how to return the result list for My eBay features such as saved
 *  searches, favorite sellers, and second chance offers.
 * XSD Type: MyeBaySelectionType
 */
class MyeBaySelectionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Specifies whether or not to include the container in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @var bool $include
     */
    private $include = null;

    /**
     * Specifies whether or not to include the item count in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @var bool $includeItemCount
     */
    private $includeItemCount = null;

    /**
     * This field is not supported.
     *
     * @var bool $includeFavoriteSearcheCount
     */
    private $includeFavoriteSearcheCount = null;

    /**
     * Specifies whether or not to include FavoriteSellerCount in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @var bool $includeFavoriteSellerCount
     */
    private $includeFavoriteSellerCount = null;

    /**
     * Specifies the sort order of the result. Default is Ascending.
     *
     * @var string $sort
     */
    private $sort = null;

    /**
     * Specifies the maximum number of items in the returned list.
     *  If not specified, returns all items in the list.
     *
     * @var int $maxResults
     */
    private $maxResults = null;

    /**
     * Specifies that only the user defined list whose name matches
     *  the given name should be in the returned list. If the user does
     *  not have a matching record, no data is returned. If this
     *  element is omitted, the information for all records is returned.
     *  For use only within the UserDefinedLists element.
     *
     * @var string $userDefinedListName
     */
    private $userDefinedListName = null;

    /**
     * Specify true to return the full user defined list contents in
     *  the response's UserDefinedList containers. A value of
     *  false means only a summary of the user defined list will be
     *  returned. The default value is false.
     *
     * @var bool $includeListContents
     */
    private $includeListContents = null;

    /**
     * Gets as include
     *
     * Specifies whether or not to include the container in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @return bool
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * Specifies whether or not to include the container in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @param bool $include
     * @return self
     */
    public function setInclude($include)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Gets as includeItemCount
     *
     * Specifies whether or not to include the item count in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @return bool
     */
    public function getIncludeItemCount()
    {
        return $this->includeItemCount;
    }

    /**
     * Sets a new includeItemCount
     *
     * Specifies whether or not to include the item count in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @param bool $includeItemCount
     * @return self
     */
    public function setIncludeItemCount($includeItemCount)
    {
        $this->includeItemCount = $includeItemCount;
        return $this;
    }

    /**
     * Gets as includeFavoriteSearcheCount
     *
     * This field is not supported.
     *
     * @return bool
     */
    public function getIncludeFavoriteSearcheCount()
    {
        return $this->includeFavoriteSearcheCount;
    }

    /**
     * Sets a new includeFavoriteSearcheCount
     *
     * This field is not supported.
     *
     * @param bool $includeFavoriteSearcheCount
     * @return self
     */
    public function setIncludeFavoriteSearcheCount($includeFavoriteSearcheCount)
    {
        $this->includeFavoriteSearcheCount = $includeFavoriteSearcheCount;
        return $this;
    }

    /**
     * Gets as includeFavoriteSellerCount
     *
     * Specifies whether or not to include FavoriteSellerCount in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @return bool
     */
    public function getIncludeFavoriteSellerCount()
    {
        return $this->includeFavoriteSellerCount;
    }

    /**
     * Sets a new includeFavoriteSellerCount
     *
     * Specifies whether or not to include FavoriteSellerCount in the response.
     *  Set the value to true to return the default set of fields for the
     *  container. Not needed if you set a value for at least one other field
     *  in the container.
     *  <br><br>
     *  If you set DetailLevel to ReturnAll, set Include to false to exclude
     *  the container from the response.
     *
     * @param bool $includeFavoriteSellerCount
     * @return self
     */
    public function setIncludeFavoriteSellerCount($includeFavoriteSellerCount)
    {
        $this->includeFavoriteSellerCount = $includeFavoriteSellerCount;
        return $this;
    }

    /**
     * Gets as sort
     *
     * Specifies the sort order of the result. Default is Ascending.
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Specifies the sort order of the result. Default is Ascending.
     *
     * @param string $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as maxResults
     *
     * Specifies the maximum number of items in the returned list.
     *  If not specified, returns all items in the list.
     *
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    /**
     * Sets a new maxResults
     *
     * Specifies the maximum number of items in the returned list.
     *  If not specified, returns all items in the list.
     *
     * @param int $maxResults
     * @return self
     */
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
        return $this;
    }

    /**
     * Gets as userDefinedListName
     *
     * Specifies that only the user defined list whose name matches
     *  the given name should be in the returned list. If the user does
     *  not have a matching record, no data is returned. If this
     *  element is omitted, the information for all records is returned.
     *  For use only within the UserDefinedLists element.
     *
     * @return string
     */
    public function getUserDefinedListName()
    {
        return $this->userDefinedListName;
    }

    /**
     * Sets a new userDefinedListName
     *
     * Specifies that only the user defined list whose name matches
     *  the given name should be in the returned list. If the user does
     *  not have a matching record, no data is returned. If this
     *  element is omitted, the information for all records is returned.
     *  For use only within the UserDefinedLists element.
     *
     * @param string $userDefinedListName
     * @return self
     */
    public function setUserDefinedListName($userDefinedListName)
    {
        $this->userDefinedListName = $userDefinedListName;
        return $this;
    }

    /**
     * Gets as includeListContents
     *
     * Specify true to return the full user defined list contents in
     *  the response's UserDefinedList containers. A value of
     *  false means only a summary of the user defined list will be
     *  returned. The default value is false.
     *
     * @return bool
     */
    public function getIncludeListContents()
    {
        return $this->includeListContents;
    }

    /**
     * Sets a new includeListContents
     *
     * Specify true to return the full user defined list contents in
     *  the response's UserDefinedList containers. A value of
     *  false means only a summary of the user defined list will be
     *  returned. The default value is false.
     *
     * @param bool $includeListContents
     * @return self
     */
    public function setIncludeListContents($includeListContents)
    {
        $this->includeListContents = $includeListContents;
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
        $value = $this->include;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Include', null, ($value ? 'true' : 'false'));
        }
        $value = $this->includeItemCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeItemCount', null, ($value ? 'true' : 'false'));
        }
        $value = $this->includeFavoriteSearcheCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeFavoriteSearcheCount', null, ($value ? 'true' : 'false'));
        }
        $value = $this->includeFavoriteSellerCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeFavoriteSellerCount', null, ($value ? 'true' : 'false'));
        }
        $value = $this->sort;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Sort', null, (string) $value);
        }
        $value = $this->maxResults;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxResults', null, (string) $value);
        }
        $value = $this->userDefinedListName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UserDefinedListName', null, (string) $value);
        }
        $value = $this->includeListContents;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeListContents', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyeBaySelectionType
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
                case 'Include':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->include = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IncludeItemCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeItemCount = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IncludeFavoriteSearcheCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeFavoriteSearcheCount = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'IncludeFavoriteSellerCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeFavoriteSellerCount = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'Sort':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sort = $value;
                    }
                    return true;
                case 'MaxResults':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxResults = (int) $value;
                    }
                    return true;
                case 'UserDefinedListName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userDefinedListName = $value;
                    }
                    return true;
                case 'IncludeListContents':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeListContents = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Include'] = $this->include;
        $data['IncludeItemCount'] = $this->includeItemCount;
        $data['IncludeFavoriteSearcheCount'] = $this->includeFavoriteSearcheCount;
        $data['IncludeFavoriteSellerCount'] = $this->includeFavoriteSellerCount;
        $data['Sort'] = $this->sort;
        $data['MaxResults'] = $this->maxResults;
        $data['UserDefinedListName'] = $this->userDefinedListName;
        $data['IncludeListContents'] = $this->includeListContents;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
