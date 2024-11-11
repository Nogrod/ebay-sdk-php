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
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}name", $value);
        }
        $value = $this->getValue();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}value", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}value');
        if (null !== $value) {
            $this->setValue(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
