<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CountryPoliciesArrayType
 *
 * This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 * XSD Type: CountryPoliciesArrayType
 */
class CountryPoliciesArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->countryPolicies)) {
            throw new \LogicException('countryPolicies is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\CountryPoliciesType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\CountryPoliciesType> $countryPolicies
     * @return self
     */
    public function setCountryPolicies(iterable $countryPolicies)
    {
        $this->countryPolicies = $countryPolicies;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->countryPolicies;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'CountryPolicies', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CountryPoliciesArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->countryPolicies = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'CountryPolicies':
                    $this->countryPolicies[] = \Nogrod\eBaySDK\Trading\CountryPoliciesType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['CountryPolicies'] = Func::jsonList($this->countryPolicies);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
