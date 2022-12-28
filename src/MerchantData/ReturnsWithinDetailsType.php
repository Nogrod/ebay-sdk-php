<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnsWithinDetailsType
 *
 * Type defining the <b>ReturnPolicyDetails.ReturnsWithin</b> container that is returned in <b>GeteBayDetails</b>. This container contains the values that may be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field of Add/Revise/Relist API calls.
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what return durations that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsDurationValues</code> and/or <code>InternationalReturnsDurationValues</code> as <b>FeatureID</b> values to see the return durations available for domestic and international returns, respectively.
 *  </span>
 * XSD Type: ReturnsWithinDetailsType
 */
class ReturnsWithinDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Value indicates the number of days that a buyer has to return an item from the day they receive the item. This value can be passed in the Add/Revise/Relist family of API calls. Supported values can vary by eBay site.
     *
     * @var string $returnsWithinOption
     */
    private $returnsWithinOption = null;

    /**
     * Display string that applications can use to present ReturnsWithinOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsWithinOption instead.)
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as returnsWithinOption
     *
     * Value indicates the number of days that a buyer has to return an item from the day they receive the item. This value can be passed in the Add/Revise/Relist family of API calls. Supported values can vary by eBay site.
     *
     * @return string
     */
    public function getReturnsWithinOption()
    {
        return $this->returnsWithinOption;
    }

    /**
     * Sets a new returnsWithinOption
     *
     * Value indicates the number of days that a buyer has to return an item from the day they receive the item. This value can be passed in the Add/Revise/Relist family of API calls. Supported values can vary by eBay site.
     *
     * @param string $returnsWithinOption
     * @return self
     */
    public function setReturnsWithinOption($returnsWithinOption)
    {
        $this->returnsWithinOption = $returnsWithinOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present ReturnsWithinOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsWithinOption instead.)
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
     * Display string that applications can use to present ReturnsWithinOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsWithinOption instead.)
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsWithinOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsWithinOption');
        if (null !== $value) {
            $this->setReturnsWithinOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
