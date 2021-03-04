<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing WarrantyTypeDetailsType
 *
 * This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * XSD Type: WarrantyTypeDetailsType
 */
class WarrantyTypeDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $warrantyTypeOption
     */
    private $warrantyTypeOption = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as warrantyTypeOption
     *
     * @return string
     */
    public function getWarrantyTypeOption()
    {
        return $this->warrantyTypeOption;
    }

    /**
     * Sets a new warrantyTypeOption
     *
     * @param string $warrantyTypeOption
     * @return self
     */
    public function setWarrantyTypeOption($warrantyTypeOption)
    {
        $this->warrantyTypeOption = $warrantyTypeOption;
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
        $value = $this->getWarrantyTypeOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarrantyTypeOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarrantyTypeOption');
        if (null !== $value) {
            $this->setWarrantyTypeOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
