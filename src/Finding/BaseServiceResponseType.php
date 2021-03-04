<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BaseServiceResponseType
 *
 * Base response container for all service operations. Contains error
 *  information associated with the request.
 * XSD Type: BaseServiceResponse
 */
class BaseServiceResponseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates whether or not errors or warnings were generated during the
     *  processing of the request.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * Description of an error or warning that occurred when eBay processed the
     *  request. Not returned if the ack value is Success.
     *
     * @var \Nogrod\eBaySDK\Finding\ErrorDataType[] $errorMessage
     */
    private $errorMessage = null;

    /**
     * The release version that eBay used to process the request. Developer
     *  Technical Support may ask you for the version value if you work with them
     *  to troubleshoot issues.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The version in use is normally the latest release version, as specified
     *  in the release notes. Note that eBay releases the API to international
     *  sites about a week after the API version is released to the US site.
     *  </span>
     *
     * @var string $version
     */
    private $version = null;

    /**
     * This value represents the date and time when eBay processed the request.
     *  This value is returned in GMT, the ISO 8601 date and time format (YYYY-
     *  MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about the
     *  time format, and for details on converting to and from the GMT time zone.
     *
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * Gets as ack
     *
     * Indicates whether or not errors or warnings were generated during the
     *  processing of the request.
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
     * Indicates whether or not errors or warnings were generated during the
     *  processing of the request.
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
     * Description of an error or warning that occurred when eBay processed the
     *  request. Not returned if the ack value is Success.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ErrorDataType $error
     */
    public function addToErrorMessage(\Nogrod\eBaySDK\Finding\ErrorDataType $error)
    {
        $this->errorMessage[] = $error;
        return $this;
    }

    /**
     * isset errorMessage
     *
     * Description of an error or warning that occurred when eBay processed the
     *  request. Not returned if the ack value is Success.
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
     * Description of an error or warning that occurred when eBay processed the
     *  request. Not returned if the ack value is Success.
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
     * Description of an error or warning that occurred when eBay processed the
     *  request. Not returned if the ack value is Success.
     *
     * @return \Nogrod\eBaySDK\Finding\ErrorDataType[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * Description of an error or warning that occurred when eBay processed the
     *  request. Not returned if the ack value is Success.
     *
     * @param \Nogrod\eBaySDK\Finding\ErrorDataType[] $errorMessage
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
     * The release version that eBay used to process the request. Developer
     *  Technical Support may ask you for the version value if you work with them
     *  to troubleshoot issues.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The version in use is normally the latest release version, as specified
     *  in the release notes. Note that eBay releases the API to international
     *  sites about a week after the API version is released to the US site.
     *  </span>
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
     * The release version that eBay used to process the request. Developer
     *  Technical Support may ask you for the version value if you work with them
     *  to troubleshoot issues.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  The version in use is normally the latest release version, as specified
     *  in the release notes. Note that eBay releases the API to international
     *  sites about a week after the API version is released to the US site.
     *  </span>
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
     * This value represents the date and time when eBay processed the request.
     *  This value is returned in GMT, the ISO 8601 date and time format (YYYY-
     *  MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about the
     *  time format, and for details on converting to and from the GMT time zone.
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
     * This value represents the date and time when eBay processed the request.
     *  This value is returned in GMT, the ISO 8601 date and time format (YYYY-
     *  MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about the
     *  time format, and for details on converting to and from the GMT time zone.
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getAck();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}ack", $value);
        }
        $value = $this->getErrorMessage();
        if (null !== $value && !empty($this->getErrorMessage())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}errorMessage", array_map(function ($v) {
                return ["error" => $v];
            }, $value));
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}version", $value);
        }
        $value = $this->getTimestamp();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}timestamp", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}errorMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setErrorMessage(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\ErrorDataType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}timestamp');
        if (null !== $value) {
            $this->setTimestamp(new \DateTime($value));
        }
    }
}
