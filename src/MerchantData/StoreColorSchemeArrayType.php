<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreColorSchemeArrayType
 *
 * Set of eBay Store color schemes.
 * XSD Type: StoreColorSchemeArrayType
 */
class StoreColorSchemeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A Store color scheme.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType[] $colorScheme
     */
    private $colorScheme = [

    ];

    /**
     * Adds as colorScheme
     *
     * A Store color scheme.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType $colorScheme
     */
    public function addToColorScheme(\Nogrod\eBaySDK\MerchantData\StoreColorSchemeType $colorScheme)
    {
        $this->colorScheme[] = $colorScheme;
        return $this;
    }

    /**
     * isset colorScheme
     *
     * A Store color scheme.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetColorScheme($index)
    {
        return isset($this->colorScheme[$index]);
    }

    /**
     * unset colorScheme
     *
     * A Store color scheme.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetColorScheme($index)
    {
        unset($this->colorScheme[$index]);
    }

    /**
     * Gets as colorScheme
     *
     * A Store color scheme.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType[]
     */
    public function getColorScheme()
    {
        return $this->colorScheme;
    }

    /**
     * Sets a new colorScheme
     *
     * A Store color scheme.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType[] $colorScheme
     * @return self
     */
    public function setColorScheme(array $colorScheme)
    {
        $this->colorScheme = $colorScheme;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getColorScheme();
        if (null !== $value && !empty($this->getColorScheme())) {
            $writer->write(array_map(function ($v) {
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ColorScheme', true);
        if (null !== $value && !empty($value)) {
            $this->setColorScheme(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\StoreColorSchemeType::fromKeyValue($v);
            }, $value));
        }
    }
}
