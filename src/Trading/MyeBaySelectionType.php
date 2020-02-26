<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MyeBaySelectionType
 *
 * Specifies how to return the result list for My eBay features such as saved
 *  searches, favorite sellers, and second chance offers.
 * XSD Type: MyeBaySelectionType
 */
class MyeBaySelectionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInclude();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Include", $value);
        }
        $value = $this->getIncludeItemCount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeItemCount", $value);
        }
        $value = $this->getIncludeFavoriteSearcheCount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeFavoriteSearcheCount", $value);
        }
        $value = $this->getIncludeFavoriteSellerCount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeFavoriteSellerCount", $value);
        }
        $value = $this->getSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sort", $value);
        }
        $value = $this->getMaxResults();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxResults", $value);
        }
        $value = $this->getUserDefinedListName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserDefinedListName", $value);
        }
        $value = $this->getIncludeListContents();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeListContents", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Include');
        if (null !== $value) {
            $this->setInclude($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeItemCount');
        if (null !== $value) {
            $this->setIncludeItemCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeFavoriteSearcheCount');
        if (null !== $value) {
            $this->setIncludeFavoriteSearcheCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeFavoriteSellerCount');
        if (null !== $value) {
            $this->setIncludeFavoriteSellerCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sort');
        if (null !== $value) {
            $this->setSort($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxResults');
        if (null !== $value) {
            $this->setMaxResults($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserDefinedListName');
        if (null !== $value) {
            $this->setUserDefinedListName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeListContents');
        if (null !== $value) {
            $this->setIncludeListContents($value);
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
