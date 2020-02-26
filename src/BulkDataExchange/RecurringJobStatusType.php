<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

/**
 * Class representing RecurringJobStatusType
 *
 * Enumerated type defining the possible states of a Bulk Data Exchange recurring job.
 * XSD Type: RecurringJobStatus
 */
class RecurringJobStatusType
{

    /**
     * Constant for 'Active' value.
     *
     * This value indicates that the recurring job is active.
     */
    public const VAL_ACTIVE = 'Active';

    /**
     * Constant for 'Suspended' value.
     *
     * This value indicates that the recurring job is temporarily suspended. Use
     * <b>activateRecurringJob</b> to restart a suspended recurring job.
     */
    public const VAL_SUSPENDED = 'Suspended';

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
