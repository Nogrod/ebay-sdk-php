<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingEstimatedDeliveryInfoType
 *
 * This type is not currently in use.
 * XSD Type: ShippingEstimatedDeliveryInfoType
 */
class ShippingEstimatedDeliveryInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is not currently in use.
     *
     * @var \DateTime $originalDeliveryEstimatedTimeMin
     */
    private $originalDeliveryEstimatedTimeMin = null;

    /**
     * This field is not currently in use.
     *
     * @var \DateTime $originalDeliveryEstimatedTimeMax
     */
    private $originalDeliveryEstimatedTimeMax = null;

    /**
     * Gets as originalDeliveryEstimatedTimeMin
     *
     * This field is not currently in use.
     *
     * @return \DateTime
     */
    public function getOriginalDeliveryEstimatedTimeMin()
    {
        return $this->originalDeliveryEstimatedTimeMin;
    }

    /**
     * Sets a new originalDeliveryEstimatedTimeMin
     *
     * This field is not currently in use.
     *
     * @param \DateTime $originalDeliveryEstimatedTimeMin
     * @return self
     */
    public function setOriginalDeliveryEstimatedTimeMin(\DateTime $originalDeliveryEstimatedTimeMin)
    {
        $this->originalDeliveryEstimatedTimeMin = $originalDeliveryEstimatedTimeMin;
        return $this;
    }

    /**
     * Gets as originalDeliveryEstimatedTimeMax
     *
     * This field is not currently in use.
     *
     * @return \DateTime
     */
    public function getOriginalDeliveryEstimatedTimeMax()
    {
        return $this->originalDeliveryEstimatedTimeMax;
    }

    /**
     * Sets a new originalDeliveryEstimatedTimeMax
     *
     * This field is not currently in use.
     *
     * @param \DateTime $originalDeliveryEstimatedTimeMax
     * @return self
     */
    public function setOriginalDeliveryEstimatedTimeMax(\DateTime $originalDeliveryEstimatedTimeMax)
    {
        $this->originalDeliveryEstimatedTimeMax = $originalDeliveryEstimatedTimeMax;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOriginalDeliveryEstimatedTimeMin();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalDeliveryEstimatedTimeMin", $value);
        }
        $value = $this->getOriginalDeliveryEstimatedTimeMax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalDeliveryEstimatedTimeMax", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalDeliveryEstimatedTimeMin');
        if (null !== $value) {
            $this->setOriginalDeliveryEstimatedTimeMin(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalDeliveryEstimatedTimeMax');
        if (null !== $value) {
            $this->setOriginalDeliveryEstimatedTimeMax(new \DateTime($value));
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
