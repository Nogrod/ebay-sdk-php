<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UploadSiteHostedPicturesRequestType
 *
 * Uploads a picture to the eBay Picture Service and returns a URL of the picture.
 *  You will use this URL when creating, revising, or relisting an item with the Trading API.
 * XSD Type: UploadSiteHostedPicturesRequestType
 */
class UploadSiteHostedPicturesRequestType extends AbstractRequestType
{
    /**
     * A seller-defined name for the picture. This field is optional, but can make it easier for a seller to track than an arbitrary, eBay-assigned URL.
     *
     * @var string $pictureName
     */
    private $pictureName = null;

    /**
     * Specifies the picture system version. Only version 2 is valid.
     *  Available to support future changes in the picture system version.
     *
     * @var int $pictureSystemVersion
     */
    private $pictureSystemVersion = null;

    /**
     * This enumeration value indicates the size of the picture that will be generated.
     *  <br/><br/>
     *  <span class="tablenote"><b>IMPORTANT: </b>
     *  To get the standard website image sizing with Zoom, set this field to <b>Supersize</b>.
     *  </span>
     *
     * @var string $pictureSet
     */
    private $pictureSet = null;

    /**
     * An optional reference ID to the binary attachment.
     *  <br/><br/>
     *  The <b>PictureData</b> field does not contain the binary attachment. The binary attachment is image data, including the headers, from a JPG, GIF, PNG, BMP, or TIF format image file. The binary attachment must be sent as a MIME attachment, in your POST request, after the XML input.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This field is not applicable for eBay Large Merchant Services. Use the
     *  <b>ExternalPictureURL</b> field instead.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\Base64BinaryType $pictureData
     */
    private $pictureData = null;

    /**
     * Determines if the uploaded picture is to replace all the pictures or to be added to the pictures currently available to a seller on the eBay site. The picture is available to the seller on the My Picture Uploads tab within the Sell Your Item pages.
     *  <br/><br/>
     *  The picture you upload (and its URL) is stored for a period of time on the EPS server. If, within that time, the picture is associated with an item, then the picture persists on the eBay site for the same time length as other pictures uploaded using the <b>UploadSiteHostedPictures</b> call.
     *  <br/><br/>
     *  The expiration date of the picture is returned in the <b>SiteHostedPictureDetails.UseByDate</b> field in the response.
     *
     * @var string $pictureUploadPolicy
     */
    private $pictureUploadPolicy = null;

    /**
     * This field is used if the seller wishes to upload a picture to the EPS server that is currently on another external site. The URL of the picture you want to upload is passed in this field. Both http:// and https:// servers are supported.
     *  You can include only one <b>ExternalPictureURL</b> field per call.
     *  <br><br>
     *  The eBay server uses the information in this field to retrieve a picture from an external web server. Once retrieved, the picture will be copied to eBay Picture Services and retained for 30 days if not associated with a listing. When associated with a listing, the duration is the length of the listing plus 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Although both the HTTP and HTTPS protocols are currently supported, in the near future, eBay will no longer allow the hosting or transfer of images on a server using the the HTTP protocol.
     *  </span>
     *
     * @var string[] $externalPictureURL
     */
    private $externalPictureURL = [

    ];

    /**
     * This field is deprecated.
     *
     * @var string[] $pictureWatermark
     */
    private $pictureWatermark = [

    ];

    /**
     * By default, an unpublished picture will be hosted on the EPS server for five days before being purged. However, the seller has the option of using this field to set an expiration date further into the future (up to 30 days). Similarly, when a listing ends or expires, the images associated with the listing remain on the EPS server for an additional 90 days. The value in this field will add on to those 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>This call is restricted to applications that have been granted permission. Contact the eBay Developers Program to request permission.
     *  </span>
     *
     * @var int $extensionInDays
     */
    private $extensionInDays = null;

    /**
     * Gets as pictureName
     *
     * A seller-defined name for the picture. This field is optional, but can make it easier for a seller to track than an arbitrary, eBay-assigned URL.
     *
     * @return string
     */
    public function getPictureName()
    {
        return $this->pictureName;
    }

    /**
     * Sets a new pictureName
     *
     * A seller-defined name for the picture. This field is optional, but can make it easier for a seller to track than an arbitrary, eBay-assigned URL.
     *
     * @param string $pictureName
     * @return self
     */
    public function setPictureName($pictureName)
    {
        $this->pictureName = $pictureName;
        return $this;
    }

    /**
     * Gets as pictureSystemVersion
     *
     * Specifies the picture system version. Only version 2 is valid.
     *  Available to support future changes in the picture system version.
     *
     * @return int
     */
    public function getPictureSystemVersion()
    {
        return $this->pictureSystemVersion;
    }

    /**
     * Sets a new pictureSystemVersion
     *
     * Specifies the picture system version. Only version 2 is valid.
     *  Available to support future changes in the picture system version.
     *
     * @param int $pictureSystemVersion
     * @return self
     */
    public function setPictureSystemVersion($pictureSystemVersion)
    {
        $this->pictureSystemVersion = $pictureSystemVersion;
        return $this;
    }

    /**
     * Gets as pictureSet
     *
     * This enumeration value indicates the size of the picture that will be generated.
     *  <br/><br/>
     *  <span class="tablenote"><b>IMPORTANT: </b>
     *  To get the standard website image sizing with Zoom, set this field to <b>Supersize</b>.
     *  </span>
     *
     * @return string
     */
    public function getPictureSet()
    {
        return $this->pictureSet;
    }

    /**
     * Sets a new pictureSet
     *
     * This enumeration value indicates the size of the picture that will be generated.
     *  <br/><br/>
     *  <span class="tablenote"><b>IMPORTANT: </b>
     *  To get the standard website image sizing with Zoom, set this field to <b>Supersize</b>.
     *  </span>
     *
     * @param string $pictureSet
     * @return self
     */
    public function setPictureSet($pictureSet)
    {
        $this->pictureSet = $pictureSet;
        return $this;
    }

    /**
     * Gets as pictureData
     *
     * An optional reference ID to the binary attachment.
     *  <br/><br/>
     *  The <b>PictureData</b> field does not contain the binary attachment. The binary attachment is image data, including the headers, from a JPG, GIF, PNG, BMP, or TIF format image file. The binary attachment must be sent as a MIME attachment, in your POST request, after the XML input.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This field is not applicable for eBay Large Merchant Services. Use the
     *  <b>ExternalPictureURL</b> field instead.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\Base64BinaryType
     */
    public function getPictureData()
    {
        return $this->pictureData;
    }

    /**
     * Sets a new pictureData
     *
     * An optional reference ID to the binary attachment.
     *  <br/><br/>
     *  The <b>PictureData</b> field does not contain the binary attachment. The binary attachment is image data, including the headers, from a JPG, GIF, PNG, BMP, or TIF format image file. The binary attachment must be sent as a MIME attachment, in your POST request, after the XML input.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This field is not applicable for eBay Large Merchant Services. Use the
     *  <b>ExternalPictureURL</b> field instead.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\Base64BinaryType $pictureData
     * @return self
     */
    public function setPictureData(\Nogrod\eBaySDK\Trading\Base64BinaryType $pictureData)
    {
        $this->pictureData = $pictureData;
        return $this;
    }

    /**
     * Gets as pictureUploadPolicy
     *
     * Determines if the uploaded picture is to replace all the pictures or to be added to the pictures currently available to a seller on the eBay site. The picture is available to the seller on the My Picture Uploads tab within the Sell Your Item pages.
     *  <br/><br/>
     *  The picture you upload (and its URL) is stored for a period of time on the EPS server. If, within that time, the picture is associated with an item, then the picture persists on the eBay site for the same time length as other pictures uploaded using the <b>UploadSiteHostedPictures</b> call.
     *  <br/><br/>
     *  The expiration date of the picture is returned in the <b>SiteHostedPictureDetails.UseByDate</b> field in the response.
     *
     * @return string
     */
    public function getPictureUploadPolicy()
    {
        return $this->pictureUploadPolicy;
    }

    /**
     * Sets a new pictureUploadPolicy
     *
     * Determines if the uploaded picture is to replace all the pictures or to be added to the pictures currently available to a seller on the eBay site. The picture is available to the seller on the My Picture Uploads tab within the Sell Your Item pages.
     *  <br/><br/>
     *  The picture you upload (and its URL) is stored for a period of time on the EPS server. If, within that time, the picture is associated with an item, then the picture persists on the eBay site for the same time length as other pictures uploaded using the <b>UploadSiteHostedPictures</b> call.
     *  <br/><br/>
     *  The expiration date of the picture is returned in the <b>SiteHostedPictureDetails.UseByDate</b> field in the response.
     *
     * @param string $pictureUploadPolicy
     * @return self
     */
    public function setPictureUploadPolicy($pictureUploadPolicy)
    {
        $this->pictureUploadPolicy = $pictureUploadPolicy;
        return $this;
    }

    /**
     * Adds as externalPictureURL
     *
     * This field is used if the seller wishes to upload a picture to the EPS server that is currently on another external site. The URL of the picture you want to upload is passed in this field. Both http:// and https:// servers are supported.
     *  You can include only one <b>ExternalPictureURL</b> field per call.
     *  <br><br>
     *  The eBay server uses the information in this field to retrieve a picture from an external web server. Once retrieved, the picture will be copied to eBay Picture Services and retained for 30 days if not associated with a listing. When associated with a listing, the duration is the length of the listing plus 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Although both the HTTP and HTTPS protocols are currently supported, in the near future, eBay will no longer allow the hosting or transfer of images on a server using the the HTTP protocol.
     *  </span>
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
     * This field is used if the seller wishes to upload a picture to the EPS server that is currently on another external site. The URL of the picture you want to upload is passed in this field. Both http:// and https:// servers are supported.
     *  You can include only one <b>ExternalPictureURL</b> field per call.
     *  <br><br>
     *  The eBay server uses the information in this field to retrieve a picture from an external web server. Once retrieved, the picture will be copied to eBay Picture Services and retained for 30 days if not associated with a listing. When associated with a listing, the duration is the length of the listing plus 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Although both the HTTP and HTTPS protocols are currently supported, in the near future, eBay will no longer allow the hosting or transfer of images on a server using the the HTTP protocol.
     *  </span>
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
     * This field is used if the seller wishes to upload a picture to the EPS server that is currently on another external site. The URL of the picture you want to upload is passed in this field. Both http:// and https:// servers are supported.
     *  You can include only one <b>ExternalPictureURL</b> field per call.
     *  <br><br>
     *  The eBay server uses the information in this field to retrieve a picture from an external web server. Once retrieved, the picture will be copied to eBay Picture Services and retained for 30 days if not associated with a listing. When associated with a listing, the duration is the length of the listing plus 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Although both the HTTP and HTTPS protocols are currently supported, in the near future, eBay will no longer allow the hosting or transfer of images on a server using the the HTTP protocol.
     *  </span>
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
     * This field is used if the seller wishes to upload a picture to the EPS server that is currently on another external site. The URL of the picture you want to upload is passed in this field. Both http:// and https:// servers are supported.
     *  You can include only one <b>ExternalPictureURL</b> field per call.
     *  <br><br>
     *  The eBay server uses the information in this field to retrieve a picture from an external web server. Once retrieved, the picture will be copied to eBay Picture Services and retained for 30 days if not associated with a listing. When associated with a listing, the duration is the length of the listing plus 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Although both the HTTP and HTTPS protocols are currently supported, in the near future, eBay will no longer allow the hosting or transfer of images on a server using the the HTTP protocol.
     *  </span>
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
     * This field is used if the seller wishes to upload a picture to the EPS server that is currently on another external site. The URL of the picture you want to upload is passed in this field. Both http:// and https:// servers are supported.
     *  You can include only one <b>ExternalPictureURL</b> field per call.
     *  <br><br>
     *  The eBay server uses the information in this field to retrieve a picture from an external web server. Once retrieved, the picture will be copied to eBay Picture Services and retained for 30 days if not associated with a listing. When associated with a listing, the duration is the length of the listing plus 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Although both the HTTP and HTTPS protocols are currently supported, in the near future, eBay will no longer allow the hosting or transfer of images on a server using the the HTTP protocol.
     *  </span>
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
     * Adds as pictureWatermark
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $pictureWatermark
     */
    public function addToPictureWatermark($pictureWatermark)
    {
        $this->pictureWatermark[] = $pictureWatermark;
        return $this;
    }

    /**
     * isset pictureWatermark
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureWatermark($index)
    {
        return isset($this->pictureWatermark[$index]);
    }

    /**
     * unset pictureWatermark
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureWatermark($index)
    {
        unset($this->pictureWatermark[$index]);
    }

    /**
     * Gets as pictureWatermark
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getPictureWatermark()
    {
        return $this->pictureWatermark;
    }

    /**
     * Sets a new pictureWatermark
     *
     * This field is deprecated.
     *
     * @param string $pictureWatermark
     * @return self
     */
    public function setPictureWatermark(array $pictureWatermark)
    {
        $this->pictureWatermark = $pictureWatermark;
        return $this;
    }

    /**
     * Gets as extensionInDays
     *
     * By default, an unpublished picture will be hosted on the EPS server for five days before being purged. However, the seller has the option of using this field to set an expiration date further into the future (up to 30 days). Similarly, when a listing ends or expires, the images associated with the listing remain on the EPS server for an additional 90 days. The value in this field will add on to those 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>This call is restricted to applications that have been granted permission. Contact the eBay Developers Program to request permission.
     *  </span>
     *
     * @return int
     */
    public function getExtensionInDays()
    {
        return $this->extensionInDays;
    }

    /**
     * Sets a new extensionInDays
     *
     * By default, an unpublished picture will be hosted on the EPS server for five days before being purged. However, the seller has the option of using this field to set an expiration date further into the future (up to 30 days). Similarly, when a listing ends or expires, the images associated with the listing remain on the EPS server for an additional 90 days. The value in this field will add on to those 90 days.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>This call is restricted to applications that have been granted permission. Contact the eBay Developers Program to request permission.
     *  </span>
     *
     * @param int $extensionInDays
     * @return self
     */
    public function setExtensionInDays($extensionInDays)
    {
        $this->extensionInDays = $extensionInDays;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPictureName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureName", $value);
        }
        $value = $this->getPictureSystemVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureSystemVersion", $value);
        }
        $value = $this->getPictureSet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureSet", $value);
        }
        $value = $this->getPictureData();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureData", $value);
        }
        $value = $this->getPictureUploadPolicy();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureUploadPolicy", $value);
        }
        $value = $this->getExternalPictureURL();
        if (null !== $value && !empty($this->getExternalPictureURL())) {
            $writer->write(array_map(function ($v) {
                return ["ExternalPictureURL" => $v];
            }, $value));
        }
        $value = $this->getPictureWatermark();
        if (null !== $value && !empty($this->getPictureWatermark())) {
            $writer->write(array_map(function ($v) {
                return ["PictureWatermark" => $v];
            }, $value));
        }
        $value = $this->getExtensionInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExtensionInDays", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureName');
        if (null !== $value) {
            $this->setPictureName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureSystemVersion');
        if (null !== $value) {
            $this->setPictureSystemVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureSet');
        if (null !== $value) {
            $this->setPictureSet($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureData');
        if (null !== $value) {
            $this->setPictureData(\Nogrod\eBaySDK\Trading\Base64BinaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureUploadPolicy');
        if (null !== $value) {
            $this->setPictureUploadPolicy($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalPictureURL', true);
        if (null !== $value && !empty($value)) {
            $this->setExternalPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureWatermark', true);
        if (null !== $value && !empty($value)) {
            $this->setPictureWatermark($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExtensionInDays');
        if (null !== $value) {
            $this->setExtensionInDays($value);
        }
    }
}
