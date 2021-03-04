<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PicturesType
 *
 * This type is used to provide picture details for a multiple-variation listing. This type is used by the <b>Variations.Pictures</b> container that is returned for multiple-variation listings when the <b>IncludeSelector</b> field is included in the call request and set to <code>Variations</code>. Typically, in a multiple-variation listing, the seller will provide different photos for each available variation based on one product aspect such as color.
 * XSD Type: PicturesType
 */
class PicturesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field defines the product aspect in which pictures in the listing will vary based on the individual variations. For example, if the product aspect in this field is <code>Color</code>, the picture URLs in each <b>VariationSpecificPictureSet</b> container would point to one or more pictures of the corresponding variation (defined in the <b>VariationSpecificValue</b> field).
     *
     * @var string $variationSpecificName
     */
    private $variationSpecificName = null;

    /**
     * A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing.
     *  Pictures for multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color), but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     *
     * @var \Nogrod\eBaySDK\Shopping\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     */
    private $variationSpecificPictureSet = [
        
    ];

    /**
     * Gets as variationSpecificName
     *
     * This field defines the product aspect in which pictures in the listing will vary based on the individual variations. For example, if the product aspect in this field is <code>Color</code>, the picture URLs in each <b>VariationSpecificPictureSet</b> container would point to one or more pictures of the corresponding variation (defined in the <b>VariationSpecificValue</b> field).
     *
     * @return string
     */
    public function getVariationSpecificName()
    {
        return $this->variationSpecificName;
    }

    /**
     * Sets a new variationSpecificName
     *
     * This field defines the product aspect in which pictures in the listing will vary based on the individual variations. For example, if the product aspect in this field is <code>Color</code>, the picture URLs in each <b>VariationSpecificPictureSet</b> container would point to one or more pictures of the corresponding variation (defined in the <b>VariationSpecificValue</b> field).
     *
     * @param string $variationSpecificName
     * @return self
     */
    public function setVariationSpecificName($variationSpecificName)
    {
        $this->variationSpecificName = $variationSpecificName;
        return $this;
    }

    /**
     * Adds as variationSpecificPictureSet
     *
     * A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing.
     *  Pictures for multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color), but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\VariationSpecificPictureSetType $variationSpecificPictureSet
     */
    public function addToVariationSpecificPictureSet(\Nogrod\eBaySDK\Shopping\VariationSpecificPictureSetType $variationSpecificPictureSet)
    {
        $this->variationSpecificPictureSet[] = $variationSpecificPictureSet;
        return $this;
    }

    /**
     * isset variationSpecificPictureSet
     *
     * A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing.
     *  Pictures for multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color), but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecificPictureSet($index)
    {
        return isset($this->variationSpecificPictureSet[$index]);
    }

    /**
     * unset variationSpecificPictureSet
     *
     * A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing.
     *  Pictures for multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color), but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecificPictureSet($index)
    {
        unset($this->variationSpecificPictureSet[$index]);
    }

    /**
     * Gets as variationSpecificPictureSet
     *
     * A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing.
     *  Pictures for multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color), but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     *
     * @return \Nogrod\eBaySDK\Shopping\VariationSpecificPictureSetType[]
     */
    public function getVariationSpecificPictureSet()
    {
        return $this->variationSpecificPictureSet;
    }

    /**
     * Sets a new variationSpecificPictureSet
     *
     * A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing.
     *  Pictures for multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color), but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     *
     * @param \Nogrod\eBaySDK\Shopping\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @return self
     */
    public function setVariationSpecificPictureSet(array $variationSpecificPictureSet)
    {
        $this->variationSpecificPictureSet = $variationSpecificPictureSet;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVariationSpecificName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecificName", $value);
        }
        $value = $this->getVariationSpecificPictureSet();
        if (null !== $value && !empty($this->getVariationSpecificPictureSet())) {
            $writer->write(array_map(function ($v) {
                return ["VariationSpecificPictureSet" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecificName');
        if (null !== $value) {
            $this->setVariationSpecificName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecificPictureSet', true);
        if (null !== $value && !empty($value)) {
            $this->setVariationSpecificPictureSet(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\VariationSpecificPictureSetType::fromKeyValue($v);
            }, $value));
        }
    }
}
