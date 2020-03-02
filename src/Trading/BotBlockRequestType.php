<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BotBlockRequestType
 *
 * Type used by the <b>BotBlock</b> container of the <b>PlaceOffer</b> call request. The <b>BotBlock</b> container is conditionally required in a <b>PlaceOffer</b> call request if the previous <b>PlaceOffer</b> call resulted in a <b>BotBlock</b> container being returned in the response. The <b>BotBlock</b> container in the response will contain an authentication token and a URL that will need to be passed into the <b>BotBlock</b> container of the <b>PlaceOffer</b> call request in the subsequent call.
 * XSD Type: BotBlockRequestType
 */
class BotBlockRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This string value is an encrypted token that eBay generates and returns in the <b>BotBlock.BotBlockToken</b> field of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     *
     * @var string $botBlockToken
     */
    private $botBlockToken = null;

    /**
     * This string value is a URL that eBay generates and returns in either the <b>BotBlock.BotBlockUrl</b> or <b>BotBlock.BotBlockAudioUrl</b> field (returned for site-impaired users) of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     *
     * @var string $botBlockUserInput
     */
    private $botBlockUserInput = null;

    /**
     * Gets as botBlockToken
     *
     * This string value is an encrypted token that eBay generates and returns in the <b>BotBlock.BotBlockToken</b> field of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     *
     * @return string
     */
    public function getBotBlockToken()
    {
        return $this->botBlockToken;
    }

    /**
     * Sets a new botBlockToken
     *
     * This string value is an encrypted token that eBay generates and returns in the <b>BotBlock.BotBlockToken</b> field of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     *
     * @param string $botBlockToken
     * @return self
     */
    public function setBotBlockToken($botBlockToken)
    {
        $this->botBlockToken = $botBlockToken;
        return $this;
    }

    /**
     * Gets as botBlockUserInput
     *
     * This string value is a URL that eBay generates and returns in either the <b>BotBlock.BotBlockUrl</b> or <b>BotBlock.BotBlockAudioUrl</b> field (returned for site-impaired users) of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     *
     * @return string
     */
    public function getBotBlockUserInput()
    {
        return $this->botBlockUserInput;
    }

    /**
     * Sets a new botBlockUserInput
     *
     * This string value is a URL that eBay generates and returns in either the <b>BotBlock.BotBlockUrl</b> or <b>BotBlock.BotBlockAudioUrl</b> field (returned for site-impaired users) of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     *
     * @param string $botBlockUserInput
     * @return self
     */
    public function setBotBlockUserInput($botBlockUserInput)
    {
        $this->botBlockUserInput = $botBlockUserInput;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBotBlockToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BotBlockToken", $value);
        }
        $value = $this->getBotBlockUserInput();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BotBlockUserInput", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BotBlockToken');
        if (null !== $value) {
            $this->setBotBlockToken($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BotBlockUserInput');
        if (null !== $value) {
            $this->setBotBlockUserInput($value);
        }
    }
}
