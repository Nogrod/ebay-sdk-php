<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ValueRecommendationType
 *
 * Type used by the <b>ValueRecommendation</b> container to provide recommended names for recommended item specifics.
 * XSD Type: ValueRecommendationType
 */
class ValueRecommendationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A recommended value for the corresponding, recommended Item Specific. Only returned when a recommended value is available.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Constraints that eBay places on this Item Specific value.<br>
     *  <br>
     *  Only returned when you configure your request to include
     *  relationships and/or confidence, and a recommended value
     *  is available.
     *  (Not returned when <b>ExcludeRelationships</b> is <code>true</code> and
     *  <b>IncludeConfidence</b> is <code>false</code>.)
     *
     * @var \Nogrod\eBaySDK\MerchantData\RecommendationValidationRulesType $validationRules
     */
    private $validationRules = null;

    /**
     * Gets as value
     *
     * A recommended value for the corresponding, recommended Item Specific. Only returned when a recommended value is available.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A recommended value for the corresponding, recommended Item Specific. Only returned when a recommended value is available.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as validationRules
     *
     * Constraints that eBay places on this Item Specific value.<br>
     *  <br>
     *  Only returned when you configure your request to include
     *  relationships and/or confidence, and a recommended value
     *  is available.
     *  (Not returned when <b>ExcludeRelationships</b> is <code>true</code> and
     *  <b>IncludeConfidence</b> is <code>false</code>.)
     *
     * @return \Nogrod\eBaySDK\MerchantData\RecommendationValidationRulesType
     */
    public function getValidationRules()
    {
        return $this->validationRules;
    }

    /**
     * Sets a new validationRules
     *
     * Constraints that eBay places on this Item Specific value.<br>
     *  <br>
     *  Only returned when you configure your request to include
     *  relationships and/or confidence, and a recommended value
     *  is available.
     *  (Not returned when <b>ExcludeRelationships</b> is <code>true</code> and
     *  <b>IncludeConfidence</b> is <code>false</code>.)
     *
     * @param \Nogrod\eBaySDK\MerchantData\RecommendationValidationRulesType $validationRules
     * @return self
     */
    public function setValidationRules(\Nogrod\eBaySDK\MerchantData\RecommendationValidationRulesType $validationRules)
    {
        $this->validationRules = $validationRules;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Value", $value);
        }
        $value = $this->getValidationRules();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValidationRules", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value');
        if (null !== $value) {
            $this->setValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValidationRules');
        if (null !== $value) {
            $this->setValidationRules(\Nogrod\eBaySDK\MerchantData\RecommendationValidationRulesType::fromKeyValue($value));
        }
    }
}
