<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InternationalReturnsDurationCodeType
 *
 * This type defines the available options for the return durations for international returns.
 * XSD Type: InternationalReturnsDurationCodeType
 */
class InternationalReturnsDurationCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @var string[] $internationalReturnsDuration
     */
    private $internationalReturnsDuration = [
        
    ];

    /**
     * Adds as internationalReturnsDuration
     *
     * Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @return self
     * @param string $internationalReturnsDuration
     */
    public function addToInternationalReturnsDuration($internationalReturnsDuration)
    {
        $this->internationalReturnsDuration[] = $internationalReturnsDuration;
        return $this;
    }

    /**
     * isset internationalReturnsDuration
     *
     * Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalReturnsDuration($index)
    {
        return isset($this->internationalReturnsDuration[$index]);
    }

    /**
     * unset internationalReturnsDuration
     *
     * Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalReturnsDuration($index)
    {
        unset($this->internationalReturnsDuration[$index]);
    }

    /**
     * Gets as internationalReturnsDuration
     *
     * Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @return string[]
     */
    public function getInternationalReturnsDuration()
    {
        return $this->internationalReturnsDuration;
    }

    /**
     * Sets a new internationalReturnsDuration
     *
     * Defines the available options for the return durations for international returns in the specified marketplace and category. This is the time the buyer has to initiate a return once they receive the item.
     *
     * @param string $internationalReturnsDuration
     * @return self
     */
    public function setInternationalReturnsDuration(array $internationalReturnsDuration)
    {
        $this->internationalReturnsDuration = $internationalReturnsDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInternationalReturnsDuration();
        if (null !== $value && !empty($this->getInternationalReturnsDuration())) {
            $writer->write(array_map(function ($v) {
                return ["InternationalReturnsDuration" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsDuration', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalReturnsDuration($value);
        }
    }
}
