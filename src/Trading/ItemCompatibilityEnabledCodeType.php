<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemCompatibilityEnabledCodeType
 *
 * Used to indicate whether the parts compatibility feature is enabled for a
 *  category.
 * XSD Type: ItemCompatibilityEnabledCodeType
 */
class ItemCompatibilityEnabledCodeType
{

    /**
     * Constant for 'Disabled' value.
     *
     * Parts Compatibility is not supported for the given category.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'ByApplication' value.
     *
     * Parts Compatibility may be entered by application only for the given category.
     *  Entering parts compatibility by application specifies the assemblies (e.g., a
     *  specific year, make, and model of car) to which the item applies. Parts
     *  compatibility by application can be specified by listing with a catalog
     *  product that supports parts compatibility or by specifying parts compatibility
     *  by application manually (<b> Item.ItemCompatibilityList</b>).
     */
    public const VAL_BY_APPLICATION = 'ByApplication';

    /**
     * Constant for 'BySpecification' value.
     *
     * Parts Compatibility may be entered by specification only for the given
     *  category. Entering parts compatibility by specification involves specifying
     *  the part's relevant dimensions or characteristics (e.g., Section Width, Aspect
     *  Ratio, Rim Diammeter, Load Index, and Speed Rating values for a tire) using
     *  attributes.
     */
    public const VAL_BY_SPECIFICATION = 'BySpecification';

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
