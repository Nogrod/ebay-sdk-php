<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExpressDetailsType
 *
 * Item details that are only applicable to listings on Express (not the main eBay
 *  site).
 * XSD Type: ExpressDetailsType
 */
class ExpressDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Large gallery image that appears in the "Grid View" in search results on the
     *  Express site. The longest dimension is 140 pixels. Only returned when
     *  ItemDetails is set to Fine.<br>
     *  <br>
     *  Express generates the image based on pictures that the seller includes in the
     *  listing. For details about Express listing criteria, see the eBay Web Services
     *  Guide link below.<br>
     *  <br>
     *  If the item was listed in an eBay category that does not require
     *  pictures for Express (like Tickets), a generic image may be returned instead.
     *
     * @var string $expressLargeImage
     */
    private $expressLargeImage = null;

    /**
     * Small gallery image that appears in the "List View" in search results on the
     *  Express site. The longest dimension is 96 pixels. Only returned when ItemDetails
     *  is set to Fine.<br>
     *  <br>
     *  Express generates the image based on pictures that the seller includes in the
     *  listing. For details about Express listing criteria, see the eBay Web Services
     *  Guide link below.<br>
     *  <br>
     *  If the item was listed in an eBay category that does not require pictures for
     *  Express (like Tickets), a generic image may be returned instead.
     *
     * @var string $expressSmallImage
     */
    private $expressSmallImage = null;

    /**
     * The item condition, if any. On Express US, this is often a value like "New",
     *  "Used", or "Refurbished", but the exact value can vary based on the Item
     *  Condition data that the seller used in the listing.<br> For example, in
     *  some eBay categories, the condition can have a value like "New: With Tags"
     *  instead. (At the time of this writing, GetSearchResultsExpress mapped all
     *  conditions to "New" and "Used". However, this could change in the future.) By
     *  default, only new items (or the equivalent) are returned from
     *  GetSearchResultsExpress. Use Condition in the request to include used and
     *  refurbished items (or the equivalent) as well. Only returned when ItemDetails
     *  is set to Fine.<br>
     *  <br>
     *  Not applicable to calls that browse or search items on the main eBay site.
     *
     * @var string $condition
     */
    private $condition = null;

    /**
     * Gets as expressLargeImage
     *
     * Large gallery image that appears in the "Grid View" in search results on the
     *  Express site. The longest dimension is 140 pixels. Only returned when
     *  ItemDetails is set to Fine.<br>
     *  <br>
     *  Express generates the image based on pictures that the seller includes in the
     *  listing. For details about Express listing criteria, see the eBay Web Services
     *  Guide link below.<br>
     *  <br>
     *  If the item was listed in an eBay category that does not require
     *  pictures for Express (like Tickets), a generic image may be returned instead.
     *
     * @return string
     */
    public function getExpressLargeImage()
    {
        return $this->expressLargeImage;
    }

    /**
     * Sets a new expressLargeImage
     *
     * Large gallery image that appears in the "Grid View" in search results on the
     *  Express site. The longest dimension is 140 pixels. Only returned when
     *  ItemDetails is set to Fine.<br>
     *  <br>
     *  Express generates the image based on pictures that the seller includes in the
     *  listing. For details about Express listing criteria, see the eBay Web Services
     *  Guide link below.<br>
     *  <br>
     *  If the item was listed in an eBay category that does not require
     *  pictures for Express (like Tickets), a generic image may be returned instead.
     *
     * @param string $expressLargeImage
     * @return self
     */
    public function setExpressLargeImage($expressLargeImage)
    {
        $this->expressLargeImage = $expressLargeImage;
        return $this;
    }

    /**
     * Gets as expressSmallImage
     *
     * Small gallery image that appears in the "List View" in search results on the
     *  Express site. The longest dimension is 96 pixels. Only returned when ItemDetails
     *  is set to Fine.<br>
     *  <br>
     *  Express generates the image based on pictures that the seller includes in the
     *  listing. For details about Express listing criteria, see the eBay Web Services
     *  Guide link below.<br>
     *  <br>
     *  If the item was listed in an eBay category that does not require pictures for
     *  Express (like Tickets), a generic image may be returned instead.
     *
     * @return string
     */
    public function getExpressSmallImage()
    {
        return $this->expressSmallImage;
    }

    /**
     * Sets a new expressSmallImage
     *
     * Small gallery image that appears in the "List View" in search results on the
     *  Express site. The longest dimension is 96 pixels. Only returned when ItemDetails
     *  is set to Fine.<br>
     *  <br>
     *  Express generates the image based on pictures that the seller includes in the
     *  listing. For details about Express listing criteria, see the eBay Web Services
     *  Guide link below.<br>
     *  <br>
     *  If the item was listed in an eBay category that does not require pictures for
     *  Express (like Tickets), a generic image may be returned instead.
     *
     * @param string $expressSmallImage
     * @return self
     */
    public function setExpressSmallImage($expressSmallImage)
    {
        $this->expressSmallImage = $expressSmallImage;
        return $this;
    }

    /**
     * Gets as condition
     *
     * The item condition, if any. On Express US, this is often a value like "New",
     *  "Used", or "Refurbished", but the exact value can vary based on the Item
     *  Condition data that the seller used in the listing.<br> For example, in
     *  some eBay categories, the condition can have a value like "New: With Tags"
     *  instead. (At the time of this writing, GetSearchResultsExpress mapped all
     *  conditions to "New" and "Used". However, this could change in the future.) By
     *  default, only new items (or the equivalent) are returned from
     *  GetSearchResultsExpress. Use Condition in the request to include used and
     *  refurbished items (or the equivalent) as well. Only returned when ItemDetails
     *  is set to Fine.<br>
     *  <br>
     *  Not applicable to calls that browse or search items on the main eBay site.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The item condition, if any. On Express US, this is often a value like "New",
     *  "Used", or "Refurbished", but the exact value can vary based on the Item
     *  Condition data that the seller used in the listing.<br> For example, in
     *  some eBay categories, the condition can have a value like "New: With Tags"
     *  instead. (At the time of this writing, GetSearchResultsExpress mapped all
     *  conditions to "New" and "Used". However, this could change in the future.) By
     *  default, only new items (or the equivalent) are returned from
     *  GetSearchResultsExpress. Use Condition in the request to include used and
     *  refurbished items (or the equivalent) as well. Only returned when ItemDetails
     *  is set to Fine.<br>
     *  <br>
     *  Not applicable to calls that browse or search items on the main eBay site.
     *
     * @param string $condition
     * @return self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExpressLargeImage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressLargeImage", $value);
        }
        $value = $this->getExpressSmallImage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressSmallImage", $value);
        }
        $value = $this->getCondition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Condition", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressLargeImage');
        if (null !== $value) {
            $this->setExpressLargeImage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressSmallImage');
        if (null !== $value) {
            $this->setExpressSmallImage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Condition');
        if (null !== $value) {
            $this->setCondition($value);
        }
    }
}
