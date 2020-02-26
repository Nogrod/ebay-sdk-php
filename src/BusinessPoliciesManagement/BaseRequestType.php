<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing BaseRequestType
 *
 * This is the base class for request container for
 *  all service operations.
 * XSD Type: BaseRequest
 */
class BaseRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType[] $extension
     */
    private $extension = [
        
    ];

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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}extension', true);
        if (null !== $value && !empty($value)) {
            $this->setExtension(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType::fromKeyValue($v);
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
