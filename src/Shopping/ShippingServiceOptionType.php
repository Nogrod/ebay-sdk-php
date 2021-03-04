<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingServiceOptionType
 *
 * Container consisting of shipping costs and other details related to a domestic shipping service that is available to ship an item to the shipping destination specified in the <b>GetShippingCosts</b> call request.
 * XSD Type: ShippingServiceOptionType
 */
class ShippingServiceOptionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $shippingInsuranceCost
     */
    private $shippingInsuranceCost = null;

    /**
     * The name of a domestic shipping service option available to ship the item to specified domestic shipping destination. This field is always returned with each <b>ShippingServiceOption</b> container.
     *
     * @var string $shippingServiceName
     */
    private $shippingServiceName = null;

    /**
     * Reserved for internal or future use.
     *
     * @var string $logisticPlanType
     */
    private $logisticPlanType = null;

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
     * This integer value indicates the seller-preferred presentation order of the domestic shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to four domestic shipping service options. This field should always be returned with each <b>ShippingServiceOption</b> container.
     *
     * @var int $shippingServicePriority
     */
    private $shippingServicePriority = null;

    /**
     * This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is an expedited shipping service.
     *
     * @var bool $expeditedService
     */
    private $expeditedService = null;

    /**
     * The integer value indicates the minimum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the minimum transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to receive their item in about five business days after payment has been made.
     *
     * @var int $shippingTimeMin
     */
    private $shippingTimeMin = null;

    /**
     * The integer value indicates the maximum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the maximum transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to receive their item in about five business days after payment has been made.
     *
     * @var int $shippingTimeMax
     */
    private $shippingTimeMax = null;

    /**
     * This field is only applicable and returned if the corresponding shipping service charges a shipping surcharge to the shipping destination. For example, a shipping surcharge may apply if a buyer from Alaska or Hawaii ordered an item from the Continental US, and the seller is using UPS to ship the item. If a shipping surcharge is applicable, the <b>ShippingServiceCost</b> field will account for this additional charge.
     *
     * @var \Nogrod\eBaySDK\Shopping\AmountType $shippingSurcharge
     */
    private $shippingSurcharge = null;

    /**
     * A domestic location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if the shipping service option serves multiple countries.
     *
     * @var string[] $shipsTo
     */
    private $shipsTo = [
        
    ];

    /**
     * The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated minimum transit time (specified in the <b>ShippingTimeMin</b> field in business days).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away.
     *  </span>
     *
     * @var \DateTime $estimatedDeliveryMinTime
     */
    private $estimatedDeliveryMinTime = null;

    /**
     * The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated maximum transit time (specified in the <b>ShippingTimeMax</b> field in business days).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away.
     *  </span>
     *
     * @var \DateTime $estimatedDeliveryMaxTime
     */
    private $estimatedDeliveryMaxTime = null;

    /**
     * This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is a 'Fast and Free' shipping service. With a 'Fast and Free' shipping service, a buyer in the specified destination can expect to receive their item within four business days at no cost (and the <b>ShippingServiceCost</b> value should be <code>0.0</code>).
     *
     * @var bool $fastAndFree
     */
    private $fastAndFree = null;

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
     * The name of a domestic shipping service option available to ship the item to specified domestic shipping destination. This field is always returned with each <b>ShippingServiceOption</b> container.
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
     * The name of a domestic shipping service option available to ship the item to specified domestic shipping destination. This field is always returned with each <b>ShippingServiceOption</b> container.
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
     * Gets as logisticPlanType
     *
     * Reserved for internal or future use.
     *
     * @return string
     */
    public function getLogisticPlanType()
    {
        return $this->logisticPlanType;
    }

    /**
     * Sets a new logisticPlanType
     *
     * Reserved for internal or future use.
     *
     * @param string $logisticPlanType
     * @return self
     */
    public function setLogisticPlanType($logisticPlanType)
    {
        $this->logisticPlanType = $logisticPlanType;
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
     * Gets as shippingServicePriority
     *
     * This integer value indicates the seller-preferred presentation order of the domestic shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to four domestic shipping service options. This field should always be returned with each <b>ShippingServiceOption</b> container.
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
     * This integer value indicates the seller-preferred presentation order of the domestic shipping service options. A shipping service option with a <b>ShippingServicePriority</b> value of '1' indicates that the shipping service appears in the first position on the listing's View Item and Checkout page. Generally, both the domestic and international shipping service options are returned in order in the <b>GetShippingCosts</b> response. A seller can specify up to four domestic shipping service options. This field should always be returned with each <b>ShippingServiceOption</b> container.
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
     * Gets as expeditedService
     *
     * This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is an expedited shipping service.
     *
     * @return bool
     */
    public function getExpeditedService()
    {
        return $this->expeditedService;
    }

    /**
     * Sets a new expeditedService
     *
     * This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is an expedited shipping service.
     *
     * @param bool $expeditedService
     * @return self
     */
    public function setExpeditedService($expeditedService)
    {
        $this->expeditedService = $expeditedService;
        return $this;
    }

    /**
     * Gets as shippingTimeMin
     *
     * The integer value indicates the minimum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the minimum transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to receive their item in about five business days after payment has been made.
     *
     * @return int
     */
    public function getShippingTimeMin()
    {
        return $this->shippingTimeMin;
    }

    /**
     * Sets a new shippingTimeMin
     *
     * The integer value indicates the minimum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the minimum transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to receive their item in about five business days after payment has been made.
     *
     * @param int $shippingTimeMin
     * @return self
     */
    public function setShippingTimeMin($shippingTimeMin)
    {
        $this->shippingTimeMin = $shippingTimeMin;
        return $this;
    }

    /**
     * Gets as shippingTimeMax
     *
     * The integer value indicates the maximum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the maximum transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to receive their item in about five business days after payment has been made.
     *
     * @return int
     */
    public function getShippingTimeMax()
    {
        return $this->shippingTimeMax;
    }

    /**
     * Sets a new shippingTimeMax
     *
     * The integer value indicates the maximum number of business days that it will take for the item to be shipped (door-to-door) to the buyer using the corresponding shipping service option. The actual shipping carrier defines the maximum transit time, and not the seller. Take into account that the transit time is separate from the seller's stated handling time, so if the seller's handling time is two business days, and the transit time is three business days, the buyer can expect to receive their item in about five business days after payment has been made.
     *
     * @param int $shippingTimeMax
     * @return self
     */
    public function setShippingTimeMax($shippingTimeMax)
    {
        $this->shippingTimeMax = $shippingTimeMax;
        return $this;
    }

    /**
     * Gets as shippingSurcharge
     *
     * This field is only applicable and returned if the corresponding shipping service charges a shipping surcharge to the shipping destination. For example, a shipping surcharge may apply if a buyer from Alaska or Hawaii ordered an item from the Continental US, and the seller is using UPS to ship the item. If a shipping surcharge is applicable, the <b>ShippingServiceCost</b> field will account for this additional charge.
     *
     * @return \Nogrod\eBaySDK\Shopping\AmountType
     */
    public function getShippingSurcharge()
    {
        return $this->shippingSurcharge;
    }

    /**
     * Sets a new shippingSurcharge
     *
     * This field is only applicable and returned if the corresponding shipping service charges a shipping surcharge to the shipping destination. For example, a shipping surcharge may apply if a buyer from Alaska or Hawaii ordered an item from the Continental US, and the seller is using UPS to ship the item. If a shipping surcharge is applicable, the <b>ShippingServiceCost</b> field will account for this additional charge.
     *
     * @param \Nogrod\eBaySDK\Shopping\AmountType $shippingSurcharge
     * @return self
     */
    public function setShippingSurcharge(\Nogrod\eBaySDK\Shopping\AmountType $shippingSurcharge)
    {
        $this->shippingSurcharge = $shippingSurcharge;
        return $this;
    }

    /**
     * Adds as shipsTo
     *
     * A domestic location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if the shipping service option serves multiple countries.
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
     * A domestic location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if the shipping service option serves multiple countries.
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
     * A domestic location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if the shipping service option serves multiple countries.
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
     * A domestic location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if the shipping service option serves multiple countries.
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
     * A domestic location or region to which the item may be shipped via this
     *  particular shipping service. These 'ship-to' locations are provided by the seller when they create, revise, or relist their item, or they can be controlled through a Shipping Business Policy associated with the listing. At a bare minimum, the country of the location specified through the <b>DestinationCountryCode</b> field of the call request shall be returned in this field, or possibly 'Worldwide' if the shipping service option serves multiple countries.
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
     * The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated minimum transit time (specified in the <b>ShippingTimeMin</b> field in business days).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away.
     *  </span>
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
     * The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated minimum transit time (specified in the <b>ShippingTimeMin</b> field in business days).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away.
     *  </span>
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
     * The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated maximum transit time (specified in the <b>ShippingTimeMax</b> field in business days).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away.
     *  </span>
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
     * The timestamp in this field shows the estimated date and time that the item will be delivered to the buyer based on the corresponding shipping service's stated maximum transit time (specified in the <b>ShippingTimeMax</b> field in business days).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Note that the estimated delivery 'window' that is defined through the <b>EstimatedDeliveryMinTime</b> and <b>EstimatedDeliveryMaxTime</b> should not be considered completely accurate because the seller's stated handling time is not considered in the calculation, and it is also based on the transaction (and payment) occurring right away.
     *  </span>
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
     * Gets as fastAndFree
     *
     * This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is a 'Fast and Free' shipping service. With a 'Fast and Free' shipping service, a buyer in the specified destination can expect to receive their item within four business days at no cost (and the <b>ShippingServiceCost</b> value should be <code>0.0</code>).
     *
     * @return bool
     */
    public function getFastAndFree()
    {
        return $this->fastAndFree;
    }

    /**
     * Sets a new fastAndFree
     *
     * This field is only returned if <code>true</code>, and indicates if the corresponding shipping service is a 'Fast and Free' shipping service. With a 'Fast and Free' shipping service, a buyer in the specified destination can expect to receive their item within four business days at no cost (and the <b>ShippingServiceCost</b> value should be <code>0.0</code>).
     *
     * @param bool $fastAndFree
     * @return self
     */
    public function setFastAndFree($fastAndFree)
    {
        $this->fastAndFree = $fastAndFree;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = $this->getLogisticPlanType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogisticPlanType", $value);
        }
        $value = $this->getShippingServiceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost", $value);
        }
        $value = $this->getShippingServiceAdditionalCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceAdditionalCost", $value);
        }
        $value = $this->getShippingServicePriority();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServicePriority", $value);
        }
        $value = $this->getExpeditedService();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpeditedService", $value);
        }
        $value = $this->getShippingTimeMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTimeMin", $value);
        }
        $value = $this->getShippingTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTimeMax", $value);
        }
        $value = $this->getShippingSurcharge();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingSurcharge", $value);
        }
        $value = $this->getShipsTo();
        if (null !== $value && !empty($this->getShipsTo())) {
            $writer->write(array_map(function ($v) {
                return ["ShipsTo" => $v];
            }, $value));
        }
        $value = $this->getEstimatedDeliveryMinTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMinTime", $value);
        }
        $value = $this->getEstimatedDeliveryMaxTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMaxTime", $value);
        }
        $value = $this->getFastAndFree();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FastAndFree", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost');
        if (null !== $value) {
            $this->setShippingInsuranceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceName');
        if (null !== $value) {
            $this->setShippingServiceName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogisticPlanType');
        if (null !== $value) {
            $this->setLogisticPlanType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceAdditionalCost');
        if (null !== $value) {
            $this->setShippingServiceAdditionalCost(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServicePriority');
        if (null !== $value) {
            $this->setShippingServicePriority($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpeditedService');
        if (null !== $value) {
            $this->setExpeditedService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTimeMin');
        if (null !== $value) {
            $this->setShippingTimeMin($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTimeMax');
        if (null !== $value) {
            $this->setShippingTimeMax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingSurcharge');
        if (null !== $value) {
            $this->setShippingSurcharge(\Nogrod\eBaySDK\Shopping\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipsTo', true);
        if (null !== $value && !empty($value)) {
            $this->setShipsTo($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMinTime');
        if (null !== $value) {
            $this->setEstimatedDeliveryMinTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EstimatedDeliveryMaxTime');
        if (null !== $value) {
            $this->setEstimatedDeliveryMaxTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FastAndFree');
        if (null !== $value) {
            $this->setFastAndFree($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCutOffTime');
        if (null !== $value) {
            $this->setShippingServiceCutOffTime(new \DateTime($value));
        }
    }
}
