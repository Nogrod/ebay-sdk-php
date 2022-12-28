<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSuggestedCategoriesRequestType
 *
 * This call returns a list of up to 10 eBay categories that have the highest percentage of listings whose listing titles or descriptions contain the keywords you specify.
 * XSD Type: GetSuggestedCategoriesRequestType
 */
class GetSuggestedCategoriesRequestType extends AbstractRequestType
{
    /**
     * This field is used to specify the search query, consisting of one or
     *  more keywords to search for in listing titles and descriptions.
     *  The words "and" and "or" are treated like any other
     *  word.
     *
     * @var string $query
     */
    private $query = null;

    /**
     * Gets as query
     *
     * This field is used to specify the search query, consisting of one or
     *  more keywords to search for in listing titles and descriptions.
     *  The words "and" and "or" are treated like any other
     *  word.
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * This field is used to specify the search query, consisting of one or
     *  more keywords to search for in listing titles and descriptions.
     *  The words "and" and "or" are treated like any other
     *  word.
     *
     * @param string $query
     * @return self
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getQuery();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Query", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Query');
        if (null !== $value) {
            $this->setQuery($value);
        }
    }
}
