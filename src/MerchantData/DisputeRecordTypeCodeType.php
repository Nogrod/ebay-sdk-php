<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeRecordTypeCodeType
 *
 * Enumerated type that lists the different types of order disputes that can occur between buyer and seller.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeRecordTypeCodeType
 */
class DisputeRecordTypeCodeType
{

    /**
     * Constant for 'UnpaidItem' value.
     *
     * This enumeration value indicates that the dispute is an Unpaid Item case created
     * by the seller against the buyer. A seller should always try to resolve an Unpaid
     * Item issue with the buyer before opening up a case with eBay. Sometimes, just
     * sending payment reminders to the buyer or messaging the buyer through the
     * Messaging platform can be helpful. The <a
     * href="https://www.ebay.com/help/selling/getting-paid/resolving-unpaid-items-buyers?id=4137">Resolving
     * unpaid items with buyers</a> help topic provides more details and tips on trying
     * to work Unpaid Item issues out with the buyer.
     */
    public const VAL_UNPAID_ITEM = 'UnpaidItem';

    /**
     * Constant for 'ItemNotReceived' value.
     *
     * This enumeration value indicates that the dispute is an Item Not Received case
     * created by the buyer against the seller through PayPal's platform.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  As noted above, the <b>GetDispute</b> or <b>GetUserDisputes</b> calls will not
     * return any eBay Money Back Guarantee cases.
     *  </span>
     */
    public const VAL_ITEM_NOT_RECEIVED = 'ItemNotReceived';

    /**
     * Constant for 'HalfDispute' value.
     *
     * This enumeration value is no longer applicable as the Half.com marketplace is
     * shut down.
     */
    public const VAL_HALF_DISPUTE = 'HalfDispute';

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
