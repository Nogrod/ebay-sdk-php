<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReminderCustomizationType
 *
 * Specifies how to return certain reminder types from the user's My eBay account.
 * XSD Type: ReminderCustomizationType
 */
class ReminderCustomizationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The length of time the reminder has existed in the user's My eBay account,
     *  in days. Valid values are 1-60.
     *
     * @var int $durationInDays
     */
    private $durationInDays = null;

    /**
     * Whether to include information about this type of reminder in the response.
     *  When true, the container is returned with default input parameters.
     *
     * @var bool $include
     */
    private $include = null;

    /**
     * Gets as durationInDays
     *
     * The length of time the reminder has existed in the user's My eBay account,
     *  in days. Valid values are 1-60.
     *
     * @return int
     */
    public function getDurationInDays()
    {
        return $this->durationInDays;
    }

    /**
     * Sets a new durationInDays
     *
     * The length of time the reminder has existed in the user's My eBay account,
     *  in days. Valid values are 1-60.
     *
     * @param int $durationInDays
     * @return self
     */
    public function setDurationInDays($durationInDays)
    {
        $this->durationInDays = $durationInDays;
        return $this;
    }

    /**
     * Gets as include
     *
     * Whether to include information about this type of reminder in the response.
     *  When true, the container is returned with default input parameters.
     *
     * @return bool
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * Whether to include information about this type of reminder in the response.
     *  When true, the container is returned with default input parameters.
     *
     * @param bool $include
     * @return self
     */
    public function setInclude($include)
    {
        $this->include = $include;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDurationInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DurationInDays", $value);
        }
        $value = $this->getInclude();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Include", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DurationInDays');
        if (null !== $value) {
            $this->setDurationInDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Include');
        if (null !== $value) {
            $this->setInclude($value);
        }
    }
}
