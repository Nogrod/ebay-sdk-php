<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ProductIdentiferEnabledCodeType
 *
 * This enumeration type contains the values that may be returned in the <b>EANEnabled</b>, <b>ISBNEnabled</b>, and <b>UPCEnabled</b> fields at the site level (<b>SiteDefaults</b> container) and category level (<b>Category</b> nodes) to indicate which sites and categories support, require, or do not support the use of product identifiers to help create a listing.
 * XSD Type: ProductIdentiferEnabledCodeType
 */
class ProductIdentiferEnabledCodeType
{

    /**
     * Constant for 'Disabled' value.
     *
     * This enumeration value indicates that a product identifier (EAN, ISBN, UPC) may
     * not be used to help create a listing. If returned at the site level
     * (<b>SiteDefaults</b> container), most categories on the site (specified in the
     * X-EBAY-API-SITEID) do not support the use of product identifiers. If returned at
     * the category level (<b>Category</b> nodes), that specific category does not
     * support the use of product identifiers.
     */
    public const VAL_DISABLED = 'Disabled';

    /**
     * Constant for 'Enabled' value.
     *
     * This enumeration value indicates that a product identifier (EAN, ISBN, UPC) may
     * be used to help create a listing. If returned at the site level
     * (<b>SiteDefaults</b> container), most categories on the site (specified in the
     * X-EBAY-API-SITEID) support the use of product identifiers. If returned at the
     * category level (<b>Category</b> nodes), that specific category supports the use
     * of product identifiers.
     */
    public const VAL_ENABLED = 'Enabled';

    /**
     * Constant for 'Required' value.
     *
     * This enumeration value indicates that a product identifier (EAN, ISBN, UPC) is
     * required when creating a listing. If returned at the site level
     * (<b>SiteDefaults</b> container), most categories on the site (specified in the
     * X-EBAY-API-SITEID) require the use of product identifiers. If returned at the
     * category level (<b>Category</b> nodes), that specific category requires the use
     * of product identifiers when creating a listing.
     */
    public const VAL_REQUIRED = 'Required';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is for future use.
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
