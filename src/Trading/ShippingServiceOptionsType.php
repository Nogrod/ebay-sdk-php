<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingServiceOptionsType
 *
 * Container consisting of shipping costs and other details related to a domestic
 *  shipping service. A <b>ShippingServiceOptions</b> container is required for each domestic shipping service option that the seller will make available to buyers in an Add/Revise/Relist call. Up to four domestic shipping service options can be offered per listing.
 * XSD Type: ShippingServiceOptionsType
 */
class ShippingServiceOptionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingInsuranceCost
     */
    private $shippingInsuranceCost = null;

    /**
     * This enumeration value indicates a specific domestic shipping service option being offered by the seller to ship an item to a buyer who is located within the same country as the item. This field is required to identify each domestic shipping service option that is specified with a <b>ShippingServiceOptions</b> container.
     *  <br><br>
     *  For a list of valid <b>ShippingService</b> values, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <code>ShippingServiceDetails</code>. The
     *  <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present. Otherwise,
     *  that particular shipping service option is no longer valid and cannot be offered
     *  to buyers through a listing.
     *  <br><br>
     *  To view the full list of domestic shipping service options in the response, look for the
     *  <b>ShippingServiceDetails.ShippingService</b> fields. Domestic shipping service options will
     *  not have a <b>InternationalService</b> = <code>true</code> field, as this indicates that the <b>ShippingService</b>
     *  value is an International shipping service option.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * The base cost of shipping one unit of the item using the shipping service specified in the corresponding <b>ShippingService</b> field.
     *  <br>
     *  <br>
     *  In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field also becomes applicable, and shows the cost to ship each additional unit of the item if the buyer purchases multiple quantity of the same line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the corresponding shipping service option is set as a 'free shipping' option (<b>FreeShipping=true</b>), the seller still needs to include this <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically.
     *  </span>
     *  When returned by <b>GetItemShipping</b>, it includes the packaging and
     *  handling cost.
     *  <br>
     *  <br>
     *  Note that if <b>ShippingService</b> is set to <code>LocalPickup</code>, <b>ShippingServiceCost</b> must be set to <code>0.0</code>. Also, if a shipping service has been specified (even <b>LocalPickup</b>), <b>GetItem</b> returns
     *  the shipping service cost, even if the cost is zero.
     *  <br>
     *  <br>
     *  If this is for calculated shipping for a listing that has not
     *  yet ended, note that the cost cannot be determined until the listing
     *  has ended and the buyer has specified a postal code.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingServiceAdditionalCost
     */
    private $shippingServiceAdditionalCost = null;

    /**
     * Controls the order (relative to other shipping services) in
     *  which the corresponding <b>ShippingService</b> will appear in the View Item and
     *  Checkout page.
     *  <br/><br/>
     *  Sellers can specify up to four domestic shipping services (with
     *  four <b>ShippingServiceOptions</b> containers), so valid values are 1, 2, 3, and 4. A
     *  shipping service with a <b>ShippingServicePriority</b> value of 1 appears at the top.
     *  Conversely, a shipping service with a <b>ShippingServicePriority</b> value of 4 appears
     *  at the bottom of a list of four shipping service options.
     *  <br><br>
     *  If this field is omitted from domestic shipping service options, the order of the shipping service options in View Item and Checkout pages will be determined by the order that these shipping service options are presented in the request payload of an Add/Revise/Relist call.
     *
     * @var int $shippingServicePriority
     */
    private $shippingServicePriority = null;

    /**
     * This field is returned as <code>true</code> if the domestic shipping service is considered an expedited shipping service. An expedited service is typically a shipping service that can ship an order that will arrive at the buyer's location within one to two business days.
     *
     * @var bool $expeditedService
     */
    private $expeditedService = null;

    /**
     * The integer value returned here indicates the minimum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @var int $shippingTimeMin
     */
    private $shippingTimeMin = null;

    /**
     * The integer value returned here indicates the maximum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @var int $shippingTimeMax
     */
    private $shippingTimeMax = null;

    /**
     * This boolean field indicates whether or not the corresponding domestic shipping service option is free to the buyer. In an Add/Revise/Relist call, free shipping can only be offered for the first specified shipping service (so, the corresponding <b>ShippingServicePriority</b> value should be <code>1</code> or included first in the call request). If 'free shipping' is for any other shipping service, this field is ignored.
     *  <br/><br/>
     *  For 'Get' calls, including <b>GetItem</b>, this field is only returned if <code>1</code>.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If a seller is specifying a shipping service option as 'free shipping', in addition to this <b>FreeShipping</b> boolean field, the seller will also need to include the corresponding <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically.
     *  </span>
     *
     * @var bool $freeShipping
     */
    private $freeShipping = null;

    /**
     * The <b>LocalPickup</b> flag is used by the <b>GetMyEbayBuying</b> and <b>GetMyEbaySelling</b> calls to indicate whether the buyer has selected local pickup as the shipping option or the seller has specified local pickup as the first shipping option.
     *  The <b>LocalPickup</b> flag can also be used with other fields to indicate if there is no fee for local pickup.
     *  <br/><br/>
     *  For example, if the <b>LocalPickup</b> flag is used with the <b>ShippingServiceOptions</b> and <b>ShippingServiceCost</b> fields, the seller can indicate that local pickup is an available option and that no is fee charged. This is the equivalent of free shipping.
     *
     * @var bool $localPickup
     */
    private $localPickup = null;

    /**
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $importCharge
     */
    private $importCharge = null;

    /**
     * This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingPackageInfoType[] $shippingPackageInfo
     */
    private $shippingPackageInfo = [
        
    ];

    /**
     * The last time of day that an order using the specified shipping service will be accepted by the seller for the current listing. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>.
     *  <br/><br/>
     *  The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     *
     * @var \DateTime $shippingServiceCutOffTime
     */
    private $shippingServiceCutOffTime = null;

    /**
     * Reserved for internal or future use.
     *
     * @var string $logisticPlanType
     */
    private $logisticPlanType = null;

    /**
     * Gets as shippingInsuranceCost
     *
     * This field is no longer applicable as it is not longer possible for a seller to offer a buyer shipping insurance.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingInsuranceCost
     * @return self
     */
    public function setShippingInsuranceCost(\Nogrod\eBaySDK\Trading\AmountType $shippingInsuranceCost)
    {
        $this->shippingInsuranceCost = $shippingInsuranceCost;
        return $this;
    }

    /**
     * Gets as shippingService
     *
     * This enumeration value indicates a specific domestic shipping service option being offered by the seller to ship an item to a buyer who is located within the same country as the item. This field is required to identify each domestic shipping service option that is specified with a <b>ShippingServiceOptions</b> container.
     *  <br><br>
     *  For a list of valid <b>ShippingService</b> values, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <code>ShippingServiceDetails</code>. The
     *  <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present. Otherwise,
     *  that particular shipping service option is no longer valid and cannot be offered
     *  to buyers through a listing.
     *  <br><br>
     *  To view the full list of domestic shipping service options in the response, look for the
     *  <b>ShippingServiceDetails.ShippingService</b> fields. Domestic shipping service options will
     *  not have a <b>InternationalService</b> = <code>true</code> field, as this indicates that the <b>ShippingService</b>
     *  value is an International shipping service option.
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
     * This enumeration value indicates a specific domestic shipping service option being offered by the seller to ship an item to a buyer who is located within the same country as the item. This field is required to identify each domestic shipping service option that is specified with a <b>ShippingServiceOptions</b> container.
     *  <br><br>
     *  For a list of valid <b>ShippingService</b> values, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <code>ShippingServiceDetails</code>. The
     *  <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must also be present. Otherwise,
     *  that particular shipping service option is no longer valid and cannot be offered
     *  to buyers through a listing.
     *  <br><br>
     *  To view the full list of domestic shipping service options in the response, look for the
     *  <b>ShippingServiceDetails.ShippingService</b> fields. Domestic shipping service options will
     *  not have a <b>InternationalService</b> = <code>true</code> field, as this indicates that the <b>ShippingService</b>
     *  value is an International shipping service option.
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
     * Gets as shippingServiceCost
     *
     * The base cost of shipping one unit of the item using the shipping service specified in the corresponding <b>ShippingService</b> field.
     *  <br>
     *  <br>
     *  In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field also becomes applicable, and shows the cost to ship each additional unit of the item if the buyer purchases multiple quantity of the same line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the corresponding shipping service option is set as a 'free shipping' option (<b>FreeShipping=true</b>), the seller still needs to include this <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically.
     *  </span>
     *  When returned by <b>GetItemShipping</b>, it includes the packaging and
     *  handling cost.
     *  <br>
     *  <br>
     *  Note that if <b>ShippingService</b> is set to <code>LocalPickup</code>, <b>ShippingServiceCost</b> must be set to <code>0.0</code>. Also, if a shipping service has been specified (even <b>LocalPickup</b>), <b>GetItem</b> returns
     *  the shipping service cost, even if the cost is zero.
     *  <br>
     *  <br>
     *  If this is for calculated shipping for a listing that has not
     *  yet ended, note that the cost cannot be determined until the listing
     *  has ended and the buyer has specified a postal code.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * The base cost of shipping one unit of the item using the shipping service specified in the corresponding <b>ShippingService</b> field.
     *  <br>
     *  <br>
     *  In the case of a multiple-quantity, fixed-price listing, the <b>ShippingServiceAdditionalCost</b> field also becomes applicable, and shows the cost to ship each additional unit of the item if the buyer purchases multiple quantity of the same line item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the corresponding shipping service option is set as a 'free shipping' option (<b>FreeShipping=true</b>), the seller still needs to include this <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically.
     *  </span>
     *  When returned by <b>GetItemShipping</b>, it includes the packaging and
     *  handling cost.
     *  <br>
     *  <br>
     *  Note that if <b>ShippingService</b> is set to <code>LocalPickup</code>, <b>ShippingServiceCost</b> must be set to <code>0.0</code>. Also, if a shipping service has been specified (even <b>LocalPickup</b>), <b>GetItem</b> returns
     *  the shipping service cost, even if the cost is zero.
     *  <br>
     *  <br>
     *  If this is for calculated shipping for a listing that has not
     *  yet ended, note that the cost cannot be determined until the listing
     *  has ended and the buyer has specified a postal code.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\Trading\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }

    /**
     * Gets as shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->shippingServiceAdditionalCost;
    }

    /**
     * Sets a new shippingServiceAdditionalCost
     *
     * The cost of shipping each additional item if the same buyer purchases multiple quantity of the same line item. This field is required when creating a multiple-quantity, fixed-price listing. Generally, the seller will give the buyer a shipping discount if that buyer purchases multiple quantity of the item, so this value should usually be less than the value set for <b>ShippingServiceCost</b>.
     *  <br/><br/>
     *  The value of this field can even be set to <code>0</code> if the seller wants to encourage buyers to buy multiple quantity of the item, or it could be that the seller can fit multiple quantities of the line item in a single shipping package, so the seller is just passing this shipping savings onto the buyer. This field is not applicable for single-quantity listings.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingServiceAdditionalCost
     * @return self
     */
    public function setShippingServiceAdditionalCost(\Nogrod\eBaySDK\Trading\AmountType $shippingServiceAdditionalCost)
    {
        $this->shippingServiceAdditionalCost = $shippingServiceAdditionalCost;
        return $this;
    }

    /**
     * Gets as shippingServicePriority
     *
     * Controls the order (relative to other shipping services) in
     *  which the corresponding <b>ShippingService</b> will appear in the View Item and
     *  Checkout page.
     *  <br/><br/>
     *  Sellers can specify up to four domestic shipping services (with
     *  four <b>ShippingServiceOptions</b> containers), so valid values are 1, 2, 3, and 4. A
     *  shipping service with a <b>ShippingServicePriority</b> value of 1 appears at the top.
     *  Conversely, a shipping service with a <b>ShippingServicePriority</b> value of 4 appears
     *  at the bottom of a list of four shipping service options.
     *  <br><br>
     *  If this field is omitted from domestic shipping service options, the order of the shipping service options in View Item and Checkout pages will be determined by the order that these shipping service options are presented in the request payload of an Add/Revise/Relist call.
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
     * Controls the order (relative to other shipping services) in
     *  which the corresponding <b>ShippingService</b> will appear in the View Item and
     *  Checkout page.
     *  <br/><br/>
     *  Sellers can specify up to four domestic shipping services (with
     *  four <b>ShippingServiceOptions</b> containers), so valid values are 1, 2, 3, and 4. A
     *  shipping service with a <b>ShippingServicePriority</b> value of 1 appears at the top.
     *  Conversely, a shipping service with a <b>ShippingServicePriority</b> value of 4 appears
     *  at the bottom of a list of four shipping service options.
     *  <br><br>
     *  If this field is omitted from domestic shipping service options, the order of the shipping service options in View Item and Checkout pages will be determined by the order that these shipping service options are presented in the request payload of an Add/Revise/Relist call.
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
     * This field is returned as <code>true</code> if the domestic shipping service is considered an expedited shipping service. An expedited service is typically a shipping service that can ship an order that will arrive at the buyer's location within one to two business days.
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
     * This field is returned as <code>true</code> if the domestic shipping service is considered an expedited shipping service. An expedited service is typically a shipping service that can ship an order that will arrive at the buyer's location within one to two business days.
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
     * The integer value returned here indicates the minimum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the minimum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the maximum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the maximum number of business days that the shipping service (indicated in the corresponding <b>ShippingService</b> field) will take to be delivered to the buyer.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * Gets as freeShipping
     *
     * This boolean field indicates whether or not the corresponding domestic shipping service option is free to the buyer. In an Add/Revise/Relist call, free shipping can only be offered for the first specified shipping service (so, the corresponding <b>ShippingServicePriority</b> value should be <code>1</code> or included first in the call request). If 'free shipping' is for any other shipping service, this field is ignored.
     *  <br/><br/>
     *  For 'Get' calls, including <b>GetItem</b>, this field is only returned if <code>1</code>.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If a seller is specifying a shipping service option as 'free shipping', in addition to this <b>FreeShipping</b> boolean field, the seller will also need to include the corresponding <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically.
     *  </span>
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
     * This boolean field indicates whether or not the corresponding domestic shipping service option is free to the buyer. In an Add/Revise/Relist call, free shipping can only be offered for the first specified shipping service (so, the corresponding <b>ShippingServicePriority</b> value should be <code>1</code> or included first in the call request). If 'free shipping' is for any other shipping service, this field is ignored.
     *  <br/><br/>
     *  For 'Get' calls, including <b>GetItem</b>, this field is only returned if <code>1</code>.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If a seller is specifying a shipping service option as 'free shipping', in addition to this <b>FreeShipping</b> boolean field, the seller will also need to include the corresponding <b>ShippingServiceCost</b> field and set its value to <code>0.0</code>, as eBay will not do this automatically.
     *  </span>
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
     * Gets as localPickup
     *
     * The <b>LocalPickup</b> flag is used by the <b>GetMyEbayBuying</b> and <b>GetMyEbaySelling</b> calls to indicate whether the buyer has selected local pickup as the shipping option or the seller has specified local pickup as the first shipping option.
     *  The <b>LocalPickup</b> flag can also be used with other fields to indicate if there is no fee for local pickup.
     *  <br/><br/>
     *  For example, if the <b>LocalPickup</b> flag is used with the <b>ShippingServiceOptions</b> and <b>ShippingServiceCost</b> fields, the seller can indicate that local pickup is an available option and that no is fee charged. This is the equivalent of free shipping.
     *
     * @return bool
     */
    public function getLocalPickup()
    {
        return $this->localPickup;
    }

    /**
     * Sets a new localPickup
     *
     * The <b>LocalPickup</b> flag is used by the <b>GetMyEbayBuying</b> and <b>GetMyEbaySelling</b> calls to indicate whether the buyer has selected local pickup as the shipping option or the seller has specified local pickup as the first shipping option.
     *  The <b>LocalPickup</b> flag can also be used with other fields to indicate if there is no fee for local pickup.
     *  <br/><br/>
     *  For example, if the <b>LocalPickup</b> flag is used with the <b>ShippingServiceOptions</b> and <b>ShippingServiceCost</b> fields, the seller can indicate that local pickup is an available option and that no is fee charged. This is the equivalent of free shipping.
     *
     * @param bool $localPickup
     * @return self
     */
    public function setLocalPickup($localPickup)
    {
        $this->localPickup = $localPickup;
        return $this;
    }

    /**
     * Gets as importCharge
     *
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getImportCharge()
    {
        return $this->importCharge;
    }

    /**
     * Sets a new importCharge
     *
     * The total cost of customs and taxes for the international leg of an order shipped using the Global Shipping Program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $importCharge
     * @return self
     */
    public function setImportCharge(\Nogrod\eBaySDK\Trading\AmountType $importCharge)
    {
        $this->importCharge = $importCharge;
        return $this;
    }

    /**
     * Adds as shippingPackageInfo
     *
     * This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingPackageInfoType $shippingPackageInfo
     */
    public function addToShippingPackageInfo(\Nogrod\eBaySDK\Trading\ShippingPackageInfoType $shippingPackageInfo)
    {
        $this->shippingPackageInfo[] = $shippingPackageInfo;
        return $this;
    }

    /**
     * isset shippingPackageInfo
     *
     * This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingPackageInfo($index)
    {
        return isset($this->shippingPackageInfo[$index]);
    }

    /**
     * unset shippingPackageInfo
     *
     * This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingPackageInfo($index)
    {
        unset($this->shippingPackageInfo[$index]);
    }

    /**
     * Gets as shippingPackageInfo
     *
     * This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingPackageInfoType[]
     */
    public function getShippingPackageInfo()
    {
        return $this->shippingPackageInfo;
    }

    /**
     * Sets a new shippingPackageInfo
     *
     * This container is no longer applicable, and it was only applicable to eBay Now and 'eBay On Demand Delivery' orders, and neither of these features are available any longer.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingPackageInfoType[] $shippingPackageInfo
     * @return self
     */
    public function setShippingPackageInfo(array $shippingPackageInfo)
    {
        $this->shippingPackageInfo = $shippingPackageInfo;
        return $this;
    }

    /**
     * Gets as shippingServiceCutOffTime
     *
     * The last time of day that an order using the specified shipping service will be accepted by the seller for the current listing. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>.
     *  <br/><br/>
     *  The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
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
     * The last time of day that an order using the specified shipping service will be accepted by the seller for the current listing. The cut off time applies and is returned only when the <strong>ShippingService</strong> field contains the name of a qualifying time-sensitive shipping service, such as <code>eBayNowImmediateDelivery</code>.
     *  <br/><br/>
     *  The cut off time is set by eBay and determined in part by the policies and locations of the seller and the shipping carrier.
     *
     * @param \DateTime $shippingServiceCutOffTime
     * @return self
     */
    public function setShippingServiceCutOffTime(\DateTime $shippingServiceCutOffTime)
    {
        $this->shippingServiceCutOffTime = $shippingServiceCutOffTime;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingInsuranceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingInsuranceCost", $value);
        }
        $value = $this->getShippingService();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingService", $value);
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
        $value = $this->getFreeShipping();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FreeShipping", $value);
        }
        $value = $this->getLocalPickup();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LocalPickup", $value);
        }
        $value = $this->getImportCharge();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImportCharge", $value);
        }
        $value = $this->getShippingPackageInfo();
        if (null !== $value && !empty($this->getShippingPackageInfo())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingPackageInfo" => $v];
            }, $value));
        }
        $value = $this->getShippingServiceCutOffTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCutOffTime", $value);
        }
        $value = $this->getLogisticPlanType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogisticPlanType", $value);
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
            $this->setShippingInsuranceCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingService');
        if (null !== $value) {
            $this->setShippingService($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCost');
        if (null !== $value) {
            $this->setShippingServiceCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceAdditionalCost');
        if (null !== $value) {
            $this->setShippingServiceAdditionalCost(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FreeShipping');
        if (null !== $value) {
            $this->setFreeShipping($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LocalPickup');
        if (null !== $value) {
            $this->setLocalPickup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImportCharge');
        if (null !== $value) {
            $this->setImportCharge(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackageInfo', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingPackageInfo(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingPackageInfoType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCutOffTime');
        if (null !== $value) {
            $this->setShippingServiceCutOffTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogisticPlanType');
        if (null !== $value) {
            $this->setLogisticPlanType($value);
        }
    }
}
