<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyeBayBuyingRequestType
 *
 * Retrieves information regarding a user's buying activity, such as items they are watching, bidding on, have won, did not win, and have made Best Offers on.
 * XSD Type: GetMyeBayBuyingRequestType
 */
class GetMyeBayBuyingRequestType extends AbstractRequestType
{
    /**
     * Include this container and set the <b>WatchList.Include</b> field to <code>true</code> to return the list of items on the eBay user's Watch List.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of watched items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $watchList
     */
    private $watchList = null;

    /**
     * Include this container and set the <b>BidList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $bidList
     */
    private $bidList = null;

    /**
     * Include this container and set the <b>BestOfferList.Include</b> field to <code>true</code> to return the list of items on which the eBay user has made a Best Offer.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $bestOfferList
     */
    private $bestOfferList = null;

    /**
     * Include this container and set the <b>WonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $wonList
     */
    private $wonList = null;

    /**
     * Include this container and set the <b>LostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $lostList
     */
    private $lostList = null;

    /**
     * Include this container and set the <b>FavoriteSearches.Include</b> field to <code>true</code> to return the list of the eBay user's saved searches.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBaySelectionType $favoriteSearches
     */
    private $favoriteSearches = null;

    /**
     * Include this container and set the <b>FavoriteSellers.Include</b> field to <code>true</code> to return the list of the eBay user's saved sellers.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBaySelectionType $favoriteSellers
     */
    private $favoriteSellers = null;

    /**
     * Include this container and set the <b>SecondChanceOffer.Include</b> field to <code>true</code> to return any Second Chance Offers that the eBay user has received.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBaySelectionType $secondChanceOffer
     */
    private $secondChanceOffer = null;

    /**
     * Include this container and set the <b>DeletedFromWonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won, but has deleted from their My eBay page.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $deletedFromWonList
     */
    private $deletedFromWonList = null;

    /**
     * Include this container and set the <b>DeletedFromLostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost, and has deleted from their My eBay page.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $deletedFromLostList
     */
    private $deletedFromLostList = null;

    /**
     * Include this container and set the <b>BuyingSummary.Include</b> field to <code>true</code> to return the <b>BuyingSummary</b> container in the response. The <b>BuyingSummary</b> container consists of buying/bidding activity counts and values.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $buyingSummary
     */
    private $buyingSummary = null;

    /**
     * Include this container and set the <b>UserDefinedLists.Include</b> field to <code>true</code> to return one or more user-defined lists. User-defined lists are lists created by the user in My eBay and consists of a combination of items, saved sellers, and/or saved searches.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBaySelectionType $userDefinedLists
     */
    private $userDefinedLists = null;

    /**
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the <b>Variations</b> node is returned for all multiple-variation listings in the response.
     *  <br>
     *
     * @var bool $hideVariations
     */
    private $hideVariations = null;

    /**
     * Gets as watchList
     *
     * Include this container and set the <b>WatchList.Include</b> field to <code>true</code> to return the list of items on the eBay user's Watch List.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of watched items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getWatchList()
    {
        return $this->watchList;
    }

    /**
     * Sets a new watchList
     *
     * Include this container and set the <b>WatchList.Include</b> field to <code>true</code> to return the list of items on the eBay user's Watch List.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of watched items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $watchList
     * @return self
     */
    public function setWatchList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $watchList)
    {
        $this->watchList = $watchList;
        return $this;
    }

    /**
     * Gets as bidList
     *
     * Include this container and set the <b>BidList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getBidList()
    {
        return $this->bidList;
    }

    /**
     * Sets a new bidList
     *
     * Include this container and set the <b>BidList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $bidList
     * @return self
     */
    public function setBidList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $bidList)
    {
        $this->bidList = $bidList;
        return $this;
    }

    /**
     * Gets as bestOfferList
     *
     * Include this container and set the <b>BestOfferList.Include</b> field to <code>true</code> to return the list of items on which the eBay user has made a Best Offer.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getBestOfferList()
    {
        return $this->bestOfferList;
    }

    /**
     * Sets a new bestOfferList
     *
     * Include this container and set the <b>BestOfferList.Include</b> field to <code>true</code> to return the list of items on which the eBay user has made a Best Offer.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $bestOfferList
     * @return self
     */
    public function setBestOfferList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $bestOfferList)
    {
        $this->bestOfferList = $bestOfferList;
        return $this;
    }

    /**
     * Gets as wonList
     *
     * Include this container and set the <b>WonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getWonList()
    {
        return $this->wonList;
    }

    /**
     * Sets a new wonList
     *
     * Include this container and set the <b>WonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $wonList
     * @return self
     */
    public function setWonList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $wonList)
    {
        $this->wonList = $wonList;
        return $this;
    }

    /**
     * Gets as lostList
     *
     * Include this container and set the <b>LostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getLostList()
    {
        return $this->lostList;
    }

    /**
     * Sets a new lostList
     *
     * Include this container and set the <b>LostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $lostList
     * @return self
     */
    public function setLostList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $lostList)
    {
        $this->lostList = $lostList;
        return $this;
    }

    /**
     * Gets as favoriteSearches
     *
     * Include this container and set the <b>FavoriteSearches.Include</b> field to <code>true</code> to return the list of the eBay user's saved searches.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBaySelectionType
     */
    public function getFavoriteSearches()
    {
        return $this->favoriteSearches;
    }

    /**
     * Sets a new favoriteSearches
     *
     * Include this container and set the <b>FavoriteSearches.Include</b> field to <code>true</code> to return the list of the eBay user's saved searches.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBaySelectionType $favoriteSearches
     * @return self
     */
    public function setFavoriteSearches(\Nogrod\eBaySDK\Trading\MyeBaySelectionType $favoriteSearches)
    {
        $this->favoriteSearches = $favoriteSearches;
        return $this;
    }

    /**
     * Gets as favoriteSellers
     *
     * Include this container and set the <b>FavoriteSellers.Include</b> field to <code>true</code> to return the list of the eBay user's saved sellers.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBaySelectionType
     */
    public function getFavoriteSellers()
    {
        return $this->favoriteSellers;
    }

    /**
     * Sets a new favoriteSellers
     *
     * Include this container and set the <b>FavoriteSellers.Include</b> field to <code>true</code> to return the list of the eBay user's saved sellers.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBaySelectionType $favoriteSellers
     * @return self
     */
    public function setFavoriteSellers(\Nogrod\eBaySDK\Trading\MyeBaySelectionType $favoriteSellers)
    {
        $this->favoriteSellers = $favoriteSellers;
        return $this;
    }

    /**
     * Gets as secondChanceOffer
     *
     * Include this container and set the <b>SecondChanceOffer.Include</b> field to <code>true</code> to return any Second Chance Offers that the eBay user has received.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBaySelectionType
     */
    public function getSecondChanceOffer()
    {
        return $this->secondChanceOffer;
    }

    /**
     * Sets a new secondChanceOffer
     *
     * Include this container and set the <b>SecondChanceOffer.Include</b> field to <code>true</code> to return any Second Chance Offers that the eBay user has received.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBaySelectionType $secondChanceOffer
     * @return self
     */
    public function setSecondChanceOffer(\Nogrod\eBaySDK\Trading\MyeBaySelectionType $secondChanceOffer)
    {
        $this->secondChanceOffer = $secondChanceOffer;
        return $this;
    }

    /**
     * Gets as deletedFromWonList
     *
     * Include this container and set the <b>DeletedFromWonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won, but has deleted from their My eBay page.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getDeletedFromWonList()
    {
        return $this->deletedFromWonList;
    }

    /**
     * Sets a new deletedFromWonList
     *
     * Include this container and set the <b>DeletedFromWonList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and won, but has deleted from their My eBay page.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $deletedFromWonList
     * @return self
     */
    public function setDeletedFromWonList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $deletedFromWonList)
    {
        $this->deletedFromWonList = $deletedFromWonList;
        return $this;
    }

    /**
     * Gets as deletedFromLostList
     *
     * Include this container and set the <b>DeletedFromLostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost, and has deleted from their My eBay page.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getDeletedFromLostList()
    {
        return $this->deletedFromLostList;
    }

    /**
     * Sets a new deletedFromLostList
     *
     * Include this container and set the <b>DeletedFromLostList.Include</b> field to <code>true</code> to return the list of auction items on which the eBay user has bid on and lost, and has deleted from their My eBay page.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of auction items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $deletedFromLostList
     * @return self
     */
    public function setDeletedFromLostList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $deletedFromLostList)
    {
        $this->deletedFromLostList = $deletedFromLostList;
        return $this;
    }

    /**
     * Gets as buyingSummary
     *
     * Include this container and set the <b>BuyingSummary.Include</b> field to <code>true</code> to return the <b>BuyingSummary</b> container in the response. The <b>BuyingSummary</b> container consists of buying/bidding activity counts and values.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getBuyingSummary()
    {
        return $this->buyingSummary;
    }

    /**
     * Sets a new buyingSummary
     *
     * Include this container and set the <b>BuyingSummary.Include</b> field to <code>true</code> to return the <b>BuyingSummary</b> container in the response. The <b>BuyingSummary</b> container consists of buying/bidding activity counts and values.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $buyingSummary
     * @return self
     */
    public function setBuyingSummary(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $buyingSummary)
    {
        $this->buyingSummary = $buyingSummary;
        return $this;
    }

    /**
     * Gets as userDefinedLists
     *
     * Include this container and set the <b>UserDefinedLists.Include</b> field to <code>true</code> to return one or more user-defined lists. User-defined lists are lists created by the user in My eBay and consists of a combination of items, saved sellers, and/or saved searches.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBaySelectionType
     */
    public function getUserDefinedLists()
    {
        return $this->userDefinedLists;
    }

    /**
     * Sets a new userDefinedLists
     *
     * Include this container and set the <b>UserDefinedLists.Include</b> field to <code>true</code> to return one or more user-defined lists. User-defined lists are lists created by the user in My eBay and consists of a combination of items, saved sellers, and/or saved searches.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBaySelectionType $userDefinedLists
     * @return self
     */
    public function setUserDefinedLists(\Nogrod\eBaySDK\Trading\MyeBaySelectionType $userDefinedLists)
    {
        $this->userDefinedLists = $userDefinedLists;
        return $this;
    }

    /**
     * Gets as hideVariations
     *
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the <b>Variations</b> node is returned for all multiple-variation listings in the response.
     *  <br>
     *
     * @return bool
     */
    public function getHideVariations()
    {
        return $this->hideVariations;
    }

    /**
     * Sets a new hideVariations
     *
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the <b>Variations</b> node is returned for all multiple-variation listings in the response.
     *  <br>
     *
     * @param bool $hideVariations
     * @return self
     */
    public function setHideVariations($hideVariations)
    {
        $this->hideVariations = $hideVariations;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->watchList;
        if (null !== $value) {
            $writer->startElementNs(null, 'WatchList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->bidList;
        if (null !== $value) {
            $writer->startElementNs(null, 'BidList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->bestOfferList;
        if (null !== $value) {
            $writer->startElementNs(null, 'BestOfferList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->wonList;
        if (null !== $value) {
            $writer->startElementNs(null, 'WonList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->lostList;
        if (null !== $value) {
            $writer->startElementNs(null, 'LostList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->favoriteSearches;
        if (null !== $value) {
            $writer->startElementNs(null, 'FavoriteSearches', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->favoriteSellers;
        if (null !== $value) {
            $writer->startElementNs(null, 'FavoriteSellers', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->secondChanceOffer;
        if (null !== $value) {
            $writer->startElementNs(null, 'SecondChanceOffer', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->deletedFromWonList;
        if (null !== $value) {
            $writer->startElementNs(null, 'DeletedFromWonList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->deletedFromLostList;
        if (null !== $value) {
            $writer->startElementNs(null, 'DeletedFromLostList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->buyingSummary;
        if (null !== $value) {
            $writer->startElementNs(null, 'BuyingSummary', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->userDefinedLists;
        if (null !== $value) {
            $writer->startElementNs(null, 'UserDefinedLists', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->hideVariations;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HideVariations', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMyeBayBuyingRequestType
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
                case 'WatchList':
                    $this->watchList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'BidList':
                    $this->bidList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'BestOfferList':
                    $this->bestOfferList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'WonList':
                    $this->wonList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'LostList':
                    $this->lostList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'FavoriteSearches':
                    $this->favoriteSearches = \Nogrod\eBaySDK\Trading\MyeBaySelectionType::xmlRead($reader);
                    return true;
                case 'FavoriteSellers':
                    $this->favoriteSellers = \Nogrod\eBaySDK\Trading\MyeBaySelectionType::xmlRead($reader);
                    return true;
                case 'SecondChanceOffer':
                    $this->secondChanceOffer = \Nogrod\eBaySDK\Trading\MyeBaySelectionType::xmlRead($reader);
                    return true;
                case 'DeletedFromWonList':
                    $this->deletedFromWonList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'DeletedFromLostList':
                    $this->deletedFromLostList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'BuyingSummary':
                    $this->buyingSummary = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'UserDefinedLists':
                    $this->userDefinedLists = \Nogrod\eBaySDK\Trading\MyeBaySelectionType::xmlRead($reader);
                    return true;
                case 'HideVariations':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hideVariations = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
