<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing DeliveryEstimateMetaInfoType
 *
 * This info structure is populated with data specific
 *  to a particular algorithm that is used.
 * XSD Type: DeliveryEstimateMetaInfo
 */
class DeliveryEstimateMetaInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Possible values are:
     *  ExternalId
     *  ItemId
     *  SellerId
     *  BuyerId
     *  SGuid
     *  PGuid
     *  TransactionId
     *
     * @var string $key
     */
    private $key = null;

    /**
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as key
     *
     * Possible values are:
     *  ExternalId
     *  ItemId
     *  SellerId
     *  BuyerId
     *  SGuid
     *  PGuid
     *  TransactionId
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * Possible values are:
     *  ExternalId
     *  ItemId
     *  SellerId
     *  BuyerId
     *  SGuid
     *  PGuid
     *  TransactionId
     *
     * @param string $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getKey();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}key", $value);
        }
        $value = $this->getValue();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}value", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}key');
        if (null !== $value) {
            $this->setKey($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}value');
        if (null !== $value) {
            $this->setValue($value);
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
