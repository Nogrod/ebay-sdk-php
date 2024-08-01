<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing HazmatType
 *
 * Type defining the <b>Pictograms</b> and <b>Statements</b> containers, and the <b>Component</b> and <b>SignalWord</b> fields, that provide hazardous material related information. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
 * XSD Type: HazmatType
 */
class HazmatType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     *
     * @var string[] $pictograms
     */
    private $pictograms = null;

    /**
     * This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. This field is required if hazmat information is supplied. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     *
     * @var string $signalWord
     */
    private $signalWord = null;

    /**
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     *
     * @var string[] $statements
     */
    private $statements = null;

    /**
     * This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
     *
     * @var string $component
     */
    private $component = null;

    /**
     * Adds as pictogram
     *
     * This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     *
     * @return self
     * @param string $pictogram
     */
    public function addToPictograms($pictogram)
    {
        $this->pictograms[] = $pictogram;
        return $this;
    }

    /**
     * isset pictograms
     *
     * This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictograms($index)
    {
        return isset($this->pictograms[$index]);
    }

    /**
     * unset pictograms
     *
     * This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictograms($index)
    {
        unset($this->pictograms[$index]);
    }

    /**
     * Gets as pictograms
     *
     * This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     *
     * @return string[]
     */
    public function getPictograms()
    {
        return $this->pictograms;
    }

    /**
     * Sets a new pictograms
     *
     * This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     *
     * @param string[] $pictograms
     * @return self
     */
    public function setPictograms(array $pictograms)
    {
        $this->pictograms = $pictograms;
        return $this;
    }

    /**
     * Gets as signalWord
     *
     * This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. This field is required if hazmat information is supplied. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     *
     * @return string
     */
    public function getSignalWord()
    {
        return $this->signalWord;
    }

    /**
     * Sets a new signalWord
     *
     * This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. This field is required if hazmat information is supplied. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     *
     * @param string $signalWord
     * @return self
     */
    public function setSignalWord($signalWord)
    {
        $this->signalWord = $signalWord;
        return $this;
    }

    /**
     * Adds as statement
     *
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     *
     * @return self
     * @param string $statement
     */
    public function addToStatements($statement)
    {
        $this->statements[] = $statement;
        return $this;
    }

    /**
     * isset statements
     *
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatements($index)
    {
        return isset($this->statements[$index]);
    }

    /**
     * unset statements
     *
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatements($index)
    {
        unset($this->statements[$index]);
    }

    /**
     * Gets as statements
     *
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     *
     * @return string[]
     */
    public function getStatements()
    {
        return $this->statements;
    }

    /**
     * Sets a new statements
     *
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     *
     * @param string[] $statements
     * @return self
     */
    public function setStatements(array $statements)
    {
        $this->statements = $statements;
        return $this;
    }

    /**
     * Gets as component
     *
     * This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
     *
     * @return string
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
     *
     * @param string $component
     * @return self
     */
    public function setComponent($component)
    {
        $this->component = $component;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPictograms();
        if (null !== $value && !empty($this->getPictograms())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pictograms", array_map(function ($v) {return ["Pictogram" => $v];}, $value));
        }
        $value = $this->getSignalWord();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SignalWord", $value);
        }
        $value = $this->getStatements();
        if (null !== $value && !empty($this->getStatements())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Statements", array_map(function ($v) {return ["Statement" => $v];}, $value));
        }
        $value = $this->getComponent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Component", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pictograms', true);
        if (null !== $value && !empty($value)) {
            $this->setPictograms($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SignalWord');
        if (null !== $value) {
            $this->setSignalWord($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Statements', true);
        if (null !== $value && !empty($value)) {
            $this->setStatements($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Component');
        if (null !== $value) {
            $this->setComponent($value);
        }
    }
}
