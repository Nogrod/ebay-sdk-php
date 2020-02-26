<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ConditionType
 *
 * Type defining the <b>ConditionValues.Condition</b> container that is returned at the category level in the <b>GetCategoryFeatures</b> response if 'ConditionValues' is specified as a <b>FeatureID</b> value, or if no <b>FeatureID</b> values are specified. A <b>ConditionValues.Condition</b> container is returned for each supported item condition value for each eBay category returned in the response.
 * XSD Type: ConditionType
 */
class ConditionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The numeric ID of a condition (e.g., 1000). Use the ID in
     *  AddItem and related calls.
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
     * The numeric ID of a condition (e.g., 1000). Use the ID in
     *  AddItem and related calls.
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
     * The numeric ID of a condition (e.g., 1000). Use the ID in
     *  AddItem and related calls.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ID');
        if (null !== $value) {
            $this->setID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayName');
        if (null !== $value) {
            $this->setDisplayName($value);
        }
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
