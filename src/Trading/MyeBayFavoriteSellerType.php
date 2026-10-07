<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->userID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UserID', null, (string) $value);
        }
        $value = $this->storeName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StoreName', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'UserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userID = $value;
                    }
                    return true;
                case 'StoreName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->storeName = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
