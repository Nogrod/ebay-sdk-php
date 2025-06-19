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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAppId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AppId", $value);
        }
        $value = $this->getDevId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DevId", $value);
        }
        $value = $this->getAuthCert();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AuthCert", $value);
        }
        $value = $this->getUsername();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Username", $value);
        }
        $value = $this->getPassword();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Password", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\UserIdPasswordType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AppId');
        if (null !== $value) {
            $this->setAppId($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DevId');
        if (null !== $value) {
            $this->setDevId($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AuthCert');
        if (null !== $value) {
            $this->setAuthCert($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Username');
        if (null !== $value) {
            $this->setUsername($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Password');
        if (null !== $value) {
            $this->setPassword($value);
        }
    }
}
