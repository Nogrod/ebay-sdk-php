<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddressAttributeCodeType
 *
 * This enumerated type contains the possible values that can be returned in the <b>type</b> attribute of the <b>AddressAttribute</b> field. Currently, this type only contains one enumeration value, but in the future, other address attributes may be created for this type.
 * XSD Type: AddressAttributeCodeType
 */
class AddressAttributeCodeType
{

    /**
     * Constant for 'ReferenceNumber' value.
     *
     * This value indicates that the value returned in the <b>AddressAttribute</b>
     * field is the reference ID for a "Click and Collect" order.
     */
    public const VAL_REFERENCE_NUMBER = 'ReferenceNumber';

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
