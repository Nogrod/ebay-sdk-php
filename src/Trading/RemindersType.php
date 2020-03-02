<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemindersType
 *
 * This type contains the counts of various eBay Buying and Seller Reminders that are returned in the <b>GetMyeBayReminders</b> call.
 * XSD Type: RemindersType
 */
class RemindersType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The number of reminders requesting that the buyer send payment.
     *
     * @var int $paymentToSendCount
     */
    private $paymentToSendCount = null;

    /**
     * The number of reminders that feedback has not yet been received by the buyer or seller.
     *
     * @var int $feedbackToReceiveCount
     */
    private $feedbackToReceiveCount = null;

    /**
     * The number of reminders that feedback has not yet been sent by the buyer or seller.
     *
     * @var int $feedbackToSendCount
     */
    private $feedbackToSendCount = null;

    /**
     * The number of reminders advising the buyer that the buyer has been
     *  outbid.
     *
     * @var int $outbidCount
     */
    private $outbidCount = null;

    /**
     * The number of reminders that the seller has not yet received a payment.
     *
     * @var int $paymentToReceiveCount
     */
    private $paymentToReceiveCount = null;

    /**
     * The number of reminders requesting that the seller review second
     *  chance offers.
     *
     * @var int $secondChanceOfferCount
     */
    private $secondChanceOfferCount = null;

    /**
     * The number of reminders advising the seller that shipping is
     *  needed.
     *
     * @var int $shippingNeededCount
     */
    private $shippingNeededCount = null;

    /**
     * The number of reminders advising the seller that relisting is needed.
     *
     * @var int $relistingNeededCount
     */
    private $relistingNeededCount = null;

    /**
     * The number of new leads the seller has recieved.
     *
     * @var int $totalNewLeadsCount
     */
    private $totalNewLeadsCount = null;

    /**
     * The number of reminders advising the buyer to send documents for credit card processing.
     *
     * @var int $docsForCCProcessingToSendCount
     */
    private $docsForCCProcessingToSendCount = null;

    /**
     * The number of reminders requesting the buyer to process request time extension submitted by the seller.
     *
     * @var int $rTEToProcessCount
     */
    private $rTEToProcessCount = null;

    /**
     * The number of reminders requesting the Buyer to confirm item receipt to seller.
     *
     * @var int $itemReceiptToConfirmCount
     */
    private $itemReceiptToConfirmCount = null;

    /**
     * The number of reminders to the buyer on refund on hold.
     *
     * @var int $refundOnHoldCount
     */
    private $refundOnHoldCount = null;

    /**
     * The number of reminders to the buyer on refund cancelled.
     *
     * @var int $refundCancelledCount
     */
    private $refundCancelledCount = null;

    /**
     * The number of reminders requesting the seller to provide shipping details
     *
     * @var int $shippingDetailsToBeProvidedCount
     */
    private $shippingDetailsToBeProvidedCount = null;

    /**
     * The number of reminders to the seller on item receipt confirmation pending from buyer
     *
     * @var int $itemReceiptConfirmationToReceiveCount
     */
    private $itemReceiptConfirmationToReceiveCount = null;

    /**
     * The number of reminders to the seller on refunds initiated
     *
     * @var int $refundInitiatedCount
     */
    private $refundInitiatedCount = null;

    /**
     * The number of reminders to the seller on pending shipping time extension requests with the buyer
     *
     * @var int $pendingRTERequestCount
     */
    private $pendingRTERequestCount = null;

    /**
     * The number of reminders to the seller on declined shipping time extension requests by the buyer
     *
     * @var int $declinedRTERequestCount
     */
    private $declinedRTERequestCount = null;

    /**
     * Gets as paymentToSendCount
     *
     * The number of reminders requesting that the buyer send payment.
     *
     * @return int
     */
    public function getPaymentToSendCount()
    {
        return $this->paymentToSendCount;
    }

    /**
     * Sets a new paymentToSendCount
     *
     * The number of reminders requesting that the buyer send payment.
     *
     * @param int $paymentToSendCount
     * @return self
     */
    public function setPaymentToSendCount($paymentToSendCount)
    {
        $this->paymentToSendCount = $paymentToSendCount;
        return $this;
    }

    /**
     * Gets as feedbackToReceiveCount
     *
     * The number of reminders that feedback has not yet been received by the buyer or seller.
     *
     * @return int
     */
    public function getFeedbackToReceiveCount()
    {
        return $this->feedbackToReceiveCount;
    }

    /**
     * Sets a new feedbackToReceiveCount
     *
     * The number of reminders that feedback has not yet been received by the buyer or seller.
     *
     * @param int $feedbackToReceiveCount
     * @return self
     */
    public function setFeedbackToReceiveCount($feedbackToReceiveCount)
    {
        $this->feedbackToReceiveCount = $feedbackToReceiveCount;
        return $this;
    }

    /**
     * Gets as feedbackToSendCount
     *
     * The number of reminders that feedback has not yet been sent by the buyer or seller.
     *
     * @return int
     */
    public function getFeedbackToSendCount()
    {
        return $this->feedbackToSendCount;
    }

    /**
     * Sets a new feedbackToSendCount
     *
     * The number of reminders that feedback has not yet been sent by the buyer or seller.
     *
     * @param int $feedbackToSendCount
     * @return self
     */
    public function setFeedbackToSendCount($feedbackToSendCount)
    {
        $this->feedbackToSendCount = $feedbackToSendCount;
        return $this;
    }

    /**
     * Gets as outbidCount
     *
     * The number of reminders advising the buyer that the buyer has been
     *  outbid.
     *
     * @return int
     */
    public function getOutbidCount()
    {
        return $this->outbidCount;
    }

    /**
     * Sets a new outbidCount
     *
     * The number of reminders advising the buyer that the buyer has been
     *  outbid.
     *
     * @param int $outbidCount
     * @return self
     */
    public function setOutbidCount($outbidCount)
    {
        $this->outbidCount = $outbidCount;
        return $this;
    }

    /**
     * Gets as paymentToReceiveCount
     *
     * The number of reminders that the seller has not yet received a payment.
     *
     * @return int
     */
    public function getPaymentToReceiveCount()
    {
        return $this->paymentToReceiveCount;
    }

    /**
     * Sets a new paymentToReceiveCount
     *
     * The number of reminders that the seller has not yet received a payment.
     *
     * @param int $paymentToReceiveCount
     * @return self
     */
    public function setPaymentToReceiveCount($paymentToReceiveCount)
    {
        $this->paymentToReceiveCount = $paymentToReceiveCount;
        return $this;
    }

    /**
     * Gets as secondChanceOfferCount
     *
     * The number of reminders requesting that the seller review second
     *  chance offers.
     *
     * @return int
     */
    public function getSecondChanceOfferCount()
    {
        return $this->secondChanceOfferCount;
    }

    /**
     * Sets a new secondChanceOfferCount
     *
     * The number of reminders requesting that the seller review second
     *  chance offers.
     *
     * @param int $secondChanceOfferCount
     * @return self
     */
    public function setSecondChanceOfferCount($secondChanceOfferCount)
    {
        $this->secondChanceOfferCount = $secondChanceOfferCount;
        return $this;
    }

    /**
     * Gets as shippingNeededCount
     *
     * The number of reminders advising the seller that shipping is
     *  needed.
     *
     * @return int
     */
    public function getShippingNeededCount()
    {
        return $this->shippingNeededCount;
    }

    /**
     * Sets a new shippingNeededCount
     *
     * The number of reminders advising the seller that shipping is
     *  needed.
     *
     * @param int $shippingNeededCount
     * @return self
     */
    public function setShippingNeededCount($shippingNeededCount)
    {
        $this->shippingNeededCount = $shippingNeededCount;
        return $this;
    }

    /**
     * Gets as relistingNeededCount
     *
     * The number of reminders advising the seller that relisting is needed.
     *
     * @return int
     */
    public function getRelistingNeededCount()
    {
        return $this->relistingNeededCount;
    }

    /**
     * Sets a new relistingNeededCount
     *
     * The number of reminders advising the seller that relisting is needed.
     *
     * @param int $relistingNeededCount
     * @return self
     */
    public function setRelistingNeededCount($relistingNeededCount)
    {
        $this->relistingNeededCount = $relistingNeededCount;
        return $this;
    }

    /**
     * Gets as totalNewLeadsCount
     *
     * The number of new leads the seller has recieved.
     *
     * @return int
     */
    public function getTotalNewLeadsCount()
    {
        return $this->totalNewLeadsCount;
    }

    /**
     * Sets a new totalNewLeadsCount
     *
     * The number of new leads the seller has recieved.
     *
     * @param int $totalNewLeadsCount
     * @return self
     */
    public function setTotalNewLeadsCount($totalNewLeadsCount)
    {
        $this->totalNewLeadsCount = $totalNewLeadsCount;
        return $this;
    }

    /**
     * Gets as docsForCCProcessingToSendCount
     *
     * The number of reminders advising the buyer to send documents for credit card processing.
     *
     * @return int
     */
    public function getDocsForCCProcessingToSendCount()
    {
        return $this->docsForCCProcessingToSendCount;
    }

    /**
     * Sets a new docsForCCProcessingToSendCount
     *
     * The number of reminders advising the buyer to send documents for credit card processing.
     *
     * @param int $docsForCCProcessingToSendCount
     * @return self
     */
    public function setDocsForCCProcessingToSendCount($docsForCCProcessingToSendCount)
    {
        $this->docsForCCProcessingToSendCount = $docsForCCProcessingToSendCount;
        return $this;
    }

    /**
     * Gets as rTEToProcessCount
     *
     * The number of reminders requesting the buyer to process request time extension submitted by the seller.
     *
     * @return int
     */
    public function getRTEToProcessCount()
    {
        return $this->rTEToProcessCount;
    }

    /**
     * Sets a new rTEToProcessCount
     *
     * The number of reminders requesting the buyer to process request time extension submitted by the seller.
     *
     * @param int $rTEToProcessCount
     * @return self
     */
    public function setRTEToProcessCount($rTEToProcessCount)
    {
        $this->rTEToProcessCount = $rTEToProcessCount;
        return $this;
    }

    /**
     * Gets as itemReceiptToConfirmCount
     *
     * The number of reminders requesting the Buyer to confirm item receipt to seller.
     *
     * @return int
     */
    public function getItemReceiptToConfirmCount()
    {
        return $this->itemReceiptToConfirmCount;
    }

    /**
     * Sets a new itemReceiptToConfirmCount
     *
     * The number of reminders requesting the Buyer to confirm item receipt to seller.
     *
     * @param int $itemReceiptToConfirmCount
     * @return self
     */
    public function setItemReceiptToConfirmCount($itemReceiptToConfirmCount)
    {
        $this->itemReceiptToConfirmCount = $itemReceiptToConfirmCount;
        return $this;
    }

    /**
     * Gets as refundOnHoldCount
     *
     * The number of reminders to the buyer on refund on hold.
     *
     * @return int
     */
    public function getRefundOnHoldCount()
    {
        return $this->refundOnHoldCount;
    }

    /**
     * Sets a new refundOnHoldCount
     *
     * The number of reminders to the buyer on refund on hold.
     *
     * @param int $refundOnHoldCount
     * @return self
     */
    public function setRefundOnHoldCount($refundOnHoldCount)
    {
        $this->refundOnHoldCount = $refundOnHoldCount;
        return $this;
    }

    /**
     * Gets as refundCancelledCount
     *
     * The number of reminders to the buyer on refund cancelled.
     *
     * @return int
     */
    public function getRefundCancelledCount()
    {
        return $this->refundCancelledCount;
    }

    /**
     * Sets a new refundCancelledCount
     *
     * The number of reminders to the buyer on refund cancelled.
     *
     * @param int $refundCancelledCount
     * @return self
     */
    public function setRefundCancelledCount($refundCancelledCount)
    {
        $this->refundCancelledCount = $refundCancelledCount;
        return $this;
    }

    /**
     * Gets as shippingDetailsToBeProvidedCount
     *
     * The number of reminders requesting the seller to provide shipping details
     *
     * @return int
     */
    public function getShippingDetailsToBeProvidedCount()
    {
        return $this->shippingDetailsToBeProvidedCount;
    }

    /**
     * Sets a new shippingDetailsToBeProvidedCount
     *
     * The number of reminders requesting the seller to provide shipping details
     *
     * @param int $shippingDetailsToBeProvidedCount
     * @return self
     */
    public function setShippingDetailsToBeProvidedCount($shippingDetailsToBeProvidedCount)
    {
        $this->shippingDetailsToBeProvidedCount = $shippingDetailsToBeProvidedCount;
        return $this;
    }

    /**
     * Gets as itemReceiptConfirmationToReceiveCount
     *
     * The number of reminders to the seller on item receipt confirmation pending from buyer
     *
     * @return int
     */
    public function getItemReceiptConfirmationToReceiveCount()
    {
        return $this->itemReceiptConfirmationToReceiveCount;
    }

    /**
     * Sets a new itemReceiptConfirmationToReceiveCount
     *
     * The number of reminders to the seller on item receipt confirmation pending from buyer
     *
     * @param int $itemReceiptConfirmationToReceiveCount
     * @return self
     */
    public function setItemReceiptConfirmationToReceiveCount($itemReceiptConfirmationToReceiveCount)
    {
        $this->itemReceiptConfirmationToReceiveCount = $itemReceiptConfirmationToReceiveCount;
        return $this;
    }

    /**
     * Gets as refundInitiatedCount
     *
     * The number of reminders to the seller on refunds initiated
     *
     * @return int
     */
    public function getRefundInitiatedCount()
    {
        return $this->refundInitiatedCount;
    }

    /**
     * Sets a new refundInitiatedCount
     *
     * The number of reminders to the seller on refunds initiated
     *
     * @param int $refundInitiatedCount
     * @return self
     */
    public function setRefundInitiatedCount($refundInitiatedCount)
    {
        $this->refundInitiatedCount = $refundInitiatedCount;
        return $this;
    }

    /**
     * Gets as pendingRTERequestCount
     *
     * The number of reminders to the seller on pending shipping time extension requests with the buyer
     *
     * @return int
     */
    public function getPendingRTERequestCount()
    {
        return $this->pendingRTERequestCount;
    }

    /**
     * Sets a new pendingRTERequestCount
     *
     * The number of reminders to the seller on pending shipping time extension requests with the buyer
     *
     * @param int $pendingRTERequestCount
     * @return self
     */
    public function setPendingRTERequestCount($pendingRTERequestCount)
    {
        $this->pendingRTERequestCount = $pendingRTERequestCount;
        return $this;
    }

    /**
     * Gets as declinedRTERequestCount
     *
     * The number of reminders to the seller on declined shipping time extension requests by the buyer
     *
     * @return int
     */
    public function getDeclinedRTERequestCount()
    {
        return $this->declinedRTERequestCount;
    }

    /**
     * Sets a new declinedRTERequestCount
     *
     * The number of reminders to the seller on declined shipping time extension requests by the buyer
     *
     * @param int $declinedRTERequestCount
     * @return self
     */
    public function setDeclinedRTERequestCount($declinedRTERequestCount)
    {
        $this->declinedRTERequestCount = $declinedRTERequestCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPaymentToSendCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentToSendCount", $value);
        }
        $value = $this->getFeedbackToReceiveCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackToReceiveCount", $value);
        }
        $value = $this->getFeedbackToSendCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackToSendCount", $value);
        }
        $value = $this->getOutbidCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OutbidCount", $value);
        }
        $value = $this->getPaymentToReceiveCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentToReceiveCount", $value);
        }
        $value = $this->getSecondChanceOfferCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondChanceOfferCount", $value);
        }
        $value = $this->getShippingNeededCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingNeededCount", $value);
        }
        $value = $this->getRelistingNeededCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistingNeededCount", $value);
        }
        $value = $this->getTotalNewLeadsCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalNewLeadsCount", $value);
        }
        $value = $this->getDocsForCCProcessingToSendCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DocsForCCProcessingToSendCount", $value);
        }
        $value = $this->getRTEToProcessCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RTEToProcessCount", $value);
        }
        $value = $this->getItemReceiptToConfirmCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemReceiptToConfirmCount", $value);
        }
        $value = $this->getRefundOnHoldCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundOnHoldCount", $value);
        }
        $value = $this->getRefundCancelledCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundCancelledCount", $value);
        }
        $value = $this->getShippingDetailsToBeProvidedCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDetailsToBeProvidedCount", $value);
        }
        $value = $this->getItemReceiptConfirmationToReceiveCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemReceiptConfirmationToReceiveCount", $value);
        }
        $value = $this->getRefundInitiatedCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundInitiatedCount", $value);
        }
        $value = $this->getPendingRTERequestCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PendingRTERequestCount", $value);
        }
        $value = $this->getDeclinedRTERequestCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeclinedRTERequestCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentToSendCount');
        if (null !== $value) {
            $this->setPaymentToSendCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackToReceiveCount');
        if (null !== $value) {
            $this->setFeedbackToReceiveCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackToSendCount');
        if (null !== $value) {
            $this->setFeedbackToSendCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OutbidCount');
        if (null !== $value) {
            $this->setOutbidCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentToReceiveCount');
        if (null !== $value) {
            $this->setPaymentToReceiveCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceOfferCount');
        if (null !== $value) {
            $this->setSecondChanceOfferCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingNeededCount');
        if (null !== $value) {
            $this->setShippingNeededCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistingNeededCount');
        if (null !== $value) {
            $this->setRelistingNeededCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalNewLeadsCount');
        if (null !== $value) {
            $this->setTotalNewLeadsCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DocsForCCProcessingToSendCount');
        if (null !== $value) {
            $this->setDocsForCCProcessingToSendCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RTEToProcessCount');
        if (null !== $value) {
            $this->setRTEToProcessCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemReceiptToConfirmCount');
        if (null !== $value) {
            $this->setItemReceiptToConfirmCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundOnHoldCount');
        if (null !== $value) {
            $this->setRefundOnHoldCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundCancelledCount');
        if (null !== $value) {
            $this->setRefundCancelledCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDetailsToBeProvidedCount');
        if (null !== $value) {
            $this->setShippingDetailsToBeProvidedCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemReceiptConfirmationToReceiveCount');
        if (null !== $value) {
            $this->setItemReceiptConfirmationToReceiveCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundInitiatedCount');
        if (null !== $value) {
            $this->setRefundInitiatedCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PendingRTERequestCount');
        if (null !== $value) {
            $this->setPendingRTERequestCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeclinedRTERequestCount');
        if (null !== $value) {
            $this->setDeclinedRTERequestCount($value);
        }
    }
}
