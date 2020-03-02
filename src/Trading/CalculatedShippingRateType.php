<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CalculatedShippingRateType
 *
 * Details pertinent to one or more items for which
 *  calculated shipping (or flat rate shipping using shipping rate tables with
 *  weight surcharges) has been offered by the seller, such as package
 *  dimension and weight and packaging/handling costs. Also returned
 *  with the data for an item's transaction.
 *  <br><br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container should now be specified in the <strong>ShippingPackageDetails</strong> container instead.
 *  </span>
 * XSD Type: CalculatedShippingRateType
 */
class CalculatedShippingRateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The postal code for the location from which the package will be shipped. A postal code is required for calculated shipping. This field is not necessary if a postal code is already specified through the <strong>Item.PostalCode</strong> field. If a postal code is included in both fields, the value in <strong>Item.PostalCode</strong> field is used, and the value in <strong>OriginatingPostalCode</strong> is ignored.
     *
     * @var string $originatingPostalCode
     */
    private $originatingPostalCode = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  The value for <strong>MeasurementUnit</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>MeasurementUnit</strong> field is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence.
     *  </span>
     *
     * @var string $measurementUnit
     */
    private $measurementUnit = null;

    /**
     * Fees a seller might assess for the shipping of the item (in addition to
     *  whatever the shipping service might charge).
     *  Any packaging/handling cost specified on input is added to each shipping
     *  service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and
     *  if packaging/handling cost is specified only for domestic shipping, that cost
     *  will be applied by eBay as the international packaging/handling cost. (To
     *  specify a international packaging/handling cost, you must always specify a
     *  domestic packaging/handling cost, even if it is 0.) When UPS is one of the
     *  shipping services offered by the seller, package dimensions are required on
     *  list/relist/revise.
     *  For calculated shipping only.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $packagingHandlingCosts
     */
    private $packagingHandlingCosts = null;

    /**
     * <span class="tablenote"><strong>Note:</strong>
     *  The value for <strong>ShippingIrregular</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>ShippingIrregular</strong> field is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence. This field may be deprecated in the future.
     *  </span>
     *
     * @var bool $shippingIrregular
     */
    private $shippingIrregular = null;

    /**
     * Fees a seller might assess for the shipping of the item (in addition to
     *  whatever the shipping service might charge).
     *  Any packaging/handling cost specified on input is added to each shipping
     *  service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and
     *  if packaging/handling cost is specified only for domestic shipping, that cost
     *  will be applied by eBay as the international packaging/handling cost. (To
     *  specify a international packaging/handling cost, you must always specify a
     *  domestic packaging/handling cost, even if it is 0.)
     *  For international calculated shipping only.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $internationalPackagingHandlingCosts
     */
    private $internationalPackagingHandlingCosts = null;

    /**
     * Gets as originatingPostalCode
     *
     * The postal code for the location from which the package will be shipped. A postal code is required for calculated shipping. This field is not necessary if a postal code is already specified through the <strong>Item.PostalCode</strong> field. If a postal code is included in both fields, the value in <strong>Item.PostalCode</strong> field is used, and the value in <strong>OriginatingPostalCode</strong> is ignored.
     *
     * @return string
     */
    public function getOriginatingPostalCode()
    {
        return $this->originatingPostalCode;
    }

    /**
     * Sets a new originatingPostalCode
     *
     * The postal code for the location from which the package will be shipped. A postal code is required for calculated shipping. This field is not necessary if a postal code is already specified through the <strong>Item.PostalCode</strong> field. If a postal code is included in both fields, the value in <strong>Item.PostalCode</strong> field is used, and the value in <strong>OriginatingPostalCode</strong> is ignored.
     *
     * @param string $originatingPostalCode
     * @return self
     */
    public function setOriginatingPostalCode($originatingPostalCode)
    {
        $this->originatingPostalCode = $originatingPostalCode;
        return $this;
    }

    /**
     * Gets as measurementUnit
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The value for <strong>MeasurementUnit</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>MeasurementUnit</strong> field is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence.
     *  </span>
     *
     * @return string
     */
    public function getMeasurementUnit()
    {
        return $this->measurementUnit;
    }

    /**
     * Sets a new measurementUnit
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The value for <strong>MeasurementUnit</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>MeasurementUnit</strong> field is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence.
     *  </span>
     *
     * @param string $measurementUnit
     * @return self
     */
    public function setMeasurementUnit($measurementUnit)
    {
        $this->measurementUnit = $measurementUnit;
        return $this;
    }

    /**
     * Gets as packagingHandlingCosts
     *
     * Fees a seller might assess for the shipping of the item (in addition to
     *  whatever the shipping service might charge).
     *  Any packaging/handling cost specified on input is added to each shipping
     *  service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and
     *  if packaging/handling cost is specified only for domestic shipping, that cost
     *  will be applied by eBay as the international packaging/handling cost. (To
     *  specify a international packaging/handling cost, you must always specify a
     *  domestic packaging/handling cost, even if it is 0.) When UPS is one of the
     *  shipping services offered by the seller, package dimensions are required on
     *  list/relist/revise.
     *  For calculated shipping only.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPackagingHandlingCosts()
    {
        return $this->packagingHandlingCosts;
    }

    /**
     * Sets a new packagingHandlingCosts
     *
     * Fees a seller might assess for the shipping of the item (in addition to
     *  whatever the shipping service might charge).
     *  Any packaging/handling cost specified on input is added to each shipping
     *  service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and
     *  if packaging/handling cost is specified only for domestic shipping, that cost
     *  will be applied by eBay as the international packaging/handling cost. (To
     *  specify a international packaging/handling cost, you must always specify a
     *  domestic packaging/handling cost, even if it is 0.) When UPS is one of the
     *  shipping services offered by the seller, package dimensions are required on
     *  list/relist/revise.
     *  For calculated shipping only.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $packagingHandlingCosts
     * @return self
     */
    public function setPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType $packagingHandlingCosts)
    {
        $this->packagingHandlingCosts = $packagingHandlingCosts;
        return $this;
    }

    /**
     * Gets as shippingIrregular
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The value for <strong>ShippingIrregular</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>ShippingIrregular</strong> field is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence. This field may be deprecated in the future.
     *  </span>
     *
     * @return bool
     */
    public function getShippingIrregular()
    {
        return $this->shippingIrregular;
    }

    /**
     * Sets a new shippingIrregular
     *
     * <span class="tablenote"><strong>Note:</strong>
     *  The value for <strong>ShippingIrregular</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>ShippingIrregular</strong> field is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence. This field may be deprecated in the future.
     *  </span>
     *
     * @param bool $shippingIrregular
     * @return self
     */
    public function setShippingIrregular($shippingIrregular)
    {
        $this->shippingIrregular = $shippingIrregular;
        return $this;
    }

    /**
     * Gets as internationalPackagingHandlingCosts
     *
     * Fees a seller might assess for the shipping of the item (in addition to
     *  whatever the shipping service might charge).
     *  Any packaging/handling cost specified on input is added to each shipping
     *  service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and
     *  if packaging/handling cost is specified only for domestic shipping, that cost
     *  will be applied by eBay as the international packaging/handling cost. (To
     *  specify a international packaging/handling cost, you must always specify a
     *  domestic packaging/handling cost, even if it is 0.)
     *  For international calculated shipping only.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInternationalPackagingHandlingCosts()
    {
        return $this->internationalPackagingHandlingCosts;
    }

    /**
     * Sets a new internationalPackagingHandlingCosts
     *
     * Fees a seller might assess for the shipping of the item (in addition to
     *  whatever the shipping service might charge).
     *  Any packaging/handling cost specified on input is added to each shipping
     *  service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and
     *  if packaging/handling cost is specified only for domestic shipping, that cost
     *  will be applied by eBay as the international packaging/handling cost. (To
     *  specify a international packaging/handling cost, you must always specify a
     *  domestic packaging/handling cost, even if it is 0.)
     *  For international calculated shipping only.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $internationalPackagingHandlingCosts
     * @return self
     */
    public function setInternationalPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType $internationalPackagingHandlingCosts)
    {
        $this->internationalPackagingHandlingCosts = $internationalPackagingHandlingCosts;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOriginatingPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OriginatingPostalCode", $value);
        }
        $value = $this->getMeasurementUnit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MeasurementUnit", $value);
        }
        $value = $this->getPackagingHandlingCosts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackagingHandlingCosts", $value);
        }
        $value = $this->getShippingIrregular();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingIrregular", $value);
        }
        $value = $this->getInternationalPackagingHandlingCosts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalPackagingHandlingCosts", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OriginatingPostalCode');
        if (null !== $value) {
            $this->setOriginatingPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MeasurementUnit');
        if (null !== $value) {
            $this->setMeasurementUnit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackagingHandlingCosts');
        if (null !== $value) {
            $this->setPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingIrregular');
        if (null !== $value) {
            $this->setShippingIrregular($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalPackagingHandlingCosts');
        if (null !== $value) {
            $this->setInternationalPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
