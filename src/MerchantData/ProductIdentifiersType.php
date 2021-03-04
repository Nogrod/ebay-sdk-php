<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductIdentifiersType
 *
 * <span class="tablenote"><strong>Note:</strong>
 *  This type and the <b>ProductIdentifiers</b> container were originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but the <b>ProductIdentifiers</b> container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field in the <b>GetCategorySpecifics</b> response.
 *  </span>
 * XSD Type: ProductIdentifiersType
 */
class ProductIdentifiersType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\GroupValidationRulesType $validationRules
     */
    private $validationRules = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\NameRecommendationType[] $nameRecommendation
     */
    private $nameRecommendation = [
        
    ];

    /**
     * Gets as validationRules
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\GroupValidationRulesType
     */
    public function getValidationRules()
    {
        return $this->validationRules;
    }

    /**
     * Sets a new validationRules
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\GroupValidationRulesType $validationRules
     * @return self
     */
    public function setValidationRules(\Nogrod\eBaySDK\MerchantData\GroupValidationRulesType $validationRules)
    {
        $this->validationRules = $validationRules;
        return $this;
    }

    /**
     * Adds as nameRecommendation
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NameRecommendationType $nameRecommendation
     */
    public function addToNameRecommendation(\Nogrod\eBaySDK\MerchantData\NameRecommendationType $nameRecommendation)
    {
        $this->nameRecommendation[] = $nameRecommendation;
        return $this;
    }

    /**
     * isset nameRecommendation
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
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
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
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
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\NameRecommendationType[]
     */
    public function getNameRecommendation()
    {
        return $this->nameRecommendation;
    }

    /**
     * Sets a new nameRecommendation
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\NameRecommendationType[] $nameRecommendation
     * @return self
     */
    public function setNameRecommendation(array $nameRecommendation)
    {
        $this->nameRecommendation = $nameRecommendation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getValidationRules();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValidationRules", $value);
        }
        $value = $this->getNameRecommendation();
        if (null !== $value && !empty($this->getNameRecommendation())) {
            $writer->write(array_map(function ($v) {
                return ["NameRecommendation" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValidationRules');
        if (null !== $value) {
            $this->setValidationRules(\Nogrod\eBaySDK\MerchantData\GroupValidationRulesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameRecommendation', true);
        if (null !== $value && !empty($value)) {
            $this->setNameRecommendation(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NameRecommendationType::fromKeyValue($v);
            }, $value));
        }
    }
}
