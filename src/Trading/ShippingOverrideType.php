<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingOverrideType
 *
 * This type is reserved for internal or future use.
 * XSD Type: ShippingOverrideType
 */
class ShippingOverrideType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is reserved for internal or future use.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType[] $shippingServiceCostOverrideList
     */
    private $shippingServiceCostOverrideList = null;

    /**
     * This field is reserved for internal or future use.
     *
     * @var int $dispatchTimeMaxOverride
     */
    private $dispatchTimeMaxOverride = null;

    /**
     * Adds as shippingServiceCostOverride
     *
     * This field is reserved for internal or future use.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType $shippingServiceCostOverride
     */
    public function addToShippingServiceCostOverrideList(\Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType $shippingServiceCostOverride)
    {
        $this->shippingServiceCostOverrideList[] = $shippingServiceCostOverride;
        return $this;
    }

    /**
     * isset shippingServiceCostOverrideList
     *
     * This field is reserved for internal or future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServiceCostOverrideList($index)
    {
        return isset($this->shippingServiceCostOverrideList[$index]);
    }

    /**
     * unset shippingServiceCostOverrideList
     *
     * This field is reserved for internal or future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServiceCostOverrideList($index)
    {
        unset($this->shippingServiceCostOverrideList[$index]);
    }

    /**
     * Gets as shippingServiceCostOverrideList
     *
     * This field is reserved for internal or future use.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType[]
     */
    public function getShippingServiceCostOverrideList()
    {
        return $this->shippingServiceCostOverrideList;
    }

    /**
     * Sets a new shippingServiceCostOverrideList
     *
     * This field is reserved for internal or future use.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType[] $shippingServiceCostOverrideList
     * @return self
     */
    public function setShippingServiceCostOverrideList(array $shippingServiceCostOverrideList)
    {
        $this->shippingServiceCostOverrideList = $shippingServiceCostOverrideList;
        return $this;
    }

    /**
     * Gets as dispatchTimeMaxOverride
     *
     * This field is reserved for internal or future use.
     *
     * @return int
     */
    public function getDispatchTimeMaxOverride()
    {
        return $this->dispatchTimeMaxOverride;
    }

    /**
     * Sets a new dispatchTimeMaxOverride
     *
     * This field is reserved for internal or future use.
     *
     * @param int $dispatchTimeMaxOverride
     * @return self
     */
    public function setDispatchTimeMaxOverride($dispatchTimeMaxOverride)
    {
        $this->dispatchTimeMaxOverride = $dispatchTimeMaxOverride;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingServiceCostOverrideList();
        if (null !== $value && !empty($this->getShippingServiceCostOverrideList())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingServiceCostOverrideList", array_map(function ($v) {
                return ["ShippingServiceCostOverride" => $v];
            }, $value));
        }
        $value = $this->getDispatchTimeMaxOverride();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DispatchTimeMaxOverride", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCostOverrideList', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServiceCostOverrideList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DispatchTimeMaxOverride');
        if (null !== $value) {
            $this->setDispatchTimeMaxOverride($value);
        }
    }
}
