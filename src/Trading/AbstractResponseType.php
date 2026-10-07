<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AbstractResponseType
 *
 * Base type definition of a response payload that can carry any
 *  type of payload content with following optional elements:
 *  <ul>
 *  <li>timestamp of response message</li>
 *  <li>application-level acknowledgement</li>
 *  <li>application-level (business-level) errors and warnings</li>
 *  </ul>
 * XSD Type: AbstractResponseType
 */
class AbstractResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This value represents the date and time when eBay processed the
     *  request. The time zone of this value is GMT and the format is the
     *  ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the <b>Time
     *  Values</b> section in the eBay Features Guide for information about this
     *  time format and converting to and from the GMT time zone. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Trading API calls are designed to retrieve very large sets
     *  of metadata that change once a day or less often. To improve performance, these
     *  calls return cached responses when you request all available data (with no
     *  filters). When this occurs, this time value reflects the time the cached response
     *  was created. Thus, this value is not necessarily when the request was processed.
     *  However, if you specify an input filter to reduce the amount of data returned, the
     *  calls retrieve the latest data (not cached). When this occurs, this time value does
     *  reflect when the request was processed.</span>
     *
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * A token representing the application-level acknowledgement code that indicates
     *  the response status (e.g., success). The <b>AckCodeType</b> list specifies
     *  the possible values for the <b>Ack</b> field.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. If you pass in a
     *  <b>MessageID</b> in a request, the same value will be returned in the
     *  <b>CorrelationID</b> field in the response. Pairing these values can
     *  help you track and confirm that a response is returned for every request and to
     *  match specific responses to specific requests.
     *  If you do not pass a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * A list of application-level errors (if any) that occurred when eBay
     *  processed the request.
     *
     * @var \Nogrod\eBaySDK\Trading\ErrorType[] $errors
     */
    private $errors = [

    ];

    /**
     * Supplemental information from eBay, if applicable. May elaborate on
     *  errors (such as how a listing violates eBay policies) or provide
     *  useful hints that may help a seller increase sales. This data can
     *  accompany the call's normal data result set or a result set that
     *  contains only errors. <br>
     *  <br>
     *  Applications must recognize when the <b>Message</b> field is returned and
     *  provide a means to display the listing hints and error message
     *  explanations to the user. <br>
     *  <br>
     *  The string can return HTML, including TABLE, IMG, and HREF elements.
     *  In this case, an HTML-based application should be able to include
     *  the HTML as-is in the HTML page that displays the results.
     *  A non-HTML application would need to parse the HTML
     *  and convert the table elements and image references into UI elements
     *  particular to the programming language used.
     *  As usual for string data types, the HTML markup elements are escaped
     *  with character entity references
     *  (e.g.,&lt;table&gt;&lt;tr&gt;...).
     *
     * @var string $message
     */
    private $message = null;

    /**
     * The version of the response payload schema. Indicates the version of the schema that eBay used to process the request. See the <b>Standard Data for All Calls</b> section in the eBay Features Guide for information on using the response version when troubleshooting <b>CustomCode</b> values that appear in the response.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * This refers to the specific software build that eBay used when processing the request
     *  and generating the response. This includes the version number plus additional
     *  information. eBay Developer Support may request the build information
     *  when helping you resolve technical issues.
     *
     * @var string $build
     */
    private $build = null;

    /**
     * Event name of the notification. Only returned by Platform Notifications.
     *
     * @var string $notificationEventName
     */
    private $notificationEventName = null;

    /**
     * Information that explains a failure due to a duplicate <b>InvocationID</b> being
     *  passed in.
     *
     * @var \Nogrod\eBaySDK\Trading\DuplicateInvocationDetailsType $duplicateInvocationDetails
     */
    private $duplicateInvocationDetails = null;

    /**
     * Recipient user ID of the notification. Only returned by Platform Notifications.
     *
     * @var string $recipientUserID
     */
    private $recipientUserID = null;

    /**
     * Unique Identifier of Recipient user ID of the notification. Only returned by
     *  Platform Notifications (not for regular API call responses).
     *
     * @var string $eIASToken
     */
    private $eIASToken = null;

    /**
     * A Base64-encoded MD5 hash that allows the recipient of a Platform
     *  Notification to verify this is a valid Platform Notification sent by
     *  eBay.
     *
     * @var string $notificationSignature
     */
    private $notificationSignature = null;

    /**
     * Expiration date of the user's authentication token. Only returned
     *  within the 7-day period prior to a token's expiration. To ensure
     *  that user authentication tokens are secure and to help avoid a
     *  user's token being compromised, tokens have a limited life span. A
     *  token is only valid for a period of time (set by eBay). After this
     *  amount of time has passed, the token expires and must be replaced
     *  with a new token.
     *
     * @var string $hardExpirationWarning
     */
    private $hardExpirationWarning = null;

    /**
     * This container is conditionally returned in the <b>PlaceOffer</b> call response if eBay wants to challenge the user making the call to ensure that the call is being made by a real user and not a bot. This container consist of an encrypted token, the URL of the image that should be displayed to the user, or the URL of an audio clip for sight-impaired users. After receiving this data in the response, the caller must make another <b>PlaceOffer</b> call, this time passing in the encrypted token and one of the URLs that was received in the previous call response.
     *
     * @var \Nogrod\eBaySDK\Trading\BotBlockResponseType $botBlock
     */
    private $botBlock = null;

    /**
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned. The string can
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution.
     *  <br><br>
     *  To subscribe to and receive eBay Buyer Protection notifications, this field is
     *  required, and you must pass in 'eBP notification' as a string.
     *
     * @var string $externalUserData
     */
    private $externalUserData = null;

    /**
     * Gets as timestamp
     *
     * This value represents the date and time when eBay processed the
     *  request. The time zone of this value is GMT and the format is the
     *  ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the <b>Time
     *  Values</b> section in the eBay Features Guide for information about this
     *  time format and converting to and from the GMT time zone. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Trading API calls are designed to retrieve very large sets
     *  of metadata that change once a day or less often. To improve performance, these
     *  calls return cached responses when you request all available data (with no
     *  filters). When this occurs, this time value reflects the time the cached response
     *  was created. Thus, this value is not necessarily when the request was processed.
     *  However, if you specify an input filter to reduce the amount of data returned, the
     *  calls retrieve the latest data (not cached). When this occurs, this time value does
     *  reflect when the request was processed.</span>
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * This value represents the date and time when eBay processed the
     *  request. The time zone of this value is GMT and the format is the
     *  ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the <b>Time
     *  Values</b> section in the eBay Features Guide for information about this
     *  time format and converting to and from the GMT time zone. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Trading API calls are designed to retrieve very large sets
     *  of metadata that change once a day or less often. To improve performance, these
     *  calls return cached responses when you request all available data (with no
     *  filters). When this occurs, this time value reflects the time the cached response
     *  was created. Thus, this value is not necessarily when the request was processed.
     *  However, if you specify an input filter to reduce the amount of data returned, the
     *  calls retrieve the latest data (not cached). When this occurs, this time value does
     *  reflect when the request was processed.</span>
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Gets as ack
     *
     * A token representing the application-level acknowledgement code that indicates
     *  the response status (e.g., success). The <b>AckCodeType</b> list specifies
     *  the possible values for the <b>Ack</b> field.
     *
     * @return string
     */
    public function getAck()
    {
        return $this->ack;
    }

    /**
     * Sets a new ack
     *
     * A token representing the application-level acknowledgement code that indicates
     *  the response status (e.g., success). The <b>AckCodeType</b> list specifies
     *  the possible values for the <b>Ack</b> field.
     *
     * @param string $ack
     * @return self
     */
    public function setAck($ack)
    {
        $this->ack = $ack;
        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. If you pass in a
     *  <b>MessageID</b> in a request, the same value will be returned in the
     *  <b>CorrelationID</b> field in the response. Pairing these values can
     *  help you track and confirm that a response is returned for every request and to
     *  match specific responses to specific requests.
     *  If you do not pass a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. If you pass in a
     *  <b>MessageID</b> in a request, the same value will be returned in the
     *  <b>CorrelationID</b> field in the response. Pairing these values can
     *  help you track and confirm that a response is returned for every request and to
     *  match specific responses to specific requests.
     *  If you do not pass a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Adds as errors
     *
     * A list of application-level errors (if any) that occurred when eBay
     *  processed the request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\Trading\ErrorType $errors)
    {
        if (!is_array($this->errors)) {
            throw new \LogicException('errors is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * A list of application-level errors (if any) that occurred when eBay
     *  processed the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * A list of application-level errors (if any) that occurred when eBay
     *  processed the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * A list of application-level errors (if any) that occurred when eBay
     *  processed the request.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ErrorType>
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * A list of application-level errors (if any) that occurred when eBay
     *  processed the request.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ErrorType> $errors
     * @return self
     */
    public function setErrors(iterable $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as message
     *
     * Supplemental information from eBay, if applicable. May elaborate on
     *  errors (such as how a listing violates eBay policies) or provide
     *  useful hints that may help a seller increase sales. This data can
     *  accompany the call's normal data result set or a result set that
     *  contains only errors. <br>
     *  <br>
     *  Applications must recognize when the <b>Message</b> field is returned and
     *  provide a means to display the listing hints and error message
     *  explanations to the user. <br>
     *  <br>
     *  The string can return HTML, including TABLE, IMG, and HREF elements.
     *  In this case, an HTML-based application should be able to include
     *  the HTML as-is in the HTML page that displays the results.
     *  A non-HTML application would need to parse the HTML
     *  and convert the table elements and image references into UI elements
     *  particular to the programming language used.
     *  As usual for string data types, the HTML markup elements are escaped
     *  with character entity references
     *  (e.g.,&lt;table&gt;&lt;tr&gt;...).
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * Supplemental information from eBay, if applicable. May elaborate on
     *  errors (such as how a listing violates eBay policies) or provide
     *  useful hints that may help a seller increase sales. This data can
     *  accompany the call's normal data result set or a result set that
     *  contains only errors. <br>
     *  <br>
     *  Applications must recognize when the <b>Message</b> field is returned and
     *  provide a means to display the listing hints and error message
     *  explanations to the user. <br>
     *  <br>
     *  The string can return HTML, including TABLE, IMG, and HREF elements.
     *  In this case, an HTML-based application should be able to include
     *  the HTML as-is in the HTML page that displays the results.
     *  A non-HTML application would need to parse the HTML
     *  and convert the table elements and image references into UI elements
     *  particular to the programming language used.
     *  As usual for string data types, the HTML markup elements are escaped
     *  with character entity references
     *  (e.g.,&lt;table&gt;&lt;tr&gt;...).
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the response payload schema. Indicates the version of the schema that eBay used to process the request. See the <b>Standard Data for All Calls</b> section in the eBay Features Guide for information on using the response version when troubleshooting <b>CustomCode</b> values that appear in the response.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the response payload schema. Indicates the version of the schema that eBay used to process the request. See the <b>Standard Data for All Calls</b> section in the eBay Features Guide for information on using the response version when troubleshooting <b>CustomCode</b> values that appear in the response.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as build
     *
     * This refers to the specific software build that eBay used when processing the request
     *  and generating the response. This includes the version number plus additional
     *  information. eBay Developer Support may request the build information
     *  when helping you resolve technical issues.
     *
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Sets a new build
     *
     * This refers to the specific software build that eBay used when processing the request
     *  and generating the response. This includes the version number plus additional
     *  information. eBay Developer Support may request the build information
     *  when helping you resolve technical issues.
     *
     * @param string $build
     * @return self
     */
    public function setBuild($build)
    {
        $this->build = $build;
        return $this;
    }

    /**
     * Gets as notificationEventName
     *
     * Event name of the notification. Only returned by Platform Notifications.
     *
     * @return string
     */
    public function getNotificationEventName()
    {
        return $this->notificationEventName;
    }

    /**
     * Sets a new notificationEventName
     *
     * Event name of the notification. Only returned by Platform Notifications.
     *
     * @param string $notificationEventName
     * @return self
     */
    public function setNotificationEventName($notificationEventName)
    {
        $this->notificationEventName = $notificationEventName;
        return $this;
    }

    /**
     * Gets as duplicateInvocationDetails
     *
     * Information that explains a failure due to a duplicate <b>InvocationID</b> being
     *  passed in.
     *
     * @return \Nogrod\eBaySDK\Trading\DuplicateInvocationDetailsType
     */
    public function getDuplicateInvocationDetails()
    {
        return $this->duplicateInvocationDetails;
    }

    /**
     * Sets a new duplicateInvocationDetails
     *
     * Information that explains a failure due to a duplicate <b>InvocationID</b> being
     *  passed in.
     *
     * @param \Nogrod\eBaySDK\Trading\DuplicateInvocationDetailsType $duplicateInvocationDetails
     * @return self
     */
    public function setDuplicateInvocationDetails(\Nogrod\eBaySDK\Trading\DuplicateInvocationDetailsType $duplicateInvocationDetails)
    {
        $this->duplicateInvocationDetails = $duplicateInvocationDetails;
        return $this;
    }

    /**
     * Gets as recipientUserID
     *
     * Recipient user ID of the notification. Only returned by Platform Notifications.
     *
     * @return string
     */
    public function getRecipientUserID()
    {
        return $this->recipientUserID;
    }

    /**
     * Sets a new recipientUserID
     *
     * Recipient user ID of the notification. Only returned by Platform Notifications.
     *
     * @param string $recipientUserID
     * @return self
     */
    public function setRecipientUserID($recipientUserID)
    {
        $this->recipientUserID = $recipientUserID;
        return $this;
    }

    /**
     * Gets as eIASToken
     *
     * Unique Identifier of Recipient user ID of the notification. Only returned by
     *  Platform Notifications (not for regular API call responses).
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
     * Unique Identifier of Recipient user ID of the notification. Only returned by
     *  Platform Notifications (not for regular API call responses).
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
     * Gets as notificationSignature
     *
     * A Base64-encoded MD5 hash that allows the recipient of a Platform
     *  Notification to verify this is a valid Platform Notification sent by
     *  eBay.
     *
     * @return string
     */
    public function getNotificationSignature()
    {
        return $this->notificationSignature;
    }

    /**
     * Sets a new notificationSignature
     *
     * A Base64-encoded MD5 hash that allows the recipient of a Platform
     *  Notification to verify this is a valid Platform Notification sent by
     *  eBay.
     *
     * @param string $notificationSignature
     * @return self
     */
    public function setNotificationSignature($notificationSignature)
    {
        $this->notificationSignature = $notificationSignature;
        return $this;
    }

    /**
     * Gets as hardExpirationWarning
     *
     * Expiration date of the user's authentication token. Only returned
     *  within the 7-day period prior to a token's expiration. To ensure
     *  that user authentication tokens are secure and to help avoid a
     *  user's token being compromised, tokens have a limited life span. A
     *  token is only valid for a period of time (set by eBay). After this
     *  amount of time has passed, the token expires and must be replaced
     *  with a new token.
     *
     * @return string
     */
    public function getHardExpirationWarning()
    {
        return $this->hardExpirationWarning;
    }

    /**
     * Sets a new hardExpirationWarning
     *
     * Expiration date of the user's authentication token. Only returned
     *  within the 7-day period prior to a token's expiration. To ensure
     *  that user authentication tokens are secure and to help avoid a
     *  user's token being compromised, tokens have a limited life span. A
     *  token is only valid for a period of time (set by eBay). After this
     *  amount of time has passed, the token expires and must be replaced
     *  with a new token.
     *
     * @param string $hardExpirationWarning
     * @return self
     */
    public function setHardExpirationWarning($hardExpirationWarning)
    {
        $this->hardExpirationWarning = $hardExpirationWarning;
        return $this;
    }

    /**
     * Gets as botBlock
     *
     * This container is conditionally returned in the <b>PlaceOffer</b> call response if eBay wants to challenge the user making the call to ensure that the call is being made by a real user and not a bot. This container consist of an encrypted token, the URL of the image that should be displayed to the user, or the URL of an audio clip for sight-impaired users. After receiving this data in the response, the caller must make another <b>PlaceOffer</b> call, this time passing in the encrypted token and one of the URLs that was received in the previous call response.
     *
     * @return \Nogrod\eBaySDK\Trading\BotBlockResponseType
     */
    public function getBotBlock()
    {
        return $this->botBlock;
    }

    /**
     * Sets a new botBlock
     *
     * This container is conditionally returned in the <b>PlaceOffer</b> call response if eBay wants to challenge the user making the call to ensure that the call is being made by a real user and not a bot. This container consist of an encrypted token, the URL of the image that should be displayed to the user, or the URL of an audio clip for sight-impaired users. After receiving this data in the response, the caller must make another <b>PlaceOffer</b> call, this time passing in the encrypted token and one of the URLs that was received in the previous call response.
     *
     * @param \Nogrod\eBaySDK\Trading\BotBlockResponseType $botBlock
     * @return self
     */
    public function setBotBlock(\Nogrod\eBaySDK\Trading\BotBlockResponseType $botBlock)
    {
        $this->botBlock = $botBlock;
        return $this;
    }

    /**
     * Gets as externalUserData
     *
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned. The string can
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution.
     *  <br><br>
     *  To subscribe to and receive eBay Buyer Protection notifications, this field is
     *  required, and you must pass in 'eBP notification' as a string.
     *
     * @return string
     */
    public function getExternalUserData()
    {
        return $this->externalUserData;
    }

    /**
     * Sets a new externalUserData
     *
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned. The string can
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution.
     *  <br><br>
     *  To subscribe to and receive eBay Buyer Protection notifications, this field is
     *  required, and you must pass in 'eBP notification' as a string.
     *
     * @param string $externalUserData
     * @return self
     */
    public function setExternalUserData($externalUserData)
    {
        $this->externalUserData = $externalUserData;
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
        $value = $this->timestamp;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Timestamp', null, Func::formatDateTime($value));
        }
        $value = $this->ack;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Ack', null, (string) $value);
        }
        $value = $this->correlationID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CorrelationID', null, (string) $value);
        }
        $value = $this->errors;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Errors', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->message;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Message', null, (string) $value);
        }
        $value = $this->version;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Version', null, (string) $value);
        }
        $value = $this->build;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Build', null, (string) $value);
        }
        $value = $this->notificationEventName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NotificationEventName', null, (string) $value);
        }
        $value = $this->duplicateInvocationDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'DuplicateInvocationDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->recipientUserID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RecipientUserID', null, (string) $value);
        }
        $value = $this->eIASToken;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EIASToken', null, (string) $value);
        }
        $value = $this->notificationSignature;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NotificationSignature', null, (string) $value);
        }
        $value = $this->hardExpirationWarning;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HardExpirationWarning', null, (string) $value);
        }
        $value = $this->botBlock;
        if (null !== $value) {
            $writer->startElementNs(null, 'BotBlock', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->externalUserData;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExternalUserData', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AbstractResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->errors = [];
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
                case 'Timestamp':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->timestamp = new \DateTime($value);
                    }
                    return true;
                case 'Ack':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->ack = $value;
                    }
                    return true;
                case 'CorrelationID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->correlationID = $value;
                    }
                    return true;
                case 'Errors':
                    $this->errors[] = \Nogrod\eBaySDK\Trading\ErrorType::xmlRead($reader);
                    return true;
                case 'Message':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->message = $value;
                    }
                    return true;
                case 'Version':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->version = $value;
                    }
                    return true;
                case 'Build':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->build = $value;
                    }
                    return true;
                case 'NotificationEventName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->notificationEventName = $value;
                    }
                    return true;
                case 'DuplicateInvocationDetails':
                    $this->duplicateInvocationDetails = \Nogrod\eBaySDK\Trading\DuplicateInvocationDetailsType::xmlRead($reader);
                    return true;
                case 'RecipientUserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->recipientUserID = $value;
                    }
                    return true;
                case 'EIASToken':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eIASToken = $value;
                    }
                    return true;
                case 'NotificationSignature':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->notificationSignature = $value;
                    }
                    return true;
                case 'HardExpirationWarning':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hardExpirationWarning = $value;
                    }
                    return true;
                case 'BotBlock':
                    $this->botBlock = \Nogrod\eBaySDK\Trading\BotBlockResponseType::xmlRead($reader);
                    return true;
                case 'ExternalUserData':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->externalUserData = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Timestamp'] = Func::jsonDate($this->timestamp);
        $data['Ack'] = $this->ack;
        $data['CorrelationID'] = $this->correlationID;
        $data['Errors'] = Func::jsonList($this->errors);
        $data['Message'] = $this->message;
        $data['Version'] = $this->version;
        $data['Build'] = $this->build;
        $data['NotificationEventName'] = $this->notificationEventName;
        $data['DuplicateInvocationDetails'] = $this->duplicateInvocationDetails;
        $data['RecipientUserID'] = $this->recipientUserID;
        $data['EIASToken'] = $this->eIASToken;
        $data['NotificationSignature'] = $this->notificationSignature;
        $data['HardExpirationWarning'] = $this->hardExpirationWarning;
        $data['BotBlock'] = $this->botBlock;
        $data['ExternalUserData'] = $this->externalUserData;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
