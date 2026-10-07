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
     * The Responsible Person's contact URL.
     *  <br />
     *
     * @var string $contactURL
     */
    private $contactURL = null;

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
     * Gets as contactURL
     *
     * The Responsible Person's contact URL.
     *  <br />
     *
     * @return string
     */
    public function getContactURL()
    {
        return $this->contactURL;
    }

    /**
     * Sets a new contactURL
     *
     * The Responsible Person's contact URL.
     *  <br />
     *
     * @param string $contactURL
     * @return self
     */
    public function setContactURL($contactURL)
    {
        $this->contactURL = $contactURL;
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
        if (!is_array($this->types)) {
            throw new \LogicException('types is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setTypes(iterable $types)
    {
        $this->types = $types;
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
        $value = $this->companyName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CompanyName', null, (string) $value);
        }
        $value = $this->street1;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Street1', null, (string) $value);
        }
        $value = $this->street2;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Street2', null, (string) $value);
        }
        $value = $this->cityName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CityName', null, (string) $value);
        }
        $value = $this->stateOrProvince;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StateOrProvince', null, (string) $value);
        }
        $value = $this->postalCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PostalCode', null, (string) $value);
        }
        $value = $this->country;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Country', null, (string) $value);
        }
        $value = $this->phone;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Phone', null, (string) $value);
        }
        $value = $this->email;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Email', null, (string) $value);
        }
        $value = $this->contactURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ContactURL', null, (string) $value);
        }
        $value = $this->types;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'Types', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'Type', null, (string) $v);
            }
            if ($open) {
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ResponsiblePersonType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->types = [];
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
                case 'CompanyName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->companyName = $value;
                    }
                    return true;
                case 'Street1':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->street1 = $value;
                    }
                    return true;
                case 'Street2':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->street2 = $value;
                    }
                    return true;
                case 'CityName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->cityName = $value;
                    }
                    return true;
                case 'StateOrProvince':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->stateOrProvince = $value;
                    }
                    return true;
                case 'PostalCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->postalCode = $value;
                    }
                    return true;
                case 'Country':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->country = $value;
                    }
                    return true;
                case 'Phone':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->phone = $value;
                    }
                    return true;
                case 'Email':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->email = $value;
                    }
                    return true;
                case 'ContactURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->contactURL = $value;
                    }
                    return true;
                case 'Types':
                    $this->types = Func::readList($reader, 'Type', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? $value : null;
                    });
                    return true;
            }
        }
        return false;
    }
}
