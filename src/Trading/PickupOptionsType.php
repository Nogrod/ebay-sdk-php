<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PickupOptionsType
 *
 * Type defining the <strong>PickupOptions</strong> container, which consists of a pickup method and the priority of the pickup method.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the Click and Collect feature can only be applied to multi-quantity, fixed-price listings.
 *  </span>
 * XSD Type: PickupOptionsType
 */
class PickupOptionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This value indicates an available pickup method. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> At this time, 'PickUpDropOff' is the only available pickup method; however, additional pickup methods may be added to the list in future releases.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
     *  </span>
     *
     * @var string $pickupMethod
     */
    private $pickupMethod = null;

    /**
     * This integer value indicates the priority of the pickup method. The priority of each pickup method controls the order (relative to other pickup methods) in which the corresponding pickup method will appear in the View Item and Checkout page. This field is always returned with the <strong>PickupOptions</strong> container.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect features to list an item that is eligible for Click and Collect. At this time, the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
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
     *  <strong>Note:</strong> At this time, 'PickUpDropOff' is the only available pickup method; however, additional pickup methods may be added to the list in future releases.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
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
     *  <strong>Note:</strong> At this time, 'PickUpDropOff' is the only available pickup method; however, additional pickup methods may be added to the list in future releases.
     *  </span>
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect feature to list an item that is eligible for Click and Collect. At this time, the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
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
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect features to list an item that is eligible for Click and Collect. At this time, the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
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
     *  <strong>Note:</strong> A seller must be eligible for the Click and Collect features to list an item that is eligible for Click and Collect. At this time, the 'Click and Collect' feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites.
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
        $value = $this->pickupMethod;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PickupMethod', null, (string) $value);
        }
        $value = $this->pickupPriority;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PickupPriority', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PickupOptionsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'PickupMethod':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pickupMethod = $value;
                    }
                    return true;
                case 'PickupPriority':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pickupPriority = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['PickupMethod'] = $this->pickupMethod;
        $data['PickupPriority'] = $this->pickupPriority;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
