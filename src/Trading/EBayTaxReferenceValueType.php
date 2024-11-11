<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EBayTaxReferenceValueType
 *
 * This type is used to indicate the type of tax identifier that is appearing in the <b>eBayReference</b> field. The tax identifier type which will vary by country/region.
 * XSD Type: eBayTaxReferenceValue
 */
class EBayTaxReferenceValueType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * This attribute value is returned to indicate the VAT tax type or tax number, which will vary by country/region. This string value will be one of the following:<br/>
     *  <ul>
     *  <li><code>ABN</code>: if this string is returned, the ID in the field is an eBay Australia tax number</li>
     *  <li><code>GST</code>: if this string is returned, the ID in the field is an eBay Jersey tax number</li>
     *  <li><code>IOSS</code>: if this string is returned, the ID in the field is an eBay EU or UK IOSS number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>',no VAT Number or taxNum) </li>
     *  <li><code>IRD</code>: if this string is returned, the ID in the field is an eBay New Zealand tax number</li>
     *  <li><code>OSS</code>: if this string is returned, the ID in the field is an eBay Germany VAT ID, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>SST</code>: if this string is returned, the ID in the field is an eBay Malaysia tax number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>DDG</code>: if this string is returned, the ID in the field is an eBay Malaysia tax number, or if the country is Belarus, the ID in the field is an eBay Belarus tax number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>VOEC</code>: if this string is returned, the ID in the field is an eBay Norway tax number</li>
     *  <li><code>VAT</code>: if this string is returned, the ID in the field is an eBay Belarus tax number</li>
     *  <li><code>VAT_ID</code>: if this string is returned, the ID in the field is an eBay France VAT ID</li>
     *  </ul>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as name
     *
     * This attribute value is returned to indicate the VAT tax type or tax number, which will vary by country/region. This string value will be one of the following:<br/>
     *  <ul>
     *  <li><code>ABN</code>: if this string is returned, the ID in the field is an eBay Australia tax number</li>
     *  <li><code>GST</code>: if this string is returned, the ID in the field is an eBay Jersey tax number</li>
     *  <li><code>IOSS</code>: if this string is returned, the ID in the field is an eBay EU or UK IOSS number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>',no VAT Number or taxNum) </li>
     *  <li><code>IRD</code>: if this string is returned, the ID in the field is an eBay New Zealand tax number</li>
     *  <li><code>OSS</code>: if this string is returned, the ID in the field is an eBay Germany VAT ID, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>SST</code>: if this string is returned, the ID in the field is an eBay Malaysia tax number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>DDG</code>: if this string is returned, the ID in the field is an eBay Malaysia tax number, or if the country is Belarus, the ID in the field is an eBay Belarus tax number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>VOEC</code>: if this string is returned, the ID in the field is an eBay Norway tax number</li>
     *  <li><code>VAT</code>: if this string is returned, the ID in the field is an eBay Belarus tax number</li>
     *  <li><code>VAT_ID</code>: if this string is returned, the ID in the field is an eBay France VAT ID</li>
     *  </ul>
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This attribute value is returned to indicate the VAT tax type or tax number, which will vary by country/region. This string value will be one of the following:<br/>
     *  <ul>
     *  <li><code>ABN</code>: if this string is returned, the ID in the field is an eBay Australia tax number</li>
     *  <li><code>GST</code>: if this string is returned, the ID in the field is an eBay Jersey tax number</li>
     *  <li><code>IOSS</code>: if this string is returned, the ID in the field is an eBay EU or UK IOSS number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>',no VAT Number or taxNum) </li>
     *  <li><code>IRD</code>: if this string is returned, the ID in the field is an eBay New Zealand tax number</li>
     *  <li><code>OSS</code>: if this string is returned, the ID in the field is an eBay Germany VAT ID, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>SST</code>: if this string is returned, the ID in the field is an eBay Malaysia tax number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>DDG</code>: if this string is returned, the ID in the field is an eBay Malaysia tax number, or if the country is Belarus, the ID in the field is an eBay Belarus tax number, or if the country is Kazakhstan it is an eBay Kazakhstan VAT (reference value of '<code>-</code>', no VAT Number or taxNum) </li>
     *  <li><code>VOEC</code>: if this string is returned, the ID in the field is an eBay Norway tax number</li>
     *  <li><code>VAT</code>: if this string is returned, the ID in the field is an eBay Belarus tax number</li>
     *  <li><code>VAT_ID</code>: if this string is returned, the ID in the field is an eBay France VAT ID</li>
     *  </ul>
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeAttribute("name", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self($keyValue);
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = Func::mapValue($keyValue, 'value');
        if (null !== $value) {
            $this->value($value);
        }
        $value = Func::mapValue($keyValue, 'name');
        if (null !== $value) {
            $this->setName($value);
        }
    }
}
