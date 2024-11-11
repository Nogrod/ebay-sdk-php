<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentDetailsType
 *
 * Type defining the <b>PaymentDetails</b> container, which is used by the seller to
 *  specify the amount of the initial deposit, and the due dates for the deposit and the full payment for a motor vehicle listing.
 *  <br/>
 *  <br/>
 *  <span class="tablenote"><b>Note:</b>
 *  The seller may not use the <b>PaymentDetails</b> container if selling a motor vehicle through a Classified Ad listing. If it is used in a Trading call, it will be dropped and the seller will get a warning that it was dropped. For a Classified Ad listing, the buyer and seller directly discuss amongst themselves any details on a deposit, or due dates for a deposit and full balance. eBay will not be involved in this process for a Classified Ad listing.</span>
 * XSD Type: PaymentDetailsType
 */
class PaymentDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is used to set the due date (in hours) for the motor vehicle deposit. The deposit amount is specified in the <b>DepositAmount</b> field. The "clock starts" on the deposit due date as soon as the buyer commits to buying the vehicle by clicking the <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>24</code>, <code>48</code> (default), and <code>72</code> hours.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b>
     *  If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the <b>HoursToDeposit</b> field will not be applicable, since the buyer will be required to pay any deposit amount immediately (and not within 1, 2 or 3 days).</span>
     *  <br>
     *
     * @var int $hoursToDeposit
     */
    private $hoursToDeposit = null;

    /**
     * This field is used to set the due date (in days) for the buyer to pay off the full balance of the motor vehicle. The "clock starts" on the full payment due date as soon as the buyer commits to buying the vehicle by clicking the <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>3</code>, <code>7</code> (default), <code>10</code>, and <code>14</code> days.
     *  <br/><br/>
     *  The seller must specify one or more of the following offline payment methods in the listing. The buyer will be expected to use one of these payment method options to pay the full balance of the motor vehicle.
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @var int $daysToFullPayment
     */
    private $daysToFullPayment = null;

    /**
     * This dollar value indicates the amount of the initial deposit on the vehicle required from the buyer.
     *  <br/><br/>
     *  If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the deposit will be required immediately, and the <b>HoursToDeposit</b> field (if set) will not be applicable. If immediate payment is required for a motor vehicle deposit, the value input into this field cannot exceed '500.0', or an error will occur.
     *  <br/><br/>
     *  If there is no immediate payment requirement set for the listing the deposit will be required in 24, 48, or 72 hours after commitment to purchase (see the <b>HoursToDeposit</b> field). If immediate payment is not required for a motor vehicle deposit, the value input into this field cannot exceed '2000.0', or an error will occur.
     *  <br/><br/>
     *  If this field is not included in an Add/Revise call, its value defaults to '0.0', which would technically mean that a deposit is not required, even if the <b>DepositType</b> and <b>HoursToDeposit</b> fields were included.
     *  <br>
     *  <br>
     *  Motor vehicle deposit details will be shown to prospective buyers in the listing. The available payment methods for the deposit will be shown on the checkout page once the buyer clicks the the <b>Buy It Now</b> button. <br>
     *  <br>
     *  <b>For ReviseItem and related calls</b>: If the listing
     *  has no bids, the seller can add or lower a deposit; and they can
     *  increase the deposit if the listing doesn't require immediate payment.
     *  The seller can also remove the immediate payment option (if any).
     *  If the listing has bids, the seller can only lower an existing
     *  deposit; but not add or increase a deposit. The seller can't remove
     *  immediate payment when a listing with a deposit has bids.
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $depositAmount
     */
    private $depositAmount = null;

    /**
     * In order for a seller to require a motor vehicle deposit from a buyer, this field must be included and set to <code>OtherMethod</code>. Otherwise, the field will default to <code>None</code> and a deposit will not be required.
     *
     * @var string $depositType
     */
    private $depositType = null;

    /**
     * Gets as hoursToDeposit
     *
     * This field is used to set the due date (in hours) for the motor vehicle deposit. The deposit amount is specified in the <b>DepositAmount</b> field. The "clock starts" on the deposit due date as soon as the buyer commits to buying the vehicle by clicking the <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>24</code>, <code>48</code> (default), and <code>72</code> hours.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b>
     *  If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the <b>HoursToDeposit</b> field will not be applicable, since the buyer will be required to pay any deposit amount immediately (and not within 1, 2 or 3 days).</span>
     *  <br>
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
     * This field is used to set the due date (in hours) for the motor vehicle deposit. The deposit amount is specified in the <b>DepositAmount</b> field. The "clock starts" on the deposit due date as soon as the buyer commits to buying the vehicle by clicking the <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>24</code>, <code>48</code> (default), and <code>72</code> hours.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note:</b>
     *  If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the <b>HoursToDeposit</b> field will not be applicable, since the buyer will be required to pay any deposit amount immediately (and not within 1, 2 or 3 days).</span>
     *  <br>
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
     * Gets as daysToFullPayment
     *
     * This field is used to set the due date (in days) for the buyer to pay off the full balance of the motor vehicle. The "clock starts" on the full payment due date as soon as the buyer commits to buying the vehicle by clicking the <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>3</code>, <code>7</code> (default), <code>10</code>, and <code>14</code> days.
     *  <br/><br/>
     *  The seller must specify one or more of the following offline payment methods in the listing. The buyer will be expected to use one of these payment method options to pay the full balance of the motor vehicle.
     *  <ul>
     *  <li>CashOnPickup</li>
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
     * This field is used to set the due date (in days) for the buyer to pay off the full balance of the motor vehicle. The "clock starts" on the full payment due date as soon as the buyer commits to buying the vehicle by clicking the <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>3</code>, <code>7</code> (default), <code>10</code>, and <code>14</code> days.
     *  <br/><br/>
     *  The seller must specify one or more of the following offline payment methods in the listing. The buyer will be expected to use one of these payment method options to pay the full balance of the motor vehicle.
     *  <ul>
     *  <li>CashOnPickup</li>
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
     * Gets as depositAmount
     *
     * This dollar value indicates the amount of the initial deposit on the vehicle required from the buyer.
     *  <br/><br/>
     *  If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the deposit will be required immediately, and the <b>HoursToDeposit</b> field (if set) will not be applicable. If immediate payment is required for a motor vehicle deposit, the value input into this field cannot exceed '500.0', or an error will occur.
     *  <br/><br/>
     *  If there is no immediate payment requirement set for the listing the deposit will be required in 24, 48, or 72 hours after commitment to purchase (see the <b>HoursToDeposit</b> field). If immediate payment is not required for a motor vehicle deposit, the value input into this field cannot exceed '2000.0', or an error will occur.
     *  <br/><br/>
     *  If this field is not included in an Add/Revise call, its value defaults to '0.0', which would technically mean that a deposit is not required, even if the <b>DepositType</b> and <b>HoursToDeposit</b> fields were included.
     *  <br>
     *  <br>
     *  Motor vehicle deposit details will be shown to prospective buyers in the listing. The available payment methods for the deposit will be shown on the checkout page once the buyer clicks the the <b>Buy It Now</b> button. <br>
     *  <br>
     *  <b>For ReviseItem and related calls</b>: If the listing
     *  has no bids, the seller can add or lower a deposit; and they can
     *  increase the deposit if the listing doesn't require immediate payment.
     *  The seller can also remove the immediate payment option (if any).
     *  If the listing has bids, the seller can only lower an existing
     *  deposit; but not add or increase a deposit. The seller can't remove
     *  immediate payment when a listing with a deposit has bids.
     *  <br>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    /**
     * Sets a new depositAmount
     *
     * This dollar value indicates the amount of the initial deposit on the vehicle required from the buyer.
     *  <br/><br/>
     *  If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the deposit will be required immediately, and the <b>HoursToDeposit</b> field (if set) will not be applicable. If immediate payment is required for a motor vehicle deposit, the value input into this field cannot exceed '500.0', or an error will occur.
     *  <br/><br/>
     *  If there is no immediate payment requirement set for the listing the deposit will be required in 24, 48, or 72 hours after commitment to purchase (see the <b>HoursToDeposit</b> field). If immediate payment is not required for a motor vehicle deposit, the value input into this field cannot exceed '2000.0', or an error will occur.
     *  <br/><br/>
     *  If this field is not included in an Add/Revise call, its value defaults to '0.0', which would technically mean that a deposit is not required, even if the <b>DepositType</b> and <b>HoursToDeposit</b> fields were included.
     *  <br>
     *  <br>
     *  Motor vehicle deposit details will be shown to prospective buyers in the listing. The available payment methods for the deposit will be shown on the checkout page once the buyer clicks the the <b>Buy It Now</b> button. <br>
     *  <br>
     *  <b>For ReviseItem and related calls</b>: If the listing
     *  has no bids, the seller can add or lower a deposit; and they can
     *  increase the deposit if the listing doesn't require immediate payment.
     *  The seller can also remove the immediate payment option (if any).
     *  If the listing has bids, the seller can only lower an existing
     *  deposit; but not add or increase a deposit. The seller can't remove
     *  immediate payment when a listing with a deposit has bids.
     *  <br>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $depositAmount
     * @return self
     */
    public function setDepositAmount(\Nogrod\eBaySDK\Trading\AmountType $depositAmount)
    {
        $this->depositAmount = $depositAmount;
        return $this;
    }

    /**
     * Gets as depositType
     *
     * In order for a seller to require a motor vehicle deposit from a buyer, this field must be included and set to <code>OtherMethod</code>. Otherwise, the field will default to <code>None</code> and a deposit will not be required.
     *
     * @return string
     */
    public function getDepositType()
    {
        return $this->depositType;
    }

    /**
     * Sets a new depositType
     *
     * In order for a seller to require a motor vehicle deposit from a buyer, this field must be included and set to <code>OtherMethod</code>. Otherwise, the field will default to <code>None</code> and a deposit will not be required.
     *
     * @param string $depositType
     * @return self
     */
    public function setDepositType($depositType)
    {
        $this->depositType = $depositType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getHoursToDeposit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HoursToDeposit", $value);
        }
        $value = $this->getDaysToFullPayment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DaysToFullPayment", $value);
        }
        $value = $this->getDepositAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DepositAmount", $value);
        }
        $value = $this->getDepositType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DepositType", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}HoursToDeposit');
        if (null !== $value) {
            $this->setHoursToDeposit($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DaysToFullPayment');
        if (null !== $value) {
            $this->setDaysToFullPayment($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositAmount');
        if (null !== $value) {
            $this->setDepositAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositType');
        if (null !== $value) {
            $this->setDepositType($value);
        }
    }
}
