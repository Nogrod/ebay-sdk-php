<?php

namespace Nogrod\eBaySDK\MerchantData;

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
class BrandMPNType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     *  If the listing is being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
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
     *  If the listing is being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
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
     *  If the listing is being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBrand();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Brand", $value);
        }
        $value = $this->getMPN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MPN", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Brand');
        if (null !== $value) {
            $this->setBrand($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MPN');
        if (null !== $value) {
            $this->setMPN($value);
        }
    }
}
