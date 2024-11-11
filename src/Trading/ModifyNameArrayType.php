<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ModifyNameArrayType
 *
 * This type is used by the <b>ModifyNameList</b> container in a <b>ReviseFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call to rename one or more Variation Specific names for a multiple-variation listing.
 * XSD Type: ModifyNameArrayType
 */
class ModifyNameArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing.
     *  <br><br>
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @var \Nogrod\eBaySDK\Trading\ModifyNameType[] $modifyName
     */
    private $modifyName = [

    ];

    /**
     * Adds as modifyName
     *
     * A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing.
     *  <br><br>
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ModifyNameType $modifyName
     */
    public function addToModifyName(\Nogrod\eBaySDK\Trading\ModifyNameType $modifyName)
    {
        $this->modifyName[] = $modifyName;
        return $this;
    }

    /**
     * isset modifyName
     *
     * A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing.
     *  <br><br>
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifyName($index)
    {
        return isset($this->modifyName[$index]);
    }

    /**
     * unset modifyName
     *
     * A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing.
     *  <br><br>
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifyName($index)
    {
        unset($this->modifyName[$index]);
    }

    /**
     * Gets as modifyName
     *
     * A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing.
     *  <br><br>
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @return \Nogrod\eBaySDK\Trading\ModifyNameType[]
     */
    public function getModifyName()
    {
        return $this->modifyName;
    }

    /**
     * Sets a new modifyName
     *
     * A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing.
     *  <br><br>
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @param \Nogrod\eBaySDK\Trading\ModifyNameType[] $modifyName
     * @return self
     */
    public function setModifyName(array $modifyName)
    {
        $this->modifyName = $modifyName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getModifyName();
        if (null !== $value && [] !== $this->getModifyName()) {
            $writer->write(array_map(function ($v) {return ["ModifyName" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModifyName');
        if (null !== $value) {
            $this->setModifyName(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ModifyNameType::fromKeyValue($v);}, $value));
        }
    }
}
