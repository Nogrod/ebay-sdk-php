<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EnergyEfficiencyType
 *
 * Type defining the <b>ImageURL</b>, <b>ImageDescription</b>, and <b>ProductInformationsheet</b> regulatory fields that are used at the listing level to provide Energy Efficiency Label related information.<br>
 * XSD Type: EnergyEfficiencyType
 */
class EnergyEfficiencyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getImageURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImageURL", $value);
        }
        $value = $this->getImageDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ImageDescription", $value);
        }
        $value = $this->getProductInformationsheet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductInformationsheet", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\EnergyEfficiencyType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImageURL');
        if (null !== $value) {
            $this->setImageURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ImageDescription');
        if (null !== $value) {
            $this->setImageDescription($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductInformationsheet');
        if (null !== $value) {
            $this->setProductInformationsheet($value);
        }
    }
}
