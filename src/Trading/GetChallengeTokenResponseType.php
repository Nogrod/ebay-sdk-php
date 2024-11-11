<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetChallengeTokenResponseType
 *
 * This is the base response type for the <b>GetChallengeToken</b> call. This call retrieves a botblock token and URLs for an image or audio clip that the user is to match.
 * XSD Type: GetChallengeTokenResponseType
 */
class GetChallengeTokenResponseType extends AbstractResponseType
{
    /**
     * Botblock token that is used to validate that the user is a human and not a bot.
     *
     * @var string $challengeToken
     */
    private $challengeToken = null;

    /**
     * The URL of the image your application should display to
     *  the user for a botblock challenge.
     *
     * @var string $imageChallengeURL
     */
    private $imageChallengeURL = null;

    /**
     * The URL of the audio clip your application should provide for sight-impaired users.
     *  The audio clip corresponds to the image.
     *
     * @var string $audioChallengeURL
     */
    private $audioChallengeURL = null;

    /**
     * Gets as challengeToken
     *
     * Botblock token that is used to validate that the user is a human and not a bot.
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
     * Botblock token that is used to validate that the user is a human and not a bot.
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
     * Gets as imageChallengeURL
     *
     * The URL of the image your application should display to
     *  the user for a botblock challenge.
     *
     * @return string
     */
    public function getImageChallengeURL()
    {
        return $this->imageChallengeURL;
    }

    /**
     * Sets a new imageChallengeURL
     *
     * The URL of the image your application should display to
     *  the user for a botblock challenge.
     *
     * @param string $imageChallengeURL
     * @return self
     */
    public function setImageChallengeURL($imageChallengeURL)
    {
        $this->imageChallengeURL = $imageChallengeURL;
        return $this;
    }

    /**
     * Gets as audioChallengeURL
     *
     * The URL of the audio clip your application should provide for sight-impaired users.
     *  The audio clip corresponds to the image.
     *
     * @return string
     */
    public function getAudioChallengeURL()
    {
        return $this->audioChallengeURL;
    }

    /**
     * Sets a new audioChallengeURL
     *
     * The URL of the audio clip your application should provide for sight-impaired users.
     *  The audio clip corresponds to the image.
     *
     * @param string $audioChallengeURL
     * @return self
     */
    public function setAudioChallengeURL($audioChallengeURL)
    {
        $this->audioChallengeURL = $audioChallengeURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getChallengeToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ChallengeToken", $value);
        }
        $value = $this->getImageChallengeURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImageChallengeURL", $value);
        }
        $value = $this->getAudioChallengeURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AudioChallengeURL", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ChallengeToken');
        if (null !== $value) {
            $this->setChallengeToken($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImageChallengeURL');
        if (null !== $value) {
            $this->setImageChallengeURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AudioChallengeURL');
        if (null !== $value) {
            $this->setAudioChallengeURL($value);
        }
    }
}
