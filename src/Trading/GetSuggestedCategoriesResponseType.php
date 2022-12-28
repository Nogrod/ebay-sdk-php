<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSuggestedCategoriesResponseType
 *
 * The base response of a <b>GetSuggestedCategories</b> call. This response includes an array of categories with the highest number
 *  of listings whose listing titles or descriptions contain the keywords
 *  specified in the <b>Query</b> field of the call request.
 * XSD Type: GetSuggestedCategoriesResponseType
 */
class GetSuggestedCategoriesResponseType extends AbstractResponseType
{
    /**
     * This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     *
     * @var \Nogrod\eBaySDK\Trading\SuggestedCategoryType[] $suggestedCategoryArray
     */
    private $suggestedCategoryArray = null;

    /**
     * This integer value indicates the number of suggested categories that were found that matched the keywords.
     *
     * @var int $categoryCount
     */
    private $categoryCount = null;

    /**
     * Adds as suggestedCategory
     *
     * This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SuggestedCategoryType $suggestedCategory
     */
    public function addToSuggestedCategoryArray(\Nogrod\eBaySDK\Trading\SuggestedCategoryType $suggestedCategory)
    {
        $this->suggestedCategoryArray[] = $suggestedCategory;
        return $this;
    }

    /**
     * isset suggestedCategoryArray
     *
     * This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedCategoryArray($index)
    {
        return isset($this->suggestedCategoryArray[$index]);
    }

    /**
     * unset suggestedCategoryArray
     *
     * This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedCategoryArray($index)
    {
        unset($this->suggestedCategoryArray[$index]);
    }

    /**
     * Gets as suggestedCategoryArray
     *
     * This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     *
     * @return \Nogrod\eBaySDK\Trading\SuggestedCategoryType[]
     */
    public function getSuggestedCategoryArray()
    {
        return $this->suggestedCategoryArray;
    }

    /**
     * Sets a new suggestedCategoryArray
     *
     * This container consists of an array of suggested listing categories for an item based on the keywords that were specified in the <b>Query</b> field of the call request. Up to 10 suggested categories may be returned. This container will always be returned unless the query in the request exceeds the maximum allowed characters. The quality/accuracy of the results may depend on the quality of the query string.
     *
     * @param \Nogrod\eBaySDK\Trading\SuggestedCategoryType[] $suggestedCategoryArray
     * @return self
     */
    public function setSuggestedCategoryArray(array $suggestedCategoryArray)
    {
        $this->suggestedCategoryArray = $suggestedCategoryArray;
        return $this;
    }

    /**
     * Gets as categoryCount
     *
     * This integer value indicates the number of suggested categories that were found that matched the keywords.
     *
     * @return int
     */
    public function getCategoryCount()
    {
        return $this->categoryCount;
    }

    /**
     * Sets a new categoryCount
     *
     * This integer value indicates the number of suggested categories that were found that matched the keywords.
     *
     * @param int $categoryCount
     * @return self
     */
    public function setCategoryCount($categoryCount)
    {
        $this->categoryCount = $categoryCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSuggestedCategoryArray();
        if (null !== $value && !empty($this->getSuggestedCategoryArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SuggestedCategoryArray", array_map(function ($v) {
                return ["SuggestedCategory" => $v];
            }, $value));
        }
        $value = $this->getCategoryCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SuggestedCategoryArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSuggestedCategoryArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SuggestedCategoryType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryCount');
        if (null !== $value) {
            $this->setCategoryCount($value);
        }
    }
}
