<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SiteFilterType
 *
 * Reserved for internal or future use.
 * XSD Type: SiteFilter
 */
class SiteFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Reserved for internal or future use.
     *
     * @var string[] $globalId
     */
    private $globalId = [

    ];

    /**
     * Adds as globalId
     *
     * Reserved for internal or future use.
     *
     * @return self
     * @param string $globalId
     */
    public function addToGlobalId($globalId)
    {
        $this->globalId[] = $globalId;
        return $this;
    }

    /**
     * isset globalId
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGlobalId($index)
    {
        return isset($this->globalId[$index]);
    }

    /**
     * unset globalId
     *
     * Reserved for internal or future use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGlobalId($index)
    {
        unset($this->globalId[$index]);
    }

    /**
     * Gets as globalId
     *
     * Reserved for internal or future use.
     *
     * @return string[]
     */
    public function getGlobalId()
    {
        return $this->globalId;
    }

    /**
     * Sets a new globalId
     *
     * Reserved for internal or future use.
     *
     * @param string[] $globalId
     * @return self
     */
    public function setGlobalId(array $globalId)
    {
        $this->globalId = $globalId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getGlobalId();
        if (null !== $value && !empty($this->getGlobalId())) {
            $writer->write(array_map(function ($v) {
                return ["globalId" => $v];
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}globalId', true);
        if (null !== $value && !empty($value)) {
            $this->setGlobalId($value);
        }
    }
}
