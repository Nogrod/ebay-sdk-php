<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing LocalSearchType
 *
 * This type is deprecated.
 * XSD Type: LocalSearchType
 */
class LocalSearchType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var int $maxDistance
     */
    private $maxDistance = null;

    /**
     * This field is deprecated.
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * Gets as maxDistance
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getMaxDistance()
    {
        return $this->maxDistance;
    }

    /**
     * Sets a new maxDistance
     *
     * This field is deprecated.
     *
     * @param int $maxDistance
     * @return self
     */
    public function setMaxDistance($maxDistance)
    {
        $this->maxDistance = $maxDistance;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * This field is deprecated.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaxDistance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxDistance", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxDistance');
        if (null !== $value) {
            $this->setMaxDistance($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
    }
}
