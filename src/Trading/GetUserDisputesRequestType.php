<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserDisputesRequestType
 *
 * The base request type for the <b>GetUserDisputes</b> call.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This call is deprecated and is scheduled for decommission on January 31, 2023. The alternative API to search for cancellation requests is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation_search__get.html" target="_blank">Search Cancellations</a> method of the <a href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>.
 *  </span>
 * XSD Type: GetUserDisputesRequestType
 */
class GetUserDisputesRequestType extends AbstractRequestType
{
    /**
     * An inclusive filter that isolates the returned disputes to a certain type such as Unpaid Item cases.
     *
     * @var string $disputeFilterType
     */
    private $disputeFilterType = null;

    /**
     * One of the values defined in <b>DisputeSortTypeCodeType</b> is used here to control the order of cases that are returned.
     *
     * @var string $disputeSortType
     */
    private $disputeSortType = null;

    /**
     * A filter that retrieves cases whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @var \DateTime $modTimeFrom
     */
    private $modTimeFrom = null;

    /**
     * A filter that retrieves cases whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeFrom</b>. Otherwise, all available cases modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @var \DateTime $modTimeTo
     */
    private $modTimeTo = null;

    /**
     * This container is used to set the number of records to retrieve per page of data and also what page of data you want to view. If there are multiple pages of data in the result set, the user would have to make subsequent calls while upticking the <b>PageNumber</b> by 1 each time to view additional pages.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  <b>PaginationType</b> is a type used by multiple Trading API calls, and the minimum, maximum, and default values for <b>EntriesPerPage</b> can vary depending on the call. For <b>GetUserDisputes</b>, the <b>EntriesPerPage</b> value will always default to <code>200</code>, regardless of the value that is input by the user. For <b>PageNumber</b>, some Trading API calls use <code>0</code> for the first page of data in the result set, and some calls use <code>1</code> for the first page of data in the result set. For <b>GetUserDisputes</b>, <code>0</code> is used for the first page and it will default to <code>0</code> if the <b>PageNumber</b> is not included.
     *  <br/><br/>
     *  Technically, you can run a <b>GetUserDisputes</b> call without using the <b>Pagination</b> container at all (and default values will be used), but a warning message will be triggered if you don't use this container.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * Gets as disputeFilterType
     *
     * An inclusive filter that isolates the returned disputes to a certain type such as Unpaid Item cases.
     *
     * @return string
     */
    public function getDisputeFilterType()
    {
        return $this->disputeFilterType;
    }

    /**
     * Sets a new disputeFilterType
     *
     * An inclusive filter that isolates the returned disputes to a certain type such as Unpaid Item cases.
     *
     * @param string $disputeFilterType
     * @return self
     */
    public function setDisputeFilterType($disputeFilterType)
    {
        $this->disputeFilterType = $disputeFilterType;
        return $this;
    }

    /**
     * Gets as disputeSortType
     *
     * One of the values defined in <b>DisputeSortTypeCodeType</b> is used here to control the order of cases that are returned.
     *
     * @return string
     */
    public function getDisputeSortType()
    {
        return $this->disputeSortType;
    }

    /**
     * Sets a new disputeSortType
     *
     * One of the values defined in <b>DisputeSortTypeCodeType</b> is used here to control the order of cases that are returned.
     *
     * @param string $disputeSortType
     * @return self
     */
    public function setDisputeSortType($disputeSortType)
    {
        $this->disputeSortType = $disputeSortType;
        return $this;
    }

    /**
     * Gets as modTimeFrom
     *
     * A filter that retrieves cases whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @return \DateTime
     */
    public function getModTimeFrom()
    {
        return $this->modTimeFrom;
    }

    /**
     * Sets a new modTimeFrom
     *
     * A filter that retrieves cases whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @param \DateTime $modTimeFrom
     * @return self
     */
    public function setModTimeFrom(\DateTime $modTimeFrom)
    {
        $this->modTimeFrom = $modTimeFrom;
        return $this;
    }

    /**
     * Gets as modTimeTo
     *
     * A filter that retrieves cases whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeFrom</b>. Otherwise, all available cases modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @return \DateTime
     */
    public function getModTimeTo()
    {
        return $this->modTimeTo;
    }

    /**
     * Sets a new modTimeTo
     *
     * A filter that retrieves cases whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeFrom</b>. Otherwise, all available cases modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @param \DateTime $modTimeTo
     * @return self
     */
    public function setModTimeTo(\DateTime $modTimeTo)
    {
        $this->modTimeTo = $modTimeTo;
        return $this;
    }

    /**
     * Gets as pagination
     *
     * This container is used to set the number of records to retrieve per page of data and also what page of data you want to view. If there are multiple pages of data in the result set, the user would have to make subsequent calls while upticking the <b>PageNumber</b> by 1 each time to view additional pages.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  <b>PaginationType</b> is a type used by multiple Trading API calls, and the minimum, maximum, and default values for <b>EntriesPerPage</b> can vary depending on the call. For <b>GetUserDisputes</b>, the <b>EntriesPerPage</b> value will always default to <code>200</code>, regardless of the value that is input by the user. For <b>PageNumber</b>, some Trading API calls use <code>0</code> for the first page of data in the result set, and some calls use <code>1</code> for the first page of data in the result set. For <b>GetUserDisputes</b>, <code>0</code> is used for the first page and it will default to <code>0</code> if the <b>PageNumber</b> is not included.
     *  <br/><br/>
     *  Technically, you can run a <b>GetUserDisputes</b> call without using the <b>Pagination</b> container at all (and default values will be used), but a warning message will be triggered if you don't use this container.
     *  </span>
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
     * This container is used to set the number of records to retrieve per page of data and also what page of data you want to view. If there are multiple pages of data in the result set, the user would have to make subsequent calls while upticking the <b>PageNumber</b> by 1 each time to view additional pages.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  <b>PaginationType</b> is a type used by multiple Trading API calls, and the minimum, maximum, and default values for <b>EntriesPerPage</b> can vary depending on the call. For <b>GetUserDisputes</b>, the <b>EntriesPerPage</b> value will always default to <code>200</code>, regardless of the value that is input by the user. For <b>PageNumber</b>, some Trading API calls use <code>0</code> for the first page of data in the result set, and some calls use <code>1</code> for the first page of data in the result set. For <b>GetUserDisputes</b>, <code>0</code> is used for the first page and it will default to <code>0</code> if the <b>PageNumber</b> is not included.
     *  <br/><br/>
     *  Technically, you can run a <b>GetUserDisputes</b> call without using the <b>Pagination</b> container at all (and default values will be used), but a warning message will be triggered if you don't use this container.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationType $pagination
     * @return self
     */
    public function setPagination(\Nogrod\eBaySDK\Trading\PaginationType $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDisputeFilterType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeFilterType", $value);
        }
        $value = $this->getDisputeSortType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeSortType", $value);
        }
        $value = $this->getModTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeFrom", $value);
        }
        $value = $this->getModTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTimeTo", $value);
        }
        $value = $this->getPagination();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pagination", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeFilterType');
        if (null !== $value) {
            $this->setDisputeFilterType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeSortType');
        if (null !== $value) {
            $this->setDisputeSortType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeFrom');
        if (null !== $value) {
            $this->setModTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTimeTo');
        if (null !== $value) {
            $this->setModTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pagination');
        if (null !== $value) {
            $this->setPagination(\Nogrod\eBaySDK\Trading\PaginationType::fromKeyValue($value));
        }
    }
}
