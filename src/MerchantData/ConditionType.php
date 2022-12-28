<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionType
 *
 * Type defining the <b>ConditionValues.Condition</b> and <b>SpecialFeatures.Condition</b> containers that are returned at the site default level and category level in the <b>GetCategoryFeatures</b> response if 'ConditionValues' is specified as a <b>FeatureID</b> value, or if no <b>FeatureID</b> values are specified. A <b>ConditionValues.Condition</b> container is returned for each supported item condition value for each eBay category returned in the response, and a <b>SpecialFeatures.Condition</b> container is returned for item condition values that a seller must be pre-qualified to use, such as the refurbished conditions.
 * XSD Type: ConditionType
 */
class ConditionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The numeric identifier of the item condition (e.g., 1000). The numeric identifier is used in the <b>Item.ConditionID</b> field in Add/Revise/Relist calls to set the condition of an item.
     *
     * @var int $iD
     */
    private $iD = null;

    /**
     * The human-readable label for the condition (e.g., "New").
     *  This value is typically localized for each site.
     *  The display name can vary by category.
     *  For example, condition ID 1000 could be called
     *  "New: with Tags" in one category and "Brand New" in another.
     *
     * @var string $displayName
     */
    private $displayName = null;

    /**
     * Gets as iD
     *
     * The numeric identifier of the item condition (e.g., 1000). The numeric identifier is used in the <b>Item.ConditionID</b> field in Add/Revise/Relist calls to set the condition of an item.
     *
     * @return int
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The numeric identifier of the item condition (e.g., 1000). The numeric identifier is used in the <b>Item.ConditionID</b> field in Add/Revise/Relist calls to set the condition of an item.
     *
     * @param int $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as displayName
     *
     * The human-readable label for the condition (e.g., "New").
     *  This value is typically localized for each site.
     *  The display name can vary by category.
     *  For example, condition ID 1000 could be called
     *  "New: with Tags" in one category and "Brand New" in another.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Sets a new displayName
     *
     * The human-readable label for the condition (e.g., "New").
     *  This value is typically localized for each site.
     *  The display name can vary by category.
     *  For example, condition ID 1000 could be called
     *  "New: with Tags" in one category and "Brand New" in another.
     *
     * @param string $displayName
     * @return self
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ID", $value);
        }
        $value = $this->getDisplayName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ID');
        if (null !== $value) {
            $this->setID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayName');
        if (null !== $value) {
            $this->setDisplayName($value);
        }
    }
}
