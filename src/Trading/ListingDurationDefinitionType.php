<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingDurationDefinitionType
 *
 * Type used by the <b>ListingDurations</b> container that is returned for each listing type supported for the eBay site. <b>ListingDurations</b> container shows the supported listing duration times for each listing type.
 * XSD Type: ListingDurationDefinitionType
 */
class ListingDurationDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The integer value in this attribute identifies the type of listing to which the set of durations applies. To match a <b>durationSetID</b> value to a specific listing type, see the <b>Category.ListingDuration</b> field in the call response.
     *
     * @var int $durationSetID
     */
    private $durationSetID = null;

    /**
     * All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
     *
     * @var string[] $duration
     */
    private $duration = [

    ];

    /**
     * Gets as durationSetID
     *
     * The integer value in this attribute identifies the type of listing to which the set of durations applies. To match a <b>durationSetID</b> value to a specific listing type, see the <b>Category.ListingDuration</b> field in the call response.
     *
     * @return int
     */
    public function getDurationSetID()
    {
        return $this->durationSetID;
    }

    /**
     * Sets a new durationSetID
     *
     * The integer value in this attribute identifies the type of listing to which the set of durations applies. To match a <b>durationSetID</b> value to a specific listing type, see the <b>Category.ListingDuration</b> field in the call response.
     *
     * @param int $durationSetID
     * @return self
     */
    public function setDurationSetID($durationSetID)
    {
        $this->durationSetID = $durationSetID;
        return $this;
    }

    /**
     * Adds as duration
     *
     * All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
     *
     * @return self
     * @param string $duration
     */
    public function addToDuration($duration)
    {
        $this->duration[] = $duration;
        return $this;
    }

    /**
     * isset duration
     *
     * All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDuration($index)
    {
        return isset($this->duration[$index]);
    }

    /**
     * unset duration
     *
     * All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDuration($index)
    {
        unset($this->duration[$index]);
    }

    /**
     * Gets as duration
     *
     * All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
     *
     * @return string[]
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
     *
     * @param string[] $duration
     * @return self
     */
    public function setDuration(array $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDurationSetID();
        if (null !== $value) {
            $writer->writeAttribute("durationSetID", $value);
        }
        $value = $this->getDuration();
        if (null !== $value && !empty($this->getDuration())) {
            $writer->write(array_map(function ($v) {return ["Duration" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Duration', true);
        if (null !== $value && !empty($value)) {
            $this->setDuration($value);
        }
    }
}
