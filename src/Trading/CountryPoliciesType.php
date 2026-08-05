<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CountryPoliciesType
 *
 * This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 * XSD Type: CountryPoliciesType
 */
class CountryPoliciesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Country", $value);
        }
        $value = $this->getPolicyID();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["PolicyID" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\CountryPoliciesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PolicyID', true);
        if (null !== $value) {
            $this->setPolicyID($value);
        }
    }
}
