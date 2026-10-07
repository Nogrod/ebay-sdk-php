<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PickupDetailsType
 *
 * This type defines the <strong>PickupDetails</strong> container, which contains an array of <strong>PickupOptions</strong> containers. Each <strong>PickupOptions</strong> container consists of the pickup method and its priority.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Click and Collect is only applicable to the UK, Germany, and Australia sites.
 *  </span>
 * XSD Type: PickupDetailsType
 */
class PickupDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Click and Collect is only applicable to the UK, Germany, and Australia sites.
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions
     */
    public function addToPickupOptions(\Nogrod\eBaySDK\Trading\PickupOptionsType $pickupOptions)
    {
        if (!is_array($this->pickupOptions)) {
            throw new \LogicException('pickupOptions is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->pickupOptions[] = $pickupOptions;
        return $this;
    }

    /**
     * isset pickupOptions
     *
     * Container consisting of a pickup method and the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page.
     *  <br/><br/>
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Click and Collect is only applicable to the UK, Germany, and Australia sites.
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Click and Collect is only applicable to the UK, Germany, and Australia sites.
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\PickupOptionsType>
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
     *  This container is always returned prior to order payment if the seller created/revised/relisted the item with the <strong>EligibleForPickupDropOff</strong> flag in the call request set to 'true'. If and when the 'Click and Collect' pickup method (UK and Australia only) is selected by the buyer and payment for the order is made, this container will no longer be returned in the response, and will essentially be replaced by the <strong>PickupMethodSelected</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, the Click and Collect features are generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. Click and Collect is only applicable to the UK, Germany, and Australia sites.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\PickupOptionsType> $pickupOptions
     * @return self
     */
    public function setPickupOptions(iterable $pickupOptions)
    {
        $this->pickupOptions = $pickupOptions;
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
        $value = $this->pickupOptions;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'PickupOptions', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PickupDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->pickupOptions = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'PickupOptions':
                    $this->pickupOptions[] = \Nogrod\eBaySDK\Trading\PickupOptionsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
