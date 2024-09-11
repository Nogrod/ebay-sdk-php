<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EconomicOperatorType
 *
 * <span class="tablenote"><b>Note: </b> Economic Operator and its associated fields have been deprecated for the Add/Revise/Relist/Verify and GetItem family of calls and will be decommissioned on October 21, 2024. It has been replaced by the <b>Manufacturer</b> and <b>ResponsiblePersons</b> containers. Economic Operator related fields should no longer be used for the Add/Revise/Relist and VerifyItem family of calls. As it is currently still supported, Economic Operator-related fields will be returned if applicable for the GetItem call.
 *  </span>
 *  Type that provides required Economic Operator information about the manufacturer and/or supplier of the item. The EO is a corporate entity that is related to, has some responsibility for, the product being listed for sale. For additional information, see <a href = "https://www.ebay.com/help/selling/selling/CE-mark-EU?id=5225#operator" target="_blank">What is an economic operator?</a>.
 * XSD Type: EconomicOperatorType
 */
class EconomicOperatorType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The company name of the registered Economic Operator.
     *
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * The first line of the registered Economic Operator's street address.
     *
     * @var string $street1
     */
    private $street1 = null;

    /**
     * The second line, if any, of the registered Economic Operator's street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'.
     *
     * @var string $street2
     */
    private $street2 = null;

    /**
     * The city of the registered Economic Operator's street address.
     *
     * @var string $cityName
     */
    private $cityName = null;

    /**
     * The state or province of the registered Economic Operator's street address.
     *
     * @var string $stateOrProvince
     */
    private $stateOrProvince = null;

    /**
     * The postal code of the registered Economic Operator's street address.
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English, a three-digit code, and a three-letter code: For example, the entry for Japan includes Japan, 392, JPN. Short codes provide uniform recognition, avoiding language-dependent country names. The number code is helpful where Latin script may be problematic. Not all listed codes are universally recognized as countries, for example: code AQ is Antarctica, 010, ATA
     *
     * @var string $country
     */
    private $country = null;

    /**
     * The registered Economic Operator's business phone number.
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * The registered Economic Operator's business email address.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as companyName
     *
     * The company name of the registered Economic Operator.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * The company name of the registered Economic Operator.
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as street1
     *
     * The first line of the registered Economic Operator's street address.
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * Sets a new street1
     *
     * The first line of the registered Economic Operator's street address.
     *
     * @param string $street1
     * @return self
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
        return $this;
    }

    /**
     * Gets as street2
     *
     * The second line, if any, of the registered Economic Operator's street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'.
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Sets a new street2
     *
     * The second line, if any, of the registered Economic Operator's street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'.
     *
     * @param string $street2
     * @return self
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * The city of the registered Economic Operator's street address.
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * The city of the registered Economic Operator's street address.
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as stateOrProvince
     *
     * The state or province of the registered Economic Operator's street address.
     *
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * Sets a new stateOrProvince
     *
     * The state or province of the registered Economic Operator's street address.
     *
     * @param string $stateOrProvince
     * @return self
     */
    public function setStateOrProvince($stateOrProvince)
    {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * The postal code of the registered Economic Operator's street address.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * The postal code of the registered Economic Operator's street address.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as country
     *
     * This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English, a three-digit code, and a three-letter code: For example, the entry for Japan includes Japan, 392, JPN. Short codes provide uniform recognition, avoiding language-dependent country names. The number code is helpful where Latin script may be problematic. Not all listed codes are universally recognized as countries, for example: code AQ is Antarctica, 010, ATA
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
     * This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English, a three-digit code, and a three-letter code: For example, the entry for Japan includes Japan, 392, JPN. Short codes provide uniform recognition, avoiding language-dependent country names. The number code is helpful where Latin script may be problematic. Not all listed codes are universally recognized as countries, for example: code AQ is Antarctica, 010, ATA
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
     * Gets as phone
     *
     * The registered Economic Operator's business phone number.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * The registered Economic Operator's business phone number.
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as email
     *
     * The registered Economic Operator's business email address.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * The registered Economic Operator's business email address.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCompanyName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompanyName", $value);
        }
        $value = $this->getStreet1();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Street1", $value);
        }
        $value = $this->getStreet2();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Street2", $value);
        }
        $value = $this->getCityName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CityName", $value);
        }
        $value = $this->getStateOrProvince();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StateOrProvince", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
        }
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Country", $value);
        }
        $value = $this->getPhone();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Phone", $value);
        }
        $value = $this->getEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Email", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompanyName');
        if (null !== $value) {
            $this->setCompanyName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Street1');
        if (null !== $value) {
            $this->setStreet1($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Street2');
        if (null !== $value) {
            $this->setStreet2($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CityName');
        if (null !== $value) {
            $this->setCityName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StateOrProvince');
        if (null !== $value) {
            $this->setStateOrProvince($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Phone');
        if (null !== $value) {
            $this->setPhone($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Email');
        if (null !== $value) {
            $this->setEmail($value);
        }
    }
}
