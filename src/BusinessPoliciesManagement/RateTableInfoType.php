<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RateTableInfoType
 *
 * Type definining the <b>rateTableInfo</b> container, which identifies the domestic and international shipping rate tables referenced to determine flat-rate shipping costs based on shipping service level (Economy, Standard, Expedited, One-day) and delivery location.
 * XSD Type: RateTableInfo
 */
class RateTableInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note:</b>
     *  International shipping rate tables are only available to sellers listing on the Germany and UK eBay sites.
     *  </span>
     *  <br>
     *  This value indicates that the seller's international shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>intlRateTable</b> is 'Default', which means that the default international shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if an international shipping rate table is set up for the seller's account in My eBay, and it will only affect those international regions and countries for which flat shipping rates are defined.
     *  <br><br>
     *  This field is returned in <b>getSellerProfiles</b> if it is defined for the shipping policy.
     *
     * @var string $intlRateTable
     */
    private $intlRateTable = null;

    /**
     * This value indicates that the seller's domestic shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>domesticRateTable</b> is 'Default', which means that the default domestic shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if a domestic shipping rate table is set up for the seller's account in My eBay, and it will only affect those domestic regions for which flat shipping rates are defined.
     *  <br><br>
     *  This field is returned in <b>getSellerProfiles</b> if it is defined for the shipping policy.
     *
     * @var string $domesticRateTable
     */
    private $domesticRateTable = null;

    /**
     * Gets as intlRateTable
     *
     * <span class="tablenote"><b>Note:</b>
     *  International shipping rate tables are only available to sellers listing on the Germany and UK eBay sites.
     *  </span>
     *  <br>
     *  This value indicates that the seller's international shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>intlRateTable</b> is 'Default', which means that the default international shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if an international shipping rate table is set up for the seller's account in My eBay, and it will only affect those international regions and countries for which flat shipping rates are defined.
     *  <br><br>
     *  This field is returned in <b>getSellerProfiles</b> if it is defined for the shipping policy.
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
     * <span class="tablenote"><b>Note:</b>
     *  International shipping rate tables are only available to sellers listing on the Germany and UK eBay sites.
     *  </span>
     *  <br>
     *  This value indicates that the seller's international shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>intlRateTable</b> is 'Default', which means that the default international shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if an international shipping rate table is set up for the seller's account in My eBay, and it will only affect those international regions and countries for which flat shipping rates are defined.
     *  <br><br>
     *  This field is returned in <b>getSellerProfiles</b> if it is defined for the shipping policy.
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
     * This value indicates that the seller's domestic shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>domesticRateTable</b> is 'Default', which means that the default domestic shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if a domestic shipping rate table is set up for the seller's account in My eBay, and it will only affect those domestic regions for which flat shipping rates are defined.
     *  <br><br>
     *  This field is returned in <b>getSellerProfiles</b> if it is defined for the shipping policy.
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
     * This value indicates that the seller's domestic shipping rate table should be referenced to determine flat-rate shipping costs based on shipping service level and delivery location. Currently, the only valid value for <b>domesticRateTable</b> is 'Default', which means that the default domestic shipping rate table set up by the seller in My eBay is referenced.
     *  <br><br>
     *  Including this field in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call will only have an effect on flat shipping rates if a domestic shipping rate table is set up for the seller's account in My eBay, and it will only affect those domestic regions for which flat shipping rates are defined.
     *  <br><br>
     *  This field is returned in <b>getSellerProfiles</b> if it is defined for the shipping policy.
     *
     * @param string $domesticRateTable
     * @return self
     */
    public function setDomesticRateTable($domesticRateTable)
    {
        $this->domesticRateTable = $domesticRateTable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
