<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InternationalReturnsShipmentPayeeCodeType
 *
 * This type defines the available options for who pays the return shipping costs for international returns.
 * XSD Type: InternationalReturnsShipmentPayeeCodeType
 */
class InternationalReturnsShipmentPayeeCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     *
     * @var string[] $internationalReturnsShipmentPayee
     */
    private $internationalReturnsShipmentPayee = [

    ];

    /**
     * Adds as internationalReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     *
     * @return self
     * @param string $internationalReturnsShipmentPayee
     */
    public function addToInternationalReturnsShipmentPayee($internationalReturnsShipmentPayee)
    {
        $this->internationalReturnsShipmentPayee[] = $internationalReturnsShipmentPayee;
        return $this;
    }

    /**
     * isset internationalReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalReturnsShipmentPayee($index)
    {
        return isset($this->internationalReturnsShipmentPayee[$index]);
    }

    /**
     * unset internationalReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalReturnsShipmentPayee($index)
    {
        unset($this->internationalReturnsShipmentPayee[$index]);
    }

    /**
     * Gets as internationalReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     *
     * @return string[]
     */
    public function getInternationalReturnsShipmentPayee()
    {
        return $this->internationalReturnsShipmentPayee;
    }

    /**
     * Sets a new internationalReturnsShipmentPayee
     *
     * Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     *
     * @param string $internationalReturnsShipmentPayee
     * @return self
     */
    public function setInternationalReturnsShipmentPayee(array $internationalReturnsShipmentPayee)
    {
        $this->internationalReturnsShipmentPayee = $internationalReturnsShipmentPayee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInternationalReturnsShipmentPayee();
        if (null !== $value && [] !== $this->getInternationalReturnsShipmentPayee()) {
            $writer->write(array_map(function ($v) {return ["InternationalReturnsShipmentPayee" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\InternationalReturnsShipmentPayeeCodeType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsShipmentPayee', true);
        if (null !== $value) {
            $this->setInternationalReturnsShipmentPayee($value);
        }
    }
}
