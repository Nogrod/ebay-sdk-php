<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ValueFormatCodeType
 *
 * Enumerated type that defines the date format that is used for a date-related field that is returned in the <b>GetCategorySpecifics</b> call.
 *  on which are enforceable for validation purposes
 * XSD Type: ValueFormatCodeType
 */
class ValueFormatCodeType
{

    /**
     * Constant for 'FullDate' value.
     *
     * This enumeration value indicates that a full date is used, including the month,
     * day, and year in the following format:
     *  '<em>YYYYMMDD</em>'
     */
    public const VAL_FULL_DATE = 'FullDate';

    /**
     * Constant for 'PartialDate' value.
     *
     * This enumeration value indicates that a partial date is used, including the
     * month and year in the following format: '<em>YYYYMM</em>'
     */
    public const VAL_PARTIAL_DATE = 'PartialDate';

    /**
     * Constant for 'Year' value.
     *
     * This enumeration value indicates that only the year is returned in the following
     * format: '<em>YYYY</em>'
     */
    public const VAL_YEAR = 'Year';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future or internal use.
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
