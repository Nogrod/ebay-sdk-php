<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DomesticReturnsAcceptedCodeType
 *
 * This type defines the available options the seller has for accepting domestic returns.
 * XSD Type: DomesticReturnsAcceptedCodeType
 */
class DomesticReturnsAcceptedCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     *
     * @var string[] $domesticReturnsAccepted
     */
    private $domesticReturnsAccepted = [

    ];

    /**
     * Adds as domesticReturnsAccepted
     *
     * Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     *
     * @return self
     * @param string $domesticReturnsAccepted
     */
    public function addToDomesticReturnsAccepted($domesticReturnsAccepted)
    {
        $this->domesticReturnsAccepted[] = $domesticReturnsAccepted;
        return $this;
    }

    /**
     * isset domesticReturnsAccepted
     *
     * Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticReturnsAccepted($index)
    {
        return isset($this->domesticReturnsAccepted[$index]);
    }

    /**
     * unset domesticReturnsAccepted
     *
     * Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticReturnsAccepted($index)
    {
        unset($this->domesticReturnsAccepted[$index]);
    }

    /**
     * Gets as domesticReturnsAccepted
     *
     * Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     *
     * @return string[]
     */
    public function getDomesticReturnsAccepted()
    {
        return $this->domesticReturnsAccepted;
    }

    /**
     * Sets a new domesticReturnsAccepted
     *
     * Defines the available options the seller has for accepting domestic returns in the specified marketplace and category.
     *
     * @param string $domesticReturnsAccepted
     * @return self
     */
    public function setDomesticReturnsAccepted(array $domesticReturnsAccepted)
    {
        $this->domesticReturnsAccepted = $domesticReturnsAccepted;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomesticReturnsAccepted();
        if (null !== $value && !empty($this->getDomesticReturnsAccepted())) {
            $writer->write(array_map(function ($v) {return ["DomesticReturnsAccepted" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsAccepted', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticReturnsAccepted($value);
        }
    }
}
