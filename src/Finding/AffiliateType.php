<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AffiliateType
 *
 * eBay uses specified details to build a View Item URL and Product URL string
 *  in the response. These URLs include correctly formatted affiliate tracking
 *  information. When a user clicks through one of these URLs to eBay, the
 *  respective affiliate might get a commission, based on the tasks performed by
 *  the user.
 * XSD Type: Affiliate
 */
class AffiliateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specify the affiliate value obtained from your tracking partner. For the
     *  eBay Partner Network, the tracking ID is the provided Campaign ID
     *  ("campid"). A Campaign ID is a unique 10-digit number used for
     *  associating traffic and is valid across all programs to which you have
     *  been accepted. Another example of this value is the Affiliate ID given to
     *  you by TradeDoubler.
     *
     * @var string $trackingId
     */
    private $trackingId = null;

    /**
     * Specifies your tracking partner for affiliate commissions. Affiliates
     *  earn money from eBay for driving traffic to eBay. This field is required
     *  if you specify a tracking ID. Depending on your tracking partner, specify
     *  one of the following values. Not all partners are valid for all sites.
     *  For PlaceOffer, only the eBay Partner Network and Mediaplex are valid:
     *  <br>
     *  <br>2 = Be Free
     *  <br>3 = Affilinet
     *  <br>4 = TradeDoubler
     *  <br>5 = Mediaplex
     *  <br>6 = DoubleClick
     *  <br>7 = Allyes
     *  <br>8 = BJMT
     *  <br>9 = eBay Partner Network
     *
     * @var string $networkId
     */
    private $networkId = null;

    /**
     * You can define an affiliate customId if you want an ID to monitor your
     *  marketing efforts. Chose an ID up to up to 256 characters in length. If
     *  you are using the eBay Partner Network, and you provide a customId, the
     *  tracking URL returned by the eBay Partner Network will contain your
     *  customId value.
     *
     * @var string $customId
     */
    private $customId = null;

    /**
     * The lgeo parameter will be used for geo-targeting feature that is already implemented on the affiliate tracking side
     *
     * @var bool $geoTargeting
     */
    private $geoTargeting = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as trackingId
     *
     * Specify the affiliate value obtained from your tracking partner. For the
     *  eBay Partner Network, the tracking ID is the provided Campaign ID
     *  ("campid"). A Campaign ID is a unique 10-digit number used for
     *  associating traffic and is valid across all programs to which you have
     *  been accepted. Another example of this value is the Affiliate ID given to
     *  you by TradeDoubler.
     *
     * @return string
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * Sets a new trackingId
     *
     * Specify the affiliate value obtained from your tracking partner. For the
     *  eBay Partner Network, the tracking ID is the provided Campaign ID
     *  ("campid"). A Campaign ID is a unique 10-digit number used for
     *  associating traffic and is valid across all programs to which you have
     *  been accepted. Another example of this value is the Affiliate ID given to
     *  you by TradeDoubler.
     *
     * @param string $trackingId
     * @return self
     */
    public function setTrackingId($trackingId)
    {
        $this->trackingId = $trackingId;
        return $this;
    }

    /**
     * Gets as networkId
     *
     * Specifies your tracking partner for affiliate commissions. Affiliates
     *  earn money from eBay for driving traffic to eBay. This field is required
     *  if you specify a tracking ID. Depending on your tracking partner, specify
     *  one of the following values. Not all partners are valid for all sites.
     *  For PlaceOffer, only the eBay Partner Network and Mediaplex are valid:
     *  <br>
     *  <br>2 = Be Free
     *  <br>3 = Affilinet
     *  <br>4 = TradeDoubler
     *  <br>5 = Mediaplex
     *  <br>6 = DoubleClick
     *  <br>7 = Allyes
     *  <br>8 = BJMT
     *  <br>9 = eBay Partner Network
     *
     * @return string
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }

    /**
     * Sets a new networkId
     *
     * Specifies your tracking partner for affiliate commissions. Affiliates
     *  earn money from eBay for driving traffic to eBay. This field is required
     *  if you specify a tracking ID. Depending on your tracking partner, specify
     *  one of the following values. Not all partners are valid for all sites.
     *  For PlaceOffer, only the eBay Partner Network and Mediaplex are valid:
     *  <br>
     *  <br>2 = Be Free
     *  <br>3 = Affilinet
     *  <br>4 = TradeDoubler
     *  <br>5 = Mediaplex
     *  <br>6 = DoubleClick
     *  <br>7 = Allyes
     *  <br>8 = BJMT
     *  <br>9 = eBay Partner Network
     *
     * @param string $networkId
     * @return self
     */
    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
        return $this;
    }

    /**
     * Gets as customId
     *
     * You can define an affiliate customId if you want an ID to monitor your
     *  marketing efforts. Chose an ID up to up to 256 characters in length. If
     *  you are using the eBay Partner Network, and you provide a customId, the
     *  tracking URL returned by the eBay Partner Network will contain your
     *  customId value.
     *
     * @return string
     */
    public function getCustomId()
    {
        return $this->customId;
    }

    /**
     * Sets a new customId
     *
     * You can define an affiliate customId if you want an ID to monitor your
     *  marketing efforts. Chose an ID up to up to 256 characters in length. If
     *  you are using the eBay Partner Network, and you provide a customId, the
     *  tracking URL returned by the eBay Partner Network will contain your
     *  customId value.
     *
     * @param string $customId
     * @return self
     */
    public function setCustomId($customId)
    {
        $this->customId = $customId;
        return $this;
    }

    /**
     * Gets as geoTargeting
     *
     * The lgeo parameter will be used for geo-targeting feature that is already implemented on the affiliate tracking side
     *
     * @return bool
     */
    public function getGeoTargeting()
    {
        return $this->geoTargeting;
    }

    /**
     * Sets a new geoTargeting
     *
     * The lgeo parameter will be used for geo-targeting feature that is already implemented on the affiliate tracking side
     *
     * @param bool $geoTargeting
     * @return self
     */
    public function setGeoTargeting($geoTargeting)
    {
        $this->geoTargeting = $geoTargeting;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getTrackingId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}trackingId", $value);
        }
        $value = $this->getNetworkId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}networkId", $value);
        }
        $value = $this->getCustomId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}customId", $value);
        }
        $value = $this->getGeoTargeting();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}geoTargeting", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}trackingId');
        if (null !== $value) {
            $this->setTrackingId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}networkId');
        if (null !== $value) {
            $this->setNetworkId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}customId');
        if (null !== $value) {
            $this->setCustomId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}geoTargeting');
        if (null !== $value) {
            $this->setGeoTargeting($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
