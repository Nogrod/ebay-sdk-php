<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FaultDetailsType
 *
 * SOAP faults are used to indicate that an infrastructure error has occurred,
 *  such as a problem on eBay's side with database or server going down, or a
 *  problem with the client or server-side SOAP framework.
 * XSD Type: FaultDetailsType
 */
class FaultDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Error code can be used by a receiving application to debug a SOAP response
     *  message that contains one or more SOAP fault details.
     *  Each error code is uniquely defined for each fault scenario.
     *  See the eBay documentation for more information.
     *  Your application can use error codes as identifiers
     *  in your customized error-handling algorithms.
     *
     * @var string $errorCode
     */
    private $errorCode = null;

    /**
     * Indicates whether the error is a severe error (causing the request to fail)
     *  or an informational error (a warning).
     *
     * @var string $severity
     */
    private $severity = null;

    /**
     * Description of the condition that caused the SOAP fault.
     *
     * @var string $detailedMessage
     */
    private $detailedMessage = null;

    /**
     * Gets as errorCode
     *
     * Error code can be used by a receiving application to debug a SOAP response
     *  message that contains one or more SOAP fault details.
     *  Each error code is uniquely defined for each fault scenario.
     *  See the eBay documentation for more information.
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
     * Error code can be used by a receiving application to debug a SOAP response
     *  message that contains one or more SOAP fault details.
     *  Each error code is uniquely defined for each fault scenario.
     *  See the eBay documentation for more information.
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
     * Gets as severity
     *
     * Indicates whether the error is a severe error (causing the request to fail)
     *  or an informational error (a warning).
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Indicates whether the error is a severe error (causing the request to fail)
     *  or an informational error (a warning).
     *
     * @param string $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as detailedMessage
     *
     * Description of the condition that caused the SOAP fault.
     *
     * @return string
     */
    public function getDetailedMessage()
    {
        return $this->detailedMessage;
    }

    /**
     * Sets a new detailedMessage
     *
     * Description of the condition that caused the SOAP fault.
     *
     * @param string $detailedMessage
     * @return self
     */
    public function setDetailedMessage($detailedMessage)
    {
        $this->detailedMessage = $detailedMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getErrorCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorCode", $value);
        }
        $value = $this->getSeverity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Severity", $value);
        }
        $value = $this->getDetailedMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailedMessage", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorCode');
        if (null !== $value) {
            $this->setErrorCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Severity');
        if (null !== $value) {
            $this->setSeverity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailedMessage');
        if (null !== $value) {
            $this->setDetailedMessage($value);
        }
    }
}
