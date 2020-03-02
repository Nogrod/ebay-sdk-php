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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUnsuccessfulBidderNoticeIncludeMyItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnsuccessfulBidderNoticeIncludeMyItems", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnsuccessfulBidderNoticeIncludeMyItems');
        if (null !== $value) {
            $this->setUnsuccessfulBidderNoticeIncludeMyItems($value);
        }
    }
}
