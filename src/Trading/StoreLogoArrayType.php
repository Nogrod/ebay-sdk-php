<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreLogoArrayType
 *
 * Set of Store logos.
 * XSD Type: StoreLogoArrayType
 */
class StoreLogoArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A Store logo.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreLogoType[] $logo
     */
    private $logo = [
        
    ];

    /**
     * Adds as logo
     *
     * A Store logo.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreLogoType $logo
     */
    public function addToLogo(\Nogrod\eBaySDK\Trading\StoreLogoType $logo)
    {
        $this->logo[] = $logo;
        return $this;
    }

    /**
     * isset logo
     *
     * A Store logo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLogo($index)
    {
        return isset($this->logo[$index]);
    }

    /**
     * unset logo
     *
     * A Store logo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLogo($index)
    {
        unset($this->logo[$index]);
    }

    /**
     * Gets as logo
     *
     * A Store logo.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreLogoType[]
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets a new logo
     *
     * A Store logo.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreLogoType[] $logo
     * @return self
     */
    public function setLogo(array $logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLogo();
        if (null !== $value && !empty($this->getLogo())) {
            $writer->write(array_map(function ($v) {
                return ["Logo" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Logo', true);
        if (null !== $value && !empty($value)) {
            $this->setLogo(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\StoreLogoType::fromKeyValue($v);
            }, $value));
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
