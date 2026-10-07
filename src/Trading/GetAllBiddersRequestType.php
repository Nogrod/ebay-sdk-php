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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->callMode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CallMode', null, (string) $value);
        }
        $value = $this->includeBiddingSummary;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeBiddingSummary', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetAllBiddersRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'CallMode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->callMode = $value;
                    }
                    return true;
                case 'IncludeBiddingSummary':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeBiddingSummary = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ItemID'] = $this->itemID;
        $data['CallMode'] = $this->callMode;
        $data['IncludeBiddingSummary'] = $this->includeBiddingSummary;
        return $data;
    }
}
