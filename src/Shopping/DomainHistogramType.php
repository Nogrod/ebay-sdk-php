<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DomainHistogramType
 *
 * A generic type used for histograms.
 * XSD Type: DomainHistogramType
 */
class DomainHistogramType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each histogram entry shows how many matching products
     *  were found in each matching domain. A domain is like a high-level
     *  category, or a group of categories whose items share the same basic
     *  product characteristics.
     *
     * @var \Nogrod\eBaySDK\Shopping\HistogramEntryType[] $domain
     */
    private $domain = [
        
    ];

    /**
     * Adds as domain
     *
     * Each histogram entry shows how many matching products
     *  were found in each matching domain. A domain is like a high-level
     *  category, or a group of categories whose items share the same basic
     *  product characteristics.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\HistogramEntryType $domain
     */
    public function addToDomain(\Nogrod\eBaySDK\Shopping\HistogramEntryType $domain)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * isset domain
     *
     * Each histogram entry shows how many matching products
     *  were found in each matching domain. A domain is like a high-level
     *  category, or a group of categories whose items share the same basic
     *  product characteristics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomain($index)
    {
        return isset($this->domain[$index]);
    }

    /**
     * unset domain
     *
     * Each histogram entry shows how many matching products
     *  were found in each matching domain. A domain is like a high-level
     *  category, or a group of categories whose items share the same basic
     *  product characteristics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomain($index)
    {
        unset($this->domain[$index]);
    }

    /**
     * Gets as domain
     *
     * Each histogram entry shows how many matching products
     *  were found in each matching domain. A domain is like a high-level
     *  category, or a group of categories whose items share the same basic
     *  product characteristics.
     *
     * @return \Nogrod\eBaySDK\Shopping\HistogramEntryType[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * Each histogram entry shows how many matching products
     *  were found in each matching domain. A domain is like a high-level
     *  category, or a group of categories whose items share the same basic
     *  product characteristics.
     *
     * @param \Nogrod\eBaySDK\Shopping\HistogramEntryType[] $domain
     * @return self
     */
    public function setDomain(array $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomain();
        if (null !== $value && !empty($this->getDomain())) {
            $writer->write(array_map(function ($v) {
                return ["Domain" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Domain', true);
        if (null !== $value && !empty($value)) {
            $this->setDomain(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\HistogramEntryType::fromKeyValue($v);
            }, $value));
        }
    }
}
