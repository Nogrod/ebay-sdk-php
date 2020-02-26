<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing StoreCustomListingHeaderLinkCodeType
 *
 * Specifies the type of link in the custom listing header.
 * XSD Type: StoreCustomListingHeaderLinkCodeType
 */
class StoreCustomListingHeaderLinkCodeType
{

    /**
     * Constant for 'None' value.
     *
     * No type.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'AboutMePage' value.
     *
     * Link is to an About Me page.
     */
    public const VAL_ABOUT_ME_PAGE = 'AboutMePage';

    /**
     * Constant for 'CustomPage' value.
     *
     * Link is to a custom page.
     */
    public const VAL_CUSTOM_PAGE = 'CustomPage';

    /**
     * Constant for 'CustomCategory' value.
     *
     * Link is to a custom category.
     */
    public const VAL_CUSTOM_CATEGORY = 'CustomCategory';

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
