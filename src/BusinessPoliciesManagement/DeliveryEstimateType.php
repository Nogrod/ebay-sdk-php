<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryEstimateType
 *
 * Type defining the <b>deliveryEstimate</b> container, which provides details on the estimated time of delivery of the item to the buyer.
 * XSD Type: DeliveryEstimate
 */
class DeliveryEstimateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The maximum number of business days that a buyer may need to wait for delivery of an item after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item.
     *
     * @var int $maxDelivery
     */
    private $maxDelivery = null;

    /**
     * The minimum number of business days that a buyer may need to wait for delivery of an item after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item.
     *
     * @var int $minDelivery
     */
    private $minDelivery = null;

    /**
     * The latest date that an item may be delivered to the buyer after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item. Non-business days are disregarded when determining this date.
     *
     * @var \DateTime $maxDeliveryDate
     */
    private $maxDeliveryDate = null;

    /**
     * The earliest date that an item may be delivered to the buyer after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item. Non-business days are disregarded when determining this date.
     *
     * @var \DateTime $minDeliveryDate
     */
    private $minDeliveryDate = null;

    /**
     * This integer value indicates the minimum level of confidence that the item delivery estimates will be met.
     *
     * @var int $minConfidence
     */
    private $minConfidence = null;

    /**
     * This integer value indicates the maximum level of confidence that the item delivery estimates will be met.
     *
     * @var int $maxConfidence
     */
    private $maxConfidence = null;

    /**
     * This value indicates how item delivery estimates will be treated.
     *
     * @var string $estimateTreatment
     */
    private $estimateTreatment = null;

    /**
     * This value indicates the maximum number of days after payment, including weekends and any holidays, that a buyer may have to wait for the item to be delivered. This value is based on the <b>dispatchTimeMax</b> value, the shipping service option being used to ship the item, plus the number of weekend or holiday days between tha payment date and the <b>maxDeliveryDate</b>.
     *
     * @var int $maxActualDelivery
     */
    private $maxActualDelivery = null;

    /**
     * This value indicates the minimum number of days after payment, including weekends and any holidays, that a buyer may have to wait for the item to be delivered. This value is based on the <b>dispatchTimeMax</b> value, the shipping service option being used to ship the item, plus the number of weekend or holiday days between tha payment date and the <b>minDeliveryDate</b>.
     *
     * @var int $minActualDelivery
     */
    private $minActualDelivery = null;

    /**
     * Gets as maxDelivery
     *
     * The maximum number of business days that a buyer may need to wait for delivery of an item after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item.
     *
     * @return int
     */
    public function getMaxDelivery()
    {
        return $this->maxDelivery;
    }

    /**
     * Sets a new maxDelivery
     *
     * The maximum number of business days that a buyer may need to wait for delivery of an item after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item.
     *
     * @param int $maxDelivery
     * @return self
     */
    public function setMaxDelivery($maxDelivery)
    {
        $this->maxDelivery = $maxDelivery;
        return $this;
    }

    /**
     * Gets as minDelivery
     *
     * The minimum number of business days that a buyer may need to wait for delivery of an item after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item.
     *
     * @return int
     */
    public function getMinDelivery()
    {
        return $this->minDelivery;
    }

    /**
     * Sets a new minDelivery
     *
     * The minimum number of business days that a buyer may need to wait for delivery of an item after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item.
     *
     * @param int $minDelivery
     * @return self
     */
    public function setMinDelivery($minDelivery)
    {
        $this->minDelivery = $minDelivery;
        return $this;
    }

    /**
     * Gets as maxDeliveryDate
     *
     * The latest date that an item may be delivered to the buyer after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item. Non-business days are disregarded when determining this date.
     *
     * @return \DateTime
     */
    public function getMaxDeliveryDate()
    {
        return $this->maxDeliveryDate;
    }

    /**
     * Sets a new maxDeliveryDate
     *
     * The latest date that an item may be delivered to the buyer after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item. Non-business days are disregarded when determining this date.
     *
     * @param \DateTime $maxDeliveryDate
     * @return self
     */
    public function setMaxDeliveryDate(\DateTime $maxDeliveryDate)
    {
        $this->maxDeliveryDate = $maxDeliveryDate;
        return $this;
    }

    /**
     * Gets as minDeliveryDate
     *
     * The earliest date that an item may be delivered to the buyer after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item. Non-business days are disregarded when determining this date.
     *
     * @return \DateTime
     */
    public function getMinDeliveryDate()
    {
        return $this->minDeliveryDate;
    }

    /**
     * Sets a new minDeliveryDate
     *
     * The earliest date that an item may be delivered to the buyer after the buyer pays for the order. This value is based on the <b>dispatchTimeMax</b> value and the shipping service option being used to ship the item. Non-business days are disregarded when determining this date.
     *
     * @param \DateTime $minDeliveryDate
     * @return self
     */
    public function setMinDeliveryDate(\DateTime $minDeliveryDate)
    {
        $this->minDeliveryDate = $minDeliveryDate;
        return $this;
    }

    /**
     * Gets as minConfidence
     *
     * This integer value indicates the minimum level of confidence that the item delivery estimates will be met.
     *
     * @return int
     */
    public function getMinConfidence()
    {
        return $this->minConfidence;
    }

    /**
     * Sets a new minConfidence
     *
     * This integer value indicates the minimum level of confidence that the item delivery estimates will be met.
     *
     * @param int $minConfidence
     * @return self
     */
    public function setMinConfidence($minConfidence)
    {
        $this->minConfidence = $minConfidence;
        return $this;
    }

    /**
     * Gets as maxConfidence
     *
     * This integer value indicates the maximum level of confidence that the item delivery estimates will be met.
     *
     * @return int
     */
    public function getMaxConfidence()
    {
        return $this->maxConfidence;
    }

    /**
     * Sets a new maxConfidence
     *
     * This integer value indicates the maximum level of confidence that the item delivery estimates will be met.
     *
     * @param int $maxConfidence
     * @return self
     */
    public function setMaxConfidence($maxConfidence)
    {
        $this->maxConfidence = $maxConfidence;
        return $this;
    }

    /**
     * Gets as estimateTreatment
     *
     * This value indicates how item delivery estimates will be treated.
     *
     * @return string
     */
    public function getEstimateTreatment()
    {
        return $this->estimateTreatment;
    }

    /**
     * Sets a new estimateTreatment
     *
     * This value indicates how item delivery estimates will be treated.
     *
     * @param string $estimateTreatment
     * @return self
     */
    public function setEstimateTreatment($estimateTreatment)
    {
        $this->estimateTreatment = $estimateTreatment;
        return $this;
    }

    /**
     * Gets as maxActualDelivery
     *
     * This value indicates the maximum number of days after payment, including weekends and any holidays, that a buyer may have to wait for the item to be delivered. This value is based on the <b>dispatchTimeMax</b> value, the shipping service option being used to ship the item, plus the number of weekend or holiday days between tha payment date and the <b>maxDeliveryDate</b>.
     *
     * @return int
     */
    public function getMaxActualDelivery()
    {
        return $this->maxActualDelivery;
    }

    /**
     * Sets a new maxActualDelivery
     *
     * This value indicates the maximum number of days after payment, including weekends and any holidays, that a buyer may have to wait for the item to be delivered. This value is based on the <b>dispatchTimeMax</b> value, the shipping service option being used to ship the item, plus the number of weekend or holiday days between tha payment date and the <b>maxDeliveryDate</b>.
     *
     * @param int $maxActualDelivery
     * @return self
     */
    public function setMaxActualDelivery($maxActualDelivery)
    {
        $this->maxActualDelivery = $maxActualDelivery;
        return $this;
    }

    /**
     * Gets as minActualDelivery
     *
     * This value indicates the minimum number of days after payment, including weekends and any holidays, that a buyer may have to wait for the item to be delivered. This value is based on the <b>dispatchTimeMax</b> value, the shipping service option being used to ship the item, plus the number of weekend or holiday days between tha payment date and the <b>minDeliveryDate</b>.
     *
     * @return int
     */
    public function getMinActualDelivery()
    {
        return $this->minActualDelivery;
    }

    /**
     * Sets a new minActualDelivery
     *
     * This value indicates the minimum number of days after payment, including weekends and any holidays, that a buyer may have to wait for the item to be delivered. This value is based on the <b>dispatchTimeMax</b> value, the shipping service option being used to ship the item, plus the number of weekend or holiday days between tha payment date and the <b>minDeliveryDate</b>.
     *
     * @param int $minActualDelivery
     * @return self
     */
    public function setMinActualDelivery($minActualDelivery)
    {
        $this->minActualDelivery = $minActualDelivery;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->maxDelivery;
        if (null !== $value) {
            $writer->writeElementNs(null, 'maxDelivery', null, (string) $value);
        }
        $value = $this->minDelivery;
        if (null !== $value) {
            $writer->writeElementNs(null, 'minDelivery', null, (string) $value);
        }
        $value = $this->maxDeliveryDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'maxDeliveryDate', null, Func::formatDateTime($value));
        }
        $value = $this->minDeliveryDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'minDeliveryDate', null, Func::formatDateTime($value));
        }
        $value = $this->minConfidence;
        if (null !== $value) {
            $writer->writeElementNs(null, 'minConfidence', null, (string) $value);
        }
        $value = $this->maxConfidence;
        if (null !== $value) {
            $writer->writeElementNs(null, 'maxConfidence', null, (string) $value);
        }
        $value = $this->estimateTreatment;
        if (null !== $value) {
            $writer->writeElementNs(null, 'estimateTreatment', null, (string) $value);
        }
        $value = $this->maxActualDelivery;
        if (null !== $value) {
            $writer->writeElementNs(null, 'maxActualDelivery', null, (string) $value);
        }
        $value = $this->minActualDelivery;
        if (null !== $value) {
            $writer->writeElementNs(null, 'minActualDelivery', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\DeliveryEstimateType
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'maxDelivery':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxDelivery = (int) $value;
                    }
                    return true;
                case 'minDelivery':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minDelivery = (int) $value;
                    }
                    return true;
                case 'maxDeliveryDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxDeliveryDate = new \DateTime($value);
                    }
                    return true;
                case 'minDeliveryDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minDeliveryDate = new \DateTime($value);
                    }
                    return true;
                case 'minConfidence':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minConfidence = (int) $value;
                    }
                    return true;
                case 'maxConfidence':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxConfidence = (int) $value;
                    }
                    return true;
                case 'estimateTreatment':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->estimateTreatment = $value;
                    }
                    return true;
                case 'maxActualDelivery':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxActualDelivery = (int) $value;
                    }
                    return true;
                case 'minActualDelivery':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minActualDelivery = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['maxDelivery'] = $this->maxDelivery;
        $data['minDelivery'] = $this->minDelivery;
        $data['maxDeliveryDate'] = Func::jsonDate($this->maxDeliveryDate);
        $data['minDeliveryDate'] = Func::jsonDate($this->minDeliveryDate);
        $data['minConfidence'] = $this->minConfidence;
        $data['maxConfidence'] = $this->maxConfidence;
        $data['estimateTreatment'] = $this->estimateTreatment;
        $data['maxActualDelivery'] = $this->maxActualDelivery;
        $data['minActualDelivery'] = $this->minActualDelivery;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
