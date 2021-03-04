<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing WarrantyOfferedDetailsType
 *
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * XSD Type: WarrantyOfferedDetailsType
 */
class WarrantyOfferedDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $warrantyOfferedOption
     */
    private $warrantyOfferedOption = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as warrantyOfferedOption
     *
     * @return string
     */
    public function getWarrantyOfferedOption()
    {
        return $this->warrantyOfferedOption;
    }

    /**
     * Sets a new warrantyOfferedOption
     *
     * @param string $warrantyOfferedOption
     * @return self
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption)
    {
        $this->warrantyOfferedOption = $warrantyOfferedOption;
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
        $value = $this->getWarrantyOfferedOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyOfferedOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyOfferedOption');
        if (null !== $value) {
            $this->setWarrantyOfferedOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
