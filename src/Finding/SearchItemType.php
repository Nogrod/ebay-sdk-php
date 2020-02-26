<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing SearchItemType
 *
 * Container for the data of a single item that matches the search criteria.
 * XSD Type: SearchItem
 */
class SearchItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The ID that uniquely identifies the item listing. eBay generates this
     *  ID when an item is listed. ID values are unique across all eBay sites.
     *
     * @var string $itemId
     */
    private $itemId = null;

    /**
     * Name of the item as it appears in the listing title, or in search and
     *  browse results.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The identifier for the site on which the item is listed. Returns a Global
     *  ID, which is a unique identifier that specifies the combination of the
     *  site, language, and territory. In other eBay APIs (such as the Shopping
     *  API), this value is know as the site ID.
     *
     * @var string $globalId
     */
    private $globalId = null;

    /**
     * Subtitle of the item. Only returned if the seller included a subtitle for
     *  the listing.
     *
     * @var string $subtitle
     */
    private $subtitle = null;

    /**
     * Details about the first (or only) category in which the item is listed.
     *  Note that items can be listed in more than a single category.
     *
     * @var \Nogrod\eBaySDK\Finding\CategoryType $primaryCategory
     */
    private $primaryCategory = null;

    /**
     * Details about the second category in which the item is listed. This
     *  element is not returned if the seller did not specify a secondary
     *  category.
     *
     * @var \Nogrod\eBaySDK\Finding\CategoryType $secondaryCategory
     */
    private $secondaryCategory = null;

    /**
     * URL for the Gallery thumbnail image. Returned only if the seller
     *  uploaded images for the item or the item was listed using a product
     *  identifier.
     *
     * @var string $galleryURL
     */
    private $galleryURL = null;

    /**
     * Contains three URLs for item thumbnail images in standard sizes. Not
     *  returned if the item has no images. That is, if the item was not listed
     *  using a product identifier and the seller has not uploaded images, the
     *  container will not be returned, even when the outputSelector is set to
     *  GalleryInfo.
     *
     * @var \Nogrod\eBaySDK\Finding\GalleryURLType[] $galleryInfoContainer
     */
    private $galleryInfoContainer = null;

    /**
     * The URL to view this specific listing on eBay.
     *  <br><br>
     *  The returned URL is optimized to support natural search. That is, the URL
     *  is designed to make items on eBay easier to find via popular internet
     *  search engines. The URL includes the item title along with other
     *  optimizations.
     *  <br><br>
     *  If you enabled affiliate tracking in the call, viewItemURL contains a
     *  string that includes affiliate tracking information.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  eBay URLs returned in fields, such as <b
     *  class="con">viewItemURL</b>, are subject to syntax and other
     *  changes without notice. To avoid problems in your application when eBay
     *  alters the URL format, we advise you to avoid parsing eBay URLs
     *  programmatically. We strive to ensure that other fields in the response
     *  contain all the information that is encoded in the URL, and more.
     *  </span>
     *
     * @var string $viewItemURL
     */
    private $viewItemURL = null;

    /**
     * A unique identification number assigned by eBay to a registered
     *  non-profit charity organization.
     *
     * @var string $charityId
     */
    private $charityId = null;

    /**
     * Unique identifier for the eBay catalog product with which the item was
     *  listed. An eBay catalog product consists of pre-filled Item Specifics,
     *  additional descriptive information, plus a stock photo (if available).
     *  These product details are used to pre-fill item information, which is
     *  used to describe the item and can also help surface the item in searches.
     *  <br><br>
     *  eBay supports the following types of product ID types: ISBN, UPC, EAN,
     *  and ReferenceID (ePID, also known as an eBay Product Reference ID).
     *  ReferenceID values are returned when available. A UPC, ISBN, or EAN
     *  product identifier will be returned only when a ReferenceID is not
     *  available.
     *  <br><br>
     *  This productId value can be used as input with findItemsByProduct to
     *  retrieve items that were listed with the specified eBay catalog product.
     *  <br><br>
     *  This field is only returned when a product was used to list the item.
     *
     * @var \Nogrod\eBaySDK\Finding\ProductIdType $productId
     */
    private $productId = null;

    /**
     * Identifies the payment method (or methods) the seller will accept for the
     *  item (such as PayPal).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the seller accepts only PayPal, the buyer can still pay with a
     *  credit card. PayPal supports major credit cards.
     *  </span>
     *  Payment methods are not applicable to eBay Real Estate advertisement
     *  listings or other Classified Ad listing formats.
     *
     * @var string[] $paymentMethod
     */
    private $paymentMethod = [
        
    ];

    /**
     * If true, the seller requires immediate payment for the item. If false (or
     *  not specified), immediate payment is not requested. Buyers must have a
     *  PayPal account to purchase items that require immediate payment.
     *  <br><br>
     *  A seller can choose to require immediate payment for Fixed Price and Buy
     *  It Now listings, including eBay Stores Inventory listings. If a Buy It
     *  Now item ends as an auction (that is, if the Buy It Now option is removed
     *  due to bids being placed on the listing), the immediate payment
     *  requirement does not apply.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The value of the AutoPay flag indicates the seller's stated preference
     *  only. It does not indicate whether the listing is still a candidate for
     *  purchase via immediate payment. For example, if a listing receives bids
     *  and no longer qualifies for immediate payment, the value of the AutoPay
     *  flag does not change.
     *  </span>
     *  <br>
     *  Only applicable to items listed on PayPal-enabled sites and in categories
     *  that support immediate payment.
     *
     * @var bool $autoPay
     */
    private $autoPay = null;

    /**
     * The postal code where the listed item is located. This field is returned
     *  only if a postal code has been specified by the seller. Sellers set a postal code
     *  (or zip code in US) for items when they are listed. The postal code is used for
     *  calculating proximity searches. It is anonymized when returned via the API.
     *  <br><br>eBay proximity and local search behavior can use the combination of buyerPostalCode and postalCode values.
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * Physical location of the item, as specified by the seller. This gives a
     *  general indication from where the item will be shipped (or delivered).
     *
     * @var string $location
     */
    private $location = null;

    /**
     * Two-letter ISO 3166 country code to indicate the country where the item
     *  is located (e.g., "US" for the United States or "GB" for the United
     *  Kingdom).
     *
     * @var string $country
     */
    private $country = null;

    /**
     * Information about the eBay store in which the item is listed. Only
     *  returned if the item is listed in a store and StoreInfo is specified in
     *  the outputSelector field in the request.
     *
     * @var \Nogrod\eBaySDK\Finding\StorefrontType $storeInfo
     */
    private $storeInfo = null;

    /**
     * Information about the item's seller. Only returned if SellerInfo is
     *  specified in the outputSelector field in the request.
     *
     * @var \Nogrod\eBaySDK\Finding\SellerInfoType $sellerInfo
     */
    private $sellerInfo = null;

    /**
     * Container for data about a listing's shipping details.
     *
     * @var \Nogrod\eBaySDK\Finding\ShippingInfoType $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * Specifies the item's selling status with regards to eBay's processing
     *  workflow.
     *
     * @var \Nogrod\eBaySDK\Finding\SellingStatusType $sellingStatus
     */
    private $sellingStatus = null;

    /**
     * The format type of the listing, such as online auction, fixed price, or
     *  advertisement.
     *
     * @var \Nogrod\eBaySDK\Finding\ListingInfoType $listingInfo
     */
    private $listingInfo = null;

    /**
     * This is set to true if the seller accepts return of the item.
     *
     * @var bool $returnsAccepted
     */
    private $returnsAccepted = null;

    /**
     * URL for the Gallery Plus image. The size of Gallery Plus images (up to
     *  500 pixels on the longest side) is bigger than the size of standard
     *  gallery images. In site search results, you can view the Gallery Plus
     *  image by hovering over or clicking the Enlarge link or magifying glass
     *  icon. This field is only returned when the seller has opted for
     *  the Gallery Plus option for the given item.
     *
     * @var string[] $galleryPlusPictureURL
     */
    private $galleryPlusPictureURL = [
        
    ];

    /**
     * Starting in March 2010, parts compatibility will be supported in limited
     *  Parts & Accessories categories for eBay Motors in the Production
     *  environment. For these categories, a compatible application will always
     *  be a vehicle, which is specified by a combination of make, model, and
     *  year. Optionally, trim and engine data may also be specifed for a
     *  vehicle.
     *  <br><br>
     *  This field returns terms from the keywords in the request that match
     *  values in one of the item's compatible applications (vehicles). If the
     *  keywords match more than one compatible application for an item, the
     *  field returns "Two or more of your vehicles" to indicate multiple
     *  matches.
     *  <br><br>
     *  For example, keyword queries that contain vehicle details, such as make
     *  and model (e.g., Honda Accord), in addition to keywords for the part or
     *  accessory, will search through structured parts compatibility information
     *  for matching listings. If an item has a 2007 Honda Accord (any trim or
     *  engine) specified as a compatible application, and the item matches the
     *  part or accessory terms in the query, this field will return the matching
     *  terms from the query (i.e., Honda Accord).
     *  <br><br>
     *  Parts compatibility is an eBay feature that uses structured data to
     *  associate compatible assemblies with parts and accessories listed on
     *  eBay. For example, parts compatibility enables sellers to specify
     *  accurately and comprehensively the vehicles on which a side mirror or a
     *  rim fit. Parts compatibility improves search relevancy and frees up item
     *  titles and descriptions for more useful descriptions of the part.
     *
     * @var string $compatibility
     */
    private $compatibility = null;

    /**
     * The distance that the item is from the buyer, calculated using
     *  buyerPostalCode. The unit for distance varies by site, and is either
     *  miles or kilometers. If the country whose site you are searching uses
     *  kilometers to measure distance (for example, India/EBAY-IN), the unit is
     *  kilometers. If the site is either the US or UK, the distance unit is
     *  miles.
     *  <br><br>
     *  This value is only returned for distance-based searches. You must specify
     *  a buyerPostalCode and either sort by Distance, or use a combination of
     *  the MaxDistance LocalSearch itemFilters.
     *
     * @var \Nogrod\eBaySDK\Finding\DistanceType $distance
     */
    private $distance = null;

    /**
     * Contains information about the item's condition.
     *  Only returned when the seller listed the item with an
     *  item condition.<br>
     *  <br>
     *  Different categories can support different
     *  condition choices. If a listing is in two categories,
     *  the seller uses condition details that are supported in
     *  the primary category. Thus, even if two nearly identical
     *  items are found in the same category search, they could support
     *  different condition details if they have different
     *  primary categories.
     *  For example, suppose Seller A lists a concert T-shirt
     *  in clothing, and also in music accessories as the
     *  secondary category. Seller B lists an identical shirt in
     *  music accessories only.
     *  If you search against the music accessories category,
     *  you will find both items, but seller A's shirt may have
     *  condition details that are slightly different from seller B's
     *  shirt, because the listings have different primary categories.
     *
     * @var \Nogrod\eBaySDK\Finding\ConditionType $condition
     */
    private $condition = null;

    /**
     * return true if the item is a multi-variation listing
     *
     * @var bool $isMultiVariationListing
     */
    private $isMultiVariationListing = null;

    /**
     * The format type of the listing, such as online auction, fixed price, or
     *  advertisement.
     *
     * @var \Nogrod\eBaySDK\Finding\DiscountPriceInfoType $discountPriceInfo
     */
    private $discountPriceInfo = null;

    /**
     * URL for item's picture url with size 800x800
     *
     * @var string $pictureURLSuperSize
     */
    private $pictureURLSuperSize = null;

    /**
     * URL for item's picture url with size 400x400
     *
     * @var string $pictureURLLarge
     */
    private $pictureURLLarge = null;

    /**
     * Unit price information of the item
     *
     * @var \Nogrod\eBaySDK\Finding\UnitPriceInfoType $unitPrice
     */
    private $unitPrice = null;

    /**
     * item attribute
     *
     * @var \Nogrod\eBaySDK\Finding\ItemAttributeType[] $attribute
     */
    private $attribute = [
        
    ];

    /**
     * Indicates whether the item is Top Rated Plus item. A top rated plus
     *  item:
     *  <ul>
     *  <li> is listed by experienced sellers with highest buyer ratings;/li>
     *  <li>Sellers commit to shipping your items in a business day with tracking provided and offer at least a 14-day, money-back return policy;/li>
     *  This field is returned for the following sites only: US (EBAY-US)
     *
     * @var bool $topRatedListing
     */
    private $topRatedListing = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * eek status of the item
     *
     * @var string[] $eekStatus
     */
    private $eekStatus = [
        
    ];

    /**
     * Indicates whether the item is ebayPlus item. A eBayPlus
     *  item:
     *  <ul>
     *  <li> Cassini returns the ebayPlus flag;/li>
     *  This field is returned for the following sites only: DE (EBAY-DE)
     *
     * @var bool $eBayPlusEnabled
     */
    private $eBayPlusEnabled = null;

    /**
     * Gets as itemId
     *
     * The ID that uniquely identifies the item listing. eBay generates this
     *  ID when an item is listed. ID values are unique across all eBay sites.
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Sets a new itemId
     *
     * The ID that uniquely identifies the item listing. eBay generates this
     *  ID when an item is listed. ID values are unique across all eBay sites.
     *
     * @param string $itemId
     * @return self
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * Gets as title
     *
     * Name of the item as it appears in the listing title, or in search and
     *  browse results.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Name of the item as it appears in the listing title, or in search and
     *  browse results.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as globalId
     *
     * The identifier for the site on which the item is listed. Returns a Global
     *  ID, which is a unique identifier that specifies the combination of the
     *  site, language, and territory. In other eBay APIs (such as the Shopping
     *  API), this value is know as the site ID.
     *
     * @return string
     */
    public function getGlobalId()
    {
        return $this->globalId;
    }

    /**
     * Sets a new globalId
     *
     * The identifier for the site on which the item is listed. Returns a Global
     *  ID, which is a unique identifier that specifies the combination of the
     *  site, language, and territory. In other eBay APIs (such as the Shopping
     *  API), this value is know as the site ID.
     *
     * @param string $globalId
     * @return self
     */
    public function setGlobalId($globalId)
    {
        $this->globalId = $globalId;
        return $this;
    }

    /**
     * Gets as subtitle
     *
     * Subtitle of the item. Only returned if the seller included a subtitle for
     *  the listing.
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * Subtitle of the item. Only returned if the seller included a subtitle for
     *  the listing.
     *
     * @param string $subtitle
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as primaryCategory
     *
     * Details about the first (or only) category in which the item is listed.
     *  Note that items can be listed in more than a single category.
     *
     * @return \Nogrod\eBaySDK\Finding\CategoryType
     */
    public function getPrimaryCategory()
    {
        return $this->primaryCategory;
    }

    /**
     * Sets a new primaryCategory
     *
     * Details about the first (or only) category in which the item is listed.
     *  Note that items can be listed in more than a single category.
     *
     * @param \Nogrod\eBaySDK\Finding\CategoryType $primaryCategory
     * @return self
     */
    public function setPrimaryCategory(\Nogrod\eBaySDK\Finding\CategoryType $primaryCategory)
    {
        $this->primaryCategory = $primaryCategory;
        return $this;
    }

    /**
     * Gets as secondaryCategory
     *
     * Details about the second category in which the item is listed. This
     *  element is not returned if the seller did not specify a secondary
     *  category.
     *
     * @return \Nogrod\eBaySDK\Finding\CategoryType
     */
    public function getSecondaryCategory()
    {
        return $this->secondaryCategory;
    }

    /**
     * Sets a new secondaryCategory
     *
     * Details about the second category in which the item is listed. This
     *  element is not returned if the seller did not specify a secondary
     *  category.
     *
     * @param \Nogrod\eBaySDK\Finding\CategoryType $secondaryCategory
     * @return self
     */
    public function setSecondaryCategory(\Nogrod\eBaySDK\Finding\CategoryType $secondaryCategory)
    {
        $this->secondaryCategory = $secondaryCategory;
        return $this;
    }

    /**
     * Gets as galleryURL
     *
     * URL for the Gallery thumbnail image. Returned only if the seller
     *  uploaded images for the item or the item was listed using a product
     *  identifier.
     *
     * @return string
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }

    /**
     * Sets a new galleryURL
     *
     * URL for the Gallery thumbnail image. Returned only if the seller
     *  uploaded images for the item or the item was listed using a product
     *  identifier.
     *
     * @param string $galleryURL
     * @return self
     */
    public function setGalleryURL($galleryURL)
    {
        $this->galleryURL = $galleryURL;
        return $this;
    }

    /**
     * Adds as galleryURL
     *
     * Contains three URLs for item thumbnail images in standard sizes. Not
     *  returned if the item has no images. That is, if the item was not listed
     *  using a product identifier and the seller has not uploaded images, the
     *  container will not be returned, even when the outputSelector is set to
     *  GalleryInfo.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\GalleryURLType $galleryURL
     */
    public function addToGalleryInfoContainer(\Nogrod\eBaySDK\Finding\GalleryURLType $galleryURL)
    {
        $this->galleryInfoContainer[] = $galleryURL;
        return $this;
    }

    /**
     * isset galleryInfoContainer
     *
     * Contains three URLs for item thumbnail images in standard sizes. Not
     *  returned if the item has no images. That is, if the item was not listed
     *  using a product identifier and the seller has not uploaded images, the
     *  container will not be returned, even when the outputSelector is set to
     *  GalleryInfo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGalleryInfoContainer($index)
    {
        return isset($this->galleryInfoContainer[$index]);
    }

    /**
     * unset galleryInfoContainer
     *
     * Contains three URLs for item thumbnail images in standard sizes. Not
     *  returned if the item has no images. That is, if the item was not listed
     *  using a product identifier and the seller has not uploaded images, the
     *  container will not be returned, even when the outputSelector is set to
     *  GalleryInfo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGalleryInfoContainer($index)
    {
        unset($this->galleryInfoContainer[$index]);
    }

    /**
     * Gets as galleryInfoContainer
     *
     * Contains three URLs for item thumbnail images in standard sizes. Not
     *  returned if the item has no images. That is, if the item was not listed
     *  using a product identifier and the seller has not uploaded images, the
     *  container will not be returned, even when the outputSelector is set to
     *  GalleryInfo.
     *
     * @return \Nogrod\eBaySDK\Finding\GalleryURLType[]
     */
    public function getGalleryInfoContainer()
    {
        return $this->galleryInfoContainer;
    }

    /**
     * Sets a new galleryInfoContainer
     *
     * Contains three URLs for item thumbnail images in standard sizes. Not
     *  returned if the item has no images. That is, if the item was not listed
     *  using a product identifier and the seller has not uploaded images, the
     *  container will not be returned, even when the outputSelector is set to
     *  GalleryInfo.
     *
     * @param \Nogrod\eBaySDK\Finding\GalleryURLType[] $galleryInfoContainer
     * @return self
     */
    public function setGalleryInfoContainer(array $galleryInfoContainer)
    {
        $this->galleryInfoContainer = $galleryInfoContainer;
        return $this;
    }

    /**
     * Gets as viewItemURL
     *
     * The URL to view this specific listing on eBay.
     *  <br><br>
     *  The returned URL is optimized to support natural search. That is, the URL
     *  is designed to make items on eBay easier to find via popular internet
     *  search engines. The URL includes the item title along with other
     *  optimizations.
     *  <br><br>
     *  If you enabled affiliate tracking in the call, viewItemURL contains a
     *  string that includes affiliate tracking information.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  eBay URLs returned in fields, such as <b
     *  class="con">viewItemURL</b>, are subject to syntax and other
     *  changes without notice. To avoid problems in your application when eBay
     *  alters the URL format, we advise you to avoid parsing eBay URLs
     *  programmatically. We strive to ensure that other fields in the response
     *  contain all the information that is encoded in the URL, and more.
     *  </span>
     *
     * @return string
     */
    public function getViewItemURL()
    {
        return $this->viewItemURL;
    }

    /**
     * Sets a new viewItemURL
     *
     * The URL to view this specific listing on eBay.
     *  <br><br>
     *  The returned URL is optimized to support natural search. That is, the URL
     *  is designed to make items on eBay easier to find via popular internet
     *  search engines. The URL includes the item title along with other
     *  optimizations.
     *  <br><br>
     *  If you enabled affiliate tracking in the call, viewItemURL contains a
     *  string that includes affiliate tracking information.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  eBay URLs returned in fields, such as <b
     *  class="con">viewItemURL</b>, are subject to syntax and other
     *  changes without notice. To avoid problems in your application when eBay
     *  alters the URL format, we advise you to avoid parsing eBay URLs
     *  programmatically. We strive to ensure that other fields in the response
     *  contain all the information that is encoded in the URL, and more.
     *  </span>
     *
     * @param string $viewItemURL
     * @return self
     */
    public function setViewItemURL($viewItemURL)
    {
        $this->viewItemURL = $viewItemURL;
        return $this;
    }

    /**
     * Gets as charityId
     *
     * A unique identification number assigned by eBay to a registered
     *  non-profit charity organization.
     *
     * @return string
     */
    public function getCharityId()
    {
        return $this->charityId;
    }

    /**
     * Sets a new charityId
     *
     * A unique identification number assigned by eBay to a registered
     *  non-profit charity organization.
     *
     * @param string $charityId
     * @return self
     */
    public function setCharityId($charityId)
    {
        $this->charityId = $charityId;
        return $this;
    }

    /**
     * Gets as productId
     *
     * Unique identifier for the eBay catalog product with which the item was
     *  listed. An eBay catalog product consists of pre-filled Item Specifics,
     *  additional descriptive information, plus a stock photo (if available).
     *  These product details are used to pre-fill item information, which is
     *  used to describe the item and can also help surface the item in searches.
     *  <br><br>
     *  eBay supports the following types of product ID types: ISBN, UPC, EAN,
     *  and ReferenceID (ePID, also known as an eBay Product Reference ID).
     *  ReferenceID values are returned when available. A UPC, ISBN, or EAN
     *  product identifier will be returned only when a ReferenceID is not
     *  available.
     *  <br><br>
     *  This productId value can be used as input with findItemsByProduct to
     *  retrieve items that were listed with the specified eBay catalog product.
     *  <br><br>
     *  This field is only returned when a product was used to list the item.
     *
     * @return \Nogrod\eBaySDK\Finding\ProductIdType
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets a new productId
     *
     * Unique identifier for the eBay catalog product with which the item was
     *  listed. An eBay catalog product consists of pre-filled Item Specifics,
     *  additional descriptive information, plus a stock photo (if available).
     *  These product details are used to pre-fill item information, which is
     *  used to describe the item and can also help surface the item in searches.
     *  <br><br>
     *  eBay supports the following types of product ID types: ISBN, UPC, EAN,
     *  and ReferenceID (ePID, also known as an eBay Product Reference ID).
     *  ReferenceID values are returned when available. A UPC, ISBN, or EAN
     *  product identifier will be returned only when a ReferenceID is not
     *  available.
     *  <br><br>
     *  This productId value can be used as input with findItemsByProduct to
     *  retrieve items that were listed with the specified eBay catalog product.
     *  <br><br>
     *  This field is only returned when a product was used to list the item.
     *
     * @param \Nogrod\eBaySDK\Finding\ProductIdType $productId
     * @return self
     */
    public function setProductId(\Nogrod\eBaySDK\Finding\ProductIdType $productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * Adds as paymentMethod
     *
     * Identifies the payment method (or methods) the seller will accept for the
     *  item (such as PayPal).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the seller accepts only PayPal, the buyer can still pay with a
     *  credit card. PayPal supports major credit cards.
     *  </span>
     *  Payment methods are not applicable to eBay Real Estate advertisement
     *  listings or other Classified Ad listing formats.
     *
     * @return self
     * @param string $paymentMethod
     */
    public function addToPaymentMethod($paymentMethod)
    {
        $this->paymentMethod[] = $paymentMethod;
        return $this;
    }

    /**
     * isset paymentMethod
     *
     * Identifies the payment method (or methods) the seller will accept for the
     *  item (such as PayPal).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the seller accepts only PayPal, the buyer can still pay with a
     *  credit card. PayPal supports major credit cards.
     *  </span>
     *  Payment methods are not applicable to eBay Real Estate advertisement
     *  listings or other Classified Ad listing formats.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMethod($index)
    {
        return isset($this->paymentMethod[$index]);
    }

    /**
     * unset paymentMethod
     *
     * Identifies the payment method (or methods) the seller will accept for the
     *  item (such as PayPal).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the seller accepts only PayPal, the buyer can still pay with a
     *  credit card. PayPal supports major credit cards.
     *  </span>
     *  Payment methods are not applicable to eBay Real Estate advertisement
     *  listings or other Classified Ad listing formats.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMethod($index)
    {
        unset($this->paymentMethod[$index]);
    }

    /**
     * Gets as paymentMethod
     *
     * Identifies the payment method (or methods) the seller will accept for the
     *  item (such as PayPal).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the seller accepts only PayPal, the buyer can still pay with a
     *  credit card. PayPal supports major credit cards.
     *  </span>
     *  Payment methods are not applicable to eBay Real Estate advertisement
     *  listings or other Classified Ad listing formats.
     *
     * @return string[]
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * Identifies the payment method (or methods) the seller will accept for the
     *  item (such as PayPal).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the seller accepts only PayPal, the buyer can still pay with a
     *  credit card. PayPal supports major credit cards.
     *  </span>
     *  Payment methods are not applicable to eBay Real Estate advertisement
     *  listings or other Classified Ad listing formats.
     *
     * @param string[] $paymentMethod
     * @return self
     */
    public function setPaymentMethod(array $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as autoPay
     *
     * If true, the seller requires immediate payment for the item. If false (or
     *  not specified), immediate payment is not requested. Buyers must have a
     *  PayPal account to purchase items that require immediate payment.
     *  <br><br>
     *  A seller can choose to require immediate payment for Fixed Price and Buy
     *  It Now listings, including eBay Stores Inventory listings. If a Buy It
     *  Now item ends as an auction (that is, if the Buy It Now option is removed
     *  due to bids being placed on the listing), the immediate payment
     *  requirement does not apply.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The value of the AutoPay flag indicates the seller's stated preference
     *  only. It does not indicate whether the listing is still a candidate for
     *  purchase via immediate payment. For example, if a listing receives bids
     *  and no longer qualifies for immediate payment, the value of the AutoPay
     *  flag does not change.
     *  </span>
     *  <br>
     *  Only applicable to items listed on PayPal-enabled sites and in categories
     *  that support immediate payment.
     *
     * @return bool
     */
    public function getAutoPay()
    {
        return $this->autoPay;
    }

    /**
     * Sets a new autoPay
     *
     * If true, the seller requires immediate payment for the item. If false (or
     *  not specified), immediate payment is not requested. Buyers must have a
     *  PayPal account to purchase items that require immediate payment.
     *  <br><br>
     *  A seller can choose to require immediate payment for Fixed Price and Buy
     *  It Now listings, including eBay Stores Inventory listings. If a Buy It
     *  Now item ends as an auction (that is, if the Buy It Now option is removed
     *  due to bids being placed on the listing), the immediate payment
     *  requirement does not apply.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The value of the AutoPay flag indicates the seller's stated preference
     *  only. It does not indicate whether the listing is still a candidate for
     *  purchase via immediate payment. For example, if a listing receives bids
     *  and no longer qualifies for immediate payment, the value of the AutoPay
     *  flag does not change.
     *  </span>
     *  <br>
     *  Only applicable to items listed on PayPal-enabled sites and in categories
     *  that support immediate payment.
     *
     * @param bool $autoPay
     * @return self
     */
    public function setAutoPay($autoPay)
    {
        $this->autoPay = $autoPay;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * The postal code where the listed item is located. This field is returned
     *  only if a postal code has been specified by the seller. Sellers set a postal code
     *  (or zip code in US) for items when they are listed. The postal code is used for
     *  calculating proximity searches. It is anonymized when returned via the API.
     *  <br><br>eBay proximity and local search behavior can use the combination of buyerPostalCode and postalCode values.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * The postal code where the listed item is located. This field is returned
     *  only if a postal code has been specified by the seller. Sellers set a postal code
     *  (or zip code in US) for items when they are listed. The postal code is used for
     *  calculating proximity searches. It is anonymized when returned via the API.
     *  <br><br>eBay proximity and local search behavior can use the combination of buyerPostalCode and postalCode values.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as location
     *
     * Physical location of the item, as specified by the seller. This gives a
     *  general indication from where the item will be shipped (or delivered).
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Physical location of the item, as specified by the seller. This gives a
     *  general indication from where the item will be shipped (or delivered).
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as country
     *
     * Two-letter ISO 3166 country code to indicate the country where the item
     *  is located (e.g., "US" for the United States or "GB" for the United
     *  Kingdom).
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Two-letter ISO 3166 country code to indicate the country where the item
     *  is located (e.g., "US" for the United States or "GB" for the United
     *  Kingdom).
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as storeInfo
     *
     * Information about the eBay store in which the item is listed. Only
     *  returned if the item is listed in a store and StoreInfo is specified in
     *  the outputSelector field in the request.
     *
     * @return \Nogrod\eBaySDK\Finding\StorefrontType
     */
    public function getStoreInfo()
    {
        return $this->storeInfo;
    }

    /**
     * Sets a new storeInfo
     *
     * Information about the eBay store in which the item is listed. Only
     *  returned if the item is listed in a store and StoreInfo is specified in
     *  the outputSelector field in the request.
     *
     * @param \Nogrod\eBaySDK\Finding\StorefrontType $storeInfo
     * @return self
     */
    public function setStoreInfo(\Nogrod\eBaySDK\Finding\StorefrontType $storeInfo)
    {
        $this->storeInfo = $storeInfo;
        return $this;
    }

    /**
     * Gets as sellerInfo
     *
     * Information about the item's seller. Only returned if SellerInfo is
     *  specified in the outputSelector field in the request.
     *
     * @return \Nogrod\eBaySDK\Finding\SellerInfoType
     */
    public function getSellerInfo()
    {
        return $this->sellerInfo;
    }

    /**
     * Sets a new sellerInfo
     *
     * Information about the item's seller. Only returned if SellerInfo is
     *  specified in the outputSelector field in the request.
     *
     * @param \Nogrod\eBaySDK\Finding\SellerInfoType $sellerInfo
     * @return self
     */
    public function setSellerInfo(\Nogrod\eBaySDK\Finding\SellerInfoType $sellerInfo)
    {
        $this->sellerInfo = $sellerInfo;
        return $this;
    }

    /**
     * Gets as shippingInfo
     *
     * Container for data about a listing's shipping details.
     *
     * @return \Nogrod\eBaySDK\Finding\ShippingInfoType
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * Sets a new shippingInfo
     *
     * Container for data about a listing's shipping details.
     *
     * @param \Nogrod\eBaySDK\Finding\ShippingInfoType $shippingInfo
     * @return self
     */
    public function setShippingInfo(\Nogrod\eBaySDK\Finding\ShippingInfoType $shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    /**
     * Gets as sellingStatus
     *
     * Specifies the item's selling status with regards to eBay's processing
     *  workflow.
     *
     * @return \Nogrod\eBaySDK\Finding\SellingStatusType
     */
    public function getSellingStatus()
    {
        return $this->sellingStatus;
    }

    /**
     * Sets a new sellingStatus
     *
     * Specifies the item's selling status with regards to eBay's processing
     *  workflow.
     *
     * @param \Nogrod\eBaySDK\Finding\SellingStatusType $sellingStatus
     * @return self
     */
    public function setSellingStatus(\Nogrod\eBaySDK\Finding\SellingStatusType $sellingStatus)
    {
        $this->sellingStatus = $sellingStatus;
        return $this;
    }

    /**
     * Gets as listingInfo
     *
     * The format type of the listing, such as online auction, fixed price, or
     *  advertisement.
     *
     * @return \Nogrod\eBaySDK\Finding\ListingInfoType
     */
    public function getListingInfo()
    {
        return $this->listingInfo;
    }

    /**
     * Sets a new listingInfo
     *
     * The format type of the listing, such as online auction, fixed price, or
     *  advertisement.
     *
     * @param \Nogrod\eBaySDK\Finding\ListingInfoType $listingInfo
     * @return self
     */
    public function setListingInfo(\Nogrod\eBaySDK\Finding\ListingInfoType $listingInfo)
    {
        $this->listingInfo = $listingInfo;
        return $this;
    }

    /**
     * Gets as returnsAccepted
     *
     * This is set to true if the seller accepts return of the item.
     *
     * @return bool
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }

    /**
     * Sets a new returnsAccepted
     *
     * This is set to true if the seller accepts return of the item.
     *
     * @param bool $returnsAccepted
     * @return self
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->returnsAccepted = $returnsAccepted;
        return $this;
    }

    /**
     * Adds as galleryPlusPictureURL
     *
     * URL for the Gallery Plus image. The size of Gallery Plus images (up to
     *  500 pixels on the longest side) is bigger than the size of standard
     *  gallery images. In site search results, you can view the Gallery Plus
     *  image by hovering over or clicking the Enlarge link or magifying glass
     *  icon. This field is only returned when the seller has opted for
     *  the Gallery Plus option for the given item.
     *
     * @return self
     * @param string $galleryPlusPictureURL
     */
    public function addToGalleryPlusPictureURL($galleryPlusPictureURL)
    {
        $this->galleryPlusPictureURL[] = $galleryPlusPictureURL;
        return $this;
    }

    /**
     * isset galleryPlusPictureURL
     *
     * URL for the Gallery Plus image. The size of Gallery Plus images (up to
     *  500 pixels on the longest side) is bigger than the size of standard
     *  gallery images. In site search results, you can view the Gallery Plus
     *  image by hovering over or clicking the Enlarge link or magifying glass
     *  icon. This field is only returned when the seller has opted for
     *  the Gallery Plus option for the given item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGalleryPlusPictureURL($index)
    {
        return isset($this->galleryPlusPictureURL[$index]);
    }

    /**
     * unset galleryPlusPictureURL
     *
     * URL for the Gallery Plus image. The size of Gallery Plus images (up to
     *  500 pixels on the longest side) is bigger than the size of standard
     *  gallery images. In site search results, you can view the Gallery Plus
     *  image by hovering over or clicking the Enlarge link or magifying glass
     *  icon. This field is only returned when the seller has opted for
     *  the Gallery Plus option for the given item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGalleryPlusPictureURL($index)
    {
        unset($this->galleryPlusPictureURL[$index]);
    }

    /**
     * Gets as galleryPlusPictureURL
     *
     * URL for the Gallery Plus image. The size of Gallery Plus images (up to
     *  500 pixels on the longest side) is bigger than the size of standard
     *  gallery images. In site search results, you can view the Gallery Plus
     *  image by hovering over or clicking the Enlarge link or magifying glass
     *  icon. This field is only returned when the seller has opted for
     *  the Gallery Plus option for the given item.
     *
     * @return string[]
     */
    public function getGalleryPlusPictureURL()
    {
        return $this->galleryPlusPictureURL;
    }

    /**
     * Sets a new galleryPlusPictureURL
     *
     * URL for the Gallery Plus image. The size of Gallery Plus images (up to
     *  500 pixels on the longest side) is bigger than the size of standard
     *  gallery images. In site search results, you can view the Gallery Plus
     *  image by hovering over or clicking the Enlarge link or magifying glass
     *  icon. This field is only returned when the seller has opted for
     *  the Gallery Plus option for the given item.
     *
     * @param string[] $galleryPlusPictureURL
     * @return self
     */
    public function setGalleryPlusPictureURL(array $galleryPlusPictureURL)
    {
        $this->galleryPlusPictureURL = $galleryPlusPictureURL;
        return $this;
    }

    /**
     * Gets as compatibility
     *
     * Starting in March 2010, parts compatibility will be supported in limited
     *  Parts & Accessories categories for eBay Motors in the Production
     *  environment. For these categories, a compatible application will always
     *  be a vehicle, which is specified by a combination of make, model, and
     *  year. Optionally, trim and engine data may also be specifed for a
     *  vehicle.
     *  <br><br>
     *  This field returns terms from the keywords in the request that match
     *  values in one of the item's compatible applications (vehicles). If the
     *  keywords match more than one compatible application for an item, the
     *  field returns "Two or more of your vehicles" to indicate multiple
     *  matches.
     *  <br><br>
     *  For example, keyword queries that contain vehicle details, such as make
     *  and model (e.g., Honda Accord), in addition to keywords for the part or
     *  accessory, will search through structured parts compatibility information
     *  for matching listings. If an item has a 2007 Honda Accord (any trim or
     *  engine) specified as a compatible application, and the item matches the
     *  part or accessory terms in the query, this field will return the matching
     *  terms from the query (i.e., Honda Accord).
     *  <br><br>
     *  Parts compatibility is an eBay feature that uses structured data to
     *  associate compatible assemblies with parts and accessories listed on
     *  eBay. For example, parts compatibility enables sellers to specify
     *  accurately and comprehensively the vehicles on which a side mirror or a
     *  rim fit. Parts compatibility improves search relevancy and frees up item
     *  titles and descriptions for more useful descriptions of the part.
     *
     * @return string
     */
    public function getCompatibility()
    {
        return $this->compatibility;
    }

    /**
     * Sets a new compatibility
     *
     * Starting in March 2010, parts compatibility will be supported in limited
     *  Parts & Accessories categories for eBay Motors in the Production
     *  environment. For these categories, a compatible application will always
     *  be a vehicle, which is specified by a combination of make, model, and
     *  year. Optionally, trim and engine data may also be specifed for a
     *  vehicle.
     *  <br><br>
     *  This field returns terms from the keywords in the request that match
     *  values in one of the item's compatible applications (vehicles). If the
     *  keywords match more than one compatible application for an item, the
     *  field returns "Two or more of your vehicles" to indicate multiple
     *  matches.
     *  <br><br>
     *  For example, keyword queries that contain vehicle details, such as make
     *  and model (e.g., Honda Accord), in addition to keywords for the part or
     *  accessory, will search through structured parts compatibility information
     *  for matching listings. If an item has a 2007 Honda Accord (any trim or
     *  engine) specified as a compatible application, and the item matches the
     *  part or accessory terms in the query, this field will return the matching
     *  terms from the query (i.e., Honda Accord).
     *  <br><br>
     *  Parts compatibility is an eBay feature that uses structured data to
     *  associate compatible assemblies with parts and accessories listed on
     *  eBay. For example, parts compatibility enables sellers to specify
     *  accurately and comprehensively the vehicles on which a side mirror or a
     *  rim fit. Parts compatibility improves search relevancy and frees up item
     *  titles and descriptions for more useful descriptions of the part.
     *
     * @param string $compatibility
     * @return self
     */
    public function setCompatibility($compatibility)
    {
        $this->compatibility = $compatibility;
        return $this;
    }

    /**
     * Gets as distance
     *
     * The distance that the item is from the buyer, calculated using
     *  buyerPostalCode. The unit for distance varies by site, and is either
     *  miles or kilometers. If the country whose site you are searching uses
     *  kilometers to measure distance (for example, India/EBAY-IN), the unit is
     *  kilometers. If the site is either the US or UK, the distance unit is
     *  miles.
     *  <br><br>
     *  This value is only returned for distance-based searches. You must specify
     *  a buyerPostalCode and either sort by Distance, or use a combination of
     *  the MaxDistance LocalSearch itemFilters.
     *
     * @return \Nogrod\eBaySDK\Finding\DistanceType
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Sets a new distance
     *
     * The distance that the item is from the buyer, calculated using
     *  buyerPostalCode. The unit for distance varies by site, and is either
     *  miles or kilometers. If the country whose site you are searching uses
     *  kilometers to measure distance (for example, India/EBAY-IN), the unit is
     *  kilometers. If the site is either the US or UK, the distance unit is
     *  miles.
     *  <br><br>
     *  This value is only returned for distance-based searches. You must specify
     *  a buyerPostalCode and either sort by Distance, or use a combination of
     *  the MaxDistance LocalSearch itemFilters.
     *
     * @param \Nogrod\eBaySDK\Finding\DistanceType $distance
     * @return self
     */
    public function setDistance(\Nogrod\eBaySDK\Finding\DistanceType $distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Gets as condition
     *
     * Contains information about the item's condition.
     *  Only returned when the seller listed the item with an
     *  item condition.<br>
     *  <br>
     *  Different categories can support different
     *  condition choices. If a listing is in two categories,
     *  the seller uses condition details that are supported in
     *  the primary category. Thus, even if two nearly identical
     *  items are found in the same category search, they could support
     *  different condition details if they have different
     *  primary categories.
     *  For example, suppose Seller A lists a concert T-shirt
     *  in clothing, and also in music accessories as the
     *  secondary category. Seller B lists an identical shirt in
     *  music accessories only.
     *  If you search against the music accessories category,
     *  you will find both items, but seller A's shirt may have
     *  condition details that are slightly different from seller B's
     *  shirt, because the listings have different primary categories.
     *
     * @return \Nogrod\eBaySDK\Finding\ConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * Contains information about the item's condition.
     *  Only returned when the seller listed the item with an
     *  item condition.<br>
     *  <br>
     *  Different categories can support different
     *  condition choices. If a listing is in two categories,
     *  the seller uses condition details that are supported in
     *  the primary category. Thus, even if two nearly identical
     *  items are found in the same category search, they could support
     *  different condition details if they have different
     *  primary categories.
     *  For example, suppose Seller A lists a concert T-shirt
     *  in clothing, and also in music accessories as the
     *  secondary category. Seller B lists an identical shirt in
     *  music accessories only.
     *  If you search against the music accessories category,
     *  you will find both items, but seller A's shirt may have
     *  condition details that are slightly different from seller B's
     *  shirt, because the listings have different primary categories.
     *
     * @param \Nogrod\eBaySDK\Finding\ConditionType $condition
     * @return self
     */
    public function setCondition(\Nogrod\eBaySDK\Finding\ConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as isMultiVariationListing
     *
     * return true if the item is a multi-variation listing
     *
     * @return bool
     */
    public function getIsMultiVariationListing()
    {
        return $this->isMultiVariationListing;
    }

    /**
     * Sets a new isMultiVariationListing
     *
     * return true if the item is a multi-variation listing
     *
     * @param bool $isMultiVariationListing
     * @return self
     */
    public function setIsMultiVariationListing($isMultiVariationListing)
    {
        $this->isMultiVariationListing = $isMultiVariationListing;
        return $this;
    }

    /**
     * Gets as discountPriceInfo
     *
     * The format type of the listing, such as online auction, fixed price, or
     *  advertisement.
     *
     * @return \Nogrod\eBaySDK\Finding\DiscountPriceInfoType
     */
    public function getDiscountPriceInfo()
    {
        return $this->discountPriceInfo;
    }

    /**
     * Sets a new discountPriceInfo
     *
     * The format type of the listing, such as online auction, fixed price, or
     *  advertisement.
     *
     * @param \Nogrod\eBaySDK\Finding\DiscountPriceInfoType $discountPriceInfo
     * @return self
     */
    public function setDiscountPriceInfo(\Nogrod\eBaySDK\Finding\DiscountPriceInfoType $discountPriceInfo)
    {
        $this->discountPriceInfo = $discountPriceInfo;
        return $this;
    }

    /**
     * Gets as pictureURLSuperSize
     *
     * URL for item's picture url with size 800x800
     *
     * @return string
     */
    public function getPictureURLSuperSize()
    {
        return $this->pictureURLSuperSize;
    }

    /**
     * Sets a new pictureURLSuperSize
     *
     * URL for item's picture url with size 800x800
     *
     * @param string $pictureURLSuperSize
     * @return self
     */
    public function setPictureURLSuperSize($pictureURLSuperSize)
    {
        $this->pictureURLSuperSize = $pictureURLSuperSize;
        return $this;
    }

    /**
     * Gets as pictureURLLarge
     *
     * URL for item's picture url with size 400x400
     *
     * @return string
     */
    public function getPictureURLLarge()
    {
        return $this->pictureURLLarge;
    }

    /**
     * Sets a new pictureURLLarge
     *
     * URL for item's picture url with size 400x400
     *
     * @param string $pictureURLLarge
     * @return self
     */
    public function setPictureURLLarge($pictureURLLarge)
    {
        $this->pictureURLLarge = $pictureURLLarge;
        return $this;
    }

    /**
     * Gets as unitPrice
     *
     * Unit price information of the item
     *
     * @return \Nogrod\eBaySDK\Finding\UnitPriceInfoType
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * Unit price information of the item
     *
     * @param \Nogrod\eBaySDK\Finding\UnitPriceInfoType $unitPrice
     * @return self
     */
    public function setUnitPrice(\Nogrod\eBaySDK\Finding\UnitPriceInfoType $unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Adds as attribute
     *
     * item attribute
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ItemAttributeType $attribute
     */
    public function addToAttribute(\Nogrod\eBaySDK\Finding\ItemAttributeType $attribute)
    {
        $this->attribute[] = $attribute;
        return $this;
    }

    /**
     * isset attribute
     *
     * item attribute
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttribute($index)
    {
        return isset($this->attribute[$index]);
    }

    /**
     * unset attribute
     *
     * item attribute
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttribute($index)
    {
        unset($this->attribute[$index]);
    }

    /**
     * Gets as attribute
     *
     * item attribute
     *
     * @return \Nogrod\eBaySDK\Finding\ItemAttributeType[]
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Sets a new attribute
     *
     * item attribute
     *
     * @param \Nogrod\eBaySDK\Finding\ItemAttributeType[] $attribute
     * @return self
     */
    public function setAttribute(array $attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }

    /**
     * Gets as topRatedListing
     *
     * Indicates whether the item is Top Rated Plus item. A top rated plus
     *  item:
     *  <ul>
     *  <li> is listed by experienced sellers with highest buyer ratings;/li>
     *  <li>Sellers commit to shipping your items in a business day with tracking provided and offer at least a 14-day, money-back return policy;/li>
     *  This field is returned for the following sites only: US (EBAY-US)
     *
     * @return bool
     */
    public function getTopRatedListing()
    {
        return $this->topRatedListing;
    }

    /**
     * Sets a new topRatedListing
     *
     * Indicates whether the item is Top Rated Plus item. A top rated plus
     *  item:
     *  <ul>
     *  <li> is listed by experienced sellers with highest buyer ratings;/li>
     *  <li>Sellers commit to shipping your items in a business day with tracking provided and offer at least a 14-day, money-back return policy;/li>
     *  This field is returned for the following sites only: US (EBAY-US)
     *
     * @param bool $topRatedListing
     * @return self
     */
    public function setTopRatedListing($topRatedListing)
    {
        $this->topRatedListing = $topRatedListing;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    /**
     * Adds as eekStatus
     *
     * eek status of the item
     *
     * @return self
     * @param string $eekStatus
     */
    public function addToEekStatus($eekStatus)
    {
        $this->eekStatus[] = $eekStatus;
        return $this;
    }

    /**
     * isset eekStatus
     *
     * eek status of the item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEekStatus($index)
    {
        return isset($this->eekStatus[$index]);
    }

    /**
     * unset eekStatus
     *
     * eek status of the item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEekStatus($index)
    {
        unset($this->eekStatus[$index]);
    }

    /**
     * Gets as eekStatus
     *
     * eek status of the item
     *
     * @return string[]
     */
    public function getEekStatus()
    {
        return $this->eekStatus;
    }

    /**
     * Sets a new eekStatus
     *
     * eek status of the item
     *
     * @param string[] $eekStatus
     * @return self
     */
    public function setEekStatus(array $eekStatus)
    {
        $this->eekStatus = $eekStatus;
        return $this;
    }

    /**
     * Gets as eBayPlusEnabled
     *
     * Indicates whether the item is ebayPlus item. A eBayPlus
     *  item:
     *  <ul>
     *  <li> Cassini returns the ebayPlus flag;/li>
     *  This field is returned for the following sites only: DE (EBAY-DE)
     *
     * @return bool
     */
    public function getEBayPlusEnabled()
    {
        return $this->eBayPlusEnabled;
    }

    /**
     * Sets a new eBayPlusEnabled
     *
     * Indicates whether the item is ebayPlus item. A eBayPlus
     *  item:
     *  <ul>
     *  <li> Cassini returns the ebayPlus flag;/li>
     *  This field is returned for the following sites only: DE (EBAY-DE)
     *
     * @param bool $eBayPlusEnabled
     * @return self
     */
    public function setEBayPlusEnabled($eBayPlusEnabled)
    {
        $this->eBayPlusEnabled = $eBayPlusEnabled;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getItemId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}itemId", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}title", $value);
        }
        $value = $this->getGlobalId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}globalId", $value);
        }
        $value = $this->getSubtitle();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}subtitle", $value);
        }
        $value = $this->getPrimaryCategory();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}primaryCategory", $value);
        }
        $value = $this->getSecondaryCategory();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}secondaryCategory", $value);
        }
        $value = $this->getGalleryURL();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}galleryURL", $value);
        }
        $value = $this->getGalleryInfoContainer();
        if (null !== $value && !empty($this->getGalleryInfoContainer())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}galleryInfoContainer", array_map(function ($v) {
                return ["galleryURL" => $v];
            }, $value));
        }
        $value = $this->getViewItemURL();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}viewItemURL", $value);
        }
        $value = $this->getCharityId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}charityId", $value);
        }
        $value = $this->getProductId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}productId", $value);
        }
        $value = $this->getPaymentMethod();
        if (null !== $value && !empty($this->getPaymentMethod())) {
            $writer->write(array_map(function ($v) {
                return ["paymentMethod" => $v];
            }, $value));
        }
        $value = $this->getAutoPay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}autoPay", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}postalCode", $value);
        }
        $value = $this->getLocation();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}location", $value);
        }
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}country", $value);
        }
        $value = $this->getStoreInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}storeInfo", $value);
        }
        $value = $this->getSellerInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}sellerInfo", $value);
        }
        $value = $this->getShippingInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}shippingInfo", $value);
        }
        $value = $this->getSellingStatus();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}sellingStatus", $value);
        }
        $value = $this->getListingInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}listingInfo", $value);
        }
        $value = $this->getReturnsAccepted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}returnsAccepted", $value);
        }
        $value = $this->getGalleryPlusPictureURL();
        if (null !== $value && !empty($this->getGalleryPlusPictureURL())) {
            $writer->write(array_map(function ($v) {
                return ["galleryPlusPictureURL" => $v];
            }, $value));
        }
        $value = $this->getCompatibility();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}compatibility", $value);
        }
        $value = $this->getDistance();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}distance", $value);
        }
        $value = $this->getCondition();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}condition", $value);
        }
        $value = $this->getIsMultiVariationListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}isMultiVariationListing", $value);
        }
        $value = $this->getDiscountPriceInfo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}discountPriceInfo", $value);
        }
        $value = $this->getPictureURLSuperSize();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}pictureURLSuperSize", $value);
        }
        $value = $this->getPictureURLLarge();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}pictureURLLarge", $value);
        }
        $value = $this->getUnitPrice();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}unitPrice", $value);
        }
        $value = $this->getAttribute();
        if (null !== $value && !empty($this->getAttribute())) {
            $writer->write(array_map(function ($v) {
                return ["attribute" => $v];
            }, $value));
        }
        $value = $this->getTopRatedListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}topRatedListing", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
        }
        $value = $this->getEekStatus();
        if (null !== $value && !empty($this->getEekStatus())) {
            $writer->write(array_map(function ($v) {
                return ["eekStatus" => $v];
            }, $value));
        }
        $value = $this->getEBayPlusEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}eBayPlusEnabled", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}itemId');
        if (null !== $value) {
            $this->setItemId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}globalId');
        if (null !== $value) {
            $this->setGlobalId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}subtitle');
        if (null !== $value) {
            $this->setSubtitle($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}primaryCategory');
        if (null !== $value) {
            $this->setPrimaryCategory(\Nogrod\eBaySDK\Finding\CategoryType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}secondaryCategory');
        if (null !== $value) {
            $this->setSecondaryCategory(\Nogrod\eBaySDK\Finding\CategoryType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}galleryURL');
        if (null !== $value) {
            $this->setGalleryURL($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}galleryInfoContainer', true);
        if (null !== $value && !empty($value)) {
            $this->setGalleryInfoContainer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\GalleryURLType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}viewItemURL');
        if (null !== $value) {
            $this->setViewItemURL($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}charityId');
        if (null !== $value) {
            $this->setCharityId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}productId');
        if (null !== $value) {
            $this->setProductId(\Nogrod\eBaySDK\Finding\ProductIdType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}paymentMethod', true);
        if (null !== $value && !empty($value)) {
            $this->setPaymentMethod($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}autoPay');
        if (null !== $value) {
            $this->setAutoPay($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}postalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}location');
        if (null !== $value) {
            $this->setLocation($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}storeInfo');
        if (null !== $value) {
            $this->setStoreInfo(\Nogrod\eBaySDK\Finding\StorefrontType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}sellerInfo');
        if (null !== $value) {
            $this->setSellerInfo(\Nogrod\eBaySDK\Finding\SellerInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}shippingInfo');
        if (null !== $value) {
            $this->setShippingInfo(\Nogrod\eBaySDK\Finding\ShippingInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}sellingStatus');
        if (null !== $value) {
            $this->setSellingStatus(\Nogrod\eBaySDK\Finding\SellingStatusType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}listingInfo');
        if (null !== $value) {
            $this->setListingInfo(\Nogrod\eBaySDK\Finding\ListingInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}returnsAccepted');
        if (null !== $value) {
            $this->setReturnsAccepted($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}galleryPlusPictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setGalleryPlusPictureURL($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}compatibility');
        if (null !== $value) {
            $this->setCompatibility($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}distance');
        if (null !== $value) {
            $this->setDistance(\Nogrod\eBaySDK\Finding\DistanceType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}condition');
        if (null !== $value) {
            $this->setCondition(\Nogrod\eBaySDK\Finding\ConditionType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}isMultiVariationListing');
        if (null !== $value) {
            $this->setIsMultiVariationListing($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}discountPriceInfo');
        if (null !== $value) {
            $this->setDiscountPriceInfo(\Nogrod\eBaySDK\Finding\DiscountPriceInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}pictureURLSuperSize');
        if (null !== $value) {
            $this->setPictureURLSuperSize($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}pictureURLLarge');
        if (null !== $value) {
            $this->setPictureURLLarge($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}unitPrice');
        if (null !== $value) {
            $this->setUnitPrice(\Nogrod\eBaySDK\Finding\UnitPriceInfoType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}attribute', true);
        if (null !== $value && !empty($value)) {
            $this->setAttribute(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\ItemAttributeType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}topRatedListing');
        if (null !== $value) {
            $this->setTopRatedListing($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}eekStatus', true);
        if (null !== $value && !empty($value)) {
            $this->setEekStatus($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}eBayPlusEnabled');
        if (null !== $value) {
            $this->setEBayPlusEnabled($value);
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
