<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MessageTypeCodeType
 *
 *
 * XSD Type: MessageTypeCodeType
 */
class MessageTypeCodeType
{

    /**
     * Constant for 'AskSellerQuestion' value.
     *
     * Member to Member message initiated by bidder/potential bidder
     *  to a seller of a particular item.
     */
    public const VAL_ASK_SELLER_QUESTION = 'AskSellerQuestion';

    /**
     * Constant for 'ResponseToASQQuestion' value.
     *
     * Member to Member message initiated as a response
     *  to an Ask A Question message.
     */
    public const VAL_RESPONSE_TO_ASQQUESTION = 'ResponseToASQQuestion';

    /**
     * Constant for 'ContactEbayMember' value.
     *
     * Member to Member message initiated by any eBay member
     *  to another eBay member.
     */
    public const VAL_CONTACT_EBAY_MEMBER = 'ContactEbayMember';

    /**
     * Constant for 'ContactTransactionPartner' value.
     *
     * Member message between order partners within 90 days
     *  after creation of the order.
     */
    public const VAL_CONTACT_TRANSACTION_PARTNER = 'ContactTransactionPartner';

    /**
     * Constant for 'ResponseToContacteBayMember' value.
     *
     * Member to Member message initiated as a response
     *  to a Contact eBay Member message.
     */
    public const VAL_RESPONSE_TO_CONTACTE_BAY_MEMBER = 'ResponseToContacteBayMember';

    /**
     * Constant for 'ContacteBayMemberViaCommunityLink' value.
     *
     * Member to Member message initiated by any eBay member
     *  to another eBay member who has posted on a community forum
     *  within the past 7 days.
     */
    public const VAL_CONTACTE_BAY_MEMBER_VIA_COMMUNITY_LINK = 'ContacteBayMemberViaCommunityLink';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for future or internal use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'All' value.
     *
     * All message types.
     */
    public const VAL_ALL = 'All';

    /**
     * Constant for 'ContactMyBidder' value.
     *
     * Member to Member message initiated by sellers to their
     *  bidders during an active listing.
     */
    public const VAL_CONTACT_MY_BIDDER = 'ContactMyBidder';

    /**
     * Constant for 'ContacteBayMemberViaAnonymousEmail' value.
     *
     * Member message initiated after eBay receives an email sent by an
     *  eBay member's email client to another eBay member.
     */
    public const VAL_CONTACTE_BAY_MEMBER_VIA_ANONYMOUS_EMAIL = 'ContacteBayMemberViaAnonymousEmail';

    /**
     * Constant for 'ClassifiedsContactSeller' value.
     *
     * Indicates that an inquiry has been sent to the seller regarding the
     *  corresponding classified ad listing.
     */
    public const VAL_CLASSIFIEDS_CONTACT_SELLER = 'ClassifiedsContactSeller';

    /**
     * Constant for 'ClassifiedsBestOffer' value.
     *
     * Indicates that a Best Offer has been made on the seller's corresponding
     *  classified ad listing. This message type is only applicable to Classified
     *  categories that allow the Best Offer feature, such as motor vehicles.
     */
    public const VAL_CLASSIFIEDS_BEST_OFFER = 'ClassifiedsBestOffer';

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
