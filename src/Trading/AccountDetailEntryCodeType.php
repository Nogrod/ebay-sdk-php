<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AccountDetailEntryCodeType
 *
 * Enumerated type that defines the fee/charge and credit transactions that occur on an eBay user's account. These values are returned in the <b>AccountEntry.AccountDetailsEntryType</b> output field of the <b>GetAccount</b> call.
 * XSD Type: AccountDetailEntryCodeType
 */
class AccountDetailEntryCodeType
{

    /**
     * Constant for 'Unknown' value.
     *
     * This enumeration value indicates that the account transaction type is unknown.
     * Sometimes this value will get returned, but the corresponding <b>Description</b>
     * field may provide more details, and the corresponding <b>GrossDetailAmount</b>
     * field will indicate whether the transaction was a charge or a credit (indicated
     * with a negative dollar value).
     */
    public const VAL_UNKNOWN = 'Unknown';

    /**
     * Constant for 'FeeInsertion' value.
     *
     * This enumeration value indicates that the account entry is an insertion fee for
     * a listing.
     */
    public const VAL_FEE_INSERTION = 'FeeInsertion';

    /**
     * Constant for 'FeeBold' value.
     *
     * This enumeration value indicates that the account entry is a listing upgrade fee
     * for a listing title in boldface font.
     */
    public const VAL_FEE_BOLD = 'FeeBold';

    /**
     * Constant for 'FeeFeatured' value.
     *
     * This enumeration value indicates that the account entry is a listing upgrade fee
     * for featuring the listing on an eBay marketplace's home page.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This feature is no longer available to most marketplaces and sellers.
     *  </span>
     */
    public const VAL_FEE_FEATURED = 'FeeFeatured';

    /**
     * Constant for 'FeeCategoryFeatured' value.
     *
     * This enumeration value indicates that the account entry is a listing upgrade fee
     * for featuring the listing on an eBay category page relevant to the item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This feature is no longer available to most marketplaces and sellers.
     *  </span>
     */
    public const VAL_FEE_CATEGORY_FEATURED = 'FeeCategoryFeatured';

    /**
     * Constant for 'FeeFinalValue' value.
     *
     * This enumeration value indicates that the account entry is a final value fee for
     * a sale on the listing. This fee is charged when a listed item sells, and is a
     * percentage of the final sale price. This fee does not take in account any
     * shipping costs. The final value fee associated with shipping costs is returned
     * in <b>FeeFinalValueShipping</b> entry.
     */
    public const VAL_FEE_FINAL_VALUE = 'FeeFinalValue';

    /**
     * Constant for 'PaymentCheck' value.
     *
     * This enumeration value indicates that the account entry is a payment by check
     * made by a user to eBay.
     */
    public const VAL_PAYMENT_CHECK = 'PaymentCheck';

    /**
     * Constant for 'PaymentCC' value.
     *
     * This enumeration value indicates that the account entry is a payment by credit
     * card made by a user to eBay.
     */
    public const VAL_PAYMENT_CC = 'PaymentCC';

    /**
     * Constant for 'CreditCourtesy' value.
     *
     * This enumeration value indicates that the account entry is a courtesy credit
     * issued by eBay to the user.
     */
    public const VAL_CREDIT_COURTESY = 'CreditCourtesy';

    /**
     * Constant for 'CreditNoSale' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the user due to no sale.
     */
    public const VAL_CREDIT_NO_SALE = 'CreditNoSale';

    /**
     * Constant for 'CreditPartialSale' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the user due to a partial sale.
     */
    public const VAL_CREDIT_PARTIAL_SALE = 'CreditPartialSale';

    /**
     * Constant for 'RefundCC' value.
     *
     * This enumeration value indicates that the account entry is a refund to a user's
     * credit card issued by eBay.
     */
    public const VAL_REFUND_CC = 'RefundCC';

    /**
     * Constant for 'RefundCheck' value.
     *
     * This enumeration value indicates that the account entry is a refund check to a
     * user issued by eBay.
     */
    public const VAL_REFUND_CHECK = 'RefundCheck';

    /**
     * Constant for 'FinanceCharge' value.
     *
     * This enumeration value indicates that the account entry is a finance charge to
     * the user's account. A finance charge may be applicable if the user's monthly
     * invoice balance is not paid in full by the due date.
     */
    public const VAL_FINANCE_CHARGE = 'FinanceCharge';

    /**
     * Constant for 'AWDebit' value.
     *
     * This value is no longer applicable, and should not be returned.
     */
    public const VAL_AWDEBIT = 'AWDebit';

    /**
     * Constant for 'AWCredit' value.
     *
     * This value is no longer applicable, and should not be returned.
     */
    public const VAL_AWCREDIT = 'AWCredit';

    /**
     * Constant for 'AWMemo' value.
     *
     * This value is no longer applicable, and should not be returned.
     */
    public const VAL_AWMEMO = 'AWMemo';

    /**
     * Constant for 'CreditDuplicateListing' value.
     *
     * This enumeration value indicates that the account entry is a credit issued to
     * the seller for any listing fees for a duplicate listing that was removed by
     * eBay.
     */
    public const VAL_CREDIT_DUPLICATE_LISTING = 'CreditDuplicateListing';

    /**
     * Constant for 'FeePartialSale' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for a partial sale.
     */
    public const VAL_FEE_PARTIAL_SALE = 'FeePartialSale';

    /**
     * Constant for 'PaymentElectronicTransferReversal' value.
     *
     * This enumeration value indicates that the account entry is a reversal of an
     * electronic transfer payment.
     */
    public const VAL_PAYMENT_ELECTRONIC_TRANSFER_REVERSAL = 'PaymentElectronicTransferReversal';

    /**
     * Constant for 'PaymentCCOnce' value.
     *
     * This enumeration value indicates that the account entry is a one-time payment
     * made by a credit card.
     */
    public const VAL_PAYMENT_CCONCE = 'PaymentCCOnce';

    /**
     * Constant for 'FeeReturnedCheck' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for a returned check.
     */
    public const VAL_FEE_RETURNED_CHECK = 'FeeReturnedCheck';

    /**
     * Constant for 'FeeRedepositCheck' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * when a check must be redeposited to collect funds.
     */
    public const VAL_FEE_REDEPOSIT_CHECK = 'FeeRedepositCheck';

    /**
     * Constant for 'PaymentCash' value.
     *
     * This enumeration value indicates that the account entry is a cash payment made
     * on the user's account.
     */
    public const VAL_PAYMENT_CASH = 'PaymentCash';

    /**
     * Constant for 'CreditInsertion' value.
     *
     * This enumeration value indicates that the account entry is an insertion fee
     * credit issued by eBay to the seller. If a listed item does not sell or results
     * in an Unpaid Item case/dispute, the seller can relist the item with no
     * additional charge.
     */
    public const VAL_CREDIT_INSERTION = 'CreditInsertion';

    /**
     * Constant for 'CreditBold' value.
     *
     * This enumeration value indicates that the account entry is a credit for a Bold
     * title listing upgrade.
     */
    public const VAL_CREDIT_BOLD = 'CreditBold';

    /**
     * Constant for 'CreditFeatured' value.
     *
     * This enumeration value indicates that the account entry is a credit for a
     * listing upgrade fee for featuring the listing on an eBay marketplace's home
     * page.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This feature is no longer available to most marketplaces and sellers.
     *  </span>
     */
    public const VAL_CREDIT_FEATURED = 'CreditFeatured';

    /**
     * Constant for 'CreditCategoryFeatured' value.
     *
     * This enumeration value indicates that the account entry is a credit for a
     * listing upgrade fee for featuring the listing on an eBay category page relevant
     * to the item.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This feature is no longer available to most marketplaces and sellers.
     *  </span>
     */
    public const VAL_CREDIT_CATEGORY_FEATURED = 'CreditCategoryFeatured';

    /**
     * Constant for 'CreditFinalValue' value.
     *
     * This enumeration value indicates that the account entry is a credit for a final
     * value fee for a sale on the listing. A final value fee may be credited back to a
     * seller's account if the buyer never pays for the line item, or if the buyer
     * cancels the order.
     */
    public const VAL_CREDIT_FINAL_VALUE = 'CreditFinalValue';

    /**
     * Constant for 'FeeNSFCheck' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * when the seller's check does not clear due to insufficient funds.
     */
    public const VAL_FEE_NSFCHECK = 'FeeNSFCheck';

    /**
     * Constant for 'FeeReturnCheckClose' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * when the seller's check does not clear because the account has been closed.
     */
    public const VAL_FEE_RETURN_CHECK_CLOSE = 'FeeReturnCheckClose';

    /**
     * Constant for 'Memo' value.
     *
     * This enumeration value may be returned if the account entry is just a memo/note,
     * or if the account entry cannot be properly classified. The corresponding
     * <b>Description</b> field may provide more details, and the corresponding
     * <b>GrossDetailAmount</b> field will indicate whether the transaction was a
     * charge or a credit (indicate with a negative dollar value).
     */
    public const VAL_MEMO = 'Memo';

    /**
     * Constant for 'PaymentMoneyOrder' value.
     *
     * This enumeration value may be returned if the account entry is a payment made to
     * the account by money order.
     */
    public const VAL_PAYMENT_MONEY_ORDER = 'PaymentMoneyOrder';

    /**
     * Constant for 'CreditCardOnFile' value.
     *
     * This enumeration value may be returned if the account entry is an automatic
     * monthly charge of the seller's invoice amount made by eBay to a credit card the
     * seller has placed on file.
     */
    public const VAL_CREDIT_CARD_ON_FILE = 'CreditCardOnFile';

    /**
     * Constant for 'CreditCardNotOnFile' value.
     *
     * This enumeration value may be returned if the account entry is a one-time
     * payment made with a user's credit card that is not on file with eBay for
     * automatic monthly payments.
     */
    public const VAL_CREDIT_CARD_NOT_ON_FILE = 'CreditCardNotOnFile';

    /**
     * Constant for 'Invoiced' value.
     *
     * This enumeration value indicates that the user has been invoiced.
     */
    public const VAL_INVOICED = 'Invoiced';

    /**
     * Constant for 'InvoicedCreditCard' value.
     *
     * This enumeration value indicates that the user has been invoiced and that the
     * balance will be charged to the credit card on file on the due date.
     */
    public const VAL_INVOICED_CREDIT_CARD = 'InvoicedCreditCard';

    /**
     * Constant for 'CreditTransferFrom' value.
     *
     * This enumeration value may be returned if the account entry is a credit
     * transferred from another account to this account.
     */
    public const VAL_CREDIT_TRANSFER_FROM = 'CreditTransferFrom';

    /**
     * Constant for 'DebitTransferTo' value.
     *
     * This enumeration value indicates that the account entry is a debit transferred
     * from this account to another account.
     */
    public const VAL_DEBIT_TRANSFER_TO = 'DebitTransferTo';

    /**
     * Constant for 'InvoiceCreditBalance' value.
     *
     * This enumeration value indicates that the account entry is a credit balance for
     * an account's invoice period, meaning that the seller should not pay.
     */
    public const VAL_INVOICE_CREDIT_BALANCE = 'InvoiceCreditBalance';

    /**
     * Constant for 'eBayDebit' value.
     *
     * This enumeration value may be returned for debits issued by eBay that are
     * manually applied to the user's account, and not necessarily tied to a specific
     * listing/line item.
     */
    public const VAL_E_BAY_DEBIT = 'eBayDebit';

    /**
     * Constant for 'eBayCredit' value.
     *
     * This enumeration value may be returned for credits issued by eBay that are
     * manually applied to the user's account, and not necessarily tied to a specific
     * listing/line item.
     */
    public const VAL_E_BAY_CREDIT = 'eBayCredit';

    /**
     * Constant for 'PromotionalCredit' value.
     *
     * This enumeration value indicates that the account entry is a promotional credit
     * issued by eBay.
     */
    public const VAL_PROMOTIONAL_CREDIT = 'PromotionalCredit';

    /**
     * Constant for 'CCNotOnFilePerCustReq' value.
     *
     * This enumeration value may be returned as a note that the user's credit card is
     * not with eBay.
     */
    public const VAL_CCNOT_ON_FILE_PER_CUST_REQ = 'CCNotOnFilePerCustReq';

    /**
     * Constant for 'CreditInsertionFee' value.
     *
     * This enumeration value indicates that the account entry is an insertion
     *  fee credit. If a listed item does not sell or results in an Unpaid Item
     * case/dispute, the seller can relist the item with no additional charge.
     */
    public const VAL_CREDIT_INSERTION_FEE = 'CreditInsertionFee';

    /**
     * Constant for 'CCPaymentRejected' value.
     *
     * This enumeration value may be returned as a note if a user's credit card payment
     * is rejected.
     */
    public const VAL_CCPAYMENT_REJECTED = 'CCPaymentRejected';

    /**
     * Constant for 'FeeGiftIcon' value.
     *
     * This enumeration value is no longer applicable and should not be returned since
     * gift services and the gift icon are no longer supported in any eBay
     * marketplaces.
     */
    public const VAL_FEE_GIFT_ICON = 'FeeGiftIcon';

    /**
     * Constant for 'CreditGiftIcon' value.
     *
     * This enumeration value is no longer applicable and should not be returned since
     * gift services and the gift icon are no longer supported in any eBay
     * marketplaces.
     */
    public const VAL_CREDIT_GIFT_ICON = 'CreditGiftIcon';

    /**
     * Constant for 'FeeGallery' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for listing an item in the Picture Gallery. A buyer sees a picture of the item
     * when browsing a category, before moving to the item's listing page.
     */
    public const VAL_FEE_GALLERY = 'FeeGallery';

    /**
     * Constant for 'FeeFeaturedGallery' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for listing an item in the Featured section at the top of the Picture Gallery
     * page.
     */
    public const VAL_FEE_FEATURED_GALLERY = 'FeeFeaturedGallery';

    /**
     * Constant for 'CreditGallery' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay for the Gallery fee charged when the item was listed.
     */
    public const VAL_CREDIT_GALLERY = 'CreditGallery';

    /**
     * Constant for 'CreditFeaturedGallery' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay for the Featured Gallery fee charged when the item was listed.
     */
    public const VAL_CREDIT_FEATURED_GALLERY = 'CreditFeaturedGallery';

    /**
     * Constant for 'ItemMoveFee' value.
     *
     * This enumeration value indicates that the account entry is a fee for moving the
     * item.
     */
    public const VAL_ITEM_MOVE_FEE = 'ItemMoveFee';

    /**
     * Constant for 'OutageCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit that may be
     * issued by eBay when listings are not available due to system downtime. The
     * downtime can be a title search outage or a hard outage.
     */
    public const VAL_OUTAGE_CREDIT = 'OutageCredit';

    /**
     * Constant for 'CreditPSA' value.
     *
     * This enumeration value indicates that the account entry is a credit for a PSA
     * payment.
     */
    public const VAL_CREDIT_PSA = 'CreditPSA';

    /**
     * Constant for 'CreditPCGS' value.
     *
     * This enumeration value indicates that the account entry is a credit for a PCGS
     * fee.
     */
    public const VAL_CREDIT_PCGS = 'CreditPCGS';

    /**
     * Constant for 'FeeReserve' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * when the seller sets a reserve price for an auction listing.
     */
    public const VAL_FEE_RESERVE = 'FeeReserve';

    /**
     * Constant for 'CreditReserve' value.
     *
     * This enumeration value indicates that the account entry is a credit refunded to
     * the seller for a reserve price that was set for an auction listing.
     */
    public const VAL_CREDIT_RESERVE = 'CreditReserve';

    /**
     * Constant for 'eBayVISACredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the user's Visa credit card.
     */
    public const VAL_E_BAY_VISACREDIT = 'eBayVISACredit';

    /**
     * Constant for 'BBAdminCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued
     * administratively.
     */
    public const VAL_BBADMIN_CREDIT = 'BBAdminCredit';

    /**
     * Constant for 'BBAdminDebit' value.
     *
     * This enumeration value indicates that the account entry is a charge issued
     * administratively.
     */
    public const VAL_BBADMIN_DEBIT = 'BBAdminDebit';

    /**
     * Constant for 'ReferrerCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to a Store owner who has promoted items outside of eBay.
     */
    public const VAL_REFERRER_CREDIT = 'ReferrerCredit';

    /**
     * Constant for 'ReferrerDebit' value.
     *
     * This enumeration value indicates that the account entry is a charge issued by
     * eBay to a Store owner who has promoted items outside of eBay.
     */
    public const VAL_REFERRER_DEBIT = 'ReferrerDebit';

    /**
     * Constant for 'SwitchCurrency' value.
     *
     * This enumeration value may be returned as a note about switching from one
     * billing currency to another.
     */
    public const VAL_SWITCH_CURRENCY = 'SwitchCurrency';

    /**
     * Constant for 'PaymentGiftCertificate' value.
     *
     * This enumeration value indicates that the account entry is a payment made to the
     * account by a gift certificate.
     */
    public const VAL_PAYMENT_GIFT_CERTIFICATE = 'PaymentGiftCertificate';

    /**
     * Constant for 'PaymentWireTransfer' value.
     *
     * This enumeration value indicates that the account entry is a payment made to the
     * account by wire transfer.
     */
    public const VAL_PAYMENT_WIRE_TRANSFER = 'PaymentWireTransfer';

    /**
     * Constant for 'PaymentHomeBanking' value.
     *
     * This enumeration value indicates that the account entry is a payment made to the
     * account through home bank.
     */
    public const VAL_PAYMENT_HOME_BANKING = 'PaymentHomeBanking';

    /**
     * Constant for 'PaymentElectronicTransfer' value.
     *
     * This enumeration value indicates that the account entry is a one-time payment
     * made to the account by electronic transfer.
     */
    public const VAL_PAYMENT_ELECTRONIC_TRANSFER = 'PaymentElectronicTransfer';

    /**
     * Constant for 'PaymentAdjustmentCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit made by eBay
     * to the seller's account when a payment needs to be adjusted.
     */
    public const VAL_PAYMENT_ADJUSTMENT_CREDIT = 'PaymentAdjustmentCredit';

    /**
     * Constant for 'PaymentAdjustmentDebit' value.
     *
     * This enumeration value indicates that the account entry is a debit (deduction)
     * made by eBay to the seller's account when a payment needs to be adjusted.
     */
    public const VAL_PAYMENT_ADJUSTMENT_DEBIT = 'PaymentAdjustmentDebit';

    /**
     * Constant for 'Chargeoff' value.
     *
     * This enumeration value indicates that the account entry is an eBay write-off of
     * an account charge.
     */
    public const VAL_CHARGEOFF = 'Chargeoff';

    /**
     * Constant for 'ChargeoffRecovery' value.
     *
     * This enumeration value indicates that the account entry is the recovery of an
     * eBay write-off of an acccount charge.
     */
    public const VAL_CHARGEOFF_RECOVERY = 'ChargeoffRecovery';

    /**
     * Constant for 'ChargeoffBankruptcy' value.
     *
     * This enumeration value indicates that the account entry is an eBay write-off of
     * the account charges by eBay due to the seller declaring bankruptcy.
     */
    public const VAL_CHARGEOFF_BANKRUPTCY = 'ChargeoffBankruptcy';

    /**
     * Constant for 'ChargeoffSuspended' value.
     *
     * This enumeration value may be returned as a note that the eBay write-off of an
     * account charge has been suspended.
     */
    public const VAL_CHARGEOFF_SUSPENDED = 'ChargeoffSuspended';

    /**
     * Constant for 'ChargeoffDeceased' value.
     *
     * This enumeration value indicates that the account entry is an eBay write-off of
     * the account charges by eBay due to the decease of the seller.
     */
    public const VAL_CHARGEOFF_DECEASED = 'ChargeoffDeceased';

    /**
     * Constant for 'ChargeoffOther' value.
     *
     * This enumeration value indicates that the account entry is an eBay write-off of
     * the account charges by eBay due to the decease of the seller.
     */
    public const VAL_CHARGEOFF_OTHER = 'ChargeoffOther';

    /**
     * Constant for 'ChargeoffWacko' value.
     *
     * This enumeration value indicates that the account entry is an eBay write-off of
     * the account charges by eBay due to the wackiness of the seller.
     */
    public const VAL_CHARGEOFF_WACKO = 'ChargeoffWacko';

    /**
     * Constant for 'FinanceChargeReversal' value.
     *
     * This enumeration value indicates that the account entry is a reversal of the
     * finance charge to the user's account. A finance charge may be applicable if the
     * user's monthly invoice balance is not paid in full by the due date.
     */
    public const VAL_FINANCE_CHARGE_REVERSAL = 'FinanceChargeReversal';

    /**
     * Constant for 'FVFCreditReversal' value.
     *
     * This enumeration value indicates that the account entry is a reversal of a Final
     * Value Fee credit, resulting in the fee again being charged to the seller. The
     * Final Value Fee can be credited as a result of an Unpaid Item Dispute, but if
     * the buyer ultimately pays for the line item, the Final Value Fee will apply once
     * again.
     */
    public const VAL_FVFCREDIT_REVERSAL = 'FVFCreditReversal';

    /**
     * Constant for 'ForeignFundsConvert' value.
     *
     * This enumeration value indicates that the account entry is a fee charged for
     * currency conversion.
     */
    public const VAL_FOREIGN_FUNDS_CONVERT = 'ForeignFundsConvert';

    /**
     * Constant for 'ForeignFundsCheckReversal' value.
     *
     * This enumeration value indicates that the account entry is a reversal of a check
     * payment made with foreign funds.
     */
    public const VAL_FOREIGN_FUNDS_CHECK_REVERSAL = 'ForeignFundsCheckReversal';

    /**
     * Constant for 'EOMRestriction' value.
     *
     * This enumeration value may be returned to act as a note that there is an 'End of
     * the Month' restriction for account activity.
     */
    public const VAL_EOMRESTRICTION = 'EOMRestriction';

    /**
     * Constant for 'AllFeesCredit' value.
     *
     * This enumeration value may be returned if eBay is issuing a credit to the seller
     * for multiple listing fees.
     */
    public const VAL_ALL_FEES_CREDIT = 'AllFeesCredit';

    /**
     * Constant for 'SetOnHold' value.
     *
     * This enumeration value may be returned to act as a note that the user's account
     * is on hold.
     */
    public const VAL_SET_ON_HOLD = 'SetOnHold';

    /**
     * Constant for 'RevertUserState' value.
     *
     * This enumeration value may be returned to act as a note to indicate that the
     * state of the user's account has been reverted.
     */
    public const VAL_REVERT_USER_STATE = 'RevertUserState';

    /**
     * Constant for 'DirectDebitOnFile' value.
     *
     * This enumeration value indicates that the account entry is a monthly payment
     * made by automatic direct debit to the seller's checking account, when the
     * account information is on file.
     */
    public const VAL_DIRECT_DEBIT_ON_FILE = 'DirectDebitOnFile';

    /**
     * Constant for 'DirectDebitNotOnFile' value.
     *
     * This enumeration value indicates that the account entry is a one-time payment
     * made by direct debit to the seller's checking account, when the account
     * information is not on file, but is provided for this payment.
     */
    public const VAL_DIRECT_DEBIT_NOT_ON_FILE = 'DirectDebitNotOnFile';

    /**
     * Constant for 'PaymentDirectDebit' value.
     *
     * This enumeration value indicates that the account entry is a payment made by
     * direct debit from the seller's checking account when the seller has requested
     * automatic monthly invoice payments.
     */
    public const VAL_PAYMENT_DIRECT_DEBIT = 'PaymentDirectDebit';

    /**
     * Constant for 'DirectDebitReversal' value.
     *
     * This enumeration value indicates that the account entry is a reversal of a
     * payment made by direct debit from the seller's checking account.
     */
    public const VAL_DIRECT_DEBIT_REVERSAL = 'DirectDebitReversal';

    /**
     * Constant for 'DirectDebitReturnedItem' value.
     *
     * This enumeration value indicates that the account entry is a reversal of a
     * payment made by direct debit from a seller's checking account when an item is
     * returned by the buyer.
     */
    public const VAL_DIRECT_DEBIT_RETURNED_ITEM = 'DirectDebitReturnedItem';

    /**
     * Constant for 'FeeHighlight' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for adding a colored band to emphasize a listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This feature is no longer available to most marketplaces and sellers.
     *  </span>
     */
    public const VAL_FEE_HIGHLIGHT = 'FeeHighlight';

    /**
     * Constant for 'CreditHighlight' value.
     *
     * This enumeration value indicates that the account entry is a credit issued to
     * the seller by eBay for adding a colored band to emphasize a listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This feature is no longer available to most marketplaces and sellers.
     *  </span>
     */
    public const VAL_CREDIT_HIGHLIGHT = 'CreditHighlight';

    /**
     * Constant for 'BulkUserSuspension' value.
     *
     * This enumeration value may be returned to act as a note to indicate that the
     * user's account has been suspended as part of a bulk suspension initiated by
     * eBay.
     */
    public const VAL_BULK_USER_SUSPENSION = 'BulkUserSuspension';

    /**
     * Constant for 'FeeRealEstate30DaysListing' value.
     *
     * This enumeration value indicates that the account entry is a fee charged for a
     * 30-day classified ad listing in a Real Estate category.
     */
    public const VAL_FEE_REAL_ESTATE_30_DAYS_LISTING = 'FeeRealEstate30DaysListing';

    /**
     * Constant for 'CreditRealEstate30DaysListing' value.
     *
     * This enumeration value indicates that the account entry is a credit issue to a
     * seller for a 30-day classified ad listing in a Real Estate category.
     */
    public const VAL_CREDIT_REAL_ESTATE_30_DAYS_LISTING = 'CreditRealEstate30DaysListing';

    /**
     * Constant for 'TradingLimitOverrideOn' value.
     *
     * This enumeration value is only used internally.
     */
    public const VAL_TRADING_LIMIT_OVERRIDE_ON = 'TradingLimitOverrideOn';

    /**
     * Constant for 'TradingLimitOverrideOff' value.
     *
     * This enumeration value is only used internally.
     */
    public const VAL_TRADING_LIMIT_OVERRIDE_OFF = 'TradingLimitOverrideOff';

    /**
     * Constant for 'EquifaxRealtimeFee' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to a
     * seller who did not provide a credit card or checking account number to verify
     * identify.
     */
    public const VAL_EQUIFAX_REALTIME_FEE = 'EquifaxRealtimeFee';

    /**
     * Constant for 'CreditEquifaxRealtimeFee' value.
     *
     * This enumeration value indicates that the account entry is a credit issued to a
     * seller who was charged an Equifax fee.
     */
    public const VAL_CREDIT_EQUIFAX_REALTIME_FEE = 'CreditEquifaxRealtimeFee';

    /**
     * Constant for 'PaymentEquifaxDebit' value.
     *
     * This enumeration value indicates that the account entry is a payment made by the
     * seller for an Equifax fee.
     */
    public const VAL_PAYMENT_EQUIFAX_DEBIT = 'PaymentEquifaxDebit';

    /**
     * Constant for 'PaymentEquifaxCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the seller for a payment made on an Equifax fee.
     */
    public const VAL_PAYMENT_EQUIFAX_CREDIT = 'PaymentEquifaxCredit';

    /**
     * Constant for 'Merged' value.
     *
     * This enumeration value may be returned to act as a note to indicate that the
     * user's two accounts (same owner, but different user IDs) have been merged into
     * one account.
     */
    public const VAL_MERGED = 'Merged';

    /**
     * Constant for 'AutoTraderOn' value.
     *
     * The Auto Trader feature is no longer available for motor vehicle listings.
     */
    public const VAL_AUTO_TRADER_ON = 'AutoTraderOn';

    /**
     * Constant for 'AutoTraderOff' value.
     *
     * The Auto Trader feature is no longer available for motor vehicle listings.
     */
    public const VAL_AUTO_TRADER_OFF = 'AutoTraderOff';

    /**
     * Constant for 'PaperInvoiceOn' value.
     *
     * This enumeration value is no longer applicable as paper invoices are no longer
     * available. Users must download their invoices from My eBay.
     */
    public const VAL_PAPER_INVOICE_ON = 'PaperInvoiceOn';

    /**
     * Constant for 'PaperInvoiceOff' value.
     *
     * This enumeration value is no longer applicable as paper invoices are no longer
     * available. Users must download their invoices from My eBay.
     */
    public const VAL_PAPER_INVOICE_OFF = 'PaperInvoiceOff';

    /**
     * Constant for 'AccountStateSwitch' value.
     *
     * This enumeration value may be returned to act as a note to indicate that there
     * has been a change in the status of the user's account.
     */
    public const VAL_ACCOUNT_STATE_SWITCH = 'AccountStateSwitch';

    /**
     * Constant for 'FVFCreditReversalAutomatic' value.
     *
     * This enumeration value indicates that the account entry is an automatic reversal
     * of a Final Value Fee credit.
     */
    public const VAL_FVFCREDIT_REVERSAL_AUTOMATIC = 'FVFCreditReversalAutomatic';

    /**
     * Constant for 'CreditSoftOutage' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the seller if a title search outage of one hour or longer occurs on the
     * site.
     */
    public const VAL_CREDIT_SOFT_OUTAGE = 'CreditSoftOutage';

    /**
     * Constant for 'LACatalogFee' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LACATALOG_FEE = 'LACatalogFee';

    /**
     * Constant for 'LAExtraItem' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LAEXTRA_ITEM = 'LAExtraItem';

    /**
     * Constant for 'LACatalogItemFeeRefund' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LACATALOG_ITEM_FEE_REFUND = 'LACatalogItemFeeRefund';

    /**
     * Constant for 'LACatalogInsertionRefund' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LACATALOG_INSERTION_REFUND = 'LACatalogInsertionRefund';

    /**
     * Constant for 'LAFinalValueFee' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LAFINAL_VALUE_FEE = 'LAFinalValueFee';

    /**
     * Constant for 'LAFinalValueFeeRefund' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LAFINAL_VALUE_FEE_REFUND = 'LAFinalValueFeeRefund';

    /**
     * Constant for 'LABuyerPremiumPercentageFee' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LABUYER_PREMIUM_PERCENTAGE_FEE = 'LABuyerPremiumPercentageFee';

    /**
     * Constant for 'LABuyerPremiumPercentageFeeRefund' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LABUYER_PREMIUM_PERCENTAGE_FEE_REFUND = 'LABuyerPremiumPercentageFeeRefund';

    /**
     * Constant for 'LAAudioVideoFee' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LAAUDIO_VIDEO_FEE = 'LAAudioVideoFee';

    /**
     * Constant for 'LAAudioVideoFeeRefund' value.
     *
     * This enumeration value is no longer applicable as Live Auction listings are no
     * longer available on any eBay marketplace.
     */
    public const VAL_LAAUDIO_VIDEO_FEE_REFUND = 'LAAudioVideoFeeRefund';

    /**
     * Constant for 'FeeIPIXPhoto' value.
     *
     * This enumeration value is no longer applicable as the iPix photo feature is no
     * longer available on any eBay marketplace.
     */
    public const VAL_FEE_IPIXPHOTO = 'FeeIPIXPhoto';

    /**
     * Constant for 'FeeIPIXSlideShow' value.
     *
     * This enumeration value is no longer applicable as the iPix photo feature is no
     * longer available on any eBay marketplace.
     */
    public const VAL_FEE_IPIXSLIDE_SHOW = 'FeeIPIXSlideShow';

    /**
     * Constant for 'CreditIPIXPhoto' value.
     *
     * This enumeration value is no longer applicable as the iPix photo feature is no
     * longer available on any eBay marketplace.
     */
    public const VAL_CREDIT_IPIXPHOTO = 'CreditIPIXPhoto';

    /**
     * Constant for 'CreditIPIXSlideShow' value.
     *
     * This enumeration value is no longer applicable as the iPix photo feature is no
     * longer available on any eBay marketplace.
     */
    public const VAL_CREDIT_IPIXSLIDE_SHOW = 'CreditIPIXSlideShow';

    /**
     * Constant for 'FeeTenDayAuction' value.
     *
     * A fee charged for listing an item for 10 days,
     *  rather than one, three, five, or seven days.
     */
    public const VAL_FEE_TEN_DAY_AUCTION = 'FeeTenDayAuction';

    /**
     * Constant for 'CreditTenDayAuction' value.
     *
     * This enumeration value indicates that the account entry is a credit issued to a
     * seller for a 10-day auction listing.
     */
    public const VAL_CREDIT_TEN_DAY_AUCTION = 'CreditTenDayAuction';

    /**
     * Constant for 'TemporaryCredit' value.
     *
     * This enumeration value indicates that the account entry is a temporary credit
     * from eBay to the user.
     */
    public const VAL_TEMPORARY_CREDIT = 'TemporaryCredit';

    /**
     * Constant for 'TemporaryCreditReversal' value.
     *
     * This enumeration value indicates that the account entry is the reversal of a
     * temporary credit from eBay to the user.
     */
    public const VAL_TEMPORARY_CREDIT_REVERSAL = 'TemporaryCreditReversal';

    /**
     * Constant for 'SubscriptionAABasic' value.
     *
     * This enumeration value is no longer applicable as the Auction Assistant feature
     * is no longer available on any eBay marketplace.
     */
    public const VAL_SUBSCRIPTION_AABASIC = 'SubscriptionAABasic';

    /**
     * Constant for 'SubscriptionAAPro' value.
     *
     * This enumeration value is no longer applicable as the Auction Assistant feature
     * is no longer available on any eBay marketplace.
     */
    public const VAL_SUBSCRIPTION_AAPRO = 'SubscriptionAAPro';

    /**
     * Constant for 'CreditAABasic' value.
     *
     * This enumeration value is no longer applicable as the Auction Assistant feature
     * is no longer available on any eBay marketplace.
     */
    public const VAL_CREDIT_AABASIC = 'CreditAABasic';

    /**
     * Constant for 'CreditAAPro' value.
     *
     * This enumeration value is no longer applicable as the Auction Assistant feature
     * is no longer available on any eBay marketplace.
     */
    public const VAL_CREDIT_AAPRO = 'CreditAAPro';

    /**
     * Constant for 'FeeLargePicture' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for a super-sized picture in a listing.
     */
    public const VAL_FEE_LARGE_PICTURE = 'FeeLargePicture';

    /**
     * Constant for 'CreditLargePicture' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the seller for a super-sized picture in a listing.
     */
    public const VAL_CREDIT_LARGE_PICTURE = 'CreditLargePicture';

    /**
     * Constant for 'FeePicturePack' value.
     *
     * This enumeration value is no longer applicable as eBay no longer charges a fee
     * for adding photos to listings.
     */
    public const VAL_FEE_PICTURE_PACK = 'FeePicturePack';

    /**
     * Constant for 'CreditPicturePackPartial' value.
     *
     * This enumeration value is no longer applicable as eBay no longer charges a fee
     * for adding photos to listings.
     */
    public const VAL_CREDIT_PICTURE_PACK_PARTIAL = 'CreditPicturePackPartial';

    /**
     * Constant for 'CreditPicturePackFull' value.
     *
     * This enumeration value is no longer applicable as eBay no longer charges a fee
     * for adding photos to listings.
     */
    public const VAL_CREDIT_PICTURE_PACK_FULL = 'CreditPicturePackFull';

    /**
     * Constant for 'SubscriptioneBayStores' value.
     *
     * This enumeration value indicates that the account entry is a monthly
     * subscription fee charged for the user's eBay Store.
     */
    public const VAL_SUBSCRIPTIONE_BAY_STORES = 'SubscriptioneBayStores';

    /**
     * Constant for 'CrediteBayStores' value.
     *
     * This enumeration value indicates that the account entry is a credit toward the
     * user's eBay Store subscription fee.
     */
    public const VAL_CREDITE_BAY_STORES = 'CrediteBayStores';

    /**
     * Constant for 'FeeInsertionFixedPrice' value.
     *
     * This enumeration value indicates that the account entry is an insertion fee for
     * a fixed-price listing.
     */
    public const VAL_FEE_INSERTION_FIXED_PRICE = 'FeeInsertionFixedPrice';

    /**
     * Constant for 'CreditInsertionFixedPrice' value.
     *
     * This enumeration value indicates that the account entry is an insertion
     *  fee credit for a fixed-price listing. If a listed item does not sell or results
     * in an Unpaid Item case/dispute, the seller can relist the item with no
     * additional charge.
     */
    public const VAL_CREDIT_INSERTION_FIXED_PRICE = 'CreditInsertionFixedPrice';

    /**
     * Constant for 'FeeFinalValueFixedPrice' value.
     *
     * This enumeration value indicates that the account entry is a final value fee for
     * a sale on the fixed-price listing. This fee is charged when a listed item sells,
     * and is a percentage of the final sale price.
     */
    public const VAL_FEE_FINAL_VALUE_FIXED_PRICE = 'FeeFinalValueFixedPrice';

    /**
     * Constant for 'CreditFinalValueFixedPrice' value.
     *
     * This enumeration value indicates that the account entry is a credit for a final
     * value fee for a sale on the fixed-price listing. A final value fee may be
     * credited back to a seller's account if the buyer never pays for the line item,
     * or if the buyer cancels the order.
     */
    public const VAL_CREDIT_FINAL_VALUE_FIXED_PRICE = 'CreditFinalValueFixedPrice';

    /**
     * Constant for 'ElectronicInvoiceOn' value.
     *
     * This enumeration value is no longer applicable since paper invoices are no
     * longer available, so electronic invoices are the only option. Users must
     * download their invoices from My eBay.
     */
    public const VAL_ELECTRONIC_INVOICE_ON = 'ElectronicInvoiceOn';

    /**
     * Constant for 'ElectronicInvoiceOff' value.
     *
     * This enumeration value is no longer applicable since paper invoices are no
     * longer available, so electronic invoices are the only option. Users must
     * download their invoices from My eBay.
     */
    public const VAL_ELECTRONIC_INVOICE_OFF = 'ElectronicInvoiceOff';

    /**
     * Constant for 'FlagDDDDPending' value.
     *
     * This enumeration value acts as a note to indicate that a direct debit payment is
     * pending.
     */
    public const VAL_FLAG_DDDDPENDING = 'FlagDDDDPending';

    /**
     * Constant for 'FlagDDPaymentConfirmed' value.
     *
     * This enumeration value acts as a note to indicate that a direct debit payment is
     * confirmed.
     */
    public const VAL_FLAG_DDPAYMENT_CONFIRMED = 'FlagDDPaymentConfirmed';

    /**
     * Constant for 'FixedPriceDurationFee' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for creating a fixed-price listing with a 10-day duration.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This charge may only be applicable to motor vehicle listings on eBay Motors,
     * eBay Canada (English and French versions), eBay UK, and eBay Italy. For all
     * non-motor vehicle categories, the only available listing duration is 'GTC', or
     * 'Good 'til Cancelled'.
     *  </span>
     */
    public const VAL_FIXED_PRICE_DURATION_FEE = 'FixedPriceDurationFee';

    /**
     * Constant for 'FixedPriceDurationCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the seller for creating a fixed-price listing with a 10-day duration.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The 10-day duration fee is only applicable to motor vehicle listings on eBay
     * Motors, eBay Canada (English and French versions), eBay UK, and eBay Italy. For
     * all non-motor vehicle categories, the only available listing duration is 'GTC',
     * or 'Good 'til Cancelled'.
     *  </span>
     */
    public const VAL_FIXED_PRICE_DURATION_CREDIT = 'FixedPriceDurationCredit';

    /**
     * Constant for 'BuyItNowFee' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * if the seller uses the 'Buy It Now' feature on an auction listing.
     */
    public const VAL_BUY_IT_NOW_FEE = 'BuyItNowFee';

    /**
     * Constant for 'BuyItNowCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay if the seller uses the 'Buy It Now' feature on an auction listing.
     */
    public const VAL_BUY_IT_NOW_CREDIT = 'BuyItNowCredit';

    /**
     * Constant for 'FeeSchedule' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * if the seller uses the scheduled listing feature for a listing. With scheduled
     * listings, the seller schedules a listing to start at some later time (up to 3
     * weeks after) instead of immediately.
     */
    public const VAL_FEE_SCHEDULE = 'FeeSchedule';

    /**
     * Constant for 'CreditSchedule' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the seller if the seller needs to be refunded for a scheduled listing.
     * With scheduled listings, the seller schedules a listing to start at some later
     * time (up to 3 weeks after) instead of immediately.
     */
    public const VAL_CREDIT_SCHEDULE = 'CreditSchedule';

    /**
     * Constant for 'SubscriptionSMBasic' value.
     *
     * This enumeration value indicates that the account entry is the monthly
     * subscription fee charged for the basic version of Selling Manager. For most eBay
     * marketplaces and sellers, there is no subscription charge to use the basic
     * version of Selling Manager.
     */
    public const VAL_SUBSCRIPTION_SMBASIC = 'SubscriptionSMBasic';

    /**
     * Constant for 'SubscriptionSMBasicPro' value.
     *
     * This enumeration value indicates that the account entry is the monthly
     * subscription fee charged for using the Selling Manager Pro product.
     */
    public const VAL_SUBSCRIPTION_SMBASIC_PRO = 'SubscriptionSMBasicPro';

    /**
     * Constant for 'CreditSMBasic' value.
     *
     * This enumeration value indicates that the account entry is a credit for the
     * monthly subscription fee charged for the basic version of Selling Manager. For
     * most eBay marketplaces and sellers, there is no subscription charge to use the
     * basic version of Selling Manager.
     */
    public const VAL_CREDIT_SMBASIC = 'CreditSMBasic';

    /**
     * Constant for 'CreditSMBasicPro' value.
     *
     * This enumeration value indicates that the account entry is a credit for the
     * monthly subscription fee charged for using the Selling Manager Pro product.
     */
    public const VAL_CREDIT_SMBASIC_PRO = 'CreditSMBasicPro';

    /**
     * Constant for 'StoresGTCFee' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller when a 'Good 'til Cancelled', fixed-price listing automatically renews
     * after 30 days (as long as inventory is still available). This fee is similar to
     * an insertion fee when a listing is first created. 'GTC' listings automatically
     * renew every 30 days, and these renewed listings may incur insertion fees unless
     * the seller has 'zero insertion fee' credits. eBay sellers with stores get more
     * 'zero insertion fee' credits than other sellers.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified
     * from every 30 days to once per calendar month. For example, if a GTC listing is
     * created July 5, the next monthly renewal date will be August 5. If a GTC listing
     * is created on the 31st of the month, but the following month only has 30 days,
     * the renewal will happen on the 30th in the following month. Finally, if a GTC
     * listing is created on January 29-31, the renewal will happen on February 28th
     * (or 29th during a 'Leap Year'). See the
     *  <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled"
     * target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019
     * Seller Updates</b> for more information about this change.
     *  </span>
     */
    public const VAL_STORES_GTCFEE = 'StoresGTCFee';

    /**
     * Constant for 'StoresGTCCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to refund the seller for a 'Good 'til Cancelled' listing renewal/insertion
     * fee. 'GTC' listings automatically renew every 30 days, and these renewed
     * listings may incur insertion fees unless the seller has 'zero insertion fee'
     * credits. eBay sellers with stores get more 'zero insertion fee' credits than
     * other sellers.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  As of July 1, 2019, the Good 'Til Cancelled renewal schedule has been modified
     * from every 30 days to once per calendar month. For example, if a GTC listing is
     * created July 5, the next monthly renewal date will be August 5. If a GTC listing
     * is created on the 31st of the month, but the following month only has 30 days,
     * the renewal will happen on the 30th in the following month. Finally, if a GTC
     * listing is created on January 29-31, the renewal will happen on February 28th
     * (or 29th during a 'Leap Year'). See the
     *  <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled"
     * target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019
     * Seller Updates</b> for more information about this change.
     *  </span>
     */
    public const VAL_STORES_GTCCREDIT = 'StoresGTCCredit';

    /**
     * Constant for 'ListingDesignerFee' value.
     *
     * This enumeration value indicates that the account entry is a fee for the seller
     * using a Listing Designer theme and layout template for a listing.
     */
    public const VAL_LISTING_DESIGNER_FEE = 'ListingDesignerFee';

    /**
     * Constant for 'ListingDesignerCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to refund the seller using a Listing Designer theme and layout template for
     * a listing.
     */
    public const VAL_LISTING_DESIGNER_CREDIT = 'ListingDesignerCredit';

    /**
     * Constant for 'ExtendedAuctionFee' value.
     *
     * This enumeration value is no longer applicable as there is no additional fee
     * charged to the seller for creating a 10-day auction listing.
     */
    public const VAL_EXTENDED_AUCTION_FEE = 'ExtendedAuctionFee';

    /**
     * Constant for 'ExtendedAcutionCredit' value.
     *
     * This enumeration value is no longer applicable as there is no additional fee
     * charged to the seller for creating a 10-day auction listing.
     */
    public const VAL_EXTENDED_ACUTION_CREDIT = 'ExtendedAcutionCredit';

    /**
     * Constant for 'PayPalOTPSucc' value.
     *
     * This enumeration value is only for internal use, and indicates that the login
     * attempt to PayPal using OTP ('One-Time Pin' or two-factor authentication) was
     * successful.
     */
    public const VAL_PAY_PAL_OTPSUCC = 'PayPalOTPSucc';

    /**
     * Constant for 'PayPalOTPPend' value.
     *
     * This enumeration value is only for internal use, and indicates that the login
     * attempt to PayPal using OTP ('One-Time Pin' or two-factor authentication) is
     * pending.
     */
    public const VAL_PAY_PAL_OTPPEND = 'PayPalOTPPend';

    /**
     * Constant for 'PayPalFailed' value.
     *
     * This enumeration value is only for internal use, and indicates that the login
     * attempt to PayPal failed.
     */
    public const VAL_PAY_PAL_FAILED = 'PayPalFailed';

    /**
     * Constant for 'PayPalChargeBack' value.
     *
     * This enumeration value indicates that the account entry is a charge back using
     * PayPal as the payment method.
     */
    public const VAL_PAY_PAL_CHARGE_BACK = 'PayPalChargeBack';

    /**
     * Constant for 'ChargeBack' value.
     *
     * This enumeration value indicates that the account entry is a charge back.
     */
    public const VAL_CHARGE_BACK = 'ChargeBack';

    /**
     * Constant for 'ChargeBackReversal' value.
     *
     * This enumeration value indicates that the account entry is the reversal of a
     * charge back.
     */
    public const VAL_CHARGE_BACK_REVERSAL = 'ChargeBackReversal';

    /**
     * Constant for 'PayPalRefund' value.
     *
     * This enumeration value indicates that the account entry is a refund using PayPal
     * as the payment method.
     */
    public const VAL_PAY_PAL_REFUND = 'PayPalRefund';

    /**
     * Constant for 'BonusPointsAddition' value.
     *
     * This enumeration value is no longer applicable as the 'Anything Points' program
     * is no longer available.
     */
    public const VAL_BONUS_POINTS_ADDITION = 'BonusPointsAddition';

    /**
     * Constant for 'BonusPointsReduction' value.
     *
     * This enumeration value is no longer applicable as the 'Anything Points' program
     * is no longer available.
     */
    public const VAL_BONUS_POINTS_REDUCTION = 'BonusPointsReduction';

    /**
     * Constant for 'BonusPointsPaymentAutomatic' value.
     *
     * This enumeration value is no longer applicable as the 'Anything Points' program
     * is no longer available.
     */
    public const VAL_BONUS_POINTS_PAYMENT_AUTOMATIC = 'BonusPointsPaymentAutomatic';

    /**
     * Constant for 'BonusPointsPaymentManual' value.
     *
     * This enumeration value is no longer applicable as the 'Anything Points' program
     * is no longer available.
     */
    public const VAL_BONUS_POINTS_PAYMENT_MANUAL = 'BonusPointsPaymentManual';

    /**
     * Constant for 'BonusPointsPaymentReversal' value.
     *
     * This enumeration value is no longer applicable as the 'Anything Points' program
     * is no longer available.
     */
    public const VAL_BONUS_POINTS_PAYMENT_REVERSAL = 'BonusPointsPaymentReversal';

    /**
     * Constant for 'BonusPointsCashPayout' value.
     *
     * This enumeration value is no longer applicable as the 'Anything Points' program
     * is no longer available.
     */
    public const VAL_BONUS_POINTS_CASH_PAYOUT = 'BonusPointsCashPayout';

    /**
     * Constant for 'VATCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit to the
     * seller's account for Value-Added Tax (VAT) previously paid by the seller.
     */
    public const VAL_VATCREDIT = 'VATCredit';

    /**
     * Constant for 'VATDebit' value.
     *
     * This enumeration value indicates that the account entry is a debit to the
     * seller's account for a Value-Added Tax (VAT) charge.
     */
    public const VAL_VATDEBIT = 'VATDebit';

    /**
     * Constant for 'VATStatusChangePending' value.
     *
     * This enumeration value acts as a note to indicate that a VAT status change to
     * the seller's account is pending.
     */
    public const VAL_VATSTATUS_CHANGE_PENDING = 'VATStatusChangePending';

    /**
     * Constant for 'VATStatusChangeApproved' value.
     *
     * This enumeration value acts as a note to indicate that a VAT status change to
     * the seller's account is approved.
     */
    public const VAL_VATSTATUS_CHANGE_APPROVED = 'VATStatusChangeApproved';

    /**
     * Constant for 'VATStatusChange_Denied' value.
     *
     * This enumeration value acts as a note to indicate that a VAT status change to
     * the seller's account was denied.
     */
    public const VAL_VATSTATUS_CHANGE__DENIED = 'VATStatusChange_Denied';

    /**
     * Constant for 'VATStatusDeletedByCSR' value.
     *
     * This enumeration value acts as a note to indicate that a VAT status change to
     * the seller's account was cancelled by an eBay customer support representative.
     */
    public const VAL_VATSTATUS_DELETED_BY_CSR = 'VATStatusDeletedByCSR';

    /**
     * Constant for 'VATStatusDeletedByUser' value.
     *
     * This enumeration value acts as a note to indicate that a VAT status change to
     * the seller's account was cancelled by the user.
     */
    public const VAL_VATSTATUS_DELETED_BY_USER = 'VATStatusDeletedByUser';

    /**
     * Constant for 'SMProListingDesignerFee' value.
     *
     * This enumeration value indicates that the account entry is a fee for the seller
     * using a Listing Designer theme and layout template through the Selling Manager
     * Pro UI, or through a Selling Manager Pro API call.
     */
    public const VAL_SMPRO_LISTING_DESIGNER_FEE = 'SMProListingDesignerFee';

    /**
     * Constant for 'SMProListingDesignerCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the seller for a fee that was charged to the seller for using a Listing
     * Designer theme and layout template through the Selling Manager Pro UI, or
     * through a Selling Manager Pro API call.
     */
    public const VAL_SMPRO_LISTING_DESIGNER_CREDIT = 'SMProListingDesignerCredit';

    /**
     * Constant for 'StoresSuccessfulListingFee' value.
     *
     * This enumeration value is no longer applicable as <code>StoresFixedPrice</code>
     * is no longer a valid listing type.
     */
    public const VAL_STORES_SUCCESSFUL_LISTING_FEE = 'StoresSuccessfulListingFee';

    /**
     * Constant for 'StoresSuccessfulListingFeeCredit' value.
     *
     * This enumeration value is no longer applicable as <code>StoresFixedPrice</code>
     * is no longer a valid listing type.
     */
    public const VAL_STORES_SUCCESSFUL_LISTING_FEE_CREDIT = 'StoresSuccessfulListingFeeCredit';

    /**
     * Constant for 'StoresReferralFee' value.
     *
     * This enumeration value is no longer applicable as there is no longer a referral
     * fee charged to sellers when buyers are routed to their store through printed
     * materials or emails.
     */
    public const VAL_STORES_REFERRAL_FEE = 'StoresReferralFee';

    /**
     * Constant for 'StoresReferralCredit' value.
     *
     * This enumeration value is no longer applicable as there is no longer a referral
     * fee charged to sellers when buyers are routed to their store through printed
     * materials or emails.
     */
    public const VAL_STORES_REFERRAL_CREDIT = 'StoresReferralCredit';

    /**
     * Constant for 'SubtitleFee' value.
     *
     * This enumeration value indicates the account entry is a fee charged to the
     * seller for adding a subtitle to a listing. Subtitles allow sellers to provide
     * more keywords and/or descriptive information, and may increase buyers' interest.
     */
    public const VAL_SUBTITLE_FEE = 'SubtitleFee';

    /**
     * Constant for 'SubtitleFeeCredit' value.
     *
     * This enumeration value indicates the account entry is a credit issued from eBay
     * to compensate the seller for a subtitle fee charged to their account.
     */
    public const VAL_SUBTITLE_FEE_CREDIT = 'SubtitleFeeCredit';

    /**
     * Constant for 'eBayStoreInventorySubscriptionCredit' value.
     *
     * This enumeration value is no longer applicable as <code>StoresFixedPrice</code>
     * is no longer a valid listing type.
     */
    public const VAL_E_BAY_STORE_INVENTORY_SUBSCRIPTION_CREDIT = 'eBayStoreInventorySubscriptionCredit';

    /**
     * Constant for 'AutoPmntReqExempt' value.
     *
     * This enumeration value is no longer applicable.
     */
    public const VAL_AUTO_PMNT_REQ_EXEMPT = 'AutoPmntReqExempt';

    /**
     * Constant for 'AutoPmntReqRein' value.
     *
     * This enumeration value is no longer applicable.
     */
    public const VAL_AUTO_PMNT_REQ_REIN = 'AutoPmntReqRein';

    /**
     * Constant for 'PictureManagerSubscriptionFee' value.
     *
     * This enumeration value is no longer applicable as the Picture Manager feature is
     * no longer available.
     */
    public const VAL_PICTURE_MANAGER_SUBSCRIPTION_FEE = 'PictureManagerSubscriptionFee';

    /**
     * Constant for 'PictureManagerSubscriptionFeeCredit' value.
     *
     * This enumeration value is no longer applicable as the Picture Manager feature is
     * no longer available.
     */
    public const VAL_PICTURE_MANAGER_SUBSCRIPTION_FEE_CREDIT = 'PictureManagerSubscriptionFeeCredit';

    /**
     * Constant for 'SellerReportsBasicFee' value.
     *
     * This enumeration value is no longer applicable as the Seller Reports feature is
     * no longer available.
     */
    public const VAL_SELLER_REPORTS_BASIC_FEE = 'SellerReportsBasicFee';

    /**
     * Constant for 'SellerReportsBasicCredit' value.
     *
     * This enumeration value is no longer applicable as the Seller Reports feature is
     * no longer available.
     */
    public const VAL_SELLER_REPORTS_BASIC_CREDIT = 'SellerReportsBasicCredit';

    /**
     * Constant for 'SellerReportsPlusFee' value.
     *
     * This enumeration value is no longer applicable as the Seller Reports feature is
     * no longer available.
     */
    public const VAL_SELLER_REPORTS_PLUS_FEE = 'SellerReportsPlusFee';

    /**
     * Constant for 'SellerReportsPlusCredit' value.
     *
     * This enumeration value is no longer applicable as the Seller Reports feature is
     * no longer available.
     */
    public const VAL_SELLER_REPORTS_PLUS_CREDIT = 'SellerReportsPlusCredit';

    /**
     * Constant for 'PaypalOnFile' value.
     *
     * This enumeration value acts as a note to indicate that the user's PayPal account
     * information is linked with their eBay account.
     */
    public const VAL_PAYPAL_ON_FILE = 'PaypalOnFile';

    /**
     * Constant for 'PaypalOnFileByCSR' value.
     *
     * This enumeration value acts as a note to indicate that the user's PayPal account
     * information was linked with their eBay account by an eBay customer support
     * represenative.
     */
    public const VAL_PAYPAL_ON_FILE_BY_CSR = 'PaypalOnFileByCSR';

    /**
     * Constant for 'PaypalOffFile' value.
     *
     * This enumeration value acts as a note to indicate that the user's PayPal account
     * information is not linked with their eBay account.
     */
    public const VAL_PAYPAL_OFF_FILE = 'PaypalOffFile';

    /**
     * Constant for 'BorderFee' value.
     *
     * This enumeration value is no longer applicable as borders around listing photos
     * are no longer supported on any eBay marketplace.
     */
    public const VAL_BORDER_FEE = 'BorderFee';

    /**
     * Constant for 'BorderFeeCredit' value.
     *
     * This enumeration value is no longer applicable as borders around listing photos
     * are no longer supported on any eBay marketplace.
     */
    public const VAL_BORDER_FEE_CREDIT = 'BorderFeeCredit';

    /**
     * Constant for 'FeeSearchableMobileDE' value.
     *
     * This enumeration value is no longer applicable since placing eBay Germany motor
     * vehicle listings on the mobile.de site is no longer supported.
     */
    public const VAL_FEE_SEARCHABLE_MOBILE_DE = 'FeeSearchableMobileDE';

    /**
     * Constant for 'SalesReportsPlusFee' value.
     *
     * This enumeration value indicates the account entry is a monthly subscription fee
     * charged for Sales Reports Plus.
     */
    public const VAL_SALES_REPORTS_PLUS_FEE = 'SalesReportsPlusFee';

    /**
     * Constant for 'SalesReportsPlusCredit' value.
     *
     * This enumeration value indicates the account entry is a credit to the seller
     * applied towards the monthly subscription fee charged for Sales Reports Plus.
     */
    public const VAL_SALES_REPORTS_PLUS_CREDIT = 'SalesReportsPlusCredit';

    /**
     * Constant for 'CreditSearchableMobileDE' value.
     *
     * This enumeration value is no longer applicable since placing eBay Germany motor
     * vehicle listings on the mobile.de site is no longer supported.
     */
    public const VAL_CREDIT_SEARCHABLE_MOBILE_DE = 'CreditSearchableMobileDE';

    /**
     * Constant for 'EmailMarketingFee' value.
     *
     * This enumeration value is no longer applicable since this eBay Stores marketing
     * feature is no longer supported.
     */
    public const VAL_EMAIL_MARKETING_FEE = 'EmailMarketingFee';

    /**
     * Constant for 'EmailMarketingCredit' value.
     *
     * This enumeration value is no longer applicable since this eBay Stores marketing
     * feature is no longer supported.
     */
    public const VAL_EMAIL_MARKETING_CREDIT = 'EmailMarketingCredit';

    /**
     * Constant for 'FeePictureShow' value.
     *
     * This enumeration value is no longer applicable since the picture slide show
     * feature is no longer available.
     */
    public const VAL_FEE_PICTURE_SHOW = 'FeePictureShow';

    /**
     * Constant for 'CreditPictureShow' value.
     *
     * This enumeration value is no longer applicable since the picture slide show
     * feature is no longer available.
     */
    public const VAL_CREDIT_PICTURE_SHOW = 'CreditPictureShow';

    /**
     * Constant for 'ProPackBundleFee' value.
     *
     * This enumeration value indicates the account entry is a fee charged to the
     * seller for using the Pro Pack Bundle feature pack (currently available to US and
     * Canada eBay motor vehicle sellers).
     */
    public const VAL_PRO_PACK_BUNDLE_FEE = 'ProPackBundleFee';

    /**
     * Constant for 'ProPackBundleFeeCredit' value.
     *
     * This enumeration value indicates the account entry is a credit towards the fee
     * charged to the seller for using the Pro Pack Bundle feature pack (currently
     * available to US and Canada eBay motor vehicle sellers).
     */
    public const VAL_PRO_PACK_BUNDLE_FEE_CREDIT = 'ProPackBundleFeeCredit';

    /**
     * Constant for 'BasicUpgradePackBundleFee' value.
     *
     * This enumeration value is no longer applicable since this bundle pack is no
     * longer available on any eBay marketplaces.
     */
    public const VAL_BASIC_UPGRADE_PACK_BUNDLE_FEE = 'BasicUpgradePackBundleFee';

    /**
     * Constant for 'BasicUpgradePackBundleFeeCredit' value.
     *
     * This enumeration value is no longer applicable since this bundle pack is no
     * longer available on any eBay marketplaces.
     */
    public const VAL_BASIC_UPGRADE_PACK_BUNDLE_FEE_CREDIT = 'BasicUpgradePackBundleFeeCredit';

    /**
     * Constant for 'ValuePackBundleFee' value.
     *
     * This enumeration value indicates the account entry is a fee charged by eBay to
     * the seller for using the Value Pack Bundle feature pack.
     */
    public const VAL_VALUE_PACK_BUNDLE_FEE = 'ValuePackBundleFee';

    /**
     * Constant for 'ValuePackBundleFeeCredit' value.
     *
     * This enumeration value indicates the account entry is a credit towards the fee
     * charged to the seller for using the Value Pack Bundle feature pack.
     */
    public const VAL_VALUE_PACK_BUNDLE_FEE_CREDIT = 'ValuePackBundleFeeCredit';

    /**
     * Constant for 'ProPackPlusBundleFee' value.
     *
     * This enumeration value indicates the account entry is a fee charged by eBay to
     * the seller for using the Pro Pack Plus Bundle feature pack.
     */
    public const VAL_PRO_PACK_PLUS_BUNDLE_FEE = 'ProPackPlusBundleFee';

    /**
     * Constant for 'ProPackPlusBundleFeeCredit' value.
     *
     * This enumeration value indicates the account entry is a credit towards the fee
     * charged by eBay to the seller for using the Pro Pack Plus Bundle feature pack.
     */
    public const VAL_PRO_PACK_PLUS_BUNDLE_FEE_CREDIT = 'ProPackPlusBundleFeeCredit';

    /**
     * Constant for 'FinalEntry' value.
     *
     * This enumeration value indicates the account entry is the final entry in a
     * user's account before it is closed or merged with another account.
     */
    public const VAL_FINAL_ENTRY = 'FinalEntry';

    /**
     * Constant for 'CustomCode' value.
     *
     * This enumeration value is Reserved for future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'ExtendedDurationFee' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller for using an extended listing duration.
     */
    public const VAL_EXTENDED_DURATION_FEE = 'ExtendedDurationFee';

    /**
     * Constant for 'ExtendedDurationFeeCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * fee charged to the seller for using an extended listing duration.
     */
    public const VAL_EXTENDED_DURATION_FEE_CREDIT = 'ExtendedDurationFeeCredit';

    /**
     * Constant for 'InternationalListingFee' value.
     *
     * This enumeration value indicates that the account entry is a 'cross-border
     * trade' fee, where the seller pays an additional listing fee to have his/her
     * listing surface in the search on another eBay marketplace.
     */
    public const VAL_INTERNATIONAL_LISTING_FEE = 'InternationalListingFee';

    /**
     * Constant for 'InternationalListingCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * 'cross-border trade' fee, where the seller pays an additional listing fee to
     * have his/her listing surface in the search on another eBay marketplace.
     */
    public const VAL_INTERNATIONAL_LISTING_CREDIT = 'InternationalListingCredit';

    /**
     * Constant for 'MarketplaceResearchExpiredSubscriptionFee' value.
     *
     * This enumeration value indicates that the account entry is a fee for an expired
     * Terapeak Research subscription.
     */
    public const VAL_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE = 'MarketplaceResearchExpiredSubscriptionFee';

    /**
     * Constant for 'MarketplaceResearchExpiredSubscriptionFeeCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * fee for an expired Terapeak Research subscription.
     */
    public const VAL_MARKETPLACE_RESEARCH_EXPIRED_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchExpiredSubscriptionFeeCredit';

    /**
     * Constant for 'MarketplaceResearchBasicSubscriptionFee' value.
     *
     * This enumeration value indicates that the account entry is a fee for a Terapeak
     * Research basic subscription.
     */
    public const VAL_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE = 'MarketplaceResearchBasicSubscriptionFee';

    /**
     * Constant for 'MarketplaceResearchBasicSubscriptionFeeCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * fee for a Terapeak Research basic subscription.
     */
    public const VAL_MARKETPLACE_RESEARCH_BASIC_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchBasicSubscriptionFeeCredit';

    /**
     * Constant for 'MarketplaceResearchProSubscriptionFee' value.
     *
     * This enumeration value indicates that the account entry is a fee for a Terapeak
     * Research pro subscription.
     */
    public const VAL_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE = 'MarketplaceResearchProSubscriptionFee';

    /**
     * Constant for 'BasicBundleFee' value.
     *
     * This enumeration value is no longer applicable since a basic bundle pack is no
     * longer available on any eBay marketplace.
     */
    public const VAL_BASIC_BUNDLE_FEE = 'BasicBundleFee';

    /**
     * Constant for 'BasicBundleFeeCredit' value.
     *
     * This enumeration value is no longer applicable since a basic bundle pack is no
     * longer available on any eBay marketplace.
     */
    public const VAL_BASIC_BUNDLE_FEE_CREDIT = 'BasicBundleFeeCredit';

    /**
     * Constant for 'MarketplaceResearchProSubscriptionFeeCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * fee for a Terapeak Research pro subscription.
     */
    public const VAL_MARKETPLACE_RESEARCH_PRO_SUBSCRIPTION_FEE_CREDIT = 'MarketplaceResearchProSubscriptionFeeCredit';

    /**
     * Constant for 'VehicleLocalSubscriptionFee' value.
     *
     * This enumeration value is no longer applicable as there are no longer any
     * subscription fees to sell motor vehicles through Motors local listings.
     */
    public const VAL_VEHICLE_LOCAL_SUBSCRIPTION_FEE = 'VehicleLocalSubscriptionFee';

    /**
     * Constant for 'VehicleLocalSubscriptionFeeCredit' value.
     *
     * This enumeration value is no longer applicable as there are no longer any
     * subscription fees to sell motor vehicles through Motors local listings.
     */
    public const VAL_VEHICLE_LOCAL_SUBSCRIPTION_FEE_CREDIT = 'VehicleLocalSubscriptionFeeCredit';

    /**
     * Constant for 'VehicleLocalInsertionFee' value.
     *
     * This enumeration value indicates that the account entry is an insertion fee for
     * a Motors local listing.
     */
    public const VAL_VEHICLE_LOCAL_INSERTION_FEE = 'VehicleLocalInsertionFee';

    /**
     * Constant for 'VehicleLocalInsertionFeeCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit towards an
     * insertion fee for a Motors local listing.
     */
    public const VAL_VEHICLE_LOCAL_INSERTION_FEE_CREDIT = 'VehicleLocalInsertionFeeCredit';

    /**
     * Constant for 'VehicleLocalFinalValueFee' value.
     *
     * This enumeration value indicates that the account entry is a final value fee for
     * the sale of a motor vehicle through a Motors local listing.
     */
    public const VAL_VEHICLE_LOCAL_FINAL_VALUE_FEE = 'VehicleLocalFinalValueFee';

    /**
     * Constant for 'VehicleLocalFinalValueFeeCredit' value.
     *
     * This enumeration value indicates that the account entry is credit towards a
     * final value fee for the sale of a motor vehicle through a Motors local listing.
     */
    public const VAL_VEHICLE_LOCAL_FINAL_VALUE_FEE_CREDIT = 'VehicleLocalFinalValueFeeCredit';

    /**
     * Constant for 'VehicleLocalGTCFee' value.
     *
     * This enumeration value indicates that the account entry is a 30-day duration
     * listing fee for a Motors local listing.
     */
    public const VAL_VEHICLE_LOCAL_GTCFEE = 'VehicleLocalGTCFee';

    /**
     * Constant for 'VehicleLocalGTCFeeCredit' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * 30-day duration listing fee for a Motors local listing.
     */
    public const VAL_VEHICLE_LOCAL_GTCFEE_CREDIT = 'VehicleLocalGTCFeeCredit';

    /**
     * Constant for 'eBayMotorsProFee' value.
     *
     * This enumeration value indicates that the account entry is an eBay Motors Pro
     * fee. Applies to eBay Motors Pro registered dealers only.
     */
    public const VAL_E_BAY_MOTORS_PRO_FEE = 'eBayMotorsProFee';

    /**
     * Constant for 'CrediteBayMotorsProFee' value.
     *
     * This enumeration value indicates that the account entry is a credit towards an
     * eBay Motors Pro fee. Applies to eBay Motors Pro registered dealers only.
     */
    public const VAL_CREDITE_BAY_MOTORS_PRO_FEE = 'CrediteBayMotorsProFee';

    /**
     * Constant for 'eBayMotorsProFeatureFee' value.
     *
     * This enumeration value indicates that the account entry is an eBay Motors Pro
     * fee for a Feature pack. Applies to eBay Motors Pro registered dealers only.
     */
    public const VAL_E_BAY_MOTORS_PRO_FEATURE_FEE = 'eBayMotorsProFeatureFee';

    /**
     * Constant for 'CrediteBayMotorsProFeatureFee' value.
     *
     * This enumeration value indicates that the account entry is a credit towards an
     * eBay Motors Pro fee for a Feature pack. Applies to eBay Motors Pro registered
     * dealers only.
     */
    public const VAL_CREDITE_BAY_MOTORS_PRO_FEATURE_FEE = 'CrediteBayMotorsProFeatureFee';

    /**
     * Constant for 'FeeGalleryPlus' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * for listing an item with the Gallery Plus feature.
     */
    public const VAL_FEE_GALLERY_PLUS = 'FeeGalleryPlus';

    /**
     * Constant for 'CreditGalleryPlus' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * fee charged by eBay for listing an item with the Gallery Plus feature.
     */
    public const VAL_CREDIT_GALLERY_PLUS = 'CreditGalleryPlus';

    /**
     * Constant for 'PrivateListing' value.
     *
     * This enumeration value indicates that the account entry is a fee for a private
     * listing. With a private listing, bidders/buyers remain anonymous to other eBay
     * users (besides the seller).
     */
    public const VAL_PRIVATE_LISTING = 'PrivateListing';

    /**
     * Constant for 'CreditPrivateListing' value.
     *
     * This enumeration value indicates that the account entry is a fee for a private
     * listing. With a private listing, bidders/buyers remain anonymous to other eBay
     * users (besides the seller).
     */
    public const VAL_CREDIT_PRIVATE_LISTING = 'CreditPrivateListing';

    /**
     * Constant for 'ImmoProFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_IMMO_PRO_FEE = 'ImmoProFee';

    /**
     * Constant for 'CreditImmoProFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_CREDIT_IMMO_PRO_FEE = 'CreditImmoProFee';

    /**
     * Constant for 'ImmoProFeatureFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_IMMO_PRO_FEATURE_FEE = 'ImmoProFeatureFee';

    /**
     * Constant for 'CreditImmoProFeatureFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_CREDIT_IMMO_PRO_FEATURE_FEE = 'CreditImmoProFeatureFee';

    /**
     * Constant for 'RealEstateProFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_REAL_ESTATE_PRO_FEE = 'RealEstateProFee';

    /**
     * Constant for 'CreditRealEstateProFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_CREDIT_REAL_ESTATE_PRO_FEE = 'CreditRealEstateProFee';

    /**
     * Constant for 'RealEstateProFeatureFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_REAL_ESTATE_PRO_FEATURE_FEE = 'RealEstateProFeatureFee';

    /**
     * Constant for 'CreditRealEstateProFeatureFee' value.
     *
     * This enumeration value is no longer applicable, and should not be returned.
     */
    public const VAL_CREDIT_REAL_ESTATE_PRO_FEATURE_FEE = 'CreditRealEstateProFeatureFee';

    /**
     * Constant for 'Discount' value.
     *
     * This enumeration value indicates that the account entry is a seller discount
     * against a final value fee, an insertion fee, a subscription fee, or other fee.
     * See the corresponding <b>Description</b> and/or <b>Memo</b> fields for more
     * information on the type of discount.
     */
    public const VAL_DISCOUNT = 'Discount';

    /**
     * Constant for 'CreditFinalValueShipping' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * final value fee for the shipping cost of an order. This fee is charged when a
     * listed item sells, and is a percentage of the shipping cost. The final value fee
     * associated with the final sale price is returned in a <b>FeeFinalValue</b>
     * entry.
     */
    public const VAL_CREDIT_FINAL_VALUE_SHIPPING = 'CreditFinalValueShipping';

    /**
     * Constant for 'FeeFinalValueShipping' value.
     *
     * This enumeration value indicates that the account entry is a final value fee for
     * the shipping cost of an order. This fee is charged when a listed item sells, and
     * is a percentage of the shipping cost. The final value fee associated with the
     * final sale price is returned in a <b>FeeFinalValue</b> entry.
     */
    public const VAL_FEE_FINAL_VALUE_SHIPPING = 'FeeFinalValueShipping';

    /**
     * Constant for 'FeeReturnShipping' value.
     *
     * This enumeration value indicates that the account entry is a return shipping fee
     * if an item is returned by the buyer.
     */
    public const VAL_FEE_RETURN_SHIPPING = 'FeeReturnShipping';

    /**
     * Constant for 'CreditReturnShipping' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a
     * return shipping fee if an item is returned by the buyer.
     */
    public const VAL_CREDIT_RETURN_SHIPPING = 'CreditReturnShipping';

    /**
     * Constant for 'FeeGlobalShippingProgram' value.
     *
     * This enumeration value indicates that the account entry is a fee charged by eBay
     * if the seller is using the Global Shipping Program to ship an item
     * internationally.
     */
    public const VAL_FEE_GLOBAL_SHIPPING_PROGRAM = 'FeeGlobalShippingProgram';

    /**
     * Constant for 'CreditGlobalShippingProgram' value.
     *
     * This enumeration value indicates that the account entry is a credit towards a
     * fee charged by eBay if the seller is using the Global Shipping Program to ship
     * an item internationally.
     */
    public const VAL_CREDIT_GLOBAL_SHIPPING_PROGRAM = 'CreditGlobalShippingProgram';

    /**
     * Constant for 'FeeAuctionEndEarly' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller's account if the seller ends an auction (with bids) early.
     */
    public const VAL_FEE_AUCTION_END_EARLY = 'FeeAuctionEndEarly';

    /**
     * Constant for 'CreditAuctionEndEarly' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to the seller's account if a duplicate auction listing is ended
     * administratively by eBay. A seller is only eligible for this credit if the
     * auction listing had zero bids and was never surfaced in Search.
     */
    public const VAL_CREDIT_AUCTION_END_EARLY = 'CreditAuctionEndEarly';

    /**
     * Constant for 'FeeFedExShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller for printing out and using a FedEx shipping label from eBay.
     */
    public const VAL_FEE_FED_EX_SHIPPING_LABEL = 'FeeFedExShippingLabel';

    /**
     * Constant for 'CreditFedExShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to reimburse the seller for a FedEx shipping label. In some cases, this
     * credit may be issued to the seller as a result of an Unpaid Item case that the
     * seller has won against a buyer.
     */
    public const VAL_CREDIT_FED_EX_SHIPPING_LABEL = 'CreditFedExShippingLabel';

    /**
     * Constant for 'FeeReturnRefund' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller's account if eBay is forced to refund the buyer in a case where the buyer
     * has used the eBay US Managed Returns process and return shipped the item to the
     * seller, but the seller has not issued a refund to the buyer within seven
     * business days after receiving the returned item. <br/><br/> This value is equal
     * to the refund ("CreditReturnRefund") issued to the buyer.
     */
    public const VAL_FEE_RETURN_REFUND = 'FeeReturnRefund';

    /**
     * Constant for 'CreditReturnRefund' value.
     *
     * This enumeration value indicates that the account entry is a credit issued to
     * the buyer's account by eBay in a case where the buyer has used the eBay US
     * Managed Returns process and return shipped the item to the seller, but the
     * seller has not issued a refund to the buyer within seven business days after
     * receiving the returned item. The buyer credit amounts to the total purchase
     * price plus any shipping costs if the item was "not as described". <br/><br/>
     * eBay then charges this expense to the seller's account, and this charge is
     * attached to the "FeeReturnRefund" value.
     */
    public const VAL_CREDIT_RETURN_REFUND = 'CreditReturnRefund';

    /**
     * Constant for 'FeeStoresSubscriptionEarlyTermination' value.
     *
     * This enumeration value indicates that the account entry is a fee charged for
     * early termination of an eBay Stores subscription.
     */
    public const VAL_FEE_STORES_SUBSCRIPTION_EARLY_TERMINATION = 'FeeStoresSubscriptionEarlyTermination';

    /**
     * Constant for 'CreditStoresSubscriptionEarlyTermination' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a fee
     * charged for early termination of an eBay Stores subscription.
     */
    public const VAL_CREDIT_STORES_SUBSCRIPTION_EARLY_TERMINATION = 'CreditStoresSubscriptionEarlyTermination';

    /**
     * Constant for 'FeeVehicleSubscriptionEarlyTermination' value.
     *
     * This enumeration value indicates that the account entry is a fee charged for
     * early termination of a National Vehicle subscription.
     */
    public const VAL_FEE_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION = 'FeeVehicleSubscriptionEarlyTermination';

    /**
     * Constant for 'CreditVehicleSubscriptionEarlyTermination' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a fee
     * charged for early termination of a National Vehicle subscription.
     */
    public const VAL_CREDIT_VEHICLE_SUBSCRIPTION_EARLY_TERMINATION = 'CreditVehicleSubscriptionEarlyTermination';

    /**
     * Constant for 'FeeVehicleSubscription' value.
     *
     * This enumeration value indicates that the account entry is a monthly
     * subscription fee charged for a National Vehicle subscription.
     */
    public const VAL_FEE_VEHICLE_SUBSCRIPTION = 'FeeVehicleSubscription';

    /**
     * Constant for 'CreditVehicleSubscription' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a
     * monthly subscription fee charged for a National Vehicle subscription.
     */
    public const VAL_CREDIT_VEHICLE_SUBSCRIPTION = 'CreditVehicleSubscription';

    /**
     * Constant for 'FeeAUPostShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller for printing out and using an Australia Post shipping label from eBay.
     */
    public const VAL_FEE_AUPOST_SHIPPING_LABEL = 'FeeAUPostShippingLabel';

    /**
     * Constant for 'CreditAUPostShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a fee
     * charged to the seller for printing out and using an Australia Post shipping
     * label from eBay. In some cases, this credit may be issued to the seller as a
     * result of an Unpaid Item case that the seller has won against a buyer.
     */
    public const VAL_CREDIT_AUPOST_SHIPPING_LABEL = 'CreditAUPostShippingLabel';

    /**
     * Constant for 'FeeAPACFedExShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller for printing out and using an FedEx shipping label from eBay in the
     * Asia-Pacific geographical region.
     */
    public const VAL_FEE_APACFED_EX_SHIPPING_LABEL = 'FeeAPACFedExShippingLabel';

    /**
     * Constant for 'CreditAPACFedExShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a fee
     * charged to the seller for printing out and using an FedEx shipping label from
     * eBay in the Asia-Pacific geographical region. In some cases, this credit may be
     * issued to the seller as a result of an Unpaid Item case that the seller has won
     * against a buyer.
     */
    public const VAL_CREDIT_APACFED_EX_SHIPPING_LABEL = 'CreditAPACFedExShippingLabel';

    /**
     * Constant for 'FeeAPACTNTShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller for printing out and using an Track & Trace (TNT) shipping label from
     * eBay in the Asia-Pacific geographical region.
     */
    public const VAL_FEE_APACTNTSHIPPING_LABEL = 'FeeAPACTNTShippingLabel';

    /**
     * Constant for 'CreditAPACTNTShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a fee
     * charged to the seller for printing out and using an Track & Trace (TNT) shipping
     * label from eBay in the Asia-Pacific geographical region.In some cases, this
     * credit may be issued to the seller as a result of an Unpaid Item case that the
     * seller has won against a buyer.
     */
    public const VAL_CREDIT_APACTNTSHIPPING_LABEL = 'CreditAPACTNTShippingLabel';

    /**
     * Constant for 'FeeEBPReimbursement' value.
     *
     * This enumeration value indicates that the account entry is a fee charged for
     * eBay Money Back Guarantee reimbursement.
     */
    public const VAL_FEE_EBPREIMBURSEMENT = 'FeeEBPReimbursement';

    /**
     * Constant for 'CreditEBPReimbursement' value.
     *
     * This enumeration value indicates that the account entry is a credit toward a fee
     * charged for eBay Money Back Guarantee reimbursement.
     */
    public const VAL_CREDIT_EBPREIMBURSEMENT = 'CreditEBPReimbursement';

    /**
     * Constant for 'FeePromotedListingFeature' value.
     *
     * This value is deprecated.
     */
    public const VAL_FEE_PROMOTED_LISTING_FEATURE = 'FeePromotedListingFeature';

    /**
     * Constant for 'CreditPromotedListingFeature' value.
     *
     * This value is deprecated.
     */
    public const VAL_CREDIT_PROMOTED_LISTING_FEATURE = 'CreditPromotedListingFeature';

    /**
     * Constant for 'FeeAd' value.
     *
     * This enumeration value indicates that the account entry is a fee charged for an
     * Ad on eBay. This Ad fee is charged only for sellers who sign up to create
     * Promoted Listings campaigns. When sellers advertise their listings, the listings
     * are displayed on the search results pages based on buyer search query. When a
     * buyer clicks on an ad and then goes on to purchase that same item within 30 days
     * of click, the seller is charged an Ad fee. The Ad fee that is charged is at the
     * rate set by seller themselves. They choose the bid percentage for each item
     * listing.
     */
    public const VAL_FEE_AD = 'FeeAd';

    /**
     * Constant for 'CreditAd' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay for an Ad charge.
     */
    public const VAL_CREDIT_AD = 'CreditAd';

    /**
     * Constant for 'FeeUBIShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a fee charged to the
     * seller for printing out and using a Universal Business Integration (UBI)
     * shipping label from eBay.
     */
    public const VAL_FEE_UBISHIPPING_LABEL = 'FeeUBIShippingLabel';

    /**
     * Constant for 'CreditUBIShippingLabel' value.
     *
     * This enumeration value indicates that the account entry is a credit issued by
     * eBay to reimburse the seller for a Universal Business Integration (UBI) shipping
     * label. In some cases, this credit may be issued to the seller as a result of an
     * Unpaid Item case that the seller has won against a buyer.
     */
    public const VAL_CREDIT_UBISHIPPING_LABEL = 'CreditUBIShippingLabel';

    /**
     * Constant for 'FeeeBayPlusSubscription' value.
     *
     * This enumeration value indicates that the account entry is an annual
     * subscription fee charged for an eBay Plus subscription.
     */
    public const VAL_FEEE_BAY_PLUS_SUBSCRIPTION = 'FeeeBayPlusSubscription';

    /**
     * Constant for 'CrediteBayPlusSubscription' value.
     *
     * This enumeration value indicates that the account entry is a credit toward an
     * annual subscription fee charged for an eBay Plus subscription.
     */
    public const VAL_CREDITE_BAY_PLUS_SUBSCRIPTION = 'CrediteBayPlusSubscription';

    /**
     * Constant for 'PaymentIntermediationFee' value.
     *
     * This enumeration value indicates the charge is an eBay payment intermediation
     * fee. This fee is only applicable for sellers in the eBay Managed Payments
     * program, currently only available to a select number of sellers on the US site.
     */
    public const VAL_PAYMENT_INTERMEDIATION_FEE = 'PaymentIntermediationFee';

    /**
     * Constant for 'PaymentIntermediationFeeCredit' value.
     *
     * (out) Payment Intermediation Fee Credit
     */
    public const VAL_PAYMENT_INTERMEDIATION_FEE_CREDIT = 'PaymentIntermediationFeeCredit';

    /**
     * Constant for 'FeePaymentIntermediationRVI' value.
     *
     * This enumeration value indicates the invoice charge is an eBay payment
     * intermediation fee. This fee is only applicable for sellers in the eBay Managed
     * Payments program, currently only available to a select number of sellers on the
     * US site.
     */
    public const VAL_FEE_PAYMENT_INTERMEDIATION_RVI = 'FeePaymentIntermediationRVI';

    /**
     * Constant for 'FeePaymentIntermediationChargeback' value.
     *
     * This enumeration value indicates the credit is a seller reimbursement for an
     * eBay payment intermediation fee.
     */
    public const VAL_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK = 'FeePaymentIntermediationChargeback';

    /**
     * Constant for 'FeePaymentIntermediationChargebackRVI' value.
     *
     * This enumeration value indicates the invoice credit is a seller reimbursement
     * for an eBay payment intermediation fee.
     */
    public const VAL_FEE_PAYMENT_INTERMEDIATION_CHARGEBACK_RVI = 'FeePaymentIntermediationChargebackRVI';

    /**
     * Constant for 'SnadOutlierFinalValueFee' value.
     *
     * This enumeration value indicates the invoice charge is a Final Value Fee (for
     * item cost) charged to the seller's account after a buyer creates and wins a
     * 'significantly not as described' (SNAD) case against the seller.
     */
    public const VAL_SNAD_OUTLIER_FINAL_VALUE_FEE = 'SnadOutlierFinalValueFee';

    /**
     * Constant for 'SnadOutlierFinalValueFeeOnShipping' value.
     *
     * This enumeration value indicates the invoice charge is a Final Value Fee (for
     * shipping cost) charged to the seller's account after a buyer creates and wins a
     * 'significantly not as described' (SNAD) case against the seller.
     */
    public const VAL_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING = 'SnadOutlierFinalValueFeeOnShipping';

    /**
     * Constant for 'HighlineSearchFee' value.
     *
     * This enumeration value indicates the invoice charge is for a 'Highline Search'
     * fee, which is a capability that allows sellers to advertise multiple products at
     * the same time, with ads appearing prominently on top of eBay's search results.
     */
    public const VAL_HIGHLINE_SEARCH_FEE = 'HighlineSearchFee';

    /**
     * Constant for 'HighlineSearchFeeCredit' value.
     *
     * This enumeration value indicates the invoice credit is for a 'Highline Search'
     * fee that was charged to the seller's account. The 'Highline Search' capability
     * allows sellers to advertise multiple products at the same time, with ads
     * appearing prominently on top of eBay's search results.
     */
    public const VAL_HIGHLINE_SEARCH_FEE_CREDIT = 'HighlineSearchFeeCredit';

    /**
     * Constant for 'SnadOutlierFinalValueFeeCredit' value.
     *
     * This enumeration value indicates the invoice credit is for a Final Value Fee
     * (for item cost) that was charged to the seller's account after a buyer created a
     * 'significantly not as described' (SNAD) case against the seller, but the seller
     * won the dispute.
     */
    public const VAL_SNAD_OUTLIER_FINAL_VALUE_FEE_CREDIT = 'SnadOutlierFinalValueFeeCredit';

    /**
     * Constant for 'SnadOutlierFinalValueFeeOnShippingCredit' value.
     *
     * This enumeration value indicates the invoice credit is for a Final Value Fee
     * (for shipping cost) that was charged to the seller's account after a buyer
     * created a 'significantly not as described' (SNAD) case against the seller, but
     * the seller won the dispute.
     */
    public const VAL_SNAD_OUTLIER_FINAL_VALUE_FEE_ON_SHIPPING_CREDIT = 'SnadOutlierFinalValueFeeOnShippingCredit';

    /**
     * Constant for 'AdFeePremium' value.
     *
     * This enumeration value indicates the invoice charge is for a Premium Ad Fee.
     */
    public const VAL_AD_FEE_PREMIUM = 'AdFeePremium';

    /**
     * Constant for 'AdFeePremiumCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a Premium Ad Fee
     * charge.
     */
    public const VAL_AD_FEE_PREMIUM_CREDIT = 'AdFeePremiumCredit';

    /**
     * Constant for 'PerListingPaymentsFee' value.
     *
     * This enumeration value indicates the invoice charge is for a Per Listing
     * Payments fee.
     */
    public const VAL_PER_LISTING_PAYMENTS_FEE = 'PerListingPaymentsFee';

    /**
     * Constant for 'PerListingPaymentsFeeCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a Per Listing
     * Payments Fee charge.
     */
    public const VAL_PER_LISTING_PAYMENTS_FEE_CREDIT = 'PerListingPaymentsFeeCredit';

    /**
     * Constant for 'VehiclesListingBasicPackageFee' value.
     *
     * This enumeration value indicates the invoice charge is for a Vehicles Listing
     * Basic Package fee.
     */
    public const VAL_VEHICLES_LISTING_BASIC_PACKAGE_FEE = 'VehiclesListingBasicPackageFee';

    /**
     * Constant for 'VehiclesListingBasicPackageCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a Vehicles Listing
     * Basic Package fee charge.
     */
    public const VAL_VEHICLES_LISTING_BASIC_PACKAGE_CREDIT = 'VehiclesListingBasicPackageCredit';

    /**
     * Constant for 'VehiclesListingPlusPackageFee' value.
     *
     * This enumeration value indicates the invoice charge is for a Vehicles Listing
     * Plus Package fee.
     */
    public const VAL_VEHICLES_LISTING_PLUS_PACKAGE_FEE = 'VehiclesListingPlusPackageFee';

    /**
     * Constant for 'VehiclesListingPlusPackageCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a Vehicles Listing
     * Plus Package fee charge.
     */
    public const VAL_VEHICLES_LISTING_PLUS_PACKAGE_CREDIT = 'VehiclesListingPlusPackageCredit';

    /**
     * Constant for 'VehiclesListingPremiumPackageFee' value.
     *
     * This enumeration value indicates the invoice charge is for a Vehicles Listing
     * Premium Package fee.
     */
    public const VAL_VEHICLES_LISTING_PREMIUM_PACKAGE_FEE = 'VehiclesListingPremiumPackageFee';

    /**
     * Constant for 'VehiclesListingPremiumPackageCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a Vehicles Listing
     * Premium Package fee charge.
     */
    public const VAL_VEHICLES_LISTING_PREMIUM_PACKAGE_CREDIT = 'VehiclesListingPremiumPackageCredit';

    /**
     * Constant for 'SendLabelFee' value.
     *
     * This enumeration value indicates the invoice charge is for a Send Label fee.
     */
    public const VAL_SEND_LABEL_FEE = 'SendLabelFee';

    /**
     * Constant for 'SendLabelFeeCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a Send Label fee
     * charge.
     */
    public const VAL_SEND_LABEL_FEE_CREDIT = 'SendLabelFeeCredit';

    /**
     * Constant for 'UpsLabelFee' value.
     *
     * This enumeration value indicates the invoice charge is for a UPS Label fee.
     */
    public const VAL_UPS_LABEL_FEE = 'UpsLabelFee';

    /**
     * Constant for 'UpsLabelFeeCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a UPS Label fee
     * charge.
     */
    public const VAL_UPS_LABEL_FEE_CREDIT = 'UpsLabelFeeCredit';

    /**
     * Constant for 'CanadaPostLabelFee' value.
     *
     * This enumeration value indicates the invoice charge is for a Canada Post Label
     * fee.
     */
    public const VAL_CANADA_POST_LABEL_FEE = 'CanadaPostLabelFee';

    /**
     * Constant for 'CanadaPostLabelFeeCredit' value.
     *
     * This enumeration value indicates that a credit was issued for a Canada Post
     * Label fee charge.
     */
    public const VAL_CANADA_POST_LABEL_FEE_CREDIT = 'CanadaPostLabelFeeCredit';

    /**
     * Constant for 'EbaySendLabelFee' value.
     *
     * This enumeration value indicates the invoice charge is for eBay having to
     * resend/regenerate a shipping label for a seller. Sellers typically have 24 hours
     * to reprint a shipping label 24 hours after the purchase of the shipping label.
     * If a seller tries to reprint a purchased shipping label after this time, a small
     * fee may apply.
     */
    public const VAL_EBAY_SEND_LABEL_FEE = 'EbaySendLabelFee';

    /**
     * Constant for 'EbaySendLabelFeeCredit' value.
     *
     * This enumeration value indicates that a credit was issued for the fee charged by
     * eBay to resend/regenerate a shipping label for the seller.
     */
    public const VAL_EBAY_SEND_LABEL_FEE_CREDIT = 'EbaySendLabelFeeCredit';

    /**
     * Constant for 'USInternetSalesTax' value.
     *
     * This enumeration value indicates that PayPal has pulled out the 'Collect and
     * Remit' sales tax amount that was originally deposited to the seller's account.
     * This enumeration value is only applicable to US sellers not opted in to eBay
     * managed payments, and for orders that are subject to eBay 'Collect and Remit'
     * sales tax. See the corresponding <b>OrderId</b> value to determine which eBay
     * order this sales tax pertains to.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  For US sellers not opted in to eBay managed payments, PayPal will now deposit
     * the entire order amount, including the 'Collect and Remit' sales tax, into the
     * seller's account, and once the order funds clear, this sales tax will be pulled
     * from the seller's account and submitted to the proper tax authority. This change
     * just went into effect on October 24, 2019. Previous to this date, PayPal pulled
     * out the 'Collect and Remit' sales tax before distributing order funds to the
     * seller.
     *  </span>
     */
    public const VAL_USINTERNET_SALES_TAX = 'USInternetSalesTax';

    /**
     * Constant for 'USInternetSalesTaxCredit' value.
     *
     * This enumeration value indicates that PayPal has deposited the 'Collect and
     * Remit' sales tax amount (for the order identified by the corresponding
     * <b>OrderId</b> field) to the seller's account. This enumeration value is only
     * applicable to US sellers not opted in to eBay managed payments, and for orders
     * that are subject to eBay 'Collect and Remit' sales tax. This sales tax will
     * actually get pulled from the seller's account shortly after the order funds
     * clear, and the seller should then see a <b>USInternetSalesTax</b> account entry
     * with a matching amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  For US sellers not opted in to eBay managed payments, PayPal will now deposit
     * the entire order amount, including the 'Collect and Remit' sales tax, into the
     * seller's account, and once the order funds clear, this sales tax will be pulled
     * from the seller's account and submitted to the proper tax authority. This change
     * just went into effect on October 24, 2019. Previous to this date, PayPal pulled
     * out the 'Collect and Remit' sales tax before distributing order funds to the
     * seller.
     *  </span>
     */
    public const VAL_USINTERNET_SALES_TAX_CREDIT = 'USInternetSalesTaxCredit';

    /**
     * Constant for 'NewZealandGST' value.
     *
     * This enumeration value indicates that PayPal has pulled out the 'Goods and
     * Services' tax amount that was originally deposited to the seller's account. This
     * enumeration value is only applicable to New Zealand sellers for orders that are
     * subject to 'Goods and Services' tax. See the corresponding <b>OrderId</b> value
     * to determine which eBay order this tax pertains to.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  PayPal will now deposit the entire order amount, including the 'Goods and
     * Services' tax, into the seller's account, and once the order funds clear, this
     * sales tax will be pulled from the seller's account and submitted to the proper
     * tax authority. This change just went into effect on October 24, 2019. Previous
     * to this date, PayPal pulled out the 'Goods and Services' tax before distributing
     * order funds to the seller.
     *  </span>
     */
    public const VAL_NEW_ZEALAND_GST = 'NewZealandGST';

    /**
     * Constant for 'NewZealandGSTCredit' value.
     *
     * This enumeration value indicates that PayPal has deposited the 'Goods and
     * Services' tax amount (for the order identified by the corresponding
     * <b>OrderId</b> field) to the seller's account. This enumeration value is only
     * applicable to New Zealand sellers for orders that are subject to 'Goods and
     * Services' tax. This tax will actually get pulled from the seller's account
     * shortly after the order funds clear, and the seller should then see a
     * <b>NewZealandGST</b> account entry with a matching amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  PayPal will now deposit the entire order amount, including the 'Goods and
     * Services' tax, into the seller's account, and once the order funds clear, this
     * sales tax will be pulled from the seller's account and submitted to the proper
     * tax authority. This change just went into effect on October 24, 2019. Previous
     * to this date, PayPal pulled out the 'Goods and Services' tax before distributing
     * order funds to the seller.
     *  </span>
     */
    public const VAL_NEW_ZEALAND_GSTCREDIT = 'NewZealandGSTCredit';

    /**
     * Constant for 'AustraliaGST' value.
     *
     * This enumeration value indicates that PayPal has pulled out the 'Goods and
     * Services' tax amount that was originally deposited to the seller's account. This
     * enumeration value is only applicable to Australian sellers for orders that are
     * subject to 'Goods and Services' tax. See the corresponding <b>OrderId</b> value
     * to determine which eBay order this tax pertains to.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  PayPal will now deposit the entire order amount, including the 'Goods and
     * Services' tax, into the seller's account, and once the order funds clear, this
     * sales tax will be pulled from the seller's account and submitted to the proper
     * tax authority. This change just went into effect on October 24, 2019. Previous
     * to this date, PayPal pulled out the 'Goods and Services' tax before distributing
     * order funds to the seller.
     *  </span>
     */
    public const VAL_AUSTRALIA_GST = 'AustraliaGST';

    /**
     * Constant for 'AustraliaGSTCredit' value.
     *
     * This enumeration value indicates that PayPal has deposited the 'Goods and
     * Services' tax amount (for the order identified by the corresponding
     * <b>OrderId</b> field) to the seller's account. This enumeration value is only
     * applicable to Australia sellers for orders that are subject to 'Goods and
     * Services' tax. This tax will actually get pulled from the seller's account
     * shortly after the order funds clear, and the seller should then see a
     * <b>AustraliaGST</b> account entry with a matching amount.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b>
     *  PayPal will now deposit the entire order amount, including the 'Goods and
     * Services' tax, into the seller's account, and once the order funds clear, this
     * sales tax will be pulled from the seller's account and submitted to the proper
     * tax authority. This change just went into effect on October 24, 2019. Previous
     * to this date, PayPal pulled out the 'Goods and Services' tax before distributing
     * order funds to the seller.
     *  </span>
     */
    public const VAL_AUSTRALIA_GSTCREDIT = 'AustraliaGSTCredit';

    /**
     * Constant for 'UspsLabelFee' value.
     *
     * This enumeration value indicates that eBay is billing the seller for a USPS
     * shipping label that was purchased through the seller's eBay account.
     *  <br><br>
     *  This enumeration value is only applicable for eBay sellers that are opted in to
     * eBay managed payments.
     */
    public const VAL_USPS_LABEL_FEE = 'UspsLabelFee';

    /**
     * Constant for 'UspsLabelFeeCredit' value.
     *
     * This enumeration value indicates that eBay is giving a credit to the seller for
     * a USPS shipping label that was purchased through the seller's eBay account.
     *  <br><br>
     *  This enumeration value is only applicable for eBay sellers that are opted in to
     * eBay managed payments.
     */
    public const VAL_USPS_LABEL_FEE_CREDIT = 'UspsLabelFeeCredit';

    /**
     * Constant for 'ShippingInsuranceFee' value.
     *
     * This enumeration value indicates that eBay is billing the seller for shipping
     * insurance (such as ShipCover through USPS) that was purchased through the
     * seller's eBay account.
     *  <br><br>
     *  This enumeration value is only applicable for eBay sellers that are opted in to
     * eBay managed payments.
     */
    public const VAL_SHIPPING_INSURANCE_FEE = 'ShippingInsuranceFee';

    /**
     * Constant for 'ShippingInsuranceFeeCredit' value.
     *
     * This enumeration value indicates that eBay is giving a credit to the seller for
     * shipping insurance (such as ShipCover through USPS) that was purchased through
     * the seller's eBay account.
     *  <br><br>
     *  This enumeration value is only applicable for eBay sellers that are opted in to
     * eBay managed payments.
     */
    public const VAL_SHIPPING_INSURANCE_FEE_CREDIT = 'ShippingInsuranceFeeCredit';

    /**
     * Constant for 'UspsShortpaidFee' value.
     *
     * This enumeration value indicates that eBay is billing the seller for
     * underpayment for a USPS shipping label that was purchased through the seller's
     * eBay account. Underpayment may occur if the seller paid for a shipping label
     * based on specific package weight and dimensions, but either or both package
     * weight and dimensions were not accurate, hence the seller owes more money to
     * USPS for postage.
     *  <br><br>
     *  This enumeration value is only applicable for eBay sellers that are opted in to
     * eBay managed payments.
     */
    public const VAL_USPS_SHORTPAID_FEE = 'UspsShortpaidFee';

    /**
     * Constant for 'UspsShortpaidFeeCredit' value.
     *
     * This enumeration value indicates that eBay is giving credit to the seller for
     * underpayment for a USPS shipping label that was purchased through the seller's
     * eBay account. Underpayment may occur if the seller paid for a shipping label
     * based on specific package weight and dimensions, but either or both package
     * weight and dimensions were not accurate, hence the seller owes more money to
     * USPS for postage.
     *  <br><br>
     *  This enumeration value is only applicable for eBay sellers that are opted in to
     * eBay managed payments.
     */
    public const VAL_USPS_SHORTPAID_FEE_CREDIT = 'UspsShortpaidFeeCredit';

    /**
     * Constant for 'CoFundingCharge' value.
     *
     * This enumeration value indicates that eBay is billing the seller for a
     * co-funding charge.
     */
    public const VAL_CO_FUNDING_CHARGE = 'CoFundingCharge';

    /**
     * Constant for 'CoFundingChargeCredit' value.
     *
     * This enumeration value indicates that eBay is giving credit to the seller for a
     * co-funding charge.
     */
    public const VAL_CO_FUNDING_CHARGE_CREDIT = 'CoFundingChargeCredit';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
