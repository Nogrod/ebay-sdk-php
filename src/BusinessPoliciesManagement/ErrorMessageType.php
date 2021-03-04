<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorMessageType
 *
 * Documentation goes here
 * XSD Type: ErrorMessage
 */
class ErrorMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as error
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error
     */
    public function addToError(\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}error', true);
        if (null !== $value && !empty($value)) {
            $this->setError(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::fromKeyValue($v);
            }, $value));
        }
    }
}
