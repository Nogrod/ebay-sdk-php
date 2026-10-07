<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PickupInStoreDetailsType
 *
 * Complex type defining the <b>PickupInStoreDetails</b> container, that is used in Add/Revise/Relist calls to enable the listing for Click and Collect.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the Click and Collect feature is only available to large merchants on the UK, Australia, and Germany marketplaces.
 *  </span>
 * XSD Type: PickupInStoreDetailsType
 */
class PickupInStoreDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote">
     *  <strong>Note:</strong> BOPIS (Buy Online, Pick Up In Store) is no longer supported. This field is deprecated and should no longer be used.
     *  </span>
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
     * <span class="tablenote">
     *  <strong>Note:</strong> BOPIS (Buy Online, Pick Up In Store) is no longer supported. This field is deprecated and should no longer be used.
     *  </span>
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
     * <span class="tablenote">
     *  <strong>Note:</strong> BOPIS (Buy Online, Pick Up In Store) is no longer supported. This field is deprecated and should no longer be used.
     *  </span>
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
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

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PickupInStoreDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForPickupInStore');
        if (null !== $value) {
            $this->setEligibleForPickupInStore(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForPickupDropOff');
        if (null !== $value) {
            $this->setEligibleForPickupDropOff(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
