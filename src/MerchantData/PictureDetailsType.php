<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureDetailsType
 *
 * Contains the data for the pictures associated with an item.
 * XSD Type: PictureDetailsType
 */
class PictureDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <a name="galleryTypeField"></a>
     *  This field is used to specify the type of picture gallery to use for the listing. If this field is omitted, a standard picture gallery is used for the listing. There is no listing fee for a standard picture gallery.
     *  <br/><br/>
     *  To use the Gallery Plus feature, you must include this field and set its value to <code>Plus</code>.
     *  <br/><br/>
     *  The Gallery image will be the first URL passed
     *  into the first <b>PictureURL</b> field, so if you want a specific picture to be the Gallery image, you should make sure you pass the URL for this picture in the first <b>PictureURL</b> field.
     *  <br/><br/>
     *  When revising a listing, if you disable the Gallery Plus or Featured Gallery feature by including the <b>GalleryType</b> and setting its value to <code>Gallery</code>, the original feature fee for either of these features will not be credited to the seller.
     *  <br/>
     *
     * @var string $galleryType
     */
    private $galleryType = null;

    /**
     * Specifies the type of image display used in a listing. Some options are
     *  only available if images are hosted through eBay Picture Services (EPS).
     *  eBay determines this by parsing the associated <b>PictureURL</b>.
     *  <br><br>
     *  Some <b>PhotoDisplay</b> options can result in listing fees, even when the item is relisted. If you are relisting an item that was originally listed with a <b>PhotoDisplay</b> option, and you do not want that <b>PhotoDisplay</b> enhancement in your relisted item, you need to specifically
     *  remove <b>PhotoDisplay</b> in your <b>RelistItem</b> call (or <b>RelistFixedPriceItem</b>, as applicable) by
     *  setting <b>PhotoDisplay</b> to <code>None</code>. Use <b>VerifyRelistItem</b> to review your listing fees before you
     *  relist an item.
     *
     * @var string $photoDisplay
     */
    private $photoDisplay = null;

    /**
     * Contains the URL for a picture of the item.
     *  The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted).
     *  You can pass in up to 12 picture URLs (for most categories and marketplaces) for each listing, but you cannot mix self-hosted and EPS-hosted URLs in the same listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. URLs using the 'http' protocol will not be allowed.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  On the US and Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added or removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours.
     *  </span>
     *
     * @var string[] $pictureURL
     */
    private $pictureURL = [

    ];

    /**
     * The service hosting the pictures in <b>PictureURL</b>, if any. This information is
     *  primarily useful for Picture Manager subscribers, who pay a flat subscription
     *  fee instead of individual picture fees per listing. Only returned when <b>PictureURL</b> is returned.
     *  <br/>
     *
     * @var string $pictureSource
     */
    private $pictureSource = null;

    /**
     * Indicates if the gallery image upload failed and gives a reason
     *  for the failure, such as 'InvalidUrl' or 'ServerDown'. It is not
     *  returned if the gallery image is uploaded successfully.
     *
     * @var string $galleryStatus
     */
    private $galleryStatus = null;

    /**
     * Indicates the reason the
     *  gallery generation failed, such as, URL for the image is not valid.
     *  This field is returned when <b>GalleryStatus</b> field is returned
     *  and does not appear when the gallery generation is successful.
     *  <br/>
     *
     * @var string $galleryErrorInfo
     */
    private $galleryErrorInfo = null;

    /**
     * When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed.
     *  <br/>
     *
     * @var string[] $externalPictureURL
     */
    private $externalPictureURL = [

    ];

    /**
     * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PictureURLsType[] $extendedPictureDetails
     */
    private $extendedPictureDetails = null;

    /**
     * Gets as galleryType
     *
     * <a name="galleryTypeField"></a>
     *  This field is used to specify the type of picture gallery to use for the listing. If this field is omitted, a standard picture gallery is used for the listing. There is no listing fee for a standard picture gallery.
     *  <br/><br/>
     *  To use the Gallery Plus feature, you must include this field and set its value to <code>Plus</code>.
     *  <br/><br/>
     *  The Gallery image will be the first URL passed
     *  into the first <b>PictureURL</b> field, so if you want a specific picture to be the Gallery image, you should make sure you pass the URL for this picture in the first <b>PictureURL</b> field.
     *  <br/><br/>
     *  When revising a listing, if you disable the Gallery Plus or Featured Gallery feature by including the <b>GalleryType</b> and setting its value to <code>Gallery</code>, the original feature fee for either of these features will not be credited to the seller.
     *  <br/>
     *
     * @return string
     */
    public function getGalleryType()
    {
        return $this->galleryType;
    }

    /**
     * Sets a new galleryType
     *
     * <a name="galleryTypeField"></a>
     *  This field is used to specify the type of picture gallery to use for the listing. If this field is omitted, a standard picture gallery is used for the listing. There is no listing fee for a standard picture gallery.
     *  <br/><br/>
     *  To use the Gallery Plus feature, you must include this field and set its value to <code>Plus</code>.
     *  <br/><br/>
     *  The Gallery image will be the first URL passed
     *  into the first <b>PictureURL</b> field, so if you want a specific picture to be the Gallery image, you should make sure you pass the URL for this picture in the first <b>PictureURL</b> field.
     *  <br/><br/>
     *  When revising a listing, if you disable the Gallery Plus or Featured Gallery feature by including the <b>GalleryType</b> and setting its value to <code>Gallery</code>, the original feature fee for either of these features will not be credited to the seller.
     *  <br/>
     *
     * @param string $galleryType
     * @return self
     */
    public function setGalleryType($galleryType)
    {
        $this->galleryType = $galleryType;
        return $this;
    }

    /**
     * Gets as photoDisplay
     *
     * Specifies the type of image display used in a listing. Some options are
     *  only available if images are hosted through eBay Picture Services (EPS).
     *  eBay determines this by parsing the associated <b>PictureURL</b>.
     *  <br><br>
     *  Some <b>PhotoDisplay</b> options can result in listing fees, even when the item is relisted. If you are relisting an item that was originally listed with a <b>PhotoDisplay</b> option, and you do not want that <b>PhotoDisplay</b> enhancement in your relisted item, you need to specifically
     *  remove <b>PhotoDisplay</b> in your <b>RelistItem</b> call (or <b>RelistFixedPriceItem</b>, as applicable) by
     *  setting <b>PhotoDisplay</b> to <code>None</code>. Use <b>VerifyRelistItem</b> to review your listing fees before you
     *  relist an item.
     *
     * @return string
     */
    public function getPhotoDisplay()
    {
        return $this->photoDisplay;
    }

    /**
     * Sets a new photoDisplay
     *
     * Specifies the type of image display used in a listing. Some options are
     *  only available if images are hosted through eBay Picture Services (EPS).
     *  eBay determines this by parsing the associated <b>PictureURL</b>.
     *  <br><br>
     *  Some <b>PhotoDisplay</b> options can result in listing fees, even when the item is relisted. If you are relisting an item that was originally listed with a <b>PhotoDisplay</b> option, and you do not want that <b>PhotoDisplay</b> enhancement in your relisted item, you need to specifically
     *  remove <b>PhotoDisplay</b> in your <b>RelistItem</b> call (or <b>RelistFixedPriceItem</b>, as applicable) by
     *  setting <b>PhotoDisplay</b> to <code>None</code>. Use <b>VerifyRelistItem</b> to review your listing fees before you
     *  relist an item.
     *
     * @param string $photoDisplay
     * @return self
     */
    public function setPhotoDisplay($photoDisplay)
    {
        $this->photoDisplay = $photoDisplay;
        return $this;
    }

    /**
     * Adds as pictureURL
     *
     * Contains the URL for a picture of the item.
     *  The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted).
     *  You can pass in up to 12 picture URLs (for most categories and marketplaces) for each listing, but you cannot mix self-hosted and EPS-hosted URLs in the same listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. URLs using the 'http' protocol will not be allowed.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  On the US and Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added or removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours.
     *  </span>
     *
     * @return self
     * @param string $pictureURL
     */
    public function addToPictureURL($pictureURL)
    {
        $this->pictureURL[] = $pictureURL;
        return $this;
    }

    /**
     * isset pictureURL
     *
     * Contains the URL for a picture of the item.
     *  The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted).
     *  You can pass in up to 12 picture URLs (for most categories and marketplaces) for each listing, but you cannot mix self-hosted and EPS-hosted URLs in the same listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. URLs using the 'http' protocol will not be allowed.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  On the US and Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added or removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureURL($index)
    {
        return isset($this->pictureURL[$index]);
    }

    /**
     * unset pictureURL
     *
     * Contains the URL for a picture of the item.
     *  The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted).
     *  You can pass in up to 12 picture URLs (for most categories and marketplaces) for each listing, but you cannot mix self-hosted and EPS-hosted URLs in the same listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. URLs using the 'http' protocol will not be allowed.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  On the US and Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added or removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureURL($index)
    {
        unset($this->pictureURL[$index]);
    }

    /**
     * Gets as pictureURL
     *
     * Contains the URL for a picture of the item.
     *  The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted).
     *  You can pass in up to 12 picture URLs (for most categories and marketplaces) for each listing, but you cannot mix self-hosted and EPS-hosted URLs in the same listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. URLs using the 'http' protocol will not be allowed.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  On the US and Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added or removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours.
     *  </span>
     *
     * @return string[]
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * Contains the URL for a picture of the item.
     *  The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted).
     *  You can pass in up to 12 picture URLs (for most categories and marketplaces) for each listing, but you cannot mix self-hosted and EPS-hosted URLs in the same listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. URLs using the 'http' protocol will not be allowed.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  On the US and Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added or removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours.
     *  </span>
     *
     * @param string[] $pictureURL
     * @return self
     */
    public function setPictureURL(array $pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    /**
     * Gets as pictureSource
     *
     * The service hosting the pictures in <b>PictureURL</b>, if any. This information is
     *  primarily useful for Picture Manager subscribers, who pay a flat subscription
     *  fee instead of individual picture fees per listing. Only returned when <b>PictureURL</b> is returned.
     *  <br/>
     *
     * @return string
     */
    public function getPictureSource()
    {
        return $this->pictureSource;
    }

    /**
     * Sets a new pictureSource
     *
     * The service hosting the pictures in <b>PictureURL</b>, if any. This information is
     *  primarily useful for Picture Manager subscribers, who pay a flat subscription
     *  fee instead of individual picture fees per listing. Only returned when <b>PictureURL</b> is returned.
     *  <br/>
     *
     * @param string $pictureSource
     * @return self
     */
    public function setPictureSource($pictureSource)
    {
        $this->pictureSource = $pictureSource;
        return $this;
    }

    /**
     * Gets as galleryStatus
     *
     * Indicates if the gallery image upload failed and gives a reason
     *  for the failure, such as 'InvalidUrl' or 'ServerDown'. It is not
     *  returned if the gallery image is uploaded successfully.
     *
     * @return string
     */
    public function getGalleryStatus()
    {
        return $this->galleryStatus;
    }

    /**
     * Sets a new galleryStatus
     *
     * Indicates if the gallery image upload failed and gives a reason
     *  for the failure, such as 'InvalidUrl' or 'ServerDown'. It is not
     *  returned if the gallery image is uploaded successfully.
     *
     * @param string $galleryStatus
     * @return self
     */
    public function setGalleryStatus($galleryStatus)
    {
        $this->galleryStatus = $galleryStatus;
        return $this;
    }

    /**
     * Gets as galleryErrorInfo
     *
     * Indicates the reason the
     *  gallery generation failed, such as, URL for the image is not valid.
     *  This field is returned when <b>GalleryStatus</b> field is returned
     *  and does not appear when the gallery generation is successful.
     *  <br/>
     *
     * @return string
     */
    public function getGalleryErrorInfo()
    {
        return $this->galleryErrorInfo;
    }

    /**
     * Sets a new galleryErrorInfo
     *
     * Indicates the reason the
     *  gallery generation failed, such as, URL for the image is not valid.
     *  This field is returned when <b>GalleryStatus</b> field is returned
     *  and does not appear when the gallery generation is successful.
     *  <br/>
     *
     * @param string $galleryErrorInfo
     * @return self
     */
    public function setGalleryErrorInfo($galleryErrorInfo)
    {
        $this->galleryErrorInfo = $galleryErrorInfo;
        return $this;
    }

    /**
     * Adds as externalPictureURL
     *
     * When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed.
     *  <br/>
     *
     * @return self
     * @param string $externalPictureURL
     */
    public function addToExternalPictureURL($externalPictureURL)
    {
        $this->externalPictureURL[] = $externalPictureURL;
        return $this;
    }

    /**
     * isset externalPictureURL
     *
     * When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed.
     *  <br/>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternalPictureURL($index)
    {
        return isset($this->externalPictureURL[$index]);
    }

    /**
     * unset externalPictureURL
     *
     * When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed.
     *  <br/>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternalPictureURL($index)
    {
        unset($this->externalPictureURL[$index]);
    }

    /**
     * Gets as externalPictureURL
     *
     * When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed.
     *  <br/>
     *
     * @return string[]
     */
    public function getExternalPictureURL()
    {
        return $this->externalPictureURL;
    }

    /**
     * Sets a new externalPictureURL
     *
     * When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed.
     *  <br/>
     *
     * @param string[] $externalPictureURL
     * @return self
     */
    public function setExternalPictureURL(array $externalPictureURL)
    {
        $this->externalPictureURL = $externalPictureURL;
        return $this;
    }

    /**
     * Adds as pictureURLs
     *
     * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\PictureURLsType $pictureURLs
     */
    public function addToExtendedPictureDetails(\Nogrod\eBaySDK\MerchantData\PictureURLsType $pictureURLs)
    {
        $this->extendedPictureDetails[] = $pictureURLs;
        return $this;
    }

    /**
     * isset extendedPictureDetails
     *
     * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtendedPictureDetails($index)
    {
        return isset($this->extendedPictureDetails[$index]);
    }

    /**
     * unset extendedPictureDetails
     *
     * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtendedPictureDetails($index)
    {
        unset($this->extendedPictureDetails[$index]);
    }

    /**
     * Gets as extendedPictureDetails
     *
     * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PictureURLsType[]
     */
    public function getExtendedPictureDetails()
    {
        return $this->extendedPictureDetails;
    }

    /**
     * Sets a new extendedPictureDetails
     *
     * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PictureURLsType[] $extendedPictureDetails
     * @return self
     */
    public function setExtendedPictureDetails(array $extendedPictureDetails)
    {
        $this->extendedPictureDetails = $extendedPictureDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getGalleryType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryType", $value);
        }
        $value = $this->getPhotoDisplay();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhotoDisplay", $value);
        }
        $value = $this->getPictureURL();
        if (null !== $value && !empty($this->getPictureURL())) {
            $writer->write(array_map(function ($v) {return ["PictureURL" => $v];}, $value));
        }
        $value = $this->getPictureSource();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureSource", $value);
        }
        $value = $this->getGalleryStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryStatus", $value);
        }
        $value = $this->getGalleryErrorInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryErrorInfo", $value);
        }
        $value = $this->getExternalPictureURL();
        if (null !== $value && !empty($this->getExternalPictureURL())) {
            $writer->write(array_map(function ($v) {return ["ExternalPictureURL" => $v];}, $value));
        }
        $value = $this->getExtendedPictureDetails();
        if (null !== $value && !empty($this->getExtendedPictureDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtendedPictureDetails", array_map(function ($v) {return ["PictureURLs" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryType');
        if (null !== $value) {
            $this->setGalleryType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhotoDisplay');
        if (null !== $value) {
            $this->setPhotoDisplay($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureSource');
        if (null !== $value) {
            $this->setPictureSource($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryStatus');
        if (null !== $value) {
            $this->setGalleryStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryErrorInfo');
        if (null !== $value) {
            $this->setGalleryErrorInfo($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setExternalPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtendedPictureDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setExtendedPictureDetails(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\PictureURLsType::fromKeyValue($v);}, $value));
        }
    }
}
