<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MultiLegShipmentType
 *
 * This type provides information about the shipping service, cost, address, and delivery estimates for the domestic leg of a Global Shipping Program shipment. This type is only applicable for international shipments using the GSP program.
 * XSD Type: MultiLegShipmentType
 */
class MultiLegShipmentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MultiLegShippingServiceType $shippingServiceDetails
     */
    private $shippingServiceDetails = null;

    /**
     * Contains shipping address information for the domestic leg of a Global Shipping Program shipment. This container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique identifier for the order.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $shipToAddress
     */
    private $shipToAddress = null;

    /**
     * The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @var int $shippingTimeMin
     */
    private $shippingTimeMin = null;

    /**
     * The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @var int $shippingTimeMax
     */
    private $shippingTimeMax = null;

    /**
     * Gets as shippingServiceDetails
     *
     * Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MultiLegShippingServiceType
     */
    public function getShippingServiceDetails()
    {
        return $this->shippingServiceDetails;
    }

    /**
     * Sets a new shippingServiceDetails
     *
     * Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MultiLegShippingServiceType $shippingServiceDetails
     * @return self
     */
    public function setShippingServiceDetails(\Nogrod\eBaySDK\MerchantData\MultiLegShippingServiceType $shippingServiceDetails)
    {
        $this->shippingServiceDetails = $shippingServiceDetails;
        return $this;
    }

    /**
     * Gets as shipToAddress
     *
     * Contains shipping address information for the domestic leg of a Global Shipping Program shipment. This container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique identifier for the order.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * Sets a new shipToAddress
     *
     * Contains shipping address information for the domestic leg of a Global Shipping Program shipment. This container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique identifier for the order.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $shipToAddress
     * @return self
     */
    public function setShipToAddress(\Nogrod\eBaySDK\MerchantData\AddressType $shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }

    /**
     * Gets as shippingTimeMin
     *
     * The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
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
     * The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic shipping partner.
     *  <br><br>
     *  This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     *
     * @param int $shippingTimeMax
     * @return self
     */
    public function setShippingTimeMax($shippingTimeMax)
    {
        $this->shippingTimeMax = $shippingTimeMax;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingServiceDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceDetails", $value);
        }
        $value = $this->getShipToAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipToAddress", $value);
        }
        $value = $this->getShippingTimeMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTimeMin", $value);
        }
        $value = $this->getShippingTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTimeMax", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceDetails');
        if (null !== $value) {
            $this->setShippingServiceDetails(\Nogrod\eBaySDK\MerchantData\MultiLegShippingServiceType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipToAddress');
        if (null !== $value) {
            $this->setShipToAddress(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTimeMin');
        if (null !== $value) {
            $this->setShippingTimeMin($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTimeMax');
        if (null !== $value) {
            $this->setShippingTimeMax($value);
        }
    }
}
