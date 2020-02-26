<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ShippingPackageDetailsType
 *
 * Details about type of package used to ship an item.
 * XSD Type: ShippingPackageDetailsType
 */
class ShippingPackageDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Numeric identifier.
     *  Some applications use this ID to look up shipping packages more efficiently.
     *
     * @var int $packageID
     */
    private $packageID = null;

    /**
     * Display string that applications can use to present a list of shipping package
     *  options in a more user-friendly format (such as in a drop-down list).
     *
     * @var string $description
     */
    private $description = null;

    /**
     * A supported value for the site that can be used in the
     *  <b>Item.ShippingPackageDetails.ShippingPackage</b> or
     *  <b>Item.ShippingDetails.CalculatedShippingRate.ShippingPackage</b> fields
     *  of an Add/Revise/Relist API call.
     *
     * @var string $shippingPackage
     */
    private $shippingPackage = null;

    /**
     * Indicates if the package type is the default for the specified site.
     *
     * @var bool $defaultValue
     */
    private $defaultValue = null;

    /**
     * This field is returned as 'true' if the shipping package supports the use of
     *  package dimensions.
     *
     * @var bool $dimensionsSupported
     */
    private $dimensionsSupported = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as packageID
     *
     * Numeric identifier.
     *  Some applications use this ID to look up shipping packages more efficiently.
     *
     * @return int
     */
    public function getPackageID()
    {
        return $this->packageID;
    }

    /**
     * Sets a new packageID
     *
     * Numeric identifier.
     *  Some applications use this ID to look up shipping packages more efficiently.
     *
     * @param int $packageID
     * @return self
     */
    public function setPackageID($packageID)
    {
        $this->packageID = $packageID;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present a list of shipping package
     *  options in a more user-friendly format (such as in a drop-down list).
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
     * Display string that applications can use to present a list of shipping package
     *  options in a more user-friendly format (such as in a drop-down list).
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
     * Gets as shippingPackage
     *
     * A supported value for the site that can be used in the
     *  <b>Item.ShippingPackageDetails.ShippingPackage</b> or
     *  <b>Item.ShippingDetails.CalculatedShippingRate.ShippingPackage</b> fields
     *  of an Add/Revise/Relist API call.
     *
     * @return string
     */
    public function getShippingPackage()
    {
        return $this->shippingPackage;
    }

    /**
     * Sets a new shippingPackage
     *
     * A supported value for the site that can be used in the
     *  <b>Item.ShippingPackageDetails.ShippingPackage</b> or
     *  <b>Item.ShippingDetails.CalculatedShippingRate.ShippingPackage</b> fields
     *  of an Add/Revise/Relist API call.
     *
     * @param string $shippingPackage
     * @return self
     */
    public function setShippingPackage($shippingPackage)
    {
        $this->shippingPackage = $shippingPackage;
        return $this;
    }

    /**
     * Gets as defaultValue
     *
     * Indicates if the package type is the default for the specified site.
     *
     * @return bool
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * Indicates if the package type is the default for the specified site.
     *
     * @param bool $defaultValue
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Gets as dimensionsSupported
     *
     * This field is returned as 'true' if the shipping package supports the use of
     *  package dimensions.
     *
     * @return bool
     */
    public function getDimensionsSupported()
    {
        return $this->dimensionsSupported;
    }

    /**
     * Sets a new dimensionsSupported
     *
     * This field is returned as 'true' if the shipping package supports the use of
     *  package dimensions.
     *
     * @param bool $dimensionsSupported
     * @return self
     */
    public function setDimensionsSupported($dimensionsSupported)
    {
        $this->dimensionsSupported = $dimensionsSupported;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
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
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
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
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
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
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
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
        $value = $this->getPackageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackageID", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getShippingPackage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingPackage", $value);
        }
        $value = $this->getDefaultValue();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DefaultValue", $value);
        }
        $value = $this->getDimensionsSupported();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DimensionsSupported", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageID');
        if (null !== $value) {
            $this->setPackageID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackage');
        if (null !== $value) {
            $this->setShippingPackage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DefaultValue');
        if (null !== $value) {
            $this->setDefaultValue($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DimensionsSupported');
        if (null !== $value) {
            $this->setDimensionsSupported($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
