<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationSpecificPictureSetType
 *
 * Type defining the <b>VariationSpecificPictureSet</b> container, which is
 *  used to specify the URL(s) where the picture(s) of the variation specific will be
 *  hosted. If the <b>Variations.Pictures</b> container is used, at least one
 *  <b>VariationSpecificPictureSet</b> container is required.
 * XSD Type: VariationSpecificPictureSetType
 */
class VariationSpecificPictureSetType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A value that is associated with <b>VariationSpecificName</b>. For example,
     *  suppose this set of pictures is showing blue shirts, and some of
     *  the variations include Color=Blue in their variation specifics.
     *  If <b>VariationSpecificName</b> is <code>Color </code>, then <b>VariationSpecificValue</b> would be <code>Blue</code>.
     *
     * @var string $variationSpecificValue
     */
    private $variationSpecificValue = null;

    /**
     * The URL of a picture that is associated with the
     *  <b>VariationSpecificValue</b>. A variation specific picture set can
     *  consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture
     *  Services and self-hosted images can never be combined into the same variation
     *  specific picture set. To specify more than one image, use
     *  multiple <b>PictureURL</b> fields, passing in a distinct URL in each
     *  of those fields. This field cannot have an empty/null value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br><br>
     *  The image specified in the first <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red
     *  shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the
     *  first picture is used as the thumbnail image for all the red shirt variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *
     *  You can use Item.PictureDetails to specify additional pictures.
     *  For example, the item-level pictures could include a model wearing a
     *  black shirt, as a typical example of the shirt style.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12 hours.
     *  </span>
     *
     * @var string[] $pictureURL
     */
    private $pictureURL = [

    ];

    /**
     * No longer used.
     *
     * @var string $galleryURL
     */
    private $galleryURL = null;

    /**
     * Returns the URL of a variation-specific picture that is hosted outside of eBay.<br>
     *  <br>
     *  When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted picture or EPS picture.<br>
     *  <br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply to the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>.
     *  </span>
     *  This is returned only when the seller used a self-hosted picture for the variation.
     *
     * @var string[] $externalPictureURL
     */
    private $externalPictureURL = [

    ];

    /**
     * Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
     *
     * @var \Nogrod\eBaySDK\Trading\PictureURLsType[] $extendedPictureDetails
     */
    private $extendedPictureDetails = null;

    /**
     * Gets as variationSpecificValue
     *
     * A value that is associated with <b>VariationSpecificName</b>. For example,
     *  suppose this set of pictures is showing blue shirts, and some of
     *  the variations include Color=Blue in their variation specifics.
     *  If <b>VariationSpecificName</b> is <code>Color </code>, then <b>VariationSpecificValue</b> would be <code>Blue</code>.
     *
     * @return string
     */
    public function getVariationSpecificValue()
    {
        return $this->variationSpecificValue;
    }

    /**
     * Sets a new variationSpecificValue
     *
     * A value that is associated with <b>VariationSpecificName</b>. For example,
     *  suppose this set of pictures is showing blue shirts, and some of
     *  the variations include Color=Blue in their variation specifics.
     *  If <b>VariationSpecificName</b> is <code>Color </code>, then <b>VariationSpecificValue</b> would be <code>Blue</code>.
     *
     * @param string $variationSpecificValue
     * @return self
     */
    public function setVariationSpecificValue($variationSpecificValue)
    {
        $this->variationSpecificValue = $variationSpecificValue;
        return $this;
    }

    /**
     * Adds as pictureURL
     *
     * The URL of a picture that is associated with the
     *  <b>VariationSpecificValue</b>. A variation specific picture set can
     *  consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture
     *  Services and self-hosted images can never be combined into the same variation
     *  specific picture set. To specify more than one image, use
     *  multiple <b>PictureURL</b> fields, passing in a distinct URL in each
     *  of those fields. This field cannot have an empty/null value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br><br>
     *  The image specified in the first <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red
     *  shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the
     *  first picture is used as the thumbnail image for all the red shirt variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *
     *  You can use Item.PictureDetails to specify additional pictures.
     *  For example, the item-level pictures could include a model wearing a
     *  black shirt, as a typical example of the shirt style.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12 hours.
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
     * The URL of a picture that is associated with the
     *  <b>VariationSpecificValue</b>. A variation specific picture set can
     *  consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture
     *  Services and self-hosted images can never be combined into the same variation
     *  specific picture set. To specify more than one image, use
     *  multiple <b>PictureURL</b> fields, passing in a distinct URL in each
     *  of those fields. This field cannot have an empty/null value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br><br>
     *  The image specified in the first <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red
     *  shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the
     *  first picture is used as the thumbnail image for all the red shirt variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *
     *  You can use Item.PictureDetails to specify additional pictures.
     *  For example, the item-level pictures could include a model wearing a
     *  black shirt, as a typical example of the shirt style.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12 hours.
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
     * The URL of a picture that is associated with the
     *  <b>VariationSpecificValue</b>. A variation specific picture set can
     *  consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture
     *  Services and self-hosted images can never be combined into the same variation
     *  specific picture set. To specify more than one image, use
     *  multiple <b>PictureURL</b> fields, passing in a distinct URL in each
     *  of those fields. This field cannot have an empty/null value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br><br>
     *  The image specified in the first <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red
     *  shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the
     *  first picture is used as the thumbnail image for all the red shirt variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *
     *  You can use Item.PictureDetails to specify additional pictures.
     *  For example, the item-level pictures could include a model wearing a
     *  black shirt, as a typical example of the shirt style.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12 hours.
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
     * The URL of a picture that is associated with the
     *  <b>VariationSpecificValue</b>. A variation specific picture set can
     *  consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture
     *  Services and self-hosted images can never be combined into the same variation
     *  specific picture set. To specify more than one image, use
     *  multiple <b>PictureURL</b> fields, passing in a distinct URL in each
     *  of those fields. This field cannot have an empty/null value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br><br>
     *  The image specified in the first <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red
     *  shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the
     *  first picture is used as the thumbnail image for all the red shirt variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *
     *  You can use Item.PictureDetails to specify additional pictures.
     *  For example, the item-level pictures could include a model wearing a
     *  black shirt, as a typical example of the shirt style.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12 hours.
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
     * The URL of a picture that is associated with the
     *  <b>VariationSpecificValue</b>. A variation specific picture set can
     *  consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture
     *  Services and self-hosted images can never be combined into the same variation
     *  specific picture set. To specify more than one image, use
     *  multiple <b>PictureURL</b> fields, passing in a distinct URL in each
     *  of those fields. This field cannot have an empty/null value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol.
     *  <br><br>
     *  The image specified in the first <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red
     *  shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the
     *  first picture is used as the thumbnail image for all the red shirt variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page.
     *  </span>
     *
     *  You can use Item.PictureDetails to specify additional pictures.
     *  For example, the item-level pictures could include a model wearing a
     *  black shirt, as a typical example of the shirt style.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the URL, as an error will occur.
     *  </span>
     *  Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12 hours.
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
     * Gets as galleryURL
     *
     * No longer used.
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
     * No longer used.
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
     * Adds as externalPictureURL
     *
     * Returns the URL of a variation-specific picture that is hosted outside of eBay.<br>
     *  <br>
     *  When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted picture or EPS picture.<br>
     *  <br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply to the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>.
     *  </span>
     *  This is returned only when the seller used a self-hosted picture for the variation.
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
     * Returns the URL of a variation-specific picture that is hosted outside of eBay.<br>
     *  <br>
     *  When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted picture or EPS picture.<br>
     *  <br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply to the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>.
     *  </span>
     *  This is returned only when the seller used a self-hosted picture for the variation.
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
     * Returns the URL of a variation-specific picture that is hosted outside of eBay.<br>
     *  <br>
     *  When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted picture or EPS picture.<br>
     *  <br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply to the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>.
     *  </span>
     *  This is returned only when the seller used a self-hosted picture for the variation.
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
     * Returns the URL of a variation-specific picture that is hosted outside of eBay.<br>
     *  <br>
     *  When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted picture or EPS picture.<br>
     *  <br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply to the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>.
     *  </span>
     *  This is returned only when the seller used a self-hosted picture for the variation.
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
     * Returns the URL of a variation-specific picture that is hosted outside of eBay.<br>
     *  <br>
     *  When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted picture or EPS picture.<br>
     *  <br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply to the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>.
     *  </span>
     *  This is returned only when the seller used a self-hosted picture for the variation.
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
     * Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
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
     * Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
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
     * Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
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
     * Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
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
     * Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
     *
     * @param \Nogrod\eBaySDK\Trading\PictureURLsType[] $extendedPictureDetails
     * @return self
     */
    public function setExtendedPictureDetails(array $extendedPictureDetails)
    {
        $this->extendedPictureDetails = $extendedPictureDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVariationSpecificValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecificValue", $value);
        }
        $value = $this->getPictureURL();
        if (null !== $value && !empty($this->getPictureURL())) {
            $writer->write(array_map(function ($v) {
                return ["PictureURL" => $v];
            }, $value));
        }
        $value = $this->getGalleryURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryURL", $value);
        }
        $value = $this->getExternalPictureURL();
        if (null !== $value && !empty($this->getExternalPictureURL())) {
            $writer->write(array_map(function ($v) {
                return ["ExternalPictureURL" => $v];
            }, $value));
        }
        $value = $this->getExtendedPictureDetails();
        if (null !== $value && !empty($this->getExtendedPictureDetails())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtendedPictureDetails", array_map(function ($v) {
                return ["PictureURLs" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecificValue');
        if (null !== $value) {
            $this->setVariationSpecificValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryURL');
        if (null !== $value) {
            $this->setGalleryURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setExternalPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtendedPictureDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setExtendedPictureDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PictureURLsType::fromKeyValue($v);
            }, $value));
        }
    }
}
