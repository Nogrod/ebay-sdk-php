<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ResponsiblePersonType
 *
 * Type that provides information, such as name and contact details, for an EU-based Responsible Person or entity, associated with the product.
 * XSD Type: ResponsiblePersonType
 */
class ResponsiblePersonType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the the Responsible Person or entity.
     *  <br />
     *
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * The first line of the responsible Responsible Person's address.
     *  <br />
     *
     * @var string $street1
     */
    private $street1 = null;

    /**
     * The second line of the Responsible Person's address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'.
     *  <br />
     *
     * @var string $street2
     */
    private $street2 = null;

    /**
     * The city of the Responsible Person's street address.
     *  <br />
     *
     * @var string $cityName
     */
    private $cityName = null;

    /**
     * The state of province of the Responsible Person's street address.
     *  <br />
     *
     * @var string $stateOrProvince
     */
    private $stateOrProvince = null;

    /**
     * The postal code of the Responsible Person's street address.
     *  <br />
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * The two letter <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166-1</a> standard abbreviation of the country of the Responsible Person's address.
     *
     * @var string $country
     */
    private $country = null;

    /**
     * The Responsible Person's business phone number.
     *  <br />
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * The Responsible Person's email address.
     *  <br />
     *
     * @var string $email
     */
    private $email = null;

    /**
     * The type(s) associated with the Responsible Person or entity.
     *
     * @var string[] $types
     */
    private $types = null;

    /**
     * Gets as companyName
     *
     * The name of the the Responsible Person or entity.
     *  <br />
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
     * The name of the the Responsible Person or entity.
     *  <br />
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
     * The first line of the responsible Responsible Person's address.
     *  <br />
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
     * The first line of the responsible Responsible Person's address.
     *  <br />
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
     * The second line of the Responsible Person's address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'.
     *  <br />
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
     * The second line of the Responsible Person's address. This field is not always used, but can be used for secondary address information such as 'Suite Number' or 'Apt Number'.
     *  <br />
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
     * The city of the Responsible Person's street address.
     *  <br />
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
     * The city of the Responsible Person's street address.
     *  <br />
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
     * The state of province of the Responsible Person's street address.
     *  <br />
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
     * The state of province of the Responsible Person's street address.
     *  <br />
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
     * The postal code of the Responsible Person's street address.
     *  <br />
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
     * The postal code of the Responsible Person's street address.
     *  <br />
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
     * The two letter <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166-1</a> standard abbreviation of the country of the Responsible Person's address.
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
     * The two letter <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166-1</a> standard abbreviation of the country of the Responsible Person's address.
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
     * The Responsible Person's business phone number.
     *  <br />
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
     * The Responsible Person's business phone number.
     *  <br />
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
     * The Responsible Person's email address.
     *  <br />
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
     * The Responsible Person's email address.
     *  <br />
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as type
     *
     * The type(s) associated with the Responsible Person or entity.
     *
     * @return self
     * @param string $type
     */
    public function addToTypes($type)
    {
        $this->types[] = $type;
        return $this;
    }

    /**
     * isset types
     *
     * The type(s) associated with the Responsible Person or entity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTypes($index)
    {
        return isset($this->types[$index]);
    }

    /**
     * unset types
     *
     * The type(s) associated with the Responsible Person or entity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTypes($index)
    {
        unset($this->types[$index]);
    }

    /**
     * Gets as types
     *
     * The type(s) associated with the Responsible Person or entity.
     *
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Sets a new types
     *
     * The type(s) associated with the Responsible Person or entity.
     *
     * @param string $types
     * @return self
     */
    public function setTypes(array $types)
    {
        $this->types = $types;
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
        $value = $this->getTypes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Types", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Types', true);
        if (null !== $value && !empty($value)) {
            $this->setTypes($value);
        }
    }
}
