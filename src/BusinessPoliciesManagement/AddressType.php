<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: Address
 */
class AddressType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $street1
     */
    private $street1 = null;

    /**
     * @var string $street2
     */
    private $street2 = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $county
     */
    private $county = null;

    /**
     * @var string $stateOrProvince
     */
    private $stateOrProvince = null;

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * Gets as name
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
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as street1
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
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Sets a new street2
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
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as county
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
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * Sets a new stateOrProvince
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
     * Gets as country
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
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as postalCode
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
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}name", $value);
        }
        $value = $this->getStreet1();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}street1", $value);
        }
        $value = $this->getStreet2();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}street2", $value);
        }
        $value = $this->getCity();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}city", $value);
        }
        $value = $this->getCounty();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}county", $value);
        }
        $value = $this->getStateOrProvince();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}stateOrProvince", $value);
        }
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}country", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}postalCode", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}street1');
        if (null !== $value) {
            $this->setStreet1($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}street2');
        if (null !== $value) {
            $this->setStreet2($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}city');
        if (null !== $value) {
            $this->setCity($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}county');
        if (null !== $value) {
            $this->setCounty($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}stateOrProvince');
        if (null !== $value) {
            $this->setStateOrProvince($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}postalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
    }
}
