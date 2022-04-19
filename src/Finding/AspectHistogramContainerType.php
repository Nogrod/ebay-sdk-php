<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AspectHistogramContainerType
 *
 * Container for a top-level set of aspect histograms.
 * XSD Type: AspectHistogramContainer
 */
class AspectHistogramContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A buy-side group of items that share aspects, but not necessarily an eBay
     *  category. For example "Women's Dresses" or "Digital Cameras" could be
     *  domains. You can use a domainName to label a set of aspects that you
     *  display.
     *  <br><br>
     *  Domains are extracted from item listing properties (such as item titles
     *  and subtitles).
     *
     * @var string $domainName
     */
    private $domainName = null;

    /**
     * A buy-side group of items, for example "Shoes." Domains are extracted
     *  from item listing properties, such as the title, descriptions, and so on.
     *
     * @var string $domainDisplayName
     */
    private $domainDisplayName = null;

    /**
     * A characteristic of an item in a domain. For example, "Optical Zoom",
     *  "Brand", and "Megapixels" could be aspects of the Digital Cameras domain.
     *  Aspects are well-known, standardized characteristics of a domain, and
     *  they vary from domain to domain (the aspects of "Men's Shoes" are
     *  different from those of "Digital Cameras"). A search request on the eBay
     *  site will often display aspects and their respective aspect values on the
     *  left-had side of a query response.
     *  <br><br>
     *  Aspects are extracted from item listing properties (such as item titles
     *  and subtitles), and represent the characteristics of active items. Values
     *  returned in the Aspect container can be used as inputs to the
     *  aspectFilter fields in a query to distill the items returned by the
     *  query. eBay generates aspects dynamically from the items currently
     *  listed; aspects provide a view into what is currently available on eBay.
     *  Because of this, aspect values returned one day cannot be guaranteed to
     *  be valid the next day.
     *  <br><br>
     *  The following graphic shows how eBay might return a set of aspects for
     *  the Digital Cameras domain. In this graphic, "Product Type", "Brand", and
     *  "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to
     *  12.9 MP" are aspect values. Histogram values (item counts) are shown for
     *  each aspect value.
     *  <br><br>
     *  <img
     *  src="https://developer.ebay.com/devzone/finding/concepts/images/refinesearch.jpg"
     *  alt="eBay Aspects" />
     *
     * @var \Nogrod\eBaySDK\Finding\AspectType[] $aspect
     */
    private $aspect = [

    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as domainName
     *
     * A buy-side group of items that share aspects, but not necessarily an eBay
     *  category. For example "Women's Dresses" or "Digital Cameras" could be
     *  domains. You can use a domainName to label a set of aspects that you
     *  display.
     *  <br><br>
     *  Domains are extracted from item listing properties (such as item titles
     *  and subtitles).
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * A buy-side group of items that share aspects, but not necessarily an eBay
     *  category. For example "Women's Dresses" or "Digital Cameras" could be
     *  domains. You can use a domainName to label a set of aspects that you
     *  display.
     *  <br><br>
     *  Domains are extracted from item listing properties (such as item titles
     *  and subtitles).
     *
     * @param string $domainName
     * @return self
     */
    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Gets as domainDisplayName
     *
     * A buy-side group of items, for example "Shoes." Domains are extracted
     *  from item listing properties, such as the title, descriptions, and so on.
     *
     * @return string
     */
    public function getDomainDisplayName()
    {
        return $this->domainDisplayName;
    }

    /**
     * Sets a new domainDisplayName
     *
     * A buy-side group of items, for example "Shoes." Domains are extracted
     *  from item listing properties, such as the title, descriptions, and so on.
     *
     * @param string $domainDisplayName
     * @return self
     */
    public function setDomainDisplayName($domainDisplayName)
    {
        $this->domainDisplayName = $domainDisplayName;
        return $this;
    }

    /**
     * Adds as aspect
     *
     * A characteristic of an item in a domain. For example, "Optical Zoom",
     *  "Brand", and "Megapixels" could be aspects of the Digital Cameras domain.
     *  Aspects are well-known, standardized characteristics of a domain, and
     *  they vary from domain to domain (the aspects of "Men's Shoes" are
     *  different from those of "Digital Cameras"). A search request on the eBay
     *  site will often display aspects and their respective aspect values on the
     *  left-had side of a query response.
     *  <br><br>
     *  Aspects are extracted from item listing properties (such as item titles
     *  and subtitles), and represent the characteristics of active items. Values
     *  returned in the Aspect container can be used as inputs to the
     *  aspectFilter fields in a query to distill the items returned by the
     *  query. eBay generates aspects dynamically from the items currently
     *  listed; aspects provide a view into what is currently available on eBay.
     *  Because of this, aspect values returned one day cannot be guaranteed to
     *  be valid the next day.
     *  <br><br>
     *  The following graphic shows how eBay might return a set of aspects for
     *  the Digital Cameras domain. In this graphic, "Product Type", "Brand", and
     *  "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to
     *  12.9 MP" are aspect values. Histogram values (item counts) are shown for
     *  each aspect value.
     *  <br><br>
     *  <img
     *  src="https://developer.ebay.com/devzone/finding/concepts/images/refinesearch.jpg"
     *  alt="eBay Aspects" />
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\AspectType $aspect
     */
    public function addToAspect(\Nogrod\eBaySDK\Finding\AspectType $aspect)
    {
        $this->aspect[] = $aspect;
        return $this;
    }

    /**
     * isset aspect
     *
     * A characteristic of an item in a domain. For example, "Optical Zoom",
     *  "Brand", and "Megapixels" could be aspects of the Digital Cameras domain.
     *  Aspects are well-known, standardized characteristics of a domain, and
     *  they vary from domain to domain (the aspects of "Men's Shoes" are
     *  different from those of "Digital Cameras"). A search request on the eBay
     *  site will often display aspects and their respective aspect values on the
     *  left-had side of a query response.
     *  <br><br>
     *  Aspects are extracted from item listing properties (such as item titles
     *  and subtitles), and represent the characteristics of active items. Values
     *  returned in the Aspect container can be used as inputs to the
     *  aspectFilter fields in a query to distill the items returned by the
     *  query. eBay generates aspects dynamically from the items currently
     *  listed; aspects provide a view into what is currently available on eBay.
     *  Because of this, aspect values returned one day cannot be guaranteed to
     *  be valid the next day.
     *  <br><br>
     *  The following graphic shows how eBay might return a set of aspects for
     *  the Digital Cameras domain. In this graphic, "Product Type", "Brand", and
     *  "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to
     *  12.9 MP" are aspect values. Histogram values (item counts) are shown for
     *  each aspect value.
     *  <br><br>
     *  <img
     *  src="https://developer.ebay.com/devzone/finding/concepts/images/refinesearch.jpg"
     *  alt="eBay Aspects" />
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAspect($index)
    {
        return isset($this->aspect[$index]);
    }

    /**
     * unset aspect
     *
     * A characteristic of an item in a domain. For example, "Optical Zoom",
     *  "Brand", and "Megapixels" could be aspects of the Digital Cameras domain.
     *  Aspects are well-known, standardized characteristics of a domain, and
     *  they vary from domain to domain (the aspects of "Men's Shoes" are
     *  different from those of "Digital Cameras"). A search request on the eBay
     *  site will often display aspects and their respective aspect values on the
     *  left-had side of a query response.
     *  <br><br>
     *  Aspects are extracted from item listing properties (such as item titles
     *  and subtitles), and represent the characteristics of active items. Values
     *  returned in the Aspect container can be used as inputs to the
     *  aspectFilter fields in a query to distill the items returned by the
     *  query. eBay generates aspects dynamically from the items currently
     *  listed; aspects provide a view into what is currently available on eBay.
     *  Because of this, aspect values returned one day cannot be guaranteed to
     *  be valid the next day.
     *  <br><br>
     *  The following graphic shows how eBay might return a set of aspects for
     *  the Digital Cameras domain. In this graphic, "Product Type", "Brand", and
     *  "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to
     *  12.9 MP" are aspect values. Histogram values (item counts) are shown for
     *  each aspect value.
     *  <br><br>
     *  <img
     *  src="https://developer.ebay.com/devzone/finding/concepts/images/refinesearch.jpg"
     *  alt="eBay Aspects" />
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAspect($index)
    {
        unset($this->aspect[$index]);
    }

    /**
     * Gets as aspect
     *
     * A characteristic of an item in a domain. For example, "Optical Zoom",
     *  "Brand", and "Megapixels" could be aspects of the Digital Cameras domain.
     *  Aspects are well-known, standardized characteristics of a domain, and
     *  they vary from domain to domain (the aspects of "Men's Shoes" are
     *  different from those of "Digital Cameras"). A search request on the eBay
     *  site will often display aspects and their respective aspect values on the
     *  left-had side of a query response.
     *  <br><br>
     *  Aspects are extracted from item listing properties (such as item titles
     *  and subtitles), and represent the characteristics of active items. Values
     *  returned in the Aspect container can be used as inputs to the
     *  aspectFilter fields in a query to distill the items returned by the
     *  query. eBay generates aspects dynamically from the items currently
     *  listed; aspects provide a view into what is currently available on eBay.
     *  Because of this, aspect values returned one day cannot be guaranteed to
     *  be valid the next day.
     *  <br><br>
     *  The following graphic shows how eBay might return a set of aspects for
     *  the Digital Cameras domain. In this graphic, "Product Type", "Brand", and
     *  "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to
     *  12.9 MP" are aspect values. Histogram values (item counts) are shown for
     *  each aspect value.
     *  <br><br>
     *  <img
     *  src="https://developer.ebay.com/devzone/finding/concepts/images/refinesearch.jpg"
     *  alt="eBay Aspects" />
     *
     * @return \Nogrod\eBaySDK\Finding\AspectType[]
     */
    public function getAspect()
    {
        return $this->aspect;
    }

    /**
     * Sets a new aspect
     *
     * A characteristic of an item in a domain. For example, "Optical Zoom",
     *  "Brand", and "Megapixels" could be aspects of the Digital Cameras domain.
     *  Aspects are well-known, standardized characteristics of a domain, and
     *  they vary from domain to domain (the aspects of "Men's Shoes" are
     *  different from those of "Digital Cameras"). A search request on the eBay
     *  site will often display aspects and their respective aspect values on the
     *  left-had side of a query response.
     *  <br><br>
     *  Aspects are extracted from item listing properties (such as item titles
     *  and subtitles), and represent the characteristics of active items. Values
     *  returned in the Aspect container can be used as inputs to the
     *  aspectFilter fields in a query to distill the items returned by the
     *  query. eBay generates aspects dynamically from the items currently
     *  listed; aspects provide a view into what is currently available on eBay.
     *  Because of this, aspect values returned one day cannot be guaranteed to
     *  be valid the next day.
     *  <br><br>
     *  The following graphic shows how eBay might return a set of aspects for
     *  the Digital Cameras domain. In this graphic, "Product Type", "Brand", and
     *  "Megapixels" are aspects, and "Point & Shoot", "Canon", and "12.0 to
     *  12.9 MP" are aspect values. Histogram values (item counts) are shown for
     *  each aspect value.
     *  <br><br>
     *  <img
     *  src="https://developer.ebay.com/devzone/finding/concepts/images/refinesearch.jpg"
     *  alt="eBay Aspects" />
     *
     * @param \Nogrod\eBaySDK\Finding\AspectType[] $aspect
     * @return self
     */
    public function setAspect(array $aspect)
    {
        $this->aspect = $aspect;
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
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}domainName", $value);
        }
        $value = $this->getDomainDisplayName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}domainDisplayName", $value);
        }
        $value = $this->getAspect();
        if (null !== $value && !empty($this->getAspect())) {
            $writer->write(array_map(function ($v) {
                return ["aspect" => $v];
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}domainName');
        if (null !== $value) {
            $this->setDomainName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}domainDisplayName');
        if (null !== $value) {
            $this->setDomainDisplayName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}aspect', true);
        if (null !== $value && !empty($value)) {
            $this->setAspect(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\AspectType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
