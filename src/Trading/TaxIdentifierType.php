<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TaxIdentifierType
 *
 * This type defines the <b>BuyerTaxIdentifier</b> container that is returned in order management calls. This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
 * XSD Type: TaxIdentifierType
 */
class TaxIdentifierType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <br>
     *  This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * <br>
     *  This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * <br>
     *  This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxIdentifierAttributeType[] $attribute
     */
    private $attribute = [

    ];

    /**
     * Gets as type
     *
     * <br>
     *  This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
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
     * <br>
     *  This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
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
     * <br>
     *  This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
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
     * <br>
     *  This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
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
     * <br>
     *  This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxIdentifierAttributeType $attribute
     */
    public function addToAttribute(\Nogrod\eBaySDK\Trading\TaxIdentifierAttributeType $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * <br>
     *  This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
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
     * <br>
     *  This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
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
     * <br>
     *  This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @return \Nogrod\eBaySDK\Trading\TaxIdentifierAttributeType[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * <br>
     *  This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     *
     * @param \Nogrod\eBaySDK\Trading\TaxIdentifierAttributeType[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        if (null !== $value && [] !== $this->getAttribute()) {
            $writer->write(array_map(function ($v) {return ["Attribute" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\TaxIdentifierType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ID');
        if (null !== $value) {
            $this->setID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Attribute');
        if (null !== $value) {
            $this->setAttribute(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TaxIdentifierAttributeType::fromKeyValue($v);}, $value));
        }
    }
}
