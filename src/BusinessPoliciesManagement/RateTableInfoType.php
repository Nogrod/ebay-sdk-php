<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RateTableInfoType
 *
 *
 * XSD Type: RateTableInfo
 */
class RateTableInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $intlRateTable
     */
    private $intlRateTable = null;

    /**
     * @var string $domesticRateTable
     */
    private $domesticRateTable = null;

    /**
     * Gets as intlRateTable
     *
     * @return string
     */
    public function getIntlRateTable()
    {
        return $this->intlRateTable;
    }

    /**
     * Sets a new intlRateTable
     *
     * @param string $intlRateTable
     * @return self
     */
    public function setIntlRateTable($intlRateTable)
    {
        $this->intlRateTable = $intlRateTable;
        return $this;
    }

    /**
     * Gets as domesticRateTable
     *
     * @return string
     */
    public function getDomesticRateTable()
    {
        return $this->domesticRateTable;
    }

    /**
     * Sets a new domesticRateTable
     *
     * @param string $domesticRateTable
     * @return self
     */
    public function setDomesticRateTable($domesticRateTable)
    {
        $this->domesticRateTable = $domesticRateTable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getIntlRateTable();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlRateTable", $value);
        }
        $value = $this->getDomesticRateTable();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticRateTable", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlRateTable');
        if (null !== $value) {
            $this->setIntlRateTable($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticRateTable');
        if (null !== $value) {
            $this->setDomesticRateTable($value);
        }
    }
}
