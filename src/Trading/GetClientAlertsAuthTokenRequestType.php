<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetClientAlertsAuthTokenRequestType
 *
 * This is the base request type for the <b>GetClientAlertsAuthToken</b> call. This call retrieves a Client Alerts token for the user, which is required when the user makes a <b>GetUserAlerts</b> call (Client Alerts API).
 * XSD Type: GetClientAlertsAuthTokenRequestType
 */
class GetClientAlertsAuthTokenRequestType extends AbstractRequestType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
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
    }
}
