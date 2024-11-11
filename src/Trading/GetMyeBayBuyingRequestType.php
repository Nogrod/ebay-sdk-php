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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getWatchList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchList", $value);
        }
        $value = $this->getBidList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidList", $value);
        }
        $value = $this->getBestOfferList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferList", $value);
        }
        $value = $this->getWonList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WonList", $value);
        }
        $value = $this->getLostList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LostList", $value);
        }
        $value = $this->getFavoriteSearches();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSearches", $value);
        }
        $value = $this->getFavoriteSellers();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FavoriteSellers", $value);
        }
        $value = $this->getSecondChanceOffer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondChanceOffer", $value);
        }
        $value = $this->getDeletedFromWonList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedFromWonList", $value);
        }
        $value = $this->getDeletedFromLostList();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedFromLostList", $value);
        }
        $value = $this->getBuyingSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyingSummary", $value);
        }
        $value = $this->getUserDefinedLists();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserDefinedLists", $value);
        }
        $value = $this->getHideVariations();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HideVariations", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchList');
        if (null !== $value) {
            $this->setWatchList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidList');
        if (null !== $value) {
            $this->setBidList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferList');
        if (null !== $value) {
            $this->setBestOfferList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}WonList');
        if (null !== $value) {
            $this->setWonList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}LostList');
        if (null !== $value) {
            $this->setLostList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSearches');
        if (null !== $value) {
            $this->setFavoriteSearches(\Nogrod\eBaySDK\Trading\MyeBaySelectionType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSellers');
        if (null !== $value) {
            $this->setFavoriteSellers(\Nogrod\eBaySDK\Trading\MyeBaySelectionType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceOffer');
        if (null !== $value) {
            $this->setSecondChanceOffer(\Nogrod\eBaySDK\Trading\MyeBaySelectionType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedFromWonList');
        if (null !== $value) {
            $this->setDeletedFromWonList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedFromLostList');
        if (null !== $value) {
            $this->setDeletedFromLostList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingSummary');
        if (null !== $value) {
            $this->setBuyingSummary(\Nogrod\eBaySDK\Trading\ItemListCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserDefinedLists');
        if (null !== $value) {
            $this->setUserDefinedLists(\Nogrod\eBaySDK\Trading\MyeBaySelectionType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HideVariations');
        if (null !== $value) {
            $this->setHideVariations(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
