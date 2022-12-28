<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetClientAlertsAuthTokenResponseType
 *
 * Returns a Client Alerts token.
 * XSD Type: GetClientAlertsAuthTokenResponseType
 */
class GetClientAlertsAuthTokenResponseType extends AbstractResponseType
{
    /**
     * This token string is required for the Login call in the Client Alerts API.
     *  The Client Alerts GetUserAlerts call, which returns alerts about events
     *  associated with a specific user, requires Login.
     *
     * @var string $clientAlertsAuthToken
     */
    private $clientAlertsAuthToken = null;

    /**
     * A Client Alerts token expires after seven days.
     *
     * @var \DateTime $hardExpirationTime
     */
    private $hardExpirationTime = null;

    /**
     * Gets as clientAlertsAuthToken
     *
     * This token string is required for the Login call in the Client Alerts API.
     *  The Client Alerts GetUserAlerts call, which returns alerts about events
     *  associated with a specific user, requires Login.
     *
     * @return string
     */
    public function getClientAlertsAuthToken()
    {
        return $this->clientAlertsAuthToken;
    }

    /**
     * Sets a new clientAlertsAuthToken
     *
     * This token string is required for the Login call in the Client Alerts API.
     *  The Client Alerts GetUserAlerts call, which returns alerts about events
     *  associated with a specific user, requires Login.
     *
     * @param string $clientAlertsAuthToken
     * @return self
     */
    public function setClientAlertsAuthToken($clientAlertsAuthToken)
    {
        $this->clientAlertsAuthToken = $clientAlertsAuthToken;
        return $this;
    }

    /**
     * Gets as hardExpirationTime
     *
     * A Client Alerts token expires after seven days.
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
     * A Client Alerts token expires after seven days.
     *
     * @param \DateTime $hardExpirationTime
     * @return self
     */
    public function setHardExpirationTime(\DateTime $hardExpirationTime)
    {
        $this->hardExpirationTime = $hardExpirationTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getClientAlertsAuthToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClientAlertsAuthToken", $value);
        }
        $value = $this->getHardExpirationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HardExpirationTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClientAlertsAuthToken');
        if (null !== $value) {
            $this->setClientAlertsAuthToken($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HardExpirationTime');
        if (null !== $value) {
            $this->setHardExpirationTime(new \DateTime($value));
        }
    }
}
