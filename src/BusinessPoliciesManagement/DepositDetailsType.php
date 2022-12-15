<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DepositDetailsType
 *
 * Type that defines the <b>depositDetails</b> container, which is used by the seller to specify amounts and due dates for deposits and full payment on eBay Motors (US and CA) vehicle listings. The <b>depositDetails</b> container is conditionally required if the the payment policy is for eBay Motors (US and CA) vehicles listings (<b>categoryGroup.name=MOTORS_VEHICLE</b>).
 * XSD Type: DepositDetails
 */
class DepositDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This integer value indicates the number of days that a buyer has to make their full payment to the seller and close the remaining balance on a motor vehicle transaction. This container must be specified for motor vehicles listings. Valid values are '3', '7' (default), '10', and '14'.
     *  <br><br>
     *  In order for a buyer to make a full payment on a US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified for the corresponding payment policy:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @var int $daysToFullPayment
     */
    private $daysToFullPayment = null;

    /**
     * This integer value indicates the number of hours that a buyer has (after he/she commits to buy) to make an initial deposit to the seller as a down payment on a motor vehicle. Valid values are '24', '48' (default), and '72'.
     *  <br><br>
     *  The deposit amount is specified in the <b>depositAmount</b> field. If not specified, the <b>depositAmount</b> value defaults to '0.0', in which case, a deposit on the vehicle is not required.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The <strong>hoursToDeposit</strong> value is overridden if the seller has set the motor vehicle listing to require immediate payment. If the listing requires immediate payment, the buyer must pay the deposit immediately in order to be eligible to purchase the motor vehicle.</span>
     *
     * @var int $hoursToDeposit
     */
    private $hoursToDeposit = null;

    /**
     * This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required. This container is only applicable if the <b>categoryGroup.name</b>field is set to 'MOTORS_VEHICLE'. <br><br>If not specified, this value defaults to '0.0'. If this value is specified, the seller must also specify an <b>hoursToDeposit</b> value. <br><br> The deposit amount appears in the shipping, payment details and return policy sections of the View Item page.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $depositAmount
     */
    private $depositAmount = null;

    /**
     * Gets as daysToFullPayment
     *
     * This integer value indicates the number of days that a buyer has to make their full payment to the seller and close the remaining balance on a motor vehicle transaction. This container must be specified for motor vehicles listings. Valid values are '3', '7' (default), '10', and '14'.
     *  <br><br>
     *  In order for a buyer to make a full payment on a US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified for the corresponding payment policy:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @return int
     */
    public function getDaysToFullPayment()
    {
        return $this->daysToFullPayment;
    }

    /**
     * Sets a new daysToFullPayment
     *
     * This integer value indicates the number of days that a buyer has to make their full payment to the seller and close the remaining balance on a motor vehicle transaction. This container must be specified for motor vehicles listings. Valid values are '3', '7' (default), '10', and '14'.
     *  <br><br>
     *  In order for a buyer to make a full payment on a US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified for the corresponding payment policy:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @param int $daysToFullPayment
     * @return self
     */
    public function setDaysToFullPayment($daysToFullPayment)
    {
        $this->daysToFullPayment = $daysToFullPayment;
        return $this;
    }

    /**
     * Gets as hoursToDeposit
     *
     * This integer value indicates the number of hours that a buyer has (after he/she commits to buy) to make an initial deposit to the seller as a down payment on a motor vehicle. Valid values are '24', '48' (default), and '72'.
     *  <br><br>
     *  The deposit amount is specified in the <b>depositAmount</b> field. If not specified, the <b>depositAmount</b> value defaults to '0.0', in which case, a deposit on the vehicle is not required.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The <strong>hoursToDeposit</strong> value is overridden if the seller has set the motor vehicle listing to require immediate payment. If the listing requires immediate payment, the buyer must pay the deposit immediately in order to be eligible to purchase the motor vehicle.</span>
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
     * This integer value indicates the number of hours that a buyer has (after he/she commits to buy) to make an initial deposit to the seller as a down payment on a motor vehicle. Valid values are '24', '48' (default), and '72'.
     *  <br><br>
     *  The deposit amount is specified in the <b>depositAmount</b> field. If not specified, the <b>depositAmount</b> value defaults to '0.0', in which case, a deposit on the vehicle is not required.
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The <strong>hoursToDeposit</strong> value is overridden if the seller has set the motor vehicle listing to require immediate payment. If the listing requires immediate payment, the buyer must pay the deposit immediately in order to be eligible to purchase the motor vehicle.</span>
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
     * This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required. This container is only applicable if the <b>categoryGroup.name</b>field is set to 'MOTORS_VEHICLE'. <br><br>If not specified, this value defaults to '0.0'. If this value is specified, the seller must also specify an <b>hoursToDeposit</b> value. <br><br> The deposit amount appears in the shipping, payment details and return policy sections of the View Item page.
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
     * This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required. This container is only applicable if the <b>categoryGroup.name</b>field is set to 'MOTORS_VEHICLE'. <br><br>If not specified, this value defaults to '0.0'. If this value is specified, the seller must also specify an <b>hoursToDeposit</b> value. <br><br> The deposit amount appears in the shipping, payment details and return policy sections of the View Item page.
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
        $value = $this->getDaysToFullPayment();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}daysToFullPayment", $value);
        }
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}daysToFullPayment');
        if (null !== $value) {
            $this->setDaysToFullPayment($value);
        }
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
