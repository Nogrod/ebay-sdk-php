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
     * This field is used if the seller wants to, or is required to identify each product variation within a multiplge-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. To determine whether a specific leaf category supports or requires an ISBN value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the ISBN aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the ISBN value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
     *  </span>
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different products. To determine whether a specific leaf category supports or requires a UPC value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the UPC aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the UPC value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
     *  </span>
     *
     * @var string $uPC
     */
    private $uPC = null;

    /**
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. To determine whether a specific leaf category supports or requires an EAN value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the EAN aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the EAN value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an EAN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
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
     * This field is used if the seller wants to, or is required to identify each product variation within a multiplge-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. To determine whether a specific leaf category supports or requires an ISBN value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the ISBN aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the ISBN value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
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
     * This field is used if the seller wants to, or is required to identify each product variation within a multiplge-variation listing by an ISBN (International Standard Book Number) value. An ISBN is a unique identifer for books. Both 10 and 13-character ISBNs are supported. When specifying a 13-character ISBN, the value must begin with either '978' or '979'. To determine whether a specific leaf category supports or requires an ISBN value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the ISBN aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the ISBN value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an ISBN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
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
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different products. To determine whether a specific leaf category supports or requires a UPC value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the UPC aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the UPC value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
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
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by a UPC (Universal Product Code) value. A UPC is a commonly-used identifier for many different products. To determine whether a specific leaf category supports or requires a UPC value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the UPC aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the UPC value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects a UPC value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
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
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. To determine whether a specific leaf category supports or requires an EAN value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the EAN aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the EAN value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an EAN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
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
     * This field is used if the seller wants to, or is required to identify each product variation within a multiple-variation listing by an EAN (European Article Number) value. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. To determine whether a specific leaf category supports or requires an EAN value for a variation listing, use the <b>Taxonomy API</b> <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method. Inspect the <b>localizedAspectName</b> field to find the EAN aspect for the category, and then use the <b>aspectRequired</b> and <b>aspectUsage</b> fields to determine whether the EAN value is required, recommended, or optional.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  If the listing is being posted to a category that expects an EAN value, but one doesn't exist for the product, the seller must provide a string indicating that the product identifier is unavailable. This text varies by marketplace. Refer to <a href="https://developer.ebay.com/api-docs/sell/static/inventory/product-identifier-text.html" target="_blank">Product Identifier Text</a> for the specific text based on the listing marketplace.
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
        if (!is_array($this->nameValueList)) {
            throw new \LogicException('nameValueList is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NameValueListType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NameValueListType> $nameValueList
     * @return self
     */
    public function setNameValueList(iterable $nameValueList)
    {
        $this->nameValueList = $nameValueList;
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
        $value = $this->iSBN;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ISBN', null, (string) $value);
        }
        $value = $this->uPC;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UPC', null, (string) $value);
        }
        $value = $this->eAN;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EAN', null, (string) $value);
        }
        $value = $this->productReferenceID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ProductReferenceID', null, (string) $value);
        }
        $value = $this->nameValueList;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'NameValueList', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\VariationProductListingDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->nameValueList = [];
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
                case 'ISBN':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->iSBN = $value;
                    }
                    return true;
                case 'UPC':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uPC = $value;
                    }
                    return true;
                case 'EAN':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eAN = $value;
                    }
                    return true;
                case 'ProductReferenceID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->productReferenceID = $value;
                    }
                    return true;
                case 'NameValueList':
                    $this->nameValueList[] = \Nogrod\eBaySDK\Trading\NameValueListType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
