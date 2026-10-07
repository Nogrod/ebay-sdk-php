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
class PromotionalSaleDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->originalPrice;
        if (null !== $value) {
            $writer->startElementNs(null, 'OriginalPrice', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->startTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTime', null, Func::formatDateTime($value));
        }
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PromotionalSaleDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'OriginalPrice':
                    $this->originalPrice = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'StartTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTime = new \DateTime($value);
                    }
                    return true;
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['OriginalPrice'] = $this->originalPrice;
        $data['StartTime'] = Func::jsonDate($this->startTime);
        $data['EndTime'] = Func::jsonDate($this->endTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
