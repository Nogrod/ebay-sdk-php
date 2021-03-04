<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ContextSearchAssetType
 *
 * Type defining the <b>ContextSearchAsset</b> container that is returned in the <b>GetContextualKeywords</b> response for each keyword that is found.
 * XSD Type: ContextSearchAssetType
 */
class ContextSearchAssetType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the keyword that was found in the search.
     *
     * @var string $keyword
     */
    private $keyword = null;

    /**
     * The eBay category in which the keyword is used.
     *
     * @var \Nogrod\eBaySDK\Trading\CategoryType $category
     */
    private $category = null;

    /**
     * The ranking of the corresponding keyword/category combination relative to
     *  other keywords that were returned in the response.
     *
     * @var int $ranking
     */
    private $ranking = null;

    /**
     * Gets as keyword
     *
     * The name of the keyword that was found in the search.
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * The name of the keyword that was found in the search.
     *
     * @param string $keyword
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Gets as category
     *
     * The eBay category in which the keyword is used.
     *
     * @return \Nogrod\eBaySDK\Trading\CategoryType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * The eBay category in which the keyword is used.
     *
     * @param \Nogrod\eBaySDK\Trading\CategoryType $category
     * @return self
     */
    public function setCategory(\Nogrod\eBaySDK\Trading\CategoryType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as ranking
     *
     * The ranking of the corresponding keyword/category combination relative to
     *  other keywords that were returned in the response.
     *
     * @return int
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Sets a new ranking
     *
     * The ranking of the corresponding keyword/category combination relative to
     *  other keywords that were returned in the response.
     *
     * @param int $ranking
     * @return self
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getKeyword();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Keyword", $value);
        }
        $value = $this->getCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Category", $value);
        }
        $value = $this->getRanking();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Ranking", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Keyword');
        if (null !== $value) {
            $this->setKeyword($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category');
        if (null !== $value) {
            $this->setCategory(\Nogrod\eBaySDK\Trading\CategoryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Ranking');
        if (null !== $value) {
            $this->setRanking($value);
        }
    }
}
