<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SuggestedCategoryType
 *
 * Defines a suggested category, returned
 *  in response to a search for categories that contain
 *  listings with certain keywords in their titles and descriptions.
 * XSD Type: SuggestedCategoryType
 */
class SuggestedCategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Describes a category that contains items that match the query.
     *
     * @var \Nogrod\eBaySDK\Trading\CategoryType $category
     */
    private $category = null;

    /**
     * Percentage of the matching items that were found in this category,
     *  relative to other categories in which matching items were also found.
     *  Indicates the distribution of matching items across the suggested categories.
     *
     * @var int $percentItemFound
     */
    private $percentItemFound = null;

    /**
     * Gets as category
     *
     * Describes a category that contains items that match the query.
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
     * Describes a category that contains items that match the query.
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
     * Gets as percentItemFound
     *
     * Percentage of the matching items that were found in this category,
     *  relative to other categories in which matching items were also found.
     *  Indicates the distribution of matching items across the suggested categories.
     *
     * @return int
     */
    public function getPercentItemFound()
    {
        return $this->percentItemFound;
    }

    /**
     * Sets a new percentItemFound
     *
     * Percentage of the matching items that were found in this category,
     *  relative to other categories in which matching items were also found.
     *  Indicates the distribution of matching items across the suggested categories.
     *
     * @param int $percentItemFound
     * @return self
     */
    public function setPercentItemFound($percentItemFound)
    {
        $this->percentItemFound = $percentItemFound;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Category", $value);
        }
        $value = $this->getPercentItemFound();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PercentItemFound", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category');
        if (null !== $value) {
            $this->setCategory(\Nogrod\eBaySDK\Trading\CategoryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PercentItemFound');
        if (null !== $value) {
            $this->setPercentItemFound($value);
        }
    }
}
