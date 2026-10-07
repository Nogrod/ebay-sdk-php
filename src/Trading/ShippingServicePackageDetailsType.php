<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingServicePackageDetailsType
 *
 * Packages supported by the enclosing shipping service.
 * XSD Type: ShippingServicePackageDetailsType
 */
class ShippingServicePackageDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->dimensionsRequired;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DimensionsRequired', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShippingServicePackageDetailsType
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
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'DimensionsRequired':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->dimensionsRequired = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Name'] = $this->name;
        $data['DimensionsRequired'] = $this->dimensionsRequired;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
