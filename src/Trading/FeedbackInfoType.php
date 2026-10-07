<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeedbackInfoType
 *
 * Type defining the Feedback details for an order line item, including the eBay User ID
 *  of the user the feedback is intended for, the Feedback rating, and the Feedback comment.
 * XSD Type: FeedbackInfoType
 */
class FeedbackInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Textual comment that explains, clarifies, or justifies the Feedback rating specified
     *  in <b>CommentType</b>. This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  This comment will still be displayed even if submitted Feedback is withdrawn.
     *
     * @var string $commentText
     */
    private $commentText = null;

    /**
     * This value indicates the Feedback rating for the user specified in the
     *  <b>TargetUser</b> field. This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  A Positive rating increases the user's Feedback score, a Negative rating decreases
     *  the user's Feedback score, and a Neutral rating does not affect the user's Feedback
     *  score. eBay users also have the right to withdraw feedback for whatever reason.
     *  <br><br>
     *  Sellers cannot leave Neutral or Negative ratings for buyers.
     *
     * @var string $commentType
     */
    private $commentType = null;

    /**
     * This eBay User ID identifies the recipient user for whom the feedback is being left.
     *  This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *
     * @var string $targetUser
     */
    private $targetUser = null;

    /**
     * Gets as commentText
     *
     * Textual comment that explains, clarifies, or justifies the Feedback rating specified
     *  in <b>CommentType</b>. This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  This comment will still be displayed even if submitted Feedback is withdrawn.
     *
     * @return string
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Sets a new commentText
     *
     * Textual comment that explains, clarifies, or justifies the Feedback rating specified
     *  in <b>CommentType</b>. This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  This comment will still be displayed even if submitted Feedback is withdrawn.
     *
     * @param string $commentText
     * @return self
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;
        return $this;
    }

    /**
     * Gets as commentType
     *
     * This value indicates the Feedback rating for the user specified in the
     *  <b>TargetUser</b> field. This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  A Positive rating increases the user's Feedback score, a Negative rating decreases
     *  the user's Feedback score, and a Neutral rating does not affect the user's Feedback
     *  score. eBay users also have the right to withdraw feedback for whatever reason.
     *  <br><br>
     *  Sellers cannot leave Neutral or Negative ratings for buyers.
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Sets a new commentType
     *
     * This value indicates the Feedback rating for the user specified in the
     *  <b>TargetUser</b> field. This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  A Positive rating increases the user's Feedback score, a Negative rating decreases
     *  the user's Feedback score, and a Neutral rating does not affect the user's Feedback
     *  score. eBay users also have the right to withdraw feedback for whatever reason.
     *  <br><br>
     *  Sellers cannot leave Neutral or Negative ratings for buyers.
     *
     * @param string $commentType
     * @return self
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
        return $this;
    }

    /**
     * Gets as targetUser
     *
     * This eBay User ID identifies the recipient user for whom the feedback is being left.
     *  This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *
     * @return string
     */
    public function getTargetUser()
    {
        return $this->targetUser;
    }

    /**
     * Sets a new targetUser
     *
     * This eBay User ID identifies the recipient user for whom the feedback is being left.
     *  This field is required in <b>CompleteSale</b> if the
     *  <b>FeedbackInfo</b> container is used.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *
     * @param string $targetUser
     * @return self
     */
    public function setTargetUser($targetUser)
    {
        $this->targetUser = $targetUser;
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
        $value = $this->commentText;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentText', null, (string) $value);
        }
        $value = $this->commentType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CommentType', null, (string) $value);
        }
        $value = $this->targetUser;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TargetUser', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeedbackInfoType
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
                case 'CommentText':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentText = $value;
                    }
                    return true;
                case 'CommentType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->commentType = $value;
                    }
                    return true;
                case 'TargetUser':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->targetUser = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['CommentText'] = $this->commentText;
        $data['CommentType'] = $this->commentType;
        $data['TargetUser'] = $this->targetUser;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
