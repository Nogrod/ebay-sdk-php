<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidderDetailType
 *
 * This type is deprecated.
 * XSD Type: BidderDetailType
 */
class BidderDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * This field is deprecated.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * This field is deprecated.
     *
     * @var int $feedbackScore
     */
    private $feedbackScore = null;

    /**
     * This field is deprecated.
     *
     * @var int $uniqueNegativeFeedbackCount
     */
    private $uniqueNegativeFeedbackCount = null;

    /**
     * This field is deprecated.
     *
     * @var int $uniquePositiveFeedbackCount
     */
    private $uniquePositiveFeedbackCount = null;

    /**
     * This field is deprecated.
     *
     * @var int $uniqueNeutralFeedbackCount
     */
    private $uniqueNeutralFeedbackCount = null;

    /**
     * Gets as userID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * This field is deprecated.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as email
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * This field is deprecated.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as feedbackScore
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }

    /**
     * Sets a new feedbackScore
     *
     * This field is deprecated.
     *
     * @param int $feedbackScore
     * @return self
     */
    public function setFeedbackScore($feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
        return $this;
    }

    /**
     * Gets as uniqueNegativeFeedbackCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->uniqueNegativeFeedbackCount;
    }

    /**
     * Sets a new uniqueNegativeFeedbackCount
     *
     * This field is deprecated.
     *
     * @param int $uniqueNegativeFeedbackCount
     * @return self
     */
    public function setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
    {
        $this->uniqueNegativeFeedbackCount = $uniqueNegativeFeedbackCount;
        return $this;
    }

    /**
     * Gets as uniquePositiveFeedbackCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->uniquePositiveFeedbackCount;
    }

    /**
     * Sets a new uniquePositiveFeedbackCount
     *
     * This field is deprecated.
     *
     * @param int $uniquePositiveFeedbackCount
     * @return self
     */
    public function setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
    {
        $this->uniquePositiveFeedbackCount = $uniquePositiveFeedbackCount;
        return $this;
    }

    /**
     * Gets as uniqueNeutralFeedbackCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->uniqueNeutralFeedbackCount;
    }

    /**
     * Sets a new uniqueNeutralFeedbackCount
     *
     * This field is deprecated.
     *
     * @param int $uniqueNeutralFeedbackCount
     * @return self
     */
    public function setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
    {
        $this->uniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Email", $value);
        }
        $value = $this->getFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackScore", $value);
        }
        $value = $this->getUniqueNegativeFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount", $value);
        }
        $value = $this->getUniquePositiveFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount", $value);
        }
        $value = $this->getUniqueNeutralFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Email');
        if (null !== $value) {
            $this->setEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore');
        if (null !== $value) {
            $this->setFeedbackScore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNegativeFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount');
        if (null !== $value) {
            $this->setUniquePositiveFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNeutralFeedbackCount($value);
        }
    }
}
