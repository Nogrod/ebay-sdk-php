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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getTokenStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TokenStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TokenStatus');
        if (null !== $value) {
            $this->setTokenStatus(\Nogrod\eBaySDK\Trading\TokenStatusType::fromKeyValue($value));
        }
    }
}
