<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ResponseAttributeSetType
 *
 * This type is deprecated.
 * XSD Type: ResponseAttributeSetType
 */
class ResponseAttributeSetType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var int $approximatePages
     */
    private $approximatePages = null;

    /**
     * This field is deprecated.
     *
     * @var int $attributeSetID
     */
    private $attributeSetID = null;

    /**
     * This field is deprecated.
     *
     * @var bool $hasMore
     */
    private $hasMore = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductFamilyType[] $productFamilies
     */
    private $productFamilies = [

    ];

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductFinderConstraintType[] $productFinderConstraints
     */
    private $productFinderConstraints = [

    ];

    /**
     * This field is deprecated.
     *
     * @var bool $tooManyMatchesFound
     */
    private $tooManyMatchesFound = null;

    /**
     * This field is deprecated.
     *
     * @var int $totalProducts
     */
    private $totalProducts = null;

    /**
     * Gets as approximatePages
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getApproximatePages()
    {
        return $this->approximatePages;
    }

    /**
     * Sets a new approximatePages
     *
     * This field is deprecated.
     *
     * @param int $approximatePages
     * @return self
     */
    public function setApproximatePages($approximatePages)
    {
        $this->approximatePages = $approximatePages;
        return $this;
    }

    /**
     * Gets as attributeSetID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getAttributeSetID()
    {
        return $this->attributeSetID;
    }

    /**
     * Sets a new attributeSetID
     *
     * This field is deprecated.
     *
     * @param int $attributeSetID
     * @return self
     */
    public function setAttributeSetID($attributeSetID)
    {
        $this->attributeSetID = $attributeSetID;
        return $this;
    }

    /**
     * Gets as hasMore
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getHasMore()
    {
        return $this->hasMore;
    }

    /**
     * Sets a new hasMore
     *
     * This field is deprecated.
     *
     * @param bool $hasMore
     * @return self
     */
    public function setHasMore($hasMore)
    {
        $this->hasMore = $hasMore;
        return $this;
    }

    /**
     * Adds as productFamilies
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductFamilyType $productFamilies
     */
    public function addToProductFamilies(\Nogrod\eBaySDK\Trading\ProductFamilyType $productFamilies)
    {
        $this->productFamilies[] = $productFamilies;
        return $this;
    }

    /**
     * isset productFamilies
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductFamilies($index)
    {
        return isset($this->productFamilies[$index]);
    }

    /**
     * unset productFamilies
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductFamilies($index)
    {
        unset($this->productFamilies[$index]);
    }

    /**
     * Gets as productFamilies
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductFamilyType[]
     */
    public function getProductFamilies()
    {
        return $this->productFamilies;
    }

    /**
     * Sets a new productFamilies
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductFamilyType[] $productFamilies
     * @return self
     */
    public function setProductFamilies(array $productFamilies)
    {
        $this->productFamilies = $productFamilies;
        return $this;
    }

    /**
     * Adds as productFinderConstraints
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductFinderConstraintType $productFinderConstraints
     */
    public function addToProductFinderConstraints(\Nogrod\eBaySDK\Trading\ProductFinderConstraintType $productFinderConstraints)
    {
        $this->productFinderConstraints[] = $productFinderConstraints;
        return $this;
    }

    /**
     * isset productFinderConstraints
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductFinderConstraints($index)
    {
        return isset($this->productFinderConstraints[$index]);
    }

    /**
     * unset productFinderConstraints
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductFinderConstraints($index)
    {
        unset($this->productFinderConstraints[$index]);
    }

    /**
     * Gets as productFinderConstraints
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductFinderConstraintType[]
     */
    public function getProductFinderConstraints()
    {
        return $this->productFinderConstraints;
    }

    /**
     * Sets a new productFinderConstraints
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductFinderConstraintType[] $productFinderConstraints
     * @return self
     */
    public function setProductFinderConstraints(array $productFinderConstraints)
    {
        $this->productFinderConstraints = $productFinderConstraints;
        return $this;
    }

    /**
     * Gets as tooManyMatchesFound
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getTooManyMatchesFound()
    {
        return $this->tooManyMatchesFound;
    }

    /**
     * Sets a new tooManyMatchesFound
     *
     * This field is deprecated.
     *
     * @param bool $tooManyMatchesFound
     * @return self
     */
    public function setTooManyMatchesFound($tooManyMatchesFound)
    {
        $this->tooManyMatchesFound = $tooManyMatchesFound;
        return $this;
    }

    /**
     * Gets as totalProducts
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getTotalProducts()
    {
        return $this->totalProducts;
    }

    /**
     * Sets a new totalProducts
     *
     * This field is deprecated.
     *
     * @param int $totalProducts
     * @return self
     */
    public function setTotalProducts($totalProducts)
    {
        $this->totalProducts = $totalProducts;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getApproximatePages();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApproximatePages", $value);
        }
        $value = $this->getAttributeSetID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeSetID", $value);
        }
        $value = $this->getHasMore();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasMore", $value);
        }
        $value = $this->getProductFamilies();
        if (null !== $value && !empty($this->getProductFamilies())) {
            $writer->write(array_map(function ($v) {
                return ["ProductFamilies" => $v];
            }, $value));
        }
        $value = $this->getProductFinderConstraints();
        if (null !== $value && !empty($this->getProductFinderConstraints())) {
            $writer->write(array_map(function ($v) {
                return ["ProductFinderConstraints" => $v];
            }, $value));
        }
        $value = $this->getTooManyMatchesFound();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TooManyMatchesFound", $value);
        }
        $value = $this->getTotalProducts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalProducts", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApproximatePages');
        if (null !== $value) {
            $this->setApproximatePages($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeSetID');
        if (null !== $value) {
            $this->setAttributeSetID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMore');
        if (null !== $value) {
            $this->setHasMore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductFamilies', true);
        if (null !== $value && !empty($value)) {
            $this->setProductFamilies(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ProductFamilyType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductFinderConstraints', true);
        if (null !== $value && !empty($value)) {
            $this->setProductFinderConstraints(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ProductFinderConstraintType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TooManyMatchesFound');
        if (null !== $value) {
            $this->setTooManyMatchesFound($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalProducts');
        if (null !== $value) {
            $this->setTotalProducts($value);
        }
    }
}
