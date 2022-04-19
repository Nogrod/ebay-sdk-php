<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MachineTagTypeArrayType
 *
 * Container for a set of Machine Tag Types
 * XSD Type: MachineTagTypeArrayType
 */
class MachineTagTypeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A list of Machine Tags that were used to track the user.
     *
     * @var string[] $tagType
     */
    private $tagType = [

    ];

    /**
     * Adds as tagType
     *
     * A list of Machine Tags that were used to track the user.
     *
     * @return self
     * @param string $tagType
     */
    public function addToTagType($tagType)
    {
        $this->tagType[] = $tagType;
        return $this;
    }

    /**
     * isset tagType
     *
     * A list of Machine Tags that were used to track the user.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTagType($index)
    {
        return isset($this->tagType[$index]);
    }

    /**
     * unset tagType
     *
     * A list of Machine Tags that were used to track the user.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTagType($index)
    {
        unset($this->tagType[$index]);
    }

    /**
     * Gets as tagType
     *
     * A list of Machine Tags that were used to track the user.
     *
     * @return string[]
     */
    public function getTagType()
    {
        return $this->tagType;
    }

    /**
     * Sets a new tagType
     *
     * A list of Machine Tags that were used to track the user.
     *
     * @param string $tagType
     * @return self
     */
    public function setTagType(array $tagType)
    {
        $this->tagType = $tagType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTagType();
        if (null !== $value && !empty($this->getTagType())) {
            $writer->write(array_map(function ($v) {
                return ["TagType" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TagType', true);
        if (null !== $value && !empty($value)) {
            $this->setTagType($value);
        }
    }
}
