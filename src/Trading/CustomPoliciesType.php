<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CustomPoliciesType
 *
 * <span class="tablenote"><b>Note:</b> Support for extended producer responsibility regulations and custom policies will become active mid-December 2021. Additional resources such as the custom policies resource (for the <b>Account API</b>), the <b>getExtendedProducerResponsibilityPolicies</b> method (for the <b>Sell Metadata API</b>), and the <a href="https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311" target="_blank">Custom Policies</a> help page will also become active.</span>
 *  This type is used by the <strong>CustomPolicies</strong> container, which specifies custom policy IDs. A custom policy ID refers to the relevant policy created for compliance and other purposes.
 * XSD Type: CustomPoliciesType
 */
class CustomPoliciesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is used if the seller wants to apply a take-back policy to the listing. The seller will specify the identifier of the take-back policy in this field. The law in some countries may require sellers to take back a used product when the buyer buys a new product. Use this field to specify one take-back policy ID for the listing. To create and manage your takeback policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @var int $takeBackPolicyID
     */
    private $takeBackPolicyID = null;

    /**
     * This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field. To create and manage custom policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @var int[] $productCompliancePolicyID
     */
    private $productCompliancePolicyID = [

    ];

    /**
     * Gets as takeBackPolicyID
     *
     * This field is used if the seller wants to apply a take-back policy to the listing. The seller will specify the identifier of the take-back policy in this field. The law in some countries may require sellers to take back a used product when the buyer buys a new product. Use this field to specify one take-back policy ID for the listing. To create and manage your takeback policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @return int
     */
    public function getTakeBackPolicyID()
    {
        return $this->takeBackPolicyID;
    }

    /**
     * Sets a new takeBackPolicyID
     *
     * This field is used if the seller wants to apply a take-back policy to the listing. The seller will specify the identifier of the take-back policy in this field. The law in some countries may require sellers to take back a used product when the buyer buys a new product. Use this field to specify one take-back policy ID for the listing. To create and manage your takeback policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @param int $takeBackPolicyID
     * @return self
     */
    public function setTakeBackPolicyID($takeBackPolicyID)
    {
        $this->takeBackPolicyID = $takeBackPolicyID;
        return $this;
    }

    /**
     * Adds as productCompliancePolicyID
     *
     * This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field. To create and manage custom policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @return self
     * @param int $productCompliancePolicyID
     */
    public function addToProductCompliancePolicyID($productCompliancePolicyID)
    {
        $this->productCompliancePolicyID[] = $productCompliancePolicyID;
        return $this;
    }

    /**
     * isset productCompliancePolicyID
     *
     * This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field. To create and manage custom policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductCompliancePolicyID($index)
    {
        return isset($this->productCompliancePolicyID[$index]);
    }

    /**
     * unset productCompliancePolicyID
     *
     * This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field. To create and manage custom policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductCompliancePolicyID($index)
    {
        unset($this->productCompliancePolicyID[$index]);
    }

    /**
     * Gets as productCompliancePolicyID
     *
     * This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field. To create and manage custom policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @return int[]
     */
    public function getProductCompliancePolicyID()
    {
        return $this->productCompliancePolicyID;
    }

    /**
     * Sets a new productCompliancePolicyID
     *
     * This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field. To create and manage custom policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     *
     * @param int[] $productCompliancePolicyID
     * @return self
     */
    public function setProductCompliancePolicyID(array $productCompliancePolicyID)
    {
        $this->productCompliancePolicyID = $productCompliancePolicyID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTakeBackPolicyID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TakeBackPolicyID", $value);
        }
        $value = $this->getProductCompliancePolicyID();
        if (null !== $value && !empty($this->getProductCompliancePolicyID())) {
            $writer->write(array_map(function ($v) {
                return ["ProductCompliancePolicyID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TakeBackPolicyID');
        if (null !== $value) {
            $this->setTakeBackPolicyID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductCompliancePolicyID', true);
        if (null !== $value && !empty($value)) {
            $this->setProductCompliancePolicyID($value);
        }
    }
}
