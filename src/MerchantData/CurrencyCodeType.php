<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CurrencyCodeType
 *
 * This enumeration type contains a list of standard 3-digit ISO 4217 currency codes for
 *  currency used in countries around the world.
 *  <br/><br/>
 *  When adding an item through <b>AddItem</b> (or related API call), the
 *  <b>Item.Currency</b> value will default to the currency used on the listing
 *  site. Otherwise, only the following currency types may be specified through an
 *  Add/Revise/Relist call, since these are the currencies of all the countries where
 *  the Trading API is supported:
 *  <ul>
 *  <li>USD - US Dollar</li>
 *  <li>CAD - Canadian Dollar</li>
 *  <li>GBP - British Pound</li>
 *  <li>AUD - Australian Dollar</li>
 *  <li>EUR - Euro</li>
 *  <li>CHF - Swiss Franc</li>
 *  <li>CNY - Chinese Renminbi</li>
 *  <li>HKD - Hong Kong Dollar</li>
 *  <li>PHP - Philippines Peso</li>
 *  <li>PLN - Polish Zloty</li>
 *  <li>SEK - Sweden Krona</li>
 *  <li>SGD - Singapore Dollar</li>
 *  <li>TWD - Taiwanese Dollar</li>
 *  <li>MYR - Malaysian Ringgit</li>
 *  </ul>
 *  <br/>
 *  Other currency codes in this enumerated type may be returned in
 *  <b>GetItem</b> (and other calls) based on the buyer's and/or seller's
 *  registration country. However, only the values listed above will be returned if you
 *  call <b>GeteBayDetails</b> with <b>DetailName</b> set to
 *  <b>CurrencyDetails</b>.
 *  http://www.xe.com/iso4217.htm
 * XSD Type: CurrencyCodeType
 */
class CurrencyCodeType
{
    /**
     * Constant for 'AFA' value.
     *
     * This value is a 3-digit code for an Afghan afghani, a currency used in
     * Afghanistan.
     */
    public const VAL_AFA = 'AFA';

    /**
     * Constant for 'ALL' value.
     *
     * This value is a 3-digit code for an Albanian lek, a currency used in Albania.
     */
    public const VAL_ALL = 'ALL';

    /**
     * Constant for 'DZD' value.
     *
     * This value is a 3-digit code for an Algerian dinar, a currency used in Algeria.
     */
    public const VAL_DZD = 'DZD';

    /**
     * Constant for 'ADP' value.
     *
     * This value is a 3-digit code for an Andorran peseta, a currency used in Andorra.
     */
    public const VAL_ADP = 'ADP';

    /**
     * Constant for 'AOA' value.
     *
     * This value is a 3-digit code for an Angolan kwanza, a currency used in Angola.
     */
    public const VAL_AOA = 'AOA';

    /**
     * Constant for 'ARS' value.
     *
     * This value is a 3-digit code for an Argentine peso, a currency used in
     * Argentina.
     */
    public const VAL_ARS = 'ARS';

    /**
     * Constant for 'AMD' value.
     *
     * This value is a 3-digit code for an Armenian dram, a currency used in Armenia.
     */
    public const VAL_AMD = 'AMD';

    /**
     * Constant for 'AWG' value.
     *
     * This value is a 3-digit code for an Aruban florin, a currency used in Aruba.
     */
    public const VAL_AWG = 'AWG';

    /**
     * Constant for 'AZM' value.
     *
     * This value is a 3-digit code for an Azerbaijani manat, a currency used in
     * Azerbaijan.
     */
    public const VAL_AZM = 'AZM';

    /**
     * Constant for 'BSD' value.
     *
     * This value is a 3-digit code for a Bahamian dollar, a currency used in the
     * Bahamas.
     */
    public const VAL_BSD = 'BSD';

    /**
     * Constant for 'BHD' value.
     *
     * This value is a 3-digit code for a Bahraini dinar, a currency used in the
     * Bahrain.
     */
    public const VAL_BHD = 'BHD';

    /**
     * Constant for 'BDT' value.
     *
     * This value is a 3-digit code for a Bangladeshi taka, a currency used in
     * Bangladesh.
     */
    public const VAL_BDT = 'BDT';

    /**
     * Constant for 'BBD' value.
     *
     * This value is a 3-digit code for a Barbados dollar, a currency used in Barbados.
     */
    public const VAL_BBD = 'BBD';

    /**
     * Constant for 'BYR' value.
     *
     * This value is a 3-digit code for a Belarusian ruble, a currency used in Belarus.
     */
    public const VAL_BYR = 'BYR';

    /**
     * Constant for 'BZD' value.
     *
     * This value is a 3-digit code for a Belize dollar, a currency used in Belize.
     */
    public const VAL_BZD = 'BZD';

    /**
     * Constant for 'BMD' value.
     *
     * This value is a 3-digit code for a Bermudian dollar, a currency used in Bermuda.
     */
    public const VAL_BMD = 'BMD';

    /**
     * Constant for 'BTN' value.
     *
     * This value is a 3-digit code for a Bhutanese ngultrum, a currency used in
     * Bhutan.
     */
    public const VAL_BTN = 'BTN';

    /**
     * Constant for 'INR' value.
     *
     * This value is a 3-digit code for an Indian rupee, a currency used in India.
     */
    public const VAL_INR = 'INR';

    /**
     * Constant for 'BOV' value.
     *
     * This value is a 3-digit code for a Bolivian Mvdol, a currency used in Bolivia.
     */
    public const VAL_BOV = 'BOV';

    /**
     * Constant for 'BOB' value.
     *
     * This value is a 3-digit code for a Boliviano, a currency used in Bolivia.
     */
    public const VAL_BOB = 'BOB';

    /**
     * Constant for 'BAM' value.
     *
     * This value is a 3-digit code for a Bosnia and Herzegovina convertible mark, a
     *  currency used in Bosnia and Herzegovina.
     */
    public const VAL_BAM = 'BAM';

    /**
     * Constant for 'BWP' value.
     *
     * This value is a 3-digit code for a Botswana pula, a currency used in Botswana.
     */
    public const VAL_BWP = 'BWP';

    /**
     * Constant for 'BRL' value.
     *
     * This value is a 3-digit code for a Brazilian real, a currency used in Brazil.
     */
    public const VAL_BRL = 'BRL';

    /**
     * Constant for 'BND' value.
     *
     * This value is a 3-digit code for a Brunei dollar, a currency used in Brunei and
     *  Singapore.
     */
    public const VAL_BND = 'BND';

    /**
     * Constant for 'BGL' value.
     *
     * This value is a 3-digit code for the old Bulgarian lev, a currency previously
     * used
     *  in Bulgaria. This currency has been replaced by the new Bulgarian lev (3-digit
     *  code: BGN).
     */
    public const VAL_BGL = 'BGL';

    /**
     * Constant for 'BGN' value.
     *
     * This value is a 3-digit code for a Bulgarian lev, a currency used in Bulgaria.
     * This
     *  currency replaced the old Bulgarian lev (3-digit code: BGL).
     */
    public const VAL_BGN = 'BGN';

    /**
     * Constant for 'BIF' value.
     *
     * This value is a 3-digit code for a Burundian franc, a currency used in Burundi.
     */
    public const VAL_BIF = 'BIF';

    /**
     * Constant for 'KHR' value.
     *
     * This value is a 3-digit code for a Cambodian riel, a currency used in Cambodia.
     */
    public const VAL_KHR = 'KHR';

    /**
     * Constant for 'CAD' value.
     *
     * This value is a 3-digit code for a Canadian dollar, a currency used in Canada.
     * This is
     *  the value that should be passed in the <b>Item.Currency</b> field by the
     *  seller when listing an item on the eBay Canada site (Site ID 2).
     */
    public const VAL_CAD = 'CAD';

    /**
     * Constant for 'CVE' value.
     *
     * This value is a 3-digit code for a Cape Verde escudo, a currency used in Cape
     *  Verde.
     */
    public const VAL_CVE = 'CVE';

    /**
     * Constant for 'KYD' value.
     *
     * This value is a 3-digit code for a Cayman Islands dollar, a currency used in
     *  the Cayman Islands.
     */
    public const VAL_KYD = 'KYD';

    /**
     * Constant for 'XAF' value.
     *
     * This value is a 3-digit code for a Central African CFA franc, a currency used in
     *  Cameroon, Central African Republic, Republic of the Congo, Chad, Equatorial
     *  Guinea, and Gabon.
     */
    public const VAL_XAF = 'XAF';

    /**
     * Constant for 'CLF' value.
     *
     * This value is a 3-digit code for a Unidad de Fomento, a currency used in Chile.
     */
    public const VAL_CLF = 'CLF';

    /**
     * Constant for 'CLP' value.
     *
     * This value is a 3-digit code for a Chilean peso, a currency used in Chile.
     */
    public const VAL_CLP = 'CLP';

    /**
     * Constant for 'CNY' value.
     *
     * This value is a 3-digit code for a Chinese yuan (also known as the renminbi), a
     *  currency used in China.
     */
    public const VAL_CNY = 'CNY';

    /**
     * Constant for 'COP' value.
     *
     * This value is a 3-digit code for a Columbian peso, a currency used in Columbia.
     */
    public const VAL_COP = 'COP';

    /**
     * Constant for 'KMF' value.
     *
     * This value is a 3-digit code for a Comoro franc, a currency used in Comoros.
     */
    public const VAL_KMF = 'KMF';

    /**
     * Constant for 'CDF' value.
     *
     * This value is a 3-digit code for a Congolese franc, a currency used in
     * Democratic
     *  Republic of Congo.
     */
    public const VAL_CDF = 'CDF';

    /**
     * Constant for 'CRC' value.
     *
     * This value is a 3-digit code for a Costa Rican colon, a currency used in Costa
     *  Rica.
     */
    public const VAL_CRC = 'CRC';

    /**
     * Constant for 'HRK' value.
     *
     * This value is a 3-digit code for a Croatian kuna, a currency used in Croatia.
     */
    public const VAL_HRK = 'HRK';

    /**
     * Constant for 'CUP' value.
     *
     * This value is a 3-digit code for a Cuban peso, a currency used in Cuba.
     */
    public const VAL_CUP = 'CUP';

    /**
     * Constant for 'CYP' value.
     *
     * This value is a 3-digit code for a Cypriot pound, a currency previously used in
     *  Cyprus. This currency has been replaced by the Euro (3-digit code: EUR).
     */
    public const VAL_CYP = 'CYP';

    /**
     * Constant for 'CZK' value.
     *
     * This value is a 3-digit code for a Czech koruna, a currency used in the Czech
     *  Republic.
     */
    public const VAL_CZK = 'CZK';

    /**
     * Constant for 'DKK' value.
     *
     * This value is a 3-digit code for a Danish krone, a currency used in Denmark,
     *  the Faroe Islands, and Greenland.
     */
    public const VAL_DKK = 'DKK';

    /**
     * Constant for 'DJF' value.
     *
     * This value is a 3-digit code for a Djiboutian franc, a currency used in
     * Djibouti.
     */
    public const VAL_DJF = 'DJF';

    /**
     * Constant for 'DOP' value.
     *
     * This value is a 3-digit code for a Dominican peso, a currency used in the
     * Dominican
     *  Republic.
     */
    public const VAL_DOP = 'DOP';

    /**
     * Constant for 'TPE' value.
     *
     * This value is a 3-digit code for a Portuguese Timorese escudo, a currency
     *  previously used in Portuguese Timor.
     */
    public const VAL_TPE = 'TPE';

    /**
     * Constant for 'ECV' value.
     *
     * This value is an old 3-digit code for a Cape Verde escudo, a currency used in
     *  Cape Verde. The 'ECV' code has been replaced by 'CVE'.
     */
    public const VAL_ECV = 'ECV';

    /**
     * Constant for 'ECS' value.
     *
     * This value is a 3-digit code for an Ecuadorian sucre, a currency previously used
     * in
     *  Ecuador. This currency has been replaced by the US Dollar (3-digit code: USD).
     */
    public const VAL_ECS = 'ECS';

    /**
     * Constant for 'EGP' value.
     *
     * This value is a 3-digit code for an Egyptian pound, a currency used in Egypt.
     */
    public const VAL_EGP = 'EGP';

    /**
     * Constant for 'SVC' value.
     *
     * This value is a 3-digit code for a Salvadoran colon, a currency previously used
     * in
     *  El Salvador. This currency has been replaced by the US Dollar (3-digit code:
     * USD).
     */
    public const VAL_SVC = 'SVC';

    /**
     * Constant for 'ERN' value.
     *
     * This value is a 3-digit code for an Eritrean nakfa, a currency used in Eritrea.
     */
    public const VAL_ERN = 'ERN';

    /**
     * Constant for 'EEK' value.
     *
     * This value is a 3-digit code for an Estonian kroon, a currency previously used
     * in
     *  Estonia. This currency has been replaced by the Euro (3-digit code: EUR).
     */
    public const VAL_EEK = 'EEK';

    /**
     * Constant for 'ETB' value.
     *
     * This value is a 3-digit code for an Ethiopian birr, a currency used in Ethiopia.
     */
    public const VAL_ETB = 'ETB';

    /**
     * Constant for 'FKP' value.
     *
     * This value is a 3-digit code for a Falkland Islands pound, a currency used in
     *  the Falkland Islands.
     */
    public const VAL_FKP = 'FKP';

    /**
     * Constant for 'FJD' value.
     *
     * This value is a 3-digit code for a Fiji dollar, a currency used in Fiji.
     */
    public const VAL_FJD = 'FJD';

    /**
     * Constant for 'GMD' value.
     *
     * This value is a 3-digit code for a Gambian dalasi, a currency used in Gambia.
     */
    public const VAL_GMD = 'GMD';

    /**
     * Constant for 'GEL' value.
     *
     * This value is a 3-digit code for a Georgian Iari, a currency used in the country
     * of
     *  Georgia.
     */
    public const VAL_GEL = 'GEL';

    /**
     * Constant for 'GHC' value.
     *
     * This value is an old 3-digit code for a Ghanaian cedi, a currency used in Ghana.
     *  The 'GHC' code has been replaced by 'GHS'.
     */
    public const VAL_GHC = 'GHC';

    /**
     * Constant for 'GIP' value.
     *
     * This value is a 3-digit code for a Gibraltar pound, a currency used in
     * Gibraltar.
     */
    public const VAL_GIP = 'GIP';

    /**
     * Constant for 'GTQ' value.
     *
     * This value is a 3-digit code for a Guatemalan quetzal, a currency used in
     *  Guatemala.
     */
    public const VAL_GTQ = 'GTQ';

    /**
     * Constant for 'GNF' value.
     *
     * This value is a 3-digit code for a Guinean franc, a currency used in Guinea.
     */
    public const VAL_GNF = 'GNF';

    /**
     * Constant for 'GWP' value.
     *
     * This value is a 3-digit code for a Guinea-Bissau peso, a currency previously
     * used
     *  in Guinea-Bissau. This currency has been replaced by the West African CFA franc
     *  (3-digit code: XOF).
     */
    public const VAL_GWP = 'GWP';

    /**
     * Constant for 'GYD' value.
     *
     * This value is a 3-digit code for a Guyanese dollar, a currency used in Guyana.
     */
    public const VAL_GYD = 'GYD';

    /**
     * Constant for 'HTG' value.
     *
     * This value is a 3-digit code for a Haitian gourde, a currency used in Haiti.
     */
    public const VAL_HTG = 'HTG';

    /**
     * Constant for 'HNL' value.
     *
     * This value is a 3-digit code for a Honduran lempira, a currency used in
     * Honduras.
     */
    public const VAL_HNL = 'HNL';

    /**
     * Constant for 'HKD' value.
     *
     * This value is a 3-digit code for a Hong Kong dollar, a currency used in Hong
     * Kong
     *  and Macau. This is the value that should be passed in the
     *  <b>Item.Currency</b> field by the seller when listing an item on the
     *  eBay Hong Kong site (Site ID 201).
     */
    public const VAL_HKD = 'HKD';

    /**
     * Constant for 'HUF' value.
     *
     * This value is a 3-digit code for a Hungarian forint, a currency used in Hungary.
     */
    public const VAL_HUF = 'HUF';

    /**
     * Constant for 'ISK' value.
     *
     * This value is a 3-digit code for an Icelandic krona, a currency used in Iceland.
     */
    public const VAL_ISK = 'ISK';

    /**
     * Constant for 'IDR' value.
     *
     * This value is a 3-digit code for an Indonesian rupiah, a currency used in
     *  Indonesia.
     */
    public const VAL_IDR = 'IDR';

    /**
     * Constant for 'IRR' value.
     *
     * This value is a 3-digit code for an Iranian rial, a currency used in Iran.
     */
    public const VAL_IRR = 'IRR';

    /**
     * Constant for 'IQD' value.
     *
     * This value is a 3-digit code for an Iraqi dinar, a currency used in Iraq.
     */
    public const VAL_IQD = 'IQD';

    /**
     * Constant for 'ILS' value.
     *
     * This value is a 3-digit code for an Israeli new shekel, a currency used in
     *  Israel and in the Palestinian territories.
     */
    public const VAL_ILS = 'ILS';

    /**
     * Constant for 'JMD' value.
     *
     * This value is a 3-digit code for a Jamaican dollar, a currency used in Jamaica.
     */
    public const VAL_JMD = 'JMD';

    /**
     * Constant for 'JPY' value.
     *
     * This value is a 3-digit code for a Japanese yen, a currency used in Japan.
     */
    public const VAL_JPY = 'JPY';

    /**
     * Constant for 'JOD' value.
     *
     * This value is a 3-digit code for a Jordanian dinar, a currency used in Jordan.
     */
    public const VAL_JOD = 'JOD';

    /**
     * Constant for 'KZT' value.
     *
     * This value is a 3-digit code for a Kazahhstani tenge, a currency used in
     *  Kazakhstan.
     */
    public const VAL_KZT = 'KZT';

    /**
     * Constant for 'KES' value.
     *
     * This value is a 3-digit code for a Kenyan shilling, a currency used in Kenya.
     */
    public const VAL_KES = 'KES';

    /**
     * Constant for 'AUD' value.
     *
     * This value is a 3-digit code for an Australia dollar, a currency used in
     * Australia.
     *  This is the value that should be passed in the <b>Item.Currency</b>
     *  field by the seller when listing an item on the eBay Australia site
     *  (Site ID 15).
     */
    public const VAL_AUD = 'AUD';

    /**
     * Constant for 'KPW' value.
     *
     * This value is a 3-digit code for a North Korean won, a currency used in North
     *  Korea.
     */
    public const VAL_KPW = 'KPW';

    /**
     * Constant for 'KRW' value.
     *
     * This value is a 3-digit code for a South Korean won, a currency used in South
     *  Korea.
     */
    public const VAL_KRW = 'KRW';

    /**
     * Constant for 'KWD' value.
     *
     * This value is a 3-digit code for a Kuwaiti dollar, a currency used in Kuwait.
     */
    public const VAL_KWD = 'KWD';

    /**
     * Constant for 'KGS' value.
     *
     * This value is a 3-digit code for a Kyrgzstani som, a currency used in Kyrgystan.
     */
    public const VAL_KGS = 'KGS';

    /**
     * Constant for 'LAK' value.
     *
     * This value is a 3-digit code for a Lao kip, a currency used in Laos.
     */
    public const VAL_LAK = 'LAK';

    /**
     * Constant for 'LVL' value.
     *
     * This value is a 3-digit code for a Latvian lats, a currency used in Latvia.
     */
    public const VAL_LVL = 'LVL';

    /**
     * Constant for 'LBP' value.
     *
     * This value is a 3-digit code for a Lebanese pound, a currency used in Lebanon.
     */
    public const VAL_LBP = 'LBP';

    /**
     * Constant for 'LSL' value.
     *
     * This value is a 3-digit code for a Lesotho loti, a currency used in Lesotho.
     */
    public const VAL_LSL = 'LSL';

    /**
     * Constant for 'LRD' value.
     *
     * This value is a 3-digit code for a Liberian dollar, a currency used in Liberia.
     */
    public const VAL_LRD = 'LRD';

    /**
     * Constant for 'LYD' value.
     *
     * This value is a 3-digit code for a Libyan dinar, a currency used in Libya.
     */
    public const VAL_LYD = 'LYD';

    /**
     * Constant for 'CHF' value.
     *
     * Swiss Franc.
     *  For eBay, you can only specify this currency for listings you submit to the
     *  Switzerland site (site ID 193).
     */
    public const VAL_CHF = 'CHF';

    /**
     * Constant for 'LTL' value.
     *
     * This value is a 3-digit code for a Lithuanian litas, a currency used in
     * Lithuania.
     */
    public const VAL_LTL = 'LTL';

    /**
     * Constant for 'MOP' value.
     *
     * This value is a 3-digit code for a Macanese pataca, a currency used in Macao.
     */
    public const VAL_MOP = 'MOP';

    /**
     * Constant for 'MKD' value.
     *
     * This value is a 3-digit code for a Macedonian denar, a currency used in
     * Macedonia.
     */
    public const VAL_MKD = 'MKD';

    /**
     * Constant for 'MGF' value.
     *
     * This value is a 3-digit code for a Malagay franc, a currency previously used
     *  in Madagascar. This currency has been replaced by the Malagasy ariary
     *  (3-digit code: MGA).
     */
    public const VAL_MGF = 'MGF';

    /**
     * Constant for 'MWK' value.
     *
     * This value is a 3-digit code for a Malawian kwacha, a currency used in Malawi.
     */
    public const VAL_MWK = 'MWK';

    /**
     * Constant for 'MYR' value.
     *
     * This value is a 3-digit code for a Malaysian Ringgit, a currency used in
     * Malaysia.
     *  This is the value that should be passed in the <b>Item.Currency</b>
     *  field by the seller when listing an item on the eBay Malaysia site
     *  (Site ID 207).
     */
    public const VAL_MYR = 'MYR';

    /**
     * Constant for 'MVR' value.
     *
     * This value is a 3-digit code for a Maldivian rufiyaaa, a currency used in the
     *  Maldives.
     */
    public const VAL_MVR = 'MVR';

    /**
     * Constant for 'MTL' value.
     *
     * This value is a 3-digit code for a Maltese lira, a currency previously used in
     *  Malta. This currency has been replaced by the Euro (3-digit code: EUR).
     */
    public const VAL_MTL = 'MTL';

    /**
     * Constant for 'EUR' value.
     *
     * This value is a 3-digit code for a EURO, a currency used in Andorra, Austria,
     *  Belgium, Cyprus, Estonia, Finland, France, Germany, Greece, Ireland, Italy,
     * Kosovo,
     *  Luxembourg, Malta, Monaco, Montenegro, Netherlands, Portugal, San Marino,
     * Slovakia,
     *  Slovenia, Spain, and Vatican City. This is the value that should be passed in
     * the
     *  <b>Item.Currency</b> field by the seller when listing an item on the
     *  following sites: Austria (Site ID 16), Belgium_French (Site ID 23),
     *  France (Site ID 71), Germany (Site ID 77), Italy (Site ID 101), Belgium_Dutch
     * (Site
     *  ID 123), Netherlands (Site ID 146), Spain (Site ID 186), and Ireland (Site ID
     * 205).
     */
    public const VAL_EUR = 'EUR';

    /**
     * Constant for 'MRO' value.
     *
     * This value is a 3-digit code for a Mauritanian ouguiya, a currency used in
     *  Mauritania.
     */
    public const VAL_MRO = 'MRO';

    /**
     * Constant for 'MUR' value.
     *
     * This value is a 3-digit code for a Mauritian rupee, a currency used in
     *  Mauritius.
     */
    public const VAL_MUR = 'MUR';

    /**
     * Constant for 'MXN' value.
     *
     * This value is a 3-digit code for a Mexican peso, a currency used in
     *  Mexico.
     */
    public const VAL_MXN = 'MXN';

    /**
     * Constant for 'MXV' value.
     *
     * This value is a 3-digit funds code for a Mexican peso, a currency used in
     *  Mexico.
     */
    public const VAL_MXV = 'MXV';

    /**
     * Constant for 'MDL' value.
     *
     * This value is a 3-digit code for a Moldovan leu, a currency used in
     *  Moldova.
     */
    public const VAL_MDL = 'MDL';

    /**
     * Constant for 'MNT' value.
     *
     * This value is a 3-digit code for a Mongolian tugrik, a currency used in
     *  Mongolia.
     */
    public const VAL_MNT = 'MNT';

    /**
     * Constant for 'XCD' value.
     *
     * This value is a 3-digit code for an Easy Caribbean dollar, a currency used in
     *  Anguilla, Antigua and Barbuda, Dominica, Grenada, Montserrat, Saint Kitts and
     *  Nevis, Saint Lucia, and Saint Vincent and the Grenadines.
     */
    public const VAL_XCD = 'XCD';

    /**
     * Constant for 'MZM' value.
     *
     * This value is an old 3-digit code for a Mozambican metical, a currency used in
     *  Mozambique. The 'MZM' code has been replaced by 'MZN'.
     */
    public const VAL_MZM = 'MZM';

    /**
     * Constant for 'MMK' value.
     *
     * This value is a 3-digit code for a Myanma kyat, a currency used in
     *  Myanmar.
     */
    public const VAL_MMK = 'MMK';

    /**
     * Constant for 'ZAR' value.
     *
     * This value is a 3-digit code for a South African rand, a currency used in
     *  South Africa.
     */
    public const VAL_ZAR = 'ZAR';

    /**
     * Constant for 'NAD' value.
     *
     * This value is a 3-digit code for a Namibian dollar, a currency used in
     *  Namibia.
     */
    public const VAL_NAD = 'NAD';

    /**
     * Constant for 'NPR' value.
     *
     * This value is a 3-digit code for a Nepalese rupee, a currency used in Nepal.
     */
    public const VAL_NPR = 'NPR';

    /**
     * Constant for 'ANG' value.
     *
     * This value is a 3-digit code for a Netherlands Antillean guilder, a currency
     * used
     *  in Curacao and Sint Maarten.
     */
    public const VAL_ANG = 'ANG';

    /**
     * Constant for 'XPF' value.
     *
     * This value is a 3-digit code for a CFP franc, a currency used in French
     * Polynesia,
     *  New Caledonia, and Wallis and Futuna.
     */
    public const VAL_XPF = 'XPF';

    /**
     * Constant for 'NZD' value.
     *
     * This value is a 3-digit code for a New Zealand dollar, a currency used in the
     *  Cook Islands, New Zealand, Niue, Pitcairn, and Tokelau, Ross Dependency.
     */
    public const VAL_NZD = 'NZD';

    /**
     * Constant for 'NIO' value.
     *
     * This value is a 3-digit code for a Nicaraguan cordoba, a currency used in
     *  Nicaragua.
     */
    public const VAL_NIO = 'NIO';

    /**
     * Constant for 'NGN' value.
     *
     * This value is a 3-digit code for a Nigerian naira, a currency used in Nigeria.
     */
    public const VAL_NGN = 'NGN';

    /**
     * Constant for 'NOK' value.
     *
     * This value is a 3-digit code for a Norwegian kron, a currency used in Norway,
     *  Svalbard, Jan Mayen, Bouvet Island, Queen Maud Land, and Peter I Island.
     */
    public const VAL_NOK = 'NOK';

    /**
     * Constant for 'OMR' value.
     *
     * This value is a 3-digit code for an Omani rial, a currency used in Oman.
     */
    public const VAL_OMR = 'OMR';

    /**
     * Constant for 'PKR' value.
     *
     * This value is a 3-digit code for a Pakistani rupee, a currency used in Pakistan.
     */
    public const VAL_PKR = 'PKR';

    /**
     * Constant for 'PAB' value.
     *
     * This value is a 3-digit code for a Panamanian balboa, a currency used in Panama.
     */
    public const VAL_PAB = 'PAB';

    /**
     * Constant for 'PGK' value.
     *
     * This value is a 3-digit code for a Papua New Guinea kina, a currency used in
     *  Papua New Guinea.
     */
    public const VAL_PGK = 'PGK';

    /**
     * Constant for 'PYG' value.
     *
     * This value is a 3-digit code for a Paraguayan guarani, a currency used in
     *  Paraguay.
     */
    public const VAL_PYG = 'PYG';

    /**
     * Constant for 'PEN' value.
     *
     * This value is a 3-digit code for a Peruvian nuevo sol, a currency used in Peru.
     */
    public const VAL_PEN = 'PEN';

    /**
     * Constant for 'PHP' value.
     *
     * This value is a 3-digit code for a Philippine peso, a currency used in the
     *  Philippines. This is the value that should be passed in the
     *  <b>Item.Currency</b> field by the seller when listing an item on the
     *  eBay Philippines site (Site ID 211).
     */
    public const VAL_PHP = 'PHP';

    /**
     * Constant for 'PLN' value.
     *
     * This value is a 3-digit code for a Polish zloty, a currency used in Poland. This
     *  is the value that should be passed in the <b>Item.Currency</b> field
     *  by the seller when listing an item on the eBay Poland site (Site ID 212).
     */
    public const VAL_PLN = 'PLN';

    /**
     * Constant for 'USD' value.
     *
     * This value is a 3-digit code for a US dollar, a currency used in the United
     *  States, America Samoa, Barbados, Bermuda, British Indian Ocean Territory,
     * British
     *  Virgin Islands, Caribbean Netherlands, Ecuador, El Salvador, Guam, Haiti,
     * Marshall
     *  Islands, Federated States of Micronesia, Northern Mariana Islands, Palau,
     * Panama,
     *  Puerto Rico, Timor-Leste, Turks and Caicos Islands, US Virgin Islands, and
     *  Zimbabwe. This is the value that should be passed in the
     *  <b>Item.Currency</b> field by the seller when listing an item on the
     *  eBay US or US eBay Motors site (Site ID 0).
     */
    public const VAL_USD = 'USD';

    /**
     * Constant for 'QAR' value.
     *
     * This value is a 3-digit code for a Qatari riyal, a currency used in Qatar.
     */
    public const VAL_QAR = 'QAR';

    /**
     * Constant for 'ROL' value.
     *
     * This value is a 3-digit code for the old Romanian leu, a currency previously
     * used
     *  in Romania. This currency has been replaced by the Romanian new leu (3-digit
     * code:
     *  RON).
     */
    public const VAL_ROL = 'ROL';

    /**
     * Constant for 'RUB' value.
     *
     * This value is a 3-digit code for a Russian rouble, a currency used in Russia,
     *  Abkhazia, and South Ossetia. This value replace the old 3-digit code for the
     *  Russian rouble, 'RUR'.
     */
    public const VAL_RUB = 'RUB';

    /**
     * Constant for 'RUR' value.
     *
     * This value is the old 3-digit code for a Russian rouble, a currency used in
     *  Russia. This value was replaced by the new 3-digit code for the Russian rouble,
     *  'RUB'.
     */
    public const VAL_RUR = 'RUR';

    /**
     * Constant for 'RWF' value.
     *
     * This value is a 3-digit code for a Rwandan franc, a currency used in Rwanda.
     */
    public const VAL_RWF = 'RWF';

    /**
     * Constant for 'SHP' value.
     *
     * This value is a 3-digit code for a Saint Helena pound, a currency used in Saint
     *  Helena.
     */
    public const VAL_SHP = 'SHP';

    /**
     * Constant for 'WST' value.
     *
     * This value is a 3-digit code for a Samoan tala, a currency used in Samoa.
     */
    public const VAL_WST = 'WST';

    /**
     * Constant for 'STD' value.
     *
     * This value is a 3-digit code for a Sao Tome and Principe dobra, a currency used
     * in
     *  Sao Tome and Principe.
     */
    public const VAL_STD = 'STD';

    /**
     * Constant for 'SAR' value.
     *
     * This value is a 3-digit code for a Saudi riyal, a currency used in Saudi Arabia.
     */
    public const VAL_SAR = 'SAR';

    /**
     * Constant for 'SCR' value.
     *
     * This value is a 3-digit code for a Seychelles rupee, a currency used in
     * Seychelles.
     */
    public const VAL_SCR = 'SCR';

    /**
     * Constant for 'SLL' value.
     *
     * This value is a 3-digit code for a Sierra Leonean leone, a currency used in
     * Sierra
     *  Leone.
     */
    public const VAL_SLL = 'SLL';

    /**
     * Constant for 'SGD' value.
     *
     * This value is a 3-digit code for a Singapore dollar, a currency used in
     * Singapore
     *  and Brunei. This is the value that should be passed in the
     *  <b>Item.Currency</b> field by the seller when listing an item on the
     *  eBay Singapore site (Site ID 216).
     */
    public const VAL_SGD = 'SGD';

    /**
     * Constant for 'SKK' value.
     *
     * This value is a 3-digit code for a Slovak koruna, a currency previously used in
     *  Slovakia. This currency has been replaced by the Euro (3-digit code: EUR).
     */
    public const VAL_SKK = 'SKK';

    /**
     * Constant for 'SIT' value.
     *
     * This value is a 3-digit code for a Slovenian tolar, a currency previously used
     * in
     *  Slovenia. This currency has been replaced by the Euro (3-digit code: EUR).
     */
    public const VAL_SIT = 'SIT';

    /**
     * Constant for 'SBD' value.
     *
     * This value is a 3-digit code for a Solomon Islands dollar, a currency used in
     *  the Solomon Islands.
     */
    public const VAL_SBD = 'SBD';

    /**
     * Constant for 'SOS' value.
     *
     * This value is a 3-digit code for a Somali shilling, a currency used in Somalia.
     */
    public const VAL_SOS = 'SOS';

    /**
     * Constant for 'LKR' value.
     *
     * This value is a 3-digit code for a Sri Lankan rupee, a currency used in Sri
     * Lanka.
     */
    public const VAL_LKR = 'LKR';

    /**
     * Constant for 'SDD' value.
     *
     * This value is the 3-digit code for a Sudanese dinar, a currency previously used
     * in
     *  Sudan. The Sudanese dinar was replaced by the Sudanese pound, which has a
     * 3-digit
     *  code of 'SDG'.
     */
    public const VAL_SDD = 'SDD';

    /**
     * Constant for 'SRG' value.
     *
     * This value is the 3-digit code for a Suriname guilder, a currency previously
     * used
     *  in Suriname. The Surinam guilder was replaced by the Surinamese dollar, which
     * has
     *  a 3-digit code of 'SRD'.
     */
    public const VAL_SRG = 'SRG';

    /**
     * Constant for 'SZL' value.
     *
     * This value is a 3-digit code for a Swazi lilangeni, a currency used in
     * Swaziland.
     */
    public const VAL_SZL = 'SZL';

    /**
     * Constant for 'SEK' value.
     *
     * This value is a 3-digit code for a Swedish krona, a currency used in Swedn. This
     *  is the value that should be passed in the <b>Item.Currency</b> field
     *  by the seller when listing an item on the eBay Sweden site (Site ID 218).
     */
    public const VAL_SEK = 'SEK';

    /**
     * Constant for 'SYP' value.
     *
     * This value is a 3-digit code for a Syrian pound, a currency used in Syria.
     */
    public const VAL_SYP = 'SYP';

    /**
     * Constant for 'TWD' value.
     *
     * This value is a 3-digit code for the New Taiwan dollar, a currency used in
     * Taiwan.
     */
    public const VAL_TWD = 'TWD';

    /**
     * Constant for 'TJS' value.
     *
     * This value is a 3-digit code for a Tajikistani somoni, a currency used in
     *  Tajikistan.
     */
    public const VAL_TJS = 'TJS';

    /**
     * Constant for 'TZS' value.
     *
     * This value is a 3-digit code for a Tanzanian shilling, a currency used in
     *  Tanzania.
     */
    public const VAL_TZS = 'TZS';

    /**
     * Constant for 'THB' value.
     *
     * This value is a 3-digit code for a Thai baht, a currency used in Thailand.
     */
    public const VAL_THB = 'THB';

    /**
     * Constant for 'XOF' value.
     *
     * This value is a 3-digit code for a West African CFA franc, a currency used in
     *  Benin, Burkina Faso, Cote d'Ivoire, Guinea-Bissau, Mali, Niger, Senegal, and
     *  Togo.
     */
    public const VAL_XOF = 'XOF';

    /**
     * Constant for 'TOP' value.
     *
     * This value is a 3-digit code for a Tongan pa'anga, a currency used in Tonga.
     */
    public const VAL_TOP = 'TOP';

    /**
     * Constant for 'TTD' value.
     *
     * This value is a 3-digit code for a Trinidad and Tobago dollar, a currency used
     * in
     *  Trinidad and Tobago.
     */
    public const VAL_TTD = 'TTD';

    /**
     * Constant for 'TND' value.
     *
     * This value is a 3-digit code for a Tunisian dinar, a currency used in Tunisia.
     */
    public const VAL_TND = 'TND';

    /**
     * Constant for 'TRL' value.
     *
     * This value is the old 3-digit code for a Turkish lira, a currency used in Turkey
     *  and Northern Cyprus. This value was replaced by the new 3-digit code for the
     *  Turkish lira, 'TRY'.
     */
    public const VAL_TRL = 'TRL';

    /**
     * Constant for 'TMM' value.
     *
     * This value is the old 3-digit code for a Turkmenistani manat, a currency used in
     *  Turkmenistan. This value was replaced by the new 3-digit code for
     *  the Turkmenistani manat, 'TMT'.
     */
    public const VAL_TMM = 'TMM';

    /**
     * Constant for 'UGX' value.
     *
     * This value is a 3-digit code for a Ugandan shilling, a currency used in Uganda.
     */
    public const VAL_UGX = 'UGX';

    /**
     * Constant for 'UAH' value.
     *
     * This value is a 3-digit code for a Ukrainian hryvnia, a currency used in the
     *  Ukraine.
     */
    public const VAL_UAH = 'UAH';

    /**
     * Constant for 'AED' value.
     *
     * This value is a 3-digit code for an United Arab Emirates dirham, a currency used
     *  in the United Arab Emirates.
     */
    public const VAL_AED = 'AED';

    /**
     * Constant for 'GBP' value.
     *
     * This value is a 3-digit code for a Pound sterling, a currency used in the United
     *  Kingdom and British Crown dependencies. This is the value that should be passed
     * in
     *  the <b>Item.Currency</b> field by the seller when listing an item on
     *  the eBay UK site (Site ID 3).
     */
    public const VAL_GBP = 'GBP';

    /**
     * Constant for 'USS' value.
     *
     * This value is a 3-digit code for a same-day transaction involving US dollars.
     */
    public const VAL_USS = 'USS';

    /**
     * Constant for 'USN' value.
     *
     * This value is a 3-digit code for a next-day transaction involving US dollars.
     */
    public const VAL_USN = 'USN';

    /**
     * Constant for 'UYU' value.
     *
     * This value is a 3-digit code for a Uruguayan peso, a currency used in Uruguay.
     */
    public const VAL_UYU = 'UYU';

    /**
     * Constant for 'UZS' value.
     *
     * This value is a 3-digit code for a Uzbekistan som, a currency used in the
     *  Uzbekistan.
     */
    public const VAL_UZS = 'UZS';

    /**
     * Constant for 'VUV' value.
     *
     * This value is a 3-digit code for a Vanuatu vatu, a currency used in Vanuatu.
     */
    public const VAL_VUV = 'VUV';

    /**
     * Constant for 'VEB' value.
     *
     * This value is a 3-digit code for a Venezuelan bolivar, a currency previously
     * used
     *  in Venezuela. The Venezuela bolivar was replaced by the Venezuelan bolivar
     *  fuerte, which has a 3-digit code of 'VEF'.
     */
    public const VAL_VEB = 'VEB';

    /**
     * Constant for 'VND' value.
     *
     * This value is a 3-digit code for a Vietnamese dong, a currency used in Vietnam.
     */
    public const VAL_VND = 'VND';

    /**
     * Constant for 'MAD' value.
     *
     * This value is a 3-digit code for a Moroccan dirham, a currency used in Morocco.
     */
    public const VAL_MAD = 'MAD';

    /**
     * Constant for 'YER' value.
     *
     * This value is a 3-digit code for a Yemeni rial, a currency used in Yemen.
     */
    public const VAL_YER = 'YER';

    /**
     * Constant for 'YUM' value.
     *
     * This value is a 3-digit code for a Yugoslav dinar, a currency previously used in
     *  Yugoslavia. The Yugoslav dinar was replaced by the Serbian dinar, which has a
     * 3-
     *  digit code of 'RSD'.
     */
    public const VAL_YUM = 'YUM';

    /**
     * Constant for 'ZMK' value.
     *
     * This value is the old 3-digit code for a Zambian kwacha, a currency used in
     *  Zambia. The 'ZMK' code has been replaced by 'ZMW'.
     */
    public const VAL_ZMK = 'ZMK';

    /**
     * Constant for 'ZWD' value.
     *
     * This value is the old 3-digit code for a Zimbabwean dollar, a currency
     * previously
     *  used in Zimbabwe. The US dollar replaced the Zimbabwean dollar as the official
     *  currency in Zimbabwe.
     */
    public const VAL_ZWD = 'ZWD';

    /**
     * Constant for 'ATS' value.
     *
     * This value is a 3-digit code for an Austrian schilling, a currency previously
     * used
     *  in Austria. This currency has been replaced by the Euro (3-digit code: EUR).
     */
    public const VAL_ATS = 'ATS';

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
