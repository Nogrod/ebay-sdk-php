<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing UsageConstraintCodeType
 *
 * This enumerated type is used by the <b>NameRecommendation.ValidationRules.UsageConstraint</b> field that is returned in <b>GetCategorySpecifics</b> for each item specific that is returned in the response. The enumeration value returned in the <b>UsageConstraint</b> will indicate whether the item specific is required, recommended, or optional.
 * XSD Type: UsageConstraintCodeType
 */
class UsageConstraintCodeType
{
    /**
     * Constant for 'Optional' value.
     *
     * This enumeration value indicates that the corresponding item specific is
     * completely optional for a listing in the category, but the seller should still
     * include it if the item specific is relevant to the product and its value is
     * known.
     */
    public const VAL_OPTIONAL = 'Optional';

    /**
     * Constant for 'Recommended' value.
     *
     * This enumeration value indicates that the corresponding item specific is typical
     * and recommended for a listing in the category, but not fully required. The
     * seller should include this item specific if its value is known because including
     * it may improve search results and sale conversion.
     */
    public const VAL_RECOMMENDED = 'Recommended';

    /**
     * Constant for 'Required' value.
     *
     * This enumeration value indicates that the corresponding item specific is
     * required for a listing in the category. The seller must include this item
     * specific or the listing may be blocked.
     */
    public const VAL_REQUIRED = 'Required';

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
