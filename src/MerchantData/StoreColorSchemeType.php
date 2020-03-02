<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreColorSchemeType
 *
 * Store color scheme.
 * XSD Type: StoreColorSchemeType
 */
class StoreColorSchemeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Store color scheme ID. (use GetStoreOptions to get the list of
     *  valid theme color scheme IDs).
     *
     * @var int $colorSchemeID
     */
    private $colorSchemeID = null;

    /**
     * Store color scheme name. Provides a user-friendly name for the
     *  color scheme.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Store color set.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreColorType $color
     */
    private $color = null;

    /**
     * Container consisting of the Store's font properties. This container is not returned if an eBay predefined store theme is
     *  used 'as is'. Use the <b>GetStoreOptions</b>
     *  call to retrieve the complete set of data for the list of predefined eBay Stores options, including the themes and color
     *  schemes.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreFontType $font
     */
    private $font = null;

    /**
     * Gets as colorSchemeID
     *
     * Store color scheme ID. (use GetStoreOptions to get the list of
     *  valid theme color scheme IDs).
     *
     * @return int
     */
    public function getColorSchemeID()
    {
        return $this->colorSchemeID;
    }

    /**
     * Sets a new colorSchemeID
     *
     * Store color scheme ID. (use GetStoreOptions to get the list of
     *  valid theme color scheme IDs).
     *
     * @param int $colorSchemeID
     * @return self
     */
    public function setColorSchemeID($colorSchemeID)
    {
        $this->colorSchemeID = $colorSchemeID;
        return $this;
    }

    /**
     * Gets as name
     *
     * Store color scheme name. Provides a user-friendly name for the
     *  color scheme.
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
     * Store color scheme name. Provides a user-friendly name for the
     *  color scheme.
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
     * Gets as color
     *
     * Store color set.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreColorType
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * Store color set.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreColorType $color
     * @return self
     */
    public function setColor(\Nogrod\eBaySDK\MerchantData\StoreColorType $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as font
     *
     * Container consisting of the Store's font properties. This container is not returned if an eBay predefined store theme is
     *  used 'as is'. Use the <b>GetStoreOptions</b>
     *  call to retrieve the complete set of data for the list of predefined eBay Stores options, including the themes and color
     *  schemes.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreFontType
     */
    public function getFont()
    {
        return $this->font;
    }

    /**
     * Sets a new font
     *
     * Container consisting of the Store's font properties. This container is not returned if an eBay predefined store theme is
     *  used 'as is'. Use the <b>GetStoreOptions</b>
     *  call to retrieve the complete set of data for the list of predefined eBay Stores options, including the themes and color
     *  schemes.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreFontType $font
     * @return self
     */
    public function setFont(\Nogrod\eBaySDK\MerchantData\StoreFontType $font)
    {
        $this->font = $font;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getColorSchemeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ColorSchemeID", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getColor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Color", $value);
        }
        $value = $this->getFont();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Font", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ColorSchemeID');
        if (null !== $value) {
            $this->setColorSchemeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Color');
        if (null !== $value) {
            $this->setColor(\Nogrod\eBaySDK\MerchantData\StoreColorType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Font');
        if (null !== $value) {
            $this->setFont(\Nogrod\eBaySDK\MerchantData\StoreFontType::fromKeyValue($value));
        }
    }
}
