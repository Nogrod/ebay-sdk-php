<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxIdentifierType
 *
 * This type defines the <b>BuyerTaxIdentifier</b> container that is returned in order management calls. This container consists of taxpayer identification information for the buyer and it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of buyers registered on the Italy or Spain sites.
 * XSD Type: TaxIdentifierType
 */
class TaxIdentifierType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TaxIdentifierAttributeType[] $attribute
     */
    private $attribute = [
        
    ];

    /**
     * Gets as type
     *
     * This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as iD
     *
     * This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\TaxIdentifierAttributeType $attribute
     */
    public function addToAttribute(\Nogrod\eBaySDK\MerchantData\TaxIdentifierAttributeType $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttribute($index)
    {
        return isset($this->attribute[$index]);
    }

    /**
     * unset attribute
     *
     * This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttribute($index)
    {
        unset($this->attribute[$index]);
    }

    /**
     * Gets as attribute
     *
     * This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TaxIdentifierAttributeType[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @param \Nogrod\eBaySDK\MerchantData\TaxIdentifierAttributeType[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
        }
        $value = $this->getID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ID", $value);
        }
        $value = $this->getAttribute();
        if (null !== $value && !empty($this->getAttribute())) {
            $writer->write(array_map(function ($v) {
                return ["Attribute" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ID');
        if (null !== $value) {
            $this->setID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Attribute', true);
        if (null !== $value && !empty($value)) {
            $this->setAttribute(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\TaxIdentifierAttributeType::fromKeyValue($v);
            }, $value));
        }
    }
}
