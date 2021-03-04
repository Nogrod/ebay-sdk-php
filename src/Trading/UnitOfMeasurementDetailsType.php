<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UnitOfMeasurementDetailsType
 *
 * This type is deprecated.
 * XSD Type: UnitOfMeasurementDetailsType
 */
class UnitOfMeasurementDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\UnitOfMeasurementType[] $unitOfMeasurement
     */
    private $unitOfMeasurement = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Adds as unitOfMeasurement
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\UnitOfMeasurementType $unitOfMeasurement
     */
    public function addToUnitOfMeasurement(\Nogrod\eBaySDK\Trading\UnitOfMeasurementType $unitOfMeasurement)
    {
        $this->unitOfMeasurement[] = $unitOfMeasurement;
        return $this;
    }

    /**
     * isset unitOfMeasurement
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnitOfMeasurement($index)
    {
        return isset($this->unitOfMeasurement[$index]);
    }

    /**
     * unset unitOfMeasurement
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnitOfMeasurement($index)
    {
        unset($this->unitOfMeasurement[$index]);
    }

    /**
     * Gets as unitOfMeasurement
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\UnitOfMeasurementType[]
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Sets a new unitOfMeasurement
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\UnitOfMeasurementType[] $unitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement(array $unitOfMeasurement)
    {
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * This field is deprecated.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * This field is deprecated.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUnitOfMeasurement();
        if (null !== $value && !empty($this->getUnitOfMeasurement())) {
            $writer->write(array_map(function ($v) {
                return ["UnitOfMeasurement" => $v];
            }, $value));
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitOfMeasurement', true);
        if (null !== $value && !empty($value)) {
            $this->setUnitOfMeasurement(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\UnitOfMeasurementType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
