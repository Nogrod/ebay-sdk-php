<?php

namespace Nogrod\eBaySDK\FileTransfer;

/**
 * Class representing ErrorMessageType
 *
 * ErrorMessage to indicate any Error/Warning that occurred as part of the service
 *  call. Runtime errors will not be reported here, but will be reported as SOAP errors.
 * XSD Type: ErrorMessage
 */
class ErrorMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Details about a single error.
     *
     * @var \Nogrod\eBaySDK\FileTransfer\ErrorDataType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as error
     *
     * Details about a single error.
     *
     * @return self
     * @param \Nogrod\eBaySDK\FileTransfer\ErrorDataType $error
     */
    public function addToError(\Nogrod\eBaySDK\FileTransfer\ErrorDataType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * Details about a single error.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * Details about a single error.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * Details about a single error.
     *
     * @return \Nogrod\eBaySDK\FileTransfer\ErrorDataType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * Details about a single error.
     *
     * @param \Nogrod\eBaySDK\FileTransfer\ErrorDataType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getError();
        if (null !== $value && !empty($this->getError())) {
            $writer->write(array_map(function ($v) {
                return ["error" => $v];
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}error', true);
        if (null !== $value && !empty($value)) {
            $this->setError(array_map(function ($v) {
                return \Nogrod\eBaySDK\FileTransfer\ErrorDataType::fromKeyValue($v);
            }, $value));
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
