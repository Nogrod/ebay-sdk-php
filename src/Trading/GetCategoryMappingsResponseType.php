<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategoryMappingsResponseType
 *
 * Returns a map of old category IDs and corresponding active category IDs defined
 *  for the site to which the request was sent. Typically used to update an older item
 *  definition with a new category ID prior to listing the item.
 * XSD Type: GetCategoryMappingsResponseType
 */
class GetCategoryMappingsResponseType extends AbstractResponseType
{
    /**
     * Mapping between an old category ID and an active category ID. Returned when
     *  category mappings exist and the value of CategoryVersion is different from
     *  the current version on the site.
     *
     * @var \Nogrod\eBaySDK\Trading\CategoryMappingType[] $categoryMapping
     */
    private $categoryMapping = [
        
    ];

    /**
     * Version value assigned to the current category mapping data for the site.
     *  Compare this value to the version value the application stored with the mappings
     *  the last time the application executed the call. If the versions are the same,
     *  the data has not changed since the last time the data was retrieved and stored.
     *
     * @var string $categoryVersion
     */
    private $categoryVersion = null;

    /**
     * Adds as categoryMapping
     *
     * Mapping between an old category ID and an active category ID. Returned when
     *  category mappings exist and the value of CategoryVersion is different from
     *  the current version on the site.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CategoryMappingType $categoryMapping
     */
    public function addToCategoryMapping(\Nogrod\eBaySDK\Trading\CategoryMappingType $categoryMapping)
    {
        $this->categoryMapping[] = $categoryMapping;
        return $this;
    }

    /**
     * isset categoryMapping
     *
     * Mapping between an old category ID and an active category ID. Returned when
     *  category mappings exist and the value of CategoryVersion is different from
     *  the current version on the site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryMapping($index)
    {
        return isset($this->categoryMapping[$index]);
    }

    /**
     * unset categoryMapping
     *
     * Mapping between an old category ID and an active category ID. Returned when
     *  category mappings exist and the value of CategoryVersion is different from
     *  the current version on the site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryMapping($index)
    {
        unset($this->categoryMapping[$index]);
    }

    /**
     * Gets as categoryMapping
     *
     * Mapping between an old category ID and an active category ID. Returned when
     *  category mappings exist and the value of CategoryVersion is different from
     *  the current version on the site.
     *
     * @return \Nogrod\eBaySDK\Trading\CategoryMappingType[]
     */
    public function getCategoryMapping()
    {
        return $this->categoryMapping;
    }

    /**
     * Sets a new categoryMapping
     *
     * Mapping between an old category ID and an active category ID. Returned when
     *  category mappings exist and the value of CategoryVersion is different from
     *  the current version on the site.
     *
     * @param \Nogrod\eBaySDK\Trading\CategoryMappingType[] $categoryMapping
     * @return self
     */
    public function setCategoryMapping(array $categoryMapping)
    {
        $this->categoryMapping = $categoryMapping;
        return $this;
    }

    /**
     * Gets as categoryVersion
     *
     * Version value assigned to the current category mapping data for the site.
     *  Compare this value to the version value the application stored with the mappings
     *  the last time the application executed the call. If the versions are the same,
     *  the data has not changed since the last time the data was retrieved and stored.
     *
     * @return string
     */
    public function getCategoryVersion()
    {
        return $this->categoryVersion;
    }

    /**
     * Sets a new categoryVersion
     *
     * Version value assigned to the current category mapping data for the site.
     *  Compare this value to the version value the application stored with the mappings
     *  the last time the application executed the call. If the versions are the same,
     *  the data has not changed since the last time the data was retrieved and stored.
     *
     * @param string $categoryVersion
     * @return self
     */
    public function setCategoryVersion($categoryVersion)
    {
        $this->categoryVersion = $categoryVersion;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryMapping();
        if (null !== $value && !empty($this->getCategoryMapping())) {
            $writer->write(array_map(function ($v) {
                return ["CategoryMapping" => $v];
            }, $value));
        }
        $value = $this->getCategoryVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryVersion", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryMapping', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryMapping(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CategoryMappingType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryVersion');
        if (null !== $value) {
            $this->setCategoryVersion($value);
        }
    }
}
