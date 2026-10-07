<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeedbackPeriodArrayType
 *
 * Container for a set of feedback statistics. Contains zero one or
 *  multiple FeedbackPeriod objects. Output only, for the summary
 *  feedback data returned by GetFeedback.
 * XSD Type: FeedbackPeriodArrayType
 */
class FeedbackPeriodArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains one feedback statistic giving length of the period being reported
     *  (e.g. last 7 days prior to the call), and total number of feedback entries
     *  (of the type given by the container, e.g. positive feedback) submitted during
     *  the indicated period. Returned if no detail level is specified.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackPeriodType[] $feedbackPeriod
     */
    private $feedbackPeriod = [

    ];

    /**
     * Adds as feedbackPeriod
     *
     * Contains one feedback statistic giving length of the period being reported
     *  (e.g. last 7 days prior to the call), and total number of feedback entries
     *  (of the type given by the container, e.g. positive feedback) submitted during
     *  the indicated period. Returned if no detail level is specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod
     */
    public function addToFeedbackPeriod(\Nogrod\eBaySDK\Trading\FeedbackPeriodType $feedbackPeriod)
    {
        if (!is_array($this->feedbackPeriod)) {
            throw new \LogicException('feedbackPeriod is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->feedbackPeriod[] = $feedbackPeriod;
        return $this;
    }

    /**
     * isset feedbackPeriod
     *
     * Contains one feedback statistic giving length of the period being reported
     *  (e.g. last 7 days prior to the call), and total number of feedback entries
     *  (of the type given by the container, e.g. positive feedback) submitted during
     *  the indicated period. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedbackPeriod($index)
    {
        return isset($this->feedbackPeriod[$index]);
    }

    /**
     * unset feedbackPeriod
     *
     * Contains one feedback statistic giving length of the period being reported
     *  (e.g. last 7 days prior to the call), and total number of feedback entries
     *  (of the type given by the container, e.g. positive feedback) submitted during
     *  the indicated period. Returned if no detail level is specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedbackPeriod($index)
    {
        unset($this->feedbackPeriod[$index]);
    }

    /**
     * Gets as feedbackPeriod
     *
     * Contains one feedback statistic giving length of the period being reported
     *  (e.g. last 7 days prior to the call), and total number of feedback entries
     *  (of the type given by the container, e.g. positive feedback) submitted during
     *  the indicated period. Returned if no detail level is specified.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType>
     */
    public function getFeedbackPeriod()
    {
        return $this->feedbackPeriod;
    }

    /**
     * Sets a new feedbackPeriod
     *
     * Contains one feedback statistic giving length of the period being reported
     *  (e.g. last 7 days prior to the call), and total number of feedback entries
     *  (of the type given by the container, e.g. positive feedback) submitted during
     *  the indicated period. Returned if no detail level is specified.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeedbackPeriodType> $feedbackPeriod
     * @return self
     */
    public function setFeedbackPeriod(iterable $feedbackPeriod)
    {
        $this->feedbackPeriod = $feedbackPeriod;
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
        $value = $this->feedbackPeriod;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'FeedbackPeriod', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeedbackPeriodArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->feedbackPeriod = [];
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
                case 'FeedbackPeriod':
                    $this->feedbackPeriod[] = \Nogrod\eBaySDK\Trading\FeedbackPeriodType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
