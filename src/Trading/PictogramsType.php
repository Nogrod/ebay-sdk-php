<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictogramsType
 *
 * Type defining the <b>Pictogram</b> container used at the listing level to provide pictograms for the listing.
 * XSD Type: PictogramsType
 */
class PictogramsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field sets the pictogram code(s) for Hazard Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard pictogram. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *
     * @var string[] $pictogram
     */
    private $pictogram = [

    ];

    /**
     * Adds as pictogram
     *
     * This field sets the pictogram code(s) for Hazard Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard pictogram. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *
     * @return self
     * @param string $pictogram
     */
    public function addToPictogram($pictogram)
    {
        $this->pictogram[] = $pictogram;
        return $this;
    }

    /**
     * isset pictogram
     *
     * This field sets the pictogram code(s) for Hazard Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard pictogram. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictogram($index)
    {
        return isset($this->pictogram[$index]);
    }

    /**
     * unset pictogram
     *
     * This field sets the pictogram code(s) for Hazard Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard pictogram. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictogram($index)
    {
        unset($this->pictogram[$index]);
    }

    /**
     * Gets as pictogram
     *
     * This field sets the pictogram code(s) for Hazard Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard pictogram. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *
     * @return string[]
     */
    public function getPictogram()
    {
        return $this->pictogram;
    }

    /**
     * Sets a new pictogram
     *
     * This field sets the pictogram code(s) for Hazard Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard pictogram. <span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *
     * @param string[] $pictogram
     * @return self
     */
    public function setPictogram(array $pictogram)
    {
        $this->pictogram = $pictogram;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPictogram();
        if (null !== $value && !empty($this->getPictogram())) {
            $writer->write(array_map(function ($v) {return ["Pictogram" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pictogram', true);
        if (null !== $value && !empty($value)) {
            $this->setPictogram($value);
        }
    }
}
