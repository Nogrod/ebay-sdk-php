<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing InsuranceOptionCodeType
 *
 * This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * XSD Type: InsuranceOptionCodeType
 */
class InsuranceOptionCodeType
{
    /**
     * Constant for 'Optional' value.
     *
     * The seller offers the buyer the choice of paying
     *  for shipping insurance or not.
     */
    public const VAL_OPTIONAL = 'Optional';

    /**
     * Constant for 'Required' value.
     *
     * The seller requires that the buyer pay for
     *  shipping insurance.
     */
    public const VAL_REQUIRED = 'Required';

    /**
     * Constant for 'NotOffered' value.
     *
     * The seller does not offer shipping insurance to the buyer.
     */
    public const VAL_NOT_OFFERED = 'NotOffered';

    /**
     * Constant for 'IncludedInShippingHandling' value.
     *
     * The seller is not charging separately for shipping
     *  insurance costs; any insurance is already included in the
     *  base shipping cost.
     */
    public const VAL_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';

    /**
     * Constant for 'NotOfferedOnSite' value.
     *
     * Shipping insurance is not offered as a separate option on the site
     *  where the item is listed. (Some shipping services, such as
     *  DE_InsuredExpressOrCourier, include insurance as part of the service.) If
     *  another insurance option is specified in the listing request and the site does
     *  not support shipping insurance as a separate option, eBay will reset the
     *  insurance option to this value. At the time of this writing, this option is
     *  only meaningful for the eBay Germany, Austria, and Switzerland sites.
     */
    public const VAL_NOT_OFFERED_ON_SITE = 'NotOfferedOnSite';

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
