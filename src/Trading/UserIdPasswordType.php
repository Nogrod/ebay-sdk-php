<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UserIdPasswordType
 *
 *
 * XSD Type: UserIdPasswordType
 */
class UserIdPasswordType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The application ID that is unique to each application you (or your company)
     *  has registered with the eBay Developers Program. If you are executing a call
     *  in the Sandbox, this is the "AppId" value that eBay issued to you when you
     *  received your Sandbox keys. If you are executing a call in Production, this is
     *  the "AppId" value that eBay issued to you when you received your Production
     *  keys.
     *
     * @var string $appId
     */
    private $appId = null;

    /**
     * The unique developer ID that the eBay Developers Program issued to you (or
     *  your company). If you are executing a call in the Sandbox, this is the "DevId"
     *  value that eBay issued to you when you received your Sandbox keys. Typically,
     *  you receive your Sandbox keys when you register as a new developer. If you are
     *  executing a call in Production, this is the "DevId" value that eBay issued to
     *  you when you received your Production keys. Typically, you receive your
     *  Production keys when you certify an application.
     *
     * @var string $devId
     */
    private $devId = null;

    /**
     * Authentication certificate that authenticates the application when making API
     *  calls. If you are executing a call in the Sandbox, this is the "CertId" value
     *  that eBay issued to you when you received your Sandbox keys. If you are
     *  executing a call in Production, this is the "CertId" value that eBay issued to
     *  you when you received your Production keys. This is unrelated to auth tokens.
     *
     * @var string $authCert
     */
    private $authCert = null;

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
     * Gets as appId
     *
     * The application ID that is unique to each application you (or your company)
     *  has registered with the eBay Developers Program. If you are executing a call
     *  in the Sandbox, this is the "AppId" value that eBay issued to you when you
     *  received your Sandbox keys. If you are executing a call in Production, this is
     *  the "AppId" value that eBay issued to you when you received your Production
     *  keys.
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets a new appId
     *
     * The application ID that is unique to each application you (or your company)
     *  has registered with the eBay Developers Program. If you are executing a call
     *  in the Sandbox, this is the "AppId" value that eBay issued to you when you
     *  received your Sandbox keys. If you are executing a call in Production, this is
     *  the "AppId" value that eBay issued to you when you received your Production
     *  keys.
     *
     * @param string $appId
     * @return self
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * Gets as devId
     *
     * The unique developer ID that the eBay Developers Program issued to you (or
     *  your company). If you are executing a call in the Sandbox, this is the "DevId"
     *  value that eBay issued to you when you received your Sandbox keys. Typically,
     *  you receive your Sandbox keys when you register as a new developer. If you are
     *  executing a call in Production, this is the "DevId" value that eBay issued to
     *  you when you received your Production keys. Typically, you receive your
     *  Production keys when you certify an application.
     *
     * @return string
     */
    public function getDevId()
    {
        return $this->devId;
    }

    /**
     * Sets a new devId
     *
     * The unique developer ID that the eBay Developers Program issued to you (or
     *  your company). If you are executing a call in the Sandbox, this is the "DevId"
     *  value that eBay issued to you when you received your Sandbox keys. Typically,
     *  you receive your Sandbox keys when you register as a new developer. If you are
     *  executing a call in Production, this is the "DevId" value that eBay issued to
     *  you when you received your Production keys. Typically, you receive your
     *  Production keys when you certify an application.
     *
     * @param string $devId
     * @return self
     */
    public function setDevId($devId)
    {
        $this->devId = $devId;
        return $this;
    }

    /**
     * Gets as authCert
     *
     * Authentication certificate that authenticates the application when making API
     *  calls. If you are executing a call in the Sandbox, this is the "CertId" value
     *  that eBay issued to you when you received your Sandbox keys. If you are
     *  executing a call in Production, this is the "CertId" value that eBay issued to
     *  you when you received your Production keys. This is unrelated to auth tokens.
     *
     * @return string
     */
    public function getAuthCert()
    {
        return $this->authCert;
    }

    /**
     * Sets a new authCert
     *
     * Authentication certificate that authenticates the application when making API
     *  calls. If you are executing a call in the Sandbox, this is the "CertId" value
     *  that eBay issued to you when you received your Sandbox keys. If you are
     *  executing a call in Production, this is the "CertId" value that eBay issued to
     *  you when you received your Production keys. This is unrelated to auth tokens.
     *
     * @param string $authCert
     * @return self
     */
    public function setAuthCert($authCert)
    {
        $this->authCert = $authCert;
        return $this;
    }

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
        $value = $this->appId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AppId', null, (string) $value);
        }
        $value = $this->devId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DevId', null, (string) $value);
        }
        $value = $this->authCert;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AuthCert', null, (string) $value);
        }
        $value = $this->username;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Username', null, (string) $value);
        }
        $value = $this->password;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Password', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\UserIdPasswordType
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
                case 'AppId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->appId = $value;
                    }
                    return true;
                case 'DevId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->devId = $value;
                    }
                    return true;
                case 'AuthCert':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->authCert = $value;
                    }
                    return true;
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
            }
        }
        return false;
    }
}
