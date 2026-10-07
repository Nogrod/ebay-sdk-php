<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CountryPoliciesType
 *
 * This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 * XSD Type: CountryPoliciesType
 */
class CountryPoliciesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Defines the 2-letter country code set.
     *  <br><br>
     *  Use the <a href ="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call to see the list of currently supported codes,
     *  and the English names associated with each code (e.g., KY="Cayman Islands").
     *  <br><br>
     *  Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the
     *  codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO
     *  codes in the eBay list. (Additional codes appear at the end of this code list and
     *  are noted as non-ISO.)
     *  <br><br>
     *
     * @var string $country
     */
    private $country = null;

    /**
     * The policy Id specifying product compliance or take-back policy information.
     *
     * @var int[] $policyID
     */
    private $policyID = [

    ];

    /**
     * Gets as country
     *
     * Defines the 2-letter country code set.
     *  <br><br>
     *  Use the <a href ="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call to see the list of currently supported codes,
     *  and the English names associated with each code (e.g., KY="Cayman Islands").
     *  <br><br>
     *  Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the
     *  codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO
     *  codes in the eBay list. (Additional codes appear at the end of this code list and
     *  are noted as non-ISO.)
     *  <br><br>
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Defines the 2-letter country code set.
     *  <br><br>
     *  Use the <a href ="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call to see the list of currently supported codes,
     *  and the English names associated with each code (e.g., KY="Cayman Islands").
     *  <br><br>
     *  Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the
     *  codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO
     *  codes in the eBay list. (Additional codes appear at the end of this code list and
     *  are noted as non-ISO.)
     *  <br><br>
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as policyID
     *
     * The policy Id specifying product compliance or take-back policy information.
     *
     * @return self
     * @param int $policyID
     */
    public function addToPolicyID($policyID)
    {
        if (!is_array($this->policyID)) {
            throw new \LogicException('policyID is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->policyID[] = $policyID;
        return $this;
    }

    /**
     * isset policyID
     *
     * The policy Id specifying product compliance or take-back policy information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPolicyID($index)
    {
        return isset($this->policyID[$index]);
    }

    /**
     * unset policyID
     *
     * The policy Id specifying product compliance or take-back policy information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPolicyID($index)
    {
        unset($this->policyID[$index]);
    }

    /**
     * Gets as policyID
     *
     * The policy Id specifying product compliance or take-back policy information.
     *
     * @return iterable<int>
     */
    public function getPolicyID()
    {
        return $this->policyID;
    }

    /**
     * Sets a new policyID
     *
     * The policy Id specifying product compliance or take-back policy information.
     *
     * @param iterable<int> $policyID
     * @return self
     */
    public function setPolicyID(iterable $policyID)
    {
        $this->policyID = $policyID;
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
        $value = $this->country;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Country', null, (string) $value);
        }
        $value = $this->policyID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'PolicyID', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CountryPoliciesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->policyID = [];
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
                case 'Country':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->country = $value;
                    }
                    return true;
                case 'PolicyID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->policyID[] = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Country'] = $this->country;
        $data['PolicyID'] = Func::jsonList($this->policyID);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
