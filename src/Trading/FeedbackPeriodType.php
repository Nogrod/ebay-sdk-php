<?php

namespace Nogrod\eBaySDK\Trading;

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
        $value = $this->periodInDays;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PeriodInDays', null, (string) $value);
        }
        $value = $this->count;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Count', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeedbackPeriodType
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
                case 'PeriodInDays':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->periodInDays = (int) $value;
                    }
                    return true;
                case 'Count':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->count = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
