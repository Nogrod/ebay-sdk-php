<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryEstimateType
 *
 * Type defining the <b>deliveryEstimate</b> container, which provides details on the estimated time of delivery of the item to the buyer.
 * XSD Type: DeliveryEstimate
 */
class DeliveryEstimateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getMaxDelivery();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}maxDelivery", $value);
        }
        $value = $this->getMinDelivery();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}minDelivery", $value);
        }
        $value = $this->getMaxDeliveryDate();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}maxDeliveryDate", $value);
        }
        $value = $this->getMinDeliveryDate();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}minDeliveryDate", $value);
        }
        $value = $this->getMinConfidence();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}minConfidence", $value);
        }
        $value = $this->getMaxConfidence();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}maxConfidence", $value);
        }
        $value = $this->getEstimateTreatment();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}estimateTreatment", $value);
        }
        $value = $this->getMaxActualDelivery();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}maxActualDelivery", $value);
        }
        $value = $this->getMinActualDelivery();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}minActualDelivery", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}maxDelivery');
        if (null !== $value) {
            $this->setMaxDelivery($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}minDelivery');
        if (null !== $value) {
            $this->setMinDelivery($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}maxDeliveryDate');
        if (null !== $value) {
            $this->setMaxDeliveryDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}minDeliveryDate');
        if (null !== $value) {
            $this->setMinDeliveryDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}minConfidence');
        if (null !== $value) {
            $this->setMinConfidence($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}maxConfidence');
        if (null !== $value) {
            $this->setMaxConfidence($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}estimateTreatment');
        if (null !== $value) {
            $this->setEstimateTreatment($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}maxActualDelivery');
        if (null !== $value) {
            $this->setMaxActualDelivery($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}minActualDelivery');
        if (null !== $value) {
            $this->setMinActualDelivery($value);
        }
    }
}
