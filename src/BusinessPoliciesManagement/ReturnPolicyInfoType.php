<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyInfoType
 *
 *
 * XSD Type: ReturnPolicyInfo
 */
class ReturnPolicyInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var string $refundOption
     */
    private $refundOption = null;

    /**
     * @var string $shippingCostPaidByOption
     */
    private $shippingCostPaidByOption = null;

    /**
     * @var string $returnsWithinOption
     */
    private $returnsWithinOption = null;

    /**
     * @var string $returnsAcceptedOption
     */
    private $returnsAcceptedOption = null;

    /**
     * @var string $warrantyOfferedOption
     */
    private $warrantyOfferedOption = null;

    /**
     * @var string $warrantyTypeOption
     */
    private $warrantyTypeOption = null;

    /**
     * @var string $warrantyDurationOption
     */
    private $warrantyDurationOption = null;

    /**
     * @var string $restockingFeeValue
     */
    private $restockingFeeValue = null;

    /**
     * @var string $holidayReturns
     */
    private $holidayReturns = null;

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as refundOption
     *
     * @return string
     */
    public function getRefundOption()
    {
        return $this->refundOption;
    }

    /**
     * Sets a new refundOption
     *
     * @param string $refundOption
     * @return self
     */
    public function setRefundOption($refundOption)
    {
        $this->refundOption = $refundOption;
        return $this;
    }

    /**
     * Gets as shippingCostPaidByOption
     *
     * @return string
     */
    public function getShippingCostPaidByOption()
    {
        return $this->shippingCostPaidByOption;
    }

    /**
     * Sets a new shippingCostPaidByOption
     *
     * @param string $shippingCostPaidByOption
     * @return self
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption)
    {
        $this->shippingCostPaidByOption = $shippingCostPaidByOption;
        return $this;
    }

    /**
     * Gets as returnsWithinOption
     *
     * @return string
     */
    public function getReturnsWithinOption()
    {
        return $this->returnsWithinOption;
    }

    /**
     * Sets a new returnsWithinOption
     *
     * @param string $returnsWithinOption
     * @return self
     */
    public function setReturnsWithinOption($returnsWithinOption)
    {
        $this->returnsWithinOption = $returnsWithinOption;
        return $this;
    }

    /**
     * Gets as returnsAcceptedOption
     *
     * @return string
     */
    public function getReturnsAcceptedOption()
    {
        return $this->returnsAcceptedOption;
    }

    /**
     * Sets a new returnsAcceptedOption
     *
     * @param string $returnsAcceptedOption
     * @return self
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption)
    {
        $this->returnsAcceptedOption = $returnsAcceptedOption;
        return $this;
    }

    /**
     * Gets as warrantyOfferedOption
     *
     * @return string
     */
    public function getWarrantyOfferedOption()
    {
        return $this->warrantyOfferedOption;
    }

    /**
     * Sets a new warrantyOfferedOption
     *
     * @param string $warrantyOfferedOption
     * @return self
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption)
    {
        $this->warrantyOfferedOption = $warrantyOfferedOption;
        return $this;
    }

    /**
     * Gets as warrantyTypeOption
     *
     * @return string
     */
    public function getWarrantyTypeOption()
    {
        return $this->warrantyTypeOption;
    }

    /**
     * Sets a new warrantyTypeOption
     *
     * @param string $warrantyTypeOption
     * @return self
     */
    public function setWarrantyTypeOption($warrantyTypeOption)
    {
        $this->warrantyTypeOption = $warrantyTypeOption;
        return $this;
    }

    /**
     * Gets as warrantyDurationOption
     *
     * @return string
     */
    public function getWarrantyDurationOption()
    {
        return $this->warrantyDurationOption;
    }

    /**
     * Sets a new warrantyDurationOption
     *
     * @param string $warrantyDurationOption
     * @return self
     */
    public function setWarrantyDurationOption($warrantyDurationOption)
    {
        $this->warrantyDurationOption = $warrantyDurationOption;
        return $this;
    }

    /**
     * Gets as restockingFeeValue
     *
     * @return string
     */
    public function getRestockingFeeValue()
    {
        return $this->restockingFeeValue;
    }

    /**
     * Sets a new restockingFeeValue
     *
     * @param string $restockingFeeValue
     * @return self
     */
    public function setRestockingFeeValue($restockingFeeValue)
    {
        $this->restockingFeeValue = $restockingFeeValue;
        return $this;
    }

    /**
     * Gets as holidayReturns
     *
     * @return string
     */
    public function getHolidayReturns()
    {
        return $this->holidayReturns;
    }

    /**
     * Sets a new holidayReturns
     *
     * @param string $holidayReturns
     * @return self
     */
    public function setHolidayReturns($holidayReturns)
    {
        $this->holidayReturns = $holidayReturns;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}description", $value);
        }
        $value = $this->getRefundOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}refundOption", $value);
        }
        $value = $this->getShippingCostPaidByOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption", $value);
        }
        $value = $this->getReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption", $value);
        }
        $value = $this->getReturnsAcceptedOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption", $value);
        }
        $value = $this->getWarrantyOfferedOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}warrantyOfferedOption", $value);
        }
        $value = $this->getWarrantyTypeOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}warrantyTypeOption", $value);
        }
        $value = $this->getWarrantyDurationOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}warrantyDurationOption", $value);
        }
        $value = $this->getRestockingFeeValue();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}restockingFeeValue", $value);
        }
        $value = $this->getHolidayReturns();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}holidayReturns", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}refundOption');
        if (null !== $value) {
            $this->setRefundOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingCostPaidByOption');
        if (null !== $value) {
            $this->setShippingCostPaidByOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsWithinOption');
        if (null !== $value) {
            $this->setReturnsWithinOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}returnsAcceptedOption');
        if (null !== $value) {
            $this->setReturnsAcceptedOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}warrantyOfferedOption');
        if (null !== $value) {
            $this->setWarrantyOfferedOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}warrantyTypeOption');
        if (null !== $value) {
            $this->setWarrantyTypeOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}warrantyDurationOption');
        if (null !== $value) {
            $this->setWarrantyDurationOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}restockingFeeValue');
        if (null !== $value) {
            $this->setRestockingFeeValue($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}holidayReturns');
        if (null !== $value) {
            $this->setHolidayReturns($value);
        }
    }
}
