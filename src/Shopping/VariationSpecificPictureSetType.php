<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationSpecificPictureSetType
 *
 * Complex type used by the <b>VariationSpecificPictureSet</b> container that is returned for multiple-variation listings, and gives the URL(s) to one or more of the listing's images. Images submitted for multiple-variation listings must be based on the product aspect that is defined in the <b>Variations.Pictures.VariationSpecificName</b> field. This product aspect will often be 'Color', particularly when the listing features similar items available in different colors.
 * XSD Type: VariationSpecificPictureSetType
 */
class VariationSpecificPictureSetType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field shows the corresponding value of the product aspect that is shown in the the <b>Variations.Pictures.VariationSpecificName</b> field. For example, if the <b>Variations.Pictures.VariationSpecificName</b> value is 'Color',
     *  the value in this field will be one of the values that is shown in the <b>Variations.VariationSpecificsSet.NameValueList</b> container. So, if the <b>Name</b> field of that <b>NameValueList</b> container was 'Color', the value in the <b>VariationSpecificPictureSet.VariationSpecificValue</b> would have to be one of the defined colors for the multiple-variation listing.
     *
     * @var string $variationSpecificValue
     */
    private $variationSpecificValue = null;

    /**
     * The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color.
     *  <br/><br/>
     *  The URL(s) can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol.
     *  <br/><br/>
     *  The first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @var string[] $pictureURL
     */
    private $pictureURL = [

    ];

    /**
     * This field is no longer returned. Note that the first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @var string $galleryURL
     */
    private $galleryURL = null;

    /**
     * Gets as variationSpecificValue
     *
     * This field shows the corresponding value of the product aspect that is shown in the the <b>Variations.Pictures.VariationSpecificName</b> field. For example, if the <b>Variations.Pictures.VariationSpecificName</b> value is 'Color',
     *  the value in this field will be one of the values that is shown in the <b>Variations.VariationSpecificsSet.NameValueList</b> container. So, if the <b>Name</b> field of that <b>NameValueList</b> container was 'Color', the value in the <b>VariationSpecificPictureSet.VariationSpecificValue</b> would have to be one of the defined colors for the multiple-variation listing.
     *
     * @return string
     */
    public function getVariationSpecificValue()
    {
        return $this->variationSpecificValue;
    }

    /**
     * Sets a new variationSpecificValue
     *
     * This field shows the corresponding value of the product aspect that is shown in the the <b>Variations.Pictures.VariationSpecificName</b> field. For example, if the <b>Variations.Pictures.VariationSpecificName</b> value is 'Color',
     *  the value in this field will be one of the values that is shown in the <b>Variations.VariationSpecificsSet.NameValueList</b> container. So, if the <b>Name</b> field of that <b>NameValueList</b> container was 'Color', the value in the <b>VariationSpecificPictureSet.VariationSpecificValue</b> would have to be one of the defined colors for the multiple-variation listing.
     *
     * @param string $variationSpecificValue
     * @return self
     */
    public function setVariationSpecificValue($variationSpecificValue)
    {
        $this->variationSpecificValue = $variationSpecificValue;
        return $this;
    }

    /**
     * Adds as pictureURL
     *
     * The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color.
     *  <br/><br/>
     *  The URL(s) can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol.
     *  <br/><br/>
     *  The first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @return self
     * @param string $pictureURL
     */
    public function addToPictureURL($pictureURL)
    {
        $this->pictureURL[] = $pictureURL;
        return $this;
    }

    /**
     * isset pictureURL
     *
     * The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color.
     *  <br/><br/>
     *  The URL(s) can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol.
     *  <br/><br/>
     *  The first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureURL($index)
    {
        return isset($this->pictureURL[$index]);
    }

    /**
     * unset pictureURL
     *
     * The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color.
     *  <br/><br/>
     *  The URL(s) can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol.
     *  <br/><br/>
     *  The first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureURL($index)
    {
        unset($this->pictureURL[$index]);
    }

    /**
     * Gets as pictureURL
     *
     * The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color.
     *  <br/><br/>
     *  The URL(s) can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol.
     *  <br/><br/>
     *  The first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @return string[]
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color.
     *  <br/><br/>
     *  The URL(s) can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol.
     *  <br/><br/>
     *  The first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @param string[] $pictureURL
     * @return self
     */
    public function setPictureURL(array $pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    /**
     * Gets as galleryURL
     *
     * This field is no longer returned. Note that the first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @return string
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }

    /**
     * Sets a new galleryURL
     *
     * This field is no longer returned. Note that the first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     *
     * @param string $galleryURL
     * @return self
     */
    public function setGalleryURL($galleryURL)
    {
        $this->galleryURL = $galleryURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVariationSpecificValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecificValue", $value);
        }
        $value = $this->getPictureURL();
        if (null !== $value && [] !== $this->getPictureURL()) {
            $writer->write(array_map(function ($v) {return ["PictureURL" => $v];}, $value));
        }
        $value = $this->getGalleryURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GalleryURL", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecificValue');
        if (null !== $value) {
            $this->setVariationSpecificValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL', true);
        if (null !== $value) {
            $this->setPictureURL($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}GalleryURL');
        if (null !== $value) {
            $this->setGalleryURL($value);
        }
    }
}
