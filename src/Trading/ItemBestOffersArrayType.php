<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemBestOffersArrayType
 *
 * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if
 *  the <code>ReturnAll</code> detail level is used.
 * XSD Type: ItemBestOffersArrayType
 */
class ItemBestOffersArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemBestOffersType[] $itemBestOffers
     */
    private $itemBestOffers = [

    ];

    /**
     * Adds as itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemBestOffersType $itemBestOffers
     */
    public function addToItemBestOffers(\Nogrod\eBaySDK\Trading\ItemBestOffersType $itemBestOffers)
    {
        $this->itemBestOffers[] = $itemBestOffers;
        return $this;
    }

    /**
     * isset itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemBestOffers($index)
    {
        return isset($this->itemBestOffers[$index]);
    }

    /**
     * unset itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemBestOffers($index)
    {
        unset($this->itemBestOffers[$index]);
    }

    /**
     * Gets as itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemBestOffersType[]
     */
    public function getItemBestOffers()
    {
        return $this->itemBestOffers;
    }

    /**
     * Sets a new itemBestOffers
     *
     * A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers. Includes the buyer and seller messages only if the <code>ReturnAll</code> detail level is used.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemBestOffersType[] $itemBestOffers
     * @return self
     */
    public function setItemBestOffers(array $itemBestOffers)
    {
        $this->itemBestOffers = $itemBestOffers;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemBestOffers();
        if (null !== $value && !empty($this->getItemBestOffers())) {
            $writer->write(array_map(function ($v) {
                return ["ItemBestOffers" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemBestOffers', true);
        if (null !== $value && !empty($value)) {
            $this->setItemBestOffers(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemBestOffersType::fromKeyValue($v);
            }, $value));
        }
    }
}
