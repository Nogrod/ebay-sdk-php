<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BaseRequestType
 *
 * This is the base class for the request container for all service operations.
 * XSD Type: BaseRequest
 */
class BaseRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Reserved for future use.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[] $extension
     */
    private $extension = [

    ];

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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[]
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
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getExtension();
        if (null !== $value && !empty($this->getExtension())) {
            $writer->write(array_map(function ($v) {return ["extension" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}extension', true);
        if (null !== $value && !empty($value)) {
            $this->setExtension(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType::fromKeyValue($v);}, $value));
        }
    }
}
