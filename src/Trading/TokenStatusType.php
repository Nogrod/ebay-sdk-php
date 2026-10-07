<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TokenStatusType
 *
 * Returns token status.
 * XSD Type: TokenStatusType
 */
class TokenStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->status;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Status', null, (string) $value);
        }
        $value = $this->eIASToken;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EIASToken', null, (string) $value);
        }
        $value = $this->expirationTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExpirationTime', null, Func::formatDateTime($value));
        }
        $value = $this->revocationTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RevocationTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TokenStatusType
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
                case 'Status':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->status = $value;
                    }
                    return true;
                case 'EIASToken':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eIASToken = $value;
                    }
                    return true;
                case 'ExpirationTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->expirationTime = new \DateTime($value);
                    }
                    return true;
                case 'RevocationTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->revocationTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Status'] = $this->status;
        $data['EIASToken'] = $this->eIASToken;
        $data['ExpirationTime'] = Func::jsonDate($this->expirationTime);
        $data['RevocationTime'] = Func::jsonDate($this->revocationTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
