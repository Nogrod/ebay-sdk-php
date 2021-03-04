<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExternalProductIDType
 *
 * <span class="tablenote"><b>Note: </b>
 *  This type is deprecated.
 *  </span>
 * XSD Type: ExternalProductIDType
 */
class ExternalProductIDType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $value
     */
    private $value = null;

    /**
     * @var bool $returnSearchResultOnDuplicates
     */
    private $returnSearchResultOnDuplicates = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var string[] $alternateValue
     */
    private $alternateValue = [
        
    ];

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as returnSearchResultOnDuplicates
     *
     * @return bool
     */
    public function getReturnSearchResultOnDuplicates()
    {
        return $this->returnSearchResultOnDuplicates;
    }

    /**
     * Sets a new returnSearchResultOnDuplicates
     *
     * @param bool $returnSearchResultOnDuplicates
     * @return self
     */
    public function setReturnSearchResultOnDuplicates($returnSearchResultOnDuplicates)
    {
        $this->returnSearchResultOnDuplicates = $returnSearchResultOnDuplicates;
        return $this;
    }

    /**
     * Gets as type
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
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as alternateValue
     *
     * @return self
     * @param string $alternateValue
     */
    public function addToAlternateValue($alternateValue)
    {
        $this->alternateValue[] = $alternateValue;
        return $this;
    }

    /**
     * isset alternateValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternateValue($index)
    {
        return isset($this->alternateValue[$index]);
    }

    /**
     * unset alternateValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternateValue($index)
    {
        unset($this->alternateValue[$index]);
    }

    /**
     * Gets as alternateValue
     *
     * @return string[]
     */
    public function getAlternateValue()
    {
        return $this->alternateValue;
    }

    /**
     * Sets a new alternateValue
     *
     * @param string[] $alternateValue
     * @return self
     */
    public function setAlternateValue(array $alternateValue)
    {
        $this->alternateValue = $alternateValue;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Value", $value);
        }
        $value = $this->getReturnSearchResultOnDuplicates();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnSearchResultOnDuplicates", $value);
        }
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
        }
        $value = $this->getAlternateValue();
        if (null !== $value && !empty($this->getAlternateValue())) {
            $writer->write(array_map(function ($v) {
                return ["AlternateValue" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value');
        if (null !== $value) {
            $this->setValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnSearchResultOnDuplicates');
        if (null !== $value) {
            $this->setReturnSearchResultOnDuplicates($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlternateValue', true);
        if (null !== $value && !empty($value)) {
            $this->setAlternateValue($value);
        }
    }
}
