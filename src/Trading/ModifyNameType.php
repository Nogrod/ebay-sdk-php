<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ModifyNameType
 *
 * Type used by the <b>ModifyName</b> container in a <b>ReviseFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call to rename a Variation Specific name for a multiple-variation listing. A <b>ModifyName</b> container is needed for each Variation Specific name that the seller wishes to change the name of in a multiple-variation listing.
 * XSD Type: ModifyNameType
 */
class ModifyNameType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * In this field, the seller identifies the current name (e.g., Material) of a Variation Specific in the active listing that the seller wishes to change. If this field is used, the <b>NewName</b> field must also be specified.
     *  <br>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * In this field, the seller states the new name of the Variation Specific (e.g., Fabric).
     *  <br>
     *  <br>
     *  In addition to changing a Variation Specific name through the <b>ModifyName</b> container, the seller must also include the new Variation Specific name (and its available values) in the <b>VariationSpecificsSet</b> container, and omit the original name.
     *  <br>
     *  <br>
     *  Note that variations that were sold while they used the old name will also be changed to use the new name in eBay's system.
     *  <br>
     *  <br>
     *  If you are making other changes to a variation (such as adding new
     *  values or pictures), use consistent names to avoid unexpected
     *  results. For example, specify the same new name to identify the
     *  Variation Specific in the <b>Pictures</b> container and in the <b>VariationSpecifics</b> containers for each variation within the listing.
     *  <br>
     *
     * @var string $newName
     */
    private $newName = null;

    /**
     * Gets as name
     *
     * In this field, the seller identifies the current name (e.g., Material) of a Variation Specific in the active listing that the seller wishes to change. If this field is used, the <b>NewName</b> field must also be specified.
     *  <br>
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * In this field, the seller identifies the current name (e.g., Material) of a Variation Specific in the active listing that the seller wishes to change. If this field is used, the <b>NewName</b> field must also be specified.
     *  <br>
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as newName
     *
     * In this field, the seller states the new name of the Variation Specific (e.g., Fabric).
     *  <br>
     *  <br>
     *  In addition to changing a Variation Specific name through the <b>ModifyName</b> container, the seller must also include the new Variation Specific name (and its available values) in the <b>VariationSpecificsSet</b> container, and omit the original name.
     *  <br>
     *  <br>
     *  Note that variations that were sold while they used the old name will also be changed to use the new name in eBay's system.
     *  <br>
     *  <br>
     *  If you are making other changes to a variation (such as adding new
     *  values or pictures), use consistent names to avoid unexpected
     *  results. For example, specify the same new name to identify the
     *  Variation Specific in the <b>Pictures</b> container and in the <b>VariationSpecifics</b> containers for each variation within the listing.
     *  <br>
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Sets a new newName
     *
     * In this field, the seller states the new name of the Variation Specific (e.g., Fabric).
     *  <br>
     *  <br>
     *  In addition to changing a Variation Specific name through the <b>ModifyName</b> container, the seller must also include the new Variation Specific name (and its available values) in the <b>VariationSpecificsSet</b> container, and omit the original name.
     *  <br>
     *  <br>
     *  Note that variations that were sold while they used the old name will also be changed to use the new name in eBay's system.
     *  <br>
     *  <br>
     *  If you are making other changes to a variation (such as adding new
     *  values or pictures), use consistent names to avoid unexpected
     *  results. For example, specify the same new name to identify the
     *  Variation Specific in the <b>Pictures</b> container and in the <b>VariationSpecifics</b> containers for each variation within the listing.
     *  <br>
     *
     * @param string $newName
     * @return self
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getNewName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewName", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ModifyNameType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewName');
        if (null !== $value) {
            $this->setNewName($value);
        }
    }
}
