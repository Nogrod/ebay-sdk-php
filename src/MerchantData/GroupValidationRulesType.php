<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GroupValidationRulesType
 *
 * This type is used to specify how many of the corresponding Product Identifier types are required to be specified at listing time.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This type and the <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but <b>ProductIdentifiers</b> container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
 *  </span>
 * XSD Type: GroupValidationRulesType
 */
class GroupValidationRulesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  <strong>GroupValidationRulesTypetype</strong> and the <b>ProductIdentifiers</b> container were originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but these schema elements were never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @var int $minRequired
     */
    private $minRequired = null;

    /**
     * Gets as minRequired
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  <strong>GroupValidationRulesTypetype</strong> and the <b>ProductIdentifiers</b> container were originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but these schema elements were never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @return int
     */
    public function getMinRequired()
    {
        return $this->minRequired;
    }

    /**
     * Sets a new minRequired
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  <strong>GroupValidationRulesTypetype</strong> and the <b>ProductIdentifiers</b> container were originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but these schema elements were never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field.
     *  </span>
     *
     * @param int $minRequired
     * @return self
     */
    public function setMinRequired($minRequired)
    {
        $this->minRequired = $minRequired;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMinRequired();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinRequired", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinRequired');
        if (null !== $value) {
            $this->setMinRequired($value);
        }
    }
}
