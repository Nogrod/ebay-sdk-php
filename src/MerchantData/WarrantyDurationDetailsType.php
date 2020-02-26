<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing WarrantyDurationDetailsType
 *
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * XSD Type: WarrantyDurationDetailsType
 */
class WarrantyDurationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $warrantyDurationOption
     */
    private $warrantyDurationOption = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as warrantyDurationOption
     *
     * @return string
     */
    public function getWarrantyDurationOption()
    {
        return $this->warrantyDurationOption;
    }

    /**
     * Sets a new warrantyDurationOption
     *
     * @param string $warrantyDurationOption
     * @return self
     */
    public function setWarrantyDurationOption($warrantyDurationOption)
    {
        $this->warrantyDurationOption = $warrantyDurationOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getWarrantyDurationOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyDurationOption", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyDurationOption');
        if (null !== $value) {
            $this->setWarrantyDurationOption($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
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
