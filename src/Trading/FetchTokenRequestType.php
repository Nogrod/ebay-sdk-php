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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->secretID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SecretID', null, (string) $value);
        }
        $value = $this->sessionID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SessionID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FetchTokenRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'SecretID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->secretID = $value;
                    }
                    return true;
                case 'SessionID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sessionID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['SecretID'] = $this->secretID;
        $data['SessionID'] = $this->sessionID;
        return $data;
    }
}
