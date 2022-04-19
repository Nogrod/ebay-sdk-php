<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationProductListingDetailsType
 *
 * This type defines the <b>VariationProductListingDetails</b> container that is used to specify a Global Trade Item Number (GTIN), such as an EAN, an ISBN, or a UPC value, to identify a specific product variation in a multiple-variation listing. For a multiple-variation listing, the same GTIN type(s) must be used for all product variations within the same listing. For instance, if specify an ISBN value for one product variation within the listing, an ISBN value (and not an EAN or UPC value) must be specified for all product variations within the listing.
 * XSD Type: VariationProductListingDetailsType
 */
class VariationProductListingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is used if the seller wants to, or is required to identify each product variation within a multiplge-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects ISBN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects UPC values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @var string $uPC
     */
    private $uPC = null;

    /**
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects EAN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @var string $eAN
     */
    private $eAN = null;

    /**
     * <span class="tablenote"><b>Note: </b> DO NOT USE.<br/><br/>Currently, sellers cannot associate an eBay catalog product with single variations within a multiple-variation listing for any eBay category. If the seller attempts to supply an eBay Product Identifier (ePID) at the variation level, a warning will get returned in the response stating that, '<i>Specifying a product identifier on a variant is not allowed in this category.</i>'.<br/><br/>The <b>ProductReferenceID</b> field was originally added as part of the Product-Based Shopping Experience (PBSE) mandate, and eBay was going to allow and even require ePIDs to be specified for some leaf categories. However, with the rollback of the PBSE mandate, this field is not currently applicable or supported.
     *  </span>
     *
     * @var string $productReferenceID
     */
    private $productReferenceID = null;

    /**
     * This container is for future use. If it used, it will be ignored.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $nameValueList
     */
    private $nameValueList = [

    ];

    /**
     * Gets as iSBN
     *
     * This field is used if the seller wants to, or is required to identify each product variation within a multiplge-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects ISBN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @return string
     */
    public function getISBN()
    {
        return $this->iSBN;
    }

    /**
     * Sets a new iSBN
     *
     * This field is used if the seller wants to, or is required to identify each product variation within a multiplge-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an ISBN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects ISBN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @param string $iSBN
     * @return self
     */
    public function setISBN($iSBN)
    {
        $this->iSBN = $iSBN;
        return $this;
    }

    /**
     * Gets as uPC
     *
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects UPC values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @return string
     */
    public function getUPC()
    {
        return $this->uPC;
    }

    /**
     * Sets a new uPC
     *
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if a UPC is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects UPC values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @param string $uPC
     * @return self
     */
    public function setUPC($uPC)
    {
        $this->uPC = $uPC;
        return $this;
    }

    /**
     * Gets as eAN
     *
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects EAN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->eAN;
    }

    /**
     * Sets a new eAN
     *
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. The seller can use the <b>GetCategoryFeatures</b> or <b>GetCategorySpecifics</b> calls to see if an EAN is supported/required for a category.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects EAN values, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request.
     *  </span>
     *
     * @param string $eAN
     * @return self
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;
        return $this;
    }

    /**
     * Gets as productReferenceID
     *
     * <span class="tablenote"><b>Note: </b> DO NOT USE.<br/><br/>Currently, sellers cannot associate an eBay catalog product with single variations within a multiple-variation listing for any eBay category. If the seller attempts to supply an eBay Product Identifier (ePID) at the variation level, a warning will get returned in the response stating that, '<i>Specifying a product identifier on a variant is not allowed in this category.</i>'.<br/><br/>The <b>ProductReferenceID</b> field was originally added as part of the Product-Based Shopping Experience (PBSE) mandate, and eBay was going to allow and even require ePIDs to be specified for some leaf categories. However, with the rollback of the PBSE mandate, this field is not currently applicable or supported.
     *  </span>
     *
     * @return string
     */
    public function getProductReferenceID()
    {
        return $this->productReferenceID;
    }

    /**
     * Sets a new productReferenceID
     *
     * <span class="tablenote"><b>Note: </b> DO NOT USE.<br/><br/>Currently, sellers cannot associate an eBay catalog product with single variations within a multiple-variation listing for any eBay category. If the seller attempts to supply an eBay Product Identifier (ePID) at the variation level, a warning will get returned in the response stating that, '<i>Specifying a product identifier on a variant is not allowed in this category.</i>'.<br/><br/>The <b>ProductReferenceID</b> field was originally added as part of the Product-Based Shopping Experience (PBSE) mandate, and eBay was going to allow and even require ePIDs to be specified for some leaf categories. However, with the rollback of the PBSE mandate, this field is not currently applicable or supported.
     *  </span>
     *
     * @param string $productReferenceID
     * @return self
     */
    public function setProductReferenceID($productReferenceID)
    {
        $this->productReferenceID = $productReferenceID;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToNameValueList(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->nameValueList[] = $nameValueList;
        return $this;
    }

    /**
     * isset nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameValueList($index)
    {
        return isset($this->nameValueList[$index]);
    }

    /**
     * unset nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameValueList($index)
    {
        unset($this->nameValueList[$index]);
    }

    /**
     * Gets as nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getNameValueList()
    {
        return $this->nameValueList;
    }

    /**
     * Sets a new nameValueList
     *
     * This container is for future use. If it used, it will be ignored.
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $nameValueList
     * @return self
     */
    public function setNameValueList(array $nameValueList)
    {
        $this->nameValueList = $nameValueList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getISBN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ISBN", $value);
        }
        $value = $this->getUPC();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPC", $value);
        }
        $value = $this->getEAN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EAN", $value);
        }
        $value = $this->getProductReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductReferenceID", $value);
        }
        $value = $this->getNameValueList();
        if (null !== $value && !empty($this->getNameValueList())) {
            $writer->write(array_map(function ($v) {
                return ["NameValueList" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ISBN');
        if (null !== $value) {
            $this->setISBN($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPC');
        if (null !== $value) {
            $this->setUPC($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EAN');
        if (null !== $value) {
            $this->setEAN($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductReferenceID');
        if (null !== $value) {
            $this->setProductReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setNameValueList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);
            }, $value));
        }
    }
}
