<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ListingCheckoutRedirectPreferenceType
 *
 * This type has been deprecated, as Pro Stores and other third-party checkouts have been deprecated.
 * XSD Type: ListingCheckoutRedirectPreferenceType
 */
class ListingCheckoutRedirectPreferenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $proStoresStoreName
     */
    private $proStoresStoreName = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellerThirdPartyUsername
     */
    private $sellerThirdPartyUsername = null;

    /**
     * Gets as proStoresStoreName
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getProStoresStoreName()
    {
        return $this->proStoresStoreName;
    }

    /**
     * Sets a new proStoresStoreName
     *
     * This field is deprecated.
     *
     * @param string $proStoresStoreName
     * @return self
     */
    public function setProStoresStoreName($proStoresStoreName)
    {
        $this->proStoresStoreName = $proStoresStoreName;
        return $this;
    }

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProStoresStoreName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProStoresStoreName", $value);
        }
        $value = $this->getSellerThirdPartyUsername();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerThirdPartyUsername", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProStoresStoreName');
        if (null !== $value) {
            $this->setProStoresStoreName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerThirdPartyUsername');
        if (null !== $value) {
            $this->setSellerThirdPartyUsername($value);
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
