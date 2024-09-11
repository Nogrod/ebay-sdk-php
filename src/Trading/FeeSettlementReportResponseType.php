<?php

namespace Nogrod\eBaySDK\Trading;

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
     * @var \Nogrod\eBaySDK\Trading\AmountType $feeSettlementAmount
     */
    private $feeSettlementAmount = null;

    /**
     * Amount of the previous invoice. The LastInvoiceAmount is included in the report
     *  if at least one invoice has already been sent to the user requesting this report.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $lastInvoiceAmount
     */
    private $lastInvoiceAmount = null;

    /**
     * The rounding adjustment will be calculated as: the difference between the total individual invoice line items and the total InvoiceAmount plus UsageAdjustment.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $feeRoundingAdjustmentAmount
     */
    private $feeRoundingAdjustmentAmount = null;

    /**
     * The Usage Adjustment will equal the total unrounded usage fee amounts, multiplied by the tax rate.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $feeTotalUsageAdjustmentAmount
     */
    private $feeTotalUsageAdjustmentAmount = null;

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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $feeSettlementAmount
     * @return self
     */
    public function setFeeSettlementAmount(\Nogrod\eBaySDK\Trading\AmountType $feeSettlementAmount)
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
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $lastInvoiceAmount
     * @return self
     */
    public function setLastInvoiceAmount(\Nogrod\eBaySDK\Trading\AmountType $lastInvoiceAmount)
    {
        $this->lastInvoiceAmount = $lastInvoiceAmount;
        return $this;
    }

    /**
     * Gets as feeRoundingAdjustmentAmount
     *
     * The rounding adjustment will be calculated as: the difference between the total individual invoice line items and the total InvoiceAmount plus UsageAdjustment.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $feeRoundingAdjustmentAmount
     * @return self
     */
    public function setFeeRoundingAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType $feeRoundingAdjustmentAmount)
    {
        $this->feeRoundingAdjustmentAmount = $feeRoundingAdjustmentAmount;
        return $this;
    }

    /**
     * Gets as feeTotalUsageAdjustmentAmount
     *
     * The Usage Adjustment will equal the total unrounded usage fee amounts, multiplied by the tax rate.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
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
     * @param \Nogrod\eBaySDK\Trading\AmountType $feeTotalUsageAdjustmentAmount
     * @return self
     */
    public function setFeeTotalUsageAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType $feeTotalUsageAdjustmentAmount)
    {
        $this->feeTotalUsageAdjustmentAmount = $feeTotalUsageAdjustmentAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
            $this->setFeeSettlementAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastInvoiceAmount');
        if (null !== $value) {
            $this->setLastInvoiceAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeRoundingAdjustmentAmount');
        if (null !== $value) {
            $this->setFeeRoundingAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeTotalUsageAdjustmentAmount');
        if (null !== $value) {
            $this->setFeeTotalUsageAdjustmentAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
