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
        if (!is_array($this->internationalRefundMethod)) {
            throw new \LogicException('internationalRefundMethod is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setInternationalRefundMethod(iterable $internationalRefundMethod)
    {
        $this->internationalRefundMethod = $internationalRefundMethod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInternationalRefundMethod();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["InternationalRefundMethod" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\InternationalRefundMethodCodeType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRefundMethod', true);
        if (null !== $value) {
            $this->setInternationalRefundMethod($value);
        }
    }
}
