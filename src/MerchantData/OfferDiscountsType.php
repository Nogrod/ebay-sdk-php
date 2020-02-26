<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $sellerMarketing
     */
    private $sellerMarketing = null;

    /**
     * Gets as sellerMarketing
     *
     * <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $sellerMarketing
     * @return self
     */
    public function setSellerMarketing(\Nogrod\eBaySDK\MerchantData\AmountType $sellerMarketing)
    {
        $this->sellerMarketing = $sellerMarketing;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerMarketing');
        if (null !== $value) {
            $this->setSellerMarketing(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
