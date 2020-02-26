<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ShippingCarrierCodeType
 *
 * Identifies a shipping carrier used to ship an order, and the countries served by that carrier.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>ShippingCarrierDetails</b> and examining the returned <strong>ShippingCarrierDetails.ShippingCarrier</strong> field.
 *  </span>
 * XSD Type: ShippingCarrierCodeType
 */
class ShippingCarrierCodeType
{

    /**
     * Constant for 'UPS' value.
     *
     * United Parcel Service
     *  <br/>
     *  In CompleteSale call requests, the value <code>UPS</code> also represents UPS
     * Mail Innovations. Available in US, IE, UK, FR, IT, DE, CH, ES, AT, CN, BE, PL,
     * NL.
     */
    public const VAL_UPS = 'UPS';

    /**
     * Constant for 'USPS' value.
     *
     * U.S. Postal Service
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CN, UK, DE.
     */
    public const VAL_USPS = 'USPS';

    /**
     * Constant for 'FedEx' value.
     *
     * FedEx
     *  <br/>
     *  &nbsp;&nbsp;In CompleteSale call requests, the value <code>FedEx</code> also
     * represents FedEx SmartPost. Available in US, IE, UK, FR, IT, DE, CH, AU, ES, AT,
     * CN, BE, PL, NL.
     */
    public const VAL_FED_EX = 'FedEx';

    /**
     * Constant for 'DeutschePost' value.
     *
     * Deutsche Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_DEUTSCHE_POST = 'DeutschePost';

    /**
     * Constant for 'DHL' value.
     *
     * DHL Express
     *  <br/>
     *  &nbsp;&nbsp;Available in IE, US, ID, MX, MY, CA, UK, FR, IT, HK, TW, DE, CH,
     * KR, AU, ES, AT, CN, SG, BE, TH, NL.
     */
    public const VAL_DHL = 'DHL';

    /**
     * Constant for 'Hermes' value.
     *
     * Hermes Group
     *  <br/>
     *  &nbsp;&nbsp;Available in US, AT, UK, DE.
     */
    public const VAL_HERMES = 'Hermes';

    /**
     * Constant for 'iLoxx' value.
     *
     * iloxx eService
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_I_LOXX = 'iLoxx';

    /**
     * Constant for 'Other' value.
     *
     * Use this code for any carrier not listed here.
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'ColiposteDomestic' value.
     *
     * Coliposte Domestic
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_COLIPOSTE_DOMESTIC = 'ColiposteDomestic';

    /**
     * Constant for 'ColiposteInternational' value.
     *
     * Coliposte International
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_COLIPOSTE_INTERNATIONAL = 'ColiposteInternational';

    /**
     * Constant for 'Chronopost' value.
     *
     * Chronopost
     *  <br/>
     *  &nbsp;&nbsp;Available in US, FR, UK, DE.
     */
    public const VAL_CHRONOPOST = 'Chronopost';

    /**
     * Constant for 'Correos' value.
     *
     * Correos
     *  <br/>
     *  &nbsp;&nbsp;Available in ES, US, UK, DE.
     */
    public const VAL_CORREOS = 'Correos';

    /**
     * Constant for 'Seur' value.
     *
     * Seur (reserved for future use).
     */
    public const VAL_SEUR = 'Seur';

    /**
     * Constant for 'Nacex' value.
     *
     * Nacex
     *  <br/>
     *  &nbsp;&nbsp;Available in ES, US, UK, DE.
     */
    public const VAL_NACEX = 'Nacex';

    /**
     * Constant for 'FourPX' value.
     *
     * 4PX
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_FOUR_PX = 'FourPX';

    /**
     * Constant for 'FourPXCHINA' value.
     *
     * 4PX China
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CN, UK.
     */
    public const VAL_FOUR_PXCHINA = 'FourPXCHINA';

    /**
     * Constant for 'FourPXExpress' value.
     *
     * 4PX Express
     *  <br/>
     *  &nbsp;&nbsp;Available in UK, DE.
     */
    public const VAL_FOUR_PXEXPRESS = 'FourPXExpress';

    /**
     * Constant for 'FourPXLTD' value.
     *
     * 4PX Express Co. Ltd
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_FOUR_PXLTD = 'FourPXLTD';

    /**
     * Constant for 'SevenLSP' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_SEVEN_LSP = 'SevenLSP';

    /**
     * Constant for 'A1CourierServices' value.
     *
     * A-1 Courier
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_A_1_COURIER_SERVICES = 'A1CourierServices';

    /**
     * Constant for 'ABF' value.
     *
     * ABF Freight
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_ABF = 'ABF';

    /**
     * Constant for 'AeroPost' value.
     *
     * AeroPost
     *  <br/>
     *  &nbsp;&nbsp;Available in JM, GT, CR, PA, TT, SV, CO, HN, CL, DO.
     */
    public const VAL_AERO_POST = 'AeroPost';

    /**
     * Constant for 'ALLIEDEXPRESS' value.
     *
     * Allied Express
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_ALLIEDEXPRESS = 'ALLIEDEXPRESS';

    /**
     * Constant for 'AMWST' value.
     *
     * AMWST
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_AMWST = 'AMWST';

    /**
     * Constant for 'AnPost' value.
     *
     * An Post
     *  <br/>
     *  &nbsp;&nbsp;Available in IE.
     */
    public const VAL_AN_POST = 'AnPost';

    /**
     * Constant for 'APC' value.
     *
     * APC Postal Logistics
     *  <br/>
     *  &nbsp;&nbsp;Available in UK.
     */
    public const VAL_APC = 'APC';

    /**
     * Constant for 'ARAMEX' value.
     *
     * Aramex
     *  <br/>
     *  &nbsp;&nbsp;Available in US, BH, IL, AE, IN, UA, KW, SA, QA.
     */
    public const VAL_ARAMEX = 'ARAMEX';

    /**
     * Constant for 'ARVATO' value.
     *
     * Arvato
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA, UK, FR, IT, GR, DE, CH, AT, BE, NL, SI, LT,
     * SK.
     */
    public const VAL_ARVATO = 'ARVATO';

    /**
     * Constant for 'ASM' value.
     *
     * ASM
     *  <br/>
     *  &nbsp;&nbsp;Available in ES.
     */
    public const VAL_ASM = 'ASM';

    /**
     * Constant for 'AustraliaPost' value.
     *
     * Australia Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE, AU.
     */
    public const VAL_AUSTRALIA_POST = 'AustraliaPost';

    /**
     * Constant for 'AustralianAirExpress' value.
     *
     * Australian Air Express
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_AUSTRALIAN_AIR_EXPRESS = 'AustralianAirExpress';

    /**
     * Constant for 'AVRT' value.
     *
     * Averitt Express
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_AVRT = 'AVRT';

    /**
     * Constant for 'BPost' value.
     *
     * bpost
     *  <br/>
     *  &nbsp;&nbsp;Also coded as <code>BELGIANPOST</code>. Available in US, UK, DE,
     * MO, BE.
     */
    public const VAL_BPOST = 'BPost';

    /**
     * Constant for 'Bartolini' value.
     *
     * BRT Bartolini
     *  <br/>
     *  &nbsp;&nbsp;Available in IT.
     */
    public const VAL_BARTOLINI = 'Bartolini';

    /**
     * Constant for 'BELGIANPOST' value.
     *
     * Belgian Post Group
     *  <br/>
     *  &nbsp;&nbsp;Also coded as <code>BPost</code>. Available in US, UK, DE MO, BE.
     */
    public const VAL_BELGIANPOST = 'BELGIANPOST';

    /**
     * Constant for 'BKNS' value.
     *
     * BKNS
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_BKNS = 'BKNS';

    /**
     * Constant for 'BluePackage' value.
     *
     * Blue Package Delivery
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_BLUE_PACKAGE = 'BluePackage';

    /**
     * Constant for 'BusinessPost' value.
     *
     * BusinessPost
     *  <br/>
     *  &nbsp;&nbsp;Available in UK.
     */
    public const VAL_BUSINESS_POST = 'BusinessPost';

    /**
     * Constant for 'CanPar' value.
     *
     * Canpar Courier
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA, IT, UK, DE, AU
     */
    public const VAL_CAN_PAR = 'CanPar';

    /**
     * Constant for 'CENF' value.
     *
     * Central Freight Lines
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_CENF = 'CENF';

    /**
     * Constant for 'CEVA' value.
     *
     * CEVA Logistics
     *  <br/>
     *  &nbsp;&nbsp;Available in US, IT.
     */
    public const VAL_CEVA = 'CEVA';

    /**
     * Constant for 'ChinaPost' value.
     *
     * China Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_CHINA_POST = 'ChinaPost';

    /**
     * Constant for 'Chronoexpres' value.
     *
     * Chronoexpres
     *  <br/>
     *  &nbsp;&nbsp;Available in ES.
     */
    public const VAL_CHRONOEXPRES = 'Chronoexpres';

    /**
     * Constant for 'CHUKOU1' value.
     *
     * Chukou1
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_CHUKOU_1 = 'CHUKOU1';

    /**
     * Constant for 'ChunghwaPost' value.
     *
     * Chunghwa Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_CHUNGHWA_POST = 'ChunghwaPost';

    /**
     * Constant for 'CitiPost' value.
     *
     * CitiPost
     *  <br/>
     *  &nbsp;&nbsp;Available in US, IE, CA, UK, FR, IT, HK, DE, AU, ES, CN, BE, UZ,
     * PL, NL.
     */
    public const VAL_CITI_POST = 'CitiPost';

    /**
     * Constant for 'CityLink' value.
     *
     * Citylink
     *  <br/>
     *  &nbsp;&nbsp;Available in IE.
     */
    public const VAL_CITY_LINK = 'CityLink';

    /**
     * Constant for 'ClickandQuick' value.
     *
     * Click & Quick
     *  <br/>
     *  &nbsp;&nbsp;Available in IT.
     */
    public const VAL_CLICKAND_QUICK = 'ClickandQuick';

    /**
     * Constant for 'CNWY' value.
     *
     * XPO Logistics (formerly Con-way Freight)
     *  <br/>
     *  &nbsp;&nbsp;Con-way Freight is now part of XPO Logistics. Available in US.
     */
    public const VAL_CNWY = 'CNWY';

    /**
     * Constant for 'Colissimo' value.
     *
     * Colissimo
     *  <br/>
     *  &nbsp;&nbsp;Available in FR.
     */
    public const VAL_COLISSIMO = 'Colissimo';

    /**
     * Constant for 'CollectPlus' value.
     *
     * CollectPlus
     *  <br/>
     *  &nbsp;&nbsp;Available in UK.
     */
    public const VAL_COLLECT_PLUS = 'CollectPlus';

    /**
     * Constant for 'CPC' value.
     *
     * CPC Logistics
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA, UK, DE.
     */
    public const VAL_CPC = 'CPC';

    /**
     * Constant for 'DAIPost' value.
     *
     * DAI Post
     *  <br/>
     *  &nbsp;&nbsp;Available in UK, AU.
     */
    public const VAL_DAIPOST = 'DAIPost';

    /**
     * Constant for 'DayandRoss' value.
     *
     * Day & Ross
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA, UK, AU.
     */
    public const VAL_DAYAND_ROSS = 'DayandRoss';

    /**
     * Constant for 'DBSchenker' value.
     *
     * DB Schenker
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_DBSCHENKER = 'DBSchenker';

    /**
     * Constant for 'DHLEXPRESS' value.
     *
     * DHL Express
     *  <br/>
     *  &nbsp;&nbsp;Available in IT, DE.
     */
    public const VAL_DHLEXPRESS = 'DHLEXPRESS';

    /**
     * Constant for 'DHLGlobalMail' value.
     *
     * DHL Global Mail
     *  <br/>
     *  &nbsp;&nbsp;Formerly coded as <code>DHLG</code>. Available in US, UK, DE.
     */
    public const VAL_DHLGLOBAL_MAIL = 'DHLGlobalMail';

    /**
     * Constant for 'DHLEKB' value.
     *
     * DHL EKB
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_DHLEKB = 'DHLEKB';

    /**
     * Constant for 'DHLG' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Use <code>DHLGlobalMail</code> instead.
     */
    public const VAL_DHLG = 'DHLG';

    /**
     * Constant for 'DieSchweizerischePost' value.
     *
     * Die Schweizerische Post
     *  <br/>
     *  &nbsp;&nbsp;Available in CH.
     */
    public const VAL_DIE_SCHWEIZERISCHE_POST = 'DieSchweizerischePost';

    /**
     * Constant for 'DPD' value.
     *
     * DPD (Dynamic Parcel Distribution)
     *  <br/>
     *  &nbsp;&nbsp;Available in IE, BG, AT, UK, HR, BE, HU, PL, CZ, DE, NL, CH.
     */
    public const VAL_DPD = 'DPD';

    /**
     * Constant for 'DPXThailand' value.
     *
     * DPX Thailand
     *  <br/>
     *  &nbsp;&nbsp;Available in US, TH.
     */
    public const VAL_DPXTHAILAND = 'DPXThailand';

    /**
     * Constant for 'Ducros' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_DUCROS = 'Ducros';

    /**
     * Constant for 'EGO' value.
     *
     * E-go
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_EGO = 'EGO';

    /**
     * Constant for 'EMF' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_EMF = 'EMF';

    /**
     * Constant for 'Exapaq' value.
     *
     * DPD France (formerly Exapaq)
     *  <br/>
     *  &nbsp;&nbsp;Exapaq is now part of DPD France. Available in FR.
     */
    public const VAL_EXAPAQ = 'Exapaq';

    /**
     * Constant for 'Fastway' value.
     *
     * Fastway
     *  <br/>
     *  &nbsp;&nbsp;Available in IE.
     */
    public const VAL_FASTWAY = 'Fastway';

    /**
     * Constant for 'FASTWAYCOURIERS' value.
     *
     * Fastway Couriers
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_FASTWAYCOURIERS = 'FASTWAYCOURIERS';

    /**
     * Constant for 'FedExSmartPost' value.
     *
     * FedEx SmartPost
     *  <br/>
     *  &nbsp;&nbsp;In CompleteSale call requests only, specify FedEx SmartPost with
     * the value <code>FedEx</code>. Available in US, UK, DE.
     */
    public const VAL_FED_EX_SMART_POST = 'FedExSmartPost';

    /**
     * Constant for 'FLYT' value.
     *
     * Flyt
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_FLYT = 'FLYT';

    /**
     * Constant for 'FLYTExpress' value.
     *
     * Flyt Express
     *  <br/>
     *  &nbsp;&nbsp;Available in UK, DE.
     */
    public const VAL_FLYTEXPRESS = 'FLYTExpress';

    /**
     * Constant for 'FlytExpressUSDirectline' value.
     *
     * Flyt Express US Direct line
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_FLYT_EXPRESS_USDIRECTLINE = 'FlytExpressUSDirectline';

    /**
     * Constant for 'FTFT' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_FTFT = 'FTFT';

    /**
     * Constant for 'FulfilExpressAccStation' value.
     *
     * FulfilExpress-AccStation
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_FULFIL_EXPRESS_ACC_STATION = 'FulfilExpressAccStation';

    /**
     * Constant for 'FulfilExpresseForCity' value.
     *
     * FulfilExpress-eForCity
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_FULFIL_EXPRESSE_FOR_CITY = 'FulfilExpresseForCity';

    /**
     * Constant for 'FulfilExpressEverydaySource' value.
     *
     * FulfilExpress-EverydaySource
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_FULFIL_EXPRESS_EVERYDAY_SOURCE = 'FulfilExpressEverydaySource';

    /**
     * Constant for 'FulfilExpressiTrimming' value.
     *
     * FulfilExpress-iTrimming
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_FULFIL_EXPRESSI_TRIMMING = 'FulfilExpressiTrimming';

    /**
     * Constant for 'GLS' value.
     *
     * GLS (General Logistics Systems)
     *  <br/>
     *  &nbsp;&nbsp;Available in IE, ES, AT, IT, FR, BE, DE, NL.
     */
    public const VAL_GLS = 'GLS';

    /**
     * Constant for 'HDUSA' value.
     *
     * MXD Group (formerly Home Direct USA)
     *  <br/>
     *  &nbsp;&nbsp;Home Direct USA is now part of MXD Group. Available in US.
     */
    public const VAL_HDUSA = 'HDUSA';

    /**
     * Constant for 'HomeDeliveryNetwork' value.
     *
     * n/a
     *  <br/>
     *  Use <code>Yodel</code> instead.
     */
    public const VAL_HOME_DELIVERY_NETWORK = 'HomeDeliveryNetwork';

    /**
     * Constant for 'HongKongPost' value.
     *
     * Hong Kong Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE, AU.
     */
    public const VAL_HONG_KONG_POST = 'HongKongPost';

    /**
     * Constant for 'HUNTEREXPRESS' value.
     *
     * Hunter Express
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_HUNTEREXPRESS = 'HUNTEREXPRESS';

    /**
     * Constant for 'IndiaPost' value.
     *
     * India Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_INDIA_POST = 'IndiaPost';

    /**
     * Constant for 'IndonesiaPost' value.
     *
     * Indonesia Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_INDONESIA_POST = 'IndonesiaPost';

    /**
     * Constant for 'Interlink' value.
     *
     * Interlink Express
     *  <br/>
     *  &nbsp;&nbsp;Available in UK.
     */
    public const VAL_INTERLINK = 'Interlink';

    /**
     * Constant for 'InterPost' value.
     *
     * InterPost
     *  <br/>
     *  &nbsp;&nbsp;Available in IE, US, CA, UK, FR, IT, HK, DE, RO, AU, ES, AT, CN,
     * CY, BE, PL, NL.
     */
    public const VAL_INTER_POST = 'InterPost';

    /**
     * Constant for 'IoInvio' value.
     *
     * IoInvio
     *  <br/>
     *  &nbsp;&nbsp;Available in IT.
     */
    public const VAL_IO_INVIO = 'IoInvio';

    /**
     * Constant for 'Iparcel' value.
     *
     * UPS i-parcel
     *  <br/>
     *  &nbsp;&nbsp;Available in US, MX, MY, SG, HK, ZA, TR, CH, JP, BR.
     */
    public const VAL_IPARCEL = 'Iparcel';

    /**
     * Constant for 'IsraelPost' value.
     *
     * Israel Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_ISRAEL_POST = 'IsraelPost';

    /**
     * Constant for 'JapanPost' value.
     *
     * Japan Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_JAPAN_POST = 'JapanPost';

    /**
     * Constant for 'KIALA' value.
     *
     * Kiala (UPS Access Point)
     *  <br/>
     *  &nbsp;&nbsp;Available in ES, US, FR, UK, BE, DE, NL.
     */
    public const VAL_KIALA = 'KIALA';

    /**
     * Constant for 'KoreaPost' value.
     *
     * Korea Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_KOREA_POST = 'KoreaPost';

    /**
     * Constant for 'LAPOSTE' value.
     *
     * La Poste
     *  <br/>
     *  &nbsp;&nbsp;Available in US, FR, UK, DE.
     */
    public const VAL_LAPOSTE = 'LAPOSTE';

    /**
     * Constant for 'Landmark' value.
     *
     * Landmark Global
     *  <br/>
     *  &nbsp;&nbsp;Available in US, NZ, NO.
     */
    public const VAL_LANDMARK = 'Landmark';

    /**
     * Constant for 'LDSO' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_LDSO = 'LDSO';

    /**
     * Constant for 'LTL' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_LTL = 'LTL';

    /**
     * Constant for 'MALAYSIAPOST' value.
     *
     * Malaysia Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_MALAYSIAPOST = 'MALAYSIAPOST';

    /**
     * Constant for 'MannaFreight' value.
     *
     * Manna Distribution Services
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_MANNA_FREIGHT = 'MannaFreight';

    /**
     * Constant for 'Metapack' value.
     *
     * Metapack
     *  <br/>
     *  &nbsp;&nbsp;Available in UK.
     */
    public const VAL_METAPACK = 'Metapack';

    /**
     * Constant for 'MNGTurkey' value.
     *
     * MNG Kargo
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, TR.
     */
    public const VAL_MNGTURKEY = 'MNGTurkey';

    /**
     * Constant for 'MondialRelay' value.
     *
     * Mondial Relay
     *  <br/>
     *  &nbsp;&nbsp;Available in FR.
     */
    public const VAL_MONDIAL_RELAY = 'MondialRelay';

    /**
     * Constant for 'MRW' value.
     *
     * MRW
     *  <br/>
     *  &nbsp;&nbsp;Available in ES.
     */
    public const VAL_MRW = 'MRW';

    /**
     * Constant for 'MSI' value.
     *
     * MSI Transportation
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_MSI = 'MSI';

    /**
     * Constant for 'NEMF' value.
     *
     * New England Motor Freight
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_NEMF = 'NEMF';

    /**
     * Constant for 'ODFL' value.
     *
     * Old Dominion Freight Line
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_ODFL = 'ODFL';

    /**
     * Constant for 'OFFD' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_OFFD = 'OFFD';

    /**
     * Constant for 'ONTRACK' value.
     *
     * OnTrac Shipping
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_ONTRACK = 'ONTRACK';

    /**
     * Constant for 'OsterreichischePostAG' value.
     *
     * Osterreichische Post
     *  <br/>
     *  &nbsp;&nbsp;Available in AT.
     */
    public const VAL_OSTERREICHISCHE_POST_AG = 'OsterreichischePostAG';

    /**
     * Constant for 'OVNT' value.
     *
     * UPS Freight (formerly Overnite)
     *  <br/>
     *  &nbsp;&nbsp;Overnite is now part of UPS Freight. Available in US.
     */
    public const VAL_OVNT = 'OVNT';

    /**
     * Constant for 'ParcelPool' value.
     *
     * International Bridge Domestic delivery
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_PARCEL_POOL = 'ParcelPool';

    /**
     * Constant for 'Parcelforce' value.
     *
     * Parcelforce
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_PARCELFORCE = 'Parcelforce';

    /**
     * Constant for 'Philpost' value.
     *
     * PHLPost (Philippine Postal Corporation)
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_PHILPOST = 'Philpost';

    /**
     * Constant for 'Pilot' value.
     *
     * Pilot Freight Services
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_PILOT = 'Pilot';

    /**
     * Constant for 'PITD' value.
     *
     * PITT OHIO
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_PITD = 'PITD';

    /**
     * Constant for 'PocztaPolska' value.
     *
     * Poczta Polska
     *  <br/>
     *  &nbsp;&nbsp;Available in PL.
     */
    public const VAL_POCZTA_POLSKA = 'PocztaPolska';

    /**
     * Constant for 'Pocztex' value.
     *
     * Pocztex
     *  <br/>
     *  &nbsp;&nbsp;Available in PL.
     */
    public const VAL_POCZTEX = 'Pocztex';

    /**
     * Constant for 'POSTITALIANO' value.
     *
     * Post Italiano
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_POSTITALIANO = 'POSTITALIANO';

    /**
     * Constant for 'PostNL' value.
     *
     * PostNL
     *  <br/>
     *  &nbsp;&nbsp;Available in NL.
     */
    public const VAL_POST_NL = 'PostNL';

    /**
     * Constant for 'PostNordNorway' value.
     *
     * PostNord
     *  <br/>
     *  &nbsp;&nbsp;Available in UK, NO.
     */
    public const VAL_POST_NORD_NORWAY = 'PostNordNorway';

    /**
     * Constant for 'PosteItaliane' value.
     *
     * Poste Italiane
     *  <br/>
     *  &nbsp;&nbsp;Available in IT.
     */
    public const VAL_POSTE_ITALIANE = 'PosteItaliane';

    /**
     * Constant for 'Prestige' value.
     *
     * LaserShip (formerly Prestige Expedite)
     *  <br/>
     *  &nbsp;&nbsp;Prestige Expedite is now part of LaserShip. Available in US.
     */
    public const VAL_PRESTIGE = 'Prestige';

    /**
     * Constant for 'Quantium' value.
     *
     * Quantium Solutions
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE, AU.
     */
    public const VAL_QUANTIUM = 'Quantium';

    /**
     * Constant for 'RETL' value.
     *
     * Reddaway
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_RETL = 'RETL';

    /**
     * Constant for 'RoyalMail' value.
     *
     * Royal Mail
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_ROYAL_MAIL = 'RoyalMail';

    /**
     * Constant for 'RRUN' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_RRUN = 'RRUN';

    /**
     * Constant for 'SAIA' value.
     *
     * Saia LTL Freight
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_SAIA = 'SAIA';

    /**
     * Constant for 'SDA' value.
     *
     * SDA Express Courier
     *  <br/>
     *  &nbsp;&nbsp;Available in IT.
     */
    public const VAL_SDA = 'SDA';

    /**
     * Constant for 'SFC' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_SFC = 'SFC';

    /**
     * Constant for 'SFCExpress' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_SFCEXPRESS = 'SFCExpress';

    /**
     * Constant for 'SINGAPOREPOST' value.
     *
     * Singapore Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_SINGAPOREPOST = 'SINGAPOREPOST';

    /**
     * Constant for 'Siodemka' value.
     *
     * Siodemka (DPD Poland)
     *  <br/>
     *  &nbsp;&nbsp;Available in PL.
     */
    public const VAL_SIODEMKA = 'Siodemka';

    /**
     * Constant for 'SioliandFontana' value.
     *
     * Sioli & Fontana
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA, IT.
     */
    public const VAL_SIOLIAND_FONTANA = 'SioliandFontana';

    /**
     * Constant for 'SkynetMalaysia' value.
     *
     * Skynet (Malaysia)
     *  <br/>
     *  &nbsp;&nbsp;Available in US, MY.
     */
    public const VAL_SKYNET_MALAYSIA = 'SkynetMalaysia';

    /**
     * Constant for 'SMARTSEND' value.
     *
     * Smart Send Courier Service
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_SMARTSEND = 'SMARTSEND';

    /**
     * Constant for 'Sogetras' value.
     *
     * SGT Corriere Espresso
     *  <br/>
     *  &nbsp;&nbsp;Available in IT.
     */
    public const VAL_SOGETRAS = 'Sogetras';

    /**
     * Constant for 'Spediamo' value.
     *
     * Spediamo
     *  <br/>
     *  &nbsp;&nbsp;Available in IT.
     */
    public const VAL_SPEDIAMO = 'Spediamo';

    /**
     * Constant for 'SpeeDee' value.
     *
     * Spee-Dee Delivery Service
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_SPEE_DEE = 'SpeeDee';

    /**
     * Constant for 'StarTrack' value.
     *
     * StarTrack
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_STAR_TRACK = 'StarTrack';

    /**
     * Constant for 'SuntekExpressLTD' value.
     *
     * Suntek Express LTD
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_SUNTEK_EXPRESS_LTD = 'SuntekExpressLTD';

    /**
     * Constant for 'SwissPost' value.
     *
     * Swiss Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, CH.
     */
    public const VAL_SWISS_POST = 'SwissPost';

    /**
     * Constant for 'TELE' value.
     *
     * TELE
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_TELE = 'TELE';

    /**
     * Constant for 'TEMANDO' value.
     *
     * Temando (shipping broker)
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_TEMANDO = 'TEMANDO';

    /**
     * Constant for 'THAILANDPOST' value.
     *
     * Thailand Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_THAILANDPOST = 'THAILANDPOST';

    /**
     * Constant for 'TNT' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_TNT = 'TNT';

    /**
     * Constant for 'TNTEXPRESS' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_TNTEXPRESS = 'TNTEXPRESS';

    /**
     * Constant for 'TNTPost' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_TNTPOST = 'TNTPost';

    /**
     * Constant for 'Toll' value.
     *
     * Toll (Japan Post)
     *  <br/>
     *  &nbsp;&nbsp;Available in AU.
     */
    public const VAL_TOLL = 'Toll';

    /**
     * Constant for 'TPG' value.
     *
     * TPG Logistics
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_TPG = 'TPG';

    /**
     * Constant for 'TWW' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_TWW = 'TWW';

    /**
     * Constant for 'UBI' value.
     *
     * UBI Smart Parcel
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_UBI = 'UBI';

    /**
     * Constant for 'UKMail' value.
     *
     * UK Mail
     *  <br/>
     *  &nbsp;&nbsp;Available in UK.
     */
    public const VAL_UKMAIL = 'UKMail';

    /**
     * Constant for 'UPSMailInnovations' value.
     *
     * UPS Mail Innovations
     *  <br/>
     *  &nbsp;&nbsp;In CompleteSale call requests only, specify UPS Mail Innovations
     * with the value <code>UPS</code>. Available in US, UK, DE.
     */
    public const VAL_UPSMAIL_INNOVATIONS = 'UPSMailInnovations';

    /**
     * Constant for 'UPSC' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_UPSC = 'UPSC';

    /**
     * Constant for 'USFG' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_USFG = 'USFG';

    /**
     * Constant for 'USPSCeP' value.
     *
     * USPS Commercial ePacket
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA.
     */
    public const VAL_USPSCE_P = 'USPSCeP';

    /**
     * Constant for 'USPSPMI' value.
     *
     * USPS Priority Mail International
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA.
     */
    public const VAL_USPSPMI = 'USPSPMI';

    /**
     * Constant for 'VietnamPost' value.
     *
     * Vietnam Post
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_VIETNAM_POST = 'VietnamPost';

    /**
     * Constant for 'VITR' value.
     *
     * Vitran Express
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_VITR = 'VITR';

    /**
     * Constant for 'WATKINS' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_WATKINS = 'WATKINS';

    /**
     * Constant for 'Winit' value.
     *
     * WIN.IT America
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE, AU.
     */
    public const VAL_WINIT = 'Winit';

    /**
     * Constant for 'Wise' value.
     *
     * n/a
     *  <br/>
     *  &nbsp;&nbsp;Not currently supported.
     */
    public const VAL_WISE = 'Wise';

    /**
     * Constant for 'WNdirect' value.
     *
     * wnDirect
     *  <br/>
     *  &nbsp;&nbsp;Available in US, CA, IT, FR, UK, RU, AU.
     */
    public const VAL_WNDIRECT = 'WNdirect';

    /**
     * Constant for 'WPX' value.
     *
     * WPX Delivery Solutions
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_WPX = 'WPX';

    /**
     * Constant for 'YANWEN' value.
     *
     * YANWEN Express
     *  <br/>
     *  &nbsp;&nbsp;Available in US, UK, DE.
     */
    public const VAL_YANWEN = 'YANWEN';

    /**
     * Constant for 'Yodel' value.
     *
     * Yodel
     *  <br/>
     *  &nbsp;&nbsp;Available in UK.
     */
    public const VAL_YODEL = 'Yodel';

    /**
     * Constant for 'YRC' value.
     *
     * YRC Freight
     *  <br/>
     *  &nbsp;&nbsp;Available in US.
     */
    public const VAL_YRC = 'YRC';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
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
