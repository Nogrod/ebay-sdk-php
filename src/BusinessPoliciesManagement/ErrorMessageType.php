<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorMessageType
 *
 * Information regarding an error or warning that occurred when eBay processed the request. Not returned when the <b>ack</b> value is <b>Success</b>.
 * XSD Type: ErrorMessage
 */
class ErrorMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Details about a single error.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $error
     */
    private $error = [

    ];

    /**
     * Adds as error
     *
     * Details about a single error.
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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[]
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
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getError();
        if (null !== $value && [] !== $this->getError()) {
            $writer->write(array_map(function ($v) {return ["error" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorMessageType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}error');
        if (null !== $value) {
            $this->setError(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::fromKeyValue($v);}, $value));
        }
    }
}
