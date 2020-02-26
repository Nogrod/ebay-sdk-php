<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing AspectValueHistogramType
 *
 * Container for details pertaining to individual aspect values, including their
 *  histogram information (item counts).
 * XSD Type: AspectValueHistogram
 */
class AspectValueHistogramType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Name of an aspect value. For example, "Short Sleeve" could be an aspect
     *  value of the Sleeve Style aspect in the Women's Dresses domain, or
     *  "Athletic" could be an aspect value of the Style aspect in the Men's Shoes
     *  domain.
     *
     * @var string $valueName
     */
    private $valueName = null;

    /**
     * Number of items that share the characteristic the respective aspect
     *  value.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Gets as valueName
     *
     * Name of an aspect value. For example, "Short Sleeve" could be an aspect
     *  value of the Sleeve Style aspect in the Women's Dresses domain, or
     *  "Athletic" could be an aspect value of the Style aspect in the Men's Shoes
     *  domain.
     *
     * @return string
     */
    public function getValueName()
    {
        return $this->valueName;
    }

    /**
     * Sets a new valueName
     *
     * Name of an aspect value. For example, "Short Sleeve" could be an aspect
     *  value of the Sleeve Style aspect in the Women's Dresses domain, or
     *  "Athletic" could be an aspect value of the Style aspect in the Men's Shoes
     *  domain.
     *
     * @param string $valueName
     * @return self
     */
    public function setValueName($valueName)
    {
        $this->valueName = $valueName;
        return $this;
    }

    /**
     * Gets as count
     *
     * Number of items that share the characteristic the respective aspect
     *  value.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Number of items that share the characteristic the respective aspect
     *  value.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getValueName();
        if (null !== $value) {
            $writer->writeAttribute("valueName", $value);
        }
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}count", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}count');
        if (null !== $value) {
            $this->setCount($value);
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
