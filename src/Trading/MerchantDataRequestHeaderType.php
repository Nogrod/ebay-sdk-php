<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MerchantDataRequestHeaderType
 *
 * Defines default or required values for requests in the payload.
 * XSD Type: MerchantDataRequestHeaderType
 */
class MerchantDataRequestHeaderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->siteID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SiteID', null, (string) $value);
        }
        $value = $this->version;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Version', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType
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
                case 'SiteID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->siteID = (int) $value;
                    }
                    return true;
                case 'Version':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->version = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['SiteID'] = $this->siteID;
        $data['Version'] = $this->version;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
