<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PickupMethodSelectedType
 *
 * Type defining the <strong>PickupMethodSelected</strong> container, which consists of details related to the selected local pickup method ("Click and Collect"), including the pickup method, the merchant's store ID, the status of the pickup, and the pickup reference code (if provided by merchant).
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
 *  </span>
 * XSD Type: PickupMethodSelectedType
 */
class PickupMethodSelectedType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the local pickup method that was selected by the buyer at checkout. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Merchants must be eligible for the "Click and Collect" feature to list items eligible for this pickup method.
     *  </span>
     *
     * @var string $pickupMethod
     */
    private $pickupMethod = null;

    /**
     * The unique identifier of the merchant's store where the item will be picked up. The <strong>PickupStoreID</strong> is picked up by eBay based on the <strong>LocationID</strong> value that is set by the merchant in the <strong>Inventory Management API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer supported, this field applies to Click and Collect use in the Trading API.
     *  </span>
     *
     * @var string $pickupStoreID
     */
    private $pickupStoreID = null;

    /**
     * This field indicates the current status of the local pickup order. The value of the <strong>PickupStatus</strong> field can change during the lifecycle of the order based on the notifications that a merchant sends to eBay through the <strong>Inbound Notifications API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  A seller must be eligible for the "Click and Collect" feature to list an item eligible for this pickup method. At this time, the "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (site ID - 15), and eBay Germany (site ID - 77) sites.
     *  </span>
     *
     * @var string $pickupStatus
     */
    private $pickupStatus = null;

    /**
     * The unique reference number defined by the merchant to track local pickup orders. The <strong>MerchantPickupCode</strong> is picked up by eBay if it is set by the merchant through the payload of a notification sent to eBay through the <strong>Inbound Notifications API</strong>. This field is only returned with the <strong>PickupMethodSelected</strong> container if it is set by the merchant.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real reference number is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field may be returned as part of supported local pickup flows. The specific pickup flow is identified by the <strong>PickupMethod</strong> value in the <strong>PickupMethodSelected</strong> container.
     *  </span>
     *
     * @var string $merchantPickupCode
     */
    private $merchantPickupCode = null;

    /**
     * Timestamp indicating the date/time when the order is expected to be fulfilled by the merchant and available for pick up by the buyer.
     *
     * @var \DateTime $pickupFulfillmentTime
     */
    private $pickupFulfillmentTime = null;

    /**
     * The unique identifier of the merchant's store where the "Click and Collect" item will be picked up. This field will only be returned if supplied by the merchant.
     *
     * @var string $pickupLocationUUID
     */
    private $pickupLocationUUID = null;

    /**
     * Gets as pickupMethod
     *
     * This value indicates the local pickup method that was selected by the buyer at checkout. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Merchants must be eligible for the "Click and Collect" feature to list items eligible for this pickup method.
     *  </span>
     *
     * @return string
     */
    public function getPickupMethod()
    {
        return $this->pickupMethod;
    }

    /**
     * Sets a new pickupMethod
     *
     * This value indicates the local pickup method that was selected by the buyer at checkout. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Merchants must be eligible for the "Click and Collect" feature to list items eligible for this pickup method.
     *  </span>
     *
     * @param string $pickupMethod
     * @return self
     */
    public function setPickupMethod($pickupMethod)
    {
        $this->pickupMethod = $pickupMethod;
        return $this;
    }

    /**
     * Gets as pickupStoreID
     *
     * The unique identifier of the merchant's store where the item will be picked up. The <strong>PickupStoreID</strong> is picked up by eBay based on the <strong>LocationID</strong> value that is set by the merchant in the <strong>Inventory Management API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer supported, this field applies to Click and Collect use in the Trading API.
     *  </span>
     *
     * @return string
     */
    public function getPickupStoreID()
    {
        return $this->pickupStoreID;
    }

    /**
     * Sets a new pickupStoreID
     *
     * The unique identifier of the merchant's store where the item will be picked up. The <strong>PickupStoreID</strong> is picked up by eBay based on the <strong>LocationID</strong> value that is set by the merchant in the <strong>Inventory Management API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <span class="tablenote"><b>Note: </b>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer supported, this field applies to Click and Collect use in the Trading API.
     *  </span>
     *
     * @param string $pickupStoreID
     * @return self
     */
    public function setPickupStoreID($pickupStoreID)
    {
        $this->pickupStoreID = $pickupStoreID;
        return $this;
    }

    /**
     * Gets as pickupStatus
     *
     * This field indicates the current status of the local pickup order. The value of the <strong>PickupStatus</strong> field can change during the lifecycle of the order based on the notifications that a merchant sends to eBay through the <strong>Inbound Notifications API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  A seller must be eligible for the "Click and Collect" feature to list an item eligible for this pickup method. At this time, the "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (site ID - 15), and eBay Germany (site ID - 77) sites.
     *  </span>
     *
     * @return string
     */
    public function getPickupStatus()
    {
        return $this->pickupStatus;
    }

    /**
     * Sets a new pickupStatus
     *
     * This field indicates the current status of the local pickup order. The value of the <strong>PickupStatus</strong> field can change during the lifecycle of the order based on the notifications that a merchant sends to eBay through the <strong>Inbound Notifications API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  A seller must be eligible for the "Click and Collect" feature to list an item eligible for this pickup method. At this time, the "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (site ID - 15), and eBay Germany (site ID - 77) sites.
     *  </span>
     *
     * @param string $pickupStatus
     * @return self
     */
    public function setPickupStatus($pickupStatus)
    {
        $this->pickupStatus = $pickupStatus;
        return $this;
    }

    /**
     * Gets as merchantPickupCode
     *
     * The unique reference number defined by the merchant to track local pickup orders. The <strong>MerchantPickupCode</strong> is picked up by eBay if it is set by the merchant through the payload of a notification sent to eBay through the <strong>Inbound Notifications API</strong>. This field is only returned with the <strong>PickupMethodSelected</strong> container if it is set by the merchant.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real reference number is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field may be returned as part of supported local pickup flows. The specific pickup flow is identified by the <strong>PickupMethod</strong> value in the <strong>PickupMethodSelected</strong> container.
     *  </span>
     *
     * @return string
     */
    public function getMerchantPickupCode()
    {
        return $this->merchantPickupCode;
    }

    /**
     * Sets a new merchantPickupCode
     *
     * The unique reference number defined by the merchant to track local pickup orders. The <strong>MerchantPickupCode</strong> is picked up by eBay if it is set by the merchant through the payload of a notification sent to eBay through the <strong>Inbound Notifications API</strong>. This field is only returned with the <strong>PickupMethodSelected</strong> container if it is set by the merchant.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real reference number is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field may be returned as part of supported local pickup flows. The specific pickup flow is identified by the <strong>PickupMethod</strong> value in the <strong>PickupMethodSelected</strong> container.
     *  </span>
     *
     * @param string $merchantPickupCode
     * @return self
     */
    public function setMerchantPickupCode($merchantPickupCode)
    {
        $this->merchantPickupCode = $merchantPickupCode;
        return $this;
    }

    /**
     * Gets as pickupFulfillmentTime
     *
     * Timestamp indicating the date/time when the order is expected to be fulfilled by the merchant and available for pick up by the buyer.
     *
     * @return \DateTime
     */
    public function getPickupFulfillmentTime()
    {
        return $this->pickupFulfillmentTime;
    }

    /**
     * Sets a new pickupFulfillmentTime
     *
     * Timestamp indicating the date/time when the order is expected to be fulfilled by the merchant and available for pick up by the buyer.
     *
     * @param \DateTime $pickupFulfillmentTime
     * @return self
     */
    public function setPickupFulfillmentTime(\DateTime $pickupFulfillmentTime)
    {
        $this->pickupFulfillmentTime = $pickupFulfillmentTime;
        return $this;
    }

    /**
     * Gets as pickupLocationUUID
     *
     * The unique identifier of the merchant's store where the "Click and Collect" item will be picked up. This field will only be returned if supplied by the merchant.
     *
     * @return string
     */
    public function getPickupLocationUUID()
    {
        return $this->pickupLocationUUID;
    }

    /**
     * Sets a new pickupLocationUUID
     *
     * The unique identifier of the merchant's store where the "Click and Collect" item will be picked up. This field will only be returned if supplied by the merchant.
     *
     * @param string $pickupLocationUUID
     * @return self
     */
    public function setPickupLocationUUID($pickupLocationUUID)
    {
        $this->pickupLocationUUID = $pickupLocationUUID;
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
        $value = $this->getPickupMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupMethod", $value);
        }
        $value = $this->getPickupStoreID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupStoreID", $value);
        }
        $value = $this->getPickupStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupStatus", $value);
        }
        $value = $this->getMerchantPickupCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MerchantPickupCode", $value);
        }
        $value = $this->getPickupFulfillmentTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupFulfillmentTime", $value);
        }
        $value = $this->getPickupLocationUUID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupLocationUUID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PickupMethodSelectedType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupMethod');
        if (null !== $value) {
            $this->setPickupMethod($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupStoreID');
        if (null !== $value) {
            $this->setPickupStoreID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupStatus');
        if (null !== $value) {
            $this->setPickupStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MerchantPickupCode');
        if (null !== $value) {
            $this->setMerchantPickupCode($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupFulfillmentTime');
        if (null !== $value) {
            $this->setPickupFulfillmentTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupLocationUUID');
        if (null !== $value) {
            $this->setPickupLocationUUID($value);
        }
    }
}
