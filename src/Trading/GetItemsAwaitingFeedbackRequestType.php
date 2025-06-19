<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemsAwaitingFeedbackRequestType
 *
 * This is the base request type of the <b>GetItemsAwaitingFeedback</b> call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to leave Feedback for their order partner.
 * XSD Type: GetItemsAwaitingFeedbackRequestType
 */
class GetItemsAwaitingFeedbackRequestType extends AbstractRequestType
{
    /**
     * This field allows the user to control how the order line items are returned in the response. If this field is not used, order line items are returned based on end time (from most recent to oldest).
     *  Valid values for this field are:
     *  <ul>
     *  <li><code>EndTime</code></li>
     *  <li><code>EndTimeDescending</code> (default value)</li>
     *  <li><code>FeedbackLeft</code></li>
     *  <li><code>FeedbackLeftDescending</code></li>
     *  <li><code>FeedbackReceived</code></li>
     *  <li><code>FeedbackReceivedDescending</code></li>
     *  <li><code>Title</code></li>
     *  <li><code>TitleDescending</code></li>
     *  <li><code>UserID</code></li>
     *  <li><code>UserIDDescending</code></li>
     *  </ul>
     *  Reference the <a href="types/ItemSortTypeCodeType.html">ItemSortTypeCodeType</a> definition for more information on these sort values.
     *  <br/>
     *
     * @var string $sort
     */
    private $sort = null;

    /**
     * This container can be used if the user only wants to see a subset of order line item results. In this container, the user will specify the number of order line items to return per page of data, and will specify the specific page of data they want to view with each call.
     *  <br/><br/>
     *  With the <b>GetItemsAwaitingFeedback</b> call, the maximum allowed value for <b>EntriesPerPage</b> is 200.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * Gets as sort
     *
     * This field allows the user to control how the order line items are returned in the response. If this field is not used, order line items are returned based on end time (from most recent to oldest).
     *  Valid values for this field are:
     *  <ul>
     *  <li><code>EndTime</code></li>
     *  <li><code>EndTimeDescending</code> (default value)</li>
     *  <li><code>FeedbackLeft</code></li>
     *  <li><code>FeedbackLeftDescending</code></li>
     *  <li><code>FeedbackReceived</code></li>
     *  <li><code>FeedbackReceivedDescending</code></li>
     *  <li><code>Title</code></li>
     *  <li><code>TitleDescending</code></li>
     *  <li><code>UserID</code></li>
     *  <li><code>UserIDDescending</code></li>
     *  </ul>
     *  Reference the <a href="types/ItemSortTypeCodeType.html">ItemSortTypeCodeType</a> definition for more information on these sort values.
     *  <br/>
     *
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * This field allows the user to control how the order line items are returned in the response. If this field is not used, order line items are returned based on end time (from most recent to oldest).
     *  Valid values for this field are:
     *  <ul>
     *  <li><code>EndTime</code></li>
     *  <li><code>EndTimeDescending</code> (default value)</li>
     *  <li><code>FeedbackLeft</code></li>
     *  <li><code>FeedbackLeftDescending</code></li>
     *  <li><code>FeedbackReceived</code></li>
     *  <li><code>FeedbackReceivedDescending</code></li>
     *  <li><code>Title</code></li>
     *  <li><code>TitleDescending</code></li>
     *  <li><code>UserID</code></li>
     *  <li><code>UserIDDescending</code></li>
     *  </ul>
     *  Reference the <a href="types/ItemSortTypeCodeType.html">ItemSortTypeCodeType</a> definition for more information on these sort values.
     *  <br/>
     *
     * @param string $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * This container can be used if the user only wants to see a subset of order line item results. In this container, the user will specify the number of order line items to return per page of data, and will specify the specific page of data they want to view with each call.
     *  <br/><br/>
     *  With the <b>GetItemsAwaitingFeedback</b> call, the maximum allowed value for <b>EntriesPerPage</b> is 200.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationType
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * Sets a new pagination
     *
     * This container can be used if the user only wants to see a subset of order line item results. In this container, the user will specify the number of order line items to return per page of data, and will specify the specific page of data they want to view with each call.
     *  <br/><br/>
     *  With the <b>GetItemsAwaitingFeedback</b> call, the maximum allowed value for <b>EntriesPerPage</b> is 200.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSort();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sort", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetItemsAwaitingFeedbackRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sort');
        if (null !== $value) {
            $this->setSort($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
    }
}
