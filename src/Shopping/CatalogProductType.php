<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CatalogProductType
 *
 * This complex type is used by each <b>Product</b> container that is returned in the response of the <b>FindProducts</b> call. Each <b>Product</b> container consists of information about an eBay catalog product.
 * XSD Type: CatalogProductType
 */
class CatalogProductType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the eBay category-related domain most closely associated with the catalog product. If the catalog product is associated with multiple category-related domains, eBay returns the most applicable domain (as determined by eBay).
     *  <br>
     *  <br>
     *  This field is only returned if a catalog product is associated with one or more category-related domains, and if eBay has this data available.
     *  <br>
     *
     * @var string $domainName
     */
    private $domainName = null;

    /**
     * The fully-qualified URL to the Product Details section of the eBay catalog product page is displayed in this field. The user can grab this URL, paste it in a browser, and view the Product Details section of the eBay catalog product page for the corresponding eBay marketplace site. Note that some catalog product pages will have active listings associated with them, and some will not. It is also possible that some catalog product may not contain stock photos.
     *  <br>
     *  <br>
     *  Applications can include this URL as a link in product search results,
     *  so that end users can view additional descriptive details about
     *  the product.
     *
     * @var string $detailsURL
     */
    private $detailsURL = null;

    /**
     * If this field is returned as <code>true</code>, there is a stock photo associated with the catalog product, and the URL to this image file is shown in the <b>StockPhotoURL</b> field. If this field is returned as <code>false</code>, there is no stock photo associated with the catalog product.
     *  <br>
     *  <br>
     *  Sellers should be aware that if no stock photo exists for a catalog product, the seller must add at least one of their own photos when creating a listing (based on that catalog product), as all eBay listings must have at least one image.
     *  <br>
     *  <br>
     *  An application incorporating a graphical user interface can use this flag to determine when to hide customized stock photo widgets.
     *  <br>
     *  <br>
     *  This field is always returned in each <b>Product</b> container.
     *
     * @var bool $displayStockPhotos
     */
    private $displayStockPhotos = null;

    /**
     * At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     *  if your application is comparing products across different sites.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     *
     * @var \Nogrod\eBaySDK\Shopping\ProductIDType[] $productID
     */
    private $productID = [
        
    ];

    /**
     * This field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any data on active listings associated with the retrieved catalog products.
     *
     * @var int $itemCount
     */
    private $itemCount = null;

    /**
     * This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner.
     *  <br>
     *  <br>
     *  Scanning Item Specific name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone 8s that are gray and have 256 GB of storage capacity.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Important:</b>
     *  Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not have any Item Specifics defined.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $itemSpecifics
     */
    private $itemSpecifics = null;

    /**
     * This integer value indicates the total number of reviews that are available for the catalog product on the eBay Web site. Not all products will have reviews on an eBay marketplace, but if reviews are available for a catalog product, product reviews should be accessible from the catalog product page (see corresponding <b>DetailsURL</b> field).
     *  <br>
     *  <br>
     *  This field is not returned at all if there are no product reviews available for the catalog product.
     *
     * @var int $reviewCount
     */
    private $reviewCount = null;

    /**
     * The fully-qualified URL to the catalog product's stock photo. This field is only returned if a stock photo exists for the eBay catalog product (<b>DisplayStockPhotos</b> should return as <code>true</code>. Generally, this is the image that eBay displays in product-based search results.
     *
     * @var string $stockPhotoURL
     */
    private $stockPhotoURL = null;

    /**
     * The title of the product, as it is defined in the catalog product record.
     *  This field is always returned with each <b>Product</b> container.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The enumeration value in this field provides information on the current state of the catalog product record. This field is generally only returned if the catalog product record was recently updated, is due for an update, or if the record is scheduled to be deleted.
     *
     * @var string $productState
     */
    private $productState = null;

    /**
     * Gets as domainName
     *
     * The name of the eBay category-related domain most closely associated with the catalog product. If the catalog product is associated with multiple category-related domains, eBay returns the most applicable domain (as determined by eBay).
     *  <br>
     *  <br>
     *  This field is only returned if a catalog product is associated with one or more category-related domains, and if eBay has this data available.
     *  <br>
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * The name of the eBay category-related domain most closely associated with the catalog product. If the catalog product is associated with multiple category-related domains, eBay returns the most applicable domain (as determined by eBay).
     *  <br>
     *  <br>
     *  This field is only returned if a catalog product is associated with one or more category-related domains, and if eBay has this data available.
     *  <br>
     *
     * @param string $domainName
     * @return self
     */
    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Gets as detailsURL
     *
     * The fully-qualified URL to the Product Details section of the eBay catalog product page is displayed in this field. The user can grab this URL, paste it in a browser, and view the Product Details section of the eBay catalog product page for the corresponding eBay marketplace site. Note that some catalog product pages will have active listings associated with them, and some will not. It is also possible that some catalog product may not contain stock photos.
     *  <br>
     *  <br>
     *  Applications can include this URL as a link in product search results,
     *  so that end users can view additional descriptive details about
     *  the product.
     *
     * @return string
     */
    public function getDetailsURL()
    {
        return $this->detailsURL;
    }

    /**
     * Sets a new detailsURL
     *
     * The fully-qualified URL to the Product Details section of the eBay catalog product page is displayed in this field. The user can grab this URL, paste it in a browser, and view the Product Details section of the eBay catalog product page for the corresponding eBay marketplace site. Note that some catalog product pages will have active listings associated with them, and some will not. It is also possible that some catalog product may not contain stock photos.
     *  <br>
     *  <br>
     *  Applications can include this URL as a link in product search results,
     *  so that end users can view additional descriptive details about
     *  the product.
     *
     * @param string $detailsURL
     * @return self
     */
    public function setDetailsURL($detailsURL)
    {
        $this->detailsURL = $detailsURL;
        return $this;
    }

    /**
     * Gets as displayStockPhotos
     *
     * If this field is returned as <code>true</code>, there is a stock photo associated with the catalog product, and the URL to this image file is shown in the <b>StockPhotoURL</b> field. If this field is returned as <code>false</code>, there is no stock photo associated with the catalog product.
     *  <br>
     *  <br>
     *  Sellers should be aware that if no stock photo exists for a catalog product, the seller must add at least one of their own photos when creating a listing (based on that catalog product), as all eBay listings must have at least one image.
     *  <br>
     *  <br>
     *  An application incorporating a graphical user interface can use this flag to determine when to hide customized stock photo widgets.
     *  <br>
     *  <br>
     *  This field is always returned in each <b>Product</b> container.
     *
     * @return bool
     */
    public function getDisplayStockPhotos()
    {
        return $this->displayStockPhotos;
    }

    /**
     * Sets a new displayStockPhotos
     *
     * If this field is returned as <code>true</code>, there is a stock photo associated with the catalog product, and the URL to this image file is shown in the <b>StockPhotoURL</b> field. If this field is returned as <code>false</code>, there is no stock photo associated with the catalog product.
     *  <br>
     *  <br>
     *  Sellers should be aware that if no stock photo exists for a catalog product, the seller must add at least one of their own photos when creating a listing (based on that catalog product), as all eBay listings must have at least one image.
     *  <br>
     *  <br>
     *  An application incorporating a graphical user interface can use this flag to determine when to hide customized stock photo widgets.
     *  <br>
     *  <br>
     *  This field is always returned in each <b>Product</b> container.
     *
     * @param bool $displayStockPhotos
     * @return self
     */
    public function setDisplayStockPhotos($displayStockPhotos)
    {
        $this->displayStockPhotos = $displayStockPhotos;
        return $this;
    }

    /**
     * Adds as productID
     *
     * At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     *  if your application is comparing products across different sites.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType $productID
     */
    public function addToProductID(\Nogrod\eBaySDK\Shopping\ProductIDType $productID)
    {
        $this->productID[] = $productID;
        return $this;
    }

    /**
     * isset productID
     *
     * At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     *  if your application is comparing products across different sites.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductID($index)
    {
        return isset($this->productID[$index]);
    }

    /**
     * unset productID
     *
     * At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     *  if your application is comparing products across different sites.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductID($index)
    {
        unset($this->productID[$index]);
    }

    /**
     * Gets as productID
     *
     * At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     *  if your application is comparing products across different sites.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     *
     * @return \Nogrod\eBaySDK\Shopping\ProductIDType[]
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * At least one <b>ProductID</b> field is always returned with each <b>Product</b> container, as this value is the unique identifier (ePID) of the eBay catalog product. Any Global Trade Item Numbers (such as ISBN, EAN, UPC, or MPN) are also returned if defined in the catalog product record. The field's <b>type</b> attribute indicates the product identifier type. For ePIDs, the <b>type</b> attribute value is <code>Reference</code>. The ISBN, EAN, and UPC values can be useful as keys
     *  if your application is comparing products across different sites.
     *  <br>
     *  <br>
     *  See the <a href="types/ProductIDCodeType.html">ProductIDCodeType</a> definition to view the applicable enumeration values for the lt;b>typelt;/b> attribute.
     *
     * @param \Nogrod\eBaySDK\Shopping\ProductIDType[] $productID
     * @return self
     */
    public function setProductID(array $productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as itemCount
     *
     * This field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any data on active listings associated with the retrieved catalog products.
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * Sets a new itemCount
     *
     * This field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any data on active listings associated with the retrieved catalog products.
     *
     * @param int $itemCount
     * @return self
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner.
     *  <br>
     *  <br>
     *  Scanning Item Specific name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone 8s that are gray and have 256 GB of storage capacity.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Important:</b>
     *  Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not have any Item Specifics defined.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToItemSpecifics(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->itemSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset itemSpecifics
     *
     * This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner.
     *  <br>
     *  <br>
     *  Scanning Item Specific name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone 8s that are gray and have 256 GB of storage capacity.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Important:</b>
     *  Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not have any Item Specifics defined.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecifics($index)
    {
        return isset($this->itemSpecifics[$index]);
    }

    /**
     * unset itemSpecifics
     *
     * This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner.
     *  <br>
     *  <br>
     *  Scanning Item Specific name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone 8s that are gray and have 256 GB of storage capacity.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Important:</b>
     *  Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not have any Item Specifics defined.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecifics($index)
    {
        unset($this->itemSpecifics[$index]);
    }

    /**
     * Gets as itemSpecifics
     *
     * This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner.
     *  <br>
     *  <br>
     *  Scanning Item Specific name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone 8s that are gray and have 256 GB of storage capacity.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Important:</b>
     *  Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not have any Item Specifics defined.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * Sets a new itemSpecifics
     *
     * This array contains a list of Item Specifics (also referred to as Product Asepcts) defined for the catalog product. Item Specifics provide desciptive details of an item in a structured manner.
     *  <br>
     *  <br>
     *  Scanning Item Specific name-value pairs for catalog products in the response can be useful if the user would like to expand the query string to return more precise results. For example, if a user specified 'iPhone 8' as the query string in the call request, but after seeing too many catalog products of phones in different colors, and with different storage capacities in the response, the user could run another call, but expand the query string to 'iphone 8 256GB Gray'. In this case, the user would only see iPhone 8s that are gray and have 256 GB of storage capacity.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Important:</b>
     *  Most eBay catalog products have at least one to a few Item Specifics defined, but it is possible that some retrieved catalog products will not have any Item Specifics defined.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $itemSpecifics
     * @return self
     */
    public function setItemSpecifics(array $itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
        return $this;
    }

    /**
     * Gets as reviewCount
     *
     * This integer value indicates the total number of reviews that are available for the catalog product on the eBay Web site. Not all products will have reviews on an eBay marketplace, but if reviews are available for a catalog product, product reviews should be accessible from the catalog product page (see corresponding <b>DetailsURL</b> field).
     *  <br>
     *  <br>
     *  This field is not returned at all if there are no product reviews available for the catalog product.
     *
     * @return int
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * Sets a new reviewCount
     *
     * This integer value indicates the total number of reviews that are available for the catalog product on the eBay Web site. Not all products will have reviews on an eBay marketplace, but if reviews are available for a catalog product, product reviews should be accessible from the catalog product page (see corresponding <b>DetailsURL</b> field).
     *  <br>
     *  <br>
     *  This field is not returned at all if there are no product reviews available for the catalog product.
     *
     * @param int $reviewCount
     * @return self
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
        return $this;
    }

    /**
     * Gets as stockPhotoURL
     *
     * The fully-qualified URL to the catalog product's stock photo. This field is only returned if a stock photo exists for the eBay catalog product (<b>DisplayStockPhotos</b> should return as <code>true</code>. Generally, this is the image that eBay displays in product-based search results.
     *
     * @return string
     */
    public function getStockPhotoURL()
    {
        return $this->stockPhotoURL;
    }

    /**
     * Sets a new stockPhotoURL
     *
     * The fully-qualified URL to the catalog product's stock photo. This field is only returned if a stock photo exists for the eBay catalog product (<b>DisplayStockPhotos</b> should return as <code>true</code>. Generally, this is the image that eBay displays in product-based search results.
     *
     * @param string $stockPhotoURL
     * @return self
     */
    public function setStockPhotoURL($stockPhotoURL)
    {
        $this->stockPhotoURL = $stockPhotoURL;
        return $this;
    }

    /**
     * Gets as title
     *
     * The title of the product, as it is defined in the catalog product record.
     *  This field is always returned with each <b>Product</b> container.
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
     * The title of the product, as it is defined in the catalog product record.
     *  This field is always returned with each <b>Product</b> container.
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
     * Gets as productState
     *
     * The enumeration value in this field provides information on the current state of the catalog product record. This field is generally only returned if the catalog product record was recently updated, is due for an update, or if the record is scheduled to be deleted.
     *
     * @return string
     */
    public function getProductState()
    {
        return $this->productState;
    }

    /**
     * Sets a new productState
     *
     * The enumeration value in this field provides information on the current state of the catalog product record. This field is generally only returned if the catalog product record was recently updated, is due for an update, or if the record is scheduled to be deleted.
     *
     * @param string $productState
     * @return self
     */
    public function setProductState($productState)
    {
        $this->productState = $productState;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomainName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomainName", $value);
        }
        $value = $this->getDetailsURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailsURL", $value);
        }
        $value = $this->getDisplayStockPhotos();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos", $value);
        }
        $value = $this->getProductID();
        if (null !== $value && !empty($this->getProductID())) {
            $writer->write(array_map(function ($v) {
                return ["ProductID" => $v];
            }, $value));
        }
        $value = $this->getItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemCount", $value);
        }
        $value = $this->getItemSpecifics();
        if (null !== $value && !empty($this->getItemSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecifics", array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getReviewCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewCount", $value);
        }
        $value = $this->getStockPhotoURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StockPhotoURL", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getProductState();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductState", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomainName');
        if (null !== $value) {
            $this->setDomainName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailsURL');
        if (null !== $value) {
            $this->setDetailsURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayStockPhotos');
        if (null !== $value) {
            $this->setDisplayStockPhotos($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID', true);
        if (null !== $value && !empty($value)) {
            $this->setProductID(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\ProductIDType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemCount');
        if (null !== $value) {
            $this->setItemCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewCount');
        if (null !== $value) {
            $this->setReviewCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StockPhotoURL');
        if (null !== $value) {
            $this->setStockPhotoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductState');
        if (null !== $value) {
            $this->setProductState($value);
        }
    }
}
