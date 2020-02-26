<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TimeZoneDetailsType
 *
 * Time zone details about a region or location to which the seller is willing to
 *  ship.
 * XSD Type: TimeZoneDetailsType
 */
class TimeZoneDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A unique identifier for a given time zone. This ID does not change for a
     *  given time zone, even if the time zone supports both standard and daylight
     *  saving time variants. Valid values for TimeZoneID correspond to OLSON IDs.
     *  These IDs provide not only the information as to the offset from GMT (UTC),
     *  but also daylight saving time information. Thus, for example, America/Phoenix
     *  is distinct from America/Denver because they have different daylight saving
     *  time behavior. This value is not localized.
     *
     * @var string $timeZoneID
     */
    private $timeZoneID = null;

    /**
     * Display name of a time zone in its standard (non-daylight saving) time
     *  representation. This value is localized and returned in the language for the
     *  site specified in the request (i.e., the numeric site ID that you specify in
     *  the request URL for the SOAP API or the X-EBAY-API-SITEID header for the XML
     *  API).
     *
     * @var string $standardLabel
     */
    private $standardLabel = null;

    /**
     * The offset in hours from GMT for a time zone when it is not adjusted for
     *  daylight saving time.
     *
     * @var string $standardOffset
     */
    private $standardOffset = null;

    /**
     * Display name of a time zone in its daylight saving time representation.
     *  This element is emitted for time zones that support daylight saving time
     *  only. The value is localized and returned in the language for the site
     *  specified in the request.
     *
     * @var string $daylightSavingsLabel
     */
    private $daylightSavingsLabel = null;

    /**
     * The offset in hours from GMT for a time zone when it is on daylight saving
     *  time. This element is emitted for time zones that support daylight
     *  saving time only.
     *
     * @var string $daylightSavingsOffset
     */
    private $daylightSavingsOffset = null;

    /**
     * Indicates whether or not the time zone is currently on daylight saving time.
     *  A value of true indicates that the time zone is on daylights savings time.
     *  This element is emitted for time zones that support daylight saving time only.
     *
     * @var bool $daylightSavingsInEffect
     */
    private $daylightSavingsInEffect = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as timeZoneID
     *
     * A unique identifier for a given time zone. This ID does not change for a
     *  given time zone, even if the time zone supports both standard and daylight
     *  saving time variants. Valid values for TimeZoneID correspond to OLSON IDs.
     *  These IDs provide not only the information as to the offset from GMT (UTC),
     *  but also daylight saving time information. Thus, for example, America/Phoenix
     *  is distinct from America/Denver because they have different daylight saving
     *  time behavior. This value is not localized.
     *
     * @return string
     */
    public function getTimeZoneID()
    {
        return $this->timeZoneID;
    }

    /**
     * Sets a new timeZoneID
     *
     * A unique identifier for a given time zone. This ID does not change for a
     *  given time zone, even if the time zone supports both standard and daylight
     *  saving time variants. Valid values for TimeZoneID correspond to OLSON IDs.
     *  These IDs provide not only the information as to the offset from GMT (UTC),
     *  but also daylight saving time information. Thus, for example, America/Phoenix
     *  is distinct from America/Denver because they have different daylight saving
     *  time behavior. This value is not localized.
     *
     * @param string $timeZoneID
     * @return self
     */
    public function setTimeZoneID($timeZoneID)
    {
        $this->timeZoneID = $timeZoneID;
        return $this;
    }

    /**
     * Gets as standardLabel
     *
     * Display name of a time zone in its standard (non-daylight saving) time
     *  representation. This value is localized and returned in the language for the
     *  site specified in the request (i.e., the numeric site ID that you specify in
     *  the request URL for the SOAP API or the X-EBAY-API-SITEID header for the XML
     *  API).
     *
     * @return string
     */
    public function getStandardLabel()
    {
        return $this->standardLabel;
    }

    /**
     * Sets a new standardLabel
     *
     * Display name of a time zone in its standard (non-daylight saving) time
     *  representation. This value is localized and returned in the language for the
     *  site specified in the request (i.e., the numeric site ID that you specify in
     *  the request URL for the SOAP API or the X-EBAY-API-SITEID header for the XML
     *  API).
     *
     * @param string $standardLabel
     * @return self
     */
    public function setStandardLabel($standardLabel)
    {
        $this->standardLabel = $standardLabel;
        return $this;
    }

    /**
     * Gets as standardOffset
     *
     * The offset in hours from GMT for a time zone when it is not adjusted for
     *  daylight saving time.
     *
     * @return string
     */
    public function getStandardOffset()
    {
        return $this->standardOffset;
    }

    /**
     * Sets a new standardOffset
     *
     * The offset in hours from GMT for a time zone when it is not adjusted for
     *  daylight saving time.
     *
     * @param string $standardOffset
     * @return self
     */
    public function setStandardOffset($standardOffset)
    {
        $this->standardOffset = $standardOffset;
        return $this;
    }

    /**
     * Gets as daylightSavingsLabel
     *
     * Display name of a time zone in its daylight saving time representation.
     *  This element is emitted for time zones that support daylight saving time
     *  only. The value is localized and returned in the language for the site
     *  specified in the request.
     *
     * @return string
     */
    public function getDaylightSavingsLabel()
    {
        return $this->daylightSavingsLabel;
    }

    /**
     * Sets a new daylightSavingsLabel
     *
     * Display name of a time zone in its daylight saving time representation.
     *  This element is emitted for time zones that support daylight saving time
     *  only. The value is localized and returned in the language for the site
     *  specified in the request.
     *
     * @param string $daylightSavingsLabel
     * @return self
     */
    public function setDaylightSavingsLabel($daylightSavingsLabel)
    {
        $this->daylightSavingsLabel = $daylightSavingsLabel;
        return $this;
    }

    /**
     * Gets as daylightSavingsOffset
     *
     * The offset in hours from GMT for a time zone when it is on daylight saving
     *  time. This element is emitted for time zones that support daylight
     *  saving time only.
     *
     * @return string
     */
    public function getDaylightSavingsOffset()
    {
        return $this->daylightSavingsOffset;
    }

    /**
     * Sets a new daylightSavingsOffset
     *
     * The offset in hours from GMT for a time zone when it is on daylight saving
     *  time. This element is emitted for time zones that support daylight
     *  saving time only.
     *
     * @param string $daylightSavingsOffset
     * @return self
     */
    public function setDaylightSavingsOffset($daylightSavingsOffset)
    {
        $this->daylightSavingsOffset = $daylightSavingsOffset;
        return $this;
    }

    /**
     * Gets as daylightSavingsInEffect
     *
     * Indicates whether or not the time zone is currently on daylight saving time.
     *  A value of true indicates that the time zone is on daylights savings time.
     *  This element is emitted for time zones that support daylight saving time only.
     *
     * @return bool
     */
    public function getDaylightSavingsInEffect()
    {
        return $this->daylightSavingsInEffect;
    }

    /**
     * Sets a new daylightSavingsInEffect
     *
     * Indicates whether or not the time zone is currently on daylight saving time.
     *  A value of true indicates that the time zone is on daylights savings time.
     *  This element is emitted for time zones that support daylight saving time only.
     *
     * @param bool $daylightSavingsInEffect
     * @return self
     */
    public function setDaylightSavingsInEffect($daylightSavingsInEffect)
    {
        $this->daylightSavingsInEffect = $daylightSavingsInEffect;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTimeZoneID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeZoneID", $value);
        }
        $value = $this->getStandardLabel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StandardLabel", $value);
        }
        $value = $this->getStandardOffset();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StandardOffset", $value);
        }
        $value = $this->getDaylightSavingsLabel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DaylightSavingsLabel", $value);
        }
        $value = $this->getDaylightSavingsOffset();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DaylightSavingsOffset", $value);
        }
        $value = $this->getDaylightSavingsInEffect();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DaylightSavingsInEffect", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeZoneID');
        if (null !== $value) {
            $this->setTimeZoneID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StandardLabel');
        if (null !== $value) {
            $this->setStandardLabel($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StandardOffset');
        if (null !== $value) {
            $this->setStandardOffset($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DaylightSavingsLabel');
        if (null !== $value) {
            $this->setDaylightSavingsLabel($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DaylightSavingsOffset');
        if (null !== $value) {
            $this->setDaylightSavingsOffset($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DaylightSavingsInEffect');
        if (null !== $value) {
            $this->setDaylightSavingsInEffect($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
