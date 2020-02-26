<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreFontType
 *
 * Store font set.
 * XSD Type: StoreFontType
 */
class StoreFontType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Font for the Store name.
     *
     * @var string $nameFace
     */
    private $nameFace = null;

    /**
     * Font size for the Store name.
     *
     * @var string $nameSize
     */
    private $nameSize = null;

    /**
     * Font color for the Store name. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @var string $nameColor
     */
    private $nameColor = null;

    /**
     * Font for the Store section title.
     *
     * @var string $titleFace
     */
    private $titleFace = null;

    /**
     * Font size for the Store section title.
     *
     * @var string $titleSize
     */
    private $titleSize = null;

    /**
     * Font color for the Store section title. Specified in 6-digit Hex
     *  format. For example: F6F6C9
     *
     * @var string $titleColor
     */
    private $titleColor = null;

    /**
     * Font for the Store description.
     *
     * @var string $descFace
     */
    private $descFace = null;

    /**
     * Font size for the Store description.
     *
     * @var string $descSize
     */
    private $descSize = null;

    /**
     * Font color for the Store description. Specified in 6-digit Hex
     *  format. For example: F6F6C9
     *
     * @var string $descColor
     */
    private $descColor = null;

    /**
     * Gets as nameFace
     *
     * Font for the Store name.
     *
     * @return string
     */
    public function getNameFace()
    {
        return $this->nameFace;
    }

    /**
     * Sets a new nameFace
     *
     * Font for the Store name.
     *
     * @param string $nameFace
     * @return self
     */
    public function setNameFace($nameFace)
    {
        $this->nameFace = $nameFace;
        return $this;
    }

    /**
     * Gets as nameSize
     *
     * Font size for the Store name.
     *
     * @return string
     */
    public function getNameSize()
    {
        return $this->nameSize;
    }

    /**
     * Sets a new nameSize
     *
     * Font size for the Store name.
     *
     * @param string $nameSize
     * @return self
     */
    public function setNameSize($nameSize)
    {
        $this->nameSize = $nameSize;
        return $this;
    }

    /**
     * Gets as nameColor
     *
     * Font color for the Store name. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @return string
     */
    public function getNameColor()
    {
        return $this->nameColor;
    }

    /**
     * Sets a new nameColor
     *
     * Font color for the Store name. Specified in 6-digit Hex format.
     *  For example: F6F6C9
     *
     * @param string $nameColor
     * @return self
     */
    public function setNameColor($nameColor)
    {
        $this->nameColor = $nameColor;
        return $this;
    }

    /**
     * Gets as titleFace
     *
     * Font for the Store section title.
     *
     * @return string
     */
    public function getTitleFace()
    {
        return $this->titleFace;
    }

    /**
     * Sets a new titleFace
     *
     * Font for the Store section title.
     *
     * @param string $titleFace
     * @return self
     */
    public function setTitleFace($titleFace)
    {
        $this->titleFace = $titleFace;
        return $this;
    }

    /**
     * Gets as titleSize
     *
     * Font size for the Store section title.
     *
     * @return string
     */
    public function getTitleSize()
    {
        return $this->titleSize;
    }

    /**
     * Sets a new titleSize
     *
     * Font size for the Store section title.
     *
     * @param string $titleSize
     * @return self
     */
    public function setTitleSize($titleSize)
    {
        $this->titleSize = $titleSize;
        return $this;
    }

    /**
     * Gets as titleColor
     *
     * Font color for the Store section title. Specified in 6-digit Hex
     *  format. For example: F6F6C9
     *
     * @return string
     */
    public function getTitleColor()
    {
        return $this->titleColor;
    }

    /**
     * Sets a new titleColor
     *
     * Font color for the Store section title. Specified in 6-digit Hex
     *  format. For example: F6F6C9
     *
     * @param string $titleColor
     * @return self
     */
    public function setTitleColor($titleColor)
    {
        $this->titleColor = $titleColor;
        return $this;
    }

    /**
     * Gets as descFace
     *
     * Font for the Store description.
     *
     * @return string
     */
    public function getDescFace()
    {
        return $this->descFace;
    }

    /**
     * Sets a new descFace
     *
     * Font for the Store description.
     *
     * @param string $descFace
     * @return self
     */
    public function setDescFace($descFace)
    {
        $this->descFace = $descFace;
        return $this;
    }

    /**
     * Gets as descSize
     *
     * Font size for the Store description.
     *
     * @return string
     */
    public function getDescSize()
    {
        return $this->descSize;
    }

    /**
     * Sets a new descSize
     *
     * Font size for the Store description.
     *
     * @param string $descSize
     * @return self
     */
    public function setDescSize($descSize)
    {
        $this->descSize = $descSize;
        return $this;
    }

    /**
     * Gets as descColor
     *
     * Font color for the Store description. Specified in 6-digit Hex
     *  format. For example: F6F6C9
     *
     * @return string
     */
    public function getDescColor()
    {
        return $this->descColor;
    }

    /**
     * Sets a new descColor
     *
     * Font color for the Store description. Specified in 6-digit Hex
     *  format. For example: F6F6C9
     *
     * @param string $descColor
     * @return self
     */
    public function setDescColor($descColor)
    {
        $this->descColor = $descColor;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNameFace();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NameFace", $value);
        }
        $value = $this->getNameSize();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NameSize", $value);
        }
        $value = $this->getNameColor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NameColor", $value);
        }
        $value = $this->getTitleFace();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TitleFace", $value);
        }
        $value = $this->getTitleSize();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TitleSize", $value);
        }
        $value = $this->getTitleColor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TitleColor", $value);
        }
        $value = $this->getDescFace();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DescFace", $value);
        }
        $value = $this->getDescSize();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DescSize", $value);
        }
        $value = $this->getDescColor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DescColor", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameFace');
        if (null !== $value) {
            $this->setNameFace($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameSize');
        if (null !== $value) {
            $this->setNameSize($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameColor');
        if (null !== $value) {
            $this->setNameColor($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TitleFace');
        if (null !== $value) {
            $this->setTitleFace($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TitleSize');
        if (null !== $value) {
            $this->setTitleSize($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TitleColor');
        if (null !== $value) {
            $this->setTitleColor($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DescFace');
        if (null !== $value) {
            $this->setDescFace($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DescSize');
        if (null !== $value) {
            $this->setDescSize($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DescColor');
        if (null !== $value) {
            $this->setDescColor($value);
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
