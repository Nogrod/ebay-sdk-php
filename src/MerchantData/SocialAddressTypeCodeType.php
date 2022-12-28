<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SocialAddressTypeCodeType
 *
 * Enumerated type that defines the social networking sites that are supported by PayPal Giving Fund.
 * XSD Type: SocialAddressTypeCodeType
 */
class SocialAddressTypeCodeType
{
    /**
     * Constant for 'Facebook' value.
     *
     * This value indicates that the
     * <b>Charity.NonProfitSocialAddress.SocialAddressId</b>
     *  is associated with the nonprofit company's Facebook account.
     */
    public const VAL_FACEBOOK = 'Facebook';

    /**
     * Constant for 'Twitter' value.
     *
     * This value indicates that the
     * <b>Charity.NonProfitSocialAddress.SocialAddressId</b>
     *  is associated with the nonprofit company's Twitter account.
     */
    public const VAL_TWITTER = 'Twitter';

    /**
     * Constant for 'Linkedin' value.
     *
     * This value indicates that the
     * <b>Charity.NonProfitSocialAddress.SocialAddressId</b>
     *  is associated with the nonprofit company's LinkedIn account.
     */
    public const VAL_LINKEDIN = 'Linkedin';

    /**
     * Constant for 'GooglePlus' value.
     *
     * This value indicates that the
     * <b>Charity.NonProfitSocialAddress.SocialAddressId</b>
     *  is associated with the nonprofit company's Google+ account.
     */
    public const VAL_GOOGLE_PLUS = 'GooglePlus';

    /**
     * Constant for 'Myspace' value.
     *
     * This value indicates that the
     * <b>Charity.NonProfitSocialAddress.SocialAddressId</b>
     *  is associated with the nonprofit company's MySpace account.
     */
    public const VAL_MYSPACE = 'Myspace';

    /**
     * Constant for 'Orkut' value.
     *
     * This value indicates that the
     * <b>Charity.NonProfitSocialAddress.SocialAddressId</b>
     *  is associated with the nonprofit company's Orkut account.
     */
    public const VAL_ORKUT = 'Orkut';

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
