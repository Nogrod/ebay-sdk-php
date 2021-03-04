<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SearchFlagCodeType
 *
 * This enumerated type lists the possible values that can be returned under the
 *  <b>FavoriteSearch.SearchFlag</b> field of a
 *  <b>GetMyeBayBuying</b> response. These values are output only and are
 *  controlled by the filter types used in a buyer's Saved Search.
 * XSD Type: SearchFlagCodeType
 */
class SearchFlagCodeType
{
    /**
     * Constant for 'Charity' value.
     *
     * This value being returned in the <b>FavoriteSearch.SearchFlag</b>
     *  field indicates that the buyer selected the <b>eBay for Charity</b>
     *  option in the Saved Search.
     */
    public const VAL_CHARITY = 'Charity';

    /**
     * Constant for 'Gift' value.
     *
     * This value is no longer applicable as Gift Icon and Gift Services are
     * deprecated.
     */
    public const VAL_GIFT = 'Gift';

    /**
     * Constant for 'NowAndNew' value.
     *
     * This value is no longer applicable as the Now and New feature is deprecated.
     */
    public const VAL_NOW_AND_NEW = 'NowAndNew';

    /**
     * Constant for 'LocalSearch' value.
     *
     * This value being returned in the <b>FavoriteSearch.SearchFlag</b>
     *  field indicates that the buyer selected the <b>Local pickup</b>
     *  option in the Saved Search. A buyer would select the <b>Local Pickup</b>
     *  filter in a Saved Search to restrict retrieved listings to those that offer
     * 'local pickup'
     *  as an option to buyers.
     */
    public const VAL_LOCAL_SEARCH = 'LocalSearch';

    /**
     * Constant for 'FreeShipping' value.
     *
     * This value being returned in the <b>FavoriteSearch.SearchFlag</b>
     *  field indicates that the buyer selected the <b>Free shipping</b>
     *  option in the Saved Search. A buyer would select the <b>Free shipping</b>
     *  filter in a Saved Search to restrict retrieved listings to those that offer a
     * free
     *  shipping option to that specific buyer (the availability of free shipping may
     *  be dependent on the buyer's location).
     */
    public const VAL_FREE_SHIPPING = 'FreeShipping';

    /**
     * Constant for 'Gallery' value.
     *
     * This value is no longer applicable as there is always a gallery picture by
     *  default since all listings must have at least one picture.
     */
    public const VAL_GALLERY = 'Gallery';

    /**
     * Constant for 'Picture' value.
     *
     * This value is no longer applicable as there is now a requirement that all
     *  listings have at least one picture.
     */
    public const VAL_PICTURE = 'Picture';

    /**
     * Constant for 'GetItFast' value.
     *
     * This value is no longer applicable as the Get It Fast feature is deprecated.
     */
    public const VAL_GET_IT_FAST = 'GetItFast';

    /**
     * Constant for 'Lot' value.
     *
     * This value being returned in the <b>FavoriteSearch.SearchFlag</b>
     *  field indicates that the buyer selected the <b>Items listed as lots</b>
     *  option in the Saved Search. A buyer would select the <b>Items listed as
     * lots</b>
     *  filter in a Saved Search to restrict retrieved listings to those that are
     * offering
     *  a "lot" of items in one listing. Specifically, a "lot" is defined as, "a group
     * of
     *  similar or identical items that are sold together to one buyer."
     */
    public const VAL_LOT = 'Lot';

    /**
     * Constant for 'GermanMotorsSearchable' value.
     *
     * This value is only applicable to the German site and if the user is searching
     * for
     *  motor vehicle listings. This value being returned in the
     *  <b>FavoriteSearch.SearchFlag</b> field indicates that the buyer
     *  selected a filter in a Saved Search to restrict retrieved eBay Germany motor
     *  vehicle listings that are also being displayed on the mobile.de vehicle
     *  marketplace.
     */
    public const VAL_GERMAN_MOTORS_SEARCHABLE = 'GermanMotorsSearchable';

    /**
     * Constant for 'WorldOfGood' value.
     *
     * This value is no longer applicable as the World of Good site no longer exists.
     */
    public const VAL_WORLD_OF_GOOD = 'WorldOfGood';

    /**
     * Constant for 'DigitalDelivery' value.
     *
     * This value is no longer applicable.
     */
    public const VAL_DIGITAL_DELIVERY = 'DigitalDelivery';

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
