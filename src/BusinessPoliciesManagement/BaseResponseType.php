<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BaseResponseType
 *
 * Base response container for all service
 *  operations. Contains error information
 *  associated with the request.
 * XSD Type: BaseResponse
 */
class BaseResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $ack
     */
    private $ack = null;

    /**
     * Information for an error or warning that
     *  occurred when eBay processed the
     *  request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $errorMessage
     */
    private $errorMessage = null;

    /**
     * @var string $version
     */
    private $version = null;

    /**
     * This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See Time Values in the eBay Web Services guide for information about this time format and converting to and from the GMT time zone.
     *
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[] $extension
     */
    private $extension = [

    ];

    /**
     * Gets as ack
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
     * Information for an error or warning that
     *  occurred when eBay processed the
     *  request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error
     */
    public function addToErrorMessage(\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error)
    {
        $this->errorMessage[] = $error;
        return $this;
    }

    /**
     * isset errorMessage
     *
     * Information for an error or warning that
     *  occurred when eBay processed the
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
     * Information for an error or warning that
     *  occurred when eBay processed the
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
     * Information for an error or warning that
     *  occurred when eBay processed the
     *  request.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * Information for an error or warning that
     *  occurred when eBay processed the
     *  request.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $errorMessage
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
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
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
     * This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See Time Values in the eBay Web Services guide for information about this time format and converting to and from the GMT time zone.
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
     * This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See Time Values in the eBay Web Services guide for information about this time format and converting to and from the GMT time zone.
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
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType $extension
     */
    public function addToExtension(\Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getAck();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}ack", $value);
        }
        $value = $this->getErrorMessage();
        if (null !== $value && !empty($this->getErrorMessage())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}errorMessage", array_map(function ($v) {
                return ["error" => $v];
            }, $value));
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}version", $value);
        }
        $value = $this->getTimestamp();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}timestamp", $value);
        }
        $value = $this->getExtension();
        if (null !== $value && !empty($this->getExtension())) {
            $writer->write(array_map(function ($v) {
                return ["extension" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}errorMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setErrorMessage(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}timestamp');
        if (null !== $value) {
            $this->setTimestamp(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}extension', true);
        if (null !== $value && !empty($value)) {
            $this->setExtension(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType::fromKeyValue($v);
            }, $value));
        }
    }
}
