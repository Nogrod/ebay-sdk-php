<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PickupOptionsType
 *
 * Type defining the <strong>PickupOptions</strong> container, which consists of a pickup method and the priority of the pickup method.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings.
 *  </span>
 * XSD Type: PickupOptionsType
 */
class PickupOptionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates an available pickup method. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, 'InStorePickup' and 'PickUpDropOff' are the only available pickup methods; however, additional pickup methods may be added to the list in future releases.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  </span>
     *
     * @var string $pickupMethod
     */
    private $pickupMethod = null;

    /**
     * This integer value indicates the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  </span>
     *
     * @var int $pickupPriority
     */
    private $pickupPriority = null;

    /**
     * Gets as pickupMethod
     *
     * This value indicates an available pickup method. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, 'InStorePickup' and 'PickUpDropOff' are the only available pickup methods; however, additional pickup methods may be added to the list in future releases.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
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
     * This value indicates an available pickup method. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, 'InStorePickup' and 'PickUpDropOff' are the only available pickup methods; however, additional pickup methods may be added to the list in future releases.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect feature to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
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
     * Gets as pickupPriority
     *
     * This integer value indicates the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  </span>
     *
     * @return int
     */
    public function getPickupPriority()
    {
        return $this->pickupPriority;
    }

    /**
     * Sets a new pickupPriority
     *
     * This integer value indicates the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click and Collect features to list an item that is eligible for In-Store Pickup or Click and Collect. At this time, In-Store Pickup is generally only available to large retail merchants in US, and the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  </span>
     *
     * @param int $pickupPriority
     * @return self
     */
    public function setPickupPriority($pickupPriority)
    {
        $this->pickupPriority = $pickupPriority;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPickupMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupMethod", $value);
        }
        $value = $this->getPickupPriority();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PickupPriority", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupMethod');
        if (null !== $value) {
            $this->setPickupMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupPriority');
        if (null !== $value) {
            $this->setPickupPriority($value);
        }
    }
}
