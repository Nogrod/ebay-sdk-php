<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FreightShippingType
 *
 * Type defining the <b>freightShipping</b> container, which consists of details related to freight shipping. This container is required to be set in a shipping policy if the seller offers freight shipping.
 * XSD Type: FreightShipping
 */
class FreightShippingType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * String value indicating whether the freight item is being picked up from a residence or from a commercial location. Valid values are 'Residential' and 'Commercial'.
     *
     * @var string $originPickupLocationType
     */
    private $originPickupLocationType = null;

    /**
     * Flag indicating if the freight item will be picked up inside or outside of the pickup location. If this value is 'true', the item will be picked up inside of the pickup location, and if 'false', the item will be picked up outside of the pickup location.
     *
     * @var bool $originPickupInside
     */
    private $originPickupInside = null;

    /**
     * Flag indicating if help is required to pick up the freight item. If this value is 'true', help picking up the item is required, and if 'false', help picking up the item is not required.
     *
     * @var bool $packagingHelpRequired
     */
    private $packagingHelpRequired = null;

    /**
     * A string value classifying the freight item to be shipped. Valid values for this
     *  field include:
     *  <ul>
     *  <li>MACHINERY_USED</li>
     *  <li>MACHINERY_NEW</li>
     *  <li>FRAGILE_HOUSEHOLD_USED</li>
     *  <li>FRAGILE_HOUSEHOLD_NEW</li>
     *  <li>NON_FRAGILE_HOUSEHOLD_USED</li>
     *  <li>NON_FRAGILE_HOUSEHOLD_NEW</li>
     *  <li>RESTAURANT_EQUIPMENT_USED</li>
     *  <li>RESTAURANT_EQUIPMENT_NEW</li>
     *  <li>COMPUTER_ELECTRONICS_USED</li>
     *  <li>COMPUTER_ELECTRONICS_NEW</li>
     *  <li>VENDING_MACHINE_USED</li>
     *  <li>VENDING_MACHINE_NEW</li>
     *  <li>MOTORCYCLE_USED</li>
     *  <li>MOTORCYCLE_NEW</li>
     *  </ul>
     *  This is a required field if freight shipping is included in the shipping policy.
     *
     * @var string $commodityType
     */
    private $commodityType = null;

    /**
     * Value indicating the shipping class of the freight item. The shipping class corresponds to the weight of the item (in pounds). Valid values include '50.0', '55.0', '60.0', '65.0', '70.0', '77.5', '85.0', '92.5', '100.0', '110.0', '125.0', '150.0', '175.0', '200.0', '225.0', '250.0', '300.0', '400.0', and '500.0'.
     *
     * @var float $freightShippingClass
     */
    private $freightShippingClass = null;

    /**
     * String value indicating whether the freight item is being delivered to a residence or to a commercial location. Valid values are 'Residential' and 'Commercial'.
     *
     * @var string $destPickupLocationType
     */
    private $destPickupLocationType = null;

    /**
     * Flag indicating if the freight item will be dropped off inside or outside of the delivery location. If this value is 'true', the item will be dropped off inside of the delivery location, and if 'false', the item will be dropped off outside of the
     *  delivery location.
     *
     * @var bool $destPickupInside
     */
    private $destPickupInside = null;

    /**
     * Gets as originPickupLocationType
     *
     * String value indicating whether the freight item is being picked up from a residence or from a commercial location. Valid values are 'Residential' and 'Commercial'.
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
     * String value indicating whether the freight item is being picked up from a residence or from a commercial location. Valid values are 'Residential' and 'Commercial'.
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
     * Flag indicating if the freight item will be picked up inside or outside of the pickup location. If this value is 'true', the item will be picked up inside of the pickup location, and if 'false', the item will be picked up outside of the pickup location.
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
     * Flag indicating if the freight item will be picked up inside or outside of the pickup location. If this value is 'true', the item will be picked up inside of the pickup location, and if 'false', the item will be picked up outside of the pickup location.
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
     * Flag indicating if help is required to pick up the freight item. If this value is 'true', help picking up the item is required, and if 'false', help picking up the item is not required.
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
     * Flag indicating if help is required to pick up the freight item. If this value is 'true', help picking up the item is required, and if 'false', help picking up the item is not required.
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
     * A string value classifying the freight item to be shipped. Valid values for this
     *  field include:
     *  <ul>
     *  <li>MACHINERY_USED</li>
     *  <li>MACHINERY_NEW</li>
     *  <li>FRAGILE_HOUSEHOLD_USED</li>
     *  <li>FRAGILE_HOUSEHOLD_NEW</li>
     *  <li>NON_FRAGILE_HOUSEHOLD_USED</li>
     *  <li>NON_FRAGILE_HOUSEHOLD_NEW</li>
     *  <li>RESTAURANT_EQUIPMENT_USED</li>
     *  <li>RESTAURANT_EQUIPMENT_NEW</li>
     *  <li>COMPUTER_ELECTRONICS_USED</li>
     *  <li>COMPUTER_ELECTRONICS_NEW</li>
     *  <li>VENDING_MACHINE_USED</li>
     *  <li>VENDING_MACHINE_NEW</li>
     *  <li>MOTORCYCLE_USED</li>
     *  <li>MOTORCYCLE_NEW</li>
     *  </ul>
     *  This is a required field if freight shipping is included in the shipping policy.
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
     * A string value classifying the freight item to be shipped. Valid values for this
     *  field include:
     *  <ul>
     *  <li>MACHINERY_USED</li>
     *  <li>MACHINERY_NEW</li>
     *  <li>FRAGILE_HOUSEHOLD_USED</li>
     *  <li>FRAGILE_HOUSEHOLD_NEW</li>
     *  <li>NON_FRAGILE_HOUSEHOLD_USED</li>
     *  <li>NON_FRAGILE_HOUSEHOLD_NEW</li>
     *  <li>RESTAURANT_EQUIPMENT_USED</li>
     *  <li>RESTAURANT_EQUIPMENT_NEW</li>
     *  <li>COMPUTER_ELECTRONICS_USED</li>
     *  <li>COMPUTER_ELECTRONICS_NEW</li>
     *  <li>VENDING_MACHINE_USED</li>
     *  <li>VENDING_MACHINE_NEW</li>
     *  <li>MOTORCYCLE_USED</li>
     *  <li>MOTORCYCLE_NEW</li>
     *  </ul>
     *  This is a required field if freight shipping is included in the shipping policy.
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
     * Value indicating the shipping class of the freight item. The shipping class corresponds to the weight of the item (in pounds). Valid values include '50.0', '55.0', '60.0', '65.0', '70.0', '77.5', '85.0', '92.5', '100.0', '110.0', '125.0', '150.0', '175.0', '200.0', '225.0', '250.0', '300.0', '400.0', and '500.0'.
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
     * Value indicating the shipping class of the freight item. The shipping class corresponds to the weight of the item (in pounds). Valid values include '50.0', '55.0', '60.0', '65.0', '70.0', '77.5', '85.0', '92.5', '100.0', '110.0', '125.0', '150.0', '175.0', '200.0', '225.0', '250.0', '300.0', '400.0', and '500.0'.
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
     * String value indicating whether the freight item is being delivered to a residence or to a commercial location. Valid values are 'Residential' and 'Commercial'.
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
     * String value indicating whether the freight item is being delivered to a residence or to a commercial location. Valid values are 'Residential' and 'Commercial'.
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
     * Flag indicating if the freight item will be dropped off inside or outside of the delivery location. If this value is 'true', the item will be dropped off inside of the delivery location, and if 'false', the item will be dropped off outside of the
     *  delivery location.
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
     * Flag indicating if the freight item will be dropped off inside or outside of the delivery location. If this value is 'true', the item will be dropped off inside of the delivery location, and if 'false', the item will be dropped off outside of the
     *  delivery location.
     *
     * @param bool $destPickupInside
     * @return self
     */
    public function setDestPickupInside($destPickupInside)
    {
        $this->destPickupInside = $destPickupInside;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
            $this->setOriginPickupInside(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}packagingHelpRequired');
        if (null !== $value) {
            $this->setPackagingHelpRequired(filter_var($value, FILTER_VALIDATE_BOOLEAN));
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
            $this->setDestPickupInside(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
