<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddFixedPriceItemRequestType
 *
 * This call allows a seller to create and publish a fixed-price listing.
 *  The main difference between <b>AddFixedPriceItem</b> and <b>AddItem</b> is that
 *  <b>AddFixedPriceItem</b> supports the creation of fixed-price listings only,
 *  whereas <b>AddItem</b> supports all listing formats.
 *  <br>
 *  <br>
 *  Also, only <b>AddFixedPriceItem</b> supports multiple-variation listings
 *  and tracking inventory by a seller-defined SKU value. <b>AddItem</b> does not support
 *  Variations or the <b>InventoryTrackingMethod</b> field.
 * XSD Type: AddFixedPriceItemRequestType
 */
class AddFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * This container is used to specify all of the values and settings that define a new fixed-price listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemType $item
     */
    private $item = null;

    /**
     * Gets as item
     *
     * This container is used to specify all of the values and settings that define a new fixed-price listing.
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
     * This container is used to specify all of the values and settings that define a new fixed-price listing.
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\MerchantData\ItemType::fromKeyValue($value));
        }
    }
}
