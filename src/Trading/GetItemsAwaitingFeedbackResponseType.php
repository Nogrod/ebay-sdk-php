<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemsAwaitingFeedbackResponseType
 *
 * This is the base response type of the <b>GetItemsAwaitingFeedback</b> call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to leave Feedback for their order partner.
 * XSD Type: GetItemsAwaitingFeedbackResponseType
 */
class GetItemsAwaitingFeedbackResponseType extends AbstractResponseType
{

    /**
     * This container consists of one or more order line items that are awaiting Feedback from the user that made the call. Each order line item is returned in its own <b>TransactionArray.Transaction</b> container.
     *  <br><br>
     *  This container will not be returned if no order line items are awaiting Feedback from the user who made the call.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginatedTransactionArrayType $itemsAwaitingFeedback
     */
    private $itemsAwaitingFeedback = null;

    /**
     * Gets as itemsAwaitingFeedback
     *
     * This container consists of one or more order line items that are awaiting Feedback from the user that made the call. Each order line item is returned in its own <b>TransactionArray.Transaction</b> container.
     *  <br><br>
     *  This container will not be returned if no order line items are awaiting Feedback from the user who made the call.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginatedTransactionArrayType
     */
    public function getItemsAwaitingFeedback()
    {
        return $this->itemsAwaitingFeedback;
    }

    /**
     * Sets a new itemsAwaitingFeedback
     *
     * This container consists of one or more order line items that are awaiting Feedback from the user that made the call. Each order line item is returned in its own <b>TransactionArray.Transaction</b> container.
     *  <br><br>
     *  This container will not be returned if no order line items are awaiting Feedback from the user who made the call.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginatedTransactionArrayType $itemsAwaitingFeedback
     * @return self
     */
    public function setItemsAwaitingFeedback(\Nogrod\eBaySDK\Trading\PaginatedTransactionArrayType $itemsAwaitingFeedback)
    {
        $this->itemsAwaitingFeedback = $itemsAwaitingFeedback;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemsAwaitingFeedback();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemsAwaitingFeedback", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemsAwaitingFeedback');
        if (null !== $value) {
            $this->setItemsAwaitingFeedback(\Nogrod\eBaySDK\Trading\PaginatedTransactionArrayType::fromKeyValue($value));
        }
    }
}
