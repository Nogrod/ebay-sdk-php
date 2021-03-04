<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingServicePackageDetailsType
 *
 * Packages supported by the enclosing shipping service.
 * XSD Type: ShippingServicePackageDetailsType
 */
class ShippingServicePackageDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the package type.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This field is only returned if package dimensions are required for the corresponding
     *  package type (<b>ShippingServicePackageDetails.Name</b> value) supported
     *  by the corresponding shipping service option
     *  (<b>ShippingServiceDetails.ShippingService</b> value).
     *
     * @var bool $dimensionsRequired
     */
    private $dimensionsRequired = null;

    /**
     * Gets as name
     *
     * The name of the package type.
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
     * The name of the package type.
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
     * Gets as dimensionsRequired
     *
     * This field is only returned if package dimensions are required for the corresponding
     *  package type (<b>ShippingServicePackageDetails.Name</b> value) supported
     *  by the corresponding shipping service option
     *  (<b>ShippingServiceDetails.ShippingService</b> value).
     *
     * @return bool
     */
    public function getDimensionsRequired()
    {
        return $this->dimensionsRequired;
    }

    /**
     * Sets a new dimensionsRequired
     *
     * This field is only returned if package dimensions are required for the corresponding
     *  package type (<b>ShippingServicePackageDetails.Name</b> value) supported
     *  by the corresponding shipping service option
     *  (<b>ShippingServiceDetails.ShippingService</b> value).
     *
     * @param bool $dimensionsRequired
     * @return self
     */
    public function setDimensionsRequired($dimensionsRequired)
    {
        $this->dimensionsRequired = $dimensionsRequired;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getDimensionsRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DimensionsRequired", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DimensionsRequired');
        if (null !== $value) {
            $this->setDimensionsRequired($value);
        }
    }
}
