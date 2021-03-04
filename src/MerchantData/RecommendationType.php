<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RecommendationType
 *
 * This type was replaced by <b>ListingRecommendationType</b>
 * XSD Type: RecommendationType
 */
class RecommendationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $fieldGroup
     */
    private $fieldGroup = null;

    /**
     * @var string $fieldName
     */
    private $fieldName = null;

    /**
     * @var string $recommendationCode
     */
    private $recommendationCode = null;

    /**
     * @var string[] $recommendedValue
     */
    private $recommendedValue = [
        
    ];

    /**
     * @var string $message
     */
    private $message = null;

    /**
     * Gets as fieldGroup
     *
     * @return string
     */
    public function getFieldGroup()
    {
        return $this->fieldGroup;
    }

    /**
     * Sets a new fieldGroup
     *
     * @param string $fieldGroup
     * @return self
     */
    public function setFieldGroup($fieldGroup)
    {
        $this->fieldGroup = $fieldGroup;
        return $this;
    }

    /**
     * Gets as fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Sets a new fieldName
     *
     * @param string $fieldName
     * @return self
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * Gets as recommendationCode
     *
     * @return string
     */
    public function getRecommendationCode()
    {
        return $this->recommendationCode;
    }

    /**
     * Sets a new recommendationCode
     *
     * @param string $recommendationCode
     * @return self
     */
    public function setRecommendationCode($recommendationCode)
    {
        $this->recommendationCode = $recommendationCode;
        return $this;
    }

    /**
     * Adds as recommendedValue
     *
     * @return self
     * @param string $recommendedValue
     */
    public function addToRecommendedValue($recommendedValue)
    {
        $this->recommendedValue[] = $recommendedValue;
        return $this;
    }

    /**
     * isset recommendedValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecommendedValue($index)
    {
        return isset($this->recommendedValue[$index]);
    }

    /**
     * unset recommendedValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecommendedValue($index)
    {
        unset($this->recommendedValue[$index]);
    }

    /**
     * Gets as recommendedValue
     *
     * @return string[]
     */
    public function getRecommendedValue()
    {
        return $this->recommendedValue;
    }

    /**
     * Sets a new recommendedValue
     *
     * @param string[] $recommendedValue
     * @return self
     */
    public function setRecommendedValue(array $recommendedValue)
    {
        $this->recommendedValue = $recommendedValue;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFieldGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FieldGroup", $value);
        }
        $value = $this->getFieldName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FieldName", $value);
        }
        $value = $this->getRecommendationCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecommendationCode", $value);
        }
        $value = $this->getRecommendedValue();
        if (null !== $value && !empty($this->getRecommendedValue())) {
            $writer->write(array_map(function ($v) {
                return ["RecommendedValue" => $v];
            }, $value));
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Message", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FieldGroup');
        if (null !== $value) {
            $this->setFieldGroup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FieldName');
        if (null !== $value) {
            $this->setFieldName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecommendationCode');
        if (null !== $value) {
            $this->setRecommendationCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecommendedValue', true);
        if (null !== $value && !empty($value)) {
            $this->setRecommendedValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message');
        if (null !== $value) {
            $this->setMessage($value);
        }
    }
}
