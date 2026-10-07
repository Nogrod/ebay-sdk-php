<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnsWithinDetailsType
 *
 * <span class="tablenote"><b>Note:</b> This type defines the deprecated <b>ReturnPolicyDetails.ReturnsWithin</b> container that is returned in <b>GeteBayDetails</b>. To determine which return periods are supported for a specific leaf category on a specific eBay marketplace, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method. Pass the target <b>marketplace_id</b> and the category ID in the filter query parameter, and then inspect the <b>returnPolicies.domestic.returnPeriods</b> and <b>returnPolicies.international.returnPeriods</b> fields in the response.
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->getReturnsWithinOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsWithinOption", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ReturnsWithinDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsWithinOption');
        if (null !== $value) {
            $this->setReturnsWithinOption($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
