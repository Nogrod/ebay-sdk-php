<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemShippingResponseType
 *
 * This is the base response type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller has offered with the listing.
 * XSD Type: GetItemShippingResponseType
 */
class GetItemShippingResponseType extends AbstractResponseType
{
    /**
     * This container will be returned if at least one domestic or international shipping service option is available for the item. A <b>ShippingServiceOptions</b> (for domestic shipping) and/or an <b>InternationalShippingServiceOptions</b> container (for international shipping) is returned for each available calculated shipping service option. These shipping service option containers consists of estimated shipping cost and estimated shipping times.
     *  <br>
     *  <br>
     *  Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in <b>ShippingRateErrorMessage</b>. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails
     */
    private $shippingDetails = null;

    /**
     * <span class="tablenote"><b>Note: </b>
     *  BOPIS (Buy Online, Pick Up In Store) is no longer supported. This container remains relevant for Click and Collect-related fields in the Trading API.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupInStoreDetailsType $pickUpInStoreDetails
     */
    private $pickUpInStoreDetails = null;

    /**
     * Gets as shippingDetails
     *
     * This container will be returned if at least one domestic or international shipping service option is available for the item. A <b>ShippingServiceOptions</b> (for domestic shipping) and/or an <b>InternationalShippingServiceOptions</b> container (for international shipping) is returned for each available calculated shipping service option. These shipping service option containers consists of estimated shipping cost and estimated shipping times.
     *  <br>
     *  <br>
     *  Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in <b>ShippingRateErrorMessage</b>. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingDetailsType
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * Sets a new shippingDetails
     *
     * This container will be returned if at least one domestic or international shipping service option is available for the item. A <b>ShippingServiceOptions</b> (for domestic shipping) and/or an <b>InternationalShippingServiceOptions</b> container (for international shipping) is returned for each available calculated shipping service option. These shipping service option containers consists of estimated shipping cost and estimated shipping times.
     *  <br>
     *  <br>
     *  Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in <b>ShippingRateErrorMessage</b>. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails
     * @return self
     */
    public function setShippingDetails(\Nogrod\eBaySDK\Trading\ShippingDetailsType $shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
        return $this;
    }

    /**
     * Gets as pickUpInStoreDetails
     *
     * <span class="tablenote"><b>Note: </b>
     *  BOPIS (Buy Online, Pick Up In Store) is no longer supported. This container remains relevant for Click and Collect-related fields in the Trading API.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\PickupInStoreDetailsType
     */
    public function getPickUpInStoreDetails()
    {
        return $this->pickUpInStoreDetails;
    }

    /**
     * Sets a new pickUpInStoreDetails
     *
     * <span class="tablenote"><b>Note: </b>
     *  BOPIS (Buy Online, Pick Up In Store) is no longer supported. This container remains relevant for Click and Collect-related fields in the Trading API.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PickupInStoreDetailsType $pickUpInStoreDetails
     * @return self
     */
    public function setPickUpInStoreDetails(\Nogrod\eBaySDK\Trading\PickupInStoreDetailsType $pickUpInStoreDetails)
    {
        $this->pickUpInStoreDetails = $pickUpInStoreDetails;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->getShippingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDetails", $value);
        }
        $value = $this->getPickUpInStoreDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickUpInStoreDetails", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetItemShippingResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDetails');
        if (null !== $value) {
            $this->setShippingDetails(\Nogrod\eBaySDK\Trading\ShippingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickUpInStoreDetails');
        if (null !== $value) {
            $this->setPickUpInStoreDetails(\Nogrod\eBaySDK\Trading\PickupInStoreDetailsType::fromKeyValue($value));
        }
    }
}
