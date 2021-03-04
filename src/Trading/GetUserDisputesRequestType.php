<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserDisputesRequestType
 *
 * Requests a list of disputes the requester is involved in as buyer or seller. eBay Money Back Guarantee Item Not Received and Return cases are not returned with this call. To retrieve eBay Money Back Guarantee cases, use the <b>Search Cases</b> call of the Post-Order API (or alternatively, the <b>getUserCases</b> call of the Resolution Case Management API.
 * XSD Type: GetUserDisputesRequestType
 */
class GetUserDisputesRequestType extends AbstractRequestType
{
    /**
     * An inclusive filter that isolates the returned disputes to a certain type such as Item Not Received or Unpaid Item disputes. eBay Money Back Guarantee cases are not retrieved with this call, even if the <b>ItemNotReceivedDisputes</b> filter is included in the request.
     *
     * @var string $disputeFilterType
     */
    private $disputeFilterType = null;

    /**
     * One of the values defined in <b>DisputeSortTypeCodeType</b> is used here to control the order of disputes that are returned.
     *
     * @var string $disputeSortType
     */
    private $disputeSortType = null;

    /**
     * A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @var \DateTime $modTimeFrom
     */
    private $modTimeFrom = null;

    /**
     * A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeFrom</b>. Otherwise, all available disputes modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     *
     * @var \DateTime $modTimeTo
     */
    private $modTimeTo = null;

    /**
     * The virtual page number of the result set to display. A result set has a number of disputes divided into virtual pages, with 200 disputes per page. The response can only display one page. The first page in the result set is number 1. Required. If not specified, a warning is returned and <b>Pagination.PageNumber</b> is set to 1 by default.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationType $pagination
     */
    private $pagination = null;

    /**
     * Gets as disputeFilterType
     *
     * An inclusive filter that isolates the returned disputes to a certain type such as Item Not Received or Unpaid Item disputes. eBay Money Back Guarantee cases are not retrieved with this call, even if the <b>ItemNotReceivedDisputes</b> filter is included in the request.
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
     * An inclusive filter that isolates the returned disputes to a certain type such as Item Not Received or Unpaid Item disputes. eBay Money Back Guarantee cases are not retrieved with this call, even if the <b>ItemNotReceivedDisputes</b> filter is included in the request.
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
     * One of the values defined in <b>DisputeSortTypeCodeType</b> is used here to control the order of disputes that are returned.
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
     * One of the values defined in <b>DisputeSortTypeCodeType</b> is used here to control the order of disputes that are returned.
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
     * A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
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
     * A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
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
     * A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeFrom</b>. Otherwise, all available disputes modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
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
     * A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise control of the date range filter, it is a good practice to also specify <b>ModTimeFrom</b>. Otherwise, all available disputes modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
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
     * The virtual page number of the result set to display. A result set has a number of disputes divided into virtual pages, with 200 disputes per page. The response can only display one page. The first page in the result set is number 1. Required. If not specified, a warning is returned and <b>Pagination.PageNumber</b> is set to 1 by default.
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
     * The virtual page number of the result set to display. A result set has a number of disputes divided into virtual pages, with 200 disputes per page. The response can only display one page. The first page in the result set is number 1. Required. If not specified, a warning is returned and <b>Pagination.PageNumber</b> is set to 1 by default.
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
