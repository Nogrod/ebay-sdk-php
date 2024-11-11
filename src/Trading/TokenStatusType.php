<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TokenStatusType
 *
 * Returns token status.
 * XSD Type: TokenStatusType
 */
class TokenStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Current token status.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Identifies the user to whom the token belongs.
     *
     * @var string $eIASToken
     */
    private $eIASToken = null;

    /**
     * Original expiration time for the token.
     *
     * @var \DateTime $expirationTime
     */
    private $expirationTime = null;

    /**
     * Token revocation time, if the token has been revoked.
     *
     * @var \DateTime $revocationTime
     */
    private $revocationTime = null;

    /**
     * Gets as status
     *
     * Current token status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Current token status.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as eIASToken
     *
     * Identifies the user to whom the token belongs.
     *
     * @return string
     */
    public function getEIASToken()
    {
        return $this->eIASToken;
    }

    /**
     * Sets a new eIASToken
     *
     * Identifies the user to whom the token belongs.
     *
     * @param string $eIASToken
     * @return self
     */
    public function setEIASToken($eIASToken)
    {
        $this->eIASToken = $eIASToken;
        return $this;
    }

    /**
     * Gets as expirationTime
     *
     * Original expiration time for the token.
     *
     * @return \DateTime
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * Sets a new expirationTime
     *
     * Original expiration time for the token.
     *
     * @param \DateTime $expirationTime
     * @return self
     */
    public function setExpirationTime(\DateTime $expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * Gets as revocationTime
     *
     * Token revocation time, if the token has been revoked.
     *
     * @return \DateTime
     */
    public function getRevocationTime()
    {
        return $this->revocationTime;
    }

    /**
     * Sets a new revocationTime
     *
     * Token revocation time, if the token has been revoked.
     *
     * @param \DateTime $revocationTime
     * @return self
     */
    public function setRevocationTime(\DateTime $revocationTime)
    {
        $this->revocationTime = $revocationTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getEIASToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EIASToken", $value);
        }
        $value = $this->getExpirationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpirationTime", $value);
        }
        $value = $this->getRevocationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RevocationTime", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EIASToken');
        if (null !== $value) {
            $this->setEIASToken($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpirationTime');
        if (null !== $value) {
            $this->setExpirationTime(new \DateTime($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RevocationTime');
        if (null !== $value) {
            $this->setRevocationTime(new \DateTime($value));
        }
    }
}
