<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ConsolidationJobStatusType
 *
 * Enumerated type defining the possible status values for a shipping policies consolidation job.
 * XSD Type: ConsolidationJobStatus
 */
class ConsolidationJobStatusType
{
    /**
     * Constant for 'Running' value.
     *
     * This value indicates that the shipping policies consolidation job is currently
     * in progress.
     */
    public const VAL_RUNNING = 'Running';

    /**
     * Constant for 'Complete' value.
     *
     * This value indicates that the shipping policies consolidation job has
     * successfully completed.
     */
    public const VAL_COMPLETE = 'Complete';

    /**
     * Constant for 'Failed' value.
     *
     * This value indicates that the shipping policies consolidation job has failed. If
     * this value is returned, it is possible that the user can find the reason for job
     * failure by looking at the <b>errorMessage</b> container (if any) in the same
     * response.
     */
    public const VAL_FAILED = 'Failed';

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
