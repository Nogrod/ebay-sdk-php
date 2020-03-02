<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FreightShippingType
 *
 *
 * XSD Type: FreightShipping
 */
class FreightShippingType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Location type can be residential or commercial
     *
     * @var string $originPickupLocationType
     */
    private $originPickupLocationType = null;

    /**
     * Item is picked up inside or outside at the origin
     *
     * @var bool $originPickupInside
     */
    private $originPickupInside = null;

    /**
     * Help needed in packaging or not
     *
     * @var bool $packagingHelpRequired
     */
    private $packagingHelpRequired = null;

    /**
     * Type of the freight item
     *
     * @var string $commodityType
     */
    private $commodityType = null;

    /**
     * Class of the freight item
     *
     * @var float $freightShippingClass
     */
    private $freightShippingClass = null;

    /**
     * Location type can be residential or commercial
     *
     * @var string $destPickupLocationType
     */
    private $destPickupLocationType = null;

    /**
     * Item is picked up inside or outside at the destination
     *
     * @var bool $destPickupInside
     */
    private $destPickupInside = null;

    /**
     * Gets as originPickupLocationType
     *
     * Location type can be residential or commercial
     *
     * @return string
     */
    public function getOriginPickupLocationType()
    {
        return $this->originPickupLocationType;
    }

    /**
     * Sets a new originPickupLocationType
     *
     * Location type can be residential or commercial
     *
     * @param string $originPickupLocationType
     * @return self
     */
    public function setOriginPickupLocationType($originPickupLocationType)
    {
        $this->originPickupLocationType = $originPickupLocationType;
        return $this;
    }

    /**
     * Gets as originPickupInside
     *
     * Item is picked up inside or outside at the origin
     *
     * @return bool
     */
    public function getOriginPickupInside()
    {
        return $this->originPickupInside;
    }

    /**
     * Sets a new originPickupInside
     *
     * Item is picked up inside or outside at the origin
     *
     * @param bool $originPickupInside
     * @return self
     */
    public function setOriginPickupInside($originPickupInside)
    {
        $this->originPickupInside = $originPickupInside;
        return $this;
    }

    /**
     * Gets as packagingHelpRequired
     *
     * Help needed in packaging or not
     *
     * @return bool
     */
    public function getPackagingHelpRequired()
    {
        return $this->packagingHelpRequired;
    }

    /**
     * Sets a new packagingHelpRequired
     *
     * Help needed in packaging or not
     *
     * @param bool $packagingHelpRequired
     * @return self
     */
    public function setPackagingHelpRequired($packagingHelpRequired)
    {
        $this->packagingHelpRequired = $packagingHelpRequired;
        return $this;
    }

    /**
     * Gets as commodityType
     *
     * Type of the freight item
     *
     * @return string
     */
    public function getCommodityType()
    {
        return $this->commodityType;
    }

    /**
     * Sets a new commodityType
     *
     * Type of the freight item
     *
     * @param string $commodityType
     * @return self
     */
    public function setCommodityType($commodityType)
    {
        $this->commodityType = $commodityType;
        return $this;
    }

    /**
     * Gets as freightShippingClass
     *
     * Class of the freight item
     *
     * @return float
     */
    public function getFreightShippingClass()
    {
        return $this->freightShippingClass;
    }

    /**
     * Sets a new freightShippingClass
     *
     * Class of the freight item
     *
     * @param float $freightShippingClass
     * @return self
     */
    public function setFreightShippingClass($freightShippingClass)
    {
        $this->freightShippingClass = $freightShippingClass;
        return $this;
    }

    /**
     * Gets as destPickupLocationType
     *
     * Location type can be residential or commercial
     *
     * @return string
     */
    public function getDestPickupLocationType()
    {
        return $this->destPickupLocationType;
    }

    /**
     * Sets a new destPickupLocationType
     *
     * Location type can be residential or commercial
     *
     * @param string $destPickupLocationType
     * @return self
     */
    public function setDestPickupLocationType($destPickupLocationType)
    {
        $this->destPickupLocationType = $destPickupLocationType;
        return $this;
    }

    /**
     * Gets as destPickupInside
     *
     * Item is picked up inside or outside at the destination
     *
     * @return bool
     */
    public function getDestPickupInside()
    {
        return $this->destPickupInside;
    }

    /**
     * Sets a new destPickupInside
     *
     * Item is picked up inside or outside at the destination
     *
     * @param bool $destPickupInside
     * @return self
     */
    public function setDestPickupInside($destPickupInside)
    {
        $this->destPickupInside = $destPickupInside;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getOriginPickupLocationType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}originPickupLocationType", $value);
        }
        $value = $this->getOriginPickupInside();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}originPickupInside", $value);
        }
        $value = $this->getPackagingHelpRequired();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}packagingHelpRequired", $value);
        }
        $value = $this->getCommodityType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}commodityType", $value);
        }
        $value = $this->getFreightShippingClass();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}freightShippingClass", $value);
        }
        $value = $this->getDestPickupLocationType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}destPickupLocationType", $value);
        }
        $value = $this->getDestPickupInside();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}destPickupInside", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}originPickupLocationType');
        if (null !== $value) {
            $this->setOriginPickupLocationType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}originPickupInside');
        if (null !== $value) {
            $this->setOriginPickupInside($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}packagingHelpRequired');
        if (null !== $value) {
            $this->setPackagingHelpRequired($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}commodityType');
        if (null !== $value) {
            $this->setCommodityType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}freightShippingClass');
        if (null !== $value) {
            $this->setFreightShippingClass($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}destPickupLocationType');
        if (null !== $value) {
            $this->setDestPickupLocationType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}destPickupInside');
        if (null !== $value) {
            $this->setDestPickupInside($value);
        }
    }
}
