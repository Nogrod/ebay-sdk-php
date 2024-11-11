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
class AccountSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @return \Nogrod\eBaySDK\Trading\AdditionalAccountType[]
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
     * @param \Nogrod\eBaySDK\Trading\AdditionalAccountType[] $additionalAccount
     * @return self
     */
    public function setAdditionalAccount(array $additionalAccount)
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAccountState();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountState", $value);
        }
        $value = $this->getInvoicePayment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoicePayment", $value);
        }
        $value = $this->getInvoiceCredit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceCredit", $value);
        }
        $value = $this->getInvoiceNewFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceNewFee", $value);
        }
        $value = $this->getAdditionalAccount();
        if (null !== $value && !empty($this->getAdditionalAccount())) {
            $writer->write(array_map(function ($v) {return ["AdditionalAccount" => $v];}, $value));
        }
        $value = $this->getAmountPastDue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AmountPastDue", $value);
        }
        $value = $this->getBankAccountInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BankAccountInfo", $value);
        }
        $value = $this->getBankModifyDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BankModifyDate", $value);
        }
        $value = $this->getBillingCycleDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BillingCycleDate", $value);
        }
        $value = $this->getCreditCardExpiration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreditCardExpiration", $value);
        }
        $value = $this->getCreditCardInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreditCardInfo", $value);
        }
        $value = $this->getCreditCardModifyDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreditCardModifyDate", $value);
        }
        $value = $this->getCurrentBalance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrentBalance", $value);
        }
        $value = $this->getInvoiceBalance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceBalance", $value);
        }
        $value = $this->getInvoiceDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceDate", $value);
        }
        $value = $this->getLastAmountPaid();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastAmountPaid", $value);
        }
        $value = $this->getLastPaymentDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastPaymentDate", $value);
        }
        $value = $this->getPastDue();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PastDue", $value);
        }
        $value = $this->getPaymentMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentMethod", $value);
        }
        $value = $this->getNettedTransactionSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NettedTransactionSummary", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountState');
        if (null !== $value) {
            $this->setAccountState($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoicePayment');
        if (null !== $value) {
            $this->setInvoicePayment(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceCredit');
        if (null !== $value) {
            $this->setInvoiceCredit(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceNewFee');
        if (null !== $value) {
            $this->setInvoiceNewFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdditionalAccount');
        if (null !== $value) {
            $this->setAdditionalAccount(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AdditionalAccountType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}AmountPastDue');
        if (null !== $value) {
            $this->setAmountPastDue(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BankAccountInfo');
        if (null !== $value) {
            $this->setBankAccountInfo($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BankModifyDate');
        if (null !== $value) {
            $this->setBankModifyDate(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BillingCycleDate');
        if (null !== $value) {
            $this->setBillingCycleDate($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreditCardExpiration');
        if (null !== $value) {
            $this->setCreditCardExpiration(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreditCardInfo');
        if (null !== $value) {
            $this->setCreditCardInfo($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreditCardModifyDate');
        if (null !== $value) {
            $this->setCreditCardModifyDate(new \DateTime($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrentBalance');
        if (null !== $value) {
            $this->setCurrentBalance(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceBalance');
        if (null !== $value) {
            $this->setInvoiceBalance(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceDate');
        if (null !== $value) {
            $this->setInvoiceDate(new \DateTime($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastAmountPaid');
        if (null !== $value) {
            $this->setLastAmountPaid(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastPaymentDate');
        if (null !== $value) {
            $this->setLastPaymentDate(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PastDue');
        if (null !== $value) {
            $this->setPastDue(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentMethod');
        if (null !== $value) {
            $this->setPaymentMethod($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}NettedTransactionSummary');
        if (null !== $value) {
            $this->setNettedTransactionSummary(\Nogrod\eBaySDK\Trading\NettedTransactionSummaryType::fromKeyValue($value));
        }
    }
}
