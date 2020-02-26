<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetContextualKeywordsResponseType
 *
 * Response to a <b>GetContextualKeywords</b> request.
 * XSD Type: GetContextualKeywordsResponseType
 */
class GetContextualKeywordsResponseType extends AbstractResponseType
{

    /**
     * An array of either keyword/category pairs or categories, with ranking and score.
     *
     * @var \Nogrod\eBaySDK\Trading\ContextSearchAssetType[] $contextSearchAsset
     */
    private $contextSearchAsset = [
        
    ];

    /**
     * Adds as contextSearchAsset
     *
     * An array of either keyword/category pairs or categories, with ranking and score.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ContextSearchAssetType $contextSearchAsset
     */
    public function addToContextSearchAsset(\Nogrod\eBaySDK\Trading\ContextSearchAssetType $contextSearchAsset)
    {
        $this->contextSearchAsset[] = $contextSearchAsset;
        return $this;
    }

    /**
     * isset contextSearchAsset
     *
     * An array of either keyword/category pairs or categories, with ranking and score.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContextSearchAsset($index)
    {
        return isset($this->contextSearchAsset[$index]);
    }

    /**
     * unset contextSearchAsset
     *
     * An array of either keyword/category pairs or categories, with ranking and score.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContextSearchAsset($index)
    {
        unset($this->contextSearchAsset[$index]);
    }

    /**
     * Gets as contextSearchAsset
     *
     * An array of either keyword/category pairs or categories, with ranking and score.
     *
     * @return \Nogrod\eBaySDK\Trading\ContextSearchAssetType[]
     */
    public function getContextSearchAsset()
    {
        return $this->contextSearchAsset;
    }

    /**
     * Sets a new contextSearchAsset
     *
     * An array of either keyword/category pairs or categories, with ranking and score.
     *
     * @param \Nogrod\eBaySDK\Trading\ContextSearchAssetType[] $contextSearchAsset
     * @return self
     */
    public function setContextSearchAsset(array $contextSearchAsset)
    {
        $this->contextSearchAsset = $contextSearchAsset;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getContextSearchAsset();
        if (null !== $value && !empty($this->getContextSearchAsset())) {
            $writer->write(array_map(function ($v) {
                return ["ContextSearchAsset" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContextSearchAsset', true);
        if (null !== $value && !empty($value)) {
            $this->setContextSearchAsset(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ContextSearchAssetType::fromKeyValue($v);
            }, $value));
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
