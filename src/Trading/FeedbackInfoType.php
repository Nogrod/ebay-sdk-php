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
class FeedbackInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCommentText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentText", $value);
        }
        $value = $this->getCommentType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CommentType", $value);
        }
        $value = $this->getTargetUser();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TargetUser", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\FeedbackInfoType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentText');
        if (null !== $value) {
            $this->setCommentText($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentType');
        if (null !== $value) {
            $this->setCommentType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}TargetUser');
        if (null !== $value) {
            $this->setTargetUser($value);
        }
    }
}
