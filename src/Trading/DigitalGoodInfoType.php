<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DigitalGoodInfoType
 *
 * This type is used by the <b>DigitalGoodInfo</b> container, which is used in <b>Add</b>/<b>Relist</b>/<b>Revise</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing.
 * XSD Type: DigitalGoodInfoType
 */
class DigitalGoodInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
        $value = $this->getDigitalDelivery();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalDelivery", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DigitalGoodInfoType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalDelivery');
        if (null !== $value) {
            $this->setDigitalDelivery(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
