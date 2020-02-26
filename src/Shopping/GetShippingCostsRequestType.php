<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing GetShippingCostsRequestType
 *
 * Gets shipping costs for a listing. This is one of the ways a buyer or seller
 *  can obtain shipping cost information for an existing item (for which the caller is
 *  either the buyer or seller) at any point in the life of the listing, before or
 *  after a buyer has committed to purchasing the item(s). This call works for
 *  both flat-rate shipping and calculated shipping. Flat-rate shipping costs are
 *  established by the seller before bidding occurs. Calculated shipping costs
 *  are calculated by eBay with its shipping partners based on postal code. To determine whether a listing has ended, use <b>GetSingleItem</b>.
 *  It is best to call <b>GetShippingCosts</b> only after determining via <b>GetSingleItem</b>
 *  or <b>findItemsAdvanced</b> (<a
 *  href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html"
 *  >Finding API</a>) that the item actually has shipping cost information.
 * XSD Type: GetShippingCostsRequestType
 */
class GetShippingCostsRequestType extends AbstractRequestType
{

    /**
     * The item ID that uniquely identifies the listing for which to retrieve the data.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Quantity of items sold to a single buyer and to be shipped together.
     *  <br>
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * Destination country postal code (or zip code, for US). Ignored if no
     *  country code is provided. Optional tag for some countries. More likely to
     *  be required for large countries. Ignored for flat-rate shipping.
     *
     * @var string $destinationPostalCode
     */
    private $destinationPostalCode = null;

    /**
     * Destination country code. If <b>DestinationCountryCode</b> is US, postal code is required and represents US zip code.
     *  <br>
     *
     * @var string $destinationCountryCode
     */
    private $destinationCountryCode = null;

    /**
     * This field should be included and set to <b>true</b> if the user would like the <b>ShippingDetails</b> returned in the response.
     *  <br>
     *
     * @var bool $includeDetails
     */
    private $includeDetails = null;

    /**
     * Gets as itemID
     *
     * The item ID that uniquely identifies the listing for which to retrieve the data.
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
     * The item ID that uniquely identifies the listing for which to retrieve the data.
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
     * Quantity of items sold to a single buyer and to be shipped together.
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
     * Quantity of items sold to a single buyer and to be shipped together.
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
     * Destination country postal code (or zip code, for US). Ignored if no
     *  country code is provided. Optional tag for some countries. More likely to
     *  be required for large countries. Ignored for flat-rate shipping.
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
     * Destination country postal code (or zip code, for US). Ignored if no
     *  country code is provided. Optional tag for some countries. More likely to
     *  be required for large countries. Ignored for flat-rate shipping.
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
     * Destination country code. If <b>DestinationCountryCode</b> is US, postal code is required and represents US zip code.
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
     * Destination country code. If <b>DestinationCountryCode</b> is US, postal code is required and represents US zip code.
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

    /**
     * Gets as includeDetails
     *
     * This field should be included and set to <b>true</b> if the user would like the <b>ShippingDetails</b> returned in the response.
     *  <br>
     *
     * @return bool
     */
    public function getIncludeDetails()
    {
        return $this->includeDetails;
    }

    /**
     * Sets a new includeDetails
     *
     * This field should be included and set to <b>true</b> if the user would like the <b>ShippingDetails</b> returned in the response.
     *  <br>
     *
     * @param bool $includeDetails
     * @return self
     */
    public function setIncludeDetails($includeDetails)
    {
        $this->includeDetails = $includeDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = $this->getIncludeDetails();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeDetails", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DestinationPostalCode');
        if (null !== $value) {
            $this->setDestinationPostalCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DestinationCountryCode');
        if (null !== $value) {
            $this->setDestinationCountryCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeDetails');
        if (null !== $value) {
            $this->setIncludeDetails($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
