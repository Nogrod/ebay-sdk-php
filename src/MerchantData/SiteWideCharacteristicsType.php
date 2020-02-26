<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SiteWideCharacteristicsType
 *
 * This type is deprecated.
 * XSD Type: SiteWideCharacteristicsType
 */
class SiteWideCharacteristicsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType $characteristicsSet
     */
    private $characteristicsSet = null;

    /**
     * This field is deprecated.
     *
     * @var string[] $excludeCategoryID
     */
    private $excludeCategoryID = [
        
    ];

    /**
     * Gets as characteristicsSet
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType
     */
    public function getCharacteristicsSet()
    {
        return $this->characteristicsSet;
    }

    /**
     * Sets a new characteristicsSet
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CharacteristicsSetType $characteristicsSet
     * @return self
     */
    public function setCharacteristicsSet(\Nogrod\eBaySDK\MerchantData\CharacteristicsSetType $characteristicsSet)
    {
        $this->characteristicsSet = $characteristicsSet;
        return $this;
    }

    /**
     * Adds as excludeCategoryID
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $excludeCategoryID
     */
    public function addToExcludeCategoryID($excludeCategoryID)
    {
        $this->excludeCategoryID[] = $excludeCategoryID;
        return $this;
    }

    /**
     * isset excludeCategoryID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludeCategoryID($index)
    {
        return isset($this->excludeCategoryID[$index]);
    }

    /**
     * unset excludeCategoryID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludeCategoryID($index)
    {
        unset($this->excludeCategoryID[$index]);
    }

    /**
     * Gets as excludeCategoryID
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getExcludeCategoryID()
    {
        return $this->excludeCategoryID;
    }

    /**
     * Sets a new excludeCategoryID
     *
     * This field is deprecated.
     *
     * @param string[] $excludeCategoryID
     * @return self
     */
    public function setExcludeCategoryID(array $excludeCategoryID)
    {
        $this->excludeCategoryID = $excludeCategoryID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCharacteristicsSet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharacteristicsSet", $value);
        }
        $value = $this->getExcludeCategoryID();
        if (null !== $value && !empty($this->getExcludeCategoryID())) {
            $writer->write(array_map(function ($v) {
                return ["ExcludeCategoryID" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharacteristicsSet');
        if (null !== $value) {
            $this->setCharacteristicsSet(\Nogrod\eBaySDK\MerchantData\CharacteristicsSetType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeCategoryID', true);
        if (null !== $value && !empty($value)) {
            $this->setExcludeCategoryID($value);
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
