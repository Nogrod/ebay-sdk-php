<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing DescriptionReviseModeCodeType
 *
 * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This field should no longer be used since it no longer supports the ability to append or prepend text using the <b>Append</b> or <b>Prepend</b> values, but only supports the <b>Replace</b> value. If this field is used and set to <b>Append</b> or <b>Prepend</b>, it will default to <b>Replace</b>, and whatever text is supplied in the <b>Item.Description</b> field will completely overwrite the current description for the active listing. If you wish to update the description for an active listing using a revise call, just provide the full description in the <b>Item.Description</b> field and do not use this field at all. This field will be completely removed from the WSDL within a few months.</span><br/><br/>
 *  <p>Enumerated type containing the list of values that can be used when revising the
 *  item description of an active listing through the Revise API calls.</p>
 * XSD Type: DescriptionReviseModeCodeType
 */
class DescriptionReviseModeCodeType
{
    /**
     * Constant for 'Replace' value.
     *
     * Use this value in the <b>Item.DescriptionReviseMode</b> field if you want
     *  to completely replace (overwrite) the item description of the active listing.
     */
    public const VAL_REPLACE = 'Replace';

    /**
     * Constant for 'Prepend' value.
     *
     * <span class="tablenote"><b>Note: </b>
     *  This enumerated value has been deprecated.
     *  </span>
     */
    public const VAL_PREPEND = 'Prepend';

    /**
     * Constant for 'Append' value.
     *
     * <span class="tablenote"><b>Note: </b>
     *  This enumerated value has been deprecated.
     *  </span>
     */
    public const VAL_APPEND = 'Append';

    /**
     * Constant for 'CustomCode' value.
     *
     * <span class="tablenote"><b>Note: </b>
     *  This enumerated value has been deprecated.
     *  </span>
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
