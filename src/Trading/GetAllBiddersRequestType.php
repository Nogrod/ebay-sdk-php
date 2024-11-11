<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetAllBiddersRequestType
 *
 * This is the base request type for the <b>GetAllBidders</b> call, which is used to retrieve bidders from an active or recently-ended auction listing.
 * XSD Type: GetAllBiddersRequestType
 */
class GetAllBiddersRequestType extends AbstractRequestType
{
    /**
     * This is the unique identifier of the auction listing for which bidders are being retrieved. This auction listing can be active or recently ended. However, to retrieve bidders for an active auction listing, the only <b>CallMode</b> enumeration value that can be used is <code>ViewAll</code>.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The enumeration value that is passed into this field will control the set of bidders that will be retrieved in the response. To retrieve bidders from a recently-ended auction listing, any of the three values can be used. To retrieve bidders for an active auction listing, only the <code>ViewAll</code> enumeration value can be used. These values are discussed in <b>GetAllBiddersModeCodeType</b>.
     *  <br/>
     *
     * @var string $callMode
     */
    private $callMode = null;

    /**
     * The user must include this field and set its value to <code>true</code> if the user wishes to retrieve the <b>BiddingSummary</b> container for each bidder. The <b>BiddingSummary</b> container consists of more detailed bidding information on each bidder.
     *
     * @var bool $includeBiddingSummary
     */
    private $includeBiddingSummary = null;

    /**
     * Gets as itemID
     *
     * This is the unique identifier of the auction listing for which bidders are being retrieved. This auction listing can be active or recently ended. However, to retrieve bidders for an active auction listing, the only <b>CallMode</b> enumeration value that can be used is <code>ViewAll</code>.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * This is the unique identifier of the auction listing for which bidders are being retrieved. This auction listing can be active or recently ended. However, to retrieve bidders for an active auction listing, the only <b>CallMode</b> enumeration value that can be used is <code>ViewAll</code>.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as callMode
     *
     * The enumeration value that is passed into this field will control the set of bidders that will be retrieved in the response. To retrieve bidders from a recently-ended auction listing, any of the three values can be used. To retrieve bidders for an active auction listing, only the <code>ViewAll</code> enumeration value can be used. These values are discussed in <b>GetAllBiddersModeCodeType</b>.
     *  <br/>
     *
     * @return string
     */
    public function getCallMode()
    {
        return $this->callMode;
    }

    /**
     * Sets a new callMode
     *
     * The enumeration value that is passed into this field will control the set of bidders that will be retrieved in the response. To retrieve bidders from a recently-ended auction listing, any of the three values can be used. To retrieve bidders for an active auction listing, only the <code>ViewAll</code> enumeration value can be used. These values are discussed in <b>GetAllBiddersModeCodeType</b>.
     *  <br/>
     *
     * @param string $callMode
     * @return self
     */
    public function setCallMode($callMode)
    {
        $this->callMode = $callMode;
        return $this;
    }

    /**
     * Gets as includeBiddingSummary
     *
     * The user must include this field and set its value to <code>true</code> if the user wishes to retrieve the <b>BiddingSummary</b> container for each bidder. The <b>BiddingSummary</b> container consists of more detailed bidding information on each bidder.
     *
     * @return bool
     */
    public function getIncludeBiddingSummary()
    {
        return $this->includeBiddingSummary;
    }

    /**
     * Sets a new includeBiddingSummary
     *
     * The user must include this field and set its value to <code>true</code> if the user wishes to retrieve the <b>BiddingSummary</b> container for each bidder. The <b>BiddingSummary</b> container consists of more detailed bidding information on each bidder.
     *
     * @param bool $includeBiddingSummary
     * @return self
     */
    public function setIncludeBiddingSummary($includeBiddingSummary)
    {
        $this->includeBiddingSummary = $includeBiddingSummary;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getCallMode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CallMode", $value);
        }
        $value = $this->getIncludeBiddingSummary();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeBiddingSummary", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CallMode');
        if (null !== $value) {
            $this->setCallMode($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeBiddingSummary');
        if (null !== $value) {
            $this->setIncludeBiddingSummary(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
