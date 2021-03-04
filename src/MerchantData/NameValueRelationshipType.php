<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NameValueRelationshipType
 *
 * Information about a parent name-value pair that indicates the
 *  relationships between Item Specifics.
 * XSD Type: NameValueRelationshipType
 */
class NameValueRelationshipType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of another Item Specific that the current value depends on.
     *  For example, in a clothing category, "Size Type" could be recommended
     *  as a parent of Size.
     *
     * @var string $parentName
     */
    private $parentName = null;

    /**
     * The value of another Item Specific that the current value depends on.
     *  For example, in a clothing category, if "Size Type" is the <b>ParentName</b>,
     *  then "Petite" could be recommended as a parent value for <b>Size</b> = <code>Medium</code>.
     *
     * @var string $parentValue
     */
    private $parentValue = null;

    /**
     * Gets as parentName
     *
     * The name of another Item Specific that the current value depends on.
     *  For example, in a clothing category, "Size Type" could be recommended
     *  as a parent of Size.
     *
     * @return string
     */
    public function getParentName()
    {
        return $this->parentName;
    }

    /**
     * Sets a new parentName
     *
     * The name of another Item Specific that the current value depends on.
     *  For example, in a clothing category, "Size Type" could be recommended
     *  as a parent of Size.
     *
     * @param string $parentName
     * @return self
     */
    public function setParentName($parentName)
    {
        $this->parentName = $parentName;
        return $this;
    }

    /**
     * Gets as parentValue
     *
     * The value of another Item Specific that the current value depends on.
     *  For example, in a clothing category, if "Size Type" is the <b>ParentName</b>,
     *  then "Petite" could be recommended as a parent value for <b>Size</b> = <code>Medium</code>.
     *
     * @return string
     */
    public function getParentValue()
    {
        return $this->parentValue;
    }

    /**
     * Sets a new parentValue
     *
     * The value of another Item Specific that the current value depends on.
     *  For example, in a clothing category, if "Size Type" is the <b>ParentName</b>,
     *  then "Petite" could be recommended as a parent value for <b>Size</b> = <code>Medium</code>.
     *
     * @param string $parentValue
     * @return self
     */
    public function setParentValue($parentValue)
    {
        $this->parentValue = $parentValue;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getParentName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ParentName", $value);
        }
        $value = $this->getParentValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ParentValue", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ParentName');
        if (null !== $value) {
            $this->setParentName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ParentValue');
        if (null !== $value) {
            $this->setParentValue($value);
        }
    }
}
