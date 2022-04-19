<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NameValueListType
 *
 * Depending on the call and listing, this type is used to identify the following through name/value pairs:
 *  <ul>
 *  <li>Listing-level Item Specific name-value pairs </li>
 *  <li>Variation-level name-value pairs identifying the individual variation within a multiple-variation listing </li>
 *  <li>Item Specific name-value pairs for an eBay catalog product</li>
 *  <li>Name-value pairs identifying a specific motor vehicle that is compatible with a motor vehicle part or accessory</li>
 *  </ul>
 * XSD Type: NameValueListType
 */
class NameValueListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, and individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  To control the data that is returned in a <b>GetSingleItem</b> or <b>GetMultipleItems</b> response, the <b>IncludeSelector</b> filter should be included. To see listing-level Item Specifics, include the <b>IncludeSelector</b> field and set its value to <b>ItemSpecifics</b>. To see variation-level Item Specifics (only applicable for multiple-variation listings), include the <b>IncludeSelector</b> field and set its value to <b>Variations</b>. To see Parts Compatibility name/value pairs (only applicable for motor vehicle part or accessory listings with a compatible vehicle list), include the <b>IncludeSelector</b> field and set its value to <b>Compatibility</b>.
     *  </span>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *
     * @var string[] $value
     */
    private $value = [

    ];

    /**
     * Gets as name
     *
     * The name of the Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, and individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  To control the data that is returned in a <b>GetSingleItem</b> or <b>GetMultipleItems</b> response, the <b>IncludeSelector</b> filter should be included. To see listing-level Item Specifics, include the <b>IncludeSelector</b> field and set its value to <b>ItemSpecifics</b>. To see variation-level Item Specifics (only applicable for multiple-variation listings), include the <b>IncludeSelector</b> field and set its value to <b>Variations</b>. To see Parts Compatibility name/value pairs (only applicable for motor vehicle part or accessory listings with a compatible vehicle list), include the <b>IncludeSelector</b> field and set its value to <b>Compatibility</b>.
     *  </span>
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
     * The name of the Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, and individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  To control the data that is returned in a <b>GetSingleItem</b> or <b>GetMultipleItems</b> response, the <b>IncludeSelector</b> filter should be included. To see listing-level Item Specifics, include the <b>IncludeSelector</b> field and set its value to <b>ItemSpecifics</b>. To see variation-level Item Specifics (only applicable for multiple-variation listings), include the <b>IncludeSelector</b> field and set its value to <b>Variations</b>. To see Parts Compatibility name/value pairs (only applicable for motor vehicle part or accessory listings with a compatible vehicle list), include the <b>IncludeSelector</b> field and set its value to <b>Compatibility</b>.
     *  </span>
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as value
     *
     * The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *
     * @return self
     * @param string $value
     */
    public function addToValue($value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor vehicle part or accessory listing.
     *
     * @param string[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getValue();
        if (null !== $value && !empty($this->getValue())) {
            $writer->write(array_map(function ($v) {
                return ["Value" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value', true);
        if (null !== $value && !empty($value)) {
            $this->setValue($value);
        }
    }
}
