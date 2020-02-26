<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ShipPackageDetailsType
 *
 * Details pertinent to one or more items for which
 *  calculated shipping (or flat rate shipping using shipping rate tables with
 *  weight surcharges) has been offered by the seller, such as package
 *  dimension and weight and packaging/handling costs.
 *  <br/><br/>
 *  Also returned with the data for an item's transaction.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <strong>ShippingPackageDetails</strong> container should now be used instead of the <strong>CalculatedShippingRate</strong> container to specify values for the <strong>MeasurementUnit</strong>, <strong>PackageDepth</strong>, <strong>PackageWidth</strong>, <strong>PackageLength</strong>, <strong>ShippingIrregular</strong>, <strong>ShippingPackage</strong>, <strong>WeightMajor</strong>, and/or <strong>WeightMinor</strong> fields. The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields.
 *  </span>
 * XSD Type: ShipPackageDetailsType
 */
class ShipPackageDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Specifies the unit type of the weight and dimensions of a
     *  shipping package.
     *  If <b>MeasurementUnit</b> is used, it overrides the system specified by measurementSystem.
     *  If <b>MeasurementUnit</b> and measurementSystem are not specified, the following defaults
     *  will be used:
     *  <br><br>
     *  English: US<br>
     *  Metric: CA, CAFR, AU
     *  <br><br>
     *  CA and CAFR supports both English and Metric, while other sites
     *  only support the site's default.
     *  <br><br>
     *  Use <b>MeasurementUnit</b> with weight and package dimensions. For example,
     *  to represent a 5 lbs 2 oz package:
     *  <br><br>
     *  <code>
     *  &lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt;
     *  <br>
     *  &lt;WeightMajor&gt;5&lt;/WeightMajor&gt;
     *  <br>
     *  &lt;WeightMinor&gt;2&lt;/WeightMinor&gt;
     *  </code>
     *
     * @var string $measurementUnit
     */
    private $measurementUnit = null;

    /**
     * Depth of the package, in whole number of inches, needed to ship the item.
     *  This is validated against the selected shipping service.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *  <br><br>
     *  <b>Developer impact:</b> UPS requires dimensions for any Ground packages that are 3
     *  cubic feet or larger and for all air packages, if they are to provide correct
     *  shipping cost. If package dimensions are not included for an item listed with
     *  calculated shipping, the shipping cost returned will be an estimate based on
     *  standard dimensions for the defined package type. eBay enforces a dimensions
     *  requirement on listings so that buyers receive accurate calculated shipping
     *  costs.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $packageDepth
     */
    private $packageDepth = null;

    /**
     * Length of the package, in whole number of inches, needed to ship the item.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $packageLength
     */
    private $packageLength = null;

    /**
     * Width of the package, in whole number of inches, needed to ship the item.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $packageWidth
     */
    private $packageWidth = null;

    /**
     * Whether a package is irregular and therefore cannot go
     *  through the stamping machine at the shipping service office and
     *  thus requires special or fragile handling. For calculated
     *  shipping only.
     *
     * @var bool $shippingIrregular
     */
    private $shippingIrregular = null;

    /**
     * The nature of the package used to ship the item(s).
     *  Required for calculated shipping only.
     *
     * @var string $shippingPackage
     */
    private $shippingPackage = null;

    /**
     * <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a
     *  shipping package. <b>WeightMajor</b> is used to specify the weight of the package in pounds (in US) or kilograms (all countries that use metric system). Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>.
     *
     *  If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed 14 oz or 324 gr, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;324&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;0&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be specified in an Add/Revise/Relist/Verify call, even if either's value is '0'.
     *  <br><br>
     *  The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges.
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $weightMajor
     */
    private $weightMajor = null;

    /**
     * <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a
     *  shipping package. <b>WeightMinor</b> is used to specify the weight of the package in ounces (in US) or grams (all countries that use metric system). Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>.
     *
     *  If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed 14 oz or 324 gr, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;324&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;0&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be specified in an Add/Revise/Relist/Verify call, even if either's value is '0'.
     *  <br><br>
     *  The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges.
     *  <br/><br/>
     *
     * @var \Nogrod\eBaySDK\Trading\MeasureType $weightMinor
     */
    private $weightMinor = null;

    /**
     * Gets as measurementUnit
     *
     * Specifies the unit type of the weight and dimensions of a
     *  shipping package.
     *  If <b>MeasurementUnit</b> is used, it overrides the system specified by measurementSystem.
     *  If <b>MeasurementUnit</b> and measurementSystem are not specified, the following defaults
     *  will be used:
     *  <br><br>
     *  English: US<br>
     *  Metric: CA, CAFR, AU
     *  <br><br>
     *  CA and CAFR supports both English and Metric, while other sites
     *  only support the site's default.
     *  <br><br>
     *  Use <b>MeasurementUnit</b> with weight and package dimensions. For example,
     *  to represent a 5 lbs 2 oz package:
     *  <br><br>
     *  <code>
     *  &lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt;
     *  <br>
     *  &lt;WeightMajor&gt;5&lt;/WeightMajor&gt;
     *  <br>
     *  &lt;WeightMinor&gt;2&lt;/WeightMinor&gt;
     *  </code>
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
     * Specifies the unit type of the weight and dimensions of a
     *  shipping package.
     *  If <b>MeasurementUnit</b> is used, it overrides the system specified by measurementSystem.
     *  If <b>MeasurementUnit</b> and measurementSystem are not specified, the following defaults
     *  will be used:
     *  <br><br>
     *  English: US<br>
     *  Metric: CA, CAFR, AU
     *  <br><br>
     *  CA and CAFR supports both English and Metric, while other sites
     *  only support the site's default.
     *  <br><br>
     *  Use <b>MeasurementUnit</b> with weight and package dimensions. For example,
     *  to represent a 5 lbs 2 oz package:
     *  <br><br>
     *  <code>
     *  &lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt;
     *  <br>
     *  &lt;WeightMajor&gt;5&lt;/WeightMajor&gt;
     *  <br>
     *  &lt;WeightMinor&gt;2&lt;/WeightMinor&gt;
     *  </code>
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
     * Gets as packageDepth
     *
     * Depth of the package, in whole number of inches, needed to ship the item.
     *  This is validated against the selected shipping service.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *  <br><br>
     *  <b>Developer impact:</b> UPS requires dimensions for any Ground packages that are 3
     *  cubic feet or larger and for all air packages, if they are to provide correct
     *  shipping cost. If package dimensions are not included for an item listed with
     *  calculated shipping, the shipping cost returned will be an estimate based on
     *  standard dimensions for the defined package type. eBay enforces a dimensions
     *  requirement on listings so that buyers receive accurate calculated shipping
     *  costs.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getPackageDepth()
    {
        return $this->packageDepth;
    }

    /**
     * Sets a new packageDepth
     *
     * Depth of the package, in whole number of inches, needed to ship the item.
     *  This is validated against the selected shipping service.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *  <br><br>
     *  <b>Developer impact:</b> UPS requires dimensions for any Ground packages that are 3
     *  cubic feet or larger and for all air packages, if they are to provide correct
     *  shipping cost. If package dimensions are not included for an item listed with
     *  calculated shipping, the shipping cost returned will be an estimate based on
     *  standard dimensions for the defined package type. eBay enforces a dimensions
     *  requirement on listings so that buyers receive accurate calculated shipping
     *  costs.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $packageDepth
     * @return self
     */
    public function setPackageDepth(\Nogrod\eBaySDK\Trading\MeasureType $packageDepth)
    {
        $this->packageDepth = $packageDepth;
        return $this;
    }

    /**
     * Gets as packageLength
     *
     * Length of the package, in whole number of inches, needed to ship the item.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getPackageLength()
    {
        return $this->packageLength;
    }

    /**
     * Sets a new packageLength
     *
     * Length of the package, in whole number of inches, needed to ship the item.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $packageLength
     * @return self
     */
    public function setPackageLength(\Nogrod\eBaySDK\Trading\MeasureType $packageLength)
    {
        $this->packageLength = $packageLength;
        return $this;
    }

    /**
     * Gets as packageWidth
     *
     * Width of the package, in whole number of inches, needed to ship the item.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getPackageWidth()
    {
        return $this->packageWidth;
    }

    /**
     * Sets a new packageWidth
     *
     * Width of the package, in whole number of inches, needed to ship the item.
     *  Upon mismatch, a message is returned, such as, "Package
     *  dimensions exceeds maximum allowable limit for
     *  service XXXXX," where XXXXX is the name of the shipping service.
     *  For calculated shipping only. Only returned if the seller
     *  specified the value for the item. (In many cases, the seller
     *  only specifies the weight fields.)
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $packageWidth
     * @return self
     */
    public function setPackageWidth(\Nogrod\eBaySDK\Trading\MeasureType $packageWidth)
    {
        $this->packageWidth = $packageWidth;
        return $this;
    }

    /**
     * Gets as shippingIrregular
     *
     * Whether a package is irregular and therefore cannot go
     *  through the stamping machine at the shipping service office and
     *  thus requires special or fragile handling. For calculated
     *  shipping only.
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
     * Whether a package is irregular and therefore cannot go
     *  through the stamping machine at the shipping service office and
     *  thus requires special or fragile handling. For calculated
     *  shipping only.
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
     * Gets as shippingPackage
     *
     * The nature of the package used to ship the item(s).
     *  Required for calculated shipping only.
     *
     * @return string
     */
    public function getShippingPackage()
    {
        return $this->shippingPackage;
    }

    /**
     * Sets a new shippingPackage
     *
     * The nature of the package used to ship the item(s).
     *  Required for calculated shipping only.
     *
     * @param string $shippingPackage
     * @return self
     */
    public function setShippingPackage($shippingPackage)
    {
        $this->shippingPackage = $shippingPackage;
        return $this;
    }

    /**
     * Gets as weightMajor
     *
     * <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a
     *  shipping package. <b>WeightMajor</b> is used to specify the weight of the package in pounds (in US) or kilograms (all countries that use metric system). Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>.
     *
     *  If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed 14 oz or 324 gr, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;324&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;0&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be specified in an Add/Revise/Relist/Verify call, even if either's value is '0'.
     *  <br><br>
     *  The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges.
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getWeightMajor()
    {
        return $this->weightMajor;
    }

    /**
     * Sets a new weightMajor
     *
     * <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a
     *  shipping package. <b>WeightMajor</b> is used to specify the weight of the package in pounds (in US) or kilograms (all countries that use metric system). Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>.
     *
     *  If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed 14 oz or 324 gr, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;324&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;0&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be specified in an Add/Revise/Relist/Verify call, even if either's value is '0'.
     *  <br><br>
     *  The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges.
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $weightMajor
     * @return self
     */
    public function setWeightMajor(\Nogrod\eBaySDK\Trading\MeasureType $weightMajor)
    {
        $this->weightMajor = $weightMajor;
        return $this;
    }

    /**
     * Gets as weightMinor
     *
     * <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a
     *  shipping package. <b>WeightMinor</b> is used to specify the weight of the package in ounces (in US) or grams (all countries that use metric system). Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>.
     *
     *  If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed 14 oz or 324 gr, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;324&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;0&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be specified in an Add/Revise/Relist/Verify call, even if either's value is '0'.
     *  <br><br>
     *  The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges.
     *  <br/><br/>
     *
     * @return \Nogrod\eBaySDK\Trading\MeasureType
     */
    public function getWeightMinor()
    {
        return $this->weightMinor;
    }

    /**
     * Sets a new weightMinor
     *
     * <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a
     *  shipping package. <b>WeightMinor</b> is used to specify the weight of the package in ounces (in US) or grams (all countries that use metric system). Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>.
     *
     *  If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed 14 oz or 324 gr, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;324&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight:
     *  <br/><br/>
     *  <code>
     *  &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="oz"&gt;0&lt;/WeightMinor&gt;<br/>
     *  &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/>
     *  &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt;
     *  </code>
     *  <br/><br/>
     *  In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be specified in an Add/Revise/Relist/Verify call, even if either's value is '0'.
     *  <br><br>
     *  The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges.
     *  <br/><br/>
     *
     * @param \Nogrod\eBaySDK\Trading\MeasureType $weightMinor
     * @return self
     */
    public function setWeightMinor(\Nogrod\eBaySDK\Trading\MeasureType $weightMinor)
    {
        $this->weightMinor = $weightMinor;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMeasurementUnit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MeasurementUnit", $value);
        }
        $value = $this->getPackageDepth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackageDepth", $value);
        }
        $value = $this->getPackageLength();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackageLength", $value);
        }
        $value = $this->getPackageWidth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackageWidth", $value);
        }
        $value = $this->getShippingIrregular();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingIrregular", $value);
        }
        $value = $this->getShippingPackage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingPackage", $value);
        }
        $value = $this->getWeightMajor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WeightMajor", $value);
        }
        $value = $this->getWeightMinor();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WeightMinor", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MeasurementUnit');
        if (null !== $value) {
            $this->setMeasurementUnit($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageDepth');
        if (null !== $value) {
            $this->setPackageDepth(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageLength');
        if (null !== $value) {
            $this->setPackageLength(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackageWidth');
        if (null !== $value) {
            $this->setPackageWidth(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingIrregular');
        if (null !== $value) {
            $this->setShippingIrregular($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingPackage');
        if (null !== $value) {
            $this->setShippingPackage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightMajor');
        if (null !== $value) {
            $this->setWeightMajor(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WeightMinor');
        if (null !== $value) {
            $this->setWeightMinor(\Nogrod\eBaySDK\Trading\MeasureType::fromKeyValue($value));
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
