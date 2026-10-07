<?php

namespace Nogrod\eBaySDK\Trading;

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
        if (!is_array($this->themeID)) {
            throw new \LogicException('themeID is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<int>
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
     * @param iterable<int> $themeID
     * @return self
     */
    public function setThemeID(iterable $themeID)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->groupID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'GroupID', null, (string) $value);
        }
        $value = $this->groupName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'GroupName', null, (string) $value);
        }
        $value = $this->themeID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ThemeID', null, (string) $v);
            }
        }
        $value = $this->themeTotal;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ThemeTotal', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ThemeGroupType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->themeID = [];
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
                case 'GroupID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->groupID = (int) $value;
                    }
                    return true;
                case 'GroupName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->groupName = $value;
                    }
                    return true;
                case 'ThemeID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->themeID[] = (int) $value;
                    }
                    return true;
                case 'ThemeTotal':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->themeTotal = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
