<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConfirmIdentityRequestType
 *
 * Returns the ID of a user who has gone through an application's consent flow
 *  process for obtaining an authorization token.
 * XSD Type: ConfirmIdentityRequestType
 */
class ConfirmIdentityRequestType extends AbstractRequestType
{
    /**
     * A string obtained by making a <b>GetSessionID</b> call, passed in redirect URL to the eBay signin page.
     *
     * @var string $sessionID
     */
    private $sessionID = null;

    /**
     * Gets as sessionID
     *
     * A string obtained by making a <b>GetSessionID</b> call, passed in redirect URL to the eBay signin page.
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
     * A string obtained by making a <b>GetSessionID</b> call, passed in redirect URL to the eBay signin page.
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ConfirmIdentityRequestType
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
}
