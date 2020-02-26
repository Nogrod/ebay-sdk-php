<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing EBayMotorsProAdFormatEnabledDefinitionType
 *
 * Type defining the <b>eBayMotorsProAdFormatEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if <code>eBayMotorsProAdFormatEnabled</code> is used as a <b>FeatureID</b> value in the request, or if no <b>FeatureID</b> values are used in the request. This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support Classified Ad listings for eBay Motors Pro users.
 *  <br/><br/>
 *  To verify if a specific eBay site supports Classified Ad listings for eBay Motors Pro users (for most categories), look for a <code>true</code> value in the <b>SiteDefaults.eBayMotorsProAdFormatEnabled</b> field.
 *  <br/><br/>
 *  To verify if a specific category on a specific eBay site supports Classified Ad listings for eBay Motors Pro users, pass in a <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>eBayMotorsProAdFormatEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
 * XSD Type: eBayMotorsProAdFormatEnabledDefinitionType
 */
class EBayMotorsProAdFormatEnabledDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
