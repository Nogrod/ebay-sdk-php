<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreSubscriptionType
 *
 * Type used by the Subscription container that is returned in GetStoreOptions to indicate the subscription level and monthly fee associated with the eBay Store.
 * XSD Type: StoreSubscriptionType
 */
class StoreSubscriptionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Store subscription level.
     *
     * @var string $level
     */
    private $level = null;

    /**
     * Monthly fee for the Store subscription level.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $fee
     */
    private $fee = null;

    /**
     * Gets as level
     *
     * Store subscription level.
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * Store subscription level.
     *
     * @param string $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Gets as fee
     *
     * Monthly fee for the Store subscription level.
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
     * Monthly fee for the Store subscription level.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $fee
     * @return self
     */
    public function setFee(\Nogrod\eBaySDK\Trading\AmountType $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Level", $value);
        }
        $value = $this->getFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fee", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Level');
        if (null !== $value) {
            $this->setLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fee');
        if (null !== $value) {
            $this->setFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
