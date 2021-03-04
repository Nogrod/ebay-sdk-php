<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing VariationPictureRuleCodeType
 *
 * Enumerated type that indicates if a specific Item Specific can be used to classify pictures in a multiple-variation listing. For example, in a multiple-variation listing that featured t-shirts of numerous colors and sizes, the 'Color' Item Specific would most likely be 'Enabled', and would be a good candidate value for the <b>Variations.Pictures.VariationSpecificName</b> field in a 'FixedPriceItem' call when creating, revising, or relisting an item. Then, the seller would provide URLs to multiple pictures showcasing the available colors of the shirts. These URLs are specified through multiple <b>Variations.Pictures.VariationSpecificPictureSet.PictureURL</b> fields.
 * XSD Type: VariationPictureRuleCodeType
 */
class VariationPictureRuleCodeType
{
    /**
     * Constant for 'Required' value.
     *
     * This value indicates that the corresponding Item Specific name must be used in
     * the <b>Variations.Pictures.VariationSpecificName</b> field if the seller is
     * providing picture URLs through the
     * <b>Variations.Pictures.VariationSpecificPictureSet</b> container in a
     * 'FixedPriceItem' call when creating, revising, or relisting an item.
     */
    public const VAL_REQUIRED = 'Required';

    /**
     * Constant for 'Enabled' value.
     *
     * This value indicates that the corresponding Item Specific name can be used in
     * the <b>Variations.Pictures.VariationSpecificName</b> field if the seller is
     * providing picture URLs through the
     * <b>Variations.Pictures.VariationSpecificPictureSet</b> container in a
     * 'FixedPriceItem' call when creating, revising, or relisting an item. Unlike the
     * 'Required' value, 'Enabled' indicates that corresponding Item Specific name is
     * just one option, and they may be other options to use as a
     * <b>VariationSpecificName</b> value.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Disabled' value.
     *
     * This value indicates that the corresponding Item Specific name cannot be used in
     * the <b>Variations.Pictures.VariationSpecificName</b> field if the seller is
     * providing picture URLs through the
     * <b>Variations.Pictures.VariationSpecificPictureSet</b> container in a
     * 'FixedPriceItem' call when creating, revising, or relisting an item. The seller
     * will have to find an Item Specific that is either 'Enabled' or 'Required' to use
     * as a <b>VariationSpecificName</b> value.
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
