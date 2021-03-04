<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ProductIDCodeType
 *
 * This enumerated type defines the different type of product identifiers that are available to identify a product. Product identifiers are returned for order line items and eBay Catalog products, and these identifier types and their values can also be used by the <b>FindProducts</b> call as a search filter. These enumeration values are used as attribute values for the <b>ProductID</b> field in Shopping API calls.
 * XSD Type: ProductIDCodeType
 */
class ProductIDCodeType
{
    /**
     * Constant for 'ISBN' value.
     *
     * This enumeration value indicates the product identifier type is an International
     * Standard Book Number. ISBN values can be 10 characters (ISBN-10) or 13
     * characters (ISBN-13) in length, and they identify books.
     */
    public const VAL_ISBN = 'ISBN';

    /**
     * Constant for 'EAN' value.
     *
     * This enumeration value indicates the product identifier type is an International
     * Article Number (also known as European Article Number). EAN values are typically
     * 13 digits in length, but some use only eight digits. EAN identify a wide variety
     * of products.
     */
    public const VAL_EAN = 'EAN';

    /**
     * Constant for 'UPC' value.
     *
     * This enumeration value indicates the product identifier type is a Universal
     * Product Code. UPC values are 12 digits in length. UPC values identify a wide
     * variety of products, and are typically used in the US and Canada.
     */
    public const VAL_UPC = 'UPC';

    /**
     * Constant for 'MPN' value.
     *
     * This enumeration value indicates the product identifier type is a Manufacturer
     * Part Number. Unlike ISBNs, EANs, and UPCs, an MPN value is not based on an
     * international standard, but is defined by the seller/manufacturer of the
     * product. Technically, there is no maximum length for an MPN, but eBay actually
     * enforces a 65-character limit for MPN values.
     */
    public const VAL_MPN = 'MPN';

    /**
     * Constant for 'Keywords' value.
     *
     * This value is no longer applicable. In a <b>FindProducts</b> call, if you want
     * to search for a product using a query string, use the <b>QueryKeywords</b> field
     * in the call request instead.
     */
    public const VAL_KEYWORDS = 'Keywords';

    /**
     * Constant for 'CatalogItem' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_CATALOG_ITEM = 'CatalogItem';

    /**
     * Constant for 'Reference' value.
     *
     * This enumeration value indicates the product identifier type is an eBay Catalog
     * product ID. EPID is a commonly-used acronymn for an eBay Catalog product ID.
     */
    public const VAL_REFERENCE = 'Reference';

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
