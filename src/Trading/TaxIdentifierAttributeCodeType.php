<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing TaxIdentifierAttributeCodeType
 *
 * This enumerated type contains the possible values that can be returned in the <b>name</b> attribute of the <b>BuyerTaxIdentifier.Attribute</b> field. Currently, this type only contains one enumeration value, but in the future, other attributes related to the tax ID may be created for this type.
 * XSD Type: TaxIdentifierAttributeCodeType
 */
class TaxIdentifierAttributeCodeType
{

    /**
     * Constant for 'IssuingCountry' value.
     *
     * This value indicates that the value returned in the
     * <b>BuyerTaxIdentifier.Attribute</b> field is the country that issued the buyer
     * tax ID.
     */
    public const VAL_ISSUING_COUNTRY = 'IssuingCountry';

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
