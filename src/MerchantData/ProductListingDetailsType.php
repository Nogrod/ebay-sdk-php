<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductListingDetailsType
 *
 * Type used by the <b>ProductListingDetails</b> container, which is used by a seller in an add/revise/relist call to identify a product through a Global Trade Item Number (EAN, ISBN, or UPC) or an eBay Product ID (e.g. 'ePID'). If a specified product identifier is matched to a product in the eBay catalog, some of the details for the product listing, such as listing category, product title, product description, product aspects, and stock photo are prefilled for the listing.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b>
 *  If a Brand/MPN pair is required for the product, these values must still be input through the <b>BrandMPN</b> container.
 *  </span>
 * XSD Type: ProductListingDetailsType
 */
class ProductListingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If you will be using an eBay catalog product to list your item, it is always advised to include the stock photo. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields. Seller photos are particularly recommended for used and modified products to give prospective buyers a clear sense of exactly what they are purchasing.
     *  In <b>GetItem</b> and other 'Get' calls, the URL of the stock photo will be returned in the <b>StockPhotoURL</b> field.
     *  <br/>
     *
     * @var bool $includeStockPhotoURL
     */
    private $includeStockPhotoURL = null;

    /**
     * If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo as the Gallery thumbnail photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If this field is set to <code>true</code>, the <b>IncludeStockPhotoURL</b> field must also be set to <code>true</code> or this field will have no effect. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields, but none of these photos will be the Gallery thumbnail photo.
     *  <br>
     *
     * @var bool $useStockPhotoURLAsGallery
     */
    private $useStockPhotoURLAsGallery = null;

    /**
     * The full URL for the eBay catalog product's stock photo. This field is only returned if the seller used an eBay catalog product to list the item, and the
     *  <b>IncludeStockPhotoURL</b> field was set to <code>true</code>.
     *
     * @var string $stockPhotoURL
     */
    private $stockPhotoURL = null;

    /**
     * Copyright statement indicating the source of the product information. This information will be
     *  included in the listing if the seller used an eBay catalog product to list the item.
     *
     * @var string[] $copyright
     */
    private $copyright = [
        
    ];

    /**
     * In an Add/Revise/Relist call, this field is used to pass in the eBay Product ID (e.g. ePID), which is the unique identifier of an eBay catalog product. Although an eBay catalog product match can be found using one or more GTIN values, passing in an ePID value is the best way to try and discover the appropriate eBay catalog product.
     *  <br>
     *  <br>
     *  This field is also returned in <b>GetItem</b> if the listing is associated with a eBay catalog product.
     *  <br>
     *
     * @var string $productReferenceID
     */
    private $productReferenceID = null;

    /**
     * This field is no longer applicable and should not be used.
     *
     * @var string $detailsURL
     */
    private $detailsURL = null;

    /**
     * This field is no longer applicable and should not be used.
     *
     * @var string $productDetailsURL
     */
    private $productDetailsURL = null;

    /**
     * If the seller attempts to use <b>ProductListingDetails</b> in an Add/Revise/Relist call to find an eBay catalog product match, and multiple matches are found, the call will actually fail. This field can be included and set to <code>true</code> if the seller wants to see the eBay catalog products that were found through error messages in the call response. This flag will not have an effect if only one catalog product matchi is found, or if the <b>UseFirstProduct</b> field is used and set to <code>true</code> and a catalog product is found to create/revise the listing. <br>
     *  <br>
     *  If this field is omitted or set to <code>false</code>, and multiple catalog products are found, the call will fail and no information about the matching catalog products will be returned.
     *  <br>
     *
     * @var bool $returnSearchResultOnDuplicates
     */
    private $returnSearchResultOnDuplicates = null;

    /**
     * This field is used if the seller wants to, or is required to identify a product using an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category.
     *  <br/><br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the ISBN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an ISBN value, this value should be passed into the <b>Variation.VariationProductListingDetails.ISBN</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * This field is used if the seller wants to, or is required to identify a product using a UPC (Universal Product Code) value. A UPC is a commonly used identifer for many different products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>UPC</b> (and UPC values) are typically only applicable to US products listed on US eBay marketplace. If a European seller is selling a European-based product (with an EAN value) on the US site, instead of using the <b>EAN</b> field, the seller will use the <b>UPC</b> field to pass in the EAN value.
     *  </span>
     *  <br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the UPC value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires a UPC value, this value should be passed into the <b>Variation.VariationProductListingDetails.UPC</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @var string $uPC
     */
    private $uPC = null;

    /**
     * This field is used if the seller wants to, or is required to identify a product using an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>EAN</b> (and EAN values) are typically only applicable to European products listed on European eBay marketplaces. If a US seller is selling a US-based product (with a UPC value) on a European site (such as eBay UK), instead of using the <b>UPC</b> field, the seller will use the <b>EAN</b> field to pass in the UPC value.
     *  </span>
     *  <br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the EAN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an EAN value, this value should be passed into the <b>Variation.VariationProductListingDetails.EAN</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an EAN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @var string $eAN
     */
    private $eAN = null;

    /**
     * This container is used if the seller wants to, or is required to identify a product using an Brand/Manufacturer Part Number (MPN) pair. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a Brand/MPN pair is supported/required for a category. Both the <b>Brand</b> and <b>MPN</b> fields are required if the category/product requires an MPN value.
     *  <br/><br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the Brand/MPN pair to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers associated with the catalog product will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This container is only applicable for single-variation listings. For multiple-variation listings, if the category requires Brand/MPN pairs, the product brand (shared by all variations in this listing) is passed in through the item-level item specifics (<b>Item.ItemSpecifics.NameValueList</b>), and the MPN value for each variation in the listing is passed in through the variation-level item specifics (<b>Variation.VariationSpecifics.NameValueList</b>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that requires or recommends a Brand and MPN value, the Brand and MPN values for the product should always be passed in through separate <b>ItemSpecifics.NameValueList</b> containers since the Brand and MPN values passed in through the <b>ProductListingDetails.BrandMPN</b> will not get picked up by the generated/revised listing unless the the Brand/MPN pair is successfully matched to an eBay catalog product. If an MPN doesn't exist for a product, or the seller does not have it available, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *  <br>
     *
     * @var \Nogrod\eBaySDK\MerchantData\BrandMPNType $brandMPN
     */
    private $brandMPN = null;

    /**
     * This container is only applicable when a seller is creating/revising an event tickets listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TicketListingDetailsType $ticketListingDetails
     */
    private $ticketListingDetails = null;

    /**
     * This field can be included and set to <code>true</code> if the seller wants to use the first eBay catalog product that is found to create/revise the listing. eBay will search for an eBay catalog product match if the seller provides an ePID or one or more GTIN values. If this field is omitted, or included and set to <code>false</code>, the call will fail if more than one eBay catalog product is found.
     *  <br>
     *
     * @var bool $useFirstProduct
     */
    private $useFirstProduct = null;

    /**
     * This boolean field controls whether or not an eBay catalog product is used to create or revise a listing. If an ePID or GTIN value is provided through the <b>ProductListingDetails</b> container when adding, revising, or relisting an item, the default behavior is for eBay to try and find a match for the product in the eBay catalog, and then automatically create/revise the listing using the product title, product description, item specifics, and stock photo defined for the catalog product.
     *  <br><br>
     *  If the seller wants to use an eBay catalog product to create/revise a listing, the seller can include this field and set its value to <code>true</code>, or just omit this field, as its default value is <code>true</code>. If a seller doesn't want use an eBay catalog product to create/revise their listing, this field should be included and set to <code>false</code>. If the seller declines to use an eBay catalog product, they will be required to pass in their own listing title, listing description, item specifics, a listing category, and at least one picture.
     *  <br>
     *
     * @var bool $includeeBayProductDetails
     */
    private $includeeBayProductDetails = null;

    /**
     * This container is for future use. If it used, it will be ignored.
     *
     * @var \Nogrod\eBaySDK\MerchantData\NameValueListType[] $nameValueList
     */
    private $nameValueList = [
        
    ];

    /**
     * Gets as includeStockPhotoURL
     *
     * If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If you will be using an eBay catalog product to list your item, it is always advised to include the stock photo. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields. Seller photos are particularly recommended for used and modified products to give prospective buyers a clear sense of exactly what they are purchasing.
     *  In <b>GetItem</b> and other 'Get' calls, the URL of the stock photo will be returned in the <b>StockPhotoURL</b> field.
     *  <br/>
     *
     * @return bool
     */
    public function getIncludeStockPhotoURL()
    {
        return $this->includeStockPhotoURL;
    }

    /**
     * Sets a new includeStockPhotoURL
     *
     * If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If you will be using an eBay catalog product to list your item, it is always advised to include the stock photo. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields. Seller photos are particularly recommended for used and modified products to give prospective buyers a clear sense of exactly what they are purchasing.
     *  In <b>GetItem</b> and other 'Get' calls, the URL of the stock photo will be returned in the <b>StockPhotoURL</b> field.
     *  <br/>
     *
     * @param bool $includeStockPhotoURL
     * @return self
     */
    public function setIncludeStockPhotoURL($includeStockPhotoURL)
    {
        $this->includeStockPhotoURL = $includeStockPhotoURL;
        return $this;
    }

    /**
     * Gets as useStockPhotoURLAsGallery
     *
     * If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo as the Gallery thumbnail photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If this field is set to <code>true</code>, the <b>IncludeStockPhotoURL</b> field must also be set to <code>true</code> or this field will have no effect. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields, but none of these photos will be the Gallery thumbnail photo.
     *  <br>
     *
     * @return bool
     */
    public function getUseStockPhotoURLAsGallery()
    {
        return $this->useStockPhotoURLAsGallery;
    }

    /**
     * Sets a new useStockPhotoURLAsGallery
     *
     * If this value is <code>true</code>, the listing will use the eBay catalog product's stock photo as the Gallery thumbnail photo. In an Add/Revise/Relist call, this field is set to <code>true</code> by default. If this field is set to <code>true</code>, the <b>IncludeStockPhotoURL</b> field must also be set to <code>true</code> or this field will have no effect. Sellers can also add their own pictures using one or more <b>Item.PictureDetails.PictureURL</b> fields, but none of these photos will be the Gallery thumbnail photo.
     *  <br>
     *
     * @param bool $useStockPhotoURLAsGallery
     * @return self
     */
    public function setUseStockPhotoURLAsGallery($useStockPhotoURLAsGallery)
    {
        $this->useStockPhotoURLAsGallery = $useStockPhotoURLAsGallery;
        return $this;
    }

    /**
     * Gets as stockPhotoURL
     *
     * The full URL for the eBay catalog product's stock photo. This field is only returned if the seller used an eBay catalog product to list the item, and the
     *  <b>IncludeStockPhotoURL</b> field was set to <code>true</code>.
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
     * The full URL for the eBay catalog product's stock photo. This field is only returned if the seller used an eBay catalog product to list the item, and the
     *  <b>IncludeStockPhotoURL</b> field was set to <code>true</code>.
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
     * Adds as copyright
     *
     * Copyright statement indicating the source of the product information. This information will be
     *  included in the listing if the seller used an eBay catalog product to list the item.
     *
     * @return self
     * @param string $copyright
     */
    public function addToCopyright($copyright)
    {
        $this->copyright[] = $copyright;
        return $this;
    }

    /**
     * isset copyright
     *
     * Copyright statement indicating the source of the product information. This information will be
     *  included in the listing if the seller used an eBay catalog product to list the item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCopyright($index)
    {
        return isset($this->copyright[$index]);
    }

    /**
     * unset copyright
     *
     * Copyright statement indicating the source of the product information. This information will be
     *  included in the listing if the seller used an eBay catalog product to list the item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCopyright($index)
    {
        unset($this->copyright[$index]);
    }

    /**
     * Gets as copyright
     *
     * Copyright statement indicating the source of the product information. This information will be
     *  included in the listing if the seller used an eBay catalog product to list the item.
     *
     * @return string[]
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * Copyright statement indicating the source of the product information. This information will be
     *  included in the listing if the seller used an eBay catalog product to list the item.
     *
     * @param string[] $copyright
     * @return self
     */
    public function setCopyright(array $copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Gets as productReferenceID
     *
     * In an Add/Revise/Relist call, this field is used to pass in the eBay Product ID (e.g. ePID), which is the unique identifier of an eBay catalog product. Although an eBay catalog product match can be found using one or more GTIN values, passing in an ePID value is the best way to try and discover the appropriate eBay catalog product.
     *  <br>
     *  <br>
     *  This field is also returned in <b>GetItem</b> if the listing is associated with a eBay catalog product.
     *  <br>
     *
     * @return string
     */
    public function getProductReferenceID()
    {
        return $this->productReferenceID;
    }

    /**
     * Sets a new productReferenceID
     *
     * In an Add/Revise/Relist call, this field is used to pass in the eBay Product ID (e.g. ePID), which is the unique identifier of an eBay catalog product. Although an eBay catalog product match can be found using one or more GTIN values, passing in an ePID value is the best way to try and discover the appropriate eBay catalog product.
     *  <br>
     *  <br>
     *  This field is also returned in <b>GetItem</b> if the listing is associated with a eBay catalog product.
     *  <br>
     *
     * @param string $productReferenceID
     * @return self
     */
    public function setProductReferenceID($productReferenceID)
    {
        $this->productReferenceID = $productReferenceID;
        return $this;
    }

    /**
     * Gets as detailsURL
     *
     * This field is no longer applicable and should not be used.
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
     * This field is no longer applicable and should not be used.
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
     * Gets as productDetailsURL
     *
     * This field is no longer applicable and should not be used.
     *
     * @return string
     */
    public function getProductDetailsURL()
    {
        return $this->productDetailsURL;
    }

    /**
     * Sets a new productDetailsURL
     *
     * This field is no longer applicable and should not be used.
     *
     * @param string $productDetailsURL
     * @return self
     */
    public function setProductDetailsURL($productDetailsURL)
    {
        $this->productDetailsURL = $productDetailsURL;
        return $this;
    }

    /**
     * Gets as returnSearchResultOnDuplicates
     *
     * If the seller attempts to use <b>ProductListingDetails</b> in an Add/Revise/Relist call to find an eBay catalog product match, and multiple matches are found, the call will actually fail. This field can be included and set to <code>true</code> if the seller wants to see the eBay catalog products that were found through error messages in the call response. This flag will not have an effect if only one catalog product matchi is found, or if the <b>UseFirstProduct</b> field is used and set to <code>true</code> and a catalog product is found to create/revise the listing. <br>
     *  <br>
     *  If this field is omitted or set to <code>false</code>, and multiple catalog products are found, the call will fail and no information about the matching catalog products will be returned.
     *  <br>
     *
     * @return bool
     */
    public function getReturnSearchResultOnDuplicates()
    {
        return $this->returnSearchResultOnDuplicates;
    }

    /**
     * Sets a new returnSearchResultOnDuplicates
     *
     * If the seller attempts to use <b>ProductListingDetails</b> in an Add/Revise/Relist call to find an eBay catalog product match, and multiple matches are found, the call will actually fail. This field can be included and set to <code>true</code> if the seller wants to see the eBay catalog products that were found through error messages in the call response. This flag will not have an effect if only one catalog product matchi is found, or if the <b>UseFirstProduct</b> field is used and set to <code>true</code> and a catalog product is found to create/revise the listing. <br>
     *  <br>
     *  If this field is omitted or set to <code>false</code>, and multiple catalog products are found, the call will fail and no information about the matching catalog products will be returned.
     *  <br>
     *
     * @param bool $returnSearchResultOnDuplicates
     * @return self
     */
    public function setReturnSearchResultOnDuplicates($returnSearchResultOnDuplicates)
    {
        $this->returnSearchResultOnDuplicates = $returnSearchResultOnDuplicates;
        return $this;
    }

    /**
     * Gets as iSBN
     *
     * This field is used if the seller wants to, or is required to identify a product using an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category.
     *  <br/><br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the ISBN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an ISBN value, this value should be passed into the <b>Variation.VariationProductListingDetails.ISBN</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @return string
     */
    public function getISBN()
    {
        return $this->iSBN;
    }

    /**
     * Sets a new iSBN
     *
     * This field is used if the seller wants to, or is required to identify a product using an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category.
     *  <br/><br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the ISBN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an ISBN value, this value should be passed into the <b>Variation.VariationProductListingDetails.ISBN</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @param string $iSBN
     * @return self
     */
    public function setISBN($iSBN)
    {
        $this->iSBN = $iSBN;
        return $this;
    }

    /**
     * Gets as uPC
     *
     * This field is used if the seller wants to, or is required to identify a product using a UPC (Universal Product Code) value. A UPC is a commonly used identifer for many different products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>UPC</b> (and UPC values) are typically only applicable to US products listed on US eBay marketplace. If a European seller is selling a European-based product (with an EAN value) on the US site, instead of using the <b>EAN</b> field, the seller will use the <b>UPC</b> field to pass in the EAN value.
     *  </span>
     *  <br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the UPC value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires a UPC value, this value should be passed into the <b>Variation.VariationProductListingDetails.UPC</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @return string
     */
    public function getUPC()
    {
        return $this->uPC;
    }

    /**
     * Sets a new uPC
     *
     * This field is used if the seller wants to, or is required to identify a product using a UPC (Universal Product Code) value. A UPC is a commonly used identifer for many different products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>UPC</b> (and UPC values) are typically only applicable to US products listed on US eBay marketplace. If a European seller is selling a European-based product (with an EAN value) on the US site, instead of using the <b>EAN</b> field, the seller will use the <b>UPC</b> field to pass in the EAN value.
     *  </span>
     *  <br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the UPC value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires a UPC value, this value should be passed into the <b>Variation.VariationProductListingDetails.UPC</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @param string $uPC
     * @return self
     */
    public function setUPC($uPC)
    {
        $this->uPC = $uPC;
        return $this;
    }

    /**
     * Gets as eAN
     *
     * This field is used if the seller wants to, or is required to identify a product using an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>EAN</b> (and EAN values) are typically only applicable to European products listed on European eBay marketplaces. If a US seller is selling a US-based product (with a UPC value) on a European site (such as eBay UK), instead of using the <b>UPC</b> field, the seller will use the <b>EAN</b> field to pass in the UPC value.
     *  </span>
     *  <br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the EAN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an EAN value, this value should be passed into the <b>Variation.VariationProductListingDetails.EAN</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an EAN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->eAN;
    }

    /**
     * Sets a new eAN
     *
     * This field is used if the seller wants to, or is required to identify a product using an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>EAN</b> (and EAN values) are typically only applicable to European products listed on European eBay marketplaces. If a US seller is selling a US-based product (with a UPC value) on a European site (such as eBay UK), instead of using the <b>UPC</b> field, the seller will use the <b>EAN</b> field to pass in the UPC value.
     *  </span>
     *  <br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the EAN value passed into this field to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This field is only applicable for single-variation listings. For multiple-variation listings, if the category/product requires an EAN value, this value should be passed into the <b>Variation.VariationProductListingDetails.EAN</b> field instead.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an EAN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @param string $eAN
     * @return self
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;
        return $this;
    }

    /**
     * Gets as brandMPN
     *
     * This container is used if the seller wants to, or is required to identify a product using an Brand/Manufacturer Part Number (MPN) pair. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a Brand/MPN pair is supported/required for a category. Both the <b>Brand</b> and <b>MPN</b> fields are required if the category/product requires an MPN value.
     *  <br/><br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the Brand/MPN pair to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers associated with the catalog product will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This container is only applicable for single-variation listings. For multiple-variation listings, if the category requires Brand/MPN pairs, the product brand (shared by all variations in this listing) is passed in through the item-level item specifics (<b>Item.ItemSpecifics.NameValueList</b>), and the MPN value for each variation in the listing is passed in through the variation-level item specifics (<b>Variation.VariationSpecifics.NameValueList</b>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that requires or recommends a Brand and MPN value, the Brand and MPN values for the product should always be passed in through separate <b>ItemSpecifics.NameValueList</b> containers since the Brand and MPN values passed in through the <b>ProductListingDetails.BrandMPN</b> will not get picked up by the generated/revised listing unless the the Brand/MPN pair is successfully matched to an eBay catalog product. If an MPN doesn't exist for a product, or the seller does not have it available, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *  <br>
     *
     * @return \Nogrod\eBaySDK\MerchantData\BrandMPNType
     */
    public function getBrandMPN()
    {
        return $this->brandMPN;
    }

    /**
     * Sets a new brandMPN
     *
     * This container is used if the seller wants to, or is required to identify a product using an Brand/Manufacturer Part Number (MPN) pair. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a Brand/MPN pair is supported/required for a category. Both the <b>Brand</b> and <b>MPN</b> fields are required if the category/product requires an MPN value.
     *  <br/><br/>
     *  If the <b>IncludeeBayProductDetails</b> field is omitted or included and set to <code>true</code>, eBay will use the Brand/MPN pair to try and find a matching eBay catalog product. If a match is found, the listing will pick up the product details of the catalog product, including the product title, product description, item specifics, and stock photo. If the seller is passing in an ePID through the <b>ProductReferenceID</b> field, this field is not needed, as all product identifiers associated with the catalog product will get picked up automatically by the listing if a matching catalog product is found.
     *  <br/><br/>
     *  This container is only applicable for single-variation listings. For multiple-variation listings, if the category requires Brand/MPN pairs, the product brand (shared by all variations in this listing) is passed in through the item-level item specifics (<b>Item.ItemSpecifics.NameValueList</b>), and the MPN value for each variation in the listing is passed in through the variation-level item specifics (<b>Variation.VariationSpecifics.NameValueList</b>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that requires or recommends a Brand and MPN value, the Brand and MPN values for the product should always be passed in through separate <b>ItemSpecifics.NameValueList</b> containers since the Brand and MPN values passed in through the <b>ProductListingDetails.BrandMPN</b> will not get picked up by the generated/revised listing unless the the Brand/MPN pair is successfully matched to an eBay catalog product. If an MPN doesn't exist for a product, or the seller does not have it available, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *  <br>
     *
     * @param \Nogrod\eBaySDK\MerchantData\BrandMPNType $brandMPN
     * @return self
     */
    public function setBrandMPN(\Nogrod\eBaySDK\MerchantData\BrandMPNType $brandMPN)
    {
        $this->brandMPN = $brandMPN;
        return $this;
    }

    /**
     * Gets as ticketListingDetails
     *
     * This container is only applicable when a seller is creating/revising an event tickets listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TicketListingDetailsType
     */
    public function getTicketListingDetails()
    {
        return $this->ticketListingDetails;
    }

    /**
     * Sets a new ticketListingDetails
     *
     * This container is only applicable when a seller is creating/revising an event tickets listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\TicketListingDetailsType $ticketListingDetails
     * @return self
     */
    public function setTicketListingDetails(\Nogrod\eBaySDK\MerchantData\TicketListingDetailsType $ticketListingDetails)
    {
        $this->ticketListingDetails = $ticketListingDetails;
        return $this;
    }

    /**
     * Gets as useFirstProduct
     *
     * This field can be included and set to <code>true</code> if the seller wants to use the first eBay catalog product that is found to create/revise the listing. eBay will search for an eBay catalog product match if the seller provides an ePID or one or more GTIN values. If this field is omitted, or included and set to <code>false</code>, the call will fail if more than one eBay catalog product is found.
     *  <br>
     *
     * @return bool
     */
    public function getUseFirstProduct()
    {
        return $this->useFirstProduct;
    }

    /**
     * Sets a new useFirstProduct
     *
     * This field can be included and set to <code>true</code> if the seller wants to use the first eBay catalog product that is found to create/revise the listing. eBay will search for an eBay catalog product match if the seller provides an ePID or one or more GTIN values. If this field is omitted, or included and set to <code>false</code>, the call will fail if more than one eBay catalog product is found.
     *  <br>
     *
     * @param bool $useFirstProduct
     * @return self
     */
    public function setUseFirstProduct($useFirstProduct)
    {
        $this->useFirstProduct = $useFirstProduct;
        return $this;
    }

    /**
     * Gets as includeeBayProductDetails
     *
     * This boolean field controls whether or not an eBay catalog product is used to create or revise a listing. If an ePID or GTIN value is provided through the <b>ProductListingDetails</b> container when adding, revising, or relisting an item, the default behavior is for eBay to try and find a match for the product in the eBay catalog, and then automatically create/revise the listing using the product title, product description, item specifics, and stock photo defined for the catalog product.
     *  <br><br>
     *  If the seller wants to use an eBay catalog product to create/revise a listing, the seller can include this field and set its value to <code>true</code>, or just omit this field, as its default value is <code>true</code>. If a seller doesn't want use an eBay catalog product to create/revise their listing, this field should be included and set to <code>false</code>. If the seller declines to use an eBay catalog product, they will be required to pass in their own listing title, listing description, item specifics, a listing category, and at least one picture.
     *  <br>
     *
     * @return bool
     */
    public function getIncludeeBayProductDetails()
    {
        return $this->includeeBayProductDetails;
    }

    /**
     * Sets a new includeeBayProductDetails
     *
     * This boolean field controls whether or not an eBay catalog product is used to create or revise a listing. If an ePID or GTIN value is provided through the <b>ProductListingDetails</b> container when adding, revising, or relisting an item, the default behavior is for eBay to try and find a match for the product in the eBay catalog, and then automatically create/revise the listing using the product title, product description, item specifics, and stock photo defined for the catalog product.
     *  <br><br>
     *  If the seller wants to use an eBay catalog product to create/revise a listing, the seller can include this field and set its value to <code>true</code>, or just omit this field, as its default value is <code>true</code>. If a seller doesn't want use an eBay catalog product to create/revise their listing, this field should be included and set to <code>false</code>. If the seller declines to use an eBay catalog product, they will be required to pass in their own listing title, listing description, item specifics, a listing category, and at least one picture.
     *  <br>
     *
     * @param bool $includeeBayProductDetails
     * @return self
     */
    public function setIncludeeBayProductDetails($includeeBayProductDetails)
    {
        $this->includeeBayProductDetails = $includeeBayProductDetails;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList
     */
    public function addToNameValueList(\Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList)
    {
        $this->nameValueList[] = $nameValueList;
        return $this;
    }

    /**
     * isset nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameValueList($index)
    {
        return isset($this->nameValueList[$index]);
    }

    /**
     * unset nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameValueList($index)
    {
        unset($this->nameValueList[$index]);
    }

    /**
     * Gets as nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @return \Nogrod\eBaySDK\MerchantData\NameValueListType[]
     */
    public function getNameValueList()
    {
        return $this->nameValueList;
    }

    /**
     * Sets a new nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType[] $nameValueList
     * @return self
     */
    public function setNameValueList(array $nameValueList)
    {
        $this->nameValueList = $nameValueList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getIncludeStockPhotoURL();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeStockPhotoURL", $value);
        }
        $value = $this->getUseStockPhotoURLAsGallery();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UseStockPhotoURLAsGallery", $value);
        }
        $value = $this->getStockPhotoURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StockPhotoURL", $value);
        }
        $value = $this->getCopyright();
        if (null !== $value && !empty($this->getCopyright())) {
            $writer->write(array_map(function ($v) {
                return ["Copyright" => $v];
            }, $value));
        }
        $value = $this->getProductReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductReferenceID", $value);
        }
        $value = $this->getDetailsURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailsURL", $value);
        }
        $value = $this->getProductDetailsURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductDetailsURL", $value);
        }
        $value = $this->getReturnSearchResultOnDuplicates();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnSearchResultOnDuplicates", $value);
        }
        $value = $this->getISBN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ISBN", $value);
        }
        $value = $this->getUPC();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPC", $value);
        }
        $value = $this->getEAN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EAN", $value);
        }
        $value = $this->getBrandMPN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BrandMPN", $value);
        }
        $value = $this->getTicketListingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TicketListingDetails", $value);
        }
        $value = $this->getUseFirstProduct();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UseFirstProduct", $value);
        }
        $value = $this->getIncludeeBayProductDetails();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeeBayProductDetails", $value);
        }
        $value = $this->getNameValueList();
        if (null !== $value && !empty($this->getNameValueList())) {
            $writer->write(array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeStockPhotoURL');
        if (null !== $value) {
            $this->setIncludeStockPhotoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UseStockPhotoURLAsGallery');
        if (null !== $value) {
            $this->setUseStockPhotoURLAsGallery($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StockPhotoURL');
        if (null !== $value) {
            $this->setStockPhotoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Copyright', true);
        if (null !== $value && !empty($value)) {
            $this->setCopyright($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductReferenceID');
        if (null !== $value) {
            $this->setProductReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailsURL');
        if (null !== $value) {
            $this->setDetailsURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductDetailsURL');
        if (null !== $value) {
            $this->setProductDetailsURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnSearchResultOnDuplicates');
        if (null !== $value) {
            $this->setReturnSearchResultOnDuplicates($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBN');
        if (null !== $value) {
            $this->setISBN($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPC');
        if (null !== $value) {
            $this->setUPC($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EAN');
        if (null !== $value) {
            $this->setEAN($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BrandMPN');
        if (null !== $value) {
            $this->setBrandMPN(\Nogrod\eBaySDK\MerchantData\BrandMPNType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TicketListingDetails');
        if (null !== $value) {
            $this->setTicketListingDetails(\Nogrod\eBaySDK\MerchantData\TicketListingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UseFirstProduct');
        if (null !== $value) {
            $this->setUseFirstProduct($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeeBayProductDetails');
        if (null !== $value) {
            $this->setIncludeeBayProductDetails($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setNameValueList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NameValueListType::fromKeyValue($v);
            }, $value));
        }
    }
}
