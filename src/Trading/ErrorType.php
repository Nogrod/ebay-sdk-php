<?php

namespace Nogrod\eBaySDK\Trading;

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
     *  in your customized error-handling algorithms. See the "Errors by Number" document.
     *
     * @var string $errorCode
     */
    private $errorCode = null;

    /**
     * Indicates whether the error message text is intended to be displayed to an end user
     *  or intended only to be parsed by the application. If true or not present (the default),
     *  the message text is intended for the end user. If false, the message text is intended for
     *  the application, and the application should translate the error into a more appropriate message.
     *  Only applicable to Item Specifics errors and warnings returned from listing requests.
     *
     * @var bool $userDisplayHint
     */
    private $userDisplayHint = null;

    /**
     * Indicates whether the error is a severe error (causing the request to fail)
     *  or an informational error (a warning) that should be communicated to the user.
     *
     * @var string $severityCode
     */
    private $severityCode = null;

    /**
     * This optional element carries a list of context-specific
     *  error variables that indicate details about the error condition.
     *  These are useful when multiple instances of <b>ErrorType</b> are returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ErrorParameterType[] $errorParameters
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
     *  in your customized error-handling algorithms. See the "Errors by Number" document.
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
     *  in your customized error-handling algorithms. See the "Errors by Number" document.
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
     * Indicates whether the error message text is intended to be displayed to an end user
     *  or intended only to be parsed by the application. If true or not present (the default),
     *  the message text is intended for the end user. If false, the message text is intended for
     *  the application, and the application should translate the error into a more appropriate message.
     *  Only applicable to Item Specifics errors and warnings returned from listing requests.
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
     * Indicates whether the error message text is intended to be displayed to an end user
     *  or intended only to be parsed by the application. If true or not present (the default),
     *  the message text is intended for the end user. If false, the message text is intended for
     *  the application, and the application should translate the error into a more appropriate message.
     *  Only applicable to Item Specifics errors and warnings returned from listing requests.
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
     * Indicates whether the error is a severe error (causing the request to fail)
     *  or an informational error (a warning) that should be communicated to the user.
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
     * Indicates whether the error is a severe error (causing the request to fail)
     *  or an informational error (a warning) that should be communicated to the user.
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
     * This optional element carries a list of context-specific
     *  error variables that indicate details about the error condition.
     *  These are useful when multiple instances of <b>ErrorType</b> are returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ErrorParameterType $errorParameters
     */
    public function addToErrorParameters(\Nogrod\eBaySDK\Trading\ErrorParameterType $errorParameters)
    {
        $this->errorParameters[] = $errorParameters;
        return $this;
    }

    /**
     * isset errorParameters
     *
     * This optional element carries a list of context-specific
     *  error variables that indicate details about the error condition.
     *  These are useful when multiple instances of <b>ErrorType</b> are returned.
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
     * This optional element carries a list of context-specific
     *  error variables that indicate details about the error condition.
     *  These are useful when multiple instances of <b>ErrorType</b> are returned.
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
     * This optional element carries a list of context-specific
     *  error variables that indicate details about the error condition.
     *  These are useful when multiple instances of <b>ErrorType</b> are returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ErrorParameterType[]
     */
    public function getErrorParameters()
    {
        return $this->errorParameters;
    }

    /**
     * Sets a new errorParameters
     *
     * This optional element carries a list of context-specific
     *  error variables that indicate details about the error condition.
     *  These are useful when multiple instances of <b>ErrorType</b> are returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ErrorParameterType[] $errorParameters
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
                return \Nogrod\eBaySDK\Trading\ErrorParameterType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorClassification');
        if (null !== $value) {
            $this->setErrorClassification($value);
        }
    }
}
