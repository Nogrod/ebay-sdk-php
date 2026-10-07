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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->intlRateTable;
        if (null !== $value) {
            $writer->writeElementNs(null, 'intlRateTable', null, (string) $value);
        }
        $value = $this->domesticRateTable;
        if (null !== $value) {
            $writer->writeElementNs(null, 'domesticRateTable', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\RateTableInfoType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'intlRateTable':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->intlRateTable = $value;
                    }
                    return true;
                case 'domesticRateTable':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->domesticRateTable = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
