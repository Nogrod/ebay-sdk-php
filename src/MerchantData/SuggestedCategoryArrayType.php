<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SuggestedCategoryArrayType
 *
 * Contains an array of categories that contain listings with
 *  specified keywords in their titles or descriptions. The array
 *  can contain up to 10 categories.
 * XSD Type: SuggestedCategoryArrayType
 */
class SuggestedCategoryArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Describes a category that contains listings that match
     *  specified keywords in the query. Returned if a category matches the query.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SuggestedCategoryType[] $suggestedCategory
     */
    private $suggestedCategory = [

    ];

    /**
     * Adds as suggestedCategory
     *
     * Describes a category that contains listings that match
     *  specified keywords in the query. Returned if a category matches the query.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SuggestedCategoryType $suggestedCategory
     */
    public function addToSuggestedCategory(\Nogrod\eBaySDK\MerchantData\SuggestedCategoryType $suggestedCategory)
    {
        $this->suggestedCategory[] = $suggestedCategory;
        return $this;
    }

    /**
     * isset suggestedCategory
     *
     * Describes a category that contains listings that match
     *  specified keywords in the query. Returned if a category matches the query.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedCategory($index)
    {
        return isset($this->suggestedCategory[$index]);
    }

    /**
     * unset suggestedCategory
     *
     * Describes a category that contains listings that match
     *  specified keywords in the query. Returned if a category matches the query.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedCategory($index)
    {
        unset($this->suggestedCategory[$index]);
    }

    /**
     * Gets as suggestedCategory
     *
     * Describes a category that contains listings that match
     *  specified keywords in the query. Returned if a category matches the query.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SuggestedCategoryType[]
     */
    public function getSuggestedCategory()
    {
        return $this->suggestedCategory;
    }

    /**
     * Sets a new suggestedCategory
     *
     * Describes a category that contains listings that match
     *  specified keywords in the query. Returned if a category matches the query.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SuggestedCategoryType[] $suggestedCategory
     * @return self
     */
    public function setSuggestedCategory(array $suggestedCategory)
    {
        $this->suggestedCategory = $suggestedCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSuggestedCategory();
        if (null !== $value && !empty($this->getSuggestedCategory())) {
            $writer->write(array_map(function ($v) {return ["SuggestedCategory" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SuggestedCategory', true);
        if (null !== $value && !empty($value)) {
            $this->setSuggestedCategory(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\SuggestedCategoryType::fromKeyValue($v);}, $value));
        }
    }
}
