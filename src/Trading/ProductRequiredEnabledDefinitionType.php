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
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
