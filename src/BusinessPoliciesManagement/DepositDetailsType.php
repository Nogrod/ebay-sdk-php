<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DepositDetailsType
 *
 *
 * XSD Type: DepositDetails
 */
class DepositDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var int $hoursToDeposit
     */
    private $hoursToDeposit = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $depositAmount
     */
    private $depositAmount = null;

    /**
     * Gets as hoursToDeposit
     *
     * @return int
     */
    public function getHoursToDeposit()
    {
        return $this->hoursToDeposit;
    }

    /**
     * Sets a new hoursToDeposit
     *
     * @param int $hoursToDeposit
     * @return self
     */
    public function setHoursToDeposit($hoursToDeposit)
    {
        $this->hoursToDeposit = $hoursToDeposit;
        return $this;
    }

    /**
     * Gets as depositAmount
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    /**
     * Sets a new depositAmount
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $depositAmount
     * @return self
     */
    public function setDepositAmount(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $depositAmount)
    {
        $this->depositAmount = $depositAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getHoursToDeposit();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}hoursToDeposit", $value);
        }
        $value = $this->getDepositAmount();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}depositAmount", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}hoursToDeposit');
        if (null !== $value) {
            $this->setHoursToDeposit($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}depositAmount');
        if (null !== $value) {
            $this->setDepositAmount(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
    }
}
