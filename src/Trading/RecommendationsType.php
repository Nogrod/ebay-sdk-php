<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RecommendationsType
 *
 * This type is used to provide details about recommended Item Specifics and Product Identifier types.
 * XSD Type: RecommendationsType
 */
class RecommendationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of the leaf category for which the recommended Item Specifics and Product Identifier types apply to.
     *  This is always a category ID that you specified in the request.<br>
     *  <br>
     *  This field is always returned with each <b>Recommendations</b> container.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  This container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ProductIdentifiersType[] $productIdentifiers
     */
    private $productIdentifiers = [
        
    ];

    /**
     * This container consists of Item Specific name/value pairs that are mandatory, recommended, or optional for the specified category. The value returned in the corresponding <b>UsageConstraint</b> field, just introduced in Version 1111, will indicate if the Item Specific is required, recommended, or optional when listing in that category.
     *  <br/><br/>
     *  If no relevant Item Specific name/value pairs are found for the category, this container will not be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\NameRecommendationType[] $nameRecommendation
     */
    private $nameRecommendation = [
        
    ];

    /**
     * This field is only returned if the user includes a timestamp in the <b>LastUpdateTime</b> field in the call request payload. If this field is returned as <code>true</code>, the Item Specific metadata for the specified category has changed since the date/time specified in the <b>LastUpdateTime</b> field. In this case, we suggest you retrieve the latest metadata for the category. If this field is returned as <code>false</code>, the Item Specific metadata for this category has not changed since the date/time specified in the <b>LastUpdateTime</b> field.
     *
     * @var bool $updated
     */
    private $updated = null;

    /**
     * Gets as categoryID
     *
     * The unique identifier of the leaf category for which the recommended Item Specifics and Product Identifier types apply to.
     *  This is always a category ID that you specified in the request.<br>
     *  <br>
     *  This field is always returned with each <b>Recommendations</b> container.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * The unique identifier of the leaf category for which the recommended Item Specifics and Product Identifier types apply to.
     *  This is always a category ID that you specified in the request.<br>
     *  <br>
     *  This field is always returned with each <b>Recommendations</b> container.
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Adds as productIdentifiers
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductIdentifiersType $productIdentifiers
     */
    public function addToProductIdentifiers(\Nogrod\eBaySDK\Trading\ProductIdentifiersType $productIdentifiers)
    {
        $this->productIdentifiers[] = $productIdentifiers;
        return $this;
    }

    /**
     * isset productIdentifiers
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductIdentifiers($index)
    {
        return isset($this->productIdentifiers[$index]);
    }

    /**
     * unset productIdentifiers
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductIdentifiers($index)
    {
        unset($this->productIdentifiers[$index]);
    }

    /**
     * Gets as productIdentifiers
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ProductIdentifiersType[]
     */
    public function getProductIdentifiers()
    {
        return $this->productIdentifiers;
    }

    /**
     * Sets a new productIdentifiers
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  This container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ProductIdentifiersType[] $productIdentifiers
     * @return self
     */
    public function setProductIdentifiers(array $productIdentifiers)
    {
        $this->productIdentifiers = $productIdentifiers;
        return $this;
    }

    /**
     * Adds as nameRecommendation
     *
     * This container consists of Item Specific name/value pairs that are mandatory, recommended, or optional for the specified category. The value returned in the corresponding <b>UsageConstraint</b> field, just introduced in Version 1111, will indicate if the Item Specific is required, recommended, or optional when listing in that category.
     *  <br/><br/>
     *  If no relevant Item Specific name/value pairs are found for the category, this container will not be returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameRecommendationType $nameRecommendation
     */
    public function addToNameRecommendation(\Nogrod\eBaySDK\Trading\NameRecommendationType $nameRecommendation)
    {
        $this->nameRecommendation[] = $nameRecommendation;
        return $this;
    }

    /**
     * isset nameRecommendation
     *
     * This container consists of Item Specific name/value pairs that are mandatory, recommended, or optional for the specified category. The value returned in the corresponding <b>UsageConstraint</b> field, just introduced in Version 1111, will indicate if the Item Specific is required, recommended, or optional when listing in that category.
     *  <br/><br/>
     *  If no relevant Item Specific name/value pairs are found for the category, this container will not be returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameRecommendation($index)
    {
        return isset($this->nameRecommendation[$index]);
    }

    /**
     * unset nameRecommendation
     *
     * This container consists of Item Specific name/value pairs that are mandatory, recommended, or optional for the specified category. The value returned in the corresponding <b>UsageConstraint</b> field, just introduced in Version 1111, will indicate if the Item Specific is required, recommended, or optional when listing in that category.
     *  <br/><br/>
     *  If no relevant Item Specific name/value pairs are found for the category, this container will not be returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameRecommendation($index)
    {
        unset($this->nameRecommendation[$index]);
    }

    /**
     * Gets as nameRecommendation
     *
     * This container consists of Item Specific name/value pairs that are mandatory, recommended, or optional for the specified category. The value returned in the corresponding <b>UsageConstraint</b> field, just introduced in Version 1111, will indicate if the Item Specific is required, recommended, or optional when listing in that category.
     *  <br/><br/>
     *  If no relevant Item Specific name/value pairs are found for the category, this container will not be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\NameRecommendationType[]
     */
    public function getNameRecommendation()
    {
        return $this->nameRecommendation;
    }

    /**
     * Sets a new nameRecommendation
     *
     * This container consists of Item Specific name/value pairs that are mandatory, recommended, or optional for the specified category. The value returned in the corresponding <b>UsageConstraint</b> field, just introduced in Version 1111, will indicate if the Item Specific is required, recommended, or optional when listing in that category.
     *  <br/><br/>
     *  If no relevant Item Specific name/value pairs are found for the category, this container will not be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\NameRecommendationType[] $nameRecommendation
     * @return self
     */
    public function setNameRecommendation(array $nameRecommendation)
    {
        $this->nameRecommendation = $nameRecommendation;
        return $this;
    }

    /**
     * Gets as updated
     *
     * This field is only returned if the user includes a timestamp in the <b>LastUpdateTime</b> field in the call request payload. If this field is returned as <code>true</code>, the Item Specific metadata for the specified category has changed since the date/time specified in the <b>LastUpdateTime</b> field. In this case, we suggest you retrieve the latest metadata for the category. If this field is returned as <code>false</code>, the Item Specific metadata for this category has not changed since the date/time specified in the <b>LastUpdateTime</b> field.
     *
     * @return bool
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Sets a new updated
     *
     * This field is only returned if the user includes a timestamp in the <b>LastUpdateTime</b> field in the call request payload. If this field is returned as <code>true</code>, the Item Specific metadata for the specified category has changed since the date/time specified in the <b>LastUpdateTime</b> field. In this case, we suggest you retrieve the latest metadata for the category. If this field is returned as <code>false</code>, the Item Specific metadata for this category has not changed since the date/time specified in the <b>LastUpdateTime</b> field.
     *
     * @param bool $updated
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getProductIdentifiers();
        if (null !== $value && !empty($this->getProductIdentifiers())) {
            $writer->write(array_map(function ($v) {
                return ["ProductIdentifiers" => $v];
            }, $value));
        }
        $value = $this->getNameRecommendation();
        if (null !== $value && !empty($this->getNameRecommendation())) {
            $writer->write(array_map(function ($v) {
                return ["NameRecommendation" => $v];
            }, $value));
        }
        $value = $this->getUpdated();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Updated", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductIdentifiers', true);
        if (null !== $value && !empty($value)) {
            $this->setProductIdentifiers(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ProductIdentifiersType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameRecommendation', true);
        if (null !== $value && !empty($value)) {
            $this->setNameRecommendation(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameRecommendationType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Updated');
        if (null !== $value) {
            $this->setUpdated($value);
        }
    }
}
