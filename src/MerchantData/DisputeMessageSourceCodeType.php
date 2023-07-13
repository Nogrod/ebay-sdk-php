<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeMessageSourceCodeType
 *
 * Enumeration type that defines the parties who may be the source of a message related to an <i>Unpaid Item</i> case.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases. They are no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls do not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
 * XSD Type: DisputeMessageSourceCodeType
 */
class DisputeMessageSourceCodeType
{
    /**
     * Constant for 'Buyer' value.
     *
     * The buyer involved in the Unpaid Item case.
     */
    public const VAL_BUYER = 'Buyer';

    /**
     * Constant for 'Seller' value.
     *
     * The seller involved in the Unpaid Item case.
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
