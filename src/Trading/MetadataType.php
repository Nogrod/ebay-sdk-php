<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MetadataType
 *
 * This type is used by the <b>Metadata</b> container to provide price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items.
 * XSD Type: MetadataType
 */
class MetadataType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The name of the price guidance parameter is returned in this field. Any of the following price guidance parameters may be returned in a <b>Metadata</b> container:
     *  <ul>
     *  <li><b>AppliesTo</b>: this parameter indicates the type of listing that the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values pertain to. The corresponding <b>value</b> values that can be returned with the <b>AppliesTo</b> parameter is 'Auction' and 'FixedPrice'. </li>
     *  <li><b>Currency</b>: this parameter indicates the type of currency being used for the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values. The currency values (returned in corresponding <b>value</b> field) are based on the currency codes defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard. </li>
     *  <li><b>MaxRecommendedValue</b>: this parameter indicates the upper end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li>
     *  <li><b>MinRecommendedValue</b>: this parameter indicates the lower end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li>
     *  <li><b>SimilarItems</b>: this parameter and its corresponding <b>value</b> values indicates which eBay item listings were used to determine the <b>MinRecommendedValue</b> and <b>MaxRecommendedValue</b> values. The values returned in the <b>value</b> fields are Item IDs.</li>
     *  </ul>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
     *
     * @var string[] $value
     */
    private $value = [
        
    ];

    /**
     * Gets as name
     *
     * The name of the price guidance parameter is returned in this field. Any of the following price guidance parameters may be returned in a <b>Metadata</b> container:
     *  <ul>
     *  <li><b>AppliesTo</b>: this parameter indicates the type of listing that the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values pertain to. The corresponding <b>value</b> values that can be returned with the <b>AppliesTo</b> parameter is 'Auction' and 'FixedPrice'. </li>
     *  <li><b>Currency</b>: this parameter indicates the type of currency being used for the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values. The currency values (returned in corresponding <b>value</b> field) are based on the currency codes defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard. </li>
     *  <li><b>MaxRecommendedValue</b>: this parameter indicates the upper end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li>
     *  <li><b>MinRecommendedValue</b>: this parameter indicates the lower end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li>
     *  <li><b>SimilarItems</b>: this parameter and its corresponding <b>value</b> values indicates which eBay item listings were used to determine the <b>MinRecommendedValue</b> and <b>MaxRecommendedValue</b> values. The values returned in the <b>value</b> fields are Item IDs.</li>
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
     * The name of the price guidance parameter is returned in this field. Any of the following price guidance parameters may be returned in a <b>Metadata</b> container:
     *  <ul>
     *  <li><b>AppliesTo</b>: this parameter indicates the type of listing that the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values pertain to. The corresponding <b>value</b> values that can be returned with the <b>AppliesTo</b> parameter is 'Auction' and 'FixedPrice'. </li>
     *  <li><b>Currency</b>: this parameter indicates the type of currency being used for the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values. The currency values (returned in corresponding <b>value</b> field) are based on the currency codes defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard. </li>
     *  <li><b>MaxRecommendedValue</b>: this parameter indicates the upper end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li>
     *  <li><b>MinRecommendedValue</b>: this parameter indicates the lower end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li>
     *  <li><b>SimilarItems</b>: this parameter and its corresponding <b>value</b> values indicates which eBay item listings were used to determine the <b>MinRecommendedValue</b> and <b>MaxRecommendedValue</b> values. The values returned in the <b>value</b> fields are Item IDs.</li>
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

    /**
     * Adds as value
     *
     * The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
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
     * The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
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
     * The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
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
     * The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
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
     * The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value', true);
        if (null !== $value && !empty($value)) {
            $this->setValue($value);
        }
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
