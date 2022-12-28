<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductDetailsType
 *
 * This type defines the <b>ProductDetails</b> container that is returned in the <b>GeteBayDetails</b> response if the <code>ProductDetails</code> value is used in a <b>DetailName</b> field (or no <b>DetailName</b> fields are used).
 *  <br><br>
 *  The <b>ProductDetails</b> container shows the substitute text that can be used in place of an actual product identifier (e.g. EAN, ISBNs, UPC, or MPN) in case the product does not have a product identifier and/or the product identifier is not known by the seller.
 * XSD Type: ProductDetailsType
 */
class ProductDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field contains the actual text that should be passed into the relevant product identifier fields (e.g. <b>ProductListingDetails.UPC</b> in an <b>AddItem<.b> call) when creating a listing. Some eBay categories require one or more Global Trade Item Numbers (GTINs), so either the actual GTIN or this substitute text must be passed into the relevant fields.
     *
     * @var string $productIdentifierUnavailableText
     */
    private $productIdentifierUnavailableText = null;

    /**
     * Gets as productIdentifierUnavailableText
     *
     * This field contains the actual text that should be passed into the relevant product identifier fields (e.g. <b>ProductListingDetails.UPC</b> in an <b>AddItem<.b> call) when creating a listing. Some eBay categories require one or more Global Trade Item Numbers (GTINs), so either the actual GTIN or this substitute text must be passed into the relevant fields.
     *
     * @return string
     */
    public function getProductIdentifierUnavailableText()
    {
        return $this->productIdentifierUnavailableText;
    }

    /**
     * Sets a new productIdentifierUnavailableText
     *
     * This field contains the actual text that should be passed into the relevant product identifier fields (e.g. <b>ProductListingDetails.UPC</b> in an <b>AddItem<.b> call) when creating a listing. Some eBay categories require one or more Global Trade Item Numbers (GTINs), so either the actual GTIN or this substitute text must be passed into the relevant fields.
     *
     * @param string $productIdentifierUnavailableText
     * @return self
     */
    public function setProductIdentifierUnavailableText($productIdentifierUnavailableText)
    {
        $this->productIdentifierUnavailableText = $productIdentifierUnavailableText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductIdentifierUnavailableText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductIdentifierUnavailableText", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductIdentifierUnavailableText');
        if (null !== $value) {
            $this->setProductIdentifierUnavailableText($value);
        }
    }
}
