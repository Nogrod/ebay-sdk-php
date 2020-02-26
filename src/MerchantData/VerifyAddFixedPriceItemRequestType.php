<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing VerifyAddFixedPriceItemRequestType
 *
 * Enables a seller to test the definition of a new fixed-price listing by
 *  submitting the definition to eBay without creating an actual listing.
 * XSD Type: VerifyAddFixedPriceItemRequestType
 */
class VerifyAddFixedPriceItemRequestType extends AbstractRequestType
{

    /**
     * Root container holding all values that define a new
     *  fixed-price listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemType $item
     */
    private $item = null;

    /**
     * Gets as item
     *
     * Root container holding all values that define a new
     *  fixed-price listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Root container holding all values that define a new
     *  fixed-price listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\MerchantData\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\MerchantData\ItemType::fromKeyValue($value));
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
