<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumUnpaidItemStrikesDurationDetailsType
 *
 * Type used by the <b>MaximumUnpaidItemStrikesDuration</b> container that is returned in <b>GeteBayDetails</b>. The <b>MaximumUnpaidItemStrikesDuration</b> container indicates the periods of time that can be used when evaluating how many unpaid item strikes against a buyer during this given period will exclude the prospective buyer from purchasing the line item.
 * XSD Type: MaximumUnpaidItemStrikesDurationDetailsType
 */
class MaximumUnpaidItemStrikesDurationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The period is the number of days (last 60 days, last 180 days, etc.)
     *  during which the buyer's unpaid item strikes are calculated.
     *  This is applicable only to sellers.
     *
     * @var string $period
     */
    private $period = null;

    /**
     * The description of the period, such as 'month', 'quarter', or 'half a year'.
     *  The data in this field can be used as a label in your application's display.
     *  This is applicable only to sellers.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as period
     *
     * The period is the number of days (last 60 days, last 180 days, etc.)
     *  during which the buyer's unpaid item strikes are calculated.
     *  This is applicable only to sellers.
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period is the number of days (last 60 days, last 180 days, etc.)
     *  during which the buyer's unpaid item strikes are calculated.
     *  This is applicable only to sellers.
     *
     * @param string $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as description
     *
     * The description of the period, such as 'month', 'quarter', or 'half a year'.
     *  The data in this field can be used as a label in your application's display.
     *  This is applicable only to sellers.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description of the period, such as 'month', 'quarter', or 'half a year'.
     *  The data in this field can be used as a label in your application's display.
     *  This is applicable only to sellers.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPeriod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Period", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Period');
        if (null !== $value) {
            $this->setPeriod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
