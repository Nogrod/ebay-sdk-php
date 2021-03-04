<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetShippingCostsResponseType
 *
 * The base response type of the <b>GetShippingCosts</b> call.
 * XSD Type: GetShippingCostsResponseType
 */
class GetShippingCostsResponseType extends AbstractResponseType
{
    /**
     * This container consists of shipping details related to the specified item and specified shipping destination. This container is only
     *  returned if the <b>IncludeDetails</b> field is included and set to <code>true</code> in the call request. If the specified shipping destination is a domestic location, one or more <b>ShippingServiceOption</b> containers are returned - one for each available shipping service option. If the specified shipping destination is an international location, one or more <b>InternationalShippingServiceOption</b> containers are returned - one for each available shipping service option.
     *  <br>
     *  <br>
     *  The available domestic and international shipping service options will contain details such as shipping service name, shipping cost, ship-to locations, and estimated delivery window (which is based on the seller's stated handling time plus the expected shipping time of the shipping service).
     *
     * @var \Nogrod\eBaySDK\Shopping\ShippingDetailsType $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * This container returns a few details of the lowest-priced shipping service option that is available to the shipping destination specified in the call request. For Calculated shipping, the item's location and the destination location are considered when calculating the shipping cost.
     *  <br>
     *  <br>
     *  <span class="tablenote">
     *  <strong>Important:</strong> To retrieve detailed information on every shipping service option available to the specified shipping destination, the user must include the <b>IncludeDetails</b> boolean field in the call request, and set its value to <code>true</code>. Shipping details on one or more available domestic shipping service options can be found in the <b>ShippingDetails.ShippingServiceOption</b> container(s), and shipping details on one or more available international shipping service options can be found in the <b>ShippingDetails.InternationalShippingServiceOption</b> container(s).
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary
     */
    private $shippingCostSummary = null;

    /**
     * This container is only returned in <b>GetShippingCosts</b> if In-Store Pickup is available for the listing.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup feature is only available to a limited number of large retail merchants in the US, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\PickUpInStoreDetailsType $pickUpInStoreDetails
     */
    private $pickUpInStoreDetails = null;

    /**
     * Gets as shippingDetails
     *
     * This container consists of shipping details related to the specified item and specified shipping destination. This container is only
     *  returned if the <b>IncludeDetails</b> field is included and set to <code>true</code> in the call request. If the specified shipping destination is a domestic location, one or more <b>ShippingServiceOption</b> containers are returned - one for each available shipping service option. If the specified shipping destination is an international location, one or more <b>InternationalShippingServiceOption</b> containers are returned - one for each available shipping service option.
     *  <br>
     *  <br>
     *  The available domestic and international shipping service options will contain details such as shipping service name, shipping cost, ship-to locations, and estimated delivery window (which is based on the seller's stated handling time plus the expected shipping time of the shipping service).
     *
     * @return \Nogrod\eBaySDK\Shopping\ShippingDetailsType
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * Sets a new shippingDetails
     *
     * This container consists of shipping details related to the specified item and specified shipping destination. This container is only
     *  returned if the <b>IncludeDetails</b> field is included and set to <code>true</code> in the call request. If the specified shipping destination is a domestic location, one or more <b>ShippingServiceOption</b> containers are returned - one for each available shipping service option. If the specified shipping destination is an international location, one or more <b>InternationalShippingServiceOption</b> containers are returned - one for each available shipping service option.
     *  <br>
     *  <br>
     *  The available domestic and international shipping service options will contain details such as shipping service name, shipping cost, ship-to locations, and estimated delivery window (which is based on the seller's stated handling time plus the expected shipping time of the shipping service).
     *
     * @param \Nogrod\eBaySDK\Shopping\ShippingDetailsType $shippingDetails
     * @return self
     */
    public function setShippingDetails(\Nogrod\eBaySDK\Shopping\ShippingDetailsType $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * Gets as shippingCostSummary
     *
     * This container returns a few details of the lowest-priced shipping service option that is available to the shipping destination specified in the call request. For Calculated shipping, the item's location and the destination location are considered when calculating the shipping cost.
     *  <br>
     *  <br>
     *  <span class="tablenote">
     *  <strong>Important:</strong> To retrieve detailed information on every shipping service option available to the specified shipping destination, the user must include the <b>IncludeDetails</b> boolean field in the call request, and set its value to <code>true</code>. Shipping details on one or more available domestic shipping service options can be found in the <b>ShippingDetails.ShippingServiceOption</b> container(s), and shipping details on one or more available international shipping service options can be found in the <b>ShippingDetails.InternationalShippingServiceOption</b> container(s).
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType
     */
    public function getShippingCostSummary()
    {
        return $this->shippingCostSummary;
    }

    /**
     * Sets a new shippingCostSummary
     *
     * This container returns a few details of the lowest-priced shipping service option that is available to the shipping destination specified in the call request. For Calculated shipping, the item's location and the destination location are considered when calculating the shipping cost.
     *  <br>
     *  <br>
     *  <span class="tablenote">
     *  <strong>Important:</strong> To retrieve detailed information on every shipping service option available to the specified shipping destination, the user must include the <b>IncludeDetails</b> boolean field in the call request, and set its value to <code>true</code>. Shipping details on one or more available domestic shipping service options can be found in the <b>ShippingDetails.ShippingServiceOption</b> container(s), and shipping details on one or more available international shipping service options can be found in the <b>ShippingDetails.InternationalShippingServiceOption</b> container(s).
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary
     * @return self
     */
    public function setShippingCostSummary(\Nogrod\eBaySDK\Shopping\ShippingCostSummaryType $shippingCostSummary)
    {
        $this->shippingCostSummary = $shippingCostSummary;
        return $this;
    }

    /**
     * Gets as pickUpInStoreDetails
     *
     * This container is only returned in <b>GetShippingCosts</b> if In-Store Pickup is available for the listing.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup feature is only available to a limited number of large retail merchants in the US, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\PickUpInStoreDetailsType
     */
    public function getPickUpInStoreDetails()
    {
        return $this->pickUpInStoreDetails;
    }

    /**
     * Sets a new pickUpInStoreDetails
     *
     * This container is only returned in <b>GetShippingCosts</b> if In-Store Pickup is available for the listing.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> The In-Store Pickup feature is only available to a limited number of large retail merchants in the US, and can only be applied to multiple-quantity, fixed-price listings.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\PickUpInStoreDetailsType $pickUpInStoreDetails
     * @return self
     */
    public function setPickUpInStoreDetails(\Nogrod\eBaySDK\Shopping\PickUpInStoreDetailsType $pickUpInStoreDetails)
    {
        $this->pickUpInStoreDetails = $pickUpInStoreDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getShippingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDetails", $value);
        }
        $value = $this->getShippingCostSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCostSummary", $value);
        }
        $value = $this->getPickUpInStoreDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickUpInStoreDetails", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDetails');
        if (null !== $value) {
            $this->setShippingDetails(\Nogrod\eBaySDK\Shopping\ShippingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostSummary');
        if (null !== $value) {
            $this->setShippingCostSummary(\Nogrod\eBaySDK\Shopping\ShippingCostSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickUpInStoreDetails');
        if (null !== $value) {
            $this->setPickUpInStoreDetails(\Nogrod\eBaySDK\Shopping\PickUpInStoreDetailsType::fromKeyValue($value));
        }
    }
}
