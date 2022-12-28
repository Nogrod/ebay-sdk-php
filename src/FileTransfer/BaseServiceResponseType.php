<?php

namespace Nogrod\eBaySDK\FileTransfer;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BaseServiceResponseType
 *
 * Base response container for all service operations. Contains error information
 *  associated with the request.
 * XSD Type: BaseServiceResponse
 */
class BaseServiceResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the success or failure of transferring data to eBay's servers.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * Information for an error or warning that occurred when eBay processed the
     *  request.
     *
     * @var \Nogrod\eBaySDK\FileTransfer\ErrorDataType[] $errorMessage
     */
    private $errorMessage = null;

    /**
     * The version of the schema that your WSDL is based on.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * The date and time that the response was sent.
     *
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * Gets as ack
     *
     * Indicates the success or failure of transferring data to eBay's servers.
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
     * Indicates the success or failure of transferring data to eBay's servers.
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
     * Information for an error or warning that occurred when eBay processed the
     *  request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\FileTransfer\ErrorDataType $error
     */
    public function addToErrorMessage(\Nogrod\eBaySDK\FileTransfer\ErrorDataType $error)
    {
        $this->errorMessage[] = $error;
        return $this;
    }

    /**
     * isset errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the
     *  request.
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
     * Information for an error or warning that occurred when eBay processed the
     *  request.
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
     * Information for an error or warning that occurred when eBay processed the
     *  request.
     *
     * @return \Nogrod\eBaySDK\FileTransfer\ErrorDataType[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the
     *  request.
     *
     * @param \Nogrod\eBaySDK\FileTransfer\ErrorDataType[] $errorMessage
     * @return self
     */
    public function setErrorMessage(array $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the schema that your WSDL is based on.
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
     * The version of the schema that your WSDL is based on.
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
     * The date and time that the response was sent.
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
     * The date and time that the response was sent.
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getAck();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}ack", $value);
        }
        $value = $this->getErrorMessage();
        if (null !== $value && !empty($this->getErrorMessage())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}errorMessage", array_map(function ($v) {
                return ["error" => $v];
            }, $value));
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}version", $value);
        }
        $value = $this->getTimestamp();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}timestamp", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}errorMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setErrorMessage(array_map(function ($v) {
                return \Nogrod\eBaySDK\FileTransfer\ErrorDataType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}timestamp');
        if (null !== $value) {
            $this->setTimestamp(new \DateTime($value));
        }
    }
}
