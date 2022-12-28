<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NameValueListArrayType
 *
 * A list of one or more valid names and corresponding values used to identify Item Specifics at the listing level and at the variation level for individual variations within a multiple-variation listing. For the <b>FindProducts</b> call, this container is also used to express the Item Specifics for an eBay Catalog product.
 * XSD Type: NameValueListArrayType
 */
class NameValueListArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used).
     *  <br><br>
     *  For example, Item Specifics for a motor vehicle might include a field like
     *  Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and <code>Toyota</code> is returned
     *  in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br>
     *  <br>
     *  In multiple-variation listings, the same name cannot appear in both
     *  the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes.
     *  <br><br>
     *  For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more variations to retrieve from a specific multiple-variation listing.
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $nameValueList
     */
    private $nameValueList = [

    ];

    /**
     * Adds as nameValueList
     *
     * This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used).
     *  <br><br>
     *  For example, Item Specifics for a motor vehicle might include a field like
     *  Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and <code>Toyota</code> is returned
     *  in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br>
     *  <br>
     *  In multiple-variation listings, the same name cannot appear in both
     *  the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes.
     *  <br><br>
     *  For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more variations to retrieve from a specific multiple-variation listing.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToNameValueList(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->nameValueList[] = $nameValueList;
        return $this;
    }

    /**
     * isset nameValueList
     *
     * This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used).
     *  <br><br>
     *  For example, Item Specifics for a motor vehicle might include a field like
     *  Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and <code>Toyota</code> is returned
     *  in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br>
     *  <br>
     *  In multiple-variation listings, the same name cannot appear in both
     *  the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes.
     *  <br><br>
     *  For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more variations to retrieve from a specific multiple-variation listing.
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
     * This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used).
     *  <br><br>
     *  For example, Item Specifics for a motor vehicle might include a field like
     *  Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and <code>Toyota</code> is returned
     *  in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br>
     *  <br>
     *  In multiple-variation listings, the same name cannot appear in both
     *  the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes.
     *  <br><br>
     *  For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more variations to retrieve from a specific multiple-variation listing.
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
     * This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used).
     *  <br><br>
     *  For example, Item Specifics for a motor vehicle might include a field like
     *  Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and <code>Toyota</code> is returned
     *  in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br>
     *  <br>
     *  In multiple-variation listings, the same name cannot appear in both
     *  the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes.
     *  <br><br>
     *  For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more variations to retrieve from a specific multiple-variation listing.
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getNameValueList()
    {
        return $this->nameValueList;
    }

    /**
     * Sets a new nameValueList
     *
     * This list is an array of Item Specifics name-value pairs for an eBay Catalog product (if <b>FindProducts</b> is used) or Item Specifics name-value pairs for a single-variation listing or individual variation within a multiple-variation listing (if <b>GetSingleItem</b> or <b>GetMultipleItems</b> is used).
     *  <br><br>
     *  For example, Item Specifics for a motor vehicle might include a field like
     *  Make=Toyota (where <code>Make</code> is returned in <b>Name</b> field, and <code>Toyota</code> is returned
     *  in <b>Value</b> field) and Model=Prius (where <code>Model</code> is returned in <b>Name</b> field, and <code>Prius</code> is returned in <b>Value</b> field).<br>
     *  <br>
     *  In multiple-variation listings, the same name cannot appear in both
     *  the <b>ItemSpecifics</b> node and <b>Variation.VariationSpecifics</b> nodes. Common aspects for all variations within the multiple-variation listings will appear in the <b>ItemSpecifics</b> node, and aspects unique to individual variations within the multiple-variation listings will appear in the <b>Variation.VariationSpecifics</b> nodes.
     *  <br><br>
     *  For <b>GetSingleItem</b>, the user can use the <b>NameValueList</b> container in the call input to identify one or more variations to retrieve from a specific multiple-variation listing.
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $nameValueList
     * @return self
     */
    public function setNameValueList(array $nameValueList)
    {
        $this->nameValueList = $nameValueList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setNameValueList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue($v);
            }, $value));
        }
    }
}
