<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TransactionReferenceCodeType
 *
 * Enumerated type defining the possible values that can returned in the attribute of the <b>Payment.ReferenceID</b> and <b>Payment.PaymentReferenceID</b> field.
 * XSD Type: TransactionReferenceCodeType
 */
class TransactionReferenceCodeType
{

    /**
     * Constant for 'ExternalTransactionID' value.
     *
     * This value is the unique identifier of an external payment transaction.
     */
    public const VAL_EXTERNAL_TRANSACTION_ID = 'ExternalTransactionID';

    /**
     * Constant for 'MandateReferenceNumber' value.
     *
     * No longer applicable as the eBay Now service is no longer available to buyers
     * and sellers.
     */
    public const VAL_MANDATE_REFERENCE_NUMBER = 'MandateReferenceNumber';

    /**
     * Constant for 'CustomCode' value.
     *
     * This value is reserved for future or internal use.
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
