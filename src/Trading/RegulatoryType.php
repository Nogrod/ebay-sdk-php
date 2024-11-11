<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RegulatoryType
 *
 * Type defining the regulatory containers that are used at the listing level to provide Energy Efficiency Label information, hazardous material related information, product safety related information, manufacturer and responsible person information, and the repair score.
 * XSD Type: RegulatoryType
 */
class RegulatoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container provides information about the energy efficiency for certain durable goods.<br />
     *  <span class="tablenote"><b>Note: </b> As a part of Digital Services Act (DSA) requirements, all sellers who list products in Germany (DE) must provide Energy Efficiency Label information and Product Information Sheets for listings for certain durable goods.</span>
     *  <span class="tablenote"><b>Note: </b> Energy efficiency information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require energy efficiency-related fields. </span>
     *
     * @var \Nogrod\eBaySDK\Trading\EnergyEfficiencyType $energyEfficiencyLabel
     */
    private $energyEfficiencyLabel = null;

    /**
     * <span class="tablenote"><b>Note: </b> Economic Operator and its associated fields have been deprecated for the Add/Revise/Relist/Verify and GetItem family of calls and will be decommissioned on October 21, 2024. It has been replaced by the <b>Manufacturer</b> and <b>ResponsiblePersons</b> containers. Economic Operator related fields should no longer be used for the Add/Revise/Relist and VerifyItem family of calls. As it is currently still supported, Economic Operator-related fields will be returned if applicable for the GetItem call.
     *  </span>
     *  This container provides Economic Operator (EO) information about the manufacturer and/or supplier of the item. The EO is a corporate entity that is related to, has some responsibility for, the product being listed for sale. For additional information, see <a href = "https://www.ebay.com/help/selling/selling/CE-mark-EU?id=5225#operator" target="_blank">What is an economic operator?</a>.
     *
     * @var \Nogrod\eBaySDK\Trading\EconomicOperatorType $economicOperator
     */
    private $economicOperator = null;

    /**
     * This container is used by the seller to provide hazardous material information for the listing. Three elements are required to complete the Hazmat section of a listing: <b>Pictograms</b>, <b>SignalWord</b>, and <b>Statements</b>. The fourth element, <b>Component</b>, is optional. For more information, see <a href=" /api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html" target="_blank">Specifying hazardous material related information</a>.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Hazmat information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require Hazmat-related fields. </span>
     *
     * @var \Nogrod\eBaySDK\Trading\HazmatType $hazmat
     */
    private $hazmat = null;

    /**
     * This container is used to provide product safety information for the listing. Two elements are required to complete the product safety section for a listing: <b>Pictograms</b> and <b>Statements</b>. The <b>Component</b> element is optional.
     *  <br /> <br />
     *  <b>For Revise and Relist calls:</b> To delete all product safety information when you revise or relist, specify <b>Item.Regulatory.ProductSafety</b> in <b>DeletedField</b>, and don't pass <b>ProductSafety</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Product safety information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require product safety-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\ProductSafetyType $productSafety
     */
    private $productSafety = null;

    /**
     * This field represents the repair index for the listing.<br><br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product). This field is a floating point value between 0 and 10 but may only have one digit beyond the decimal point, for example: <code>7.9</code><br><span class="tablenote"><b>Note: </b><code>0</code> should not be used as a default value, as it implies that the product is not repairable.</span>
     *
     * @var float $repairScore
     */
    private $repairScore = null;

    /**
     * This container provides information about the manufacturer of the item.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all manufacturer information when you revise or relist, specify <b>Item.Regulatory.Manufacturer</b> in <b>DeletedField</b>, and don't pass <b>Manufacturer</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Manufacturer information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require manufacturer-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\ManufacturerType $manufacturer
     */
    private $manufacturer = null;

    /**
     * This container provides information about the EU-based Responsible Persons or entities associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all Responsible Persons information when you revise or relist, specify <b>Item.Regulatory.ResponsiblePersons</b> in <b>DeletedField</b>, and don't pass <b>ResponsiblePersons</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\ResponsiblePersonType[] $responsiblePersons
     */
    private $responsiblePersons = null;

    /**
     * This container provides a collection of regulatory documents associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> For information on removing one or more files using a Revise/Relist call, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a>
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\DocumentType[] $documents
     */
    private $documents = null;

    /**
     * Gets as energyEfficiencyLabel
     *
     * This container provides information about the energy efficiency for certain durable goods.<br />
     *  <span class="tablenote"><b>Note: </b> As a part of Digital Services Act (DSA) requirements, all sellers who list products in Germany (DE) must provide Energy Efficiency Label information and Product Information Sheets for listings for certain durable goods.</span>
     *  <span class="tablenote"><b>Note: </b> Energy efficiency information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require energy efficiency-related fields. </span>
     *
     * @return \Nogrod\eBaySDK\Trading\EnergyEfficiencyType
     */
    public function getEnergyEfficiencyLabel()
    {
        return $this->energyEfficiencyLabel;
    }

    /**
     * Sets a new energyEfficiencyLabel
     *
     * This container provides information about the energy efficiency for certain durable goods.<br />
     *  <span class="tablenote"><b>Note: </b> As a part of Digital Services Act (DSA) requirements, all sellers who list products in Germany (DE) must provide Energy Efficiency Label information and Product Information Sheets for listings for certain durable goods.</span>
     *  <span class="tablenote"><b>Note: </b> Energy efficiency information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require energy efficiency-related fields. </span>
     *
     * @param \Nogrod\eBaySDK\Trading\EnergyEfficiencyType $energyEfficiencyLabel
     * @return self
     */
    public function setEnergyEfficiencyLabel(\Nogrod\eBaySDK\Trading\EnergyEfficiencyType $energyEfficiencyLabel)
    {
        $this->energyEfficiencyLabel = $energyEfficiencyLabel;
        return $this;
    }

    /**
     * Gets as economicOperator
     *
     * <span class="tablenote"><b>Note: </b> Economic Operator and its associated fields have been deprecated for the Add/Revise/Relist/Verify and GetItem family of calls and will be decommissioned on October 21, 2024. It has been replaced by the <b>Manufacturer</b> and <b>ResponsiblePersons</b> containers. Economic Operator related fields should no longer be used for the Add/Revise/Relist and VerifyItem family of calls. As it is currently still supported, Economic Operator-related fields will be returned if applicable for the GetItem call.
     *  </span>
     *  This container provides Economic Operator (EO) information about the manufacturer and/or supplier of the item. The EO is a corporate entity that is related to, has some responsibility for, the product being listed for sale. For additional information, see <a href = "https://www.ebay.com/help/selling/selling/CE-mark-EU?id=5225#operator" target="_blank">What is an economic operator?</a>.
     *
     * @return \Nogrod\eBaySDK\Trading\EconomicOperatorType
     */
    public function getEconomicOperator()
    {
        return $this->economicOperator;
    }

    /**
     * Sets a new economicOperator
     *
     * <span class="tablenote"><b>Note: </b> Economic Operator and its associated fields have been deprecated for the Add/Revise/Relist/Verify and GetItem family of calls and will be decommissioned on October 21, 2024. It has been replaced by the <b>Manufacturer</b> and <b>ResponsiblePersons</b> containers. Economic Operator related fields should no longer be used for the Add/Revise/Relist and VerifyItem family of calls. As it is currently still supported, Economic Operator-related fields will be returned if applicable for the GetItem call.
     *  </span>
     *  This container provides Economic Operator (EO) information about the manufacturer and/or supplier of the item. The EO is a corporate entity that is related to, has some responsibility for, the product being listed for sale. For additional information, see <a href = "https://www.ebay.com/help/selling/selling/CE-mark-EU?id=5225#operator" target="_blank">What is an economic operator?</a>.
     *
     * @param \Nogrod\eBaySDK\Trading\EconomicOperatorType $economicOperator
     * @return self
     */
    public function setEconomicOperator(\Nogrod\eBaySDK\Trading\EconomicOperatorType $economicOperator)
    {
        $this->economicOperator = $economicOperator;
        return $this;
    }

    /**
     * Gets as hazmat
     *
     * This container is used by the seller to provide hazardous material information for the listing. Three elements are required to complete the Hazmat section of a listing: <b>Pictograms</b>, <b>SignalWord</b>, and <b>Statements</b>. The fourth element, <b>Component</b>, is optional. For more information, see <a href=" /api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html" target="_blank">Specifying hazardous material related information</a>.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Hazmat information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require Hazmat-related fields. </span>
     *
     * @return \Nogrod\eBaySDK\Trading\HazmatType
     */
    public function getHazmat()
    {
        return $this->hazmat;
    }

    /**
     * Sets a new hazmat
     *
     * This container is used by the seller to provide hazardous material information for the listing. Three elements are required to complete the Hazmat section of a listing: <b>Pictograms</b>, <b>SignalWord</b>, and <b>Statements</b>. The fourth element, <b>Component</b>, is optional. For more information, see <a href=" /api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html" target="_blank">Specifying hazardous material related information</a>.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Hazmat information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require Hazmat-related fields. </span>
     *
     * @param \Nogrod\eBaySDK\Trading\HazmatType $hazmat
     * @return self
     */
    public function setHazmat(\Nogrod\eBaySDK\Trading\HazmatType $hazmat)
    {
        $this->hazmat = $hazmat;
        return $this;
    }

    /**
     * Gets as productSafety
     *
     * This container is used to provide product safety information for the listing. Two elements are required to complete the product safety section for a listing: <b>Pictograms</b> and <b>Statements</b>. The <b>Component</b> element is optional.
     *  <br /> <br />
     *  <b>For Revise and Relist calls:</b> To delete all product safety information when you revise or relist, specify <b>Item.Regulatory.ProductSafety</b> in <b>DeletedField</b>, and don't pass <b>ProductSafety</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Product safety information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require product safety-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @return \Nogrod\eBaySDK\Trading\ProductSafetyType
     */
    public function getProductSafety()
    {
        return $this->productSafety;
    }

    /**
     * Sets a new productSafety
     *
     * This container is used to provide product safety information for the listing. Two elements are required to complete the product safety section for a listing: <b>Pictograms</b> and <b>Statements</b>. The <b>Component</b> element is optional.
     *  <br /> <br />
     *  <b>For Revise and Relist calls:</b> To delete all product safety information when you revise or relist, specify <b>Item.Regulatory.ProductSafety</b> in <b>DeletedField</b>, and don't pass <b>ProductSafety</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Product safety information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require product safety-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param \Nogrod\eBaySDK\Trading\ProductSafetyType $productSafety
     * @return self
     */
    public function setProductSafety(\Nogrod\eBaySDK\Trading\ProductSafetyType $productSafety)
    {
        $this->productSafety = $productSafety;
        return $this;
    }

    /**
     * Gets as repairScore
     *
     * This field represents the repair index for the listing.<br><br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product). This field is a floating point value between 0 and 10 but may only have one digit beyond the decimal point, for example: <code>7.9</code><br><span class="tablenote"><b>Note: </b><code>0</code> should not be used as a default value, as it implies that the product is not repairable.</span>
     *
     * @return float
     */
    public function getRepairScore()
    {
        return $this->repairScore;
    }

    /**
     * Sets a new repairScore
     *
     * This field represents the repair index for the listing.<br><br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product). This field is a floating point value between 0 and 10 but may only have one digit beyond the decimal point, for example: <code>7.9</code><br><span class="tablenote"><b>Note: </b><code>0</code> should not be used as a default value, as it implies that the product is not repairable.</span>
     *
     * @param float $repairScore
     * @return self
     */
    public function setRepairScore($repairScore)
    {
        $this->repairScore = $repairScore;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * This container provides information about the manufacturer of the item.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all manufacturer information when you revise or relist, specify <b>Item.Regulatory.Manufacturer</b> in <b>DeletedField</b>, and don't pass <b>Manufacturer</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Manufacturer information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require manufacturer-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @return \Nogrod\eBaySDK\Trading\ManufacturerType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * This container provides information about the manufacturer of the item.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all manufacturer information when you revise or relist, specify <b>Item.Regulatory.Manufacturer</b> in <b>DeletedField</b>, and don't pass <b>Manufacturer</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Manufacturer information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require manufacturer-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param \Nogrod\eBaySDK\Trading\ManufacturerType $manufacturer
     * @return self
     */
    public function setManufacturer(\Nogrod\eBaySDK\Trading\ManufacturerType $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as responsiblePerson
     *
     * This container provides information about the EU-based Responsible Persons or entities associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all Responsible Persons information when you revise or relist, specify <b>Item.Regulatory.ResponsiblePersons</b> in <b>DeletedField</b>, and don't pass <b>ResponsiblePersons</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ResponsiblePersonType $responsiblePerson
     */
    public function addToResponsiblePersons(\Nogrod\eBaySDK\Trading\ResponsiblePersonType $responsiblePerson)
    {
        $this->responsiblePersons[] = $responsiblePerson;
        return $this;
    }

    /**
     * isset responsiblePersons
     *
     * This container provides information about the EU-based Responsible Persons or entities associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all Responsible Persons information when you revise or relist, specify <b>Item.Regulatory.ResponsiblePersons</b> in <b>DeletedField</b>, and don't pass <b>ResponsiblePersons</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponsiblePersons($index)
    {
        return isset($this->responsiblePersons[$index]);
    }

    /**
     * unset responsiblePersons
     *
     * This container provides information about the EU-based Responsible Persons or entities associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all Responsible Persons information when you revise or relist, specify <b>Item.Regulatory.ResponsiblePersons</b> in <b>DeletedField</b>, and don't pass <b>ResponsiblePersons</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponsiblePersons($index)
    {
        unset($this->responsiblePersons[$index]);
    }

    /**
     * Gets as responsiblePersons
     *
     * This container provides information about the EU-based Responsible Persons or entities associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all Responsible Persons information when you revise or relist, specify <b>Item.Regulatory.ResponsiblePersons</b> in <b>DeletedField</b>, and don't pass <b>ResponsiblePersons</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @return \Nogrod\eBaySDK\Trading\ResponsiblePersonType[]
     */
    public function getResponsiblePersons()
    {
        return $this->responsiblePersons;
    }

    /**
     * Sets a new responsiblePersons
     *
     * This container provides information about the EU-based Responsible Persons or entities associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> To delete all Responsible Persons information when you revise or relist, specify <b>Item.Regulatory.ResponsiblePersons</b> in <b>DeletedField</b>, and don't pass <b>ResponsiblePersons</b> in the request.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param \Nogrod\eBaySDK\Trading\ResponsiblePersonType[] $responsiblePersons
     * @return self
     */
    public function setResponsiblePersons(array $responsiblePersons)
    {
        $this->responsiblePersons = $responsiblePersons;
        return $this;
    }

    /**
     * Adds as document
     *
     * This container provides a collection of regulatory documents associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> For information on removing one or more files using a Revise/Relist call, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a>
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DocumentType $document
     */
    public function addToDocuments(\Nogrod\eBaySDK\Trading\DocumentType $document)
    {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * isset documents
     *
     * This container provides a collection of regulatory documents associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> For information on removing one or more files using a Revise/Relist call, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a>
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocuments($index)
    {
        return isset($this->documents[$index]);
    }

    /**
     * unset documents
     *
     * This container provides a collection of regulatory documents associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> For information on removing one or more files using a Revise/Relist call, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a>
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocuments($index)
    {
        unset($this->documents[$index]);
    }

    /**
     * Gets as documents
     *
     * This container provides a collection of regulatory documents associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> For information on removing one or more files using a Revise/Relist call, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a>
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @return \Nogrod\eBaySDK\Trading\DocumentType[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * This container provides a collection of regulatory documents associated with the listing.
     *  <br /><br />
     *  <b>For Revise and Relist calls:</b> For information on removing one or more files using a Revise/Relist call, see <a href= "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a>
     *  <br />
     *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     *
     * @param \Nogrod\eBaySDK\Trading\DocumentType[] $documents
     * @return self
     */
    public function setDocuments(array $documents)
    {
        $this->documents = $documents;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEnergyEfficiencyLabel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EnergyEfficiencyLabel", $value);
        }
        $value = $this->getEconomicOperator();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EconomicOperator", $value);
        }
        $value = $this->getHazmat();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hazmat", $value);
        }
        $value = $this->getProductSafety();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductSafety", $value);
        }
        $value = $this->getRepairScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RepairScore", $value);
        }
        $value = $this->getManufacturer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Manufacturer", $value);
        }
        $value = $this->getResponsiblePersons();
        if (null !== $value && !empty($this->getResponsiblePersons())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponsiblePersons", array_map(function ($v) {return ["ResponsiblePerson" => $v];}, $value));
        }
        $value = $this->getDocuments();
        if (null !== $value && !empty($this->getDocuments())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Documents", array_map(function ($v) {return ["Document" => $v];}, $value));
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}EnergyEfficiencyLabel');
        if (null !== $value) {
            $this->setEnergyEfficiencyLabel(\Nogrod\eBaySDK\Trading\EnergyEfficiencyType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}EconomicOperator');
        if (null !== $value) {
            $this->setEconomicOperator(\Nogrod\eBaySDK\Trading\EconomicOperatorType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hazmat');
        if (null !== $value) {
            $this->setHazmat(\Nogrod\eBaySDK\Trading\HazmatType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductSafety');
        if (null !== $value) {
            $this->setProductSafety(\Nogrod\eBaySDK\Trading\ProductSafetyType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RepairScore');
        if (null !== $value) {
            $this->setRepairScore($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Manufacturer');
        if (null !== $value) {
            $this->setManufacturer(\Nogrod\eBaySDK\Trading\ManufacturerType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponsiblePersons');
        if (null !== $value) {
            $this->setResponsiblePersons(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ResponsiblePersonType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}ResponsiblePerson'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Documents');
        if (null !== $value) {
            $this->setDocuments(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\DocumentType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}Document'));}, $value));
        }
    }
}
