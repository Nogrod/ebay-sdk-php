<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerSearchType
 *
 * For searches of Selling Manager listings, specifies search type, such as <b>ProductID</b> or <b>BuyerUserID</b>,
 *  and search value.
 * XSD Type: SellingManagerSearchType
 */
class SellingManagerSearchType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies the type of value, such as <b>ProductID</b> or <b>BuyerUserID</b>, for the search.
     *
     * @var string $searchType
     */
    private $searchType = null;

    /**
     * String identifying the value, matching the <b>SearchType</b>, that the search should return listings
     *  for. For example, when <b>ProductID</b> is specified as the <b>SearchType</b>, <b>SearchValue</b> must be a valid
     *  <b>ProductID</b>.
     *
     * @var string $searchValue
     */
    private $searchValue = null;

    /**
     * Gets as searchType
     *
     * Specifies the type of value, such as <b>ProductID</b> or <b>BuyerUserID</b>, for the search.
     *
     * @return string
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * Sets a new searchType
     *
     * Specifies the type of value, such as <b>ProductID</b> or <b>BuyerUserID</b>, for the search.
     *
     * @param string $searchType
     * @return self
     */
    public function setSearchType($searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * Gets as searchValue
     *
     * String identifying the value, matching the <b>SearchType</b>, that the search should return listings
     *  for. For example, when <b>ProductID</b> is specified as the <b>SearchType</b>, <b>SearchValue</b> must be a valid
     *  <b>ProductID</b>.
     *
     * @return string
     */
    public function getSearchValue()
    {
        return $this->searchValue;
    }

    /**
     * Sets a new searchValue
     *
     * String identifying the value, matching the <b>SearchType</b>, that the search should return listings
     *  for. For example, when <b>ProductID</b> is specified as the <b>SearchType</b>, <b>SearchValue</b> must be a valid
     *  <b>ProductID</b>.
     *
     * @param string $searchValue
     * @return self
     */
    public function setSearchValue($searchValue)
    {
        $this->searchValue = $searchValue;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSearchType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchType", $value);
        }
        $value = $this->getSearchValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchValue", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchType');
        if (null !== $value) {
            $this->setSearchType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchValue');
        if (null !== $value) {
            $this->setSearchValue($value);
        }
    }
}
