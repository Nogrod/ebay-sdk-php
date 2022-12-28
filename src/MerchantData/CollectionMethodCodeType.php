<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CollectionMethodCodeType
 *
 * This enumerated type defines the collection methods that are used to collect either 'Collect and Remit' sales tax in the US, or 'Good and Services' tax in Australia and New Zealand.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are currently not applicable.
 *  </span>
 * XSD Type: CollectionMethodCodeType
 */
class CollectionMethodCodeType
{
    /**
     * Constant for 'INVOICE' value.
     *
     * <span class="tablenote"><b>Note: </b> This value is for future use.
     *  </span>
     */
    public const VAL_INVOICE = 'INVOICE';

    /**
     * Constant for 'NET' value.
     *
     * This value is always returned, but because the <b>CollectionMethod</b> field and
     * <b>CollectionMethodCodeType</b> are not currently applicable, this value does
     * not have any purpose at this time.
     */
    public const VAL_NET = 'NET';

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
