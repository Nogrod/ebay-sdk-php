<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->timeZoneID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TimeZoneID', null, (string) $value);
        }
        $value = $this->standardLabel;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StandardLabel', null, (string) $value);
        }
        $value = $this->standardOffset;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StandardOffset', null, (string) $value);
        }
        $value = $this->daylightSavingsLabel;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DaylightSavingsLabel', null, (string) $value);
        }
        $value = $this->daylightSavingsOffset;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DaylightSavingsOffset', null, (string) $value);
        }
        $value = $this->daylightSavingsInEffect;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DaylightSavingsInEffect', null, ($value ? 'true' : 'false'));
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TimeZoneDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'TimeZoneID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->timeZoneID = $value;
                    }
                    return true;
                case 'StandardLabel':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->standardLabel = $value;
                    }
                    return true;
                case 'StandardOffset':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->standardOffset = $value;
                    }
                    return true;
                case 'DaylightSavingsLabel':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->daylightSavingsLabel = $value;
                    }
                    return true;
                case 'DaylightSavingsOffset':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->daylightSavingsOffset = $value;
                    }
                    return true;
                case 'DaylightSavingsInEffect':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->daylightSavingsInEffect = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }
}
