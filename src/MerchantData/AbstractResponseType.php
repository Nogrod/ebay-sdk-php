<?php

namespace Nogrod\eBaySDK\MerchantData;

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
class AbstractResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value represents the date and time when eBay processed the
     *  request. The time zone of this value is GMT and the format is the
     *  ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the <b>Time
     *  Values</b> section in the eBay Features Guide for information about this
     *  time format and converting to and from the GMT time zone. <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetCategories</b> and other Trading API calls are designed to retrieve very large sets
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
     *  <b>CorrelationID</b> is not returned.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetCategories</b> is designed to retrieve very large sets of metadata
     *  that change once a day or less often. To improve performance, these calls return
     *  cached responses when you request all available data (with no filters). When this
     *  occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields
     *  aren't applicable. However, if you specify an input filter to reduce the amount of
     *  data returned, the calls retrieve the latest data (not cached). When this occurs,
     *  <b>MessageID</b> and <b>CorrelationID</b> are applicable.
     *  </span>
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * A list of application-level errors (if any) that occurred when eBay
     *  processed the request.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ErrorType[] $errors
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
     * @var \Nogrod\eBaySDK\MerchantData\DuplicateInvocationDetailsType $duplicateInvocationDetails
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
     * @var \Nogrod\eBaySDK\MerchantData\BotBlockResponseType $botBlock
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
     *  <b>GetCategories</b> and other Trading API calls are designed to retrieve very large sets
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
     *  <b>GetCategories</b> and other Trading API calls are designed to retrieve very large sets
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
     *  <b>CorrelationID</b> is not returned.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetCategories</b> is designed to retrieve very large sets of metadata
     *  that change once a day or less often. To improve performance, these calls return
     *  cached responses when you request all available data (with no filters). When this
     *  occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields
     *  aren't applicable. However, if you specify an input filter to reduce the amount of
     *  data returned, the calls retrieve the latest data (not cached). When this occurs,
     *  <b>MessageID</b> and <b>CorrelationID</b> are applicable.
     *  </span>
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
     *  <b>CorrelationID</b> is not returned.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetCategories</b> is designed to retrieve very large sets of metadata
     *  that change once a day or less often. To improve performance, these calls return
     *  cached responses when you request all available data (with no filters). When this
     *  occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields
     *  aren't applicable. However, if you specify an input filter to reduce the amount of
     *  data returned, the calls retrieve the latest data (not cached). When this occurs,
     *  <b>MessageID</b> and <b>CorrelationID</b> are applicable.
     *  </span>
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
     * @param \Nogrod\eBaySDK\MerchantData\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\MerchantData\ErrorType $errors)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\ErrorType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
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
     * @return \Nogrod\eBaySDK\MerchantData\DuplicateInvocationDetailsType
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
     * @param \Nogrod\eBaySDK\MerchantData\DuplicateInvocationDetailsType $duplicateInvocationDetails
     * @return self
     */
    public function setDuplicateInvocationDetails(\Nogrod\eBaySDK\MerchantData\DuplicateInvocationDetailsType $duplicateInvocationDetails)
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
     * @return \Nogrod\eBaySDK\MerchantData\BotBlockResponseType
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
     * @param \Nogrod\eBaySDK\MerchantData\BotBlockResponseType $botBlock
     * @return self
     */
    public function setBotBlock(\Nogrod\eBaySDK\MerchantData\BotBlockResponseType $botBlock)
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTimestamp();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Timestamp", $value);
        }
        $value = $this->getAck();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Ack", $value);
        }
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
        }
        $value = $this->getErrors();
        if (null !== $value && !empty($this->getErrors())) {
            $writer->write(array_map(function ($v) {
                return ["Errors" => $v];
            }, $value));
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Message", $value);
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Version", $value);
        }
        $value = $this->getBuild();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Build", $value);
        }
        $value = $this->getNotificationEventName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotificationEventName", $value);
        }
        $value = $this->getDuplicateInvocationDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DuplicateInvocationDetails", $value);
        }
        $value = $this->getRecipientUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecipientUserID", $value);
        }
        $value = $this->getEIASToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EIASToken", $value);
        }
        $value = $this->getNotificationSignature();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NotificationSignature", $value);
        }
        $value = $this->getHardExpirationWarning();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HardExpirationWarning", $value);
        }
        $value = $this->getBotBlock();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BotBlock", $value);
        }
        $value = $this->getExternalUserData();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalUserData", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Timestamp');
        if (null !== $value) {
            $this->setTimestamp(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Errors', true);
        if (null !== $value && !empty($value)) {
            $this->setErrors(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ErrorType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message');
        if (null !== $value) {
            $this->setMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Build');
        if (null !== $value) {
            $this->setBuild($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationEventName');
        if (null !== $value) {
            $this->setNotificationEventName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DuplicateInvocationDetails');
        if (null !== $value) {
            $this->setDuplicateInvocationDetails(\Nogrod\eBaySDK\MerchantData\DuplicateInvocationDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientUserID');
        if (null !== $value) {
            $this->setRecipientUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EIASToken');
        if (null !== $value) {
            $this->setEIASToken($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NotificationSignature');
        if (null !== $value) {
            $this->setNotificationSignature($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HardExpirationWarning');
        if (null !== $value) {
            $this->setHardExpirationWarning($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BotBlock');
        if (null !== $value) {
            $this->setBotBlock(\Nogrod\eBaySDK\MerchantData\BotBlockResponseType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalUserData');
        if (null !== $value) {
            $this->setExternalUserData($value);
        }
    }
}
