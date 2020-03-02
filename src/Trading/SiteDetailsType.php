<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SiteDetailsType
 *
 * Details about a specific site.
 * XSD Type: SiteDetailsType
 */
class SiteDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Short name that identifies an eBay site. Usually, an eBay site is associated
     *  with a particular country or region (e.g., US or Belgium_French). Specialty
     *  sites (e.g., eBay Stores) use the same site ID as their associated main eBay
     *  site. The US eBay Motors site is an exception to this convention.
     *
     * @var string $site
     */
    private $site = null;

    /**
     * Numeric identifier for an eBay site. If you are using the
     *  SOAP API, you use numeric site IDs in the request URL.
     *  If you are using the XML API, you use numeric site IDs in the
     *  X-EBAY-API-SITEID header.
     *
     * @var int $siteID
     */
    private $siteID = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as site
     *
     * Short name that identifies an eBay site. Usually, an eBay site is associated
     *  with a particular country or region (e.g., US or Belgium_French). Specialty
     *  sites (e.g., eBay Stores) use the same site ID as their associated main eBay
     *  site. The US eBay Motors site is an exception to this convention.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * Short name that identifies an eBay site. Usually, an eBay site is associated
     *  with a particular country or region (e.g., US or Belgium_French). Specialty
     *  sites (e.g., eBay Stores) use the same site ID as their associated main eBay
     *  site. The US eBay Motors site is an exception to this convention.
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as siteID
     *
     * Numeric identifier for an eBay site. If you are using the
     *  SOAP API, you use numeric site IDs in the request URL.
     *  If you are using the XML API, you use numeric site IDs in the
     *  X-EBAY-API-SITEID header.
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
     * Numeric identifier for an eBay site. If you are using the
     *  SOAP API, you use numeric site IDs in the request URL.
     *  If you are using the XML API, you use numeric site IDs in the
     *  X-EBAY-API-SITEID header.
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
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getSiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteID", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteID');
        if (null !== $value) {
            $this->setSiteID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
