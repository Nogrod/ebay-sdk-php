<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureManagerSubscriptionType
 *
 * This type is deprecated.
 * XSD Type: PictureManagerSubscriptionType
 */
class PictureManagerSubscriptionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $subscriptionLevel
     */
    private $subscriptionLevel = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $fee
     */
    private $fee = null;

    /**
     * This field is deprecated.
     *
     * @var int $storageSize
     */
    private $storageSize = null;

    /**
     * Gets as subscriptionLevel
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSubscriptionLevel()
    {
        return $this->subscriptionLevel;
    }

    /**
     * Sets a new subscriptionLevel
     *
     * This field is deprecated.
     *
     * @param string $subscriptionLevel
     * @return self
     */
    public function setSubscriptionLevel($subscriptionLevel)
    {
        $this->subscriptionLevel = $subscriptionLevel;
        return $this;
    }

    /**
     * Gets as fee
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $fee
     * @return self
     */
    public function setFee(\Nogrod\eBaySDK\Trading\AmountType $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Gets as storageSize
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getStorageSize()
    {
        return $this->storageSize;
    }

    /**
     * Sets a new storageSize
     *
     * This field is deprecated.
     *
     * @param int $storageSize
     * @return self
     */
    public function setStorageSize($storageSize)
    {
        $this->storageSize = $storageSize;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSubscriptionLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubscriptionLevel", $value);
        }
        $value = $this->getFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fee", $value);
        }
        $value = $this->getStorageSize();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StorageSize", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubscriptionLevel');
        if (null !== $value) {
            $this->setSubscriptionLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fee');
        if (null !== $value) {
            $this->setFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StorageSize');
        if (null !== $value) {
            $this->setStorageSize($value);
        }
    }
}
