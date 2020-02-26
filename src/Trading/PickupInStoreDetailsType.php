<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PickupInStoreDetailsType
 *
 * Complex type defining the <b>PickupInStoreDetails</b> container, that is used in Add/Revise/Relist calls to enable the listing for In-Store Pickup or Click and Collect.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces, and can only be applied to multiple-quantity, fixed-price listings. The Click and Collect feature is only available to large merchants on the UK, Australia, and Germany marketplaces.
 *  </span>
 * XSD Type: PickupInStoreDetailsType
 */
class PickupInStoreDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <b>For Add/Revise/Relist/Verify calls</b>: this field is included to enable the listing for In-Store Pickup. To enable the listing for In-Store Pickup, the seller includes this boolean field and sets its value to <code>true</code>. In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces. The In-Store Pickup feature can only be applied to multiple-quantity, fixed-price listings.
     *  <br/><br/>
     *  In addition to setting the <b>EligibleForPickupInStore</b> boolean field to <code>true</code>, the merchant must also perform the following actions in an <b>Add/Revise/Relist/Verify</b> call to enable the In-Store Pickup option on a multiple-quantity, fixed-price listing:
     *  <ul>
     *  <li>Have inventory for the product at one or more physical stores tied to the seller's account. By using the REST-based <b>Inventory API</b>, sellers can associate physical stores to their account by using the <b>Create Inventory Location</b> call, and then, using the <b>Create Inventory Item</b> call, they can add inventory to specific stores;</li>
     *  <li>Include the seller-defined SKU value of the product(s) in the call request. For a single-variation listing, the SKU value would be specified in the <b>Item.SKU</b> field, and for a multiple-variation listing, the SKU value(s) would be specified in the <b>Item.Variations.Variation.SKU</b> field(s);</li>
     *  <li>Set an immediate payment requirement on the item.
     *  </li>
     *  </ul>
     *  When a seller is successful at listing an item with the In-Store Pickup feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see the "Available for In-Store Pickup" option on the listing, along with information on the closest store that has the item.
     *  <br/><br/>
     *  This field is returned in the 'Get' calls if the listing is enabled with the In-Store Pickup feature.
     *
     * @var bool $eligibleForPickupInStore
     */
    private $eligibleForPickupInStore = null;

    /**
     * For sellers opted in to Click and Collect, this field was once used to set Click and Collect eligibility at the listing level. However, now the seller can only opt in to Click and Collect at the account level, and then each of their listings will be automatically evaluated by eBay for Click and Collect eligibility.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is actually available for the Click and Collect fulfillment method. Instead, the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the listing actually has inventory that is available for pickup via the Click and Collect fulfillment method.
     *  </span>
     *
     * @var bool $eligibleForPickupDropOff
     */
    private $eligibleForPickupDropOff = null;

    /**
     * Gets as eligibleForPickupInStore
     *
     * <b>For Add/Revise/Relist/Verify calls</b>: this field is included to enable the listing for In-Store Pickup. To enable the listing for In-Store Pickup, the seller includes this boolean field and sets its value to <code>true</code>. In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces. The In-Store Pickup feature can only be applied to multiple-quantity, fixed-price listings.
     *  <br/><br/>
     *  In addition to setting the <b>EligibleForPickupInStore</b> boolean field to <code>true</code>, the merchant must also perform the following actions in an <b>Add/Revise/Relist/Verify</b> call to enable the In-Store Pickup option on a multiple-quantity, fixed-price listing:
     *  <ul>
     *  <li>Have inventory for the product at one or more physical stores tied to the seller's account. By using the REST-based <b>Inventory API</b>, sellers can associate physical stores to their account by using the <b>Create Inventory Location</b> call, and then, using the <b>Create Inventory Item</b> call, they can add inventory to specific stores;</li>
     *  <li>Include the seller-defined SKU value of the product(s) in the call request. For a single-variation listing, the SKU value would be specified in the <b>Item.SKU</b> field, and for a multiple-variation listing, the SKU value(s) would be specified in the <b>Item.Variations.Variation.SKU</b> field(s);</li>
     *  <li>Set an immediate payment requirement on the item.
     *  </li>
     *  </ul>
     *  When a seller is successful at listing an item with the In-Store Pickup feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see the "Available for In-Store Pickup" option on the listing, along with information on the closest store that has the item.
     *  <br/><br/>
     *  This field is returned in the 'Get' calls if the listing is enabled with the In-Store Pickup feature.
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
     * <b>For Add/Revise/Relist/Verify calls</b>: this field is included to enable the listing for In-Store Pickup. To enable the listing for In-Store Pickup, the seller includes this boolean field and sets its value to <code>true</code>. In-Store Pickup as a fulfillment method is only available to a limited number of large retail merchants in the US, Canada, UK, Germany, and Australia marketplaces. The In-Store Pickup feature can only be applied to multiple-quantity, fixed-price listings.
     *  <br/><br/>
     *  In addition to setting the <b>EligibleForPickupInStore</b> boolean field to <code>true</code>, the merchant must also perform the following actions in an <b>Add/Revise/Relist/Verify</b> call to enable the In-Store Pickup option on a multiple-quantity, fixed-price listing:
     *  <ul>
     *  <li>Have inventory for the product at one or more physical stores tied to the seller's account. By using the REST-based <b>Inventory API</b>, sellers can associate physical stores to their account by using the <b>Create Inventory Location</b> call, and then, using the <b>Create Inventory Item</b> call, they can add inventory to specific stores;</li>
     *  <li>Include the seller-defined SKU value of the product(s) in the call request. For a single-variation listing, the SKU value would be specified in the <b>Item.SKU</b> field, and for a multiple-variation listing, the SKU value(s) would be specified in the <b>Item.Variations.Variation.SKU</b> field(s);</li>
     *  <li>Set an immediate payment requirement on the item.
     *  </li>
     *  </ul>
     *  When a seller is successful at listing an item with the In-Store Pickup feature enabled, prospective buyers within a reasonable distance (25 miles or so) from one of the seller's stores (that has stock available) will see the "Available for In-Store Pickup" option on the listing, along with information on the closest store that has the item.
     *  <br/><br/>
     *  This field is returned in the 'Get' calls if the listing is enabled with the In-Store Pickup feature.
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
     * Gets as eligibleForPickupDropOff
     *
     * For sellers opted in to Click and Collect, this field was once used to set Click and Collect eligibility at the listing level. However, now the seller can only opt in to Click and Collect at the account level, and then each of their listings will be automatically evaluated by eBay for Click and Collect eligibility.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is actually available for the Click and Collect fulfillment method. Instead, the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the listing actually has inventory that is available for pickup via the Click and Collect fulfillment method.
     *  </span>
     *
     * @return bool
     */
    public function getEligibleForPickupDropOff()
    {
        return $this->eligibleForPickupDropOff;
    }

    /**
     * Sets a new eligibleForPickupDropOff
     *
     * For sellers opted in to Click and Collect, this field was once used to set Click and Collect eligibility at the listing level. However, now the seller can only opt in to Click and Collect at the account level, and then each of their listings will be automatically evaluated by eBay for Click and Collect eligibility.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b> Until this field is fully deprecated in the Trading WSDL (and in Add/Revise/Relist/Verify calls), it can still be used, but it will have no functional affect. However, if set in an Add/Revise/Relist/Verify call, it will get returned in <b>GetItem</b>, but it won't be a true indicator if the item is actually available for the Click and Collect fulfillment method. Instead, the <b>Item.AvailableForPickupDropOff</b> field should be referenced to see if the listing actually has inventory that is available for pickup via the Click and Collect fulfillment method.
     *  </span>
     *
     * @param bool $eligibleForPickupDropOff
     * @return self
     */
    public function setEligibleForPickupDropOff($eligibleForPickupDropOff)
    {
        $this->eligibleForPickupDropOff = $eligibleForPickupDropOff;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEligibleForPickupInStore();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleForPickupInStore", $value);
        }
        $value = $this->getEligibleForPickupDropOff();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleForPickupDropOff", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForPickupInStore');
        if (null !== $value) {
            $this->setEligibleForPickupInStore($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForPickupDropOff');
        if (null !== $value) {
            $this->setEligibleForPickupDropOff($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
