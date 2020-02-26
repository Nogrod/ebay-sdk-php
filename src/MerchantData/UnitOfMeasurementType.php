<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing UnitOfMeasurementType
 *
 * This type is deprecated.
 * XSD Type: UnitOfMeasurementType
 */
class UnitOfMeasurementType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string[] $alternateText
     */
    private $alternateText = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var string $suggestedText
     */
    private $suggestedText = null;

    /**
     * Adds as alternateText
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $alternateText
     */
    public function addToAlternateText($alternateText)
    {
        $this->alternateText[] = $alternateText;
        return $this;
    }

    /**
     * isset alternateText
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternateText($index)
    {
        return isset($this->alternateText[$index]);
    }

    /**
     * unset alternateText
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternateText($index)
    {
        unset($this->alternateText[$index]);
    }

    /**
     * Gets as alternateText
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getAlternateText()
    {
        return $this->alternateText;
    }

    /**
     * Sets a new alternateText
     *
     * This field is deprecated.
     *
     * @param string[] $alternateText
     * @return self
     */
    public function setAlternateText(array $alternateText)
    {
        $this->alternateText = $alternateText;
        return $this;
    }

    /**
     * Gets as suggestedText
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSuggestedText()
    {
        return $this->suggestedText;
    }

    /**
     * Sets a new suggestedText
     *
     * This field is deprecated.
     *
     * @param string $suggestedText
     * @return self
     */
    public function setSuggestedText($suggestedText)
    {
        $this->suggestedText = $suggestedText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAlternateText();
        if (null !== $value && !empty($this->getAlternateText())) {
            $writer->write(array_map(function ($v) {
                return ["AlternateText" => $v];
            }, $value));
        }
        $value = $this->getSuggestedText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SuggestedText", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlternateText', true);
        if (null !== $value && !empty($value)) {
            $this->setAlternateText($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SuggestedText');
        if (null !== $value) {
            $this->setSuggestedText($value);
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
