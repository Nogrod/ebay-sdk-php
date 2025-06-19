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
     * This field sets the pictogram code(s) for Hazard and product safety Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard or product safety pictogram.
     *  <span class="tablenote"><strong>Note:</strong> For Hazard pictograms, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *  <br> <br>
     *  For product safety pictograms, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
     *
     * @var string[] $pictogram
     */
    private $pictogram = [

    ];

    /**
     * Adds as pictogram
     *
     * This field sets the pictogram code(s) for Hazard and product safety Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard or product safety pictogram.
     *  <span class="tablenote"><strong>Note:</strong> For Hazard pictograms, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *  <br> <br>
     *  For product safety pictograms, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
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
     * This field sets the pictogram code(s) for Hazard and product safety Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard or product safety pictogram.
     *  <span class="tablenote"><strong>Note:</strong> For Hazard pictograms, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *  <br> <br>
     *  For product safety pictograms, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
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
     * This field sets the pictogram code(s) for Hazard and product safety Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard or product safety pictogram.
     *  <span class="tablenote"><strong>Note:</strong> For Hazard pictograms, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *  <br> <br>
     *  For product safety pictograms, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
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
     * This field sets the pictogram code(s) for Hazard and product safety Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard or product safety pictogram.
     *  <span class="tablenote"><strong>Note:</strong> For Hazard pictograms, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *  <br> <br>
     *  For product safety pictograms, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
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
     * This field sets the pictogram code(s) for Hazard and product safety Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard or product safety pictogram.
     *  <span class="tablenote"><strong>Note:</strong> For Hazard pictograms, use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     *  <br> <br>
     *  For product safety pictograms, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels" target="_blank">getProductSafetyLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site.</span>
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
        if (null !== $value && [] !== $this->getPictogram()) {
            $writer->write(array_map(function ($v) {return ["Pictogram" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PictogramsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pictogram', true);
        if (null !== $value) {
            $this->setPictogram($value);
        }
    }
}
