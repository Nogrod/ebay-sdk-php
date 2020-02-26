<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FeedbackDetailArrayType
 *
 * This type is used by the <b>FeedbackDetailArray</b> container that is returned in the <b>GetFeedback</b> call. The <b>FeedbackDetailArray</b> container consists of an array of one or more Feedback entries. The Feedback entries that are returned will depend on the fields/values included in the call request.
 * XSD Type: FeedbackDetailArrayType
 */
class FeedbackDetailArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users who were not involved in the transaction as either the buyer or seller.
     *
     * @var \Nogrod\eBaySDK\Trading\FeedbackDetailType[] $feedbackDetail
     */
    private $feedbackDetail = [
        
    ];

    /**
     * Adds as feedbackDetail
     *
     * This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users who were not involved in the transaction as either the buyer or seller.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeedbackDetailType $feedbackDetail
     */
    public function addToFeedbackDetail(\Nogrod\eBaySDK\Trading\FeedbackDetailType $feedbackDetail)
    {
        $this->feedbackDetail[] = $feedbackDetail;
        return $this;
    }

    /**
     * isset feedbackDetail
     *
     * This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users who were not involved in the transaction as either the buyer or seller.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedbackDetail($index)
    {
        return isset($this->feedbackDetail[$index]);
    }

    /**
     * unset feedbackDetail
     *
     * This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users who were not involved in the transaction as either the buyer or seller.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedbackDetail($index)
    {
        unset($this->feedbackDetail[$index]);
    }

    /**
     * Gets as feedbackDetail
     *
     * This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users who were not involved in the transaction as either the buyer or seller.
     *
     * @return \Nogrod\eBaySDK\Trading\FeedbackDetailType[]
     */
    public function getFeedbackDetail()
    {
        return $this->feedbackDetail;
    }

    /**
     * Sets a new feedbackDetail
     *
     * This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users who were not involved in the transaction as either the buyer or seller.
     *
     * @param \Nogrod\eBaySDK\Trading\FeedbackDetailType[] $feedbackDetail
     * @return self
     */
    public function setFeedbackDetail(array $feedbackDetail)
    {
        $this->feedbackDetail = $feedbackDetail;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFeedbackDetail();
        if (null !== $value && !empty($this->getFeedbackDetail())) {
            $writer->write(array_map(function ($v) {
                return ["FeedbackDetail" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackDetail', true);
        if (null !== $value && !empty($value)) {
            $this->setFeedbackDetail(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\FeedbackDetailType::fromKeyValue($v);
            }, $value));
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
