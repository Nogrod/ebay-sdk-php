<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PicturesType
 *
 * Defines variation-specific pictures associated with one
 *  <b>VariationSpecificName</b> (e.g., Color) whose values differ across variations.
 * XSD Type: PicturesType
 */
class PicturesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * One aspect of the variations that will be illustrated in the
     *  pictures for all variations. For example, if each variation
     *  is visually distinguished by color and the pictures show
     *  the different colors available, then specify "Color" as the name.
     *  The name must match one of the names specified in the
     *  <b>VariationSpecifics</b> container.
     *  <br><br>
     *  This field is required in each <b>Item.Variations.Pictures</b> container that is used.
     *  <br>
     *
     * @var string $variationSpecificName
     */
    private $variationSpecificName = null;

    /**
     * A container consisting of one or more picture URLs associated with a variation
     *  specific value (e.g., color=blue). For example, suppose a listing contains blue
     *  and black color variations, and <b>VariationSpecificName=Color</b>.
     *  In this case, one picture set could contain pictures of the blue shirts (e.g.,
     *  front view, back view, and close-up of a trim detail), and another picture set
     *  could contain pictures of the black shirts.
     *  <br><br>
     *  A variation specific picture set can consist of up to 12 images hosted by eBay
     *  Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures.
     *  The eBay Picture Services and self-hosted images can never
     *  be combined into the same variation specific picture set.
     *  <br><br>
     *  At least one picture set is required if the <b>Pictures</b> node
     *  is present in the request. You are not required to provide pictures
     *  for all values that correspond to the variation specific name.
     *  For example, a listing could have pictures depicting the blue and
     *  black color variations, but not the pink variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply with the <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/pictures.html">Picture Requirements</a>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     */
    private $variationSpecificPictureSet = [

    ];

    /**
     * Gets as variationSpecificName
     *
     * One aspect of the variations that will be illustrated in the
     *  pictures for all variations. For example, if each variation
     *  is visually distinguished by color and the pictures show
     *  the different colors available, then specify "Color" as the name.
     *  The name must match one of the names specified in the
     *  <b>VariationSpecifics</b> container.
     *  <br><br>
     *  This field is required in each <b>Item.Variations.Pictures</b> container that is used.
     *  <br>
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
     * One aspect of the variations that will be illustrated in the
     *  pictures for all variations. For example, if each variation
     *  is visually distinguished by color and the pictures show
     *  the different colors available, then specify "Color" as the name.
     *  The name must match one of the names specified in the
     *  <b>VariationSpecifics</b> container.
     *  <br><br>
     *  This field is required in each <b>Item.Variations.Pictures</b> container that is used.
     *  <br>
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
     * A container consisting of one or more picture URLs associated with a variation
     *  specific value (e.g., color=blue). For example, suppose a listing contains blue
     *  and black color variations, and <b>VariationSpecificName=Color</b>.
     *  In this case, one picture set could contain pictures of the blue shirts (e.g.,
     *  front view, back view, and close-up of a trim detail), and another picture set
     *  could contain pictures of the black shirts.
     *  <br><br>
     *  A variation specific picture set can consist of up to 12 images hosted by eBay
     *  Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures.
     *  The eBay Picture Services and self-hosted images can never
     *  be combined into the same variation specific picture set.
     *  <br><br>
     *  At least one picture set is required if the <b>Pictures</b> node
     *  is present in the request. You are not required to provide pictures
     *  for all values that correspond to the variation specific name.
     *  For example, a listing could have pictures depicting the blue and
     *  black color variations, but not the pink variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply with the <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/pictures.html">Picture Requirements</a>.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VariationSpecificPictureSetType $variationSpecificPictureSet
     */
    public function addToVariationSpecificPictureSet(\Nogrod\eBaySDK\Trading\VariationSpecificPictureSetType $variationSpecificPictureSet)
    {
        if (!is_array($this->variationSpecificPictureSet)) {
            throw new \LogicException('variationSpecificPictureSet is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->variationSpecificPictureSet[] = $variationSpecificPictureSet;
        return $this;
    }

    /**
     * isset variationSpecificPictureSet
     *
     * A container consisting of one or more picture URLs associated with a variation
     *  specific value (e.g., color=blue). For example, suppose a listing contains blue
     *  and black color variations, and <b>VariationSpecificName=Color</b>.
     *  In this case, one picture set could contain pictures of the blue shirts (e.g.,
     *  front view, back view, and close-up of a trim detail), and another picture set
     *  could contain pictures of the black shirts.
     *  <br><br>
     *  A variation specific picture set can consist of up to 12 images hosted by eBay
     *  Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures.
     *  The eBay Picture Services and self-hosted images can never
     *  be combined into the same variation specific picture set.
     *  <br><br>
     *  At least one picture set is required if the <b>Pictures</b> node
     *  is present in the request. You are not required to provide pictures
     *  for all values that correspond to the variation specific name.
     *  For example, a listing could have pictures depicting the blue and
     *  black color variations, but not the pink variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply with the <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/pictures.html">Picture Requirements</a>.
     *  </span>
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
     * A container consisting of one or more picture URLs associated with a variation
     *  specific value (e.g., color=blue). For example, suppose a listing contains blue
     *  and black color variations, and <b>VariationSpecificName=Color</b>.
     *  In this case, one picture set could contain pictures of the blue shirts (e.g.,
     *  front view, back view, and close-up of a trim detail), and another picture set
     *  could contain pictures of the black shirts.
     *  <br><br>
     *  A variation specific picture set can consist of up to 12 images hosted by eBay
     *  Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures.
     *  The eBay Picture Services and self-hosted images can never
     *  be combined into the same variation specific picture set.
     *  <br><br>
     *  At least one picture set is required if the <b>Pictures</b> node
     *  is present in the request. You are not required to provide pictures
     *  for all values that correspond to the variation specific name.
     *  For example, a listing could have pictures depicting the blue and
     *  black color variations, but not the pink variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply with the <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/pictures.html">Picture Requirements</a>.
     *  </span>
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
     * A container consisting of one or more picture URLs associated with a variation
     *  specific value (e.g., color=blue). For example, suppose a listing contains blue
     *  and black color variations, and <b>VariationSpecificName=Color</b>.
     *  In this case, one picture set could contain pictures of the blue shirts (e.g.,
     *  front view, back view, and close-up of a trim detail), and another picture set
     *  could contain pictures of the black shirts.
     *  <br><br>
     *  A variation specific picture set can consist of up to 12 images hosted by eBay
     *  Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures.
     *  The eBay Picture Services and self-hosted images can never
     *  be combined into the same variation specific picture set.
     *  <br><br>
     *  At least one picture set is required if the <b>Pictures</b> node
     *  is present in the request. You are not required to provide pictures
     *  for all values that correspond to the variation specific name.
     *  For example, a listing could have pictures depicting the blue and
     *  black color variations, but not the pink variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply with the <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/pictures.html">Picture Requirements</a>.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\VariationSpecificPictureSetType>
     */
    public function getVariationSpecificPictureSet()
    {
        return $this->variationSpecificPictureSet;
    }

    /**
     * Sets a new variationSpecificPictureSet
     *
     * A container consisting of one or more picture URLs associated with a variation
     *  specific value (e.g., color=blue). For example, suppose a listing contains blue
     *  and black color variations, and <b>VariationSpecificName=Color</b>.
     *  In this case, one picture set could contain pictures of the blue shirts (e.g.,
     *  front view, back view, and close-up of a trim detail), and another picture set
     *  could contain pictures of the black shirts.
     *  <br><br>
     *  A variation specific picture set can consist of up to 12 images hosted by eBay
     *  Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures.
     *  The eBay Picture Services and self-hosted images can never
     *  be combined into the same variation specific picture set.
     *  <br><br>
     *  At least one picture set is required if the <b>Pictures</b> node
     *  is present in the request. You are not required to provide pictures
     *  for all values that correspond to the variation specific name.
     *  For example, a listing could have pictures depicting the blue and
     *  black color variations, but not the pink variations.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  All images must comply with the <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/pictures.html">Picture Requirements</a>.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VariationSpecificPictureSetType> $variationSpecificPictureSet
     * @return self
     */
    public function setVariationSpecificPictureSet(iterable $variationSpecificPictureSet)
    {
        $this->variationSpecificPictureSet = $variationSpecificPictureSet;
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
        $value = $this->variationSpecificName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'VariationSpecificName', null, (string) $value);
        }
        $value = $this->variationSpecificPictureSet;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'VariationSpecificPictureSet', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PicturesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->variationSpecificPictureSet = [];
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
                case 'VariationSpecificName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->variationSpecificName = $value;
                    }
                    return true;
                case 'VariationSpecificPictureSet':
                    $this->variationSpecificPictureSet[] = \Nogrod\eBaySDK\Trading\VariationSpecificPictureSetType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
