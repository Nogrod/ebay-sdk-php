<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InternationalShippingServiceOptionType
 *
 * Container consisting of shipping costs and other details related to an international shipping service that is available to ship an item to the shipping destination specified in the <b>GetShippingCosts</b> call request.
 * XSD Type: InternationalShippingServiceOptionType
 */
class InternationalShippingServiceOptionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $shippingInsuranceCost
     */
    private $shippingInsuranceCost = null;

    /**
     * The name of an international shipping service option available to ship the item to specified international shipping destination. This field is always returned with each <b>InternationalShippingServiceOption</b> container.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller is using eBay's Global Shipping Program (GSP) to ship the item to the international location, the string value returned in this field is 'International Priority Shipping'.
     *  </span>
     *
     * @var string $shippingServiceName
     */
    private $shippingServiceName = null;

    /**
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same order line item and uses the shipping service specified in the corresponding <b>ShippingServiceName</b> field. The seller should always supply this value for multiple-quantity, fixed-price listings. Sometimes, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the same order line item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> by the seller if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the order line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The seller is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the corresponding <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of the call request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $shippingServiceAdditionalCost
     */
    private $shippingServiceAdditionalCost = null;

    /**
     * The cost to ship the quantity of items specified in the <b>QuantitySold</b> field in the call request. If the <b>QuantitySold</b> field is omitted, its value defaults to <code>1</code>. For example, if the corresponding shipping service charges 5.99 to ship a quantity of 1, and 2.99 to ship each additional unit beyond the first unit, the cost shown in this field will be <code>8.98</code> (5.99 + 2.99) if the <b>QuantitySold</b> field in the call request is set to <code>2</code>. The corresponding <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same order line item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The seller is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of the call request.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * This integer value indicates the seller-preferred presentation order of the international shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to five international shipping service options (including the Global Shipping Program option). This field should always be returned with each <b>InternationalShippingServiceOption</b> container.
     *
     * @var int $shippingServicePriority
     */
    private $shippingServicePriority = null;

    /**
     * An international location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, and possibly many other countries that are serviced by this shipping service option (or GSP).
     *
     * @var string[] $shipsTo
     */
    private $shipsTo = [

    ];

    /**
     * This timestamp indicates the earliest date/time that the item could possibly reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate purchase of the item at checkout.
     *
     * @var \DateTime $estimatedDeliveryMinTime
     */
    private $estimatedDeliveryMinTime = null;

    /**
     * This timestamp indicates the latest date/time that the item should reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate purchase of the item at checkout.
     *
     * @var \DateTime $estimatedDeliveryMaxTime
     */
    private $estimatedDeliveryMaxTime = null;

    /**
     * The estimated cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This field is only applicable for international orders being handled through the Global Shipping Program; otherwise, it will not be returned.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $importCharge
     */
    private $importCharge = null;

    /**
     * This field is no longer applicable and should not be returned for any international shipping service option.
     *
     * @var \DateTime $shippingServiceCutOffTime
     */
    private $shippingServiceCutOffTime = null;

    /**
     * Gets as shippingInsuranceCost
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getShippingInsuranceCost()
    {
        return $this->shippingInsuranceCost;
    }

    /**
     * Sets a new shippingInsuranceCost
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $shippingInsuranceCost
     * @return self
     */
    public function setShippingInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType $shippingInsuranceCost)
    {
        $this->shippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }

    /**
     * Gets as shippingServiceName
     *
     * The name of an international shipping service option available to ship the item to specified international shipping destination. This field is always returned with each <b>InternationalShippingServiceOption</b> container.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller is using eBay's Global Shipping Program (GSP) to ship the item to the international location, the string value returned in this field is 'International Priority Shipping'.
     *  </span>
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->shippingServiceName;
    }

    /**
     * Sets a new shippingServiceName
     *
     * The name of an international shipping service option available to ship the item to specified international shipping destination. This field is always returned with each <b>InternationalShippingServiceOption</b> container.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the seller is using eBay's Global Shipping Program (GSP) to ship the item to the international location, the string value returned in this field is 'International Priority Shipping'.
     *  </span>
     *
     * @param string $shippingServiceName
     * @return self
     */
    public function setShippingServiceName($shippingServiceName)
    {
        $this->shippingServiceName = $shippingServiceName;
        return $this;
    }

    /**
     * Gets as shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same order line item and uses the shipping service specified in the corresponding <b>ShippingServiceName</b> field. The seller should always supply this value for multiple-quantity, fixed-price listings. Sometimes, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the same order line item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> by the seller if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the order line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The seller is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the corresponding <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of the call request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->shippingServiceAdditionalCost;
    }

    /**
     * Sets a new shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same order line item and uses the shipping service specified in the corresponding <b>ShippingServiceName</b> field. The seller should always supply this value for multiple-quantity, fixed-price listings. Sometimes, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the same order line item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> by the seller if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the order line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The seller is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the corresponding <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of the call request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $shippingServiceAdditionalCost
     * @return self
     */
    public function setShippingServiceAdditionalCost(\Nogrod\eBaySDK\Shopping\AmountType $shippingServiceAdditionalCost)
    {
        $this->shippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }

    /**
     * Gets as shippingServiceCost
     *
     * The cost to ship the quantity of items specified in the <b>QuantitySold</b> field in the call request. If the <b>QuantitySold</b> field is omitted, its value defaults to <code>1</code>. For example, if the corresponding shipping service charges 5.99 to ship a quantity of 1, and 2.99 to ship each additional unit beyond the first unit, the cost shown in this field will be <code>8.98</code> (5.99 + 2.99) if the <b>QuantitySold</b> field in the call request is set to <code>2</code>. The corresponding <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same order line item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The seller is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of the call request.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * The cost to ship the quantity of items specified in the <b>QuantitySold</b> field in the call request. If the <b>QuantitySold</b> field is omitted, its value defaults to <code>1</code>. For example, if the corresponding shipping service charges 5.99 to ship a quantity of 1, and 2.99 to ship each additional unit beyond the first unit, the cost shown in this field will be <code>8.98</code> (5.99 + 2.99) if the <b>QuantitySold</b> field in the call request is set to <code>2</code>. The corresponding <b>ShippingServiceAdditionalCost</b> field shows the cost to ship each additional item if the buyer purchases multiple quantity of the same order line item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The seller is expected to provide the <b>ShippingServiceAdditionalCost</b> value for all multiple-quantity, fixed-price listings, but it is not a required field when creating, revising or relisting an item. So, if the <b>ShippingServiceAdditionalCost</b> is not returned in <b>GetShippingCosts</b>, it is likely that the seller has not provided this value, in which case the <b>ShippingServiceCost</b> value may be inaccurate if the user specifies an integer value greater than '1' in the <b>QuantitySold</b> of the call request.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\Shopping\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }

    /**
     * Gets as shippingServicePriority
     *
     * This integer value indicates the seller-preferred presentation order of the international shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to five international shipping service options (including the Global Shipping Program option). This field should always be returned with each <b>InternationalShippingServiceOption</b> container.
     *
     * @return int
     */
    public function getShippingServicePriority()
    {
        return $this->shippingServicePriority;
    }

    /**
     * Sets a new shippingServicePriority
     *
     * This integer value indicates the seller-preferred presentation order of the international shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to five international shipping service options (including the Global Shipping Program option). This field should always be returned with each <b>InternationalShippingServiceOption</b> container.
     *
     * @param int $shippingServicePriority
     * @return self
     */
    public function setShippingServicePriority($shippingServicePriority)
    {
        $this->shippingServicePriority = $shippingServicePriority;
        return $this;
    }

    /**
     * Adds as shipsTo
     *
     * An international location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, and possibly many other countries that are serviced by this shipping service option (or GSP).
     *
     * @return self
     * @param string $shipsTo
     */
    public function addToShipsTo($shipsTo)
    {
        $this->shipsTo[] = $shipsTo;
        return $this;
    }

    /**
     * isset shipsTo
     *
     * An international location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, and possibly many other countries that are serviced by this shipping service option (or GSP).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipsTo($index)
    {
        return isset($this->shipsTo[$index]);
    }

    /**
     * unset shipsTo
     *
     * An international location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, and possibly many other countries that are serviced by this shipping service option (or GSP).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipsTo($index)
    {
        unset($this->shipsTo[$index]);
    }

    /**
     * Gets as shipsTo
     *
     * An international location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, and possibly many other countries that are serviced by this shipping service option (or GSP).
     *
     * @return string[]
     */
    public function getShipsTo()
    {
        return $this->shipsTo;
    }

    /**
     * Sets a new shipsTo
     *
     * An international location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, and possibly many other countries that are serviced by this shipping service option (or GSP).
     *
     * @param string[] $shipsTo
     * @return self
     */
    public function setShipsTo(array $shipsTo)
    {
        $this->shipsTo = $shipsTo;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryMinTime
     *
     * This timestamp indicates the earliest date/time that the item could possibly reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate purchase of the item at checkout.
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryMinTime()
    {
        return $this->estimatedDeliveryMinTime;
    }

    /**
     * Sets a new estimatedDeliveryMinTime
     *
     * This timestamp indicates the earliest date/time that the item could possibly reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate purchase of the item at checkout.
     *
     * @param \DateTime $estimatedDeliveryMinTime
     * @return self
     */
    public function setEstimatedDeliveryMinTime(\DateTime $estimatedDeliveryMinTime)
    {
        $this->estimatedDeliveryMinTime = $estimatedDeliveryMinTime;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryMaxTime
     *
     * This timestamp indicates the latest date/time that the item should reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate purchase of the item at checkout.
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryMaxTime()
    {
        return $this->estimatedDeliveryMaxTime;
    }

    /**
     * Sets a new estimatedDeliveryMaxTime
     *
     * This timestamp indicates the latest date/time that the item should reach the seller's destination based on the seller's stated handling time and the shipping service's transit time. This timestamp is based on an immediate purchase of the item at checkout.
     *
     * @param \DateTime $estimatedDeliveryMaxTime
     * @return self
     */
    public function setEstimatedDeliveryMaxTime(\DateTime $estimatedDeliveryMaxTime)
    {
        $this->estimatedDeliveryMaxTime = $estimatedDeliveryMaxTime;
        return $this;
    }

    /**
     * Gets as importCharge
     *
     * The estimated cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This field is only applicable for international orders being handled through the Global Shipping Program; otherwise, it will not be returned.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getImportCharge()
    {
        return $this->importCharge;
    }

    /**
     * Sets a new importCharge
     *
     * The estimated cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This field is only applicable for international orders being handled through the Global Shipping Program; otherwise, it will not be returned.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $importCharge
     * @return self
     */
    public function setImportCharge(\Nogrod\eBaySDK\Shopping\AmountType $importCharge)
    {
        $this->importCharge = $importCharge;
        return $this;
    }

    /**
     * Gets as shippingServiceCutOffTime
     *
     * This field is no longer applicable and should not be returned for any international shipping service option.
     *
     * @return \DateTime
     */
    public function getShippingServiceCutOffTime()
    {
        return $this->shippingServiceCutOffTime;
    }

    /**
     * Sets a new shippingServiceCutOffTime
     *
     * This field is no longer applicable and should not be returned for any international shipping service option.
     *
     * @param \DateTime $shippingServiceCutOffTime
     * @return self
     */
    public function setShippingServiceCutOffTime(\DateTime $shippingServiceCutOffTime)
    {
        $this->shippingServiceCutOffTime = $shippingServiceCutOffTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost", $value);
        }
        $value = $this->getShippingServiceName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceName", $value);
        }
        $value = $this->getShippingServiceAdditionalCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceAdditionalCost", $value);
        }
        $value = $this->getShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost", $value);
        }
        $value = $this->getShippingServicePriority();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServicePriority", $value);
        }
        $value = $this->getShipsTo();
        if (null !== $value && [] !== $this->getShipsTo()) {
            $writer->write(array_map(function ($v) {return ["ShipsTo" => $v];}, $value));
        }
        $value = $this->getEstimatedDeliveryMinTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMinTime", $value);
        }
        $value = $this->getEstimatedDeliveryMaxTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMaxTime", $value);
        }
        $value = $this->getImportCharge();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImportCharge", $value);
        }
        $value = $this->getShippingServiceCutOffTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCutOffTime", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost');
        if (null !== $value) {
            $this->setShippingInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceName');
        if (null !== $value) {
            $this->setShippingServiceName($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceAdditionalCost');
        if (null !== $value) {
            $this->setShippingServiceAdditionalCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServicePriority');
        if (null !== $value) {
            $this->setShippingServicePriority($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipsTo', true);
        if (null !== $value) {
            $this->setShipsTo($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMinTime');
        if (null !== $value) {
            $this->setEstimatedDeliveryMinTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMaxTime');
        if (null !== $value) {
            $this->setEstimatedDeliveryMaxTime(new \DateTime($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImportCharge');
        if (null !== $value) {
            $this->setImportCharge(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCutOffTime');
        if (null !== $value) {
            $this->setShippingServiceCutOffTime(new \DateTime($value));
        }
    }
}
