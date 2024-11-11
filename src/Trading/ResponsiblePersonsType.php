<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ResponsiblePersonsType
 *
 * Type that provides an array of each EU-based Responsible Person or entity associated with the listing.
 *  <br />
 *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
 * XSD Type: ResponsiblePersonsType
 */
class ResponsiblePersonsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of the detailed contact information for each Responsible Person or entity associated with the listing.
     *  <br /><br />
     *  A maximum of 5 EU Responsible Persons are supported.
     *
     * @var \Nogrod\eBaySDK\Trading\ResponsiblePersonType[] $responsiblePerson
     */
    private $responsiblePerson = [

    ];

    /**
     * Adds as responsiblePerson
     *
     * This container consists of the detailed contact information for each Responsible Person or entity associated with the listing.
     *  <br /><br />
     *  A maximum of 5 EU Responsible Persons are supported.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ResponsiblePersonType $responsiblePerson
     */
    public function addToResponsiblePerson(\Nogrod\eBaySDK\Trading\ResponsiblePersonType $responsiblePerson)
    {
        $this->responsiblePerson[] = $responsiblePerson;
        return $this;
    }

    /**
     * isset responsiblePerson
     *
     * This container consists of the detailed contact information for each Responsible Person or entity associated with the listing.
     *  <br /><br />
     *  A maximum of 5 EU Responsible Persons are supported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponsiblePerson($index)
    {
        return isset($this->responsiblePerson[$index]);
    }

    /**
     * unset responsiblePerson
     *
     * This container consists of the detailed contact information for each Responsible Person or entity associated with the listing.
     *  <br /><br />
     *  A maximum of 5 EU Responsible Persons are supported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponsiblePerson($index)
    {
        unset($this->responsiblePerson[$index]);
    }

    /**
     * Gets as responsiblePerson
     *
     * This container consists of the detailed contact information for each Responsible Person or entity associated with the listing.
     *  <br /><br />
     *  A maximum of 5 EU Responsible Persons are supported.
     *
     * @return \Nogrod\eBaySDK\Trading\ResponsiblePersonType[]
     */
    public function getResponsiblePerson()
    {
        return $this->responsiblePerson;
    }

    /**
     * Sets a new responsiblePerson
     *
     * This container consists of the detailed contact information for each Responsible Person or entity associated with the listing.
     *  <br /><br />
     *  A maximum of 5 EU Responsible Persons are supported.
     *
     * @param \Nogrod\eBaySDK\Trading\ResponsiblePersonType[] $responsiblePerson
     * @return self
     */
    public function setResponsiblePerson(array $responsiblePerson)
    {
        $this->responsiblePerson = $responsiblePerson;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getResponsiblePerson();
        if (null !== $value && [] !== $this->getResponsiblePerson()) {
            $writer->write(array_map(function ($v) {return ["ResponsiblePerson" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponsiblePerson');
        if (null !== $value) {
            $this->setResponsiblePerson(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ResponsiblePersonType::fromKeyValue($v);}, $value));
        }
    }
}
