<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GranularityLevelCodeType
 *
 * Specifies a predefined subset of fields to return. The predefined set of fields
 *  can vary for different calls. Only applicable to certain calls (see request types
 *  that include a GranularityLevel property). For calls that support this filter, see
 *  the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay Features Guide</a> for a list of the output fields that are returned for
 *  each level. Only one level can be specified at a time. For GetSellerList, use
 *  DetailLevel or GranularityLevel in a given request, but not both. For
 *  GetSellerList, if GranularityLevel is specified, DetailLevel is ignored.
 * XSD Type: GranularityLevelCodeType
 */
class GranularityLevelCodeType
{
    /**
     * Constant for 'Coarse' value.
     *
     * (in) For each record in the response, retrieves less data than Medium.
     *  See the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay
     * Features Guide</a> for a list of the output fields
     *  that are returned when this level is specified.
     */
    public const VAL_COARSE = 'Coarse';

    /**
     * Constant for 'Fine' value.
     *
     * For each record in the response, retrieves more data than Medium.
     *  See the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay
     * Features Guide</a> for a list of the output fields
     *  that are returned when this level is specified.
     */
    public const VAL_FINE = 'Fine';

    /**
     * Constant for 'Medium' value.
     *
     * For each record in the response, retrieves more data than Coarse and less data
     *  than Fine. See the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay
     * Features Guide</a> for a list of the output fields
     *  that are returned when this level is specified.
     */
    public const VAL_MEDIUM = 'Medium';

    /**
     * Constant for 'CustomCode' value.
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
