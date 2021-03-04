<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PolicyComplianceStatusCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: PolicyComplianceStatusCodeType
 */
class PolicyComplianceStatusCodeType
{
    /**
     * Constant for 'Good' value.
     *
     * This value is not used.
     */
    public const VAL_GOOD = 'Good';

    /**
     * Constant for 'Fair' value.
     *
     * This value is not used.
     */
    public const VAL_FAIR = 'Fair';

    /**
     * Constant for 'Poor' value.
     *
     * This value is not used.
     */
    public const VAL_POOR = 'Poor';

    /**
     * Constant for 'Failing' value.
     *
     * This value is not used.
     */
    public const VAL_FAILING = 'Failing';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is not used.
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
