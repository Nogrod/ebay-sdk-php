<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductSuggestionType
 *
 * Identifies an individual product suggestion. The product details include the EPID, Title, Stock photo url and if it is
 *  an exact match.
 * XSD Type: ProductSuggestionType
 */
class ProductSuggestionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The title of the product from the eBay catalog.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The product reference Id of the product
     *  The eBay Product ID, a global reference ID for an eBay catalog product. The
     *  ePID is a fixed reference to a product (regardless of version).
     *
     * @var string $ePID
     */
    private $ePID = null;

    /**
     * Fully qualified URL for a stock image (if any) that is associated with the
     *  eBay catalog product. The URL is for the image eBay usually displays in
     *  product search results (usually 70px tall). It may be helpful to calculate the
     *  dimensions of the photo programmatically before displaying it.
     *
     * @var string $stockPhoto
     */
    private $stockPhoto = null;

    /**
     * If true, indicates that the product is an exact match, suitable for listing
     *  the item.
     *
     * @var bool $recommended
     */
    private $recommended = null;

    /**
     * Gets as title
     *
     * The title of the product from the eBay catalog.
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
     * The title of the product from the eBay catalog.
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
     * Gets as ePID
     *
     * The product reference Id of the product
     *  The eBay Product ID, a global reference ID for an eBay catalog product. The
     *  ePID is a fixed reference to a product (regardless of version).
     *
     * @return string
     */
    public function getEPID()
    {
        return $this->ePID;
    }

    /**
     * Sets a new ePID
     *
     * The product reference Id of the product
     *  The eBay Product ID, a global reference ID for an eBay catalog product. The
     *  ePID is a fixed reference to a product (regardless of version).
     *
     * @param string $ePID
     * @return self
     */
    public function setEPID($ePID)
    {
        $this->ePID = $ePID;
        return $this;
    }

    /**
     * Gets as stockPhoto
     *
     * Fully qualified URL for a stock image (if any) that is associated with the
     *  eBay catalog product. The URL is for the image eBay usually displays in
     *  product search results (usually 70px tall). It may be helpful to calculate the
     *  dimensions of the photo programmatically before displaying it.
     *
     * @return string
     */
    public function getStockPhoto()
    {
        return $this->stockPhoto;
    }

    /**
     * Sets a new stockPhoto
     *
     * Fully qualified URL for a stock image (if any) that is associated with the
     *  eBay catalog product. The URL is for the image eBay usually displays in
     *  product search results (usually 70px tall). It may be helpful to calculate the
     *  dimensions of the photo programmatically before displaying it.
     *
     * @param string $stockPhoto
     * @return self
     */
    public function setStockPhoto($stockPhoto)
    {
        $this->stockPhoto = $stockPhoto;
        return $this;
    }

    /**
     * Gets as recommended
     *
     * If true, indicates that the product is an exact match, suitable for listing
     *  the item.
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * Sets a new recommended
     *
     * If true, indicates that the product is an exact match, suitable for listing
     *  the item.
     *
     * @param bool $recommended
     * @return self
     */
    public function setRecommended($recommended)
    {
        $this->recommended = $recommended;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getEPID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EPID", $value);
        }
        $value = $this->getStockPhoto();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StockPhoto", $value);
        }
        $value = $this->getRecommended();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Recommended", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EPID');
        if (null !== $value) {
            $this->setEPID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StockPhoto');
        if (null !== $value) {
            $this->setStockPhoto($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Recommended');
        if (null !== $value) {
            $this->setRecommended(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
