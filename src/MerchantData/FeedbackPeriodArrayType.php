<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\FeedbackPeriodType[] $feedbackPeriod
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
     * @param \Nogrod\eBaySDK\MerchantData\FeedbackPeriodType $feedbackPeriod
     */
    public function addToFeedbackPeriod(\Nogrod\eBaySDK\MerchantData\FeedbackPeriodType $feedbackPeriod)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\FeedbackPeriodType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\FeedbackPeriodType[] $feedbackPeriod
     * @return self
     */
    public function setFeedbackPeriod(array $feedbackPeriod)
    {
        $this->feedbackPeriod = $feedbackPeriod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFeedbackPeriod();
        if (null !== $value && !empty($this->getFeedbackPeriod())) {
            $writer->write(array_map(function ($v) {
                return ["FeedbackPeriod" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackPeriod', true);
        if (null !== $value && !empty($value)) {
            $this->setFeedbackPeriod(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\FeedbackPeriodType::fromKeyValue($v);
            }, $value));
        }
    }
}
