<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AdditionalServiceShippingOptionType
 *
 * This type defines the <b>additionalServiceShippingOption</b> container, which contains an additional shipping service option available to buyers (in addition to the shipping service option specified in the <b>domesticShippingPolicyInfoService</b> field.
 * XSD Type: AdditionalServiceShippingOption
 */
class AdditionalServiceShippingOptionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the additional shipping service option available to buyer. For a list of valid shipping service options, call the Trading API's <b>GeteBayDetails</b> call with the <b>DetailName</b> field set to <b>ShippingServiceDetails</b>. The <b>ShippingServiceDetails.ValidForSellingFlow</ b> flag must also be present in the <b>GeteBayDetails</b> response. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This flag indicates whether the additional shipping service is enabled or disabled.
     *
     * @var bool $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * The name of the additional shipping service option available to buyer. For a list of valid shipping service options, call the Trading API's <b>GeteBayDetails</b> call with the <b>DetailName</b> field set to <b>ShippingServiceDetails</b>. The <b>ShippingServiceDetails.ValidForSellingFlow</ b> flag must also be present in the <b>GeteBayDetails</b> response. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
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
     * The name of the additional shipping service option available to buyer. For a list of valid shipping service options, call the Trading API's <b>GeteBayDetails</b> call with the <b>DetailName</b> field set to <b>ShippingServiceDetails</b>. The <b>ShippingServiceDetails.ValidForSellingFlow</ b> flag must also be present in the <b>GeteBayDetails</b> response. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing.
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
     * Gets as value
     *
     * This flag indicates whether the additional shipping service is enabled or disabled.
     *
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * This flag indicates whether the additional shipping service is enabled or disabled.
     *
     * @param bool $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'name', null, (string) $value);
        }
        $value = $this->value;
        if (null !== $value) {
            $writer->writeElementNs(null, 'value', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\AdditionalServiceShippingOptionType
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'value':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->value = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
