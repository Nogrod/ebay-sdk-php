<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing OrderReportFilterType
 *
 * Type defining the <b>orderReportFilter</b> container, which allows the user
 *  to set time, order status, or order type (eBay or Half.com) filters, and to specify whether or not to include Final Value Fees for each order line item in Merchant Data's <b>OrderReport</b> response.
 *  <br/><br/>
 *  The <b>orderReportFilter</b> container is only applicable if the <b>downloadJobType</b> value is set to 'OrderReport'.
 * XSD Type: OrderReportFilter
 */
class OrderReportFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The <b>createTimeFrom</b> and <b>createTimeTo</b> fields specify a date range for retrieving orders. The <b>createTimeFrom</b> value is the start of the date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>createTimeFrom</b> field is set, the <b>createTimeTo</b> field must also be included or the call will fail.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half'.
     *
     * @var \DateTime $createTimeFrom
     */
    private $createTimeFrom = null;

    /**
     * The <b>createTimeFrom</b> and <b>createTimeTo</b> fields specify a date range for retrieving
     *  orders. The <b>createTimeTo</b> value is the end of the date range. All eBay orders that
     *  were created within this date range are returned in the output. The maximum date
     *  range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>createTimeTo</b> field is set, the <b>createTimeFrom</b> field must also be included or the call will fail.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
     *
     * @var \DateTime $createTimeTo
     */
    private $createTimeTo = null;

    /**
     * The <b>modTimeFrom</b> and <b>modTimeTo</b> fields specify a date range for retrieving orders. The <b>modTimeFrom</b> value is the start of the date range. All eBay orders that were modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>modTimeFrom</b> field is set, the <b>modTimeTo</b> field must also be included or the call will fail. The <b>modTimeFrom</b> and <b>modTimeTo</b> filters are not applicable if the <b>createTimeFrom</b> and <b>createTimeTo</b> fields are set.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
     *
     * @var \DateTime $modTimeFrom
     */
    private $modTimeFrom = null;

    /**
     * The <b>modTimeFrom</b> and <b>modTimeTo</b> fields specify a date range for retrieving orders. The <b>modTimeTo</b> value is the end of the date range. All eBay orders that were modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>modTimeFrom</b> field is set, the <b>modTimeTo</b> field must also be included or the call will fail. The <b>modTimeFrom</b> and <b>modTimeTo</b> filters are not applicable if the <b>createTimeFrom</b> and <b>createTimeTo</b> fields are set.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
     *
     * @var \DateTime $modTimeTo
     */
    private $modTimeTo = null;

    /**
     * This field should be included and set to 'true' if the user wishes to include the Final Value Fee for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an eBay order line item.
     *
     * @var bool $includeFinalValueFee
     */
    private $includeFinalValueFee = null;

    /**
     * This field must be included and set to 'Half' if the user only wants to retrieve Half.com orders. This field should not be used if the user wishes to retrieve eBay.com orders.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * The field is used to retrieve orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <strong>orderStatus</strong> value are retrieved.
     *  <br><br>
     *  For eBay.com orders, this field's value can be set to 'Active', 'Completed', 'Cancelled' or 'Inactive' to retrieve orders in these states. The 'Shipped' value is only applicable for Half.com orders.
     *
     * @var string $orderStatus
     */
    private $orderStatus = null;

    /**
     * The value input into this field indicates the version number of the Trading API (specifically, GetOrders) that will be called when the <strong>orderReport</strong> is generated. This value must be a valid Trading API version number and it must be Version 841 or later. If an older version is used, <strong>orderReport</strong> will fail.
     *  <br><br>
     *  This field is required if the <strong>orderReportFilter</strong> container is used.
     *
     * @var int $version
     */
    private $version = null;

    /**
     * Gets as createTimeFrom
     *
     * The <b>createTimeFrom</b> and <b>createTimeTo</b> fields specify a date range for retrieving orders. The <b>createTimeFrom</b> value is the start of the date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>createTimeFrom</b> field is set, the <b>createTimeTo</b> field must also be included or the call will fail.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half'.
     *
     * @return \DateTime
     */
    public function getCreateTimeFrom()
    {
        return $this->createTimeFrom;
    }

    /**
     * Sets a new createTimeFrom
     *
     * The <b>createTimeFrom</b> and <b>createTimeTo</b> fields specify a date range for retrieving orders. The <b>createTimeFrom</b> value is the start of the date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>createTimeFrom</b> field is set, the <b>createTimeTo</b> field must also be included or the call will fail.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half'.
     *
     * @param \DateTime $createTimeFrom
     * @return self
     */
    public function setCreateTimeFrom(\DateTime $createTimeFrom)
    {
        $this->createTimeFrom = $createTimeFrom;
        return $this;
    }

    /**
     * Gets as createTimeTo
     *
     * The <b>createTimeFrom</b> and <b>createTimeTo</b> fields specify a date range for retrieving
     *  orders. The <b>createTimeTo</b> value is the end of the date range. All eBay orders that
     *  were created within this date range are returned in the output. The maximum date
     *  range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>createTimeTo</b> field is set, the <b>createTimeFrom</b> field must also be included or the call will fail.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
     *
     * @return \DateTime
     */
    public function getCreateTimeTo()
    {
        return $this->createTimeTo;
    }

    /**
     * Sets a new createTimeTo
     *
     * The <b>createTimeFrom</b> and <b>createTimeTo</b> fields specify a date range for retrieving
     *  orders. The <b>createTimeTo</b> value is the end of the date range. All eBay orders that
     *  were created within this date range are returned in the output. The maximum date
     *  range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>createTimeTo</b> field is set, the <b>createTimeFrom</b> field must also be included or the call will fail.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
     *
     * @param \DateTime $createTimeTo
     * @return self
     */
    public function setCreateTimeTo(\DateTime $createTimeTo)
    {
        $this->createTimeTo = $createTimeTo;
        return $this;
    }

    /**
     * Gets as modTimeFrom
     *
     * The <b>modTimeFrom</b> and <b>modTimeTo</b> fields specify a date range for retrieving orders. The <b>modTimeFrom</b> value is the start of the date range. All eBay orders that were modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>modTimeFrom</b> field is set, the <b>modTimeTo</b> field must also be included or the call will fail. The <b>modTimeFrom</b> and <b>modTimeTo</b> filters are not applicable if the <b>createTimeFrom</b> and <b>createTimeTo</b> fields are set.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
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
     * The <b>modTimeFrom</b> and <b>modTimeTo</b> fields specify a date range for retrieving orders. The <b>modTimeFrom</b> value is the start of the date range. All eBay orders that were modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>modTimeFrom</b> field is set, the <b>modTimeTo</b> field must also be included or the call will fail. The <b>modTimeFrom</b> and <b>modTimeTo</b> filters are not applicable if the <b>createTimeFrom</b> and <b>createTimeTo</b> fields are set.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
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
     * The <b>modTimeFrom</b> and <b>modTimeTo</b> fields specify a date range for retrieving orders. The <b>modTimeTo</b> value is the end of the date range. All eBay orders that were modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>modTimeFrom</b> field is set, the <b>modTimeTo</b> field must also be included or the call will fail. The <b>modTimeFrom</b> and <b>modTimeTo</b> filters are not applicable if the <b>createTimeFrom</b> and <b>createTimeTo</b> fields are set.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
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
     * The <b>modTimeFrom</b> and <b>modTimeTo</b> fields specify a date range for retrieving orders. The <b>modTimeTo</b> value is the end of the date range. All eBay orders that were modified within this date range are returned in the output. The maximum date range that may be specified is 30 days.
     *  <br><br>
     *  If the <b>modTimeFrom</b> field is set, the <b>modTimeTo</b> field must also be included or the call will fail. The <b>modTimeFrom</b> and <b>modTimeTo</b> filters are not applicable if the <b>createTimeFrom</b> and <b>createTimeTo</b> fields are set.
     *  <br><br>
     *  If the order Creation Time or order Modification Time filters are not provided, the default behavior is to retrieve unacknowledged orders from the last 30 days.
     *  <br><br>
     *  Applicable to Half.com (if the <b>listingType</b> field is included and set to 'Half').
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
     * Gets as includeFinalValueFee
     *
     * This field should be included and set to 'true' if the user wishes to include the Final Value Fee for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an eBay order line item.
     *
     * @return bool
     */
    public function getIncludeFinalValueFee()
    {
        return $this->includeFinalValueFee;
    }

    /**
     * Sets a new includeFinalValueFee
     *
     * This field should be included and set to 'true' if the user wishes to include the Final Value Fee for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an eBay order line item.
     *
     * @param bool $includeFinalValueFee
     * @return self
     */
    public function setIncludeFinalValueFee($includeFinalValueFee)
    {
        $this->includeFinalValueFee = $includeFinalValueFee;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * This field must be included and set to 'Half' if the user only wants to retrieve Half.com orders. This field should not be used if the user wishes to retrieve eBay.com orders.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * This field must be included and set to 'Half' if the user only wants to retrieve Half.com orders. This field should not be used if the user wishes to retrieve eBay.com orders.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as orderStatus
     *
     * The field is used to retrieve orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <strong>orderStatus</strong> value are retrieved.
     *  <br><br>
     *  For eBay.com orders, this field's value can be set to 'Active', 'Completed', 'Cancelled' or 'Inactive' to retrieve orders in these states. The 'Shipped' value is only applicable for Half.com orders.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Sets a new orderStatus
     *
     * The field is used to retrieve orders that are in a specific state. If this field is used with a date filter, only orders that satisfy both the date range and the <strong>orderStatus</strong> value are retrieved.
     *  <br><br>
     *  For eBay.com orders, this field's value can be set to 'Active', 'Completed', 'Cancelled' or 'Inactive' to retrieve orders in these states. The 'Shipped' value is only applicable for Half.com orders.
     *
     * @param string $orderStatus
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Gets as version
     *
     * The value input into this field indicates the version number of the Trading API (specifically, GetOrders) that will be called when the <strong>orderReport</strong> is generated. This value must be a valid Trading API version number and it must be Version 841 or later. If an older version is used, <strong>orderReport</strong> will fail.
     *  <br><br>
     *  This field is required if the <strong>orderReportFilter</strong> container is used.
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The value input into this field indicates the version number of the Trading API (specifically, GetOrders) that will be called when the <strong>orderReport</strong> is generated. This value must be a valid Trading API version number and it must be Version 841 or later. If an older version is used, <strong>orderReport</strong> will fail.
     *  <br><br>
     *  This field is required if the <strong>orderReportFilter</strong> container is used.
     *
     * @param int $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getCreateTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}createTimeFrom", $value);
        }
        $value = $this->getCreateTimeTo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}createTimeTo", $value);
        }
        $value = $this->getModTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}modTimeFrom", $value);
        }
        $value = $this->getModTimeTo();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}modTimeTo", $value);
        }
        $value = $this->getIncludeFinalValueFee();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeFinalValueFee", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}listingType", $value);
        }
        $value = $this->getOrderStatus();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}orderStatus", $value);
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}version", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}createTimeFrom');
        if (null !== $value) {
            $this->setCreateTimeFrom(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}createTimeTo');
        if (null !== $value) {
            $this->setCreateTimeTo(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}modTimeFrom');
        if (null !== $value) {
            $this->setModTimeFrom(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}modTimeTo');
        if (null !== $value) {
            $this->setModTimeTo(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeFinalValueFee');
        if (null !== $value) {
            $this->setIncludeFinalValueFee($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}listingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}orderStatus');
        if (null !== $value) {
            $this->setOrderStatus($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}version');
        if (null !== $value) {
            $this->setVersion($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
