<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FetchTokenResponseType
 *
 * Includes the authentication token for the user and the date it expires.
 * XSD Type: FetchTokenResponseType
 */
class FetchTokenResponseType extends AbstractResponseType
{
    /**
     * The authentication token for the user.
     *
     * @var string $eBayAuthToken
     */
    private $eBayAuthToken = null;

    /**
     * Date and time at which the token returned in eBayAuthToken expires
     *  and can no longer be used to authenticate the user for that application.
     *
     * @var \DateTime $hardExpirationTime
     */
    private $hardExpirationTime = null;

    /**
     * The REST authentication token for the user.
     *
     * @var string $rESTToken
     */
    private $rESTToken = null;

    /**
     * Gets as eBayAuthToken
     *
     * The authentication token for the user.
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
     * The authentication token for the user.
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
     * Gets as hardExpirationTime
     *
     * Date and time at which the token returned in eBayAuthToken expires
     *  and can no longer be used to authenticate the user for that application.
     *
     * @return \DateTime
     */
    public function getHardExpirationTime()
    {
        return $this->hardExpirationTime;
    }

    /**
     * Sets a new hardExpirationTime
     *
     * Date and time at which the token returned in eBayAuthToken expires
     *  and can no longer be used to authenticate the user for that application.
     *
     * @param \DateTime $hardExpirationTime
     * @return self
     */
    public function setHardExpirationTime(\DateTime $hardExpirationTime)
    {
        $this->hardExpirationTime = $hardExpirationTime;
        return $this;
    }

    /**
     * Gets as rESTToken
     *
     * The REST authentication token for the user.
     *
     * @return string
     */
    public function getRESTToken()
    {
        return $this->rESTToken;
    }

    /**
     * Sets a new rESTToken
     *
     * The REST authentication token for the user.
     *
     * @param string $rESTToken
     * @return self
     */
    public function setRESTToken($rESTToken)
    {
        $this->rESTToken = $rESTToken;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->eBayAuthToken;
        if (null !== $value) {
            $writer->writeElementNs(null, 'eBayAuthToken', null, (string) $value);
        }
        $value = $this->hardExpirationTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HardExpirationTime', null, Func::formatDateTime($value));
        }
        $value = $this->rESTToken;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RESTToken', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FetchTokenResponseType
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
                case 'eBayAuthToken':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eBayAuthToken = $value;
                    }
                    return true;
                case 'HardExpirationTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hardExpirationTime = new \DateTime($value);
                    }
                    return true;
                case 'RESTToken':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->rESTToken = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['eBayAuthToken'] = $this->eBayAuthToken;
        $data['HardExpirationTime'] = Func::jsonDate($this->hardExpirationTime);
        $data['RESTToken'] = $this->rESTToken;
        return $data;
    }
}
