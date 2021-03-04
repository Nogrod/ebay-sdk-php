<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreThemeArrayType
 *
 * Set of Store themes.
 * XSD Type: StoreThemeArrayType
 */
class StoreThemeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A Store theme.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreThemeType[] $theme
     */
    private $theme = [
        
    ];

    /**
     * Set of color schemes. This set is for use with those themes that do
     *  not explicitly list a color scheme in the theme definition (these
     *  themes are also known as advanced themes).
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType[] $genericColorSchemeArray
     */
    private $genericColorSchemeArray = null;

    /**
     * Adds as theme
     *
     * A Store theme.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\StoreThemeType $theme
     */
    public function addToTheme(\Nogrod\eBaySDK\MerchantData\StoreThemeType $theme)
    {
        $this->theme[] = $theme;
        return $this;
    }

    /**
     * isset theme
     *
     * A Store theme.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTheme($index)
    {
        return isset($this->theme[$index]);
    }

    /**
     * unset theme
     *
     * A Store theme.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTheme($index)
    {
        unset($this->theme[$index]);
    }

    /**
     * Gets as theme
     *
     * A Store theme.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreThemeType[]
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets a new theme
     *
     * A Store theme.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreThemeType[] $theme
     * @return self
     */
    public function setTheme(array $theme)
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Adds as colorScheme
     *
     * Set of color schemes. This set is for use with those themes that do
     *  not explicitly list a color scheme in the theme definition (these
     *  themes are also known as advanced themes).
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType $colorScheme
     */
    public function addToGenericColorSchemeArray(\Nogrod\eBaySDK\MerchantData\StoreColorSchemeType $colorScheme)
    {
        $this->genericColorSchemeArray[] = $colorScheme;
        return $this;
    }

    /**
     * isset genericColorSchemeArray
     *
     * Set of color schemes. This set is for use with those themes that do
     *  not explicitly list a color scheme in the theme definition (these
     *  themes are also known as advanced themes).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenericColorSchemeArray($index)
    {
        return isset($this->genericColorSchemeArray[$index]);
    }

    /**
     * unset genericColorSchemeArray
     *
     * Set of color schemes. This set is for use with those themes that do
     *  not explicitly list a color scheme in the theme definition (these
     *  themes are also known as advanced themes).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenericColorSchemeArray($index)
    {
        unset($this->genericColorSchemeArray[$index]);
    }

    /**
     * Gets as genericColorSchemeArray
     *
     * Set of color schemes. This set is for use with those themes that do
     *  not explicitly list a color scheme in the theme definition (these
     *  themes are also known as advanced themes).
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType[]
     */
    public function getGenericColorSchemeArray()
    {
        return $this->genericColorSchemeArray;
    }

    /**
     * Sets a new genericColorSchemeArray
     *
     * Set of color schemes. This set is for use with those themes that do
     *  not explicitly list a color scheme in the theme definition (these
     *  themes are also known as advanced themes).
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType[] $genericColorSchemeArray
     * @return self
     */
    public function setGenericColorSchemeArray(array $genericColorSchemeArray)
    {
        $this->genericColorSchemeArray = $genericColorSchemeArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTheme();
        if (null !== $value && !empty($this->getTheme())) {
            $writer->write(array_map(function ($v) {
                return ["Theme" => $v];
            }, $value));
        }
        $value = $this->getGenericColorSchemeArray();
        if (null !== $value && !empty($this->getGenericColorSchemeArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GenericColorSchemeArray", array_map(function ($v) {
                return ["ColorScheme" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Theme', true);
        if (null !== $value && !empty($value)) {
            $this->setTheme(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\StoreThemeType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GenericColorSchemeArray', true);
        if (null !== $value && !empty($value)) {
            $this->setGenericColorSchemeArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType::fromKeyValue($v);
            }, $value));
        }
    }
}
