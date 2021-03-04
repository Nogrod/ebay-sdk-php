<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InternationalRefundMethodCodeType
 *
 * This type defines the available options the seller has for handling international returns.
 * XSD Type: InternationalRefundMethodCodeType
 */
class InternationalRefundMethodCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Defines the available options the seller has for handling international returns in the specified marketplace and category.
     *
     * @var string[] $internationalRefundMethod
     */
    private $internationalRefundMethod = [
        
    ];

    /**
     * Adds as internationalRefundMethod
     *
     * Defines the available options the seller has for handling international returns in the specified marketplace and category.
     *
     * @return self
     * @param string $internationalRefundMethod
     */
    public function addToInternationalRefundMethod($internationalRefundMethod)
    {
        $this->internationalRefundMethod[] = $internationalRefundMethod;
        return $this;
    }

    /**
     * isset internationalRefundMethod
     *
     * Defines the available options the seller has for handling international returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalRefundMethod($index)
    {
        return isset($this->internationalRefundMethod[$index]);
    }

    /**
     * unset internationalRefundMethod
     *
     * Defines the available options the seller has for handling international returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalRefundMethod($index)
    {
        unset($this->internationalRefundMethod[$index]);
    }

    /**
     * Gets as internationalRefundMethod
     *
     * Defines the available options the seller has for handling international returns in the specified marketplace and category.
     *
     * @return string[]
     */
    public function getInternationalRefundMethod()
    {
        return $this->internationalRefundMethod;
    }

    /**
     * Sets a new internationalRefundMethod
     *
     * Defines the available options the seller has for handling international returns in the specified marketplace and category.
     *
     * @param string $internationalRefundMethod
     * @return self
     */
    public function setInternationalRefundMethod(array $internationalRefundMethod)
    {
        $this->internationalRefundMethod = $internationalRefundMethod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInternationalRefundMethod();
        if (null !== $value && !empty($this->getInternationalRefundMethod())) {
            $writer->write(array_map(function ($v) {
                return ["InternationalRefundMethod" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRefundMethod', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalRefundMethod($value);
        }
    }
}
