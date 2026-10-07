<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundDetailsType
 *
 * <span class="tablenote"><b>Note:</b> This type is used by the deprecated <b>ReturnPolicyDetails.Refund</b> container returned in <b>GeteBayDetails</b>. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To determine which refund options are supported for a specific leaf category on a specific eBay marketplace, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method. Pass the target <b>marketplace_id</b> and the category ID in the filter query parameter, and then inspect the <b>returnPolicies.domestic.refundMethods</b> and <b>returnPolicies.international.refundMethods</b> fields in the response for the supported domestic and international refund methods.</span>
 * XSD Type: RefundDetailsType
 */
class RefundDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates how the seller will compensate the buyer for a returned item. This value can be passed in the Add/Revise/Relist/VerifyAdd API calls.
     *  <br/><br/>
     *  Currently, on the US site (and many other sites), the seller must offer either a <b>MoneyBack</b> or a <b>MoneyBackOrExchange</b> refund option. Consider using the <b>MoneyBackOrExchange</b> option when you have the depth of inventory to support replacement of the original item. Otherwise, use the <b>MoneyBack</b> option if you have limited inventory.
     *
     * @var string $refundOption
     */
    private $refundOption = null;

    /**
     * Display string that applications can use to present <b>RefundOption</b> in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use <b>RefundOption</b> instead.)
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as refundOption
     *
     * Indicates how the seller will compensate the buyer for a returned item. This value can be passed in the Add/Revise/Relist/VerifyAdd API calls.
     *  <br/><br/>
     *  Currently, on the US site (and many other sites), the seller must offer either a <b>MoneyBack</b> or a <b>MoneyBackOrExchange</b> refund option. Consider using the <b>MoneyBackOrExchange</b> option when you have the depth of inventory to support replacement of the original item. Otherwise, use the <b>MoneyBack</b> option if you have limited inventory.
     *
     * @return string
     */
    public function getRefundOption()
    {
        return $this->refundOption;
    }

    /**
     * Sets a new refundOption
     *
     * Indicates how the seller will compensate the buyer for a returned item. This value can be passed in the Add/Revise/Relist/VerifyAdd API calls.
     *  <br/><br/>
     *  Currently, on the US site (and many other sites), the seller must offer either a <b>MoneyBack</b> or a <b>MoneyBackOrExchange</b> refund option. Consider using the <b>MoneyBackOrExchange</b> option when you have the depth of inventory to support replacement of the original item. Otherwise, use the <b>MoneyBack</b> option if you have limited inventory.
     *
     * @param string $refundOption
     * @return self
     */
    public function setRefundOption($refundOption)
    {
        $this->refundOption = $refundOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present <b>RefundOption</b> in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use <b>RefundOption</b> instead.)
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
     * Display string that applications can use to present <b>RefundOption</b> in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use <b>RefundOption</b> instead.)
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
        $value = $this->getRefundOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundOption", $value);
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

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\RefundDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundOption');
        if (null !== $value) {
            $this->setRefundOption($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
