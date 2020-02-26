<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ExternalProductCodeType
 *
 * <span class="tablenote"><b>Note: </b>
 *  This type is deprecated.
 *  </span>
 *  <br/><br/>
 *  Indicates the type of external product ID being used to identify a
 *  stock product.
 * XSD Type: ExternalProductCodeType
 */
class ExternalProductCodeType
{

    /**
     * Constant for 'ISBN' value.
     *
     * ExternalProductID.Value contains an ISBN value.
     *  Required when you pass an ISBN as the external product ID.
     */
    public const VAL_ISBN = 'ISBN';

    /**
     * Constant for 'UPC' value.
     *
     * ExternalProductID.Value contains a UPC value.
     *  Required when you pass a UPC as the external product ID.
     */
    public const VAL_UPC = 'UPC';

    /**
     * Constant for 'ProductID' value.
     *
     * ExternalProductID.Value contains an eBay catalog product ID.
     *  Required when you pass an eBay product ID
     *  as the external product ID.
     */
    public const VAL_PRODUCT_ID = 'ProductID';

    /**
     * Constant for 'EAN' value.
     *
     * ExternalProductID.Value contains an EAN value.
     *  Required when you pass an EAN as the external product ID.
     */
    public const VAL_EAN = 'EAN';

    /**
     * Constant for 'Keywords' value.
     *
     * ExternalProductID.Value contains a set of keywords that uniquely identify the
     * product.
     *  Only applicable when listing event ticket.
     *  See the eBay Features Guide for information about valid
     *  ticket keywords for an external product ID.
     *  Required when you pass a set of keywords as the external product ID.
     */
    public const VAL_KEYWORDS = 'Keywords';

    /**
     * Constant for 'MPN' value.
     *
     * Reserved for future use.
     */
    public const VAL_MPN = 'MPN';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
