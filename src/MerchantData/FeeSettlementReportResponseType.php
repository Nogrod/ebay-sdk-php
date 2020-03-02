<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeeSettlementReportResponseType
 *
 * Contains information about user invoice and related order information, such as: fee type, fee amount, item category, order id,
 *  transaction id, item id, and item title. Some setup steps are required. See the Knowledgebase Article at the following link.
 * XSD Type: FeeSettlementReportResponseType
 */
class FeeSettlementReportResponseType extends AbstractResponseType
{

    /**
     * The invoice identifier is an alphanumeric value that uniquely identifies the invoice for the specified invoice period for the associated customer account.
     *
     * @var string $invoiceID
     */
    private $invoiceID = null;

    /**
     * site username
     *
     * @var string $sellerID
     */
    private $sellerID = null;

    /**
     * eBay Account Id.
     *
     * @var string $accountID
     */
    private $accountID = null;

    /**
     * Beginning date time of invoice period.
     *
     * @var \DateTime $reportStartTime
     */
    private $reportStartTime = null;

    /**
     * Ending date time of invoice period.
     *
     * @var \DateTime $reportEndTime
     */
    private $reportEndTime = null;

    /**
     * Date time of billing process (BIP).
     *
     * @var \DateTime $invoiceProcessingTime
     */
    private $invoiceProcessingTime = null;

    /**
     * Invoice due date.
     *
     * @var \DateTime $reportProcessingTime
     */
    private $reportProcessingTime = null;

    /**
     * This invoice amount.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeSettlementAmount
     */
    private $feeSettlementAmount = null;

    /**
     * Amount of the previous invoice. The LastInvoiceAmount is included in the report
     *  if at least one invoice has already been sent to the user requesting this report.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $lastInvoiceAmount
     */
    private $lastInvoiceAmount = null;

    /**
     * The rounding adjustment will be calculated as: the difference between the total individual invoice line items and the total InvoiceAmount plus UsageAdjustment.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeRoundingAdjustmentAmount
     */
    private $feeRoundingAdjustmentAmount = null;

    /**
     * The Usage Adjustment will equal the total unrounded usage fee amounts, multiplied by the tax rate.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeTotalUsageAdjustmentAmount
     */
    private $feeTotalUsageAdjustmentAmount = null;

    /**
     * Usage transactions with order information belong to this invoice.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderDetailsType[] $orderTransactionList
     */
    private $orderTransactionList = [
        
    ];

    /**
     * Usage transactions which can not find the order information belong to this invoice.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TransactionListType[] $listingTransactionList
     */
    private $listingTransactionList = [
        
    ];

    /**
     * Usage adjustment belong to this invoice.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OrderDetailsType[] $orderAdjustmentList
     */
    private $orderAdjustmentList = [
        
    ];

    /**
     * Non-usage transactions belong to this invoice.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AccountTransactionType[] $accountTransactionList
     */
    private $accountTransactionList = [
        
    ];

    /**
     * Discount transactions belong to this invoice.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AccountTransactionType[] $discountTransactionList
     */
    private $discountTransactionList = [
        
    ];

    /**
     * Gets as invoiceID
     *
     * The invoice identifier is an alphanumeric value that uniquely identifies the invoice for the specified invoice period for the associated customer account.
     *
     * @return string
     */
    public function getInvoiceID()
    {
        return $this->invoiceID;
    }

    /**
     * Sets a new invoiceID
     *
     * The invoice identifier is an alphanumeric value that uniquely identifies the invoice for the specified invoice period for the associated customer account.
     *
     * @param string $invoiceID
     * @return self
     */
    public function setInvoiceID($invoiceID)
    {
        $this->invoiceID = $invoiceID;
        return $this;
    }

    /**
     * Gets as sellerID
     *
     * site username
     *
     * @return string
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * Sets a new sellerID
     *
     * site username
     *
     * @param string $sellerID
     * @return self
     */
    public function setSellerID($sellerID)
    {
        $this->sellerID = $sellerID;
        return $this;
    }

    /**
     * Gets as accountID
     *
     * eBay Account Id.
     *
     * @return string
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * eBay Account Id.
     *
     * @param string $accountID
     * @return self
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }

    /**
     * Gets as reportStartTime
     *
     * Beginning date time of invoice period.
     *
     * @return \DateTime
     */
    public function getReportStartTime()
    {
        return $this->reportStartTime;
    }

    /**
     * Sets a new reportStartTime
     *
     * Beginning date time of invoice period.
     *
     * @param \DateTime $reportStartTime
     * @return self
     */
    public function setReportStartTime(\DateTime $reportStartTime)
    {
        $this->reportStartTime = $reportStartTime;
        return $this;
    }

    /**
     * Gets as reportEndTime
     *
     * Ending date time of invoice period.
     *
     * @return \DateTime
     */
    public function getReportEndTime()
    {
        return $this->reportEndTime;
    }

    /**
     * Sets a new reportEndTime
     *
     * Ending date time of invoice period.
     *
     * @param \DateTime $reportEndTime
     * @return self
     */
    public function setReportEndTime(\DateTime $reportEndTime)
    {
        $this->reportEndTime = $reportEndTime;
        return $this;
    }

    /**
     * Gets as invoiceProcessingTime
     *
     * Date time of billing process (BIP).
     *
     * @return \DateTime
     */
    public function getInvoiceProcessingTime()
    {
        return $this->invoiceProcessingTime;
    }

    /**
     * Sets a new invoiceProcessingTime
     *
     * Date time of billing process (BIP).
     *
     * @param \DateTime $invoiceProcessingTime
     * @return self
     */
    public function setInvoiceProcessingTime(\DateTime $invoiceProcessingTime)
    {
        $this->invoiceProcessingTime = $invoiceProcessingTime;
        return $this;
    }

    /**
     * Gets as reportProcessingTime
     *
     * Invoice due date.
     *
     * @return \DateTime
     */
    public function getReportProcessingTime()
    {
        return $this->reportProcessingTime;
    }

    /**
     * Sets a new reportProcessingTime
     *
     * Invoice due date.
     *
     * @param \DateTime $reportProcessingTime
     * @return self
     */
    public function setReportProcessingTime(\DateTime $reportProcessingTime)
    {
        $this->reportProcessingTime = $reportProcessingTime;
        return $this;
    }

    /**
     * Gets as feeSettlementAmount
     *
     * This invoice amount.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFeeSettlementAmount()
    {
        return $this->feeSettlementAmount;
    }

    /**
     * Sets a new feeSettlementAmount
     *
     * This invoice amount.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $feeSettlementAmount
     * @return self
     */
    public function setFeeSettlementAmount(\Nogrod\eBaySDK\MerchantData\AmountType $feeSettlementAmount)
    {
        $this->feeSettlementAmount = $feeSettlementAmount;
        return $this;
    }

    /**
     * Gets as lastInvoiceAmount
     *
     * Amount of the previous invoice. The LastInvoiceAmount is included in the report
     *  if at least one invoice has already been sent to the user requesting this report.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getLastInvoiceAmount()
    {
        return $this->lastInvoiceAmount;
    }

    /**
     * Sets a new lastInvoiceAmount
     *
     * Amount of the previous invoice. The LastInvoiceAmount is included in the report
     *  if at least one invoice has already been sent to the user requesting this report.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $lastInvoiceAmount
     * @return self
     */
    public function setLastInvoiceAmount(\Nogrod\eBaySDK\MerchantData\AmountType $lastInvoiceAmount)
    {
        $this->lastInvoiceAmount = $lastInvoiceAmount;
        return $this;
    }

    /**
     * Gets as feeRoundingAdjustmentAmount
     *
     * The rounding adjustment will be calculated as: the difference between the total individual invoice line items and the total InvoiceAmount plus UsageAdjustment.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFeeRoundingAdjustmentAmount()
    {
        return $this->feeRoundingAdjustmentAmount;
    }

    /**
     * Sets a new feeRoundingAdjustmentAmount
     *
     * The rounding adjustment will be calculated as: the difference between the total individual invoice line items and the total InvoiceAmount plus UsageAdjustment.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $feeRoundingAdjustmentAmount
     * @return self
     */
    public function setFeeRoundingAdjustmentAmount(\Nogrod\eBaySDK\MerchantData\AmountType $feeRoundingAdjustmentAmount)
    {
        $this->feeRoundingAdjustmentAmount = $feeRoundingAdjustmentAmount;
        return $this;
    }

    /**
     * Gets as feeTotalUsageAdjustmentAmount
     *
     * The Usage Adjustment will equal the total unrounded usage fee amounts, multiplied by the tax rate.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFeeTotalUsageAdjustmentAmount()
    {
        return $this->feeTotalUsageAdjustmentAmount;
    }

    /**
     * Sets a new feeTotalUsageAdjustmentAmount
     *
     * The Usage Adjustment will equal the total unrounded usage fee amounts, multiplied by the tax rate.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $feeTotalUsageAdjustmentAmount
     * @return self
     */
    public function setFeeTotalUsageAdjustmentAmount(\Nogrod\eBaySDK\MerchantData\AmountType $feeTotalUsageAdjustmentAmount)
    {
        $this->feeTotalUsageAdjustmentAmount = $feeTotalUsageAdjustmentAmount;
        return $this;
    }

    /**
     * Adds as orderTransactionList
     *
     * Usage transactions with order information belong to this invoice.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderDetailsType $orderTransactionList
     */
    public function addToOrderTransactionList(\Nogrod\eBaySDK\MerchantData\OrderDetailsType $orderTransactionList)
    {
        $this->orderTransactionList[] = $orderTransactionList;
        return $this;
    }

    /**
     * isset orderTransactionList
     *
     * Usage transactions with order information belong to this invoice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderTransactionList($index)
    {
        return isset($this->orderTransactionList[$index]);
    }

    /**
     * unset orderTransactionList
     *
     * Usage transactions with order information belong to this invoice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderTransactionList($index)
    {
        unset($this->orderTransactionList[$index]);
    }

    /**
     * Gets as orderTransactionList
     *
     * Usage transactions with order information belong to this invoice.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderDetailsType[]
     */
    public function getOrderTransactionList()
    {
        return $this->orderTransactionList;
    }

    /**
     * Sets a new orderTransactionList
     *
     * Usage transactions with order information belong to this invoice.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderDetailsType[] $orderTransactionList
     * @return self
     */
    public function setOrderTransactionList(array $orderTransactionList)
    {
        $this->orderTransactionList = $orderTransactionList;
        return $this;
    }

    /**
     * Adds as listingTransactionList
     *
     * Usage transactions which can not find the order information belong to this invoice.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\TransactionListType $listingTransactionList
     */
    public function addToListingTransactionList(\Nogrod\eBaySDK\MerchantData\TransactionListType $listingTransactionList)
    {
        $this->listingTransactionList[] = $listingTransactionList;
        return $this;
    }

    /**
     * isset listingTransactionList
     *
     * Usage transactions which can not find the order information belong to this invoice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingTransactionList($index)
    {
        return isset($this->listingTransactionList[$index]);
    }

    /**
     * unset listingTransactionList
     *
     * Usage transactions which can not find the order information belong to this invoice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingTransactionList($index)
    {
        unset($this->listingTransactionList[$index]);
    }

    /**
     * Gets as listingTransactionList
     *
     * Usage transactions which can not find the order information belong to this invoice.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TransactionListType[]
     */
    public function getListingTransactionList()
    {
        return $this->listingTransactionList;
    }

    /**
     * Sets a new listingTransactionList
     *
     * Usage transactions which can not find the order information belong to this invoice.
     *
     * @param \Nogrod\eBaySDK\MerchantData\TransactionListType[] $listingTransactionList
     * @return self
     */
    public function setListingTransactionList(array $listingTransactionList)
    {
        $this->listingTransactionList = $listingTransactionList;
        return $this;
    }

    /**
     * Adds as orderAdjustmentList
     *
     * Usage adjustment belong to this invoice.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderDetailsType $orderAdjustmentList
     */
    public function addToOrderAdjustmentList(\Nogrod\eBaySDK\MerchantData\OrderDetailsType $orderAdjustmentList)
    {
        $this->orderAdjustmentList[] = $orderAdjustmentList;
        return $this;
    }

    /**
     * isset orderAdjustmentList
     *
     * Usage adjustment belong to this invoice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderAdjustmentList($index)
    {
        return isset($this->orderAdjustmentList[$index]);
    }

    /**
     * unset orderAdjustmentList
     *
     * Usage adjustment belong to this invoice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderAdjustmentList($index)
    {
        unset($this->orderAdjustmentList[$index]);
    }

    /**
     * Gets as orderAdjustmentList
     *
     * Usage adjustment belong to this invoice.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderDetailsType[]
     */
    public function getOrderAdjustmentList()
    {
        return $this->orderAdjustmentList;
    }

    /**
     * Sets a new orderAdjustmentList
     *
     * Usage adjustment belong to this invoice.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderDetailsType[] $orderAdjustmentList
     * @return self
     */
    public function setOrderAdjustmentList(array $orderAdjustmentList)
    {
        $this->orderAdjustmentList = $orderAdjustmentList;
        return $this;
    }

    /**
     * Adds as accountTransactionList
     *
     * Non-usage transactions belong to this invoice.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AccountTransactionType $accountTransactionList
     */
    public function addToAccountTransactionList(\Nogrod\eBaySDK\MerchantData\AccountTransactionType $accountTransactionList)
    {
        $this->accountTransactionList[] = $accountTransactionList;
        return $this;
    }

    /**
     * isset accountTransactionList
     *
     * Non-usage transactions belong to this invoice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountTransactionList($index)
    {
        return isset($this->accountTransactionList[$index]);
    }

    /**
     * unset accountTransactionList
     *
     * Non-usage transactions belong to this invoice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountTransactionList($index)
    {
        unset($this->accountTransactionList[$index]);
    }

    /**
     * Gets as accountTransactionList
     *
     * Non-usage transactions belong to this invoice.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AccountTransactionType[]
     */
    public function getAccountTransactionList()
    {
        return $this->accountTransactionList;
    }

    /**
     * Sets a new accountTransactionList
     *
     * Non-usage transactions belong to this invoice.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AccountTransactionType[] $accountTransactionList
     * @return self
     */
    public function setAccountTransactionList(array $accountTransactionList)
    {
        $this->accountTransactionList = $accountTransactionList;
        return $this;
    }

    /**
     * Adds as discountTransactionList
     *
     * Discount transactions belong to this invoice.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AccountTransactionType $discountTransactionList
     */
    public function addToDiscountTransactionList(\Nogrod\eBaySDK\MerchantData\AccountTransactionType $discountTransactionList)
    {
        $this->discountTransactionList[] = $discountTransactionList;
        return $this;
    }

    /**
     * isset discountTransactionList
     *
     * Discount transactions belong to this invoice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountTransactionList($index)
    {
        return isset($this->discountTransactionList[$index]);
    }

    /**
     * unset discountTransactionList
     *
     * Discount transactions belong to this invoice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountTransactionList($index)
    {
        unset($this->discountTransactionList[$index]);
    }

    /**
     * Gets as discountTransactionList
     *
     * Discount transactions belong to this invoice.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AccountTransactionType[]
     */
    public function getDiscountTransactionList()
    {
        return $this->discountTransactionList;
    }

    /**
     * Sets a new discountTransactionList
     *
     * Discount transactions belong to this invoice.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AccountTransactionType[] $discountTransactionList
     * @return self
     */
    public function setDiscountTransactionList(array $discountTransactionList)
    {
        $this->discountTransactionList = $discountTransactionList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getInvoiceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceID", $value);
        }
        $value = $this->getSellerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerID", $value);
        }
        $value = $this->getAccountID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AccountID", $value);
        }
        $value = $this->getReportStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReportStartTime", $value);
        }
        $value = $this->getReportEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReportEndTime", $value);
        }
        $value = $this->getInvoiceProcessingTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceProcessingTime", $value);
        }
        $value = $this->getReportProcessingTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReportProcessingTime", $value);
        }
        $value = $this->getFeeSettlementAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeSettlementAmount", $value);
        }
        $value = $this->getLastInvoiceAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastInvoiceAmount", $value);
        }
        $value = $this->getFeeRoundingAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeRoundingAdjustmentAmount", $value);
        }
        $value = $this->getFeeTotalUsageAdjustmentAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeTotalUsageAdjustmentAmount", $value);
        }
        $value = $this->getOrderTransactionList();
        if (null !== $value && !empty($this->getOrderTransactionList())) {
            $writer->write(array_map(function ($v) {
                return ["OrderTransactionList" => $v];
            }, $value));
        }
        $value = $this->getListingTransactionList();
        if (null !== $value && !empty($this->getListingTransactionList())) {
            $writer->write(array_map(function ($v) {
                return ["ListingTransactionList" => $v];
            }, $value));
        }
        $value = $this->getOrderAdjustmentList();
        if (null !== $value && !empty($this->getOrderAdjustmentList())) {
            $writer->write(array_map(function ($v) {
                return ["OrderAdjustmentList" => $v];
            }, $value));
        }
        $value = $this->getAccountTransactionList();
        if (null !== $value && !empty($this->getAccountTransactionList())) {
            $writer->write(array_map(function ($v) {
                return ["AccountTransactionList" => $v];
            }, $value));
        }
        $value = $this->getDiscountTransactionList();
        if (null !== $value && !empty($this->getDiscountTransactionList())) {
            $writer->write(array_map(function ($v) {
                return ["DiscountTransactionList" => $v];
            }, $value));
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceID');
        if (null !== $value) {
            $this->setInvoiceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerID');
        if (null !== $value) {
            $this->setSellerID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountID');
        if (null !== $value) {
            $this->setAccountID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReportStartTime');
        if (null !== $value) {
            $this->setReportStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReportEndTime');
        if (null !== $value) {
            $this->setReportEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceProcessingTime');
        if (null !== $value) {
            $this->setInvoiceProcessingTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReportProcessingTime');
        if (null !== $value) {
            $this->setReportProcessingTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeSettlementAmount');
        if (null !== $value) {
            $this->setFeeSettlementAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastInvoiceAmount');
        if (null !== $value) {
            $this->setLastInvoiceAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeRoundingAdjustmentAmount');
        if (null !== $value) {
            $this->setFeeRoundingAdjustmentAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeTotalUsageAdjustmentAmount');
        if (null !== $value) {
            $this->setFeeTotalUsageAdjustmentAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderTransactionList', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderTransactionList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTransactionList', true);
        if (null !== $value && !empty($value)) {
            $this->setListingTransactionList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\TransactionListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderAdjustmentList', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderAdjustmentList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountTransactionList', true);
        if (null !== $value && !empty($value)) {
            $this->setAccountTransactionList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AccountTransactionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountTransactionList', true);
        if (null !== $value && !empty($value)) {
            $this->setDiscountTransactionList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AccountTransactionType::fromKeyValue($v);
            }, $value));
        }
    }
}
