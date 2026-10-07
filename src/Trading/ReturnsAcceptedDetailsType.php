<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnsAcceptedDetailsType
 *
 * <br><br>
 *  <span class="tablenote"><b>Note:</b> This type is used by the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container returned in <b>GeteBayDetails</b>. This container contains the values that may be used in the <b>ReturnPolicy.ReturnsAcceptedOption</b> field of Add/Revise/Relist API calls. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method. Pass the target <b>marketplace_id</b> and the category ID in the filter query parameter, and then inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields in the response.
 * XSD Type: ReturnsAcceptedDetailsType
 */
class ReturnsAcceptedDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Whether the seller allows the buyer to return the item.
     *  This value can be passed in the AddItem family of calls.
     *
     * @var string $returnsAcceptedOption
     */
    private $returnsAcceptedOption = null;

    /**
     * Display string that applications can use to present ReturnsAcceptedOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as returnsAcceptedOption
     *
     * Whether the seller allows the buyer to return the item.
     *  This value can be passed in the AddItem family of calls.
     *
     * @return string
     */
    public function getReturnsAcceptedOption()
    {
        return $this->returnsAcceptedOption;
    }

    /**
     * Sets a new returnsAcceptedOption
     *
     * Whether the seller allows the buyer to return the item.
     *  This value can be passed in the AddItem family of calls.
     *
     * @param string $returnsAcceptedOption
     * @return self
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption)
    {
        $this->returnsAcceptedOption = $returnsAcceptedOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present ReturnsAcceptedOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
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
     * Display string that applications can use to present ReturnsAcceptedOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
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
        $value = $this->getReturnsAcceptedOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnsAcceptedOption", $value);
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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnsAcceptedOption');
        if (null !== $value) {
            $this->setReturnsAcceptedOption($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
