<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExcludeShippingLocationDetailsType
 *
 * Type used by the <b>ExcludeShippingLocationDetails</b> containers that are returned in the <b>GeteBayDetails</b> response. The values returned in the <b>ExcludeShippingLocationDetails.Location</b> fields are the values that can be specified when specifying excluded shipping locations in an Add/Revise/Relist item call, or in a shipping business policy.
 * XSD Type: ExcludeShippingLocationDetailsType
 */
class ExcludeShippingLocationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The localized location name.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The location or region code to be used with the AddItem family of calls. These
     *  codes are also returned by GetItem. This code reflects the <a href=
     *  "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm"
     *  >ISO 3166</a> codes.
     *
     * @var string $location
     */
    private $location = null;

    /**
     * The region code to which the location belongs.
     *
     * @var string $region
     */
    private $region = null;

    /**
     * Returns the current version number of the ExcludeShippingLocation data. Use
     *  the version number to determine if you need to refresh your cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * The time in GMT that the feature flags for the details were last updated.
     *  Use this timestamp to determine if you need to refresh your cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as description
     *
     * The localized location name.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The localized location name.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location or region code to be used with the AddItem family of calls. These
     *  codes are also returned by GetItem. This code reflects the <a href=
     *  "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm"
     *  >ISO 3166</a> codes.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location or region code to be used with the AddItem family of calls. These
     *  codes are also returned by GetItem. This code reflects the <a href=
     *  "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm"
     *  >ISO 3166</a> codes.
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as region
     *
     * The region code to which the location belongs.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * The region code to which the location belongs.
     *
     * @param string $region
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the current version number of the ExcludeShippingLocation data. Use
     *  the version number to determine if you need to refresh your cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the current version number of the ExcludeShippingLocation data. Use
     *  the version number to determine if you need to refresh your cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * The time in GMT that the feature flags for the details were last updated.
     *  Use this timestamp to determine if you need to refresh your cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * The time in GMT that the feature flags for the details were last updated.
     *  Use this timestamp to determine if you need to refresh your cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getLocation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Location", $value);
        }
        $value = $this->getRegion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Region", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Location');
        if (null !== $value) {
            $this->setLocation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Region');
        if (null !== $value) {
            $this->setRegion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
