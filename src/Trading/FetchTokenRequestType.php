<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FetchTokenRequestType
 *
 * Retrieves an authentication token for a user.
 * XSD Type: FetchTokenRequestType
 */
class FetchTokenRequestType extends AbstractRequestType
{
    /**
     * A value associated with the token retrieval request. SecretID is
     *  defined by the application, and is passed in the redirect URL to the
     *  eBay sign-in page. eBay recommends using a UUID for the secret ID
     *  value. You must also set Username (part of the RequesterCredentials)
     *  for the particular user of interest. SecretID and Username are not
     *  required if SessionID is present.
     *
     * @var string $secretID
     */
    private $secretID = null;

    /**
     * A value associated with the token retrieval request. eBay generates the
     *  session ID when the application makes a GetSessionID request. SessionID
     *  is passed in the redirect URL to the eBay sign-in page. The advantage
     *  of using SessionID is that it does not require UserID as part of the
     *  FetchToken request. SessionID is not required if SecretID is present.
     *
     * @var string $sessionID
     */
    private $sessionID = null;

    /**
     * Gets as secretID
     *
     * A value associated with the token retrieval request. SecretID is
     *  defined by the application, and is passed in the redirect URL to the
     *  eBay sign-in page. eBay recommends using a UUID for the secret ID
     *  value. You must also set Username (part of the RequesterCredentials)
     *  for the particular user of interest. SecretID and Username are not
     *  required if SessionID is present.
     *
     * @return string
     */
    public function getSecretID()
    {
        return $this->secretID;
    }

    /**
     * Sets a new secretID
     *
     * A value associated with the token retrieval request. SecretID is
     *  defined by the application, and is passed in the redirect URL to the
     *  eBay sign-in page. eBay recommends using a UUID for the secret ID
     *  value. You must also set Username (part of the RequesterCredentials)
     *  for the particular user of interest. SecretID and Username are not
     *  required if SessionID is present.
     *
     * @param string $secretID
     * @return self
     */
    public function setSecretID($secretID)
    {
        $this->secretID = $secretID;
        return $this;
    }

    /**
     * Gets as sessionID
     *
     * A value associated with the token retrieval request. eBay generates the
     *  session ID when the application makes a GetSessionID request. SessionID
     *  is passed in the redirect URL to the eBay sign-in page. The advantage
     *  of using SessionID is that it does not require UserID as part of the
     *  FetchToken request. SessionID is not required if SecretID is present.
     *
     * @return string
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * Sets a new sessionID
     *
     * A value associated with the token retrieval request. eBay generates the
     *  session ID when the application makes a GetSessionID request. SessionID
     *  is passed in the redirect URL to the eBay sign-in page. The advantage
     *  of using SessionID is that it does not require UserID as part of the
     *  FetchToken request. SessionID is not required if SecretID is present.
     *
     * @param string $sessionID
     * @return self
     */
    public function setSessionID($sessionID)
    {
        $this->sessionID = $sessionID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSecretID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecretID", $value);
        }
        $value = $this->getSessionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SessionID", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\FetchTokenRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecretID');
        if (null !== $value) {
            $this->setSecretID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SessionID');
        if (null !== $value) {
            $this->setSessionID($value);
        }
    }
}
