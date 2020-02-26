<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SetStoreRequestType
 *
 * This call is used to set/modify the configuration of a seller's eBay Store. Configuration information includes store theme information and eBay Store category hierarchy.
 * XSD Type: SetStoreRequestType
 */
class SetStoreRequestType extends AbstractRequestType
{

    /**
     * This container is used to set/modify the configuration of a seller's eBay Store.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreType $store
     */
    private $store = null;

    /**
     * Gets as store
     *
     * This container is used to set/modify the configuration of a seller's eBay Store.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreType
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * This container is used to set/modify the configuration of a seller's eBay Store.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreType $store
     * @return self
     */
    public function setStore(\Nogrod\eBaySDK\Trading\StoreType $store)
    {
        $this->store = $store;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getStore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Store", $value);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Store');
        if (null !== $value) {
            $this->setStore(\Nogrod\eBaySDK\Trading\StoreType::fromKeyValue($value));
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
