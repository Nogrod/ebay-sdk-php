<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CategoryMappingType
 *
 * This type is used by the <b>CategoryMapping</b> fields that are returned in the <b>GetCategoryMappings</b> response to indicate any eBay Category IDs that have changed recently.
 * XSD Type: CategoryMappingType
 */
class CategoryMappingType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This attribute value is the unique identifier of an eBay category that has been recently updated to a new Category ID, which is specified in the <b>id</b> attribute. The user will want to use the Category ID value in the <b>id</b> attribute the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     *
     * @var string $oldID
     */
    private $oldID = null;

    /**
     * This attribute value is the unique identifier of the currently active eBay category. The user will want to use this Category ID value the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Note that more than one <b>OldID</b> values may map into the same new category (same <b>id</b> value) since sometimes multiple eBay categories may be consolidated into a new, expanded category.
     *  </span>
     *
     * @var string $id
     */
    private $id = null;

    /**
     * Gets as oldID
     *
     * This attribute value is the unique identifier of an eBay category that has been recently updated to a new Category ID, which is specified in the <b>id</b> attribute. The user will want to use the Category ID value in the <b>id</b> attribute the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     *
     * @return string
     */
    public function getOldID()
    {
        return $this->oldID;
    }

    /**
     * Sets a new oldID
     *
     * This attribute value is the unique identifier of an eBay category that has been recently updated to a new Category ID, which is specified in the <b>id</b> attribute. The user will want to use the Category ID value in the <b>id</b> attribute the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     *
     * @param string $oldID
     * @return self
     */
    public function setOldID($oldID)
    {
        $this->oldID = $oldID;
        return $this;
    }

    /**
     * Gets as id
     *
     * This attribute value is the unique identifier of the currently active eBay category. The user will want to use this Category ID value the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Note that more than one <b>OldID</b> values may map into the same new category (same <b>id</b> value) since sometimes multiple eBay categories may be consolidated into a new, expanded category.
     *  </span>
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * This attribute value is the unique identifier of the currently active eBay category. The user will want to use this Category ID value the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  Note that more than one <b>OldID</b> values may map into the same new category (same <b>id</b> value) since sometimes multiple eBay categories may be consolidated into a new, expanded category.
     *  </span>
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOldID();
        if (null !== $value) {
            $writer->writeAttribute("oldID", $value);
        }
        $value = $this->getId();
        if (null !== $value) {
            $writer->writeAttribute("id", $value);
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
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
