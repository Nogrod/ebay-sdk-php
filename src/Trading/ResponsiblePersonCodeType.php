<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ResponsiblePersonCodeType
 *
 * This enumerated type defines the type of responsible person associated with a product.
 *  <br />
 *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponisblePerson</code>.</span>
 * XSD Type: ResponsiblePersonCodeType
 */
class ResponsiblePersonCodeType
{
    /**
     * Constant for 'EUResponsiblePerson' value.
     *
     * This value indicates the Responsible person is an EU Responsible Person. An EU
     * Responsible Person is crucial for ensuring that products comply with all
     * relevant regulations and safety standards to protect human health.
     */
    public const VAL_EURESPONSIBLE_PERSON = 'EUResponsiblePerson';

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
