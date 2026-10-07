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
        $value = $this->site;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Site', null, (string) $value);
        }
        $value = $this->siteID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SiteID', null, (string) $value);
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SiteDetailsType
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
                case 'Site':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->site = $value;
                    }
                    return true;
                case 'SiteID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->siteID = (int) $value;
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }
}
