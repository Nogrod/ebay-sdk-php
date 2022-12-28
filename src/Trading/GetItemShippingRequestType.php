<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemShippingRequestType
 *
 * This is the base request type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller has offered with the listing. This call will also return <b>PickUpInStoreDetails.EligibleForPickupDropOff</b> and <b>PickUpInStoreDetails.EligibleForPickupInStore</b> flags if the item is available for buyer pick-up through the In-Store Pickup or Click and Collect features.
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
     * The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     *
     * @var string $destinationPostalCode
     */
    private $destinationPostalCode = null;

    /**
     * The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
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
     * The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
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
     * The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
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
     * The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
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
     * The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
        }
        $value = $this->getDestinationPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DestinationPostalCode", $value);
        }
        $value = $this->getDestinationCountryCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DestinationCountryCode", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DestinationPostalCode');
        if (null !== $value) {
            $this->setDestinationPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DestinationCountryCode');
        if (null !== $value) {
            $this->setDestinationCountryCode($value);
        }
    }
}
