<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ValidateTestUserRegistrationRequestType
 *
 * Requests to enable a test user to sell items in the Sandbox environment.
 * XSD Type: ValidateTestUserRegistrationRequestType
 */
class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{
    /**
     * Value for the feedback score of a user. If no value is passed in the request,
     *  or if the value is zero, the feedback score is unchanged. This element is not intended
     *  for regularly testing feedback because the feedback value can change after the request.
     *
     * @var int $feedbackScore
     */
    private $feedbackScore = null;

    /**
     * Value for the date and time that a user's registration begins.
     *
     * @var \DateTime $registrationDate
     */
    private $registrationDate = null;

    /**
     * Indicates if a user subscribes to Selling Manager. You cannot
     *  request to subscribe a user to both Selling Manager and
     *  Selling Manager Pro. You cannot request to unsubscribe a user.
     *
     * @var bool $subscribeSM
     */
    private $subscribeSM = null;

    /**
     * Indicates if a user subscribes to Selling Manager Pro. You cannot
     *  request to subscribe a user to both Selling Manager and
     *  Selling Manager Pro. You cannot request to unsubscribe a user.
     *
     * @var bool $subscribeSMPro
     */
    private $subscribeSMPro = null;

    /**
     * Gets as feedbackScore
     *
     * Value for the feedback score of a user. If no value is passed in the request,
     *  or if the value is zero, the feedback score is unchanged. This element is not intended
     *  for regularly testing feedback because the feedback value can change after the request.
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
     * Value for the feedback score of a user. If no value is passed in the request,
     *  or if the value is zero, the feedback score is unchanged. This element is not intended
     *  for regularly testing feedback because the feedback value can change after the request.
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
     * Gets as registrationDate
     *
     * Value for the date and time that a user's registration begins.
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets a new registrationDate
     *
     * Value for the date and time that a user's registration begins.
     *
     * @param \DateTime $registrationDate
     * @return self
     */
    public function setRegistrationDate(\DateTime $registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * Gets as subscribeSM
     *
     * Indicates if a user subscribes to Selling Manager. You cannot
     *  request to subscribe a user to both Selling Manager and
     *  Selling Manager Pro. You cannot request to unsubscribe a user.
     *
     * @return bool
     */
    public function getSubscribeSM()
    {
        return $this->subscribeSM;
    }

    /**
     * Sets a new subscribeSM
     *
     * Indicates if a user subscribes to Selling Manager. You cannot
     *  request to subscribe a user to both Selling Manager and
     *  Selling Manager Pro. You cannot request to unsubscribe a user.
     *
     * @param bool $subscribeSM
     * @return self
     */
    public function setSubscribeSM($subscribeSM)
    {
        $this->subscribeSM = $subscribeSM;
        return $this;
    }

    /**
     * Gets as subscribeSMPro
     *
     * Indicates if a user subscribes to Selling Manager Pro. You cannot
     *  request to subscribe a user to both Selling Manager and
     *  Selling Manager Pro. You cannot request to unsubscribe a user.
     *
     * @return bool
     */
    public function getSubscribeSMPro()
    {
        return $this->subscribeSMPro;
    }

    /**
     * Sets a new subscribeSMPro
     *
     * Indicates if a user subscribes to Selling Manager Pro. You cannot
     *  request to subscribe a user to both Selling Manager and
     *  Selling Manager Pro. You cannot request to unsubscribe a user.
     *
     * @param bool $subscribeSMPro
     * @return self
     */
    public function setSubscribeSMPro($subscribeSMPro)
    {
        $this->subscribeSMPro = $subscribeSMPro;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackScore", $value);
        }
        $value = $this->getRegistrationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegistrationDate", $value);
        }
        $value = $this->getSubscribeSM();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubscribeSM", $value);
        }
        $value = $this->getSubscribeSMPro();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubscribeSMPro", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore');
        if (null !== $value) {
            $this->setFeedbackScore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegistrationDate');
        if (null !== $value) {
            $this->setRegistrationDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubscribeSM');
        if (null !== $value) {
            $this->setSubscribeSM(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubscribeSMPro');
        if (null !== $value) {
            $this->setSubscribeSMPro(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
