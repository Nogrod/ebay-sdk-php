<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DigitalDeliveryMethodCodeType
 *
 * The digital download method.
 * XSD Type: DigitalDeliveryMethodCodeType
 */
class DigitalDeliveryMethodCodeType
{
    /**
     * Constant for 'None' value.
     *
     * The item cannot be downloaded.
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'DownloadURL' value.
     *
     * The item can be downloaded by using a URL.
     */
    public const VAL_DOWNLOAD_URL = 'DownloadURL';

    /**
     * Constant for 'AlternateDeliveryInstructions' value.
     *
     * The item can be downloaded according to instructions specified by the seller.
     */
    public const VAL_ALTERNATE_DELIVERY_INSTRUCTIONS = 'AlternateDeliveryInstructions';

    /**
     * Constant for 'CustomCode' value.
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
