<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProStoresDetailsType
 *
 * This type is deprecated.
 * XSD Type: ProStoresDetailsType
 */
class ProStoresDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $sellerThirdPartyUsername
     */
    private $sellerThirdPartyUsername = null;

    /**
     * This field is deprecated.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * This field is deprecated.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as sellerThirdPartyUsername
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellerThirdPartyUsername()
    {
        return $this->sellerThirdPartyUsername;
    }

    /**
     * Sets a new sellerThirdPartyUsername
     *
     * This field is deprecated.
     *
     * @param string $sellerThirdPartyUsername
     * @return self
     */
    public function setSellerThirdPartyUsername($sellerThirdPartyUsername)
    {
        $this->sellerThirdPartyUsername = $sellerThirdPartyUsername;
        return $this;
    }

    /**
     * Gets as storeName
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as status
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * This field is deprecated.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellerThirdPartyUsername();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerThirdPartyUsername", $value);
        }
        $value = $this->getStoreName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreName", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerThirdPartyUsername');
        if (null !== $value) {
            $this->setSellerThirdPartyUsername($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreName');
        if (null !== $value) {
            $this->setStoreName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
    }
}
