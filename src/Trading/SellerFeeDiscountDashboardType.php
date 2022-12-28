<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerFeeDiscountDashboardType
 *
 * PowerSeller discount information (e.g., to show in a Seller Dashboard). As a
 *  PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based
 *  on how well you're doing as a seller.
 * XSD Type: SellerFeeDiscountDashboardType
 */
class SellerFeeDiscountDashboardType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * PowerSeller discount as a percentage. For example, a 5% discount is returned
     *  as 0.05.
     *
     * @var float $percent
     */
    private $percent = null;

    /**
     * Gets as percent
     *
     * PowerSeller discount as a percentage. For example, a 5% discount is returned
     *  as 0.05.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * PowerSeller discount as a percentage. For example, a 5% discount is returned
     *  as 0.05.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Percent", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Percent');
        if (null !== $value) {
            $this->setPercent($value);
        }
    }
}
