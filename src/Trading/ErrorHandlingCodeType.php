<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ErrorHandlingCodeType
 *
 * Preferences that specify how eBay should handle certain requests that contain
 *  invalid data or that could partially fail. These preferences give you some control
 *  over whether eBay returns warnings or errors in response to invalid data and how
 *  eBay handles listing requests when such data is passed in. For example, these
 *  preferences are applicable to <b>AddItem</b> and related calls when Item Specifics are
 *  specified, and to <b>CompleteSale</b>. See <a href="https://developer.ebay.com/api-docs/user-guides/static/make-a-call/error-handling.html">Error handling</a>
 *  for details about these preferences and their effects.
 * XSD Type: ErrorHandlingCodeType
 */
class ErrorHandlingCodeType
{
    /**
     * Constant for 'Legacy' value.
     *
     * Apply validation rules that were in effect prior to the time
     *  the call started supporting <b>ErrorHandling</b>.
     */
    public const VAL_LEGACY = 'Legacy';

    /**
     * Constant for 'BestEffort' value.
     *
     * Drop the invalid data, continue processing the request with the
     *  valid data. If dropping the invalid data leaves the request in a
     *  state where required data is missing, reject the request.<br>
     *  <br>
     *  If <b>BestEffort</b> is specified for <b>CompleteSale</b>, the Ack field in the
     *  response could return PartialFailure if one change fails but
     *  another succeeds. For example, if the seller attempts to
     *  leave feedback twice for the same order line item, the feedback changes
     *  would fail but any paid or shipped status changes would succeed.
     */
    public const VAL_BEST_EFFORT = 'BestEffort';

    /**
     * Constant for 'AllOrNothing' value.
     *
     * If any of the item specifics data is invalid, drop all the data and
     *  proceed with listing the item. If the category has required item specifics
     *  and the data was dropped, reject the listing.
     */
    public const VAL_ALL_OR_NOTHING = 'AllOrNothing';

    /**
     * Constant for 'FailOnError' value.
     *
     * If any data is invalid, reject the request.
     */
    public const VAL_FAIL_ON_ERROR = 'FailOnError';

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
