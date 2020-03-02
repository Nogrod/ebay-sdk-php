<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CancelOfferType
 *
 * This type is deprecated.
 * XSD Type: CancelOfferType
 */
class CancelOfferType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\OfferType $offer
     */
    private $offer = null;

    /**
     * This field is deprecated.
     *
     * @var string $explanation
     */
    private $explanation = null;

    /**
     * Gets as offer
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\OfferType
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\OfferType $offer
     * @return self
     */
    public function setOffer(\Nogrod\eBaySDK\MerchantData\OfferType $offer)
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * Gets as explanation
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Sets a new explanation
     *
     * This field is deprecated.
     *
     * @param string $explanation
     * @return self
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOffer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Offer", $value);
        }
        $value = $this->getExplanation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Explanation", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Offer');
        if (null !== $value) {
            $this->setOffer(\Nogrod\eBaySDK\MerchantData\OfferType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Explanation');
        if (null !== $value) {
            $this->setExplanation($value);
        }
    }
}
