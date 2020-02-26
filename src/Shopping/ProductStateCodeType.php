<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ProductStateCodeType
 *
 * This enumerated type defines the different possible states of an eBay Catalog product. This type is used by the <b>ProductState</b> field returned in the <b>FindProducts</b> call.
 * XSD Type: ProductStateCodeType
 */
class ProductStateCodeType
{

    /**
     * Constant for 'Update' value.
     *
     * This enumeration value is returned if the product details have been updated. If
     * your application currently uses the eBay Catalog product for listing or
     * searching, it is recommended that you check to make sure the product data still
     * meets your needs.
     */
    public const VAL_UPDATE = 'Update';

    /**
     * Constant for 'UpdateMajor' value.
     *
     * This enumeration value is returned if the product has been mapped to a newer
     * product in the catalog that eBay is currently using, and its details have been
     * updated based on the new catalog data. The product reference ID (or EPID)
     * remains the same (but the longer product ID string may have changed). If your
     * application currently uses the product for searching, it is recommended that you
     * check to make sure the product data still meets your needs.
     */
    public const VAL_UPDATE_MAJOR = 'UpdateMajor';

    /**
     * Constant for 'UpdateNoDetails' value.
     *
     * This enumeration value is returned if the product was previously available in an
     * earlier catalog, but it has not been mapped to a product in the catalog that
     * eBay is currently using. It can still be used for searching, but it may contain
     * fewer details than other products. If your application currently uses the
     * product for searching, it is recommended that you check to make sure the product
     * data still meets your needs.
     */
    public const VAL_UPDATE_NO_DETAILS = 'UpdateNoDetails';

    /**
     * Constant for 'Merge' value.
     *
     * This enumeration value is returned if some information in this product is
     * scheduled to be merged into another product in the catalog that eBay is
     * currently using. This product may be removed from the system at any time. If
     * your application currently uses the product for searching, it is recommended
     * that you update your application to use a product that is not scheduled to be
     * merged or deleted.
     */
    public const VAL_MERGE = 'Merge';

    /**
     * Constant for 'Delete' value.
     *
     * This enumeration value is returned if the product is marked for deletion, and it
     * will not be mapped to another product. If your application currently uses the
     * product for searching, it is recommended that you update your application to use
     * a product that is not scheduled to be merged or deleted.
     */
    public const VAL_DELETE = 'Delete';

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
