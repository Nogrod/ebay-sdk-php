<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DisputeResolutionReasonCodeType
 *
 * This enumerated type defines the possible reasons why an order dispute between a buyer and seller is resolved.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The dispute calls in the Trading API are not compatible with 'Item Not Received' or 'Significantly Not As Described' cases initiated by buyers through the eBay Money Back Guarantee program. The <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve and/or respond to eBay Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeResolutionReasonCodeType
 */
class DisputeResolutionReasonCodeType
{

    /**
     * Constant for 'Unresolved' value.
     *
     * This enumeration value indicates that the dispute has not been resolved.
     */
    public const VAL_UNRESOLVED = 'Unresolved';

    /**
     * Constant for 'ProofOfPayment' value.
     *
     * This enumeration value indicates that the buyer was able to provide proof of
     * payment for an Unpaid Item case.
     */
    public const VAL_PROOF_OF_PAYMENT = 'ProofOfPayment';

    /**
     * Constant for 'ComputerTechnicalProblem' value.
     *
     * This enumeration value indicates that the buyer or seller had a technical
     * problem with a computer.
     */
    public const VAL_COMPUTER_TECHNICAL_PROBLEM = 'ComputerTechnicalProblem';

    /**
     * Constant for 'NoContact' value.
     *
     * This enumeration value indicates that the buyer and seller have not made any
     * contact with one another.
     */
    public const VAL_NO_CONTACT = 'NoContact';

    /**
     * Constant for 'FamilyEmergency' value.
     *
     * This enumeration value indicates that the buyer or seller had a family
     * emergency.
     */
    public const VAL_FAMILY_EMERGENCY = 'FamilyEmergency';

    /**
     * Constant for 'ProofGivenInFeedback' value.
     *
     * This enumeration value indicates that the buyer was able to provide proof of
     * payment for an Unpaid Item case through the Feedback system.
     */
    public const VAL_PROOF_GIVEN_IN_FEEDBACK = 'ProofGivenInFeedback';

    /**
     * Constant for 'FirstInfraction' value.
     *
     * This enumeration value indicates that the dispute was the buyer's first
     * infraction, and thus resolved.
     */
    public const VAL_FIRST_INFRACTION = 'FirstInfraction';

    /**
     * Constant for 'CameToAgreement' value.
     *
     * This enumeration value indicates that the buyer and seller came to an agreement.
     */
    public const VAL_CAME_TO_AGREEMENT = 'CameToAgreement';

    /**
     * Constant for 'ItemReturned' value.
     *
     * This enumeration value indicates that the buyer successfully returned the item,
     * and thus an Unpaid Item case was closed.
     */
    public const VAL_ITEM_RETURNED = 'ItemReturned';

    /**
     * Constant for 'BuyerPaidAuctionFees' value.
     *
     * This enumeration value indicates that the buyer reimbursed the seller's listing
     * fees.
     */
    public const VAL_BUYER_PAID_AUCTION_FEES = 'BuyerPaidAuctionFees';

    /**
     * Constant for 'SellerReceivedPayment' value.
     *
     * This enumeration value indicates that the seller received payment for the item,
     * and thus an Unpaid Item case was closed.
     */
    public const VAL_SELLER_RECEIVED_PAYMENT = 'SellerReceivedPayment';

    /**
     * Constant for 'OtherResolution' value.
     *
     * This enumeration value indicates that an undefined resolution occurred.
     */
    public const VAL_OTHER_RESOLUTION = 'OtherResolution';

    /**
     * Constant for 'ClaimPaid' value.
     *
     * This enumeration value indicates that the claim was paid.
     */
    public const VAL_CLAIM_PAID = 'ClaimPaid';

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
