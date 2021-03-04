<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing AckCodeType
 *
 * This enumerated type identifies the possible values that can be returned in the <b>Ack</b> field in call responses. The <b>Ack</b> value will indicate if the call was completely successful, if the called failed, or if the call was partially successful, but with minor errors or warnings.
 * XSD Type: AckCodeType
 */
class AckCodeType
{
    /**
     * Constant for 'Success' value.
     *
     * This value indicates that the call request was processed successfully without
     * any issues.
     */
    public const VAL_SUCCESS = 'Success';

    /**
     * Constant for 'Failure' value.
     *
     * This value indicates that the call request processing failed.
     */
    public const VAL_FAILURE = 'Failure';

    /**
     * Constant for 'Warning' value.
     *
     * This value indicates that the call request was successful, but processing was
     * not without any issues. These issues can be checked in the <b>Errors</b>
     * container, that will also be returned when one or more known issues occur with
     * the call request.
     */
    public const VAL_WARNING = 'Warning';

    /**
     * Constant for 'PartialFailure' value.
     *
     * This value indicates that the call request partially failed. One or more issues
     * that may be responsible for this partial failure can be checked in the
     * <b>Errors</b> container, that will also be returned when one or more known
     * issues occur with the call request.
     */
    public const VAL_PARTIAL_FAILURE = 'PartialFailure';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
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
