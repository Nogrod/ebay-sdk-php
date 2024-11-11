<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingInfoType
 *
 * Container holding the item's shipping details.
 * XSD Type: ShippingInfo
 */
class ShippingInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The basic shipping cost of the item. This reflects the domestic shipping
     *  cost or the international shipping costs, depending on which applies
     *  (that is, whether the bidder/buyer is in the same country as the listing
     *  site of the item).
     *
     * @var \Nogrod\eBaySDK\Finding\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * The shipping method that was used for determining the cost of shipping.
     *  For example: flat rate, calculated, or free. The seller specifies the
     *  available shipping services when they list the item.
     *  <dl>
     *  <dt>
     *  <strong>shippingType values:</strong>
     *  </dt>
     *  <dt>
     *  Calculated
     *  </dt>
     *  <dd>
     *  The calculated shipping model: The posted cost of shipping is based
     *  on the buyer-selected shipping service, chosen by the buyer from the
     *  different shipping services offered by the seller. The shipping costs
     *  are calculated by eBay and the shipping carrier, based on the buyer's
     *  address. Any packaging and handling costs established by the seller
     *  are automatically rolled into the total.
     *  </dd>
     *  <dt>
     *  CalculatedDomesticFlatInternational
     *  </dt>
     *  <dd>
     *  The seller specified one or more calculated domestic shipping
     *  services and one or more flat international shipping services.
     *  </dd>
     *  <dt>
     *  Flat
     *  </dt>
     *  <dd>
     *  The flat-rate shipping model: The seller establishes the cost
     *  of shipping and any shipping insurance, regardless of what any
     *  buyer-selected shipping service might charge the seller.
     *  </dd>
     *  <dt>
     *  FlatDomesticCalculatedInternational
     *  </dt>
     *  <dd>
     *  The seller specified one or more flat domestic shipping
     *  services and one or more calculated international shipping services.
     *  </dd>
     *  <dt>
     *  Free
     *  </dt>
     *  <dd>
     *  Free is used when the seller has declared that shipping is free
     *  for the buyer.
     *  </dd>
     *  <dt>
     *  FreePickup
     *  </dt>
     *  <dd>
     *  No shipping available, the buyer must pick up the item from the
     *  seller.
     *  </dd>
     *  <dt>
     *  Freight
     *  </dt>
     *  <dd>
     *  The freight shipping model: the cost of shipping is determined by a
     *  third party, FreightQuote.com, based on the buyer's address (postal
     *  code).
     *  </dd>
     *  <dt>
     *  FreightFlat
     *  </dt>
     *  <dd>
     *  The flat rate shipping model: the seller establishes the cost
     *  of freight shipping and freight insurance, regardless of what any
     *  buyer-selected shipping service might charge the seller.
     *  </dd>
     *  <dt>
     *  NotSpecified
     *  </dt>
     *  <dd>
     *  The seller did not specify the shipping type.
     *  </dd>
     *  </dl>
     *
     * @var string $shippingType
     */
    private $shippingType = null;

    /**
     * An international location or region to which the seller is willing to
     *  ship the item. Only returned when the seller has specifically identified
     *  locations where she is willing to ship the given item.
     *  specified.
     *
     * @var string[] $shipToLocations
     */
    private $shipToLocations = [

    ];

    /**
     * This is returned set to true if expedited shipping is available for the item.
     *
     * @var bool $expeditedShipping
     */
    private $expeditedShipping = null;

    /**
     * This is returned set to true if one-day shipping is available for the item.
     *
     * @var bool $oneDayShippingAvailable
     */
    private $oneDayShippingAvailable = null;

    /**
     * The number of days it will take the seller to ship this item.
     *
     * @var int $handlingTime
     */
    private $handlingTime = null;

    /**
     * @var bool $intermediatedShipping
     */
    private $intermediatedShipping = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as shippingServiceCost
     *
     * The basic shipping cost of the item. This reflects the domestic shipping
     *  cost or the international shipping costs, depending on which applies
     *  (that is, whether the bidder/buyer is in the same country as the listing
     *  site of the item).
     *
     * @return \Nogrod\eBaySDK\Finding\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * The basic shipping cost of the item. This reflects the domestic shipping
     *  cost or the international shipping costs, depending on which applies
     *  (that is, whether the bidder/buyer is in the same country as the listing
     *  site of the item).
     *
     * @param \Nogrod\eBaySDK\Finding\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\Finding\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }

    /**
     * Gets as shippingType
     *
     * The shipping method that was used for determining the cost of shipping.
     *  For example: flat rate, calculated, or free. The seller specifies the
     *  available shipping services when they list the item.
     *  <dl>
     *  <dt>
     *  <strong>shippingType values:</strong>
     *  </dt>
     *  <dt>
     *  Calculated
     *  </dt>
     *  <dd>
     *  The calculated shipping model: The posted cost of shipping is based
     *  on the buyer-selected shipping service, chosen by the buyer from the
     *  different shipping services offered by the seller. The shipping costs
     *  are calculated by eBay and the shipping carrier, based on the buyer's
     *  address. Any packaging and handling costs established by the seller
     *  are automatically rolled into the total.
     *  </dd>
     *  <dt>
     *  CalculatedDomesticFlatInternational
     *  </dt>
     *  <dd>
     *  The seller specified one or more calculated domestic shipping
     *  services and one or more flat international shipping services.
     *  </dd>
     *  <dt>
     *  Flat
     *  </dt>
     *  <dd>
     *  The flat-rate shipping model: The seller establishes the cost
     *  of shipping and any shipping insurance, regardless of what any
     *  buyer-selected shipping service might charge the seller.
     *  </dd>
     *  <dt>
     *  FlatDomesticCalculatedInternational
     *  </dt>
     *  <dd>
     *  The seller specified one or more flat domestic shipping
     *  services and one or more calculated international shipping services.
     *  </dd>
     *  <dt>
     *  Free
     *  </dt>
     *  <dd>
     *  Free is used when the seller has declared that shipping is free
     *  for the buyer.
     *  </dd>
     *  <dt>
     *  FreePickup
     *  </dt>
     *  <dd>
     *  No shipping available, the buyer must pick up the item from the
     *  seller.
     *  </dd>
     *  <dt>
     *  Freight
     *  </dt>
     *  <dd>
     *  The freight shipping model: the cost of shipping is determined by a
     *  third party, FreightQuote.com, based on the buyer's address (postal
     *  code).
     *  </dd>
     *  <dt>
     *  FreightFlat
     *  </dt>
     *  <dd>
     *  The flat rate shipping model: the seller establishes the cost
     *  of freight shipping and freight insurance, regardless of what any
     *  buyer-selected shipping service might charge the seller.
     *  </dd>
     *  <dt>
     *  NotSpecified
     *  </dt>
     *  <dd>
     *  The seller did not specify the shipping type.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getShippingType()
    {
        return $this->shippingType;
    }

    /**
     * Sets a new shippingType
     *
     * The shipping method that was used for determining the cost of shipping.
     *  For example: flat rate, calculated, or free. The seller specifies the
     *  available shipping services when they list the item.
     *  <dl>
     *  <dt>
     *  <strong>shippingType values:</strong>
     *  </dt>
     *  <dt>
     *  Calculated
     *  </dt>
     *  <dd>
     *  The calculated shipping model: The posted cost of shipping is based
     *  on the buyer-selected shipping service, chosen by the buyer from the
     *  different shipping services offered by the seller. The shipping costs
     *  are calculated by eBay and the shipping carrier, based on the buyer's
     *  address. Any packaging and handling costs established by the seller
     *  are automatically rolled into the total.
     *  </dd>
     *  <dt>
     *  CalculatedDomesticFlatInternational
     *  </dt>
     *  <dd>
     *  The seller specified one or more calculated domestic shipping
     *  services and one or more flat international shipping services.
     *  </dd>
     *  <dt>
     *  Flat
     *  </dt>
     *  <dd>
     *  The flat-rate shipping model: The seller establishes the cost
     *  of shipping and any shipping insurance, regardless of what any
     *  buyer-selected shipping service might charge the seller.
     *  </dd>
     *  <dt>
     *  FlatDomesticCalculatedInternational
     *  </dt>
     *  <dd>
     *  The seller specified one or more flat domestic shipping
     *  services and one or more calculated international shipping services.
     *  </dd>
     *  <dt>
     *  Free
     *  </dt>
     *  <dd>
     *  Free is used when the seller has declared that shipping is free
     *  for the buyer.
     *  </dd>
     *  <dt>
     *  FreePickup
     *  </dt>
     *  <dd>
     *  No shipping available, the buyer must pick up the item from the
     *  seller.
     *  </dd>
     *  <dt>
     *  Freight
     *  </dt>
     *  <dd>
     *  The freight shipping model: the cost of shipping is determined by a
     *  third party, FreightQuote.com, based on the buyer's address (postal
     *  code).
     *  </dd>
     *  <dt>
     *  FreightFlat
     *  </dt>
     *  <dd>
     *  The flat rate shipping model: the seller establishes the cost
     *  of freight shipping and freight insurance, regardless of what any
     *  buyer-selected shipping service might charge the seller.
     *  </dd>
     *  <dt>
     *  NotSpecified
     *  </dt>
     *  <dd>
     *  The seller did not specify the shipping type.
     *  </dd>
     *  </dl>
     *
     * @param string $shippingType
     * @return self
     */
    public function setShippingType($shippingType)
    {
        $this->shippingType = $shippingType;
        return $this;
    }

    /**
     * Adds as shipToLocations
     *
     * An international location or region to which the seller is willing to
     *  ship the item. Only returned when the seller has specifically identified
     *  locations where she is willing to ship the given item.
     *  specified.
     *
     * @return self
     * @param string $shipToLocations
     */
    public function addToShipToLocations($shipToLocations)
    {
        $this->shipToLocations[] = $shipToLocations;
        return $this;
    }

    /**
     * isset shipToLocations
     *
     * An international location or region to which the seller is willing to
     *  ship the item. Only returned when the seller has specifically identified
     *  locations where she is willing to ship the given item.
     *  specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipToLocations($index)
    {
        return isset($this->shipToLocations[$index]);
    }

    /**
     * unset shipToLocations
     *
     * An international location or region to which the seller is willing to
     *  ship the item. Only returned when the seller has specifically identified
     *  locations where she is willing to ship the given item.
     *  specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipToLocations($index)
    {
        unset($this->shipToLocations[$index]);
    }

    /**
     * Gets as shipToLocations
     *
     * An international location or region to which the seller is willing to
     *  ship the item. Only returned when the seller has specifically identified
     *  locations where she is willing to ship the given item.
     *  specified.
     *
     * @return string[]
     */
    public function getShipToLocations()
    {
        return $this->shipToLocations;
    }

    /**
     * Sets a new shipToLocations
     *
     * An international location or region to which the seller is willing to
     *  ship the item. Only returned when the seller has specifically identified
     *  locations where she is willing to ship the given item.
     *  specified.
     *
     * @param string[] $shipToLocations
     * @return self
     */
    public function setShipToLocations(array $shipToLocations)
    {
        $this->shipToLocations = $shipToLocations;
        return $this;
    }

    /**
     * Gets as expeditedShipping
     *
     * This is returned set to true if expedited shipping is available for the item.
     *
     * @return bool
     */
    public function getExpeditedShipping()
    {
        return $this->expeditedShipping;
    }

    /**
     * Sets a new expeditedShipping
     *
     * This is returned set to true if expedited shipping is available for the item.
     *
     * @param bool $expeditedShipping
     * @return self
     */
    public function setExpeditedShipping($expeditedShipping)
    {
        $this->expeditedShipping = $expeditedShipping;
        return $this;
    }

    /**
     * Gets as oneDayShippingAvailable
     *
     * This is returned set to true if one-day shipping is available for the item.
     *
     * @return bool
     */
    public function getOneDayShippingAvailable()
    {
        return $this->oneDayShippingAvailable;
    }

    /**
     * Sets a new oneDayShippingAvailable
     *
     * This is returned set to true if one-day shipping is available for the item.
     *
     * @param bool $oneDayShippingAvailable
     * @return self
     */
    public function setOneDayShippingAvailable($oneDayShippingAvailable)
    {
        $this->oneDayShippingAvailable = $oneDayShippingAvailable;
        return $this;
    }

    /**
     * Gets as handlingTime
     *
     * The number of days it will take the seller to ship this item.
     *
     * @return int
     */
    public function getHandlingTime()
    {
        return $this->handlingTime;
    }

    /**
     * Sets a new handlingTime
     *
     * The number of days it will take the seller to ship this item.
     *
     * @param int $handlingTime
     * @return self
     */
    public function setHandlingTime($handlingTime)
    {
        $this->handlingTime = $handlingTime;
        return $this;
    }

    /**
     * Gets as intermediatedShipping
     *
     * @return bool
     */
    public function getIntermediatedShipping()
    {
        return $this->intermediatedShipping;
    }

    /**
     * Sets a new intermediatedShipping
     *
     * @param bool $intermediatedShipping
     * @return self
     */
    public function setIntermediatedShipping($intermediatedShipping)
    {
        $this->intermediatedShipping = $intermediatedShipping;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}shippingServiceCost", $value);
        }
        $value = $this->getShippingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}shippingType", $value);
        }
        $value = $this->getShipToLocations();
        if (null !== $value && !empty($this->getShipToLocations())) {
            $writer->write(array_map(function ($v) {return ["shipToLocations" => $v];}, $value));
        }
        $value = $this->getExpeditedShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}expeditedShipping", $value);
        }
        $value = $this->getOneDayShippingAvailable();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}oneDayShippingAvailable", $value);
        }
        $value = $this->getHandlingTime();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}handlingTime", $value);
        }
        $value = $this->getIntermediatedShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}intermediatedShipping", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}shippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\Finding\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}shippingType');
        if (null !== $value) {
            $this->setShippingType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}shipToLocations', true);
        if (null !== $value && !empty($value)) {
            $this->setShipToLocations($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}expeditedShipping');
        if (null !== $value) {
            $this->setExpeditedShipping(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}oneDayShippingAvailable');
        if (null !== $value) {
            $this->setOneDayShippingAvailable(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}handlingTime');
        if (null !== $value) {
            $this->setHandlingTime($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}intermediatedShipping');
        if (null !== $value) {
            $this->setIntermediatedShipping(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
