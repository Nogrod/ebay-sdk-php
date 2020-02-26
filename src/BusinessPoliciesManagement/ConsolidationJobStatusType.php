<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ConsolidationJobStatusType
 *
 *
 * XSD Type: ConsolidationJobStatus
 */
class ConsolidationJobStatusType
{

    /**
     * Constant for 'Running' value.
     */
    public const VAL_RUNNING = 'Running';

    /**
     * Constant for 'Complete' value.
     */
    public const VAL_COMPLETE = 'Complete';

    /**
     * Constant for 'Failed' value.
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
