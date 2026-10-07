<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AccountSummaryType
 *
 * Summary data for the requesting user's seller account as a whole. This includes a
 *  balance for the account, any past due amount and date, and defining data for
 *  additional accounts (if the user has changed country of residency while having an
 *  active eBay account).
 * XSD Type: AccountSummaryType
 */
class AccountSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Indicates the current state of the account (such as active or inactive).
     *  Possible values are enumerated in <b>AccountStateCodeType</b>.
     *
     * @var string $accountState
     */
    private $accountState = null;

    /**
     * This field specifies the payment amount that has been made by the user for the invoice. This field is only returned if a payment has been made towards the invoice, and if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a credit was issued by eBay to the user instead, this credit will be shown in the <b>InvoiceCredit</b> field.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $invoicePayment
     */
    private $invoicePayment = null;

    /**
     * This field specifies the credit amount that has been issued to the user's account by eBay for the invoice. This field is only returned if a credit has been issued towards the invoice, and if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a payment was made by the user instead, this payment amount will be shown in the <b>InvoicePayment</b> field.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $invoiceCredit
     */
    private $invoiceCredit = null;

    /**
     * This field specifies the balance of any new fees that have been assessed toward the user's account since the last invoice was created. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> or <code>OrderId</code>. If there have been no fees since the last invoice was created, this value will be <code>0.0</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $invoiceNewFee
     */
    private $invoiceNewFee = null;

    /**
     * This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     *
     * @var \Nogrod\eBaySDK\Trading\AdditionalAccountType[] $additionalAccount
     */
    private $additionalAccount = [

    ];

    /**
     * This value indicates the amount of money that is past due on the user's account. If no money is past due, this value will be <code>0.0</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amountPastDue
     */
    private $amountPastDue = null;

    /**
     * This string value represents the first four digits of the bank account the associated with the user account. This field is only applicable if a bank account is being used to pay monthly invoices.
     *
     * @var string $bankAccountInfo
     */
    private $bankAccountInfo = null;

    /**
     * This timestamp indicates the date and time when the owner of the account last changed the bank account on file as the primary payment method. This field may not be returned if the bank account on file has never been changed, or if the primary payment method is not a bank account.
     *
     * @var \DateTime $bankModifyDate
     */
    private $bankModifyDate = null;

    /**
     * This integer value indicates the day of the month on which eBay sends a billing invoice to the user. A value of <code>0</code> indicates that an invoice is sent on the last day of each month. A value of <code>15</code>15 indicates that an invoice is sent on the 15th day of each month.
     *
     * @var int $billingCycleDate
     */
    private $billingCycleDate = null;

    /**
     * This timestamp indicates the expiration date for the credit card that is currently on file and used to pay monthly invoices. This field may not be returned if the primary method is not a credit card.
     *
     * @var \DateTime $creditCardExpiration
     */
    private $creditCardExpiration = null;

    /**
     * This string value represents the last four digits of the credit card that the user selected as payment method for the account. This field is only applicable if a credit card is being used to pay monthly invoices.
     *
     * @var string $creditCardInfo
     */
    private $creditCardInfo = null;

    /**
     * This timestamp indicates the date and time when the owner of the account last changed the credit card on file as the primary payment method. This field may not be returned if the credit card on file has never been changed, or if the primary payment method is not a credit card.
     *
     * @var \DateTime $creditCardModifyDate
     */
    private $creditCardModifyDate = null;

    /**
     * This field shows the current balance for the user's account. This value can be <code>0.0</code>, a positive amount (debit), or a negative amount (credit).
     *  <br><br>
     *  This field is only returned if the <b>ExcludeBalance</b> flag is included in the call request and set to <code>false</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $currentBalance
     */
    private $currentBalance = null;

    /**
     * This field specifies the balance for the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. The value is positive for debits and negative for credits.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $invoiceBalance
     */
    private $invoiceBalance = null;

    /**
     * This timestamp indicates the date and time of the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified.
     *
     * @var \DateTime $invoiceDate
     */
    private $invoiceDate = null;

    /**
     * This field shows the amount of the last payment that was made by the user.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $lastAmountPaid
     */
    private $lastAmountPaid = null;

    /**
     * This timestamp shows the date and time of the last payment that was made by the user.
     *
     * @var \DateTime $lastPaymentDate
     */
    private $lastPaymentDate = null;

    /**
     * This boolean field indicates whether or not the account has a past due balance. A value of <code>true</code> indicates that the account is past due, and a value of <code>false</code> indicates that the account is current. If the account is past due, the amount past due can be found in the <b>AmountPastDue</b> field.
     *
     * @var bool $pastDue
     */
    private $pastDue = null;

    /**
     * This enumeration value indicates the primary payment method used by the user to pay monthly eBay invoices.
     *
     * @var string $paymentMethod
     */
    private $paymentMethod = null;

    /**
     * This container shows the total amount of fees (and credits if applicable) that have already been paid through seller payout deductions. The seller must include the <b>IncludeNettedEntries</b> field in the request and set it to <code>true</code> in order for this container to be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\NettedTransactionSummaryType $nettedTransactionSummary
     */
    private $nettedTransactionSummary = null;

    /**
     * Gets as accountState
     *
     * Indicates the current state of the account (such as active or inactive).
     *  Possible values are enumerated in <b>AccountStateCodeType</b>.
     *
     * @return string
     */
    public function getAccountState()
    {
        return $this->accountState;
    }

    /**
     * Sets a new accountState
     *
     * Indicates the current state of the account (such as active or inactive).
     *  Possible values are enumerated in <b>AccountStateCodeType</b>.
     *
     * @param string $accountState
     * @return self
     */
    public function setAccountState($accountState)
    {
        $this->accountState = $accountState;
        return $this;
    }

    /**
     * Gets as invoicePayment
     *
     * This field specifies the payment amount that has been made by the user for the invoice. This field is only returned if a payment has been made towards the invoice, and if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a credit was issued by eBay to the user instead, this credit will be shown in the <b>InvoiceCredit</b> field.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInvoicePayment()
    {
        return $this->invoicePayment;
    }

    /**
     * Sets a new invoicePayment
     *
     * This field specifies the payment amount that has been made by the user for the invoice. This field is only returned if a payment has been made towards the invoice, and if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a credit was issued by eBay to the user instead, this credit will be shown in the <b>InvoiceCredit</b> field.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $invoicePayment
     * @return self
     */
    public function setInvoicePayment(\Nogrod\eBaySDK\Trading\AmountType $invoicePayment)
    {
        $this->invoicePayment = $invoicePayment;
        return $this;
    }

    /**
     * Gets as invoiceCredit
     *
     * This field specifies the credit amount that has been issued to the user's account by eBay for the invoice. This field is only returned if a credit has been issued towards the invoice, and if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a payment was made by the user instead, this payment amount will be shown in the <b>InvoicePayment</b> field.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInvoiceCredit()
    {
        return $this->invoiceCredit;
    }

    /**
     * Sets a new invoiceCredit
     *
     * This field specifies the credit amount that has been issued to the user's account by eBay for the invoice. This field is only returned if a credit has been issued towards the invoice, and if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. If a payment was made by the user instead, this payment amount will be shown in the <b>InvoicePayment</b> field.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $invoiceCredit
     * @return self
     */
    public function setInvoiceCredit(\Nogrod\eBaySDK\Trading\AmountType $invoiceCredit)
    {
        $this->invoiceCredit = $invoiceCredit;
        return $this;
    }

    /**
     * Gets as invoiceNewFee
     *
     * This field specifies the balance of any new fees that have been assessed toward the user's account since the last invoice was created. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> or <code>OrderId</code>. If there have been no fees since the last invoice was created, this value will be <code>0.0</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInvoiceNewFee()
    {
        return $this->invoiceNewFee;
    }

    /**
     * Sets a new invoiceNewFee
     *
     * This field specifies the balance of any new fees that have been assessed toward the user's account since the last invoice was created. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> or <code>OrderId</code>. If there have been no fees since the last invoice was created, this value will be <code>0.0</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $invoiceNewFee
     * @return self
     */
    public function setInvoiceNewFee(\Nogrod\eBaySDK\Trading\AmountType $invoiceNewFee)
    {
        $this->invoiceNewFee = $invoiceNewFee;
        return $this;
    }

    /**
     * Adds as additionalAccount
     *
     * This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AdditionalAccountType $additionalAccount
     */
    public function addToAdditionalAccount(\Nogrod\eBaySDK\Trading\AdditionalAccountType $additionalAccount)
    {
        if (!is_array($this->additionalAccount)) {
            throw new \LogicException('additionalAccount is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->additionalAccount[] = $additionalAccount;
        return $this;
    }

    /**
     * isset additionalAccount
     *
     * This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalAccount($index)
    {
        return isset($this->additionalAccount[$index]);
    }

    /**
     * unset additionalAccount
     *
     * This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalAccount($index)
    {
        unset($this->additionalAccount[$index]);
    }

    /**
     * Gets as additionalAccount
     *
     * This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AdditionalAccountType>
     */
    public function getAdditionalAccount()
    {
        return $this->additionalAccount;
    }

    /**
     * Sets a new additionalAccount
     *
     * This container shows the identifier and current balance for another eBay account associated with the eBay user. This container will appear under the <b>AccountSummary</b> container for each additional account that the eBay user owns.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AdditionalAccountType> $additionalAccount
     * @return self
     */
    public function setAdditionalAccount(iterable $additionalAccount)
    {
        $this->additionalAccount = $additionalAccount;
        return $this;
    }

    /**
     * Gets as amountPastDue
     *
     * This value indicates the amount of money that is past due on the user's account. If no money is past due, this value will be <code>0.0</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmountPastDue()
    {
        return $this->amountPastDue;
    }

    /**
     * Sets a new amountPastDue
     *
     * This value indicates the amount of money that is past due on the user's account. If no money is past due, this value will be <code>0.0</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amountPastDue
     * @return self
     */
    public function setAmountPastDue(\Nogrod\eBaySDK\Trading\AmountType $amountPastDue)
    {
        $this->amountPastDue = $amountPastDue;
        return $this;
    }

    /**
     * Gets as bankAccountInfo
     *
     * This string value represents the first four digits of the bank account the associated with the user account. This field is only applicable if a bank account is being used to pay monthly invoices.
     *
     * @return string
     */
    public function getBankAccountInfo()
    {
        return $this->bankAccountInfo;
    }

    /**
     * Sets a new bankAccountInfo
     *
     * This string value represents the first four digits of the bank account the associated with the user account. This field is only applicable if a bank account is being used to pay monthly invoices.
     *
     * @param string $bankAccountInfo
     * @return self
     */
    public function setBankAccountInfo($bankAccountInfo)
    {
        $this->bankAccountInfo = $bankAccountInfo;
        return $this;
    }

    /**
     * Gets as bankModifyDate
     *
     * This timestamp indicates the date and time when the owner of the account last changed the bank account on file as the primary payment method. This field may not be returned if the bank account on file has never been changed, or if the primary payment method is not a bank account.
     *
     * @return \DateTime
     */
    public function getBankModifyDate()
    {
        return $this->bankModifyDate;
    }

    /**
     * Sets a new bankModifyDate
     *
     * This timestamp indicates the date and time when the owner of the account last changed the bank account on file as the primary payment method. This field may not be returned if the bank account on file has never been changed, or if the primary payment method is not a bank account.
     *
     * @param \DateTime $bankModifyDate
     * @return self
     */
    public function setBankModifyDate(\DateTime $bankModifyDate)
    {
        $this->bankModifyDate = $bankModifyDate;
        return $this;
    }

    /**
     * Gets as billingCycleDate
     *
     * This integer value indicates the day of the month on which eBay sends a billing invoice to the user. A value of <code>0</code> indicates that an invoice is sent on the last day of each month. A value of <code>15</code>15 indicates that an invoice is sent on the 15th day of each month.
     *
     * @return int
     */
    public function getBillingCycleDate()
    {
        return $this->billingCycleDate;
    }

    /**
     * Sets a new billingCycleDate
     *
     * This integer value indicates the day of the month on which eBay sends a billing invoice to the user. A value of <code>0</code> indicates that an invoice is sent on the last day of each month. A value of <code>15</code>15 indicates that an invoice is sent on the 15th day of each month.
     *
     * @param int $billingCycleDate
     * @return self
     */
    public function setBillingCycleDate($billingCycleDate)
    {
        $this->billingCycleDate = $billingCycleDate;
        return $this;
    }

    /**
     * Gets as creditCardExpiration
     *
     * This timestamp indicates the expiration date for the credit card that is currently on file and used to pay monthly invoices. This field may not be returned if the primary method is not a credit card.
     *
     * @return \DateTime
     */
    public function getCreditCardExpiration()
    {
        return $this->creditCardExpiration;
    }

    /**
     * Sets a new creditCardExpiration
     *
     * This timestamp indicates the expiration date for the credit card that is currently on file and used to pay monthly invoices. This field may not be returned if the primary method is not a credit card.
     *
     * @param \DateTime $creditCardExpiration
     * @return self
     */
    public function setCreditCardExpiration(\DateTime $creditCardExpiration)
    {
        $this->creditCardExpiration = $creditCardExpiration;
        return $this;
    }

    /**
     * Gets as creditCardInfo
     *
     * This string value represents the last four digits of the credit card that the user selected as payment method for the account. This field is only applicable if a credit card is being used to pay monthly invoices.
     *
     * @return string
     */
    public function getCreditCardInfo()
    {
        return $this->creditCardInfo;
    }

    /**
     * Sets a new creditCardInfo
     *
     * This string value represents the last four digits of the credit card that the user selected as payment method for the account. This field is only applicable if a credit card is being used to pay monthly invoices.
     *
     * @param string $creditCardInfo
     * @return self
     */
    public function setCreditCardInfo($creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;
        return $this;
    }

    /**
     * Gets as creditCardModifyDate
     *
     * This timestamp indicates the date and time when the owner of the account last changed the credit card on file as the primary payment method. This field may not be returned if the credit card on file has never been changed, or if the primary payment method is not a credit card.
     *
     * @return \DateTime
     */
    public function getCreditCardModifyDate()
    {
        return $this->creditCardModifyDate;
    }

    /**
     * Sets a new creditCardModifyDate
     *
     * This timestamp indicates the date and time when the owner of the account last changed the credit card on file as the primary payment method. This field may not be returned if the credit card on file has never been changed, or if the primary payment method is not a credit card.
     *
     * @param \DateTime $creditCardModifyDate
     * @return self
     */
    public function setCreditCardModifyDate(\DateTime $creditCardModifyDate)
    {
        $this->creditCardModifyDate = $creditCardModifyDate;
        return $this;
    }

    /**
     * Gets as currentBalance
     *
     * This field shows the current balance for the user's account. This value can be <code>0.0</code>, a positive amount (debit), or a negative amount (credit).
     *  <br><br>
     *  This field is only returned if the <b>ExcludeBalance</b> flag is included in the call request and set to <code>false</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getCurrentBalance()
    {
        return $this->currentBalance;
    }

    /**
     * Sets a new currentBalance
     *
     * This field shows the current balance for the user's account. This value can be <code>0.0</code>, a positive amount (debit), or a negative amount (credit).
     *  <br><br>
     *  This field is only returned if the <b>ExcludeBalance</b> flag is included in the call request and set to <code>false</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $currentBalance
     * @return self
     */
    public function setCurrentBalance(\Nogrod\eBaySDK\Trading\AmountType $currentBalance)
    {
        $this->currentBalance = $currentBalance;
        return $this;
    }

    /**
     * Gets as invoiceBalance
     *
     * This field specifies the balance for the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. The value is positive for debits and negative for credits.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInvoiceBalance()
    {
        return $this->invoiceBalance;
    }

    /**
     * Sets a new invoiceBalance
     *
     * This field specifies the balance for the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified. The value is positive for debits and negative for credits.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $invoiceBalance
     * @return self
     */
    public function setInvoiceBalance(\Nogrod\eBaySDK\Trading\AmountType $invoiceBalance)
    {
        $this->invoiceBalance = $invoiceBalance;
        return $this;
    }

    /**
     * Gets as invoiceDate
     *
     * This timestamp indicates the date and time of the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified.
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Sets a new invoiceDate
     *
     * This timestamp indicates the date and time of the invoice. This field is only returned if the <b>AccountHistorySelection</b> input field's value was set to <code>LastInvoice</code>. This field is not returned if the <b>AccountHistorySelection</b> input field's value was set to <code>BetweenSpecifiedDates</code> and a custom time period (overlapping multiple billing cycles) was specified.
     *
     * @param \DateTime $invoiceDate
     * @return self
     */
    public function setInvoiceDate(\DateTime $invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Gets as lastAmountPaid
     *
     * This field shows the amount of the last payment that was made by the user.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getLastAmountPaid()
    {
        return $this->lastAmountPaid;
    }

    /**
     * Sets a new lastAmountPaid
     *
     * This field shows the amount of the last payment that was made by the user.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $lastAmountPaid
     * @return self
     */
    public function setLastAmountPaid(\Nogrod\eBaySDK\Trading\AmountType $lastAmountPaid)
    {
        $this->lastAmountPaid = $lastAmountPaid;
        return $this;
    }

    /**
     * Gets as lastPaymentDate
     *
     * This timestamp shows the date and time of the last payment that was made by the user.
     *
     * @return \DateTime
     */
    public function getLastPaymentDate()
    {
        return $this->lastPaymentDate;
    }

    /**
     * Sets a new lastPaymentDate
     *
     * This timestamp shows the date and time of the last payment that was made by the user.
     *
     * @param \DateTime $lastPaymentDate
     * @return self
     */
    public function setLastPaymentDate(\DateTime $lastPaymentDate)
    {
        $this->lastPaymentDate = $lastPaymentDate;
        return $this;
    }

    /**
     * Gets as pastDue
     *
     * This boolean field indicates whether or not the account has a past due balance. A value of <code>true</code> indicates that the account is past due, and a value of <code>false</code> indicates that the account is current. If the account is past due, the amount past due can be found in the <b>AmountPastDue</b> field.
     *
     * @return bool
     */
    public function getPastDue()
    {
        return $this->pastDue;
    }

    /**
     * Sets a new pastDue
     *
     * This boolean field indicates whether or not the account has a past due balance. A value of <code>true</code> indicates that the account is past due, and a value of <code>false</code> indicates that the account is current. If the account is past due, the amount past due can be found in the <b>AmountPastDue</b> field.
     *
     * @param bool $pastDue
     * @return self
     */
    public function setPastDue($pastDue)
    {
        $this->pastDue = $pastDue;
        return $this;
    }

    /**
     * Gets as paymentMethod
     *
     * This enumeration value indicates the primary payment method used by the user to pay monthly eBay invoices.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets a new paymentMethod
     *
     * This enumeration value indicates the primary payment method used by the user to pay monthly eBay invoices.
     *
     * @param string $paymentMethod
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * Gets as nettedTransactionSummary
     *
     * This container shows the total amount of fees (and credits if applicable) that have already been paid through seller payout deductions. The seller must include the <b>IncludeNettedEntries</b> field in the request and set it to <code>true</code> in order for this container to be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\NettedTransactionSummaryType
     */
    public function getNettedTransactionSummary()
    {
        return $this->nettedTransactionSummary;
    }

    /**
     * Sets a new nettedTransactionSummary
     *
     * This container shows the total amount of fees (and credits if applicable) that have already been paid through seller payout deductions. The seller must include the <b>IncludeNettedEntries</b> field in the request and set it to <code>true</code> in order for this container to be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\NettedTransactionSummaryType $nettedTransactionSummary
     * @return self
     */
    public function setNettedTransactionSummary(\Nogrod\eBaySDK\Trading\NettedTransactionSummaryType $nettedTransactionSummary)
    {
        $this->nettedTransactionSummary = $nettedTransactionSummary;
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
        $value = $this->accountState;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AccountState', null, (string) $value);
        }
        $value = $this->invoicePayment;
        if (null !== $value) {
            $writer->startElementNs(null, 'InvoicePayment', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->invoiceCredit;
        if (null !== $value) {
            $writer->startElementNs(null, 'InvoiceCredit', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->invoiceNewFee;
        if (null !== $value) {
            $writer->startElementNs(null, 'InvoiceNewFee', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->additionalAccount;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AdditionalAccount', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->amountPastDue;
        if (null !== $value) {
            $writer->startElementNs(null, 'AmountPastDue', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->bankAccountInfo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BankAccountInfo', null, (string) $value);
        }
        $value = $this->bankModifyDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BankModifyDate', null, Func::formatDateTime($value));
        }
        $value = $this->billingCycleDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BillingCycleDate', null, (string) $value);
        }
        $value = $this->creditCardExpiration;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CreditCardExpiration', null, Func::formatDateTime($value));
        }
        $value = $this->creditCardInfo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CreditCardInfo', null, (string) $value);
        }
        $value = $this->creditCardModifyDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CreditCardModifyDate', null, Func::formatDateTime($value));
        }
        $value = $this->currentBalance;
        if (null !== $value) {
            $writer->startElementNs(null, 'CurrentBalance', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->invoiceBalance;
        if (null !== $value) {
            $writer->startElementNs(null, 'InvoiceBalance', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->invoiceDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'InvoiceDate', null, Func::formatDateTime($value));
        }
        $value = $this->lastAmountPaid;
        if (null !== $value) {
            $writer->startElementNs(null, 'LastAmountPaid', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->lastPaymentDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LastPaymentDate', null, Func::formatDateTime($value));
        }
        $value = $this->pastDue;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PastDue', null, ($value ? 'true' : 'false'));
        }
        $value = $this->paymentMethod;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PaymentMethod', null, (string) $value);
        }
        $value = $this->nettedTransactionSummary;
        if (null !== $value) {
            $writer->startElementNs(null, 'NettedTransactionSummary', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AccountSummaryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->additionalAccount = [];
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
                case 'AccountState':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->accountState = $value;
                    }
                    return true;
                case 'InvoicePayment':
                    $this->invoicePayment = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'InvoiceCredit':
                    $this->invoiceCredit = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'InvoiceNewFee':
                    $this->invoiceNewFee = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'AdditionalAccount':
                    $this->additionalAccount[] = \Nogrod\eBaySDK\Trading\AdditionalAccountType::xmlRead($reader);
                    return true;
                case 'AmountPastDue':
                    $this->amountPastDue = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'BankAccountInfo':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bankAccountInfo = $value;
                    }
                    return true;
                case 'BankModifyDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->bankModifyDate = new \DateTime($value);
                    }
                    return true;
                case 'BillingCycleDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->billingCycleDate = (int) $value;
                    }
                    return true;
                case 'CreditCardExpiration':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->creditCardExpiration = new \DateTime($value);
                    }
                    return true;
                case 'CreditCardInfo':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->creditCardInfo = $value;
                    }
                    return true;
                case 'CreditCardModifyDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->creditCardModifyDate = new \DateTime($value);
                    }
                    return true;
                case 'CurrentBalance':
                    $this->currentBalance = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'InvoiceBalance':
                    $this->invoiceBalance = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'InvoiceDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->invoiceDate = new \DateTime($value);
                    }
                    return true;
                case 'LastAmountPaid':
                    $this->lastAmountPaid = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'LastPaymentDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->lastPaymentDate = new \DateTime($value);
                    }
                    return true;
                case 'PastDue':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->pastDue = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'PaymentMethod':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paymentMethod = $value;
                    }
                    return true;
                case 'NettedTransactionSummary':
                    $this->nettedTransactionSummary = \Nogrod\eBaySDK\Trading\NettedTransactionSummaryType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['AccountState'] = $this->accountState;
        $data['InvoicePayment'] = $this->invoicePayment;
        $data['InvoiceCredit'] = $this->invoiceCredit;
        $data['InvoiceNewFee'] = $this->invoiceNewFee;
        $data['AdditionalAccount'] = Func::jsonList($this->additionalAccount);
        $data['AmountPastDue'] = $this->amountPastDue;
        $data['BankAccountInfo'] = $this->bankAccountInfo;
        $data['BankModifyDate'] = Func::jsonDate($this->bankModifyDate);
        $data['BillingCycleDate'] = $this->billingCycleDate;
        $data['CreditCardExpiration'] = Func::jsonDate($this->creditCardExpiration);
        $data['CreditCardInfo'] = $this->creditCardInfo;
        $data['CreditCardModifyDate'] = Func::jsonDate($this->creditCardModifyDate);
        $data['CurrentBalance'] = $this->currentBalance;
        $data['InvoiceBalance'] = $this->invoiceBalance;
        $data['InvoiceDate'] = Func::jsonDate($this->invoiceDate);
        $data['LastAmountPaid'] = $this->lastAmountPaid;
        $data['LastPaymentDate'] = Func::jsonDate($this->lastPaymentDate);
        $data['PastDue'] = $this->pastDue;
        $data['PaymentMethod'] = $this->paymentMethod;
        $data['NettedTransactionSummary'] = $this->nettedTransactionSummary;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
