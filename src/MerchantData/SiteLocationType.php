<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SiteLocationType
 *
 * Contains the data that defines a site-based filter (used when searching for
 *  items and filtering the search result set).
 * XSD Type: SiteLocationType
 */
class SiteLocationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies the criteria for filtering search results by site, where site is
     *  determined by the site ID in the SOAP URL or, for Unified Schema XML requests,
     *  X-EBAY-API-SITEID HTTP Header.
     *
     * @var string $siteID
     */
    private $siteID = null;

    /**
     * Gets as siteID
     *
     * Specifies the criteria for filtering search results by site, where site is
     *  determined by the site ID in the SOAP URL or, for Unified Schema XML requests,
     *  X-EBAY-API-SITEID HTTP Header.
     *
     * @return string
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * Specifies the criteria for filtering search results by site, where site is
     *  determined by the site ID in the SOAP URL or, for Unified Schema XML requests,
     *  X-EBAY-API-SITEID HTTP Header.
     *
     * @param string $siteID
     * @return self
     */
    public function setSiteID($siteID)
    {
        $this->siteID = $siteID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteID');
        if (null !== $value) {
            $this->setSiteID($value);
        }
    }
}
