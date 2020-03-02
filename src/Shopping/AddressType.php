<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddressType
 *
 * This type is used to provide details about a Business Seller's address.
 * XSD Type: AddressType
 */
class AddressType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The name associated with the Business Seller. This field is only returned if defined and available.
     *  <br>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This field is deprecated and no longer returned. It has been replaced by the <b>Street1</b> and <b>Street2</b> fields.
     *
     * @var string $street
     */
    private $street = null;

    /**
     * The first line of the Business Seller's street address.
     *  <br>
     *
     * @var string $street1
     */
    private $street1 = null;

    /**
     * The second line of the Business Seller's street address (such as an apartment number or suite number). Returned if the Business Seller used the second line available for a street address.
     *  <br>
     *
     * @var string $street2
     */
    private $street2 = null;

    /**
     * The name of the Business Seller's city.
     *  <br>
     *
     * @var string $cityName
     */
    private $cityName = null;

    /**
     * This field is deprecated and no longer returned.
     *
     * @var string $county
     */
    private $county = null;

    /**
     * The state or province of the Business Seller's address. States and/or provinces are not applicable for every country.
     *  <br>
     *
     * @var string $stateOrProvince
     */
    private $stateOrProvince = null;

    /**
     * The name of the country associated with the Business Seller's address.
     *
     * @var string $countryName
     */
    private $countryName = null;

    /**
     * The Business Seller's primary phone number. This may return a value of
     *  <code>Invalid Request</code> if you are not authorized to see the
     *  Business Seller's phone number.
     *  <br/><br/>
     *  In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     *  digits), and phone extension (if specified by the user) are returned in this field.
     *  The extension can be one or more digits. Non-breaking spaces are used as delimiters
     *  between these phone number components.
     *  <br>
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * This field is deprecated. The full phone number, including the country prefix, is shown in the <b>Phone</b> field.
     *
     * @var string $phoneCountryPrefix
     */
    private $phoneCountryPrefix = null;

    /**
     * This field is deprecated. The full phone number, including the area code, is shown in the <b>Phone</b> field.
     *
     * @var string $phoneAreaOrCityCode
     */
    private $phoneAreaOrCityCode = null;

    /**
     * This field is deprecated. The full phone number is shown in the <b>Phone</b> field.
     *
     * @var string $phoneLocalNumber
     */
    private $phoneLocalNumber = null;

    /**
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @var string $phone2CountryPrefix
     */
    private $phone2CountryPrefix = null;

    /**
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @var string $phone2AreaOrCityCode
     */
    private $phone2AreaOrCityCode = null;

    /**
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @var string $phone2LocalNumber
     */
    private $phone2LocalNumber = null;

    /**
     * The postal code asssociated with the Business Seller's address.
     *  <br>
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * This field is deprecated.
     *
     * @var string $addressID
     */
    private $addressID = null;

    /**
     * This field is deprecated.
     *
     * @var string $externalAddressID
     */
    private $externalAddressID = null;

    /**
     * This field is deprecated.
     *
     * @var string $internationalName
     */
    private $internationalName = null;

    /**
     * This field is deprecated.
     *
     * @var string $internationalStateAndCity
     */
    private $internationalStateAndCity = null;

    /**
     * This field is deprecated.
     *
     * @var string $internationalStreet
     */
    private $internationalStreet = null;

    /**
     * The Business Seller's company name. This field is only returned if defined and available.
     *
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * The first name of the Business Seller.
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * The last name of the Business Seller.
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * Gets as name
     *
     * The name associated with the Business Seller. This field is only returned if defined and available.
     *  <br>
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name associated with the Business Seller. This field is only returned if defined and available.
     *  <br>
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as street
     *
     * This field is deprecated and no longer returned. It has been replaced by the <b>Street1</b> and <b>Street2</b> fields.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * This field is deprecated and no longer returned. It has been replaced by the <b>Street1</b> and <b>Street2</b> fields.
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as street1
     *
     * The first line of the Business Seller's street address.
     *  <br>
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
     * The first line of the Business Seller's street address.
     *  <br>
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
     * The second line of the Business Seller's street address (such as an apartment number or suite number). Returned if the Business Seller used the second line available for a street address.
     *  <br>
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
     * The second line of the Business Seller's street address (such as an apartment number or suite number). Returned if the Business Seller used the second line available for a street address.
     *  <br>
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
     * The name of the Business Seller's city.
     *  <br>
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
     * The name of the Business Seller's city.
     *  <br>
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
     * Gets as county
     *
     * This field is deprecated and no longer returned.
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * This field is deprecated and no longer returned.
     *
     * @param string $county
     * @return self
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * Gets as stateOrProvince
     *
     * The state or province of the Business Seller's address. States and/or provinces are not applicable for every country.
     *  <br>
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
     * The state or province of the Business Seller's address. States and/or provinces are not applicable for every country.
     *  <br>
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
     * Gets as countryName
     *
     * The name of the country associated with the Business Seller's address.
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * The name of the country associated with the Business Seller's address.
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Gets as phone
     *
     * The Business Seller's primary phone number. This may return a value of
     *  <code>Invalid Request</code> if you are not authorized to see the
     *  Business Seller's phone number.
     *  <br/><br/>
     *  In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     *  digits), and phone extension (if specified by the user) are returned in this field.
     *  The extension can be one or more digits. Non-breaking spaces are used as delimiters
     *  between these phone number components.
     *  <br>
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
     * The Business Seller's primary phone number. This may return a value of
     *  <code>Invalid Request</code> if you are not authorized to see the
     *  Business Seller's phone number.
     *  <br/><br/>
     *  In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     *  digits), and phone extension (if specified by the user) are returned in this field.
     *  The extension can be one or more digits. Non-breaking spaces are used as delimiters
     *  between these phone number components.
     *  <br>
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
     * Gets as phoneCountryPrefix
     *
     * This field is deprecated. The full phone number, including the country prefix, is shown in the <b>Phone</b> field.
     *
     * @return string
     */
    public function getPhoneCountryPrefix()
    {
        return $this->phoneCountryPrefix;
    }

    /**
     * Sets a new phoneCountryPrefix
     *
     * This field is deprecated. The full phone number, including the country prefix, is shown in the <b>Phone</b> field.
     *
     * @param string $phoneCountryPrefix
     * @return self
     */
    public function setPhoneCountryPrefix($phoneCountryPrefix)
    {
        $this->phoneCountryPrefix = $phoneCountryPrefix;
        return $this;
    }

    /**
     * Gets as phoneAreaOrCityCode
     *
     * This field is deprecated. The full phone number, including the area code, is shown in the <b>Phone</b> field.
     *
     * @return string
     */
    public function getPhoneAreaOrCityCode()
    {
        return $this->phoneAreaOrCityCode;
    }

    /**
     * Sets a new phoneAreaOrCityCode
     *
     * This field is deprecated. The full phone number, including the area code, is shown in the <b>Phone</b> field.
     *
     * @param string $phoneAreaOrCityCode
     * @return self
     */
    public function setPhoneAreaOrCityCode($phoneAreaOrCityCode)
    {
        $this->phoneAreaOrCityCode = $phoneAreaOrCityCode;
        return $this;
    }

    /**
     * Gets as phoneLocalNumber
     *
     * This field is deprecated. The full phone number is shown in the <b>Phone</b> field.
     *
     * @return string
     */
    public function getPhoneLocalNumber()
    {
        return $this->phoneLocalNumber;
    }

    /**
     * Sets a new phoneLocalNumber
     *
     * This field is deprecated. The full phone number is shown in the <b>Phone</b> field.
     *
     * @param string $phoneLocalNumber
     * @return self
     */
    public function setPhoneLocalNumber($phoneLocalNumber)
    {
        $this->phoneLocalNumber = $phoneLocalNumber;
        return $this;
    }

    /**
     * Gets as phone2CountryPrefix
     *
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @return string
     */
    public function getPhone2CountryPrefix()
    {
        return $this->phone2CountryPrefix;
    }

    /**
     * Sets a new phone2CountryPrefix
     *
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @param string $phone2CountryPrefix
     * @return self
     */
    public function setPhone2CountryPrefix($phone2CountryPrefix)
    {
        $this->phone2CountryPrefix = $phone2CountryPrefix;
        return $this;
    }

    /**
     * Gets as phone2AreaOrCityCode
     *
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @return string
     */
    public function getPhone2AreaOrCityCode()
    {
        return $this->phone2AreaOrCityCode;
    }

    /**
     * Sets a new phone2AreaOrCityCode
     *
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @param string $phone2AreaOrCityCode
     * @return self
     */
    public function setPhone2AreaOrCityCode($phone2AreaOrCityCode)
    {
        $this->phone2AreaOrCityCode = $phone2AreaOrCityCode;
        return $this;
    }

    /**
     * Gets as phone2LocalNumber
     *
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @return string
     */
    public function getPhone2LocalNumber()
    {
        return $this->phone2LocalNumber;
    }

    /**
     * Sets a new phone2LocalNumber
     *
     * This field is deprecated. A secondary phone number is no longer supported.
     *
     * @param string $phone2LocalNumber
     * @return self
     */
    public function setPhone2LocalNumber($phone2LocalNumber)
    {
        $this->phone2LocalNumber = $phone2LocalNumber;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * The postal code asssociated with the Business Seller's address.
     *  <br>
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
     * The postal code asssociated with the Business Seller's address.
     *  <br>
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
     * Gets as addressID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getAddressID()
    {
        return $this->addressID;
    }

    /**
     * Sets a new addressID
     *
     * This field is deprecated.
     *
     * @param string $addressID
     * @return self
     */
    public function setAddressID($addressID)
    {
        $this->addressID = $addressID;
        return $this;
    }

    /**
     * Gets as externalAddressID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getExternalAddressID()
    {
        return $this->externalAddressID;
    }

    /**
     * Sets a new externalAddressID
     *
     * This field is deprecated.
     *
     * @param string $externalAddressID
     * @return self
     */
    public function setExternalAddressID($externalAddressID)
    {
        $this->externalAddressID = $externalAddressID;
        return $this;
    }

    /**
     * Gets as internationalName
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getInternationalName()
    {
        return $this->internationalName;
    }

    /**
     * Sets a new internationalName
     *
     * This field is deprecated.
     *
     * @param string $internationalName
     * @return self
     */
    public function setInternationalName($internationalName)
    {
        $this->internationalName = $internationalName;
        return $this;
    }

    /**
     * Gets as internationalStateAndCity
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getInternationalStateAndCity()
    {
        return $this->internationalStateAndCity;
    }

    /**
     * Sets a new internationalStateAndCity
     *
     * This field is deprecated.
     *
     * @param string $internationalStateAndCity
     * @return self
     */
    public function setInternationalStateAndCity($internationalStateAndCity)
    {
        $this->internationalStateAndCity = $internationalStateAndCity;
        return $this;
    }

    /**
     * Gets as internationalStreet
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getInternationalStreet()
    {
        return $this->internationalStreet;
    }

    /**
     * Sets a new internationalStreet
     *
     * This field is deprecated.
     *
     * @param string $internationalStreet
     * @return self
     */
    public function setInternationalStreet($internationalStreet)
    {
        $this->internationalStreet = $internationalStreet;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * The Business Seller's company name. This field is only returned if defined and available.
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
     * The Business Seller's company name. This field is only returned if defined and available.
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
     * Gets as firstName
     *
     * The first name of the Business Seller.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * The first name of the Business Seller.
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * The last name of the Business Seller.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * The last name of the Business Seller.
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getStreet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Street", $value);
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
        $value = $this->getCounty();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}County", $value);
        }
        $value = $this->getStateOrProvince();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StateOrProvince", $value);
        }
        $value = $this->getCountryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CountryName", $value);
        }
        $value = $this->getPhone();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Phone", $value);
        }
        $value = $this->getPhoneCountryPrefix();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhoneCountryPrefix", $value);
        }
        $value = $this->getPhoneAreaOrCityCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhoneAreaOrCityCode", $value);
        }
        $value = $this->getPhoneLocalNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhoneLocalNumber", $value);
        }
        $value = $this->getPhone2CountryPrefix();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Phone2CountryPrefix", $value);
        }
        $value = $this->getPhone2AreaOrCityCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Phone2AreaOrCityCode", $value);
        }
        $value = $this->getPhone2LocalNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Phone2LocalNumber", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
        }
        $value = $this->getAddressID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressID", $value);
        }
        $value = $this->getExternalAddressID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalAddressID", $value);
        }
        $value = $this->getInternationalName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalName", $value);
        }
        $value = $this->getInternationalStateAndCity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalStateAndCity", $value);
        }
        $value = $this->getInternationalStreet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalStreet", $value);
        }
        $value = $this->getCompanyName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompanyName", $value);
        }
        $value = $this->getFirstName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FirstName", $value);
        }
        $value = $this->getLastName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Street');
        if (null !== $value) {
            $this->setStreet($value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}County');
        if (null !== $value) {
            $this->setCounty($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StateOrProvince');
        if (null !== $value) {
            $this->setStateOrProvince($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CountryName');
        if (null !== $value) {
            $this->setCountryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Phone');
        if (null !== $value) {
            $this->setPhone($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhoneCountryPrefix');
        if (null !== $value) {
            $this->setPhoneCountryPrefix($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhoneAreaOrCityCode');
        if (null !== $value) {
            $this->setPhoneAreaOrCityCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhoneLocalNumber');
        if (null !== $value) {
            $this->setPhoneLocalNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Phone2CountryPrefix');
        if (null !== $value) {
            $this->setPhone2CountryPrefix($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Phone2AreaOrCityCode');
        if (null !== $value) {
            $this->setPhone2AreaOrCityCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Phone2LocalNumber');
        if (null !== $value) {
            $this->setPhone2LocalNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressID');
        if (null !== $value) {
            $this->setAddressID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalAddressID');
        if (null !== $value) {
            $this->setExternalAddressID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalName');
        if (null !== $value) {
            $this->setInternationalName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalStateAndCity');
        if (null !== $value) {
            $this->setInternationalStateAndCity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalStreet');
        if (null !== $value) {
            $this->setInternationalStreet($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompanyName');
        if (null !== $value) {
            $this->setCompanyName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FirstName');
        if (null !== $value) {
            $this->setFirstName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastName');
        if (null !== $value) {
            $this->setLastName($value);
        }
    }
}
