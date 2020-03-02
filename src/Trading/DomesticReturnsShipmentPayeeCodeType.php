<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DomesticReturnsShipmentPayeeCodeType
 *
 * This type defines the available options for who pays the return shipping costs for domestic returns.
 * XSD Type: DomesticReturnsShipmentPayeeCodeType
 */
class DomesticReturnsShipmentPayeeCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     *
     * @var string[] $domesticReturnsShipmentPayee
     */
    private $domesticReturnsShipmentPayee = [
        
    ];

    /**
     * Adds as domesticReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     *
     * @return self
     * @param string $domesticReturnsShipmentPayee
     */
    public function addToDomesticReturnsShipmentPayee($domesticReturnsShipmentPayee)
    {
        $this->domesticReturnsShipmentPayee[] = $domesticReturnsShipmentPayee;
        return $this;
    }

    /**
     * isset domesticReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticReturnsShipmentPayee($index)
    {
        return isset($this->domesticReturnsShipmentPayee[$index]);
    }

    /**
     * unset domesticReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticReturnsShipmentPayee($index)
    {
        unset($this->domesticReturnsShipmentPayee[$index]);
    }

    /**
     * Gets as domesticReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     *
     * @return string[]
     */
    public function getDomesticReturnsShipmentPayee()
    {
        return $this->domesticReturnsShipmentPayee;
    }

    /**
     * Sets a new domesticReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for domestic returns in the specified marketplace and category.
     *
     * @param string $domesticReturnsShipmentPayee
     * @return self
     */
    public function setDomesticReturnsShipmentPayee(array $domesticReturnsShipmentPayee)
    {
        $this->domesticReturnsShipmentPayee = $domesticReturnsShipmentPayee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomesticReturnsShipmentPayee();
        if (null !== $value && !empty($this->getDomesticReturnsShipmentPayee())) {
            $writer->write(array_map(function ($v) {
                return ["DomesticReturnsShipmentPayee" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsShipmentPayee', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticReturnsShipmentPayee($value);
        }
    }
}
