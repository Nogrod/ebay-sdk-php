<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing VerifiedUserRequirementsDetailsType
 *
 * The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 * XSD Type: VerifiedUserRequirementsDetailsType
 */
class VerifiedUserRequirementsDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var bool $verifiedUser
     */
    private $verifiedUser = null;

    /**
     * @var int[] $feedbackScore
     */
    private $feedbackScore = [
        
    ];

    /**
     * Gets as verifiedUser
     *
     * @return bool
     */
    public function getVerifiedUser()
    {
        return $this->verifiedUser;
    }

    /**
     * Sets a new verifiedUser
     *
     * @param bool $verifiedUser
     * @return self
     */
    public function setVerifiedUser($verifiedUser)
    {
        $this->verifiedUser = $verifiedUser;
        return $this;
    }

    /**
     * Adds as feedbackScore
     *
     * @return self
     * @param int $feedbackScore
     */
    public function addToFeedbackScore($feedbackScore)
    {
        $this->feedbackScore[] = $feedbackScore;
        return $this;
    }

    /**
     * isset feedbackScore
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedbackScore($index)
    {
        return isset($this->feedbackScore[$index]);
    }

    /**
     * unset feedbackScore
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedbackScore($index)
    {
        unset($this->feedbackScore[$index]);
    }

    /**
     * Gets as feedbackScore
     *
     * @return int[]
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }

    /**
     * Sets a new feedbackScore
     *
     * @param int[] $feedbackScore
     * @return self
     */
    public function setFeedbackScore(array $feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVerifiedUser();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VerifiedUser", $value);
        }
        $value = $this->getFeedbackScore();
        if (null !== $value && !empty($this->getFeedbackScore())) {
            $writer->write(array_map(function ($v) {
                return ["FeedbackScore" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifiedUser');
        if (null !== $value) {
            $this->setVerifiedUser($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore', true);
        if (null !== $value && !empty($value)) {
            $this->setFeedbackScore($value);
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
