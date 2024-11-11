<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ValidateChallengeInputRequestType
 *
 * <p><span class=\"tablenote\"><b>Note:</b> This call is deprecated, and will be decommissioned on January 30th, 2025.</span></p>
 *
 *  Validates the user response to a <b class="con">GetChallengeToken</b>
 *  botblock challenge.
 * XSD Type: ValidateChallengeInputRequestType
 */
class ValidateChallengeInputRequestType extends AbstractRequestType
{
    /**
     * Botblock token that was returned by <b>GetChallengeToken</b>.
     *
     * @var string $challengeToken
     */
    private $challengeToken = null;

    /**
     * User response to a bot block challenge.
     *
     * @var string $userInput
     */
    private $userInput = null;

    /**
     * This boolean field is included and set to 'true' if the challenge token should remain valid for up to two minutes.
     *
     * @var bool $keepTokenValid
     */
    private $keepTokenValid = null;

    /**
     * Gets as challengeToken
     *
     * Botblock token that was returned by <b>GetChallengeToken</b>.
     *
     * @return string
     */
    public function getChallengeToken()
    {
        return $this->challengeToken;
    }

    /**
     * Sets a new challengeToken
     *
     * Botblock token that was returned by <b>GetChallengeToken</b>.
     *
     * @param string $challengeToken
     * @return self
     */
    public function setChallengeToken($challengeToken)
    {
        $this->challengeToken = $challengeToken;
        return $this;
    }

    /**
     * Gets as userInput
     *
     * User response to a bot block challenge.
     *
     * @return string
     */
    public function getUserInput()
    {
        return $this->userInput;
    }

    /**
     * Sets a new userInput
     *
     * User response to a bot block challenge.
     *
     * @param string $userInput
     * @return self
     */
    public function setUserInput($userInput)
    {
        $this->userInput = $userInput;
        return $this;
    }

    /**
     * Gets as keepTokenValid
     *
     * This boolean field is included and set to 'true' if the challenge token should remain valid for up to two minutes.
     *
     * @return bool
     */
    public function getKeepTokenValid()
    {
        return $this->keepTokenValid;
    }

    /**
     * Sets a new keepTokenValid
     *
     * This boolean field is included and set to 'true' if the challenge token should remain valid for up to two minutes.
     *
     * @param bool $keepTokenValid
     * @return self
     */
    public function setKeepTokenValid($keepTokenValid)
    {
        $this->keepTokenValid = $keepTokenValid;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getChallengeToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ChallengeToken", $value);
        }
        $value = $this->getUserInput();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserInput", $value);
        }
        $value = $this->getKeepTokenValid();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}KeepTokenValid", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ChallengeToken');
        if (null !== $value) {
            $this->setChallengeToken($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserInput');
        if (null !== $value) {
            $this->setUserInput($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}KeepTokenValid');
        if (null !== $value) {
            $this->setKeepTokenValid(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
