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
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
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
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ModifyNameType $modifyName
     */
    public function addToModifyName(\Nogrod\eBaySDK\Trading\ModifyNameType $modifyName)
    {
        if (!is_array($this->modifyName)) {
            throw new \LogicException('modifyName is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->modifyName[] = $modifyName;
        return $this;
    }

    /**
     * isset modifyName
     *
     * A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change in a multiple-variation listing.
     *  <br><br>
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
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
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
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
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ModifyNameType>
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
     *  You cannot change the name of an Item Specific that is required for the listing category. Use the <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to determine which Item Specifics names are required for a category.
     *  <br><br>
     *  To get a current list of Variation Specifics defined for a multiple-variation listing, the seller can use <b>GetItem</b>, and then view all Variation Specific names in the <b>VariationSpecificsSet</b> container in the response.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ModifyNameType> $modifyName
     * @return self
     */
    public function setModifyName(iterable $modifyName)
    {
        $this->modifyName = $modifyName;
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
        $value = $this->modifyName;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ModifyName', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ModifyNameArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->modifyName = [];
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
                case 'ModifyName':
                    $this->modifyName[] = \Nogrod\eBaySDK\Trading\ModifyNameType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
