<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing EndOfAuctionLogoTypeCodeType
 *
 * This enumeration type is used to indicate the type of logo that will be included in the customized email that will be sent by the seller to the winning bidder in an auction listing.
 * XSD Type: EndOfAuctionLogoTypeCodeType
 */
class EndOfAuctionLogoTypeCodeType
{

    /**
     * Constant for 'WinningBidderNotice' value.
     *
     * This enumeration value indicates that the PayPal Winning Bidder Notice logo will
     * be used in the end of auction email to winning bidder.
     */
    public const VAL_WINNING_BIDDER_NOTICE = 'WinningBidderNotice';

    /**
     * Constant for 'Store' value.
     *
     * This enumeration value indicates that the eBay seller's Store logo will be used
     * in the end of auction email to winning bidder.
     */
    public const VAL_STORE = 'Store';

    /**
     * Constant for 'Customized' value.
     *
     * This enumeration value indicates that a custom logo will be used in the end of
     * auction email to winning bidder. The location (URL) of this custom logo is
     * specified in the <b>LogoURL</b> field.
     */
    public const VAL_CUSTOMIZED = 'Customized';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'None' value.
     *
     * This enumeration value indicates that no logo will be used in the end of auction
     * email to winning bidder.
     */
    public const VAL_NONE = 'None';

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
