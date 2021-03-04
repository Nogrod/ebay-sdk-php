<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundDetailsType
 *
 * Type defining the <b>ReturnPolicyDetails.Refund</b> container that is returned in <b>GeteBayDetails</b>. All of the values (along with descriptions for each value) that can be used as a Refund Option when listing an item is returned under the <b>ReturnPolicyDetails.Refund</b> container.
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To discover what refund options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticRefundMethodValues</code> and/or <code>InternationalRefundMethodValues</code> as <b>FeatureID</b> values to see the refund options available for domestic and international returns, respectively.
 *  </span>
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefundOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RefundOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RefundOption');
        if (null !== $value) {
            $this->setRefundOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
