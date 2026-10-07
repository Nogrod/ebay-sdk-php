<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeedbackDetailArrayType
 *
 * This type is used by the <b>FeedbackDetailArray</b> container that is returned in the <b>GetFeedback</b> call. The <b>FeedbackDetailArray</b> container consists of an array of one or more Feedback entries. The Feedback entries that are returned will depend on the fields/values included in the call request.
 * XSD Type: FeedbackDetailArrayType
 */
class FeedbackDetailArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->feedbackDetail)) {
            throw new \LogicException('feedbackDetail is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\FeedbackDetailType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\FeedbackDetailType> $feedbackDetail
     * @return self
     */
    public function setFeedbackDetail(iterable $feedbackDetail)
    {
        $this->feedbackDetail = $feedbackDetail;
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
        $value = $this->feedbackDetail;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'FeedbackDetail', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeedbackDetailArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->feedbackDetail = [];
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
                case 'FeedbackDetail':
                    $this->feedbackDetail[] = \Nogrod\eBaySDK\Trading\FeedbackDetailType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['FeedbackDetail'] = Func::jsonList($this->feedbackDetail);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
