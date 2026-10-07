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
        if (!is_array($this->statement)) {
            throw new \LogicException('statement is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
     * @param iterable<string> $statement
     * @return self
     */
    public function setStatement(iterable $statement)
    {
        $this->statement = $statement;
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
        $value = $this->statement;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'Statement', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\StatementsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->statement = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Statement':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->statement[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
