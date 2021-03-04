<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeMessageSourceCodeType
 *
 * Defines who added a message to a dispute. Used for both <i>Unpaid Item</i> cases and <i>Item Not Received</i> disputes initiated by buyers through PayPal's platform.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeMessageSourceCodeType
 */
class DisputeMessageSourceCodeType
{
    /**
     * Constant for 'Buyer' value.
     *
     * The buyer of the item under dispute.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'Seller' value.
     *
     * The seller of the item under dispute.
     */
    public const VAL_SELLER = 'Seller';

    /**
     * Constant for 'eBay' value.
     *
     * eBay, either an administrator or the site itself.
     */
    public const VAL_E_BAY = 'eBay';

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
