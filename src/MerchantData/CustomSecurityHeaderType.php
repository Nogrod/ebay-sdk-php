<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CustomSecurityHeaderType
 *
 * Security header used for SOAP API calls.
 * XSD Type: CustomSecurityHeaderType
 */
class CustomSecurityHeaderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Authentication token representing the user who is making the
     *  request. The user's token must be retrieved from eBay. To determine
     *  a user's authentication token, see the Authentication and
     *  Authorization information in the eBay Web Services guide. For calls
     *  that list or retrieve item or transaction data, the user usually
     *  needs to be the seller of the item in question or, in some cases,
     *  the buyer. Similarly, calls that retrieve user or account data may
     *  be restricted to the user whose data is being requested. The
     *  documentation for each call includes information about such
     *  restrictions.
     *
     * @var string $eBayAuthToken
     */
    private $eBayAuthToken = null;

    /**
     * Expiration date of the user's authentication token. Only returned
     *  within the 7-day period prior to a token's expiration. To ensure
     *  that user authentication tokens are secure and to help avoid a
     *  user's token being compromised, tokens have a limited life span. A
     *  token is only valid for a period of time (set by eBay). After this
     *  amount of time has passed, the token expires and must be replaced
     *  with a new token.
     *
     * @var string $hardExpirationWarning
     */
    private $hardExpirationWarning = null;

    /**
     * Authentication information for the user on whose behalf the
     *  application is making the request, and authorization information for
     *  the application making the request. Only registered eBay users are
     *  allowed to make API calls. To verify that a user is registered, your
     *  application normally needs to pass a user-specific value called an
     *  "authentication token" in the request. This is equivalent to signing
     *  in on the eBay Web site. As API calls do not pass session
     *  information, you need to pass the user's authentication token every
     *  time you invoke a call on their behalf. All calls require an
     *  authentication token, except the calls you use to retrieve a token
     *  in the first place. For such calls, you use the eBay member's
     *  username and password instead.
     *
     * @var \Nogrod\eBaySDK\MerchantData\UserIdPasswordType $credentials
     */
    private $credentials = null;

    /**
     * A Base64-encoded MD5 hash that allows the recipient of a Platform
     *  Notification to verify this is a valid Platform Notification sent by
     *  eBay.
     *
     * @var string $notificationSignature
     */
    private $notificationSignature = null;

    /**
     * Gets as eBayAuthToken
     *
     * Authentication token representing the user who is making the
     *  request. The user's token must be retrieved from eBay. To determine
     *  a user's authentication token, see the Authentication and
     *  Authorization information in the eBay Web Services guide. For calls
     *  that list or retrieve item or transaction data, the user usually
     *  needs to be the seller of the item in question or, in some cases,
     *  the buyer. Similarly, calls that retrieve user or account data may
     *  be restricted to the user whose data is being requested. The
     *  documentation for each call includes information about such
     *  restrictions.
     *
     * @return string
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }

    /**
     * Sets a new eBayAuthToken
     *
     * Authentication token representing the user who is making the
     *  request. The user's token must be retrieved from eBay. To determine
     *  a user's authentication token, see the Authentication and
     *  Authorization information in the eBay Web Services guide. For calls
     *  that list or retrieve item or transaction data, the user usually
     *  needs to be the seller of the item in question or, in some cases,
     *  the buyer. Similarly, calls that retrieve user or account data may
     *  be restricted to the user whose data is being requested. The
     *  documentation for each call includes information about such
     *  restrictions.
     *
     * @param string $eBayAuthToken
     * @return self
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
        $this->eBayAuthToken = $eBayAuthToken;
        return $this;
    }

    /**
     * Gets as hardExpirationWarning
     *
     * Expiration date of the user's authentication token. Only returned
     *  within the 7-day period prior to a token's expiration. To ensure
     *  that user authentication tokens are secure and to help avoid a
     *  user's token being compromised, tokens have a limited life span. A
     *  token is only valid for a period of time (set by eBay). After this
     *  amount of time has passed, the token expires and must be replaced
     *  with a new token.
     *
     * @return string
     */
    public function getHardExpirationWarning()
    {
        return $this->hardExpirationWarning;
    }

    /**
     * Sets a new hardExpirationWarning
     *
     * Expiration date of the user's authentication token. Only returned
     *  within the 7-day period prior to a token's expiration. To ensure
     *  that user authentication tokens are secure and to help avoid a
     *  user's token being compromised, tokens have a limited life span. A
     *  token is only valid for a period of time (set by eBay). After this
     *  amount of time has passed, the token expires and must be replaced
     *  with a new token.
     *
     * @param string $hardExpirationWarning
     * @return self
     */
    public function setHardExpirationWarning($hardExpirationWarning)
    {
        $this->hardExpirationWarning = $hardExpirationWarning;
        return $this;
    }

    /**
     * Gets as credentials
     *
     * Authentication information for the user on whose behalf the
     *  application is making the request, and authorization information for
     *  the application making the request. Only registered eBay users are
     *  allowed to make API calls. To verify that a user is registered, your
     *  application normally needs to pass a user-specific value called an
     *  "authentication token" in the request. This is equivalent to signing
     *  in on the eBay Web site. As API calls do not pass session
     *  information, you need to pass the user's authentication token every
     *  time you invoke a call on their behalf. All calls require an
     *  authentication token, except the calls you use to retrieve a token
     *  in the first place. For such calls, you use the eBay member's
     *  username and password instead.
     *
     * @return \Nogrod\eBaySDK\MerchantData\UserIdPasswordType
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Sets a new credentials
     *
     * Authentication information for the user on whose behalf the
     *  application is making the request, and authorization information for
     *  the application making the request. Only registered eBay users are
     *  allowed to make API calls. To verify that a user is registered, your
     *  application normally needs to pass a user-specific value called an
     *  "authentication token" in the request. This is equivalent to signing
     *  in on the eBay Web site. As API calls do not pass session
     *  information, you need to pass the user's authentication token every
     *  time you invoke a call on their behalf. All calls require an
     *  authentication token, except the calls you use to retrieve a token
     *  in the first place. For such calls, you use the eBay member's
     *  username and password instead.
     *
     * @param \Nogrod\eBaySDK\MerchantData\UserIdPasswordType $credentials
     * @return self
     */
    public function setCredentials(\Nogrod\eBaySDK\MerchantData\UserIdPasswordType $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * Gets as notificationSignature
     *
     * A Base64-encoded MD5 hash that allows the recipient of a Platform
     *  Notification to verify this is a valid Platform Notification sent by
     *  eBay.
     *
     * @return string
     */
    public function getNotificationSignature()
    {
        return $this->notificationSignature;
    }

    /**
     * Sets a new notificationSignature
     *
     * A Base64-encoded MD5 hash that allows the recipient of a Platform
     *  Notification to verify this is a valid Platform Notification sent by
     *  eBay.
     *
     * @param string $notificationSignature
     * @return self
     */
    public function setNotificationSignature($notificationSignature)
    {
        $this->notificationSignature = $notificationSignature;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEBayAuthToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayAuthToken", $value);
        }
        $value = $this->getHardExpirationWarning();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HardExpirationWarning", $value);
        }
        $value = $this->getCredentials();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Credentials", $value);
        }
        $value = $this->getNotificationSignature();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotificationSignature", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayAuthToken');
        if (null !== $value) {
            $this->setEBayAuthToken($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HardExpirationWarning');
        if (null !== $value) {
            $this->setHardExpirationWarning($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Credentials');
        if (null !== $value) {
            $this->setCredentials(\Nogrod\eBaySDK\MerchantData\UserIdPasswordType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationSignature');
        if (null !== $value) {
            $this->setNotificationSignature($value);
        }
    }
}
