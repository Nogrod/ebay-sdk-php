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
     * This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category supports the Best Offer feature, call the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getNegotiatedPricePolicies" target="_blank">getNegotiatedPricePolicies</a> method. If the applicable leaf category is returned in the <b>negotiatedPricePolicies</b> container, that category supports Best Offer. Note that <b>Metadata API</b> methods return metadata for leaf categories only.
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
     * This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category supports the Best Offer feature, call the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getNegotiatedPricePolicies" target="_blank">getNegotiatedPricePolicies</a> method. If the applicable leaf category is returned in the <b>negotiatedPricePolicies</b> container, that category supports Best Offer. Note that <b>Metadata API</b> methods return metadata for leaf categories only.
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
     * This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category supports the Best Offer feature, call the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getNegotiatedPricePolicies" target="_blank">getNegotiatedPricePolicies</a> method. If the applicable leaf category is returned in the <b>negotiatedPricePolicies</b> container, that category supports Best Offer. Note that <b>Metadata API</b> methods return metadata for leaf categories only.
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->bestOfferCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferCount', null, (string) $value);
        }
        $value = $this->bestOfferEnabled;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferEnabled', null, ($value ? 'true' : 'false'));
        }
        $value = $this->bestOffer;
        if (null !== $value) {
            $writer->startElementNs(null, 'BestOffer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->bestOfferStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferStatus', null, (string) $value);
        }
        $value = $this->bestOfferType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BestOfferType', null, (string) $value);
        }
        $value = $this->newBestOffer;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NewBestOffer', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BestOfferDetailsType
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
                case 'BestOfferCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferCount = (int) $value;
                    }
                    return true;
                case 'BestOfferEnabled':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferEnabled = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'BestOffer':
                    $this->bestOffer = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'BestOfferStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferStatus = $value;
                    }
                    return true;
                case 'BestOfferType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bestOfferType = $value;
                    }
                    return true;
                case 'NewBestOffer':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->newBestOffer = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
