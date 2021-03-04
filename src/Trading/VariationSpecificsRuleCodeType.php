<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing VariationSpecificsRuleCodeType
 *
 * This enumerated type is used to indicate if an Item Specific can be used at the variation level of a listing. This type is only applicable to categories that support multiple-variation listings. If an Item Specific cannot be used at the variation level, it usually indicates that the particular Item Specific should only be specified at the listing-level, as it is a product aspect that should be shared by all variations in the multiple-variation listing.
 * XSD Type: VariationSpecificsRuleCodeType
 */
class VariationSpecificsRuleCodeType
{
    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that the corresponding Item Specific can be specified at
     * the variation level. In the <b>AddFixedPriceItem</b> call, variation-specific
     * name-value pairs are specified under the
     * <b>Variation.VariationSpecifics.NameValueList</b> container.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that the corresponding Item Specific cannot be specified at
     * the variation level. If an Item Specific cannot be used at the variation level,
     * it usually indicates that the particular Item Specific should only be specified
     * at the listing-level, as it is a product aspect that should be shared by all
     * variations in the multiple-variation listing.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future use.
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
