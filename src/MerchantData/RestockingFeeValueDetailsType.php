<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RestockingFeeValueDetailsType
 *
 * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
 * XSD Type: RestockingFeeValueDetailsType
 */
class RestockingFeeValueDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $restockingFeeValueOption
     */
    private $restockingFeeValueOption = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as restockingFeeValueOption
     *
     * @return string
     */
    public function getRestockingFeeValueOption()
    {
        return $this->restockingFeeValueOption;
    }

    /**
     * Sets a new restockingFeeValueOption
     *
     * @param string $restockingFeeValueOption
     * @return self
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption)
    {
        $this->restockingFeeValueOption = $restockingFeeValueOption;
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
        $value = $this->getRestockingFeeValueOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RestockingFeeValueOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockingFeeValueOption');
        if (null !== $value) {
            $this->setRestockingFeeValueOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
