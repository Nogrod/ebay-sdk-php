<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProductRequiredEnabledDefinitionType
 *
 * Type defining the <b>ProductRequiredEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>ProductRequiredEnabled</b> is included as a <a href="types/FeatureIDCodeType.html">FeatureID</a> value in the call request or no <b>FeatureID</b> values are passed into the call request). The <b>ProductRequiredEnabled</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Product-Based Shopping Experience.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b>
 *  Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories, the <b>FeatureDefinitions.ProductRequiredEnabled</b> field no longer has any practical use. Due to this fact, the <b>ProductRequiredEnabledDefinitionType</b> is currently not applicable.
 *  </span>
 * XSD Type: ProductRequiredEnabledDefinitionType
 */
class ProductRequiredEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ProductRequiredEnabledDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
