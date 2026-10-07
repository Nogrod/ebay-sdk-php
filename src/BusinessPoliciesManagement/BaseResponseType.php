<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BaseResponseType
 *
 * Base response container for all service operations. Contains error information associated with the request.
 * XSD Type: BaseResponse
 */
class BaseResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A token representing the application-level acknowledgment code that indicates the response status, such as success. The AckValue list specifies the possible values for ack.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $errorMessage
     */
    private $errorMessage = null;

    /**
     * The version of the response payload schema. Indicates the version of the schema that eBay used to process the request.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
     *
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[] $extension
     */
    private $extension = [

    ];

    /**
     * Gets as ack
     *
     * A token representing the application-level acknowledgment code that indicates the response status, such as success. The AckValue list specifies the possible values for ack.
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
     * A token representing the application-level acknowledgment code that indicates the response status, such as success. The AckValue list specifies the possible values for ack.
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
     * Adds as error
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error
     */
    public function addToErrorMessage(\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error)
    {
        if (!is_array($this->errorMessage)) {
            throw new \LogicException('errorMessage is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->errorMessage[] = $error;
        return $this;
    }

    /**
     * isset errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrorMessage($index)
    {
        return isset($this->errorMessage[$index]);
    }

    /**
     * unset errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrorMessage($index)
    {
        unset($this->errorMessage[$index]);
    }

    /**
     * Gets as errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType>
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType> $errorMessage
     * @return self
     */
    public function setErrorMessage(iterable $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the response payload schema. Indicates the version of the schema that eBay used to process the request.
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
     * The version of the response payload schema. Indicates the version of the schema that eBay used to process the request.
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
     * Gets as timestamp
     *
     * This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
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
     * This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
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
     * Adds as extension
     *
     * Reserved for future use.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType $extension
     */
    public function addToExtension(\Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType $extension)
    {
        if (!is_array($this->extension)) {
            throw new \LogicException('extension is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * Reserved for future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * Reserved for future use.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType>
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Reserved for future use.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType> $extension
     * @return self
     */
    public function setExtension(iterable $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->ack;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ack', null, (string) $value);
        }
        $value = $this->errorMessage;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'errorMessage', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'error', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->version;
        if (null !== $value) {
            $writer->writeElementNs(null, 'version', null, (string) $value);
        }
        $value = $this->timestamp;
        if (null !== $value) {
            $writer->writeElementNs(null, 'timestamp', null, Func::formatDateTime($value));
        }
        $value = $this->extension;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'extension', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\BaseResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->errorMessage = [];
        $this->extension = [];
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ack':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->ack = $value;
                    }
                    return true;
                case 'errorMessage':
                    $this->errorMessage = Func::readList($reader, 'error', 'http://www.ebay.com/marketplace/selling/v1/services', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::xmlRead($reader));
                    return true;
                case 'version':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->version = $value;
                    }
                    return true;
                case 'timestamp':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->timestamp = new \DateTime($value);
                    }
                    return true;
                case 'extension':
                    $this->extension[] = \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
