<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BrandMPNType
 *
 * Type defining the <b>BrandMPN</b> container which is used to identify a product (through a unique product brand and Manufacturer Part Number combination).
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b>
 *  If a brand and/or MPN value is required for a category, it is highly recommended that the brand and MPN name/value pair is also passed in through an <b>ItemSpecifics.NameValueList</b> container, since brand and MPN values may be dropped from the listing if eBay is not able to find a eBay catalog product match based on the provided Brand/MPN pair.
 *  </span>
 * XSD Type: BrandMPNType
 */
class BrandMPNType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The brand of the product. Both <b>Brand</b> and <b>MPN</b> should be specified if the <b>BrandMPN</b> container is used, or an error may occur. If Brand is a required or recommended item specific for a category, but an MPN is not applicable to the category/product, the Brand value should be specified in an <b>Item.ItemSpecifics.NameValueList</b> container instead.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container.
     *  </span>
     *
     * @var string $brand
     */
    private $brand = null;

    /**
     * The manufacturer part number of the product. Use the
     *  value specified by the manufacturer. Both <b>Brand</b> and <b>MPN</b> must be specified if the <b>BrandMPN</b> container is used or an error may occur.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container.
     *  </span>
     *
     * @var string $mPN
     */
    private $mPN = null;

    /**
     * Gets as brand
     *
     * The brand of the product. Both <b>Brand</b> and <b>MPN</b> should be specified if the <b>BrandMPN</b> container is used, or an error may occur. If Brand is a required or recommended item specific for a category, but an MPN is not applicable to the category/product, the Brand value should be specified in an <b>Item.ItemSpecifics.NameValueList</b> container instead.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container.
     *  </span>
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * The brand of the product. Both <b>Brand</b> and <b>MPN</b> should be specified if the <b>BrandMPN</b> container is used, or an error may occur. If Brand is a required or recommended item specific for a category, but an MPN is not applicable to the category/product, the Brand value should be specified in an <b>Item.ItemSpecifics.NameValueList</b> container instead.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container.
     *  </span>
     *
     * @param string $brand
     * @return self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Gets as mPN
     *
     * The manufacturer part number of the product. Use the
     *  value specified by the manufacturer. Both <b>Brand</b> and <b>MPN</b> must be specified if the <b>BrandMPN</b> container is used or an error may occur.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container.
     *  </span>
     *
     * @return string
     */
    public function getMPN()
    {
        return $this->mPN;
    }

    /**
     * Sets a new mPN
     *
     * The manufacturer part number of the product. Use the
     *  value specified by the manufacturer. Both <b>Brand</b> and <b>MPN</b> must be specified if the <b>BrandMPN</b> container is used or an error may occur.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
     *  </span>
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  The <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container.
     *  </span>
     *
     * @param string $mPN
     * @return self
     */
    public function setMPN($mPN)
    {
        $this->mPN = $mPN;
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
        $value = $this->brand;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Brand', null, (string) $value);
        }
        $value = $this->mPN;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MPN', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BrandMPNType
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
                case 'Brand':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->brand = $value;
                    }
                    return true;
                case 'MPN':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->mPN = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Brand'] = $this->brand;
        $data['MPN'] = $this->mPN;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
