<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryEstimateMetaInfoType
 *
 * Type that defines the <b>deliveryEstimateMetaInfo</b> container, which consists of the entity and its value on which the item delivery estimates are based.
 * XSD Type: DeliveryEstimateMetaInfo
 */
class DeliveryEstimateMetaInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The entity that item delivery estimates are based on. Valid entities include:
     *  <ul>
     *  <li>ExternalID</li>
     *  <li>ItemID</li>
     *  <li>SellerID</li>
     *  <li>BuyerID</li>
     *  <li>SGuid</li>
     *  <li>PGuid</li>
     *  <li>TransactionID</li>
     *  </ul>
     *
     * @var string $key
     */
    private $key = null;

    /**
     * This value corresponds to the value in the <b>key</b> field and identifies the instance of that entity.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as key
     *
     * The entity that item delivery estimates are based on. Valid entities include:
     *  <ul>
     *  <li>ExternalID</li>
     *  <li>ItemID</li>
     *  <li>SellerID</li>
     *  <li>BuyerID</li>
     *  <li>SGuid</li>
     *  <li>PGuid</li>
     *  <li>TransactionID</li>
     *  </ul>
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
     * The entity that item delivery estimates are based on. Valid entities include:
     *  <ul>
     *  <li>ExternalID</li>
     *  <li>ItemID</li>
     *  <li>SellerID</li>
     *  <li>BuyerID</li>
     *  <li>SGuid</li>
     *  <li>PGuid</li>
     *  <li>TransactionID</li>
     *  </ul>
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
     * This value corresponds to the value in the <b>key</b> field and identifies the instance of that entity.
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
     * This value corresponds to the value in the <b>key</b> field and identifies the instance of that entity.
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}key');
        if (null !== $value) {
            $this->setKey($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}value');
        if (null !== $value) {
            $this->setValue($value);
        }
    }
}
