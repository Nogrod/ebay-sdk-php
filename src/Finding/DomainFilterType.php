<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing DomainFilterType
 *
 * Name of the domain to which search results will be restricted.
 * XSD Type: DomainFilter
 */
class DomainFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Specify the name of the domain to which you want to restrict search
     *  results. Only items listed within the specified domain will be returned
     *  in the search results. Domain names can be retrieved from an aspect
     *  histogram.
     *
     * @var string[] $domainName
     */
    private $domainName = [
        
    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Adds as domainName
     *
     * Specify the name of the domain to which you want to restrict search
     *  results. Only items listed within the specified domain will be returned
     *  in the search results. Domain names can be retrieved from an aspect
     *  histogram.
     *
     * @return self
     * @param string $domainName
     */
    public function addToDomainName($domainName)
    {
        $this->domainName[] = $domainName;
        return $this;
    }

    /**
     * isset domainName
     *
     * Specify the name of the domain to which you want to restrict search
     *  results. Only items listed within the specified domain will be returned
     *  in the search results. Domain names can be retrieved from an aspect
     *  histogram.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDomainName($index)
    {
        return isset($this->domainName[$index]);
    }

    /**
     * unset domainName
     *
     * Specify the name of the domain to which you want to restrict search
     *  results. Only items listed within the specified domain will be returned
     *  in the search results. Domain names can be retrieved from an aspect
     *  histogram.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDomainName($index)
    {
        unset($this->domainName[$index]);
    }

    /**
     * Gets as domainName
     *
     * Specify the name of the domain to which you want to restrict search
     *  results. Only items listed within the specified domain will be returned
     *  in the search results. Domain names can be retrieved from an aspect
     *  histogram.
     *
     * @return string[]
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * Specify the name of the domain to which you want to restrict search
     *  results. Only items listed within the specified domain will be returned
     *  in the search results. Domain names can be retrieved from an aspect
     *  histogram.
     *
     * @param string[] $domainName
     * @return self
     */
    public function setDomainName(array $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getDomainName();
        if (null !== $value && !empty($this->getDomainName())) {
            $writer->write(array_map(function ($v) {
                return ["domainName" => $v];
            }, $value));
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}domainName', true);
        if (null !== $value && !empty($value)) {
            $this->setDomainName($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
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
