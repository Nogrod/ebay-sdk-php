<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SetUserNotesActionCodeType
 *
 * Specifies the action to take for an item's My eBay notes.
 * XSD Type: SetUserNotesActionCodeType
 */
class SetUserNotesActionCodeType
{
    /**
     * Constant for 'AddOrUpdate' value.
     *
     * Creates or replaces an item's My eBay notes. Note that if
     *  the specified item already has notes in My eBay, the new
     *  notes will completely replace the existing notes. They will
     *  not be appended.
     */
    public const VAL_ADD_OR_UPDATE = 'AddOrUpdate';

    /**
     * Constant for 'Delete' value.
     *
     * Deletes any existing My eBay notes for the specified item.
     *  Specifying Delete when no notes exist does nothing, but does
     *  not return an error.
     */
    public const VAL_DELETE = 'Delete';

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
