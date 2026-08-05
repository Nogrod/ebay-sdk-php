<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DomesticRefundMethodCodeType
 *
 * This type defines the available options the seller has for handling domestic returns.
 * XSD Type: DomesticRefundMethodCodeType
 */
class DomesticRefundMethodCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     *
     * @var string[] $domesticRefundMethod
     */
    private $domesticRefundMethod = [

    ];

    /**
     * Adds as domesticRefundMethod
     *
     * Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     *
     * @return self
     * @param string $domesticRefundMethod
     */
    public function addToDomesticRefundMethod($domesticRefundMethod)
    {
        if (!is_array($this->domesticRefundMethod)) {
            throw new \LogicException('domesticRefundMethod is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->domesticRefundMethod[] = $domesticRefundMethod;
        return $this;
    }

    /**
     * isset domesticRefundMethod
     *
     * Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticRefundMethod($index)
    {
        return isset($this->domesticRefundMethod[$index]);
    }

    /**
     * unset domesticRefundMethod
     *
     * Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticRefundMethod($index)
    {
        unset($this->domesticRefundMethod[$index]);
    }

    /**
     * Gets as domesticRefundMethod
     *
     * Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     *
     * @return iterable<string>
     */
    public function getDomesticRefundMethod()
    {
        return $this->domesticRefundMethod;
    }

    /**
     * Sets a new domesticRefundMethod
     *
     * Defines the available options the seller has for handling domestic returns in the specified marketplace and category.
     *
     * @param string $domesticRefundMethod
     * @return self
     */
    public function setDomesticRefundMethod(iterable $domesticRefundMethod)
    {
        $this->domesticRefundMethod = $domesticRefundMethod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomesticRefundMethod();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["DomesticRefundMethod" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DomesticRefundMethodCodeType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRefundMethod', true);
        if (null !== $value) {
            $this->setDomesticRefundMethod($value);
        }
    }
}
