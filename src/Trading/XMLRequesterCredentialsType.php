<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing XMLRequesterCredentialsType
 *
 *
 * XSD Type: XMLRequesterCredentialsType
 */
class XMLRequesterCredentialsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * eBay user ID (i.e., eBay.com Web site login name) for the user the application
     *  is retrieving a token for. This is typically the application's end-user (not
     *  the developer).
     *
     * @var string $username
     */
    private $username = null;

    /**
     * Password for the user specified in Username.
     *
     * @var string $password
     */
    private $password = null;

    /**
     * Authentication token representing the user who is making the request. The
     *  user's token must be retrieved from eBay. To determine a user's authentication
     *  token, see the Authentication and Authorization information in the eBay Web
     *  Services guide. For calls that list or retrieve item or transaction data, the
     *  user usually needs to be the seller of the item in question or, in some cases,
     *  the buyer. Similarly, calls that retrieve user or account data may be
     *  restricted to the user whose data is being requested. The documentation for
     *  each call includes information about such restrictions.
     *
     * @var string $eBayAuthToken
     */
    private $eBayAuthToken = null;

    /**
     * Gets as username
     *
     * eBay user ID (i.e., eBay.com Web site login name) for the user the application
     *  is retrieving a token for. This is typically the application's end-user (not
     *  the developer).
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a new username
     *
     * eBay user ID (i.e., eBay.com Web site login name) for the user the application
     *  is retrieving a token for. This is typically the application's end-user (not
     *  the developer).
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets as password
     *
     * Password for the user specified in Username.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * Password for the user specified in Username.
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as eBayAuthToken
     *
     * Authentication token representing the user who is making the request. The
     *  user's token must be retrieved from eBay. To determine a user's authentication
     *  token, see the Authentication and Authorization information in the eBay Web
     *  Services guide. For calls that list or retrieve item or transaction data, the
     *  user usually needs to be the seller of the item in question or, in some cases,
     *  the buyer. Similarly, calls that retrieve user or account data may be
     *  restricted to the user whose data is being requested. The documentation for
     *  each call includes information about such restrictions.
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
     * Authentication token representing the user who is making the request. The
     *  user's token must be retrieved from eBay. To determine a user's authentication
     *  token, see the Authentication and Authorization information in the eBay Web
     *  Services guide. For calls that list or retrieve item or transaction data, the
     *  user usually needs to be the seller of the item in question or, in some cases,
     *  the buyer. Similarly, calls that retrieve user or account data may be
     *  restricted to the user whose data is being requested. The documentation for
     *  each call includes information about such restrictions.
     *
     * @param string $eBayAuthToken
     * @return self
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
        $this->eBayAuthToken = $eBayAuthToken;
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
        $value = $this->username;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Username', null, (string) $value);
        }
        $value = $this->password;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Password', null, (string) $value);
        }
        $value = $this->eBayAuthToken;
        if (null !== $value) {
            $writer->writeElementNs(null, 'eBayAuthToken', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\XMLRequesterCredentialsType
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
                case 'Username':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->username = $value;
                    }
                    return true;
                case 'Password':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->password = $value;
                    }
                    return true;
                case 'eBayAuthToken':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eBayAuthToken = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
