<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CreateUploadJobRequestType
 *
 * Creates a Bulk Data Exchange Job and assigns it a job ID and a file reference ID. You need to add
 *  these IDs to all Bulk Data Exchange calls that are related to your job, such as getJobStatusRequest.
 *  You will also need to add this information to File Transfer API call requests
 *  for this job.
 * XSD Type: CreateUploadJobRequest
 */
class CreateUploadJobRequestType extends BaseServiceRequestType
{
    /**
     * Specifies the Merchant Data API request used in a Bulk Data
     *  Exchange upload job. Each Bulk Data Exchange job can only have one <b>uploadjobType</b>
     *  (Merchant Data API request) per job. For instance,
     *  if you are uploading a data file, it can not have <b>AddFixedPriceItem</b>
     *  requests and <b>ReviseFixedPriceItem</b> requests within the same upload file.
     *  <br><br>
     *  For each of the request job types, Merchant Data requests with the same
     *  name are included within a data file and uploaded. For instance, if you
     *  create an <b>AddFixedPriceItem</b> job, then the file you are going to upload
     *  must contain <b>AddFixedPriceItem</b> requests - one request for each item,
     *  listing, or acknowledgement in your data file.
     *  <br><br>
     *  The following value definitions describe the request or response
     *  associated with each job type.
     *  <br><br>
     *  For more information about creating and uploading Merchant Data files, see
     *  the Large Merchant Services User Guide.
     *  <br><br>
     *  <dl>
     *  <lh><b>Applicable values:</b><br></lh>
     *
     *  <dt><b>AddFixedPriceItem</b></dt>
     *  <dd>Defines a single new fixed-price item and lists it on a
     *  specified eBay site.
     *  </dd>
     *
     *  <dt><b>AddItem</b></dt>
     *  <dd>Defines a single new item and lists it on a specified eBay site.
     *  </dd>
     *
     *  <dt><b>EndFixedPriceItem</b></dt>
     *  <dd>Ends the specified item listing before the date and time at
     *  which it would normally end (per the listing duration).
     *  </dd>
     *
     *  <dt><b>EndItem</b></dt>
     *  <dd>Ends the specified item listing before the date and time at
     *  which it would normally end (per the listing duration).
     *  </dd>
     *
     *  <dt><b>OrderAck</b></dt>
     *  <dd>Request that acknowledges that an order has been received. Use
     *  the <b>OrderAck</b> request to acknowledge each line item in a <b>SoldReport</b> by
     *  order ID or line item ID.
     *  <br><br>
     *  After you send the first <b>OrderAck</b> call, future <b>SoldReport</b> calls will only
     *  contain unacknowledged orders or line items.
     *  </dd>
     *
     *  <dt><b>RelistFixedPriceItem</b></dt>
     *  <dd>Enables a seller to take a single fixed-price item that ended without buyers and relist it on a specified eBay site.
     *  <br><br>
     *  An item may be relisted with the same item
     *  properties as the original listing, or the seller may change a number of the
     *  item's defining properties at relisting time. The new listing will
     *  have a different item ID than the original one.
     *  </dd>
     *
     *  <dt><b>RelistItem</b></dt>
     *  <dd>Enables a seller to take a single item and relist it on a specified eBay site.
     *  </dd>
     *
     *  <dt><b>ReviseFixedPriceItem</b></dt>
     *  <dd>Enables a seller to change the properties of a currently
     *  active fixed-price listing.
     *  <br><br>
     *  If the listing contains multiple quantities of an item, you can revise most of the fields
     *  in the listing (except item title, currency, product ID, photo display type,
     *  variation details, listing duration, listing format, or eBay Giving Works charity), even after one of the items in the listing has been purchased. To revise multiple listings, include a <b>ReviseFixedPriceItem</b> request once for each item or listing in your data file, with new information for each item or listing.
     *  </dd>
     *
     *  <dt><b>ReviseInventoryStatus</b></dt>
     *  <dd>Enables a seller to change the price and quantity of a currently
     *  active fixed-price listing. Inputs are the item IDs or SKUs of the
     *  listings being revised, and price and quantity that are being changed for
     *  each revision.
     *  <br><br>
     *  You can use SKU as input only for fixed-price listings that are managed by
     *  SKU (i.e., <b>InventoryTrackingMethod</b> is set to SKU). <b>ItemID</b> can be used in either case.
     *  </dd>
     *
     *  <dt><b>ReviseItem</b></dt>
     *  <dd>Enables a seller to change the properties of a currently active
     *  listing.
     *  </dd>
     *
     *  <dt><b>SetShipmentTrackingInfo</b></dt>
     *  <dd>Includes information about a specific item and the shipping
     *  information associated with it.
     *  </dd>
     *
     *  <dt><b>UploadSiteHostedPictures</b></dt>
     *  <dd>Uploads a picture to EPS (eBay Picture Services) when you supply
     *  a URL in the <b>ExternalPictureURL</b> field (the location of the picture on an
     *  external Web server). Unlike what the call name implies, you can only
     *  upload one picture per request.
     *  </dd>
     *
     *  <dt><b>VerifyAddFixedPriceItem</b></dt>
     *  <dd>Acknowledges that the data for a single new fixed-price item
     *  matches the schema and can be added without data errors.
     *  </dd>
     *
     *  <dt><b>VerifyAddItem</b></dt>
     *  <dd>Enables a seller to specify the definition of a new item and
     *  submit the definition to eBay without creating a listing.
     *  </dd>
     *  </dl>
     *
     * @var string $uploadJobType
     */
    private $uploadJobType = null;

    /**
     * A Universally Unique Identifier (UUID) provided by the seller's
     *  application.
     *
     * @var string $uUID
     */
    private $uUID = null;

    /**
     * Specifies the upload job type. Only XML is currently allowed.
     *
     * @var string $fileType
     */
    private $fileType = null;

    /**
     * Gets as uploadJobType
     *
     * Specifies the Merchant Data API request used in a Bulk Data
     *  Exchange upload job. Each Bulk Data Exchange job can only have one <b>uploadjobType</b>
     *  (Merchant Data API request) per job. For instance,
     *  if you are uploading a data file, it can not have <b>AddFixedPriceItem</b>
     *  requests and <b>ReviseFixedPriceItem</b> requests within the same upload file.
     *  <br><br>
     *  For each of the request job types, Merchant Data requests with the same
     *  name are included within a data file and uploaded. For instance, if you
     *  create an <b>AddFixedPriceItem</b> job, then the file you are going to upload
     *  must contain <b>AddFixedPriceItem</b> requests - one request for each item,
     *  listing, or acknowledgement in your data file.
     *  <br><br>
     *  The following value definitions describe the request or response
     *  associated with each job type.
     *  <br><br>
     *  For more information about creating and uploading Merchant Data files, see
     *  the Large Merchant Services User Guide.
     *  <br><br>
     *  <dl>
     *  <lh><b>Applicable values:</b><br></lh>
     *
     *  <dt><b>AddFixedPriceItem</b></dt>
     *  <dd>Defines a single new fixed-price item and lists it on a
     *  specified eBay site.
     *  </dd>
     *
     *  <dt><b>AddItem</b></dt>
     *  <dd>Defines a single new item and lists it on a specified eBay site.
     *  </dd>
     *
     *  <dt><b>EndFixedPriceItem</b></dt>
     *  <dd>Ends the specified item listing before the date and time at
     *  which it would normally end (per the listing duration).
     *  </dd>
     *
     *  <dt><b>EndItem</b></dt>
     *  <dd>Ends the specified item listing before the date and time at
     *  which it would normally end (per the listing duration).
     *  </dd>
     *
     *  <dt><b>OrderAck</b></dt>
     *  <dd>Request that acknowledges that an order has been received. Use
     *  the <b>OrderAck</b> request to acknowledge each line item in a <b>SoldReport</b> by
     *  order ID or line item ID.
     *  <br><br>
     *  After you send the first <b>OrderAck</b> call, future <b>SoldReport</b> calls will only
     *  contain unacknowledged orders or line items.
     *  </dd>
     *
     *  <dt><b>RelistFixedPriceItem</b></dt>
     *  <dd>Enables a seller to take a single fixed-price item that ended without buyers and relist it on a specified eBay site.
     *  <br><br>
     *  An item may be relisted with the same item
     *  properties as the original listing, or the seller may change a number of the
     *  item's defining properties at relisting time. The new listing will
     *  have a different item ID than the original one.
     *  </dd>
     *
     *  <dt><b>RelistItem</b></dt>
     *  <dd>Enables a seller to take a single item and relist it on a specified eBay site.
     *  </dd>
     *
     *  <dt><b>ReviseFixedPriceItem</b></dt>
     *  <dd>Enables a seller to change the properties of a currently
     *  active fixed-price listing.
     *  <br><br>
     *  If the listing contains multiple quantities of an item, you can revise most of the fields
     *  in the listing (except item title, currency, product ID, photo display type,
     *  variation details, listing duration, listing format, or eBay Giving Works charity), even after one of the items in the listing has been purchased. To revise multiple listings, include a <b>ReviseFixedPriceItem</b> request once for each item or listing in your data file, with new information for each item or listing.
     *  </dd>
     *
     *  <dt><b>ReviseInventoryStatus</b></dt>
     *  <dd>Enables a seller to change the price and quantity of a currently
     *  active fixed-price listing. Inputs are the item IDs or SKUs of the
     *  listings being revised, and price and quantity that are being changed for
     *  each revision.
     *  <br><br>
     *  You can use SKU as input only for fixed-price listings that are managed by
     *  SKU (i.e., <b>InventoryTrackingMethod</b> is set to SKU). <b>ItemID</b> can be used in either case.
     *  </dd>
     *
     *  <dt><b>ReviseItem</b></dt>
     *  <dd>Enables a seller to change the properties of a currently active
     *  listing.
     *  </dd>
     *
     *  <dt><b>SetShipmentTrackingInfo</b></dt>
     *  <dd>Includes information about a specific item and the shipping
     *  information associated with it.
     *  </dd>
     *
     *  <dt><b>UploadSiteHostedPictures</b></dt>
     *  <dd>Uploads a picture to EPS (eBay Picture Services) when you supply
     *  a URL in the <b>ExternalPictureURL</b> field (the location of the picture on an
     *  external Web server). Unlike what the call name implies, you can only
     *  upload one picture per request.
     *  </dd>
     *
     *  <dt><b>VerifyAddFixedPriceItem</b></dt>
     *  <dd>Acknowledges that the data for a single new fixed-price item
     *  matches the schema and can be added without data errors.
     *  </dd>
     *
     *  <dt><b>VerifyAddItem</b></dt>
     *  <dd>Enables a seller to specify the definition of a new item and
     *  submit the definition to eBay without creating a listing.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getUploadJobType()
    {
        return $this->uploadJobType;
    }

    /**
     * Sets a new uploadJobType
     *
     * Specifies the Merchant Data API request used in a Bulk Data
     *  Exchange upload job. Each Bulk Data Exchange job can only have one <b>uploadjobType</b>
     *  (Merchant Data API request) per job. For instance,
     *  if you are uploading a data file, it can not have <b>AddFixedPriceItem</b>
     *  requests and <b>ReviseFixedPriceItem</b> requests within the same upload file.
     *  <br><br>
     *  For each of the request job types, Merchant Data requests with the same
     *  name are included within a data file and uploaded. For instance, if you
     *  create an <b>AddFixedPriceItem</b> job, then the file you are going to upload
     *  must contain <b>AddFixedPriceItem</b> requests - one request for each item,
     *  listing, or acknowledgement in your data file.
     *  <br><br>
     *  The following value definitions describe the request or response
     *  associated with each job type.
     *  <br><br>
     *  For more information about creating and uploading Merchant Data files, see
     *  the Large Merchant Services User Guide.
     *  <br><br>
     *  <dl>
     *  <lh><b>Applicable values:</b><br></lh>
     *
     *  <dt><b>AddFixedPriceItem</b></dt>
     *  <dd>Defines a single new fixed-price item and lists it on a
     *  specified eBay site.
     *  </dd>
     *
     *  <dt><b>AddItem</b></dt>
     *  <dd>Defines a single new item and lists it on a specified eBay site.
     *  </dd>
     *
     *  <dt><b>EndFixedPriceItem</b></dt>
     *  <dd>Ends the specified item listing before the date and time at
     *  which it would normally end (per the listing duration).
     *  </dd>
     *
     *  <dt><b>EndItem</b></dt>
     *  <dd>Ends the specified item listing before the date and time at
     *  which it would normally end (per the listing duration).
     *  </dd>
     *
     *  <dt><b>OrderAck</b></dt>
     *  <dd>Request that acknowledges that an order has been received. Use
     *  the <b>OrderAck</b> request to acknowledge each line item in a <b>SoldReport</b> by
     *  order ID or line item ID.
     *  <br><br>
     *  After you send the first <b>OrderAck</b> call, future <b>SoldReport</b> calls will only
     *  contain unacknowledged orders or line items.
     *  </dd>
     *
     *  <dt><b>RelistFixedPriceItem</b></dt>
     *  <dd>Enables a seller to take a single fixed-price item that ended without buyers and relist it on a specified eBay site.
     *  <br><br>
     *  An item may be relisted with the same item
     *  properties as the original listing, or the seller may change a number of the
     *  item's defining properties at relisting time. The new listing will
     *  have a different item ID than the original one.
     *  </dd>
     *
     *  <dt><b>RelistItem</b></dt>
     *  <dd>Enables a seller to take a single item and relist it on a specified eBay site.
     *  </dd>
     *
     *  <dt><b>ReviseFixedPriceItem</b></dt>
     *  <dd>Enables a seller to change the properties of a currently
     *  active fixed-price listing.
     *  <br><br>
     *  If the listing contains multiple quantities of an item, you can revise most of the fields
     *  in the listing (except item title, currency, product ID, photo display type,
     *  variation details, listing duration, listing format, or eBay Giving Works charity), even after one of the items in the listing has been purchased. To revise multiple listings, include a <b>ReviseFixedPriceItem</b> request once for each item or listing in your data file, with new information for each item or listing.
     *  </dd>
     *
     *  <dt><b>ReviseInventoryStatus</b></dt>
     *  <dd>Enables a seller to change the price and quantity of a currently
     *  active fixed-price listing. Inputs are the item IDs or SKUs of the
     *  listings being revised, and price and quantity that are being changed for
     *  each revision.
     *  <br><br>
     *  You can use SKU as input only for fixed-price listings that are managed by
     *  SKU (i.e., <b>InventoryTrackingMethod</b> is set to SKU). <b>ItemID</b> can be used in either case.
     *  </dd>
     *
     *  <dt><b>ReviseItem</b></dt>
     *  <dd>Enables a seller to change the properties of a currently active
     *  listing.
     *  </dd>
     *
     *  <dt><b>SetShipmentTrackingInfo</b></dt>
     *  <dd>Includes information about a specific item and the shipping
     *  information associated with it.
     *  </dd>
     *
     *  <dt><b>UploadSiteHostedPictures</b></dt>
     *  <dd>Uploads a picture to EPS (eBay Picture Services) when you supply
     *  a URL in the <b>ExternalPictureURL</b> field (the location of the picture on an
     *  external Web server). Unlike what the call name implies, you can only
     *  upload one picture per request.
     *  </dd>
     *
     *  <dt><b>VerifyAddFixedPriceItem</b></dt>
     *  <dd>Acknowledges that the data for a single new fixed-price item
     *  matches the schema and can be added without data errors.
     *  </dd>
     *
     *  <dt><b>VerifyAddItem</b></dt>
     *  <dd>Enables a seller to specify the definition of a new item and
     *  submit the definition to eBay without creating a listing.
     *  </dd>
     *  </dl>
     *
     * @param string $uploadJobType
     * @return self
     */
    public function setUploadJobType($uploadJobType)
    {
        $this->uploadJobType = $uploadJobType;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * A Universally Unique Identifier (UUID) provided by the seller's
     *  application.
     *
     * @return string
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * A Universally Unique Identifier (UUID) provided by the seller's
     *  application.
     *
     * @param string $uUID
     * @return self
     */
    public function setUUID($uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as fileType
     *
     * Specifies the upload job type. Only XML is currently allowed.
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets a new fileType
     *
     * Specifies the upload job type. Only XML is currently allowed.
     *
     * @param string $fileType
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getUploadJobType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}uploadJobType", $value);
        }
        $value = $this->getUUID();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}UUID", $value);
        }
        $value = $this->getFileType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}fileType", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}uploadJobType');
        if (null !== $value) {
            $this->setUploadJobType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}UUID');
        if (null !== $value) {
            $this->setUUID($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}fileType');
        if (null !== $value) {
            $this->setFileType($value);
        }
    }
}
