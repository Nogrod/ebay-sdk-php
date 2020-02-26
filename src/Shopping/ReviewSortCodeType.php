<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ReviewSortCodeType
 *
 * <span class="tablenote"><b>Note: </b> <b>ReviewSortCodeType</b> and all of its enumeration values are deprecated along with the <b>FindReviewsAndGuides</b> call.
 *  </span>
 * XSD Type: ReviewSortCodeType
 */
class ReviewSortCodeType
{

    /**
     * Constant for 'CreationTime' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>ReviewSortCodeType</b> and its
     * enumeration values are deprecated along with the <b>FindReviewsAndGuides</b>
     * call.
     *  </span>
     */
    public const VAL_CREATION_TIME = 'CreationTime';

    /**
     * Constant for 'CustomCode' value.
     *
     * <span class="tablenote"><b>Note: </b> <b>ReviewSortCodeType</b> and its
     * enumeration values are deprecated along with the <b>FindReviewsAndGuides</b>
     * call.
     *  </span>
     *
     *  new value.
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
