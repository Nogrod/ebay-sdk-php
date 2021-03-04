<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreSubscriptionArrayType
 *
 * Set of eBay Store subscription levels.
 * XSD Type: StoreSubscriptionArrayType
 */
class StoreSubscriptionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A Store subscription level.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreSubscriptionType[] $subscription
     */
    private $subscription = [
        
    ];

    /**
     * Adds as subscription
     *
     * A Store subscription level.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreSubscriptionType $subscription
     */
    public function addToSubscription(\Nogrod\eBaySDK\Trading\StoreSubscriptionType $subscription)
    {
        $this->subscription[] = $subscription;
        return $this;
    }

    /**
     * isset subscription
     *
     * A Store subscription level.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubscription($index)
    {
        return isset($this->subscription[$index]);
    }

    /**
     * unset subscription
     *
     * A Store subscription level.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubscription($index)
    {
        unset($this->subscription[$index]);
    }

    /**
     * Gets as subscription
     *
     * A Store subscription level.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreSubscriptionType[]
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * A Store subscription level.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreSubscriptionType[] $subscription
     * @return self
     */
    public function setSubscription(array $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSubscription();
        if (null !== $value && !empty($this->getSubscription())) {
            $writer->write(array_map(function ($v) {
                return ["Subscription" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Subscription', true);
        if (null !== $value && !empty($value)) {
            $this->setSubscription(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\StoreSubscriptionType::fromKeyValue($v);
            }, $value));
        }
    }
}
