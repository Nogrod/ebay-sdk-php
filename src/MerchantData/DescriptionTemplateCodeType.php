<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DescriptionTemplateCodeType
 *
 * Enumerated type that defines Listing Designer template types.
 * XSD Type: DescriptionTemplateCodeType
 */
class DescriptionTemplateCodeType
{

    /**
     * Constant for 'Layout' value.
     *
     * This value indicates that the Listing Designer template is a layout template
     * that controls how pictures and description text are
     *  positioned on the View Item page.
     */
    public const VAL_LAYOUT = 'Layout';

    /**
     * Constant for 'Theme' value.
     *
     * This value indicates that the Listing Designer template is a theme template that
     * determines which eBay-provided theme (e.g. Valentine's Day) is to be applied for
     * presenting pictures and description text.
     */
    public const VAL_THEME = 'Theme';

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
