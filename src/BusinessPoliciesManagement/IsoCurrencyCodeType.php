<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing IsoCurrencyCodeType
 *
 * Currency representation based on ISO 4217 Standard: http://www.iso.org/iso/currency_codes_list-1
 *  Every currency has the following attributs:
 *  Numeric Code - 3 Digits Zero Padded Numeric Code, which uniquely identifies a currency.
 *  Alphabetic Code - 3 Letter Alphabetic Code, which uniquely identifies a currency.
 *  Currency - The name of the currency
 *  Antity - The country/Entity, which uses this currency.
 *
 *  This type exposes only a sub-set of ISO 4217.
 *  The enumeration represents the Alphabetic Code. Comments are included for quick reference.
 * XSD Type: IsoCurrencyCode
 */
class IsoCurrencyCodeType
{

    /**
     * Constant for 'USD' value.
     */
    public const VAL_USD = 'USD';

    /**
     * Constant for 'CAD' value.
     */
    public const VAL_CAD = 'CAD';

    /**
     * Constant for 'GBP' value.
     */
    public const VAL_GBP = 'GBP';

    /**
     * Constant for 'DEM' value.
     */
    public const VAL_DEM = 'DEM';

    /**
     * Constant for 'AUD' value.
     */
    public const VAL_AUD = 'AUD';

    /**
     * Constant for 'JPY' value.
     */
    public const VAL_JPY = 'JPY';

    /**
     * Constant for 'EUR' value.
     */
    public const VAL_EUR = 'EUR';

    /**
     * Constant for 'FRF' value.
     */
    public const VAL_FRF = 'FRF';

    /**
     * Constant for 'ATS' value.
     */
    public const VAL_ATS = 'ATS';

    /**
     * Constant for 'BEF' value.
     */
    public const VAL_BEF = 'BEF';

    /**
     * Constant for 'CHF' value.
     */
    public const VAL_CHF = 'CHF';

    /**
     * Constant for 'CNY' value.
     */
    public const VAL_CNY = 'CNY';

    /**
     * Constant for 'CZK' value.
     */
    public const VAL_CZK = 'CZK';

    /**
     * Constant for 'DKK' value.
     */
    public const VAL_DKK = 'DKK';

    /**
     * Constant for 'ESP' value.
     */
    public const VAL_ESP = 'ESP';

    /**
     * Constant for 'FIM' value.
     */
    public const VAL_FIM = 'FIM';

    /**
     * Constant for 'GRD' value.
     */
    public const VAL_GRD = 'GRD';

    /**
     * Constant for 'HKD' value.
     */
    public const VAL_HKD = 'HKD';

    /**
     * Constant for 'HUF' value.
     */
    public const VAL_HUF = 'HUF';

    /**
     * Constant for 'IDR' value.
     */
    public const VAL_IDR = 'IDR';

    /**
     * Constant for 'IEP' value.
     */
    public const VAL_IEP = 'IEP';

    /**
     * Constant for 'ILS' value.
     */
    public const VAL_ILS = 'ILS';

    /**
     * Constant for 'ITL' value.
     */
    public const VAL_ITL = 'ITL';

    /**
     * Constant for 'NLG' value.
     */
    public const VAL_NLG = 'NLG';

    /**
     * Constant for 'NOK' value.
     */
    public const VAL_NOK = 'NOK';

    /**
     * Constant for 'NZD' value.
     */
    public const VAL_NZD = 'NZD';

    /**
     * Constant for 'PHP' value.
     */
    public const VAL_PHP = 'PHP';

    /**
     * Constant for 'PLN' value.
     */
    public const VAL_PLN = 'PLN';

    /**
     * Constant for 'PTE' value.
     */
    public const VAL_PTE = 'PTE';

    /**
     * Constant for 'RUR' value.
     */
    public const VAL_RUR = 'RUR';

    /**
     * Constant for 'SEK' value.
     */
    public const VAL_SEK = 'SEK';

    /**
     * Constant for 'SGD' value.
     */
    public const VAL_SGD = 'SGD';

    /**
     * Constant for 'THB' value.
     */
    public const VAL_THB = 'THB';

    /**
     * Constant for 'TWD' value.
     */
    public const VAL_TWD = 'TWD';

    /**
     * Constant for 'ZAR' value.
     */
    public const VAL_ZAR = 'ZAR';

    /**
     * Constant for 'INR' value.
     */
    public const VAL_INR = 'INR';

    /**
     * Constant for 'PEN' value.
     */
    public const VAL_PEN = 'PEN';

    /**
     * Constant for 'MYR' value.
     */
    public const VAL_MYR = 'MYR';

    /**
     * Constant for 'VND' value.
     */
    public const VAL_VND = 'VND';

    /**
     * Constant for 'KRW' value.
     */
    public const VAL_KRW = 'KRW';

    /**
     * Constant for 'TRY' value.
     */
    public const VAL_TRY = 'TRY';

    /**
     * Constant for 'ANG' value.
     */
    public const VAL_ANG = 'ANG';

    /**
     * Constant for 'AWG' value.
     */
    public const VAL_AWG = 'AWG';

    /**
     * Constant for 'BMD' value.
     */
    public const VAL_BMD = 'BMD';

    /**
     * Constant for 'CRC' value.
     */
    public const VAL_CRC = 'CRC';

    /**
     * Constant for 'RON' value.
     */
    public const VAL_RON = 'RON';

    /**
     * Constant for 'VEF' value.
     */
    public const VAL_VEF = 'VEF';

    /**
     * Constant for 'BBD' value.
     */
    public const VAL_BBD = 'BBD';

    /**
     * Constant for 'BGN' value.
     */
    public const VAL_BGN = 'BGN';

    /**
     * Constant for 'BND' value.
     */
    public const VAL_BND = 'BND';

    /**
     * Constant for 'BSD' value.
     */
    public const VAL_BSD = 'BSD';

    /**
     * Constant for 'COP' value.
     */
    public const VAL_COP = 'COP';

    /**
     * Constant for 'DOP' value.
     */
    public const VAL_DOP = 'DOP';

    /**
     * Constant for 'GTQ' value.
     */
    public const VAL_GTQ = 'GTQ';

    /**
     * Constant for 'KYD' value.
     */
    public const VAL_KYD = 'KYD';

    /**
     * Constant for 'MVR' value.
     */
    public const VAL_MVR = 'MVR';

    /**
     * Constant for 'QAR' value.
     */
    public const VAL_QAR = 'QAR';

    /**
     * Constant for 'SAR' value.
     */
    public const VAL_SAR = 'SAR';

    /**
     * Constant for 'TTD' value.
     */
    public const VAL_TTD = 'TTD';

    /**
     * Constant for 'UAH' value.
     */
    public const VAL_UAH = 'UAH';

    /**
     * Constant for 'UYU' value.
     */
    public const VAL_UYU = 'UYU';

    /**
     * Constant for 'XCD' value.
     */
    public const VAL_XCD = 'XCD';

    /**
     * Constant for 'XPF' value.
     */
    public const VAL_XPF = 'XPF';

    /**
     * Constant for 'JMD' value.
     */
    public const VAL_JMD = 'JMD';

    /**
     * Constant for 'RUB' value.
     */
    public const VAL_RUB = 'RUB';

    /**
     * Constant for 'BRL' value.
     */
    public const VAL_BRL = 'BRL';

    /**
     * Constant for 'CLP' value.
     */
    public const VAL_CLP = 'CLP';

    /**
     * Constant for 'MXN' value.
     */
    public const VAL_MXN = 'MXN';

    /**
     * Constant for 'HNL' value.
     */
    public const VAL_HNL = 'HNL';

    /**
     * Constant for 'NIO' value.
     */
    public const VAL_NIO = 'NIO';

    /**
     * Constant for 'BOB' value.
     */
    public const VAL_BOB = 'BOB';

    /**
     * Constant for 'PYG' value.
     */
    public const VAL_PYG = 'PYG';

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
