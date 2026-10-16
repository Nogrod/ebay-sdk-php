<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ActiveInventoryReportRequestType
 *
 * <span class="tablenote"> <strong>Note:</strong> Large
 *  Merchant Services (LMS) functionality as a SOAP service has been decommissioned. It is fully
 *  migrated into the REST-based <a href="/api-docs/sell/feed/resources/methods"
 *  target=\"_blank\" >Sell Feed API</a> The <strong>Sell Feed API</strong>
 *  supports the same XML data files that LMS supported but through REST methods. For more
 *  information, see the <a href="/api-docs/sell/static/feed/lms-feeds.html" target="_blank"
 *  >LMS Feed Guide</a>. </span> A report that contains price and quantity
 *  information for all of the active listings for a specific seller. A seller can use this
 *  information to maintain their inventory on eBay. <br><br> The eBay servers read
 *  the token information passed in by the seller's application to determine which seller's data
 *  to retrieve.
 * XSD Type: ActiveInventoryReportRequestType
 */
class ActiveInventoryReportRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
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
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ActiveInventoryReportRequestType
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
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
