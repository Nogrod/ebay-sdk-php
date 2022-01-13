<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VideoDetailsType
 *
 * This type is used by the Add/Revise/Relist calls to add a video to a listing. All videos added to listings must be uploaded to eBay via the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>. See the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a> reference documentation for all of the necessary details to upload videos to eBay.
 *  <br/><br/>
 *  The <b>GetItem</b> call will return the <b>VideoDetails</b> container if the listing contains a video, and the seller of the item is the one making the <b>GetItem</b> call.
 * XSD Type: VideoDetailsType
 */
class VideoDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier of a video. This identifier is automatically created by eBay once a seller successfully uploads a video to eBay via the <a href="/api-docs/commerce/media/resources/video/methods/uploadVideo" target="_blank">uploadVideo</a> method of the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, passing in the ID for the video will add the video to the listing. Although a video can be added to a listing before it is in the <code>LIVE</code> state, the video won't be available for viewing in the listing until it does reach this state. The status of an uploaded video can be retrieved with the <a href="/api-docs/commerce/media/resources/video/methods/getVideo" target="_blank">getVideo</a> method and seen in the <a href=" /api-docs/commerce/media/resources/video/methods/getVideo#response.status" target="_blank">status</a> field of the response.
     *  <br/><br/>
     *  To replace a video already attached to the listing, the seller could make a Revise or Relist call and just send in a different <b>VideoID</b> value. As long as the <b>VideoID</b> value was valid, the specified video would replace the existing video in the listing.
     *  <br/><br/>
     *  To remove a video from a listing (and not replace it) using a Revise or Relist call, the seller can include a <b>DeletedField</b> tag in the request and set its value to <code>Item.VideoDetails.VideoID</code>. If the call is successful, the video will be removed from the listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> eBay will perform a validation check on each specified <b>VideoID</b> value to verify that the video belongs to, and was uploaded by the seller.
     *  </span>
     *  <br/>
     *  The <b>GetItem</b> call can be used by the seller to see which video (if any) is attached to the listing. The <b>VideoDetails</b> container will be returned if the listing contains a video. The <b>VideoDetails</b> container will only be returned to the seller of the item and no one else.
     *
     * @var string[] $videoID
     */
    private $videoID = [
        
    ];

    /**
     * Adds as videoID
     *
     * Unique identifier of a video. This identifier is automatically created by eBay once a seller successfully uploads a video to eBay via the <a href="/api-docs/commerce/media/resources/video/methods/uploadVideo" target="_blank">uploadVideo</a> method of the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, passing in the ID for the video will add the video to the listing. Although a video can be added to a listing before it is in the <code>LIVE</code> state, the video won't be available for viewing in the listing until it does reach this state. The status of an uploaded video can be retrieved with the <a href="/api-docs/commerce/media/resources/video/methods/getVideo" target="_blank">getVideo</a> method and seen in the <a href=" /api-docs/commerce/media/resources/video/methods/getVideo#response.status" target="_blank">status</a> field of the response.
     *  <br/><br/>
     *  To replace a video already attached to the listing, the seller could make a Revise or Relist call and just send in a different <b>VideoID</b> value. As long as the <b>VideoID</b> value was valid, the specified video would replace the existing video in the listing.
     *  <br/><br/>
     *  To remove a video from a listing (and not replace it) using a Revise or Relist call, the seller can include a <b>DeletedField</b> tag in the request and set its value to <code>Item.VideoDetails.VideoID</code>. If the call is successful, the video will be removed from the listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> eBay will perform a validation check on each specified <b>VideoID</b> value to verify that the video belongs to, and was uploaded by the seller.
     *  </span>
     *  <br/>
     *  The <b>GetItem</b> call can be used by the seller to see which video (if any) is attached to the listing. The <b>VideoDetails</b> container will be returned if the listing contains a video. The <b>VideoDetails</b> container will only be returned to the seller of the item and no one else.
     *
     * @return self
     * @param string $videoID
     */
    public function addToVideoID($videoID)
    {
        $this->videoID[] = $videoID;
        return $this;
    }

    /**
     * isset videoID
     *
     * Unique identifier of a video. This identifier is automatically created by eBay once a seller successfully uploads a video to eBay via the <a href="/api-docs/commerce/media/resources/video/methods/uploadVideo" target="_blank">uploadVideo</a> method of the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, passing in the ID for the video will add the video to the listing. Although a video can be added to a listing before it is in the <code>LIVE</code> state, the video won't be available for viewing in the listing until it does reach this state. The status of an uploaded video can be retrieved with the <a href="/api-docs/commerce/media/resources/video/methods/getVideo" target="_blank">getVideo</a> method and seen in the <a href=" /api-docs/commerce/media/resources/video/methods/getVideo#response.status" target="_blank">status</a> field of the response.
     *  <br/><br/>
     *  To replace a video already attached to the listing, the seller could make a Revise or Relist call and just send in a different <b>VideoID</b> value. As long as the <b>VideoID</b> value was valid, the specified video would replace the existing video in the listing.
     *  <br/><br/>
     *  To remove a video from a listing (and not replace it) using a Revise or Relist call, the seller can include a <b>DeletedField</b> tag in the request and set its value to <code>Item.VideoDetails.VideoID</code>. If the call is successful, the video will be removed from the listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> eBay will perform a validation check on each specified <b>VideoID</b> value to verify that the video belongs to, and was uploaded by the seller.
     *  </span>
     *  <br/>
     *  The <b>GetItem</b> call can be used by the seller to see which video (if any) is attached to the listing. The <b>VideoDetails</b> container will be returned if the listing contains a video. The <b>VideoDetails</b> container will only be returned to the seller of the item and no one else.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoID($index)
    {
        return isset($this->videoID[$index]);
    }

    /**
     * unset videoID
     *
     * Unique identifier of a video. This identifier is automatically created by eBay once a seller successfully uploads a video to eBay via the <a href="/api-docs/commerce/media/resources/video/methods/uploadVideo" target="_blank">uploadVideo</a> method of the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, passing in the ID for the video will add the video to the listing. Although a video can be added to a listing before it is in the <code>LIVE</code> state, the video won't be available for viewing in the listing until it does reach this state. The status of an uploaded video can be retrieved with the <a href="/api-docs/commerce/media/resources/video/methods/getVideo" target="_blank">getVideo</a> method and seen in the <a href=" /api-docs/commerce/media/resources/video/methods/getVideo#response.status" target="_blank">status</a> field of the response.
     *  <br/><br/>
     *  To replace a video already attached to the listing, the seller could make a Revise or Relist call and just send in a different <b>VideoID</b> value. As long as the <b>VideoID</b> value was valid, the specified video would replace the existing video in the listing.
     *  <br/><br/>
     *  To remove a video from a listing (and not replace it) using a Revise or Relist call, the seller can include a <b>DeletedField</b> tag in the request and set its value to <code>Item.VideoDetails.VideoID</code>. If the call is successful, the video will be removed from the listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> eBay will perform a validation check on each specified <b>VideoID</b> value to verify that the video belongs to, and was uploaded by the seller.
     *  </span>
     *  <br/>
     *  The <b>GetItem</b> call can be used by the seller to see which video (if any) is attached to the listing. The <b>VideoDetails</b> container will be returned if the listing contains a video. The <b>VideoDetails</b> container will only be returned to the seller of the item and no one else.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoID($index)
    {
        unset($this->videoID[$index]);
    }

    /**
     * Gets as videoID
     *
     * Unique identifier of a video. This identifier is automatically created by eBay once a seller successfully uploads a video to eBay via the <a href="/api-docs/commerce/media/resources/video/methods/uploadVideo" target="_blank">uploadVideo</a> method of the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, passing in the ID for the video will add the video to the listing. Although a video can be added to a listing before it is in the <code>LIVE</code> state, the video won't be available for viewing in the listing until it does reach this state. The status of an uploaded video can be retrieved with the <a href="/api-docs/commerce/media/resources/video/methods/getVideo" target="_blank">getVideo</a> method and seen in the <a href=" /api-docs/commerce/media/resources/video/methods/getVideo#response.status" target="_blank">status</a> field of the response.
     *  <br/><br/>
     *  To replace a video already attached to the listing, the seller could make a Revise or Relist call and just send in a different <b>VideoID</b> value. As long as the <b>VideoID</b> value was valid, the specified video would replace the existing video in the listing.
     *  <br/><br/>
     *  To remove a video from a listing (and not replace it) using a Revise or Relist call, the seller can include a <b>DeletedField</b> tag in the request and set its value to <code>Item.VideoDetails.VideoID</code>. If the call is successful, the video will be removed from the listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> eBay will perform a validation check on each specified <b>VideoID</b> value to verify that the video belongs to, and was uploaded by the seller.
     *  </span>
     *  <br/>
     *  The <b>GetItem</b> call can be used by the seller to see which video (if any) is attached to the listing. The <b>VideoDetails</b> container will be returned if the listing contains a video. The <b>VideoDetails</b> container will only be returned to the seller of the item and no one else.
     *
     * @return string[]
     */
    public function getVideoID()
    {
        return $this->videoID;
    }

    /**
     * Sets a new videoID
     *
     * Unique identifier of a video. This identifier is automatically created by eBay once a seller successfully uploads a video to eBay via the <a href="/api-docs/commerce/media/resources/video/methods/uploadVideo" target="_blank">uploadVideo</a> method of the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>.
     *  <br/><br/>
     *  In an Add/Revise/Relist call, passing in the ID for the video will add the video to the listing. Although a video can be added to a listing before it is in the <code>LIVE</code> state, the video won't be available for viewing in the listing until it does reach this state. The status of an uploaded video can be retrieved with the <a href="/api-docs/commerce/media/resources/video/methods/getVideo" target="_blank">getVideo</a> method and seen in the <a href=" /api-docs/commerce/media/resources/video/methods/getVideo#response.status" target="_blank">status</a> field of the response.
     *  <br/><br/>
     *  To replace a video already attached to the listing, the seller could make a Revise or Relist call and just send in a different <b>VideoID</b> value. As long as the <b>VideoID</b> value was valid, the specified video would replace the existing video in the listing.
     *  <br/><br/>
     *  To remove a video from a listing (and not replace it) using a Revise or Relist call, the seller can include a <b>DeletedField</b> tag in the request and set its value to <code>Item.VideoDetails.VideoID</code>. If the call is successful, the video will be removed from the listing.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> eBay will perform a validation check on each specified <b>VideoID</b> value to verify that the video belongs to, and was uploaded by the seller.
     *  </span>
     *  <br/>
     *  The <b>GetItem</b> call can be used by the seller to see which video (if any) is attached to the listing. The <b>VideoDetails</b> container will be returned if the listing contains a video. The <b>VideoDetails</b> container will only be returned to the seller of the item and no one else.
     *
     * @param string[] $videoID
     * @return self
     */
    public function setVideoID(array $videoID)
    {
        $this->videoID = $videoID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVideoID();
        if (null !== $value && !empty($this->getVideoID())) {
            $writer->write(array_map(function ($v) {
                return ["VideoID" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VideoID', true);
        if (null !== $value && !empty($value)) {
            $this->setVideoID($value);
        }
    }
}
