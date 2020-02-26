<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing MyeBayFavoriteSellerType
 *
 * Characteristics of the My eBay Favorite Seller.
 * XSD Type: MyeBayFavoriteSellerType
 */
class MyeBayFavoriteSellerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The favorite seller's eBay user ID.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * The name of the store owned by the favorite seller, if applicable.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * Gets as userID
     *
     * The favorite seller's eBay user ID.
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * The favorite seller's eBay user ID.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as storeName
     *
     * The name of the store owned by the favorite seller, if applicable.
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
     * The name of the store owned by the favorite seller, if applicable.
     *
     * @param string $storeName
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreName');
        if (null !== $value) {
            $this->setStoreName($value);
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
