<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BotBlockResponseType
 *
 * This type is used by the <b>BotBlock</b> container that is returned in the <b>PlaceOffer</b> call response if eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. The authentication token and URL values that are returned in the <b>PlaceOffer</b> call response are then passed in the <b>BotBlock</b> container of a subsequent <b>PlaceOffer</b> call.
 * XSD Type: BotBlockResponseType
 */
class BotBlockResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This string value is an encrypted token that eBay generates and returns in the <b>BotBlock.BotBlockToken</b> field of the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and the URL and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and the URL values.
     *
     * @var string $botBlockToken
     */
    private $botBlockToken = null;

    /**
     * This string value is a URL to an image that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockUrl</b> and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field. For site-impaired users, the <b>BotBlockAudioUrl</b> field might be returned instead, in which case, the <b>BotBlockAudioUrl</b> value should be passed into the<b>BotBlockUserInput</b> field instead.
     *
     * @var string $botBlockUrl
     */
    private $botBlockUrl = null;

    /**
     * This string value is a URL to an audio clip that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockAudioUrl</b> and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field will generally only be returned for site-impaired users. If this field is not returned, but the <b>BotBlockUrl</b> field is returned instead, the <b>BotBlockUrl</b> value should be passed into the <b>BotBlockUserInput</b> field of the subsequent <b>PlaceOffer</b> call instead.
     *  </span>
     *
     * @var string $botBlockAudioUrl
     */
    private $botBlockAudioUrl = null;

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
     * Gets as botBlockUrl
     *
     * This string value is a URL to an image that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockUrl</b> and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field. For site-impaired users, the <b>BotBlockAudioUrl</b> field might be returned instead, in which case, the <b>BotBlockAudioUrl</b> value should be passed into the<b>BotBlockUserInput</b> field instead.
     *
     * @return string
     */
    public function getBotBlockUrl()
    {
        return $this->botBlockUrl;
    }

    /**
     * Sets a new botBlockUrl
     *
     * This string value is a URL to an image that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockUrl</b> and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field. For site-impaired users, the <b>BotBlockAudioUrl</b> field might be returned instead, in which case, the <b>BotBlockAudioUrl</b> value should be passed into the<b>BotBlockUserInput</b> field instead.
     *
     * @param string $botBlockUrl
     * @return self
     */
    public function setBotBlockUrl($botBlockUrl)
    {
        $this->botBlockUrl = $botBlockUrl;
        return $this;
    }

    /**
     * Gets as botBlockAudioUrl
     *
     * This string value is a URL to an audio clip that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockAudioUrl</b> and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field will generally only be returned for site-impaired users. If this field is not returned, but the <b>BotBlockUrl</b> field is returned instead, the <b>BotBlockUrl</b> value should be passed into the <b>BotBlockUserInput</b> field of the subsequent <b>PlaceOffer</b> call instead.
     *  </span>
     *
     * @return string
     */
    public function getBotBlockAudioUrl()
    {
        return $this->botBlockAudioUrl;
    }

    /**
     * Sets a new botBlockAudioUrl
     *
     * This string value is a URL to an audio clip that eBay generates and returns in the <b>PlaceOffer</b> call response when eBay is requiring that the user supply an authentication token and URL in order for eBay to process the <b>PlaceOffer</b> call. As soon as a user gets a <b>BotBlock</b> container returned in the <b>PlaceOffer</b> call response, that user should grab the authentication token and this <b>BotBlockAudioUrl</b> and then run another <b>PlaceOffer</b> call, but this time using the <b>BotBlock</b> container and passing in the authentication token and this URL value in the <b>BotBlockUserInput</b> field.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b>
     *  This field will generally only be returned for site-impaired users. If this field is not returned, but the <b>BotBlockUrl</b> field is returned instead, the <b>BotBlockUrl</b> value should be passed into the <b>BotBlockUserInput</b> field of the subsequent <b>PlaceOffer</b> call instead.
     *  </span>
     *
     * @param string $botBlockAudioUrl
     * @return self
     */
    public function setBotBlockAudioUrl($botBlockAudioUrl)
    {
        $this->botBlockAudioUrl = $botBlockAudioUrl;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->botBlockToken;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BotBlockToken', null, (string) $value);
        }
        $value = $this->botBlockUrl;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BotBlockUrl', null, (string) $value);
        }
        $value = $this->botBlockAudioUrl;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BotBlockAudioUrl', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BotBlockResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'BotBlockToken':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->botBlockToken = $value;
                    }
                    return true;
                case 'BotBlockUrl':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->botBlockUrl = $value;
                    }
                    return true;
                case 'BotBlockAudioUrl':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->botBlockAudioUrl = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
