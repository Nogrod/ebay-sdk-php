<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing VeROReportPacketStatusCodeType
 *
 * Enumerated type that contains the possible states of a VeRO Report packet. A VeRO Report packet is a set of one or more items that have been reported by a Verified Rights Owner as infringing upon the owner's intellectual property rights.
 * XSD Type: VeROReportPacketStatusCodeType
 */
class VeROReportPacketStatusCodeType
{
    /**
     * Constant for 'Received' value.
     *
     * This value indicates that the VeRO Report packet has been received by eBay.
     */
    public const VAL_RECEIVED = 'Received';

    /**
     * Constant for 'InProcess' value.
     *
     * This value indicates that eBay is in the process of reviewing the VeRO Report
     * packet. For a VeRO Report packet consisting of multiple items, the call user can
     * look at the <b>ReportedItemDetails</b> container in the
     * <b>GetVeROReportStatus</b> response to get more details about individual items
     * in the VeRO Report packet.
     */
    public const VAL_IN_PROCESS = 'InProcess';

    /**
     * Constant for 'Processed' value.
     *
     * This value indicates that the VeRO Report packet has been processed by eBay.
     */
    public const VAL_PROCESSED = 'Processed';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

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
