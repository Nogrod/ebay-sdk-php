<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CountryPoliciesArrayType
 *
 * This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 * XSD Type: CountryPoliciesArrayType
 */
class CountryPoliciesArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains a country and the custom policy/policies for that country.
     *
     * @var \Nogrod\eBaySDK\Trading\CountryPoliciesType[] $countryPolicies
     */
    private $countryPolicies = [

    ];

    /**
     * Adds as countryPolicies
     *
     * Contains a country and the custom policy/policies for that country.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CountryPoliciesType $countryPolicies
     */
    public function addToCountryPolicies(\Nogrod\eBaySDK\Trading\CountryPoliciesType $countryPolicies)
    {
        $this->countryPolicies[] = $countryPolicies;
        return $this;
    }

    /**
     * isset countryPolicies
     *
     * Contains a country and the custom policy/policies for that country.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountryPolicies($index)
    {
        return isset($this->countryPolicies[$index]);
    }

    /**
     * unset countryPolicies
     *
     * Contains a country and the custom policy/policies for that country.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountryPolicies($index)
    {
        unset($this->countryPolicies[$index]);
    }

    /**
     * Gets as countryPolicies
     *
     * Contains a country and the custom policy/policies for that country.
     *
     * @return \Nogrod\eBaySDK\Trading\CountryPoliciesType[]
     */
    public function getCountryPolicies()
    {
        return $this->countryPolicies;
    }

    /**
     * Sets a new countryPolicies
     *
     * Contains a country and the custom policy/policies for that country.
     *
     * @param \Nogrod\eBaySDK\Trading\CountryPoliciesType[] $countryPolicies
     * @return self
     */
    public function setCountryPolicies(array $countryPolicies)
    {
        $this->countryPolicies = $countryPolicies;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCountryPolicies();
        if (null !== $value && [] !== $this->getCountryPolicies()) {
            $writer->write(array_map(function ($v) {return ["CountryPolicies" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CountryPolicies');
        if (null !== $value) {
            $this->setCountryPolicies(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\CountryPoliciesType::fromKeyValue($v);}, $value));
        }
    }
}
