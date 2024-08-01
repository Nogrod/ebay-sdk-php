<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StatementsType
 *
 * Type defining the <b>Statements</b> regulatory container used at the listing level to provide statements for the listing.
 * XSD Type: StatementsType
 */
class StatementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field sets the statement code(s) for hazard or product safety statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. A separate Statement field is required for each hazard or product safety statement. The seller specifies the identifier of each statement in this field.
     *  <span class="tablenote"><strong>Note:</strong> For hazmat statements, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     *  <br> <br>
     *  For product safety statements, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
     *
     * @var string[] $statement
     */
    private $statement = [

    ];

    /**
     * Adds as statement
     *
     * This field sets the statement code(s) for hazard or product safety statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. A separate Statement field is required for each hazard or product safety statement. The seller specifies the identifier of each statement in this field.
     *  <span class="tablenote"><strong>Note:</strong> For hazmat statements, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     *  <br> <br>
     *  For product safety statements, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
     *
     * @return self
     * @param string $statement
     */
    public function addToStatement($statement)
    {
        $this->statement[] = $statement;
        return $this;
    }

    /**
     * isset statement
     *
     * This field sets the statement code(s) for hazard or product safety statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. A separate Statement field is required for each hazard or product safety statement. The seller specifies the identifier of each statement in this field.
     *  <span class="tablenote"><strong>Note:</strong> For hazmat statements, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     *  <br> <br>
     *  For product safety statements, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatement($index)
    {
        return isset($this->statement[$index]);
    }

    /**
     * unset statement
     *
     * This field sets the statement code(s) for hazard or product safety statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. A separate Statement field is required for each hazard or product safety statement. The seller specifies the identifier of each statement in this field.
     *  <span class="tablenote"><strong>Note:</strong> For hazmat statements, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     *  <br> <br>
     *  For product safety statements, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatement($index)
    {
        unset($this->statement[$index]);
    }

    /**
     * Gets as statement
     *
     * This field sets the statement code(s) for hazard or product safety statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. A separate Statement field is required for each hazard or product safety statement. The seller specifies the identifier of each statement in this field.
     *  <span class="tablenote"><strong>Note:</strong> For hazmat statements, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     *  <br> <br>
     *  For product safety statements, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
     *
     * @return string[]
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * Sets a new statement
     *
     * This field sets the statement code(s) for hazard or product safety statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. A separate Statement field is required for each hazard or product safety statement. The seller specifies the identifier of each statement in this field.
     *  <span class="tablenote"><strong>Note:</strong> For hazmat statements, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     *  <br> <br>
     *  For product safety statements, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
     *
     * @param string[] $statement
     * @return self
     */
    public function setStatement(array $statement)
    {
        $this->statement = $statement;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStatement();
        if (null !== $value && !empty($this->getStatement())) {
            $writer->write(array_map(function ($v) {return ["Statement" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Statement', true);
        if (null !== $value && !empty($value)) {
            $this->setStatement($value);
        }
    }
}
