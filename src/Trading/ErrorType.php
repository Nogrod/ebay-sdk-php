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
     *  in your customized error-handling algorithms.
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
        if (!is_array($this->errorParameters)) {
            throw new \LogicException('errorParameters is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ErrorParameterType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\ErrorParameterType> $errorParameters
     * @return self
     */
    public function setErrorParameters(iterable $errorParameters)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->shortMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShortMessage', null, (string) $value);
        }
        $value = $this->longMessage;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LongMessage', null, (string) $value);
        }
        $value = $this->errorCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ErrorCode', null, (string) $value);
        }
        $value = $this->userDisplayHint;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UserDisplayHint', null, ($value ? 'true' : 'false'));
        }
        $value = $this->severityCode;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SeverityCode', null, (string) $value);
        }
        $value = $this->errorParameters;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ErrorParameters', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->errorClassification;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ErrorClassification', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ErrorType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->errorParameters = [];
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
                case 'ShortMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shortMessage = $value;
                    }
                    return true;
                case 'LongMessage':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->longMessage = $value;
                    }
                    return true;
                case 'ErrorCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->errorCode = $value;
                    }
                    return true;
                case 'UserDisplayHint':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userDisplayHint = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SeverityCode':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->severityCode = $value;
                    }
                    return true;
                case 'ErrorParameters':
                    $this->errorParameters[] = \Nogrod\eBaySDK\Trading\ErrorParameterType::xmlRead($reader);
                    return true;
                case 'ErrorClassification':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->errorClassification = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
