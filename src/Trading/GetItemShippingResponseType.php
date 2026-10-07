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
        $value = $this->shippingDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShippingDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->pickUpInStoreDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'PickUpInStoreDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetItemShippingResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ShippingDetails':
                    $this->shippingDetails = \Nogrod\eBaySDK\Trading\ShippingDetailsType::xmlRead($reader);
                    return true;
                case 'PickUpInStoreDetails':
                    $this->pickUpInStoreDetails = \Nogrod\eBaySDK\Trading\PickupInStoreDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ShippingDetails'] = $this->shippingDetails;
        $data['PickUpInStoreDetails'] = $this->pickUpInStoreDetails;
        return $data;
    }
}
