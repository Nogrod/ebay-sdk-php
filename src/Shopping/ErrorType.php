<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorType
 *
 * These are request errors (as opposed to system errors) that occur due to problems
 *  with business-level data (e.g., an invalid combination of arguments) that
 *  the application passed in.
 * XSD Type: ErrorType
 */
class ErrorType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A brief description of the condition that raised the error.
     *
     * @var string $shortMessage
     */
    private $shortMessage = null;

    /**
     * A more detailed description of the condition that raised the error.
     *
     * @var string $longMessage
     */
    private $longMessage = null;

    /**
     * A unique code that identifies the particular error condition that occurred.
     *  Your application can use error codes as identifiers
     *  in your customized error-handling algorithms.
     *
     * @var string $errorCode
     */
    private $errorCode = null;

    /**
     * This field is not currently in use for eBay Shopping API.
     *  Indicates whether the error message text is intended to be displayed to
     *  an end user or intended only to be parsed by the application.
     *  If true or not present (the default), the message text is intended for the end user. If false, the message text is intended for
     *  the application, and the application should translate the error into a more appropriate message.
     *
     * @var bool $userDisplayHint
     */
    private $userDisplayHint = null;

    /**
     * Indicates whether the error caused the request to fail.<br>
     *  <br>
     *  If the request fails and the source of the problem is within the
     *  application (such as a missing required element), please change the
     *  application before you retry the request. If the problem is due to
     *  end-user input data, please alert the end-user to the problem and
     *  provide the means for them to correct the data. Once the problem in the
     *  application or data is resolved, you can attempt to re-send the request
     *  to eBay.<br>
     *  <br>
     *  If the source of the problem is on eBay's side, you can retry the
     *  request as-is a reasonable number of times (eBay recommends twice).
     *  If the error persists, contact Developer Technical Support. Once the
     *  problem has been resolved, the request may be resent in its original
     *  form.<br>
     *  <br>
     *  When a warning occurs, the error is returned in addition to the business
     *  data. In this case, you do not need to retry the request (as the
     *  original request was successful). However, depending on the cause or
     *  nature of the warning, you might need to contact either the end user or
     *  eBay to effect a long term solution to the problem to prevent it from
     *  reoccurring in the future.
     *
     * @var string $severityCode
     */
    private $severityCode = null;

    /**
     * Some warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *  You can usually predict where these will
     *  occur by looking at the "replaceable_value" indicators in our
     *  Errors by Number page.
     *
     * @var \Nogrod\eBaySDK\Shopping\ErrorParameterType[] $errorParameters
     */
    private $errorParameters = [

    ];

    /**
     * API errors are divided between two classes: system errors and request errors.
     *
     * @var string $errorClassification
     */
    private $errorClassification = null;

    /**
     * Gets as shortMessage
     *
     * A brief description of the condition that raised the error.
     *
     * @return string
     */
    public function getShortMessage()
    {
        return $this->shortMessage;
    }

    /**
     * Sets a new shortMessage
     *
     * A brief description of the condition that raised the error.
     *
     * @param string $shortMessage
     * @return self
     */
    public function setShortMessage($shortMessage)
    {
        $this->shortMessage = $shortMessage;
        return $this;
    }

    /**
     * Gets as longMessage
     *
     * A more detailed description of the condition that raised the error.
     *
     * @return string
     */
    public function getLongMessage()
    {
        return $this->longMessage;
    }

    /**
     * Sets a new longMessage
     *
     * A more detailed description of the condition that raised the error.
     *
     * @param string $longMessage
     * @return self
     */
    public function setLongMessage($longMessage)
    {
        $this->longMessage = $longMessage;
        return $this;
    }

    /**
     * Gets as errorCode
     *
     * A unique code that identifies the particular error condition that occurred.
     *  Your application can use error codes as identifiers
     *  in your customized error-handling algorithms.
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * A unique code that identifies the particular error condition that occurred.
     *  Your application can use error codes as identifiers
     *  in your customized error-handling algorithms.
     *
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as userDisplayHint
     *
     * This field is not currently in use for eBay Shopping API.
     *  Indicates whether the error message text is intended to be displayed to
     *  an end user or intended only to be parsed by the application.
     *  If true or not present (the default), the message text is intended for the end user. If false, the message text is intended for
     *  the application, and the application should translate the error into a more appropriate message.
     *
     * @return bool
     */
    public function getUserDisplayHint()
    {
        return $this->userDisplayHint;
    }

    /**
     * Sets a new userDisplayHint
     *
     * This field is not currently in use for eBay Shopping API.
     *  Indicates whether the error message text is intended to be displayed to
     *  an end user or intended only to be parsed by the application.
     *  If true or not present (the default), the message text is intended for the end user. If false, the message text is intended for
     *  the application, and the application should translate the error into a more appropriate message.
     *
     * @param bool $userDisplayHint
     * @return self
     */
    public function setUserDisplayHint($userDisplayHint)
    {
        $this->userDisplayHint = $userDisplayHint;
        return $this;
    }

    /**
     * Gets as severityCode
     *
     * Indicates whether the error caused the request to fail.<br>
     *  <br>
     *  If the request fails and the source of the problem is within the
     *  application (such as a missing required element), please change the
     *  application before you retry the request. If the problem is due to
     *  end-user input data, please alert the end-user to the problem and
     *  provide the means for them to correct the data. Once the problem in the
     *  application or data is resolved, you can attempt to re-send the request
     *  to eBay.<br>
     *  <br>
     *  If the source of the problem is on eBay's side, you can retry the
     *  request as-is a reasonable number of times (eBay recommends twice).
     *  If the error persists, contact Developer Technical Support. Once the
     *  problem has been resolved, the request may be resent in its original
     *  form.<br>
     *  <br>
     *  When a warning occurs, the error is returned in addition to the business
     *  data. In this case, you do not need to retry the request (as the
     *  original request was successful). However, depending on the cause or
     *  nature of the warning, you might need to contact either the end user or
     *  eBay to effect a long term solution to the problem to prevent it from
     *  reoccurring in the future.
     *
     * @return string
     */
    public function getSeverityCode()
    {
        return $this->severityCode;
    }

    /**
     * Sets a new severityCode
     *
     * Indicates whether the error caused the request to fail.<br>
     *  <br>
     *  If the request fails and the source of the problem is within the
     *  application (such as a missing required element), please change the
     *  application before you retry the request. If the problem is due to
     *  end-user input data, please alert the end-user to the problem and
     *  provide the means for them to correct the data. Once the problem in the
     *  application or data is resolved, you can attempt to re-send the request
     *  to eBay.<br>
     *  <br>
     *  If the source of the problem is on eBay's side, you can retry the
     *  request as-is a reasonable number of times (eBay recommends twice).
     *  If the error persists, contact Developer Technical Support. Once the
     *  problem has been resolved, the request may be resent in its original
     *  form.<br>
     *  <br>
     *  When a warning occurs, the error is returned in addition to the business
     *  data. In this case, you do not need to retry the request (as the
     *  original request was successful). However, depending on the cause or
     *  nature of the warning, you might need to contact either the end user or
     *  eBay to effect a long term solution to the problem to prevent it from
     *  reoccurring in the future.
     *
     * @param string $severityCode
     * @return self
     */
    public function setSeverityCode($severityCode)
    {
        $this->severityCode = $severityCode;
        return $this;
    }

    /**
     * Adds as errorParameters
     *
     * Some warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *  You can usually predict where these will
     *  occur by looking at the "replaceable_value" indicators in our
     *  Errors by Number page.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\ErrorParameterType $errorParameters
     */
    public function addToErrorParameters(\Nogrod\eBaySDK\Shopping\ErrorParameterType $errorParameters)
    {
        $this->errorParameters[] = $errorParameters;
        return $this;
    }

    /**
     * isset errorParameters
     *
     * Some warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *  You can usually predict where these will
     *  occur by looking at the "replaceable_value" indicators in our
     *  Errors by Number page.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrorParameters($index)
    {
        return isset($this->errorParameters[$index]);
    }

    /**
     * unset errorParameters
     *
     * Some warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *  You can usually predict where these will
     *  occur by looking at the "replaceable_value" indicators in our
     *  Errors by Number page.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrorParameters($index)
    {
        unset($this->errorParameters[$index]);
    }

    /**
     * Gets as errorParameters
     *
     * Some warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *  You can usually predict where these will
     *  occur by looking at the "replaceable_value" indicators in our
     *  Errors by Number page.
     *
     * @return \Nogrod\eBaySDK\Shopping\ErrorParameterType[]
     */
    public function getErrorParameters()
    {
        return $this->errorParameters;
    }

    /**
     * Sets a new errorParameters
     *
     * Some warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *  You can usually predict where these will
     *  occur by looking at the "replaceable_value" indicators in our
     *  Errors by Number page.
     *
     * @param \Nogrod\eBaySDK\Shopping\ErrorParameterType[] $errorParameters
     * @return self
     */
    public function setErrorParameters(array $errorParameters)
    {
        $this->errorParameters = $errorParameters;
        return $this;
    }

    /**
     * Gets as errorClassification
     *
     * API errors are divided between two classes: system errors and request errors.
     *
     * @return string
     */
    public function getErrorClassification()
    {
        return $this->errorClassification;
    }

    /**
     * Sets a new errorClassification
     *
     * API errors are divided between two classes: system errors and request errors.
     *
     * @param string $errorClassification
     * @return self
     */
    public function setErrorClassification($errorClassification)
    {
        $this->errorClassification = $errorClassification;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShortMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShortMessage", $value);
        }
        $value = $this->getLongMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LongMessage", $value);
        }
        $value = $this->getErrorCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorCode", $value);
        }
        $value = $this->getUserDisplayHint();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserDisplayHint", $value);
        }
        $value = $this->getSeverityCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SeverityCode", $value);
        }
        $value = $this->getErrorParameters();
        if (null !== $value && !empty($this->getErrorParameters())) {
            $writer->write(array_map(function ($v) {
                return ["ErrorParameters" => $v];
            }, $value));
        }
        $value = $this->getErrorClassification();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorClassification", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShortMessage');
        if (null !== $value) {
            $this->setShortMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LongMessage');
        if (null !== $value) {
            $this->setLongMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorCode');
        if (null !== $value) {
            $this->setErrorCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserDisplayHint');
        if (null !== $value) {
            $this->setUserDisplayHint($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SeverityCode');
        if (null !== $value) {
            $this->setSeverityCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorParameters', true);
        if (null !== $value && !empty($value)) {
            $this->setErrorParameters(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\ErrorParameterType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorClassification');
        if (null !== $value) {
            $this->setErrorClassification($value);
        }
    }
}
