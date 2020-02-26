<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing CategoryType
 *
 * Contains details about a category.
 * XSD Type: Category
 */
class CategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique ID of a category on the specified eBay site.
     *
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * Display name of a category as it appears on the eBay Web site.
     *
     * @var string $categoryName
     */
    private $categoryName = null;

    /**
     * Gets as categoryId
     *
     * The unique ID of a category on the specified eBay site.
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * The unique ID of a category on the specified eBay site.
     *
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * Display name of a category as it appears on the eBay Web site.
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * Display name of a category as it appears on the eBay Web site.
     *
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getCategoryId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}categoryId", $value);
        }
        $value = $this->getCategoryName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}categoryName", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}categoryId');
        if (null !== $value) {
            $this->setCategoryId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}categoryName');
        if (null !== $value) {
            $this->setCategoryName($value);
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
