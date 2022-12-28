<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OfferDiscountsType
 *
 * <b>DO NOT USE THIS TYPE</b>. This type is only for internal or future use.
 * XSD Type: OfferDiscountsType
 */
class OfferDiscountsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $sellerMarketing
     */
    private $sellerMarketing = null;

    /**
     * Gets as sellerMarketing
     *
     * <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getSellerMarketing()
    {
        return $this->sellerMarketing;
    }

    /**
     * Sets a new sellerMarketing
     *
     * <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $sellerMarketing
     * @return self
     */
    public function setSellerMarketing(\Nogrod\eBaySDK\Trading\AmountType $sellerMarketing)
    {
        $this->sellerMarketing = $sellerMarketing;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellerMarketing();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerMarketing", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerMarketing');
        if (null !== $value) {
            $this->setSellerMarketing(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
