<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PromotionalSaleDetailsType
 *
 * If a seller has reduced the price of a listed item with the Promotional Price Display
 *  feature, this type contains the original price of the discounted item and other
 *  information.
 * XSD Type: PromotionalSaleDetailsType
 */
class PromotionalSaleDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Original price of an item whose price a seller has reduced with the Promotional Price
     *  Display feature.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $originalPrice
     */
    private $originalPrice = null;

    /**
     * Start time of a discount for an item whose price a seller has reduced with the
     *  Promotional Price Display feature.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * End time of a discount for an item whose price a seller has reduced with the
     *  Promotional Price Display feature.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as originalPrice
     *
     * Original price of an item whose price a seller has reduced with the Promotional Price
     *  Display feature.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    /**
     * Sets a new originalPrice
     *
     * Original price of an item whose price a seller has reduced with the Promotional Price
     *  Display feature.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $originalPrice
     * @return self
     */
    public function setOriginalPrice(\Nogrod\eBaySDK\Trading\AmountType $originalPrice)
    {
        $this->originalPrice = $originalPrice;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * Start time of a discount for an item whose price a seller has reduced with the
     *  Promotional Price Display feature.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Start time of a discount for an item whose price a seller has reduced with the
     *  Promotional Price Display feature.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * End time of a discount for an item whose price a seller has reduced with the
     *  Promotional Price Display feature.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * End time of a discount for an item whose price a seller has reduced with the
     *  Promotional Price Display feature.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOriginalPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginalPrice", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginalPrice');
        if (null !== $value) {
            $this->setOriginalPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
    }
}
