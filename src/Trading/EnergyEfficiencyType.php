<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EnergyEfficiencyType
 *
 * Type defining the <b>ImageURL</b>, <b>ImageDescription</b>, and <b>ProductInformationsheet</b> regulatory fields that are used at the listing level to provide Energy Efficiency Label related information.<br><span class="tablenote"><b>Important: </b> When providing energy efficiency information on an appliance or smartphones and tablets listing, the energy efficiency <b>rating</b> and <b>range</b> of the item must be specified through the <a href = "/devzone/xml/docs/reference/ebay/additem.html#Request.Item.ItemSpecifics" target="_blank">ItemSpecifics</a> container. Use the <a href = "/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory" target="_blank">getItemAspectsForCategory</a> method of the Taxonomy API to retrieve applicable rating and range values for a specified category.</span>
 * XSD Type: EnergyEfficiencyType
 */
class EnergyEfficiencyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The URL to the Energy Efficiency Label image that is applicable to an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture Services (EPS) URL only. You can upload pictures to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     *
     * @var string $imageURL
     */
    private $imageURL = null;

    /**
     * A brief verbal summary of the information included on the Energy Efficiency Label for an item.<br />For example, <em>On a scale of A to G the rating is E</em>.<br />As with all strings, you need to escape reserved characters such as ampersand. This field is required if an Energy Efficiency Label is provided.
     *
     * @var string $imageDescription
     */
    private $imageDescription = null;

    /**
     * The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture Services (EPS) URL only. You can upload pictures to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     *
     * @var string $productInformationsheet
     */
    private $productInformationsheet = null;

    /**
     * Gets as imageURL
     *
     * The URL to the Energy Efficiency Label image that is applicable to an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture Services (EPS) URL only. You can upload pictures to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     *
     * @return string
     */
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * Sets a new imageURL
     *
     * The URL to the Energy Efficiency Label image that is applicable to an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture Services (EPS) URL only. You can upload pictures to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     *
     * @param string $imageURL
     * @return self
     */
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;
        return $this;
    }

    /**
     * Gets as imageDescription
     *
     * A brief verbal summary of the information included on the Energy Efficiency Label for an item.<br />For example, <em>On a scale of A to G the rating is E</em>.<br />As with all strings, you need to escape reserved characters such as ampersand. This field is required if an Energy Efficiency Label is provided.
     *
     * @return string
     */
    public function getImageDescription()
    {
        return $this->imageDescription;
    }

    /**
     * Sets a new imageDescription
     *
     * A brief verbal summary of the information included on the Energy Efficiency Label for an item.<br />For example, <em>On a scale of A to G the rating is E</em>.<br />As with all strings, you need to escape reserved characters such as ampersand. This field is required if an Energy Efficiency Label is provided.
     *
     * @param string $imageDescription
     * @return self
     */
    public function setImageDescription($imageDescription)
    {
        $this->imageDescription = $imageDescription;
        return $this;
    }

    /**
     * Gets as productInformationsheet
     *
     * The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture Services (EPS) URL only. You can upload pictures to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     *
     * @return string
     */
    public function getProductInformationsheet()
    {
        return $this->productInformationsheet;
    }

    /**
     * Sets a new productInformationsheet
     *
     * The URL to the Product Information Sheet that provides complete manufacturer-provided efficiency information about an item. This field is required if an Energy Efficiency Label is provided. The URL provided must be an eBay Picture Services (EPS) URL only. You can upload pictures to eBay Picture Services via the <strong>UploadSiteHostedPictures</strong> call.
     *
     * @param string $productInformationsheet
     * @return self
     */
    public function setProductInformationsheet($productInformationsheet)
    {
        $this->productInformationsheet = $productInformationsheet;
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
        $value = $this->imageURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ImageURL', null, (string) $value);
        }
        $value = $this->imageDescription;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ImageDescription', null, (string) $value);
        }
        $value = $this->productInformationsheet;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ProductInformationsheet', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\EnergyEfficiencyType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'ImageURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->imageURL = $value;
                    }
                    return true;
                case 'ImageDescription':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->imageDescription = $value;
                    }
                    return true;
                case 'ProductInformationsheet':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->productInformationsheet = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ImageURL'] = $this->imageURL;
        $data['ImageDescription'] = $this->imageDescription;
        $data['ProductInformationsheet'] = $this->productInformationsheet;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
