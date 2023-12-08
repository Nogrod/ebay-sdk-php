<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CustomPoliciesType
 *
 * This type is used by the <strong>CustomPolicies</strong> container, which specifies custom policy IDs. A custom policy ID refers to the relevant policy created for product compliance and other purposes. For more information, see the <b>Custom Policies</b> page for your site (for example, <a href="https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311" target="_blank">https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311</a>). To create and manage custom policies, use the <a href="https://developer.ebay.com/api-docs/sell/account/resources/methods#h2-custom_policy" target="_blank">custom_policy</a> resource of the <b>Account API</b>.
 * XSD Type: CustomPoliciesType
 */
class CustomPoliciesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is used if the seller wants to apply a <i>global</i> take-back policy to the listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />Use this field to specify one <i>global</i> take-back policy ID for the listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalTakeBackPolicies</b> to apply them to a listing.
     *  </span>
     *
     * @var int $takeBackPolicyID
     */
    private $takeBackPolicyID = null;

    /**
     * The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />
     *  Each listing may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  <span class="tablenote"><strong>Note: </strong>
     *  Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <b>TakeBackPolicyID</b>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\CountryPoliciesType[] $regionalTakeBackPolicies
     */
    private $regionalTakeBackPolicies = null;

    /**
     * This field is used if the seller wants to apply one or more seller-created <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field.<br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalProductCompliancePolicies</b> to apply them to a listing.
     *  </span>
     *
     * @var int[] $productCompliancePolicyID
     */
    private $productCompliancePolicyID = [

    ];

    /**
     * The set of compliance policies for indicating the seller-created country-specific product compliance policies that that will be used for a listing.<br /><br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br />
     *  Each listing may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <b>ProductCompliancePolicyID</b>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\CountryPoliciesType[] $regionalProductCompliancePolicies
     */
    private $regionalProductCompliancePolicies = null;

    /**
     * Gets as takeBackPolicyID
     *
     * This field is used if the seller wants to apply a <i>global</i> take-back policy to the listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />Use this field to specify one <i>global</i> take-back policy ID for the listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalTakeBackPolicies</b> to apply them to a listing.
     *  </span>
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
     * This field is used if the seller wants to apply a <i>global</i> take-back policy to the listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />Use this field to specify one <i>global</i> take-back policy ID for the listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalTakeBackPolicies</b> to apply them to a listing.
     *  </span>
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
     * Adds as countryPolicies
     *
     * The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />
     *  Each listing may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  <span class="tablenote"><strong>Note: </strong>
     *  Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <b>TakeBackPolicyID</b>.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CountryPoliciesType $countryPolicies
     */
    public function addToRegionalTakeBackPolicies(\Nogrod\eBaySDK\Trading\CountryPoliciesType $countryPolicies)
    {
        $this->regionalTakeBackPolicies[] = $countryPolicies;
        return $this;
    }

    /**
     * isset regionalTakeBackPolicies
     *
     * The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />
     *  Each listing may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  <span class="tablenote"><strong>Note: </strong>
     *  Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <b>TakeBackPolicyID</b>.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegionalTakeBackPolicies($index)
    {
        return isset($this->regionalTakeBackPolicies[$index]);
    }

    /**
     * unset regionalTakeBackPolicies
     *
     * The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />
     *  Each listing may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  <span class="tablenote"><strong>Note: </strong>
     *  Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <b>TakeBackPolicyID</b>.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegionalTakeBackPolicies($index)
    {
        unset($this->regionalTakeBackPolicies[$index]);
    }

    /**
     * Gets as regionalTakeBackPolicies
     *
     * The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />
     *  Each listing may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  <span class="tablenote"><strong>Note: </strong>
     *  Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <b>TakeBackPolicyID</b>.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\CountryPoliciesType[]
     */
    public function getRegionalTakeBackPolicies()
    {
        return $this->regionalTakeBackPolicies;
    }

    /**
     * Sets a new regionalTakeBackPolicies
     *
     * The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />
     *  Each listing may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  <span class="tablenote"><strong>Note: </strong>
     *  Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <b>TakeBackPolicyID</b>.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\CountryPoliciesType[] $regionalTakeBackPolicies
     * @return self
     */
    public function setRegionalTakeBackPolicies(array $regionalTakeBackPolicies)
    {
        $this->regionalTakeBackPolicies = $regionalTakeBackPolicies;
        return $this;
    }

    /**
     * Adds as productCompliancePolicyID
     *
     * This field is used if the seller wants to apply one or more seller-created <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field.<br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalProductCompliancePolicies</b> to apply them to a listing.
     *  </span>
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
     * This field is used if the seller wants to apply one or more seller-created <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field.<br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalProductCompliancePolicies</b> to apply them to a listing.
     *  </span>
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
     * This field is used if the seller wants to apply one or more seller-created <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field.<br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalProductCompliancePolicies</b> to apply them to a listing.
     *  </span>
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
     * This field is used if the seller wants to apply one or more seller-created <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field.<br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalProductCompliancePolicies</b> to apply them to a listing.
     *  </span>
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
     * This field is used if the seller wants to apply one or more seller-created <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field.<br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  For countries that support country-specific policies, use <b>RegionalProductCompliancePolicies</b> to apply them to a listing.
     *  </span>
     *
     * @param int[] $productCompliancePolicyID
     * @return self
     */
    public function setProductCompliancePolicyID(array $productCompliancePolicyID)
    {
        $this->productCompliancePolicyID = $productCompliancePolicyID;
        return $this;
    }

    /**
     * Adds as countryPolicies
     *
     * The set of compliance policies for indicating the seller-created country-specific product compliance policies that that will be used for a listing.<br /><br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br />
     *  Each listing may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <b>ProductCompliancePolicyID</b>.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CountryPoliciesType $countryPolicies
     */
    public function addToRegionalProductCompliancePolicies(\Nogrod\eBaySDK\Trading\CountryPoliciesType $countryPolicies)
    {
        $this->regionalProductCompliancePolicies[] = $countryPolicies;
        return $this;
    }

    /**
     * isset regionalProductCompliancePolicies
     *
     * The set of compliance policies for indicating the seller-created country-specific product compliance policies that that will be used for a listing.<br /><br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br />
     *  Each listing may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <b>ProductCompliancePolicyID</b>.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegionalProductCompliancePolicies($index)
    {
        return isset($this->regionalProductCompliancePolicies[$index]);
    }

    /**
     * unset regionalProductCompliancePolicies
     *
     * The set of compliance policies for indicating the seller-created country-specific product compliance policies that that will be used for a listing.<br /><br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br />
     *  Each listing may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <b>ProductCompliancePolicyID</b>.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegionalProductCompliancePolicies($index)
    {
        unset($this->regionalProductCompliancePolicies[$index]);
    }

    /**
     * Gets as regionalProductCompliancePolicies
     *
     * The set of compliance policies for indicating the seller-created country-specific product compliance policies that that will be used for a listing.<br /><br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br />
     *  Each listing may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <b>ProductCompliancePolicyID</b>.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\CountryPoliciesType[]
     */
    public function getRegionalProductCompliancePolicies()
    {
        return $this->regionalProductCompliancePolicies;
    }

    /**
     * Sets a new regionalProductCompliancePolicies
     *
     * The set of compliance policies for indicating the seller-created country-specific product compliance policies that that will be used for a listing.<br /><br />
     *  Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br />
     *  Each listing may include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     *  For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing.
     *  <span class="tablenote"><strong>Note: </strong>
     *  Product compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <b>ProductCompliancePolicyID</b>.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\CountryPoliciesType[] $regionalProductCompliancePolicies
     * @return self
     */
    public function setRegionalProductCompliancePolicies(array $regionalProductCompliancePolicies)
    {
        $this->regionalProductCompliancePolicies = $regionalProductCompliancePolicies;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTakeBackPolicyID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TakeBackPolicyID", $value);
        }
        $value = $this->getRegionalTakeBackPolicies();
        if (null !== $value && !empty($this->getRegionalTakeBackPolicies())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegionalTakeBackPolicies", array_map(function ($v) {return ["CountryPolicies" => $v];}, $value));
        }
        $value = $this->getProductCompliancePolicyID();
        if (null !== $value && !empty($this->getProductCompliancePolicyID())) {
            $writer->write(array_map(function ($v) {return ["ProductCompliancePolicyID" => $v];}, $value));
        }
        $value = $this->getRegionalProductCompliancePolicies();
        if (null !== $value && !empty($this->getRegionalProductCompliancePolicies())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegionalProductCompliancePolicies", array_map(function ($v) {return ["CountryPolicies" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegionalTakeBackPolicies', true);
        if (null !== $value && !empty($value)) {
            $this->setRegionalTakeBackPolicies(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\CountryPoliciesType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductCompliancePolicyID', true);
        if (null !== $value && !empty($value)) {
            $this->setProductCompliancePolicyID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegionalProductCompliancePolicies', true);
        if (null !== $value && !empty($value)) {
            $this->setRegionalProductCompliancePolicies(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\CountryPoliciesType::fromKeyValue($v);}, $value));
        }
    }
}
