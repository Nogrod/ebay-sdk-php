<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NonProfitAddressType
 *
 * Type defining the <b>NonProfitAddress</b> container, which consists of the address (including latitude and longitude) of a nonprofit charity organization.
 * XSD Type: NonProfitAddressType
 */
class NonProfitAddressType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The street address of a nonprofit charity organization.
     *
     * @var string $addressLine1
     */
    private $addressLine1 = null;

    /**
     * The second line (if needed) of a nonprofit charity organization. This field is often
     *  used for a suite number, floor number, or P.O. Box.
     *
     * @var string $addressLine2
     */
    private $addressLine2 = null;

    /**
     * The city in which a nonprofit charity organization is located.
     *
     * @var string $city
     */
    private $city = null;

    /**
     * The state in which a nonprofit charity organization is located.
     *
     * @var string $state
     */
    private $state = null;

    /**
     * The zip code of a nonprofit charity organization.
     *
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * The latitude value of a nonprofit charity organization. Latitude and longitude
     *  coordinates pinpoint the location of the organization relative to the earth, and are
     *  useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     *  fields are only returned in <b>GetCharities</b> if set by the organization.
     *
     * @var float $latitude
     */
    private $latitude = null;

    /**
     * The longitude value of a nonprofit charity organization. Latitude and longitude
     *  coordinates pinpoint the location of the organization relative to the earth, and are
     *  useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     *  fields are only returned in <b>GetCharities</b> if set by the organization.
     *
     * @var float $longitude
     */
    private $longitude = null;

    /**
     * Enumeration value that indicates whether or not a nonprofit charity organization is
     *  registered with the PayPal Giving Fund. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help topic for more information on registering with
     *  the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
     *
     * @var string $addressType
     */
    private $addressType = null;

    /**
     * Gets as addressLine1
     *
     * The street address of a nonprofit charity organization.
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Sets a new addressLine1
     *
     * The street address of a nonprofit charity organization.
     *
     * @param string $addressLine1
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Gets as addressLine2
     *
     * The second line (if needed) of a nonprofit charity organization. This field is often
     *  used for a suite number, floor number, or P.O. Box.
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Sets a new addressLine2
     *
     * The second line (if needed) of a nonprofit charity organization. This field is often
     *  used for a suite number, floor number, or P.O. Box.
     *
     * @param string $addressLine2
     * @return self
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * Gets as city
     *
     * The city in which a nonprofit charity organization is located.
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
     * The city in which a nonprofit charity organization is located.
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
     * Gets as state
     *
     * The state in which a nonprofit charity organization is located.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * The state in which a nonprofit charity organization is located.
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * The zip code of a nonprofit charity organization.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * The zip code of a nonprofit charity organization.
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * The latitude value of a nonprofit charity organization. Latitude and longitude
     *  coordinates pinpoint the location of the organization relative to the earth, and are
     *  useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     *  fields are only returned in <b>GetCharities</b> if set by the organization.
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * The latitude value of a nonprofit charity organization. Latitude and longitude
     *  coordinates pinpoint the location of the organization relative to the earth, and are
     *  useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     *  fields are only returned in <b>GetCharities</b> if set by the organization.
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * The longitude value of a nonprofit charity organization. Latitude and longitude
     *  coordinates pinpoint the location of the organization relative to the earth, and are
     *  useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     *  fields are only returned in <b>GetCharities</b> if set by the organization.
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * The longitude value of a nonprofit charity organization. Latitude and longitude
     *  coordinates pinpoint the location of the organization relative to the earth, and are
     *  useful for search purposes. The <b>Latitude</b> and <b>Longitude</b>
     *  fields are only returned in <b>GetCharities</b> if set by the organization.
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as addressType
     *
     * Enumeration value that indicates whether or not a nonprofit charity organization is
     *  registered with the PayPal Giving Fund. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help topic for more information on registering with
     *  the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Sets a new addressType
     *
     * Enumeration value that indicates whether or not a nonprofit charity organization is
     *  registered with the PayPal Giving Fund. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#enrolling">Enrolling your nonprofit</a> help topic for more information on registering with
     *  the PayPal Giving Fund and the benefits that come with being a registered eBay for Charity organization.
     *
     * @param string $addressType
     * @return self
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAddressLine1();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressLine1", $value);
        }
        $value = $this->getAddressLine2();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressLine2", $value);
        }
        $value = $this->getCity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}City", $value);
        }
        $value = $this->getState();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}State", $value);
        }
        $value = $this->getZipCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ZipCode", $value);
        }
        $value = $this->getLatitude();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Latitude", $value);
        }
        $value = $this->getLongitude();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Longitude", $value);
        }
        $value = $this->getAddressType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressType", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressLine1');
        if (null !== $value) {
            $this->setAddressLine1($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressLine2');
        if (null !== $value) {
            $this->setAddressLine2($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}City');
        if (null !== $value) {
            $this->setCity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}State');
        if (null !== $value) {
            $this->setState($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ZipCode');
        if (null !== $value) {
            $this->setZipCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Latitude');
        if (null !== $value) {
            $this->setLatitude($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Longitude');
        if (null !== $value) {
            $this->setLongitude($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressType');
        if (null !== $value) {
            $this->setAddressType($value);
        }
    }
}
