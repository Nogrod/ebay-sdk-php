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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemsAwaitingFeedback;
        if (null !== $value) {
            $writer->startElementNs(null, 'ItemsAwaitingFeedback', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetItemsAwaitingFeedbackResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ItemsAwaitingFeedback':
                    $this->itemsAwaitingFeedback = \Nogrod\eBaySDK\Trading\PaginatedTransactionArrayType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ItemsAwaitingFeedback'] = $this->itemsAwaitingFeedback;
        return $data;
    }
}
