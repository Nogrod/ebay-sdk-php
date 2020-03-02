<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryEstimateType
 *
 * This carries Shipping information related to the order and would ideally present
 *  for orders whose payment is cleared.
 * XSD Type: DeliveryEstimate
 */
class DeliveryEstimateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Max business days that will be taken to deliver item.
     *
     * @var int $maxDelivery
     */
    private $maxDelivery = null;

    /**
     * Min business days that will be taken to deliver item.
     *
     * @var int $minDelivery
     */
    private $minDelivery = null;

    /**
     * Max estimated delivery date[considering site holidays/week ends].
     *
     * @var \DateTime $maxDeliveryDate
     */
    private $maxDeliveryDate = null;

    /**
     * Min estimated delivery date[considering site holidays/week ends].
     *
     * @var \DateTime $minDeliveryDate
     */
    private $minDeliveryDate = null;

    /**
     * @var int $minConfidence
     */
    private $minConfidence = null;

    /**
     * @var int $maxConfidence
     */
    private $maxConfidence = null;

    /**
     * @var string $estimateTreatment
     */
    private $estimateTreatment = null;

    /**
     * Max Actual days that will be taken to deliver item including holidays.
     *
     * @var int $maxActualDelivery
     */
    private $maxActualDelivery = null;

    /**
     * Min actual days that will be taken to deliver item including holidays.
     *
     * @var int $minActualDelivery
     */
    private $minActualDelivery = null;

    /**
     * Gets as maxDelivery
     *
     * Max business days that will be taken to deliver item.
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
     * Max business days that will be taken to deliver item.
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
     * Min business days that will be taken to deliver item.
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
     * Min business days that will be taken to deliver item.
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
     * Max estimated delivery date[considering site holidays/week ends].
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
     * Max estimated delivery date[considering site holidays/week ends].
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
     * Min estimated delivery date[considering site holidays/week ends].
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
     * Min estimated delivery date[considering site holidays/week ends].
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
     * @return int
     */
    public function getMinConfidence()
    {
        return $this->minConfidence;
    }

    /**
     * Sets a new minConfidence
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
     * @return int
     */
    public function getMaxConfidence()
    {
        return $this->maxConfidence;
    }

    /**
     * Sets a new maxConfidence
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
     * @return string
     */
    public function getEstimateTreatment()
    {
        return $this->estimateTreatment;
    }

    /**
     * Sets a new estimateTreatment
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
     * Max Actual days that will be taken to deliver item including holidays.
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
     * Max Actual days that will be taken to deliver item including holidays.
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
     * Min actual days that will be taken to deliver item including holidays.
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
     * Min actual days that will be taken to deliver item including holidays.
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
