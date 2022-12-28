<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VerifiedUserRequirementsType
 *
 * The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 * XSD Type: VerifiedUserRequirementsType
 */
class VerifiedUserRequirementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var bool $verifiedUser
     */
    private $verifiedUser = null;

    /**
     * @var int $minimumFeedbackScore
     */
    private $minimumFeedbackScore = null;

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
     * Gets as minimumFeedbackScore
     *
     * @return int
     */
    public function getMinimumFeedbackScore()
    {
        return $this->minimumFeedbackScore;
    }

    /**
     * Sets a new minimumFeedbackScore
     *
     * @param int $minimumFeedbackScore
     * @return self
     */
    public function setMinimumFeedbackScore($minimumFeedbackScore)
    {
        $this->minimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVerifiedUser();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VerifiedUser", $value);
        }
        $value = $this->getMinimumFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifiedUser');
        if (null !== $value) {
            $this->setVerifiedUser($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore');
        if (null !== $value) {
            $this->setMinimumFeedbackScore($value);
        }
    }
}
