<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AspectFilterType
 *
 * Use aspect filters to refine the number of results returned in a response.
 *  Populate the aspectFilter container with aspect values obtained from the
 *  response of a query that returns an aspectHistogram.
 * XSD Type: AspectFilter
 */
class AspectFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Name of a standard item characteristic associated with a given domain.
     *  For example, "Optical Zoom" or "Megapixels" are aspects for the Digital
     *  Cameras domain. The current aspect names associated with a specific
     *  domain can be found in the aspect histogram. Aspect histograms can be
     *  retrieved for a given keyword query or category. The aspect histogram
     *  contains information about aspects from the domain that is most relevant
     *  to your search (or category).
     *
     * @var string $aspectName
     */
    private $aspectName = null;

    /**
     * A value name for a given aspect. For example, "Point & Shoot" is a
     *  value name for the "Product Type" aspect in the "Digital Cameras" domain.
     *
     * @var string[] $aspectValueName
     */
    private $aspectValueName = [

    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as aspectName
     *
     * Name of a standard item characteristic associated with a given domain.
     *  For example, "Optical Zoom" or "Megapixels" are aspects for the Digital
     *  Cameras domain. The current aspect names associated with a specific
     *  domain can be found in the aspect histogram. Aspect histograms can be
     *  retrieved for a given keyword query or category. The aspect histogram
     *  contains information about aspects from the domain that is most relevant
     *  to your search (or category).
     *
     * @return string
     */
    public function getAspectName()
    {
        return $this->aspectName;
    }

    /**
     * Sets a new aspectName
     *
     * Name of a standard item characteristic associated with a given domain.
     *  For example, "Optical Zoom" or "Megapixels" are aspects for the Digital
     *  Cameras domain. The current aspect names associated with a specific
     *  domain can be found in the aspect histogram. Aspect histograms can be
     *  retrieved for a given keyword query or category. The aspect histogram
     *  contains information about aspects from the domain that is most relevant
     *  to your search (or category).
     *
     * @param string $aspectName
     * @return self
     */
    public function setAspectName($aspectName)
    {
        $this->aspectName = $aspectName;
        return $this;
    }

    /**
     * Adds as aspectValueName
     *
     * A value name for a given aspect. For example, "Point & Shoot" is a
     *  value name for the "Product Type" aspect in the "Digital Cameras" domain.
     *
     * @return self
     * @param string $aspectValueName
     */
    public function addToAspectValueName($aspectValueName)
    {
        $this->aspectValueName[] = $aspectValueName;
        return $this;
    }

    /**
     * isset aspectValueName
     *
     * A value name for a given aspect. For example, "Point & Shoot" is a
     *  value name for the "Product Type" aspect in the "Digital Cameras" domain.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAspectValueName($index)
    {
        return isset($this->aspectValueName[$index]);
    }

    /**
     * unset aspectValueName
     *
     * A value name for a given aspect. For example, "Point & Shoot" is a
     *  value name for the "Product Type" aspect in the "Digital Cameras" domain.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAspectValueName($index)
    {
        unset($this->aspectValueName[$index]);
    }

    /**
     * Gets as aspectValueName
     *
     * A value name for a given aspect. For example, "Point & Shoot" is a
     *  value name for the "Product Type" aspect in the "Digital Cameras" domain.
     *
     * @return string[]
     */
    public function getAspectValueName()
    {
        return $this->aspectValueName;
    }

    /**
     * Sets a new aspectValueName
     *
     * A value name for a given aspect. For example, "Point & Shoot" is a
     *  value name for the "Product Type" aspect in the "Digital Cameras" domain.
     *
     * @param string[] $aspectValueName
     * @return self
     */
    public function setAspectValueName(array $aspectValueName)
    {
        $this->aspectValueName = $aspectValueName;
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
        $value = $this->getAspectName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}aspectName", $value);
        }
        $value = $this->getAspectValueName();
        if (null !== $value && [] !== $this->getAspectValueName()) {
            $writer->write(array_map(function ($v) {return ["aspectValueName" => $v];}, $value));
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
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}aspectName');
        if (null !== $value) {
            $this->setAspectName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}aspectValueName', true);
        if (null !== $value) {
            $this->setAspectValueName($value);
        }
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
