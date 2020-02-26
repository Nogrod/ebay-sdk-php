<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing StorefrontType
 *
 * Denotes whether the item is a storefront listing.
 * XSD Type: Storefront
 */
class StorefrontType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The name of the seller's eBay Store.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * The URL of the seller's eBay Store page.
     *
     * @var string $storeURL
     */
    private $storeURL = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as storeName
     *
     * The name of the seller's eBay Store.
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
     * The name of the seller's eBay Store.
     *
     * @param string $storeName
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }

    /**
     * Gets as storeURL
     *
     * The URL of the seller's eBay Store page.
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
     * The URL of the seller's eBay Store page.
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
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getStoreName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}storeName", $value);
        }
        $value = $this->getStoreURL();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}storeURL", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}storeName');
        if (null !== $value) {
            $this->setStoreName($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}storeURL');
        if (null !== $value) {
            $this->setStoreURL($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
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
