<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingCostPaidByDetailsType
 *
 * <span class="tablenote"><b>Note:</b> This type defines the deprecated <b>ReturnPolicyDetails.ShippingCostPaidBy</b> container returned in <b>GeteBayDetails</b> To determine who is responsible for return shipping costs for a specific leaf category on a specific eBay marketplace, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method. Pass the target <b>marketplace_id</b> and the category ID in the filter query parameter, and then inspect the <b>returnPolicies.domestic.returnShippingCostPayers</b> and <b>returnPolicies.international.returnShippingCostPayers</b> fields in the response.
 *  </span>
 * XSD Type: ShippingCostPaidByDetailsType
 */
class ShippingCostPaidByDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The party who pays the shipping cost for a returned item.
     *  This value can be passed in the Add/Revise/Relist calls.
     *
     * @var string $shippingCostPaidByOption
     */
    private $shippingCostPaidByOption = null;

    /**
     * Display string that applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format (such as in a drop-down list). Not applicable as input to the Add/Revise/Relist calls. (Use <b>ShippingCostPaidBy</b> instead.)
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as shippingCostPaidByOption
     *
     * The party who pays the shipping cost for a returned item.
     *  This value can be passed in the Add/Revise/Relist calls.
     *
     * @return string
     */
    public function getShippingCostPaidByOption()
    {
        return $this->shippingCostPaidByOption;
    }

    /**
     * Sets a new shippingCostPaidByOption
     *
     * The party who pays the shipping cost for a returned item.
     *  This value can be passed in the Add/Revise/Relist calls.
     *
     * @param string $shippingCostPaidByOption
     * @return self
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption)
    {
        $this->shippingCostPaidByOption = $shippingCostPaidByOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format (such as in a drop-down list). Not applicable as input to the Add/Revise/Relist calls. (Use <b>ShippingCostPaidBy</b> instead.)
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
     * Display string that applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format (such as in a drop-down list). Not applicable as input to the Add/Revise/Relist calls. (Use <b>ShippingCostPaidBy</b> instead.)
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
        $value = $this->getShippingCostPaidByOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidByOption", $value);
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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ShippingCostPaidByDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCostPaidByOption');
        if (null !== $value) {
            $this->setShippingCostPaidByOption($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
