<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ShippingPolicyInfoServiceType
 *
 * ShippingPolicyInfoService:
 * XSD Type: ShippingPolicyInfoService
 */
class ShippingPolicyInfoServiceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * NA. This field is not used.
     *
     * @var string[] $shipToLocation
     */
    private $shipToLocation = [
        
    ];

    /**
     * Unique service code using which a shipping
     *  service can be identified across all the
     *  services.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * The order of shippinf service in a give set of
     *  services.
     *
     * @var int $sortOrderId
     */
    private $sortOrderId = null;

    /**
     * If true, it is a free shipping service.
     *
     * @var bool $freeShipping
     */
    private $freeShipping = null;

    /**
     * Cash On Delivery Fee.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $codFee
     */
    private $codFee = null;

    /**
     * If true, it is a fast shipping service.
     *
     * @var bool $fastShipping
     */
    private $fastShipping = null;

    /**
     * Shipping fee for an additional (same)item
     *  purchase.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceAdditionalCost
     */
    private $shippingServiceAdditionalCost = null;

    /**
     * Shipping Fee of current shipping service.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * Some services like UPS Ground, alows seller to
     *  provide SurCharge Fee for few selected regions.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingSurcharge
     */
    private $shippingSurcharge = null;

    /**
     * If true, it is an local shipping service.
     *
     * @var bool $buyerResponsibleForShipping
     */
    private $buyerResponsibleForShipping = null;

    /**
     * If true, it buyer is responsible for PickUp else seller has to describe how he is going to ship package,
     *  use for motors site.
     *
     * @var bool $buyerResponsibleForPickup
     */
    private $buyerResponsibleForPickup = null;

    /**
     * Adds as shipToLocation
     *
     * NA. This field is not used.
     *
     * @return self
     * @param string $shipToLocation
     */
    public function addToShipToLocation($shipToLocation)
    {
        $this->shipToLocation[] = $shipToLocation;
        return $this;
    }

    /**
     * isset shipToLocation
     *
     * NA. This field is not used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToLocation($index)
    {
        return isset($this->shipToLocation[$index]);
    }

    /**
     * unset shipToLocation
     *
     * NA. This field is not used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToLocation($index)
    {
        unset($this->shipToLocation[$index]);
    }

    /**
     * Gets as shipToLocation
     *
     * NA. This field is not used.
     *
     * @return string[]
     */
    public function getShipToLocation()
    {
        return $this->shipToLocation;
    }

    /**
     * Sets a new shipToLocation
     *
     * NA. This field is not used.
     *
     * @param string[] $shipToLocation
     * @return self
     */
    public function setShipToLocation(array $shipToLocation)
    {
        $this->shipToLocation = $shipToLocation;
        return $this;
    }

    /**
     * Gets as shippingService
     *
     * Unique service code using which a shipping
     *  service can be identified across all the
     *  services.
     *
     * @return string
     */
    public function getShippingService()
    {
        return $this->shippingService;
    }

    /**
     * Sets a new shippingService
     *
     * Unique service code using which a shipping
     *  service can be identified across all the
     *  services.
     *
     * @param string $shippingService
     * @return self
     */
    public function setShippingService($shippingService)
    {
        $this->shippingService = $shippingService;
        return $this;
    }

    /**
     * Gets as sortOrderId
     *
     * The order of shippinf service in a give set of
     *  services.
     *
     * @return int
     */
    public function getSortOrderId()
    {
        return $this->sortOrderId;
    }

    /**
     * Sets a new sortOrderId
     *
     * The order of shippinf service in a give set of
     *  services.
     *
     * @param int $sortOrderId
     * @return self
     */
    public function setSortOrderId($sortOrderId)
    {
        $this->sortOrderId = $sortOrderId;
        return $this;
    }

    /**
     * Gets as freeShipping
     *
     * If true, it is a free shipping service.
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * Sets a new freeShipping
     *
     * If true, it is a free shipping service.
     *
     * @param bool $freeShipping
     * @return self
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
        return $this;
    }

    /**
     * Gets as codFee
     *
     * Cash On Delivery Fee.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getCodFee()
    {
        return $this->codFee;
    }

    /**
     * Sets a new codFee
     *
     * Cash On Delivery Fee.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $codFee
     * @return self
     */
    public function setCodFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $codFee)
    {
        $this->codFee = $codFee;
        return $this;
    }

    /**
     * Gets as fastShipping
     *
     * If true, it is a fast shipping service.
     *
     * @return bool
     */
    public function getFastShipping()
    {
        return $this->fastShipping;
    }

    /**
     * Sets a new fastShipping
     *
     * If true, it is a fast shipping service.
     *
     * @param bool $fastShipping
     * @return self
     */
    public function setFastShipping($fastShipping)
    {
        $this->fastShipping = $fastShipping;
        return $this;
    }

    /**
     * Gets as shippingServiceAdditionalCost
     *
     * Shipping fee for an additional (same)item
     *  purchase.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->shippingServiceAdditionalCost;
    }

    /**
     * Sets a new shippingServiceAdditionalCost
     *
     * Shipping fee for an additional (same)item
     *  purchase.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceAdditionalCost
     * @return self
     */
    public function setShippingServiceAdditionalCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceAdditionalCost)
    {
        $this->shippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }

    /**
     * Gets as shippingServiceCost
     *
     * Shipping Fee of current shipping service.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * Shipping Fee of current shipping service.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }

    /**
     * Gets as shippingSurcharge
     *
     * Some services like UPS Ground, alows seller to
     *  provide SurCharge Fee for few selected regions.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingSurcharge()
    {
        return $this->shippingSurcharge;
    }

    /**
     * Sets a new shippingSurcharge
     *
     * Some services like UPS Ground, alows seller to
     *  provide SurCharge Fee for few selected regions.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingSurcharge
     * @return self
     */
    public function setShippingSurcharge(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingSurcharge)
    {
        $this->shippingSurcharge = $shippingSurcharge;
        return $this;
    }

    /**
     * Gets as buyerResponsibleForShipping
     *
     * If true, it is an local shipping service.
     *
     * @return bool
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->buyerResponsibleForShipping;
    }

    /**
     * Sets a new buyerResponsibleForShipping
     *
     * If true, it is an local shipping service.
     *
     * @param bool $buyerResponsibleForShipping
     * @return self
     */
    public function setBuyerResponsibleForShipping($buyerResponsibleForShipping)
    {
        $this->buyerResponsibleForShipping = $buyerResponsibleForShipping;
        return $this;
    }

    /**
     * Gets as buyerResponsibleForPickup
     *
     * If true, it buyer is responsible for PickUp else seller has to describe how he is going to ship package,
     *  use for motors site.
     *
     * @return bool
     */
    public function getBuyerResponsibleForPickup()
    {
        return $this->buyerResponsibleForPickup;
    }

    /**
     * Sets a new buyerResponsibleForPickup
     *
     * If true, it buyer is responsible for PickUp else seller has to describe how he is going to ship package,
     *  use for motors site.
     *
     * @param bool $buyerResponsibleForPickup
     * @return self
     */
    public function setBuyerResponsibleForPickup($buyerResponsibleForPickup)
    {
        $this->buyerResponsibleForPickup = $buyerResponsibleForPickup;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getShipToLocation();
        if (null !== $value && !empty($this->getShipToLocation())) {
            $writer->write(array_map(function ($v) {
                return ["shipToLocation" => $v];
            }, $value));
        }
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingService", $value);
        }
        $value = $this->getSortOrderId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}sortOrderId", $value);
        }
        $value = $this->getFreeShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}freeShipping", $value);
        }
        $value = $this->getCodFee();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}codFee", $value);
        }
        $value = $this->getFastShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}fastShipping", $value);
        }
        $value = $this->getShippingServiceAdditionalCost();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceAdditionalCost", $value);
        }
        $value = $this->getShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceCost", $value);
        }
        $value = $this->getShippingSurcharge();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingSurcharge", $value);
        }
        $value = $this->getBuyerResponsibleForShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}buyerResponsibleForShipping", $value);
        }
        $value = $this->getBuyerResponsibleForPickup();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}buyerResponsibleForPickup", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shipToLocation', true);
        if (null !== $value && !empty($value)) {
            $this->setShipToLocation($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}sortOrderId');
        if (null !== $value) {
            $this->setSortOrderId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}freeShipping');
        if (null !== $value) {
            $this->setFreeShipping($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}codFee');
        if (null !== $value) {
            $this->setCodFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}fastShipping');
        if (null !== $value) {
            $this->setFastShipping($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceAdditionalCost');
        if (null !== $value) {
            $this->setShippingServiceAdditionalCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingSurcharge');
        if (null !== $value) {
            $this->setShippingSurcharge(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}buyerResponsibleForShipping');
        if (null !== $value) {
            $this->setBuyerResponsibleForShipping($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}buyerResponsibleForPickup');
        if (null !== $value) {
            $this->setBuyerResponsibleForPickup($value);
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
