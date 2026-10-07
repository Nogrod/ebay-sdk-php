<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyServiceType
 *
 * Type defining the <b>domesticShippingPolicyInfoService</b> and <b>internationalShippingPolicyInfoService</b> containers, which consists of detailed information on domestic and international shipping service options.
 * XSD Type: ShippingPolicyService
 */
class ShippingPolicyServiceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An international region (such as Asia or Europe) or a country (represented by two-letter country code) to where the seller will ship an item. To obtain valid 'Ship-To locations' for their site, the seller must call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response. The shipping regions and countries that may be specified as <b>shipToLocation</b> values will vary according to eBay site. The seller may include as many valid <b>shipToLocation</b> values as necessary based on where they are willing to ship an item.
     *  <br><br>
     *  If no <b>shipToLocation</b> field is included in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> or <b>setSellerProfile</b> calls, eBay will automatically add the seller's listing country as a 'Ship-To Location'.
     *  <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should include that region as a <b>shipToLocation</b> value, but then exclude one or more countries in that region by including one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  All <b>shipToLocation</b> fields specified for the shipping policy are always returned in the <b>getSellerProfiles</b> call.
     *
     * @var string[] $shipToLocation
     */
    private $shipToLocation = [

    ];

    /**
     * A domestic or international shipping service being offered by the seller to ship an item to a buyer.
     *  <br><br>
     *  For a list of valid <b>shippingService</b> values, call <b>GeteBayDetails</b>, including <b>ShippingServiceDetails</b> as a <b>DetailName</b> value, and then look through the <b>ShippingServiceDetails</b> containers returned in the response. International shipping services are marked with an <b>InternationalService</b> flag. All shipping services without this flag are domestic shipping services. The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must be present for both domestic and international shipping services, otherwise, that specific shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br><br>
     *  The seller must specify one shipping service in each <b>domesticShippingPolicyInfoService</b> and <b>internationalShippingPolicyInfoService</b> container in an <b>addSellerProfile</b> or <b>setSellerProfile</b> request. Up to four domestic and five international shipping service may be offered to the buyer per listing.
     *  <br><br>
     *  If 'Get It Fast' shipping is being enabled for the shipping policy (<b>fastShipping=true</b>), the first specified domestic shipping service (specified in the first <b>domesticShippingPolicyInfoService.shippingService</b> field) must be a one-day shipping service. To verify that a domestic shipping service is a one-day shipping service (hence, it qualifies for 'Get It Fast' shipping), call <b>GeteBayDetails</b>, including 'ShippingServiceDetails' as a <b>DetailName</b> value, and then look for a <b>ShippingCategory</b> value of 'ONE_DAY' for the corresponding shipping service. 'Get It Fast' shipping is not available for international shipping.
     *
     * @var string $shippingService
     */
    private $shippingService = null;

    /**
     * This value indicates the shipping cost model used by the shipping service option. The two applicable values are 'Flat' and 'Calculated'. To verify that the shipping service supports calculated shipping, call <b>geteBayDetails</b>, using <b>ShipppingServiceDetails</b> as a <b>DetailName</b> value in the request, and then look at the <b>ShippingServiceDetails</b> container that corresponds to the specified shipping service option (see <b>ShippingServiceDetails.ShippingService</b>). One of the <b>ShippingServiceDetails.ServiceType</b> values in that same container should be 'Flat'.
     *  <br><br>
     *  This field is optional in an <b>addSellerProfile</b> or <b>setSellerProfile</b> request, and defaults to 'Flat'.
     *  <br><br>
     *  This field is always returned in each <b>domesticShippingPolicyInfoService</b> and <b>internationalShippingPolicyInfoService</b> container in an <b>addSellerProfile</b> <b>setSellerProfile</b>, or <b>getSellerProfiles</b> response.
     *
     * @var string $shippingType
     */
    private $shippingType = null;

    /**
     * This integer value controls the order (relative to other shipping service options) in which the corresponding shipping service option will appear in the View Item and Checkout pages.
     *  <br><br>
     *  Sellers can specify up to four domestic shipping services (in four separate <b>domesticShippingPolicyInfoService</b> containers), so valid values are 1, 2, 3, and 4. A shipping service option with a <b>sortOrderId</b> value of '1' appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a <b>sortOrderId</b> value of '4' appears at the bottom of a list of four shipping service options.
     *  <br><br>
     *  Sellers can specify up to five international shipping services (in five separate <b>internationalShippingPolicyInfoService</b> containers), so valid values are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the <b>sortOrderId</b> value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages.
     *  <br><br>
     *  If the <b>sortOrderId</b> field is not used, the order of domestic and international shipping service options will be determined by the order they are listed in the API call.
     *
     * @var int $sortOrderId
     */
    private $sortOrderId = null;

    /**
     * This flag is used by the seller to offer free shipping to the buyer. This field can only be included and set to 'true' for the first specified domestic shipping service option (it is ignored if set for any other shipping service option). The first specified shipping service option either has a <b>sortOrderId</b> value of '1', or, if the <b>sortOrderId</b> field is not used, the shipping service option specified first in the API call. The <b>freeShipping</b> field is not applicable for <b>internationalShippingPolicyInfoService</b> containers.
     *
     * @var bool $freeShipping
     */
    private $freeShipping = null;

    /**
     * This value indicates the Cash-on-Delivery fee that is due from the buyer upon item delivery. This field is only applicable if the buyer selects the 'COD' payment method and if the selected shipping service option suppports the Cash-on-Delivery option.
     *  <br><br>
     *  To see if a domestic shipping service option supports the Cash-on-Delivery option, call <b>GeteBayDetails</b>, including 'ShippingServiceDetails' as a <b>DetailName</b> value, and then look for a <b>CODService</b>=true flag for the corresponding shipping service.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $codFee
     */
    private $codFee = null;

    /**
     * This flag indicates whether or not a 'Get It Fast' shipping service option is available for the listing. 'Get It Fast' shipping is only available for fixed-price listings and auction listings with an active 'Buy It Now' option.
     *  <br><br>
     *  To enable 'Get It Fast' shippping for a listing, the seller must:
     *  <ul>
     *  <li>offer at least one domestic one-day shipping service option, such as USPS Express Mail, UPS Next Day Air, or FedEx Overnight;</li>
     *  <li>set the <b>shippingPolicyInfo.dispatchTimeMax</b> value to '0' (same-day shipping) or '1', which means that the seller is committing to ship the item within one business day after receiving payment from the buyer. </li>
     *  </ul>
     *  Although it is not required, it is recommended that sellers also offer an immediate payment option to the buyer, so they can get their item even faster. In the payment business policy, this option is turned on with the <b>paymentInfo.immediatePay</b> flag.<br/>
     *  The <b>fastShipping</b> field should only be included and set to 'true' in <b>domesticShippingPolicyInfoService</b> containers where the shipping service option is a one-day shipping service. The <b>fastShipping</b> field is not applicable for <b>internationalShippingPolicyInfoService</b> containers.
     *  <br><br>
     *
     * @var bool $fastShipping
     */
    private $fastShipping = null;

    /**
     * This value sets the cost of shipping each additional item if the buyer purchases multiple identical items in a multi-quantity, fixed-price listing. This field is required for all multi-quantity, fixed-price listings where flat-rate shipping is used.
     *  <br><br>
     *  This value is at the seller's discretion. Generally, it should be the same price or lower than the <b>shippingServiceCost</b> value. The seller may consider specifying a lower price to ship additional items as an incentive to the buyer to purchase multiple items. The seller may also consider a lower price if he/she is able to ship multiple items in the same box. In this scenario, the seller is able to save on shipping costs and passes these savings down to the buyer.
     *  <br><br>
     *  The total shipping costs for an order line item is calculated with the following formula:
     *  <br><br>
     *  Total shipping costs = <b>shippingServiceCost</b> + (<b>shippingServiceAdditionalCost</b> * quantity purchased) <br><br>
     *  So, if a buyer purchases four identical items, and the seller has specified <b>shippingServiceCost</b> as $6.00 and <b>shippingServiceAdditionalCost</b> as $2.00, the total shipping cost for the order line item is $12.00 ($6.00 + ($2.00 * 3)).
     *  <br><br>
     *  This field is not applicable to calculated shipping.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceAdditionalCost
     */
    private $shippingServiceAdditionalCost = null;

    /**
     * This value sets the cost of shipping for the item if the buyer selects this shipping service option. This field is required in the input for all listings where flat-rate shipping is used, and is not applicable to calculated shipping. <br><br>
     *  This value is at the seller's discretion but should reflect the approximate cost of the shipping service option plus handling. This value defaults to '0.0' if the <b>freeShipping</b> field is set to 'true'.
     *  <br><br>
     *  The total shipping costs for an order line item is calculated with the following formula:
     *  <br><br>
     *  Total shipping costs = <b>shippingServiceCost</b> + (<b>shippingServiceAdditionalCost</b> * quantity purchased)
     *  <br><br>
     *  So, if a buyer purchases four identical items, and the seller has specified <b>shippingServiceCost</b> as $6.00 and <b>shippingServiceAdditionalCost</b> as $2.00, the total shipping cost for the order line item is $12.00 ($6.00 + ($2.00 * 3)).
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * An additional charge that US sellers can add to the cost of an order line item if that order line item is an eBay Motors Parts and Accessories item that is being shipped to a buyer in Alaska, Hawaii, or Puerto Rico through a UPS or FedEx shipping service that charges a surcharge to ship to those areas.
     *  <br><br>
     *  In order for sellers to add a shipping surcharge at the shipping service level, the following must be true:
     *  <ul>
     *  <li>a surcharge is applicable for the shipping service (call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingServiceDetails</b>, and then look for <b>ShippingServiceDetails.SurchargeApplicable=true</b> in the response;</li>
     *  <li>flat-rate shipping is used</li>
     *  </ul>
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingSurcharge
     */
    private $shippingSurcharge = null;

    /**
     * The dollar amount in this field represents the actual total price of shipping if the total shipping costs (<b>shippingServiceCost</b> + <b>shippingServiceAdditionalCost</b> + <b>shippingSurcharge</b>) set for the corresponding shipping service in the shipping policy are overridden through a <b>ShippingServiceCostOverride</b> container in an <b>AddItem</b> call (Trading).
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingOverrideFee
     */
    private $shippingOverrideFee = null;

    /**
     * This field is only applicable to motor vehicle categories on eBay Motors (US and Canada).
     *  <br><br>
     *  If this field is included and set to 'true' (or omitted because the default value is 'true'), the buyer is responsible for the shipment/pickup of the motor vehicle. If this field is included and set to 'false', the seller should specify the vehicle shipping arrangements in the item description for the listing.
     *  <br><br>
     *  If the vehicle has bids or the listing ends within 12 hours, the seller cannot modify this flag.
     *
     * @var bool $buyerResponsibleForShipping
     */
    private $buyerResponsibleForShipping = null;

    /**
     * Adds as shipToLocation
     *
     * An international region (such as Asia or Europe) or a country (represented by two-letter country code) to where the seller will ship an item. To obtain valid 'Ship-To locations' for their site, the seller must call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response. The shipping regions and countries that may be specified as <b>shipToLocation</b> values will vary according to eBay site. The seller may include as many valid <b>shipToLocation</b> values as necessary based on where they are willing to ship an item.
     *  <br><br>
     *  If no <b>shipToLocation</b> field is included in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> or <b>setSellerProfile</b> calls, eBay will automatically add the seller's listing country as a 'Ship-To Location'.
     *  <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should include that region as a <b>shipToLocation</b> value, but then exclude one or more countries in that region by including one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  All <b>shipToLocation</b> fields specified for the shipping policy are always returned in the <b>getSellerProfiles</b> call.
     *
     * @return self
     * @param string $shipToLocation
     */
    public function addToShipToLocation($shipToLocation)
    {
        if (!is_array($this->shipToLocation)) {
            throw new \LogicException('shipToLocation is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->shipToLocation[] = $shipToLocation;
        return $this;
    }

    /**
     * isset shipToLocation
     *
     * An international region (such as Asia or Europe) or a country (represented by two-letter country code) to where the seller will ship an item. To obtain valid 'Ship-To locations' for their site, the seller must call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response. The shipping regions and countries that may be specified as <b>shipToLocation</b> values will vary according to eBay site. The seller may include as many valid <b>shipToLocation</b> values as necessary based on where they are willing to ship an item.
     *  <br><br>
     *  If no <b>shipToLocation</b> field is included in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> or <b>setSellerProfile</b> calls, eBay will automatically add the seller's listing country as a 'Ship-To Location'.
     *  <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should include that region as a <b>shipToLocation</b> value, but then exclude one or more countries in that region by including one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  All <b>shipToLocation</b> fields specified for the shipping policy are always returned in the <b>getSellerProfiles</b> call.
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
     * An international region (such as Asia or Europe) or a country (represented by two-letter country code) to where the seller will ship an item. To obtain valid 'Ship-To locations' for their site, the seller must call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response. The shipping regions and countries that may be specified as <b>shipToLocation</b> values will vary according to eBay site. The seller may include as many valid <b>shipToLocation</b> values as necessary based on where they are willing to ship an item.
     *  <br><br>
     *  If no <b>shipToLocation</b> field is included in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> or <b>setSellerProfile</b> calls, eBay will automatically add the seller's listing country as a 'Ship-To Location'.
     *  <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should include that region as a <b>shipToLocation</b> value, but then exclude one or more countries in that region by including one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  All <b>shipToLocation</b> fields specified for the shipping policy are always returned in the <b>getSellerProfiles</b> call.
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
     * An international region (such as Asia or Europe) or a country (represented by two-letter country code) to where the seller will ship an item. To obtain valid 'Ship-To locations' for their site, the seller must call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response. The shipping regions and countries that may be specified as <b>shipToLocation</b> values will vary according to eBay site. The seller may include as many valid <b>shipToLocation</b> values as necessary based on where they are willing to ship an item.
     *  <br><br>
     *  If no <b>shipToLocation</b> field is included in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> or <b>setSellerProfile</b> calls, eBay will automatically add the seller's listing country as a 'Ship-To Location'.
     *  <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should include that region as a <b>shipToLocation</b> value, but then exclude one or more countries in that region by including one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  All <b>shipToLocation</b> fields specified for the shipping policy are always returned in the <b>getSellerProfiles</b> call.
     *
     * @return iterable<string>
     */
    public function getShipToLocation()
    {
        return $this->shipToLocation;
    }

    /**
     * Sets a new shipToLocation
     *
     * An international region (such as Asia or Europe) or a country (represented by two-letter country code) to where the seller will ship an item. To obtain valid 'Ship-To locations' for their site, the seller must call <b>GeteBayDetails</b>, using <b>ShipppingLocationDetails</b> as a <b>DetailName</b> value in the request, and then scanning the <b>ShippingLocationDetails.ShippingLocation</b> values that are returned in the response. The shipping regions and countries that may be specified as <b>shipToLocation</b> values will vary according to eBay site. The seller may include as many valid <b>shipToLocation</b> values as necessary based on where they are willing to ship an item.
     *  <br><br>
     *  If no <b>shipToLocation</b> field is included in the <b>domesticShippingPolicyInfoService</b> container when using the <b>addSellerProfile</b> or <b>setSellerProfile</b> calls, eBay will automatically add the seller's listing country as a 'Ship-To Location'.
     *  <br><br>
     *  If the seller does want to offer international shipping as part of the shipping policy, at least one <b>shipToLocation</b> field in the <b>internationalShippingPolicyInfoService</b> container is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. To offer shipping to every region and country (supported by eBay shipping services), the seller can pass in 'Worldwide' as a <b>shipToLocation</b> value. If the seller wants to ship to a specific region, but would like to exclude one or more countries in that region, the seller should include that region as a <b>shipToLocation</b> value, but then exclude one or more countries in that region by including one or more instances of the <b>shippingPolicyInfo.excludeShipToLocation</b> field.
     *  <br><br>
     *  All <b>shipToLocation</b> fields specified for the shipping policy are always returned in the <b>getSellerProfiles</b> call.
     *
     * @param iterable<string> $shipToLocation
     * @return self
     */
    public function setShipToLocation(iterable $shipToLocation)
    {
        $this->shipToLocation = $shipToLocation;
        return $this;
    }

    /**
     * Gets as shippingService
     *
     * A domestic or international shipping service being offered by the seller to ship an item to a buyer.
     *  <br><br>
     *  For a list of valid <b>shippingService</b> values, call <b>GeteBayDetails</b>, including <b>ShippingServiceDetails</b> as a <b>DetailName</b> value, and then look through the <b>ShippingServiceDetails</b> containers returned in the response. International shipping services are marked with an <b>InternationalService</b> flag. All shipping services without this flag are domestic shipping services. The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must be present for both domestic and international shipping services, otherwise, that specific shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br><br>
     *  The seller must specify one shipping service in each <b>domesticShippingPolicyInfoService</b> and <b>internationalShippingPolicyInfoService</b> container in an <b>addSellerProfile</b> or <b>setSellerProfile</b> request. Up to four domestic and five international shipping service may be offered to the buyer per listing.
     *  <br><br>
     *  If 'Get It Fast' shipping is being enabled for the shipping policy (<b>fastShipping=true</b>), the first specified domestic shipping service (specified in the first <b>domesticShippingPolicyInfoService.shippingService</b> field) must be a one-day shipping service. To verify that a domestic shipping service is a one-day shipping service (hence, it qualifies for 'Get It Fast' shipping), call <b>GeteBayDetails</b>, including 'ShippingServiceDetails' as a <b>DetailName</b> value, and then look for a <b>ShippingCategory</b> value of 'ONE_DAY' for the corresponding shipping service. 'Get It Fast' shipping is not available for international shipping.
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
     * A domestic or international shipping service being offered by the seller to ship an item to a buyer.
     *  <br><br>
     *  For a list of valid <b>shippingService</b> values, call <b>GeteBayDetails</b>, including <b>ShippingServiceDetails</b> as a <b>DetailName</b> value, and then look through the <b>ShippingServiceDetails</b> containers returned in the response. International shipping services are marked with an <b>InternationalService</b> flag. All shipping services without this flag are domestic shipping services. The <b>ShippingServiceDetails.ValidForSellingFlow</b> flag must be present for both domestic and international shipping services, otherwise, that specific shipping service option is no longer valid and cannot be offered to buyers through a listing.
     *  <br><br>
     *  The seller must specify one shipping service in each <b>domesticShippingPolicyInfoService</b> and <b>internationalShippingPolicyInfoService</b> container in an <b>addSellerProfile</b> or <b>setSellerProfile</b> request. Up to four domestic and five international shipping service may be offered to the buyer per listing.
     *  <br><br>
     *  If 'Get It Fast' shipping is being enabled for the shipping policy (<b>fastShipping=true</b>), the first specified domestic shipping service (specified in the first <b>domesticShippingPolicyInfoService.shippingService</b> field) must be a one-day shipping service. To verify that a domestic shipping service is a one-day shipping service (hence, it qualifies for 'Get It Fast' shipping), call <b>GeteBayDetails</b>, including 'ShippingServiceDetails' as a <b>DetailName</b> value, and then look for a <b>ShippingCategory</b> value of 'ONE_DAY' for the corresponding shipping service. 'Get It Fast' shipping is not available for international shipping.
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
     * Gets as shippingType
     *
     * This value indicates the shipping cost model used by the shipping service option. The two applicable values are 'Flat' and 'Calculated'. To verify that the shipping service supports calculated shipping, call <b>geteBayDetails</b>, using <b>ShipppingServiceDetails</b> as a <b>DetailName</b> value in the request, and then look at the <b>ShippingServiceDetails</b> container that corresponds to the specified shipping service option (see <b>ShippingServiceDetails.ShippingService</b>). One of the <b>ShippingServiceDetails.ServiceType</b> values in that same container should be 'Flat'.
     *  <br><br>
     *  This field is optional in an <b>addSellerProfile</b> or <b>setSellerProfile</b> request, and defaults to 'Flat'.
     *  <br><br>
     *  This field is always returned in each <b>domesticShippingPolicyInfoService</b> and <b>internationalShippingPolicyInfoService</b> container in an <b>addSellerProfile</b> <b>setSellerProfile</b>, or <b>getSellerProfiles</b> response.
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
     * This value indicates the shipping cost model used by the shipping service option. The two applicable values are 'Flat' and 'Calculated'. To verify that the shipping service supports calculated shipping, call <b>geteBayDetails</b>, using <b>ShipppingServiceDetails</b> as a <b>DetailName</b> value in the request, and then look at the <b>ShippingServiceDetails</b> container that corresponds to the specified shipping service option (see <b>ShippingServiceDetails.ShippingService</b>). One of the <b>ShippingServiceDetails.ServiceType</b> values in that same container should be 'Flat'.
     *  <br><br>
     *  This field is optional in an <b>addSellerProfile</b> or <b>setSellerProfile</b> request, and defaults to 'Flat'.
     *  <br><br>
     *  This field is always returned in each <b>domesticShippingPolicyInfoService</b> and <b>internationalShippingPolicyInfoService</b> container in an <b>addSellerProfile</b> <b>setSellerProfile</b>, or <b>getSellerProfiles</b> response.
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
     * Gets as sortOrderId
     *
     * This integer value controls the order (relative to other shipping service options) in which the corresponding shipping service option will appear in the View Item and Checkout pages.
     *  <br><br>
     *  Sellers can specify up to four domestic shipping services (in four separate <b>domesticShippingPolicyInfoService</b> containers), so valid values are 1, 2, 3, and 4. A shipping service option with a <b>sortOrderId</b> value of '1' appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a <b>sortOrderId</b> value of '4' appears at the bottom of a list of four shipping service options.
     *  <br><br>
     *  Sellers can specify up to five international shipping services (in five separate <b>internationalShippingPolicyInfoService</b> containers), so valid values are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the <b>sortOrderId</b> value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages.
     *  <br><br>
     *  If the <b>sortOrderId</b> field is not used, the order of domestic and international shipping service options will be determined by the order they are listed in the API call.
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
     * This integer value controls the order (relative to other shipping service options) in which the corresponding shipping service option will appear in the View Item and Checkout pages.
     *  <br><br>
     *  Sellers can specify up to four domestic shipping services (in four separate <b>domesticShippingPolicyInfoService</b> containers), so valid values are 1, 2, 3, and 4. A shipping service option with a <b>sortOrderId</b> value of '1' appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a <b>sortOrderId</b> value of '4' appears at the bottom of a list of four shipping service options.
     *  <br><br>
     *  Sellers can specify up to five international shipping services (in five separate <b>internationalShippingPolicyInfoService</b> containers), so valid values are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the <b>sortOrderId</b> value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages.
     *  <br><br>
     *  If the <b>sortOrderId</b> field is not used, the order of domestic and international shipping service options will be determined by the order they are listed in the API call.
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
     * This flag is used by the seller to offer free shipping to the buyer. This field can only be included and set to 'true' for the first specified domestic shipping service option (it is ignored if set for any other shipping service option). The first specified shipping service option either has a <b>sortOrderId</b> value of '1', or, if the <b>sortOrderId</b> field is not used, the shipping service option specified first in the API call. The <b>freeShipping</b> field is not applicable for <b>internationalShippingPolicyInfoService</b> containers.
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
     * This flag is used by the seller to offer free shipping to the buyer. This field can only be included and set to 'true' for the first specified domestic shipping service option (it is ignored if set for any other shipping service option). The first specified shipping service option either has a <b>sortOrderId</b> value of '1', or, if the <b>sortOrderId</b> field is not used, the shipping service option specified first in the API call. The <b>freeShipping</b> field is not applicable for <b>internationalShippingPolicyInfoService</b> containers.
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
     * This value indicates the Cash-on-Delivery fee that is due from the buyer upon item delivery. This field is only applicable if the buyer selects the 'COD' payment method and if the selected shipping service option suppports the Cash-on-Delivery option.
     *  <br><br>
     *  To see if a domestic shipping service option supports the Cash-on-Delivery option, call <b>GeteBayDetails</b>, including 'ShippingServiceDetails' as a <b>DetailName</b> value, and then look for a <b>CODService</b>=true flag for the corresponding shipping service.
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
     * This value indicates the Cash-on-Delivery fee that is due from the buyer upon item delivery. This field is only applicable if the buyer selects the 'COD' payment method and if the selected shipping service option suppports the Cash-on-Delivery option.
     *  <br><br>
     *  To see if a domestic shipping service option supports the Cash-on-Delivery option, call <b>GeteBayDetails</b>, including 'ShippingServiceDetails' as a <b>DetailName</b> value, and then look for a <b>CODService</b>=true flag for the corresponding shipping service.
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
     * This flag indicates whether or not a 'Get It Fast' shipping service option is available for the listing. 'Get It Fast' shipping is only available for fixed-price listings and auction listings with an active 'Buy It Now' option.
     *  <br><br>
     *  To enable 'Get It Fast' shippping for a listing, the seller must:
     *  <ul>
     *  <li>offer at least one domestic one-day shipping service option, such as USPS Express Mail, UPS Next Day Air, or FedEx Overnight;</li>
     *  <li>set the <b>shippingPolicyInfo.dispatchTimeMax</b> value to '0' (same-day shipping) or '1', which means that the seller is committing to ship the item within one business day after receiving payment from the buyer. </li>
     *  </ul>
     *  Although it is not required, it is recommended that sellers also offer an immediate payment option to the buyer, so they can get their item even faster. In the payment business policy, this option is turned on with the <b>paymentInfo.immediatePay</b> flag.<br/>
     *  The <b>fastShipping</b> field should only be included and set to 'true' in <b>domesticShippingPolicyInfoService</b> containers where the shipping service option is a one-day shipping service. The <b>fastShipping</b> field is not applicable for <b>internationalShippingPolicyInfoService</b> containers.
     *  <br><br>
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
     * This flag indicates whether or not a 'Get It Fast' shipping service option is available for the listing. 'Get It Fast' shipping is only available for fixed-price listings and auction listings with an active 'Buy It Now' option.
     *  <br><br>
     *  To enable 'Get It Fast' shippping for a listing, the seller must:
     *  <ul>
     *  <li>offer at least one domestic one-day shipping service option, such as USPS Express Mail, UPS Next Day Air, or FedEx Overnight;</li>
     *  <li>set the <b>shippingPolicyInfo.dispatchTimeMax</b> value to '0' (same-day shipping) or '1', which means that the seller is committing to ship the item within one business day after receiving payment from the buyer. </li>
     *  </ul>
     *  Although it is not required, it is recommended that sellers also offer an immediate payment option to the buyer, so they can get their item even faster. In the payment business policy, this option is turned on with the <b>paymentInfo.immediatePay</b> flag.<br/>
     *  The <b>fastShipping</b> field should only be included and set to 'true' in <b>domesticShippingPolicyInfoService</b> containers where the shipping service option is a one-day shipping service. The <b>fastShipping</b> field is not applicable for <b>internationalShippingPolicyInfoService</b> containers.
     *  <br><br>
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
     * This value sets the cost of shipping each additional item if the buyer purchases multiple identical items in a multi-quantity, fixed-price listing. This field is required for all multi-quantity, fixed-price listings where flat-rate shipping is used.
     *  <br><br>
     *  This value is at the seller's discretion. Generally, it should be the same price or lower than the <b>shippingServiceCost</b> value. The seller may consider specifying a lower price to ship additional items as an incentive to the buyer to purchase multiple items. The seller may also consider a lower price if he/she is able to ship multiple items in the same box. In this scenario, the seller is able to save on shipping costs and passes these savings down to the buyer.
     *  <br><br>
     *  The total shipping costs for an order line item is calculated with the following formula:
     *  <br><br>
     *  Total shipping costs = <b>shippingServiceCost</b> + (<b>shippingServiceAdditionalCost</b> * quantity purchased) <br><br>
     *  So, if a buyer purchases four identical items, and the seller has specified <b>shippingServiceCost</b> as $6.00 and <b>shippingServiceAdditionalCost</b> as $2.00, the total shipping cost for the order line item is $12.00 ($6.00 + ($2.00 * 3)).
     *  <br><br>
     *  This field is not applicable to calculated shipping.
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
     * This value sets the cost of shipping each additional item if the buyer purchases multiple identical items in a multi-quantity, fixed-price listing. This field is required for all multi-quantity, fixed-price listings where flat-rate shipping is used.
     *  <br><br>
     *  This value is at the seller's discretion. Generally, it should be the same price or lower than the <b>shippingServiceCost</b> value. The seller may consider specifying a lower price to ship additional items as an incentive to the buyer to purchase multiple items. The seller may also consider a lower price if he/she is able to ship multiple items in the same box. In this scenario, the seller is able to save on shipping costs and passes these savings down to the buyer.
     *  <br><br>
     *  The total shipping costs for an order line item is calculated with the following formula:
     *  <br><br>
     *  Total shipping costs = <b>shippingServiceCost</b> + (<b>shippingServiceAdditionalCost</b> * quantity purchased) <br><br>
     *  So, if a buyer purchases four identical items, and the seller has specified <b>shippingServiceCost</b> as $6.00 and <b>shippingServiceAdditionalCost</b> as $2.00, the total shipping cost for the order line item is $12.00 ($6.00 + ($2.00 * 3)).
     *  <br><br>
     *  This field is not applicable to calculated shipping.
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
     * This value sets the cost of shipping for the item if the buyer selects this shipping service option. This field is required in the input for all listings where flat-rate shipping is used, and is not applicable to calculated shipping. <br><br>
     *  This value is at the seller's discretion but should reflect the approximate cost of the shipping service option plus handling. This value defaults to '0.0' if the <b>freeShipping</b> field is set to 'true'.
     *  <br><br>
     *  The total shipping costs for an order line item is calculated with the following formula:
     *  <br><br>
     *  Total shipping costs = <b>shippingServiceCost</b> + (<b>shippingServiceAdditionalCost</b> * quantity purchased)
     *  <br><br>
     *  So, if a buyer purchases four identical items, and the seller has specified <b>shippingServiceCost</b> as $6.00 and <b>shippingServiceAdditionalCost</b> as $2.00, the total shipping cost for the order line item is $12.00 ($6.00 + ($2.00 * 3)).
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
     * This value sets the cost of shipping for the item if the buyer selects this shipping service option. This field is required in the input for all listings where flat-rate shipping is used, and is not applicable to calculated shipping. <br><br>
     *  This value is at the seller's discretion but should reflect the approximate cost of the shipping service option plus handling. This value defaults to '0.0' if the <b>freeShipping</b> field is set to 'true'.
     *  <br><br>
     *  The total shipping costs for an order line item is calculated with the following formula:
     *  <br><br>
     *  Total shipping costs = <b>shippingServiceCost</b> + (<b>shippingServiceAdditionalCost</b> * quantity purchased)
     *  <br><br>
     *  So, if a buyer purchases four identical items, and the seller has specified <b>shippingServiceCost</b> as $6.00 and <b>shippingServiceAdditionalCost</b> as $2.00, the total shipping cost for the order line item is $12.00 ($6.00 + ($2.00 * 3)).
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
     * An additional charge that US sellers can add to the cost of an order line item if that order line item is an eBay Motors Parts and Accessories item that is being shipped to a buyer in Alaska, Hawaii, or Puerto Rico through a UPS or FedEx shipping service that charges a surcharge to ship to those areas.
     *  <br><br>
     *  In order for sellers to add a shipping surcharge at the shipping service level, the following must be true:
     *  <ul>
     *  <li>a surcharge is applicable for the shipping service (call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingServiceDetails</b>, and then look for <b>ShippingServiceDetails.SurchargeApplicable=true</b> in the response;</li>
     *  <li>flat-rate shipping is used</li>
     *  </ul>
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
     * An additional charge that US sellers can add to the cost of an order line item if that order line item is an eBay Motors Parts and Accessories item that is being shipped to a buyer in Alaska, Hawaii, or Puerto Rico through a UPS or FedEx shipping service that charges a surcharge to ship to those areas.
     *  <br><br>
     *  In order for sellers to add a shipping surcharge at the shipping service level, the following must be true:
     *  <ul>
     *  <li>a surcharge is applicable for the shipping service (call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingServiceDetails</b>, and then look for <b>ShippingServiceDetails.SurchargeApplicable=true</b> in the response;</li>
     *  <li>flat-rate shipping is used</li>
     *  </ul>
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
     * Gets as shippingOverrideFee
     *
     * The dollar amount in this field represents the actual total price of shipping if the total shipping costs (<b>shippingServiceCost</b> + <b>shippingServiceAdditionalCost</b> + <b>shippingSurcharge</b>) set for the corresponding shipping service in the shipping policy are overridden through a <b>ShippingServiceCostOverride</b> container in an <b>AddItem</b> call (Trading).
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getShippingOverrideFee()
    {
        return $this->shippingOverrideFee;
    }

    /**
     * Sets a new shippingOverrideFee
     *
     * The dollar amount in this field represents the actual total price of shipping if the total shipping costs (<b>shippingServiceCost</b> + <b>shippingServiceAdditionalCost</b> + <b>shippingSurcharge</b>) set for the corresponding shipping service in the shipping policy are overridden through a <b>ShippingServiceCostOverride</b> container in an <b>AddItem</b> call (Trading).
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingOverrideFee
     * @return self
     */
    public function setShippingOverrideFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $shippingOverrideFee)
    {
        $this->shippingOverrideFee = $shippingOverrideFee;
        return $this;
    }

    /**
     * Gets as buyerResponsibleForShipping
     *
     * This field is only applicable to motor vehicle categories on eBay Motors (US and Canada).
     *  <br><br>
     *  If this field is included and set to 'true' (or omitted because the default value is 'true'), the buyer is responsible for the shipment/pickup of the motor vehicle. If this field is included and set to 'false', the seller should specify the vehicle shipping arrangements in the item description for the listing.
     *  <br><br>
     *  If the vehicle has bids or the listing ends within 12 hours, the seller cannot modify this flag.
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
     * This field is only applicable to motor vehicle categories on eBay Motors (US and Canada).
     *  <br><br>
     *  If this field is included and set to 'true' (or omitted because the default value is 'true'), the buyer is responsible for the shipment/pickup of the motor vehicle. If this field is included and set to 'false', the seller should specify the vehicle shipping arrangements in the item description for the listing.
     *  <br><br>
     *  If the vehicle has bids or the listing ends within 12 hours, the seller cannot modify this flag.
     *
     * @param bool $buyerResponsibleForShipping
     * @return self
     */
    public function setBuyerResponsibleForShipping($buyerResponsibleForShipping)
    {
        $this->buyerResponsibleForShipping = $buyerResponsibleForShipping;
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
        $value = $this->shipToLocation;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'shipToLocation', null, (string) $v);
            }
        }
        $value = $this->shippingService;
        if (null !== $value) {
            $writer->writeElementNs(null, 'shippingService', null, (string) $value);
        }
        $value = $this->shippingType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'shippingType', null, (string) $value);
        }
        $value = $this->sortOrderId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'sortOrderId', null, (string) $value);
        }
        $value = $this->freeShipping;
        if (null !== $value) {
            $writer->writeElementNs(null, 'freeShipping', null, ($value ? 'true' : 'false'));
        }
        $value = $this->codFee;
        if (null !== $value) {
            $writer->startElementNs(null, 'codFee', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->fastShipping;
        if (null !== $value) {
            $writer->writeElementNs(null, 'fastShipping', null, ($value ? 'true' : 'false'));
        }
        $value = $this->shippingServiceAdditionalCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'shippingServiceAdditionalCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shippingServiceCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'shippingServiceCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shippingSurcharge;
        if (null !== $value) {
            $writer->startElementNs(null, 'shippingSurcharge', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shippingOverrideFee;
        if (null !== $value) {
            $writer->startElementNs(null, 'shippingOverrideFee', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->buyerResponsibleForShipping;
        if (null !== $value) {
            $writer->writeElementNs(null, 'buyerResponsibleForShipping', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyServiceType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->shipToLocation = [];
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
                case 'shipToLocation':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shipToLocation[] = $value;
                    }
                    return true;
                case 'shippingService':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingService = $value;
                    }
                    return true;
                case 'shippingType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingType = $value;
                    }
                    return true;
                case 'sortOrderId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sortOrderId = (int) $value;
                    }
                    return true;
                case 'freeShipping':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->freeShipping = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'codFee':
                    $this->codFee = \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::xmlRead($reader);
                    return true;
                case 'fastShipping':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->fastShipping = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'shippingServiceAdditionalCost':
                    $this->shippingServiceAdditionalCost = \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::xmlRead($reader);
                    return true;
                case 'shippingServiceCost':
                    $this->shippingServiceCost = \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::xmlRead($reader);
                    return true;
                case 'shippingSurcharge':
                    $this->shippingSurcharge = \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::xmlRead($reader);
                    return true;
                case 'shippingOverrideFee':
                    $this->shippingOverrideFee = \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::xmlRead($reader);
                    return true;
                case 'buyerResponsibleForShipping':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerResponsibleForShipping = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
