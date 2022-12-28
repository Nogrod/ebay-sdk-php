<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureManagerPictureType
 *
 * This type is deprecated.
 * XSD Type: PictureManagerPictureType
 */
class PictureManagerPictureType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $pictureURL
     */
    private $pictureURL = null;

    /**
     * This field is deprecated.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\PictureManagerPictureDisplayType[] $displayFormat
     */
    private $displayFormat = [

    ];

    /**
     * Gets as pictureURL
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * This field is deprecated.
     *
     * @param string $pictureURL
     * @return self
     */
    public function setPictureURL($pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    /**
     * Gets as name
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as date
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * This field is deprecated.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as displayFormat
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PictureManagerPictureDisplayType $displayFormat
     */
    public function addToDisplayFormat(\Nogrod\eBaySDK\Trading\PictureManagerPictureDisplayType $displayFormat)
    {
        $this->displayFormat[] = $displayFormat;
        return $this;
    }

    /**
     * isset displayFormat
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayFormat($index)
    {
        return isset($this->displayFormat[$index]);
    }

    /**
     * unset displayFormat
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayFormat($index)
    {
        unset($this->displayFormat[$index]);
    }

    /**
     * Gets as displayFormat
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\PictureManagerPictureDisplayType[]
     */
    public function getDisplayFormat()
    {
        return $this->displayFormat;
    }

    /**
     * Sets a new displayFormat
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\PictureManagerPictureDisplayType[] $displayFormat
     * @return self
     */
    public function setDisplayFormat(array $displayFormat)
    {
        $this->displayFormat = $displayFormat;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPictureURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureURL", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Date", $value);
        }
        $value = $this->getDisplayFormat();
        if (null !== $value && !empty($this->getDisplayFormat())) {
            $writer->write(array_map(function ($v) {
                return ["DisplayFormat" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL');
        if (null !== $value) {
            $this->setPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Date');
        if (null !== $value) {
            $this->setDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayFormat', true);
        if (null !== $value && !empty($value)) {
            $this->setDisplayFormat(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PictureManagerPictureDisplayType::fromKeyValue($v);
            }, $value));
        }
    }
}
