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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUsername();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Username", $value);
        }
        $value = $this->getPassword();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Password", $value);
        }
        $value = $this->getEBayAuthToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayAuthToken", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Username');
        if (null !== $value) {
            $this->setUsername($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Password');
        if (null !== $value) {
            $this->setPassword($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayAuthToken');
        if (null !== $value) {
            $this->setEBayAuthToken($value);
        }
    }
}
