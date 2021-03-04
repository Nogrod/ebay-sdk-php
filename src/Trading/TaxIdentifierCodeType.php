<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing TaxIdentifierCodeType
 *
 * This type is not currently used.
 * XSD Type: TaxIdentifierCodeType
 */
class TaxIdentifierCodeType
{
    /**
     * Constant for 'CodiceFiscale' value.
     */
    public const VAL_CODICE_FISCALE = 'CodiceFiscale';

    /**
     * Constant for 'DNI' value.
     */
    public const VAL_DNI = 'DNI';

    /**
     * Constant for 'RussianPassport' value.
     */
    public const VAL_RUSSIAN_PASSPORT = 'RussianPassport';

    /**
     * Constant for 'CPFTaxID' value.
     */
    public const VAL_CPFTAX_ID = 'CPFTaxID';

    /**
     * Constant for 'TurkeyID' value.
     */
    public const VAL_TURKEY_ID = 'TurkeyID';

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
