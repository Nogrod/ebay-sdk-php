<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RegulatoryType
 *
 * <span class="tablenote"><b>Note: </b> This type is currently available only on the German (DE) marketplace. The <b>RepairScore</b> field is provided for future use (not presently available). </span>
 *  <br />Type defining the <b>EnergyEfficiencyLabel</b>, <b>Hazmat</b>, and <b>RepairScore</b> regulatory containers that are used at the listing level to provide Energy Efficiency Label information, hazardous material related information, and the repair score.
 * XSD Type: RegulatoryType
 */
class RegulatoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container provides information about the energy efficiency for certain durable goods.<br />
     *  <span class="tablenote"><b>Note: </b> As a part of Digital Services Act (DSA) requirements, all sellers who list products in Germany (DE) must provide Energy Efficiency Label information and Product Information Sheets for listings for certain durable goods.</span>
     *
     * @var \Nogrod\eBaySDK\Trading\EnergyEfficiencyType $energyEfficiencyLabel
     */
    private $energyEfficiencyLabel = null;

    /**
     * This container is used by the seller to provide hazardous material information for the listing. Three elements are required to complete the Hazmat section of a listing: <b>Pictograms</b>, <b>SignalWord</b>, and <b>Statements</b>. The fourth element, <b>Component</b>, is optional. For more information, see <a href=" /api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html" target="_blank">Specifying hazardous material related information</a>.
     *
     * @var \Nogrod\eBaySDK\Trading\HazmatType $hazmat
     */
    private $hazmat = null;

    /**
     * This field represents the repair index for the listing.<br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product). This field is a floating point value between 0 and 10 but may only have one digit beyond the decimal point, for example: <code>7.9</code><br>
     *
     * @var float $repairScore
     */
    private $repairScore = null;

    /**
     * Gets as energyEfficiencyLabel
     *
     * This container provides information about the energy efficiency for certain durable goods.<br />
     *  <span class="tablenote"><b>Note: </b> As a part of Digital Services Act (DSA) requirements, all sellers who list products in Germany (DE) must provide Energy Efficiency Label information and Product Information Sheets for listings for certain durable goods.</span>
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
     * Gets as hazmat
     *
     * This container is used by the seller to provide hazardous material information for the listing. Three elements are required to complete the Hazmat section of a listing: <b>Pictograms</b>, <b>SignalWord</b>, and <b>Statements</b>. The fourth element, <b>Component</b>, is optional. For more information, see <a href=" /api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html" target="_blank">Specifying hazardous material related information</a>.
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
     * Gets as repairScore
     *
     * This field represents the repair index for the listing.<br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product). This field is a floating point value between 0 and 10 but may only have one digit beyond the decimal point, for example: <code>7.9</code><br>
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
     * This field represents the repair index for the listing.<br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product). This field is a floating point value between 0 and 10 but may only have one digit beyond the decimal point, for example: <code>7.9</code><br>
     *
     * @param float $repairScore
     * @return self
     */
    public function setRepairScore($repairScore)
    {
        $this->repairScore = $repairScore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEnergyEfficiencyLabel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EnergyEfficiencyLabel", $value);
        }
        $value = $this->getHazmat();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Hazmat", $value);
        }
        $value = $this->getRepairScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RepairScore", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EnergyEfficiencyLabel');
        if (null !== $value) {
            $this->setEnergyEfficiencyLabel(\Nogrod\eBaySDK\Trading\EnergyEfficiencyType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Hazmat');
        if (null !== $value) {
            $this->setHazmat(\Nogrod\eBaySDK\Trading\HazmatType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RepairScore');
        if (null !== $value) {
            $this->setRepairScore($value);
        }
    }
}
