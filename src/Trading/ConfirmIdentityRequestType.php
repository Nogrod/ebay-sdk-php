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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSessionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SessionID", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SessionID');
        if (null !== $value) {
            $this->setSessionID($value);
        }
    }
}
