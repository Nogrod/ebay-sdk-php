<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeedbackPeriodType
 *
 * This type is used by the <b>FeedbackPeriod</b> containers that are returned in the <b>GetFeedback</b> call to indicate how many Negative, Neutral, Positive, Retracted, and Total Feedback entries a user has received within different periods of time, typically 30 days, 180 days, and 365 days.
 * XSD Type: FeedbackPeriodType
 */
class FeedbackPeriodType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This integer value indicates the total number of days in the time period for the Feedback count. Typically, the returned time periods are 30 days, 180 days, and 365 days. This field is always returned with the <b>FeedbackPeriod</b> container.
     *
     * @var int $periodInDays
     */
    private $periodInDays = null;

    /**
     * This integer value indicates the total number of Feedback entries that occurred within the time period specified in the <b>PeriodInDays</b> field. This field is always returned with the <b>FeedbackPeriod</b> container.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Gets as periodInDays
     *
     * This integer value indicates the total number of days in the time period for the Feedback count. Typically, the returned time periods are 30 days, 180 days, and 365 days. This field is always returned with the <b>FeedbackPeriod</b> container.
     *
     * @return int
     */
    public function getPeriodInDays()
    {
        return $this->periodInDays;
    }

    /**
     * Sets a new periodInDays
     *
     * This integer value indicates the total number of days in the time period for the Feedback count. Typically, the returned time periods are 30 days, 180 days, and 365 days. This field is always returned with the <b>FeedbackPeriod</b> container.
     *
     * @param int $periodInDays
     * @return self
     */
    public function setPeriodInDays($periodInDays)
    {
        $this->periodInDays = $periodInDays;
        return $this;
    }

    /**
     * Gets as count
     *
     * This integer value indicates the total number of Feedback entries that occurred within the time period specified in the <b>PeriodInDays</b> field. This field is always returned with the <b>FeedbackPeriod</b> container.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * This integer value indicates the total number of Feedback entries that occurred within the time period specified in the <b>PeriodInDays</b> field. This field is always returned with the <b>FeedbackPeriod</b> container.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPeriodInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PeriodInDays", $value);
        }
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Count", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PeriodInDays');
        if (null !== $value) {
            $this->setPeriodInDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Count');
        if (null !== $value) {
            $this->setCount($value);
        }
    }
}
