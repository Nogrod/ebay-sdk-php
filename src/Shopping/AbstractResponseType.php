<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing AbstractResponseType
 *
 * Base type definition of a response payload that can carry any
 *  type of payload content with following optional elements:<br>
 *  - timestamp of response message<br>
 *  - application-level acknowledgement<br>
 *  - application-level (business-level) errors and warnings
 * XSD Type: AbstractResponseType
 */
class AbstractResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This value represents the date and time when eBay processed the
     *  request. The time zone of this value is <a href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#dateTime">GMT</a>
     *  and the format is the
     *  ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
     *  See the "dateTime" type for information about this
     *  time format and converting to and from the GMT time zone.
     *
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * A token representing the application-level acknowledgement code that indicates the response status (e.g., success). The <b>AckCodeType</b> list specifies the possible values for the <b>Ack</b> field.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @var \Nogrod\eBaySDK\Shopping\ErrorType[] $errors
     */
    private $errors = [
        
    ];

    /**
     * This refers to the particular software build that eBay used when
     *  processing the request and generating the response. This includes the
     *  version number plus additional information. eBay Developer Support may
     *  request the build information when helping you resolve technical issues.
     *
     * @var string $build
     */
    private $build = null;

    /**
     * The version of the API call that eBay used to process the request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Note that some calls are not always updated with each WSDL release, so it is possible that version numbers will differ by API call.</span>
     *  <br>
     *  If a field in the response returns the token "CustomCode", it usually
     *  means that the field is a code type (a token or enumeration),
     *  and that in your request URL (or HTTP header) you specified a
     *  version that is older than the version in which the token was added
     *  to the call.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * If you pass a value in MessageID in a request, we will return the same
     *  value in CorrelationID in the response. You can use this for tracking
     *  that a response is returned for every request and to match particular
     *  responses to particular requests. Only returned if MessageID was used.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * Gets as timestamp
     *
     * This value represents the date and time when eBay processed the
     *  request. The time zone of this value is <a href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#dateTime">GMT</a>
     *  and the format is the
     *  ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
     *  See the "dateTime" type for information about this
     *  time format and converting to and from the GMT time zone.
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
     *  request. The time zone of this value is <a href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#dateTime">GMT</a>
     *  and the format is the
     *  ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
     *  See the "dateTime" type for information about this
     *  time format and converting to and from the GMT time zone.
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
     * A token representing the application-level acknowledgement code that indicates the response status (e.g., success). The <b>AckCodeType</b> list specifies the possible values for the <b>Ack</b> field.
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
     * A token representing the application-level acknowledgement code that indicates the response status (e.g., success). The <b>AckCodeType</b> list specifies the possible values for the <b>Ack</b> field.
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
     * Adds as errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\Shopping\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
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
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
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
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @return \Nogrod\eBaySDK\Shopping\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @param \Nogrod\eBaySDK\Shopping\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Gets as build
     *
     * This refers to the particular software build that eBay used when
     *  processing the request and generating the response. This includes the
     *  version number plus additional information. eBay Developer Support may
     *  request the build information when helping you resolve technical issues.
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
     * This refers to the particular software build that eBay used when
     *  processing the request and generating the response. This includes the
     *  version number plus additional information. eBay Developer Support may
     *  request the build information when helping you resolve technical issues.
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
     * Gets as version
     *
     * The version of the API call that eBay used to process the request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Note that some calls are not always updated with each WSDL release, so it is possible that version numbers will differ by API call.</span>
     *  <br>
     *  If a field in the response returns the token "CustomCode", it usually
     *  means that the field is a code type (a token or enumeration),
     *  and that in your request URL (or HTTP header) you specified a
     *  version that is older than the version in which the token was added
     *  to the call.
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
     * The version of the API call that eBay used to process the request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Note that some calls are not always updated with each WSDL release, so it is possible that version numbers will differ by API call.</span>
     *  <br>
     *  If a field in the response returns the token "CustomCode", it usually
     *  means that the field is a code type (a token or enumeration),
     *  and that in your request URL (or HTTP header) you specified a
     *  version that is older than the version in which the token was added
     *  to the call.
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
     * Gets as correlationID
     *
     * If you pass a value in MessageID in a request, we will return the same
     *  value in CorrelationID in the response. You can use this for tracking
     *  that a response is returned for every request and to match particular
     *  responses to particular requests. Only returned if MessageID was used.
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
     * If you pass a value in MessageID in a request, we will return the same
     *  value in CorrelationID in the response. You can use this for tracking
     *  that a response is returned for every request and to match particular
     *  responses to particular requests. Only returned if MessageID was used.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
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
        $value = $this->getErrors();
        if (null !== $value && !empty($this->getErrors())) {
            $writer->write(array_map(function ($v) {
                return ["Errors" => $v];
            }, $value));
        }
        $value = $this->getBuild();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Build", $value);
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Version", $value);
        }
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Timestamp');
        if (null !== $value) {
            $this->setTimestamp(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Errors', true);
        if (null !== $value && !empty($value)) {
            $this->setErrors(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\ErrorType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Build');
        if (null !== $value) {
            $this->setBuild($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
