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
     * @return int[]
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
     * @param int[] $policyID
     * @return self
     */
    public function setPolicyID(array $policyID)
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
        if (null !== $value && !empty($this->getPolicyID())) {
            $writer->write(array_map(function ($v) {return ["PolicyID" => $v];}, $value));
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PolicyID');
        if (null !== $value) {
            $this->setPolicyID($value);
        }
    }
}
