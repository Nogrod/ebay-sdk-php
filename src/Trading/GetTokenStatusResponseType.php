<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetTokenStatusResponseType
 *
 * The base response of the <b>GetTokenStatus</b> call. This call retrieves the status of a user token.
 * XSD Type: GetTokenStatusResponseType
 */
class GetTokenStatusResponseType extends AbstractResponseType
{
    /**
     * This container value indicates the status and expiration date of a user token. If a user token was revoked, the date/time of the revocation is also returned under this container.
     *
     * @var \Nogrod\eBaySDK\Trading\TokenStatusType $tokenStatus
     */
    private $tokenStatus = null;

    /**
     * Gets as tokenStatus
     *
     * This container value indicates the status and expiration date of a user token. If a user token was revoked, the date/time of the revocation is also returned under this container.
     *
     * @return \Nogrod\eBaySDK\Trading\TokenStatusType
     */
    public function getTokenStatus()
    {
        return $this->tokenStatus;
    }

    /**
     * Sets a new tokenStatus
     *
     * This container value indicates the status and expiration date of a user token. If a user token was revoked, the date/time of the revocation is also returned under this container.
     *
     * @param \Nogrod\eBaySDK\Trading\TokenStatusType $tokenStatus
     * @return self
     */
    public function setTokenStatus(\Nogrod\eBaySDK\Trading\TokenStatusType $tokenStatus)
    {
        $this->tokenStatus = $tokenStatus;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->tokenStatus;
        if (null !== $value) {
            $writer->startElementNs(null, 'TokenStatus', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetTokenStatusResponseType
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
                case 'TokenStatus':
                    $this->tokenStatus = \Nogrod\eBaySDK\Trading\TokenStatusType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['TokenStatus'] = $this->tokenStatus;
        return $data;
    }
}
