<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing HistogramEntryType
 *
 * This type is used by the <b>DomainHistogram</b> container that is returned in the <b>FindProducts</b> response.
 *  <br/><br/>
 *  <span class="tablenote"><b>Important:</b>
 *  The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the <b>FindProducts</b> response, and filtering by domain logic is no longer reliable.
 *  </span>
 * XSD Type: HistogramEntryType
 */
class HistogramEntryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This is the name of eBay category domain. An eBay catalog product can be mapped to more than one eBay category domain.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This is the number of eBay catalog products associated with eBay category domain. If an eBay catalog product is mapped to more than one eBay category domain, it is counted separately for each domain. For example, if the same eBay catalog product appears in both <code>Children's Books</code> and <code>Fiction Books</code> domains, the count for both of these domains will include that eBay catalog product.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Gets as name
     *
     * This is the name of eBay category domain. An eBay catalog product can be mapped to more than one eBay category domain.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This is the name of eBay category domain. An eBay catalog product can be mapped to more than one eBay category domain.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as count
     *
     * This is the number of eBay catalog products associated with eBay category domain. If an eBay catalog product is mapped to more than one eBay category domain, it is counted separately for each domain. For example, if the same eBay catalog product appears in both <code>Children's Books</code> and <code>Fiction Books</code> domains, the count for both of these domains will include that eBay catalog product.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * This is the number of eBay catalog products associated with eBay category domain. If an eBay catalog product is mapped to more than one eBay category domain, it is counted separately for each domain. For example, if the same eBay catalog product appears in both <code>Children's Books</code> and <code>Fiction Books</code> domains, the count for both of these domains will include that eBay catalog product.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Count", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Count');
        if (null !== $value) {
            $this->setCount($value);
        }
    }
}
