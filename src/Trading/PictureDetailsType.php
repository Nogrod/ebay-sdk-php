<?php

namespace Nogrod\eBaySDK\Trading;

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
     *  When revising a listing, if you disable the Gallery Plus feature by including the <b>GalleryType</b> field and setting its value to <code>Gallery</code>, the original feature fee for this feature will not be credited to the seller.
     *  <br/>
     *
     * @var string $galleryType
     */
    private $galleryType = null;

    /**
     * This field shows the URL for the gallery image of an item returned in <b>GetMyeBayBuying</b><br/> and <b>GetMyeBaySelling</b>.<br/>
     *
     * @var string $galleryURL
     */
    private $galleryURL = null;

    /**
     * The <b>PictureURL</b> field contains a picture URL of the item, which can be sourced from eBay Picture Services (EPS-hosted) or an external server (self-hosted). A listing can include up to 24 picture URLs, but these URLs cannot be mixed between self-hosted and EPS-hosted within the same listing. Use the <b>UploadSiteHostedPictures</b> call to upload images to EPS. All URLs must use the 'https' protocol; URLs using the 'http' protocol are not permitted.
     *  <br/><br/>
     *  Sellers can have up to 24 pictures in almost any category at no cost. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127">Fees for selling vehicles on eBay Motors</a>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The total length of all <b>PictureURL</b> values associated with a listing must not exceed 3975 characters.
     *  </span>
     *
     *  <br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *
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
     * The value in this field indicates if the listing contains image files uploaded to the eBay Picture Server (EPS), or externally-hosted images for which eBay created EPS equivalents.<br><br>This value defaults to <code>EPS</code>, so if a seller is going to upload externally-hosted image URLs, this field must be included and set to <code>Vendor</code>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Original EPS and externally-hosted images cannot be mixed, so this value cannot be changed if a listing already has one or more images.
     *  </span>
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
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the PictureDetails.ExternalPictureURL field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @var \Nogrod\eBaySDK\Trading\PictureURLsType[] $extendedPictureDetails
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
     *  When revising a listing, if you disable the Gallery Plus feature by including the <b>GalleryType</b> field and setting its value to <code>Gallery</code>, the original feature fee for this feature will not be credited to the seller.
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
     *  When revising a listing, if you disable the Gallery Plus feature by including the <b>GalleryType</b> field and setting its value to <code>Gallery</code>, the original feature fee for this feature will not be credited to the seller.
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
     * Gets as galleryURL
     *
     * This field shows the URL for the gallery image of an item returned in <b>GetMyeBayBuying</b><br/> and <b>GetMyeBaySelling</b>.<br/>
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
     * This field shows the URL for the gallery image of an item returned in <b>GetMyeBayBuying</b><br/> and <b>GetMyeBaySelling</b>.<br/>
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
     * Adds as pictureURL
     *
     * The <b>PictureURL</b> field contains a picture URL of the item, which can be sourced from eBay Picture Services (EPS-hosted) or an external server (self-hosted). A listing can include up to 24 picture URLs, but these URLs cannot be mixed between self-hosted and EPS-hosted within the same listing. Use the <b>UploadSiteHostedPictures</b> call to upload images to EPS. All URLs must use the 'https' protocol; URLs using the 'http' protocol are not permitted.
     *  <br/><br/>
     *  Sellers can have up to 24 pictures in almost any category at no cost. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127">Fees for selling vehicles on eBay Motors</a>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The total length of all <b>PictureURL</b> values associated with a listing must not exceed 3975 characters.
     *  </span>
     *
     *  <br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *
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
     * The <b>PictureURL</b> field contains a picture URL of the item, which can be sourced from eBay Picture Services (EPS-hosted) or an external server (self-hosted). A listing can include up to 24 picture URLs, but these URLs cannot be mixed between self-hosted and EPS-hosted within the same listing. Use the <b>UploadSiteHostedPictures</b> call to upload images to EPS. All URLs must use the 'https' protocol; URLs using the 'http' protocol are not permitted.
     *  <br/><br/>
     *  Sellers can have up to 24 pictures in almost any category at no cost. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127">Fees for selling vehicles on eBay Motors</a>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The total length of all <b>PictureURL</b> values associated with a listing must not exceed 3975 characters.
     *  </span>
     *
     *  <br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *
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
     * The <b>PictureURL</b> field contains a picture URL of the item, which can be sourced from eBay Picture Services (EPS-hosted) or an external server (self-hosted). A listing can include up to 24 picture URLs, but these URLs cannot be mixed between self-hosted and EPS-hosted within the same listing. Use the <b>UploadSiteHostedPictures</b> call to upload images to EPS. All URLs must use the 'https' protocol; URLs using the 'http' protocol are not permitted.
     *  <br/><br/>
     *  Sellers can have up to 24 pictures in almost any category at no cost. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127">Fees for selling vehicles on eBay Motors</a>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The total length of all <b>PictureURL</b> values associated with a listing must not exceed 3975 characters.
     *  </span>
     *
     *  <br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *
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
     * The <b>PictureURL</b> field contains a picture URL of the item, which can be sourced from eBay Picture Services (EPS-hosted) or an external server (self-hosted). A listing can include up to 24 picture URLs, but these URLs cannot be mixed between self-hosted and EPS-hosted within the same listing. Use the <b>UploadSiteHostedPictures</b> call to upload images to EPS. All URLs must use the 'https' protocol; URLs using the 'http' protocol are not permitted.
     *  <br/><br/>
     *  Sellers can have up to 24 pictures in almost any category at no cost. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127">Fees for selling vehicles on eBay Motors</a>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The total length of all <b>PictureURL</b> values associated with a listing must not exceed 3975 characters.
     *  </span>
     *
     *  <br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *
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
     * The <b>PictureURL</b> field contains a picture URL of the item, which can be sourced from eBay Picture Services (EPS-hosted) or an external server (self-hosted). A listing can include up to 24 picture URLs, but these URLs cannot be mixed between self-hosted and EPS-hosted within the same listing. Use the <b>UploadSiteHostedPictures</b> call to upload images to EPS. All URLs must use the 'https' protocol; URLs using the 'http' protocol are not permitted.
     *  <br/><br/>
     *  Sellers can have up to 24 pictures in almost any category at no cost. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href="https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127">Fees for selling vehicles on eBay Motors</a>).
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  The Gallery image will be the first <b>PictureURL</b>
     *  in the array of <b>PictureURL</b> fields.
     *
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *  To specify multiple pictures, send each URL in a separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in defaults to be the 'gallery image', and will be the first picture that is shown when a user lands on the View Item page.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  The total length of all <b>PictureURL</b> values associated with a listing must not exceed 3975 characters.
     *  </span>
     *
     *  <br>
     *  If a listing uses a single, self-hosted picture (except in the case of a multiple-variation listing), the picture will be copied to eBay Picture Services (EPS) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL.
     *
     *  <br/><br/>
     *  <b>For VerifyAddItem only:</b> You must include a picture even when using <b>VerifyAddItem</b>. If you don't have a image file, you can use the following
     *  fake eBay Picture Services URL (https://i2.ebayimg.com/abc/M28/dummy.jpg) with this call.
     *
     *  <br><br>
     *  <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     *  revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set
     *  of URLs with the revised set. You cannot remove all the <b>PictureURL</b> fields from a listing because each listing requires at least one picture.
     *  <br/><br/>
     *  <b>Remember</b>: The 'gallery image' will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So, if the first image passed in when relisting/revising is different from when the listing was created, the 'gallery image' will be changed.
     *
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
     * The value in this field indicates if the listing contains image files uploaded to the eBay Picture Server (EPS), or externally-hosted images for which eBay created EPS equivalents.<br><br>This value defaults to <code>EPS</code>, so if a seller is going to upload externally-hosted image URLs, this field must be included and set to <code>Vendor</code>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Original EPS and externally-hosted images cannot be mixed, so this value cannot be changed if a listing already has one or more images.
     *  </span>
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
     * The value in this field indicates if the listing contains image files uploaded to the eBay Picture Server (EPS), or externally-hosted images for which eBay created EPS equivalents.<br><br>This value defaults to <code>EPS</code>, so if a seller is going to upload externally-hosted image URLs, this field must be included and set to <code>Vendor</code>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Original EPS and externally-hosted images cannot be mixed, so this value cannot be changed if a listing already has one or more images.
     *  </span>
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
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the PictureDetails.ExternalPictureURL field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PictureURLsType $pictureURLs
     */
    public function addToExtendedPictureDetails(\Nogrod\eBaySDK\Trading\PictureURLsType $pictureURLs)
    {
        $this->extendedPictureDetails[] = $pictureURLs;
        return $this;
    }

    /**
     * isset extendedPictureDetails
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the PictureDetails.ExternalPictureURL field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
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
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the PictureDetails.ExternalPictureURL field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
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
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the PictureDetails.ExternalPictureURL field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @return \Nogrod\eBaySDK\Trading\PictureURLsType[]
     */
    public function getExtendedPictureDetails()
    {
        return $this->extendedPictureDetails;
    }

    /**
     * Sets a new extendedPictureDetails
     *
     * The <b>ExtendedPictureDetails</b> container and its child fields are no longer returned under any circumstances, including when self-hosted pictures are used for the item. When self-hosted pictures are used by the seller, only the external URL of the gallery image is shown in the PictureDetails.ExternalPictureURL field, and only the equivalent eBay Picture Server (EPS) URLs are shown for the rest of the item's images in separate <b>PictureDetails.PictureURL</b> fields.
     *
     * @param \Nogrod\eBaySDK\Trading\PictureURLsType[] $extendedPictureDetails
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
        $value = $this->getGalleryURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryURL", $value);
        }
        $value = $this->getPictureURL();
        if (null !== $value && [] !== $this->getPictureURL()) {
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
        if (null !== $value && [] !== $this->getExternalPictureURL()) {
            $writer->write(array_map(function ($v) {return ["ExternalPictureURL" => $v];}, $value));
        }
        $value = $this->getExtendedPictureDetails();
        if (null !== $value && [] !== $this->getExtendedPictureDetails()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtendedPictureDetails", array_map(function ($v) {return ["PictureURLs" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PictureDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryType');
        if (null !== $value) {
            $this->setGalleryType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryURL');
        if (null !== $value) {
            $this->setGalleryURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL', true);
        if (null !== $value) {
            $this->setPictureURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureSource');
        if (null !== $value) {
            $this->setPictureSource($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryStatus');
        if (null !== $value) {
            $this->setGalleryStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryErrorInfo');
        if (null !== $value) {
            $this->setGalleryErrorInfo($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL', true);
        if (null !== $value) {
            $this->setExternalPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtendedPictureDetails');
        if (null !== $value) {
            $this->setExtendedPictureDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\PictureURLsType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}PictureURLs'));}, $value));
        }
    }
}
