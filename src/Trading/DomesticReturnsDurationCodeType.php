<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DomesticReturnsDurationCodeType
 *
 * This type defines the available options for the return durations for domestic returns.
 * XSD Type: DomesticReturnsDurationCodeType
 */
class DomesticReturnsDurationCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @var string[] $domesticReturnsDuration
     */
    private $domesticReturnsDuration = [
        
    ];

    /**
     * Adds as domesticReturnsDuration
     *
     * Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @return self
     * @param string $domesticReturnsDuration
     */
    public function addToDomesticReturnsDuration($domesticReturnsDuration)
    {
        $this->domesticReturnsDuration[] = $domesticReturnsDuration;
        return $this;
    }

    /**
     * isset domesticReturnsDuration
     *
     * Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomesticReturnsDuration($index)
    {
        return isset($this->domesticReturnsDuration[$index]);
    }

    /**
     * unset domesticReturnsDuration
     *
     * Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomesticReturnsDuration($index)
    {
        unset($this->domesticReturnsDuration[$index]);
    }

    /**
     * Gets as domesticReturnsDuration
     *
     * Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @return string[]
     */
    public function getDomesticReturnsDuration()
    {
        return $this->domesticReturnsDuration;
    }

    /**
     * Sets a new domesticReturnsDuration
     *
     * Defines the available options for the return durations for domestic returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @param string $domesticReturnsDuration
     * @return self
     */
    public function setDomesticReturnsDuration(array $domesticReturnsDuration)
    {
        $this->domesticReturnsDuration = $domesticReturnsDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomesticReturnsDuration();
        if (null !== $value && !empty($this->getDomesticReturnsDuration())) {
            $writer->write(array_map(function ($v) {
                return ["DomesticReturnsDuration" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticReturnsDuration', true);
        if (null !== $value && !empty($value)) {
            $this->setDomesticReturnsDuration($value);
        }
    }
}
