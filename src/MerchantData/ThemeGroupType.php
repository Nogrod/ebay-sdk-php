<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ThemeGroupType
 *
 * Data for one theme group. Returned for <b>GetDescriptionTemplates</b>
 *  if theme groups are requested.
 * XSD Type: ThemeGroupType
 */
class ThemeGroupType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier for this theme group.
     *
     * @var int $groupID
     */
    private $groupID = null;

    /**
     * Name of this theme group (localized to the language associated
     *  with the eBay site).
     *
     * @var string $groupName
     */
    private $groupName = null;

    /**
     * Unique identifier for each theme in this group. There
     *  is at least one theme in a theme group.
     *
     * @var int[] $themeID
     */
    private $themeID = [

    ];

    /**
     * The number of <b>ThemeID</b> elements in this group.
     *
     * @var int $themeTotal
     */
    private $themeTotal = null;

    /**
     * Gets as groupID
     *
     * Unique identifier for this theme group.
     *
     * @return int
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * Unique identifier for this theme group.
     *
     * @param int $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
        return $this;
    }

    /**
     * Gets as groupName
     *
     * Name of this theme group (localized to the language associated
     *  with the eBay site).
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Sets a new groupName
     *
     * Name of this theme group (localized to the language associated
     *  with the eBay site).
     *
     * @param string $groupName
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * Adds as themeID
     *
     * Unique identifier for each theme in this group. There
     *  is at least one theme in a theme group.
     *
     * @return self
     * @param int $themeID
     */
    public function addToThemeID($themeID)
    {
        $this->themeID[] = $themeID;
        return $this;
    }

    /**
     * isset themeID
     *
     * Unique identifier for each theme in this group. There
     *  is at least one theme in a theme group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetThemeID($index)
    {
        return isset($this->themeID[$index]);
    }

    /**
     * unset themeID
     *
     * Unique identifier for each theme in this group. There
     *  is at least one theme in a theme group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetThemeID($index)
    {
        unset($this->themeID[$index]);
    }

    /**
     * Gets as themeID
     *
     * Unique identifier for each theme in this group. There
     *  is at least one theme in a theme group.
     *
     * @return int[]
     */
    public function getThemeID()
    {
        return $this->themeID;
    }

    /**
     * Sets a new themeID
     *
     * Unique identifier for each theme in this group. There
     *  is at least one theme in a theme group.
     *
     * @param int[] $themeID
     * @return self
     */
    public function setThemeID(array $themeID)
    {
        $this->themeID = $themeID;
        return $this;
    }

    /**
     * Gets as themeTotal
     *
     * The number of <b>ThemeID</b> elements in this group.
     *
     * @return int
     */
    public function getThemeTotal()
    {
        return $this->themeTotal;
    }

    /**
     * Sets a new themeTotal
     *
     * The number of <b>ThemeID</b> elements in this group.
     *
     * @param int $themeTotal
     * @return self
     */
    public function setThemeTotal($themeTotal)
    {
        $this->themeTotal = $themeTotal;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getGroupID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GroupID", $value);
        }
        $value = $this->getGroupName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GroupName", $value);
        }
        $value = $this->getThemeID();
        if (null !== $value && !empty($this->getThemeID())) {
            $writer->write(array_map(function ($v) {
                return ["ThemeID" => $v];
            }, $value));
        }
        $value = $this->getThemeTotal();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ThemeTotal", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GroupID');
        if (null !== $value) {
            $this->setGroupID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GroupName');
        if (null !== $value) {
            $this->setGroupName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThemeID', true);
        if (null !== $value && !empty($value)) {
            $this->setThemeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThemeTotal');
        if (null !== $value) {
            $this->setThemeTotal($value);
        }
    }
}
