<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing IsoCurrencyCodeType
 *
 * This enumeration type defines the values that can be set as a currencyId attribute for Business Policies Management elements that use <b>Amount</b> type, such as <b>depositDetails.depositAmount</b> in payment policies, or <b>shippingServiceCost</b> in shipping policies.
 * XSD Type: IsoCurrencyCode
 */
class IsoCurrencyCodeType
{
    /**
     * Constant for 'USD' value.
     *
     * U.S. Dollar; country - United States; ISO currency code - 840
     */
    public const VAL_USD = 'USD';

    /**
     * Constant for 'CAD' value.
     *
     * Canadian Dollar; country - Canada; ISO currency code - 124
     */
    public const VAL_CAD = 'CAD';

    /**
     * Constant for 'GBP' value.
     *
     * Pound Sterling; country - United Kingdom; ISO currency code - 826
     */
    public const VAL_GBP = 'GBP';

    /**
     * Constant for 'DEM' value.
     *
     * German Mark; country - Germany; ISO currency code - 276 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_DEM = 'DEM';

    /**
     * Constant for 'AUD' value.
     *
     * Australian Dollar; country - Australia; ISO currency code - 036
     */
    public const VAL_AUD = 'AUD';

    /**
     * Constant for 'JPY' value.
     *
     * Japanese Yen; country - Japan; ISO currency code - 392 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_JPY = 'JPY';

    /**
     * Constant for 'EUR' value.
     *
     * Euro; entity - European Union; ISO currency code - 978
     */
    public const VAL_EUR = 'EUR';

    /**
     * Constant for 'FRF' value.
     *
     * French Franc; country - France; ISO currency code - 250 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_FRF = 'FRF';

    /**
     * Constant for 'ATS' value.
     *
     * Austrian Schilling; country - Austria; ISO currency code - 040 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_ATS = 'ATS';

    /**
     * Constant for 'BEF' value.
     *
     * Belgian Franc; country - Belgium; ISO currency code - 056 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BEF = 'BEF';

    /**
     * Constant for 'CHF' value.
     *
     * Swiss Franc; country - Switzerland; ISO currency code - 756
     */
    public const VAL_CHF = 'CHF';

    /**
     * Constant for 'CNY' value.
     *
     * Chinese Yuan Renminbi; country - China; ISO currency code - 156
     */
    public const VAL_CNY = 'CNY';

    /**
     * Constant for 'CZK' value.
     *
     * Czech Koruna; country - Czech Republic; ISO currency code - 203 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_CZK = 'CZK';

    /**
     * Constant for 'DKK' value.
     *
     * Danish Krone; country - Denmark; ISO currency code - 208 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_DKK = 'DKK';

    /**
     * Constant for 'ESP' value.
     *
     * Spanish Peseta; country - Spain; ISO currency code - 724 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_ESP = 'ESP';

    /**
     * Constant for 'FIM' value.
     *
     * Finnish Markka; country - Finland; ISO currency code - 246 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_FIM = 'FIM';

    /**
     * Constant for 'GRD' value.
     *
     * Greek Drachma; country - Greece; ISO currency code - 300 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_GRD = 'GRD';

    /**
     * Constant for 'HKD' value.
     *
     * Hong Kong Dollar; country - Hong Kong; ISO currency code - 344
     */
    public const VAL_HKD = 'HKD';

    /**
     * Constant for 'HUF' value.
     *
     * Hungarian Forint; country - Hungary; ISO currency code - 348 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_HUF = 'HUF';

    /**
     * Constant for 'IDR' value.
     *
     * Indonesian Rupiah; country - Indonesia; ISO currency code - 360 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_IDR = 'IDR';

    /**
     * Constant for 'IEP' value.
     *
     * Irish Pound; country - Ireland; ISO currency code - 372 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_IEP = 'IEP';

    /**
     * Constant for 'ILS' value.
     *
     * Israeli New Shekel; country - Israel; ISO currency code - 376 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_ILS = 'ILS';

    /**
     * Constant for 'ITL' value.
     *
     * Italian Lira; country - Italy; ISO currency code - 380 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_ITL = 'ITL';

    /**
     * Constant for 'NLG' value.
     *
     * Dutch Guilder; country - Netherlands; ISO currency code - 528 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_NLG = 'NLG';

    /**
     * Constant for 'NOK' value.
     *
     * Norwegian Krone; country - Norway; ISO currency code - 578 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_NOK = 'NOK';

    /**
     * Constant for 'NZD' value.
     *
     * New Zealand Dollar; country - New Zealand; ISO currency code - 554 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_NZD = 'NZD';

    /**
     * Constant for 'PHP' value.
     *
     * Philippine Peso; country - Philippines; ISO currency code - 608
     */
    public const VAL_PHP = 'PHP';

    /**
     * Constant for 'PLN' value.
     *
     * Polish New Zloty; country - Poland; ISO currency code - 985
     */
    public const VAL_PLN = 'PLN';

    /**
     * Constant for 'PTE' value.
     *
     * Portuguese Escudo; country - Portugal; ISO currency code - 620 (Not valid in
     * <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_PTE = 'PTE';

    /**
     * Constant for 'RUR' value.
     *
     * Russian Ruble; country - Russian Federation; ISO currency code - 810 (Not valid
     * in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_RUR = 'RUR';

    /**
     * Constant for 'SEK' value.
     *
     * Swedish Krona; country - Sweden; ISO currency code - 752
     */
    public const VAL_SEK = 'SEK';

    /**
     * Constant for 'SGD' value.
     *
     * Singapore Dollar; country - Singapore; ISO currency code - 702
     */
    public const VAL_SGD = 'SGD';

    /**
     * Constant for 'THB' value.
     *
     * Thai Baht; country - Thailand; ISO currency code - 764
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_THB = 'THB';

    /**
     * Constant for 'TWD' value.
     *
     * New Taiwan Dollar; country - Taiwan; ISO currency code - 901
     */
    public const VAL_TWD = 'TWD';

    /**
     * Constant for 'ZAR' value.
     *
     * South African Rand; country - South Africa; ISO currency code - 710
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_ZAR = 'ZAR';

    /**
     * Constant for 'INR' value.
     *
     * Indian Rupee; country - India; ISO currency code - 356
     */
    public const VAL_INR = 'INR';

    /**
     * Constant for 'PEN' value.
     *
     * Peruvian New Sol; country - Peru; ISO currency code - 604
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_PEN = 'PEN';

    /**
     * Constant for 'MYR' value.
     *
     * Malaysian Ringgit; country - Malaysia; ISO currency code - 458
     */
    public const VAL_MYR = 'MYR';

    /**
     * Constant for 'VND' value.
     *
     * Vietnamese New Dong; country - Vietnam; ISO currency code - 704
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_VND = 'VND';

    /**
     * Constant for 'KRW' value.
     *
     * South Korean Won; country - South Korea; ISO currency code - 410
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_KRW = 'KRW';

    /**
     * Constant for 'TRY' value.
     *
     * New Turkish Lira; country - Turkey; ISO currency code - 949
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_TRY = 'TRY';

    /**
     * Constant for 'ANG' value.
     *
     * Antillian Guilder; country - Netherlands Antilles; ISO currency code - 532
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_ANG = 'ANG';

    /**
     * Constant for 'AWG' value.
     *
     * Aruban Guilder; country - Aruba; ISO currency code - 533
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_AWG = 'AWG';

    /**
     * Constant for 'BMD' value.
     *
     * Bermudan Dollar; country - Bermuda; ISO currency code - 060
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BMD = 'BMD';

    /**
     * Constant for 'CRC' value.
     *
     * Costa Rican Colon; country - Costa Rica; ISO currency code - 188
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_CRC = 'CRC';

    /**
     * Constant for 'RON' value.
     *
     * Romanian New Leu; country - Romania; ISO currency code - 946
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_RON = 'RON';

    /**
     * Constant for 'VEF' value.
     *
     * Venezuelan Bolivar Fuerte; country - Venezuela; ISO currency code - 937
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_VEF = 'VEF';

    /**
     * Constant for 'BBD' value.
     *
     * Barbados Dollar; country - Barbados; ISO currency code - 052
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BBD = 'BBD';

    /**
     * Constant for 'BGN' value.
     *
     * Bulgarian Lev; country - Bulgaria; ISO currency code - 975
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BGN = 'BGN';

    /**
     * Constant for 'BND' value.
     *
     * Brunei Dollar; country - Brunei; ISO currency code - 096
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BND = 'BND';

    /**
     * Constant for 'BSD' value.
     *
     * Bahamian Dollar; country - Bahamas; ISO currency code - 044
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BSD = 'BSD';

    /**
     * Constant for 'COP' value.
     *
     * Columbian Peso; country - Columbia; ISO currency code - 170
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_COP = 'COP';

    /**
     * Constant for 'DOP' value.
     *
     * Dominican Peso; country - Dominican Republic; ISO currency code - 214
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_DOP = 'DOP';

    /**
     * Constant for 'GTQ' value.
     *
     * Guatemalan Quetzal; country - Guatemala; ISO currency code - 320
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_GTQ = 'GTQ';

    /**
     * Constant for 'KYD' value.
     *
     * Cayman Isles Dollar; country - Cayman Islands; ISO currency code - 136
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_KYD = 'KYD';

    /**
     * Constant for 'MVR' value.
     *
     * Maldivian Rufiyaa; country - Maldives; ISO currency code - 462
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_MVR = 'MVR';

    /**
     * Constant for 'QAR' value.
     *
     * Qatari Rial; country - Qatar; ISO currency code - 634
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_QAR = 'QAR';

    /**
     * Constant for 'SAR' value.
     *
     * Saudi Riyal; country - Saudi Arabia; ISO currency code - 682
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_SAR = 'SAR';

    /**
     * Constant for 'TTD' value.
     *
     * Trinidadian and Tobagonian Dollar; country - Trinidad and Tobago; ISO currency
     * code - 780
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_TTD = 'TTD';

    /**
     * Constant for 'UAH' value.
     *
     * Ukrainian Hryvnia; country - Ukraine; ISO currency code - 980
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_UAH = 'UAH';

    /**
     * Constant for 'UYU' value.
     *
     * Peso Uruguayo; country - Uruguay; ISO currency code - 858
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_UYU = 'UYU';

    /**
     * Constant for 'XCD' value.
     *
     * East Caribbean Dollar; entity - East Caribbean Currency Area; ISO currency code
     * - 951
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_XCD = 'XCD';

    /**
     * Constant for 'XPF' value.
     *
     * French Polynesian Franc; country - French Polynesia; ISO currency code - 953
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_XPF = 'XPF';

    /**
     * Constant for 'JMD' value.
     *
     * Jamaican Dollar; country - Jamaica; ISO currency code - 388
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_JMD = 'JMD';

    /**
     * Constant for 'RUB' value.
     *
     * Russian ruble; country - Russian Federation; ISO currency code - 643
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_RUB = 'RUB';

    /**
     * Constant for 'BRL' value.
     *
     * Brazilian real; country - Brazil; ISO currency code - 986
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BRL = 'BRL';

    /**
     * Constant for 'CLP' value.
     *
     * Chilean peso; country - Chile; ISO currency code - 152
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_CLP = 'CLP';

    /**
     * Constant for 'MXN' value.
     *
     * Mexican peso; country - Mexico; ISO currency code - 484
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_MXN = 'MXN';

    /**
     * Constant for 'HNL' value.
     *
     * Honduran lempira; country - Honduras; ISO currency code - 340
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_HNL = 'HNL';

    /**
     * Constant for 'NIO' value.
     *
     * Nicaraguan cordoba; country - Nicaragua; ISO currency code - 558
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_NIO = 'NIO';

    /**
     * Constant for 'BOB' value.
     *
     * Bolivian boliviano; country - Bolivia; ISO currency code - 068
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
     */
    public const VAL_BOB = 'BOB';

    /**
     * Constant for 'PYG' value.
     *
     * Paraguayan guarani; country - Paraguay; ISO currency code - 600
     *  (Not valid in <b>shippingPolicyCurrency</b> field)
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
