<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemShippingRequestType
 *
 * This is the base request type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller has offered with the listing. This call will also return <b>PickUpInStoreDetails.EligibleForPickupDropOff</b> flag if the item is available for buyer pick-up through the Click and Collect features.
 * XSD Type: GetItemShippingRequestType
 */
class GetItemShippingRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the eBay listing for which to retrieve estimated shipping costs for all offered shipping service options. The <b>ItemID</b> value passed into this field should be for an listing that offers at least one calculated shipping service option, and for an item that has yet to be shipped.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is used to specify the quantity of the item. The <b>QuantitySold</b> value defaults to <code>1</code> if not specified. If a value greater than <code>1</code> is specified in this field, the shipping service costs returned in the response will reflect the expense to ship multiple quantity of an item.
     *  <br>
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the <b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     *
     * @var string $destinationPostalCode
     */
    private $destinationPostalCode = null;

    /**
     * The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the <b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     *  <br><br>
     *  Two-digit country codes can be found in <a href="types/CountryCodeType.html">CountryCodeType</a>.
     *  <br>
     *
     * @var string $destinationCountryCode
     */
    private $destinationCountryCode = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing for which to retrieve estimated shipping costs for all offered shipping service options. The <b>ItemID</b> value passed into this field should be for an listing that offers at least one calculated shipping service option, and for an item that has yet to be shipped.
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
     * The unique identifier of the eBay listing for which to retrieve estimated shipping costs for all offered shipping service options. The <b>ItemID</b> value passed into this field should be for an listing that offers at least one calculated shipping service option, and for an item that has yet to be shipped.
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
     * Gets as quantitySold
     *
     * This field is used to specify the quantity of the item. The <b>QuantitySold</b> value defaults to <code>1</code> if not specified. If a value greater than <code>1</code> is specified in this field, the shipping service costs returned in the response will reflect the expense to ship multiple quantity of an item.
     *  <br>
     *
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * Sets a new quantitySold
     *
     * This field is used to specify the quantity of the item. The <b>QuantitySold</b> value defaults to <code>1</code> if not specified. If a value greater than <code>1</code> is specified in this field, the shipping service costs returned in the response will reflect the expense to ship multiple quantity of an item.
     *  <br>
     *
     * @param int $quantitySold
     * @return self
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
        return $this;
    }

    /**
     * Gets as destinationPostalCode
     *
     * The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the <b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     *
     * @return string
     */
    public function getDestinationPostalCode()
    {
        return $this->destinationPostalCode;
    }

    /**
     * Sets a new destinationPostalCode
     *
     * The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the <b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     *
     * @param string $destinationPostalCode
     * @return self
     */
    public function setDestinationPostalCode($destinationPostalCode)
    {
        $this->destinationPostalCode = $destinationPostalCode;
        return $this;
    }

    /**
     * Gets as destinationCountryCode
     *
     * The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the <b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     *  <br><br>
     *  Two-digit country codes can be found in <a href="types/CountryCodeType.html">CountryCodeType</a>.
     *  <br>
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->destinationCountryCode;
    }

    /**
     * Sets a new destinationCountryCode
     *
     * The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the <b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     *  <br><br>
     *  Two-digit country codes can be found in <a href="types/CountryCodeType.html">CountryCodeType</a>.
     *  <br>
     *
     * @param string $destinationCountryCode
     * @return self
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->destinationCountryCode = $destinationCountryCode;
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
        $value = $this->quantitySold;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QuantitySold', null, (string) $value);
        }
        $value = $this->destinationPostalCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DestinationPostalCode', null, (string) $value);
        }
        $value = $this->destinationCountryCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DestinationCountryCode', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetItemShippingRequestType
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
                case 'QuantitySold':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->quantitySold = (int) $value;
                    }
                    return true;
                case 'DestinationPostalCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->destinationPostalCode = $value;
                    }
                    return true;
                case 'DestinationCountryCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->destinationCountryCode = $value;
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
        $data['QuantitySold'] = $this->quantitySold;
        $data['DestinationPostalCode'] = $this->destinationPostalCode;
        $data['DestinationCountryCode'] = $this->destinationCountryCode;
        return $data;
    }
}
