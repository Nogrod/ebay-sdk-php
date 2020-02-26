<?php

namespace Nogrod\eBaySDK\Trading;

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
     *
     * @param string $targetUser
     * @return self
     */
    public function setTargetUser($targetUser)
    {
        $this->targetUser = $targetUser;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentText');
        if (null !== $value) {
            $this->setCommentText($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CommentType');
        if (null !== $value) {
            $this->setCommentType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TargetUser');
        if (null !== $value) {
            $this->setTargetUser($value);
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
