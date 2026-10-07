<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPackageDetailsType
 *
 * Details about type of package used to ship an item.
 * XSD Type: ShippingPackageDetailsType
 */
class ShippingPackageDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->packageID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PackageID', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
        $value = $this->shippingPackage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingPackage', null, (string) $value);
        }
        $value = $this->defaultValue;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DefaultValue', null, ($value ? 'true' : 'false'));
        }
        $value = $this->dimensionsSupported;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DimensionsSupported', null, ($value ? 'true' : 'false'));
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShippingPackageDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'PackageID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->packageID = (int) $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
                case 'ShippingPackage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingPackage = $value;
                    }
                    return true;
                case 'DefaultValue':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->defaultValue = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DimensionsSupported':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->dimensionsSupported = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['PackageID'] = $this->packageID;
        $data['Description'] = $this->description;
        $data['ShippingPackage'] = $this->shippingPackage;
        $data['DefaultValue'] = $this->defaultValue;
        $data['DimensionsSupported'] = $this->dimensionsSupported;
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
