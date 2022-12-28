<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TaskStatusCodeType
 *
 * Status values for the processing progress for the category structure changes
 *  specified by a SetStoreCategories request. If the SetStoreCategories call is
 *  processed asynchronously, then the status is returned by
 *  GetStoreCategoryUpdateStatus, otherwise, the status is returned in the
 *  SetStoreCategories response.
 * XSD Type: TaskStatusCodeType
 */
class TaskStatusCodeType
{
    /**
     * Constant for 'Pending' value.
     *
     * (out) The category changes have not started.
     */
    public const VAL_PENDING = 'Pending';

    /**
     * Constant for 'InProgress' value.
     *
     * (out) The category changes are in progress.
     */
    public const VAL_IN_PROGRESS = 'InProgress';

    /**
     * Constant for 'Complete' value.
     *
     * (out) The category changes completed successfully.
     */
    public const VAL_COMPLETE = 'Complete';

    /**
     * Constant for 'Failed' value.
     *
     * (out) The category changes failed.
     */
    public const VAL_FAILED = 'Failed';

    /**
     * Constant for 'CustomCode' value.
     *
     * (out) Reserved for internal or future use.
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
