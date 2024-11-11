<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StorefrontType
 *
 * Complex type used by the <b>Storefront</b> container used by the <b>GetSingleItem</b> and <b>GetMultipleItems</b> if the seller of the item has an eBay Store subscription.
 * XSD Type: StorefrontType
 */
class StorefrontType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The URL of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     *
     * @var string $storeURL
     */
    private $storeURL = null;

    /**
     * The name of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * Gets as storeURL
     *
     * The URL of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     *
     * @return string
     */
    public function getStoreURL()
    {
        return $this->storeURL;
    }

    /**
     * Sets a new storeURL
     *
     * The URL of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     *
     * @param string $storeURL
     * @return self
     */
    public function setStoreURL($storeURL)
    {
        $this->storeURL = $storeURL;
        return $this;
    }

    /**
     * Gets as storeName
     *
     * The name of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Sets a new storeName
     *
     * The name of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     *
     * @param string $storeName
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStoreURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreURL", $value);
        }
        $value = $this->getStoreName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreName", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreURL');
        if (null !== $value) {
            $this->setStoreURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreName');
        if (null !== $value) {
            $this->setStoreName($value);
        }
    }
}
