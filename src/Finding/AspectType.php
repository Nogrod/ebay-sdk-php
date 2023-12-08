<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AspectType
 *
 * Characteristic of an item in a domain. For example, "Shoes Size" or "Style"
 *  might be aspects of the Men's Shoes domain, while "Genre" and "Album Type"
 *  could be aspects of the Music CDs domain.
 *  <br><br>
 *  This container is not returned if there are no matching aspects for the
 *  associated domain.
 * XSD Type: Aspect
 */
class AspectType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Name of an aspect that is part of a domain. For example, "Optical Zoom" or
     *  "Megapixels" could be aspects of the Digital Cameras domain. For the
     *  current aspect names associated with a specific item, refer to the
     *  aspectHistogramContainer returned for the respective item.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Container that returns the name of the respective aspect value and the
     *  histogram (the number of available items) that share that item
     *  characteristic.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
     *
     * @var \Nogrod\eBaySDK\Finding\AspectValueHistogramType[] $valueHistogram
     */
    private $valueHistogram = [

    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as name
     *
     * Name of an aspect that is part of a domain. For example, "Optical Zoom" or
     *  "Megapixels" could be aspects of the Digital Cameras domain. For the
     *  current aspect names associated with a specific item, refer to the
     *  aspectHistogramContainer returned for the respective item.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
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
     * Name of an aspect that is part of a domain. For example, "Optical Zoom" or
     *  "Megapixels" could be aspects of the Digital Cameras domain. For the
     *  current aspect names associated with a specific item, refer to the
     *  aspectHistogramContainer returned for the respective item.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
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
     * Adds as valueHistogram
     *
     * Container that returns the name of the respective aspect value and the
     *  histogram (the number of available items) that share that item
     *  characteristic.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\AspectValueHistogramType $valueHistogram
     */
    public function addToValueHistogram(\Nogrod\eBaySDK\Finding\AspectValueHistogramType $valueHistogram)
    {
        $this->valueHistogram[] = $valueHistogram;
        return $this;
    }

    /**
     * isset valueHistogram
     *
     * Container that returns the name of the respective aspect value and the
     *  histogram (the number of available items) that share that item
     *  characteristic.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueHistogram($index)
    {
        return isset($this->valueHistogram[$index]);
    }

    /**
     * unset valueHistogram
     *
     * Container that returns the name of the respective aspect value and the
     *  histogram (the number of available items) that share that item
     *  characteristic.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueHistogram($index)
    {
        unset($this->valueHistogram[$index]);
    }

    /**
     * Gets as valueHistogram
     *
     * Container that returns the name of the respective aspect value and the
     *  histogram (the number of available items) that share that item
     *  characteristic.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
     *
     * @return \Nogrod\eBaySDK\Finding\AspectValueHistogramType[]
     */
    public function getValueHistogram()
    {
        return $this->valueHistogram;
    }

    /**
     * Sets a new valueHistogram
     *
     * Container that returns the name of the respective aspect value and the
     *  histogram (the number of available items) that share that item
     *  characteristic.
     *  <br><br>
     *  This value is not returned if there are no matching aspects for the
     *  associated domain.
     *
     * @param \Nogrod\eBaySDK\Finding\AspectValueHistogramType[] $valueHistogram
     * @return self
     */
    public function setValueHistogram(array $valueHistogram)
    {
        $this->valueHistogram = $valueHistogram;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeAttribute("name", $value);
        }
        $value = $this->getValueHistogram();
        if (null !== $value && !empty($this->getValueHistogram())) {
            $writer->write(array_map(function ($v) {return ["valueHistogram" => $v];}, $value));
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}valueHistogram', true);
        if (null !== $value && !empty($value)) {
            $this->setValueHistogram(array_map(function ($v) {return \Nogrod\eBaySDK\Finding\AspectValueHistogramType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
