<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidderNoticePreferencesType
 *
 * This type is used by the <b>BidderNoticePreferences</b> container, which consists of the seller's preference for receiving contact information for unsuccessful bidders in auction listings.
 * XSD Type: BidderNoticePreferencesType
 */
class BidderNoticePreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This boolean field should be set to <b>true</b> in a <b>SetUserPreferences</b> call if the seller wishes to receive contact information for bidders who have bid on a seller's auction item, but did not win. This might be helpful to a seller if that seller wishes to proposed Second Chance Offers to these unsuccessful bidders if the seller has multiple, identical items, or if the winning bidder does not pay for the original auction item.
     *  <br/><br/>
     *  This field is always returned with <b>BidderNoticePreferences</b> container in the <b>GetUserPreferences</b> response.
     *
     * @var bool $unsuccessfulBidderNoticeIncludeMyItems
     */
    private $unsuccessfulBidderNoticeIncludeMyItems = null;

    /**
     * Gets as unsuccessfulBidderNoticeIncludeMyItems
     *
     * This boolean field should be set to <b>true</b> in a <b>SetUserPreferences</b> call if the seller wishes to receive contact information for bidders who have bid on a seller's auction item, but did not win. This might be helpful to a seller if that seller wishes to proposed Second Chance Offers to these unsuccessful bidders if the seller has multiple, identical items, or if the winning bidder does not pay for the original auction item.
     *  <br/><br/>
     *  This field is always returned with <b>BidderNoticePreferences</b> container in the <b>GetUserPreferences</b> response.
     *
     * @return bool
     */
    public function getUnsuccessfulBidderNoticeIncludeMyItems()
    {
        return $this->unsuccessfulBidderNoticeIncludeMyItems;
    }

    /**
     * Sets a new unsuccessfulBidderNoticeIncludeMyItems
     *
     * This boolean field should be set to <b>true</b> in a <b>SetUserPreferences</b> call if the seller wishes to receive contact information for bidders who have bid on a seller's auction item, but did not win. This might be helpful to a seller if that seller wishes to proposed Second Chance Offers to these unsuccessful bidders if the seller has multiple, identical items, or if the winning bidder does not pay for the original auction item.
     *  <br/><br/>
     *  This field is always returned with <b>BidderNoticePreferences</b> container in the <b>GetUserPreferences</b> response.
     *
     * @param bool $unsuccessfulBidderNoticeIncludeMyItems
     * @return self
     */
    public function setUnsuccessfulBidderNoticeIncludeMyItems($unsuccessfulBidderNoticeIncludeMyItems)
    {
        $this->unsuccessfulBidderNoticeIncludeMyItems = $unsuccessfulBidderNoticeIncludeMyItems;
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
        $value = $this->unsuccessfulBidderNoticeIncludeMyItems;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UnsuccessfulBidderNoticeIncludeMyItems', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BidderNoticePreferencesType
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
                case 'UnsuccessfulBidderNoticeIncludeMyItems':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->unsuccessfulBidderNoticeIncludeMyItems = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
