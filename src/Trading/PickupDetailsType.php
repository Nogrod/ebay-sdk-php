<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PickupDetailsType
 *
 * This type defines the <strong>PickupDetails</strong> container, which contains an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites.
 *  </span>
 * XSD Type: PickupDetailsType
 */
class PickupDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PickupOptionsType[] $pickupOptions
     */
    private $pickupOptions = [

    ];

    /**
     * Adds as pickupOptions
     *
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions
     */
    public function addToPickupOptions(\Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions)
    {
        $this->pickupOptions[] = $pickupOptions;
        return $this;
    }

    /**
     * isset pickupOptions
     *
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickupOptions($index)
    {
        return isset($this->pickupOptions[$index]);
    }

    /**
     * unset pickupOptions
     *
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickupOptions($index)
    {
        unset($this->pickupOptions[$index]);
    }

    /**
     * Gets as pickupOptions
     *
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\PickupOptionsType[]
     */
    public function getPickupOptions()
    {
        return $this->pickupOptions;
    }

    /**
     * Sets a new pickupOptions
     *
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupInStore</strong> and/or <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the In-Store pickup method (US only) or 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the In-Store Pickup and Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. In-Store Pickup is only applicable to the US site, and Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PickupOptionsType[] $pickupOptions
     * @return self
     */
    public function setPickupOptions(array $pickupOptions)
    {
        $this->pickupOptions = $pickupOptions;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPickupOptions();
        if (null !== $value && !empty($this->getPickupOptions())) {
            $writer->write(array_map(function ($v) {return ["PickupOptions" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PickupOptions');
        if (null !== $value) {
            $this->setPickupOptions(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\PickupOptionsType::fromKeyValue($v);}, $value));
        }
    }
}
