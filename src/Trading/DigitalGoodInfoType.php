<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DigitalGoodInfoType
 *
 * This type is used by the <b>DigitalGoodInfo</b> container, which is used in <b>Add</b>/<b>Relist</b>/<b>Revise</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing.
 * XSD Type: DigitalGoodInfoType
 */
class DigitalGoodInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards.
     *  <br><br>
     *  To verify whether a specific leaf category on a specific eBay marketplace supports digital gift card listings, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getListingTypePolicies" target="_blank">getListingTypePolicies</a> method. Pass the target <b>marketplace_id</b> and the leaf category ID in the filter query parameter, and then look for a <code>true</code> value in the <b>listingTypePolicies.digitalGoodDeliveryEnabled</b> field for the returned category.
     *
     * @var bool $digitalDelivery
     */
    private $digitalDelivery = null;

    /**
     * Gets as digitalDelivery
     *
     * This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards.
     *  <br><br>
     *  To verify whether a specific leaf category on a specific eBay marketplace supports digital gift card listings, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getListingTypePolicies" target="_blank">getListingTypePolicies</a> method. Pass the target <b>marketplace_id</b> and the leaf category ID in the filter query parameter, and then look for a <code>true</code> value in the <b>listingTypePolicies.digitalGoodDeliveryEnabled</b> field for the returned category.
     *
     * @return bool
     */
    public function getDigitalDelivery()
    {
        return $this->digitalDelivery;
    }

    /**
     * Sets a new digitalDelivery
     *
     * This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards.
     *  <br><br>
     *  To verify whether a specific leaf category on a specific eBay marketplace supports digital gift card listings, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getListingTypePolicies" target="_blank">getListingTypePolicies</a> method. Pass the target <b>marketplace_id</b> and the leaf category ID in the filter query parameter, and then look for a <code>true</code> value in the <b>listingTypePolicies.digitalGoodDeliveryEnabled</b> field for the returned category.
     *
     * @param bool $digitalDelivery
     * @return self
     */
    public function setDigitalDelivery($digitalDelivery)
    {
        $this->digitalDelivery = $digitalDelivery;
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
        $value = $this->digitalDelivery;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DigitalDelivery', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DigitalGoodInfoType
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
                case 'DigitalDelivery':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->digitalDelivery = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['DigitalDelivery'] = $this->digitalDelivery;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
