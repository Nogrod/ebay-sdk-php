<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreThemeType
 *
 * Store theme.
 * XSD Type: StoreThemeType
 */
class StoreThemeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Store theme ID (use GetStoreOptions to get the list of valid theme
     *  IDs).
     *
     * @var int $themeID
     */
    private $themeID = null;

    /**
     * Store theme name. Provides a user-friendly name for the theme.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Theme color scheme.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreColorSchemeType $colorScheme
     */
    private $colorScheme = null;

    /**
     * Gets as themeID
     *
     * Store theme ID (use GetStoreOptions to get the list of valid theme
     *  IDs).
     *
     * @return int
     */
    public function getThemeID()
    {
        return $this->themeID;
    }

    /**
     * Sets a new themeID
     *
     * Store theme ID (use GetStoreOptions to get the list of valid theme
     *  IDs).
     *
     * @param int $themeID
     * @return self
     */
    public function setThemeID($themeID)
    {
        $this->themeID = $themeID;
        return $this;
    }

    /**
     * Gets as name
     *
     * Store theme name. Provides a user-friendly name for the theme.
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
     * Store theme name. Provides a user-friendly name for the theme.
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
     * Gets as colorScheme
     *
     * Theme color scheme.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreColorSchemeType
     */
    public function getColorScheme()
    {
        return $this->colorScheme;
    }

    /**
     * Sets a new colorScheme
     *
     * Theme color scheme.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreColorSchemeType $colorScheme
     * @return self
     */
    public function setColorScheme(\Nogrod\eBaySDK\Trading\StoreColorSchemeType $colorScheme)
    {
        $this->colorScheme = $colorScheme;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getThemeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ThemeID", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getColorScheme();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ColorScheme", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThemeID');
        if (null !== $value) {
            $this->setThemeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ColorScheme');
        if (null !== $value) {
            $this->setColorScheme(\Nogrod\eBaySDK\Trading\StoreColorSchemeType::fromKeyValue($value));
        }
    }
}
