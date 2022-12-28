<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSearchKeywordsRecommendationResponseType
 *
 * Response container for the spelling check and correction for keywords.
 * XSD Type: GetSearchKeywordsRecommendationResponse
 */
class GetSearchKeywordsRecommendationResponseType extends BaseServiceResponseType
{
    /**
     * Contains a spell-checked version of the submitted keywords. If no
     *  recommended spelling can be identified for the submitted keywords,
     *  the response contains a warning to that effect and an empty keywords
     *  field is returned.
     *
     * @var string $keywords
     */
    private $keywords = null;

    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\Finding\ExtensionTypeType[] $extension
     */
    private $extension = [

    ];

    /**
     * Gets as keywords
     *
     * Contains a spell-checked version of the submitted keywords. If no
     *  recommended spelling can be identified for the submitted keywords,
     *  the response contains a warning to that effect and an empty keywords
     *  field is returned.
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * Contains a spell-checked version of the submitted keywords. If no
     *  recommended spelling can be identified for the submitted keywords,
     *  the response contains a warning to that effect and an empty keywords
     *  field is returned.
     *
     * @param string $keywords
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Adds as extension
     *
     * Reserved for future use.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ExtensionTypeType $extension
     */
    public function addToExtension(\Nogrod\eBaySDK\Finding\ExtensionTypeType $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * Reserved for future use.
     *
     * @return \Nogrod\eBaySDK\Finding\ExtensionTypeType[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Reserved for future use.
     *
     * @param \Nogrod\eBaySDK\Finding\ExtensionTypeType[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getKeywords();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}keywords", $value);
        }
        $value = $this->getExtension();
        if (null !== $value && !empty($this->getExtension())) {
            $writer->write(array_map(function ($v) {
                return ["extension" => $v];
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}keywords');
        if (null !== $value) {
            $this->setKeywords($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}extension', true);
        if (null !== $value && !empty($value)) {
            $this->setExtension(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\ExtensionTypeType::fromKeyValue($v);
            }, $value));
        }
    }
}
