<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MerchantDataRequestHeaderType
 *
 * Defines default or required values for requests in the payload.
 * XSD Type: MerchantDataRequestHeaderType
 */
class MerchantDataRequestHeaderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The numeric eBay Site Code for which to route the
     *  requests in the payload. E.g. 77 for eBay Germany.
     *
     * @var int $siteID
     */
    private $siteID = null;

    /**
     * Default version for each request in the payload.
     *  Can be overridden at the request level.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * Gets as siteID
     *
     * The numeric eBay Site Code for which to route the
     *  requests in the payload. E.g. 77 for eBay Germany.
     *
     * @return int
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * The numeric eBay Site Code for which to route the
     *  requests in the payload. E.g. 77 for eBay Germany.
     *
     * @param int $siteID
     * @return self
     */
    public function setSiteID($siteID)
    {
        $this->siteID = $siteID;
        return $this;
    }

    /**
     * Gets as version
     *
     * Default version for each request in the payload.
     *  Can be overridden at the request level.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Default version for each request in the payload.
     *  Can be overridden at the request level.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteID", $value);
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Version", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteID');
        if (null !== $value) {
            $this->setSiteID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Version');
        if (null !== $value) {
            $this->setVersion($value);
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
