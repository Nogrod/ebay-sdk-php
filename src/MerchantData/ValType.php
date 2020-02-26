<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ValType
 *
 * This type is only applicable for Half.com listings, and since the Half.com site has been shut down, this type is no longer applicable.
 * XSD Type: ValType
 */
class ValType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  For Half.com, use <b>AttributeArray.Attribute.Value.ValueLiteral</b>
     *  in listing requests.
     *  <br/><br/>
     *  <b>AttributeArray.Attribute.Value.ValueLiteral</b> is required when
     *  you use <b>AddItem</b>. For the Half.com Notes attribute, the max
     *  length is 500 characters. You can revise
     *  <b>AttributeArray.Attribute.Value.ValueLiteral</b> for Half.com
     *  listings.
     *
     * @var string $valueLiteral
     */
    private $valueLiteral = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @var string[] $suggestedValueLiteral
     */
    private $suggestedValueLiteral = [
        
    ];

    /**
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *
     * @var int $valueID
     */
    private $valueID = null;

    /**
     * Gets as valueLiteral
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  For Half.com, use <b>AttributeArray.Attribute.Value.ValueLiteral</b>
     *  in listing requests.
     *  <br/><br/>
     *  <b>AttributeArray.Attribute.Value.ValueLiteral</b> is required when
     *  you use <b>AddItem</b>. For the Half.com Notes attribute, the max
     *  length is 500 characters. You can revise
     *  <b>AttributeArray.Attribute.Value.ValueLiteral</b> for Half.com
     *  listings.
     *
     * @return string
     */
    public function getValueLiteral()
    {
        return $this->valueLiteral;
    }

    /**
     * Sets a new valueLiteral
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *  For Half.com, use <b>AttributeArray.Attribute.Value.ValueLiteral</b>
     *  in listing requests.
     *  <br/><br/>
     *  <b>AttributeArray.Attribute.Value.ValueLiteral</b> is required when
     *  you use <b>AddItem</b>. For the Half.com Notes attribute, the max
     *  length is 500 characters. You can revise
     *  <b>AttributeArray.Attribute.Value.ValueLiteral</b> for Half.com
     *  listings.
     *
     * @param string $valueLiteral
     * @return self
     */
    public function setValueLiteral($valueLiteral)
    {
        $this->valueLiteral = $valueLiteral;
        return $this;
    }

    /**
     * Adds as suggestedValueLiteral
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return self
     * @param string $suggestedValueLiteral
     */
    public function addToSuggestedValueLiteral($suggestedValueLiteral)
    {
        $this->suggestedValueLiteral[] = $suggestedValueLiteral;
        return $this;
    }

    /**
     * isset suggestedValueLiteral
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedValueLiteral($index)
    {
        return isset($this->suggestedValueLiteral[$index]);
    }

    /**
     * unset suggestedValueLiteral
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedValueLiteral($index)
    {
        unset($this->suggestedValueLiteral[$index]);
    }

    /**
     * Gets as suggestedValueLiteral
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @return string[]
     */
    public function getSuggestedValueLiteral()
    {
        return $this->suggestedValueLiteral;
    }

    /**
     * Sets a new suggestedValueLiteral
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *  </span>
     *
     * @param string[] $suggestedValueLiteral
     * @return self
     */
    public function setSuggestedValueLiteral(array $suggestedValueLiteral)
    {
        $this->suggestedValueLiteral = $suggestedValueLiteral;
        return $this;
    }

    /**
     * Gets as valueID
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *
     * @return int
     */
    public function getValueID()
    {
        return $this->valueID;
    }

    /**
     * Sets a new valueID
     *
     * <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     *
     * @param int $valueID
     * @return self
     */
    public function setValueID($valueID)
    {
        $this->valueID = $valueID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getValueLiteral();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValueLiteral", $value);
        }
        $value = $this->getSuggestedValueLiteral();
        if (null !== $value && !empty($this->getSuggestedValueLiteral())) {
            $writer->write(array_map(function ($v) {
                return ["SuggestedValueLiteral" => $v];
            }, $value));
        }
        $value = $this->getValueID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValueID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueLiteral');
        if (null !== $value) {
            $this->setValueLiteral($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SuggestedValueLiteral', true);
        if (null !== $value && !empty($value)) {
            $this->setSuggestedValueLiteral($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueID');
        if (null !== $value) {
            $this->setValueID($value);
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
