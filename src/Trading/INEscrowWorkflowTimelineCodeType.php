<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing INEscrowWorkflowTimelineCodeType
 *
 * <span class="tablenote"><b>Note:</b>
 *  This enumerated type is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
 * XSD Type: INEscrowWorkflowTimelineCodeType
 */
class INEscrowWorkflowTimelineCodeType
{
    /**
     * Constant for 'Default' value.
     *
     * Default Escrow timelines apply.
     */
    public const VAL_DEFAULT = 'Default';

    /**
     * Constant for 'WorkflowA' value.
     *
     * Special Escrow timelines for Workflow A applies.
     */
    public const VAL_WORKFLOW_A = 'WorkflowA';

    /**
     * Constant for 'WorkflowB' value.
     *
     * Special Escrow timelines for Workflow B applies.
     */
    public const VAL_WORKFLOW_B = 'WorkflowB';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
