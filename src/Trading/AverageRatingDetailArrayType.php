<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AverageRatingDetailArrayType
 *
 * This type has been deprecated.
 * XSD Type: AverageRatingDetailArrayType
 */
class AverageRatingDetailArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AverageRatingDetailsType[] $averageRatingDetails
     */
    private $averageRatingDetails = [
        
    ];

    /**
     * Adds as averageRatingDetails
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AverageRatingDetailsType $averageRatingDetails
     */
    public function addToAverageRatingDetails(\Nogrod\eBaySDK\Trading\AverageRatingDetailsType $averageRatingDetails)
    {
        $this->averageRatingDetails[] = $averageRatingDetails;
        return $this;
    }

    /**
     * isset averageRatingDetails
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAverageRatingDetails($index)
    {
        return isset($this->averageRatingDetails[$index]);
    }

    /**
     * unset averageRatingDetails
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAverageRatingDetails($index)
    {
        unset($this->averageRatingDetails[$index]);
    }

    /**
     * Gets as averageRatingDetails
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AverageRatingDetailsType[]
     */
    public function getAverageRatingDetails()
    {
        return $this->averageRatingDetails;
    }

    /**
     * Sets a new averageRatingDetails
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AverageRatingDetailsType[] $averageRatingDetails
     * @return self
     */
    public function setAverageRatingDetails(array $averageRatingDetails)
    {
        $this->averageRatingDetails = $averageRatingDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAverageRatingDetails();
        if (null !== $value && !empty($this->getAverageRatingDetails())) {
            $writer->write(array_map(function ($v) {
                return ["AverageRatingDetails" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageRatingDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setAverageRatingDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AverageRatingDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
