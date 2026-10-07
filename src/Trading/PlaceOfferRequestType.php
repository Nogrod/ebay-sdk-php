<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PlaceOfferRequestType
 *
 * Enables the authenticated user to to make a bid on an auction item, propose a Best Offer, or purchase a fixed-price/Buy It Now item. Note that this call cannot be used to purchase items that require immediate payment.
 * XSD Type: PlaceOfferRequestType
 */
class PlaceOfferRequestType extends AbstractRequestType
{
    /**
     * This container specifies the type of offer being made for the listing specified in the <b>ItemID</b> field. The <b>Offer.Action</b> is used to set the action that is being taken on the listing.
     *
     * @var \Nogrod\eBaySDK\Trading\OfferType $offer
     */
    private $offer = null;

    /**
     * Unique identifier that identifies the listing for which the action is being submitted.
     *  <br><br>
     *  For a multiple-variation listing, you must also identify the specific variation within that listing using the <b>VariationSpecifics</b> container.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * If a warning message is generated when the call is made, this <b>BlockOnWarning</b> will block the bid/buy action if set to <code>true</code>. If <b>BlockOnWarning</b>
     *  is <code>false</code> or omitted, the bid/buy action is allowed, regardless of whether or not a warning message occurs.
     *  <br>
     *
     * @var bool $blockOnWarning
     */
    private $blockOnWarning = null;

    /**
     * Container for affiliate-related tags, which enable the tracking of user
     *  activity. If you include the <b>AffiliateTrackingDetails</b> container in your <b>PlaceOffer</b> call, then
     *  it is possible to receive affiliate commissions based on calls made by your
     *  application. (See the <a href=
     *  "http://www.ebaypartnernetwork.com/" target="_blank">eBay Partner Network</a>
     *  for information about commissions.) Please note that affiliate tracking is not
     *  available in the Sandbox environment, and that affiliate tracking is not
     *  available when you make a Best Offer.
     *
     * @var \Nogrod\eBaySDK\Trading\AffiliateTrackingDetailsType $affiliateTrackingDetails
     */
    private $affiliateTrackingDetails = null;

    /**
     * This container is used to identify a specific variation within a multiple-variation listing identified by the <b>ItemID</b> value. This container is required when attempting to perform an action on a multiple-variation listing.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * Gets as offer
     *
     * This container specifies the type of offer being made for the listing specified in the <b>ItemID</b> field. The <b>Offer.Action</b> is used to set the action that is being taken on the listing.
     *
     * @return \Nogrod\eBaySDK\Trading\OfferType
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * This container specifies the type of offer being made for the listing specified in the <b>ItemID</b> field. The <b>Offer.Action</b> is used to set the action that is being taken on the listing.
     *
     * @param \Nogrod\eBaySDK\Trading\OfferType $offer
     * @return self
     */
    public function setOffer(\Nogrod\eBaySDK\Trading\OfferType $offer)
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Unique identifier that identifies the listing for which the action is being submitted.
     *  <br><br>
     *  For a multiple-variation listing, you must also identify the specific variation within that listing using the <b>VariationSpecifics</b> container.
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
     * Unique identifier that identifies the listing for which the action is being submitted.
     *  <br><br>
     *  For a multiple-variation listing, you must also identify the specific variation within that listing using the <b>VariationSpecifics</b> container.
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
     * Gets as blockOnWarning
     *
     * If a warning message is generated when the call is made, this <b>BlockOnWarning</b> will block the bid/buy action if set to <code>true</code>. If <b>BlockOnWarning</b>
     *  is <code>false</code> or omitted, the bid/buy action is allowed, regardless of whether or not a warning message occurs.
     *  <br>
     *
     * @return bool
     */
    public function getBlockOnWarning()
    {
        return $this->blockOnWarning;
    }

    /**
     * Sets a new blockOnWarning
     *
     * If a warning message is generated when the call is made, this <b>BlockOnWarning</b> will block the bid/buy action if set to <code>true</code>. If <b>BlockOnWarning</b>
     *  is <code>false</code> or omitted, the bid/buy action is allowed, regardless of whether or not a warning message occurs.
     *  <br>
     *
     * @param bool $blockOnWarning
     * @return self
     */
    public function setBlockOnWarning($blockOnWarning)
    {
        $this->blockOnWarning = $blockOnWarning;
        return $this;
    }

    /**
     * Gets as affiliateTrackingDetails
     *
     * Container for affiliate-related tags, which enable the tracking of user
     *  activity. If you include the <b>AffiliateTrackingDetails</b> container in your <b>PlaceOffer</b> call, then
     *  it is possible to receive affiliate commissions based on calls made by your
     *  application. (See the <a href=
     *  "http://www.ebaypartnernetwork.com/" target="_blank">eBay Partner Network</a>
     *  for information about commissions.) Please note that affiliate tracking is not
     *  available in the Sandbox environment, and that affiliate tracking is not
     *  available when you make a Best Offer.
     *
     * @return \Nogrod\eBaySDK\Trading\AffiliateTrackingDetailsType
     */
    public function getAffiliateTrackingDetails()
    {
        return $this->affiliateTrackingDetails;
    }

    /**
     * Sets a new affiliateTrackingDetails
     *
     * Container for affiliate-related tags, which enable the tracking of user
     *  activity. If you include the <b>AffiliateTrackingDetails</b> container in your <b>PlaceOffer</b> call, then
     *  it is possible to receive affiliate commissions based on calls made by your
     *  application. (See the <a href=
     *  "http://www.ebaypartnernetwork.com/" target="_blank">eBay Partner Network</a>
     *  for information about commissions.) Please note that affiliate tracking is not
     *  available in the Sandbox environment, and that affiliate tracking is not
     *  available when you make a Best Offer.
     *
     * @param \Nogrod\eBaySDK\Trading\AffiliateTrackingDetailsType $affiliateTrackingDetails
     * @return self
     */
    public function setAffiliateTrackingDetails(\Nogrod\eBaySDK\Trading\AffiliateTrackingDetailsType $affiliateTrackingDetails)
    {
        $this->affiliateTrackingDetails = $affiliateTrackingDetails;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This container is used to identify a specific variation within a multiple-variation listing identified by the <b>ItemID</b> value. This container is required when attempting to perform an action on a multiple-variation listing.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToVariationSpecifics(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        if (!is_array($this->variationSpecifics)) {
            throw new \LogicException('variationSpecifics is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->variationSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecifics
     *
     * This container is used to identify a specific variation within a multiple-variation listing identified by the <b>ItemID</b> value. This container is required when attempting to perform an action on a multiple-variation listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecifics($index)
    {
        return isset($this->variationSpecifics[$index]);
    }

    /**
     * unset variationSpecifics
     *
     * This container is used to identify a specific variation within a multiple-variation listing identified by the <b>ItemID</b> value. This container is required when attempting to perform an action on a multiple-variation listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecifics($index)
    {
        unset($this->variationSpecifics[$index]);
    }

    /**
     * Gets as variationSpecifics
     *
     * This container is used to identify a specific variation within a multiple-variation listing identified by the <b>ItemID</b> value. This container is required when attempting to perform an action on a multiple-variation listing.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\NameValueListType>
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * This container is used to identify a specific variation within a multiple-variation listing identified by the <b>ItemID</b> value. This container is required when attempting to perform an action on a multiple-variation listing.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\NameValueListType> $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(iterable $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->offer;
        if (null !== $value) {
            $writer->startElementNs(null, 'Offer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->blockOnWarning;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BlockOnWarning', null, ($value ? 'true' : 'false'));
        }
        $value = $this->affiliateTrackingDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'AffiliateTrackingDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->variationSpecifics;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'VariationSpecifics', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'NameValueList', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PlaceOfferRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->variationSpecifics = [];
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
                case 'Offer':
                    $this->offer = \Nogrod\eBaySDK\Trading\OfferType::xmlRead($reader);
                    return true;
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'BlockOnWarning':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->blockOnWarning = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'AffiliateTrackingDetails':
                    $this->affiliateTrackingDetails = \Nogrod\eBaySDK\Trading\AffiliateTrackingDetailsType::xmlRead($reader);
                    return true;
                case 'VariationSpecifics':
                    $this->variationSpecifics = Func::readList($reader, 'NameValueList', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\NameValueListType::xmlRead($reader));
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
