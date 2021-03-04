<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetSellingManagerFeedbackOptionsRequestType
 *
 * Enables Selling Manager Pro subscribers to store standard feedback comments that can
 *  be left for their buyers. Selling Manager Pro subscribers can also specify what
 *  events, if any, will trigger an automated feedback response to buyers.
 * XSD Type: SetSellingManagerFeedbackOptionsRequestType
 */
class SetSellingManagerFeedbackOptionsRequestType extends AbstractRequestType
{
    /**
     * Specifies the event that will trigger automated feedback to the buyer.
     *
     * @var string $automatedLeaveFeedbackEvent
     */
    private $automatedLeaveFeedbackEvent = null;

    /**
     * Contains a set of comments from which one can be selected to leave
     *  feedback for a buyer. If automated feedback is used, a comment is
     *  selected from the set randomly. Stored comments cannot be replaced or
     *  edited individually. Submitting a stored comments array replaces all
     *  existing stored comments.
     *  <br>
     *
     * @var string[] $storedComments
     */
    private $storedComments = null;

    /**
     * Gets as automatedLeaveFeedbackEvent
     *
     * Specifies the event that will trigger automated feedback to the buyer.
     *
     * @return string
     */
    public function getAutomatedLeaveFeedbackEvent()
    {
        return $this->automatedLeaveFeedbackEvent;
    }

    /**
     * Sets a new automatedLeaveFeedbackEvent
     *
     * Specifies the event that will trigger automated feedback to the buyer.
     *
     * @param string $automatedLeaveFeedbackEvent
     * @return self
     */
    public function setAutomatedLeaveFeedbackEvent($automatedLeaveFeedbackEvent)
    {
        $this->automatedLeaveFeedbackEvent = $automatedLeaveFeedbackEvent;
        return $this;
    }

    /**
     * Adds as storedCommentText
     *
     * Contains a set of comments from which one can be selected to leave
     *  feedback for a buyer. If automated feedback is used, a comment is
     *  selected from the set randomly. Stored comments cannot be replaced or
     *  edited individually. Submitting a stored comments array replaces all
     *  existing stored comments.
     *  <br>
     *
     * @return self
     * @param string $storedCommentText
     */
    public function addToStoredComments($storedCommentText)
    {
        $this->storedComments[] = $storedCommentText;
        return $this;
    }

    /**
     * isset storedComments
     *
     * Contains a set of comments from which one can be selected to leave
     *  feedback for a buyer. If automated feedback is used, a comment is
     *  selected from the set randomly. Stored comments cannot be replaced or
     *  edited individually. Submitting a stored comments array replaces all
     *  existing stored comments.
     *  <br>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStoredComments($index)
    {
        return isset($this->storedComments[$index]);
    }

    /**
     * unset storedComments
     *
     * Contains a set of comments from which one can be selected to leave
     *  feedback for a buyer. If automated feedback is used, a comment is
     *  selected from the set randomly. Stored comments cannot be replaced or
     *  edited individually. Submitting a stored comments array replaces all
     *  existing stored comments.
     *  <br>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStoredComments($index)
    {
        unset($this->storedComments[$index]);
    }

    /**
     * Gets as storedComments
     *
     * Contains a set of comments from which one can be selected to leave
     *  feedback for a buyer. If automated feedback is used, a comment is
     *  selected from the set randomly. Stored comments cannot be replaced or
     *  edited individually. Submitting a stored comments array replaces all
     *  existing stored comments.
     *  <br>
     *
     * @return string[]
     */
    public function getStoredComments()
    {
        return $this->storedComments;
    }

    /**
     * Sets a new storedComments
     *
     * Contains a set of comments from which one can be selected to leave
     *  feedback for a buyer. If automated feedback is used, a comment is
     *  selected from the set randomly. Stored comments cannot be replaced or
     *  edited individually. Submitting a stored comments array replaces all
     *  existing stored comments.
     *  <br>
     *
     * @param string[] $storedComments
     * @return self
     */
    public function setStoredComments(array $storedComments)
    {
        $this->storedComments = $storedComments;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getAutomatedLeaveFeedbackEvent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutomatedLeaveFeedbackEvent", $value);
        }
        $value = $this->getStoredComments();
        if (null !== $value && !empty($this->getStoredComments())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoredComments", array_map(function ($v) {
                return ["StoredCommentText" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutomatedLeaveFeedbackEvent');
        if (null !== $value) {
            $this->setAutomatedLeaveFeedbackEvent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoredComments', true);
        if (null !== $value && !empty($value)) {
            $this->setStoredComments($value);
        }
    }
}
