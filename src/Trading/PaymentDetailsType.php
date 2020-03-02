<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentDetailsType
 *
 * Type defining the <b>PaymentDetails</b> container, which is used by the seller to
 *  specify amounts and due dates for deposits and full payment on motor vehicle listings.
 * XSD Type: PaymentDetailsType
 */
class PaymentDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This integer value indicates the number of hours that a buyer has (after he/she commits to
     *  buy) to make a deposit to the seller as a down payment on a motor vehicle. <b>Valid values:</b> 24, 48 (default), and 72.
     *  <br/><br/>
     *  The deposit amount is specified in the <b>DepositAmount</b> field. If not
     *  specified, the <b>DepositAmount</b> value defaults to 0.0, in which case, a
     *  deposit on the vehicle is not required.
     *  <br>
     *
     * @var int $hoursToDeposit
     */
    private $hoursToDeposit = null;

    /**
     * This integer value indicates the number of days that a buyer has (after he/she commits to
     *  buy) to make full payment to the seller and close the remaining balance on a motor vehicle.
     *  <b>Valid values:</b> 3, 7 (default), 10, and 14.
     *  <br/><br/>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of
     *  the following <b>PaymentMethods</b> values must be specified for the
     *  listing:
     *  <ul>
     *  <li>CashInPerson</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li><b>PaymentSeeDescription</b> (indicates to prospective buyers that payment instructions
     *  are in the item's description</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @var int $daysToFullPayment
     */
    private $daysToFullPayment = null;

    /**
     * This dollar value indicates the amount of the deposit that a buyer must make on a purchased
     *  motor vehicle (eBay Motors US and CA). The deposit amount can be as high as $2,000.00.
     *  <br/><br/>
     *  If not
     *  specified, this value defaults to '0.0'. If the seller is requiring that the buyer put down
     *  a deposit on the vehicle, the seller must include and set the <b>DepositType</b>
     *  field to <code>OtherMethod</code> and specify an <b>HoursToDeposit</b> value.
     *  If specified, then also specify <b>HoursToDeposit</b>
     *  <br>
     *  <br>
     *  Deposits can only be paid using PayPal, so if <b>DepositAmount</b> is
     *  specified (and not '0.0'), then the listing must offer
     *  'PayPal' as a payment method (in addition to the payment methods
     *  offered for the full payment). Unlike other listings, PayPal is not
     *  automatically added to a Motors listing even if the seller has a
     *  PayPal preference set in My eBay. The seller also needs to have a
     *  linked PayPal account in order to require a deposit.<br>
     *  <br>
     *  The deposit amount appears in the shipping, payment details and return policy section of the
     *  View Item page.<br>
     *  <br>
     *  <b>For ReviseItem and related calls</b>: If the listing
     *  has no bids, the seller can add or lower a deposit; and they can
     *  increase the deposit if the listing doesn't require Immediate Payment.
     *  The seller can also remove the Immediate Payment option (if any).
     *  If the listing has bids, the seller can only lower an existing
     *  deposit; but not add or increase a deposit. The seller can't remove
     *  Immediate Payment when a listing with a deposit has bids.
     *  <br>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $depositAmount
     */
    private $depositAmount = null;

    /**
     * This field applies to eBay Motors (US and CA) vehicles listings. If the seller is requiring
     *  that the buyer make a deposit on the vehicle, the <b>DepositType</b> value must be
     *  included and set to <code>OtherMethod</code>. Otherwise, specify <code>None</code> (or don't pass in <b>DepositType</b>).
     *
     * @var string $depositType
     */
    private $depositType = null;

    /**
     * Gets as hoursToDeposit
     *
     * This integer value indicates the number of hours that a buyer has (after he/she commits to
     *  buy) to make a deposit to the seller as a down payment on a motor vehicle. <b>Valid values:</b> 24, 48 (default), and 72.
     *  <br/><br/>
     *  The deposit amount is specified in the <b>DepositAmount</b> field. If not
     *  specified, the <b>DepositAmount</b> value defaults to 0.0, in which case, a
     *  deposit on the vehicle is not required.
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
     * This integer value indicates the number of hours that a buyer has (after he/she commits to
     *  buy) to make a deposit to the seller as a down payment on a motor vehicle. <b>Valid values:</b> 24, 48 (default), and 72.
     *  <br/><br/>
     *  The deposit amount is specified in the <b>DepositAmount</b> field. If not
     *  specified, the <b>DepositAmount</b> value defaults to 0.0, in which case, a
     *  deposit on the vehicle is not required.
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
     * This integer value indicates the number of days that a buyer has (after he/she commits to
     *  buy) to make full payment to the seller and close the remaining balance on a motor vehicle.
     *  <b>Valid values:</b> 3, 7 (default), 10, and 14.
     *  <br/><br/>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of
     *  the following <b>PaymentMethods</b> values must be specified for the
     *  listing:
     *  <ul>
     *  <li>CashInPerson</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li><b>PaymentSeeDescription</b> (indicates to prospective buyers that payment instructions
     *  are in the item's description</li>
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
     * This integer value indicates the number of days that a buyer has (after he/she commits to
     *  buy) to make full payment to the seller and close the remaining balance on a motor vehicle.
     *  <b>Valid values:</b> 3, 7 (default), 10, and 14.
     *  <br/><br/>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of
     *  the following <b>PaymentMethods</b> values must be specified for the
     *  listing:
     *  <ul>
     *  <li>CashInPerson</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li><b>PaymentSeeDescription</b> (indicates to prospective buyers that payment instructions
     *  are in the item's description</li>
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
     * This dollar value indicates the amount of the deposit that a buyer must make on a purchased
     *  motor vehicle (eBay Motors US and CA). The deposit amount can be as high as $2,000.00.
     *  <br/><br/>
     *  If not
     *  specified, this value defaults to '0.0'. If the seller is requiring that the buyer put down
     *  a deposit on the vehicle, the seller must include and set the <b>DepositType</b>
     *  field to <code>OtherMethod</code> and specify an <b>HoursToDeposit</b> value.
     *  If specified, then also specify <b>HoursToDeposit</b>
     *  <br>
     *  <br>
     *  Deposits can only be paid using PayPal, so if <b>DepositAmount</b> is
     *  specified (and not '0.0'), then the listing must offer
     *  'PayPal' as a payment method (in addition to the payment methods
     *  offered for the full payment). Unlike other listings, PayPal is not
     *  automatically added to a Motors listing even if the seller has a
     *  PayPal preference set in My eBay. The seller also needs to have a
     *  linked PayPal account in order to require a deposit.<br>
     *  <br>
     *  The deposit amount appears in the shipping, payment details and return policy section of the
     *  View Item page.<br>
     *  <br>
     *  <b>For ReviseItem and related calls</b>: If the listing
     *  has no bids, the seller can add or lower a deposit; and they can
     *  increase the deposit if the listing doesn't require Immediate Payment.
     *  The seller can also remove the Immediate Payment option (if any).
     *  If the listing has bids, the seller can only lower an existing
     *  deposit; but not add or increase a deposit. The seller can't remove
     *  Immediate Payment when a listing with a deposit has bids.
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
     * This dollar value indicates the amount of the deposit that a buyer must make on a purchased
     *  motor vehicle (eBay Motors US and CA). The deposit amount can be as high as $2,000.00.
     *  <br/><br/>
     *  If not
     *  specified, this value defaults to '0.0'. If the seller is requiring that the buyer put down
     *  a deposit on the vehicle, the seller must include and set the <b>DepositType</b>
     *  field to <code>OtherMethod</code> and specify an <b>HoursToDeposit</b> value.
     *  If specified, then also specify <b>HoursToDeposit</b>
     *  <br>
     *  <br>
     *  Deposits can only be paid using PayPal, so if <b>DepositAmount</b> is
     *  specified (and not '0.0'), then the listing must offer
     *  'PayPal' as a payment method (in addition to the payment methods
     *  offered for the full payment). Unlike other listings, PayPal is not
     *  automatically added to a Motors listing even if the seller has a
     *  PayPal preference set in My eBay. The seller also needs to have a
     *  linked PayPal account in order to require a deposit.<br>
     *  <br>
     *  The deposit amount appears in the shipping, payment details and return policy section of the
     *  View Item page.<br>
     *  <br>
     *  <b>For ReviseItem and related calls</b>: If the listing
     *  has no bids, the seller can add or lower a deposit; and they can
     *  increase the deposit if the listing doesn't require Immediate Payment.
     *  The seller can also remove the Immediate Payment option (if any).
     *  If the listing has bids, the seller can only lower an existing
     *  deposit; but not add or increase a deposit. The seller can't remove
     *  Immediate Payment when a listing with a deposit has bids.
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
     * This field applies to eBay Motors (US and CA) vehicles listings. If the seller is requiring
     *  that the buyer make a deposit on the vehicle, the <b>DepositType</b> value must be
     *  included and set to <code>OtherMethod</code>. Otherwise, specify <code>None</code> (or don't pass in <b>DepositType</b>).
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
     * This field applies to eBay Motors (US and CA) vehicles listings. If the seller is requiring
     *  that the buyer make a deposit on the vehicle, the <b>DepositType</b> value must be
     *  included and set to <code>OtherMethod</code>. Otherwise, specify <code>None</code> (or don't pass in <b>DepositType</b>).
     *
     * @param string $depositType
     * @return self
     */
    public function setDepositType($depositType)
    {
        $this->depositType = $depositType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HoursToDeposit');
        if (null !== $value) {
            $this->setHoursToDeposit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DaysToFullPayment');
        if (null !== $value) {
            $this->setDaysToFullPayment($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositAmount');
        if (null !== $value) {
            $this->setDepositAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DepositType');
        if (null !== $value) {
            $this->setDepositType($value);
        }
    }
}
