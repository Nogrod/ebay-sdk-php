<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PickUpInStoreDetailsType
 *
 * Complex type defining the <b>PickupInStoreDetails</b> container, that is returned in <b>GetShippingCosts</b> if the listing is eligible for the In-Store Pickup or Click and Collect features, and additionally, if the In-Store Pickup/Click and Collect option is a possibility for the destination country/postal code specified in the request.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings.
 *  </span>
 * XSD Type: PickUpInStoreDetailsType
 */
class PickUpInStoreDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect features. A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item that is eligible for these features. At this time, the In-Store Pickup feature is generally only available to large retail merchants in the US, Canada, UK, Germany, and Australia, and the Click and Collect feature is generally only available to large retail merchants in the UK, Australia, and Germany. Both of these features can only be applied to multiple-quantity, fixed-price listings.
     *  <br/><br/>
     *  When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has the item.
     *
     * @var bool $eligibleForPickupInStore
     */
    private $eligibleForPickupInStore = null;

    /**
     * This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect feature (<b>EligibleForPickupInStore</b> returned as <code>true</code>), and the listing has inventory in a store near the destination country/postal code specified in the request. It is quite possible that the listing is eligible for In-Store Pickup/Click and Collect, but no stores near the specified destination has inventory, in which case, this field will return as <code>false</code>.
     *  <br/><br/>
     *  When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has the item.
     *
     * @var bool $availableForPickupInStore
     */
    private $availableForPickupInStore = null;

    /**
     * Gets as eligibleForPickupInStore
     *
     * This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect features. A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item that is eligible for these features. At this time, the In-Store Pickup feature is generally only available to large retail merchants in the US, Canada, UK, Germany, and Australia, and the Click and Collect feature is generally only available to large retail merchants in the UK, Australia, and Germany. Both of these features can only be applied to multiple-quantity, fixed-price listings.
     *  <br/><br/>
     *  When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has the item.
     *
     * @return bool
     */
    public function getEligibleForPickupInStore()
    {
        return $this->eligibleForPickupInStore;
    }

    /**
     * Sets a new eligibleForPickupInStore
     *
     * This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect features. A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item that is eligible for these features. At this time, the In-Store Pickup feature is generally only available to large retail merchants in the US, Canada, UK, Germany, and Australia, and the Click and Collect feature is generally only available to large retail merchants in the UK, Australia, and Germany. Both of these features can only be applied to multiple-quantity, fixed-price listings.
     *  <br/><br/>
     *  When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has the item.
     *
     * @param bool $eligibleForPickupInStore
     * @return self
     */
    public function setEligibleForPickupInStore($eligibleForPickupInStore)
    {
        $this->eligibleForPickupInStore = $eligibleForPickupInStore;
        return $this;
    }

    /**
     * Gets as availableForPickupInStore
     *
     * This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect feature (<b>EligibleForPickupInStore</b> returned as <code>true</code>), and the listing has inventory in a store near the destination country/postal code specified in the request. It is quite possible that the listing is eligible for In-Store Pickup/Click and Collect, but no stores near the specified destination has inventory, in which case, this field will return as <code>false</code>.
     *  <br/><br/>
     *  When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has the item.
     *
     * @return bool
     */
    public function getAvailableForPickupInStore()
    {
        return $this->availableForPickupInStore;
    }

    /**
     * Sets a new availableForPickupInStore
     *
     * This field is returned as <code>true</code> if the listing is eligible for In-Store Pickup or Click and Collect feature (<b>EligibleForPickupInStore</b> returned as <code>true</code>), and the listing has inventory in a store near the destination country/postal code specified in the request. It is quite possible that the listing is eligible for In-Store Pickup/Click and Collect, but no stores near the specified destination has inventory, in which case, this field will return as <code>false</code>.
     *  <br/><br/>
     *  When a seller is successful at listing an item with the In-Store Pickup/Click and Collect feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see an "available for pickup" option on the View Item page, along with information on the closest phsical store that has the item.
     *
     * @param bool $availableForPickupInStore
     * @return self
     */
    public function setAvailableForPickupInStore($availableForPickupInStore)
    {
        $this->availableForPickupInStore = $availableForPickupInStore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEligibleForPickupInStore();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleForPickupInStore", $value);
        }
        $value = $this->getAvailableForPickupInStore();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AvailableForPickupInStore", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForPickupInStore');
        if (null !== $value) {
            $this->setEligibleForPickupInStore(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AvailableForPickupInStore');
        if (null !== $value) {
            $this->setAvailableForPickupInStore(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
