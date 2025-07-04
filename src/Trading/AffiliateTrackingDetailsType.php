<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AffiliateTrackingDetailsType
 *
 * Type used by the <b>AffiliateTrackingDetails</b> container, which is included in the <b>PlaceOffer</b> call to pass in eBay Partner Network affiliate-related data, so affiliates can earn commissions based on user activity and the number of calls made by the user's application.
 * XSD Type: AffiliateTrackingDetailsType
 */
class AffiliateTrackingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  The value you specify in this field is obtained from your tracking partner.
     *  For the eBay Partner Network, the <b>TrackingID</b> is the Campaign ID ("campid")
     *  provided by the eBay Partner Network. A Campaign ID is a 10-digit, unique
     *  number for associating traffic. A Campaign ID is valid across all
     *  programs to which you have been accepted.
     *
     * @var string $trackingID
     */
    private $trackingID = null;

    /**
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  Specifies your tracking partner for affiliate commissions.
     *  Depending on your tracking partner, specify one of the
     *  following values. Not all partners are valid for all sites.
     *  For <b>PlaceOffer</b>, only eBay Partner Network is valid:
     *  <br>
     *  <br>9 = eBay Partner Network
     *  <br>
     *  <br>
     *  For information about the eBay Partner Network, see
     *  <a href="https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>.
     *
     * @var string $trackingPartnerCode
     */
    private $trackingPartnerCode = null;

    /**
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  Type of device or platform from which the call originated.
     *
     * @var string $applicationDeviceType
     */
    private $applicationDeviceType = null;

    /**
     * This field is not required, but an affiliate may want to use this identifier to better monitor marketing efforts. If you are using the eBay Partner Network, and you provide an <b>AffiliateUserID</b>, the tracking URL returned by eBay Partner Network will contain the <b>AffiliateUserID</b>, but it will be referred to as a "customid".
     *
     * @var string $affiliateUserID
     */
    private $affiliateUserID = null;

    /**
     * Gets as trackingID
     *
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  The value you specify in this field is obtained from your tracking partner.
     *  For the eBay Partner Network, the <b>TrackingID</b> is the Campaign ID ("campid")
     *  provided by the eBay Partner Network. A Campaign ID is a 10-digit, unique
     *  number for associating traffic. A Campaign ID is valid across all
     *  programs to which you have been accepted.
     *
     * @return string
     */
    public function getTrackingID()
    {
        return $this->trackingID;
    }

    /**
     * Sets a new trackingID
     *
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  The value you specify in this field is obtained from your tracking partner.
     *  For the eBay Partner Network, the <b>TrackingID</b> is the Campaign ID ("campid")
     *  provided by the eBay Partner Network. A Campaign ID is a 10-digit, unique
     *  number for associating traffic. A Campaign ID is valid across all
     *  programs to which you have been accepted.
     *
     * @param string $trackingID
     * @return self
     */
    public function setTrackingID($trackingID)
    {
        $this->trackingID = $trackingID;
        return $this;
    }

    /**
     * Gets as trackingPartnerCode
     *
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  Specifies your tracking partner for affiliate commissions.
     *  Depending on your tracking partner, specify one of the
     *  following values. Not all partners are valid for all sites.
     *  For <b>PlaceOffer</b>, only eBay Partner Network is valid:
     *  <br>
     *  <br>9 = eBay Partner Network
     *  <br>
     *  <br>
     *  For information about the eBay Partner Network, see
     *  <a href="https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>.
     *
     * @return string
     */
    public function getTrackingPartnerCode()
    {
        return $this->trackingPartnerCode;
    }

    /**
     * Sets a new trackingPartnerCode
     *
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  Specifies your tracking partner for affiliate commissions.
     *  Depending on your tracking partner, specify one of the
     *  following values. Not all partners are valid for all sites.
     *  For <b>PlaceOffer</b>, only eBay Partner Network is valid:
     *  <br>
     *  <br>9 = eBay Partner Network
     *  <br>
     *  <br>
     *  For information about the eBay Partner Network, see
     *  <a href="https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>.
     *
     * @param string $trackingPartnerCode
     * @return self
     */
    public function setTrackingPartnerCode($trackingPartnerCode)
    {
        $this->trackingPartnerCode = $trackingPartnerCode;
        return $this;
    }

    /**
     * Gets as applicationDeviceType
     *
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  Type of device or platform from which the call originated.
     *
     * @return string
     */
    public function getApplicationDeviceType()
    {
        return $this->applicationDeviceType;
    }

    /**
     * Sets a new applicationDeviceType
     *
     * <span class="tablenote"><b>Note: </b> If you are using
     *  affiliate tracking, this field is required.
     *  </span>
     *  Type of device or platform from which the call originated.
     *
     * @param string $applicationDeviceType
     * @return self
     */
    public function setApplicationDeviceType($applicationDeviceType)
    {
        $this->applicationDeviceType = $applicationDeviceType;
        return $this;
    }

    /**
     * Gets as affiliateUserID
     *
     * This field is not required, but an affiliate may want to use this identifier to better monitor marketing efforts. If you are using the eBay Partner Network, and you provide an <b>AffiliateUserID</b>, the tracking URL returned by eBay Partner Network will contain the <b>AffiliateUserID</b>, but it will be referred to as a "customid".
     *
     * @return string
     */
    public function getAffiliateUserID()
    {
        return $this->affiliateUserID;
    }

    /**
     * Sets a new affiliateUserID
     *
     * This field is not required, but an affiliate may want to use this identifier to better monitor marketing efforts. If you are using the eBay Partner Network, and you provide an <b>AffiliateUserID</b>, the tracking URL returned by eBay Partner Network will contain the <b>AffiliateUserID</b>, but it will be referred to as a "customid".
     *
     * @param string $affiliateUserID
     * @return self
     */
    public function setAffiliateUserID($affiliateUserID)
    {
        $this->affiliateUserID = $affiliateUserID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTrackingID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TrackingID", $value);
        }
        $value = $this->getTrackingPartnerCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TrackingPartnerCode", $value);
        }
        $value = $this->getApplicationDeviceType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplicationDeviceType", $value);
        }
        $value = $this->getAffiliateUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AffiliateUserID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AffiliateTrackingDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TrackingID');
        if (null !== $value) {
            $this->setTrackingID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TrackingPartnerCode');
        if (null !== $value) {
            $this->setTrackingPartnerCode($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplicationDeviceType');
        if (null !== $value) {
            $this->setApplicationDeviceType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AffiliateUserID');
        if (null !== $value) {
            $this->setAffiliateUserID($value);
        }
    }
}
