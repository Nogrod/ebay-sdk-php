<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StatementsType
 *
 * Type defining the <b>Statements</b> regulatory container used at the listing level to provide hazard statements for the listing.
 * XSD Type: StatementsType
 */
class StatementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field sets the statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. A separate Statement field is required for each Hazard statement. The seller specifies the identifier of each statement in this field. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     *
     * @var string[] $statement
     */
    private $statement = [

    ];

    /**
     * Adds as statement
     *
     * This field sets the statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. A separate Statement field is required for each Hazard statement. The seller specifies the identifier of each statement in this field. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
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
     * This field sets the statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. A separate Statement field is required for each Hazard statement. The seller specifies the identifier of each statement in this field. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
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
     * This field sets the statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. A separate Statement field is required for each Hazard statement. The seller specifies the identifier of each statement in this field. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
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
     * This field sets the statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. A separate Statement field is required for each Hazard statement. The seller specifies the identifier of each statement in this field. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
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
     * This field sets the statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. A separate Statement field is required for each Hazard statement. The seller specifies the identifier of each statement in this field. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
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
            $writer->write(array_map(function ($v) {
                return ["Statement" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Statement', true);
        if (null !== $value && !empty($value)) {
            $this->setStatement($value);
        }
    }
}
