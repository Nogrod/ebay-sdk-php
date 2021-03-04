<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetAllBiddersModeCodeType
 *
 * This enumerated type defines the values that can be used in the <b>CallMode</b> field of the <b>GetAllBidders</b> call request to control which type of auction bidders are returned in the response.
 * XSD Type: GetAllBiddersModeCodeType
 */
class GetAllBiddersModeCodeType
{
    /**
     * Constant for 'ViewAll' value.
     *
     * This enumeration value is used if the user wants to retrieve all bidders on an
     * active or recently-ended auction listing. This value can be used by any user,
     * and it is the default value if the <b>CallMode</b> field is not included in the
     * call request.
     */
    public const VAL_VIEW_ALL = 'ViewAll';

    /**
     * Constant for 'EndedListing' value.
     *
     * This enumeration value is used if the user wants to retrieve all non-winning
     * bidders for a recently-ended auction listing. This value can be only be used by
     * the seller of the item.
     */
    public const VAL_ENDED_LISTING = 'EndedListing';

    /**
     * Constant for 'SecondChanceEligibleEndedListing' value.
     *
     * This enumeration value is used if the user wants to retrieve all non-winning
     * bidders, for a recently-ended auction listing, who are eligible for, and who
     * accept Second Chance Offers. This value can be only be used by the seller of the
     * item. See <"http://pages.ebay.com/help/sell/second_chance_offer.html#when"
     * target="_blank">When to use a Second Chance Offer</a> for more information on
     * Second Chance Offers.
     */
    public const VAL_SECOND_CHANCE_ELIGIBLE_ENDED_LISTING = 'SecondChanceEligibleEndedListing';

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
