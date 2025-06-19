<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BestOfferDetailsType
 *
 * Type defining the <b>BestOfferDetails</b> container, which consists
 *  of Best Offer details associated with a listing. The <b>BestOfferEnabled</b>
 *  field in this container is used by <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls to enable the Best Offer feature on a listing.
 * XSD Type: BestOfferDetailsType
 */
class BestOfferDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The number of Best Offers made for this item, if any. In other words, if there are no Best Offers made, this field will not appear in the response. This field is not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     *
     * @var int $bestOfferCount
     */
    private $bestOfferCount = null;

    /**
     * This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category supports the Best Offer feature, run a <b>GetCategoryFeatures</b> call, including <code>BestOfferEnabled</code> as a <b>FeatureID</b> value in the call request payload.
     *  <br/><br>
     *  A listing enabled with the Best Offer feature allows a buyer to bargain with the seller and make a lower-priced offer than the fixed price or the starting bid price for an auction listing. The seller can then decide whether to accept the buyer's Best Offer price or propose a counter offer higher than the Best Offer price, but lower than the fixed price or starting bid price.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no longer be applicable once the listing receives its first qualifying bid.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Best Offer is not available for multi-variation listings.
     *  </span>
     *
     * @var bool $bestOfferEnabled
     */
    private $bestOfferEnabled = null;

    /**
     * This is the amount of the buyer's current Best Offer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer. This field is also not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $bestOffer
     */
    private $bestOffer = null;

    /**
     * This enumeration value indicates the status of the latest
     *  Best Offer from the buyer. This field is only applicable to the <b>GetMyeBayBuying</b> call, and will not appear in the
     *  response if the buyer has not made a Best Offer.
     *
     * @var string $bestOfferStatus
     */
    private $bestOfferStatus = null;

    /**
     * Note: this field is no longer used. The Best Offer type is only returned in the <b>BestOfferCodeType</b> field of the <b>GetBestOffers</b> call, and the applicable values for Best Offer type (<code>BuyerBestOffer</code>, <code>BuyerCounterOffer</code>, <code>SellerCounterOffer</code>, etc.) are defined in <b>BestOfferTypeCodeType</b>.
     *
     * @var string $bestOfferType
     */
    private $bestOfferType = null;

    /**
     * This field is deprecated.
     *
     * @var bool $newBestOffer
     */
    private $newBestOffer = null;

    /**
     * Gets as bestOfferCount
     *
     * The number of Best Offers made for this item, if any. In other words, if there are no Best Offers made, this field will not appear in the response. This field is not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     *
     * @return int
     */
    public function getBestOfferCount()
    {
        return $this->bestOfferCount;
    }

    /**
     * Sets a new bestOfferCount
     *
     * The number of Best Offers made for this item, if any. In other words, if there are no Best Offers made, this field will not appear in the response. This field is not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     *
     * @param int $bestOfferCount
     * @return self
     */
    public function setBestOfferCount($bestOfferCount)
    {
        $this->bestOfferCount = $bestOfferCount;
        return $this;
    }

    /**
     * Gets as bestOfferEnabled
     *
     * This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category supports the Best Offer feature, run a <b>GetCategoryFeatures</b> call, including <code>BestOfferEnabled</code> as a <b>FeatureID</b> value in the call request payload.
     *  <br/><br>
     *  A listing enabled with the Best Offer feature allows a buyer to bargain with the seller and make a lower-priced offer than the fixed price or the starting bid price for an auction listing. The seller can then decide whether to accept the buyer's Best Offer price or propose a counter offer higher than the Best Offer price, but lower than the fixed price or starting bid price.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no longer be applicable once the listing receives its first qualifying bid.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Best Offer is not available for multi-variation listings.
     *  </span>
     *
     * @return bool
     */
    public function getBestOfferEnabled()
    {
        return $this->bestOfferEnabled;
    }

    /**
     * Sets a new bestOfferEnabled
     *
     * This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category supports the Best Offer feature, run a <b>GetCategoryFeatures</b> call, including <code>BestOfferEnabled</code> as a <b>FeatureID</b> value in the call request payload.
     *  <br/><br>
     *  A listing enabled with the Best Offer feature allows a buyer to bargain with the seller and make a lower-priced offer than the fixed price or the starting bid price for an auction listing. The seller can then decide whether to accept the buyer's Best Offer price or propose a counter offer higher than the Best Offer price, but lower than the fixed price or starting bid price.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no longer be applicable once the listing receives its first qualifying bid.
     *  </span>
     *  <span class="tablenote"><b>Note: </b> Best Offer is not available for multi-variation listings.
     *  </span>
     *
     * @param bool $bestOfferEnabled
     * @return self
     */
    public function setBestOfferEnabled($bestOfferEnabled)
    {
        $this->bestOfferEnabled = $bestOfferEnabled;
        return $this;
    }

    /**
     * Gets as bestOffer
     *
     * This is the amount of the buyer's current Best Offer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer. This field is also not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getBestOffer()
    {
        return $this->bestOffer;
    }

    /**
     * Sets a new bestOffer
     *
     * This is the amount of the buyer's current Best Offer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer. This field is also not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $bestOffer
     * @return self
     */
    public function setBestOffer(\Nogrod\eBaySDK\Trading\AmountType $bestOffer)
    {
        $this->bestOffer = $bestOffer;
        return $this;
    }

    /**
     * Gets as bestOfferStatus
     *
     * This enumeration value indicates the status of the latest
     *  Best Offer from the buyer. This field is only applicable to the <b>GetMyeBayBuying</b> call, and will not appear in the
     *  response if the buyer has not made a Best Offer.
     *
     * @return string
     */
    public function getBestOfferStatus()
    {
        return $this->bestOfferStatus;
    }

    /**
     * Sets a new bestOfferStatus
     *
     * This enumeration value indicates the status of the latest
     *  Best Offer from the buyer. This field is only applicable to the <b>GetMyeBayBuying</b> call, and will not appear in the
     *  response if the buyer has not made a Best Offer.
     *
     * @param string $bestOfferStatus
     * @return self
     */
    public function setBestOfferStatus($bestOfferStatus)
    {
        $this->bestOfferStatus = $bestOfferStatus;
        return $this;
    }

    /**
     * Gets as bestOfferType
     *
     * Note: this field is no longer used. The Best Offer type is only returned in the <b>BestOfferCodeType</b> field of the <b>GetBestOffers</b> call, and the applicable values for Best Offer type (<code>BuyerBestOffer</code>, <code>BuyerCounterOffer</code>, <code>SellerCounterOffer</code>, etc.) are defined in <b>BestOfferTypeCodeType</b>.
     *
     * @return string
     */
    public function getBestOfferType()
    {
        return $this->bestOfferType;
    }

    /**
     * Sets a new bestOfferType
     *
     * Note: this field is no longer used. The Best Offer type is only returned in the <b>BestOfferCodeType</b> field of the <b>GetBestOffers</b> call, and the applicable values for Best Offer type (<code>BuyerBestOffer</code>, <code>BuyerCounterOffer</code>, <code>SellerCounterOffer</code>, etc.) are defined in <b>BestOfferTypeCodeType</b>.
     *
     * @param string $bestOfferType
     * @return self
     */
    public function setBestOfferType($bestOfferType)
    {
        $this->bestOfferType = $bestOfferType;
        return $this;
    }

    /**
     * Gets as newBestOffer
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getNewBestOffer()
    {
        return $this->newBestOffer;
    }

    /**
     * Sets a new newBestOffer
     *
     * This field is deprecated.
     *
     * @param bool $newBestOffer
     * @return self
     */
    public function setNewBestOffer($newBestOffer)
    {
        $this->newBestOffer = $newBestOffer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBestOfferCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferCount", $value);
        }
        $value = $this->getBestOfferEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled", $value);
        }
        $value = $this->getBestOffer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOffer", $value);
        }
        $value = $this->getBestOfferStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferStatus", $value);
        }
        $value = $this->getBestOfferType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferType", $value);
        }
        $value = $this->getNewBestOffer();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewBestOffer", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\BestOfferDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferCount');
        if (null !== $value) {
            $this->setBestOfferCount($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferEnabled');
        if (null !== $value) {
            $this->setBestOfferEnabled(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOffer');
        if (null !== $value) {
            $this->setBestOffer(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferStatus');
        if (null !== $value) {
            $this->setBestOfferStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferType');
        if (null !== $value) {
            $this->setBestOfferType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewBestOffer');
        if (null !== $value) {
            $this->setNewBestOffer(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
