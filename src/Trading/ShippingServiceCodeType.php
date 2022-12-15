<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingServiceCodeType
 *
 * A shipping service used to ship an item. Applications should not depend on the completeness of <strong>ShippingServiceCodeType</strong>. Instead, applications should call GeteBayDetails, with a <strong>DetailName</strong> value of <code>ShippingServiceDetails</code>, to return the complete list of shipping services. To check for the shipping services available for a specific site, specify the site ID in the header.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> It is possible that some of the returned shipping services can no longer be used in the AddItem family of calls. To distinguish between the valid and invalid shipping services, look for the <strong>ValidForSellingFlow</strong> flag in the <strong>ShippingServiceDetails</strong> node. If this flag is not returned for a specific shipping service, that shipping service can no longer be used in the AddItem family of calls.
 *  </span>
 * XSD Type: ShippingServiceCodeType
 */
class ShippingServiceCodeType
{
    /**
     * Constant for 'UPSGround' value.
     *
     * UPS Ground
     */
    public const VAL_UPSGROUND = 'UPSGround';

    /**
     * Constant for 'UPS3rdDay' value.
     *
     * UPS 3rd Day
     */
    public const VAL_UPS_3_RD_DAY = 'UPS3rdDay';

    /**
     * Constant for 'UPS2ndDay' value.
     *
     * UPS 2nd Day
     */
    public const VAL_UPS_2_ND_DAY = 'UPS2ndDay';

    /**
     * Constant for 'UPSNextDay' value.
     *
     * UPS Next Day
     */
    public const VAL_UPSNEXT_DAY = 'UPSNextDay';

    /**
     * Constant for 'USPSPriority' value.
     *
     * USPS Priority
     */
    public const VAL_USPSPRIORITY = 'USPSPriority';

    /**
     * Constant for 'USPSParcel' value.
     *
     * USPS Parcel Select Non-Presort
     */
    public const VAL_USPSPARCEL = 'USPSParcel';

    /**
     * Constant for 'USPSStandardPost' value.
     *
     * USPS Standard Post
     */
    public const VAL_USPSSTANDARD_POST = 'USPSStandardPost';

    /**
     * Constant for 'USPSMedia' value.
     *
     * USPS Media
     */
    public const VAL_USPSMEDIA = 'USPSMedia';

    /**
     * Constant for 'USPSFirstClass' value.
     *
     * USPS First Class
     */
    public const VAL_USPSFIRST_CLASS = 'USPSFirstClass';

    /**
     * Constant for 'ShippingMethodStandard' value.
     *
     * Standard shipping method
     */
    public const VAL_SHIPPING_METHOD_STANDARD = 'ShippingMethodStandard';

    /**
     * Constant for 'ShippingMethodExpress' value.
     *
     * Reserved for internal or future use
     */
    public const VAL_SHIPPING_METHOD_EXPRESS = 'ShippingMethodExpress';

    /**
     * Constant for 'USPSExpressMail' value.
     *
     * USPS Priority Mail Express
     */
    public const VAL_USPSEXPRESS_MAIL = 'USPSExpressMail';

    /**
     * Constant for 'UPSNextDayAir' value.
     *
     * UPS Next Day Air
     */
    public const VAL_UPSNEXT_DAY_AIR = 'UPSNextDayAir';

    /**
     * Constant for 'UPS2DayAirAM' value.
     *
     * UPS Next Day Air
     */
    public const VAL_UPS_2_DAY_AIR_AM = 'UPS2DayAirAM';

    /**
     * Constant for 'USPSExpressMailFlatRateEnvelope' value.
     *
     * USPS Priority Mail Express Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSEXPRESS_MAIL_FLAT_RATE_ENVELOPE = 'USPSExpressMailFlatRateEnvelope';

    /**
     * Constant for 'USPSExpressMailPaddedFlatRateEnvelope' value.
     *
     * USPS Priority Mail Express Padded Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSEXPRESS_MAIL_PADDED_FLAT_RATE_ENVELOPE = 'USPSExpressMailPaddedFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityMailFlatRateEnvelope' value.
     *
     * USPS Priority Mail Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSPRIORITY_MAIL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityMailSmallFlatRateBox' value.
     *
     * USPS Priority Mail Small Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSPRIORITY_MAIL_SMALL_FLAT_RATE_BOX = 'USPSPriorityMailSmallFlatRateBox';

    /**
     * Constant for 'USPSPriorityMailFlatRateBox' value.
     *
     * USPS Priority Mail Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSPRIORITY_MAIL_FLAT_RATE_BOX = 'USPSPriorityMailFlatRateBox';

    /**
     * Constant for 'USPSPriorityMailLargeFlatRateBox' value.
     *
     * USPS Priority Mail Large Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_LARGE_FLAT_RATE_BOX = 'USPSPriorityMailLargeFlatRateBox';

    /**
     * Constant for 'USPSPriorityMailPaddedFlatRateEnvelope' value.
     *
     * USPS Priority Mail Padded Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_PADDED_FLAT_RATE_ENVELOPE = 'USPSPriorityMailPaddedFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityMailLegalFlatRateEnvelope' value.
     *
     * USPS Priority Mail Legal Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailLegalFlatRateEnvelope';

    /**
     * Constant for 'USPSExpressMailLegalFlatRateEnvelope' value.
     *
     * USPS Priority Mail Express Legal Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSEXPRESS_MAIL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailLegalFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityMailRegionalBoxA' value.
     *
     * USPS Priority Mail Regional Box A
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_REGIONAL_BOX_A = 'USPSPriorityMailRegionalBoxA';

    /**
     * Constant for 'USPSPriorityMailRegionalBoxB' value.
     *
     * USPS Priority Mail Regional Box B
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_REGIONAL_BOX_B = 'USPSPriorityMailRegionalBoxB';

    /**
     * Constant for 'USPSPriorityMailRegionalBoxC' value.
     *
     * USPS Priority Mail Regional Box C
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_REGIONAL_BOX_C = 'USPSPriorityMailRegionalBoxC';

    /**
     * Constant for 'USPSExpressMailFlatRateBox' value.
     *
     * USPS Priority Mail Express Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSEXPRESS_MAIL_FLAT_RATE_BOX = 'USPSExpressMailFlatRateBox';

    /**
     * Constant for 'Other' value.
     *
     * Other (see description)
     */
    public const VAL_OTHER = 'Other';

    /**
     * Constant for 'LocalDelivery' value.
     *
     * Local Delivery/Pickup
     */
    public const VAL_LOCAL_DELIVERY = 'LocalDelivery';

    /**
     * Constant for 'NotSelected' value.
     *
     * Not Selected
     */
    public const VAL_NOT_SELECTED = 'NotSelected';

    /**
     * Constant for 'InternationalNotSelected' value.
     *
     * International Not Selected
     */
    public const VAL_INTERNATIONAL_NOT_SELECTED = 'InternationalNotSelected';

    /**
     * Constant for 'StandardInternational' value.
     *
     * Standard International Flat Rate Shipping
     */
    public const VAL_STANDARD_INTERNATIONAL = 'StandardInternational';

    /**
     * Constant for 'ExpeditedInternational' value.
     *
     * Expedited International Flat Rate Shipping
     */
    public const VAL_EXPEDITED_INTERNATIONAL = 'ExpeditedInternational';

    /**
     * Constant for 'USPSGlobalExpress' value.
     *
     * USPS Global Express Mail
     */
    public const VAL_USPSGLOBAL_EXPRESS = 'USPSGlobalExpress';

    /**
     * Constant for 'USPSGlobalPriority' value.
     *
     * USPS Global Priority Mail
     */
    public const VAL_USPSGLOBAL_PRIORITY = 'USPSGlobalPriority';

    /**
     * Constant for 'USPSEconomyParcel' value.
     *
     * USPS Economy Parcel Post
     */
    public const VAL_USPSECONOMY_PARCEL = 'USPSEconomyParcel';

    /**
     * Constant for 'USPSEconomyLetter' value.
     *
     * USPS Economy Letter Post
     */
    public const VAL_USPSECONOMY_LETTER = 'USPSEconomyLetter';

    /**
     * Constant for 'USPSAirmailLetter' value.
     *
     * USPS Airmail Letter Post
     */
    public const VAL_USPSAIRMAIL_LETTER = 'USPSAirmailLetter';

    /**
     * Constant for 'USPSAirmailParcel' value.
     *
     * USPS Airmail Parcel Post
     */
    public const VAL_USPSAIRMAIL_PARCEL = 'USPSAirmailParcel';

    /**
     * Constant for 'UPSWorldWideExpressPlus' value.
     *
     * UPS Worldwide Express Plus
     */
    public const VAL_UPSWORLD_WIDE_EXPRESS_PLUS = 'UPSWorldWideExpressPlus';

    /**
     * Constant for 'UPSWorldWideExpress' value.
     *
     * UPS Worldwide Express
     */
    public const VAL_UPSWORLD_WIDE_EXPRESS = 'UPSWorldWideExpress';

    /**
     * Constant for 'UPSWorldWideExpedited' value.
     *
     * UPS Worldwide Expedited
     */
    public const VAL_UPSWORLD_WIDE_EXPEDITED = 'UPSWorldWideExpedited';

    /**
     * Constant for 'UPSWorldwideSaver' value.
     *
     * UPS Worldwide Saver
     */
    public const VAL_UPSWORLDWIDE_SAVER = 'UPSWorldwideSaver';

    /**
     * Constant for 'UPSStandardToCanada' value.
     *
     * UPS Standard To Canada
     */
    public const VAL_UPSSTANDARD_TO_CANADA = 'UPSStandardToCanada';

    /**
     * Constant for 'USPSExpressMailInternationalFlatRateEnvelope' value.
     *
     * USPS Priority Mail Express International Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalFlatRateEnvelope';

    /**
     * Constant for 'USPSExpressMailInternationalPaddedFlatRateEnvelope' value.
     *
     * USPS Priority Mail Express International Padded Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSEXPRESS_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalPaddedFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityMailInternationalFlatRateEnvelope' value.
     *
     * USPS Priority Mail International Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityMailInternationalSmallFlatRateBox' value.
     *
     * USPS Priority Mail International Small Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSPRIORITY_MAIL_INTERNATIONAL_SMALL_FLAT_RATE_BOX = 'USPSPriorityMailInternationalSmallFlatRateBox';

    /**
     * Constant for 'USPSPriorityMailInternationalFlatRateBox' value.
     *
     * USPS Priority Mail International Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     *  The seller must also specify a package size of Package/Thick Envelope when
     *  using a calculated shipping service.
     */
    public const VAL_USPSPRIORITY_MAIL_INTERNATIONAL_FLAT_RATE_BOX = 'USPSPriorityMailInternationalFlatRateBox';

    /**
     * Constant for 'USPSPriorityMailInternationalLargeFlatRateBox' value.
     *
     * USPS Priority Mail International Large Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_INTERNATIONAL_LARGE_FLAT_RATE_BOX = 'USPSPriorityMailInternationalLargeFlatRateBox';

    /**
     * Constant for 'USPSPriorityMailInternationalPaddedFlatRateEnvelope' value.
     *
     * USPS Priority Mail International Padded Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_INTERNATIONAL_PADDED_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalPaddedFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityMailInternationalLegalFlatRateEnvelope' value.
     *
     * USPS Priority Mail International Legal Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSPRIORITY_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSPriorityMailInternationalLegalFlatRateEnvelope';

    /**
     * Constant for 'USPSExpressMailInternationalLegalFlatRateEnvelope' value.
     *
     * USPS Priority Mail Express International Legal Flat Rate Envelope
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSEXPRESS_MAIL_INTERNATIONAL_LEGAL_FLAT_RATE_ENVELOPE = 'USPSExpressMailInternationalLegalFlatRateEnvelope';

    /**
     * Constant for 'USPSExpressMailInternationalFlatRateBox' value.
     *
     * USPS Priority Mail Express International Flat Rate Box
     *  To use this service, a seller must specify the package weight so that eBay
     *  can validate the weight against the maximum weight limit for the service.
     */
    public const VAL_USPSEXPRESS_MAIL_INTERNATIONAL_FLAT_RATE_BOX = 'USPSExpressMailInternationalFlatRateBox';

    /**
     * Constant for 'OtherInternational' value.
     *
     * Other International Shipping (see description)
     */
    public const VAL_OTHER_INTERNATIONAL = 'OtherInternational';

    /**
     * Constant for 'AT_StandardDispatch' value.
     *
     * Standardversand (unversichert)
     */
    public const VAL_AT__STANDARD_DISPATCH = 'AT_StandardDispatch';

    /**
     * Constant for 'AT_InsuredDispatch' value.
     *
     * Versicherter Versand
     */
    public const VAL_AT__INSURED_DISPATCH = 'AT_InsuredDispatch';

    /**
     * Constant for 'AT_Writing' value.
     *
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     */
    public const VAL_AT__WRITING = 'AT_Writing';

    /**
     * Constant for 'AT_COD' value.
     *
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     */
    public const VAL_AT__COD = 'AT_COD';

    /**
     * Constant for 'AT_ExpressOrCourier' value.
     *
     * Express- oder Kurierversand
     */
    public const VAL_AT__EXPRESS_OR_COURIER = 'AT_ExpressOrCourier';

    /**
     * Constant for 'AT_InsuredExpressOrCourier' value.
     *
     * Versicherter Express- oder Kurierversand
     */
    public const VAL_AT__INSURED_EXPRESS_OR_COURIER = 'AT_InsuredExpressOrCourier';

    /**
     * Constant for 'AT_SpecialDispatch' value.
     *
     * Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     */
    public const VAL_AT__SPECIAL_DISPATCH = 'AT_SpecialDispatch';

    /**
     * Constant for 'AT_InsuredSpecialDispatch' value.
     *
     * Versicherter Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     */
    public const VAL_AT__INSURED_SPECIAL_DISPATCH = 'AT_InsuredSpecialDispatch';

    /**
     * Constant for 'AT_Sonstige' value.
     *
     * Sonstige (Siehe Artikelbeschreibung)
     */
    public const VAL_AT__SONSTIGE = 'AT_Sonstige';

    /**
     * Constant for 'AT_UnversicherterVersandInternational' value.
     *
     * Unversicherter Versand International
     */
    public const VAL_AT__UNVERSICHERTER_VERSAND_INTERNATIONAL = 'AT_UnversicherterVersandInternational';

    /**
     * Constant for 'AT_VersicherterVersandInternational' value.
     *
     * Versicherter Versand International
     */
    public const VAL_AT__VERSICHERTER_VERSAND_INTERNATIONAL = 'AT_VersicherterVersandInternational';

    /**
     * Constant for 'AT_SonstigerVersandInternational' value.
     *
     * Sonstiger Versand International
     */
    public const VAL_AT__SONSTIGER_VERSAND_INTERNATIONAL = 'AT_SonstigerVersandInternational';

    /**
     * Constant for 'AT_UnversicherterExpressVersandInternational' value.
     *
     * Unversicherter Express Versand International
     */
    public const VAL_AT__UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'AT_UnversicherterExpressVersandInternational';

    /**
     * Constant for 'AT_VersicherterExpressVersandInternational' value.
     *
     * Versicherter Express Versand International
     */
    public const VAL_AT__VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'AT_VersicherterExpressVersandInternational';

    /**
     * Constant for 'AT_EconomyDeliveryFromAbroad' value.
     *
     * Sparversand aus dem Ausland
     */
    public const VAL_AT__ECONOMY_DELIVERY_FROM_ABROAD = 'AT_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'AT_StandardDeliveryFromAbroad' value.
     *
     * Standardversand aus dem Ausland
     */
    public const VAL_AT__STANDARD_DELIVERY_FROM_ABROAD = 'AT_StandardDeliveryFromAbroad';

    /**
     * Constant for 'AT_ExpressDeliveryFromAbroad' value.
     *
     * Expressversand aus dem Ausland
     */
    public const VAL_AT__EXPRESS_DELIVERY_FROM_ABROAD = 'AT_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'AT_TrackedDeliveryFromAbroad' value.
     *
     * Versand mit Nachverfolgung aus dem Ausland
     */
    public const VAL_AT__TRACKED_DELIVERY_FROM_ABROAD = 'AT_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'AU_Regular' value.
     *
     * Regular
     */
    public const VAL_AU__REGULAR = 'AU_Regular';

    /**
     * Constant for 'AU_Express' value.
     *
     * Express
     */
    public const VAL_AU__EXPRESS = 'AU_Express';

    /**
     * Constant for 'AU_Registered' value.
     *
     * Registered
     */
    public const VAL_AU__REGISTERED = 'AU_Registered';

    /**
     * Constant for 'AU_Courier' value.
     *
     * Courier
     */
    public const VAL_AU__COURIER = 'AU_Courier';

    /**
     * Constant for 'AU_Other' value.
     *
     * Other
     */
    public const VAL_AU__OTHER = 'AU_Other';

    /**
     * Constant for 'AU_EMSInternationalCourierParcels' value.
     *
     * EMS International Courier - Parcels
     */
    public const VAL_AU__EMSINTERNATIONAL_COURIER_PARCELS = 'AU_EMSInternationalCourierParcels';

    /**
     * Constant for 'AU_EMSInternationalCourierDocuments' value.
     *
     * EMS International Courier - Documents
     */
    public const VAL_AU__EMSINTERNATIONAL_COURIER_DOCUMENTS = 'AU_EMSInternationalCourierDocuments';

    /**
     * Constant for 'AU_ExpressPostInternationalDocuments' value.
     *
     * Express Post International - Documents
     */
    public const VAL_AU__EXPRESS_POST_INTERNATIONAL_DOCUMENTS = 'AU_ExpressPostInternationalDocuments';

    /**
     * Constant for 'AU_AirMailInternational' value.
     *
     * Air Mail
     */
    public const VAL_AU__AIR_MAIL_INTERNATIONAL = 'AU_AirMailInternational';

    /**
     * Constant for 'AU_EconomyAirInternational' value.
     *
     * Economy Air
     */
    public const VAL_AU__ECONOMY_AIR_INTERNATIONAL = 'AU_EconomyAirInternational';

    /**
     * Constant for 'AU_SeaMailInternational' value.
     *
     * Sea Mail
     */
    public const VAL_AU__SEA_MAIL_INTERNATIONAL = 'AU_SeaMailInternational';

    /**
     * Constant for 'AU_StandardInternational' value.
     *
     * Standard International Flat Rate Postage
     */
    public const VAL_AU__STANDARD_INTERNATIONAL = 'AU_StandardInternational';

    /**
     * Constant for 'AU_ExpeditedInternational' value.
     *
     * Expedited international flat rate postage
     */
    public const VAL_AU__EXPEDITED_INTERNATIONAL = 'AU_ExpeditedInternational';

    /**
     * Constant for 'AU_OtherInternational' value.
     *
     * Other international postage
     */
    public const VAL_AU__OTHER_INTERNATIONAL = 'AU_OtherInternational';

    /**
     * Constant for 'AU_AusPostRegisteredPostInternationalPaddedBag1kg' value.
     *
     * Australia Post Registered Post International Padded Bag 1 kg
     */
    public const VAL_AU__AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_1_KG = 'AU_AusPostRegisteredPostInternationalPaddedBag1kg';

    /**
     * Constant for 'AU_AusPostRegisteredPostInternationalPaddedBag500g' value.
     *
     * Australia Post Registered Post International Padded Bag 500 g
     */
    public const VAL_AU__AUS_POST_REGISTERED_POST_INTERNATIONAL_PADDED_BAG_500_G = 'AU_AusPostRegisteredPostInternationalPaddedBag500g';

    /**
     * Constant for 'AU_AusPostRegisteredPostInternationalParcel' value.
     *
     * Australia Post Registered Post International Parcel
     */
    public const VAL_AU__AUS_POST_REGISTERED_POST_INTERNATIONAL_PARCEL = 'AU_AusPostRegisteredPostInternationalParcel';

    /**
     * Constant for 'AU_ExpeditedDeliveryFromOutsideAU' value.
     *
     * Expedited delivery from outside Australia
     */
    public const VAL_AU__EXPEDITED_DELIVERY_FROM_OUTSIDE_AU = 'AU_ExpeditedDeliveryFromOutsideAU';

    /**
     * Constant for 'AU_EconomyDeliveryFromOutsideAU' value.
     *
     * Economy delivery from outside Australia
     */
    public const VAL_AU__ECONOMY_DELIVERY_FROM_OUTSIDE_AU = 'AU_EconomyDeliveryFromOutsideAU';

    /**
     * Constant for 'AU_StandardDeliveryFromOutsideAU' value.
     *
     * Standard Delivery From Outside AU
     */
    public const VAL_AU__STANDARD_DELIVERY_FROM_OUTSIDE_AU = 'AU_StandardDeliveryFromOutsideAU';

    /**
     * Constant for 'AU_AustralianAirExpressMetro15kg' value.
     *
     * Australian Air Express Metro 15 kg
     */
    public const VAL_AU__AUSTRALIAN_AIR_EXPRESS_METRO_15_KG = 'AU_AustralianAirExpressMetro15kg';

    /**
     * Constant for 'AU_AustralianAirExpressFlatRate5kg' value.
     *
     * Australian Air Express Flat Rate 5 kg
     */
    public const VAL_AU__AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_5_KG = 'AU_AustralianAirExpressFlatRate5kg';

    /**
     * Constant for 'AU_AustralianAirExpressFlatRate3kg' value.
     *
     * Australian Air Express Flat Rate 3 kg
     */
    public const VAL_AU__AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_3_KG = 'AU_AustralianAirExpressFlatRate3kg';

    /**
     * Constant for 'AU_AustralianAirExpressFlatRate1kg' value.
     *
     * Australian Air Express Flat Rate 1 kg
     */
    public const VAL_AU__AUSTRALIAN_AIR_EXPRESS_FLAT_RATE_1_KG = 'AU_AustralianAirExpressFlatRate1kg';

    /**
     * Constant for 'AU_ExpressDelivery' value.
     *
     * Express delivery (1-3 business days) in Australia
     */
    public const VAL_AU__EXPRESS_DELIVERY = 'AU_ExpressDelivery';

    /**
     * Constant for 'AU_StandardDelivery' value.
     *
     * Standard delivery (1-6 business days) in Australia
     */
    public const VAL_AU__STANDARD_DELIVERY = 'AU_StandardDelivery';

    /**
     * Constant for 'AU_eBayAusPost3kgFlatRateSatchel' value.
     *
     * eBay/Australian Post 3 kg Flat Rate Satchel
     */
    public const VAL_AU__E_BAY_AUS_POST_3_KG_FLAT_RATE_SATCHEL = 'AU_eBayAusPost3kgFlatRateSatchel';

    /**
     * Constant for 'AU_eBayAusPost500gFlatRateSatchel' value.
     *
     * eBay/Australian Post 500 g Flat Rate Satchel
     */
    public const VAL_AU__E_BAY_AUS_POST_500_G_FLAT_RATE_SATCHEL = 'AU_eBayAusPost500gFlatRateSatchel';

    /**
     * Constant for 'AU_Freight' value.
     *
     * Freight delivery in Australia. Used for heavy and bulky items.
     */
    public const VAL_AU__FREIGHT = 'AU_Freight';

    /**
     * Constant for 'BEFR_StandardDelivery' value.
     *
     * Livraison standard a partir de l'etranger
     */
    public const VAL_BEFR__STANDARD_DELIVERY = 'BEFR_StandardDelivery';

    /**
     * Constant for 'BEFR_PriorityDelivery' value.
     *
     * Livraison express
     */
    public const VAL_BEFR__PRIORITY_DELIVERY = 'BEFR_PriorityDelivery';

    /**
     * Constant for 'BEFR_ParcelPost' value.
     *
     * Colis
     */
    public const VAL_BEFR__PARCEL_POST = 'BEFR_ParcelPost';

    /**
     * Constant for 'BEFR_RegisteredMail' value.
     *
     * Courrier en recommande
     */
    public const VAL_BEFR__REGISTERED_MAIL = 'BEFR_RegisteredMail';

    /**
     * Constant for 'BEFR_Other' value.
     *
     * Autre service de livraison
     */
    public const VAL_BEFR__OTHER = 'BEFR_Other';

    /**
     * Constant for 'BEFR_DePostInternational' value.
     *
     * De Post
     */
    public const VAL_BEFR__DE_POST_INTERNATIONAL = 'BEFR_DePostInternational';

    /**
     * Constant for 'BEFR_UPSInternational' value.
     *
     * UPS
     */
    public const VAL_BEFR__UPSINTERNATIONAL = 'BEFR_UPSInternational';

    /**
     * Constant for 'BEFR_FedExInternational' value.
     *
     * FedEx
     */
    public const VAL_BEFR__FED_EX_INTERNATIONAL = 'BEFR_FedExInternational';

    /**
     * Constant for 'BEFR_DHLInternational' value.
     *
     * DHL
     */
    public const VAL_BEFR__DHLINTERNATIONAL = 'BEFR_DHLInternational';

    /**
     * Constant for 'BEFR_TPGPostTNTInternational' value.
     *
     * TPG Post/TNT (Netherlands)
     */
    public const VAL_BEFR__TPGPOST_TNTINTERNATIONAL = 'BEFR_TPGPostTNTInternational';

    /**
     * Constant for 'BEFR_StandardInternational' value.
     *
     * Frais de livraison internationale fixes
     */
    public const VAL_BEFR__STANDARD_INTERNATIONAL = 'BEFR_StandardInternational';

    /**
     * Constant for 'BEFR_ExpeditedInternational' value.
     *
     * Frais fixes pour livraison internationale express
     */
    public const VAL_BEFR__EXPEDITED_INTERNATIONAL = 'BEFR_ExpeditedInternational';

    /**
     * Constant for 'BEFR_OtherInternational' value.
     *
     * Autres livraisons internationales (voir description)
     */
    public const VAL_BEFR__OTHER_INTERNATIONAL = 'BEFR_OtherInternational';

    /**
     * Constant for 'BEFR_LaPosteInternational' value.
     *
     * La Poste (France)
     */
    public const VAL_BEFR__LA_POSTE_INTERNATIONAL = 'BEFR_LaPosteInternational';

    /**
     * Constant for 'BEFR_LaPosteStandardShipping' value.
     *
     * La Poste - livraison standard (1 a 2 jours ouvrables)
     */
    public const VAL_BEFR__LA_POSTE_STANDARD_SHIPPING = 'BEFR_LaPosteStandardShipping';

    /**
     * Constant for 'BEFR_LaPosteCertifiedShipping' value.
     *
     * La Poste - envoi recommande (1 jour ouvrable)
     */
    public const VAL_BEFR__LA_POSTE_CERTIFIED_SHIPPING = 'BEFR_LaPosteCertifiedShipping';

    /**
     * Constant for 'BEFR_LaPosteTaxipostLLS' value.
     *
     * La Poste - Taxipost LLS (2 jours ouvrables)
     */
    public const VAL_BEFR__LA_POSTE_TAXIPOST_LLS = 'BEFR_LaPosteTaxipostLLS';

    /**
     * Constant for 'BEFR_LaPosteTaxipost24h' value.
     *
     * La Poste - Taxipost 24h (1 jour ouvrable)
     */
    public const VAL_BEFR__LA_POSTE_TAXIPOST_24_H = 'BEFR_LaPosteTaxipost24h';

    /**
     * Constant for 'BEFR_LaPosteTaxipostSecur' value.
     *
     * Autres livraisons
     */
    public const VAL_BEFR__LA_POSTE_TAXIPOST_SECUR = 'BEFR_LaPosteTaxipostSecur';

    /**
     * Constant for 'BEFR_PostInternationalStandard' value.
     *
     * La Poste - livraison standard
     */
    public const VAL_BEFR__POST_INTERNATIONAL_STANDARD = 'BEFR_PostInternationalStandard';

    /**
     * Constant for 'BEFR_PostInternationalRegistered' value.
     *
     * La Poste - envoi recommande
     */
    public const VAL_BEFR__POST_INTERNATIONAL_REGISTERED = 'BEFR_PostInternationalRegistered';

    /**
     * Constant for 'BEFR_TNTInternational' value.
     *
     * TNT
     */
    public const VAL_BEFR__TNTINTERNATIONAL = 'BEFR_TNTInternational';

    /**
     * Constant for 'BEFR_EconomyDeliveryFromAbroad' value.
     *
     * Livraison economique a partir de l'etranger
     */
    public const VAL_BEFR__ECONOMY_DELIVERY_FROM_ABROAD = 'BEFR_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'BEFR_StandardDeliveryFromAbroad' value.
     *
     * Livraison standard a partir de l'etranger
     */
    public const VAL_BEFR__STANDARD_DELIVERY_FROM_ABROAD = 'BEFR_StandardDeliveryFromAbroad';

    /**
     * Constant for 'BEFR_ExpressDeliveryFromAbroad' value.
     *
     * Livraison express a partir de l'etranger
     */
    public const VAL_BEFR__EXPRESS_DELIVERY_FROM_ABROAD = 'BEFR_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'BEFR_TrackedDeliveryFromAbroad' value.
     *
     * Livraison a partir de l'etranger avec suivi de commande
     */
    public const VAL_BEFR__TRACKED_DELIVERY_FROM_ABROAD = 'BEFR_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'BENL_StandardDelivery' value.
     *
     * Standard Delivery
     */
    public const VAL_BENL__STANDARD_DELIVERY = 'BENL_StandardDelivery';

    /**
     * Constant for 'BENL_PriorityDelivery' value.
     *
     * Priority Delivery
     */
    public const VAL_BENL__PRIORITY_DELIVERY = 'BENL_PriorityDelivery';

    /**
     * Constant for 'BENL_ParcelPost' value.
     *
     * Parcel Post
     */
    public const VAL_BENL__PARCEL_POST = 'BENL_ParcelPost';

    /**
     * Constant for 'BENL_RegisteredMail' value.
     *
     * Registered Mail
     */
    public const VAL_BENL__REGISTERED_MAIL = 'BENL_RegisteredMail';

    /**
     * Constant for 'BENL_Other' value.
     *
     * Other Shipping Service
     */
    public const VAL_BENL__OTHER = 'BENL_Other';

    /**
     * Constant for 'BENL_DePostInternational' value.
     *
     * De Post
     */
    public const VAL_BENL__DE_POST_INTERNATIONAL = 'BENL_DePostInternational';

    /**
     * Constant for 'BENL_UPSInternational' value.
     *
     * UPS
     */
    public const VAL_BENL__UPSINTERNATIONAL = 'BENL_UPSInternational';

    /**
     * Constant for 'BENL_FedExInternational' value.
     *
     * FedEx
     */
    public const VAL_BENL__FED_EX_INTERNATIONAL = 'BENL_FedExInternational';

    /**
     * Constant for 'BENL_DHLInternational' value.
     *
     * DHL
     */
    public const VAL_BENL__DHLINTERNATIONAL = 'BENL_DHLInternational';

    /**
     * Constant for 'BENL_TPGPostTNTInternational' value.
     *
     * TPG Post/TNT (Netherlands)
     */
    public const VAL_BENL__TPGPOST_TNTINTERNATIONAL = 'BENL_TPGPostTNTInternational';

    /**
     * Constant for 'BENL_StandardInternational' value.
     *
     * Standard International
     */
    public const VAL_BENL__STANDARD_INTERNATIONAL = 'BENL_StandardInternational';

    /**
     * Constant for 'BENL_ExpeditedInternational' value.
     *
     * Expedited International
     */
    public const VAL_BENL__EXPEDITED_INTERNATIONAL = 'BENL_ExpeditedInternational';

    /**
     * Constant for 'BENL_OtherInternational' value.
     *
     * Other International Shipping Services
     */
    public const VAL_BENL__OTHER_INTERNATIONAL = 'BENL_OtherInternational';

    /**
     * Constant for 'BENL_LaPosteInternational' value.
     *
     * La Poste (France)
     */
    public const VAL_BENL__LA_POSTE_INTERNATIONAL = 'BENL_LaPosteInternational';

    /**
     * Constant for 'BENL_DePostStandardShipping' value.
     *
     * De Post - standaardverzending (1 tot 2 werkdagen)
     */
    public const VAL_BENL__DE_POST_STANDARD_SHIPPING = 'BENL_DePostStandardShipping';

    /**
     * Constant for 'BENL_DePostCertifiedShipping' value.
     *
     * De Post - aangetekende zending (1 werkdag)
     */
    public const VAL_BENL__DE_POST_CERTIFIED_SHIPPING = 'BENL_DePostCertifiedShipping';

    /**
     * Constant for 'BENL_DePostTaxipostLLS' value.
     *
     * De Post - Taxipost LLS (2 werkdagen)
     */
    public const VAL_BENL__DE_POST_TAXIPOST_LLS = 'BENL_DePostTaxipostLLS';

    /**
     * Constant for 'BENL_DePostTaxipost24h' value.
     *
     * De Post - Taxipost 24u (1 werkdag)
     */
    public const VAL_BENL__DE_POST_TAXIPOST_24_H = 'BENL_DePostTaxipost24h';

    /**
     * Constant for 'BENL_DePostTaxipostSecur' value.
     *
     * De Post - Taxipost Secur (1 werkdag)
     */
    public const VAL_BENL__DE_POST_TAXIPOST_SECUR = 'BENL_DePostTaxipostSecur';

    /**
     * Constant for 'BENL_OtherShippingMethods' value.
     *
     * Andere verzending
     */
    public const VAL_BENL__OTHER_SHIPPING_METHODS = 'BENL_OtherShippingMethods';

    /**
     * Constant for 'BENL_PostInternationalStandard' value.
     *
     * De Post - standaardverzending
     */
    public const VAL_BENL__POST_INTERNATIONAL_STANDARD = 'BENL_PostInternationalStandard';

    /**
     * Constant for 'BENL_PostInternationalRegistered' value.
     *
     * De Post - aangetekende zending
     */
    public const VAL_BENL__POST_INTERNATIONAL_REGISTERED = 'BENL_PostInternationalRegistered';

    /**
     * Constant for 'BENL_TNTInternational' value.
     *
     * TNT
     */
    public const VAL_BENL__TNTINTERNATIONAL = 'BENL_TNTInternational';

    /**
     * Constant for 'BENL_EconomyDeliveryFromAbroad' value.
     *
     * Voordelige verzending uit het buitenland
     */
    public const VAL_BENL__ECONOMY_DELIVERY_FROM_ABROAD = 'BENL_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'BENL_StandardDeliveryFromAbroad' value.
     *
     * Standaardverzending uit het buitenland
     */
    public const VAL_BENL__STANDARD_DELIVERY_FROM_ABROAD = 'BENL_StandardDeliveryFromAbroad';

    /**
     * Constant for 'BENL_ExpressDeliveryFromAbroad' value.
     *
     * Express verzending uit het buitenland
     */
    public const VAL_BENL__EXPRESS_DELIVERY_FROM_ABROAD = 'BENL_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'BENL_TrackedDeliveryFromAbroad' value.
     *
     * Verzending uit het buitenland met internationale tracking
     */
    public const VAL_BENL__TRACKED_DELIVERY_FROM_ABROAD = 'BENL_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'CA_StandardDelivery' value.
     *
     * Standard Delivery
     */
    public const VAL_CA__STANDARD_DELIVERY = 'CA_StandardDelivery';

    /**
     * Constant for 'CA_ExpeditedDelivery' value.
     *
     * Expedited delivery
     */
    public const VAL_CA__EXPEDITED_DELIVERY = 'CA_ExpeditedDelivery';

    /**
     * Constant for 'CA_PostLettermail' value.
     *
     * Canada Post Lettermail
     */
    public const VAL_CA__POST_LETTERMAIL = 'CA_PostLettermail';

    /**
     * Constant for 'CA_PostRegularParcel' value.
     *
     * Canada Post Regular Parcel
     */
    public const VAL_CA__POST_REGULAR_PARCEL = 'CA_PostRegularParcel';

    /**
     * Constant for 'CA_PostExpeditedParcel' value.
     *
     * Canada Post Expedited Parcel
     */
    public const VAL_CA__POST_EXPEDITED_PARCEL = 'CA_PostExpeditedParcel';

    /**
     * Constant for 'CA_PostXpresspost' value.
     *
     * Canada Post Xpresspost - International
     */
    public const VAL_CA__POST_XPRESSPOST = 'CA_PostXpresspost';

    /**
     * Constant for 'CA_PostPriorityCourier' value.
     *
     * Canada Post Priority Courier
     */
    public const VAL_CA__POST_PRIORITY_COURIER = 'CA_PostPriorityCourier';

    /**
     * Constant for 'CanadaPostExpeditedFlatRateBox' value.
     *
     * Canada Post Expedited Flat Rate Box
     */
    public const VAL_CANADA_POST_EXPEDITED_FLAT_RATE_BOX = 'CanadaPostExpeditedFlatRateBox';

    /**
     * Constant for 'CA_PostExpeditedFlatRateBox' value.
     *
     * (This value is no longer used.)
     */
    public const VAL_CA__POST_EXPEDITED_FLAT_RATE_BOX = 'CA_PostExpeditedFlatRateBox';

    /**
     * Constant for 'CA_StandardInternational' value.
     *
     * Standard International Flat Rate Shipping
     */
    public const VAL_CA__STANDARD_INTERNATIONAL = 'CA_StandardInternational';

    /**
     * Constant for 'CA_ExpeditedInternational' value.
     *
     * Expedited International Flat Rate Shipping
     */
    public const VAL_CA__EXPEDITED_INTERNATIONAL = 'CA_ExpeditedInternational';

    /**
     * Constant for 'CA_OtherInternational' value.
     *
     * Other International Shipping (see description)
     */
    public const VAL_CA__OTHER_INTERNATIONAL = 'CA_OtherInternational';

    /**
     * Constant for 'CA_PostExpeditedParcelUSA' value.
     *
     * Canada Post Expedited Parcel - USA
     */
    public const VAL_CA__POST_EXPEDITED_PARCEL_USA = 'CA_PostExpeditedParcelUSA';

    /**
     * Constant for 'CA_PostSmallPacketsUSA' value.
     *
     * Canada Post Small Packets - USA
     */
    public const VAL_CA__POST_SMALL_PACKETS_USA = 'CA_PostSmallPacketsUSA';

    /**
     * Constant for 'CA_PostXpresspostUSA' value.
     *
     * Canada Post Xpresspost - USA
     */
    public const VAL_CA__POST_XPRESSPOST_USA = 'CA_PostXpresspostUSA';

    /**
     * Constant for 'CA_PostXpresspostInternational' value.
     *
     * Canada Post Xpresspost - International
     */
    public const VAL_CA__POST_XPRESSPOST_INTERNATIONAL = 'CA_PostXpresspostInternational';

    /**
     * Constant for 'CA_PostInternationalParcelSurface' value.
     *
     * Canada Post International Parcel - Surface
     */
    public const VAL_CA__POST_INTERNATIONAL_PARCEL_SURFACE = 'CA_PostInternationalParcelSurface';

    /**
     * Constant for 'CA_PostInternationalParcelAir' value.
     *
     * Canada Post International Parcel - Air
     */
    public const VAL_CA__POST_INTERNATIONAL_PARCEL_AIR = 'CA_PostInternationalParcelAir';

    /**
     * Constant for 'CA_SmallPacketsInternational' value.
     *
     * Small Packets - International
     */
    public const VAL_CA__SMALL_PACKETS_INTERNATIONAL = 'CA_SmallPacketsInternational';

    /**
     * Constant for 'CA_PurolatorInternational' value.
     *
     * Purolator International
     */
    public const VAL_CA__PUROLATOR_INTERNATIONAL = 'CA_PurolatorInternational';

    /**
     * Constant for 'CA_PostSmallPacketsUSAGround' value.
     *
     * Canada Post Small Packets - USA - Ground
     */
    public const VAL_CA__POST_SMALL_PACKETS_USAGROUND = 'CA_PostSmallPacketsUSAGround';

    /**
     * Constant for 'CA_PostSmallPacketsUSAAir' value.
     *
     * Canada Post Small Packets - USA - Air
     */
    public const VAL_CA__POST_SMALL_PACKETS_USAAIR = 'CA_PostSmallPacketsUSAAir';

    /**
     * Constant for 'CA_SmallPacketsInternationalGround' value.
     *
     * Small Packets - International - Ground
     */
    public const VAL_CA__SMALL_PACKETS_INTERNATIONAL_GROUND = 'CA_SmallPacketsInternationalGround';

    /**
     * Constant for 'CA_SmallPacketsInternationalAir' value.
     *
     * Small Packets - International - Air
     */
    public const VAL_CA__SMALL_PACKETS_INTERNATIONAL_AIR = 'CA_SmallPacketsInternationalAir';

    /**
     * Constant for 'CA_PostUSALetterPost' value.
     *
     * Canada Post USA Letter-post
     */
    public const VAL_CA__POST_USALETTER_POST = 'CA_PostUSALetterPost';

    /**
     * Constant for 'CA_PostInternationalLetterPost' value.
     *
     * Canada Post International Letter-post
     */
    public const VAL_CA__POST_INTERNATIONAL_LETTER_POST = 'CA_PostInternationalLetterPost';

    /**
     * Constant for 'CA_PostExpeditedFlatRateBoxUSA' value.
     *
     * (This value is no longer used.)
     */
    public const VAL_CA__POST_EXPEDITED_FLAT_RATE_BOX_USA = 'CA_PostExpeditedFlatRateBoxUSA';

    /**
     * Constant for 'CA_UPSExpressCanada' value.
     *
     * UPS Express Canada
     */
    public const VAL_CA__UPSEXPRESS_CANADA = 'CA_UPSExpressCanada';

    /**
     * Constant for 'CA_UPSExpressSaverCanada' value.
     *
     * UPS Express Saver Canada
     */
    public const VAL_CA__UPSEXPRESS_SAVER_CANADA = 'CA_UPSExpressSaverCanada';

    /**
     * Constant for 'CA_UPSExpeditedCanada' value.
     *
     * UPS Expedited Canada
     */
    public const VAL_CA__UPSEXPEDITED_CANADA = 'CA_UPSExpeditedCanada';

    /**
     * Constant for 'CA_UPSStandardCanada' value.
     *
     * UPS Standard Canada
     */
    public const VAL_CA__UPSSTANDARD_CANADA = 'CA_UPSStandardCanada';

    /**
     * Constant for 'CA_UPSExpressUnitedStates' value.
     *
     * UPS Express United States
     */
    public const VAL_CA__UPSEXPRESS_UNITED_STATES = 'CA_UPSExpressUnitedStates';

    /**
     * Constant for 'CA_UPSExpeditedUnitedStates' value.
     *
     * UPS Expedited United States
     */
    public const VAL_CA__UPSEXPEDITED_UNITED_STATES = 'CA_UPSExpeditedUnitedStates';

    /**
     * Constant for 'CA_UPS3DaySelectUnitedStates' value.
     *
     * UPS 3 Day Select United States
     */
    public const VAL_CA__UPS_3_DAY_SELECT_UNITED_STATES = 'CA_UPS3DaySelectUnitedStates';

    /**
     * Constant for 'CA_UPSStandardUnitedStates' value.
     *
     * UPS Standard United States
     */
    public const VAL_CA__UPSSTANDARD_UNITED_STATES = 'CA_UPSStandardUnitedStates';

    /**
     * Constant for 'CA_UPSWorldWideExpress' value.
     *
     * UPS Worldwide Express
     */
    public const VAL_CA__UPSWORLD_WIDE_EXPRESS = 'CA_UPSWorldWideExpress';

    /**
     * Constant for 'CA_UPSWorldWideExpedited' value.
     *
     * UPS Worldwide Expedited
     */
    public const VAL_CA__UPSWORLD_WIDE_EXPEDITED = 'CA_UPSWorldWideExpedited';

    /**
     * Constant for 'CA_PriorityWorldwide' value.
     *
     * Canada Post Priority Worldwide
     */
    public const VAL_CA__PRIORITY_WORLDWIDE = 'CA_PriorityWorldwide';

    /**
     * Constant for 'CanadaPostExpeditedFlatRateBoxUSA' value.
     *
     * Canada Post Expedited Flat Rate Box USA
     */
    public const VAL_CANADA_POST_EXPEDITED_FLAT_RATE_BOX_USA = 'CanadaPostExpeditedFlatRateBoxUSA';

    /**
     * Constant for 'CA_PostTrackedPacketsUSA' value.
     *
     * Canada Post Tracked Packet - USA
     */
    public const VAL_CA__POST_TRACKED_PACKETS_USA = 'CA_PostTrackedPacketsUSA';

    /**
     * Constant for 'CA_PostTrackedPacketsInternational' value.
     *
     * Canada Post Tracked Packet - International
     */
    public const VAL_CA__POST_TRACKED_PACKETS_INTERNATIONAL = 'CA_PostTrackedPacketsInternational';

    /**
     * Constant for 'CA_Freight' value.
     *
     * Freight
     */
    public const VAL_CA__FREIGHT = 'CA_Freight';

    /**
     * Constant for 'CH_StandardDispatchAPost' value.
     *
     * Standardversand (A-Post/Priority)
     */
    public const VAL_CH__STANDARD_DISPATCH_APOST = 'CH_StandardDispatchAPost';

    /**
     * Constant for 'CH_StandardDispatchBPost' value.
     *
     * Standardversand (B-Post/Economy)
     */
    public const VAL_CH__STANDARD_DISPATCH_BPOST = 'CH_StandardDispatchBPost';

    /**
     * Constant for 'CH_InsuredDispatch' value.
     *
     * Versicherter Versand (z.B. Assurance/Fragile)
     */
    public const VAL_CH__INSURED_DISPATCH = 'CH_InsuredDispatch';

    /**
     * Constant for 'CH_Writing' value.
     *
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     */
    public const VAL_CH__WRITING = 'CH_Writing';

    /**
     * Constant for 'CH_COD' value.
     *
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     */
    public const VAL_CH__COD = 'CH_COD';

    /**
     * Constant for 'CH_ExpressOrCourier' value.
     *
     * Express- oder Kurierversand
     */
    public const VAL_CH__EXPRESS_OR_COURIER = 'CH_ExpressOrCourier';

    /**
     * Constant for 'CH_InsuredExpressOrCourier' value.
     *
     * Versicherter Express- oder Kurierversand
     */
    public const VAL_CH__INSURED_EXPRESS_OR_COURIER = 'CH_InsuredExpressOrCourier';

    /**
     * Constant for 'CH_SpecialDispatch' value.
     *
     * Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     */
    public const VAL_CH__SPECIAL_DISPATCH = 'CH_SpecialDispatch';

    /**
     * Constant for 'CH_InsuredSpecialDispatch' value.
     *
     * Versicherter Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     */
    public const VAL_CH__INSURED_SPECIAL_DISPATCH = 'CH_InsuredSpecialDispatch';

    /**
     * Constant for 'CH_Sonstige' value.
     *
     * Sonstige (Siehe Artikelbeschreibung)
     */
    public const VAL_CH__SONSTIGE = 'CH_Sonstige';

    /**
     * Constant for 'CH_SonstigerVersandInternational' value.
     *
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     */
    public const VAL_CH__SONSTIGER_VERSAND_INTERNATIONAL = 'CH_SonstigerVersandInternational';

    /**
     * Constant for 'CH_EconomySendungenInternational' value.
     *
     * ECONOMY Sendungen
     */
    public const VAL_CH__ECONOMY_SENDUNGEN_INTERNATIONAL = 'CH_EconomySendungenInternational';

    /**
     * Constant for 'CH_PrioritySendungenInternational' value.
     *
     * PRIORITY Sendungen
     */
    public const VAL_CH__PRIORITY_SENDUNGEN_INTERNATIONAL = 'CH_PrioritySendungenInternational';

    /**
     * Constant for 'CH_UrgentSendungenInternational' value.
     *
     * URGENT Sendungen
     */
    public const VAL_CH__URGENT_SENDUNGEN_INTERNATIONAL = 'CH_UrgentSendungenInternational';

    /**
     * Constant for 'CH_EconomyDeliveryFromAbroad' value.
     *
     * Sparversand aus dem Ausland
     */
    public const VAL_CH__ECONOMY_DELIVERY_FROM_ABROAD = 'CH_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'CH_StandardDeliveryFromAbroad' value.
     *
     * Standardversand aus dem Ausland
     */
    public const VAL_CH__STANDARD_DELIVERY_FROM_ABROAD = 'CH_StandardDeliveryFromAbroad';

    /**
     * Constant for 'CH_ExpressDeliveryFromAbroad' value.
     *
     * Expressversand aus dem Ausland
     */
    public const VAL_CH__EXPRESS_DELIVERY_FROM_ABROAD = 'CH_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'CH_TrackedDeliveryFromAbroad' value.
     *
     * Versand mit Nachverfolgung aus dem Ausland
     */
    public const VAL_CH__TRACKED_DELIVERY_FROM_ABROAD = 'CH_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'CN_PersonalDelivery' value.
     *
     * Seller door delivery (limited to the city)
     */
    public const VAL_CN__PERSONAL_DELIVERY = 'CN_PersonalDelivery';

    /**
     * Constant for 'CN_RegularPackage' value.
     *
     * China Post Post Office
     */
    public const VAL_CN__REGULAR_PACKAGE = 'CN_RegularPackage';

    /**
     * Constant for 'CN_DeliveryCompanyExpress' value.
     *
     * Logistics company express
     */
    public const VAL_CN__DELIVERY_COMPANY_EXPRESS = 'CN_DeliveryCompanyExpress';

    /**
     * Constant for 'CN_PostOfficeExpress' value.
     *
     * EMS Express
     */
    public const VAL_CN__POST_OFFICE_EXPRESS = 'CN_PostOfficeExpress';

    /**
     * Constant for 'CN_Others' value.
     *
     * Other (see item description)
     */
    public const VAL_CN__OTHERS = 'CN_Others';

    /**
     * Constant for 'CN_FastPostOffice' value.
     *
     * China Post Express Mail
     */
    public const VAL_CN__FAST_POST_OFFICE = 'CN_FastPostOffice';

    /**
     * Constant for 'CN_ExpressDeliverySameCity' value.
     *
     * City Express
     */
    public const VAL_CN__EXPRESS_DELIVERY_SAME_CITY = 'CN_ExpressDeliverySameCity';

    /**
     * Constant for 'CN_ExpressDeliveryOtherCities' value.
     *
     * Off-site delivery
     */
    public const VAL_CN__EXPRESS_DELIVERY_OTHER_CITIES = 'CN_ExpressDeliveryOtherCities';

    /**
     * Constant for 'CN_StandardInternational' value.
     *
     * International Standard Fixed Freight
     */
    public const VAL_CN__STANDARD_INTERNATIONAL = 'CN_StandardInternational';

    /**
     * Constant for 'CN_ExpeditedInternational' value.
     *
     * International courier fixed freight
     */
    public const VAL_CN__EXPEDITED_INTERNATIONAL = 'CN_ExpeditedInternational';

    /**
     * Constant for 'CN_OtherInternational' value.
     *
     * Other international shipping charges (see note)
     */
    public const VAL_CN__OTHER_INTERNATIONAL = 'CN_OtherInternational';

    /**
     * Constant for 'CN_CODInternational' value.
     *
     * COD (same city only)
     */
    public const VAL_CN__CODINTERNATIONAL = 'CN_CODInternational';

    /**
     * Constant for 'CN_StandardMailingInternational' value.
     *
     * Standard Mailing
     */
    public const VAL_CN__STANDARD_MAILING_INTERNATIONAL = 'CN_StandardMailingInternational';

    /**
     * Constant for 'CN_RegularLogisticsInternational' value.
     *
     * Regular logistics
     */
    public const VAL_CN__REGULAR_LOGISTICS_INTERNATIONAL = 'CN_RegularLogisticsInternational';

    /**
     * Constant for 'CN_EMSInternational' value.
     *
     * EMS
     */
    public const VAL_CN__EMSINTERNATIONAL = 'CN_EMSInternational';

    /**
     * Constant for 'CN_OthersInternational' value.
     *
     * Others (see description)
     */
    public const VAL_CN__OTHERS_INTERNATIONAL = 'CN_OthersInternational';

    /**
     * Constant for 'DE_StandardDispatch' value.
     *
     * Unversicherter Versand
     */
    public const VAL_DE__STANDARD_DISPATCH = 'DE_StandardDispatch';

    /**
     * Constant for 'DE_InsuredDispatch' value.
     *
     * Versicherter Versand
     */
    public const VAL_DE__INSURED_DISPATCH = 'DE_InsuredDispatch';

    /**
     * Constant for 'DE_Writing' value.
     *
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     */
    public const VAL_DE__WRITING = 'DE_Writing';

    /**
     * Constant for 'DE_COD' value.
     *
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     */
    public const VAL_DE__COD = 'DE_COD';

    /**
     * Constant for 'DE_ExpressOrCourier' value.
     *
     * Express- oder Kurierversand
     */
    public const VAL_DE__EXPRESS_OR_COURIER = 'DE_ExpressOrCourier';

    /**
     * Constant for 'DE_InsuredExpressOrCourier' value.
     *
     * Versicherter Express- oder Kurierversand
     */
    public const VAL_DE__INSURED_EXPRESS_OR_COURIER = 'DE_InsuredExpressOrCourier';

    /**
     * Constant for 'DE_SpecialDispatch' value.
     *
     * Sonderversand (z.B. Mobel, KFZ)DE_DHLPackchen
     */
    public const VAL_DE__SPECIAL_DISPATCH = 'DE_SpecialDispatch';

    /**
     * Constant for 'DE_InsuredSpecialDispatch' value.
     *
     * Versicherter Sonderversand (z.B. Mobel, KFZ)
     */
    public const VAL_DE__INSURED_SPECIAL_DISPATCH = 'DE_InsuredSpecialDispatch';

    /**
     * Constant for 'DE_UnversicherterVersand' value.
     *
     * Unversicherter Versand
     */
    public const VAL_DE__UNVERSICHERTER_VERSAND = 'DE_UnversicherterVersand';

    /**
     * Constant for 'DE_DeutschePostBrief' value.
     *
     * Deutsche Post Brief
     */
    public const VAL_DE__DEUTSCHE_POST_BRIEF = 'DE_DeutschePostBrief';

    /**
     * Constant for 'DE_eBayDHLPaket24x7' value.
     *
     * eBay DHL Paket 24/7 (Abgabe und Lieferung an Packstation)
     */
    public const VAL_DE__E_BAY_DHLPAKET_24_X_7 = 'DE_eBayDHLPaket24x7';

    /**
     * Constant for 'DE_DHLPostpaket' value.
     *
     * DHL Postpaket
     */
    public const VAL_DE__DHLPOSTPAKET = 'DE_DHLPostpaket';

    /**
     * Constant for 'DE_DHLPackchen' value.
     *
     * DHL Packchen International
     */
    public const VAL_DE__DHLPACKCHEN = 'DE_DHLPackchen';

    /**
     * Constant for 'DE_DeutschePostWarensendung' value.
     *
     * Deutsche Post Warensendung
     */
    public const VAL_DE__DEUTSCHE_POST_WARENSENDUNG = 'DE_DeutschePostWarensendung';

    /**
     * Constant for 'DE_DeutschePostBuchersendung' value.
     *
     * Deutsche Post Buchersendung
     */
    public const VAL_DE__DEUTSCHE_POST_BUCHERSENDUNG = 'DE_DeutschePostBuchersendung';

    /**
     * Constant for 'DE_HermesPaketUnversichert' value.
     *
     * Hermes Paket (unversichert)
     */
    public const VAL_DE__HERMES_PAKET_UNVERSICHERT = 'DE_HermesPaketUnversichert';

    /**
     * Constant for 'DE_HermesPaketVersichert' value.
     *
     * Hermes Paket (versichert)
     */
    public const VAL_DE__HERMES_PAKET_VERSICHERT = 'DE_HermesPaketVersichert';

    /**
     * Constant for 'DE_IloxxTransportXXL' value.
     *
     * iloxx Transport XXL
     */
    public const VAL_DE__ILOXX_TRANSPORT_XXL = 'DE_IloxxTransportXXL';

    /**
     * Constant for 'DE_IloxxUbernachtExpress' value.
     *
     * iloxx Express
     */
    public const VAL_DE__ILOXX_UBERNACHT_EXPRESS = 'DE_IloxxUbernachtExpress';

    /**
     * Constant for 'DE_IloxxStandard' value.
     *
     * iloxx Standard
     */
    public const VAL_DE__ILOXX_STANDARD = 'DE_IloxxStandard';

    /**
     * Constant for 'DE_Sonstige' value.
     *
     * Sonstige (Siehe Artikelbeschreibung)
     */
    public const VAL_DE__SONSTIGE = 'DE_Sonstige';

    /**
     * Constant for 'DE_UnversicherterVersandInternational' value.
     *
     * Unversicherter Versand
     */
    public const VAL_DE__UNVERSICHERTER_VERSAND_INTERNATIONAL = 'DE_UnversicherterVersandInternational';

    /**
     * Constant for 'DE_VersicherterVersandInternational' value.
     *
     * Versicherter Versand
     */
    public const VAL_DE__VERSICHERTER_VERSAND_INTERNATIONAL = 'DE_VersicherterVersandInternational';

    /**
     * Constant for 'DE_DHLPostpaketInternational' value.
     *
     * DHL Postpaket International
     */
    public const VAL_DE__DHLPOSTPAKET_INTERNATIONAL = 'DE_DHLPostpaketInternational';

    /**
     * Constant for 'DE_DHLPackchenInternational' value.
     *
     * DHL Packchen International
     */
    public const VAL_DE__DHLPACKCHEN_INTERNATIONAL = 'DE_DHLPackchenInternational';

    /**
     * Constant for 'DE_SonstigerVersandInternational' value.
     *
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     */
    public const VAL_DE__SONSTIGER_VERSAND_INTERNATIONAL = 'DE_SonstigerVersandInternational';

    /**
     * Constant for 'DE_UnversicherterExpressVersandInternational' value.
     *
     * Unversicherter Express - Versand
     */
    public const VAL_DE__UNVERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'DE_UnversicherterExpressVersandInternational';

    /**
     * Constant for 'DE_VersicherterExpressVersandInternational' value.
     *
     * Versicherter Express - Versand
     */
    public const VAL_DE__VERSICHERTER_EXPRESS_VERSAND_INTERNATIONAL = 'DE_VersicherterExpressVersandInternational';

    /**
     * Constant for 'DE_DeutschePostBriefLandInternational' value.
     *
     * Deutsche Post Brief (Land)
     */
    public const VAL_DE__DEUTSCHE_POST_BRIEF_LAND_INTERNATIONAL = 'DE_DeutschePostBriefLandInternational';

    /**
     * Constant for 'DE_DeutschePostBriefLuftInternational' value.
     *
     * Deutsche Post Brief (Luft)
     */
    public const VAL_DE__DEUTSCHE_POST_BRIEF_LUFT_INTERNATIONAL = 'DE_DeutschePostBriefLuftInternational';

    /**
     * Constant for 'DE_IloxxEuropaInternational' value.
     *
     * iloxx Europa
     */
    public const VAL_DE__ILOXX_EUROPA_INTERNATIONAL = 'DE_IloxxEuropaInternational';

    /**
     * Constant for 'DE_IloxxWorldWideInternational' value.
     *
     * iloxx World Wide
     */
    public const VAL_DE__ILOXX_WORLD_WIDE_INTERNATIONAL = 'DE_IloxxWorldWideInternational';

    /**
     * Constant for 'DE_Paket' value.
     *
     * Paketversand
     */
    public const VAL_DE__PAKET = 'DE_Paket';

    /**
     * Constant for 'DE_Express' value.
     *
     * Expressversand
     */
    public const VAL_DE__EXPRESS = 'DE_Express';

    /**
     * Constant for 'DE_DHLPaket' value.
     *
     * DHL Paket
     */
    public const VAL_DE__DHLPAKET = 'DE_DHLPaket';

    /**
     * Constant for 'DE_DPBuecherWarensendung' value.
     *
     * Deutsche Post Buecher-/Warensendung
     */
    public const VAL_DE__DPBUECHER_WARENSENDUNG = 'DE_DPBuecherWarensendung';

    /**
     * Constant for 'DE_HermesPaket' value.
     *
     * Hermes Paket
     */
    public const VAL_DE__HERMES_PAKET = 'DE_HermesPaket';

    /**
     * Constant for 'DE_IloxxTransport' value.
     *
     * iloxx Transport
     */
    public const VAL_DE__ILOXX_TRANSPORT = 'DE_IloxxTransport';

    /**
     * Constant for 'DE_SonstigeDomestic' value.
     *
     * Sonstige
     */
    public const VAL_DE__SONSTIGE_DOMESTIC = 'DE_SonstigeDomestic';

    /**
     * Constant for 'DE_Einschreiben' value.
     *
     * Einschreiben (inkl. aller Gebuehren)
     */
    public const VAL_DE__EINSCHREIBEN = 'DE_Einschreiben';

    /**
     * Constant for 'DE_Nachname' value.
     *
     * Nachnahme (inkl. aller Gebuehren)
     */
    public const VAL_DE__NACHNAME = 'DE_Nachname';

    /**
     * Constant for 'DE_SpecialDelivery' value.
     *
     * Sonderversand
     */
    public const VAL_DE__SPECIAL_DELIVERY = 'DE_SpecialDelivery';

    /**
     * Constant for 'DE_UPS' value.
     *
     * UPS
     */
    public const VAL_DE__UPS = 'DE_UPS';

    /**
     * Constant for 'DE_DPD' value.
     *
     * DPD
     */
    public const VAL_DE__DPD = 'DE_DPD';

    /**
     * Constant for 'DE_GLS' value.
     *
     * GLS
     */
    public const VAL_DE__GLS = 'DE_GLS';

    /**
     * Constant for 'DE_PaketInternational' value.
     *
     * Paketversand
     */
    public const VAL_DE__PAKET_INTERNATIONAL = 'DE_PaketInternational';

    /**
     * Constant for 'DE_DHLPaketInternational' value.
     *
     * DHL Paket International
     */
    public const VAL_DE__DHLPAKET_INTERNATIONAL = 'DE_DHLPaketInternational';

    /**
     * Constant for 'DE_DHLPaketIntlExpress' value.
     *
     * DHL Paket International Express
     */
    public const VAL_DE__DHLPAKET_INTL_EXPRESS = 'DE_DHLPaketIntlExpress';

    /**
     * Constant for 'DE_SonstigeInternational' value.
     *
     * Sonstige
     */
    public const VAL_DE__SONSTIGE_INTERNATIONAL = 'DE_SonstigeInternational';

    /**
     * Constant for 'DE_ExpressInternational' value.
     *
     * Expressversand
     */
    public const VAL_DE__EXPRESS_INTERNATIONAL = 'DE_ExpressInternational';

    /**
     * Constant for 'DE_DPBriefInternational' value.
     *
     * Deutsche Post Brief
     */
    public const VAL_DE__DPBRIEF_INTERNATIONAL = 'DE_DPBriefInternational';

    /**
     * Constant for 'DE_IloxxTransportInternational' value.
     *
     * iloxx Transport International
     */
    public const VAL_DE__ILOXX_TRANSPORT_INTERNATIONAL = 'DE_IloxxTransportInternational';

    /**
     * Constant for 'DE_HermesPaketInternational' value.
     *
     * Hermes Paket International
     */
    public const VAL_DE__HERMES_PAKET_INTERNATIONAL = 'DE_HermesPaketInternational';

    /**
     * Constant for 'DE_UPSInternational' value.
     *
     * UPS International
     */
    public const VAL_DE__UPSINTERNATIONAL = 'DE_UPSInternational';

    /**
     * Constant for 'DE_DPDInternational' value.
     *
     * DPD International
     */
    public const VAL_DE__DPDINTERNATIONAL = 'DE_DPDInternational';

    /**
     * Constant for 'DE_GLSInternational' value.
     *
     * GLS International
     */
    public const VAL_DE__GLSINTERNATIONAL = 'DE_GLSInternational';

    /**
     * Constant for 'DE_eBayHermesPaketShop2ShopKaeufer' value.
     *
     * eBay Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
     */
    public const VAL_DE__E_BAY_HERMES_PAKET_SHOP_2_SHOP_KAEUFER = 'DE_eBayHermesPaketShop2ShopKaeufer';

    /**
     * Constant for 'DE_HermesPaketShop2ShopKaeufer' value.
     *
     * Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
     */
    public const VAL_DE__HERMES_PAKET_SHOP_2_SHOP_KAEUFER = 'DE_HermesPaketShop2ShopKaeufer';

    /**
     * Constant for 'DE_eBayHermesPaketShop2Shop' value.
     *
     * eBay Hermes Paket Shop2Shop
     */
    public const VAL_DE__E_BAY_HERMES_PAKET_SHOP_2_SHOP = 'DE_eBayHermesPaketShop2Shop';

    /**
     * Constant for 'DE_HermesPaketShop2Shop' value.
     *
     * Hermes Paket Shop2Shop
     */
    public const VAL_DE__HERMES_PAKET_SHOP_2_SHOP = 'DE_HermesPaketShop2Shop';

    /**
     * Constant for 'DE_HermesPaketSperrgut' value.
     *
     * Hermes Paket Sperrgut
     */
    public const VAL_DE__HERMES_PAKET_SPERRGUT = 'DE_HermesPaketSperrgut';

    /**
     * Constant for 'DE_eBayHermesPaketSperrgutShop2Shop' value.
     *
     * eBay Hermes Paket Sperrgut Shop2Shop (Abgabe und Zustellung im Paketshop)
     */
    public const VAL_DE__E_BAY_HERMES_PAKET_SPERRGUT_SHOP_2_SHOP = 'DE_eBayHermesPaketSperrgutShop2Shop';

    /**
     * Constant for 'DE_DHLPaeckchenPackstation' value.
     *
     * DHL Paeckchen Packstation
     */
    public const VAL_DE__DHLPAECKCHEN_PACKSTATION = 'DE_DHLPaeckchenPackstation';

    /**
     * Constant for 'DE_DHLPaketPackstation' value.
     *
     * DHL Paket Packstation
     */
    public const VAL_DE__DHLPAKET_PACKSTATION = 'DE_DHLPaketPackstation';

    /**
     * Constant for 'DE_eBayDHLPaeckchen' value.
     *
     * eBay DHL Paeckchen
     */
    public const VAL_DE__E_BAY_DHLPAECKCHEN = 'DE_eBayDHLPaeckchen';

    /**
     * Constant for 'DE_DHLStarPaeckchen' value.
     *
     * DHL Star-Paeckchen
     */
    public const VAL_DE__DHLSTAR_PAECKCHEN = 'DE_DHLStarPaeckchen';

    /**
     * Constant for 'DE_TrackedDeliveryFromAbroad' value.
     *
     * Versand mit Nachverfolgung aus dem Ausland
     */
    public const VAL_DE__TRACKED_DELIVERY_FROM_ABROAD = 'DE_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'ES_CartasNacionalesHasta20' value.
     *
     * Cartas nacionales hasta 20 gr
     */
    public const VAL_ES__CARTAS_NACIONALES_HASTA_20 = 'ES_CartasNacionalesHasta20';

    /**
     * Constant for 'ES_CartasNacionalesDeMas20' value.
     *
     * Correos: cartas ordinarias
     */
    public const VAL_ES__CARTAS_NACIONALES_DE_MAS_20 = 'ES_CartasNacionalesDeMas20';

    /**
     * Constant for 'ES_CartasInternacionalesHasta20' value.
     *
     * Cartas internacionales hasta 20 gr
     */
    public const VAL_ES__CARTAS_INTERNACIONALES_HASTA_20 = 'ES_CartasInternacionalesHasta20';

    /**
     * Constant for 'ES_CartasInternacionalesDeMas20' value.
     *
     * Cartas internacionales de mas de 20 gr
     */
    public const VAL_ES__CARTAS_INTERNACIONALES_DE_MAS_20 = 'ES_CartasInternacionalesDeMas20';

    /**
     * Constant for 'ES_PaqueteAzulHasta2kg' value.
     *
     * Paquete Azul (nacional) hasta 2 kg
     */
    public const VAL_ES__PAQUETE_AZUL_HASTA_2_KG = 'ES_PaqueteAzulHasta2kg';

    /**
     * Constant for 'ES_PaqueteAzulDeMas2kg' value.
     *
     * Correos: Postal Expres
     */
    public const VAL_ES__PAQUETE_AZUL_DE_MAS_2_KG = 'ES_PaqueteAzulDeMas2kg';

    /**
     * Constant for 'ES_PaqueteInternacionalEconomico' value.
     *
     * Paquete Internacional Economico
     */
    public const VAL_ES__PAQUETE_INTERNACIONAL_ECONOMICO = 'ES_PaqueteInternacionalEconomico';

    /**
     * Constant for 'ES_Urgente' value.
     *
     * Otro courier 24 horas
     */
    public const VAL_ES__URGENTE = 'ES_Urgente';

    /**
     * Constant for 'ES_Otros' value.
     *
     * Otros (ver descripcion)
     */
    public const VAL_ES__OTROS = 'ES_Otros';

    /**
     * Constant for 'ES_StandardInternational' value.
     *
     * Envio internacional estandar
     */
    public const VAL_ES__STANDARD_INTERNATIONAL = 'ES_StandardInternational';

    /**
     * Constant for 'ES_ExpeditedInternational' value.
     *
     * Envio internacional urgente
     */
    public const VAL_ES__EXPEDITED_INTERNATIONAL = 'ES_ExpeditedInternational';

    /**
     * Constant for 'ES_OtherInternational' value.
     *
     * Envio internacional economico
     */
    public const VAL_ES__OTHER_INTERNATIONAL = 'ES_OtherInternational';

    /**
     * Constant for 'ES_CartasPostalInternational' value.
     *
     * Cartas y tarjetas postales internacionales
     */
    public const VAL_ES__CARTAS_POSTAL_INTERNATIONAL = 'ES_CartasPostalInternational';

    /**
     * Constant for 'ES_EmsPostalExpressInternational' value.
     *
     * Ems postal expres internacional
     */
    public const VAL_ES__EMS_POSTAL_EXPRESS_INTERNATIONAL = 'ES_EmsPostalExpressInternational';

    /**
     * Constant for 'ES_EconomyPacketInternational' value.
     *
     * Paquete internacional economico
     */
    public const VAL_ES__ECONOMY_PACKET_INTERNATIONAL = 'ES_EconomyPacketInternational';

    /**
     * Constant for 'ES_EconomyDeliveryFromAbroad' value.
     *
     * Envio economico desde el extranjero
     */
    public const VAL_ES__ECONOMY_DELIVERY_FROM_ABROAD = 'ES_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'ES_StandardDeliveryFromAbroad' value.
     *
     * Envio estandar desde el extranjero
     */
    public const VAL_ES__STANDARD_DELIVERY_FROM_ABROAD = 'ES_StandardDeliveryFromAbroad';

    /**
     * Constant for 'ES_ExpressDeliveryFromAbroad' value.
     *
     * Envio urgente desde el extranjero
     */
    public const VAL_ES__EXPRESS_DELIVERY_FROM_ABROAD = 'ES_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'ES_TrackedDeliveryFromAbroad' value.
     *
     * Envio desde el extranjero con seguimiento
     */
    public const VAL_ES__TRACKED_DELIVERY_FROM_ABROAD = 'ES_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'ES_ENTREGA_KIALA_8KG' value.
     *
     * Entrega a un Kiala point hasta 8 kg
     */
    public const VAL_ES__ENTREGA__KIALA__8_KG = 'ES_ENTREGA_KIALA_8KG';

    /**
     * Constant for 'FR_ChronoposteInternationalClassic' value.
     *
     * Chronoposte International Classic
     */
    public const VAL_FR__CHRONOPOSTE_INTERNATIONAL_CLASSIC = 'FR_ChronoposteInternationalClassic';

    /**
     * Constant for 'FR_ColiposteColissimoDirect' value.
     *
     * Coliposte Colissimo Direct
     */
    public const VAL_FR__COLIPOSTE_COLISSIMO_DIRECT = 'FR_ColiposteColissimoDirect';

    /**
     * Constant for 'FR_DHLExpressEuropack' value.
     *
     * DHL Express Europack
     */
    public const VAL_FR__DHLEXPRESS_EUROPACK = 'FR_DHLExpressEuropack';

    /**
     * Constant for 'FR_UPSStandard' value.
     *
     * UPS Standard
     */
    public const VAL_FR__UPSSTANDARD = 'FR_UPSStandard';

    /**
     * Constant for 'FR_PostOfficeLetter' value.
     *
     * Lettre
     */
    public const VAL_FR__POST_OFFICE_LETTER = 'FR_PostOfficeLetter';

    /**
     * Constant for 'FR_PostOfficeLetterFollowed' value.
     *
     * Lettre avec suivi
     */
    public const VAL_FR__POST_OFFICE_LETTER_FOLLOWED = 'FR_PostOfficeLetterFollowed';

    /**
     * Constant for 'FR_PostOfficeLetterRecommended' value.
     *
     * Lettre recommandee
     */
    public const VAL_FR__POST_OFFICE_LETTER_RECOMMENDED = 'FR_PostOfficeLetterRecommended';

    /**
     * Constant for 'FR_ColiposteColissimo' value.
     *
     * Colissimo
     */
    public const VAL_FR__COLIPOSTE_COLISSIMO = 'FR_ColiposteColissimo';

    /**
     * Constant for 'FR_ColiposteColissimoRecommended' value.
     *
     * Colissimo Recommande
     */
    public const VAL_FR__COLIPOSTE_COLISSIMO_RECOMMENDED = 'FR_ColiposteColissimoRecommended';

    /**
     * Constant for 'FR_UPSStandardAgainstRefund' value.
     *
     * Contre remboursement
     */
    public const VAL_FR__UPSSTANDARD_AGAINST_REFUND = 'FR_UPSStandardAgainstRefund';

    /**
     * Constant for 'FR_Autre' value.
     *
     * Autre mode d'envoi de courrier
     */
    public const VAL_FR__AUTRE = 'FR_Autre';

    /**
     * Constant for 'FR_Ecopli' value.
     *
     * Ecopli
     */
    public const VAL_FR__ECOPLI = 'FR_Ecopli';

    /**
     * Constant for 'FR_Colieco' value.
     *
     * Colieco
     */
    public const VAL_FR__COLIECO = 'FR_Colieco';

    /**
     * Constant for 'FR_AuteModeDenvoiDeColis' value.
     *
     * Autre mode d'envoi de colis
     */
    public const VAL_FR__AUTE_MODE_DENVOI_DE_COLIS = 'FR_AuteModeDenvoiDeColis';

    /**
     * Constant for 'FR_RemiseEnMainPropre' value.
     *
     * Remise en main propre
     */
    public const VAL_FR__REMISE_EN_MAIN_PROPRE = 'FR_RemiseEnMainPropre';

    /**
     * Constant for 'FR_StandardInternational' value.
     *
     * Autre livraison internationale standard
     */
    public const VAL_FR__STANDARD_INTERNATIONAL = 'FR_StandardInternational';

    /**
     * Constant for 'FR_ExpeditedInternational' value.
     *
     * Autre livraison internationale express
     */
    public const VAL_FR__EXPEDITED_INTERNATIONAL = 'FR_ExpeditedInternational';

    /**
     * Constant for 'FR_OtherInternational' value.
     *
     * Autre livraison internationale economique
     */
    public const VAL_FR__OTHER_INTERNATIONAL = 'FR_OtherInternational';

    /**
     * Constant for 'FR_LaPosteInternationalPriorityCourier' value.
     *
     * La Poste - Courrier International Prioritaire
     */
    public const VAL_FR__LA_POSTE_INTERNATIONAL_PRIORITY_COURIER = 'FR_LaPosteInternationalPriorityCourier';

    /**
     * Constant for 'FR_LaPosteInternationalEconomyCourier' value.
     *
     * La Poste - Courrier International Economique
     */
    public const VAL_FR__LA_POSTE_INTERNATIONAL_ECONOMY_COURIER = 'FR_LaPosteInternationalEconomyCourier';

    /**
     * Constant for 'FR_LaPosteColissimoInternational' value.
     *
     * La Poste - Colissimo International
     */
    public const VAL_FR__LA_POSTE_COLISSIMO_INTERNATIONAL = 'FR_LaPosteColissimoInternational';

    /**
     * Constant for 'FR_LaPosteColisEconomiqueInternational' value.
     *
     * La Poste - Colis Economique International
     */
    public const VAL_FR__LA_POSTE_COLIS_ECONOMIQUE_INTERNATIONAL = 'FR_LaPosteColisEconomiqueInternational';

    /**
     * Constant for 'FR_LaPosteColissimoEmballageInternational' value.
     *
     * La Poste - Colissimo Emballage International
     */
    public const VAL_FR__LA_POSTE_COLISSIMO_EMBALLAGE_INTERNATIONAL = 'FR_LaPosteColissimoEmballageInternational';

    /**
     * Constant for 'FR_ChronopostClassicInternational' value.
     *
     * Chronopost Classic International
     */
    public const VAL_FR__CHRONOPOST_CLASSIC_INTERNATIONAL = 'FR_ChronopostClassicInternational';

    /**
     * Constant for 'FR_ChronopostPremiumInternational' value.
     *
     * Chronopost Premium International
     */
    public const VAL_FR__CHRONOPOST_PREMIUM_INTERNATIONAL = 'FR_ChronopostPremiumInternational';

    /**
     * Constant for 'FR_UPSStandardInternational' value.
     *
     * UPS Standard
     */
    public const VAL_FR__UPSSTANDARD_INTERNATIONAL = 'FR_UPSStandardInternational';

    /**
     * Constant for 'FR_UPSExpressInternational' value.
     *
     * UPS Express
     */
    public const VAL_FR__UPSEXPRESS_INTERNATIONAL = 'FR_UPSExpressInternational';

    /**
     * Constant for 'FR_DHLInternational' value.
     *
     * DHL
     */
    public const VAL_FR__DHLINTERNATIONAL = 'FR_DHLInternational';

    /**
     * Constant for 'FR_LaPosteLetterMax' value.
     *
     * La Poste Lettre Max
     */
    public const VAL_FR__LA_POSTE_LETTER_MAX = 'FR_LaPosteLetterMax';

    /**
     * Constant for 'FR_KIALA_DELIVERY' value.
     *
     * Livraison en Relais Kiala
     */
    public const VAL_FR__KIALA__DELIVERY = 'FR_KIALA_DELIVERY';

    /**
     * Constant for 'FR_TrackedDeliveryFromAbroad' value.
     *
     * Livraison a partir de l'etranger avec suivi de commande
     */
    public const VAL_FR__TRACKED_DELIVERY_FROM_ABROAD = 'FR_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'IN_Regular' value.
     *
     * National - Regular
     */
    public const VAL_IN__REGULAR = 'IN_Regular';

    /**
     * Constant for 'IN_Express' value.
     *
     * National - Express
     */
    public const VAL_IN__EXPRESS = 'IN_Express';

    /**
     * Constant for 'IN_NationalCOD' value.
     *
     * National - COD
     */
    public const VAL_IN__NATIONAL_COD = 'IN_NationalCOD';

    /**
     * Constant for 'IN_Courier' value.
     *
     * Local - Courier
     */
    public const VAL_IN__COURIER = 'IN_Courier';

    /**
     * Constant for 'IN_LocalCOD' value.
     *
     * Local - COD
     */
    public const VAL_IN__LOCAL_COD = 'IN_LocalCOD';

    /**
     * Constant for 'IN_StandardInternational' value.
     *
     * International - Standard
     */
    public const VAL_IN__STANDARD_INTERNATIONAL = 'IN_StandardInternational';

    /**
     * Constant for 'IN_ExpeditedInternational' value.
     *
     * International - Expedited
     */
    public const VAL_IN__EXPEDITED_INTERNATIONAL = 'IN_ExpeditedInternational';

    /**
     * Constant for 'IN_OtherInternational' value.
     *
     * International - other
     */
    public const VAL_IN__OTHER_INTERNATIONAL = 'IN_OtherInternational';

    /**
     * Constant for 'IN_FlatRateCOD' value.
     *
     * Flat Rate COD
     */
    public const VAL_IN__FLAT_RATE_COD = 'IN_FlatRateCOD';

    /**
     * Constant for 'IN_BuyerPicksUpAndPays' value.
     *
     * Buyer picks up and pays
     */
    public const VAL_IN__BUYER_PICKS_UP_AND_PAYS = 'IN_BuyerPicksUpAndPays';

    /**
     * Constant for 'IT_RegularMail' value.
     *
     * Posta ordinaria
     */
    public const VAL_IT__REGULAR_MAIL = 'IT_RegularMail';

    /**
     * Constant for 'IT_PriorityMail' value.
     *
     * Posta prioritaria
     */
    public const VAL_IT__PRIORITY_MAIL = 'IT_PriorityMail';

    /**
     * Constant for 'IT_MailRegisteredLetter' value.
     *
     * Posta raccomandata
     */
    public const VAL_IT__MAIL_REGISTERED_LETTER = 'IT_MailRegisteredLetter';

    /**
     * Constant for 'IT_MailRegisteredLetterWithMark' value.
     *
     * Posta raccomandata con contrassegno
     */
    public const VAL_IT__MAIL_REGISTERED_LETTER_WITH_MARK = 'IT_MailRegisteredLetterWithMark';

    /**
     * Constant for 'IT_InsuredMail' value.
     *
     * Posta assicurata
     */
    public const VAL_IT__INSURED_MAIL = 'IT_InsuredMail';

    /**
     * Constant for 'IT_QuickMail' value.
     *
     * Posta celere
     */
    public const VAL_IT__QUICK_MAIL = 'IT_QuickMail';

    /**
     * Constant for 'IT_RegularPackage' value.
     *
     * Pacco ordinario
     */
    public const VAL_IT__REGULAR_PACKAGE = 'IT_RegularPackage';

    /**
     * Constant for 'IT_QuickPackage1' value.
     *
     * Pacco celere 1
     */
    public const VAL_IT__QUICK_PACKAGE_1 = 'IT_QuickPackage1';

    /**
     * Constant for 'IT_QuickPackage3' value.
     *
     * Pacco celere 3
     */
    public const VAL_IT__QUICK_PACKAGE_3 = 'IT_QuickPackage3';

    /**
     * Constant for 'IT_ExpressCourier' value.
     *
     * Corriere espresso
     */
    public const VAL_IT__EXPRESS_COURIER = 'IT_ExpressCourier';

    /**
     * Constant for 'IT_ExpressPackageMaxi' value.
     *
     * Paccocelere Maxi
     */
    public const VAL_IT__EXPRESS_PACKAGE_MAXI = 'IT_ExpressPackageMaxi';

    /**
     * Constant for 'IT_StandardInternational' value.
     *
     * Spedizione internazionale standard a prezzo fisso
     */
    public const VAL_IT__STANDARD_INTERNATIONAL = 'IT_StandardInternational';

    /**
     * Constant for 'IT_ExpeditedInternational' value.
     *
     * Spedizione internazionale celere a prezzo fisso
     */
    public const VAL_IT__EXPEDITED_INTERNATIONAL = 'IT_ExpeditedInternational';

    /**
     * Constant for 'IT_OtherInternational' value.
     *
     * Altre spedizioni internazionali (vedi descrizione)
     */
    public const VAL_IT__OTHER_INTERNATIONAL = 'IT_OtherInternational';

    /**
     * Constant for 'IT_TrackedDeliveryFromAbroad' value.
     *
     * Spedizione tracciata dall estero
     */
    public const VAL_IT__TRACKED_DELIVERY_FROM_ABROAD = 'IT_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'NL_StandardDelivery' value.
     *
     * Standaardverzending
     */
    public const VAL_NL__STANDARD_DELIVERY = 'NL_StandardDelivery';

    /**
     * Constant for 'NL_ParcelPost' value.
     *
     * Pakketpost
     */
    public const VAL_NL__PARCEL_POST = 'NL_ParcelPost';

    /**
     * Constant for 'NL_RegisteredMail' value.
     *
     * Verzending met ontvangstbevestiging
     */
    public const VAL_NL__REGISTERED_MAIL = 'NL_RegisteredMail';

    /**
     * Constant for 'NL_Other' value.
     *
     * Andere verzendservice
     */
    public const VAL_NL__OTHER = 'NL_Other';

    /**
     * Constant for 'NL_TPGPostTNTInternational' value.
     *
     * TPG Post/TNT
     */
    public const VAL_NL__TPGPOST_TNTINTERNATIONAL = 'NL_TPGPostTNTInternational';

    /**
     * Constant for 'NL_UPSInternational' value.
     *
     * UPS
     */
    public const VAL_NL__UPSINTERNATIONAL = 'NL_UPSInternational';

    /**
     * Constant for 'NL_FedExInternational' value.
     *
     * FedEx
     */
    public const VAL_NL__FED_EX_INTERNATIONAL = 'NL_FedExInternational';

    /**
     * Constant for 'NL_DHLInternational' value.
     *
     * DHL
     */
    public const VAL_NL__DHLINTERNATIONAL = 'NL_DHLInternational';

    /**
     * Constant for 'NL_DPDGBRInternational' value.
     *
     * DPD (Germany)
     */
    public const VAL_NL__DPDGBRINTERNATIONAL = 'NL_DPDGBRInternational';

    /**
     * Constant for 'NL_GLSBusinessInternational' value.
     *
     * GLS (Business only)
     */
    public const VAL_NL__GLSBUSINESS_INTERNATIONAL = 'NL_GLSBusinessInternational';

    /**
     * Constant for 'NL_StandardInternational' value.
     *
     * Vaste kosten standaard internationale verzending
     */
    public const VAL_NL__STANDARD_INTERNATIONAL = 'NL_StandardInternational';

    /**
     * Constant for 'NL_ExpeditedInternational' value.
     *
     * Vaste kosten versnelde internationale verzending
     */
    public const VAL_NL__EXPEDITED_INTERNATIONAL = 'NL_ExpeditedInternational';

    /**
     * Constant for 'NL_OtherInternational' value.
     *
     * Andere internationale verzending (zie beschrijving)
     */
    public const VAL_NL__OTHER_INTERNATIONAL = 'NL_OtherInternational';

    /**
     * Constant for 'NL_EconomyDeliveryFromAbroad' value.
     *
     * Voordelige verzending uit het buitenland
     */
    public const VAL_NL__ECONOMY_DELIVERY_FROM_ABROAD = 'NL_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'NL_StandardDeliveryFromAbroad' value.
     *
     * Standaardverzending uit het buitenland
     */
    public const VAL_NL__STANDARD_DELIVERY_FROM_ABROAD = 'NL_StandardDeliveryFromAbroad';

    /**
     * Constant for 'NL_ExpressDeliveryFromAbroad' value.
     *
     * Verzending per expresse uit het buitenland
     */
    public const VAL_NL__EXPRESS_DELIVERY_FROM_ABROAD = 'NL_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'NL_TrackedDeliveryFromAbroad' value.
     *
     * Verzending met internationale tracering uit het buitenland
     */
    public const VAL_NL__TRACKED_DELIVERY_FROM_ABROAD = 'NL_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'TW_RegisteredMail' value.
     *
     * Post office plus registration
     */
    public const VAL_TW__REGISTERED_MAIL = 'TW_RegisteredMail';

    /**
     * Constant for 'TW_UnregisteredMail' value.
     *
     * Post office without registration
     */
    public const VAL_TW__UNREGISTERED_MAIL = 'TW_UnregisteredMail';

    /**
     * Constant for 'TW_COD' value.
     *
     * Post office cash on delivery
     */
    public const VAL_TW__COD = 'TW_COD';

    /**
     * Constant for 'TW_DwellingMatchPost' value.
     *
     * Home delivery
     */
    public const VAL_TW__DWELLING_MATCH_POST = 'TW_DwellingMatchPost';

    /**
     * Constant for 'TW_DwellingMatchCOD' value.
     *
     * Home delivery cash on delivery
     */
    public const VAL_TW__DWELLING_MATCH_COD = 'TW_DwellingMatchCOD';

    /**
     * Constant for 'TW_SelfPickup' value.
     *
     * Face to face
     */
    public const VAL_TW__SELF_PICKUP = 'TW_SelfPickup';

    /**
     * Constant for 'TW_ParcelPost' value.
     *
     * Freight delivery
     */
    public const VAL_TW__PARCEL_POST = 'TW_ParcelPost';

    /**
     * Constant for 'TW_ExpressMail' value.
     *
     * Express delivery
     */
    public const VAL_TW__EXPRESS_MAIL = 'TW_ExpressMail';

    /**
     * Constant for 'TW_Other' value.
     *
     * Other
     */
    public const VAL_TW__OTHER = 'TW_Other';

    /**
     * Constant for 'TW_CPInternationalLetterPost' value.
     *
     * Post Office Airbag
     */
    public const VAL_TW__CPINTERNATIONAL_LETTER_POST = 'TW_CPInternationalLetterPost';

    /**
     * Constant for 'TW_CPInternationalParcelPost' value.
     *
     * Post office air parcel
     */
    public const VAL_TW__CPINTERNATIONAL_PARCEL_POST = 'TW_CPInternationalParcelPost';

    /**
     * Constant for 'TW_CPInternationalRegisteredLetterPost' value.
     *
     * Post office aviation registered packet
     */
    public const VAL_TW__CPINTERNATIONAL_REGISTERED_LETTER_POST = 'TW_CPInternationalRegisteredLetterPost';

    /**
     * Constant for 'TW_CPInternationalRegisteredParcelPost' value.
     *
     * Post office aviation registration package
     */
    public const VAL_TW__CPINTERNATIONAL_REGISTERED_PARCEL_POST = 'TW_CPInternationalRegisteredParcelPost';

    /**
     * Constant for 'TW_CPInternationalEMS' value.
     *
     * Post Office International Express EMS
     */
    public const VAL_TW__CPINTERNATIONAL_EMS = 'TW_CPInternationalEMS';

    /**
     * Constant for 'TW_CPInternationalOceanShippingParcel' value.
     *
     * Post office international land and water package
     */
    public const VAL_TW__CPINTERNATIONAL_OCEAN_SHIPPING_PARCEL = 'TW_CPInternationalOceanShippingParcel';

    /**
     * Constant for 'TW_FedExInternationalPriority' value.
     *
     * FedEx International Priority
     */
    public const VAL_TW__FED_EX_INTERNATIONAL_PRIORITY = 'TW_FedExInternationalPriority';

    /**
     * Constant for 'TW_FedExInternationalEconomy' value.
     *
     * FedEx International Economy
     */
    public const VAL_TW__FED_EX_INTERNATIONAL_ECONOMY = 'TW_FedExInternationalEconomy';

    /**
     * Constant for 'TW_UPSWorldwideExpedited' value.
     *
     * UPS Worldwide Expedited
     */
    public const VAL_TW__UPSWORLDWIDE_EXPEDITED = 'TW_UPSWorldwideExpedited';

    /**
     * Constant for 'TW_UPSWorldwideExpress' value.
     *
     * UPS Worldwide Express
     */
    public const VAL_TW__UPSWORLDWIDE_EXPRESS = 'TW_UPSWorldwideExpress';

    /**
     * Constant for 'TW_UPSWorldwideExpressPlus' value.
     *
     * UPS Worldwide Express Plus
     */
    public const VAL_TW__UPSWORLDWIDE_EXPRESS_PLUS = 'TW_UPSWorldwideExpressPlus';

    /**
     * Constant for 'TW_OtherInternational' value.
     *
     * Other international shipping charges (see description)
     */
    public const VAL_TW__OTHER_INTERNATIONAL = 'TW_OtherInternational';

    /**
     * Constant for 'UK_RoyalMailFirstClassStandard' value.
     *
     * Royal Mail 1st Class
     */
    public const VAL_UK__ROYAL_MAIL_FIRST_CLASS_STANDARD = 'UK_RoyalMailFirstClassStandard';

    /**
     * Constant for 'UK_RoyalMailSecondClassStandard' value.
     *
     * Royal Mail 2nd Class
     */
    public const VAL_UK__ROYAL_MAIL_SECOND_CLASS_STANDARD = 'UK_RoyalMailSecondClassStandard';

    /**
     * Constant for 'UK_RoyalMailFirstClassRecorded' value.
     *
     * Royal Mail 1st Class Signed For
     */
    public const VAL_UK__ROYAL_MAIL_FIRST_CLASS_RECORDED = 'UK_RoyalMailFirstClassRecorded';

    /**
     * Constant for 'UK_RoyalMailSecondClassRecorded' value.
     *
     * Royal Mail 2nd Class Signed For
     */
    public const VAL_UK__ROYAL_MAIL_SECOND_CLASS_RECORDED = 'UK_RoyalMailSecondClassRecorded';

    /**
     * Constant for 'UK_RoyalMailSpecialDelivery' value.
     *
     * Royal Mail Special Delivery
     */
    public const VAL_UK__ROYAL_MAIL_SPECIAL_DELIVERY = 'UK_RoyalMailSpecialDelivery';

    /**
     * Constant for 'UK_RoyalMailStandardParcel' value.
     *
     * (This value is no longer used.)
     */
    public const VAL_UK__ROYAL_MAIL_STANDARD_PARCEL = 'UK_RoyalMailStandardParcel';

    /**
     * Constant for 'UK_Parcelforce24' value.
     *
     * Parcelforce 24
     */
    public const VAL_UK__PARCELFORCE_24 = 'UK_Parcelforce24';

    /**
     * Constant for 'UK_Parcelforce48' value.
     *
     * Parcelforce 48
     */
    public const VAL_UK__PARCELFORCE_48 = 'UK_Parcelforce48';

    /**
     * Constant for 'UK_OtherCourier' value.
     *
     * Other Courier
     */
    public const VAL_UK__OTHER_COURIER = 'UK_OtherCourier';

    /**
     * Constant for 'UK_myHermesDoorToDoorService' value.
     *
     * Hermes Tracked
     */
    public const VAL_UK__MY_HERMES_DOOR_TO_DOOR_SERVICE = 'UK_myHermesDoorToDoorService';

    /**
     * Constant for 'UK_CollectDropAtStoreDeliveryToDoor' value.
     *
     * Collect+ : drop at store-delivery to door
     */
    public const VAL_UK__COLLECT_DROP_AT_STORE_DELIVERY_TO_DOOR = 'UK_CollectDropAtStoreDeliveryToDoor';

    /**
     * Constant for 'UK_SellersStandardRate' value.
     *
     * Seller's Standard Rate
     */
    public const VAL_UK__SELLERS_STANDARD_RATE = 'UK_SellersStandardRate';

    /**
     * Constant for 'UK_CollectInPerson' value.
     *
     * Collection in Person
     */
    public const VAL_UK__COLLECT_IN_PERSON = 'UK_CollectInPerson';

    /**
     * Constant for 'UK_SellersStandardInternationalRate' value.
     *
     * Sellers Standard International Rate
     */
    public const VAL_UK__SELLERS_STANDARD_INTERNATIONAL_RATE = 'UK_SellersStandardInternationalRate';

    /**
     * Constant for 'UK_RoyalMailAirmailInternational' value.
     *
     * Royal Mail Airmail
     */
    public const VAL_UK__ROYAL_MAIL_AIRMAIL_INTERNATIONAL = 'UK_RoyalMailAirmailInternational';

    /**
     * Constant for 'UK_RoyalMailAirsureInternational' value.
     *
     * Royal Mail Airsure
     */
    public const VAL_UK__ROYAL_MAIL_AIRSURE_INTERNATIONAL = 'UK_RoyalMailAirsureInternational';

    /**
     * Constant for 'UK_RoyalMailSurfaceMailInternational' value.
     *
     * Royal Mail Surface Mail
     */
    public const VAL_UK__ROYAL_MAIL_SURFACE_MAIL_INTERNATIONAL = 'UK_RoyalMailSurfaceMailInternational';

    /**
     * Constant for 'UK_RoyalMailInternationalSignedFor' value.
     *
     * Royal Mail International Signed-for
     */
    public const VAL_UK__ROYAL_MAIL_INTERNATIONAL_SIGNED_FOR = 'UK_RoyalMailInternationalSignedFor';

    /**
     * Constant for 'UK_RoyalMailHMForcesMailInternational' value.
     *
     * Royal Mail HM Forces Mail
     */
    public const VAL_UK__ROYAL_MAIL_HMFORCES_MAIL_INTERNATIONAL = 'UK_RoyalMailHMForcesMailInternational';

    /**
     * Constant for 'UK_ParcelForceInternationalDatapost' value.
     *
     * Parcelforce International Datapost
     */
    public const VAL_UK__PARCEL_FORCE_INTERNATIONAL_DATAPOST = 'UK_ParcelForceInternationalDatapost';

    /**
     * Constant for 'UK_ParcelForceIreland24International' value.
     *
     * Parcelforce Ireland 24
     */
    public const VAL_UK__PARCEL_FORCE_IRELAND_24_INTERNATIONAL = 'UK_ParcelForceIreland24International';

    /**
     * Constant for 'UK_ParcelForceEuro48International' value.
     *
     * Parcelforce Euro 48
     */
    public const VAL_UK__PARCEL_FORCE_EURO_48_INTERNATIONAL = 'UK_ParcelForceEuro48International';

    /**
     * Constant for 'UK_ParcelForceInternationalScheduled' value.
     *
     * Parcelforce International Scheduled
     */
    public const VAL_UK__PARCEL_FORCE_INTERNATIONAL_SCHEDULED = 'UK_ParcelForceInternationalScheduled';

    /**
     * Constant for 'UK_OtherCourierOrDeliveryInternational' value.
     *
     * Other courier or delivery service
     */
    public const VAL_UK__OTHER_COURIER_OR_DELIVERY_INTERNATIONAL = 'UK_OtherCourierOrDeliveryInternational';

    /**
     * Constant for 'UK_CollectInPersonInternational' value.
     *
     * Collect in person
     */
    public const VAL_UK__COLLECT_IN_PERSON_INTERNATIONAL = 'UK_CollectInPersonInternational';

    /**
     * Constant for 'UK_ParcelForceIntlExpress' value.
     *
     * Parcelforce Global Express
     */
    public const VAL_UK__PARCEL_FORCE_INTL_EXPRESS = 'UK_ParcelForceIntlExpress';

    /**
     * Constant for 'UK_ParcelForceIntlValue' value.
     *
     * Parcelforce Global Value
     */
    public const VAL_UK__PARCEL_FORCE_INTL_VALUE = 'UK_ParcelForceIntlValue';

    /**
     * Constant for 'UK_ParcelForceIntlEconomy' value.
     *
     * Parcelforce Global Economy (Not available for destinations in Europe)
     */
    public const VAL_UK__PARCEL_FORCE_INTL_ECONOMY = 'UK_ParcelForceIntlEconomy';

    /**
     * Constant for 'UK_TrackedDeliveryFromAbroad' value.
     *
     * Tracked delivery from outside abroad
     */
    public const VAL_UK__TRACKED_DELIVERY_FROM_ABROAD = 'UK_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'UK_IntlTrackedPostage' value.
     *
     * International tracked postage
     */
    public const VAL_UK__INTL_TRACKED_POSTAGE = 'UK_IntlTrackedPostage';

    /**
     * Constant for 'IE_SellersStandardRate' value.
     *
     * Seller's standard rate
     */
    public const VAL_IE__SELLERS_STANDARD_RATE = 'IE_SellersStandardRate';

    /**
     * Constant for 'IE_FirstClassLetterService' value.
     *
     * First Class Letter Service
     */
    public const VAL_IE__FIRST_CLASS_LETTER_SERVICE = 'IE_FirstClassLetterService';

    /**
     * Constant for 'IE_SwiftPostNational' value.
     *
     * SwiftPost National
     */
    public const VAL_IE__SWIFT_POST_NATIONAL = 'IE_SwiftPostNational';

    /**
     * Constant for 'IE_RegisteredPost' value.
     *
     * Registered Post
     */
    public const VAL_IE__REGISTERED_POST = 'IE_RegisteredPost';

    /**
     * Constant for 'IE_EMSSDSCourier' value.
     *
     * EMS SDS Courier
     */
    public const VAL_IE__EMSSDSCOURIER = 'IE_EMSSDSCourier';

    /**
     * Constant for 'IE_EconomySDSCourier' value.
     *
     * Economy SDS Courier
     */
    public const VAL_IE__ECONOMY_SDSCOURIER = 'IE_EconomySDSCourier';

    /**
     * Constant for 'IE_OtherCourier' value.
     *
     * Other courier
     */
    public const VAL_IE__OTHER_COURIER = 'IE_OtherCourier';

    /**
     * Constant for 'IE_CollectionInPerson' value.
     *
     * Collection in person
     */
    public const VAL_IE__COLLECTION_IN_PERSON = 'IE_CollectionInPerson';

    /**
     * Constant for 'IE_SellersStandardRateInternational' value.
     *
     * Seller's Standard International Rate
     */
    public const VAL_IE__SELLERS_STANDARD_RATE_INTERNATIONAL = 'IE_SellersStandardRateInternational';

    /**
     * Constant for 'IE_InternationalEconomyService' value.
     *
     * International Economy Service
     */
    public const VAL_IE__INTERNATIONAL_ECONOMY_SERVICE = 'IE_InternationalEconomyService';

    /**
     * Constant for 'IE_InternationalPriorityService' value.
     *
     * International Priority Service
     */
    public const VAL_IE__INTERNATIONAL_PRIORITY_SERVICE = 'IE_InternationalPriorityService';

    /**
     * Constant for 'IE_SwiftPostExpressInternational' value.
     *
     * SwiftPost Express
     */
    public const VAL_IE__SWIFT_POST_EXPRESS_INTERNATIONAL = 'IE_SwiftPostExpressInternational';

    /**
     * Constant for 'IE_SwiftPostInternational' value.
     *
     * SwiftPost International
     */
    public const VAL_IE__SWIFT_POST_INTERNATIONAL = 'IE_SwiftPostInternational';

    /**
     * Constant for 'IE_EMSSDSCourierInternational' value.
     *
     * EMS SDS Courier
     */
    public const VAL_IE__EMSSDSCOURIER_INTERNATIONAL = 'IE_EMSSDSCourierInternational';

    /**
     * Constant for 'IE_EconomySDSCourierInternational' value.
     *
     * Economy SDS Courier
     */
    public const VAL_IE__ECONOMY_SDSCOURIER_INTERNATIONAL = 'IE_EconomySDSCourierInternational';

    /**
     * Constant for 'IE_OtherCourierInternational' value.
     *
     * Other courier or delivery service
     */
    public const VAL_IE__OTHER_COURIER_INTERNATIONAL = 'IE_OtherCourierInternational';

    /**
     * Constant for 'IE_CollectionInPersonInternational' value.
     *
     * International collection in person
     */
    public const VAL_IE__COLLECTION_IN_PERSON_INTERNATIONAL = 'IE_CollectionInPersonInternational';

    /**
     * Constant for 'IE_EconomyDeliveryFromAbroad' value.
     *
     * Economy delivery from abroad
     */
    public const VAL_IE__ECONOMY_DELIVERY_FROM_ABROAD = 'IE_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'IE_StandardDeliveryFromAbroad' value.
     *
     * Standard delivery from abroad
     */
    public const VAL_IE__STANDARD_DELIVERY_FROM_ABROAD = 'IE_StandardDeliveryFromAbroad';

    /**
     * Constant for 'IE_ExpressDeliveryFromAbroad' value.
     *
     * Express delivery from abroad
     */
    public const VAL_IE__EXPRESS_DELIVERY_FROM_ABROAD = 'IE_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'IE_TrackedDeliveryFromAbroad' value.
     *
     * Tracked delivery from abroad
     */
    public const VAL_IE__TRACKED_DELIVERY_FROM_ABROAD = 'IE_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'PL_DomesticRegular' value.
     *
     * Domestic Regular shipping
     */
    public const VAL_PL__DOMESTIC_REGULAR = 'PL_DomesticRegular';

    /**
     * Constant for 'PL_DomesticSpecial' value.
     *
     * Domestic Special shipping
     */
    public const VAL_PL__DOMESTIC_SPECIAL = 'PL_DomesticSpecial';

    /**
     * Constant for 'PL_EconomyDeliveryFromAbroad' value.
     *
     * Przesylka z zagranicy - ekonomiczna
     */
    public const VAL_PL__ECONOMY_DELIVERY_FROM_ABROAD = 'PL_EconomyDeliveryFromAbroad';

    /**
     * Constant for 'PL_StandardDeliveryFromAbroad' value.
     *
     * Przesylka z zagranicy - standardowa
     */
    public const VAL_PL__STANDARD_DELIVERY_FROM_ABROAD = 'PL_StandardDeliveryFromAbroad';

    /**
     * Constant for 'PL_ExpressDeliveryFromAbroad' value.
     *
     * Przesylka z zagranicy - ekspresowa
     */
    public const VAL_PL__EXPRESS_DELIVERY_FROM_ABROAD = 'PL_ExpressDeliveryFromAbroad';

    /**
     * Constant for 'PL_TrackedDeliveryFromAbroad' value.
     *
     * Przesylka z zagranicy - ze sledzeniem
     */
    public const VAL_PL__TRACKED_DELIVERY_FROM_ABROAD = 'PL_TrackedDeliveryFromAbroad';

    /**
     * Constant for 'FreightShipping' value.
     *
     * Service associated with FreightQuote.com
     */
    public const VAL_FREIGHT_SHIPPING = 'FreightShipping';

    /**
     * Constant for 'FreightOtherShipping' value.
     *
     * (This value is no longer used.)
     */
    public const VAL_FREIGHT_OTHER_SHIPPING = 'FreightOtherShipping';

    /**
     * Constant for 'Freight' value.
     *
     * Service associated with any freight service other than FreightQuote.com
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Sellers offering freight shipping on the following
     * marketplaces should use the <b>Shipping service code value</b> listed below and
     * not use the <code>Freight</code> value that is used for freight shipping on
     * other marketplaces. For example, sellers offering freight shipping on the
     * Australia (AU) marketplace should use the <code>AU_Freight</code> value for
     * <b>ShippingServiceCodeType</b> and not use the <code>Freight</code> value.
     *  <br/><br/>
     *  <table>
     *  <tr>
     *  <th>SiteID</th>
     *  <th>Site name</th>
     *  <th>Shipping service code value</th>
     *  </tr>
     *  <tr><td><code>0</code></td>
     *  <td>US</td>
     *  <td><code>Freight</code></code></td>
     *  </tr>
     *  <tr><td><code>3</code></td>
     *  <td>UK</td>
     *  <td><code>Courier</code></code></td>
     *  </tr>
     *  <tr><td><code>2</code></td>
     *  <td>CA</td>
     *  <td><code>CA_Freight</code></code></td>
     *  </tr>
     *  <tr><td><code>15</code></td>
     *  <td>AU</td>
     *  <td><code>AU_Freight</code></code></td>
     *  </tr>
     *  <tr><td><code>210</code></td>
     *  <td>CA_FR</td>
     *  <td><code>CA_Freight</code></code></td>
     *  </tr>
     *  </table>
     *  </span>
     */
    public const VAL_FREIGHT = 'Freight';

    /**
     * Constant for 'FreightShippingInternational' value.
     *
     * Freight Shipping International
     */
    public const VAL_FREIGHT_SHIPPING_INTERNATIONAL = 'FreightShippingInternational';

    /**
     * Constant for 'USPSGround' value.
     *
     * US Postal Service Ground
     */
    public const VAL_USPSGROUND = 'USPSGround';

    /**
     * Constant for 'ShippingMethodOvernight' value.
     *
     * Overnight flat rate shipping service (domestic only)
     */
    public const VAL_SHIPPING_METHOD_OVERNIGHT = 'ShippingMethodOvernight';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * Constant for 'USPSPriorityFlatRateEnvelope' value.
     *
     * USPS Priority Flat Rate Envelope
     */
    public const VAL_USPSPRIORITY_FLAT_RATE_ENVELOPE = 'USPSPriorityFlatRateEnvelope';

    /**
     * Constant for 'USPSPriorityFlatRateBox' value.
     *
     * USPS Priority Flat Rate Box
     */
    public const VAL_USPSPRIORITY_FLAT_RATE_BOX = 'USPSPriorityFlatRateBox';

    /**
     * Constant for 'USPSGlobalPrioritySmallEnvelope' value.
     *
     * USPS Global Priority Mail Small Envelope
     */
    public const VAL_USPSGLOBAL_PRIORITY_SMALL_ENVELOPE = 'USPSGlobalPrioritySmallEnvelope';

    /**
     * Constant for 'USPSGlobalPriorityLargeEnvelope' value.
     *
     * USPS Global Priority Mail Large Envelope
     */
    public const VAL_USPSGLOBAL_PRIORITY_LARGE_ENVELOPE = 'USPSGlobalPriorityLargeEnvelope';

    /**
     * Constant for 'USPSExpressFlatRateEnvelope' value.
     *
     * USPS Priority Mail Express Flat Rate Envelope
     */
    public const VAL_USPSEXPRESS_FLAT_RATE_ENVELOPE = 'USPSExpressFlatRateEnvelope';

    /**
     * Constant for 'UPSWorldWideExpressBox10kg' value.
     *
     * UPS Worldwide Express Box 10 Kg
     */
    public const VAL_UPSWORLD_WIDE_EXPRESS_BOX_10_KG = 'UPSWorldWideExpressBox10kg';

    /**
     * Constant for 'UPSWorldWideExpressBox25kg' value.
     *
     * UPS Worldwide Express Box 25 Kg
     */
    public const VAL_UPSWORLD_WIDE_EXPRESS_BOX_25_KG = 'UPSWorldWideExpressBox25kg';

    /**
     * Constant for 'UPSWorldWideExpressPlusBox10kg' value.
     *
     * UPS Worldwide Express Plus Box 10 Kg
     */
    public const VAL_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_10_KG = 'UPSWorldWideExpressPlusBox10kg';

    /**
     * Constant for 'UPSWorldWideExpressPlusBox25kg' value.
     *
     * UPS Worldwide Express Plus box 25 Kg
     */
    public const VAL_UPSWORLD_WIDE_EXPRESS_PLUS_BOX_25_KG = 'UPSWorldWideExpressPlusBox25kg';

    /**
     * Constant for 'HK_LocalPickUpOnly' value.
     *
     * Local pick up only
     */
    public const VAL_HK__LOCAL_PICK_UP_ONLY = 'HK_LocalPickUpOnly';

    /**
     * Constant for 'HK_LocalCourier' value.
     *
     * Local courier
     */
    public const VAL_HK__LOCAL_COURIER = 'HK_LocalCourier';

    /**
     * Constant for 'HK_DomesticRegularShipping' value.
     *
     * Domestic regular shipping
     */
    public const VAL_HK__DOMESTIC_REGULAR_SHIPPING = 'HK_DomesticRegularShipping';

    /**
     * Constant for 'HK_DomesticSpecialShipping' value.
     *
     * Domestic special shipping
     */
    public const VAL_HK__DOMESTIC_SPECIAL_SHIPPING = 'HK_DomesticSpecialShipping';

    /**
     * Constant for 'HK_InternationalRegularShipping' value.
     *
     * International regular shipping
     */
    public const VAL_HK__INTERNATIONAL_REGULAR_SHIPPING = 'HK_InternationalRegularShipping';

    /**
     * Constant for 'HK_InternationalSpecialShipping' value.
     *
     * International special shipping
     */
    public const VAL_HK__INTERNATIONAL_SPECIAL_SHIPPING = 'HK_InternationalSpecialShipping';

    /**
     * Constant for 'SG_LocalPickUpOnly' value.
     *
     * Local pick up only
     */
    public const VAL_SG__LOCAL_PICK_UP_ONLY = 'SG_LocalPickUpOnly';

    /**
     * Constant for 'SG_LocalCourier' value.
     *
     * Local courier
     */
    public const VAL_SG__LOCAL_COURIER = 'SG_LocalCourier';

    /**
     * Constant for 'SG_DomesticStandardMail' value.
     *
     * Domestic standard mail
     */
    public const VAL_SG__DOMESTIC_STANDARD_MAIL = 'SG_DomesticStandardMail';

    /**
     * Constant for 'SG_DomesticNonStandardMail' value.
     *
     * Domestic non standard mail
     */
    public const VAL_SG__DOMESTIC_NON_STANDARD_MAIL = 'SG_DomesticNonStandardMail';

    /**
     * Constant for 'SG_DomesticSpeedpostIslandwide' value.
     *
     * Domestic Speedpost Islandwide
     */
    public const VAL_SG__DOMESTIC_SPEEDPOST_ISLANDWIDE = 'SG_DomesticSpeedpostIslandwide';

    /**
     * Constant for 'SG_InternationalStandardMail' value.
     *
     * International standard mail
     */
    public const VAL_SG__INTERNATIONAL_STANDARD_MAIL = 'SG_InternationalStandardMail';

    /**
     * Constant for 'SG_InternationalExpressMailService' value.
     *
     * International Express Mail Service (EMS)
     */
    public const VAL_SG__INTERNATIONAL_EXPRESS_MAIL_SERVICE = 'SG_InternationalExpressMailService';

    /**
     * Constant for 'SG_InternationalCourier' value.
     *
     * International courier (DHL, FedEx, UPS)
     */
    public const VAL_SG__INTERNATIONAL_COURIER = 'SG_InternationalCourier';

    /**
     * Constant for 'BENL_DePostZendingNONPRIOR' value.
     *
     * De Post zending - NON PRIOR (2 werkdagen)
     */
    public const VAL_BENL__DE_POST_ZENDING_NONPRIOR = 'BENL_DePostZendingNONPRIOR';

    /**
     * Constant for 'BENL_DePostZendingPRIOR' value.
     *
     * De Post zending - PRIOR (1 werkdag)
     */
    public const VAL_BENL__DE_POST_ZENDING_PRIOR = 'BENL_DePostZendingPRIOR';

    /**
     * Constant for 'BENL_DePostZendingAangetekend' value.
     *
     * De Post zending - aangetekend (1 werkdag)
     */
    public const VAL_BENL__DE_POST_ZENDING_AANGETEKEND = 'BENL_DePostZendingAangetekend';

    /**
     * Constant for 'BENL_KilopostPakje' value.
     *
     * Kilopost pakje (2 werkdagen)
     */
    public const VAL_BENL__KILOPOST_PAKJE = 'BENL_KilopostPakje';

    /**
     * Constant for 'BENL_Taxipost' value.
     *
     * Taxipost (express)
     */
    public const VAL_BENL__TAXIPOST = 'BENL_Taxipost';

    /**
     * Constant for 'BENL_KialaAfhaalpunt' value.
     *
     * Kiala afhaalpunt (1 tot 4 werkdagen)
     */
    public const VAL_BENL__KIALA_AFHAALPUNT = 'BENL_KialaAfhaalpunt';

    /**
     * Constant for 'BENL_VasteKostenStandaardVerzending' value.
     *
     * Vaste kosten standaard verzending
     */
    public const VAL_BENL__VASTE_KOSTEN_STANDAARD_VERZENDING = 'BENL_VasteKostenStandaardVerzending';

    /**
     * Constant for 'BENL_VasteKostenVersneldeVerzending' value.
     *
     * Vaste kosten versnelde verzending
     */
    public const VAL_BENL__VASTE_KOSTEN_VERSNELDE_VERZENDING = 'BENL_VasteKostenVersneldeVerzending';

    /**
     * Constant for 'BENL_VerzekerdeVerzending' value.
     *
     * Verzekerde verzending
     */
    public const VAL_BENL__VERZEKERDE_VERZENDING = 'BENL_VerzekerdeVerzending';

    /**
     * Constant for 'BEFR_LaPosteEnvoiNONPRIOR' value.
     *
     * La Poste envoi NON PRIOR (2 jours ouvrables)
     */
    public const VAL_BEFR__LA_POSTE_ENVOI_NONPRIOR = 'BEFR_LaPosteEnvoiNONPRIOR';

    /**
     * Constant for 'BEFR_LaPosteEnvoiPRIOR' value.
     *
     * La Poste envoi PRIOR (1 jour ouvrable)
     */
    public const VAL_BEFR__LA_POSTE_ENVOI_PRIOR = 'BEFR_LaPosteEnvoiPRIOR';

    /**
     * Constant for 'BEFR_LaPosteEnvoiRecommande' value.
     *
     * La Poste envoi recommande (1 jour ouvrable)
     */
    public const VAL_BEFR__LA_POSTE_ENVOI_RECOMMANDE = 'BEFR_LaPosteEnvoiRecommande';

    /**
     * Constant for 'BEFR_PaquetKilopost' value.
     *
     * Paquet Kilopost (2 jours ouvrables)
     */
    public const VAL_BEFR__PAQUET_KILOPOST = 'BEFR_PaquetKilopost';

    /**
     * Constant for 'BEFR_Taxipost' value.
     *
     * Taxipost (express)
     */
    public const VAL_BEFR__TAXIPOST = 'BEFR_Taxipost';

    /**
     * Constant for 'BEFR_PointRetraitKiala' value.
     *
     * Point retrait Kiala (1 a 4 jours ouvrables)
     */
    public const VAL_BEFR__POINT_RETRAIT_KIALA = 'BEFR_PointRetraitKiala';

    /**
     * Constant for 'BEFR_LivraisonStandardPrixforFaitaire' value.
     *
     * Livraison standard - prix forfaitaire
     */
    public const VAL_BEFR__LIVRAISON_STANDARD_PRIXFOR_FAITAIRE = 'BEFR_LivraisonStandardPrixforFaitaire';

    /**
     * Constant for 'BEFR_LivraisonExpressPrixforFaitaire' value.
     *
     * Livraison express - prix forfaitaire
     */
    public const VAL_BEFR__LIVRAISON_EXPRESS_PRIXFOR_FAITAIRE = 'BEFR_LivraisonExpressPrixforFaitaire';

    /**
     * Constant for 'BEFR_LivraisonSecurise' value.
     *
     * Livraison securisee
     */
    public const VAL_BEFR__LIVRAISON_SECURISE = 'BEFR_LivraisonSecurise';

    /**
     * Constant for 'BENL_DePostZendingPRIORInternational' value.
     *
     * De Post zending - PRIOR
     */
    public const VAL_BENL__DE_POST_ZENDING_PRIORINTERNATIONAL = 'BENL_DePostZendingPRIORInternational';

    /**
     * Constant for 'BENL_DePostZendingNONPRIORInternational' value.
     *
     * De Post zending - NON PRIOR
     */
    public const VAL_BENL__DE_POST_ZENDING_NONPRIORINTERNATIONAL = 'BENL_DePostZendingNONPRIORInternational';

    /**
     * Constant for 'BENL_DePostZendingAangetekendInternational' value.
     *
     * De Post zending - aangetekend
     */
    public const VAL_BENL__DE_POST_ZENDING_AANGETEKEND_INTERNATIONAL = 'BENL_DePostZendingAangetekendInternational';

    /**
     * Constant for 'BENL_KilopostPakjeInternational' value.
     *
     * Kilopost pakje Internationaal
     */
    public const VAL_BENL__KILOPOST_PAKJE_INTERNATIONAL = 'BENL_KilopostPakjeInternational';

    /**
     * Constant for 'BENL_TaxipostExpressverzending' value.
     *
     * Taxipost expressverzending
     */
    public const VAL_BENL__TAXIPOST_EXPRESSVERZENDING = 'BENL_TaxipostExpressverzending';

    /**
     * Constant for 'BENL_VerzekerdeVerzendingInternational' value.
     *
     * Verzekerde verzending
     */
    public const VAL_BENL__VERZEKERDE_VERZENDING_INTERNATIONAL = 'BENL_VerzekerdeVerzendingInternational';

    /**
     * Constant for 'BEFR_LaPosteenvoiePRIOR' value.
     *
     * La Poste envoie PRIOR
     */
    public const VAL_BEFR__LA_POSTEENVOIE_PRIOR = 'BEFR_LaPosteenvoiePRIOR';

    /**
     * Constant for 'BEFR_LaPosteenvoieNONPRIOR' value.
     *
     * La Poste envoie NON PRIOR
     */
    public const VAL_BEFR__LA_POSTEENVOIE_NONPRIOR = 'BEFR_LaPosteenvoieNONPRIOR';

    /**
     * Constant for 'BEFR_LaPosteenvoieRecommande' value.
     *
     * La Poste envoie recommande
     */
    public const VAL_BEFR__LA_POSTEENVOIE_RECOMMANDE = 'BEFR_LaPosteenvoieRecommande';

    /**
     * Constant for 'BEFR_PaquetKilopostInternationale' value.
     *
     * Paquet Kilopost Internationale
     */
    public const VAL_BEFR__PAQUET_KILOPOST_INTERNATIONALE = 'BEFR_PaquetKilopostInternationale';

    /**
     * Constant for 'BEFR_ExpressTaxipost' value.
     *
     * BEFR_Express Taxipost
     */
    public const VAL_BEFR__EXPRESS_TAXIPOST = 'BEFR_ExpressTaxipost';

    /**
     * Constant for 'BEFR_LivraisonStandardInternationalePrixforFaitaire' value.
     *
     * Livraison standard internationale - prix forfaitaire
     */
    public const VAL_BEFR__LIVRAISON_STANDARD_INTERNATIONALE_PRIXFOR_FAITAIRE = 'BEFR_LivraisonStandardInternationalePrixforFaitaire';

    /**
     * Constant for 'BEFR_LivraisonExpressInternationalePrixforFaitaire' value.
     *
     * Livraison express internationale - prix forfaitaire
     */
    public const VAL_BEFR__LIVRAISON_EXPRESS_INTERNATIONALE_PRIXFOR_FAITAIRE = 'BEFR_LivraisonExpressInternationalePrixforFaitaire';

    /**
     * Constant for 'BEFR_LivraisonSecuriseInternational' value.
     *
     * Livraison securisee
     */
    public const VAL_BEFR__LIVRAISON_SECURISE_INTERNATIONAL = 'BEFR_LivraisonSecuriseInternational';

    /**
     * Constant for 'FR_Chronopost' value.
     *
     * Chronopost
     */
    public const VAL_FR__CHRONOPOST = 'FR_Chronopost';

    /**
     * Constant for 'UK_RoyalMailSpecialDeliveryNextDay' value.
     *
     * Royal Mail Special Delivery; 1:00 pm
     */
    public const VAL_UK__ROYAL_MAIL_SPECIAL_DELIVERY_NEXT_DAY = 'UK_RoyalMailSpecialDeliveryNextDay';

    /**
     * Constant for 'CA_PostLightPacketInternational' value.
     *
     * Canada Post Light Packet International
     */
    public const VAL_CA__POST_LIGHT_PACKET_INTERNATIONAL = 'CA_PostLightPacketInternational';

    /**
     * Constant for 'CA_PostLightPacketUSA' value.
     *
     * Canada Post Light Packet USA
     */
    public const VAL_CA__POST_LIGHT_PACKET_USA = 'CA_PostLightPacketUSA';

    /**
     * Constant for 'PL_DHLInternational' value.
     *
     * DHL
     */
    public const VAL_PL__DHLINTERNATIONAL = 'PL_DHLInternational';

    /**
     * Constant for 'PL_InternationalRegular' value.
     *
     * Przesylka zagraniczna - zwykla
     */
    public const VAL_PL__INTERNATIONAL_REGULAR = 'PL_InternationalRegular';

    /**
     * Constant for 'PL_InternationalSpecial' value.
     *
     * Przesylka zagraniczna - priorytetowa
     */
    public const VAL_PL__INTERNATIONAL_SPECIAL = 'PL_InternationalSpecial';

    /**
     * Constant for 'PL_UPSInternational' value.
     *
     * UPS
     */
    public const VAL_PL__UPSINTERNATIONAL = 'PL_UPSInternational';

    /**
     * Constant for 'CAFR_StandardDelivery' value.
     *
     * Normes de livraison postale
     */
    public const VAL_CAFR__STANDARD_DELIVERY = 'CAFR_StandardDelivery';

    /**
     * Constant for 'CAFR_ExpeditedDelivery' value.
     *
     * Expedition acceleree
     */
    public const VAL_CAFR__EXPEDITED_DELIVERY = 'CAFR_ExpeditedDelivery';

    /**
     * Constant for 'CAFR_PostLettermail' value.
     *
     * Postes Canada, Poste-lettres
     */
    public const VAL_CAFR__POST_LETTERMAIL = 'CAFR_PostLettermail';

    /**
     * Constant for 'CAFR_PostRegularParcel' value.
     *
     * Postes Canada, Colis standard
     */
    public const VAL_CAFR__POST_REGULAR_PARCEL = 'CAFR_PostRegularParcel';

    /**
     * Constant for 'CAFR_PostExpeditedParcel' value.
     *
     * Postes Canada, Colis acceleres
     */
    public const VAL_CAFR__POST_EXPEDITED_PARCEL = 'CAFR_PostExpeditedParcel';

    /**
     * Constant for 'CAFR_PostXpresspost' value.
     *
     * Postes Canada, Xpresspost
     */
    public const VAL_CAFR__POST_XPRESSPOST = 'CAFR_PostXpresspost';

    /**
     * Constant for 'CAFR_PostPriorityCourier' value.
     *
     * Postes Canada, Messageries prioritaires
     */
    public const VAL_CAFR__POST_PRIORITY_COURIER = 'CAFR_PostPriorityCourier';

    /**
     * Constant for 'CAFR_StandardInternational' value.
     *
     * Expedition standard - International, tarif fixe
     */
    public const VAL_CAFR__STANDARD_INTERNATIONAL = 'CAFR_StandardInternational';

    /**
     * Constant for 'CAFR_ExpeditedInternational' value.
     *
     * Expedition acceleree - International, tarif fixe
     */
    public const VAL_CAFR__EXPEDITED_INTERNATIONAL = 'CAFR_ExpeditedInternational';

    /**
     * Constant for 'CAFR_OtherInternational' value.
     *
     * Autres services d'expedition internationale (voir description)
     */
    public const VAL_CAFR__OTHER_INTERNATIONAL = 'CAFR_OtherInternational';

    /**
     * Constant for 'CAFR_PostExpeditedParcelUSA' value.
     *
     * Postes Canada, Colis acceleres - E.U.
     */
    public const VAL_CAFR__POST_EXPEDITED_PARCEL_USA = 'CAFR_PostExpeditedParcelUSA';

    /**
     * Constant for 'CAFR_PostSmallPacketsUSA' value.
     *
     * Postes Canada, Petits paquets - E.U.
     */
    public const VAL_CAFR__POST_SMALL_PACKETS_USA = 'CAFR_PostSmallPacketsUSA';

    /**
     * Constant for 'CAFR_PostXpresspostUSA' value.
     *
     * Postes Canada, Xpresspost - E.U.
     */
    public const VAL_CAFR__POST_XPRESSPOST_USA = 'CAFR_PostXpresspostUSA';

    /**
     * Constant for 'CAFR_PostXpresspostInternational' value.
     *
     * Postes Canada, Xpresspost - International
     */
    public const VAL_CAFR__POST_XPRESSPOST_INTERNATIONAL = 'CAFR_PostXpresspostInternational';

    /**
     * Constant for 'CAFR_PostInternationalParcelSurface' value.
     *
     * Postes Canada, Colis international de surface
     */
    public const VAL_CAFR__POST_INTERNATIONAL_PARCEL_SURFACE = 'CAFR_PostInternationalParcelSurface';

    /**
     * Constant for 'CAFR_PostInternationalParcelAir' value.
     *
     * Postes Canada, Colis-avion - International
     */
    public const VAL_CAFR__POST_INTERNATIONAL_PARCEL_AIR = 'CAFR_PostInternationalParcelAir';

    /**
     * Constant for 'CAFR_SmallPacketsInternational' value.
     *
     * Petits paquets - International
     */
    public const VAL_CAFR__SMALL_PACKETS_INTERNATIONAL = 'CAFR_SmallPacketsInternational';

    /**
     * Constant for 'CAFR_PurolatorInternational' value.
     *
     * Purolator International
     */
    public const VAL_CAFR__PUROLATOR_INTERNATIONAL = 'CAFR_PurolatorInternational';

    /**
     * Constant for 'CAFR_PostSmallPacketsUSAGround' value.
     *
     * Postes Canada, Petits paquets - E.U. service de surface
     */
    public const VAL_CAFR__POST_SMALL_PACKETS_USAGROUND = 'CAFR_PostSmallPacketsUSAGround';

    /**
     * Constant for 'CAFR_PostSmallPacketsUSAAir' value.
     *
     * Postes Canada, Petits paquets - E.U. par avion
     */
    public const VAL_CAFR__POST_SMALL_PACKETS_USAAIR = 'CAFR_PostSmallPacketsUSAAir';

    /**
     * Constant for 'CAFR_SmallPacketsInternationalGround' value.
     *
     * Petits paquets - International, courrier-surface
     */
    public const VAL_CAFR__SMALL_PACKETS_INTERNATIONAL_GROUND = 'CAFR_SmallPacketsInternationalGround';

    /**
     * Constant for 'CAFR_SmallPacketsInternationalAir' value.
     *
     * Petits paquets - International, courrier-avion
     */
    public const VAL_CAFR__SMALL_PACKETS_INTERNATIONAL_AIR = 'CAFR_SmallPacketsInternationalAir';

    /**
     * Constant for 'CAFR_PostUSALetterPost' value.
     *
     * Postes Canada, Poste aux lettres - E.U.
     */
    public const VAL_CAFR__POST_USALETTER_POST = 'CAFR_PostUSALetterPost';

    /**
     * Constant for 'CAFR_PostInternationalLetterPost' value.
     *
     * Postes Canada, Poste aux lettres - International
     */
    public const VAL_CAFR__POST_INTERNATIONAL_LETTER_POST = 'CAFR_PostInternationalLetterPost';

    /**
     * Constant for 'CAFR_UPSExpressCanada' value.
     *
     * UPS Express Saver
     */
    public const VAL_CAFR__UPSEXPRESS_CANADA = 'CAFR_UPSExpressCanada';

    /**
     * Constant for 'CAFR_UPSExpressSaverCanada' value.
     *
     * UPS Express Saver Canada
     */
    public const VAL_CAFR__UPSEXPRESS_SAVER_CANADA = 'CAFR_UPSExpressSaverCanada';

    /**
     * Constant for 'CAFR_UPSExpeditedCanada' value.
     *
     * UPS Expedited Canada
     */
    public const VAL_CAFR__UPSEXPEDITED_CANADA = 'CAFR_UPSExpeditedCanada';

    /**
     * Constant for 'CAFR_UPSStandardCanada' value.
     *
     * UPS Standard au Canada
     */
    public const VAL_CAFR__UPSSTANDARD_CANADA = 'CAFR_UPSStandardCanada';

    /**
     * Constant for 'CAFR_UPSExpressUnitedStates' value.
     *
     * UPS Express Etats-Unis
     */
    public const VAL_CAFR__UPSEXPRESS_UNITED_STATES = 'CAFR_UPSExpressUnitedStates';

    /**
     * Constant for 'CAFR_UPSExpeditedUnitedStates' value.
     *
     * UPS Expedited Etats-Unis
     */
    public const VAL_CAFR__UPSEXPEDITED_UNITED_STATES = 'CAFR_UPSExpeditedUnitedStates';

    /**
     * Constant for 'CAFR_UPS3DaySelectUnitedStates' value.
     *
     * 3Day Select aux Etats-Unis
     */
    public const VAL_CAFR__UPS_3_DAY_SELECT_UNITED_STATES = 'CAFR_UPS3DaySelectUnitedStates';

    /**
     * Constant for 'CAFR_UPSStandardUnitedStates' value.
     *
     * UPS Standard aux Etats-Unis
     */
    public const VAL_CAFR__UPSSTANDARD_UNITED_STATES = 'CAFR_UPSStandardUnitedStates';

    /**
     * Constant for 'CAFR_UPSWorldWideExpress' value.
     *
     * UPS Worlwide Express
     */
    public const VAL_CAFR__UPSWORLD_WIDE_EXPRESS = 'CAFR_UPSWorldWideExpress';

    /**
     * Constant for 'CAFR_UPSWorldWideExpedited' value.
     *
     * UPS Worlwide Expedited
     */
    public const VAL_CAFR__UPSWORLD_WIDE_EXPEDITED = 'CAFR_UPSWorldWideExpedited';

    /**
     * Constant for 'UK_RoyalMailSpecialDelivery9am' value.
     *
     * Royal Mail Special Delivery 9:00 am
     */
    public const VAL_UK__ROYAL_MAIL_SPECIAL_DELIVERY_9_AM = 'UK_RoyalMailSpecialDelivery9am';

    /**
     * Constant for 'USPSFirstClassMailInternational' value.
     *
     * USPS First Class Mail Intl / First Class Package Intl Service
     */
    public const VAL_USPSFIRST_CLASS_MAIL_INTERNATIONAL = 'USPSFirstClassMailInternational';

    /**
     * Constant for 'USPSPriorityMailInternational' value.
     *
     * USPS Priority Mail International
     */
    public const VAL_USPSPRIORITY_MAIL_INTERNATIONAL = 'USPSPriorityMailInternational';

    /**
     * Constant for 'USPSExpressMailInternational' value.
     *
     * USPS Priority Mail Express International
     */
    public const VAL_USPSEXPRESS_MAIL_INTERNATIONAL = 'USPSExpressMailInternational';

    /**
     * Constant for 'CH_StandardInternational' value.
     *
     * Standardpauschale fur internationalen Versand
     */
    public const VAL_CH__STANDARD_INTERNATIONAL = 'CH_StandardInternational';

    /**
     * Constant for 'CH_ExpeditedInternational' value.
     *
     * Expresspauschale fur internationalen Versand
     */
    public const VAL_CH__EXPEDITED_INTERNATIONAL = 'CH_ExpeditedInternational';

    /**
     * Constant for 'CH_SonstigerVersandSieheArtikelbeschreibung' value.
     *
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     */
    public const VAL_CH__SONSTIGER_VERSAND_SIEHE_ARTIKELBESCHREIBUNG = 'CH_SonstigerVersandSieheArtikelbeschreibung';

    /**
     * Constant for 'TW_StandardInternationalFixedRate' value.
     *
     * International Standard Fixed Rate for Taiwan
     */
    public const VAL_TW__STANDARD_INTERNATIONAL_FIXED_RATE = 'TW_StandardInternationalFixedRate';

    /**
     * Constant for 'TW_ExpeditedInternationalFixedRate' value.
     *
     * International Express Fixed Rate for Taiwan
     */
    public const VAL_TW__EXPEDITED_INTERNATIONAL_FIXED_RATE = 'TW_ExpeditedInternationalFixedRate';

    /**
     * Constant for 'USPSGlobalExpressGuaranteed' value.
     *
     * USPS Global Express Guaranteed
     */
    public const VAL_USPSGLOBAL_EXPRESS_GUARANTEED = 'USPSGlobalExpressGuaranteed';

    /**
     * Constant for 'AU_RegularWithInsurance' value.
     *
     * Regular with Insurance
     */
    public const VAL_AU__REGULAR_WITH_INSURANCE = 'AU_RegularWithInsurance';

    /**
     * Constant for 'AU_ExpressWithInsurance' value.
     *
     * Express with Insurance
     */
    public const VAL_AU__EXPRESS_WITH_INSURANCE = 'AU_ExpressWithInsurance';

    /**
     * Constant for 'DE_DeutschePostWarensendungInternational' value.
     *
     * Deutsche Post Warensendung
     */
    public const VAL_DE__DEUTSCHE_POST_WARENSENDUNG_INTERNATIONAL = 'DE_DeutschePostWarensendungInternational';

    /**
     * Constant for 'DE_DeutschePostByendung' value.
     *
     * Deutsche Post Byendung
     */
    public const VAL_DE__DEUTSCHE_POST_BYENDUNG = 'DE_DeutschePostByendung';

    /**
     * Constant for 'DE_HermesPaketUnversichertInternational' value.
     *
     * Hermes Paket (unversichert)
     */
    public const VAL_DE__HERMES_PAKET_UNVERSICHERT_INTERNATIONAL = 'DE_HermesPaketUnversichertInternational';

    /**
     * Constant for 'DE_HermesPaketVersichertInternational' value.
     *
     * Hermes Paket (versichert)
     */
    public const VAL_DE__HERMES_PAKET_VERSICHERT_INTERNATIONAL = 'DE_HermesPaketVersichertInternational';

    /**
     * Constant for 'DE_iLoxxTransportXXLInternational' value.
     *
     * iloxx Transport XXL
     */
    public const VAL_DE__I_LOXX_TRANSPORT_XXLINTERNATIONAL = 'DE_iLoxxTransportXXLInternational';

    /**
     * Constant for 'DE_iLoxxUbernachtExpressInternational' value.
     *
     * iloxx Ubernacht Express
     */
    public const VAL_DE__I_LOXX_UBERNACHT_EXPRESS_INTERNATIONAL = 'DE_iLoxxUbernachtExpressInternational';

    /**
     * Constant for 'DE_iLoxxStandardInternational' value.
     *
     * iloxx Standard
     */
    public const VAL_DE__I_LOXX_STANDARD_INTERNATIONAL = 'DE_iLoxxStandardInternational';

    /**
     * Constant for 'DE_StandardInternational' value.
     *
     * Standardpauschale fur internationalen Versand
     */
    public const VAL_DE__STANDARD_INTERNATIONAL = 'DE_StandardInternational';

    /**
     * Constant for 'DE_ExpeditedInternational' value.
     *
     * Expresspauschale fur internationalen Versand
     */
    public const VAL_DE__EXPEDITED_INTERNATIONAL = 'DE_ExpeditedInternational';

    /**
     * Constant for 'DE_DeutschePostBriefIntlEcon' value.
     *
     * Deutsche Post Presse & Bucher Economy
     */
    public const VAL_DE__DEUTSCHE_POST_BRIEF_INTL_ECON = 'DE_DeutschePostBriefIntlEcon';

    /**
     * Constant for 'DE_DeutschePostBriefIntlPri' value.
     *
     * Deutsche Post Presse & Bucher Priority
     */
    public const VAL_DE__DEUTSCHE_POST_BRIEF_INTL_PRI = 'DE_DeutschePostBriefIntlPri';

    /**
     * Constant for 'AT_BitteTreffenSieEineAuswahl' value.
     *
     * AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     */
    public const VAL_AT__BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'AT_BitteTreffenSieEineAuswahl';

    /**
     * Constant for 'AT_EinschreibenVersandInklEinschreibengebuhr' value.
     *
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     */
    public const VAL_AT__EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'AT_EinschreibenVersandInklEinschreibengebuhr';

    /**
     * Constant for 'AT_NachnahmeVersandInklNachnahmegebuhr' value.
     *
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     */
    public const VAL_AT__NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'AT_NachnahmeVersandInklNachnahmegebuhr';

    /**
     * Constant for 'AT_ExpressOrCourierInternational' value.
     *
     * Express- oder Kurierversand
     */
    public const VAL_AT__EXPRESS_OR_COURIER_INTERNATIONAL = 'AT_ExpressOrCourierInternational';

    /**
     * Constant for 'AT_InsuredExpressOrCourierInternational' value.
     *
     * Versicherter Express- oder Kurierversand
     */
    public const VAL_AT__INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'AT_InsuredExpressOrCourierInternational';

    /**
     * Constant for 'AT_SpecialDispatchInternational' value.
     *
     * Sonderversand (z.B. Sperrgut, KFZ)
     */
    public const VAL_AT__SPECIAL_DISPATCH_INTERNATIONAL = 'AT_SpecialDispatchInternational';

    /**
     * Constant for 'AT_InsuredSpecialDispatchInternational' value.
     *
     * Versicherter Sonderversand (z.B. Sperrgut, KFZ)
     */
    public const VAL_AT__INSURED_SPECIAL_DISPATCH_INTERNATIONAL = 'AT_InsuredSpecialDispatchInternational';

    /**
     * Constant for 'AT_StandardInternational' value.
     *
     * Standardpauschale fur internationalen Versand
     */
    public const VAL_AT__STANDARD_INTERNATIONAL = 'AT_StandardInternational';

    /**
     * Constant for 'AT_ExpeditedInternational' value.
     *
     * Expresspauschale fur internationalen Versand
     */
    public const VAL_AT__EXPEDITED_INTERNATIONAL = 'AT_ExpeditedInternational';

    /**
     * Constant for 'AT_OtherInternationalShipping' value.
     *
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     */
    public const VAL_AT__OTHER_INTERNATIONAL_SHIPPING = 'AT_OtherInternationalShipping';

    /**
     * Constant for 'CH_BitteTreffenSieEineAuswahl' value.
     *
     * CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     */
    public const VAL_CH__BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'CH_BitteTreffenSieEineAuswahl';

    /**
     * Constant for 'CH_UnversicherterVersand' value.
     *
     * Unversicherter Versand
     */
    public const VAL_CH__UNVERSICHERTER_VERSAND = 'CH_UnversicherterVersand';

    /**
     * Constant for 'CH_VersicherterVersand' value.
     *
     * Versicherter Versand
     */
    public const VAL_CH__VERSICHERTER_VERSAND = 'CH_VersicherterVersand';

    /**
     * Constant for 'CH_EinschreibenVersandInklEinschreibengebuhr' value.
     *
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     */
    public const VAL_CH__EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'CH_EinschreibenVersandInklEinschreibengebuhr';

    /**
     * Constant for 'CH_NachnahmeVersandInklNachnahmegebuhr' value.
     *
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     */
    public const VAL_CH__NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'CH_NachnahmeVersandInklNachnahmegebuhr';

    /**
     * Constant for 'CH_ExpressOrCourierInternational' value.
     *
     * Express- oder Kurierversand
     */
    public const VAL_CH__EXPRESS_OR_COURIER_INTERNATIONAL = 'CH_ExpressOrCourierInternational';

    /**
     * Constant for 'CH_InsuredExpressOrCourierInternational' value.
     *
     * Versicherter Express- oder Kurierversand
     */
    public const VAL_CH__INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'CH_InsuredExpressOrCourierInternational';

    /**
     * Constant for 'CH_SonderversandZBSperrgutKFZ' value.
     *
     * Sonderversand (z.B. Sperrgut, KFZ)
     */
    public const VAL_CH__SONDERVERSAND_ZBSPERRGUT_KFZ = 'CH_SonderversandZBSperrgutKFZ';

    /**
     * Constant for 'CH_VersicherterSonderversandZBSperrgutKFZ' value.
     *
     * Versicherter Sonderversand (z.B. Sperrgut, KFZ)
     */
    public const VAL_CH__VERSICHERTER_SONDERVERSAND_ZBSPERRGUT_KFZ = 'CH_VersicherterSonderversandZBSperrgutKFZ';

    /**
     * Constant for 'CH_StandardversandAPostPriority' value.
     *
     * Standardversand (A-Post/Priority)
     */
    public const VAL_CH__STANDARDVERSAND_APOST_PRIORITY = 'CH_StandardversandAPostPriority';

    /**
     * Constant for 'CH_StandardversandBPostEconomy' value.
     *
     * Standardversand (B-Post/Economy)
     */
    public const VAL_CH__STANDARDVERSAND_BPOST_ECONOMY = 'CH_StandardversandBPostEconomy';

    /**
     * Constant for 'DE_BitteTreffenSieEineAuswahl' value.
     *
     * DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     */
    public const VAL_DE__BITTE_TREFFEN_SIE_EINE_AUSWAHL = 'DE_BitteTreffenSieEineAuswahl';

    /**
     * Constant for 'DE_EinschreibenVersandInklEinschreibengebuhr' value.
     *
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     */
    public const VAL_DE__EINSCHREIBEN_VERSAND_INKL_EINSCHREIBENGEBUHR = 'DE_EinschreibenVersandInklEinschreibengebuhr';

    /**
     * Constant for 'DE_NachnahmeVersandInklNachnahmegebuhr' value.
     *
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     */
    public const VAL_DE__NACHNAHME_VERSAND_INKL_NACHNAHMEGEBUHR = 'DE_NachnahmeVersandInklNachnahmegebuhr';

    /**
     * Constant for 'DE_ExpressOrCourierInternational' value.
     *
     * Express- oder Kurierversand
     */
    public const VAL_DE__EXPRESS_OR_COURIER_INTERNATIONAL = 'DE_ExpressOrCourierInternational';

    /**
     * Constant for 'DE_InsuredExpressOrCourierInternational' value.
     *
     * Versicherter Express- oder Kurierversand
     */
    public const VAL_DE__INSURED_EXPRESS_OR_COURIER_INTERNATIONAL = 'DE_InsuredExpressOrCourierInternational';

    /**
     * Constant for 'DE_SonderversandZBMobelKFZ' value.
     *
     * Sonderversand (z.B. Mobel, KFZ)
     */
    public const VAL_DE__SONDERVERSAND_ZBMOBEL_KFZ = 'DE_SonderversandZBMobelKFZ';

    /**
     * Constant for 'DE_VersicherterSonderversandZBMobelKFZ' value.
     *
     * Versicherter Sonderversand (z.B. Mobel, KFZ)
     */
    public const VAL_DE__VERSICHERTER_SONDERVERSAND_ZBMOBEL_KFZ = 'DE_VersicherterSonderversandZBMobelKFZ';

    /**
     * Constant for 'DE_DeutschePostBriefInternational' value.
     *
     * Deutsche Post Brief
     */
    public const VAL_DE__DEUTSCHE_POST_BRIEF_INTERNATIONAL = 'DE_DeutschePostBriefInternational';

    /**
     * Constant for 'IE_StandardInternationalFlatRatePostage' value.
     *
     * Standard Int'l Flat Rate Postage
     */
    public const VAL_IE__STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE = 'IE_StandardInternationalFlatRatePostage';

    /**
     * Constant for 'IE_ExpeditedInternationalFlatRatePostage' value.
     *
     * Expedited Int'l Flat Rate Postage
     */
    public const VAL_IE__EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE = 'IE_ExpeditedInternationalFlatRatePostage';

    /**
     * Constant for 'IE_OtherInternationalPostage' value.
     *
     * Other Int'l Postage (see description)
     */
    public const VAL_IE__OTHER_INTERNATIONAL_POSTAGE = 'IE_OtherInternationalPostage';

    /**
     * Constant for 'UK_StandardInternationalFlatRatePostage' value.
     *
     * Standard Int'l Flat Rate Postage
     */
    public const VAL_UK__STANDARD_INTERNATIONAL_FLAT_RATE_POSTAGE = 'UK_StandardInternationalFlatRatePostage';

    /**
     * Constant for 'UK_ExpeditedInternationalFlatRatePostage' value.
     *
     * Expedited Int'l Flat Rate Postage
     */
    public const VAL_UK__EXPEDITED_INTERNATIONAL_FLAT_RATE_POSTAGE = 'UK_ExpeditedInternationalFlatRatePostage';

    /**
     * Constant for 'UK_OtherInternationalPostage' value.
     *
     * Other Int'l Postage (see description)
     */
    public const VAL_UK__OTHER_INTERNATIONAL_POSTAGE = 'UK_OtherInternationalPostage';

    /**
     * Constant for 'FR_ChronopostChronoRelais' value.
     *
     * Chronopost - Chrono Relais
     */
    public const VAL_FR__CHRONOPOST_CHRONO_RELAIS = 'FR_ChronopostChronoRelais';

    /**
     * Constant for 'FR_Chrono10' value.
     *
     * Chrono 10
     */
    public const VAL_FR__CHRONO_10 = 'FR_Chrono10';

    /**
     * Constant for 'FR_Chrono13' value.
     *
     * Chrono 13
     */
    public const VAL_FR__CHRONO_13 = 'FR_Chrono13';

    /**
     * Constant for 'FR_Chrono18' value.
     *
     * Chrono 18
     */
    public const VAL_FR__CHRONO_18 = 'FR_Chrono18';

    /**
     * Constant for 'FR_ChronopostExpressInternational' value.
     *
     * Chronopost Express International
     */
    public const VAL_FR__CHRONOPOST_EXPRESS_INTERNATIONAL = 'FR_ChronopostExpressInternational';

    /**
     * Constant for 'Pickup' value.
     *
     * PickUp Only Service
     */
    public const VAL_PICKUP = 'Pickup';

    /**
     * Constant for 'Delivery' value.
     *
     * Delivery
     */
    public const VAL_DELIVERY = 'Delivery';

    /**
     * Constant for 'CA_Pickup' value.
     *
     * Pickup Only Service
     */
    public const VAL_CA__PICKUP = 'CA_Pickup';

    /**
     * Constant for 'DE_Pickup' value.
     *
     * Abholung
     */
    public const VAL_DE__PICKUP = 'DE_Pickup';

    /**
     * Constant for 'AU_Pickup' value.
     *
     * Pickup
     */
    public const VAL_AU__PICKUP = 'AU_Pickup';

    /**
     * Constant for 'AU_SmallParcels' value.
     *
     * Small Parcels
     */
    public const VAL_AU__SMALL_PARCELS = 'AU_SmallParcels';

    /**
     * Constant for 'AU_SmallParcelWithTracking' value.
     *
     * Small Parcel With Tracking
     */
    public const VAL_AU__SMALL_PARCEL_WITH_TRACKING = 'AU_SmallParcelWithTracking';

    /**
     * Constant for 'AU_SmallParcelWithTrackingAndSignature' value.
     *
     * Small Parcel With Tracking And Signature
     */
    public const VAL_AU__SMALL_PARCEL_WITH_TRACKING_AND_SIGNATURE = 'AU_SmallParcelWithTrackingAndSignature';

    /**
     * Constant for 'AU_RegularParcelWithTracking' value.
     *
     * Regular Parcel With Tracking
     */
    public const VAL_AU__REGULAR_PARCEL_WITH_TRACKING = 'AU_RegularParcelWithTracking';

    /**
     * Constant for 'AU_RegularParcelWithTrackingAndSignature' value.
     *
     * Regular Parcel With Tracking And Signature
     */
    public const VAL_AU__REGULAR_PARCEL_WITH_TRACKING_AND_SIGNATURE = 'AU_RegularParcelWithTrackingAndSignature';

    /**
     * Constant for 'AU_PrePaidExpressPostSatchel5kg' value.
     *
     * PrePaid Express Post Satchel 5kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_SATCHEL_5_KG = 'AU_PrePaidExpressPostSatchel5kg';

    /**
     * Constant for 'AU_PrePaidParcelPostSatchels500g' value.
     *
     * PrePaid Parcel Post Satchels 500g
     */
    public const VAL_AU__PRE_PAID_PARCEL_POST_SATCHELS_500_G = 'AU_PrePaidParcelPostSatchels500g';

    /**
     * Constant for 'AU_PrePaidParcelPostSatchels3kg' value.
     *
     * PrePaid Parcel Post Satchels 3kg
     */
    public const VAL_AU__PRE_PAID_PARCEL_POST_SATCHELS_3_KG = 'AU_PrePaidParcelPostSatchels3kg';

    /**
     * Constant for 'AU_PrePaidParcelPostSatchels5kg' value.
     *
     * PrePaid Parcel Post Satchels 5kg
     */
    public const VAL_AU__PRE_PAID_PARCEL_POST_SATCHELS_5_KG = 'AU_PrePaidParcelPostSatchels5kg';

    /**
     * Constant for 'AU_PrePaidExpressPostSatchel500g' value.
     *
     * PrePaid Express Post Satchel 500g
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_SATCHEL_500_G = 'AU_PrePaidExpressPostSatchel500g';

    /**
     * Constant for 'AU_PrePaidExpressPostSatchel3kg' value.
     *
     * PrePaid Express Post Satchel 3kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_SATCHEL_3_KG = 'AU_PrePaidExpressPostSatchel3kg';

    /**
     * Constant for 'AU_PrePaidExpressPostPlatinum500g' value.
     *
     * PrePaid Express Post Platinum 500g
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_PLATINUM_500_G = 'AU_PrePaidExpressPostPlatinum500g';

    /**
     * Constant for 'AU_PrePaidExpressPostPlatinum3kg' value.
     *
     * PrePaid Express Post Platinum 3kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_PLATINUM_3_KG = 'AU_PrePaidExpressPostPlatinum3kg';

    /**
     * Constant for 'AU_ExpressCourierInternational' value.
     *
     * Express Courier International
     */
    public const VAL_AU__EXPRESS_COURIER_INTERNATIONAL = 'AU_ExpressCourierInternational';

    /**
     * Constant for 'AU_ExpressPostInternational' value.
     *
     * Express Post International
     */
    public const VAL_AU__EXPRESS_POST_INTERNATIONAL = 'AU_ExpressPostInternational';

    /**
     * Constant for 'AU_PrePaidExpressPostInternationalEnvelopeC5' value.
     *
     * PrePaid Express Post International Envelope C5
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_C_5 = 'AU_PrePaidExpressPostInternationalEnvelopeC5';

    /**
     * Constant for 'AU_PrePaidExpressPostInternationalEnvelopeB4' value.
     *
     * PrePaid Express Post International Envelope B4
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_INTERNATIONAL_ENVELOPE_B_4 = 'AU_PrePaidExpressPostInternationalEnvelopeB4';

    /**
     * Constant for 'AU_PrePaidExpressPostInternationalSatchels2kg' value.
     *
     * PrePaid Express Post International Satchels 2kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_2_KG = 'AU_PrePaidExpressPostInternationalSatchels2kg';

    /**
     * Constant for 'AU_PrePaidExpressPostInternationalSatchels3kg' value.
     *
     * PrePaid Express Post International Satchels 3kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_INTERNATIONAL_SATCHELS_3_KG = 'AU_PrePaidExpressPostInternationalSatchels3kg';

    /**
     * Constant for 'AU_PrePaidExpressPostInternationalBox5kg' value.
     *
     * PrePaid Express Post International Box 5kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_5_KG = 'AU_PrePaidExpressPostInternationalBox5kg';

    /**
     * Constant for 'AU_PrePaidExpressPostInternationalBox10kg' value.
     *
     * PrePaid Express Post International Box 10kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_10_KG = 'AU_PrePaidExpressPostInternationalBox10kg';

    /**
     * Constant for 'AU_PrePaidExpressPostInternationalBox20kg' value.
     *
     * PrePaid Express Post International Box 20kg
     */
    public const VAL_AU__PRE_PAID_EXPRESS_POST_INTERNATIONAL_BOX_20_KG = 'AU_PrePaidExpressPostInternationalBox20kg';

    /**
     * Constant for 'AU_RegisteredParcelPost' value.
     *
     * Registered Parcel Post
     */
    public const VAL_AU__REGISTERED_PARCEL_POST = 'AU_RegisteredParcelPost';

    /**
     * Constant for 'AU_RegisteredSmallParcel' value.
     *
     * Registered Small Parcel
     */
    public const VAL_AU__REGISTERED_SMALL_PARCEL = 'AU_RegisteredSmallParcel';

    /**
     * Constant for 'AU_RegisteredParcelPostPrepaidSatchel500g' value.
     *
     * Registered Parcel Post Prepaid Satchel 500g
     */
    public const VAL_AU__REGISTERED_PARCEL_POST_PREPAID_SATCHEL_500_G = 'AU_RegisteredParcelPostPrepaidSatchel500g';

    /**
     * Constant for 'AU_RegisteredParcelPostPrepaidSatchel3kg' value.
     *
     * Registered Parcel Post Prepaid Satchel 3kg
     */
    public const VAL_AU__REGISTERED_PARCEL_POST_PREPAID_SATCHEL_3_KG = 'AU_RegisteredParcelPostPrepaidSatchel3kg';

    /**
     * Constant for 'AU_RegisteredParcelPostPrepaidSatchel5kg' value.
     *
     * Registered Parcel Post Prepaid Satchel 5kg
     */
    public const VAL_AU__REGISTERED_PARCEL_POST_PREPAID_SATCHEL_5_KG = 'AU_RegisteredParcelPostPrepaidSatchel5kg';

    /**
     * Constant for 'AU_ExpressPostSatchel500g' value.
     *
     * eBay Australia Post Express Post 500g Satchel
     */
    public const VAL_AU__EXPRESS_POST_SATCHEL_500_G = 'AU_ExpressPostSatchel500g';

    /**
     * Constant for 'AU_ExpressPostSatchel3kg' value.
     *
     * eBay Australia Post Express Post 3kg Satchel
     */
    public const VAL_AU__EXPRESS_POST_SATCHEL_3_KG = 'AU_ExpressPostSatchel3kg';

    /**
     * Constant for 'FR_Pickup' value.
     *
     * Enlevement
     */
    public const VAL_FR__PICKUP = 'FR_Pickup';

    /**
     * Constant for 'AT_Pickup' value.
     *
     * Pickup
     */
    public const VAL_AT__PICKUP = 'AT_Pickup';

    /**
     * Constant for 'BENL_Pickup' value.
     *
     * Afhalen
     */
    public const VAL_BENL__PICKUP = 'BENL_Pickup';

    /**
     * Constant for 'BEFR_Pickup' value.
     *
     * Pickup
     */
    public const VAL_BEFR__PICKUP = 'BEFR_Pickup';

    /**
     * Constant for 'CH_Pickup' value.
     *
     * Pickup
     */
    public const VAL_CH__PICKUP = 'CH_Pickup';

    /**
     * Constant for 'IT_Pickup' value.
     *
     * Pickup
     */
    public const VAL_IT__PICKUP = 'IT_Pickup';

    /**
     * Constant for 'NL_Pickup' value.
     *
     * Pickup
     */
    public const VAL_NL__PICKUP = 'NL_Pickup';

    /**
     * Constant for 'PL_Pickup' value.
     *
     * Pickup
     */
    public const VAL_PL__PICKUP = 'PL_Pickup';

    /**
     * Constant for 'ES_Pickup' value.
     *
     * Pickup
     */
    public const VAL_ES__PICKUP = 'ES_Pickup';

    /**
     * Constant for 'SG_Delivery' value.
     *
     * Pickup
     */
    public const VAL_SG__DELIVERY = 'SG_Delivery';

    /**
     * Constant for 'UK_OtherCourier24' value.
     *
     * Other 24 Hour Courier
     */
    public const VAL_UK__OTHER_COURIER_24 = 'UK_OtherCourier24';

    /**
     * Constant for 'UK_OtherCourier48' value.
     *
     * Other 48 Hour Courier
     */
    public const VAL_UK__OTHER_COURIER_48 = 'UK_OtherCourier48';

    /**
     * Constant for 'UK_OtherCourier3Days' value.
     *
     * Other Courier 3 days
     */
    public const VAL_UK__OTHER_COURIER_3_DAYS = 'UK_OtherCourier3Days';

    /**
     * Constant for 'UK_OtherCourier5Days' value.
     *
     * Other Courier 5 days
     */
    public const VAL_UK__OTHER_COURIER_5_DAYS = 'UK_OtherCourier5Days';

    /**
     * Constant for 'Courier' value.
     *
     * Courier Shipping
     */
    public const VAL_COURIER = 'Courier';

    /**
     * Constant for 'FedExPriorityOvernight' value.
     *
     * FedEx Priority Overnight
     */
    public const VAL_FED_EX_PRIORITY_OVERNIGHT = 'FedExPriorityOvernight';

    /**
     * Constant for 'FedExStandardOvernight' value.
     *
     * FedEx Standard Overnight
     */
    public const VAL_FED_EX_STANDARD_OVERNIGHT = 'FedExStandardOvernight';

    /**
     * Constant for 'FedEx2Day' value.
     *
     * FedEx 2Day
     */
    public const VAL_FED_EX_2_DAY = 'FedEx2Day';

    /**
     * Constant for 'FedExGround' value.
     *
     * FedEx Ground
     */
    public const VAL_FED_EX_GROUND = 'FedExGround';

    /**
     * Constant for 'FedExHomeDelivery' value.
     *
     * FedEx Home Delivery
     */
    public const VAL_FED_EX_HOME_DELIVERY = 'FedExHomeDelivery';

    /**
     * Constant for 'FedExExpressSaver' value.
     *
     * FedEx Express Saver
     */
    public const VAL_FED_EX_EXPRESS_SAVER = 'FedExExpressSaver';

    /**
     * Constant for 'FedExGroundDisabled' value.
     *
     * Reserved for internal or future use
     */
    public const VAL_FED_EX_GROUND_DISABLED = 'FedExGroundDisabled';

    /**
     * Constant for 'FedExHomeDeliveryDisabled' value.
     *
     * Reserved for internal or future use
     */
    public const VAL_FED_EX_HOME_DELIVERY_DISABLED = 'FedExHomeDeliveryDisabled';

    /**
     * Constant for 'FedExInternationalFirst' value.
     *
     * FedEx International First
     */
    public const VAL_FED_EX_INTERNATIONAL_FIRST = 'FedExInternationalFirst';

    /**
     * Constant for 'FedExInternationalPriority' value.
     *
     * FedEx International Priority
     */
    public const VAL_FED_EX_INTERNATIONAL_PRIORITY = 'FedExInternationalPriority';

    /**
     * Constant for 'FedExInternationalEconomy' value.
     *
     * FedEx International Economy
     */
    public const VAL_FED_EX_INTERNATIONAL_ECONOMY = 'FedExInternationalEconomy';

    /**
     * Constant for 'FedExInternationalGround' value.
     *
     * FedEx International Ground
     */
    public const VAL_FED_EX_INTERNATIONAL_GROUND = 'FedExInternationalGround';

    /**
     * Constant for 'EconomyShippingFromOutsideUS' value.
     *
     * Economy shipping from outside US
     */
    public const VAL_ECONOMY_SHIPPING_FROM_OUTSIDE_US = 'EconomyShippingFromOutsideUS';

    /**
     * Constant for 'ExpeditedShippingFromOutsideUS' value.
     *
     * Expedited shipping from outside US
     */
    public const VAL_EXPEDITED_SHIPPING_FROM_OUTSIDE_US = 'ExpeditedShippingFromOutsideUS';

    /**
     * Constant for 'StandardShippingFromOutsideUS' value.
     *
     * Standard shipping from outside US
     */
    public const VAL_STANDARD_SHIPPING_FROM_OUTSIDE_US = 'StandardShippingFromOutsideUS';

    /**
     * Constant for 'UK_EconomyShippingFromOutside' value.
     *
     * Economy postage from outside UK
     */
    public const VAL_UK__ECONOMY_SHIPPING_FROM_OUTSIDE = 'UK_EconomyShippingFromOutside';

    /**
     * Constant for 'UK_ExpeditedShippingFromOutside' value.
     *
     * Express postage from outside UK
     */
    public const VAL_UK__EXPEDITED_SHIPPING_FROM_OUTSIDE = 'UK_ExpeditedShippingFromOutside';

    /**
     * Constant for 'UK_StandardShippingFromOutside' value.
     *
     * Standard postage from outside UK
     */
    public const VAL_UK__STANDARD_SHIPPING_FROM_OUTSIDE = 'UK_StandardShippingFromOutside';

    /**
     * Constant for 'DE_SparversandAusDemAusland' value.
     *
     * Economy postage from outside DE
     */
    public const VAL_DE__SPARVERSAND_AUS_DEM_AUSLAND = 'DE_SparversandAusDemAusland';

    /**
     * Constant for 'DE_StandardversandAusDemAusland' value.
     *
     * Standard postage from outside DE
     */
    public const VAL_DE__STANDARDVERSAND_AUS_DEM_AUSLAND = 'DE_StandardversandAusDemAusland';

    /**
     * Constant for 'DE_ExpressversandAusDemAusland' value.
     *
     * Express postage from outside DE
     */
    public const VAL_DE__EXPRESSVERSAND_AUS_DEM_AUSLAND = 'DE_ExpressversandAusDemAusland';

    /**
     * Constant for 'DE_DHL2KGPaket' value.
     *
     * DHL 2kg Paket (nur fuer kurze Zeit)
     */
    public const VAL_DE__DHL_2_KGPAKET = 'DE_DHL2KGPaket';

    /**
     * Constant for 'InternationalPriorityShipping' value.
     *
     * Global Shipping Program
     *  <br/>
     *  This shipping service must be selected for the international leg of the
     * shipment.
     */
    public const VAL_INTERNATIONAL_PRIORITY_SHIPPING = 'InternationalPriorityShipping';

    /**
     * Constant for 'SameDayShipping' value.
     *
     * Reserved for future use.
     */
    public const VAL_SAME_DAY_SHIPPING = 'SameDayShipping';

    /**
     * Constant for 'UK_RoyalMailNextDay' value.
     *
     * Royal Mail Tracked 24
     */
    public const VAL_UK__ROYAL_MAIL_NEXT_DAY = 'UK_RoyalMailNextDay';

    /**
     * Constant for 'UK_RoyalMailTracked' value.
     *
     * Royal Mail Tracked 48
     */
    public const VAL_UK__ROYAL_MAIL_TRACKED = 'UK_RoyalMailTracked';

    /**
     * Constant for 'eBayNowImmediateDelivery' value.
     *
     * This value indicates that the order will be delivered by an eBay On Demand valet
     * through the eBay On Demand Delivery program.
     */
    public const VAL_E_BAY_NOW_IMMEDIATE_DELIVERY = 'eBayNowImmediateDelivery';

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
