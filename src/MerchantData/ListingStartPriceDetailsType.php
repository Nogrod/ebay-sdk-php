<?php

namespace Nogrod\eBaySDK\MerchantData;

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
 *  filter in the request, or if no lt;b>DetailName</b> filters are used in the request.
 * XSD Type: ListingStartPriceDetailsType
 */
class ListingStartPriceDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $startPrice
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
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $startPrice
     * @return self
     */
    public function setStartPrice(\Nogrod\eBaySDK\MerchantData\AmountType $startPrice)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartPrice", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
        }
        $value = $this->getMinBuyItNowPricePercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinBuyItNowPricePercent", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartPrice');
        if (null !== $value) {
            $this->setStartPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinBuyItNowPricePercent');
        if (null !== $value) {
            $this->setMinBuyItNowPricePercent($value);
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
