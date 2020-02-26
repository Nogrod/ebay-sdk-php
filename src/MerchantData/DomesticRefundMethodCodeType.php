<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @return string[]
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
    public function setDomesticRefundMethod(array $domesticRefundMethod)
    {
        $this->domesticRefundMethod = $domesticRefundMethod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomesticRefundMethod();
        if (null !== $value && !empty($this->getDomesticRefundMethod())) {
            $writer->write(array_map(function ($v) {
                return ["DomesticRefundMethod" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRefundMethod', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticRefundMethod($value);
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
