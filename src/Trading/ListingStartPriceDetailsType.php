<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingStartPriceDetailsType
 *
 * Type defining the <b>ListingStartPriceDetails</b> container returned in
 *  <b>GeteBayDetails</b>. The <b>ListingStartPriceDetails</b>
 *  container lists the minimum start price for auction listings, the minimum sale price
 *  for fixed-price listings, and the minimum percentage value that a Buy It Now price for
 *  an auction listing must be above the minimum start price for that same listing.
 *  <br><br>
 *  The <b>ListingStartPriceDetails</b> container is returned if
 *  <b>ListingStartPriceDetails</b> is included as a <b>DetailName</b>
 *  filter in the request, or if no <b>DetailName</b> filters are used in the request.
 * XSD Type: ListingStartPriceDetailsType
 */
class ListingStartPriceDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This value is a string description of the listing type for which the pricing data
     *  is intended, such as "Pricing for the auction-like listings".
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This value indicates the listing type of the listing, and is a value defined in
     *  <b>ListingTypeCodeType</b> enumerated type. The only possible values for
     *  this field are 'Chinese' (auction listing) and 'FixedPriceItem'.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * For auction listings, the <b>StartPrice</b> indicates the lowest dollar
     *  value that can be set for the item's Starting bid.
     *  <br><br>
     *  For fixed-price listings, the <b>StartPrice</b> indicates the lowest
     *  dollar value that can be set for the item's sale price.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $startPrice
     */
    private $startPrice = null;

    /**
     * Returns the latest version number for this field. The version can be used to
     *  determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the
     *  details were last updated. This timestamp can be used to determine
     *  if and when to refresh cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * This field is only returned and applicable for auction listings.
     *  <br><br>
     *  This float value indicates the minimum percentage value that a Buy It Now price for
     *  an auction listing must be above the Starting bid price for that same listing.
     *  <br><br>
     *  On the US eBay Motors site (Site ID 100), this field only applies to the Parts and
     *  Accessories categories.
     *
     * @var float $minBuyItNowPricePercent
     */
    private $minBuyItNowPricePercent = null;

    /**
     * Gets as description
     *
     * This value is a string description of the listing type for which the pricing data
     *  is intended, such as "Pricing for the auction-like listings".
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * This value is a string description of the listing type for which the pricing data
     *  is intended, such as "Pricing for the auction-like listings".
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * This value indicates the listing type of the listing, and is a value defined in
     *  <b>ListingTypeCodeType</b> enumerated type. The only possible values for
     *  this field are 'Chinese' (auction listing) and 'FixedPriceItem'.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * This value indicates the listing type of the listing, and is a value defined in
     *  <b>ListingTypeCodeType</b> enumerated type. The only possible values for
     *  this field are 'Chinese' (auction listing) and 'FixedPriceItem'.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as startPrice
     *
     * For auction listings, the <b>StartPrice</b> indicates the lowest dollar
     *  value that can be set for the item's Starting bid.
     *  <br><br>
     *  For fixed-price listings, the <b>StartPrice</b> indicates the lowest
     *  dollar value that can be set for the item's sale price.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Sets a new startPrice
     *
     * For auction listings, the <b>StartPrice</b> indicates the lowest dollar
     *  value that can be set for the item's Starting bid.
     *  <br><br>
     *  For fixed-price listings, the <b>StartPrice</b> indicates the lowest
     *  dollar value that can be set for the item's sale price.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $startPrice
     * @return self
     */
    public function setStartPrice(\Nogrod\eBaySDK\Trading\AmountType $startPrice)
    {
        $this->startPrice = $startPrice;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be used to
     *  determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be used to
     *  determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the
     *  details were last updated. This timestamp can be used to determine
     *  if and when to refresh cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the
     *  details were last updated. This timestamp can be used to determine
     *  if and when to refresh cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * Gets as minBuyItNowPricePercent
     *
     * This field is only returned and applicable for auction listings.
     *  <br><br>
     *  This float value indicates the minimum percentage value that a Buy It Now price for
     *  an auction listing must be above the Starting bid price for that same listing.
     *  <br><br>
     *  On the US eBay Motors site (Site ID 100), this field only applies to the Parts and
     *  Accessories categories.
     *
     * @return float
     */
    public function getMinBuyItNowPricePercent()
    {
        return $this->minBuyItNowPricePercent;
    }

    /**
     * Sets a new minBuyItNowPricePercent
     *
     * This field is only returned and applicable for auction listings.
     *  <br><br>
     *  This float value indicates the minimum percentage value that a Buy It Now price for
     *  an auction listing must be above the Starting bid price for that same listing.
     *  <br><br>
     *  On the US eBay Motors site (Site ID 100), this field only applies to the Parts and
     *  Accessories categories.
     *
     * @param float $minBuyItNowPricePercent
     * @return self
     */
    public function setMinBuyItNowPricePercent($minBuyItNowPricePercent)
    {
        $this->minBuyItNowPricePercent = $minBuyItNowPricePercent;
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
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
        $value = $this->listingType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ListingType', null, (string) $value);
        }
        $value = $this->startPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'StartPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
        $value = $this->minBuyItNowPricePercent;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MinBuyItNowPricePercent', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ListingStartPriceDetailsType
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
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
                case 'ListingType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->listingType = $value;
                    }
                    return true;
                case 'StartPrice':
                    $this->startPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
                case 'MinBuyItNowPricePercent':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minBuyItNowPricePercent = (float) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Description'] = $this->description;
        $data['ListingType'] = $this->listingType;
        $data['StartPrice'] = $this->startPrice;
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        $data['MinBuyItNowPricePercent'] = $this->minBuyItNowPricePercent;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
