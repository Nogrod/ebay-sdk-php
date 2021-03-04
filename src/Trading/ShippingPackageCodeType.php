<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShippingPackageCodeType
 *
 * The nature of the package used to ship the item(s).
 *  Required for calculated shipping only. Not all package types
 *  are supported by a specific shipping service (ShippingServiceCodeType).
 * XSD Type: ShippingPackageCodeType
 */
class ShippingPackageCodeType
{
    /**
     * Constant for 'None' value.
     *
     * None
     */
    public const VAL_NONE = 'None';

    /**
     * Constant for 'Letter' value.
     *
     * Letter
     */
    public const VAL_LETTER = 'Letter';

    /**
     * Constant for 'LargeEnvelope' value.
     *
     * LargeEnvelope
     */
    public const VAL_LARGE_ENVELOPE = 'LargeEnvelope';

    /**
     * Constant for 'USPSLargePack' value.
     *
     * USPS Large Package/Oversize 1
     */
    public const VAL_USPSLARGE_PACK = 'USPSLargePack';

    /**
     * Constant for 'VeryLargePack' value.
     *
     * Very Large Package/Oversize 2
     */
    public const VAL_VERY_LARGE_PACK = 'VeryLargePack';

    /**
     * Constant for 'ExtraLargePack' value.
     *
     * Extra Large Package/Oversize 3
     */
    public const VAL_EXTRA_LARGE_PACK = 'ExtraLargePack';

    /**
     * Constant for 'UPSLetter' value.
     *
     * UPS Letter
     */
    public const VAL_UPSLETTER = 'UPSLetter';

    /**
     * Constant for 'USPSFlatRateEnvelope' value.
     *
     * USPS Flat Rate Envelope
     */
    public const VAL_USPSFLAT_RATE_ENVELOPE = 'USPSFlatRateEnvelope';

    /**
     * Constant for 'PackageThickEnvelope' value.
     *
     * Package/thick envelope
     */
    public const VAL_PACKAGE_THICK_ENVELOPE = 'PackageThickEnvelope';

    /**
     * Constant for 'Roll' value.
     *
     * Roll
     */
    public const VAL_ROLL = 'Roll';

    /**
     * Constant for 'Europallet' value.
     *
     * Europallet
     */
    public const VAL_EUROPALLET = 'Europallet';

    /**
     * Constant for 'OneWayPallet' value.
     *
     * Onewaypallet
     */
    public const VAL_ONE_WAY_PALLET = 'OneWayPallet';

    /**
     * Constant for 'BulkyGoods' value.
     *
     * Bulky goods
     */
    public const VAL_BULKY_GOODS = 'BulkyGoods';

    /**
     * Constant for 'Furniture' value.
     *
     * Furniture
     */
    public const VAL_FURNITURE = 'Furniture';

    /**
     * Constant for 'Cars' value.
     *
     * Cars
     */
    public const VAL_CARS = 'Cars';

    /**
     * Constant for 'Motorbikes' value.
     *
     * Motorbikes
     */
    public const VAL_MOTORBIKES = 'Motorbikes';

    /**
     * Constant for 'Caravan' value.
     *
     * Caravan
     */
    public const VAL_CARAVAN = 'Caravan';

    /**
     * Constant for 'IndustryVehicles' value.
     *
     * Industry vehicles
     */
    public const VAL_INDUSTRY_VEHICLES = 'IndustryVehicles';

    /**
     * Constant for 'ParcelOrPaddedEnvelope' value.
     *
     * Parcel or padded Envelope
     */
    public const VAL_PARCEL_OR_PADDED_ENVELOPE = 'ParcelOrPaddedEnvelope';

    /**
     * Constant for 'SmallCanadaPostBox' value.
     *
     * Small Canada Post Box
     */
    public const VAL_SMALL_CANADA_POST_BOX = 'SmallCanadaPostBox';

    /**
     * Constant for 'MediumCanadaPostBox' value.
     *
     * Medium Canada Post Box
     */
    public const VAL_MEDIUM_CANADA_POST_BOX = 'MediumCanadaPostBox';

    /**
     * Constant for 'LargeCanadaPostBox' value.
     *
     * Large Canada Post Box
     */
    public const VAL_LARGE_CANADA_POST_BOX = 'LargeCanadaPostBox';

    /**
     * Constant for 'SmallCanadaPostBubbleMailer' value.
     *
     * Small Canada Post Bubble Mailer
     */
    public const VAL_SMALL_CANADA_POST_BUBBLE_MAILER = 'SmallCanadaPostBubbleMailer';

    /**
     * Constant for 'MediumCanadaPostBubbleMailer' value.
     *
     * Medium Canada Post Bubble Mailer
     */
    public const VAL_MEDIUM_CANADA_POST_BUBBLE_MAILER = 'MediumCanadaPostBubbleMailer';

    /**
     * Constant for 'LargeCanadaPostBubbleMailer' value.
     *
     * Large Canada Post Bubble Mailer
     */
    public const VAL_LARGE_CANADA_POST_BUBBLE_MAILER = 'LargeCanadaPostBubbleMailer';

    /**
     * Constant for 'PaddedBags' value.
     *
     * Padded Bags
     */
    public const VAL_PADDED_BAGS = 'PaddedBags';

    /**
     * Constant for 'ToughBags' value.
     *
     * Tough Bags
     */
    public const VAL_TOUGH_BAGS = 'ToughBags';

    /**
     * Constant for 'ExpandableToughBags' value.
     *
     * Expandable Tough Bags
     */
    public const VAL_EXPANDABLE_TOUGH_BAGS = 'ExpandableToughBags';

    /**
     * Constant for 'MailingBoxes' value.
     *
     * Mailing Boxes
     */
    public const VAL_MAILING_BOXES = 'MailingBoxes';

    /**
     * Constant for 'Winepak' value.
     *
     * Winepak
     */
    public const VAL_WINEPAK = 'Winepak';

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
