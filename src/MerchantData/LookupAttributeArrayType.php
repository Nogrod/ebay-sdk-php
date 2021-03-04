<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing LookupAttributeArrayType
 *
 * This type is deprecated.
 * XSD Type: LookupAttributeArrayType
 */
class LookupAttributeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\LookupAttributeType[] $lookupAttribute
     */
    private $lookupAttribute = [
        
    ];

    /**
     * Adds as lookupAttribute
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\LookupAttributeType $lookupAttribute
     */
    public function addToLookupAttribute(\Nogrod\eBaySDK\MerchantData\LookupAttributeType $lookupAttribute)
    {
        $this->lookupAttribute[] = $lookupAttribute;
        return $this;
    }

    /**
     * isset lookupAttribute
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLookupAttribute($index)
    {
        return isset($this->lookupAttribute[$index]);
    }

    /**
     * unset lookupAttribute
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLookupAttribute($index)
    {
        unset($this->lookupAttribute[$index]);
    }

    /**
     * Gets as lookupAttribute
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\LookupAttributeType[]
     */
    public function getLookupAttribute()
    {
        return $this->lookupAttribute;
    }

    /**
     * Sets a new lookupAttribute
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\LookupAttributeType[] $lookupAttribute
     * @return self
     */
    public function setLookupAttribute(array $lookupAttribute)
    {
        $this->lookupAttribute = $lookupAttribute;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLookupAttribute();
        if (null !== $value && !empty($this->getLookupAttribute())) {
            $writer->write(array_map(function ($v) {
                return ["LookupAttribute" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LookupAttribute', true);
        if (null !== $value && !empty($value)) {
            $this->setLookupAttribute(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\LookupAttributeType::fromKeyValue($v);
            }, $value));
        }
    }
}
