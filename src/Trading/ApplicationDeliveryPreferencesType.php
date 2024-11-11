<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ApplicationDeliveryPreferencesType
 *
 * Type used by the <b>ApplicationDeliveryPreferences</b> container to control/indicate where and how Platform Notifications and/or Client Alerts are delivered to a user application, server, and/or email address.
 * XSD Type: ApplicationDeliveryPreferencesType
 */
class ApplicationDeliveryPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The URL to which eBay delivers all Platform Notifications and Client Alerts sent to the application. For delivery to a server, the URL must begin with "<code>https://</code>" and must be well formed.
     *
     * @var string $applicationURL
     */
    private $applicationURL = null;

    /**
     * This field allows the user to enable or disable Platform Notifications and Client Alerts. Notice that disabling Platform Notifications and Client Alerts will not affect others preferences set in this container.
     *
     * @var string $applicationEnable
     */
    private $applicationEnable = null;

    /**
     * The email address to which eBay sends all application markup and markdown event
     *  notifications. When setting the email address, input must be in the format
     *  "<code>mailto://youremailaddress@yoursite.com</code>". Note that the <b>AlertEnable</b> field must be set to <code>Enable</code> for alert emails to be sent.
     *
     * @var string $alertEmail
     */
    private $alertEmail = null;

    /**
     * <b>For SetNotificationPreferences</b>: include and set <b>AlertEnable</b> to
     *  <code>Enable</code> to receive application markup and markdown alerts, or set to <code>Disable</code> to
     *  disable the alerts. If not included, the <b>AlertEnable</b> defaults to
     *  its current value.
     *  <br/><br/>
     *  <b>For GetNotificationPreferences</b>: this field's value indicates
     *  whether application markup and markdown alerts are enabled or disabled.
     *
     * @var string $alertEnable
     */
    private $alertEnable = null;

    /**
     * The value in this field indicates the type of schema to use for notification payloads. The only supported value is <code>eBLSchemaSOAP</code>, so this field no longer has to be included in a <strong>SetNotificationPreferences</strong> call, since it defaults to<code>eBLSchemaSOAP</code>.
     *
     * @var string $notificationPayloadType
     */
    private $notificationPayloadType = null;

    /**
     * The means of receipt of notification. In most cases, it is Platform (typical API
     *  calls and web interaction), so this is the default, if not specified. For
     *  wireless applications, use SMS. Do not test Client Alerts in production if you
     *  are currently using Platform Notifications.
     *
     * @var string $deviceType
     */
    private $deviceType = null;

    /**
     * Use this field to specify the API version for all notifications for the calling
     *  application. If you do not specify PayloadVersion in
     *  SetNotificationPreferences, the API version for notifications will be based on
     *  the API version specified in your SetNotificationPreferences call.
     *
     * @var string $payloadVersion
     */
    private $payloadVersion = null;

    /**
     * Defines settings for notification URLs (including the URL name in DeliveryURLName). You
     *  define settings for up to 25 notification URLs (including the URL name in
     *  DeliveryURLName) in separate DeliveryURLDetails containers. Associate a user token with
     *  notification URLs by using the token in a SetNotificationPreferences request that
     *  specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use
     *  comma-separated format to specify multiple URL names in
     *  SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these
     *  URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     *
     * @var \Nogrod\eBaySDK\Trading\DeliveryURLDetailType[] $deliveryURLDetails
     */
    private $deliveryURLDetails = [

    ];

    /**
     * Gets as applicationURL
     *
     * The URL to which eBay delivers all Platform Notifications and Client Alerts sent to the application. For delivery to a server, the URL must begin with "<code>https://</code>" and must be well formed.
     *
     * @return string
     */
    public function getApplicationURL()
    {
        return $this->applicationURL;
    }

    /**
     * Sets a new applicationURL
     *
     * The URL to which eBay delivers all Platform Notifications and Client Alerts sent to the application. For delivery to a server, the URL must begin with "<code>https://</code>" and must be well formed.
     *
     * @param string $applicationURL
     * @return self
     */
    public function setApplicationURL($applicationURL)
    {
        $this->applicationURL = $applicationURL;
        return $this;
    }

    /**
     * Gets as applicationEnable
     *
     * This field allows the user to enable or disable Platform Notifications and Client Alerts. Notice that disabling Platform Notifications and Client Alerts will not affect others preferences set in this container.
     *
     * @return string
     */
    public function getApplicationEnable()
    {
        return $this->applicationEnable;
    }

    /**
     * Sets a new applicationEnable
     *
     * This field allows the user to enable or disable Platform Notifications and Client Alerts. Notice that disabling Platform Notifications and Client Alerts will not affect others preferences set in this container.
     *
     * @param string $applicationEnable
     * @return self
     */
    public function setApplicationEnable($applicationEnable)
    {
        $this->applicationEnable = $applicationEnable;
        return $this;
    }

    /**
     * Gets as alertEmail
     *
     * The email address to which eBay sends all application markup and markdown event
     *  notifications. When setting the email address, input must be in the format
     *  "<code>mailto://youremailaddress@yoursite.com</code>". Note that the <b>AlertEnable</b> field must be set to <code>Enable</code> for alert emails to be sent.
     *
     * @return string
     */
    public function getAlertEmail()
    {
        return $this->alertEmail;
    }

    /**
     * Sets a new alertEmail
     *
     * The email address to which eBay sends all application markup and markdown event
     *  notifications. When setting the email address, input must be in the format
     *  "<code>mailto://youremailaddress@yoursite.com</code>". Note that the <b>AlertEnable</b> field must be set to <code>Enable</code> for alert emails to be sent.
     *
     * @param string $alertEmail
     * @return self
     */
    public function setAlertEmail($alertEmail)
    {
        $this->alertEmail = $alertEmail;
        return $this;
    }

    /**
     * Gets as alertEnable
     *
     * <b>For SetNotificationPreferences</b>: include and set <b>AlertEnable</b> to
     *  <code>Enable</code> to receive application markup and markdown alerts, or set to <code>Disable</code> to
     *  disable the alerts. If not included, the <b>AlertEnable</b> defaults to
     *  its current value.
     *  <br/><br/>
     *  <b>For GetNotificationPreferences</b>: this field's value indicates
     *  whether application markup and markdown alerts are enabled or disabled.
     *
     * @return string
     */
    public function getAlertEnable()
    {
        return $this->alertEnable;
    }

    /**
     * Sets a new alertEnable
     *
     * <b>For SetNotificationPreferences</b>: include and set <b>AlertEnable</b> to
     *  <code>Enable</code> to receive application markup and markdown alerts, or set to <code>Disable</code> to
     *  disable the alerts. If not included, the <b>AlertEnable</b> defaults to
     *  its current value.
     *  <br/><br/>
     *  <b>For GetNotificationPreferences</b>: this field's value indicates
     *  whether application markup and markdown alerts are enabled or disabled.
     *
     * @param string $alertEnable
     * @return self
     */
    public function setAlertEnable($alertEnable)
    {
        $this->alertEnable = $alertEnable;
        return $this;
    }

    /**
     * Gets as notificationPayloadType
     *
     * The value in this field indicates the type of schema to use for notification payloads. The only supported value is <code>eBLSchemaSOAP</code>, so this field no longer has to be included in a <strong>SetNotificationPreferences</strong> call, since it defaults to<code>eBLSchemaSOAP</code>.
     *
     * @return string
     */
    public function getNotificationPayloadType()
    {
        return $this->notificationPayloadType;
    }

    /**
     * Sets a new notificationPayloadType
     *
     * The value in this field indicates the type of schema to use for notification payloads. The only supported value is <code>eBLSchemaSOAP</code>, so this field no longer has to be included in a <strong>SetNotificationPreferences</strong> call, since it defaults to<code>eBLSchemaSOAP</code>.
     *
     * @param string $notificationPayloadType
     * @return self
     */
    public function setNotificationPayloadType($notificationPayloadType)
    {
        $this->notificationPayloadType = $notificationPayloadType;
        return $this;
    }

    /**
     * Gets as deviceType
     *
     * The means of receipt of notification. In most cases, it is Platform (typical API
     *  calls and web interaction), so this is the default, if not specified. For
     *  wireless applications, use SMS. Do not test Client Alerts in production if you
     *  are currently using Platform Notifications.
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Sets a new deviceType
     *
     * The means of receipt of notification. In most cases, it is Platform (typical API
     *  calls and web interaction), so this is the default, if not specified. For
     *  wireless applications, use SMS. Do not test Client Alerts in production if you
     *  are currently using Platform Notifications.
     *
     * @param string $deviceType
     * @return self
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Gets as payloadVersion
     *
     * Use this field to specify the API version for all notifications for the calling
     *  application. If you do not specify PayloadVersion in
     *  SetNotificationPreferences, the API version for notifications will be based on
     *  the API version specified in your SetNotificationPreferences call.
     *
     * @return string
     */
    public function getPayloadVersion()
    {
        return $this->payloadVersion;
    }

    /**
     * Sets a new payloadVersion
     *
     * Use this field to specify the API version for all notifications for the calling
     *  application. If you do not specify PayloadVersion in
     *  SetNotificationPreferences, the API version for notifications will be based on
     *  the API version specified in your SetNotificationPreferences call.
     *
     * @param string $payloadVersion
     * @return self
     */
    public function setPayloadVersion($payloadVersion)
    {
        $this->payloadVersion = $payloadVersion;
        return $this;
    }

    /**
     * Adds as deliveryURLDetails
     *
     * Defines settings for notification URLs (including the URL name in DeliveryURLName). You
     *  define settings for up to 25 notification URLs (including the URL name in
     *  DeliveryURLName) in separate DeliveryURLDetails containers. Associate a user token with
     *  notification URLs by using the token in a SetNotificationPreferences request that
     *  specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use
     *  comma-separated format to specify multiple URL names in
     *  SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these
     *  URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DeliveryURLDetailType $deliveryURLDetails
     */
    public function addToDeliveryURLDetails(\Nogrod\eBaySDK\Trading\DeliveryURLDetailType $deliveryURLDetails)
    {
        $this->deliveryURLDetails[] = $deliveryURLDetails;
        return $this;
    }

    /**
     * isset deliveryURLDetails
     *
     * Defines settings for notification URLs (including the URL name in DeliveryURLName). You
     *  define settings for up to 25 notification URLs (including the URL name in
     *  DeliveryURLName) in separate DeliveryURLDetails containers. Associate a user token with
     *  notification URLs by using the token in a SetNotificationPreferences request that
     *  specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use
     *  comma-separated format to specify multiple URL names in
     *  SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these
     *  URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryURLDetails($index)
    {
        return isset($this->deliveryURLDetails[$index]);
    }

    /**
     * unset deliveryURLDetails
     *
     * Defines settings for notification URLs (including the URL name in DeliveryURLName). You
     *  define settings for up to 25 notification URLs (including the URL name in
     *  DeliveryURLName) in separate DeliveryURLDetails containers. Associate a user token with
     *  notification URLs by using the token in a SetNotificationPreferences request that
     *  specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use
     *  comma-separated format to specify multiple URL names in
     *  SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these
     *  URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryURLDetails($index)
    {
        unset($this->deliveryURLDetails[$index]);
    }

    /**
     * Gets as deliveryURLDetails
     *
     * Defines settings for notification URLs (including the URL name in DeliveryURLName). You
     *  define settings for up to 25 notification URLs (including the URL name in
     *  DeliveryURLName) in separate DeliveryURLDetails containers. Associate a user token with
     *  notification URLs by using the token in a SetNotificationPreferences request that
     *  specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use
     *  comma-separated format to specify multiple URL names in
     *  SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these
     *  URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     *
     * @return \Nogrod\eBaySDK\Trading\DeliveryURLDetailType[]
     */
    public function getDeliveryURLDetails()
    {
        return $this->deliveryURLDetails;
    }

    /**
     * Sets a new deliveryURLDetails
     *
     * Defines settings for notification URLs (including the URL name in DeliveryURLName). You
     *  define settings for up to 25 notification URLs (including the URL name in
     *  DeliveryURLName) in separate DeliveryURLDetails containers. Associate a user token with
     *  notification URLs by using the token in a SetNotificationPreferences request that
     *  specifies the URL name or names in SetNotificationPreferencesRequest.DeliveryURLName. Use
     *  comma-separated format to specify multiple URL names in
     *  SetNotificationPreferencesRequest.DeliveryURLName. Notifications will be sent to these
     *  URL(s) if ApplicationDeliveryPreferencesType.ApplicationEnable is set to Enable.
     *
     * @param \Nogrod\eBaySDK\Trading\DeliveryURLDetailType[] $deliveryURLDetails
     * @return self
     */
    public function setDeliveryURLDetails(array $deliveryURLDetails)
    {
        $this->deliveryURLDetails = $deliveryURLDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getApplicationURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplicationURL", $value);
        }
        $value = $this->getApplicationEnable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ApplicationEnable", $value);
        }
        $value = $this->getAlertEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlertEmail", $value);
        }
        $value = $this->getAlertEnable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlertEnable", $value);
        }
        $value = $this->getNotificationPayloadType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotificationPayloadType", $value);
        }
        $value = $this->getDeviceType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeviceType", $value);
        }
        $value = $this->getPayloadVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayloadVersion", $value);
        }
        $value = $this->getDeliveryURLDetails();
        if (null !== $value && !empty($this->getDeliveryURLDetails())) {
            $writer->write(array_map(function ($v) {return ["DeliveryURLDetails" => $v];}, $value));
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplicationURL');
        if (null !== $value) {
            $this->setApplicationURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApplicationEnable');
        if (null !== $value) {
            $this->setApplicationEnable($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertEmail');
        if (null !== $value) {
            $this->setAlertEmail($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertEnable');
        if (null !== $value) {
            $this->setAlertEnable($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationPayloadType');
        if (null !== $value) {
            $this->setNotificationPayloadType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeviceType');
        if (null !== $value) {
            $this->setDeviceType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayloadVersion');
        if (null !== $value) {
            $this->setPayloadVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeliveryURLDetails');
        if (null !== $value) {
            $this->setDeliveryURLDetails(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\DeliveryURLDetailType::fromKeyValue($v);}, $value));
        }
    }
}
