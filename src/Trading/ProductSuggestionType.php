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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->title;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Title', null, (string) $value);
        }
        $value = $this->ePID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EPID', null, (string) $value);
        }
        $value = $this->stockPhoto;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StockPhoto', null, (string) $value);
        }
        $value = $this->recommended;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Recommended', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ProductSuggestionType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Title':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->title = $value;
                    }
                    return true;
                case 'EPID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->ePID = $value;
                    }
                    return true;
                case 'StockPhoto':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->stockPhoto = $value;
                    }
                    return true;
                case 'Recommended':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->recommended = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
